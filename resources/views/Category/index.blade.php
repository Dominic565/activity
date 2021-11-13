@extends('base')
@section('content')
<h1>Category</h1>
<table class="table table-bordered table-stripped table-sm">
    <thead>
        <th>category</th>
        <th>description</th>
    </thead>
    <tbody>
        @foreach($category as $cate)
        <tr>
            <td>{{$cate->category}}</td>
            <td>{{$cate->description}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop