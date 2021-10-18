@extends('layouts.app')

@section('content')


{{-- <div class='container'> --}}

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Company edit') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('company.update', [$company]) }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="company_title" class="col-md-4 col-form-label text-md-right">{{ __('Company title:') }}</label>

                                <div class="col-md-6">
                                    <input id="company_title" type="text" class="form-control @error('name') is-invalid @enderror" name="company_title"  value='{{$company->title}}' required autocomplete="company_title" autofocus>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="company_description" class="col-md-4 col-form-label text-md-right">{{ __('Company description:') }}</label>

                                <div class="col-md-6">
                                   <textarea class='summernote' name='company_description' required autocomplete="company_description" autofocus >
                                    <p>{!! $company->description !!}</p>
                                   </textarea>
                                </div>
                            </div>
                            <div class="form-group row">

                                <label for="company_contact_id" class="col-md-4 col-form-label text-md-right">{{ __('Contact:') }}</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="company_contactid">


                                        @foreach ($contacts as $contact)
                                        <option value="{{$contact->id}}" @if($contact->id == $company->contact_id) selected @endif>{{$contact->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="company_logo" class="col-md-4 col-form-label text-md-right">{{ __('Company logo:') }}</label>
                                <div class="col-md-6">
                            <input type="file" name="company_logo" class="form-control">
                            <img src="{{$company->logo}}" alt="{{$company->logo}}" style="width:400px">
                            <p> {{$company->logo}} </p>
                        </div>
                            </div>



                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Save new company data') }}
                                    </button>
                                </div>



                                <a href='{{route('company.index')}}'>Back</a>
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
