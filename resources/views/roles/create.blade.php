@extends('layouts.app') 
@section('content')
<div class="container-fluid"> 
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Roles </h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item ">Roles</li>
                <li class="breadcrumb-item active">New</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->

        <div class="card card-green">
            <div class="card-header">
    
              <h3 class="card-title">
                <i class="fas fa-user-circle"></i>
                New Role
              </h3>
              <div class="card-tools"  >
                <div class="input-group input-group-sm "  >
                  <a href="{{ url()->previous(); }}" class="btn bg-gray btn-sm" title="Go Back" data-toggle="tooltip"> <i class="fa fa-arrow"></i> Back</a>
                </div>
              </div>
            </div>
 
 
              <form role="form" method="POST" action="{{ route('roles.store') }}" enctype="multipart/form-data">

                @csrf 
                @method('POST')
                <div class="card-body">

                 <div class="form-group row">
                     <label  class="col-sm-4" for="role_name">Role Name</label>
                     <div class="col-sm-8">
                      <input type="text" name="role_name" class="form-control   @error('role_name') is-invalid @enderror" id="role_name" placeholder="Role Name" value="{{ old('role_name') }}">

                           @error('role_name')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
                   @enderror
                     </div>
                   </div>


                </div>
                <div class="card-footer">
                     <input type="submit" value="Save Role" class="btn btn-sm btn-success float-right">
                </div>
            </form>

            </div> 

</div> 
@endsection
@section('third_party_stylesheets')  
 
@stop
@section('third_party_scripts') 
 
@stop 
