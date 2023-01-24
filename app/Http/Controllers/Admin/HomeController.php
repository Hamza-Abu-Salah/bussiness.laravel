<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HomeRequest;
use App\Models\Admin;
use App\Models\Home;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = Home::select("*")->orderby('id', 'DESc')->paginate(10);
        if (!empty($data)) {
            foreach ($data as $info) {
                $info->added_by_name = Admin::where('id', $info->added_by)->value('name');
                if ($info->updated_by > 0 and $info->updated_by != null) {
                    $info->updated_by_admin = Admin::where('id', $info->updated_by)->value('name');
                }
            }
        }
        return view('admin.home.index', compact('data'));
    }

    public function create()
    {
        return view('admin.home.create');
    }

    public function store(HomeRequest $request)
    {
        try {

            $checkExists_name = Home::select('id')->where(['title' => $request->title])->orderby('id', 'DESC')->first();
            if (!empty($checkExists_name)) {
                return redirect()->back()->with(['error' => 'عفوا اسم  مسجل من قبل'])->withInput();
            }

            $img = $request->file('image');
            $img_name = rand().time().$img->getClientOriginalName();
            $img->move(public_path('uploads/home'), $img_name);

            $data_insert['title'] = $request->title;
            $data_insert['text'] = $request->text;
            $data_insert['phones'] = $request->phones;
            $data_insert['content'] = $request->content;
            $data_insert['btn_link'] = $request->btn_link;
            $data_insert['btn_text'] = $request->btn_text;
            $data_insert['active'] = $request->active;
            $data_insert['image'] = $img_name;
            $data_insert['added_by'] = auth()->user()->id;
            $data_insert['created_at'] = date("Y-m-d H:i:s");

            $info = Home::create($data_insert);

            return redirect()->route('admin.home.index')->with(['success' => 'لقد تم اضافة البيانات بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'عفوا حدث خطأ ما' . $ex->getMessage()]);
        }
    }
    public function edit($id)
    {
        $data = Home::select("*")->where(['id' => $id])->first();
        return view('admin.home.edit',compact('data'));

    }

    public function update($id,HomeRequest $request)
    {
        try {

            $data = Home::select('id')->where(['title' => $request->title])->orderby('id', 'DESC')->first();
            if (empty($data)) {
                return redirect()->route('admin.home.index')->with(['error' => 'عفوا غير قادر علي الوصول الي البيانات المطلوبة !!']);
            }
            $checkExists_name = Home::where(['title' => $request->title])->where('id', '!=', $id)->first();
            if ($checkExists_name != null) {
                return redirect()->back()->with(['error' => 'عفوا اسم الحساب مسجل من قبل'])->withInput();
            }

            $img_name = $data->image;
            if($request->hasFile('image')) {
                File::delete(public_path('uploads/home/'.$data->image));
                $img = $request->file('image');
                $img_name = rand(). time().$img->getClientOriginalName();
                $img->move(public_path('uploads/home'), $img_name);
            }
            $data_update['title'] = $request->title;
            $data_update['text'] = $request->text;
            $data_update['phones'] = $request->phones;
            $data_update['content'] = $request->content;
            $data_update['btn_link'] = $request->btn_link;
            $data_update['btn_text'] = $request->btn_text;
            $data_update['active'] = $request->active;
            $data_update['image'] = $img_name;
            $data_update['updated_by'] = auth()->user()->id;
            $data_update['updated_at'] = date("Y-m-d H:i:s");

            $info = Home::where(['id'=>$id])->update($data_update);

            return redirect()->route('admin.home.index')->with(['success' => 'لقد تم اضافة البيانات بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'عفوا حدث خطأ ما' . $ex->getMessage()]);
        }
    }

    public function delete($id)
    {
        try{
            $data = home::findOrFail($id);

            File::delete(public_path('uploads/home/'.$data->image));

            $data->delete();

            return redirect()->route('admin.home.index')->with('msg', 'Product deleted successfully')->with('type', 'danger');

        }catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'عفوا حدث خطأ ما' . $ex->getMessage()]);
        }
    }
}
