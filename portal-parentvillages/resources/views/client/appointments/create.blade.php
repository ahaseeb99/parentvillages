@extends('layouts.client.app')

@section('title', 'Appointment Form')

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
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Appointment Form</h5>
                    <!--end::Page Title-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
            <div class="d-flex align-items-center">
                <!--begin::Actions-->
                <a href="/client/appointments" class="btn btn-light-primary font-weight-bolder btn-sm">Go Back</a>
                <!--end::Actions-->
            </div>
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
                            <h3 class="card-title">Appointment Form</h3>
                        </div>
                        <!--begin::Form-->
                        <form class="form" action="/client/appointments/" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <label class="font-weight-bold">Calendy Link:</label>
                                        <input name="calendy_link" type="text" class="form-control"
                                            placeholder="Enter your calendy link" />
                                        <span class="form-text text-muted">Calendy Link</span>
                                    </div>
                                    <span class="text_danger">
                                        @error("calendy_link")
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <button type="submit" class="btn btn-primary mr-2">Save</button>
                                        <button type="reset" class="btn btn-secondary">Reset</button>
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
        <!--end::Container-->
    </div>
    <!--end::Entry-->

@endsection

