@extends('layouts.client.app')

@section('title', 'Intake Form')

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
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Participant Intake Form</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="/client/dashboard" class="text-muted">Dashboard</a>
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
                <a href="/client/intake-form" class="btn btn-light-primary font-weight-bolder btn-sm">Intake Form</a>
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
                    All client services provided by Parent Villages are free of charge. This form is to get basic
                    information on your needs and the services you are looking for. This form must first be completed in
                    order to begin our intake process. We would like to collect as much information as possible, but if you
                    are uncomfortable answering any questions, or if the questions do not pertain to you, you can skip them.
                    After the form is submitted you will hear back from Parent Villages within 2 business days. We may need
                    to contact you for additional information as we continue the process.
                    <br><br>
                    <p class="font-weight-bold">
                        Parent Villages does not discriminate on the basis of race, color, national <br>
                        origin, religion, sex, gender identity, sexual orientation, disability, or age.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b example example-compact">
                        <div class="card-header">
                            <h3 class="card-title">Participant Intake Form</h3>
                        </div>
                        <!--begin::Form-->
                        <form class="form" action="/client/intake-form/submit" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label class="font-weight-bold">Name:</label>
                                        <input name="name" type="text" class="form-control"
                                            placeholder="Enter first name" />
                                        <span class="form-text text-muted">Please enter your first name</span>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="font-weight-bold">Email:</label>
                                        <input name="email" type="email" class="form-control"
                                            placeholder="Enter your email address" />
                                        <span class="form-text text-muted">Please enter your email address</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label class="font-weight-bold">Contact Number:</label>
                                        <input name="phone" type="text" class="form-control"
                                            placeholder="Enter contact number" />
                                        <span class="form-text text-muted">Please enter your contact number</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <div class="checkbox-list">
                                            <label class="checkbox">
                                                <input type="checkbox" value="It is Okay to call" name="question_1[]" />
                                                <span></span>It is Okay to call</label>
                                            <label class="checkbox">
                                                <input type="checkbox" value="It is Okay to leave a voicemail"
                                                    name="question_1[]" />
                                                <span></span>It is Okay to leave a voicemail</label>
                                            <label class="checkbox">
                                                <input type="checkbox" value="It is Okay to text" name="question_1[]" />
                                                <span></span>It is Okay to text</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <label class="font-weight-bold">Address:</label>
                                        <input name="address_1" type="text" class="form-control"
                                            placeholder="Enter your street address" />
                                        <span class="form-text text-muted">Street Address</span>
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="font-weight-bold"></label>
                                        <input name="address_2" type="text" class="form-control"
                                            placeholder="Enter street address line 2" />
                                        <span class="form-text text-muted">Street Address Line 2</span>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="font-weight-bold"></label>
                                        <input name="city" type="text" class="form-control"
                                            placeholder="Enter your city" />
                                        <span class="form-text text-muted">City</span>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="font-weight-bold"></label>
                                        <input name="state" type="text" class="form-control"
                                            placeholder="Enter state / province " />
                                        <span class="form-text text-muted">State / Province</span>
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="font-weight-bold"></label>
                                        <input name="postal_code" type="text" class="form-control"
                                            placeholder="Enter postal / zip code" />
                                        <span class="form-text text-muted">Postal / Zip Code</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label class="font-weight-bold">How did you hear about us?</label>
                                        <input name="question_2" question="How did you hear about us?" type="text"
                                            class="form-control" placeholder="Enter first name" />
                                        <span class="form-text text-muted">Please enter your first name</span>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="font-weight-bold">Would you like to remain anonymous?</label>
                                        <div class="radio-inline">
                                            <label class="radio">
                                                <input type="radio" value="Yes" name="question_3" />
                                                <span></span>Yes</label>
                                            <label class="radio">
                                                <input type="radio" value="No" name="question_3" />
                                                <span></span>No</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label class="font-weight-bold">Gender</label>
                                        <div class="radio-list">
                                            <label class="radio">
                                                <input type="radio" value="male" name="gender" />
                                                <span></span>Male</label>
                                            <label class="radio">
                                                <input type="radio" value="female" name="gender" />
                                                <span></span>Female</label>
                                            <label class="radio">
                                                <input type="radio" value="other" name="gender" />
                                                <span></span>Other</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="font-weight-bold">Race and Ethnicity?</label>
                                        <div class="checkbox-list">
                                            <label class="checkbox">
                                                <input type="checkbox" value="Hispanic/Latino/Latina"
                                                    name="question_4[]" />
                                                <span></span>Hispanic/Latino/Latina</label>
                                            <label class="checkbox">
                                                <input type="checkbox" value="Black or African American"
                                                    name="question_4[]" />
                                                <span></span>Black or African American</label>
                                            <label class="checkbox">
                                                <input type="checkbox" value="American Indian or Alaska Native"
                                                    name="question_4[]" />
                                                <span></span>American Indian or Alaska Native</label>
                                            <label class="checkbox">
                                                <input type="checkbox" value="Native Hawaiian or Other Pacific Islanders"
                                                    name="question_4[]" />
                                                <span></span>Native Hawaiian or Other Pacific Islanders</label>
                                            <label class="checkbox">
                                                <input type="checkbox" value="Asian" name="question_4[]" />
                                                <span></span>Asian</label>
                                            <label class="checkbox">
                                                <input type="checkbox" value="White" name="question_4[]" />
                                                <span></span>White</label>
                                            <label class="checkbox">
                                                <input type="checkbox" value="Other" name="question_4[]" />
                                                <span></span>Other</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label class="font-weight-bold">What is your primary language?</label>
                                        <input type="text" name="language" class="form-control"
                                            placeholder="Enter first name" />
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="font-weight-bold">What is your age range or the age range of the
                                            individual looking for
                                            services?</label>
                                        <div class="radio-inline">
                                            <label class="radio">
                                                <input type="radio" value="0-12" name="age" />
                                                <span></span>0-12</label>
                                            <label class="radio">
                                                <input type="radio" value="13-17" name="age" />
                                                <span></span>13-17</label>
                                            <label class="radio">
                                                <input type="radio" value="18-24" name="age" />
                                                <span></span>18-24</label>
                                            <label class="radio">
                                                <input type="radio" value="25-59" name="age" />
                                                <span></span>25-59</label>
                                            <label class="radio">
                                                <input type="radio" value="60+" name="age" />
                                                <span></span>60+</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label class="font-weight-bold">Would it be best if you had an interpreter?</label>
                                        <div class="radio-inline">
                                            <label class="radio">
                                                <input type="radio" value="Yes" name="question_5" />
                                                <span></span>Yes</label>
                                            <label class="radio">
                                                <input type="radio" value="No" name="question_5" />
                                                <span></span>No</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="font-weight-bold">Do you have a disability? (cognitive, physical,
                                            mental)</label>
                                        <div class="radio-inline">
                                            <label class="radio">
                                                <input type="radio" value="Yes" name="question_6" />
                                                <span></span>Yes</label>
                                            <label class="radio">
                                                <input type="radio" value="No" name="question_6" />
                                                <span></span>No</label>
                                            <label class="radio">
                                                <input type="radio" value="Prefer not to say" name="question_6" />
                                                <span></span>Prefer not to say</label>
                                        </div>
                                    </div>
                                </div>

                                {{-- Second Heading --}}
                                <div class="form-group row">
                                    <div class="col-lg-12 mt-4">
                                        <p>
                                            Violent crime impacts every aspect of a person’s life. The resulting physical
                                            and psychological injuries can affect a person’s ability to work, go to school,
                                            and meet their own individual goals and aspirations
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <p>
                                            Often victims may require treatment to address the injuries caused by the
                                            violent acts of another. The monetary expenses incurred – after losing a loved
                                            one, for medical and dental care, for psychological assistance, and by injuries
                                            resulting in a disability to work – should not serve to further victimize those
                                            who are affected by violent crime.
                                        </p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label class="font-weight-bold">Do you feel that you are in danger?</label>
                                        <div class="radio-inline">
                                            <label class="radio">
                                                <input type="radio" value="Yes" name="question_7" />
                                                <span></span>Yes</label>
                                            <label class="radio">
                                                <input type="radio" value="No" name="question_7" />
                                                <span></span>No</label>
                                            <label class="radio">
                                                <input type="radio" value="Unsure" name="question_7" />
                                                <span></span>Unsure</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="font-weight-bold">Have you or your child(ren) or family member been
                                            affected by any act of
                                            violence or crime? Are you or your child(ren) a victim of violence or
                                            crime?</label>
                                        <div class="radio-inline">
                                            <label class="radio">
                                                <input type="radio" value="Yes" name="question_8" />
                                                <span></span>Yes</label>
                                            <label class="radio">
                                                <input type="radio" value="No" name="question_8" />
                                                <span></span>No</label>
                                            <label class="radio">
                                                <input type="radio" value="Maybe" name="question_8" />
                                                <span></span>Maybe</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <label class="font-weight-bold">There are many acts of crime or violence we do not
                                            always think of. Please check if you or your child(ren) or a family member have
                                            been affected by any of the following:</label>
                                        <div class="d-flex">
                                            <div class="checkbox-list">
                                                <label class="checkbox">
                                                    <input type="checkbox"
                                                        value="Adult Assault (including physical, sexual, or assault as a
                                                    child)"
                                                        name="question_9[]" />
                                                    <span></span>Adult Assault (including physical, sexual, or assault as a
                                                    child)</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Bullying" name="question_9[]" />
                                                    <span></span>Bullying</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Child Abuse or Neglect"
                                                        name="question_9[]" />
                                                    <span></span>Child Abuse or Neglect</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Domestic or Family Violence"
                                                        name="question_9[]" />
                                                    <span></span>Domestic or Family Violence</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Terrorism" name="question_9[]" />
                                                    <span></span>Terrorism</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Stalking/ Harrassment"
                                                        name="question_9[]" />
                                                    <span></span>Stalking/ Harrassment</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Identity Theft(fraud, financial, crime)"
                                                        name="question_9[]" />
                                                    <span></span>Identity Theft(fraud, financial, crime)</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Robbery" name="question_9[]" />
                                                    <span></span>Robbery</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Kidnapping" name="question_9[]" />
                                                    <span></span>Kidnapping</label>
                                            </div>
                                            <div class="checkbox-list">
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Arson" name="question_9[]" />
                                                    <span></span>Arson</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Burglary" name="question_9[]" />
                                                    <span></span>Burglary</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Elderly Abuse or Neglect"
                                                        name="question_9[]" />
                                                    <span></span>Elderly Abuse or Neglect</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Hate Crime (religious, racial, gender)"
                                                        name="question_9[]" />
                                                    <span></span>Hate Crime (religious, racial, gender)</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Survivor of Homicide Victims"
                                                        name="question_9[]" />
                                                    <span></span>Survivor of Homicide Victims</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="DUI/DWI incidents"
                                                        name="question_9[]" />
                                                    <span></span>DUI/DWI incidents</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Teen Dating Victimization"
                                                        name="question_9[]" />
                                                    <span></span>Teen Dating Victimization</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Vehicular Victim (hit and run)"
                                                        name="question_9[]" />
                                                    <span></span>Vehicular Victim (hit and run)</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label class="font-weight-bold">What services are you looking for? *</label>
                                        <div class="d-flex">
                                            <div class="checkbox-list mx-1">
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Emergency Assistance"
                                                        name="question_10[]" />
                                                    <span></span>Emergency Assistance</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Childcare/Transportation"
                                                        name="question_10[]" />
                                                    <span></span>Childcare/Transportation</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Education" name="question_10[]" />
                                                    <span></span>Education</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Utility Assistance"
                                                        name="question_10[]" />
                                                    <span></span>Utility Assistance</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Counseling/Therapy"
                                                        name="question_10[]" />
                                                    <span></span>Counseling/Therapy</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Government Assistance"
                                                        name="question_10[]" />
                                                    <span></span>Government Assistance</label>
                                            </div>
                                            <div class="checkbox-list">
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Housing" name="question_10[]" />
                                                    <span></span>Housing</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Employment/Job Training"
                                                        name="question_10[]" />
                                                    <span></span>Employment/Job Training</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Food Security" name="question_10[]" />
                                                    <span></span>Food Security</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Victim Advocacy Assistance"
                                                        name="question_10[]" />
                                                    <span></span>Victim Advocacy Assistance</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Rehab/Recovery Services"
                                                        name="question_10[]" />
                                                    <span></span>Rehab/Recovery Services</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Type option 12" name="question_10[]" />
                                                    <span></span>Type option 12</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="font-weight-bold">Are any of your needs a result of being a victim of
                                            a crime?</label>
                                        <div class="radio-inline">
                                            <label class="radio">
                                                <input type="radio" value="Yes" name="question_11" />
                                                <span></span>Yes</label>
                                            <label class="radio">
                                                <input type="radio" value="No" name="question_11" />
                                                <span></span>No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mt-4">
                                    <div class="col-lg-12">
                                        <label class="font-weight-bold">
                                            Are you in need of financial assistance for any of the following, or have you
                                            had to pay for any of these services due to being a victim or a family member of
                                            a victim of crime in Massachusetts within the last three years?
                                        </label>
                                        <div class="d-flex">
                                            <div class="checkbox-list mx-1">
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Lost wages (for victim only)"
                                                        name="question_12[]" />
                                                    <span></span>Lost wages (for victim only)</label>
                                                <label class="checkbox">
                                                    <input type="checkbox"
                                                        value="Loss of financial support (for dependents of homicide victims)"
                                                        name="question_12[]" />
                                                    <span></span>Loss of financial support (for dependents of homicide
                                                    victims)</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Funeral/burial" name="question_12[]" />
                                                    <span></span>Funeral/burial</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Crime scene cleanup*"
                                                        name="question_12[]" />
                                                    <span></span>Crime scene cleanup*</label>
                                                <label class="checkbox">
                                                    <input type="checkbox"
                                                        value="Forensic Sexual Assault Exam associated expenses*"
                                                        name="question_12[]" />
                                                    <span></span>Forensic Sexual Assault Exam associated expenses*</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Medical services*"
                                                        name="question_12[]" />
                                                    <span></span>Medical services*</label>
                                                <label class="checkbox">
                                                    <input type="checkbox"
                                                        value="Counseling for children who witness violence against a family
                                                member"
                                                        name="question_12[]" />
                                                    <span></span>Counseling for children who witness violence against a
                                                    family member</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Security Measures"
                                                        name="question_12[]" />
                                                    <span></span>Security Measures</label>

                                            </div>
                                            <div class="checkbox-list">
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Medical supplies/pharmacy*"
                                                        name="question_12[]" />
                                                    <span></span>Medical supplies/pharmacy*</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Dental services*"
                                                        name="question_12[]" />
                                                    <span></span>Dental services*</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Replacement homemaker services*"
                                                        name="question_12[]" />
                                                    <span></span>Replacement homemaker services*</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Ancillary funeral/burial expenses"
                                                        name="question_12[]" />
                                                    <span></span>Ancillary funeral/burial expenses</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Replacement bedding/clothing"
                                                        name="question_12[]" />
                                                    <span></span>Replacement bedding/clothing</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Counseling for victim"
                                                        name="question_12[]" />
                                                    <span></span>Counseling for victim</label>
                                                <label class="checkbox">
                                                    <input type="checkbox"
                                                        value="Counseling for family members of homicide victims"
                                                        name="question_12[]" />
                                                    <span></span>Counseling for family members of homicide victims</label>
                                                <label class="checkbox">
                                                    <input type="checkbox"
                                                        value="Counseling for non-offending parents of a child victim"
                                                        name="question_12[]" />
                                                    <span></span>Counseling for non-offending parents of a child
                                                    victim</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <label class="font-weight-bold">Do the expenses of services prevent you or a family
                                            member from not currently receiving mental health/clinical/therapeutic
                                            services?</label>
                                        <div class="radio-inline">
                                            <label class="radio">
                                                <input type="radio" value="Yes" name="question_13" />
                                                <span></span>Yes</label>
                                            <label class="radio">
                                                <input type="radio" value="No" name="question_13" />
                                                <span></span>No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <p>Have any of these types of crimes affected you? If so, start your application
                                            today.</p>

                                        <a
                                            href="https://www.mass.gov/massachusetts-victims-of-violent-crime-compensation">https://www.mass.gov/massachusetts-victims-of-violent-crime-compensation</a>
                                        <br><br>
                                        <p>Someone from Parent Villages is available if you need assistance with your
                                            application.</p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label class="font-weight-bold">Are you receiving public assistance (SNAP, WIC,
                                            TANF, SSI)?</label>
                                        <div class="radio-list">
                                            <label class="radio">
                                                <input type="radio" value="Yes" name="question_14" />
                                                <span></span>Yes</label>
                                            <label class="radio">
                                                <input type="radio" value="No" name="question_14" />
                                                <span></span>No</label>
                                            <label class="radio">
                                                <input type="radio" value="Unsure" name="question_14" />
                                                <span></span>Unsure</label>
                                            <label class="radio">
                                                <input type="radio" value="Prefer not to answer" name="question_14" />
                                                <span></span>Prefer not to answer</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="font-weight-bold">What services are you looking for? *</label>
                                        <div class="d-flex">
                                            <div class="checkbox-list mx-1">
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Emergency Shelter"
                                                        name="question_15[]" />
                                                    <span></span>Emergency Shelter</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Shelter" name="question_15[]" />
                                                    <span></span>Shelter</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Home Furnishing"
                                                        name="question_15[]" />
                                                    <span></span>Home Furnishing</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Relocation Assistance"
                                                        name="question_15[]" />
                                                    <span></span>Relocation Assistance</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Other" name="question_15[]" />
                                                    <span></span>Other</label>
                                            </div>
                                            <div class="checkbox-list">
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Rental Assistance"
                                                        name="question_15[]" />
                                                    <span></span>Rental Assistance</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Housing Search" name="question_15[]" />
                                                    <span></span>Housing Search</label>
                                                <label class="checkbox">
                                                    <input type="checkbox"
                                                        value="Purchasing a Home/First -Time Home Buyer"
                                                        name="question_15[]" />
                                                    <span></span>Purchasing a Home/First -Time Home Buyer</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label class="font-weight-bold">How many children do you need childcare
                                            for?</label>
                                        <input type="text" name="question_16" class="form-control" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label class="font-weight-bold">What area of education are you looking for
                                            resources/services for?</label>
                                        <div class="d-flex">
                                            <div class="checkbox-list mx-1">
                                                <label class="checkbox">
                                                    <input type="checkbox" value="I am looking for myself"
                                                        name="question_17[]" />
                                                    <span></span>I am looking for myself</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="I am looking for my child"
                                                        name="question_17[]" />
                                                    <span></span>I am looking for my child</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="I am looking for someone else"
                                                        name="question_17[]" />
                                                    <span></span>I am looking for someone else</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Other" name="question_17[]" />
                                                    <span></span>Other</label>
                                            </div>
                                            <div class="checkbox-list">
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Pre K- 12th grade"
                                                        name="question_17[]" />
                                                    <span></span>Pre K- 12th grade</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="HiSet/GED" name="question_17[]" />
                                                    <span></span>HiSet/GED</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Higher Education"
                                                        name="question_17[]" />
                                                    <span></span>Higher Education</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="font-weight-bold">Do you have a voucher?</label>
                                        <div class="radio-list">
                                            <label class="radio">
                                                <input type="radio" value="Yes" name="question_18" />
                                                <span></span>Yes</label>
                                            <label class="radio">
                                                <input type="radio" value="No" name="question_18" />
                                                <span></span>No</label>
                                            <label class="radio">
                                                <input type="radio" value="No, I need help getting one"
                                                    name="question_18" />
                                                <span></span>No, I need help getting one</label>
                                            <label class="radio">
                                                <input type="radio" value="No sure" name="question_18" />
                                                <span></span>No sure</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label class="font-weight-bold">What is/are the age(s)?</label>
                                        <input type="text" name="question_19" class="form-control" />
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="font-weight-bold">7. Would you like to share any additional
                                            information?</label>
                                        <textarea name="question_20" class="form-control" cols="30" rows="1"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label class="font-weight-bold">If you have a program(s) in mind, please list them
                                            below.</label>
                                        <textarea name="question_21" class="form-control" cols="30" rows="1"></textarea>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="font-weight-bold">Where is your location (zip code)?</label>
                                        <input name="question_22" type="text" class="form-control" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label class="font-weight-bold">What type of childcare are you looking for?</label>
                                        <div class="checkbox-list">
                                            <label class="checkbox">
                                                <input type="checkbox" value="Before school programming"
                                                    name="question_23[]" />
                                                <span></span>Before school programming</label>
                                            <label class="checkbox">
                                                <input type="checkbox" value="After school programming"
                                                    name="question_23[]" />
                                                <span></span>After school programming</label>
                                            <label class="checkbox">
                                                <input type="checkbox" value="Daycare" name="question_23[]" />
                                                <span></span>Daycare</label>
                                            <label class="checkbox">
                                                <input type="checkbox" value="Extended care" name="question_23[]" />
                                                <span></span>Extended care</label>
                                            <label class="checkbox">
                                                <input type="checkbox" value="Preschool" name="question_23[]" />
                                                <span></span>Preschool</label>
                                            <label class="checkbox">
                                                <input type="checkbox" value="Other" name="question_23[]" />
                                                <span></span>Other</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="font-weight-bold">What days are you in need of childcare?</label>
                                        <div class="d-flex">
                                            <div class="checkbox-list">
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Monday" name="question_24[]" />
                                                    <span></span>Monday</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Tuesday" name="question_24[]" />
                                                    <span></span>Tuesday</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Wednesday" name="question_24[]" />
                                                    <span></span>Wednesday</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Thursday" name="question_24[]" />
                                                    <span></span>Thursday</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Friday" name="question_24[]" />
                                                    <span></span>Friday</label>
                                            </div>
                                            <div class="checkbox-list">
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Saturday" name="question_24[]" />
                                                    <span></span>Saturday</label>
                                                <label class="checkbox">
                                                    <input type="checkbox" value="Sunday" name="question_24[]" />
                                                    <span></span>Sunday</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label class="font-weight-bold">How many hours per day will you need childcare?
                                            What time(s) of the
                                            day?</label>
                                        <input type="text" name="question_25" class="form-control" />
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="font-weight-bold">Will you need transportation as well?</label>
                                        <div class="radio-list">
                                            <label class="radio">
                                                <input type="radio" value="Yes" name="question_26" />
                                                <span></span>Yes</label>
                                            <label class="radio">
                                                <input type="radio" value="No" name="question_26" />
                                                <span></span>No</label>
                                            <label class="radio">
                                                <input type="radio" value="Not sure" name="question_26" />
                                                <span></span>No sure</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label class="font-weight-bold">Would you like to add any other information
                                            regarding childcare?</label>
                                        <input type="text" name="question_27" class="form-control" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <p class="font-weight-bold">Please note that those affected by violence in anyway
                                            would be first priority. </p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <canvas style="border: 1px solid black;">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <button type="button" class=".btn.btn-success btn-sm"
                                            data-action="clear .btn.btn-success">Clear</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <button type="submit" class="btn btn-primary mr-2">Save</button>
                                        <button type="reset" class="btn btn-secondary">Cancel</button>
                                    </div>
                                    <div class="col-lg-6 text-lg-right">
                                        <button type="reset" class="btn btn-danger">Delete</button>
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

@section('scripts')
    <script>
        const canvas = document.querySelector("canvas");
        const signaturePad = new SignaturePad(canvas);
        const clearPad = document.querySelector("[data-action=clear]");

        clearPad.addEventListener("click", () => {
            signaturePad.clear();
        });

        $('#submit_form').click(function() {
            // get all the inputs into an array.
            var $inputs = $('#IntakeForm :input');

            // not sure if you wanted this, but I thought I'd add it.
            // get an associative array of just the values.
            var values = {};

            $inputs.each(function() {
                if (this.name) {

                    // var input_name = this.name;
                    // var check = "question";

                    // if (input_name.indexOf(check) != -1) {

                    //     var having = {
                    //         question: $(this).attr("question"),
                    //         answer: $(this).val()
                    //     };

                    //     values.push(having);

                    // } else {

                    values[this.name] = $(this).val();
                    // }

                }
            });

            console.log(values);

            $.ajax({
                type: "GET",
                url: '/client/intake-form/submit',
                data: values,
                success: function(response) {

                    console.log(response);
                }
            })
        });
    </script>
@endsection
