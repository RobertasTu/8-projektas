@extends('layouts.app')

@section('content')


{{-- <div class='container'> --}}

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Contact edit') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('contact.update', [$contact]) }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="contact_title" class="col-md-4 col-form-label text-md-right">{{ __('Contact title:') }}</label>

                                <div class="col-md-6">
                                    <input id="contact_title" type="text" class="form-control @error('name') is-invalid @enderror" name="contact_title"  value='{{$contact->title}}' required autocomplete="contact_title" autofocus>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="contact_phone" class="col-md-4 col-form-label text-md-right">{{ __('Contact phone:') }}</label>

                                <div class="col-md-6">
                                    <input id="contact_phone" type="text" class="form-control @error('name') is-invalid @enderror" name="contact_phone"  value='{{$contact->phone}}' required autocomplete="contact_phone" autofocus>

                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="contact_address" class="col-md-4 col-form-label text-md-right">{{ __('Contact address:') }}</label>

                                <div class="col-md-6">
                                    <input id="contact_address" type="text" class="form-control @error('address') is-invalid @enderror" name="contact_address"  value='{{$contact->address}}' required autocomplete="contact_address" autofocus>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="contact_email" class="col-md-4 col-form-label text-md-right">{{ __('Contact email:') }}</label>

                                <div class="col-md-6">
                                    <input id="contact_email" type="email" class="form-control @error('email') is-invalid @enderror" name="contact_email"  value='{{$contact->email}}' required autocomplete="contact_email" autofocus>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="contact_country" class="col-md-4 col-form-label text-md-right">{{ __('Contact country:') }}</label>

                                <div class="col-md-6">
                                    <input id="contact_country" type="text" class="form-control @error('country') is-invalid @enderror" name="contact_country"  value='{{$contact->country}}' required autocomplete="contact_country" autofocus>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="contact_city" class="col-md-4 col-form-label text-md-right">{{ __('Contact city:') }}</label>

                                <div class="col-md-6">
                                    <input id="contact_city" type="text" class="form-control @error('city') is-invalid @enderror" name="contact_city"  value='{{$contact->city}}' required autocomplete="contact_city" autofocus>

                                </div>
                            </div>

                            <div class="form-group row">

                                <label for="contact_company_id" class="col-md-4 col-form-label text-md-right">{{ __('Company:') }}</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="contact_company_id">


                                        @foreach ($companies as $company)
                                            <option value="{{$company->id}}">{{$company->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>



                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Save new contact data') }}
                                    </button>
                                </div>



                                <a href='{{route('contact.index')}}'>Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <script>
	    $(document).ready(function() {
	        $('.summernote').summernote();
	    });
	</script> --}}
    @endsection
