@extends('layouts.main')
@section('content')
    <div class="container d-flex justify-content-center">
        <div class="col-md-12">
            <div class="row py-5">
                @include('account.shared.side_bar')
                <div class="col-md-9 col-sm-9 col-lg-9">
                    <div class="card">
                        <div class="card-header">
                            Update Your Information
                        </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('company_account.update', $user->id) }}" autocomplete="off"
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
                                        Phone
                                    </label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="form-control @error('phone') is-invalid @enderror" name="phone"
                                            value="{{ $user->phone_no ?? '' }}" autocomplete="off" autofocus>

                                        @error('phone')
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
    {!! JsValidator::formRequest('App\Http\Requests\UpdateCompanyAccount', '#create-form') !!}
@endsection
