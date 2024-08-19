@extends('layouts.app')

@section('title', 'Resources')

@section('content')
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
                    <h5 class="text-dark font-weight-bold my-1 mr-5">User Documents</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="" class="text-muted">Users</a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Todo Files-->
            <div class="d-flex flex-row">
                <!--begin::List-->
                <div class="flex-row-fluid d-flex flex-column ml-lg-8">
                    <div class="d-flex flex-column flex-grow-1">
                        <!--begin::Row-->
                        <div class="row">
                            @foreach ($records as $record)
                                <!--begin::Col-->
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                    <!--begin::Card-->
                                    <div class="card card-custom gutter-b card-stretch">
                                        <div class="card-header border-0">
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title
                                                            </h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex flex-column align-items-center">
                                                <!--begin: Icon-->
                                                @if (pathinfo($record->path, PATHINFO_EXTENSION) === 'pdf')
                                                    <img alt="" class="max-h-65px"
                                                        src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/files/pdf.svg" />
                                                @elseif (pathinfo($record->path, PATHINFO_EXTENSION) === 'png')
                                                    <img alt="" class="max-h-65px"
                                                        src="	https://static.thenounproject.com/png/4147238-200.png" />
                                                @elseif (pathinfo($record->path, PATHINFO_EXTENSION) === 'docx')

                                                @elseif (pathinfo($record->path, PATHINFO_EXTENSION) === 'jpg' || pathinfo($record->path, PATHINFO_EXTENSION) === 'jpeg')
                                                    <img alt="" class="max-h-65px"
                                                        src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/files/jpg.svg" />
                                                @elseif (pathinfo($record->path, PATHINFO_EXTENSION) === 'zip')
                                                    <img alt="" class="max-h-65px"
                                                        src="	https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/files/zip.svg" />
                                                @elseif (pathinfo($record->path, PATHINFO_EXTENSION) === 'psd')
                                                    <img alt="" class="max-h-65px"
                                                        src="https://png.pngtree.com/png-vector/20220611/ourmid/pngtree-adobe-photoshop-psd-ps-icon-png-image_4952703.png" />
                                                @elseif (pathinfo($record->path, PATHINFO_EXTENSION) === 'xml')
                                                    <img alt="" class="max-h-65px"
                                                        src="	https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/files/html.svg" />
                                                @elseif (pathinfo($record->path, PATHINFO_EXTENSION) === 'html')
                                                    <img alt="" class="max-h-65px"
                                                        src="	https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/files/html.svg" />
                                                @endif
                                                <!--begin: Title-->
                                                <a href="{{ $record->path }}" target="_blank"
                                                    class="text-dark-75 font-weight-bold mt-15 font-size-lg">{{ $record->name . '.' . pathinfo($record->path, PATHINFO_EXTENSION) }}</a>
                                                <!--end: Tite-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end:: Card-->
                                </div>
                                <!--end::Col-->
                            @endforeach
                            {{-- @foreach ($records as $record)
                                    <div class="modal-body">
                                        <p><strong>Document Path:</strong> {{ $record->path }}</p>
                                        <p><strong>User ID:</strong> {{ $record->user->id }}</p>
                                        <!-- You can add more user-related information if needed -->
                                    </div>
                                @endforeach --}}
                        </div>
                    </div>
                </div>
                <!--end::List-->
            </div>
            <!--end::Todo Files-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
@endsection

@section('scripts')
    <script src="/assets/js/pages/custom/employee/list-datatable9cd7.js?v=7.1.5"></script>
@endsection
