@extends('layouts.app')

@section('title', 'Create Scholarship')

@section('content')
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Scholarships</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="#" class="text-muted">Add Scholarship</a>
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
                <a href="/scholarships" class="btn btn-light-primary font-weight-bolder btn-sm">Go Back</a>
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
                            <h3 class="card-title">Add Scholarships</h3>
                        </div>
                        <!--begin::Form-->
                        <form class="form" method="POST" action="{{ route('scholarships.store') }}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label>Title:</label>
                                        <input name="title" type="text" class="form-control"
                                            placeholder="Enter title" />
                                        <span class="form-text text-muted">Please enter title</span>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Short Description:</label>
                                        <input required name="short_description" type="text" class="form-control"
                                            placeholder="Enter short description" />
                                        <span class="form-text text-muted">Please enter short description</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <label>Full Description:</label>
                                        <textarea name="full_description" class="form-control" cols="30" rows="10"></textarea>
                                        <span class="form-text text-muted">Please enter full desciption</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label>Due Date:</label>
                                        <input required id="kt_datepicker_1" name="deadline" type="text"
                                            class="form-control" placeholder="Enter scholarship deadline" />
                                        <span class="form-text text-muted">Please enter deadline</span>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Event Date / Time:</label>
                                        <input required name="event_date" type="datetime-local" class="form-control"
                                            placeholder="Enter scholarship event date & time" />
                                        <span class="form-text text-muted">Please enter event date & time</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-12 text-danger">
                                        @error('name')
                                            {{ $message }}
                                        @enderror

                                        @error('email')
                                            {{ $message }}
                                        @enderror

                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <button type="submit" class="btn btn-primary mr-2">Save</button>
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
    <script>
        tinymce.init({
            selector: 'textarea#main_desc', // Replace this CSS selector to match the placeholder element for TinyMCE
            plugins: 'code table lists',
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
        });
    </script>

    <script src="/assets/js/pages/crud/forms/widgets/bootstrap-datepicker9cd7.js?v=7.1.5"></script>
@endsection
