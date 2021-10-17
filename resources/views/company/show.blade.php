@extends('layouts.app')

@section('content')

<div class='container'>

<h1>Information about company</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Logo</th>
    </tr>



        <tr>
            <td>{{ $company->id }}</td>

            <td>{{ $company->title }}</td>
            <td>{!! $company->description !!}</td>
            <td><img src='{{ $company->logo }}' alt='{{$company->logo}}' style='width:400px'></td>

            <td>
                <a href='{{route('company.edit',[$company])}}'>Edit</a>
                <form method='POST' action="{{route('company.destroy', [$company]) }}">

                @csrf
                <button type='submit'>Delete</button>

                </form>
            </td>
        </tr>


    </table>
    <a class='btn btn-primary' href='{{route('company.index')}}'>Back</a>
</div>

@endsection
