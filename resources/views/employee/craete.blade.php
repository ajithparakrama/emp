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
                      <input type="text" name="first_name" class="form-control   @error('first_name') is-invalid @enderror" id="first_name" placeholder="First Name" value="{{ old('first_name') }}">

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
                     <input type="text" name="last_name" class="form-control   @error('last_name') is-invalid @enderror" id="last_name" placeholder="Last Name" value="{{ old('last_name') }}">

                          @error('last_name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                    </div>
                  </div>

                   <div class="form-group row">
                     <label  class="col-sm-4" for="nic">NIC</label>
                     <div class="col-sm-4">
                     <input type="text" name="nic" class="form-control   @error('nic') is-invalid @enderror" id="nic" placeholder="" value="{{ old('nic') }}">
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
                     <input type="text" name="phone" class="form-control   @error('phone') is-invalid @enderror" id="phone" placeholder="07X XXX XXXX" value="{{ old('phone') }}">
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
                    <input type="text" name="employee_number" class="form-control   @error('employee_number') is-invalid @enderror" id="employee_number" placeholder=" XXX XXXX" value="{{ old('employee_number') }}">
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
                    <input type="text" name="epf_number" class="form-control   @error('epf_number') is-invalid @enderror" id="epf_number" placeholder="XXXX" value="{{ old('epf_number') }}">
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
                    <textarea name="address" id="address" class="form-control @error('address') is-invalid @enderror"" cols="2" rows="2">{{ old('address') }}</textarea>
                  @error('address')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                    </div>
                  </div>


                </div>
                <div class="card-footer">
                     <input type="submit" value="Save" class="btn btn-sm btn-success float-right">
                </div>
            </form>

            </div> 

</div> 
@endsection
@section('third_party_stylesheets')  
 
@stop
@section('third_party_scripts') 
 
@stop 
