@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf


                        <div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right">First Name</label>

                            <div class="col-md-6">
                                {{-- <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus> --}}
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="nas" required autocomplete="first_name" autofocus>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">Last Name</label>

                            <div class="col-md-6">
                                {{-- <input id="last_name-name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus> --}}
                                <input id="last_name-name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="asni" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date_of_birth" class="col-md-4 col-form-label text-md-right">Date of Birth</label>

                            <div class="col-md-6">
                                {{-- <input id="date_of_birth" type="date" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{ old('date_of_birth') }}" required autocomplete="date_of_birth" autofocus> --}}
                                <input id="date_of_birth" type="date" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="2000-05-01" required autocomplete="date_of_birth" autofocus>

                                @error('ddate_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="postcode" class="col-md-4 col-form-label text-md-right">Address</label>

                            <div class="col-md-6">
                                {{-- <input id="postcode" type="text" class="form-control @error('postcode') is-invalid @enderror" name="postcode" value="{{ old('postcode') }}" placeholder="postcode" required autocomplete="postcode" autofocus> --}}
                                <input id="postcode" type="text" class="form-control @error('postcode') is-invalid @enderror" name="postcode" value="B12 561" placeholder="postcode" required autocomplete="postcode" autofocus>

                                @error('postcode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address1" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                {{-- <input id="address1" type="text" class="form-control @error('address1') is-invalid @enderror" name="address1" value="{{ old('address1') }}" placeholder="first line" required autocomplete="address1" autofocus> --}}
                                <input id="address1" type="text" class="form-control @error('address1') is-invalid @enderror" name="address1" value="45 some road" placeholder="first line" required autocomplete="address1" autofocus>

                                @error('address1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address2" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                {{-- <input id="address2" type="text" class="form-control @error('address2') is-invalid @enderror" name="address2" value="{{ old('address2') }}" placeholder="second line" required autocomplete="address2" autofocus> --}}
                                <input id="address2" type="text" class="form-control @error('address2') is-invalid @enderror" name="address2" value="some place" placeholder="second line" required autocomplete="address2" autofocus>

                                @error('address2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city_town" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                {{-- <input id="city_town" type="text" class="form-control @error('city_town') is-invalid @enderror" name="city_town" value="{{ old('city_town') }}" placeholder="city/town" required autocomplete="city_town" autofocus> --}}
                                <input id="city_town" type="text" class="form-control @error('city_town') is-invalid @enderror" name="city_town" value="Birmingham" placeholder="city/town" required autocomplete="city_town" autofocus>

                                @error('city_town')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="county" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                {{-- <input id="county" type="text" class="form-control @error('county') is-invalid @enderror" name="county" value="{{ old('county') }}" placeholder="county" required autocomplete="county" autofocus> --}}
                                <input id="county" type="text" class="form-control @error('county') is-invalid @enderror" name="county" value="WM" placeholder="county" required autocomplete="county" autofocus>

                                @error('county')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="country" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                {{-- <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" placeholder="country" required autocomplete="country" autofocus> --}}
                                <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="UK" placeholder="country" required autocomplete="country" autofocus>

                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                {{-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"> --}}
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="nas@ap.com" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                {{-- <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"> --}}
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="nas@ap.com" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                {{-- <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"> --}}
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="nas@ap.com" required autocomplete="new-password">
                            </div>
                        </div>


                        <div class="form-group row">

                            <div class="col-md-3"></div>
                            <div class="col-md-1">
                                <input id="marketing_emails" type="checkbox" class="h-100 form-control @error('marketing_emails') is-invalid @enderror" name="marketing_emails" value="1" autocomplete="marketing_emails">

                                @error('marketing_emails')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="marketing_emails" class="col-md-6 col-form-label text-md-left" >
                                I would like to recieve emails about special offers and discounts.
                            </label>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-3"></div>
                            <div class="col-md-1">
                                <input id="terms_and_conditions" type="checkbox" class="h-100 form-control @error('terms_and_conditions') is-invalid @enderror" name="terms_and_conditions" value="1" autocomplete="terms_and_conditions">

                                @error('terms_and_conditions')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="terms_and_conditions" class="col-md-6 col-form-label text-md-left">
                                I have read and agree to the <a href="https://eur-lex.europa.eu/legal-content/EN/TXT/?uri=CELEX:31995L0046" target="_blank">Terms and Conditions</a>.
                            </label>
                        </div>




                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
