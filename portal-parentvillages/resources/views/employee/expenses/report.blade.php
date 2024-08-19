<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&amp;l=' + l : '';
            j.async = true;
            j.src = '../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');
    </script>
    <!-- End Google Tag Manager -->
    <meta charset="utf-8" />
    <title>Expense Report | Parent Villages</title>
    <meta name="description"
        content="Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="/assets/plugins/custom/fullcalendar/fullcalendar.bundle9cd7.css?v=7.1.5" rel="stylesheet"
        type="text/css" />
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="/assets/plugins/global/plugins.bundle9cd7.css?v=7.1.5" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/custom/prismjs/prismjs.bundle9cd7.css?v=7.1.5" rel="stylesheet" type="text/css" />
    <link href="/assets/css/style.bundle9cd7.css?v=7.1.5" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon"
        href="https://ml5qkd9yohde.i.optimole.com/w:253/h:73/q:mauto/f:avif/https://parentvillage.wetestlink.com/wp-content/uploads/2023/06/Untitled-1-2-1.png" />
    <!-- Hotjar Tracking Code for keenthemes.com -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
        integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">

    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid" id="report_format">
        <!--begin::Container-->
        <div class="container">
            <!-- begin::Card-->
            <div class="card card-custom overflow-hidden">
                <div class="card-body p-0">
                    <!-- begin: Invoice-->
                    <!-- begin: Invoice header-->
                    <div class="row justify-content-center py-8 px-8 py-md-27 px-md-0">
                        <div class="col-md-9">
                            <div class="d-flex justify-content-between pb-10 pb-md-20 flex-column flex-md-row">
                                <h1 class="display-4 font-weight-boldest mb-10">EXPENSE REPORT</h1>
                                <div class="d-flex flex-column align-items-md-end px-0">
                                    <!--begin::Logo-->
                                    <a href="#" class="mb-5">
                                        <img width="150px"
                                            src="https://ml5qkd9yohde.i.optimole.com/w:253/h:73/q:mauto/f:avif/https://parentvillage.wetestlink.com/wp-content/uploads/2023/06/Untitled-1-2.png"
                                            alt="" />
                                    </a>
                                    <!--end::Logo-->
                                    <span class="d-flex flex-column align-items-md-end opacity-70">
                                        <span>640 Page Blvd. Springfield, Ma 01105</span>
                                        <span>Suite 108</span>
                                    </span>
                                </div>
                            </div>
                            <div class="border-bottom w-100"></div>
                            <div class="d-flex justify-content-between pt-6">
                                <div class="d-flex flex-column flex-root">
                                    <span class="font-weight-bolder mb-2">Report Date</span>
                                    <span class="opacity-70">{{ Carbon\Carbon::now() }}</span>
                                </div>
                                <div class="d-flex flex-column flex-root">
                                    <span class="font-weight-bolder mb-2">Employee ID.</span>
                                    <span class="opacity-70">{{ Auth::guard('employee')->user()->id }}</span>
                                </div>
                                <div class="d-flex flex-column flex-root">
                                    <span class="font-weight-bolder mb-2">Employee Name.</span>
                                    <span class="opacity-70">{{ Auth::guard('employee')->user()->name }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end: Invoice header-->
                    <!-- begin: Invoice body-->
                    <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                        <div class="col-md-9">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="pl-0 font-weight-bold text-muted text-uppercase">Description</th>
                                            <th class="text-right font-weight-bold text-muted text-uppercase">Date</th>
                                            <th class="text-right pr-0 font-weight-bold text-muted text-uppercase">
                                                Amount
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($records as $record)
                                            <tr class="font-weight-boldest">
                                                <td class="pl-0 pt-7">{{ $record->name }}</td>
                                                <td class="text-right pt-7">{{ $record->date }}</td>
                                                <td class="text-danger pr-0 pt-7 text-right">{{ $record->amount }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end: Invoice body-->
                    <!-- begin: Invoice footer-->
                    <div class="row justify-content-center bg-gray-100 py-8 px-8 py-md-10 px-md-0">
                        <div class="col-md-9">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="font-weight-bold text-muted text-uppercase">TOTAL AMOUNT</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="font-weight-bolder">
                                            <td class="text-danger font-size-h3 font-weight-boldest">
                                                {{ number_format($total_amount) }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end: Invoice-->
                </div>
            </div>
            <!-- end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->

    <script>
        var HOST_URL = "http://127.0.0.1:8000";
    </script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1400
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#3699FF",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#E4E6EF",
                        "dark": "#181C32"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1F0FF",
                        "secondary": "#EBEDF3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#3F4254",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#EBEDF3",
                    "gray-300": "#E4E6EF",
                    "gray-400": "#D1D3E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#7E8299",
                    "gray-700": "#5E6278",
                    "gray-800": "#3F4254",
                    "gray-900": "#181C32"
                }
            },
            "font-family": "Poppins"
        };
    </script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="/assets/plugins/global/plugins.bundle9cd7.js?v=7.1.5"></script>
    <script src="/assets/plugins/custom/prismjs/prismjs.bundle9cd7.js?v=7.1.5"></script>
    <script src="/assets/js/scripts.bundle9cd7.js?v=7.1.5"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Vendors(used by this page)-->
    <script src="/assets/plugins/custom/fullcalendar/fullcalendar.bundle9cd7.js?v=7.1.5"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="/assets/js/pages/widgets9cd7.js?v=7.1.5"></script>
    <script>
        window.onload = function() {
            console.log('aaaaaaaaaaaaaaaaaaaaaaaaa')

            var element = document.getElementById('report_format');
            var opt = {
                margin: 0,
                top: 0,
                filename: 'expense_report.pdf',
                image: {
                    type: 'jpeg',
                    quality: 0.98
                },
                html2canvas: {
                    scale: 4
                },
                jsPDF: {
                    format: 'a4',
                    orientation: 'portrait'
                }
            };

            // New Promise-based usage:
            html2pdf().set(opt).from(element).save();

        }
    </script>
</body>
<!--end::Body-->

</html>
