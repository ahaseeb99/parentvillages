@extends('layouts.client.app')

@section('title', 'Dashboard')

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
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Dashboard</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="" class="text-muted">Dashboard</a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-right">
                <!--begin::Actions-->
                <a href="/client/intakes/create" class="btn btn-light-primary font-weight-bolder btn-sm mx-1">Intake
                    Form</a>
                <a href="/client/appointments/create"
                    class="btn btn-light-primary font-weight-bolder btn-sm mx-1">Appointment Form</a>
                <a href="/client/scholarships" class="btn btn-light-primary font-weight-bolder btn-sm mx-1">Scholarships</a>
                <!--end::Actions-->
            </div>


            <!--end::Toolbar-->
        </div>
    </div>
    <div class="content pt-0 d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <!--begin::Section-->
        <div class="container py-8">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <!--begin::Card-->
                            <a href="/client/intakes/create"
                                class="card card-custom wave wave-animate-slow bg-grey-100 mb-8 mb-lg-0">
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
                                                        fill="currentColor" />
                                                    <rect x="7" y="17" width="6" height="2"
                                                        rx="1" fill="currentColor" />
                                                    <rect x="7" y="12" width="10" height="2"
                                                        rx="1" fill="currentColor" />
                                                    <rect x="7" y="7" width="6" height="2"
                                                        rx="1" fill="currentColor" />
                                                    <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
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
                            <a href="/client/appointments/create"
                                class="card card-custom wave wave-animate bg-grey-100 mb-8 mb-lg-0">
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
                                                        fill="currentColor" />
                                                    <path
                                                        d="M10.9256 11.1882C10.5351 10.7977 10.5351 10.1645 10.9256 9.77397L18.0669 2.6327C18.8479 1.85165 20.1143 1.85165 20.8953 2.6327L21.3665 3.10391C22.1476 3.88496 22.1476 5.15129 21.3665 5.93234L14.2252 13.0736C13.8347 13.4641 13.2016 13.4641 12.811 13.0736L10.9256 11.1882Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M8.82343 12.0064L8.08852 14.3348C7.8655 15.0414 8.46151 15.7366 9.19388 15.6242L11.8974 15.2092C12.4642 15.1222 12.6916 14.4278 12.2861 14.0223L9.98595 11.7221C9.61452 11.3507 8.98154 11.5055 8.82343 12.0064Z"
                                                        fill="currentColor" />
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
                            <a href="/client/scholarships" class="card card-custom wave wave-animate-fast bg-grey-100">
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
                                                        fill="currentColor" fill-opacity="0.8" />
                                                    <path
                                                        d="M7.90276 8.65088H6.81943C6.36471 8.65088 5.99609 9.0195 5.99609 9.47421V15.0317C5.99609 15.4864 6.36471 15.855 6.81943 15.855H7.90276C8.35748 15.855 8.72609 15.4864 8.72609 15.0317V9.47421C8.72609 9.0195 8.35748 8.65088 7.90276 8.65088Z"
                                                        fill="currentColor" fill-opacity="0.8" />
                                                    <path
                                                        d="M8.69141 10.1459L10.7714 7.00425C10.9133 6.7749 11.1313 6.60279 11.3873 6.51808C11.6433 6.43338 11.921 6.44147 12.1717 6.54096C12.4223 6.64044 12.63 6.82497 12.7582 7.0622C12.8864 7.29942 12.9271 7.57422 12.8731 7.83842L12.6022 9.38759C12.5864 9.47635 12.5902 9.56749 12.6134 9.65462C12.6366 9.74175 12.6785 9.82275 12.7364 9.89193C12.7942 9.96111 12.8665 10.0168 12.9481 10.055C13.0297 10.0933 13.1187 10.1132 13.2089 10.1134H15.3322C15.4753 10.116 15.6159 10.1516 15.7431 10.2174C15.8702 10.2831 15.9805 10.3772 16.0653 10.4925C16.1502 10.6078 16.2074 10.741 16.2324 10.8819C16.2575 11.0229 16.2497 11.1676 16.2097 11.3051L14.8664 15.6926C14.7942 15.9256 14.651 16.1303 14.4567 16.2779C14.2625 16.4256 14.0269 16.5088 13.7831 16.5159H11.1072C10.7461 16.5132 10.3944 16.3997 10.0997 16.1909L8.73474 15.1076L8.69141 10.1459Z"
                                                        fill="currentColor" fill-opacity="0.8" />
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
                    <div class="row">
                        <div class="col-lg-6 col-xxl-6 order-1 order-xxl-2 mt-6">
                            <!--begin::List Widget 3-->
                            <div class="card card-custom card-stretch gutter-b">
                                <!--begin::Header-->
                                <div class="card-header border-0">
                                    <h3 class="card-title font-weight-bolder text-dark">Resources</h3>
                                    <div class="card-toolbar">
                                        <div class="dropdown dropdown-inline">
                                            <a href="/client/resources"
                                                class="btn btn-light-primary btn-sm font-weight-bolder" aria-haspopup="true"
                                                aria-expanded="false">View Resources</a>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-2">
                                    @foreach($resources as $resource)
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-10">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40 symbol-light-secondry mr-5">
                                            <span class="symbol-label" class="h-75 align-self-end" alt="">
                                                @if (pathinfo($resource->path, PATHINFO_EXTENSION) === 'pdf')
                                                        <img alt="" class="max-h-20px"
                                                            src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/files/pdf.svg" />
                                                    @elseif (pathinfo($resource->path, PATHINFO_EXTENSION) === 'png')
                                                        <img alt="" class="max-h-20px"
                                                            src="	https://static.thenounproject.com/png/4147238-200.png" />
                                                    @elseif (pathinfo($resource->path, PATHINFO_EXTENSION) === 'docx')

                                                    @elseif (pathinfo($resource->path, PATHINFO_EXTENSION) === 'jpg' || pathinfo($resource->path, PATHINFO_EXTENSION) === 'jpeg')
                                                        <img alt="" class="max-h-20px"
                                                            src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/files/jpg.svg" />
                                                    @elseif (pathinfo($resource->path, PATHINFO_EXTENSION) === 'zip')
                                                        <img alt="" class="max-h-20px"
                                                            src="	https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/files/zip.svg" />
                                                    @elseif (pathinfo($resource->path, PATHINFO_EXTENSION) === 'psd')
                                                        <img alt="" class="max-h-20px"
                                                            src="https://png.pngtree.com/png-vector/20220611/ourmid/pngtree-adobe-photoshop-psd-ps-icon-png-image_4952703.png" />
                                                    @elseif (pathinfo($resource->path, PATHINFO_EXTENSION) === 'xml')
                                                        <img alt="" class="max-h-20px"
                                                            src="	https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/files/html.svg" />
                                                    @elseif (pathinfo($resource->path, PATHINFO_EXTENSION) === 'html')
                                                        <img alt="" class="max-h-20px"
                                                            src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/files/html.svg" />
                                                    @endif
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Text-->
                                        <div class="d-flex flex-column flex-grow-1 font-weight-bold">
                                            <a href="http://127.0.0.1:8080{{ $resource->path }}"
                                                target="_blank" class="text-dark text-hover-primary mb-1 font-size-lg" style = "cursor: pointer">{{ $resource->name }}</a>
                                        </div>
                                        <!--end::Text-->
                                        <!--begin::Dropdown-->
                                        
                                        <!--end::Dropdown-->
                                    </div>
                                    @endforeach
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
                                            <a href="/client/scholarships"
                                                class="btn btn-light-primary btn-sm font-weight-bolder" aria-haspopup="true"
                                                aria-expanded="false">View Scholarships </a>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-2">
                                        @foreach($records as $record)
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Text-->
                                            <div class="d-flex flex-column flex-grow-1">
                                                <a href="/client/scholarships/{{ $record->id }}/view"
                                                    class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">{{ $record->title }}</a>
                                                <span class="text-muted font-weight-bold">Due in {{ $record->deadline }}</span>
                                            </div>
                                            <!--end::Text-->
                                            <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
                                                <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ki ki-bold-more-hor"></i>
                                                </a>
                                                <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right" style="">
                                                    <!--begin::Navigation-->
                                                    <ul class="navi navi-hover">
                                                        <li class="navi-header font-weight-bold py-4">
                                                            <span class="font-size-lg">Actions:</span>
                                                            <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Apply for Scholarship"></i>
                                                        </li>
                                                        
                                                        <li class="navi-separator mt-3 opacity-70"></li>
                                                        <li class="navi-footer py-4">
                                                            <a class="btn btn-clean font-weight-bold btn-sm" href="/client/scholarships/{{ $record->id }}/scholarship-form">
                                                                <span class="svg-icon svg-icon-muted svg-icon-2hx">
                                                                    <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path opacity="0.3" d="M21.1721 9.90759L19.6663 8.3801C19.5613 8.27722 19.4783 8.15406 19.4225 8.0181C19.3666 7.88214 19.339 7.73623 19.3413 7.58926V5.4226C19.3399 5.12576 19.2798 4.83214 19.1646 4.55858C19.0494 4.28503 18.8812 4.03693 18.6698 3.82856C18.4584 3.62018 18.2079 3.45562 17.9327 3.34434C17.6576 3.23305 17.3631 3.17724 17.0663 3.1801H14.8996C14.7526 3.18241 14.6067 3.15479 14.4708 3.09892C14.3348 3.04304 14.2116 2.96009 14.1088 2.8551L12.5921 1.3276C12.1696 0.905532 11.5968 0.668457 10.9996 0.668457C10.4024 0.668457 9.82962 0.905532 9.40711 1.3276L7.87961 2.83343C7.77673 2.93842 7.65357 3.02138 7.51761 3.07725C7.38165 3.13312 7.23575 3.16074 7.08877 3.15843H4.92211C4.62528 3.15984 4.33165 3.21989 4.05809 3.33512C3.78454 3.45035 3.53645 3.6185 3.32807 3.82989C3.11969 4.04129 2.95513 4.29178 2.84385 4.56696C2.73257 4.84215 2.67675 5.13661 2.67961 5.43343V7.6001C2.68192 7.74707 2.6543 7.89297 2.59843 8.02893C2.54255 8.16489 2.4596 8.28805 2.35461 8.39093L0.827108 9.90759C0.405044 10.3301 0.167969 10.9029 0.167969 11.5001C0.167969 12.0973 0.405044 12.6701 0.827108 13.0926L2.33294 14.6201C2.43793 14.723 2.52089 14.8461 2.57676 14.9821C2.63263 15.118 2.66025 15.264 2.65794 15.4109V17.5776C2.65935 17.8744 2.7194 18.1681 2.83463 18.4416C2.94986 18.7152 3.11801 18.9633 3.32941 19.1716C3.5408 19.38 3.79129 19.5446 4.06647 19.6559C4.34166 19.7671 4.63612 19.823 4.93294 19.8201H7.09961C7.24658 19.8178 7.39249 19.8454 7.52844 19.9013C7.6644 19.9571 7.78757 20.0401 7.89044 20.1451L9.41794 21.6726C9.84045 22.0947 10.4132 22.3317 11.0104 22.3317C11.6076 22.3317 12.1804 22.0947 12.6029 21.6726L14.1196 20.1668C14.2225 20.0618 14.3456 19.9788 14.4816 19.9229C14.6176 19.8671 14.7635 19.8394 14.9104 19.8418H17.0771C17.6747 19.8418 18.2479 19.6044 18.6705 19.1818C19.093 18.7592 19.3304 18.1861 19.3304 17.5884V15.4218C19.3281 15.2748 19.3557 15.1289 19.4116 14.9929C19.4675 14.857 19.5504 14.7338 19.6554 14.6309L21.1829 13.1034C21.3928 12.8933 21.5591 12.6438 21.6723 12.3691C21.7854 12.0945 21.8431 11.8003 21.8421 11.5033C21.8411 11.2063 21.7814 10.9124 21.6664 10.6385C21.5514 10.3647 21.3834 10.1163 21.1721 9.90759Z" fill="currentColor" fill-opacity="0.8"></path>
                                                                        <path d="M7.90276 8.65088H6.81943C6.36471 8.65088 5.99609 9.0195 5.99609 9.47421V15.0317C5.99609 15.4864 6.36471 15.855 6.81943 15.855H7.90276C8.35748 15.855 8.72609 15.4864 8.72609 15.0317V9.47421C8.72609 9.0195 8.35748 8.65088 7.90276 8.65088Z" fill="currentColor" fill-opacity="0.8"></path>
                                                                        <path d="M8.69141 10.1459L10.7714 7.00425C10.9133 6.7749 11.1313 6.60279 11.3873 6.51808C11.6433 6.43338 11.921 6.44147 12.1717 6.54096C12.4223 6.64044 12.63 6.82497 12.7582 7.0622C12.8864 7.29942 12.9271 7.57422 12.8731 7.83842L12.6022 9.38759C12.5864 9.47635 12.5902 9.56749 12.6134 9.65462C12.6366 9.74175 12.6785 9.82275 12.7364 9.89193C12.7942 9.96111 12.8665 10.0168 12.9481 10.055C13.0297 10.0933 13.1187 10.1132 13.2089 10.1134H15.3322C15.4753 10.116 15.6159 10.1516 15.7431 10.2174C15.8702 10.2831 15.9805 10.3772 16.0653 10.4925C16.1502 10.6078 16.2074 10.741 16.2324 10.8819C16.2575 11.0229 16.2497 11.1676 16.2097 11.3051L14.8664 15.6926C14.7942 15.9256 14.651 16.1303 14.4567 16.2779C14.2625 16.4256 14.0269 16.5088 13.7831 16.5159H11.1072C10.7461 16.5132 10.3944 16.3997 10.0997 16.1909L8.73474 15.1076L8.69141 10.1459Z" fill="currentColor" fill-opacity="0.8"></path>
                                                                    </svg>
                                                                </span>Apply Now</a>
                                                        </li>
                                                    </ul>
                                                    <!--end::Navigation-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--end:Item-->
                                        @endforeach
                                    </div>
                                <!--end::Body-->
                            </div>
                            <!--end:List Widget 4-->
                        </div>
                    </div>
                </div>
            </div>
            
            <!--begin::Row-->

            <div class="card card-custom mt-4">
                <!--begin::Header-->
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">My Intakes
                            <span class="d-block text-muted pt-2 font-size-sm">Intake management made easy</span>
                        </h3>
                    </div>
                    <div class="card-toolbar">
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
            <!--end::Row-->
        </div>
        <!--end::Section-->
    </div>








@endsection

@section('scripts')
    <script src="/assets/js/pages/intakes/index.js"></script>
@endsection
