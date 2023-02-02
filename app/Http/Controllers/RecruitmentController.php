<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Recuitmodel;
use Carbon\Carbon;
use Session;

class RecruitmentController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
      }

      public function index(){
        $allData=Recuitmodel::where('role_status',1)->orderBy('rcuit_name','ASC')->get();

        return view('admin.recruitment.category.all',compact('allData'));

      }

      public function add(){
        return view ('admin.recruitment.category.add');
      }
      public function edit($slug){
        $data=Recuitmodel::where('role_status',1)->where('rcuit_slug',$slug)->firstOrFail();
             return view('admin.recruitment.category.edit',compact('data'));

     }

      public function view($slug){
        $data=Recuitmodel::where('role_status',1)->where('rcuit_slug',$slug)->firstOrFail();
             return view('admin.recruitment.category.view',compact('data'));

      }
    public function insert(Request $request){
        $this->validate($request,[
            'name'=>'required|min:3|max:50',
          ],[
            'name.required'=>'Please enter Employee  name!',
          ]);


        $slug = Str::of($request['name'])->slug('-');
        $insert =Recuitmodel::insert([
            'rcuit_name'=>$request->name,
            'rcuit_remarks'=>$request->remarks,

            'rcuit_fathername'=>$request->fathername,
            'rcuit_mothername'=>$request->mothername,
            'skills'=>$request->skills,
            'bscyear'=>$request->bscyear,
            'bsccgpa'=>$request->bsccgpa,
            'sscyear'=>$request->sscyear,
            'ssccgpa'=>$request->ssccgpa,
            'hscyear'=>$request->hscyear,
            'hsccgpa'=>$request->hsccgpa,
            'mscyear'=>$request->mscyear,
            'msccgpa'=>$request->msccgpa,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'experience'=>$request-> experience,
            'rcuit_slug'=>$slug,
            'created_at'=>Carbon::now()->toDateTimeString()

        ]);

   if($insert){
    Session::flash('success','recruitment category update successfully!');
    return redirect('admin/recruitment/category/add');
  }else {
    Session::flash('error','your operation failed!');
    return redirect('admin/recruitment/category/add');

  }


    }

    public function update(Request $request){
        $this->validate($request,[
            'name'=>'required|min:3|max:50',
        ],[
            'name.required'=>'Please enter income category name!',
        ]);

        $id =$request->id;
        $slug =$request->slug;
        $update=Recuitmodel::where('role_status',1)->where('recuit_id',$id)->update([
            'rcuit_name'=>$request->name,
            'rcuit_remarks'=>$request->remarks,

            'rcuit_fathername'=>$request->fathername,
            'rcuit_mothername'=>$request->mothername,
            'skills'=>$request->skills,
            'bscyear'=>$request->bscyear,
            'bsccgpa'=>$request->bsccgpa,
            'sscyear'=>$request->sscyear,
            'ssccgpa'=>$request->ssccgpa,
            'hscyear'=>$request->hscyear,
            'hsccgpa'=>$request->hsccgpa,
            'mscyear'=>$request->mscyear,
            'msccgpa'=>$request->msccgpa,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'experience'=>$request-> experience,
           'updated_at'=>Carbon::now()->toDateTimeString()
        ]);

        if($update){
          Session::flash('success',' updated successfully!');
          return redirect('admin/recruitment/category/view/'.$slug);
        }else{
          Session::flash('error','your operation failed!');
          return redirect('admin/recruitment/category/edit/'.$slug);
        }
    }




      public function softdelete($slug){
        $softdel=Recuitmodel::where('role_status',1)->where('rcuit_slug',$slug)->update([
            'role_status'=>0,
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($softdel){
          return redirect('admin/recruitment/category');
        }else{
          return redirect('admin//category');
        }
    }

}
