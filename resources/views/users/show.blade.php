@extends('layouts.app') 
@section('content')
<div class="container-fluid"> 
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Employee </h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item ">Employee</li>
                <li class="breadcrumb-item active">New</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->

        <div class="card card-green">
            <div class="card-header">
    
              <h3 class="card-title">
                <i class="fas fa-user-circle"></i>
                New Employee
              </h3>
              <div class="card-tools"  >
                <div class="input-group input-group-sm "  >
                  <a href="{{ url()->previous(); }}" class="btn bg-gray btn-sm" title="Go Back" data-toggle="tooltip"> <i class="fa fa-arrow"></i> Back</a>
                </div>
              </div>
            </div>
 
 
              <form role="form" method="POST" action="{{ route('employee.store') }}" enctype="multipart/form-data">

                @csrf 
                @method('POST')
                <div class="card-body">

                 <div class="form-group row">
                     <label  class="col-sm-4" for="first_name">First name</label>
                     <div class="col-sm-8">
                     {{  $employee->first_name }}

                           @error('first_name')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
                   @enderror
                     </div>
                   </div>


                   <div class="form-group row">
                    <label  class="col-sm-4" for="last_name">First name</label>
                    <div class="col-sm-8">
                      {{ $employee->last_name }}

                          @error('first_name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                    </div>
                  </div>

                   <div class="form-group row">
                     <label  class="col-sm-4" for="nic">NIC</label>
                     <div class="col-sm-4">
                      {{ $employee->nic }}
                   @error('nic')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
                   @enderror
                     </div>
                   </div>

                   <div class="form-group row">
                     <label  class="col-sm-4" for="phone">Phone </label>
                     <div class="col-sm-4">
                      {{ $employee->phone }}
                   @error('phone')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
                   @enderror
                     </div>
                   </div>

                   <div class="form-group row">
                    <label  class="col-sm-4" for="employee_number">Employee Number </label>
                    <div class="col-sm-4">
                  {{ $employee->employee_number }}
                  @error('employee_number')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-4" for="epf_number">EPF Number </label>
                    <div class="col-sm-4">
                  {{ $employee->epf_number }}
                  @error('epf_number')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-4" for="address">Address </label>
                    <div class="col-sm-8">
                      {{ $employee->address }}
                  @error('address')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                    </div>
                  </div>


                </div>
                <div class="card-footer">
                    
                </div>
            </form>

            </div> 

</div> 
@endsection
@section('third_party_stylesheets')  
 
@stop
@section('third_party_scripts') 
 
@stop 
