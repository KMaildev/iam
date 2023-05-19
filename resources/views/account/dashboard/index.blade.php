@extends('layouts.main')
@section('content')
    <div class="container d-flex justify-content-center">
        <div class="col-md-12">
            <div class="row py-5">
                @include('account.shared.side_bar')
                @if (Auth::user()->account_type == 'student')
                    @include('account.student.dashboard')
                @else
                    @include('account.dashboard.student_lists')
                @endif
            </div>
        </div>
    </div>
@endsection

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\UpdateStudentAccount', '#create-form') !!}
@endsection
