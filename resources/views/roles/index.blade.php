@extends('layouts.app') 
@section('content')
<div class="container-fluid"> 
    <section class="content-header">
       

        <div class="card card-green">
            <div class="card-header">
    
              <h3 class="card-title">
                <i class="fas fa-user-circle"></i>
                All Roles
              </h3>
              <div class="card-tools"  >
                <div class="input-group input-group-sm "  >
                  <a href="{{ url()->previous(); }}" class="btn bg-gray btn-sm" title="Go Back" data-toggle="tooltip"> <i class="fa fa-arrow"></i> Back</a>
                </div>
              </div>
            </div>

            <div class="card-body">
                {{$dataTable->table()}}  

            </div>
            <div class="card-footer">

            </div>
        </div> 

</div> 
@endsection
@section('third_party_stylesheets')  
<link rel="stylesheet" href="{{ asset('plugin/datatable/buttons.dataTables.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugin/datatable/dataTables.bootstrap4.min.css') }}">
@stop
@section('third_party_scripts') 
<script src="{{ asset('plugin/jquery/jquery.js') }}"  ></script>
<script src="{{ asset('plugin/datatable/jquery.validate.js') }}" defer></script>
<script src="{{ asset('plugin/datatable/jquery.dataTables.min.js') }}" defer></script>
<script src="{{ asset('plugin/datatable/bootstrap.min.js') }}" defer></script>
<script src="{{ asset('plugin/datatable/dataTables.bootstrap4.min.js') }}" defer></script> 
<script src="{{ asset('plugin/datatable/dataTables.buttons.min.js') }}" defer></script> 
<script src="{{ asset('plugin/vendor/datatables/buttons.server-side.js') }}" defer></script> 

{!! $dataTable->scripts() !!}  
@stop 
