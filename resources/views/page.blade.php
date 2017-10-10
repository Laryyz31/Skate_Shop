@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')

@endsection

@section('content')
    <p>The date is {{date(' D M, Y')}}</p>

    <p>Breeds</p>

    @foreach ($breeds as $breed)
        <li><a href='{{url("/api/v1/breeds/$breed->id")}}'> <span class="pull-right"></span>{{$breed->name}}</a></li>
    @endforeach

    <p>Categories</p>

    @foreach ($categories as $category)
        <li><a href='{{url("/api/v1/categories/$category->id")}}'> <span class="pull-right"></span>{{$category->name}}</a></li>
    @endforeach

    <p>Ponies</p>

    @foreach ($ponies as $pony)
        <li><a href='{{url("/api/v1/ponies/$pony->id")}}'> <span class="pull-right"></span>{{$pony->name}}</a></li>
    @endforeach

@endsection