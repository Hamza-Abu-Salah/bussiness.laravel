<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingsRequest;
use App\Models\Admin;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SettingsController extends Controller
{
    public function index()
    {
        $data = Settings::select("*")->orderby('id', 'DESc')->paginate(10);
        if (!empty($data)) {
            foreach ($data as $info) {
                $info->added_by_name = Admin::where('id', $info->added_by)->value('name');
                if ($info->updated_by > 0 and $info->updated_by != null) {
                    $info->updated_by_admin = Admin::where('id', $info->updated_by)->value('name');
                }
            }
        }
        return view('admin.Settings.index', compact('data'));
    }
    public function create()
    {
        return view('admin.Settings.create');
    }

    public function store(SettingsRequest $request)
    {
        try {

            $checkExists_name = Settings::select('id')->orderby('id', 'DESC')->first();
            if (!empty($checkExists_name)) {
                return redirect()->back()->with(['error' => 'عفوا اسم  مسجل من قبل'])->withInput();
            }

            $img_header = $request->file('logo_header');
            $img_name_header = rand().time().$img_header->getClientOriginalName();
            $img_header->move(public_path('uploads/settings'), $img_name_header);

            $img_footer = $request->file('logo_footer');
            $img_name_footer = rand().time().$img_footer->getClientOriginalName();
            $img_footer->move(public_path('uploads/settings'), $img_name_footer);

            $data_insert['btn_Services'] = $request->btn_Services;
            $data_insert['title_service'] = $request->title_service;
            $data_insert['text_service'] = $request->text_service;
            $data_insert['title_blogs'] = $request->title_blogs;
            $data_insert['text_blogs'] = $request->text_blogs;
            $data_insert['btn_blogs'] = $request->btn_blogs;
            $data_insert['phones'] = $request->phones;
            $data_insert['email'] = $request->email;
            $data_insert['logo_header'] = $img_name_header;
            $data_insert['logo_footer'] = $img_name_footer;
            $data_insert['date'] = date("Y-m-d");
            $data_insert['hour'] = $request->hour;
            $data_insert['from_the_hour'] = $request->from_the_hour;
            $data_insert['to_the_hour'] =$request->to_the_hour;
            $data_insert['address'] = $request->address;
            $data_insert['active'] = $request->active;
            $data_insert['added_by'] = auth()->user()->id;
            $data_insert['created_at'] = date("Y-m-d H:i:s");

            $info = Settings::create($data_insert);

            return redirect()->route('admin.settings.index')->with(['success' => 'لقد تم اضافة البيانات بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'عفوا حدث خطأ ما' . $ex->getMessage()]);
        }
    }
    public function edit($id)
    {
        $data = Settings::select("*")->where(['id' => $id])->first();
        return view('admin.Settings.edit',compact('data'));

    }

    public function update($id,SettingsRequest $request)
    {
        try {

            $data = Settings::select('id')->orderby('id', 'DESC')->first();
            if (empty($data)) {
                return redirect()->route('admin.services.index')->with(['error' => 'عفوا غير قادر علي الوصول الي البيانات المطلوبة !!']);
            }
            $checkExists_name = Settings::where('id', '!=', $id)->first();
            if ($checkExists_name != null) {
                return redirect()->back()->with(['error' => 'عفوا اسم الحساب مسجل من قبل'])->withInput();
            }

            $img_name_header = $data->logo_header;
            if($request->hasFile('logo_header')) {
                File::delete(public_path('uploads/settings/'.$data->logo_header));
                $img = $request->file('logo_header');
                $img_name_header = rand(). time().$img->getClientOriginalName();
                $img->move(public_path('uploads/settings'), $img_name_header);
            }

            $img_name_footer = $data->logo_footer;
            if($request->hasFile('logo_footer')) {
                File::delete(public_path('uploads/settings/'.$data->logo_footer));
                $img = $request->file('logo_footer');
                $img_name_footer = rand(). time().$img->getClientOriginalName();
                $img->move(public_path('uploads/settings'), $img_name_footer);
            }

            $data_update['btn_Services'] = $request->btn_Services;
            $data_update['btn_blogs'] = $request->btn_blogs;
            $data_update['title_service'] = $request->title_service;
            $data_update['text_service'] = $request->text_service;
            $data_update['title_blogs'] = $request->title_blogs;
            $data_update['text_blogs'] = $request->text_blogs;
            $data_update['phones'] = $request->phones;
            $data_update['email'] = $request->email;
            $data_update['logo_header'] = $img_name_header;
            $data_update['logo_footer'] = $img_name_footer;
            $data_update['date'] = date("Y-m-d");
            $data_update['hour'] = $request->hour;
            $data_update['from_the_hour'] = $request->from_the_hour;
            $data_update['to_the_hour'] =$request->to_the_hour;
            $data_update['address'] = $request->address;
            $data_update['active'] = $request->active;
            $data_update['added_by'] = auth()->user()->id;
            $data_update['created_at'] = date("Y-m-d H:i:s");

            $info = Settings::where(['id'=>$id])->update($data_update);

            return redirect()->route('admin.settings.index')->with(['success' => 'لقد تم اضافة البيانات بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'عفوا حدث خطأ ما' . $ex->getMessage()]);
        }
    }

    public function delete($id)
    {
        try{
            $data = Settings::findOrFail($id);

            File::delete(public_path('uploads/services/'.$data->logo_header));
            File::delete(public_path('uploads/services/'.$data->logo_footer));

            $data->delete();

            return redirect()->route('admin.services.index')->with('msg', 'Product deleted successfully')->with('type', 'danger');

        }catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'عفوا حدث خطأ ما' . $ex->getMessage()]);
        }
    }
}
