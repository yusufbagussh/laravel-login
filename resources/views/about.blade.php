@extends('layouts.main')
@section('container')
    <h1>Halaman About</h1>
    <h2>Nama : {{ auth()->user()->name }}</h2>
@endsection