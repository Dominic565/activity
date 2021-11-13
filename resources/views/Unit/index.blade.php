@extends ('base')
@section('content')
<h1>Units</h1>
<table class="table table-bordered table-stripped table-sm"> 
    <thead>
        <th>unit_type</th>
        <th>description</th>
    </thead>
    <tbody>
        @foreach($unit as $uni)
        <tr>
            <td>{{$uni->unit_type}}</td>
            <td>{{$uni->description}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop