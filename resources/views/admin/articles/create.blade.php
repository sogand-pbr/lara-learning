@extends('layouts.master')
@section('content')

    <h2>CREATE ARTICLES</h2>
    <form action="/admin/article/create" method="post">
        @csrf
        <label for="title">title :</label>
        <input type="text" name="title" >
        <button>send</button>
    </form>

@endsection
