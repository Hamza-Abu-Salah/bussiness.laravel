<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServicesRequest;
use App\Models\Admin;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServicesController extends Controller
{
    public function index()
    {
        $data = Services::select("*")->orderby('id', 'DESc')->paginate(10);
        if (!empty($data)) {
            foreach ($data as $info) {
                $info->added_by_name = Admin::where('id', $info->added_by)->value('name');
                if ($info->updated_by > 0 and $info->updated_by != null) {
                    $info->updated_by_admin = Admin::where('id', $info->updated_by)->value('name');
                }
            }
        }
        return view('admin.Services.index', compact('data'));
    }

    public function create()
    {
        return view('admin.Services.create');
    }

    public function store(ServicesRequest $request)
    {
        try {

            $checkExists_name = Services::where(['icon'=>$request->icon])->select('id')->orderby('id', 'DESC')->first();
            if (!empty($checkExists_name)) {
                return redirect()->back()->with(['error' => 'عفوا اسم  مسجل من قبل'])->withInput();
            }

            $data_insert['name'] = $request->name;
            $data_insert['content'] = $request->content;
            $data_insert['icon'] = $request->icon;
            $data_insert['active'] = $request->active;
            $data_insert['added_by'] = auth()->user()->id;
            $data_insert['created_at'] = date("Y-m-d H:i:s");

            $info = Services::create($data_insert);

            return redirect()->route('admin.services.index')->with(['success' => 'لقد تم اضافة البيانات بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'عفوا حدث خطأ ما' . $ex->getMessage()]);
        }
    }
    public function edit($id)
    {
        $data = Services::select("*")->where(['id' => $id])->first();
        return view('admin.Services.edit',compact('data'));

    }

    public function update($id,ServicesRequest $request)
    {
        try {

            $data = Services::select('id')->orderby('id', 'DESC')->first();
            if (empty($data)) {
                return redirect()->route('admin.services.index')->with(['error' => 'عفوا غير قادر علي الوصول الي البيانات المطلوبة !!']);
            }
            $checkExists_name = Services::where('id', '!=', $id)->first();
            if ($checkExists_name != null) {
                return redirect()->back()->with(['error' => 'عفوا اسم الحساب مسجل من قبل'])->withInput();
            }

            $img_name = $data->image;
            if($request->hasFile('image')) {
                File::delete(public_path('uploads/services/'.$data->image));
                $img = $request->file('image');
                $img_name = rand(). time().$img->getClientOriginalName();
                $img->move(public_path('uploads/services'), $img_name);
            }
            $data_update['name'] = $request->name;
            $data_update['content'] = $request->content;
            $data_update['icon'] = $request->icon;
            $data_update['active'] = $request->active;
            $data_update['updated_by'] = auth()->user()->id;
            $data_update['updated_at'] = date("Y-m-d H:i:s");

            $info = Services::where(['id'=>$id])->update($data_update);

            return redirect()->route('admin.services.index')->with(['success' => 'لقد تم اضافة البيانات بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'عفوا حدث خطأ ما' . $ex->getMessage()]);
        }
    }

    public function delete($id)
    {
        try{
            $data = Services::findOrFail($id);

            File::delete(public_path('uploads/services/'.$data->image));

            $data->delete();

            return redirect()->route('admin.services.index')->with('msg', 'Product deleted successfully')->with('type', 'danger');

        }catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'عفوا حدث خطأ ما' . $ex->getMessage()]);
        }
    }
}
