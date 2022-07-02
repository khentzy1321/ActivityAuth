@extends('base')

@section('content')

<div class="float-end mt-2">
   <a href="{{'/employees/create'}}" class="btn btn-outline-primary">
       Add Employers
   </a>
</div>

<h1>Employers</h1>
<hr>

<div class="d-flex justify-content-between">
  @foreach($recentEmployee as $employ)

  <div class="card align-self-stretched  border-info mb-3 " style="width: 31%">
  <div class="card-header">Employers Info</div>
       <div class="card-body align-self-stretched ">
            <div class="card-title">
            <table class="table table-bordered border-primary">
            <tr>
                  <th scope = "row"> Name :</th><td>{{$employ->employee_name}}</td>
                  </tr>
                  <tr>
                  <th scope = "row"> Address :</th><td>{{$employ->address}}</td>
                  </tr>
              </table>
               
            </div>
            <div class="d-flex justify-content-end ">
                <a href="{{url('/employees/edit/' . $employ->id)}}" class="btn btn-secondary btn-sm btn-outline-dark" style="margin: 1%"> Edit </a>
                <a href="{{url('/employees/list/' . $employ->id)}}" class="btn btn-secondary btn-sm btn-outline-warning" style="margin: 1%"> Open </a>
                <a href="{{url('/employees/open/' . $employ->id)}}" class="btn btn-secondary btn-sm btn-outline-danger" style="margin: 1%"> Delete </a>
            </div>
            
       </div>
  </div>
  @endforeach
</div>



@endsection