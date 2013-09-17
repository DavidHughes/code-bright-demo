@extends('third')

@section('message')
  @parent
  <p>Fourth!</p>
@stop

@section('final')
  <p>Final! Stop!</p>
  <a href="{{ route('first')}}">Wanna go again?</a>
@stop

{{-- I don't even --}}