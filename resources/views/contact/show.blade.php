@extends('layouts.app')

@section('content')

<div class='container'>

<h1>Information about contact</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th> Phone </th>
        <th> Address </th>
        <th> E-mail </th>
        <th> Country </th>
        <th> City </th>
    </tr>



        <tr>
            <td>{{ $contact->id }}</td>

            <td>{{ $contact->title }}</td>
            <td>{{ $contact->phone }}</td>
            <td>{{ $contact->address }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->country }}</td>
            <td>{{ $contact->city }}</td>



            <td>
                <a href='{{route('contact.edit',[$contact])}}'>Edit</a>
                <form method='POST' action="{{route('contact.destroy', [$contact]) }}">

                @csrf
                <button type='submit'>Delete</button>

                </form>
            </td>
        </tr>


    </table>
    <a class='btn btn-primary' href='{{route('contact.index')}}'>Back</a>
</div>

@endsection
