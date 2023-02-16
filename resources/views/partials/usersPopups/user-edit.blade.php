<div class="modal fade" id="user_edit_{{$user->id}}"
     tabindex="-1" role="dialog" aria-labelledby="applicantModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div style="margin-left: 5px;">
                <div class="card-header">{{ __('User') }}</div>
                <div class="anmSection">
                    <form action="{{route('user.edit', $user->id)}}" class="anmForm" method="POST" id="formValidation">
                        @csrf
                        {!! method_field('PUT') !!}
                        <div class="row mb-3">
                            <label for="firstname"
                                   class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>
                            <div class="col-md-6">
                                <input id="firstname" type="text"
                                       class="form-control"
                                       name="firstname" value="{{ $user->person->first_name }}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="lastname"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>
                            <div class="col-md-6">
                                <input id="lastname" type="text"
                                       class="form-control"
                                       name="lastname"
                                       value="{{ $user->person->last_name }}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="username"
                                   class="col-md-4 col-form-label text-md-right">{{ __('User Name') }}</label>
                            <div class="col-md-6">
                                <input id="username" type="text"
                                       class="form-control"
                                       name="username"
                                       value="{{ $user->username }}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                            <div class="col-md-6">
                                <input id="username" type="text"
                                       class="form-control {{--@error('email') is-invalid @enderror--}}"
                                       name="email"
                                       value="{{ $user->email }}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
                            <div class="col-md-6">
                                <select class="form-control mdSelectWrapper" name="status" id="status">
                                    <option @if($user->status == 0) selected @endif value="0">Inactive
                                    </option>
                                    <option @if($user->status == 1) selected @endif
                                    value="1">Active
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password1" type="password"
                                       class="form-control" name="password"
                                       required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="confirm_password"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                       class="form-control"
                                       name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="id_card"
                                   class="col-md-4 col-form-label text-md-right">{{ __('User ID Card') }}</label>
                            <div class="col-md-6">
                                <input id="id_card" type="text"
                                       class="form-control" name="id_card"
                                       value="{{ $user->person->id_card }}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="phone"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>
                            <div class="col-md-6">
                                <input id="phone" type="text"
                                       class="form-control" name="phone"
                                       value="{{ $user->person->phone }}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Dob') }}</label>
                            <div class="col-md-6">
                                <input max={{date('Y-m-d')}} name="dob" id="dob" type="date" class="form-control"
                                       placeholder="Date of birth" value="{{ $user->person->dob }}"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="address"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
                            <div class="col-md-6">
                                <input id="address" type="text"
                                       class="form-control" name="address"
                                       value="{{ $user->person->address }}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>
                            <div class="col-md-6">
                                <input id="city" type="text"
                                       class="form-control" name="city"
                                       value="{{ $user->person->city }}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="state"
                                   class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>
                            <div class="col-md-6">
                                <input id="state" type="text"
                                       class="form-control" name="state"
                                       value="{{ $user->person->state }}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="zip_code"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Zip Code') }}</label>
                            <div class="col-md-6">
                                <input id="zip_code" type="text"
                                       class="form-control" name="zip"
                                       value="{{ $user->person->zip }}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>
                            <div class="col-md-6">
                                <select class="form-control mdSelectWrapper" name="type" required id="type">
                                    <option value="" selected>Select Status</option>
                                    <option value="seller" @if($user->type === 'seller') selected @endif>Seller
                                    </option>
                                    <option value="buyer" @if($user->type === 'buyer') selected @endif>Buyer
                                    </option>
                                    @if(isset(auth()->user()->type))
                                        @if(auth()->user()->type == 'admin')
                                            <option value="admin" @if($user->type === 'admin') selected @endif>
                                                Admin
                                            </option>
                                        @endif
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="formFooter">
                            <!-- pagnitionFooter -->
                            <div class="pagnitionFooter">
                                <div class="alignLeft">&nbsp;</div>
                                <div class="alignRight">
                                    <button class="btn btn-info"><a href="{{route('user.list')}}"
                                                                                  style="text-decoration: none">Go
                                            Back</a></button>
                                    <button type="submit" class="btn btn-success">Update
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
