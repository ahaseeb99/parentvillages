@extends('layouts.employee.app')

@section('title', 'Expenses')

@section('section')
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Expenses</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="#" class="text-muted">Edit Expense</a>
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
                <a href="/employee/time-tracking" class="btn btn-light-primary font-weight-bolder btn-sm">Go Back</a>
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
                            <h3 class="card-title">Edit Expense</h3>
                        </div>
                        <!--begin::Form-->
                        <form class="form" method="POST" action="/employee/expenses/{{ $expense->id }}">

                            @method('PUT')
                            @csrf

                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label>Date:</label>
                                        <input name="date" value="{{ $expense->date }}" type="text"
                                            class="form-control" id="kt_datepicker_1" readonly="readonly"
                                            placeholder="Select date" />
                                        <span class="form-text text-muted">Please select the date</span>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Amount:</label>
                                        <input required name="amount" value="{{ $expense->amount }}" type="text" id="numberInput" pattern="[0-9]*"
                                            class="form-control" placeholder="Enter contact number" />
                                        <span class="form-text text-muted">Please enter total Amount</span>
                                    </div>
                                    {{-- <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="typeSelect1">Amount:</label>
                                            <input required name="amount" type="text" id="numberInput" pattern="[0-9]*" class="form-control"
                                                placeholder="Enter receipt amount" />
                                            <span class="form-text text-muted">Please the receipt amount.</span>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label>Name:</label>
                                        <textarea required name="name" class="form-control" id="exampleTextarea" rows="1">
                                            {{ $expense->name }}
                                        </textarea>
                                        <span class="form-text text-muted">Please enter name</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-12 text-danger">
                                        @error('date')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <button type="submit" class="btn btn-primary mr-2">Update</button>
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
    </div>

@endsection

@section('scripts')

    <script src="/assets/js/pages/crud/forms/widgets/bootstrap-datepicker9cd7.js?v=7.1.5"></script>
@endsection
