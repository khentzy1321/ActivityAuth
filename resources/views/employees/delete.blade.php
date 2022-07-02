@extends('base')

@section('content')

<h1>{{$employ->date_of_hire}}</h1>
<h1>{{$employ->employee_name}}</h1>
<h1>{{$employ->address}}</h1>
<h1>{{$employ->cell_no}}</h1>
<h1>{{$employ->email_add}}</h1>
<div>{{$employ->user->lname}}, {{$employ->user->fname}} <br />
    {{$employ->created_at->format('F d, Y g:i A')}}
</div>
<hr>
<div class="card-footer">
                  <a href="{{url('/employees/delete/' . $employ->id)}}" class="btn btn-info btn-sm justify-content-between"> Delete </a>
            </div>




@endsection