@extends('layouts.app')

@section('content')


{{-- <div class='container'> --}}

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Contact ') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('contact.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="contact_title" class="col-md-4 col-form-label text-md-right">{{ __('Contact title:') }}</label>

                                <div class="col-md-6">
                                    <input id="contact_title" type="text" class="form-control @error('name') is-invalid @enderror" name="contact_title"  required autocomplete="contact_title" autofocus>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="contact_phone" class="col-md-4 col-form-label text-md-right">{{ __('Contact phone:') }}</label>

                                <div class="col-md-6">
                                    <input id="contact_phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="contact_phone"  required autocomplete="contact_phone" autofocus>

                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="contact_address" class="col-md-4 col-form-label text-md-right">{{ __('Contact address:') }}</label>

                                <div class="col-md-6">
                                    <input id="contact_address" type="text" class="form-control @error('address') is-invalid @enderror" name="contact_address"   required autocomplete="contact_address" autofocus>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="contact_email" class="col-md-4 col-form-label text-md-right">{{ __('Contact email:') }}</label>

                                <div class="col-md-6">
                                    <input id="contact_email" type="email" class="form-control @error('email') is-invalid @enderror" name="contact_email"  required autocomplete="contact_email" autofocus>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="contact_country" class="col-md-4 col-form-label text-md-right">{{ __('Contact country:') }}</label>

                                <div class="col-md-6">
                                    <input id="contact_country" type="text" class="form-control @error('country') is-invalid @enderror" name="contact_country"  required autocomplete="contact_country" autofocus>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="contact_city" class="col-md-4 col-form-label text-md-right">{{ __('Contact city:') }}</label>

                                <div class="col-md-6">
                                    <input id="contact_city" type="text" class="form-control @error('city') is-invalid @enderror" name="contact_city" required autocomplete="contact_city" autofocus>

                                </div>
                            </div>





                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Create new contact') }}
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

    @endsection
