<div class="col-md-9 col-sm-12 col-lg-9">
    <div class="card">
        <div class="card-header">
            Student Dashboard
        </div>

        <div class="card-body">
            <div class="row">

                <div class="col-md-4 col-lg-4 col-sm-12 mb-4">
                    <div class="card" style="background-color:#e0c020;">
                        <div class="card-header" style="color: white; font-size: 20px;">
                            1st Status
                        </div>
                        <div class="card-body" style="padding: 1px 20px">
                            <div class="d-flex justify-content-between" style="position: relative;">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar">
                                        <span class="avatar-initial bg-label-primary rounded-circle">
                                            {{-- @if ($user_list->select_status == 'selected')
                                                <i class="fa fa-square-check fa-3x" style="color: white;"></i>
                                            @else
                                                <i class="fa-solid fa-square-xmark fa-3x" style="color: white;"></i>
                                            @endif --}}
                                        </span>
                                    </div>
                                    <div class="card-info">
                                        <h5 class="card-title" style="font-size: 20px; color: white;">
                                            {{-- @if ($user_list->select_status == 'selected')
                                                Selected
                                            @else
                                                Pending
                                            @endif --}}
                                        </h5>
                                        <small class="" style="font-size: 16px; color:white; font-weight:bold;">
                                            {{-- @if ($user_list->company_user_lists_table->choose_date ?? '')
                                                {{ $user_list->company_user_lists_table->choose_date ?? '' }}
                                            @else
                                                Pending
                                            @endif --}}
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>


                <div class="col-md-4 col-lg-4 col-sm-12 mb-4">
                    <div class="card" style="background-color:#0c9641;">
                        <div class="card-header" style="color: white; font-size: 20px;">
                            2nd Status
                        </div>
                        <div class="card-body" style="padding: 1px 20px">
                            <div class="d-flex justify-content-between" style="position: relative;">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar">
                                        <span class="avatar-initial bg-label-primary rounded-circle">
                                            {{-- @if ($user_list->second_status == 'selected')
                                                <i class="fa fa-square-check fa-3x" style="color: white;"></i>
                                            @else
                                                <i class="fa-solid fa-square-xmark fa-3x" style="color: white;"></i>
                                            @endif --}}
                                        </span>
                                    </div>
                                    <div class="card-info">
                                        <h5 class="card-title" style="font-size: 20px; color: white;">
                                            {{-- @if ($user_list->second_status == 'selected')
                                                Selected
                                            @else
                                                Pending
                                            @endif --}}
                                        </h5>
                                        <small class="" style="font-size: 16px; color:white; font-weight:bold;">
                                            {{-- @if ($user_list->second_status ?? '')
                                                {{ $user_list->second_date ?? '' }}
                                            @else
                                                Pending
                                            @endif
                                        </small> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>


                <div class="col-md-4 col-lg-4 col-sm-12 mb-4">
                    <div class="card" style="background-color:#e13c31;">
                        <div class="card-header" style="color: white; font-size: 20px;">
                            3rd Status
                        </div>
                        <div class="card-body" style="padding: 1px 20px">
                            <div class="d-flex justify-content-between" style="position: relative;">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar">
                                        <span class="avatar-initial bg-label-primary rounded-circle">
                                            {{-- @if ($user_list->third_status == 'selected')
                                                <i class="fa fa-square-check fa-3x" style="color: white;"></i>
                                            @else
                                                <i class="fa-solid fa-square-xmark fa-3x" style="color: white;"></i>
                                            @endif --}}
                                        </span>
                                    </div>
                                    <div class="card-info">
                                        <h5 class="card-title" style="font-size: 20px; color: white;">
                                            {{-- @if ($user_list->third_status == 'selected')
                                                Selected
                                            @else
                                                Pending
                                            @endif --}}
                                        </h5>
                                        <small class="" style="font-size: 16px; color:white; font-weight:bold;">
                                            {{-- @if ($user_list->third_status ?? '')
                                                {{ $user_list->third_date ?? '' }}
                                            @else
                                                Pending
                                            @endif --}}
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
