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
                  

                  <table class="table table-hover">
                    <tr>
                      <th>Month</th>
                      <th>Basic</th>
                      <th>Allowance</th>
                      <th>Gross Salary</th>
                      <th>EPF</th>
                      <th>Net Salary</th>
                    </tr>
@foreach ($employee->salary as $item)
<tr>
  <th>{{ $item->month }}</th>
  <th>{{ $item->basic_salary }}</th>
  <th>{{ $item->salary_allowance }}</th>
  <th>{{ $item->gross_pay }} </th>
  <th>{{ $item->epf }}</th>
  <th>{{ $item->net_salary }}</th>
</tr>
@endforeach

                  </table>
                </div>

                <div class="col-sm-6">
                   <h4>Add Salary Details</h4>
                     <form action="{{ route('employee.addSalary',$employee->id); }}" method="post">
                      @csrf
                      @method('POST')

                      <div class="form-group row">
                        <label  class="col-sm-4" for="month">Month</label>
                        <div class="col-sm-8">
                         <input type="month" name="month" class="form-control   @error('month') is-invalid @enderror" id="month" placeholder="Month" value="{{ old('month') }}">
   
                              @error('month')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                        </div>
                      </div>


                      <div class="form-group row">
                        <label  class="col-sm-4" for="basic_salary">Basic Salary</label>
                        <div class="col-sm-8">
                         <input type="text" name="basic_salary" class="form-control   @error('basic_salary') is-invalid @enderror" id="basic_salary" placeholder="Basic Salary" value="{{ old('basic_salary') }}">
   
                              @error('basic_salary')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label  class="col-sm-4" for="salary_allowance">Allowance</label>
                        <div class="col-sm-8">
                         <input type="text" name="salary_allowance" class="form-control   @error('salary_allowance') is-invalid @enderror" id="salary_allowance" placeholder="Allowance" value="{{ old('salary_allowance') }}">
   
                              @error('salary_allowance')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                        </div>
                      </div>

                      


                      <input type="submit" value="Add" class="btn btn-sm btn-success">
                     </form>
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
