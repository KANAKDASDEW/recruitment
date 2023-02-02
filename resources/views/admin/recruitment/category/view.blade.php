@extends('layouts.admin')
@section('content')

<div class="row">

 <div class="col-md-12">
   <div class="card">
     <div class="card-header">
       <div class="row">
         <div class="col-md-8 card_header_title">
           View recruitment  Information
          </div>
          <div class="col-md-4 card_btn_part">
            <a href="{{url('admin/recruitment/category/add')}}" class="btn btn-sm btn-dark">All Employees Information</a>

          </div>

       </div>

     </div>
     <div class="card-body">
       @if(Session::has('success'))
               <script>
                 swal({ title: "Success!", text: "{{Session::get('success')}}", icon: "success", timer: 5000});
               </script>
             @endif
       <div class="row">
         <div class="col-md-2"></div>
         <div class="col-md-8">
           <table class="table table-bordered table-striped table-hover custom_view_table">
           <tr>
               <td>Employee Name</td>
                <td>:</td>
                <td>{{$data->rcuit_name}}</td>
             </tr>
             <tr>
               <td>Employee Email</td>
                <td>:</td>
                <td>{{$data->email}}</td>
             </tr>
             <tr>
               <td>Employee Phone</td>
                <td>:</td>
                <td>{{$data->phone}}</td>
             </tr>
             <tr>
               <td>Employee Skills</td>
                <td>:</td>
                <td>{{$data->skills}}</td>
             </tr>
             <tr>
               <td>Experience</td>
                <td>:</td>
                <td>{{$data->experience}}</td>
             </tr>
             <tr>
               <td>Bsc Passing Year & CGPA</td>
                <td>:</td>
                <td>{{$data->bscyear}}</td>
             </tr>
             <tr>
               <td>Employee Address</td>
                <td>:</td>
                <td>{{$data->address}}</td>
             </tr>
             <tr>
               <td>Category Remarks</td>
                <td>:</td>
                <td>{{$data->rcuit_remarks}}</td>
             </tr>
             <tr>
               <td>Create Time</td>
                <td>:</td>
                <td>{{$data->created_at}}</td>


             </tr>
           </table>
         </div>
         <div class="col-md-2"></div>

       </div>

     </div>
     <div class="card-footer">
      <a href="#" class="btn btn-sm btn-info">Print</a>
      <a href="#" class="btn btn-sm btn-dark">PDF</a>
      <a href="#" class="btn btn-sm btn-success">Excel</a>

     </div>
   </div>

 </div>

</div>
@endsection
