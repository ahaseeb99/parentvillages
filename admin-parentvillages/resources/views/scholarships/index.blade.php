@extends('layouts.app')

@section('title', 'Scholarships')

@section('content')
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Scholarships</h5>
                <!--end::Title-->
                <!--begin::Separator-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                <!--end::Separator-->
                <!--begin::Search Form-->
                <div class="d-flex align-items-center" id="kt_subheader_search">
                    <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">{{ $total_scholarships }} Total</span>
                    <form class="ml-5">
                        <div class="input-group input-group-sm input-group-solid" style="max-width: 175px">
                            <input type="text" class="form-control" id="kt_subheader_search_form"
                                placeholder="Search..." />
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <span class="svg-icon">
                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Search.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                    fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <path
                                                    d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                    fill="#000000" fill-rule="nonzero" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <!--<i class="flaticon2-search-1 icon-sm"></i>-->
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
                <!--end::Search Form-->
                <!--begin::Group Actions-->
                <div class="d-flex- align-items-center flex-wrap mr-2 d-none" id="kt_subheader_group_actions">
                    <div class="text-dark-50 font-weight-bold">
                        <span id="kt_subheader_group_selected_rows">23</span>Selected:
                    </div>
                    <div class="d-flex ml-6">
                        <div class="dropdown mr-2" id="kt_subheader_group_actions_status_change">
                            <button type="button" class="btn btn-light-primary font-weight-bolder btn-sm dropdown-toggle"
                                data-toggle="dropdown">Update Status</button>
                            <div class="dropdown-menu p-0 m-0 dropdown-menu-sm">
                                <ul class="navi navi-hover pt-3 pb-4">
                                    <li
                                        class="navi-header font-weight-bolder text-uppercase text-primary font-size-lg pb-0">
                                        Change status to:</li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link" data-toggle="status-change" data-status="1">
                                            <span class="navi-text">
                                                <span
                                                    class="label label-light-success label-inline font-weight-bold">Approved</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link" data-toggle="status-change" data-status="2">
                                            <span class="navi-text">
                                                <span
                                                    class="label label-light-danger label-inline font-weight-bold">Rejected</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link" data-toggle="status-change" data-status="3">
                                            <span class="navi-text">
                                                <span
                                                    class="label label-light-warning label-inline font-weight-bold">Pending</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link" data-toggle="status-change" data-status="4">
                                            <span class="navi-text">
                                                <span class="label label-light-info label-inline font-weight-bold">On
                                                    Hold</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button class="btn btn-light-success font-weight-bolder btn-sm mr-2"
                            id="kt_subheader_group_actions_fetch" data-toggle="modal"
                            data-target="#kt_datatable_records_fetch_modal">Fetch Selected</button>
                        <button class="btn btn-light-danger font-weight-bolder btn-sm mr-2"
                            id="kt_subheader_group_actions_delete_all">Delete All</button>
                    </div>
                </div>
                <!--end::Group Actions-->
            </div>
            <!--end::Details-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Button-->
                <a href="../../../.html" class=""></a>
                <!--end::Button-->
                <!--begin::Button-->
                <a href="/scholarships/create" class="btn btn-light-primary font-weight-bold ml-2">Add Scholarship</a>
                <!--end::Button-->
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Row-->
            <div class="row">
                @foreach ($records as $record)
                    <div class="col-xl-6">

                        <!--begin::Card-->
                        <div class="card card-custom gutter-b card-stretch">
                            <!--begin::Body-->
                            <div class="card-body">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column mr-auto">
                                        <!--begin: Title-->
                                        <div class="d-flex flex-column mr-auto">
                                            <a href="#"
                                                class="text-dark text-hover-primary font-size-h4 font-weight-bolder mb-1">{{ $record->title }}</a>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Description-->
                                <div class="mb-10 mt-5 font-weight-bold">{{ $record->short_description }}</div>
                                <!--end::Description-->
                                <!--begin::Data-->
                                <div class="d-flex mb-5">
                                    <div class="d-flex align-items-center mr-7">
                                        <span class="font-weight-bold mr-4">Event</span>
                                        <span
                                            class="btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text">{{ $record->event_date }}</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="font-weight-bold mr-4">Due</span>
                                        <span
                                            class="btn btn-light-danger btn-sm font-weight-bold btn-upper btn-text">{{ $record->deadline }}</span>
                                    </div>
                                </div>
                                <!--end::Data-->
                            </div>
                            <!--end::Body-->
                            <!--begin::Footer-->
                            <div class="card-footer d-flex align-items-center">
                                <div class="d-flex">
                                    <div class="d-flex align-items-center mr-7">
                                        <span class="svg-icon svg-icon-gray-500">
                                            <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Text/Bullet-list.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path
                                                        d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z"
                                                        fill="#000000" />
                                                    <path
                                                        d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z"
                                                        fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <a href="#" class="font-weight-bolder text-primary ml-2">72 Applications</a>
                                    </div>
                                    <div class="d-flex align-items-center mr-7">
                                        <a href="/scholarships/{{ $record->id }}"
                                            class="btn btn-primary btn-sm">View</a>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="/scholarships/{{ $record->id }}/edit"
                                            class="btn btn-primary btn-sm">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <!--end::Footer-->
                        </div>
                        <!--end:: Card-->
                    </div>
                @endforeach
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
@endsection

@section('scripts')
    <script src="/assets/js/pages/custom/scholarships/index.js"></script>
@endsection
