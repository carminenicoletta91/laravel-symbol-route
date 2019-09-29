@extends('layout.My_Layout')
@section('color-header')

class={{$color}}

@endsection
@section('content')


  @foreach ($arr as  $value)
    <div class="Box {{$color}}">
      <p>{{$value}}</p>
    </div>
  @endforeach



@endsection
@section('color-footer')

class={{$color}}

@endsection
