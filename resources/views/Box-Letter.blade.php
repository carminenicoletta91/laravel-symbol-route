@extends('layout.My_Layout')

@section('content')


  @foreach ($arr as  $value)
    <div class="Box {{$color}}">
      <p>{{$value}}</p>
    </div>
  @endforeach



@endsection
