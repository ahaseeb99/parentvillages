@extends('layouts.employee.app')

@section('title', 'Milaege Logs')

@section('section')

    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Mobile Toggle-->
                <button class="burger-icon burger-icon-left mr-4 d-inline-block d-lg-none" id="kt_subheader_mobile_toggle">
                    <span></span>
                </button>
                <!--end::Mobile Toggle-->
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Mileage Logs</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="" class="text-muted">View Logs</a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
        </div>
    </div>
    <!--end::Subheader-->

    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Notice-->
            <div class="alert alert-custom alert-white alert-shadow gutter-b" role="alert">
                <div class="alert-icon">
                    <span class="svg-icon svg-icon-primary svg-icon-xl">
                        <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Tools/Compass.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                            height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path
                                    d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z"
                                    fill="#000000" opacity="0.3" />
                                <path
                                    d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z"
                                    fill="#000000" fill-rule="nonzero" />
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                </div>
                <div class="alert-text">
                    <p>Employees use this to report how many miles they have used on their car when they use
                        it for work.</p>
                </div>
            </div>
            <!--end::Notice-->
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header py-3">
                    <div class="card-title">
                        <span class="card-icon">
                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Shopping/Chart-bar1.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <rect fill="#000000" opacity="0.3" x="12" y="4" width="3"
                                            height="13" rx="1.5" />
                                        <rect fill="#000000" opacity="0.3" x="7" y="9" width="3"
                                            height="8" rx="1.5" />
                                        <path
                                            d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z"
                                            fill="#000000" fill-rule="nonzero" />
                                        <rect fill="#000000" opacity="0.3" x="17" y="11" width="3"
                                            height="6" rx="1.5" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </span>
                        <h3 class="card-label">Mileage Logs</h3>
                    </div>
                    <div class="card-toolbar">
                        {{-- <!--begin::Dropdown-->
                        <div class="dropdown dropdown-inline mr-2">
                            <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="la la-download"></i>Export</button>
                            <!--begin::Dropdown Menu-->
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                <ul class="nav flex-column nav-hover">
                                    <li class="nav-header font-weight-bolder text-uppercase text-primary pb-2">Choose an option:</li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon la la-print"></i>
                                            <span class="nav-text">Print</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon la la-copy"></i>
                                            <span class="nav-text">Copy</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon la la-file-excel-o"></i>
                                            <span class="nav-text">Excel</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon la la-file-text-o"></i>
                                            <span class="nav-text">CSV</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon la la-file-pdf-o"></i>
                                            <span class="nav-text">PDF</span>
                                        </a>
                                    </li>
                                </ul> 
                            </div>
                            <!--end::Dropdown Menu-->
                        </div>
                        <!--end::Dropdown--> --}}
                        <!--begin::Button-->
                        <a href="/employee/milaege-logs/create" class="btn btn-primary font-weight-bolder">
                            <i class="la la-plus"></i>New Log</a>
                        <!--end::Button-->
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Search Form-->
                    <!--begin::Search Form-->
                    <div class="mt-2 mb-7">
                        <div class="row align-items-center">
                            <div class="col-lg-9 col-xl-8">
                                <div class="row align-items-center">
                                    <div class="col-md-4 my-2 my-md-0">
                                        <div class="input-icon">
                                            <input type="text" class="form-control" placeholder="Search..."
                                                id="kt_datatable_search_query" />
                                            <span>
                                                <i class="flaticon2-search-1 text-muted"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                                <a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>
                            </div> --}}
                        </div>
                    </div>
                    <!--end::Search Form-->
                    <!--end: Search Form-->
                    <!--begin: Datatable-->
                    <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"></div>
                    <!--end: Datatable-->
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>

@endsection

@section('scripts')
    <script src="/assets/js/pages/milaege_logs/index.js?v=7.1.5"></script>
@endsection
