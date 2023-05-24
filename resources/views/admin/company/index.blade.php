@extends('admin.layouts.main')
@section('content')
    <div class="row flex-column flex-lg-row">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    Company
                </div>
                <div class="card-body">
                    <a href="{{ route('company_export') }}" class="btn btn-success btn-sm">
                        <i class="fa fa-file"></i>
                        Excel Download
                    </a>
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered">
                            <thead>
                                <tr style="background-color: #903731; color: white;">
                                    <th scope="col">
                                        #
                                    </th>
                                    <th scope="col">
                                        ID
                                    </th>
                                    <th scope="col">
                                        Company Name
                                    </th>
                                    <th scope="col">
                                        Contact Person
                                    </th>
                                    <th scope="col">
                                        Address
                                    </th>
                                    <th scope="col">
                                        Phone
                                    </th>
                                    <th scope="col">
                                        Email
                                    </th>
                                    <th scope="col">
                                        Password
                                    </th>
                                    <th scope="col">
                                        Facebook
                                    </th>
                                    <th scope="col">
                                        Instagram
                                    </th>
                                    <th scope="col">
                                        Website
                                    </th>
                                    <th scope="col">
                                        Other
                                    </th>
                                    <th scope="col">
                                        Status
                                    </th>
                                    <th scope="col">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($companies as $key => $company)
                                    <tr>
                                        <td>
                                            {{ $key + 1 }}
                                        </td>

                                        <td>
                                            {{ $company->account_id ?? '' }}
                                        </td>

                                        <td>
                                            {{ $company->company_name ?? '' }}
                                        </td>

                                        <td>
                                            {{ $company->name ?? '' }}
                                        </td>

                                        <td>
                                            {{ $company->address ?? '' }}
                                        </td>

                                        <td>
                                            <a href="tel:{{ $company->phone ?? '' }}">
                                                {{ $company->phone ?? '' }}
                                            </a>
                                        </td>

                                        <td>
                                            <a href="mailto:{{ $company->email ?? '' }}">
                                                {{ $company->email ?? '' }}
                                            </a>
                                        </td>

                                        <td>
                                            {{ $company->plain_password ?? '' }}
                                        </td>

                                        <td>
                                            {{ $company->facebook_link ?? '' }}
                                        </td>

                                        <td>
                                            {{ $company->instagram_link ?? '' }}
                                        </td>

                                        <td>
                                            {{ $company->website ?? '' }}
                                        </td>

                                        <td>
                                            {{ $company->other ?? '' }}
                                        </td>

                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="isActiveChecked" @if ($company->user->is_active == 'active') checked @endif
                                                    onclick="isActiveChecked('{{ $company->user->id }}')">
                                                <label class="form-check-label" for="isActiveChecked">
                                                    {{ ucfirst($company->user->is_active) }}
                                                </label>
                                            </div>
                                        </td>

                                        <td>
                                            <a href="{{ route('company.edit', $company->id) }}" class="btn btn-success btn-sm">
                                                Update
                                            </a>
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
@endsection
<script>
    function isActiveChecked(user_id) {
        var url = '{{ url('user_active_status') }}';
        $.ajax({
            url: url,
            data: {
                user_id: user_id,
            },
            method: 'GET',
            success: function(result) {
                location.reload();
            }
        });
    }
</script>
