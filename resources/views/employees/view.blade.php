@extends('base')

@section('content')

<div>{{$employ->user->lname}}, {{$employ->user->fname}} <br />
    {{$employ->created_at->format('F d, Y g:i A')}}
</div>

<table class="table table-bordered border-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">DOH</th>
      <th scope="col">Employer's Name</th>
      <th scope="col">Adress</th>
      <th scope="col">Contact No.</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$employ->id}}</th>
      <td>{{$employ->date_of_hire}}</td>
      <td>{{$employ->employee_name}}</td>
      <td>{{$employ->address}}</td>
      <td>{{$employ->cell_no}}</td>
      <td>{{$employ->email_add}}</td>
    </tr>
  </tbody>
</table>
@endsection
