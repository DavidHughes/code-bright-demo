@extends('layouts/boilerplate')

@section('title')
  Laravel Form Example
@stop

@section('body')
  <form action="{{ url('handle-form') }}" method="POST" enctype="multipart/form-data">
    <input type="file" name="book" />

    <input type="submit" value="Send" />
  </form>
@stop