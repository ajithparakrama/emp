@extends('layouts.app') 
@section('content')
<div class="container-fluid"> 
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Edit user </h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item ">{{ $user->name }}</li>
                <li class="breadcrumb-item active">Edit </li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->

        <div class="card card-green">
            <div class="card-header">
              @if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
@endif
              <h3 class="card-title">
                <i class="fas fa-user-circle"></i>
                Edit {{ $user->name }}
              </h3>
              <div class="card-tools"  >
                <div class="input-group input-group-sm "  >
                  <a href="{{ url()->previous(); }}" class="btn bg-gray btn-sm" title="Go Back" data-toggle="tooltip"> <i class="fa fa-arrow"></i> Back</a>
                </div>
              </div>
            </div>
 
 
              <form role="form" method="POST" action="{{ route('user.update',$user->id) }}" enctype="multipart/form-data">

                @csrf 
                @method('PUT')
                <div class="card-body">

                 <div class="form-group row">
                     <label  class="col-sm-4" for="name">Name</label>
                     <div class="col-sm-8">
                      <input type="text" name="name" class="form-control   @error('name') is-invalid @enderror" id="name" placeholder="First Name" value="{{ $user->name }}">

                           @error('name')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
                   @enderror
                     </div>
                   </div>


                   <div class="form-group row">
                    <label  class="col-sm-4" for="username">User name</label>
                    <div class="col-sm-8">
                     <input type="text" name="username" class="form-control   @error('username') is-invalid @enderror" id="username" placeholder="Last Name" value="{{ $user->username }}">

                          @error('username')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-4" for="role">Role</label>
                    <div class="col-sm-4">
                     <select name="role" id="role" class="select2 form-control">
                       <option value="1" {{ ($user->role==1)?'checked':'' }}  >Admin</option>
                       <option value="2" {{ ($user->role==2)?'checked':'' }}  >Operator</option>
                     </select>
                  @error('role')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                    </div>
                  </div>

                   <div class="form-group row">
                     <label  class="col-sm-4" for="phone">Phone </label>
                     <div class="col-sm-4">
                     <input type="text" name="phone" class="form-control   @error('phone') is-invalid @enderror" id="phone" placeholder="07X XXX XXXX" value="{{ $user->phone }}">
                   @error('phone')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
                   @enderror
                     </div>
                   </div>

            

                  <div class="form-group row">
                    <label  class="col-sm-4" for="address">Address </label>
                    <div class="col-sm-8">
                    <textarea name="address" id="address" class="form-control @error('address') is-invalid @enderror"" cols="2" rows="2">{{ $user->address }}</textarea>
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
