@extends('layouts.app')


@section('content')
<div class="container">
    <table class="table table-striped">

    <tr>
        <a class='btn btn-primary' href='{{route('company.create')}}'>Add new company<a>
        <th> ID </th>
        <th> Company Title </th>
        <th> Description </th>
        <th> Contact </th>

        <th> Actions </th>
    </tr>

    @foreach ($companies as $company)
    <tr>
        <td>{{$company->id}} </td>
        <td><a href="{{route('company.show', [$company])}}">{{ $company->title }}</a></td>
        <td>{!!$company->description!!} </td>
        <td> {{$company->companyContact->title}}</td>
        <td>
            <a class='btn btn-primary' href='{{route('company.edit',[$company])}}'>Edit</a>
            <form method="post" action={{route('company.destroy',[$company])}}>
                @csrf
                <button type="submit" class="btn btn-danger">DELETE</button>
            </form>
        </td>
    </tr>
    @endforeach

    </table>
</div>
@endsection
