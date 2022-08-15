@extends('layouts.app') 
@section('content')
<div class="container-fluid"> 
    <section class="content-header">
        

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
                     <label  class="col-sm-4" for="first_name">Role Name</label>
                     <div class="col-sm-8">
                     {{  $roles->role_name }}

                           @error('first_name')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
                   @enderror
                     </div>
                   </div>


                  

                </div>

            </form>

            </div> 

</div> 
@endsection
@section('third_party_stylesheets')  
 
@stop
@section('third_party_scripts') 
 
@stop 
