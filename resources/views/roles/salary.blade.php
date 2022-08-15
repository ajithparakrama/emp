@extends('layouts.app') 
@section('content')
<div class="container-fluid"> 
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1> {{  $employee->first_name }} </h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item "> {{  $employee->first_name }}</li>
                <li class="breadcrumb-item active">Salary Details</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->

        <div class="card card-green">
            <div class="card-header">
    
              <h3 class="card-title">
                <i class="fas fa-user-circle"></i>
                {{  $employee->first_name }}
              </h3>
              <div class="card-tools"  >
                <div class="input-group input-group-sm "  >
                  <a href="{{ url()->previous(); }}" class="btn bg-gray btn-sm" title="Go Back" data-toggle="tooltip"> <i class="fa fa-arrow"></i> Back</a>
                </div>
              </div>
            </div>
 
 
                <div class="card-body">
                  <div class="row">
                  <div class="col-sm-6">
                  <dl>
                    <dt>Name</dt>
                    <dd> {{  $employee->first_name }}  {{ $employee->last_name }}</dd>

                    <dt>NIC</dt>
                    <dd>{{ $employee->nic }}</dd>

                    
                    <dt>Phone</dt>
                    <dd>{{ $employee->phone }}</dd>
                    
                    <dt>Employee Number</dt>
                    <dd>{{ $employee->employee_number }}</dd>
                    
                    <dt>EPF Number</dt>
                    <dd>{{ $employee->epf_number }}</dd>

                    <dt>Address</dt>
                    <dd>{{ $employee->address }}</dd>

                  </dl>
 
                </div>

                <div class="col-sm-6">
                   <h4>Add Salary Details</h4>
                    
                </div>
              </div>
                </div>
                <div class="card-footer">
                    
                </div> 

            </div> 

</div> 
@endsection
@section('third_party_stylesheets')  
 
@stop
@section('third_party_scripts') 
 
@stop 
