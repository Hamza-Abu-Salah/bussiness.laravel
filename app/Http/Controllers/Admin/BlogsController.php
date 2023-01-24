<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Admin;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BlogsController extends Controller
{
    public function index()
    {
        $data = Blog::select("*")->orderby('id', 'DESc')->paginate(10);
        if (!empty($data)) {
            foreach ($data as $info) {
                $info->added_by_name = Admin::where('id', $info->added_by)->value('name');
                if ($info->updated_by > 0 and $info->updated_by != null) {
                    $info->updated_by_admin = Admin::where('id', $info->updated_by)->value('name');
                }
            }
        }
        return view('admin.blog.index', compact('data'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(BlogRequest $request)
    {
        try {

            $checkExists_name = Blog::where(['title1'=>$request->title1])->select('id')->orderby('id', 'DESC')->first();
            if (!empty($checkExists_name)) {
                return redirect()->back()->with(['error' => 'عفوا اسم  مسجل من قبل'])->withInput();
            }

            $img = $request->file('image');
            $img_name = rand().time().$img->getClientOriginalName();
            $img->move(public_path('uploads/blog'), $img_name);

            $data_insert['title1'] = $request->title1;
            $data_insert['content'] = $request->content;
            $data_insert['active'] = $request->active;
            $data_insert['image'] = $img_name;
            $data_insert['added_by'] = auth()->user()->id;
            $data_insert['created_at'] = date("Y-m-d H:i:s");

            $info = Blog::create($data_insert);

            return redirect()->route('admin.blogs.index')->with(['success' => 'لقد تم اضافة البيانات بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'عفوا حدث خطأ ما' . $ex->getMessage()]);
        }
    }
    public function edit($id)
    {
        $data = Blog::select("*")->where(['id' => $id])->first();
        return view('admin.blog.edit',compact('data'));

    }

    public function update($id,BlogRequest $request)
    {
        try {

            $data = Blog::select('id')->orderby('id', 'DESC')->first();
            if (empty($data)) {
                return redirect()->route('admin.blogs.index')->with(['error' => 'عفوا غير قادر علي الوصول الي البيانات المطلوبة !!']);
            }
            $checkExists_name = Blog::where('id', '!=', $id)->first();
            if ($checkExists_name != null) {
                return redirect()->back()->with(['error' => 'عفوا اسم الحساب مسجل من قبل'])->withInput();
            }

            $img_name = $data->image;
            if($request->hasFile('image')) {
                File::delete(public_path('uploads/blog/'.$data->image));
                $img = $request->file('image');
                $img_name = rand(). time().$img->getClientOriginalName();
                $img->move(public_path('uploads/blog'), $img_name);
            }
            $data_update['title'] = $request->title;
            $data_update['text'] = $request->text;
            $data_update['title1'] = $request->title1;
            $data_update['content'] = $request->content;
            $data_update['active'] = $request->active;
            $data_update['image'] = $img_name;
            $data_update['updated_by'] = auth()->user()->id;
            $data_update['updated_at'] = date("Y-m-d H:i:s");

            $info = Blog::where(['id'=>$id])->update($data_update);

            return redirect()->route('admin.blogs.index')->with(['success' => 'لقد تم اضافة البيانات بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'عفوا حدث خطأ ما' . $ex->getMessage()]);
        }
    }

    public function delete($id)
    {
        try{
            $data = Blog::findOrFail($id);

            File::delete(public_path('uploads/blog/'.$data->image));

            $data->delete();

            return redirect()->route('admin.blogs.index')->with('msg', 'Product deleted successfully')->with('type', 'danger');

        }catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'عفوا حدث خطأ ما' . $ex->getMessage()]);
        }
    }
}
