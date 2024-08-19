@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <!--begin::Subheader-->

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <!--begin::Card-->
                <a href="/intakes/create" class="card card-custom wave wave-animate-slow bg-grey-100 mb-8 mb-lg-0">
                    <!--begin::Card Body-->
                    <div class="card-body">
                        <div class="d-flex align-items-center p-5">
                            <!--begin::Icon-->
                            <div class="mr-6">
                                <span class="svg-icon svg-icon-4x svg-icon-primary">
                                    <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Code/Compiling.svg-->
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3"
                                            d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z"
                                            fill="currentColor"></path>
                                        <rect x="7" y="17" width="6" height="2" rx="1"
                                            fill="currentColor"></rect>
                                        <rect x="7" y="12" width="10" height="2" rx="1"
                                            fill="currentColor"></rect>
                                        <rect x="7" y="7" width="6" height="2" rx="1"
                                            fill="currentColor"></rect>
                                        <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor"></path>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <!--end::Icon-->
                            <!--begin::Content-->
                            <div class="d-flex flex-column">
                                <h3 class="text-dark h3 mb-3">Intake Form</h3>
                                <div class="text-dark-50">Participant Intake Form</div>
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
                <a href="/appointments/create" class="card card-custom wave wave-animate bg-grey-100 mb-8 mb-lg-0">
                    <!--begin::Card Body-->
                    <div class="card-body">
                        <div class="d-flex align-items-center p-5">
                            <!--begin::Icon-->
                            <div class="mr-6">
                                <span class="svg-icon svg-icon-4x svg-icon-primary">
                                    <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Clipboard-check.svg-->
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2 4.63158C2 3.1782 3.1782 2 4.63158 2H13.47C14.0155 2 14.278 2.66919 13.8778 3.04006L12.4556 4.35821C11.9009 4.87228 11.1726 5.15789 10.4163 5.15789H7.1579C6.05333 5.15789 5.15789 6.05333 5.15789 7.1579V16.8421C5.15789 17.9467 6.05333 18.8421 7.1579 18.8421H16.8421C17.9467 18.8421 18.8421 17.9467 18.8421 16.8421V13.7518C18.8421 12.927 19.1817 12.1387 19.7809 11.572L20.9878 10.4308C21.3703 10.0691 22 10.3403 22 10.8668V19.3684C22 20.8218 20.8218 22 19.3684 22H4.63158C3.1782 22 2 20.8218 2 19.3684V4.63158Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M10.9256 11.1882C10.5351 10.7977 10.5351 10.1645 10.9256 9.77397L18.0669 2.6327C18.8479 1.85165 20.1143 1.85165 20.8953 2.6327L21.3665 3.10391C22.1476 3.88496 22.1476 5.15129 21.3665 5.93234L14.2252 13.0736C13.8347 13.4641 13.2016 13.4641 12.811 13.0736L10.9256 11.1882Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M8.82343 12.0064L8.08852 14.3348C7.8655 15.0414 8.46151 15.7366 9.19388 15.6242L11.8974 15.2092C12.4642 15.1222 12.6916 14.4278 12.2861 14.0223L9.98595 11.7221C9.61452 11.3507 8.98154 11.5055 8.82343 12.0064Z"
                                            fill="currentColor"></path>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <!--end::Icon-->
                            <!--begin::Content-->
                            <div class="d-flex flex-column">
                                <h3 class="text-dark h3 mb-3">Appointments</h3>
                                <div class="text-dark-50">Add your calendly appointment link.</div>
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
                <a href="/scholarships" class="card card-custom wave wave-animate-fast bg-grey-100">
                    <!--begin::Card Body-->
                    <div class="card-body">
                        <div class="d-flex align-items-center p-5">
                            <!--begin::Icon-->
                            <div class="mr-6">
                                <span class="svg-icon svg-icon-4x svg-icon-primary">
                                    <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/User.svg-->
                                    <svg width="22" height="23" viewBox="0 0 22 23" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3"
                                            d="M21.1721 9.90759L19.6663 8.3801C19.5613 8.27722 19.4783 8.15406 19.4225 8.0181C19.3666 7.88214 19.339 7.73623 19.3413 7.58926V5.4226C19.3399 5.12576 19.2798 4.83214 19.1646 4.55858C19.0494 4.28503 18.8812 4.03693 18.6698 3.82856C18.4584 3.62018 18.2079 3.45562 17.9327 3.34434C17.6576 3.23305 17.3631 3.17724 17.0663 3.1801H14.8996C14.7526 3.18241 14.6067 3.15479 14.4708 3.09892C14.3348 3.04304 14.2116 2.96009 14.1088 2.8551L12.5921 1.3276C12.1696 0.905532 11.5968 0.668457 10.9996 0.668457C10.4024 0.668457 9.82962 0.905532 9.40711 1.3276L7.87961 2.83343C7.77673 2.93842 7.65357 3.02138 7.51761 3.07725C7.38165 3.13312 7.23575 3.16074 7.08877 3.15843H4.92211C4.62528 3.15984 4.33165 3.21989 4.05809 3.33512C3.78454 3.45035 3.53645 3.6185 3.32807 3.82989C3.11969 4.04129 2.95513 4.29178 2.84385 4.56696C2.73257 4.84215 2.67675 5.13661 2.67961 5.43343V7.6001C2.68192 7.74707 2.6543 7.89297 2.59843 8.02893C2.54255 8.16489 2.4596 8.28805 2.35461 8.39093L0.827108 9.90759C0.405044 10.3301 0.167969 10.9029 0.167969 11.5001C0.167969 12.0973 0.405044 12.6701 0.827108 13.0926L2.33294 14.6201C2.43793 14.723 2.52089 14.8461 2.57676 14.9821C2.63263 15.118 2.66025 15.264 2.65794 15.4109V17.5776C2.65935 17.8744 2.7194 18.1681 2.83463 18.4416C2.94986 18.7152 3.11801 18.9633 3.32941 19.1716C3.5408 19.38 3.79129 19.5446 4.06647 19.6559C4.34166 19.7671 4.63612 19.823 4.93294 19.8201H7.09961C7.24658 19.8178 7.39249 19.8454 7.52844 19.9013C7.6644 19.9571 7.78757 20.0401 7.89044 20.1451L9.41794 21.6726C9.84045 22.0947 10.4132 22.3317 11.0104 22.3317C11.6076 22.3317 12.1804 22.0947 12.6029 21.6726L14.1196 20.1668C14.2225 20.0618 14.3456 19.9788 14.4816 19.9229C14.6176 19.8671 14.7635 19.8394 14.9104 19.8418H17.0771C17.6747 19.8418 18.2479 19.6044 18.6705 19.1818C19.093 18.7592 19.3304 18.1861 19.3304 17.5884V15.4218C19.3281 15.2748 19.3557 15.1289 19.4116 14.9929C19.4675 14.857 19.5504 14.7338 19.6554 14.6309L21.1829 13.1034C21.3928 12.8933 21.5591 12.6438 21.6723 12.3691C21.7854 12.0945 21.8431 11.8003 21.8421 11.5033C21.8411 11.2063 21.7814 10.9124 21.6664 10.6385C21.5514 10.3647 21.3834 10.1163 21.1721 9.90759Z"
                                            fill="currentColor" fill-opacity="0.8"></path>
                                        <path
                                            d="M7.90276 8.65088H6.81943C6.36471 8.65088 5.99609 9.0195 5.99609 9.47421V15.0317C5.99609 15.4864 6.36471 15.855 6.81943 15.855H7.90276C8.35748 15.855 8.72609 15.4864 8.72609 15.0317V9.47421C8.72609 9.0195 8.35748 8.65088 7.90276 8.65088Z"
                                            fill="currentColor" fill-opacity="0.8"></path>
                                        <path
                                            d="M8.69141 10.1459L10.7714 7.00425C10.9133 6.7749 11.1313 6.60279 11.3873 6.51808C11.6433 6.43338 11.921 6.44147 12.1717 6.54096C12.4223 6.64044 12.63 6.82497 12.7582 7.0622C12.8864 7.29942 12.9271 7.57422 12.8731 7.83842L12.6022 9.38759C12.5864 9.47635 12.5902 9.56749 12.6134 9.65462C12.6366 9.74175 12.6785 9.82275 12.7364 9.89193C12.7942 9.96111 12.8665 10.0168 12.9481 10.055C13.0297 10.0933 13.1187 10.1132 13.2089 10.1134H15.3322C15.4753 10.116 15.6159 10.1516 15.7431 10.2174C15.8702 10.2831 15.9805 10.3772 16.0653 10.4925C16.1502 10.6078 16.2074 10.741 16.2324 10.8819C16.2575 11.0229 16.2497 11.1676 16.2097 11.3051L14.8664 15.6926C14.7942 15.9256 14.651 16.1303 14.4567 16.2779C14.2625 16.4256 14.0269 16.5088 13.7831 16.5159H11.1072C10.7461 16.5132 10.3944 16.3997 10.0997 16.1909L8.73474 15.1076L8.69141 10.1459Z"
                                            fill="currentColor" fill-opacity="0.8"></path>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <!--end::Icon-->
                            <!--begin::Content-->
                            <div class="d-flex flex-column">
                                <h3 class="text-dark h3 mb-3">Scholarships</h3>
                                <div class="text-dark-50">View Scholarships</div>
                            </div>
                            <!--end::Content-->
                        </div>
                    </div>
                    <!--end::Card Body-->
                </a>
                <!--end::Card-->
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-lg-6 col-xxl-6 order-1 order-xxl-2 mt-6">
                <!--begin::List Widget 3-->
                <div class="card card-custom card-stretch gutter-b">
                    <!--begin::Header-->
                    <div class="card-header border-0">
                        <h3 class="card-title font-weight-bolder text-dark">Resources</h3>
                        <div class="card-toolbar">
                            <div class="dropdown dropdown-inline">
                                <a href="/client/resources" class="btn btn-light-primary btn-sm font-weight-bolder"
                                    aria-haspopup="true" aria-expanded="false">View Resources</a>
                            </div>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-2">
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-10">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40 symbol-light-secondry mr-5">
                                <span class="symbol-label" alt="">
                                    <img alt="" class="max-h-20px"
                                        src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/files/jpg.svg">
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Text-->
                            <div class="d-flex flex-column flex-grow-1 font-weight-bold">
                                <a href="http://127.0.0.1:8080/admin/resources/sierra-horne.jpg" target="_blank"
                                    class="text-dark text-hover-primary mb-1 font-size-lg" style="cursor: pointer">Sierra
                                    Horne</a>
                            </div>
                            <!--end::Text-->
                            <!--begin::Dropdown-->

                            <!--end::Dropdown-->
                        </div>
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-10">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40 symbol-light-secondry mr-5">
                                <span class="symbol-label" alt="">
                                    <img alt="" class="max-h-20px"
                                        src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/files/jpg.svg">
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Text-->
                            <div class="d-flex flex-column flex-grow-1 font-weight-bold">
                                <a href="http://127.0.0.1:8080/admin/resources/april-smith.jpg" target="_blank"
                                    class="text-dark text-hover-primary mb-1 font-size-lg" style="cursor: pointer">April
                                    Smith</a>
                            </div>
                            <!--end::Text-->
                            <!--begin::Dropdown-->

                            <!--end::Dropdown-->
                        </div>
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-10">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40 symbol-light-secondry mr-5">
                                <span class="symbol-label" alt="">
                                    <img alt="" class="max-h-20px"
                                        src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/files/html.svg">
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Text-->
                            <div class="d-flex flex-column flex-grow-1 font-weight-bold">
                                <a href="http://127.0.0.1:8080/admin/resources/robert-flores.html" target="_blank"
                                    class="text-dark text-hover-primary mb-1 font-size-lg" style="cursor: pointer">Robert
                                    Flores</a>
                            </div>
                            <!--end::Text-->
                            <!--begin::Dropdown-->

                            <!--end::Dropdown-->
                        </div>
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-10">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40 symbol-light-secondry mr-5">
                                <span class="symbol-label" alt="">
                                    <img alt="" class="max-h-20px"
                                        src="	https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/files/zip.svg">
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Text-->
                            <div class="d-flex flex-column flex-grow-1 font-weight-bold">
                                <a href="http://127.0.0.1:8080/admin/resources/raya-johnston.zip" target="_blank"
                                    class="text-dark text-hover-primary mb-1 font-size-lg" style="cursor: pointer">Raya
                                    Johnston</a>
                            </div>
                            <!--end::Text-->
                            <!--begin::Dropdown-->

                            <!--end::Dropdown-->
                        </div>
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-10">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40 symbol-light-secondry mr-5">
                                <span class="symbol-label" alt="">
                                    <img alt="" class="max-h-20px"
                                        src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/files/pdf.svg">
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Text-->
                            <div class="d-flex flex-column flex-grow-1 font-weight-bold">
                                <a href="http://127.0.0.1:8080/admin/resources/venus-bauer.pdf" target="_blank"
                                    class="text-dark text-hover-primary mb-1 font-size-lg" style="cursor: pointer">Venus
                                    Bauer</a>
                            </div>
                            <!--end::Text-->
                            <!--begin::Dropdown-->

                            <!--end::Dropdown-->
                        </div>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::List Widget 3-->
            </div>
            <div class="col-lg-6 col-xxl-6 order-1 order-xxl-2 mt-6">
                <!--begin::List Widget 4-->
                <div class="card card-custom card-stretch gutter-b">
                    <!--begin::Header-->
                    <div class="card-header border-0">
                        <h3 class="card-title font-weight-bolder text-dark">New Scholarships</h3>
                        <div class="card-toolbar">
                            <div class="dropdown dropdown-inline">
                                <a href="/client/scholarships" class="btn btn-light-primary btn-sm font-weight-bolder"
                                    aria-haspopup="true" aria-expanded="false">View Scholarships </a>
                            </div>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-2">
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Text-->
                            <div class="d-flex flex-column flex-grow-1">
                                <a href="/client/scholarships/2/view"
                                    class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">2023
                                    Education Matters Scholarship Application</a>
                                <span class="text-muted font-weight-bold">Due in 2023-08-30</span>
                            </div>
                            <!--end::Text-->
                            <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title=""
                                data-placement="left" data-original-title="Quick actions">
                                <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ki ki-bold-more-hor"></i>
                                </a>
                                <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right" style="">
                                    <!--begin::Navigation-->
                                    <ul class="navi navi-hover">
                                        <li class="navi-header font-weight-bold py-4">
                                            <span class="font-size-lg">Actions:</span>
                                            <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip"
                                                data-placement="right" title=""
                                                data-original-title="Apply for Scholarship"></i>
                                        </li>

                                        <li class="navi-separator mt-3 opacity-70"></li>
                                        <li class="navi-footer py-4">
                                            <a class="btn btn-clean font-weight-bold btn-sm"
                                                href="/client/scholarships/2/scholarship-form">
                                                <span class="svg-icon svg-icon-muted svg-icon-2hx">
                                                    <svg width="22" height="23" viewBox="0 0 22 23"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.3"
                                                            d="M21.1721 9.90759L19.6663 8.3801C19.5613 8.27722 19.4783 8.15406 19.4225 8.0181C19.3666 7.88214 19.339 7.73623 19.3413 7.58926V5.4226C19.3399 5.12576 19.2798 4.83214 19.1646 4.55858C19.0494 4.28503 18.8812 4.03693 18.6698 3.82856C18.4584 3.62018 18.2079 3.45562 17.9327 3.34434C17.6576 3.23305 17.3631 3.17724 17.0663 3.1801H14.8996C14.7526 3.18241 14.6067 3.15479 14.4708 3.09892C14.3348 3.04304 14.2116 2.96009 14.1088 2.8551L12.5921 1.3276C12.1696 0.905532 11.5968 0.668457 10.9996 0.668457C10.4024 0.668457 9.82962 0.905532 9.40711 1.3276L7.87961 2.83343C7.77673 2.93842 7.65357 3.02138 7.51761 3.07725C7.38165 3.13312 7.23575 3.16074 7.08877 3.15843H4.92211C4.62528 3.15984 4.33165 3.21989 4.05809 3.33512C3.78454 3.45035 3.53645 3.6185 3.32807 3.82989C3.11969 4.04129 2.95513 4.29178 2.84385 4.56696C2.73257 4.84215 2.67675 5.13661 2.67961 5.43343V7.6001C2.68192 7.74707 2.6543 7.89297 2.59843 8.02893C2.54255 8.16489 2.4596 8.28805 2.35461 8.39093L0.827108 9.90759C0.405044 10.3301 0.167969 10.9029 0.167969 11.5001C0.167969 12.0973 0.405044 12.6701 0.827108 13.0926L2.33294 14.6201C2.43793 14.723 2.52089 14.8461 2.57676 14.9821C2.63263 15.118 2.66025 15.264 2.65794 15.4109V17.5776C2.65935 17.8744 2.7194 18.1681 2.83463 18.4416C2.94986 18.7152 3.11801 18.9633 3.32941 19.1716C3.5408 19.38 3.79129 19.5446 4.06647 19.6559C4.34166 19.7671 4.63612 19.823 4.93294 19.8201H7.09961C7.24658 19.8178 7.39249 19.8454 7.52844 19.9013C7.6644 19.9571 7.78757 20.0401 7.89044 20.1451L9.41794 21.6726C9.84045 22.0947 10.4132 22.3317 11.0104 22.3317C11.6076 22.3317 12.1804 22.0947 12.6029 21.6726L14.1196 20.1668C14.2225 20.0618 14.3456 19.9788 14.4816 19.9229C14.6176 19.8671 14.7635 19.8394 14.9104 19.8418H17.0771C17.6747 19.8418 18.2479 19.6044 18.6705 19.1818C19.093 18.7592 19.3304 18.1861 19.3304 17.5884V15.4218C19.3281 15.2748 19.3557 15.1289 19.4116 14.9929C19.4675 14.857 19.5504 14.7338 19.6554 14.6309L21.1829 13.1034C21.3928 12.8933 21.5591 12.6438 21.6723 12.3691C21.7854 12.0945 21.8431 11.8003 21.8421 11.5033C21.8411 11.2063 21.7814 10.9124 21.6664 10.6385C21.5514 10.3647 21.3834 10.1163 21.1721 9.90759Z"
                                                            fill="currentColor" fill-opacity="0.8"></path>
                                                        <path
                                                            d="M7.90276 8.65088H6.81943C6.36471 8.65088 5.99609 9.0195 5.99609 9.47421V15.0317C5.99609 15.4864 6.36471 15.855 6.81943 15.855H7.90276C8.35748 15.855 8.72609 15.4864 8.72609 15.0317V9.47421C8.72609 9.0195 8.35748 8.65088 7.90276 8.65088Z"
                                                            fill="currentColor" fill-opacity="0.8"></path>
                                                        <path
                                                            d="M8.69141 10.1459L10.7714 7.00425C10.9133 6.7749 11.1313 6.60279 11.3873 6.51808C11.6433 6.43338 11.921 6.44147 12.1717 6.54096C12.4223 6.64044 12.63 6.82497 12.7582 7.0622C12.8864 7.29942 12.9271 7.57422 12.8731 7.83842L12.6022 9.38759C12.5864 9.47635 12.5902 9.56749 12.6134 9.65462C12.6366 9.74175 12.6785 9.82275 12.7364 9.89193C12.7942 9.96111 12.8665 10.0168 12.9481 10.055C13.0297 10.0933 13.1187 10.1132 13.2089 10.1134H15.3322C15.4753 10.116 15.6159 10.1516 15.7431 10.2174C15.8702 10.2831 15.9805 10.3772 16.0653 10.4925C16.1502 10.6078 16.2074 10.741 16.2324 10.8819C16.2575 11.0229 16.2497 11.1676 16.2097 11.3051L14.8664 15.6926C14.7942 15.9256 14.651 16.1303 14.4567 16.2779C14.2625 16.4256 14.0269 16.5088 13.7831 16.5159H11.1072C10.7461 16.5132 10.3944 16.3997 10.0997 16.1909L8.73474 15.1076L8.69141 10.1459Z"
                                                            fill="currentColor" fill-opacity="0.8"></path>
                                                    </svg>
                                                </span>Apply Now</a>
                                        </li>
                                    </ul>
                                    <!--end::Navigation-->
                                </div>
                            </div>
                        </div>
                        <!--end:Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Text-->
                            <div class="d-flex flex-column flex-grow-1">
                                <a href="/client/scholarships/1/view"
                                    class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">2023
                                    Education Matters Scholarship Application</a>
                                <span class="text-muted font-weight-bold">Due in 2023-08-31</span>
                            </div>
                            <!--end::Text-->
                            <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title=""
                                data-placement="left" data-original-title="Quick actions">
                                <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ki ki-bold-more-hor"></i>
                                </a>
                                <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right" style="">
                                    <!--begin::Navigation-->
                                    <ul class="navi navi-hover">
                                        <li class="navi-header font-weight-bold py-4">
                                            <span class="font-size-lg">Actions:</span>
                                            <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip"
                                                data-placement="right" title=""
                                                data-original-title="Apply for Scholarship"></i>
                                        </li>

                                        <li class="navi-separator mt-3 opacity-70"></li>
                                        <li class="navi-footer py-4">
                                            <a class="btn btn-clean font-weight-bold btn-sm"
                                                href="/client/scholarships/1/scholarship-form">
                                                <span class="svg-icon svg-icon-muted svg-icon-2hx">
                                                    <svg width="22" height="23" viewBox="0 0 22 23"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.3"
                                                            d="M21.1721 9.90759L19.6663 8.3801C19.5613 8.27722 19.4783 8.15406 19.4225 8.0181C19.3666 7.88214 19.339 7.73623 19.3413 7.58926V5.4226C19.3399 5.12576 19.2798 4.83214 19.1646 4.55858C19.0494 4.28503 18.8812 4.03693 18.6698 3.82856C18.4584 3.62018 18.2079 3.45562 17.9327 3.34434C17.6576 3.23305 17.3631 3.17724 17.0663 3.1801H14.8996C14.7526 3.18241 14.6067 3.15479 14.4708 3.09892C14.3348 3.04304 14.2116 2.96009 14.1088 2.8551L12.5921 1.3276C12.1696 0.905532 11.5968 0.668457 10.9996 0.668457C10.4024 0.668457 9.82962 0.905532 9.40711 1.3276L7.87961 2.83343C7.77673 2.93842 7.65357 3.02138 7.51761 3.07725C7.38165 3.13312 7.23575 3.16074 7.08877 3.15843H4.92211C4.62528 3.15984 4.33165 3.21989 4.05809 3.33512C3.78454 3.45035 3.53645 3.6185 3.32807 3.82989C3.11969 4.04129 2.95513 4.29178 2.84385 4.56696C2.73257 4.84215 2.67675 5.13661 2.67961 5.43343V7.6001C2.68192 7.74707 2.6543 7.89297 2.59843 8.02893C2.54255 8.16489 2.4596 8.28805 2.35461 8.39093L0.827108 9.90759C0.405044 10.3301 0.167969 10.9029 0.167969 11.5001C0.167969 12.0973 0.405044 12.6701 0.827108 13.0926L2.33294 14.6201C2.43793 14.723 2.52089 14.8461 2.57676 14.9821C2.63263 15.118 2.66025 15.264 2.65794 15.4109V17.5776C2.65935 17.8744 2.7194 18.1681 2.83463 18.4416C2.94986 18.7152 3.11801 18.9633 3.32941 19.1716C3.5408 19.38 3.79129 19.5446 4.06647 19.6559C4.34166 19.7671 4.63612 19.823 4.93294 19.8201H7.09961C7.24658 19.8178 7.39249 19.8454 7.52844 19.9013C7.6644 19.9571 7.78757 20.0401 7.89044 20.1451L9.41794 21.6726C9.84045 22.0947 10.4132 22.3317 11.0104 22.3317C11.6076 22.3317 12.1804 22.0947 12.6029 21.6726L14.1196 20.1668C14.2225 20.0618 14.3456 19.9788 14.4816 19.9229C14.6176 19.8671 14.7635 19.8394 14.9104 19.8418H17.0771C17.6747 19.8418 18.2479 19.6044 18.6705 19.1818C19.093 18.7592 19.3304 18.1861 19.3304 17.5884V15.4218C19.3281 15.2748 19.3557 15.1289 19.4116 14.9929C19.4675 14.857 19.5504 14.7338 19.6554 14.6309L21.1829 13.1034C21.3928 12.8933 21.5591 12.6438 21.6723 12.3691C21.7854 12.0945 21.8431 11.8003 21.8421 11.5033C21.8411 11.2063 21.7814 10.9124 21.6664 10.6385C21.5514 10.3647 21.3834 10.1163 21.1721 9.90759Z"
                                                            fill="currentColor" fill-opacity="0.8"></path>
                                                        <path
                                                            d="M7.90276 8.65088H6.81943C6.36471 8.65088 5.99609 9.0195 5.99609 9.47421V15.0317C5.99609 15.4864 6.36471 15.855 6.81943 15.855H7.90276C8.35748 15.855 8.72609 15.4864 8.72609 15.0317V9.47421C8.72609 9.0195 8.35748 8.65088 7.90276 8.65088Z"
                                                            fill="currentColor" fill-opacity="0.8"></path>
                                                        <path
                                                            d="M8.69141 10.1459L10.7714 7.00425C10.9133 6.7749 11.1313 6.60279 11.3873 6.51808C11.6433 6.43338 11.921 6.44147 12.1717 6.54096C12.4223 6.64044 12.63 6.82497 12.7582 7.0622C12.8864 7.29942 12.9271 7.57422 12.8731 7.83842L12.6022 9.38759C12.5864 9.47635 12.5902 9.56749 12.6134 9.65462C12.6366 9.74175 12.6785 9.82275 12.7364 9.89193C12.7942 9.96111 12.8665 10.0168 12.9481 10.055C13.0297 10.0933 13.1187 10.1132 13.2089 10.1134H15.3322C15.4753 10.116 15.6159 10.1516 15.7431 10.2174C15.8702 10.2831 15.9805 10.3772 16.0653 10.4925C16.1502 10.6078 16.2074 10.741 16.2324 10.8819C16.2575 11.0229 16.2497 11.1676 16.2097 11.3051L14.8664 15.6926C14.7942 15.9256 14.651 16.1303 14.4567 16.2779C14.2625 16.4256 14.0269 16.5088 13.7831 16.5159H11.1072C10.7461 16.5132 10.3944 16.3997 10.0997 16.1909L8.73474 15.1076L8.69141 10.1459Z"
                                                            fill="currentColor" fill-opacity="0.8"></path>
                                                    </svg>
                                                </span>Apply Now</a>
                                        </li>
                                    </ul>
                                    <!--end::Navigation-->
                                </div>
                            </div>
                        </div>
                        <!--end:Item-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end:List Widget 4-->
            </div>
        </div> --}}
    </div>
    <div class="container" style="margin-top: 25px ">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-custom card-stretch card-stretch-half gutter-b" style="height: 100%">
                    <!--begin::Body-->
                    <div class="card-header">
                        <div class="card-title">
                            <span class="symbol symbol-50 symbol-light-primary mr-2">
                                <span class="symbol-label">
                                    <span class="svg-icon svg-icon-xl svg-icon-primary">
                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Group.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </span>
                                
                            </span>
                            <h3 class="card-label">Mileage Log</h3>
                        </div>
                    </div>
                    <div class="card-body" style="position: relative;">
                        <div id="milage_logs_chart" class="card-rounded-bottom" data-color="primary" style="height: 350px; min-height: 365px;"><div id="apexchartscz0txisy" class="apexcharts-canvas apexchartscz0txisy apexcharts-theme-light" style="width: 434px; height: 350px;"><svg id="SvgjsSvg1212" width="434" height="350" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1214" class="apexcharts-inner apexcharts-graphical" transform="translate(51.335968017578125, 30)"><defs id="SvgjsDefs1213"><clipPath id="gridRectMaskcz0txisy"><rect id="SvgjsRect1220" width="359.2520446777344" height="282.494" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskcz0txisy"><rect id="SvgjsRect1221" width="354.2520446777344" height="281.494" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine1219" x1="-0.5" y1="0" x2="-0.5" y2="277.494" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="-0.5" y="0" width="1" height="277.494" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1227" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1228" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1230" font-family="Helvetica, Arial, sans-serif" x="0" y="306.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1231">July</tspan><title>July</title></text><text id="SvgjsText1233" font-family="Helvetica, Arial, sans-serif" x="350.2520446777344" y="306.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1234">August</tspan><title>August</title></text></g><line id="SvgjsLine1235" x1="0" y1="278.494" x2="350.2520446777344" y2="278.494" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"></line></g><g id="SvgjsG1250" class="apexcharts-grid"><g id="SvgjsG1251" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1255" x1="0" y1="0" x2="350.2520446777344" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1256" x1="0" y1="55.4988" x2="350.2520446777344" y2="55.4988" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1257" x1="0" y1="110.9976" x2="350.2520446777344" y2="110.9976" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1258" x1="0" y1="166.4964" x2="350.2520446777344" y2="166.4964" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1259" x1="0" y1="221.9952" x2="350.2520446777344" y2="221.9952" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1260" x1="0" y1="277.494" x2="350.2520446777344" y2="277.494" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1252" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1253" x1="0" y1="278.494" x2="0" y2="284.494" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1254" x1="350.2520446777344" y1="278.494" x2="350.2520446777344" y2="284.494" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><rect id="SvgjsRect1261" width="350.2520446777344" height="55.4988" x="0" y="0" rx="0" ry="0" opacity="0.5" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f3f3f3" clip-path="url(#gridRectMaskcz0txisy)" class="apexcharts-grid-row"></rect><rect id="SvgjsRect1262" width="350.2520446777344" height="55.4988" x="0" y="55.4988" rx="0" ry="0" opacity="0.5" stroke-width="0" stroke="none" stroke-dasharray="0" fill="transparent" clip-path="url(#gridRectMaskcz0txisy)" class="apexcharts-grid-row"></rect><rect id="SvgjsRect1263" width="350.2520446777344" height="55.4988" x="0" y="110.9976" rx="0" ry="0" opacity="0.5" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f3f3f3" clip-path="url(#gridRectMaskcz0txisy)" class="apexcharts-grid-row"></rect><rect id="SvgjsRect1264" width="350.2520446777344" height="55.4988" x="0" y="166.4964" rx="0" ry="0" opacity="0.5" stroke-width="0" stroke="none" stroke-dasharray="0" fill="transparent" clip-path="url(#gridRectMaskcz0txisy)" class="apexcharts-grid-row"></rect><rect id="SvgjsRect1265" width="350.2520446777344" height="55.4988" x="0" y="221.9952" rx="0" ry="0" opacity="0.5" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f3f3f3" clip-path="url(#gridRectMaskcz0txisy)" class="apexcharts-grid-row"></rect><line id="SvgjsLine1267" x1="0" y1="277.494" x2="350.2520446777344" y2="277.494" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1266" x1="0" y1="1" x2="0" y2="277.494" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1222" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1223" class="apexcharts-series" seriesName="Miles" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1226" d="M 0 275.64404L 350.2520446777344 23.124499999999983" fill="none" fill-opacity="1" stroke="rgba(105,147,255,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskcz0txisy)" pathTo="M 0 275.64404L 350.2520446777344 23.124499999999983" pathFrom="M -1 277.494L -1 277.494L 350.2520446777344 277.494"></path><g id="SvgjsG1224" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1273" r="0" cx="0" cy="275.64404" class="apexcharts-marker wc1oznt53h no-pointer-events" stroke="#ffffff" fill="#6993ff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1225" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1268" x1="0" y1="0" x2="350.2520446777344" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1269" x1="0" y1="0" x2="350.2520446777344" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1270" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1271" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1272" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1218" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1236" class="apexcharts-yaxis" rel="0" transform="translate(21.335968017578125, 0)"><g id="SvgjsG1237" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1238" font-family="Helvetica, Arial, sans-serif" x="20" y="31.5" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1239">1500</tspan></text><text id="SvgjsText1240" font-family="Helvetica, Arial, sans-serif" x="20" y="86.9988" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1241">1200</tspan></text><text id="SvgjsText1242" font-family="Helvetica, Arial, sans-serif" x="20" y="142.4976" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1243">900</tspan></text><text id="SvgjsText1244" font-family="Helvetica, Arial, sans-serif" x="20" y="197.9964" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1245">600</tspan></text><text id="SvgjsText1246" font-family="Helvetica, Arial, sans-serif" x="20" y="253.4952" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1247">300</tspan></text><text id="SvgjsText1248" font-family="Helvetica, Arial, sans-serif" x="20" y="308.994" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1249">0</tspan></text></g></g><g id="SvgjsG1215" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 175px;"></div><div class="apexcharts-tooltip apexcharts-theme-light" style="left: 62.336px; top: 239.494px;"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">July</div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(105, 147, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Miles: </span><span class="apexcharts-tooltip-text-value">10</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light" style="left: 28.1328px; top: 309.494px;"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; min-width: 26.408px;">July</div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 493px; height: 443px;"></div></div><div class="contract-trigger"></div></div></div>
                    <!--end::Body-->
                </div>
            </div>
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-custom card-stretch card-stretch-half gutter-b" style="height: 100%">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Expense</h3>
                        </div>
                    </div>
                    <div class="card-body" style="position: relative;">
                        <!--begin::Chart-->
                        <div id="expense_chart" style="min-height: 365px;"><div id="apexchartssw4c71tv" class="apexcharts-canvas apexchartssw4c71tv apexcharts-theme-light" style="width: 434px; height: 350px;"><svg id="SvgjsSvg1274" width="434" height="350" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1276" class="apexcharts-inner apexcharts-graphical" transform="translate(43.217987060546875, 30)"><defs id="SvgjsDefs1275"><linearGradient id="SvgjsLinearGradient1281" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1282" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1283" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1284" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMasksw4c71tv"><rect id="SvgjsRect1286" width="408.7820129394531" height="279.494" x="-15" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMasksw4c71tv"><rect id="SvgjsRect1287" width="384.7820129394531" height="281.494" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect1285" width="0" height="277.494" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1281)" class="apexcharts-xcrosshairs" y2="277.494" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1291" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1292" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1294" font-family="Helvetica, Arial, sans-serif" x="0" y="306.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1295">0</tspan><title>0</title></text><text id="SvgjsText1297" font-family="Helvetica, Arial, sans-serif" x="76.15640258789062" y="306.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1298">1</tspan><title>1</title></text><text id="SvgjsText1300" font-family="Helvetica, Arial, sans-serif" x="152.31280517578125" y="306.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1301">2</tspan><title>2</title></text><text id="SvgjsText1303" font-family="Helvetica, Arial, sans-serif" x="228.46920776367188" y="306.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1304">3</tspan><title>3</title></text><text id="SvgjsText1306" font-family="Helvetica, Arial, sans-serif" x="304.6256103515625" y="306.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1307">4</tspan><title>4</title></text><text id="SvgjsText1309" font-family="Helvetica, Arial, sans-serif" x="380.7820129394531" y="306.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1310">5</tspan><title>5</title></text></g><line id="SvgjsLine1311" x1="0" y1="278.494" x2="380.7820129394531" y2="278.494" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"></line></g><g id="SvgjsG1328" class="apexcharts-grid"><g id="SvgjsG1329" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1337" x1="0" y1="0" x2="380.7820129394531" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1338" x1="0" y1="55.4988" x2="380.7820129394531" y2="55.4988" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1339" x1="0" y1="110.9976" x2="380.7820129394531" y2="110.9976" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1340" x1="0" y1="166.4964" x2="380.7820129394531" y2="166.4964" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1341" x1="0" y1="221.9952" x2="380.7820129394531" y2="221.9952" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1342" x1="0" y1="277.494" x2="380.7820129394531" y2="277.494" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1330" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1331" x1="0" y1="278.494" x2="0" y2="284.494" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1332" x1="76.15640258789062" y1="278.494" x2="76.15640258789062" y2="284.494" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1333" x1="152.31280517578125" y1="278.494" x2="152.31280517578125" y2="284.494" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1334" x1="228.46920776367188" y1="278.494" x2="228.46920776367188" y2="284.494" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1335" x1="304.6256103515625" y1="278.494" x2="304.6256103515625" y2="284.494" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1336" x1="380.7820129394531" y1="278.494" x2="380.7820129394531" y2="284.494" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1344" x1="0" y1="277.494" x2="380.7820129394531" y2="277.494" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1343" x1="0" y1="1" x2="0" y2="277.494" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1288" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1289" class="apexcharts-series" rel="1" seriesName="TotalxAmount" data:realIndex="0"></g></g><line id="SvgjsLine1345" x1="0" y1="0" x2="380.7820129394531" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1346" x1="0" y1="0" x2="380.7820129394531" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1347" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1348" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1349" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1290" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1312" class="apexcharts-yaxis" rel="0" transform="translate(13.217987060546875, 0)"><g id="SvgjsG1313" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1314" font-family="Helvetica, Arial, sans-serif" x="20" y="31.5" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1315">5.0</tspan></text><text id="SvgjsText1316" font-family="Helvetica, Arial, sans-serif" x="20" y="86.9988" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1317">4.0</tspan></text><text id="SvgjsText1318" font-family="Helvetica, Arial, sans-serif" x="20" y="142.4976" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1319">3.0</tspan></text><text id="SvgjsText1320" font-family="Helvetica, Arial, sans-serif" x="20" y="197.9964" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1321">2.0</tspan></text><text id="SvgjsText1322" font-family="Helvetica, Arial, sans-serif" x="20" y="253.4952" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1323">1.0</tspan></text><text id="SvgjsText1324" font-family="Helvetica, Arial, sans-serif" x="20" y="308.994" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1325">0.0</tspan></text></g><g id="SvgjsG1326" class="apexcharts-yaxis-title"><text id="SvgjsText1327" font-family="Helvetica, Arial, sans-serif" x="-11.22894287109375" y="168.747" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="900" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-title-text " style="font-family: Helvetica, Arial, sans-serif;" transform="rotate(-90 0 0)"></text></g></g><g id="SvgjsG1277" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 175px;"></div></div></div>
                        <!--end::Chart-->
                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 493px; height: 443px;"></div></div><div class="contract-trigger"></div></div></div>
                </div>
                <!--end::Card-->
            </div>
        </div>
    </div>
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container" style="padding:20px">
            <!--begin::Card-->
            <div class="card card-custom">
                <!--begin::Header-->
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">Intake Managements
                            <span class="d-block text-muted pt-2 font-size-sm">Intake management made easy</span>
                        </h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <a href="/intakes/create" class="btn btn-primary font-weight-bolder">
                            <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/Flatten.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <circle fill="#000000" cx="9" cy="15" r="6" />
                                        <path
                                            d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                                            fill="#000000" opacity="0.3" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                            New Intake
                        </a>
                        <!--end::Button-->
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin: Datatable-->
                    <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"></div>
                    <!--end: Datatable-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
@endsection
@section('scripts')
    <script src="/assets/js/pages/custom/intakes/index.js"></script>
@endsection
