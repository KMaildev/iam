<div class="col-md-3 col-sm-3 col-lg-3">
    <div class="list-group">

        @if (Auth::user()->account_type == 'student')
            <a href="{{ route('dashboard.index') }}"
                class="list-group-item list-group-item-action {{ request()->is('dashboard') ? 'active_color' : '' }}">
                <i class="fa fa-home"></i>
                Dashboard
            </a>

            <a href="{{ route('student_account.index') }}"
                class="list-group-item list-group-item-action {{ request()->is('student_account') ? 'active_color' : '' }}">
                <i class="fa fa-edit"></i>
                Update Information
            </a>

            <a href="{{ route('student_docs.index') }}"
                class="list-group-item list-group-item-action {{ request()->is('student_docs') ? 'active_color' : '' }}">
                <i class="fa fa-upload"></i>
                Upload  Documents
            </a>

            <a href="{{ route('change_password.index') }}"
                class="list-group-item list-group-item-action {{ request()->is('change_password') ? 'active_color' : '' }}">
                <i class="fa fa-key"></i>
                Change Password
            </a>
        @else

            <a href="{{ route('dashboard.index') }}"
                class="list-group-item list-group-item-action {{ request()->is('dashboard') ? 'active_color' : '' }}">
                <i class="fa fa-users"></i>
                Students
            </a>

            <a href="{{ route('company_user_list.index') }}"
                class="list-group-item list-group-item-action {{ request()->is('company_user_list') ? 'active_color' : '' }}">
                <i class="fa fa-check-double"></i>
                Selected Students
            </a>

            {{-- <a href="{{ route('company_account.index') }}"
                class="list-group-item list-group-item-action {{ request()->is('company_account') ? 'active_color' : '' }}">
                <i class="fa fa-edit"></i>
                Update Your Information
            </a> --}}
            
        @endif

        <a class="list-group-item list-group-item-action" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            <i class="fa fa-lock"></i>
            Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</div>

<style>
    .active_color {
        background-color: red !important;
        color: white;
    }
</style>
