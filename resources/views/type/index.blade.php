@extends('layouts.app')


@section('content')
<div class="container">

    <table class="table table-striped">

    <tr>
        <a class='btn btn-primary' href='{{route('type.create')}}'>Add new type<a>
        <th> ID </th>
        <th> Title </th>
        <th> Description </th>
        <th> Company </th>
         <th> Actions </th>
    </tr>

    @foreach ($types as $type)
    <tr>
        <td>{{$type->id}} </td>
        <td><a href="{{route('type.show',[$type])}}" >{{$type->title}} </a></td>
        <td>{!! $type->description !!} </td>
        <td> {{$type->typeCompany->title}} </td>
        <td>
            <a href="{{route('type.show',[$type])}}" ></a>
            <a href="{{route('type.edit',[$type])}}" class="btn btn-primary">Edit </a>
            <form method="post" action={{route('type.destroy',[$type])}}>
                @csrf
                <button type="submit" class="btn btn-danger">DELETE</button>
            </form>
        </td>
    </tr>
    @endforeach

    </table>
</div>
@endsection
