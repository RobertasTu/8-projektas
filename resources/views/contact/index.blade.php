@extends('layouts.app')


@section('content')
<div class="container">
    <table class="table table-striped">

    <tr>
        <a class='btn btn-primary' href='{{route('contact.create')}}'>Add new contact<a>
        <th> ID </th>
        <th> Title </th>
        <th> Phone </th>
        <th> Address </th>
        <th> E-mail </th>
        <th> Country </th>
        <th> City </th>
        <th> Actions </th>
    </tr>

    @foreach ($contacts as $contact)
    <tr>
        <td>{{$contact->id}} </td>
        <td><a href="{{route('contact.show', [$contact])}}">{{ $contact->title }}</a></td>
        <td>{{$contact->phone}} </td>
        <td>{{$contact->address}} </td>
        <td>{{$contact->email}} </td>
        <td>{{$contact->country}} </td>
        <td>{{$contact->city}} </td>

        <td>
            <a class='btn btn-primary' href='{{route('contact.edit',[$contact])}}'>Edit</a>
            <form method="post" action={{route('contact.destroy',[$contact])}}>
                @csrf
                <button type="submit" class="btn btn-danger">DELETE</button>
            </form>
        </td>
    </tr>
    @endforeach

    </table>
</div>
@endsection
