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
                        <form method="POST" action="{{ route('register') }}" autocomplete="off" id="create-form"
                            enctype="multipart/form-data">
                            @csrf

                            <h6>
                                Fill your information
                            </h6>
                            <hr>

                            <div class="row mb-3">
                                <label for="account_type" class="col-md-4 col-form-label text-md-end">
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


                            <div class="row mb-3" id="CompanyName">
                                <label for="name" class="col-md-4 col-form-label text-md-end">
                                    Company Name
                                </label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('company_name') is-invalid @enderror" name="company_name"
                                        value="{{ old('company_name') }}" autocomplete="off" autofocus>

                                    @error('company_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">

                                <label for="name" class="col-md-4 col-form-label text-md-end" id="Name">
                                    Name
                                </label>

                                <label for="name" class="col-md-4 col-form-label text-md-end" id="ContractPerson">
                                    Contract Person
                                </label>

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
                                <label for="date" class="col-md-4 col-form-label text-md-end">
                                    Date of Birth
                                </label>

                                <div class="col-md-6">
                                    <input onchange="birthDateAgeCalc(this);" type="date"
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
                                <label for="age" class="col-md-4 col-form-label text-md-end">
                                    Age
                                </label>
                                <div class="col-md-6">
                                    <input min="1" max="100" type="number"
                                        class="form-control @error('age') is-invalid @enderror" name="age"
                                        value="{{ old('age') }}" autocomplete="off" id="ageNumber">
                                    @error('age')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3" id="Gender">
                                <label for="gender" class="col-md-4 col-form-label text-md-end">
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
                                        class="form-control @error('education') is-invalid @enderror" name="education"
                                        value="{{ old('education') }}" autocomplete="off" autofocus>

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
                                        name="foreign_experience" value="{{ old('foreign_experience') }}"
                                        autocomplete="off" autofocus>
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
                                        name="other_qualification" value="{{ old('other_qualification') }}"
                                        autocomplete="off" autofocus>
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
                                    <select class="form-control" name="marital_status">
                                        <option value="Single">
                                            Single
                                        </option>
                                        <option value="Married">
                                            Married
                                        </option>
                                    </select>
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
                                    <select class="form-control" name="blood_type">
                                        <option value="O">
                                            O
                                        </option>
                                        <option value="A">
                                            A
                                        </option>
                                        <option value="B">
                                            B
                                        </option>
                                        <option value="AB">
                                            AB
                                        </option>
                                    </select>
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
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="wearing_glasses_or_not"
                                            id="No" value="No" checked>
                                        <label class="form-check-label" for="No">
                                            No
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="wearing_glasses_or_not"
                                            id="Yes" value="Yes">
                                        <label class="form-check-label" for="Yes">
                                            Yes
                                        </label>
                                    </div>

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
                                        class="form-control @error('nationality') is-invalid @enderror"
                                        name="nationality" value="{{ old('nationality') }}" autocomplete="off"
                                        autofocus>
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
                                        class="form-control @error('religion') is-invalid @enderror" name="religion"
                                        value="{{ old('religion') }}" autocomplete="off" autofocus>

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
                                        class="form-control @error('address') is-invalid @enderror" name="address"
                                        value="{{ old('address') }}" autocomplete="off" autofocus>

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
                                        class="form-control @error('phone_no') is-invalid @enderror" name="phone_no"
                                        value="{{ old('phone_no') }}" autocomplete="off" autofocus>

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

                            <div class="row mb-3" id="Facebook">
                                <label for="email" class="col-md-4 col-form-label text-md-end">
                                    Facebook Link
                                </label>

                                <div class="col-md-6">
                                    <input type="text"
                                        class="form-control @error('facebook_link') is-invalid @enderror"
                                        name="facebook_link" value="{{ old('facebook_link') }}"
                                        autocomplete="facebook_link">

                                    @error('facebook_link')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3" id="Instagram">
                                <label for="email" class="col-md-4 col-form-label text-md-end">
                                    Instagram Link
                                </label>

                                <div class="col-md-6">
                                    <input type="text"
                                        class="form-control @error('instagram_link') is-invalid @enderror"
                                        name="instagram_link" value="{{ old('instagram_link') }}"
                                        autocomplete="instagram_link">

                                    @error('instagram_link')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3" id="Website">
                                <label for="email" class="col-md-4 col-form-label text-md-end">
                                    Website URL
                                </label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('website') is-invalid @enderror"
                                        name="website" value="{{ old('website') }}" autocomplete="website">

                                    @error('website')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3" id="Other">
                                <label for="email" class="col-md-4 col-form-label text-md-end">
                                    Other
                                </label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('other') is-invalid @enderror"
                                        name="other" value="{{ old('other') }}" autocomplete="other">

                                    @error('other')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3" id="Password">
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

                            <div class="row mb-3" id="PasswordConfirm">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" autocomplete="new-password">
                                </div>
                            </div>


                            <h6 id="UploadPhoto">
                                Upload Photo
                            </h6>
                            <hr>

                            <div class="row mb-3" id="Photo">
                                <label for="name" class="col-md-4 col-form-label text-md-end">
                                    Photo
                                </label>

                                <div class="col-md-6">
                                    <input type="file" class="@error('photo') is-invalid @enderror" name="photo"
                                        autocomplete="off" accept=".jpg, .jpeg, .png">
                                    @error('photo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="mb-3 row" id="NRCFront">
                                <label for="html5-text-input" class="col-md-4 col-form-label text-md-end">
                                    NRC Front Photo
                                </label>
                                <div class="col-md-6">
                                    <input class="@error('nrc_front') is-invalid @enderror" type="file"
                                        name="nrc_front" value="{{ old('nrc_front') }}" accept=".jpg, .jpeg, .png" />
                                    @error('nrc_front')
                                        <div class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row" id="NRCBack">
                                <label for="html5-text-input" class="col-md-4 col-form-label text-md-end">
                                    NRC Back Photo
                                </label>
                                <div class="col-md-6">
                                    <input class="@error('nrc_back') is-invalid @enderror" type="file"
                                        name="nrc_back" value="{{ old('nrc_back') }}" accept=".jpg, .jpeg, .png" />
                                    @error('nrc_back')
                                        <div class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row" id="Household">
                                <label for="html5-text-input" class="col-md-4 col-form-label text-md-end">
                                    Household Members List
                                </label>
                                <div class="col-md-6">
                                    <input class="@error('members_list_file') is-invalid @enderror" type="file"
                                        name="members_list_file" value="{{ old('members_list_file') }}"
                                        accept=".jpg, .jpeg, .png" />
                                    @error('members_list_file')
                                        <div class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row" id="JapanCertificate">
                                <label for="html5-text-input" class="col-md-4 col-form-label text-md-end">
                                    Japan Certificate
                                </label>
                                <div class="col-md-6">
                                    <input class="@error('japan_certificate') is-invalid @enderror" type="file"
                                        name="japan_certificate" value="{{ old('japan_certificate') }}"
                                        accept=".jpg, .jpeg, .png" />
                                    @error('japan_certificate')
                                        <div class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="mb-3 row" id="ForeignTickets">
                                <label for="html5-text-input" class="col-md-4 col-form-label text-md-end">
                                    Foreign tickets
                                    (ပြည်ပလက်မှတ်များ)
                                </label>
                                <div class="col-md-6">
                                    <input class="@error('files') is-invalid @enderror" type="file" name="files[]"
                                        multiple value="{{ old('files') }}" accept=".jpg, .jpeg, .png" />
                                    @error('files')
                                        <div class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
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
                $("#Photo").hide();
                $("#NRCFront").hide();
                $("#NRCBack").hide();
                $("#Household").hide();
                $("#JapanCertificate").hide();
                $("#ForeignTickets").hide();
                $("#UploadPhoto").hide();
                $("#Name").hide();
                $("#Password").hide();
                $("#PasswordConfirm").hide();

                $("#Facebook").show();
                $("#Instagram").show();
                $("#Website").show();
                $("#Other").show();

                $("#ContractPerson").show();
                $("#CompanyName").show();

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
                $("#Photo").show();
                $("#NRCFront").show();
                $("#NRCBack").show();
                $("#Household").show();
                $("#JapanCertificate").show();
                $("#ForeignTickets").show();
                $("#UploadPhoto").show();
                $("#Name").show();

                $("#Facebook").hide();
                $("#Instagram").hide();
                $("#Website").hide();
                $("#Other").hide();

                $("#ContractPerson").hide();
                $("#CompanyName").hide();

            }
        });


        window.onload = (event) => {
            $("#CompanyName").hide();
            $("#ContractPerson").hide();
        };

        function birthDateAgeCalc(object) {
            var dob = object.value;
            const dobArray = dob.split("-");
            const year = dobArray[0];
            const current_date = new Date().getFullYear();
            const age = year - current_date;
            const a = Math.abs(age);
            document.getElementById('ageNumber').value = a;
        }
    </script>
@endsection
