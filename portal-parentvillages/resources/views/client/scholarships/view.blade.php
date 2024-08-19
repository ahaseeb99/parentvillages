@extends('layouts.client.app')

@section('title', 'View Scholarship')

@section('section')
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Scholarship Details</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="/client/scholarships" class="text-muted">Scholarships</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="/client/scholarships/{{ $scholarship->id }}" class="text-muted">Scholarship Details</a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Actions-->
                {{-- <a href="#" class="btn btn-light-primary font-weight-bolder btn-sm">Download</a> --}}
                <!--end::Actions-->
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!-- begin::Card-->
            <div class="card card-custom overflow-hidden">
                <div class="card-body p-0">
                    <!-- begin: Invoice-->
                    <!-- begin: Invoice header-->
                    <div class="row justify-content-center py-8 px-8 mt-10 px-md-0">
                        <div class="col-md-9">
                            <div class=" justify-content-between pb-10 pb-md-20 flex-column flex-md-row">
                                <h1 class="display-4 font-weight-boldest mb-10">{{ $scholarship->title }}</h1>
                                <p>
                                    {{ $scholarship->short_description }}
                                </p>
                                <p>
                                    {{ $scholarship->full_description }}
                                </p>
                                <div class="d-flex">
                                    <span class="d-flex px-4 flex-column opacity-70">
                                        <span class="font-weight-bold">Due Date:</span>
                                        <span class="font-weight-bold">{{ $scholarship->deadline }}</span>
                                    </span>
                                    <span class="d-flex flex-column opacity-70">
                                        <span class="font-weight-bold">Event Date:</span>
                                        <span class="font-weight-bold">{{ $scholarship->event_date }}</span>
                                    </span>
                                </div>
                                <span class="d-flex flex-column align-items-md-end opacity-70">
                                    {{-- <span>{{ $intake->email }}</span> --}}
                                    {{-- <span>{{ $intake->phone }}</span> --}}
                                </span>
                            </div>
                            <div class="border-bottom w-100"></div>
                        </div>
                    </div>
                    <!-- end: Invoice header-->
                    <!-- begin: Invoice body-->
                    <div class="row justify-content-center py-5 px-8 py-md-5 px-md-0">
                        <div class="col-md-9">
                        </div>
                    </div>
                    <!-- end: Invoice body-->
                    <!-- end: Invoice-->
                </div>
            </div>
            <!-- end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
@endsection
