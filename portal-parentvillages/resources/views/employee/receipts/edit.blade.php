@extends('layouts.employee.app')

@section('title', 'Receipts')

@section('section')

    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Receipts</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="#" class="text-muted">Edit Receipt</a>
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
                <a href="/employee/receipts" class="btn btn-light-primary font-weight-bolder btn-sm">Go Back</a>
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
            <div class="row">
                <div class="col-lg-12">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b example example-compact">
                        <div class="card-header">
                            <h3 class="card-title">Edit Receipt</h3>
                        </div>
                        <!--begin::Form-->
                        <form class="form" method="POST" action="/employee/receipts/{{ $receipt->id }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label>Date:</label>
                                        <input name="date" type="text" class="form-control" id="kt_datepicker_1"
                                            readonly="readonly" value="{{ $receipt->date }}" placeholder="Select date" />
                                        <span class="form-text text-muted">Please select the date</span>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Place:</label>
                                        <input required value="{{ $receipt->place }}" name="place" type="text"
                                            class="form-control" placeholder="Enter place name" />
                                        <span class="form-text text-muted">Please the receipt place.</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="typeSelect1">Amount:</label>
                                            <input required name="amount" type="text" id="numberInput" pattern="[0-9]*" class="form-control"
                                                placeholder="Enter receipt amount" />
                                            <span class="form-text text-muted">Please the receipt amount.</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="typeSelect1">Receipt Images:</label>

                                            <input required multiple name="receipt[]" type="file" class="form-control"
                                                placeholder="Enter receipt receipt" />

                                            <span class="form-text text-muted">Please the receipt receipt.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-12 text-danger">
                                        @error('date')
                                            {{ $message }}
                                        @enderror

                                        @error('place')
                                            {{ $message }}
                                        @enderror

                                        @error('amount')
                                            {{ $message }}
                                        @enderror

                                        @error('receipt')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                                        <button type="reset" class="btn btn-secondary">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Card-->
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <script src="/assets/js/pages/crud/forms/widgets/bootstrap-datepicker9cd7.js?v=7.1.5"></script>
    <!--begin::Page Scripts(used by this page)-->
    <script src="/assets/js/pages/crud/file-upload/image-input9cd7.js?v=7.1.5"></script>
    <!--end::Page Scripts-->
@endsection
