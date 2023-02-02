@extends('layouts.admin')
@section('content')

<div class="row">
 <div class="col-md-12">
   <form method="post" action="{{url('/admin/recruitment/category/submit')}}">
     @csrf
   <div class="card">
     <div class="card-header">
       <div class="row">
         <div class="col-md-8 card_header_title">
           Add Employees Information
          </div>
          <div class="col-md-4 card_btn_part">
            <a href="{{url('/admin/recruitment/category')}}" class="btn btn-sm btn-dark">All Emplyoees Information</a>

          </div>

       </div>

     </div>
     <div class="card-body">
       @if(Session::has('success'))
               <script>
                 swal({ title: "Success!", text: "Recruitment successfully!", icon: "success", timer: 5000});
               </script>
             @endif
             @if(Session::has('error'))
               <script>
                 swal({ title: "Opps!", text: "your operation failed!", icon: "error", timer: 50});
               </script>
             @endif
       <div class="form-group row {{$errors->has('name') ? ' has-error':''}} ">
    <label class="col-sm-3 col-form-label custom_form_label">Employee Name:<span class="req_star">*</span></label>
    <div class="col-sm-7 custom_form_control">
      <input type="text" class="form-control" name="name" value="{{old('name')}}">
      @if ($errors->has('name'))
      <span class="error">{{ $errors->first('name') }}</span>
        @endif
    </div>

  </div>

  </div>
  <div class="form-group row {{$errors->has('name') ? ' has-error':''}} ">
    <label class="col-sm-3 col-form-label custom_form_label">Father Name:<span class="req_star">*</span></label>
    <div class="col-sm-7 custom_form_control">
      <input type="text" class="form-control" name="fathername" value="{{old('name')}}">
      @if ($errors->has('fathername'))
      <span class="error">{{ $errors->first('fathername') }}</span>
        @endif
    </div>

  </div>
  <div class="form-group row {{$errors->has('name') ? ' has-error':''}} ">
    <label class="col-sm-3 col-form-label custom_form_label">Mother Name:<span class="req_star">*</span></label>
    <div class="col-sm-7 custom_form_control">
      <input type="text" class="form-control" name="mothername" value="{{old('name')}}">
      @if ($errors->has('mothername'))
      <span class="error">{{ $errors->first('mothername') }}</span>
        @endif
    </div>

  </div>
  <div class="form-group row {{$errors->has('name') ? ' has-error':''}} ">
    <label class="col-sm-3 col-form-label custom_form_label">Skills:<span class="req_star">*</span></label>
    <div class="col-sm-7 custom_form_control">
      <input type="text" class="form-control" name="skills" value="{{old('name')}}">
      @if ($errors->has('skills'))
      <span class="error">{{ $errors->first('skills') }}</span>
        @endif
    </div>

  </div>

  <div class="form-group row {{$errors->has('name') ? ' has-error':''}} ">
    <label class="col-sm-2 col-form-label custom_form_label">Bsc Passing Year:<span class="req_star">*</span></label>
    <div class="col-sm-2 custom_form_control">
      <input type="text" class="form-control" name="bscyear" value="{{old('bscyear')}}">
      @if ($errors->has('bscyear'))
      <span class="error">{{ $errors->first('bscyear') }}</span>
        @endif
    </div>
    <div class="col-sm-2 custom_form_control">
      <input type="text" class="form-control"  placeholder="CGPA" name="bsccgpa" value="{{old('bsccgpa')}}">
      @if ($errors->has('bsccgpa'))
      <span class="error">{{ $errors->first('bsccgpa') }}</span>
        @endif
    </div>
    <label class="col-sm-2 col-form-label custom_form_label">SSC Passing Year:<span class="req_star">*</span></label>
    <div class="col-sm-2 custom_form_control">
      <input type="text" class="form-control" name="sscyear" value="{{old('sscyear')}}">
      @if ($errors->has('sscyear'))
      <span class="error">{{ $errors->first('sscyear') }}</span>
        @endif
    </div>
    <div class="col-sm-2 custom_form_control">
      <input type="text" class="form-control"  placeholder="CGPA" name="ssccgpa" value="{{old('ssccgpa')}}">
      @if ($errors->has('ssccgpa'))
      <span class="error">{{ $errors->first('ssccgpa') }}</span>
        @endif
    </div>

  </div>
  <div class="form-group row {{$errors->has('name') ? ' has-error':''}} ">
    <label class="col-sm-2 col-form-label custom_form_label">HSC Passing Year:<span class="req_star">*</span></label>
    <div class="col-sm-2 custom_form_control">
      <input type="text" class="form-control" name="hscyear" value="{{old('hscyear')}}">
      @if ($errors->has('hscyear'))
      <span class="error">{{ $errors->first('hscyear') }}</span>
        @endif
    </div>
    <div class="col-sm-2 custom_form_control">
      <input type="text" class="form-control"  placeholder="CGPA" name="hsccgpa" value="{{old('hsccgpa')}}">

    </div>
    <label class="col-sm-2 col-form-label custom_form_label">Msc Passing Year:</label>
    <div class="col-sm-2 custom_form_control">
      <input type="text" class="form-control" name="mscyear" value="{{old('mscyear')}}">

    </div>
    <div class="col-sm-2 custom_form_control">
      <input type="text" class="form-control"  placeholder="CGPA" name="msccgpa" value="{{old('msccgpa')}}">

    </div>

  </div>

  <div class="form-group row {{$errors->has('name') ? ' has-error':''}} ">
    <label class="col-sm-2 col-form-label custom_form_label">Email:<span class="req_star">*</span></label>
    <div class="col-sm-4 custom_form_control">
      <input type="text" class="form-control" name="email" value="{{old('email')}}">
      @if ($errors->has('email'))
      <span class="error">{{ $errors->first('email') }}</span>
        @endif
    </div>

    <label class="col-sm-2 col-form-label custom_form_label">Phone Number:<span class="req_star">*</span></label>
    <div class="col-sm-4 custom_form_control">
      <input type="text" class="form-control" name="phone" value="{{old('phone')}}">
      @if ($errors->has('phone'))
      <span class="error">{{ $errors->first('phone') }}</span>
        @endif
    </div>


  </div>

  <div class="form-group row">
<label class="col-sm-3 col-form-label custom_form_label">Experience:</label>
<div class="col-sm-7 custom_form_control">
 <input type="text" class="form-control" name="experience" value="{{old('Experience')}}">
</div>
</div>


  <div class="form-group row">
<label class="col-sm-3 col-form-label custom_form_label">Address:</label>
<div class="col-sm-7 custom_form_control">
 <input type="text" class="form-control" name="address" value="{{old('address')}}">
</div>
</div>

  <div class="form-group row">
<label class="col-sm-3 col-form-label custom_form_label">Remarks:</label>
<div class="col-sm-7 custom_form_control">
 <input type="text" class="form-control" name="remarks" value="{{old('remarks')}}">
</div>
</div>
     </div>
     <div class="card-footer text-center">
      <button type="submit" class="btn btn-md btn-success">Submit</button>

     </div>
   </div>
 </form>
 </div>

</div>
@endsection
