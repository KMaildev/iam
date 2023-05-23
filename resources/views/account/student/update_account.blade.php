@extends('layouts.main')
@section('content')
    <div class="container-fluid d-flex justify-content-center">
        <div class="col-md-12">
            <div class="row py-5">
                @include('account.shared.side_bar')

                <div class="col-md-9 col-sm-12 col-lg-9">
                    <div class="card">
                        <div class="card-header">
                            Update Your Information
                        </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('student_account.update', $user->id) }}" autocomplete="off"
                                id="create-form" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="row mb-3">
                                    <label for="name"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ $user->name ?? '' }}" autocomplete="off" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">
                                        Photo
                                    </label>

                                    <div class="col-md-6">
                                        <input type="file"
                                            class="@error('photo') is-invalid @enderror" name="photo"
                                            autocomplete="off">
                                        @error('photo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <div class="preview_img my-2">
                                            @if ($user->photo)
                                                <img src="{{ Storage::url($user->photo) }}" alt=""
                                                style="width: 100px; height: 100px; background-position: center; background-size: contain, cover;" data-enlargeable>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-4 col-form-label text-md-end">
                                        NRC Front Photo
                                    </label>
                                    <div class="col-md-6">
                                        <input class="@error('nrc_front') is-invalid @enderror" type="file"
                                            name="nrc_front" value="{{ old('nrc_front') }}" />
                                        @error('nrc_front')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror

                                        <div class="preview_img my-2">
                                            @if ($user->nrc_photo_front)
                                                <img src="{{ Storage::url($user->nrc_photo_front) }}" alt=""
                                                style="width: 100px; height: 100px; background-position: center; background-size: contain, cover;" data-enlargeable>
                                            @endif
                                        </div>

                                    </div>
                                </div>
        
                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-4 col-form-label text-md-end">
                                        NRC Back Photo
                                    </label>
                                    <div class="col-md-6">
                                        <input class="@error('nrc_back') is-invalid @enderror" type="file"
                                            name="nrc_back" value="{{ old('nrc_back') }}" />
                                        @error('nrc_back')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror

                                        <div class="preview_img my-2">
                                            @if ($user->nrc_photo_back)
                                                <img src="{{ Storage::url($user->nrc_photo_back) }}" alt=""
                                                style="width: 100px; height: 100px; background-position: center; background-size: contain, cover;" data-enlargeable>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-4 col-form-label text-md-end">
                                        Household Members List
                                    </label>
                                    <div class="col-md-6">
                                        <input class="@error('members_list_file') is-invalid @enderror" type="file"
                                            name="members_list_file" value="{{ old('members_list_file') }}" />
                                        @error('members_list_file')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror

                                        <div class="preview_img my-2">
                                            @if ($user->household_members)
                                                <img src="{{ Storage::url($user->household_members) }}" alt=""
                                                style="width: 100px; height: 100px; background-position: center; background-size: contain, cover;" data-enlargeable>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-4 col-form-label text-md-end">
                                        Japan Certificate
                                    </label>
                                    <div class="col-md-6">
                                        <input class="@error('japan_certificate') is-invalid @enderror" type="file"
                                            name="japan_certificate" value="{{ old('japan_certificate') }}" />
                                        @error('japan_certificate')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror

                                        <div class="preview_img my-2">
                                            @if ($user->japan_certificate)
                                                <img src="{{ Storage::url($user->japan_certificate) }}" alt=""
                                                style="width: 100px; height: 100px; background-position: center; background-size: contain, cover;" data-enlargeable>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3" id="DateOfBirth">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">
                                        Date of Birth
                                    </label>

                                    <div class="col-md-6">
                                        <input id="name" type="date"
                                            class="form-control @error('date_of_birth') is-invalid @enderror"
                                            name="date_of_birth" value="{{ $user->date_of_birth ?? '' }}"
                                            autocomplete="off">
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
                                            value="{{ $user->age ?? '' }}" autocomplete="off">
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
                                            <input class="form-check-input" type="radio" name="gender" id="Male"
                                                checked value="Male">
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
                                            value="{{ $user->height ?? '' }}" autocomplete="off" autofocus>

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
                                            value="{{ $user->weight ?? '' }}" autocomplete="off" autofocus>

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
                                                <option value="{{ $language_level->id }}"
                                                    @if ($language_level->id == $user->language_level_id) selected @endif>
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
                                            value="{{ $user->education ?? '' }}" autocomplete="off" autofocus>

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
                                            name="foreign_experience" value="{{ $user->foreign_experience ?? '' }}"
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
                                            name="other_qualification" value="{{ $user->other_qualification ?? '' }}"
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
                                        <input id="name" type="text"
                                            class="form-control @error('marital_status') is-invalid @enderror"
                                            name="marital_status" value="{{ $user->marital_status ?? '' }}"
                                            autocomplete="off" autofocus>
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
                                            class="form-control @error('blood_type') is-invalid @enderror"
                                            name="blood_type" value="{{ $user->blood_type ?? '' }}" autocomplete="off"
                                            autofocus>
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
                                            class="form-control @error('wearing_glasses_or_not') is-invalid @enderror"
                                            name="wearing_glasses_or_not"
                                            value="{{ $user->wearing_glasses_or_not ?? '' }}" autocomplete="off"
                                            autofocus>
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
                                            class="form-control @error('birth_place') is-invalid @enderror"
                                            name="birth_place" value="{{ $user->birth_place ?? '' }}" autocomplete="off"
                                            autofocus>
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
                                            name="nationality" value="{{ $user->nationality ?? '' }}" autocomplete="off"
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
                                            value="{{ $user->religion ?? '' }}" autocomplete="off" autofocus>

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
                                            value="{{ $user->address ?? '' }}" autocomplete="off" autofocus>

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
                                            value="{{ $user->phone_no ?? '' }}" autocomplete="off" autofocus>

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
                                            value="{{ $user->email ?? '' }}" autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit"
                                            class="btn btn-flat btn-theme-colored1 text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px"
                                            data-loading-text="Please wait...">
                                            Update
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\UpdateStudentAccount', '#create-form') !!}
@endsection
