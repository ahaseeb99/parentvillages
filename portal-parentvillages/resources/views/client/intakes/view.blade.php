@extends('layouts.client.app')

@section('title', 'View Intake')

@section('section')
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Intake Details</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="#" class="text-muted">Intakes</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#" class="text-muted">Intake Details</a>
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
                            <div class="d-flex justify-content-between pb-10 pb-md-20 flex-column flex-md-row">
                                <h1 class="display-4 font-weight-boldest mb-10">Intake Details</h1>
                                <div class="d-flex flex-column align-items-md-end px-0">

                                    <span class="d-flex flex-column align-items-md-end opacity-70">
                                        <span class="font-weight-bold">{{ $intake->name }}</span>
                                    </span>
                                    <span class="d-flex flex-column align-items-md-end opacity-70">
                                        <span>{{ $intake->email }}</span>
                                        <span>{{ $intake->phone }}</span>
                                    </span>
                                </div>
                            </div>
                            <div class="border-bottom w-100"></div>
                            <div class="d-flex justify-content-between pt-6">
                                <h6 class="display-7 font-weight-boldest mb-5">Personal Information</h6>
                            </div>
                            <div class="d-flex justify-content-between pt-6">
                                <div class="d-flex flex-column flex-root">
                                    <span class="font-weight-bolder mb-2">Language</span>
                                    <span class="opacity-70">{{ $intake->language }}</span>
                                </div>
                                <div class="d-flex flex-column flex-root">
                                    <span class="font-weight-bolder mb-2">Gender</span>
                                    <span class="opacity-70">{{ $intake->gender }}</span>
                                </div>
                                <div class="d-flex flex-column flex-root">
                                    <span class="font-weight-bolder mb-2">Age</span>
                                    <span class="opacity-70">{{ $intake->age }}</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between pt-6">
                                <div class="d-flex flex-column flex-root">
                                    <span class="font-weight-bolder mb-2">Street Address</span>
                                    <span class="opacity-70">{{ $intake->address_1 }}</span>
                                </div>
                                <div class="d-flex flex-column flex-root">
                                    <span class="font-weight-bolder mb-2">Street Address Line 2</span>
                                    <span class="opacity-70">{{ $intake->address_2 }}</span>
                                </div>
                                <div class="d-flex flex-column flex-root">
                                    <span class="font-weight-bolder mb-2">City.</span>
                                    <span class="opacity-70">{{ $intake->city }}</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between pt-6">
                                <div class="d-flex flex-column flex-root">
                                    <span class="font-weight-bolder mb-2">State / Province</span>
                                    <span class="opacity-70">{{ $intake->state }}</span>
                                </div>
                                <div class="d-flex flex-column flex-root">
                                    <span class="font-weight-bolder mb-2">Postal Code</span>
                                    <span class="opacity-70">{{ $intake->postal_code }}</span>
                                </div>
                                <div class="d-flex flex-column flex-root">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end: Invoice header-->
                    <!-- begin: Invoice body-->
                    <div class="row justify-content-center py-5 px-8 py-md-5 px-md-0">
                        <div class="col-md-9">
                            <div class="border-bottom w-100"></div>
                            {{-- <div class="d-flex justify-content-between pt-6">
                                <h6 class="display-7 font-weight-boldest mb-5">Personal Information</h6>
                            </div> --}}
                            <div class="d-flex justify-content-between pt-6">
                                <div class="d-flex flex-column flex-root">
                                    <span class="font-weight-bolder mb-2">Prefered way of Contact?</span>
                                    @foreach ($intake->GetAnswersByQuestionId(1) as $item)
                                        <span class="opacity-70">{{ $item['answer'] }}</span>
                                    @endforeach
                                </div>
                                <div class="d-flex flex-column flex-root">
                                    <span class="font-weight-bolder mb-2">How did you hear about us?</span>
                                    @foreach ($intake->GetAnswersByQuestionId(2) as $item)
                                        <span class="opacity-70">{{ $item['answer'] }}</span>
                                    @endforeach
                                </div>
                                <div class="d-flex flex-column flex-root">
                                    <span class="font-weight-bolder mb-2">Would you like to remain anonymous?</span>
                                    @foreach ($intake->GetAnswersByQuestionId(3) as $item)
                                        <span class="opacity-70">{{ $item['answer'] }}</span>
                                    @endforeach
                                </div>
                            </div>
                            <div class="d-flex justify-content-between pt-6">
                                <div class="d-flex flex-column flex-root">
                                    <span class="font-weight-bolder mb-2">Race and Ethnicity?</span>
                                    @foreach ($intake->GetAnswersByQuestionId(4) as $item)
                                        <span class="opacity-70">{{ $item['answer'] }}</span>
                                    @endforeach
                                </div>
                                <div class="d-flex flex-column flex-root">
                                    <span class="font-weight-bolder mb-2">Would it be best if you had an interpreter?</span>
                                    @foreach ($intake->GetAnswersByQuestionId(5) as $item)
                                        <span class="opacity-70">{{ $item['answer'] }}</span>
                                    @endforeach
                                </div>
                                <div class="d-flex flex-column flex-root">
                                    <span class="font-weight-bolder mb-2">Do you have a disability?</span>
                                    @foreach ($intake->GetAnswersByQuestionId(6) as $item)
                                        <span class="opacity-70">{{ $item['answer'] }}</span>
                                    @endforeach
                                </div>
                            </div>
                            <div class="d-flex justify-content-between pt-6">
                                <div class="d-flex flex-column flex-root">
                                    <span class="font-weight-bolder mb-2">Do you feel that you are in danger?</span>
                                    @foreach ($intake->GetAnswersByQuestionId(7) as $item)
                                        <span class="opacity-70">{{ $item['answer'] }}</span>
                                    @endforeach
                                </div>
                                <div class="d-flex flex-column flex-root">
                                    <span class="font-weight-bolder mb-2">Have you or your child(ren) or family member been
                                        affected by any act of violence or crime? Are you or your child(ren) a victim of
                                        violence or crime?</span>
                                    @foreach ($intake->GetAnswersByQuestionId(8) as $item)
                                        <span class="opacity-70">{{ $item['answer'] }}</span>
                                    @endforeach
                                </div>
                            </div>
                            <div class="d-flex justify-content-between pt-6">
                                <div class="d-flex flex-column flex-root">
                                    <span class="font-weight-bolder mb-2">There are many acts of crime or violence we do not
                                        always think of. Please check if you or your child(ren) or a family member have been
                                        affected by any of the following</span>
                                    @foreach ($intake->GetAnswersByQuestionId(9) as $item)
                                        <span class="opacity-70">{{ $item['answer'] }}</span>
                                    @endforeach
                                </div>
                            </div>
                            <div class="d-flex justify-content-between pt-6">
                                <div class="d-flex flex-column flex-root">
                                    <span class="font-weight-bolder mb-2">What services are you looking for?</span>
                                    @foreach ($intake->GetAnswersByQuestionId(10) as $item)
                                        <span class="opacity-70">{{ $item['answer'] }}</span>
                                    @endforeach
                                </div>
                                <div class="d-flex flex-column flex-root">
                                    <span class="font-weight-bolder mb-2">Are any of your needs a result of being a victim
                                        of a crime?</span>
                                    @foreach ($intake->GetAnswersByQuestionId(11) as $item)
                                        <span class="opacity-70">{{ $item['answer'] }}</span>
                                    @endforeach
                                </div>
                            </div>
                            <div class="d-flex justify-content-between pt-6">
                                <div class="d-flex flex-column flex-root">
                                    <span class="font-weight-bolder mb-2">Are you in need of financial assistance for any
                                        of the following, or have you had to pay for any of these services due to being a
                                        victim or a family member of a victim of crime in Massachusetts within the last
                                        three years?</span>
                                    @foreach ($intake->GetAnswersByQuestionId(12) as $item)
                                        <span class="opacity-70">{{ $item['answer'] }}</span>
                                    @endforeach
                                </div>
                            </div>
                            <div class="d-flex justify-content-between pt-6">
                                <div class="d-flex flex-column flex-root">
                                    <span class="font-weight-bolder mb-2">Do the expenses of services prevent you or a
                                        family member from not currently receiving mental health/clinical/therapeutic
                                        services?</span>
                                    @foreach ($intake->GetAnswersByQuestionId(13) as $item)
                                        <span class="opacity-70">{{ $item['answer'] }}</span>
                                    @endforeach
                                </div>
                                <div class="d-flex flex-column flex-root">
                                    <span class="font-weight-bolder mb-2">Are you receiving public assistance (SNAP, WIC,
                                        TANF, SSI)?</span>
                                    @foreach ($intake->GetAnswersByQuestionId(14) as $item)
                                        <span class="opacity-70">{{ $item['answer'] }}</span>
                                    @endforeach
                                </div>
                            </div>
                            <div class="d-flex justify-content-between pt-6">
                                <div class="d-flex flex-column flex-root">
                                    <span class="font-weight-bolder mb-2">What services are you looking for?</span>
                                    @foreach ($intake->GetAnswersByQuestionId(15) as $item)
                                        <span class="opacity-70">{{ $item['answer'] }}</span>
                                    @endforeach
                                </div>
                                <div class="d-flex flex-column flex-root">
                                    <span class="font-weight-bolder mb-2">How many children do you need childcare
                                        for?</span>
                                    @foreach ($intake->GetAnswersByQuestionId(16) as $item)
                                        <span class="opacity-70">{{ $item['answer'] }}</span>
                                    @endforeach
                                </div>
                            </div>
                            <div class="d-flex justify-content-between pt-6">
                                <div class="d-flex flex-column flex-root">
                                    <span class="font-weight-bolder mb-2">What area of education are you looking for
                                        resources/services for?</span>
                                    @foreach ($intake->GetAnswersByQuestionId(17) as $item)
                                        <span class="opacity-70">{{ $item['answer'] }}</span>
                                    @endforeach
                                </div>
                                <div class="d-flex flex-column flex-root">
                                    <span class="font-weight-bolder mb-2">Do you have a voucher?</span>
                                    @foreach ($intake->GetAnswersByQuestionId(18) as $item)
                                        <span class="opacity-70">{{ $item['answer'] }}</span>
                                    @endforeach
                                </div>
                            </div>
                            <div class="d-flex justify-content-between pt-6">
                                <div class="d-flex flex-column flex-root">
                                    <span class="font-weight-bolder mb-2">What is/are the age(s)?</span>
                                    @foreach ($intake->GetAnswersByQuestionId(19) as $item)
                                        <span class="opacity-70">{{ $item['answer'] }}</span>
                                    @endforeach
                                </div>
                                <div class="d-flex flex-column flex-root">
                                    <span class="font-weight-bolder mb-2">Would you like to share any additional
                                        information?</span>
                                    @foreach ($intake->GetAnswersByQuestionId(20) as $item)
                                        <span class="opacity-70">{{ $item['answer'] }}</span>
                                    @endforeach
                                </div>
                            </div>
                            <div class="d-flex justify-content-between pt-6">
                                <div class="d-flex flex-column flex-root">
                                    <span class="font-weight-bolder mb-2">If you have a program(s) in mind, please list
                                        them below.</span>
                                    @foreach ($intake->GetAnswersByQuestionId(21) as $item)
                                        <span class="opacity-70">{{ $item['answer'] }}</span>
                                    @endforeach
                                </div>
                                <div class="d-flex flex-column flex-root">
                                    <span class="font-weight-bolder mb-2">Where is your location (zip code)?</span>
                                    @foreach ($intake->GetAnswersByQuestionId(22) as $item)
                                        <span class="opacity-70">{{ $item['answer'] }}</span>
                                    @endforeach
                                </div>
                            </div>
                            <div class="d-flex justify-content-between pt-6">
                                <div class="d-flex flex-column flex-root">
                                    <span class="font-weight-bolder mb-2">What type of childcare are you looking
                                        for?</span>
                                    @foreach ($intake->GetAnswersByQuestionId(23) as $item)
                                        <span class="opacity-70">{{ $item['answer'] }}</span>
                                    @endforeach
                                </div>
                                <div class="d-flex flex-column flex-root">
                                    <span class="font-weight-bolder mb-2">What days are you in need of childcare?</span>
                                    @foreach ($intake->GetAnswersByQuestionId(24) as $item)
                                        <span class="opacity-70">{{ $item['answer'] }}</span>
                                    @endforeach
                                </div>
                            </div>
                            <div class="d-flex justify-content-between pt-6">
                                <div class="d-flex flex-column flex-root">
                                    <span class="font-weight-bolder mb-2">How many hours per day will you need childcare?
                                        What time(s) of the day?</span>
                                    @foreach ($intake->GetAnswersByQuestionId(25) as $item)
                                        <span class="opacity-70">{{ $item['answer'] }}</span>
                                    @endforeach
                                </div>
                                <div class="d-flex flex-column flex-root">
                                    <span class="font-weight-bolder mb-2">Will you need transportation as well?</span>
                                    @foreach ($intake->GetAnswersByQuestionId(26) as $item)
                                        <span class="opacity-70">{{ $item['answer'] }}</span>
                                    @endforeach
                                </div>
                            </div>
                            <div class="d-flex justify-content-between pt-6">
                                <div class="d-flex flex-column flex-root">
                                    <span class="font-weight-bolder mb-2">Would you like to add any other information
                                        regarding childcare?</span>
                                    @foreach ($intake->GetAnswersByQuestionId(27) as $item)
                                        <span class="opacity-70">{{ $item['answer'] }}</span>
                                    @endforeach
                                </div>
                            </div>
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
