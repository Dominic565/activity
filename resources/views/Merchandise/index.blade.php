@extends('base')
@section('content')
<h1>Merchandise</h1>
<table class="table table-bordered table-stripped table-sm">
    <thead>
        <th>product_name</th>
        <th>brand_name</th>
        <th>retail_price</th>
        <th>wholesale_price</th>
        <th>wholesale_qty</th>
        <th>qty_stock</th>
    </thead>
    <tbody>
        @foreach($merchandise as $merc)
        <tr>
            <td>{{$merc->product_name}}</td>
            <td>{{$merc->brand_name}}</td>
            <td>{{$merc->retail_price}}</td>
            <td>{{$merc->wholesale_price}}</td>
            <td>{{$merc->wholesale_qty}}</td>
            <td>{{$merc->qty_stock}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop