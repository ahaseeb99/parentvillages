@extends('layouts.employee.app')

@section('title', 'Dashboard')

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
                <h5 class="text-dark font-weight-bold my-1 mr-5">Dashboard </h5>
                <!--end::Page Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                    <li class="breadcrumb-item">
                        <a href="/employee/dashboard" class="text-muted">Dashboard</a>
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
            <a href="/employee/evaluations" class="btn btn-light-primary font-weight-bolder btn-sm">Evaluation Process</a>
            <!--end::Actions-->
        </div>
        <!--end::Toolbar-->
        
    </div>
</div>
<!--end::Subheader-->
<!--begin::Content-->
<div class="content pt-0 d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <!--begin::Section-->
    <div class="container py-8">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <!--begin::Card-->
                        <a href="/employee/time-tracking" class="card card-custom wave wave-animate-slow bg-grey-100 mb-8 mb-lg-0">
                            <!--begin::Card Body-->
                            <div class="card-body">
                                <div class="d-flex align-items-center p-6">
                                    <!--begin::Icon-->
                                    <div class="mr-6">
                                        <span class="svg-icon menu-icon">
                                            <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Files/Upload.svg-->
                                            <span class="svg-icon svg-icon-primary svg-icon-4x">
                                                <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2020-10-29-133027/theme/html/demo1/dist/../src/media/svg/icons/Code/Time-schedule.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <path d="M10.9630156,7.5 L11.0475062,7.5 C11.3043819,7.5 11.5194647,7.69464724 11.5450248,7.95024814 L12,12.5 L15.2480695,14.3560397 C15.403857,14.4450611 15.5,14.6107328 15.5,14.7901613 L15.5,15 C15.5,15.2109164 15.3290185,15.3818979 15.1181021,15.3818979 C15.0841582,15.3818979 15.0503659,15.3773725 15.0176181,15.3684413 L10.3986612,14.1087258 C10.1672824,14.0456225 10.0132986,13.8271186 10.0316926,13.5879956 L10.4644883,7.96165175 C10.4845267,7.70115317 10.7017474,7.5 10.9630156,7.5 Z" fill="#000000"/>
                                                        <path d="M7.38979581,2.8349582 C8.65216735,2.29743306 10.0413491,2 11.5,2 C17.2989899,2 22,6.70101013 22,12.5 C22,18.2989899 17.2989899,23 11.5,23 C5.70101013,23 1,18.2989899 1,12.5 C1,11.5151324 1.13559454,10.5619345 1.38913364,9.65805651 L3.31481075,10.1982117 C3.10672013,10.940064 3,11.7119264 3,12.5 C3,17.1944204 6.80557963,21 11.5,21 C16.1944204,21 20,17.1944204 20,12.5 C20,7.80557963 16.1944204,4 11.5,4 C10.54876,4 9.62236069,4.15592757 8.74872191,4.45446326 L9.93948308,5.87355717 C10.0088058,5.95617272 10.0495583,6.05898805 10.05566,6.16666224 C10.0712834,6.4423623 9.86044965,6.67852665 9.5847496,6.69415008 L4.71777931,6.96995273 C4.66931162,6.97269931 4.62070229,6.96837279 4.57348157,6.95710938 C4.30487471,6.89303938 4.13906482,6.62335149 4.20313482,6.35474463 L5.33163823,1.62361064 C5.35654118,1.51920756 5.41437908,1.4255891 5.49660017,1.35659741 C5.7081375,1.17909652 6.0235153,1.2066885 6.2010162,1.41822583 L7.38979581,2.8349582 Z" fill="#000000" opacity="0.3"/>
                                                    </g>
                                                </svg>
                                            </span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Content-->
                                    <div class="d-flex flex-column">
                                        <h3 class="text-dark h3 mb-3">Time Tracking</h3>
                                        <div class="text-dark-50">Your total tracking</div>
                                    </div>
                                    <!--end::Content-->
                                </div>
                            </div>
                            <!--end::Card Body-->
                        </a>
                        <!--end::Card-->
                    </div>
                    <div class="col-lg-4">
                        <!--begin::Card-->
                        <a href="/employee/milaege-logs" class="card card-custom wave wave-animate bg-grey-100 mb-8 mb-lg-0">
                            <!--begin::Card Body-->
                            <div class="card-body">
                                <div class="d-flex align-items-center p-5">
                                    <!--begin::Icon-->
                                    <div class="mr-6">
                                        <span class="svg-icon ">
                                            <i class="flaticon-dashboard icon-3x text-primary"></i>
                                        </span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Content-->
                                    <div class="d-flex flex-column">
                                        <h3 class="text-dark h3 mb-3">Mileage Logs</h3>
                                        <div class="text-dark-50">Your Mileage Logs</div>
                                    </div>
                                    <!--end::Content-->
                                </div>
                            </div>
                            <!--end::Card Body-->
                        </a>
                        <!--end::Card-->
                    </div>
                    <div class="col-lg-4">
                        <!--begin::Card-->
                        <a href="#" class="card card-custom wave wave-animate-fast bg-grey-100">
                            <!--begin::Card Body-->
                            <div class="card-body">
                                <div class="d-flex align-items-center p-6">
                                    <!--begin::Icon-->
                                    <div class="mr-6">
                                        <span class="svg-icon svg-icon-primary svg-icon-4x">
                                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2020-10-29-133027/theme/html/demo1/dist/../src/media/svg/icons/Shopping/Chart-line1.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <path d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z" fill="#000000" fill-rule="nonzero"/>
                                                    <path d="M8.7295372,14.6839411 C8.35180695,15.0868534 7.71897114,15.1072675 7.31605887,14.7295372 C6.9131466,14.3518069 6.89273254,13.7189711 7.2704628,13.3160589 L11.0204628,9.31605887 C11.3857725,8.92639521 11.9928179,8.89260288 12.3991193,9.23931335 L15.358855,11.7649545 L19.2151172,6.88035571 C19.5573373,6.44687693 20.1861655,6.37289714 20.6196443,6.71511723 C21.0531231,7.05733733 21.1271029,7.68616551 20.7848828,8.11964429 L16.2848828,13.8196443 C15.9333973,14.2648593 15.2823707,14.3288915 14.8508807,13.9606866 L11.8268294,11.3801628 L8.7295372,14.6839411 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Content-->
                                    <div class="d-flex flex-column">
                                        <h3 class="text-dark h3 mb-3">Expenses</h3>
                                        <div class="text-dark-50">Track Your Expenses</div>
                                    </div>
                                    <!--end::Content-->
                                </div>
                            </div>
                            <!--end::Card Body-->
                        </a>
                        <!--end::Card-->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container" style = "margin-top: 25px ">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-custom card-stretch card-stretch-half gutter-b" style="height: 100%">
                            <!--begin::Body-->
                            <div class="card-header">
                                <div class="card-title">
                                    <span class="symbol symbol-50 symbol-light-primary mr-2">
                                        <span class="symbol-label">
                                            <span class="svg-icon ">
                                                <i class="flaticon-dashboard icon-3x text-primary"></i>
                                            </span>
                                        </span>
                                    </span>
                                    <h3 class="card-label">Mileage Log</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="milage_logs_chart" class="card-rounded-bottom" data-color="primary" style="height: 350px"></div>
                            </div>
                            <!--end::Body-->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!--begin::Card-->
                        <div class="card card-custom card-stretch card-stretch-half gutter-b" style="height: 100%">
                            <div class="card-header">
                                <div class="card-title">
                                    <span class="symbol symbol-50 symbol-light-primary mr-2">
                                        <span class="symbol-label">
                                            <span class="svg-icon svg-icon-primary svg-icon-4x">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <path d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z" fill="#000000" fill-rule="nonzero"/>
                                                        <path d="M8.7295372,14.6839411 C8.35180695,15.0868534 7.71897114,15.1072675 7.31605887,14.7295372 C6.9131466,14.3518069 6.89273254,13.7189711 7.2704628,13.3160589 L11.0204628,9.31605887 C11.3857725,8.92639521 11.9928179,8.89260288 12.3991193,9.23931335 L15.358855,11.7649545 L19.2151172,6.88035571 C19.5573373,6.44687693 20.1861655,6.37289714 20.6196443,6.71511723 C21.0531231,7.05733733 21.1271029,7.68616551 20.7848828,8.11964429 L16.2848828,13.8196443 C15.9333973,14.2648593 15.2823707,14.3288915 14.8508807,13.9606866 L11.8268294,11.3801628 L8.7295372,14.6839411 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                    </g>
                                                </svg>
                                            </span>
                                        </span>
                                    </span>
                                    <h3 class="card-label">Expense</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <!--begin::Chart-->
                                <div id="expense_chart"></div>
                                <!--end::Chart-->
                            </div>
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="card card-custom card-stretch card-stretch-half gutter-b" style="height: 100%">
                            <!--begin::Body-->
                            <div class="card-header">
                                <div class="card-title">
                                    <span class="symbol symbol-50 symbol-light-primary mr-2">
                                        <span class="symbol-label">
                                            <span class="svg-icon svg-icon-primary svg-icon-4x">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <path d="M10.9630156,7.5 L11.0475062,7.5 C11.3043819,7.5 11.5194647,7.69464724 11.5450248,7.95024814 L12,12.5 L15.2480695,14.3560397 C15.403857,14.4450611 15.5,14.6107328 15.5,14.7901613 L15.5,15 C15.5,15.2109164 15.3290185,15.3818979 15.1181021,15.3818979 C15.0841582,15.3818979 15.0503659,15.3773725 15.0176181,15.3684413 L10.3986612,14.1087258 C10.1672824,14.0456225 10.0132986,13.8271186 10.0316926,13.5879956 L10.4644883,7.96165175 C10.4845267,7.70115317 10.7017474,7.5 10.9630156,7.5 Z" fill="#000000"/>
                                                        <path d="M7.38979581,2.8349582 C8.65216735,2.29743306 10.0413491,2 11.5,2 C17.2989899,2 22,6.70101013 22,12.5 C22,18.2989899 17.2989899,23 11.5,23 C5.70101013,23 1,18.2989899 1,12.5 C1,11.5151324 1.13559454,10.5619345 1.38913364,9.65805651 L3.31481075,10.1982117 C3.10672013,10.940064 3,11.7119264 3,12.5 C3,17.1944204 6.80557963,21 11.5,21 C16.1944204,21 20,17.1944204 20,12.5 C20,7.80557963 16.1944204,4 11.5,4 C10.54876,4 9.62236069,4.15592757 8.74872191,4.45446326 L9.93948308,5.87355717 C10.0088058,5.95617272 10.0495583,6.05898805 10.05566,6.16666224 C10.0712834,6.4423623 9.86044965,6.67852665 9.5847496,6.69415008 L4.71777931,6.96995273 C4.66931162,6.97269931 4.62070229,6.96837279 4.57348157,6.95710938 C4.30487471,6.89303938 4.13906482,6.62335149 4.20313482,6.35474463 L5.33163823,1.62361064 C5.35654118,1.51920756 5.41437908,1.4255891 5.49660017,1.35659741 C5.7081375,1.17909652 6.0235153,1.2066885 6.2010162,1.41822583 L7.38979581,2.8349582 Z" fill="#000000" opacity="0.3"/>
                                                    </g>
                                                </svg>
                                            </span>
                                        </span>
                                    </span>
                                    <h3 class="card-label">Time Tracking</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="time_tracking_chart" class="card-rounded-bottom" data-color="primary" style="height: 350px"></div>
                            </div>
                            <!--end::Body-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <!--begin::Row-->
        
        <!--end::Row-->
    </div>
    <!--end::Section-->
</div>
<!--end::Content-->
@endsection
