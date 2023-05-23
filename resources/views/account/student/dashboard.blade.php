<div class="col-md-10 col-sm-12 col-lg-10">
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
                                            @if ($user->first_status == 'selected')
                                                <br>
                                                <i class="fa fa-square-check fa-2x" style="color: white;"></i>
                                                <br>
                                                <span style="color: white;">
                                                    <i class="fa-solid fa-calendar"></i>
                                                    {{ $user->first_select_date ?? '' }}
                                                </span>
                                            @else
                                                <br>
                                                <i class="fa-solid fa-square-xmark fa-2x" style="color: white;"></i>
                                                <br>
                                                <span style="color: white;">
                                                    <i class="fa-solid fa-calendar"></i>
                                                    Pending
                                                </span>
                                            @endif
                                        </span>
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
                                            @if ($user->second_status == 'selected')
                                                <br>
                                                <i class="fa fa-square-check fa-2x" style="color: white;"></i>
                                                <br>
                                                <span style="color: white;">
                                                    <i class="fa-solid fa-calendar"></i>
                                                    {{ $user->second_select_date ?? '' }}
                                                </span>
                                            @else
                                                <br>
                                                <i class="fa-solid fa-square-xmark fa-2x" style="color: white;"></i>
                                                <br>
                                                <span style="color: white;">
                                                    <i class="fa-solid fa-calendar"></i>
                                                    Pending
                                                </span>
                                            @endif
                                        </span>
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
                                            @if ($user->third_status == 'selected')
                                                <br>
                                                <i class="fa fa-square-check fa-2x" style="color: white;"></i>
                                                <br>
                                                <span style="color: white;">
                                                    <i class="fa-solid fa-calendar"></i>
                                                    {{ $user->third_select_date ?? '' }}
                                                </span>
                                            @else
                                                <br>
                                                <i class="fa-solid fa-square-xmark fa-2x" style="color: white;"></i>
                                                <br>
                                                <span style="color: white;">
                                                    <i class="fa-solid fa-calendar"></i>
                                                    Pending
                                                </span>
                                            @endif
                                        </span>
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
