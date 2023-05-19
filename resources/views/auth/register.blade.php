@extends('layouts.main')
@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Register
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" autocomplete="off" id="create-form">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">
                                    Types of Account
                                </label>
                                <div class="col-md-6">
                                    <select class="form-control" name="account_type" id="accountType">
                                        <option value="student">
                                            Student Account
                                        </option>
                                        <option value="company">
                                            Company Account
                                        </option>
                                    </select>
                                    @error('account_type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" autocomplete="off" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3" id="DateOfBirth">
                                <label for="name" class="col-md-4 col-form-label text-md-end">
                                    Date of Birth
                                </label>

                                <div class="col-md-6">
                                    <input id="name" type="date"
                                        class="form-control @error('date_of_birth') is-invalid @enderror"
                                        name="date_of_birth" value="{{ old('date_of_birth') }}" autocomplete="off">
                                    @error('date_of_birth')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3" id="Age">
                                <label for="name" class="col-md-4 col-form-label text-md-end">
                                    Age
                                </label>
                                <div class="col-md-6">
                                    <input min="1" max="100" type="number"
                                        class="form-control @error('age') is-invalid @enderror" name="age"
                                        value="{{ old('age') }}" autocomplete="off">
                                    @error('age')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3" id="Gender">
                                <label for="name" class="col-md-4 col-form-label text-md-end">
                                    Gender
                                </label>

                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="Male" checked
                                            value="Male">
                                        <label class="form-check-label" for="Male">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="Female"
                                            value="Female">
                                        <label class="form-check-label" for="Female">
                                            Female
                                        </label>
                                    </div>
                                    @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3" id="Height">
                                <label for="name" class="col-md-4 col-form-label text-md-end">
                                    Height
                                </label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('height') is-invalid @enderror" name="height"
                                        value="{{ old('height') }}" autocomplete="off" autofocus>

                                    @error('height')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3" id="Weight">
                                <label for="name" class="col-md-4 col-form-label text-md-end">
                                    Weight
                                </label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('weight') is-invalid @enderror" name="weight"
                                        value="{{ old('weight') }}" autocomplete="off" autofocus>

                                    @error('weight')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3" id="LanguageLevel">
                                <label for="name" class="col-md-4 col-form-label text-md-end">
                                    Japanese Level
                                </label>
                                <div class="col-md-6">
                                    <select class="form-control" name="language_level_id">
                                        <option selected value="">
                                            --Please Select Japanese Level--
                                        </option>
                                        @foreach ($language_levels as $language_level)
                                            <option value="{{ $language_level->id }}">
                                                {{ $language_level->title ?? '' }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('language_level_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3" id="Education">
                                <label for="name" class="col-md-4 col-form-label text-md-end">
                                    Education
                                </label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('education') is-invalid @enderror"
                                        name="education" value="{{ old('education') }}"
                                        autocomplete="off" autofocus>

                                    @error('education')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="row mb-3" id="ForeignExperience">
                                <label for="name" class="col-md-4 col-form-label text-md-end">
                                    Foreign Experience
                                </label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('foreign_experience') is-invalid @enderror"
                                        name="foreign_experience" value="{{ old('foreign_experience') }}" autocomplete="off"
                                        autofocus>
                                    @error('foreign_experience')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3" id="OtherQualification">
                                <label for="name" class="col-md-4 col-form-label text-md-end">
                                    Other Qualification
                                </label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('other_qualification') is-invalid @enderror"
                                        name="other_qualification" value="{{ old('other_qualification') }}" autocomplete="off"
                                        autofocus>
                                    @error('other_qualification')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3" id="MaritalStatus">
                                <label for="name" class="col-md-4 col-form-label text-md-end">
                                    Marital Status
                                </label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('marital_status') is-invalid @enderror" name="marital_status"
                                        value="{{ old('marital_status') }}" autocomplete="off" autofocus>
                                    @error('marital_status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3" id="BloodType">
                                <label for="name" class="col-md-4 col-form-label text-md-end">
                                    Blood Type
                                </label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('blood_type') is-invalid @enderror" name="blood_type"
                                        value="{{ old('blood_type') }}" autocomplete="off" autofocus>
                                    @error('blood_type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            

                            <div class="row mb-3" id="WearingGlasses">
                                <label for="name" class="col-md-4 col-form-label text-md-end">
                                    Wearing Glasses/ Not
                                </label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('wearing_glasses_or_not') is-invalid @enderror" name="wearing_glasses_or_not"
                                        value="{{ old('wearing_glasses_or_not') }}" autocomplete="off" autofocus>
                                    @error('wearing_glasses_or_not')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3" id="BirthPlace">
                                <label for="name" class="col-md-4 col-form-label text-md-end">
                                    Birth Place
                                </label>
                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('birth_place') is-invalid @enderror" name="birth_place"
                                        value="{{ old('birth_place') }}" autocomplete="off" autofocus>
                                    @error('birth_place')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3" id="Nationality">
                                <label for="name" class="col-md-4 col-form-label text-md-end">
                                    Nationality 
                                </label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('nationality') is-invalid @enderror" name="nationality"
                                        value="{{ old('nationality') }}" autocomplete="off" autofocus>
                                    @error('nationality')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3" id="Religion">
                                <label for="name" class="col-md-4 col-form-label text-md-end">
                                    Religion
                                </label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('religion') is-invalid @enderror"
                                        name="religion" value="{{ old('religion') }}" autocomplete="off"
                                        autofocus>

                                    @error('religion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3" id="Address">
                                <label for="name" class="col-md-4 col-form-label text-md-end">
                                    Address
                                </label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('address') is-invalid @enderror"
                                        name="address" value="{{ old('address') }}" autocomplete="off"
                                        autofocus>

                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3" id="PhoneNo">
                                <label for="name" class="col-md-4 col-form-label text-md-end">
                                    Phone No.
                                </label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('phone_no') is-invalid @enderror"
                                        name="phone_no" value="{{ old('phone_no') }}" autocomplete="off"
                                        autofocus>

                                    @error('phone_no')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit"
                                        class="btn btn-flat btn-theme-colored1 text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px"
                                        data-loading-text="Please wait...">
                                        Register
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

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreRegister', '#create-form') !!}
    <script>
        $('select[id="accountType"]').on("change", function() {
            const typeOfAccount = $(this).val();
            if (typeOfAccount === 'company') {
                $("#DateOfBirth").hide();
                $("#Age").hide();
                $("#Gender").hide();
                $("#Height").hide();
                $("#Weight").hide();
                $("#LanguageLevel").hide();
                $("#Education").hide();
                $("#ForeignExperience").hide();
                $("#OtherQualification").hide();
                $("#MaritalStatus").hide();
                $("#BloodType").hide();
                $("#WearingGlasses").hide();
                $("#BirthPlace").hide();
                $("#Nationality").hide();
                $("#Religion").hide();
            } else {
                $("#DateOfBirth").show();
                $("#Age").show();
                $("#Gender").show();
                $("#Height").show();
                $("#Weight").show();
                $("#LanguageLevel").show();
                $("#Education").show();
                $("#ForeignExperience").show();
                $("#OtherQualification").show();
                $("#MaritalStatus").show();
                $("#BloodType").show();
                $("#WearingGlasses").show();
                $("#BirthPlace").show();
                $("#Nationality").show();
                $("#Religion").show();
            }
        });
    </script>
@endsection
