<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Helpers\Cmf;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Support\Facades\Hash;
use App\Models\frequesntlyaskquestions;
use App\Models\frequesntlyaskquest_categories;
use Mail;
use Auth;
class CmsController extends Controller
{
    public function homepageshow()
    {
    	return view('admin.pages.homepage');
    }
     public function supervisashow()
    {
        return view('admin.pages.supervisa');
    }

    public function faqcategories()
    {
        $data = frequesntlyaskquest_categories::all();
        return view('admin.faq.categories')->with(array('data'=>$data));
    }
    public function addnewfaqcategory(Request $request)
    {
        $add = new frequesntlyaskquest_categories();
        $add->name = $request->name;
        $add->icon = Cmf::sendimagetodirectory($request->icon);
        $add->status = 'Published';
        $add->save();
        return redirect()->back()->with('message', 'Category Added Successfully');
    }
    public function updatfaqcategory(Request $request)
    {
        $add = frequesntlyaskquest_categories::find($request->id);
        $add->name = $request->name;
        if($request->icon)
        {
            $add->icon = Cmf::sendimagetodirectory($request->icon);
        }
        $add->status = $request->status;
        $add->order = $request->order;
        $add->save();
        return redirect()->back()->with('message', 'Category Updated Successfully');
    }
    public function deletefaqcategory($id)
    {
        frequesntlyaskquestions::where('category_id' , $id)->delete();
        frequesntlyaskquest_categories::where('id' , $id)->delete();
        return redirect()->back()->with('warning', 'Category Deleted Successfully');
    }

    public function allfaq()
    {
        $data = frequesntlyaskquestions::all();
        $categories = frequesntlyaskquest_categories::all();
        return view('admin.faq.allfaq')->with(array('data'=>$data,'categories'=>$categories));
    }
    public function addnewfaq(Request $request)
    {
        $add = new frequesntlyaskquestions();
        $add->category_id = $request->category_id;
        $add->question = $request->question;
        $add->answer = $request->answer;
        $add->save();
        return redirect()->back()->with('message', 'FAQ Added Successfully');
    }
    public function updatfaq(Request $request)
    {
        $add = frequesntlyaskquestions::find($request->id);
        $add->category_id = $request->category_id;
        $add->question = $request->question;
        $add->answer = $request->answer;
        $add->order = $request->order;
        $add->save();
        return redirect()->back()->with('message', 'FAQ Updated Successfully');
    }
    public function deletefaq($id)
    {
        frequesntlyaskquestions::where('id' , $id)->delete();
        return redirect()->back()->with('warning', 'FAQ Deleted Successfully');
    }
}
