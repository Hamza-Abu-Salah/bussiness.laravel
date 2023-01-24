<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Models\About;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    public function index()
    {
        $data = About::select("*")->orderby('id', 'DESc')->paginate(10);
        if (!empty($data)) {
            foreach ($data as $info) {
                $info->added_by_name = Admin::where('id', $info->added_by)->value('name');
                if ($info->updated_by > 0 and $info->updated_by != null) {
                    $info->updated_by_admin = Admin::where('id', $info->updated_by)->value('name');
                }
            }
        }
        return view('admin.about.index', compact('data'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(AboutRequest $request)
    {
        try {

            $checkExists_name = About::select('id')->where(['title' => $request->title])->orderby('id', 'DESC')->first();
            if (!empty($checkExists_name)) {
                return redirect()->back()->with(['error' => 'عفوا اسم  مسجل من قبل'])->withInput();
            }

            $img = $request->file('image');
            $img_name = rand().time().$img->getClientOriginalName();
            $img->move(public_path('uploads/about'), $img_name);

            $data_insert['title'] = $request->title;
            $data_insert['content1'] = $request->content1;
            $data_insert['content2'] = $request->content2;
            $data_insert['content3'] = $request->content3;
            $data_insert['active'] = $request->active;
            $data_insert['image'] = $img_name;
            $data_insert['added_by'] = auth()->user()->id;
            $data_insert['created_at'] = date("Y-m-d H:i:s");

            $info = About::create($data_insert);

            return redirect()->route('admin.about.index')->with(['success' => 'لقد تم اضافة البيانات بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'عفوا حدث خطأ ما' . $ex->getMessage()]);
        }
    }
    public function edit($id)
    {
        $data = About::select("*")->where(['id' => $id])->first();
        return view('admin.about.edit',compact('data'));

    }

    public function update($id,AboutRequest $request)
    {
        try {

            $data = About::select('id')->where(['title' => $request->title])->orderby('id', 'DESC')->first();
            if (empty($data)) {
                return redirect()->route('admin.about.index')->with(['error' => 'عفوا غير قادر علي الوصول الي البيانات المطلوبة !!']);
            }
            $checkExists_name = About::where(['title' => $request->title])->where('id', '!=', $id)->first();
            if ($checkExists_name != null) {
                return redirect()->back()->with(['error' => 'عفوا اسم الحساب مسجل من قبل'])->withInput();
            }

            $img_name = $data->image;
            if($request->hasFile('image')) {
                File::delete(public_path('uploads/about/'.$data->image));
                $img = $request->file('image');
                $img_name = rand(). time().$img->getClientOriginalName();
                $img->move(public_path('uploads/about'), $img_name);
            }
            $data_update['title'] = $request->title;
            $data_update['content1'] = $request->content1;
            $data_update['content2'] = $request->content2;
            $data_update['content3'] = $request->content3;
            $data_update['active'] = $request->active;
            $data_update['image'] = $img_name;
            $data_update['added_by'] = auth()->user()->id;
            $data_update['created_at'] = date("Y-m-d H:i:s");

            $info = About::where(['id'=>$id])->update($data_update);

            return redirect()->route('admin.about.index')->with(['success' => 'لقد تم اضافة البيانات بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'عفوا حدث خطأ ما' . $ex->getMessage()]);
        }
    }

    public function delete($id)
    {
        try{
            $data = About::findOrFail($id);

            File::delete(public_path('uploads/about/'.$data->image));

            $data->delete();

            return redirect()->route('admin.about.index')->with('msg', 'تم حدف البيانات بنجاح')->with('type', 'danger');

        }catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'عفوا حدث خطأ ما' . $ex->getMessage()]);
        }
    }
}
