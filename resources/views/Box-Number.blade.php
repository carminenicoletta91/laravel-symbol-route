@extends('layout.My_Layout')

@section('color-header')

class={{$color}}

@endsection

@section('content')

  @foreach ($arr as $value)

    <div class="Box {{$color}}"> {{$value}}</div>

  @endforeach

@endsection

@section('color-footer')

class={{$color}}

@endsection
