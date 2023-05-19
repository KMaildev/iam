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
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <h4>
                                            Files
                                        </h4>
                                        <form action="{{ route('student_docs.store') }}" method="POST" autocomplete="off"
                                            id="create-form" role="form" enctype="multipart/form-data">
                                            @csrf
                                            <div class="input-group">
                                                <input class="form-control @error('files') is-invalid @enderror"
                                                    type="file" name="files[]" multiple value="{{ old('files') }}"
                                                    required />
                                                @error('files')
                                                    <div class="invalid-feedback"> {{ $message }} </div>
                                                @enderror
                                                <button class="btn btn-outline-primary" type="submit"
                                                    id="inputGroupFileAddon04">Upload</button>
                                            </div>
                                        </form>


                                        <div class="col-xl-12 col-lg-12 col-md-12 py-3">
                                            <div class="table-responsive text-nowrap rowheaders table-scroll" role="region"
                                                aria-labelledby="HeadersCol" tabindex="0">
                                                <table class="table table-bordered main-table">
                                                    <thead style="background-color: #e13c31;">
                                                        <tr>
                                                            <th class="text-center text-white" style="width: 1%;">#</th>
                                                            <th class="text-center text-white">Photo</th>
                                                            <th class="text-center text-white">Download</th>
                                                            <th class="text-center text-white">Upload Date</th>
                                                            <th class="text-center text-white" style="width: 1%;">Action
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="table-border-bottom-0">
                                                        @foreach ($file_managements as $key => $value)
                                                            <tr>
                                                                <td class="text-center">
                                                                    {{ $key + 1 }}
                                                                </td>

                                                                <td>
                                                                    @if ($value->file_path)
                                                                        <img src="{{ $value->file_path }}"
                                                                            alt=""
                                                                            style="width: 100px; height: 100px; background-position: center; background-size: contain, cover;"
                                                                            data-enlargeable>
                                                                    @endif
                                                                </td>

                                                                <td class="text-center">
                                                                    <a href="{{ $value->file_path }}" download="">
                                                                        <i class="fa fa-download fa-lg text-danger"></i>
                                                                        <strong>Download</strong>
                                                                    </a>
                                                                </td>

                                                                <td class="text-center">
                                                                    <strong>{{ $value->upload_date ?? '' }}</strong>
                                                                </td>

                                                                <td class="text-center">
                                                                    <form
                                                                        action="{{ route('student_docs.destroy', $value->id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit"
                                                                            class="btn btn-danger btn-sm">
                                                                            Delete
                                                                        </button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
