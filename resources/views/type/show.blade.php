@extends('layouts.app')

@section('content')
<div class='container'>


    <div class="form-group row">
        <label for="type_title" class="col-md-4 col-form-label text-md-right">{{ __('Type title') }}</label>

        <div class="col-md-6">
            <h2>{{$type->title}}</h2>
        </div>
    </div>
    <div class="form-group row">
        <label for="type_description" class="col-md-4 col-form-label text-md-right">{{ __('Type description') }}</label>

        <div class="col-md-6">
            <p>{!!$type->description!!}</p>

        </div>
    </div>
    <div class="form-group row">
        <label for="type_company" class="col-md-4 col-form-label text-md-right">{{ __('Company') }}</label>

        <div class="col-md-6">
            <p>{{$type->typeCompany->title}}}</p>
        </div>
    </div>


    <div class="form-group row">
        <label for="actions" class="col-md-4 col-form-label text-md-right">{{ __('Actions') }}</label>
        <div class="col-md-6">
            <a href="{{route('type.edit',[$type])}}" class="btn btn-primary">Edit </a>

    <form method='POST' action="{{route('type.destroy', [$type]) }}"> <br>
    @csrf
    <button class='btn btn-secondary' type='submit'>Delete</button>

    </form>
</div>
</div>



<a href='{{route('type.index')}}'>Back<a>
</div>




@endsection
