<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use App\Models\Admin;
use App\Models\Content ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ContactController extends Controller
{

    public function index()
    {
        $data = Content::select("*")->orderby('id', 'DESC')->paginate(10);

        return view('admin.content.index', compact('data'));
    }






    public function delete($id)
    {
        try{
            $data = Content::findOrFail($id);

            $data->delete();

            return redirect()->route('admin.content.index')->with('msg', 'Product deleted successfully')->with('type', 'danger');

        }catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'عفوا حدث خطأ ما' . $ex->getMessage()]);
        }
    }
    public function store(StoreRequest $request)
    {
        try {

            $data = Content::select('id')->orderby('id', 'DESC')->first();
            if (!empty($data)) {
                return redirect()->back()->with(['error' => 'عفوا اسم  مسجل من قبل'])->withInput();
            }

            $data_insert['name'] = $request->name;
            $data_insert['email'] = $request->email;
            $data_insert['phone'] = $request->phone;
            $data_insert['subject'] = $request->subject;
            $data_insert['text'] = $request->text;
            $data_insert['created_at'] = date("Y-m-d H:i:s");


            $info = Content::create($data_insert);

            return redirect()->route('web.index')->with(['success' => 'لقد تم اضافة البيانات بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'عفوا حدث خطأ ما' . $ex->getMessage()]);
        }
    }

}
