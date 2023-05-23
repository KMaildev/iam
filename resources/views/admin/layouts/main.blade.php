<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Control</title>
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="{{ asset('assets/toastr/toastr.css') }}" />
</head>

<body>
    <div class="container-fluid">
        <div class="row g-0">

            <nav class="col-2 bg-light pr-3 border-right">
                <h1 class="h4 py-3 text-center text-primary">
                    <span class="d-none d-lg-inline" style="color: red">
                        I Am Myanmar
                    </span>
                </h1>

                <div class="list-group text-center text-lg-left">

                    <span class="list-group-item disabled d-none d-lg-block">
                        <small>CONTROLS</small>
                    </span>

                    <a href="{{ route('admin_panel.index') }}" class="list-group-item list-group-item-action">
                        <i class="fas fa-home"></i>
                        <span class="d-none d-lg-inline">Dashboard</span>
                    </a>

                    <a href="{{ route('company.index') }}" class="list-group-item list-group-item-action">
                        <i class="fas fa-users"></i>
                        <span class="d-none d-lg-inline">
                            Company
                        </span>
                        <span class="d-none d-lg-inline badge bg-danger rounded-pill float-right">20</span>
                    </a>

                    <a href="{{ route('student_manage.index') }}" class="list-group-item list-group-item-action">
                        <i class="fas fa-chart-line"></i>
                        <span class="d-none d-lg-inline">
                            Students
                        </span>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas fa-flag"></i>
                        <span class="d-none d-lg-inline">
                            Reports
                        </span>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas fa-lock"></i>
                        <span class="d-none d-lg-inline">
                            Logout
                        </span>
                    </a>

                </div>
            </nav>

            <main class="col-10">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="flex-fill"></div>
                    <div class="navbar nav">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                <i class="fas fa-user-circle"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="#" class="dropdown-item">Logout</a></li>
                            </ul>
                        </li>
                    </div>
                </nav>

                <div class="container-fluid mt-3 p-4">
                    @yield('content')
                </div>
            </main>

        </div>
    </div>
    <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

    <script type="text/javascript" src="{{ asset('assets/datatables/jquery.dataTables.js') }}"></script>

    {{-- <script src="{{ asset('assets/datatables/jquery.dataTablesfd53.js?v4.0.1') }}"></script> --}}
    {{-- <script src="{{ asset('assets/datatables/dataTables.bootstrap4fd53.js?v4.0.1') }}"></script> --}}

    {{-- <script src="{{ asset('assets/datatables/datatables.minfd53.js?v4.0.1') }}"></script> --}}
    <script src="{{ asset('assets/datatables/tables/datatable.minfd53.js') }}"></script>
    <script src="{{ asset('assets/toastr/toastr.js') }}"></script>

    @yield('script')
</body>

</html>
