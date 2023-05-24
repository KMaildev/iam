@extends('admin.layouts.main')
@section('content')
    <div class="row flex-column flex-lg-row">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    Login History
                </div>
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered">
                            <thead>
                                <tr style="background-color: #903731; color: white;">
                                    <th scope="col">
                                        #
                                    </th>
                                    <th scope="col">
                                        Name
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
                                        Last Login At
                                    </th>
                                    <th scope="col">
                                        Login IP
                                    </th>
                                    <th scope="col">
                                        Devices
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $key => $user)
                                    <tr>
                                        <td>
                                            {{ $key + 1 }}
                                        </td>

                                        <td>
                                            {{ $user->name ?? '' }}
                                        </td>

                                        <td>
                                            {{ $user->address ?? '' }}
                                        </td>

                                        <td>
                                            {{ $user->phone ?? '' }}
                                        </td>

                                        <td>
                                            {{ $user->email ?? '' }}
                                        </td>

                                        <td>
                                            {{ $user->plain_password ?? '' }}
                                        </td>

                                        <td>
                                            {{ $user->last_login_at ?? '' }}
                                        </td>

                                        <td>
                                            {{ $user->last_login_ip ?? '' }}
                                        </td>

                                        <td>
                                            {{ $user->device ?? '' }}
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
