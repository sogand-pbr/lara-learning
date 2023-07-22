
@extends('layouts.master')

@section("content")

<h2>about page</h2>

@endsection
@section("sidebar")
    @parent
    <div class="card mb-4">
        <div class="card-header">About widget .</div>
        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and
            feature the Bootstrap 5 card component!
        </div>
    </div>
@endsection


