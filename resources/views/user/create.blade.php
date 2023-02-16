@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Sign Up') }}</div>
                    @include('partials.alerts')
                    <div class="card-body">
                        <form method="POST" action="{{ route('user.store') }}">
                            @csrf
                            <div class="row mb-3">
                                <label for="firstname"
                                       class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>
                                <div class="col-md-6">
                                    <input id="firstname" type="text"
                                           class="form-control"
                                           name="firstname" value="{{ old('firstname') }}" required
                                           autocomplete="firstname" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="lastname"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>
                                <div class="col-md-6">
                                    <input id="lastname" type="text"
                                           class="form-control"
                                           name="lastname"
                                           value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="username"
                                       class="col-md-4 col-form-label text-md-right">{{ __('User Name') }}</label>
                                <div class="col-md-6">
                                    <input id="username" type="text"
                                           class="form-control"
                                           name="username"
                                           value="{{ old('username') }}" required autocomplete="username" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                                <div class="col-md-6">
                                    <input id="username" type="text"
                                           class="form-control {{--@error('email') is-invalid @enderror--}}"
                                           name="email"
                                           value="{{ old('email') }}" required autocomplete="email" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="status"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
                                <div class="col-md-6">
                                    <select class="form-control mdSelectWrapper" name="status" required id="status">
                                        <option value="" selected>Select Status</option>
                                        <option value="0" {{old('status') === 0 ? 'selected' : ''}}>Inactive</option>
                                        <option value="1" {{old('status') === 1 ? 'selected' : ''}}>Active</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password1" type="password"
                                           class="form-control" name="password"
                                           required autocomplete="current-password">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="confirm_password"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control"
                                           name="password_confirmation" required
                                           autocomplete="current-confirm-password">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="id_card"
                                       class="col-md-4 col-form-label text-md-right">{{ __('User ID Card') }}</label>
                                <div class="col-md-6">
                                    <input id="id_card" type="text"
                                           class="form-control" name="id_card"
                                           value="{{ old('id_card') }}" required autocomplete="id_card" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="phone"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>
                                <div class="col-md-6">
                                    <input id="phone" type="text"
                                           class="form-control" name="phone"
                                           value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Dob') }}</label>
                                <div class="col-md-6">
                                    <input max={{date('Y-m-d')}} name="dob" id="dob" type="date" class="form-control"
                                           placeholder="Date of birth" value="{{ date('Y-m-d') }}"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="address"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
                                <div class="col-md-6">
                                    <input id="address" type="text"
                                           class="form-control" name="address"
                                           value="{{ old('address') }}" required autocomplete="address" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>
                                <div class="col-md-6">
                                    <input id="city" type="text"
                                           class="form-control" name="city"
                                           value="{{ old('city') }}" required autocomplete="city" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="state"
                                       class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>
                                <div class="col-md-6">
                                    <input id="state" type="text"
                                           class="form-control" name="state"
                                           value="{{ old('state') }}" required autocomplete="state" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="zip_code"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Zip Code') }}</label>
                                <div class="col-md-6">
                                    <input id="zip_code" type="text"
                                           class="form-control" name="zip"
                                           value="{{ old('zip_code') }}" required autocomplete="zip_code" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>
                                <div class="col-md-6">
                                    <select class="form-control mdSelectWrapper" name="type" required id="type">
                                        <option value="" selected>Select Status</option>
                                        <option value="seller" {{old('type') === 'seller' ? 'selected' : ''}}>Seller
                                        </option>
                                        <option value="buyer" {{old('type') === 'buyer' ? 'selected' : ''}}>Buyer
                                        </option>
                                        @if(isset(auth()->user()->type))
                                            @if(auth()->user()->type == 'admin')
                                                <option value="admin" {{old('type') === 'admin' ? 'selected' : ''}}>
                                                    Admin
                                                </option>
                                            @endif
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Sign Up') }}
                                    </button>
                                    <a class="btn btn-link" href="{{ url('/login') }}">
                                        {{ __('Sign In?') }}
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
