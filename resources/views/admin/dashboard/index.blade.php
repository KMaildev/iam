@extends('admin.layouts.main')
@section('content')
    <div class="row flex-column flex-lg-row">
        <h2 class="h6 text-white-50">QUICK STATS</h2>
        <div class="col">
            <div class="card mb-3">
                <div class="card-body">
                    <h3 class="card-title h2">
                        {{ $total_companies }}
                    </h3>
                    <span class="text-success">
                        <i class="fas fa-chart-line"></i>
                        Total Company
                    </span>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3">
                <div class="card-body">
                    <h3 class="card-title h2">
                        {{ $total_student }}
                    </h3>
                    <span class="text-success">
                        <i class="fas fa-chart-line"></i>
                        Total Student
                    </span>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3">
                <div class="card-body">
                    <h3 class="card-title h2">
                        {{ $total_select_student }}
                    </h3>
                    <span class="text-success">
                        <i class="fas fa-chart-line"></i>
                        Total Select Student
                    </span>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3">
                <div class="card-body">
                    <h3 class="card-title h2">
                        {{ $site_visitors }}
                    </h3>
                    <span class="text-success">
                        <i class="fas fa-chart-line"></i>
                        Site visitors
                    </span>
                </div>
            </div>
        </div>
    </div>
@endsection
