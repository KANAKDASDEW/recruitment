@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-sm-6 col-md-3">
    <div class="card card-stats card-round">
      <div class="card-body ">
        <div class="row align-items-center">
          <div class="col-icon">
            <div class="icon-big text-center icon-primary bubble-shadow-small">
              <i class="fa fa-users"></i>
            </div>
          </div>
          <div class="col col-stats ml-3 ml-sm-0">
          @php
                $totalUser=App\Models\User::count();
            @endphp
            <div class="numbers">
              <p class="card-category">Users</p>
              <h4 class="card-title">
              @if($totalUser < 10)
                  0{{$totalUser}}
                @else
                  {{$totalUser}}
                @endif

              </h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="card card-stats card-round">
      <div class="card-body">
        <div class="row align-items-center">
          <div class="col-icon">
            <div class="icon-big text-center icon-info bubble-shadow-small">
              <i class="fa fa-credit-card-alt"></i>
            </div>
          </div>
          <div class="col col-stats ml-3 ml-sm-0">

            <div class="numbers">
              <p class="card-category">Total Employee</p>
              <h4 class="card-title"></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="card card-stats card-round">
      <div class="card-body">
        <div class="row align-items-center">
          <div class="col-icon">
            <div class="icon-big text-center icon-secondary bubble-shadow-small">
              <i class="fa fa-credit-card-alt"></i>
            </div>
          </div>
          <div class="col col-stats ml-3 ml-sm-0">

            <div class="numbers">
              <p class="card-category">Employee Catagory</p>
              <h4 class="card-title"></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="card card-stats card-round">
      <div class="card-body">
        <div class="row align-items-center">
          <div class="col-icon">
            <div class="icon-big text-center icon-success bubble-shadow-small">
              <i class="fa fa-credit-card-alt"></i>
            </div>
          </div>
          <div class="col col-stats ml-3 ml-sm-0">

            <div class="numbers">
              <p class="card-category">Total Employee</p>
              <h4 class="card-title"></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-header">
              <div class="row">
                  <div class="col-md-8 card_header_title">
                      Last 7 Days Summary
                  </div>
                  <div class="col-md-4 card_btn_part">
                      <a href="{{url('/admin/recruitment/category')}}" class="btn btn-sm btn-dark">All Employee List</a>
                      <a href="{{url('/admin/recruitment/category')}}" class="btn btn-sm btn-dark">All Employee Information</a>
                      <a href="{{url('')}}" class="btn btn-sm btn-dark">Summary</a>
                  </div>
              </div>
          </div>



          <div class="card-body">
            <table id="allTableDesc" class="table table-bordered table-striped table-hover custom_table">
              <thead class="thead-dark">
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Manage</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
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
    <form method="post" action="{{url('admin/income/softdelete')}}">
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

<div class="row">


</div>



@endsection
