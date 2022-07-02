@extends('base')

@section('content')

<div class="row">
 <div class="col-md-6 offset-md-3">
 <h1> Add Employee</h1>
    <hr>
<div class="card mt-5 border-dark">
 <div class="card-body">
    
    {!! Form::open(['url' => '/employees', 'method'=>'post']) !!}

    <div class="mb-2">
    {!! Form::label("date_of_hire", "DoH",) !!}
    {!! Form::text("date_of_hire", null, ['class'=>'form-control']) !!}
    </div>

    <div class="mb-2">
    {!! Form::label("employee_name", "Name Of The Employee",) !!}
    {!! Form::text("employee_name", null, ['class'=>'form-control']) !!}
    </div>
    <div class="mb-2">
    {!! Form::label("address", "Address",) !!}
    {!! Form::text("address", null, ['class'=>'form-control']) !!}
    </div>
    <div class="mb-2">
    {!! Form::label("cell_no", "Contact",) !!}
    {!! Form::text("cell_no", null, ['class'=>'form-control']) !!}
    </div>
    <div class="mb-2">
    {!! Form::label("email_add", "Email",) !!}
    {!! Form::text("email_add", null, ['class'=>'form-control']) !!}
    </div>

    <div class="mb-2 d-flex justify-content-end">
        <button class="btn btn btn-outline-success" type=" submit">
            Save Employers
        </button>
    </div>


    {!! Form::close() !!}
         </div>
      </div>
  </div>
</div>

@endsection