@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Type') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('type.update', [$type]) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="type_title" class="col-md-4 col-form-label text-md-right">{{ __('Type title') }}</label>

                            <div class="col-md-6">
                                <input id="type_title" type="text" class="form-control" name="type_title" value="{{$type->title}}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="type_description" class="col-md-4 col-form-label text-md-right">{{ __('Type description') }}</label>

                            <div class="col-md-6">
                                <textarea class='summernote' name="type_description">{{$type->description}}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">

                            <label for="type_company_id" class="col-md-4 col-form-label text-md-right">{{ __('Company') }}</label>
                            <div class="col-md-6">
                                <select class="form-control" name="type_company_id">

                                    @foreach ($companies as $company)
                                        <option value="{{$company->id}}" @if($company->id == $type->company_id) selected @endif >{{$company->title}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Edit') }}
                                </button>
                                <a href='{{route('type.index')}}'>Back<a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.summernote').summernote();
    });
</script>
@endsection
