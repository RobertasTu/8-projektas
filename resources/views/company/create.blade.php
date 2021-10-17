@extends('layouts.app')

@section('content')


{{-- <div class='container'> --}}

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add company') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('company.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="company_title" class="col-md-4 col-form-label text-md-right">{{ __('Company title:') }}</label>

                                <div class="col-md-6">
                                    <input id="company_title" type="text" class="form-control @error('name') is-invalid @enderror" name="company_title"  required autocomplete="company_title" autofocus>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="company_description" class="col-md-4 col-form-label text-md-right">{{ __('Company description:') }}</label>

                                <div class="col-md-6">
                                    {{-- <input id="attendancegroup_description" type="text" class="form-control" name="attendancegroup_description" required autocomplete="attendancegroup_description"> --}}

                                   <textarea class='summernote' name='company_description'>
                                   </textarea>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="company_logo" class="col-md-4 col-form-label text-md-right">{{ __('Company logo:') }}</label>
                                <div class="col-md-6">
                            <input type="file" name="company_logo" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add Company') }}
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

