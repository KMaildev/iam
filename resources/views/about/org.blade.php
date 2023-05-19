@extends('layouts.main')
@section('title', '- Our Organization Chart')
@section('content')

    <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center"
        data-tm-bg-img="{{ asset('data/activities_banner.png') }}">
        <div class="container pt-50 pb-50">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title">
                            Our Organization Chart
                        </h2>
                        <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                            <div class="breadcrumbs">
                                <span>
                                    <a href="{{ route('home') }}" rel="home">
                                        Home
                                    </a>
                                </span>
                                <span>
                                    <i class="fa fa-angle-right"></i>
                                </span>
                                <span class="active">
                                    Our Organization Chart
                                </span>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')
@endsection
