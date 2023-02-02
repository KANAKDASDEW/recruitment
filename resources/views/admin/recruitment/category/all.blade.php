@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-header">
              <div class="row">
                  <div class="col-md-8 card_header_title">
                      All Employees Information

                  </div>
                  <div class="col-md-4 card_btn_part">
                      <a href="{{url('/admin/recruitment/category/add')}}" class="btn btn-sm btn-dark">Add Employees Information</a>
                  </div>
              </div>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-striped table-hover custom_table">
              <thead class="thead-dark">
                <tr>
                  <th>Employee Name</th>
                  <th>Employee Skills</th>
                  <th>Experience</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Bsc Passing Year & CGPA</th>


                  <th>Employee Address</th>
                  <th>Remarks</th>
                  <th>Created Time</th>
                  <th>Manage</th>
                </tr>
              </thead>
              <tbody>
                @foreach($allData as $data)
                <tr>
                  <td>{{$data->rcuit_name}}</td>
                  <td>{{$data->skills}}</td>
                  <td>{{$data->experience}}</td>
                  <td>{{$data->email}} </span></td>
                  <td>{{$data->phone}} </span></td>
                  <td>{{$data->bscyear}} | <span> {{$data->bsccgpa}} </span></td>
                  <td>{{$data->address}}</td>
                  <td>{{$data->rcuit_remarks}}</td>
                  <td>{{$data->created_at}}</td>
                  <td>
                      <a href="{{url('admin/recruitment/category/view/'.$data->rcuit_slug)}}"><i class="fa fa-plus-square fa-lg view_icon"></i></a>
                      <a href="{{url('admin/recruitment/category/edit/'.$data->rcuit_slug)}}"><i class="fa fa-pencil-square fa-lg edit_icon"></i></a>
                      <a href="{{url('admin/recruitment/category/softdelete/'.$data->rcuit_slug)}}"><i class="fa fa-trash fa-lg delete_icon"></i></a>
                  </td>
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

<!-- softdelete modal code start -->
<div class="modal fade" id="softDeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="post" action="{{url('admin/income/category/softdelete')}}">
      @csrf
      <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-gg-circle"></i> Confirm Message</h5>
      </div>
      <div class="modal-body modal_body">
        Are you want to sure delete data?
        <input type="hidden" name="modal_id" id="modal_id">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-dark">Confirm</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div>
    </form>
  </div>
</div>
@endsection
