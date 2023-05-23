@extends('admin.layouts.main')
@section('content')
    <div class="row flex-column flex-lg-row">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    Update Information
                    -
                    {{ $company->company_name ?? '' }}
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('company.update', $company->id) }}" autocomplete="off"
                        id="create-form">
                        @csrf
                        @method('PUT')

                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label text-end">
                                Company ID
                            </label>

                            <div class="col-md-6">
                                <input id="account_id" type="text"
                                    class="form-control @error('account_id') is-invalid @enderror" name="account_id"
                                    value="{{ $company->account_id ?? '' }}" autocomplete="off" autofocus>

                                @error('account_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label text-end">
                                Company Name
                            </label>

                            <div class="col-md-6">
                                <input id="account_id" type="text"
                                    class="form-control @error('company_name') is-invalid @enderror" name="company_name"
                                    value="{{ $company->company_name ?? '' }}" autocomplete="off" autofocus>

                                @error('company_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label text-end">
                                Contact Person
                            </label>

                            <div class="col-md-6">
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ $company->name ?? '' }}" autocomplete="off" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="name" class="col-md-3">
                                Email
                            </label>

                            <div class="col-md-6">
                                <input id="name" type="text"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ $company->email ?? '' }}" autocomplete="off" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-3">
                                Phone
                            </label>

                            <div class="col-md-6">
                                <input id="name" type="text"
                                    class="form-control @error('phone') is-invalid @enderror" name="phone"
                                    value="{{ $company->phone ?? '' }}" autocomplete="off" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="name" class="col-md-3">
                                Address
                            </label>

                            <div class="col-md-6">
                                <input id="name" type="text"
                                    class="form-control @error('address') is-invalid @enderror" name="address"
                                    value="{{ $company->address ?? '' }}" autocomplete="off" autofocus>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3" id="Facebook">
                            <label for="email" class="col-md-3">
                                Facebook Link
                            </label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('facebook_link') is-invalid @enderror"
                                    name="facebook_link" value="{{ $company->facebook_link ?? '' }}"
                                    autocomplete="facebook_link">

                                @error('facebook_link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3" id="Instagram">
                            <label for="email" class="col-md-3">
                                Instagram Link
                            </label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('instagram_link') is-invalid @enderror"
                                    name="instagram_link" value="{{ $company->instagram_link ?? '' }}"
                                    autocomplete="instagram_link">

                                @error('instagram_link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3" id="Website">
                            <label for="email" class="col-md-3">
                                Website URL
                            </label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('website') is-invalid @enderror"
                                    name="website" value="{{ $company->website ?? '' }}" autocomplete="website">

                                @error('website')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3" id="Other">
                            <label for="email" class="col-md-3">
                                Other
                            </label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('other') is-invalid @enderror"
                                    name="other" value="{{ $company->other ?? '' }}" autocomplete="other">

                                @error('other')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3" id="Password">
                            <label for="password" class="col-md-3">
                                Password
                            </label>

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

                        <div class="row mb-0">
                            <label for="email" class="col-md-3">
                            </label>

                            <div class="col-md-6">
                                <button type="submit" class="btn btn-success">
                                    Update
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
<script></script>
