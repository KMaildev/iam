@extends('layouts.main')
@section('content')
    <div class="container d-flex justify-content-center">
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
                                id="create-form">
                                @csrf
                                @method('PUT')

                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">
                                        Name
                                    </label>

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
                                        Gender
                                    </label>

                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="Male"
                                                value="Male" @if ($user->gender == 'Male') checked @endif>
                                            <label class="form-check-label" for="Male">
                                                Male
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="Female"
                                                value="Female" value="Male"
                                                @if ($user->gender == 'Female') checked @endif>
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


                                <div class="row mb-3">
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


                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">
                                        Japanese Language Level
                                    </label>
                                    <div class="col-md-6">
                                        <select class="form-control" name="language_level_id">
                                            <option selected value="">
                                                --Please Select Your Language Level--
                                            </option>
                                            @foreach ($language_levels as $language_level)
                                                <option value="{{ $language_level->id }}"
                                                    @if ($user->language_level_id == $language_level->id) selected @endif>
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


                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">
                                        Professional Career
                                    </label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="form-control @error('professional_career') is-invalid @enderror"
                                            name="professional_career" value="{{ $user->professional_career ?? '' }}"
                                            autocomplete="off" autofocus>

                                        @error('professional_career')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="row mb-3">
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

                                <div class="row mb-3">
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


                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">
                                        Qualification
                                    </label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="form-control @error('qualification') is-invalid @enderror"
                                            name="qualification" value="{{ $user->qualification ?? '' }}"
                                            autocomplete="off" autofocus>

                                        @error('qualification')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">
                                        Other Special Skills
                                    </label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="form-control @error('special_skills') is-invalid @enderror"
                                            name="special_skills" value="{{ $user->special_skills ?? '' }}"
                                            autocomplete="off" autofocus>

                                        @error('special_skills')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">
                                        Visited to Japan or Not?
                                    </label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="form-control @error('visited') is-invalid @enderror" name="visited"
                                            value="{{ $user->visited ?? '' }}" autocomplete="off" autofocus>

                                        @error('visited')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">
                                        NRC No
                                    </label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="form-control @error('nrc') is-invalid @enderror" name="nrc"
                                            value="{{ $user->nrc ?? '' }}" autocomplete="off" autofocus>

                                        @error('nrc')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
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

                                <div class="row mb-3">
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


                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">
                                        Phone
                                    </label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="form-control @error('phone') is-invalid @enderror" name="phone"
                                            value="{{ $user->phone ?? '' }}" autocomplete="off" autofocus>

                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">
                                        Number of sibling
                                    </label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="form-control @error('sibling') is-invalid @enderror" name="sibling"
                                            value="{{ $user->sibling ?? '' }}" autocomplete="off" autofocus>

                                        @error('sibling')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">
                                        Visited to Japan or Not?
                                        (Sibling)
                                    </label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="form-control @error('visited_sibling') is-invalid @enderror"
                                            name="visited_sibling" value="{{ $user->visited_sibling ?? '' }}"
                                            autocomplete="off" autofocus>

                                        @error('visited_sibling')
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
