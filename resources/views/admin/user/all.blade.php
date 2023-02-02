@extends('layouts.admin')
@section('content')

<div class="row">
 <div class="col-md-12">
   <div class="card">
     <div class="card-header">
       <div class="row">
         <div class="col-md-8 card_header_title">
           All user Information
          </div>
          <div class="col-md-4 card_btn_part">
            <a href="{{url('admin/user/add')}}" class="btn btn-sm btn-dark">Add user</a>
          </div>
       </div>
     </div>
     <div class="card-body">
       <table class="table table-bordered table striped table-hover custom_table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Phone</th>
          <th scope="col">Email</th>
          <th scope="col">Role</th>
          <th scope="col">Photo</th>
          <th scope="col">Mange</th>
        </tr>
      </thead>
      <tbody>
        @foreach($allUser as $data)
        <tr>
          <td>{{$data->name}}</td>
          <td>---</td>
          <td>{{$data->email}}</td>
          <td>--</td>
          <td>--</td>

          <td>
            <a ><i class="fa fa-plus-square fa-lg view_icon"></i></a>
             <a ><i class="fa fa-pencil-square fa-lg edit_icon"></i></a>
            <a ><i class="fa fa-trash fa-lg delete_icon"></i></a>
          </td>
        </tr>
        @endforeach

      </tbody>
    </table>
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
