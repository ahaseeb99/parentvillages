@extends('layouts.employee.app')

@section('title', 'Evaluations')

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
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Evaluations</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="#" class="text-muted">View Evaluations</a>
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
                    <p>You have to review the documents and sign off.</p>
                </div>
            </div>
            <!--end::Notice-->
            <!--begin::Card-->
            <div class="card card-custom gutter-b">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">Evaluation Process
                            <span class="d-block text-muted pt-2 font-size-sm">View Documents</span>
                        </h3>
                    </div>
                    <div class="card-toolbar">
                    </div>
                </div>
                <div class="card-body row">
                    @foreach ($records as $record)
                        <!--begin::Col-->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <!--begin::Card-->
                            <div class="card card-custom gutter-b card-stretch">
                                <div class="card-header border-0">
                                    <h3 class="card-title"></h3>
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
                                                <div class="modal-body">
                                                    ...
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
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>

@endsection
