<x-app-layout>
    <div class="content pb-0">

        <!-- Page Header -->
        <div class="d-flex align-items-sm-center justify-content-between flex-wrap gap-2 mb-4">
            <div>
                <h4 class="fw-bold mb-0">Patient Dashboard</h4>
            </div>
            <div class="d-flex align-items-center flex-wrap gap-2">
                <a href="javascript:void(0);" class="btn btn-primary d-inline-flex align-items-center"
                    data-bs-toggle="offcanvas" data-bs-target="#new_appointment"><i class="ti ti-plus me-1"></i>New
                    Appointment</a>
            </div>
        </div>
        <!-- End Page Header -->

        <!-- row start -->
        <div class="row">

            <!-- col start -->
            <div class="col-xl-3 col-md-6 d-flex">
                <div class="card flex-fill w-100 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-4">
                            <span class="avatar bg-primary rounded-circle fs-20 d-inline-flex flex-shrink-0"><i
                                    class="ti ti-calendar-heart"></i></span>
                            <div class="ms-2">
                                <p class="mb-1 text-truncate">Total Appointments</p>
                                <h3 class="fw-bold mb-0">24</h3>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="badge fw-medium bg-success flex-shrink-0 me-2">+95%</span>
                            <p class="fs-13 mb-0">in last 7 Days </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- col end -->

            <!-- col start -->
            <div class="col-xl-3 col-md-6 d-flex">
                <div class="card flex-fill w-100 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-4">
                            <span class="avatar bg-danger rounded-circle fs-20 d-inline-flex flex-shrink-0"><i
                                    class="ti ti-users"></i></span>
                            <div class="ms-2">
                                <p class="mb-1 text-truncate">Online Consultations</p>
                                <h3 class="fw-bold mb-0">36</h3>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="badge fw-medium bg-danger flex-shrink-0 me-2">-15%</span>
                            <p class="fs-13 mb-0">in last 7 Days</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- col end -->

            <!-- col start -->
            <div class="col-xl-3 col-md-6 d-flex">
                <div class="card flex-fill w-100 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div>
                                <p class="mb-1 text-truncate">Blood Pressure</p>
                                <span class="badge fw-medium bg-success flex-shrink-0 me-2">+95%</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <h3 class="fw-bold mb-0 me-1">89</h3>
                                <p class="mb-0">g/dl</p>
                            </div>
                        </div>
                        <div id="s-col-8" class="chart-set" style="min-height: 35px;">
                            <div id="apexcharts84cl5l5q"
                                class="apexcharts-canvas apexcharts84cl5l5q apexcharts-theme-light"
                                style="width: 193px; height: 35px;"><svg xmlns="http://www.w3.org/2000/svg"
                                    version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="apexcharts-svg"
                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)" width="193" height="35">
                                    <foreignObject x="0" y="0" width="193" height="35">
                                        <style type="text/css">
                                            .apexcharts-flip-y {
                                                transform: scaleY(-1) translateY(-100%);
                                                transform-origin: top;
                                                transform-box: fill-box;
                                            }

                                            .apexcharts-flip-x {
                                                transform: scaleX(-1);
                                                transform-origin: center;
                                                transform-box: fill-box;
                                            }

                                            .apexcharts-legend {
                                                display: flex;
                                                overflow: auto;
                                                padding: 0 10px;
                                            }

                                            .apexcharts-legend.apexcharts-legend-group-horizontal {
                                                flex-direction: column;
                                            }

                                            .apexcharts-legend-group {
                                                display: flex;
                                            }

                                            .apexcharts-legend-group-vertical {
                                                flex-direction: column-reverse;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom,
                                            .apexcharts-legend.apx-legend-position-top {
                                                flex-wrap: wrap
                                            }

                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                flex-direction: column;
                                                bottom: 0;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                justify-content: flex-start;
                                                align-items: flex-start;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                justify-content: center;
                                                align-items: center;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                justify-content: flex-end;
                                                align-items: flex-end;
                                            }

                                            .apexcharts-legend-series {
                                                cursor: pointer;
                                                line-height: normal;
                                                display: flex;
                                                align-items: center;
                                            }

                                            .apexcharts-legend-text {
                                                position: relative;
                                                font-size: 14px;
                                            }

                                            .apexcharts-legend-text *,
                                            .apexcharts-legend-marker * {
                                                pointer-events: none;
                                            }

                                            .apexcharts-legend-marker {
                                                position: relative;
                                                display: flex;
                                                align-items: center;
                                                justify-content: center;
                                                cursor: pointer;
                                                margin-right: 1px;
                                            }

                                            .apexcharts-legend-series.apexcharts-no-click {
                                                cursor: auto;
                                            }

                                            .apexcharts-legend .apexcharts-hidden-zero-series,
                                            .apexcharts-legend .apexcharts-hidden-null-series {
                                                display: none !important;
                                            }

                                            .apexcharts-inactive-legend {
                                                opacity: 0.45;
                                            }
                                        </style>
                                    </foreignObject>
                                    <rect width="0" height="0" x="0" y="0" rx="0" ry="0"
                                        opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                        fill="#fefefe"></rect>
                                    <g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g>
                                    <g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g>
                                    <g class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                    <g class="apexcharts-inner apexcharts-graphical" transform="translate(0, 1)">
                                        <defs>
                                            <clipPath id="gridRectMask84cl5l5q">
                                                <rect width="199" height="39" x="-3" y="-3" rx="0"
                                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="gridRectBarMask84cl5l5q">
                                                <rect width="199" height="39" x="-3" y="-3" rx="0"
                                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="gridRectMarkerMask84cl5l5q">
                                                <rect width="199" height="33" x="-3" y="0" rx="0"
                                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMask84cl5l5q"></clipPath>
                                            <clipPath id="nonForecastMask84cl5l5q"></clipPath>
                                            <linearGradient x1="0" y1="0" x2="0"
                                                y2="1" id="SvgjsLinearGradient1003">
                                                <stop stop-opacity="0.4" stop-color="#3538cd" offset="0"></stop>
                                                <stop stop-opacity="0.1" stop-color="#ffffff" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <line x1="0" y1="0" x2="0" y2="33"
                                            stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt"
                                            class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="33"
                                            fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1">
                                        </line>
                                        <g class="apexcharts-grid">
                                            <g class="apexcharts-gridlines-horizontal" style="display: none;">
                                                <line x1="0" y1="0" x2="193" y2="0"
                                                    stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line x1="0" y1="16.5" x2="193" y2="16.5"
                                                    stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line x1="0" y1="33" x2="193" y2="33"
                                                    stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                            </g>
                                            <g class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                            <line x1="0" y1="33" x2="193" y2="33"
                                                stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                            </line>
                                            <line x1="0" y1="1" x2="0" y2="33"
                                                stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                            </line>
                                        </g>
                                        <g class="apexcharts-grid-borders" style="display: none;"></g>
                                        <g class="apexcharts-area-series apexcharts-plot-series">
                                            <g class="apexcharts-series" zIndex="0" seriesName="Data"
                                                data:longestSeries="true" rel="1" data:realIndex="0">
                                                <path
                                                    d="M 0 31.35C 11.258333333333331 31.35 20.90833333333333 20.625 32.166666666666664 20.625C 43.425 20.625 53.074999999999996 24.75 64.33333333333333 24.75C 75.59166666666667 24.75 85.24166666666666 16.5 96.5 16.5C 107.75833333333333 16.5 117.40833333333333 26.400000000000002 128.66666666666666 26.400000000000002C 139.925 26.400000000000002 149.575 12.375 160.83333333333334 12.375C 172.09166666666667 12.375 181.74166666666667 16.5 193 16.5C 193 16.5 193 16.5 193 33 L 0 33z"
                                                    fill="url(#SvgjsLinearGradient1003)" fill-opacity="1"
                                                    stroke="none" stroke-opacity="1" stroke-linecap="butt"
                                                    stroke-width="0" stroke-dasharray="0" class="apexcharts-area"
                                                    index="0" clip-path="url(#gridRectMask84cl5l5q)"
                                                    pathTo="M 0 31.35C 11.258333333333331 31.35 20.90833333333333 20.625 32.166666666666664 20.625C 43.425 20.625 53.074999999999996 24.75 64.33333333333333 24.75C 75.59166666666667 24.75 85.24166666666666 16.5 96.5 16.5C 107.75833333333333 16.5 117.40833333333333 26.400000000000002 128.66666666666666 26.400000000000002C 139.925 26.400000000000002 149.575 12.375 160.83333333333334 12.375C 172.09166666666667 12.375 181.74166666666667 16.5 193 16.5C 193 16.5 193 16.5 193 33 L 0 33z"
                                                    pathFrom="M 0 33 L 0 33 L 32.166666666666664 33 L 64.33333333333333 33 L 96.5 33 L 128.66666666666666 33 L 160.83333333333334 33 L 193 33z">
                                                </path>
                                                <path
                                                    d="M 0 31.35C 11.258333333333331 31.35 20.90833333333333 20.625 32.166666666666664 20.625C 43.425 20.625 53.074999999999996 24.75 64.33333333333333 24.75C 75.59166666666667 24.75 85.24166666666666 16.5 96.5 16.5C 107.75833333333333 16.5 117.40833333333333 26.400000000000002 128.66666666666666 26.400000000000002C 139.925 26.400000000000002 149.575 12.375 160.83333333333334 12.375C 172.09166666666667 12.375 181.74166666666667 16.5 193 16.5"
                                                    fill="none" fill-opacity="1" stroke="#3538cd"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                    stroke-dasharray="0" class="apexcharts-area" index="0"
                                                    clip-path="url(#gridRectMask84cl5l5q)"
                                                    pathTo="M 0 31.35C 11.258333333333331 31.35 20.90833333333333 20.625 32.166666666666664 20.625C 43.425 20.625 53.074999999999996 24.75 64.33333333333333 24.75C 75.59166666666667 24.75 85.24166666666666 16.5 96.5 16.5C 107.75833333333333 16.5 117.40833333333333 26.400000000000002 128.66666666666666 26.400000000000002C 139.925 26.400000000000002 149.575 12.375 160.83333333333334 12.375C 172.09166666666667 12.375 181.74166666666667 16.5 193 16.5"
                                                    pathFrom="M 0 33 L 0 33 L 32.166666666666664 33 L 64.33333333333333 33 L 96.5 33 L 128.66666666666666 33 L 160.83333333333334 33 L 193 33"
                                                    fill-rule="evenodd"></path>
                                                <g class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                    data:realIndex="0"></g>
                                            </g>
                                            <g class="apexcharts-datalabels" data:realIndex="0"></g>
                                        </g>
                                        <line x1="0" y1="0" x2="193" y2="0"
                                            stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line x1="0" y1="0" x2="193" y2="0"
                                            stroke="#b6b6b6" stroke-dasharray="0" stroke-width="0"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                        <g class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                                        </g>
                                        <g class="apexcharts-yaxis-annotations"></g>
                                        <g class="apexcharts-xaxis-annotations"></g>
                                        <g class="apexcharts-point-annotations"></g>
                                    </g>
                                </svg>
                                <div class="apexcharts-legend" style="max-height: 17.5px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- col end -->

            <!-- col start -->
            <div class="col-xl-3 col-md-6 d-flex">
                <div class="card flex-fill w-100 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div>
                                <p class="mb-1 text-truncate">Heart Rate</p>
                                <span class="badge fw-medium bg-success flex-shrink-0 me-2">+95%</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <h3 class="fw-bold mb-0 me-1">87</h3>
                                <p class="mb-0">bpm</p>
                            </div>
                        </div>
                        <div id="s-col-9" class="chart-set" style="min-height: 40px;">
                            <div id="apexchartszjjlcyi4g"
                                class="apexcharts-canvas apexchartszjjlcyi4g apexcharts-theme-light"
                                style="width: 193px; height: 40px;"><svg xmlns="http://www.w3.org/2000/svg"
                                    version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="apexcharts-svg"
                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)" width="193"
                                    height="40">
                                    <foreignObject x="0" y="0" width="193" height="40">
                                        <style type="text/css">
                                            .apexcharts-flip-y {
                                                transform: scaleY(-1) translateY(-100%);
                                                transform-origin: top;
                                                transform-box: fill-box;
                                            }

                                            .apexcharts-flip-x {
                                                transform: scaleX(-1);
                                                transform-origin: center;
                                                transform-box: fill-box;
                                            }

                                            .apexcharts-legend {
                                                display: flex;
                                                overflow: auto;
                                                padding: 0 10px;
                                            }

                                            .apexcharts-legend.apexcharts-legend-group-horizontal {
                                                flex-direction: column;
                                            }

                                            .apexcharts-legend-group {
                                                display: flex;
                                            }

                                            .apexcharts-legend-group-vertical {
                                                flex-direction: column-reverse;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom,
                                            .apexcharts-legend.apx-legend-position-top {
                                                flex-wrap: wrap
                                            }

                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                flex-direction: column;
                                                bottom: 0;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                justify-content: flex-start;
                                                align-items: flex-start;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                justify-content: center;
                                                align-items: center;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                justify-content: flex-end;
                                                align-items: flex-end;
                                            }

                                            .apexcharts-legend-series {
                                                cursor: pointer;
                                                line-height: normal;
                                                display: flex;
                                                align-items: center;
                                            }

                                            .apexcharts-legend-text {
                                                position: relative;
                                                font-size: 14px;
                                            }

                                            .apexcharts-legend-text *,
                                            .apexcharts-legend-marker * {
                                                pointer-events: none;
                                            }

                                            .apexcharts-legend-marker {
                                                position: relative;
                                                display: flex;
                                                align-items: center;
                                                justify-content: center;
                                                cursor: pointer;
                                                margin-right: 1px;
                                            }

                                            .apexcharts-legend-series.apexcharts-no-click {
                                                cursor: auto;
                                            }

                                            .apexcharts-legend .apexcharts-hidden-zero-series,
                                            .apexcharts-legend .apexcharts-hidden-null-series {
                                                display: none !important;
                                            }

                                            .apexcharts-inactive-legend {
                                                opacity: 0.45;
                                            }
                                        </style>
                                    </foreignObject>
                                    <rect width="0" height="0" x="0" y="0" rx="0" ry="0"
                                        opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                        fill="#fefefe"></rect>
                                    <g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g>
                                    <g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g>
                                    <g class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                    <g class="apexcharts-inner apexcharts-graphical" transform="translate(0, 1)">
                                        <defs>
                                            <clipPath id="gridRectMaskzjjlcyi4g">
                                                <rect width="199" height="44" x="-3" y="-3" rx="0"
                                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="gridRectBarMaskzjjlcyi4g">
                                                <rect width="199" height="44" x="-3" y="-3" rx="0"
                                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="gridRectMarkerMaskzjjlcyi4g">
                                                <rect width="199" height="38" x="-3" y="0" rx="0"
                                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMaskzjjlcyi4g"></clipPath>
                                            <clipPath id="nonForecastMaskzjjlcyi4g"></clipPath>
                                            <linearGradient x1="0" y1="0" x2="0"
                                                y2="1" id="SvgjsLinearGradient1004">
                                                <stop stop-opacity="0.5" stop-color="#007bff" offset="0"></stop>
                                                <stop stop-opacity="0" stop-color="#ffffff" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <line x1="0" y1="0" x2="0" y2="38"
                                            stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt"
                                            class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="38"
                                            fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1">
                                        </line>
                                        <g class="apexcharts-grid">
                                            <g class="apexcharts-gridlines-horizontal" style="display: none;">
                                                <line x1="0" y1="0" x2="193" y2="0"
                                                    stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line x1="0" y1="19" x2="193" y2="19"
                                                    stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line x1="0" y1="38" x2="193" y2="38"
                                                    stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                            </g>
                                            <g class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                            <line x1="0" y1="38" x2="193" y2="38"
                                                stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                            </line>
                                            <line x1="0" y1="1" x2="0" y2="38"
                                                stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                            </line>
                                        </g>
                                        <g class="apexcharts-grid-borders" style="display: none;"></g>
                                        <g class="apexcharts-area-series apexcharts-plot-series">
                                            <g class="apexcharts-series" zIndex="0" seriesName="Data"
                                                data:longestSeries="true" rel="1" data:realIndex="0">
                                                <path
                                                    d="M 0 28.5C 7.5055555555555555 28.5 13.93888888888889 19 21.444444444444446 19C 28.950000000000003 19 35.38333333333334 23.75 42.88888888888889 23.75C 50.394444444444446 23.75 56.827777777777776 14.25 64.33333333333333 14.25C 71.83888888888889 14.25 78.27222222222223 20.9 85.77777777777779 20.9C 93.28333333333335 20.9 99.71666666666667 9.5 107.22222222222223 9.5C 114.72777777777777 9.5 121.16111111111111 11.399999999999999 128.66666666666666 11.399999999999999C 136.17222222222222 11.399999999999999 142.60555555555555 4.75 150.11111111111111 4.75C 157.61666666666667 4.75 164.05 7.599999999999998 171.55555555555557 7.599999999999998C 179.06111111111113 7.599999999999998 185.49444444444444 1.8999999999999986 193 1.8999999999999986C 193 1.8999999999999986 193 1.8999999999999986 193 38 L 0 38z"
                                                    fill="url(#SvgjsLinearGradient1004)" fill-opacity="1"
                                                    stroke="none" stroke-opacity="1" stroke-linecap="butt"
                                                    stroke-width="0" stroke-dasharray="0" class="apexcharts-area"
                                                    index="0" clip-path="url(#gridRectMaskzjjlcyi4g)"
                                                    pathTo="M 0 28.5C 7.5055555555555555 28.5 13.93888888888889 19 21.444444444444446 19C 28.950000000000003 19 35.38333333333334 23.75 42.88888888888889 23.75C 50.394444444444446 23.75 56.827777777777776 14.25 64.33333333333333 14.25C 71.83888888888889 14.25 78.27222222222223 20.9 85.77777777777779 20.9C 93.28333333333335 20.9 99.71666666666667 9.5 107.22222222222223 9.5C 114.72777777777777 9.5 121.16111111111111 11.399999999999999 128.66666666666666 11.399999999999999C 136.17222222222222 11.399999999999999 142.60555555555555 4.75 150.11111111111111 4.75C 157.61666666666667 4.75 164.05 7.599999999999998 171.55555555555557 7.599999999999998C 179.06111111111113 7.599999999999998 185.49444444444444 1.8999999999999986 193 1.8999999999999986C 193 1.8999999999999986 193 1.8999999999999986 193 38 L 0 38z"
                                                    pathFrom="M 0 38 L 0 38 L 21.444444444444446 38 L 42.88888888888889 38 L 64.33333333333333 38 L 85.77777777777779 38 L 107.22222222222223 38 L 128.66666666666666 38 L 150.11111111111111 38 L 171.55555555555557 38 L 193 38z">
                                                </path>
                                                <path
                                                    d="M 0 28.5C 7.5055555555555555 28.5 13.93888888888889 19 21.444444444444446 19C 28.950000000000003 19 35.38333333333334 23.75 42.88888888888889 23.75C 50.394444444444446 23.75 56.827777777777776 14.25 64.33333333333333 14.25C 71.83888888888889 14.25 78.27222222222223 20.9 85.77777777777779 20.9C 93.28333333333335 20.9 99.71666666666667 9.5 107.22222222222223 9.5C 114.72777777777777 9.5 121.16111111111111 11.399999999999999 128.66666666666666 11.399999999999999C 136.17222222222222 11.399999999999999 142.60555555555555 4.75 150.11111111111111 4.75C 157.61666666666667 4.75 164.05 7.599999999999998 171.55555555555557 7.599999999999998C 179.06111111111113 7.599999999999998 185.49444444444444 1.8999999999999986 193 1.8999999999999986"
                                                    fill="none" fill-opacity="1" stroke="#007bff"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                    stroke-dasharray="0" class="apexcharts-area" index="0"
                                                    clip-path="url(#gridRectMaskzjjlcyi4g)"
                                                    pathTo="M 0 28.5C 7.5055555555555555 28.5 13.93888888888889 19 21.444444444444446 19C 28.950000000000003 19 35.38333333333334 23.75 42.88888888888889 23.75C 50.394444444444446 23.75 56.827777777777776 14.25 64.33333333333333 14.25C 71.83888888888889 14.25 78.27222222222223 20.9 85.77777777777779 20.9C 93.28333333333335 20.9 99.71666666666667 9.5 107.22222222222223 9.5C 114.72777777777777 9.5 121.16111111111111 11.399999999999999 128.66666666666666 11.399999999999999C 136.17222222222222 11.399999999999999 142.60555555555555 4.75 150.11111111111111 4.75C 157.61666666666667 4.75 164.05 7.599999999999998 171.55555555555557 7.599999999999998C 179.06111111111113 7.599999999999998 185.49444444444444 1.8999999999999986 193 1.8999999999999986"
                                                    pathFrom="M 0 38 L 0 38 L 21.444444444444446 38 L 42.88888888888889 38 L 64.33333333333333 38 L 85.77777777777779 38 L 107.22222222222223 38 L 128.66666666666666 38 L 150.11111111111111 38 L 171.55555555555557 38 L 193 38"
                                                    fill-rule="evenodd"></path>
                                                <g class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                    data:realIndex="0"></g>
                                            </g>
                                            <g class="apexcharts-datalabels" data:realIndex="0"></g>
                                        </g>
                                        <line x1="0" y1="0" x2="193" y2="0"
                                            stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line x1="0" y1="0" x2="193" y2="0"
                                            stroke="#b6b6b6" stroke-dasharray="0" stroke-width="0"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                        <g class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                                        </g>
                                        <g class="apexcharts-yaxis-annotations"></g>
                                        <g class="apexcharts-xaxis-annotations"></g>
                                        <g class="apexcharts-point-annotations"></g>
                                    </g>
                                </svg>
                                <div class="apexcharts-legend" style="max-height: 20px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- col end -->

        </div>
        <!-- row start -->

        <!-- row start -->
        <div class="row">

            <!-- col start -->
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="card shadow-sm flex-fill w-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="fw-bold mb-0">My Doctors</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                    <img src="{{ asset('assets') }}/img/doctors/doctor-01.jpg" alt="img"
                                        class="rounded-circle">
                                </a>
                                <div>
                                    <h6 class="fs-14 mb-1 text-truncate"><a href="javascript:void(0);"
                                            class="fw-semibold">Dr. Mick Thompson</a></h6>
                                    <p class="mb-0 fs-13 text-truncate">Cardiologist</p>
                                </div>
                            </div>
                            <span class="badge fw-medium badge-soft-danger border border-danger flex-shrink-0">20
                                Bookings</span>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                    <img src="{{ asset('assets') }}/img/doctors/doctor-02.jpg" alt="img"
                                        class="rounded-circle">
                                </a>
                                <div>
                                    <h6 class="fs-14 mb-1 text-truncate"><a href="javascript:void(0);"
                                            class="fw-semibold">Dr. Sarah Johnson</a></h6>
                                    <p class="mb-0 fs-13 text-truncate">Orthopedic Surgeon</p>
                                </div>
                            </div>
                            <span class="badge fw-medium badge-soft-danger border border-danger flex-shrink-0">15
                                Bookings</span>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                    <img src="{{ asset('assets') }}/img/doctors/doctor-03.jpg" alt="img"
                                        class="rounded-circle">
                                </a>
                                <div>
                                    <h6 class="fs-14 mb-1 text-truncate"><a href="javascript:void(0);"
                                            class="fw-semibold">Dr. Emily Carter</a></h6>
                                    <p class="mb-0 fs-13 text-truncate">Pediatrician</p>
                                </div>
                            </div>
                            <span class="badge fw-medium badge-soft-danger border border-danger flex-shrink-0">12
                                Bookings</span>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                    <img src="{{ asset('assets') }}/img/doctors/doctor-04.jpg" alt="img"
                                        class="rounded-circle">
                                </a>
                                <div>
                                    <h6 class="fs-14 mb-1 text-truncate"><a href="javascript:void(0);"
                                            class="fw-semibold">Dr. David Lee</a></h6>
                                    <p class="mb-0 fs-13 text-truncate">Gynecologist</p>
                                </div>
                            </div>
                            <span class="badge fw-medium badge-soft-danger border border-danger flex-shrink-0">08
                                Bookings</span>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-0">
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                    <img src="{{ asset('assets') }}/img/doctors/doctor-05.jpg" alt="img"
                                        class="rounded-circle">
                                </a>
                                <div>
                                    <h6 class="fs-14 mb-1 text-truncate"><a href="javascript:void(0);"
                                            class="fw-semibold">Dr. Anna Kim</a></h6>
                                    <p class="mb-0 fs-13 text-truncate">Psychiatrist</p>
                                </div>
                            </div>
                            <span class="badge fw-medium badge-soft-danger border border-danger flex-shrink-0">06
                                Bookings</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- col end -->

            <!-- col start -->
            <div class="col-xl-4 col-lg-6 d-flex">
                <div class="card shadow-sm flex-fill w-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="fw-bold mb-0">Prescriptions</h5>
                    </div>
                    <div class="card-body">
                        <div class="overflow-auto">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="d-flex align-items-center flex-shrink-0">
                                    <a href="javascript:void(0);"
                                        class="avatar me-2 flex-shrink-0 bg-light rounded-circle text-dark">
                                        <i class="ti ti-file-description text-body fs-20"></i>
                                    </a>
                                    <div>
                                        <h6 class="fs-14 mb-1 text-truncate"><a href="javascript:void(0);"
                                                class="fw-semibold">Cardiology Prescription</a></h6>
                                        <p class="mb-0 fs-13 text-truncate">20 Apr 2025</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);"
                                        class="btn btn-outline-white d-inline-flex align-items-center shadow-sm me-2 p-1"><i
                                            class="ti ti-eye"></i></a>
                                    <a href="javascript:void(0);"
                                        class="btn btn-outline-white d-inline-flex align-items-center shadow-sm p-1"><i
                                            class="ti ti-download"></i></a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="d-flex align-items-center flex-shrink-0">
                                    <a href="javascript:void(0);"
                                        class="avatar me-2 flex-shrink-0 bg-light rounded-circle text-dark">
                                        <i class="ti ti-file-description text-body fs-20"></i>
                                    </a>
                                    <div>
                                        <h6 class="fs-14 mb-1 text-truncate"><a href="javascript:void(0);"
                                                class="fw-semibold">Dentist Prescription</a></h6>
                                        <p class="mb-0 fs-13 text-truncate">25 Mar 2025</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);"
                                        class="btn btn-outline-white d-inline-flex align-items-center shadow-sm me-2 p-1"><i
                                            class="ti ti-eye"></i></a>
                                    <a href="javascript:void(0);"
                                        class="btn btn-outline-white d-inline-flex align-items-center shadow-sm p-1"><i
                                            class="ti ti-download"></i></a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="d-flex align-items-center flex-shrink-0">
                                    <a href="javascript:void(0);"
                                        class="avatar me-2 flex-shrink-0 bg-light rounded-circle text-dark">
                                        <i class="ti ti-file-description text-body fs-20"></i>
                                    </a>
                                    <div>
                                        <h6 class="fs-14 mb-1 text-truncate"><a href="javascript:void(0);"
                                                class="fw-semibold">Dentist Prescription</a></h6>
                                        <p class="mb-0 fs-13 text-truncate">16 Mar 2025</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);"
                                        class="btn btn-outline-white d-inline-flex align-items-center shadow-sm me-2 p-1"><i
                                            class="ti ti-eye"></i></a>
                                    <a href="javascript:void(0);"
                                        class="btn btn-outline-white d-inline-flex align-items-center shadow-sm p-1"><i
                                            class="ti ti-download"></i></a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="d-flex align-items-center flex-shrink-0">
                                    <a href="javascript:void(0);"
                                        class="avatar me-2 flex-shrink-0 bg-light rounded-circle text-dark">
                                        <i class="ti ti-file-description text-body fs-20"></i>
                                    </a>
                                    <div>
                                        <h6 class="fs-14 mb-1 text-truncate"><a href="javascript:void(0);"
                                                class="fw-semibold">Dentist Prescription</a></h6>
                                        <p class="mb-0 fs-13 text-truncate">12 Feb 2025</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);"
                                        class="btn btn-outline-white d-inline-flex align-items-center shadow-sm me-2 p-1"><i
                                            class="ti ti-eye"></i></a>
                                    <a href="javascript:void(0);"
                                        class="btn btn-outline-white d-inline-flex align-items-center shadow-sm p-1"><i
                                            class="ti ti-download"></i></a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-0">
                                <div class="d-flex align-items-center flex-shrink-0">
                                    <a href="javascript:void(0);"
                                        class="avatar me-2 flex-shrink-0 bg-light rounded-circle text-dark">
                                        <i class="ti ti-file-description text-body fs-20"></i>
                                    </a>
                                    <div>
                                        <h6 class="fs-14 mb-1 text-truncate"><a href="javascript:void(0);"
                                                class="fw-semibold">Cardiology Prescription</a></h6>
                                        <p class="mb-0 fs-13 text-truncate">04 Jan 2025</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);"
                                        class="btn btn-outline-white d-inline-flex align-items-center shadow-sm me-2 p-1"><i
                                            class="ti ti-eye"></i></a>
                                    <a href="javascript:void(0);"
                                        class="btn btn-outline-white d-inline-flex align-items-center shadow-sm p-1"><i
                                            class="ti ti-download"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- col end -->

            <!-- col start -->
            <div class="col-xl-4 d-flex">
                <div class="card shadow-sm flex-fill w-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="fw-bold mb-0">Recent Activity</h5>
                    </div>
                    <div class="card-body">
                        <div class="recent-activity">
                            <div class="d-flex align-items-center mb-3">
                                <span><i class="ti ti-point-filled fs-24 text-success"></i></span>
                                <div class="ms-2">
                                    <p class="mb-1 text-truncate">Appointment with <a href="javascript:void(0);"
                                            class="fw-semibold">Primary Care Physician</a></p>
                                    <p class="fs-13 mb-0">24 Mar 2025, 10:55 AM</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <span><i class="ti ti-point-filled fs-24 text-danger"></i></span>
                                <div class="ms-2">
                                    <p class="mb-1 text-truncate"><a href="javascript:void(0);"
                                            class="fw-semibold">Blood Pressure Check</a> (Home Monitoring)</p>
                                    <p class="fs-13 mb-0">24 Apr 2025, 11:00 AM</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <span><i class="ti ti-point-filled fs-24 text-warning"></i></span>
                                <div class="ms-2">
                                    <p class="mb-1"><a href="javascript:void(0);" class="fw-semibold">Physical
                                            Therapy Session</a> Knee strengthening exercises</p>
                                    <p class="fs-13 mb-0">24 Apr 2025, 11:00 AM</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-0">
                                <span><i class="ti ti-point-filled fs-24 text-info"></i></span>
                                <div class="ms-2">
                                    <p class="mb-1"><a href="javascript:void(0);" class="fw-semibold">Discuss
                                            dietary changes</a> to manage blood sugar levels and weight</p>
                                    <p class="fs-13 mb-0">24 Apr 2025, 11:00 AM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- col end -->

        </div>
        <!-- row end -->

        <!-- card start -->
        <div class="card shadow-sm">
            <div class="card-header">
                <h5 class="fw-bold mb-0">Vitals</h5>
            </div>
            <div class="card-body">

                <!-- row start -->
                <div class="row row-gap-3 row-cols-1 row-cols-xl-6 row-cols-md-3 row-cols-sm-2">

                    <!-- col start -->
                    <div class="col d-flex">
                        <div class="p-3 border shadow-sm flex-fill w-100 rounded-2">
                            <div class="d-flex align-items-center">
                                <span class="avatar bg-primary rounded-circle flex-shrink-0"><img
                                        src="{{ asset('assets') }}/img/icons/weight.svg" alt="img"
                                        class="w-auto h-auto"></span>
                                <div class="ms-1">
                                    <p class="mb-1">Weight</p>
                                    <p class="text-truncate"><span class="fs-18 fw-bold text-dark">100</span> Kg</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col d-flex">
                        <div class="p-3 border shadow-sm flex-fill w-100 rounded-2">
                            <div class="d-flex align-items-center">
                                <span class="avatar bg-primary rounded-circle flex-shrink-0"><img
                                        src="{{ asset('assets') }}/img/icons/rotate-left.svg" alt="img"
                                        class="w-auto h-auto"></span>
                                <div class="ms-1">
                                    <p class="mb-1">Height</p>
                                    <p class="text-truncate"><span class="fs-18 fw-bold text-dark">154</span> Cm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col d-flex">
                        <div class="p-3 border shadow-sm flex-fill w-100 rounded-2">
                            <div class="d-flex align-items-center">
                                <span class="avatar bg-primary rounded-circle flex-shrink-0"><img
                                        src="{{ asset('assets') }}/img/icons/user-cirlce-add.svg" alt="img"
                                        class="w-auto h-auto"></span>
                                <div class="ms-1">
                                    <p class="mb-1">BMI</p>
                                    <p class="text-truncate"><span class="fs-18 fw-bold text-dark">19.2</span> kg/cm
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col d-flex">
                        <div class="p-3 border shadow-sm flex-fill w-100 rounded-2">
                            <div class="d-flex align-items-center">
                                <span class="avatar bg-primary rounded-circle flex-shrink-0"><img
                                        src="{{ asset('assets') }}/img/icons/driver-2.svg" alt="img"
                                        class="w-auto h-auto"></span>
                                <div class="ms-1">
                                    <p class="mb-1">Pulse</p>
                                    <p class="text-truncate"><span class="fs-18 fw-bold text-dark">97%</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col d-flex">
                        <div class="p-3 border shadow-sm flex-fill w-100 rounded-2">
                            <div class="d-flex align-items-center">
                                <span class="avatar bg-primary rounded-circle flex-shrink-0"><img
                                        src="{{ asset('assets') }}/img/icons/wind.svg" alt="img"
                                        class="w-auto h-auto"></span>
                                <div class="ms-1">
                                    <p class="mb-1">SPO2</p>
                                    <p class="text-truncate"><span class="fs-18 fw-bold text-dark">98%</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col d-flex">
                        <div class="p-3 border shadow-sm flex-fill w-100 rounded-2">
                            <div class="d-flex align-items-center">
                                <span class="avatar bg-primary rounded-circle flex-shrink-0"><img
                                        src="{{ asset('assets') }}/img/icons/sun.svg" alt="img"
                                        class="w-auto h-auto"></span>
                                <div class="ms-1">
                                    <p class="mb-1 text-truncate">Temprature</p>
                                    <p class="text-truncate"><span class="fs-18 fw-bold text-dark">101</span> C</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                </div>
                <!-- row end -->

            </div>
        </div>
        <!-- card end -->

        <!-- row start -->
        <div class="row">

            <!-- col start -->
            <div class="col-lg-6 d-flex">
                <div class="card shadow-sm flex-fill w-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="fw-bold mb-0">Consultation By Department</h5>
                        <div class="dropdown">
                            <a href="javascript:void(0);"
                                class="btn btn-sm px-2 border shadow-sm btn-outline-white d-inline-flex align-items-center"
                                data-bs-toggle="dropdown">
                                Monthly <i class="ti ti-chevron-down ms-1"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#">Monthly</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Weekly</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Yearly</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body pb-0">
                        <div id="s-col-10" class="chart-set" style="min-height: 355px;">
                            <div id="apexchartsi520a3f2"
                                class="apexcharts-canvas apexchartsi520a3f2 apexcharts-theme-light"
                                style="width: 451px; height: 340px;"><svg xmlns="http://www.w3.org/2000/svg"
                                    version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="apexcharts-svg"
                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)" width="451"
                                    height="340">
                                    <foreignObject x="0" y="0" width="451" height="340">
                                        <style type="text/css">
                                            .apexcharts-flip-y {
                                                transform: scaleY(-1) translateY(-100%);
                                                transform-origin: top;
                                                transform-box: fill-box;
                                            }

                                            .apexcharts-flip-x {
                                                transform: scaleX(-1);
                                                transform-origin: center;
                                                transform-box: fill-box;
                                            }

                                            .apexcharts-legend {
                                                display: flex;
                                                overflow: auto;
                                                padding: 0 10px;
                                            }

                                            .apexcharts-legend.apexcharts-legend-group-horizontal {
                                                flex-direction: column;
                                            }

                                            .apexcharts-legend-group {
                                                display: flex;
                                            }

                                            .apexcharts-legend-group-vertical {
                                                flex-direction: column-reverse;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom,
                                            .apexcharts-legend.apx-legend-position-top {
                                                flex-wrap: wrap
                                            }

                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                flex-direction: column;
                                                bottom: 0;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                justify-content: flex-start;
                                                align-items: flex-start;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                justify-content: center;
                                                align-items: center;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                justify-content: flex-end;
                                                align-items: flex-end;
                                            }

                                            .apexcharts-legend-series {
                                                cursor: pointer;
                                                line-height: normal;
                                                display: flex;
                                                align-items: center;
                                            }

                                            .apexcharts-legend-text {
                                                position: relative;
                                                font-size: 14px;
                                            }

                                            .apexcharts-legend-text *,
                                            .apexcharts-legend-marker * {
                                                pointer-events: none;
                                            }

                                            .apexcharts-legend-marker {
                                                position: relative;
                                                display: flex;
                                                align-items: center;
                                                justify-content: center;
                                                cursor: pointer;
                                                margin-right: 1px;
                                            }

                                            .apexcharts-legend-series.apexcharts-no-click {
                                                cursor: auto;
                                            }

                                            .apexcharts-legend .apexcharts-hidden-zero-series,
                                            .apexcharts-legend .apexcharts-hidden-null-series {
                                                display: none !important;
                                            }

                                            .apexcharts-inactive-legend {
                                                opacity: 0.45;
                                            }
                                        </style>
                                    </foreignObject>
                                    <g class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(89.013671875, 41.652)">
                                        <defs>
                                            <linearGradient x1="0" y1="0" x2="0"
                                                y2="1" id="SvgjsLinearGradient1005">
                                                <stop stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)"
                                                    offset="0"></stop>
                                                <stop stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)"
                                                    offset="1"></stop>
                                                <stop stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)"
                                                    offset="1"></stop>
                                            </linearGradient>
                                            <clipPath id="gridRectMaski520a3f2">
                                                <rect width="344.8125" height="276.348" x="-2" y="-2" rx="0"
                                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="gridRectBarMaski520a3f2">
                                                <rect width="344.8125" height="276.348" x="-2" y="-2" rx="0"
                                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="gridRectMarkerMaski520a3f2">
                                                <rect width="344.8125" height="272.348" x="-2" y="0" rx="0"
                                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMaski520a3f2"></clipPath>
                                            <clipPath id="nonForecastMaski520a3f2"></clipPath>
                                        </defs>
                                        <rect width="0" height="272.348" x="0" y="0" rx="0"
                                            ry="0" opacity="1" stroke-width="0" stroke="#b6b6b6"
                                            stroke-dasharray="3" fill="url(#SvgjsLinearGradient1005)"
                                            class="apexcharts-xcrosshairs" y2="272.348" filter="none"
                                            fill-opacity="0.9"></rect>
                                        <g class="apexcharts-grid">
                                            <g class="apexcharts-gridlines-horizontal">
                                                <line x1="0" y1="45.391333333333336" x2="340.8125"
                                                    y2="45.391333333333336" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line x1="0" y1="90.78266666666667" x2="340.8125"
                                                    y2="90.78266666666667" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line x1="0" y1="136.174" x2="340.8125" y2="136.174"
                                                    stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line x1="0" y1="181.56533333333334" x2="340.8125"
                                                    y2="181.56533333333334" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line x1="0" y1="226.95666666666668" x2="340.8125"
                                                    y2="226.95666666666668" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            </g>
                                            <g class="apexcharts-gridlines-vertical">
                                                <line x1="68.1625" y1="0" x2="68.1625" y2="272.348"
                                                    stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line x1="136.325" y1="0" x2="136.325" y2="272.348"
                                                    stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line x1="204.48749999999998" y1="0" x2="204.48749999999998"
                                                    y2="272.348" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line x1="272.65" y1="0" x2="272.65" y2="272.348"
                                                    stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                            </g>
                                            <line x1="0" y1="272.348" x2="340.8125" y2="272.348"
                                                stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                            </line>
                                            <line x1="0" y1="1" x2="0" y2="272.348"
                                                stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                            </line>
                                        </g>
                                        <g class="apexcharts-grid-borders">
                                            <line x1="0" y1="0" x2="0" y2="272.348"
                                                stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line x1="340.8125" y1="0" x2="340.8125" y2="272.348"
                                                stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line x1="0" y1="0" x2="340.8125" y2="0"
                                                stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line x1="0" y1="272.348" x2="340.8125" y2="272.348"
                                                stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                        </g>
                                        <g class="apexcharts-bar-series apexcharts-plot-series">
                                            <g class="apexcharts-series" rel="1" seriesName="SeriesxA"
                                                data:realIndex="0">
                                                <path
                                                    d="M 0.101 9.078266666666668 L 197.77224999999999 9.078266666666668 C 197.77224999999999 9.078266666666668 197.77224999999999 9.078266666666668 197.77224999999999 9.078266666666668 L 197.77224999999999 22.695666666666668 C 197.77224999999999 22.695666666666668 197.77224999999999 22.695666666666668 197.77224999999999 22.695666666666668 L 0.101 22.695666666666668 C 0.101 22.695666666666668 0.101 22.695666666666668 0.101 22.695666666666668 L 0.101 9.078266666666668 C 0.101 9.078266666666668 0.101 9.078266666666668 0.101 9.078266666666668 Z "
                                                    fill="rgba(53,56,205,0.85)" fill-opacity="1" stroke="#3538cd"
                                                    stroke-opacity="1" stroke-linecap="square" stroke-width="0"
                                                    stroke-dasharray="0" class="apexcharts-bar-area undefined"
                                                    index="0" clip-path="url(#gridRectBarMaski520a3f2)"
                                                    pathTo="M 0.101 9.078266666666668 L 197.77224999999999 9.078266666666668 C 197.77224999999999 9.078266666666668 197.77224999999999 9.078266666666668 197.77224999999999 9.078266666666668 L 197.77224999999999 22.695666666666668 C 197.77224999999999 22.695666666666668 197.77224999999999 22.695666666666668 197.77224999999999 22.695666666666668 L 0.101 22.695666666666668 C 0.101 22.695666666666668 0.101 22.695666666666668 0.101 22.695666666666668 L 0.101 9.078266666666668 C 0.101 9.078266666666668 0.101 9.078266666666668 0.101 9.078266666666668 Z "
                                                    pathFrom="M 0.101 9.078266666666668 L 0.101 9.078266666666668 L 0.101 22.695666666666668 L 0.101 22.695666666666668 L 0.101 22.695666666666668 L 0.101 22.695666666666668 L 0.101 22.695666666666668 L 0.101 9.078266666666668 Z"
                                                    cy="54.4696" cx="197.77124999999998" j="0" val="58"
                                                    barHeight="13.6174" barWidth="197.67125"></path>
                                                <path
                                                    d="M 0.101 54.4696 L 218.221 54.4696 C 218.221 54.4696 218.221 54.4696 218.221 54.4696 L 218.221 68.087 C 218.221 68.087 218.221 68.087 218.221 68.087 L 0.101 68.087 C 0.101 68.087 0.101 68.087 0.101 68.087 L 0.101 54.4696 C 0.101 54.4696 0.101 54.4696 0.101 54.4696 Z "
                                                    fill="rgba(53,56,205,0.85)" fill-opacity="1" stroke="#3538cd"
                                                    stroke-opacity="1" stroke-linecap="square" stroke-width="0"
                                                    stroke-dasharray="0" class="apexcharts-bar-area undefined"
                                                    index="0" clip-path="url(#gridRectBarMaski520a3f2)"
                                                    pathTo="M 0.101 54.4696 L 218.221 54.4696 C 218.221 54.4696 218.221 54.4696 218.221 54.4696 L 218.221 68.087 C 218.221 68.087 218.221 68.087 218.221 68.087 L 0.101 68.087 C 0.101 68.087 0.101 68.087 0.101 68.087 L 0.101 54.4696 C 0.101 54.4696 0.101 54.4696 0.101 54.4696 Z "
                                                    pathFrom="M 0.101 54.4696 L 0.101 54.4696 L 0.101 68.087 L 0.101 68.087 L 0.101 68.087 L 0.101 68.087 L 0.101 68.087 L 0.101 54.4696 Z"
                                                    cy="99.86093333333334" cx="218.22" j="1" val="64"
                                                    barHeight="13.6174" barWidth="218.12"></path>
                                                <path
                                                    d="M 0.101 99.86093333333334 L 245.486 99.86093333333334 C 245.486 99.86093333333334 245.486 99.86093333333334 245.486 99.86093333333334 L 245.486 113.47833333333334 C 245.486 113.47833333333334 245.486 113.47833333333334 245.486 113.47833333333334 L 0.101 113.47833333333334 C 0.101 113.47833333333334 0.101 113.47833333333334 0.101 113.47833333333334 L 0.101 99.86093333333334 C 0.101 99.86093333333334 0.101 99.86093333333334 0.101 99.86093333333334 Z "
                                                    fill="rgba(53,56,205,0.85)" fill-opacity="1" stroke="#3538cd"
                                                    stroke-opacity="1" stroke-linecap="square" stroke-width="0"
                                                    stroke-dasharray="0" class="apexcharts-bar-area undefined"
                                                    index="0" clip-path="url(#gridRectBarMaski520a3f2)"
                                                    pathTo="M 0.101 99.86093333333334 L 245.486 99.86093333333334 C 245.486 99.86093333333334 245.486 99.86093333333334 245.486 99.86093333333334 L 245.486 113.47833333333334 C 245.486 113.47833333333334 245.486 113.47833333333334 245.486 113.47833333333334 L 0.101 113.47833333333334 C 0.101 113.47833333333334 0.101 113.47833333333334 0.101 113.47833333333334 L 0.101 99.86093333333334 C 0.101 99.86093333333334 0.101 99.86093333333334 0.101 99.86093333333334 Z "
                                                    pathFrom="M 0.101 99.86093333333334 L 0.101 99.86093333333334 L 0.101 113.47833333333334 L 0.101 113.47833333333334 L 0.101 113.47833333333334 L 0.101 113.47833333333334 L 0.101 113.47833333333334 L 0.101 99.86093333333334 Z"
                                                    cy="145.25226666666669" cx="245.48499999999999" j="2"
                                                    val="72" barHeight="13.6174" barWidth="245.385"></path>
                                                <path
                                                    d="M 0.101 145.25226666666669 L 265.93475 145.25226666666669 C 265.93475 145.25226666666669 265.93475 145.25226666666669 265.93475 145.25226666666669 L 265.93475 158.8696666666667 C 265.93475 158.8696666666667 265.93475 158.8696666666667 265.93475 158.8696666666667 L 0.101 158.8696666666667 C 0.101 158.8696666666667 0.101 158.8696666666667 0.101 158.8696666666667 L 0.101 145.25226666666669 C 0.101 145.25226666666669 0.101 145.25226666666669 0.101 145.25226666666669 Z "
                                                    fill="rgba(53,56,205,0.85)" fill-opacity="1" stroke="#3538cd"
                                                    stroke-opacity="1" stroke-linecap="square" stroke-width="0"
                                                    stroke-dasharray="0" class="apexcharts-bar-area undefined"
                                                    index="0" clip-path="url(#gridRectBarMaski520a3f2)"
                                                    pathTo="M 0.101 145.25226666666669 L 265.93475 145.25226666666669 C 265.93475 145.25226666666669 265.93475 145.25226666666669 265.93475 145.25226666666669 L 265.93475 158.8696666666667 C 265.93475 158.8696666666667 265.93475 158.8696666666667 265.93475 158.8696666666667 L 0.101 158.8696666666667 C 0.101 158.8696666666667 0.101 158.8696666666667 0.101 158.8696666666667 L 0.101 145.25226666666669 C 0.101 145.25226666666669 0.101 145.25226666666669 0.101 145.25226666666669 Z "
                                                    pathFrom="M 0.101 145.25226666666669 L 0.101 145.25226666666669 L 0.101 158.8696666666667 L 0.101 158.8696666666667 L 0.101 158.8696666666667 L 0.101 158.8696666666667 L 0.101 158.8696666666667 L 0.101 145.25226666666669 Z"
                                                    cy="190.64360000000002" cx="265.93375000000003" j="3"
                                                    val="78" barHeight="13.6174" barWidth="265.83375"></path>
                                                <path
                                                    d="M 0.101 190.64360000000002 L 238.66975 190.64360000000002 C 238.66975 190.64360000000002 238.66975 190.64360000000002 238.66975 190.64360000000002 L 238.66975 204.26100000000002 C 238.66975 204.26100000000002 238.66975 204.26100000000002 238.66975 204.26100000000002 L 0.101 204.26100000000002 C 0.101 204.26100000000002 0.101 204.26100000000002 0.101 204.26100000000002 L 0.101 190.64360000000002 C 0.101 190.64360000000002 0.101 190.64360000000002 0.101 190.64360000000002 Z "
                                                    fill="rgba(53,56,205,0.85)" fill-opacity="1" stroke="#3538cd"
                                                    stroke-opacity="1" stroke-linecap="square" stroke-width="0"
                                                    stroke-dasharray="0" class="apexcharts-bar-area undefined"
                                                    index="0" clip-path="url(#gridRectBarMaski520a3f2)"
                                                    pathTo="M 0.101 190.64360000000002 L 238.66975 190.64360000000002 C 238.66975 190.64360000000002 238.66975 190.64360000000002 238.66975 190.64360000000002 L 238.66975 204.26100000000002 C 238.66975 204.26100000000002 238.66975 204.26100000000002 238.66975 204.26100000000002 L 0.101 204.26100000000002 C 0.101 204.26100000000002 0.101 204.26100000000002 0.101 204.26100000000002 L 0.101 190.64360000000002 C 0.101 190.64360000000002 0.101 190.64360000000002 0.101 190.64360000000002 Z "
                                                    pathFrom="M 0.101 190.64360000000002 L 0.101 190.64360000000002 L 0.101 204.26100000000002 L 0.101 204.26100000000002 L 0.101 204.26100000000002 L 0.101 204.26100000000002 L 0.101 204.26100000000002 L 0.101 190.64360000000002 Z"
                                                    cy="236.03493333333336" cx="238.66875" j="4" val="70"
                                                    barHeight="13.6174" barWidth="238.56875"></path>
                                                <path
                                                    d="M 0.101 236.03493333333336 L 126.20162499999999 236.03493333333336 C 126.20162499999999 236.03493333333336 126.20162499999999 236.03493333333336 126.20162499999999 236.03493333333336 L 126.20162499999999 249.65233333333336 C 126.20162499999999 249.65233333333336 126.20162499999999 249.65233333333336 126.20162499999999 249.65233333333336 L 0.101 249.65233333333336 C 0.101 249.65233333333336 0.101 249.65233333333336 0.101 249.65233333333336 L 0.101 236.03493333333336 C 0.101 236.03493333333336 0.101 236.03493333333336 0.101 236.03493333333336 Z "
                                                    fill="rgba(53,56,205,0.85)" fill-opacity="1" stroke="#3538cd"
                                                    stroke-opacity="1" stroke-linecap="square" stroke-width="0"
                                                    stroke-dasharray="0" class="apexcharts-bar-area undefined"
                                                    index="0" clip-path="url(#gridRectBarMaski520a3f2)"
                                                    pathTo="M 0.101 236.03493333333336 L 126.20162499999999 236.03493333333336 C 126.20162499999999 236.03493333333336 126.20162499999999 236.03493333333336 126.20162499999999 236.03493333333336 L 126.20162499999999 249.65233333333336 C 126.20162499999999 249.65233333333336 126.20162499999999 249.65233333333336 126.20162499999999 249.65233333333336 L 0.101 249.65233333333336 C 0.101 249.65233333333336 0.101 249.65233333333336 0.101 249.65233333333336 L 0.101 236.03493333333336 C 0.101 236.03493333333336 0.101 236.03493333333336 0.101 236.03493333333336 Z "
                                                    pathFrom="M 0.101 236.03493333333336 L 0.101 236.03493333333336 L 0.101 249.65233333333336 L 0.101 249.65233333333336 L 0.101 249.65233333333336 L 0.101 249.65233333333336 L 0.101 249.65233333333336 L 0.101 236.03493333333336 Z"
                                                    cy="281.4262666666667" cx="126.20062499999999" j="5"
                                                    val="37" barHeight="13.6174" barWidth="126.100625">
                                                </path>
                                                <g class="apexcharts-bar-goals-markers">
                                                    <g className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMaski520a3f2)"></g>
                                                    <g className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMaski520a3f2)"></g>
                                                    <g className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMaski520a3f2)"></g>
                                                    <g className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMaski520a3f2)"></g>
                                                    <g className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMaski520a3f2)"></g>
                                                    <g className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMaski520a3f2)"></g>
                                                </g>
                                                <g class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g>
                                            </g>
                                            <g class="apexcharts-series" rel="2" seriesName="SeriesxB"
                                                data:realIndex="1">
                                                <path
                                                    d="M 0.101 22.695666666666668 L 129.60975 22.695666666666668 C 129.60975 22.695666666666668 129.60975 22.695666666666668 129.60975 22.695666666666668 L 129.60975 36.31306666666667 C 129.60975 36.31306666666667 129.60975 36.31306666666667 129.60975 36.31306666666667 L 0.101 36.31306666666667 C 0.101 36.31306666666667 0.101 36.31306666666667 0.101 36.31306666666667 L 0.101 22.695666666666668 C 0.101 22.695666666666668 0.101 22.695666666666668 0.101 22.695666666666668 Z "
                                                    fill="rgba(14,147,132,0.85)" fill-opacity="1" stroke="#0e9384"
                                                    stroke-opacity="1" stroke-linecap="square" stroke-width="0"
                                                    stroke-dasharray="0" class="apexcharts-bar-area undefined"
                                                    index="1" clip-path="url(#gridRectBarMaski520a3f2)"
                                                    pathTo="M 0.101 22.695666666666668 L 129.60975 22.695666666666668 C 129.60975 22.695666666666668 129.60975 22.695666666666668 129.60975 22.695666666666668 L 129.60975 36.31306666666667 C 129.60975 36.31306666666667 129.60975 36.31306666666667 129.60975 36.31306666666667 L 0.101 36.31306666666667 C 0.101 36.31306666666667 0.101 36.31306666666667 0.101 36.31306666666667 L 0.101 22.695666666666668 C 0.101 22.695666666666668 0.101 22.695666666666668 0.101 22.695666666666668 Z "
                                                    pathFrom="M 0.101 22.695666666666668 L 0.101 22.695666666666668 L 0.101 36.31306666666667 L 0.101 36.31306666666667 L 0.101 36.31306666666667 L 0.101 36.31306666666667 L 0.101 36.31306666666667 L 0.101 22.695666666666668 Z"
                                                    cy="68.087" cx="129.60875" j="0" val="38"
                                                    barHeight="13.6174" barWidth="129.50875"></path>
                                                <path
                                                    d="M 0.101 68.087 L 272.751 68.087 C 272.751 68.087 272.751 68.087 272.751 68.087 L 272.751 81.7044 C 272.751 81.7044 272.751 81.7044 272.751 81.7044 L 0.101 81.7044 C 0.101 81.7044 0.101 81.7044 0.101 81.7044 L 0.101 68.087 C 0.101 68.087 0.101 68.087 0.101 68.087 Z "
                                                    fill="rgba(14,147,132,0.85)" fill-opacity="1" stroke="#0e9384"
                                                    stroke-opacity="1" stroke-linecap="square" stroke-width="0"
                                                    stroke-dasharray="0" class="apexcharts-bar-area undefined"
                                                    index="1" clip-path="url(#gridRectBarMaski520a3f2)"
                                                    pathTo="M 0.101 68.087 L 272.751 68.087 C 272.751 68.087 272.751 68.087 272.751 68.087 L 272.751 81.7044 C 272.751 81.7044 272.751 81.7044 272.751 81.7044 L 0.101 81.7044 C 0.101 81.7044 0.101 81.7044 0.101 81.7044 L 0.101 68.087 C 0.101 68.087 0.101 68.087 0.101 68.087 Z "
                                                    pathFrom="M 0.101 68.087 L 0.101 68.087 L 0.101 81.7044 L 0.101 81.7044 L 0.101 81.7044 L 0.101 81.7044 L 0.101 81.7044 L 0.101 68.087 Z"
                                                    cy="113.47833333333334" cx="272.75" j="1" val="80"
                                                    barHeight="13.6174" barWidth="272.65"></path>
                                                <path
                                                    d="M 0.101 113.47833333333334 L 68.2635 113.47833333333334 C 68.2635 113.47833333333334 68.2635 113.47833333333334 68.2635 113.47833333333334 L 68.2635 127.09573333333334 C 68.2635 127.09573333333334 68.2635 127.09573333333334 68.2635 127.09573333333334 L 0.101 127.09573333333334 C 0.101 127.09573333333334 0.101 127.09573333333334 0.101 127.09573333333334 L 0.101 113.47833333333334 C 0.101 113.47833333333334 0.101 113.47833333333334 0.101 113.47833333333334 Z "
                                                    fill="rgba(14,147,132,0.85)" fill-opacity="1" stroke="#0e9384"
                                                    stroke-opacity="1" stroke-linecap="square" stroke-width="0"
                                                    stroke-dasharray="0" class="apexcharts-bar-area undefined"
                                                    index="1" clip-path="url(#gridRectBarMaski520a3f2)"
                                                    pathTo="M 0.101 113.47833333333334 L 68.2635 113.47833333333334 C 68.2635 113.47833333333334 68.2635 113.47833333333334 68.2635 113.47833333333334 L 68.2635 127.09573333333334 C 68.2635 127.09573333333334 68.2635 127.09573333333334 68.2635 127.09573333333334 L 0.101 127.09573333333334 C 0.101 127.09573333333334 0.101 127.09573333333334 0.101 127.09573333333334 L 0.101 113.47833333333334 C 0.101 113.47833333333334 0.101 113.47833333333334 0.101 113.47833333333334 Z "
                                                    pathFrom="M 0.101 113.47833333333334 L 0.101 113.47833333333334 L 0.101 127.09573333333334 L 0.101 127.09573333333334 L 0.101 127.09573333333334 L 0.101 127.09573333333334 L 0.101 127.09573333333334 L 0.101 113.47833333333334 Z"
                                                    cy="158.8696666666667" cx="68.26249999999999" j="2"
                                                    val="20" barHeight="13.6174" barWidth="68.1625"></path>
                                                <path
                                                    d="M 0.101 158.8696666666667 L 68.2635 158.8696666666667 C 68.2635 158.8696666666667 68.2635 158.8696666666667 68.2635 158.8696666666667 L 68.2635 172.4870666666667 C 68.2635 172.4870666666667 68.2635 172.4870666666667 68.2635 172.4870666666667 L 0.101 172.4870666666667 C 0.101 172.4870666666667 0.101 172.4870666666667 0.101 172.4870666666667 L 0.101 158.8696666666667 C 0.101 158.8696666666667 0.101 158.8696666666667 0.101 158.8696666666667 Z "
                                                    fill="rgba(14,147,132,0.85)" fill-opacity="1" stroke="#0e9384"
                                                    stroke-opacity="1" stroke-linecap="square" stroke-width="0"
                                                    stroke-dasharray="0" class="apexcharts-bar-area undefined"
                                                    index="1" clip-path="url(#gridRectBarMaski520a3f2)"
                                                    pathTo="M 0.101 158.8696666666667 L 68.2635 158.8696666666667 C 68.2635 158.8696666666667 68.2635 158.8696666666667 68.2635 158.8696666666667 L 68.2635 172.4870666666667 C 68.2635 172.4870666666667 68.2635 172.4870666666667 68.2635 172.4870666666667 L 0.101 172.4870666666667 C 0.101 172.4870666666667 0.101 172.4870666666667 0.101 172.4870666666667 L 0.101 158.8696666666667 C 0.101 158.8696666666667 0.101 158.8696666666667 0.101 158.8696666666667 Z "
                                                    pathFrom="M 0.101 158.8696666666667 L 0.101 158.8696666666667 L 0.101 172.4870666666667 L 0.101 172.4870666666667 L 0.101 172.4870666666667 L 0.101 172.4870666666667 L 0.101 172.4870666666667 L 0.101 158.8696666666667 Z"
                                                    cy="204.26100000000002" cx="68.26249999999999" j="3"
                                                    val="20" barHeight="13.6174" barWidth="68.1625"></path>
                                                <path
                                                    d="M 0.101 204.26100000000002 L 221.629125 204.26100000000002 C 221.629125 204.26100000000002 221.629125 204.26100000000002 221.629125 204.26100000000002 L 221.629125 217.87840000000003 C 221.629125 217.87840000000003 221.629125 217.87840000000003 221.629125 217.87840000000003 L 0.101 217.87840000000003 C 0.101 217.87840000000003 0.101 217.87840000000003 0.101 217.87840000000003 L 0.101 204.26100000000002 C 0.101 204.26100000000002 0.101 204.26100000000002 0.101 204.26100000000002 Z "
                                                    fill="rgba(14,147,132,0.85)" fill-opacity="1" stroke="#0e9384"
                                                    stroke-opacity="1" stroke-linecap="square" stroke-width="0"
                                                    stroke-dasharray="0" class="apexcharts-bar-area undefined"
                                                    index="1" clip-path="url(#gridRectBarMaski520a3f2)"
                                                    pathTo="M 0.101 204.26100000000002 L 221.629125 204.26100000000002 C 221.629125 204.26100000000002 221.629125 204.26100000000002 221.629125 204.26100000000002 L 221.629125 217.87840000000003 C 221.629125 217.87840000000003 221.629125 217.87840000000003 221.629125 217.87840000000003 L 0.101 217.87840000000003 C 0.101 217.87840000000003 0.101 217.87840000000003 0.101 217.87840000000003 L 0.101 204.26100000000002 C 0.101 204.26100000000002 0.101 204.26100000000002 0.101 204.26100000000002 Z "
                                                    pathFrom="M 0.101 204.26100000000002 L 0.101 204.26100000000002 L 0.101 217.87840000000003 L 0.101 217.87840000000003 L 0.101 217.87840000000003 L 0.101 217.87840000000003 L 0.101 217.87840000000003 L 0.101 204.26100000000002 Z"
                                                    cy="249.65233333333336" cx="221.62812499999998" j="4"
                                                    val="65" barHeight="13.6174" barWidth="221.528125">
                                                </path>
                                                <path
                                                    d="M 0.101 249.65233333333336 L 68.2635 249.65233333333336 C 68.2635 249.65233333333336 68.2635 249.65233333333336 68.2635 249.65233333333336 L 68.2635 263.26973333333336 C 68.2635 263.26973333333336 68.2635 263.26973333333336 68.2635 263.26973333333336 L 0.101 263.26973333333336 C 0.101 263.26973333333336 0.101 263.26973333333336 0.101 263.26973333333336 L 0.101 249.65233333333336 C 0.101 249.65233333333336 0.101 249.65233333333336 0.101 249.65233333333336 Z "
                                                    fill="rgba(14,147,132,0.85)" fill-opacity="1" stroke="#0e9384"
                                                    stroke-opacity="1" stroke-linecap="square" stroke-width="0"
                                                    stroke-dasharray="0" class="apexcharts-bar-area undefined"
                                                    index="1" clip-path="url(#gridRectBarMaski520a3f2)"
                                                    pathTo="M 0.101 249.65233333333336 L 68.2635 249.65233333333336 C 68.2635 249.65233333333336 68.2635 249.65233333333336 68.2635 249.65233333333336 L 68.2635 263.26973333333336 C 68.2635 263.26973333333336 68.2635 263.26973333333336 68.2635 263.26973333333336 L 0.101 263.26973333333336 C 0.101 263.26973333333336 0.101 263.26973333333336 0.101 263.26973333333336 L 0.101 249.65233333333336 C 0.101 249.65233333333336 0.101 249.65233333333336 0.101 249.65233333333336 Z "
                                                    pathFrom="M 0.101 249.65233333333336 L 0.101 249.65233333333336 L 0.101 263.26973333333336 L 0.101 263.26973333333336 L 0.101 263.26973333333336 L 0.101 263.26973333333336 L 0.101 263.26973333333336 L 0.101 249.65233333333336 Z"
                                                    cy="295.0436666666667" cx="68.26249999999999" j="5"
                                                    val="20" barHeight="13.6174" barWidth="68.1625"></path>
                                                <g class="apexcharts-bar-goals-markers">
                                                    <g className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMaski520a3f2)"></g>
                                                    <g className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMaski520a3f2)"></g>
                                                    <g className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMaski520a3f2)"></g>
                                                    <g className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMaski520a3f2)"></g>
                                                    <g className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMaski520a3f2)"></g>
                                                    <g className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMaski520a3f2)"></g>
                                                </g>
                                                <g class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g>
                                            </g>
                                            <g class="apexcharts-datalabels apexcharts-hidden-element-shown"
                                                data:realIndex="0"></g>
                                            <g class="apexcharts-datalabels apexcharts-hidden-element-shown"
                                                data:realIndex="1"></g>
                                        </g>
                                        <line x1="0" y1="0" x2="340.8125" y2="0"
                                            stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line x1="0" y1="0" x2="340.8125" y2="0"
                                            stroke="#b6b6b6" stroke-dasharray="0" stroke-width="0"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                        <g class="apexcharts-yaxis apexcharts-xaxis-inversed" rel="0">
                                            <g class="apexcharts-yaxis-texts-g apexcharts-xaxis-inversed-texts-g"
                                                transform="translate(0, 0)"><text x="-15" y="24.758909090909093"
                                                    text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                    font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                    fill="#0a1b39" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan>Cardiology</tspan>
                                                    <title>Cardiology</title>
                                                </text><text x="-15" y="70.15024242424244" text-anchor="end"
                                                    dominant-baseline="auto" font-size="12px"
                                                    font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                    fill="#0a1b39" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan>Urology</tspan>
                                                    <title>Urology</title>
                                                </text><text x="-15" y="115.54157575757577" text-anchor="end"
                                                    dominant-baseline="auto" font-size="12px"
                                                    font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                    fill="#0a1b39" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan>Pediatrics</tspan>
                                                    <title>Pediatrics</title>
                                                </text><text x="-15" y="160.9329090909091" text-anchor="end"
                                                    dominant-baseline="auto" font-size="12px"
                                                    font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                    fill="#0a1b39" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan>Gynecology</tspan>
                                                    <title>Gynecology</title>
                                                </text><text x="-15" y="206.32424242424244" text-anchor="end"
                                                    dominant-baseline="auto" font-size="12px"
                                                    font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                    fill="#0a1b39" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan>Psychiatrist</tspan>
                                                    <title>Psychiatrist</title>
                                                </text><text x="-15" y="251.71557575757578" text-anchor="end"
                                                    dominant-baseline="auto" font-size="12px"
                                                    font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                    fill="#0a1b39" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan>General</tspan>
                                                    <title>General</title>
                                                </text></g>
                                        </g>
                                        <g class="apexcharts-xaxis apexcharts-yaxis-inversed">
                                            <g class="apexcharts-xaxis-texts-g" transform="translate(0, -8)"><text
                                                    x="340.8125" y="-6.652000000000001" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px"
                                                    font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                    fill="#6c7688" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan>100</tspan>
                                                    <title>100</title>
                                                </text><text x="272.55" y="-6.652000000000001" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px"
                                                    font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                    fill="#6c7688" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan>80</tspan>
                                                    <title>80</title>
                                                </text><text x="204.28750000000002" y="-6.652000000000001"
                                                    text-anchor="middle" dominant-baseline="auto" font-size="12px"
                                                    font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                    fill="#6c7688" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan>60</tspan>
                                                    <title>60</title>
                                                </text><text x="136.02500000000003" y="-6.652000000000001"
                                                    text-anchor="middle" dominant-baseline="auto" font-size="12px"
                                                    font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                    fill="#6c7688" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan>40</tspan>
                                                    <title>40</title>
                                                </text><text x="67.76250000000005" y="-6.652000000000001"
                                                    text-anchor="middle" dominant-baseline="auto" font-size="12px"
                                                    font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                    fill="#6c7688" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan>20</tspan>
                                                    <title>20</title>
                                                </text><text x="-0.49999999999994316" y="-6.652000000000001"
                                                    text-anchor="middle" dominant-baseline="auto" font-size="12px"
                                                    font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                    fill="#6c7688" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan>0</tspan>
                                                    <title>0</title>
                                                </text></g>
                                        </g>
                                        <g class="apexcharts-yaxis-annotations"></g>
                                        <g class="apexcharts-xaxis-annotations"></g>
                                        <g class="apexcharts-point-annotations"></g>
                                    </g>
                                    <g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g>
                                    <g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g>
                                </svg>
                                <div class="apexcharts-legend" style="max-height: 170px;"></div>
                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                    <div class="apexcharts-tooltip-title"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                    <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-0"
                                        style="order: 1;"><span class="apexcharts-tooltip-marker" shape="circle"
                                            style="color: rgb(53, 56, 205);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-1"
                                        style="order: 2;"><span class="apexcharts-tooltip-marker" shape="circle"
                                            style="color: rgb(14, 147, 132);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- col end -->

            <!-- col start -->
            <div class="col-lg-6 d-flex">
                <div class="card shadow-sm flex-fill w-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="fw-bold mb-0">Recent Transactions</h5>
                        <div class="dropdown">
                            <a href="javascript:void(0);"
                                class="btn btn-sm px-2 border shadow-sm btn-outline-white d-inline-flex align-items-center"
                                data-bs-toggle="dropdown">
                                Weekly <i class="ti ti-chevron-down ms-1"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#">Monthly</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Weekly</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Yearly</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">

                        <!-- Table start -->
                        <div class="table-responsive table-nowrap">
                            <table class="table">
                                <tbody>
                                    <tr class="border">
                                        <td class="ps-0">
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);" class="avatar me-2">
                                                    <img src="{{ asset('assets') }}/img/doctors/doctor-06.jpg"
                                                        alt="img" class="rounded-circle">
                                                </a>
                                                <div>
                                                    <h6 class="fs-14 mb-1"><a href="javascript:void(0);"
                                                            class="fw-semibold">Dr. John Smith</a></h6>
                                                    <p class="mb-0 fs-13">Neurosurgeon</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="fs-14 fw-semibold">Consultation Fees</h6>
                                            <p class="fs-13">$450</p>
                                        </td>
                                        <td class="pe-0 text-end"><span
                                                class="badge fs-13 py-1 badge-soft-success border border-success rounded text-success fw-medium">Success</span>
                                        </td>
                                    </tr>
                                    <tr class="border">
                                        <td class="ps-0">
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);" class="avatar me-2">
                                                    <img src="{{ asset('assets') }}/img/doctors/doctor-07.jpg"
                                                        alt="img" class="rounded-circle">
                                                </a>
                                                <div>
                                                    <h6 class="fs-14 mb-1"><a href="javascript:void(0);"
                                                            class="fw-semibold">Dr. Lisa White</a></h6>
                                                    <p class="mb-0 fs-13">Oncologist</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="fs-14 fw-semibold">Consultation Fees</h6>
                                            <p class="fs-13">$350</p>
                                        </td>
                                        <td class="pe-0 text-end"><span
                                                class="badge fs-13 py-1 badge-soft-success border border-success rounded text-success fw-medium">Success</span>
                                        </td>
                                    </tr>
                                    <tr class="border">
                                        <td class="ps-0">
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);" class="avatar me-2">
                                                    <img src="{{ asset('assets') }}/img/doctors/doctor-08.jpg"
                                                        alt="img" class="rounded-circle">
                                                </a>
                                                <div>
                                                    <h6 class="fs-14 mb-1"><a href="javascript:void(0);"
                                                            class="fw-semibold">Dr. Patricia Brown</a></h6>
                                                    <p class="mb-0 fs-13">Pulmonologist</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="fs-14 fw-semibold">Consultation Fees</h6>
                                            <p class="fs-13">$400</p>
                                        </td>
                                        <td class="pe-0 text-end"><span
                                                class="badge fs-13 py-1 badge-soft-danger border border-danger rounded text-danger fw-medium">Failed</span>
                                        </td>
                                    </tr>
                                    <tr class="border">
                                        <td class="ps-0">
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);" class="avatar me-2">
                                                    <img src="{{ asset('assets') }}/img/doctors/doctor-09.jpg"
                                                        alt="img" class="rounded-circle">
                                                </a>
                                                <div>
                                                    <h6 class="fs-14 mb-1"><a href="javascript:void(0);"
                                                            class="fw-semibold">Dr. Rachel Green</a></h6>
                                                    <p class="mb-0 fs-13">Urologist</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="fs-14 fw-semibold">Consultation Fees</h6>
                                            <p class="fs-13">$550</p>
                                        </td>
                                        <td class="pe-0 text-end"><span
                                                class="badge fs-13 py-1 badge-soft-success border border-success rounded text-success fw-medium">Success</span>
                                        </td>
                                    </tr>
                                    <tr class="border">
                                        <td class="ps-0">
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);" class="avatar me-2">
                                                    <img src="{{ asset('assets') }}/img/doctors/doctor-10.jpg"
                                                        alt="img" class="rounded-circle">
                                                </a>
                                                <div>
                                                    <h6 class="fs-14 mb-1"><a href="javascript:void(0);"
                                                            class="fw-semibold">Dr. Michael Smith</a></h6>
                                                    <p class="mb-0 fs-13">Cardiologist</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="fs-14 fw-semibold">Consultation Fees</h6>
                                            <p class="fs-13">$600</p>
                                        </td>
                                        <td class="pe-0 text-end"><span
                                                class="badge fs-13 py-1 badge-soft-success border border-success rounded text-success fw-medium">Success</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- Table end -->

                    </div>
                </div>
            </div>
            <!-- col end -->

        </div>
        <!-- row end -->

        <!-- card start -->
        <div class="card shadow-sm flex-fill w-100">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="fw-bold mb-0">Recent Appointments</h5>
                <div class="dropdown">
                    <a href="javascript:void(0);"
                        class="btn btn-sm px-2 border shadow-sm btn-outline-white d-inline-flex align-items-center"
                        data-bs-toggle="dropdown">
                        Weekly <i class="ti ti-chevron-down ms-1"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#">Monthly</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Weekly</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Yearly</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <!-- Table start -->
                <div class="table-responsive table-nowrap">
                    <table class="table border">
                        <thead class="thead-light">
                            <tr>
                                <th>Name &amp; Designation</th>
                                <th>Date &amp; Time</th>
                                <th>Consultation Fees</th>
                                <th>Mode</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar me-2">
                                            <img src="{{ asset('assets') }}/img/doctors/doctor-01.jpg"
                                                alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                            <h6 class="fs-14 mb-1"><a href="javascript:void(0);"
                                                    class="fw-semibold">Dr. Mick Thompson</a></h6>
                                            <p class="mb-0 fs-13">Cardiologist</p>
                                        </div>
                                    </div>
                                </td>
                                <td>27 May 2025 - 09:30 AM</td>
                                <td class="fw-semibold text-dark">$400</td>
                                <td>Online</td>
                                <td><span class="badge bg-success fw-medium">Checked Out</span></td>
                                <td>
                                    <a href="javascript:void(0);"
                                        class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1">
                                        <i class="ti ti-calendar-plus"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                        class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center"
                                                data-bs-toggle="offcanvas" data-bs-target="#edit_appointment"><i
                                                    class="ti ti-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                    class="ti ti-trash me-2"></i>Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar me-2">
                                            <img src="{{ asset('assets') }}/img/doctors/doctor-09.jpg"
                                                alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                            <h6 class="fs-14 mb-1"><a href="javascript:void(0);"
                                                    class="fw-semibold">Dr. Sarah Johnson</a></h6>
                                            <p class="mb-0 fs-13">Orthopedic Surgeon</p>
                                        </div>
                                    </div>
                                </td>
                                <td>26 May 2025 - 10:15 AM</td>
                                <td class="fw-semibold text-dark">$370</td>
                                <td>Online</td>
                                <td><span class="badge bg-warning fw-medium">Checked in</span></td>
                                <td>
                                    <a href="javascript:void(0);"
                                        class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1">
                                        <i class="ti ti-calendar-plus"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                        class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center"
                                                data-bs-toggle="offcanvas" data-bs-target="#edit_appointment"><i
                                                    class="ti ti-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                    class="ti ti-trash me-2"></i>Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar me-2">
                                            <img src="{{ asset('assets') }}/img/doctors/doctor-03.jpg"
                                                alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                            <h6 class="fs-14 mb-1"><a href="javascript:void(0);"
                                                    class="fw-semibold">Dr. Emily Carter</a></h6>
                                            <p class="mb-0 fs-13">Pediatrician</p>
                                        </div>
                                    </div>
                                </td>
                                <td>25 May 2025 - 02:40 PM</td>
                                <td class="fw-semibold text-dark">$450</td>
                                <td>In-Person</td>
                                <td><span class="badge bg-danger fw-medium">Cancelled</span></td>
                                <td>
                                    <a href="javascript:void(0);"
                                        class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1">
                                        <i class="ti ti-calendar-plus"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                        class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center"
                                                data-bs-toggle="offcanvas" data-bs-target="#edit_appointment"><i
                                                    class="ti ti-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                    class="ti ti-trash me-2"></i>Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar me-2">
                                            <img src="{{ asset('assets') }}/img/doctors/doctor-04.jpg"
                                                alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                            <h6 class="fs-14 mb-1"><a href="javascript:void(0);"
                                                    class="fw-semibold">Dr. David Lee</a></h6>
                                            <p class="mb-0 fs-13">Gynecologist</p>
                                        </div>
                                    </div>
                                </td>
                                <td>24 May 2025 - 11:30 AM</td>
                                <td class="fw-semibold text-dark">$310</td>
                                <td>In-Person</td>
                                <td><span class="badge bg-info fw-medium">Schedule</span></td>
                                <td>
                                    <a href="javascript:void(0);"
                                        class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1">
                                        <i class="ti ti-calendar-plus"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                        class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center"
                                                data-bs-toggle="offcanvas" data-bs-target="#edit_appointment"><i
                                                    class="ti ti-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                    class="ti ti-trash me-2"></i>Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar me-2">
                                            <img src="{{ asset('assets') }}/img/doctors/doctor-05.jpg"
                                                alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                            <h6 class="fs-14 mb-1"><a href="javascript:void(0);"
                                                    class="fw-semibold">Dr. Anna Kim</a></h6>
                                            <p class="mb-0 fs-13">Psychiatrist</p>
                                        </div>
                                    </div>
                                </td>
                                <td>23 May 2025 - 04:10 PM</td>
                                <td class="fw-semibold text-dark">$400</td>
                                <td>Online</td>
                                <td><span class="badge bg-info fw-medium">Schedule</span></td>
                                <td>
                                    <a href="javascript:void(0);"
                                        class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1">
                                        <i class="ti ti-calendar-plus"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                        class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center"
                                                data-bs-toggle="offcanvas" data-bs-target="#edit_appointment"><i
                                                    class="ti ti-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                    class="ti ti-trash me-2"></i>Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Table end -->
            </div>
        </div>
        <!-- card end -->

    </div>
    <!-- Start Add New Appointment -->
    <div class="offcanvas offcanvas-offset offcanvas-end" tabindex="-1" id="new_appointment">
        <div class="offcanvas-header d-block pb-0 px-0">
            <div class="border-bottom d-flex align-items-center justify-content-between pb-3 px-3">
                <h5 class="offcanvas-title fs-18 fw-bold">New Appointment</h5>
                <button type="button" class="btn-close custom-btn-close opacity-100" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
        </div>
        <div class="offcanvas-body pt-3">
            <form action="#">

                <!-- start row-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Appointment ID <span
                                    class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control rounded bg-light" value="AP234354">
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Patient<span
                                    class="text-danger">*</span></label>
                            <div class="dropdown">
                                <a href="javascript:void(0);"
                                    class="dropdown-toggle form-control rounded d-flex align-items-center justify-content-between border"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                    Select
                                </a>
                                <div class="dropdown-menu shadow-lg w-100 dropdown-info">
                                    <div class="mb-3">
                                        <div class="input-icon-start position-relative">
                                            <span class="input-icon-addon fs-12">
                                                <i class="ti ti-search"></i>
                                            </span>
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Search">
                                        </div>
                                    </div>
                                    <ul class="mb-3 list-style-none">
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img
                                                        src="assets/img/users/user-02.jpg"
                                                        class="flex-shrink-0 rounded-circle"
                                                        alt="img"></span>Emily Clark
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img
                                                        src="assets/img/profiles/avatar-01.jpg"
                                                        class="flex-shrink-0 rounded-circle"
                                                        alt="img"></span>John Carter
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img
                                                        src="assets/img/profiles/avatar-16.jpg"
                                                        class="flex-shrink-0 rounded-circle"
                                                        alt="img"></span>Sophia White
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img
                                                        src="assets/img/profiles/avatar-15.jpg"
                                                        class="flex-shrink-0 rounded-circle"
                                                        alt="img"></span>Michael Johnson
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img
                                                        src="assets/img/profiles/avatar-14.jpg"
                                                        class="flex-shrink-0 rounded-circle"
                                                        alt="img"></span>Olivia Harris
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img
                                                        src="assets/img/profiles/avatar-01.jpg"
                                                        class="flex-shrink-0 rounded-circle"
                                                        alt="img"></span>David Anderson
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Appointment Type <span
                                    class="text-danger">*</span></label>
                            <div class="dropdown">
                                <a href="javascript:void(0);"
                                    class="dropdown-toggle form-control rounded d-flex align-items-center justify-content-between border"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                    Select
                                </a>
                                <div class="dropdown-menu shadow-lg w-100 dropdown-info">
                                    <div class="mb-3">
                                        <div class="input-icon-start position-relative">
                                            <span class="input-icon-addon fs-12">
                                                <i class="ti ti-search"></i>
                                            </span>
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Select">
                                        </div>
                                    </div>
                                    <ul class="mb-3 list-style-none">
                                        <li class="list-none">
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Online
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Member
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium"> Date of Appointment <span
                                    class="text-danger">*</span></label>
                            <div class="input-icon-end position-relative">
                                <input type="text" class="form-control datetimepicker"
                                    placeholder="dd/mm/yyyy">
                                <span class="input-icon-addon">
                                    <i class="ti ti-calendar"></i>
                                </span>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium"> Time <span
                                    class="text-danger">*</span></label>
                            <div class="input-icon-end position-relative">
                                <input type="text" class="form-control timepicker" placeholder="-- : --">
                                <span class="input-icon-addon">
                                    <i class="ti ti-clock"></i>
                                </span>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-12">
                        <div class="mb-3">
                            <div>
                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Appointment Reason</label>
                                <textarea rows="4" class="form-control rounded"> </textarea>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Status<span
                                    class="text-danger">*</span></label>
                            <div class="dropdown">
                                <a href="javascript:void(0);"
                                    class="dropdown-toggle form-control rounded d-flex align-items-center justify-content-between border"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                    Select
                                </a>
                                <div class="dropdown-menu shadow-lg w-100 dropdown-info">
                                    <div class="mb-3">
                                        <div class="input-icon-start position-relative">
                                            <span class="input-icon-addon fs-12">
                                                <i class="ti ti-search"></i>
                                            </span>
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Select">
                                        </div>
                                    </div>
                                    <ul class="mb-3 list-style-none">
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Checked Out
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                                Checked In
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Cancelled
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Scheduled
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col-->
                </div>
                <!-- end row-->


            </form>
        </div>
        <div class="offcanvas-footer mb-1 mt-3 p-3 border-1 border-top">
            <div class=" d-flex justify-content-end gap-2">
                <a href="javascript:void(0);" class="btn btn-light btm-md">Cancel</a>
                <button data-bs-dismiss="offcanvas" class="btn btn-primary btm-md">Create Create
                    Appointment</button>
            </div>
        </div>
    </div>
    <!-- End Add New Appointment-->

    <!-- Start View Details -->
    <div class="offcanvas offcanvas-offset offcanvas-end" tabindex="-1" id="view_details">
        <div class="offcanvas-header d-block pb-0 px-0">
            <div class="border-bottom d-flex align-items-center justify-content-between pb-3 px-3">
                <h5 class="offcanvas-title fs-18 fw-bold">Appointment Details <span
                        class="badge badge-soft-primary border pt-1 px-2 border-primary fw-medium ms-2">#AP544658</span>
                </h5>
                <button type="button" class="btn-close custom-btn-close opacity-100" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
        </div>
        <div class="offcanvas-body pt-0 px-0">
            <h6 class="bg-light py-2 px-3 text-dark fw-bold"> When & Where </h6>

            <div
                class="d-flex align-items-center justify-content-between flex-wrap gap-2 bg-light mx-3 p-3 rounded my-3">
                <div class="d-flex align-items-center gap-2">
                    <div class="avatar avatar-lg">
                        <img src="assets/img/doctors/doctor-01.jpg" alt="doctor-01"
                            class="img-fluid img1 rounded-circle">
                    </div>
                    <h6 class="fs-14 fw-semibold m-0"> Dr. Emily Carter <span
                            class="d-block fs-13 fw-normal text-body pt-1"> Pediatrician </span></h6>
                </div>
                <div class="gap-1 d-flex">
                    <a href="#"
                        class="bg-white d-flex align-items-center justify-content-center p-1 border rounded"> <i
                            class="ti ti-brand-hipchat fs-13"></i></a>
                    <a href="#"
                        class="bg-white d-flex align-items-center justify-content-center p-1 border rounded"> <i
                            class="ti ti-video fs-13"></i></a>
                </div>
            </div>

            <div class="px-3 my-4">
                <p class="text-dark mb-3 fw-semibold d-flex align-items-center justify-content-between"> Appointment
                    On <span class="text-body fw-normal"> Saturday, 25 Apr 2025 </span> </p>
                <p class="text-dark mb-3 fw-semibold d-flex align-items-center justify-content-between"> Time <span
                        class="text-body fw-normal"> 09:00 AM - 11:00 AM </span> </p>
                <p class="text-dark mb-3 fw-semibold d-flex align-items-center justify-content-between"> Location
                    <span class="text-body fw-normal">Newyork , USA </span> </p>
                <p class="text-dark mb-3 fw-semibold d-flex align-items-center justify-content-between"> Appointment
                    Type <span class="text-body fw-normal"> Online Consultation </span> </p>
            </div>
            <h6 class="bg-light py-2 px-3 text-dark fw-bold"> Appointment Details </h6>
            <div class="px-3 my-3">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div class="d-flex align-items-center">
                        Telehealth
                        <label class="d-flex align-items-center form-switch ps-1">
                            <input class="form-check-input m-0 me-2" type="checkbox" checked>
                        </label>
                    </div>
                    <div> <a href="online-consulation.html"
                            class="btn-primary btn btn-sm rounded d-flex align-items-center"> <i
                                class="ti ti-video me-1 fs-13"></i> Start </a></div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <p class="text-dark"> Status </p>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="mb-0">
                            <div class="dropdown">
                                <a href="javascript:void(0);"
                                    class="dropdown-toggle form-control rounded d-flex align-items-center justify-content-between border"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                    Pending
                                </a>
                                <div class="dropdown-menu shadow-lg w-100 dropdown-info">
                                    <div class="mb-3">
                                        <div class="input-icon-start position-relative">
                                            <span class="input-icon-addon fs-12">
                                                <i class="ti ti-search"></i>
                                            </span>
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Select">
                                        </div>
                                    </div>
                                    <ul class="mb-0 list-style-none">
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Checked Out
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                                Checked In
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Cancelled
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Scheduled
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Add New Appointment-->

    <!-- Start Edit New Appointment -->
    <div class="offcanvas offcanvas-offset offcanvas-end" tabindex="-1" id="edit_appointment">
        <div class="offcanvas-header d-block pb-0 px-0">
            <div class="border-bottom d-flex align-items-center justify-content-between pb-3 px-3">
                <h5 class="offcanvas-title fs-18 fw-bold"> Edit Appointment</h5>
                <button type="button" class="btn-close custom-btn-close opacity-100" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
        </div>
        <div class="offcanvas-body pt-3">
            <form action="#">
                <!-- start row-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Appointment ID <span
                                    class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control rounded bg-light" value="AP234354">
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Patient<span
                                    class="text-danger">*</span></label>
                            <div class="dropdown">
                                <a href="javascript:void(0);"
                                    class="dropdown-toggle form-control rounded d-flex align-items-center justify-content-between border"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                    Emily Clark
                                </a>
                                <div class="dropdown-menu shadow-lg w-100 dropdown-info">
                                    <div class="mb-3">
                                        <div class="input-icon-start position-relative">
                                            <span class="input-icon-addon fs-12">
                                                <i class="ti ti-search"></i>
                                            </span>
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Search">
                                        </div>
                                    </div>
                                    <ul class="mb-3 list-style-none">
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img
                                                        src="assets/img/users/user-02.jpg"
                                                        class="flex-shrink-0 rounded-circle"
                                                        alt="img"></span>Emily Clark
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img
                                                        src="assets/img/profiles/avatar-01.jpg"
                                                        class="flex-shrink-0 rounded-circle"
                                                        alt="img"></span>John Carter
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img
                                                        src="assets/img/profiles/avatar-16.jpg"
                                                        class="flex-shrink-0 rounded-circle"
                                                        alt="img"></span>Sophia White
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img
                                                        src="assets/img/profiles/avatar-15.jpg"
                                                        class="flex-shrink-0 rounded-circle"
                                                        alt="img"></span>Michael Johnson
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img
                                                        src="assets/img/profiles/avatar-14.jpg"
                                                        class="flex-shrink-0 rounded-circle"
                                                        alt="img"></span>Olivia Harris
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img
                                                        src="assets/img/profiles/avatar-01.jpg"
                                                        class="flex-shrink-0 rounded-circle"
                                                        alt="img"></span>David Anderson
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Appointment Type <span
                                    class="text-danger">*</span></label>
                            <div class="dropdown">
                                <a href="javascript:void(0);"
                                    class="dropdown-toggle form-control rounded d-flex align-items-center justify-content-between border"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                    In Person
                                </a>
                                <div class="dropdown-menu shadow-lg w-100 dropdown-info">
                                    <div class="mb-3">
                                        <div class="input-icon-start position-relative">
                                            <span class="input-icon-addon fs-12">
                                                <i class="ti ti-search"></i>
                                            </span>
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Select">
                                        </div>
                                    </div>
                                    <ul class="mb-0 list-style-none">
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                In Person
                                            </label>
                                        </li>
                                        <li class="list-none">
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Online
                                            </label>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium"> Date of Appointment <span
                                    class="text-danger">*</span></label>
                            <div class="input-icon-end position-relative">
                                <input type="text" class="form-control datetimepicker"
                                    placeholder="20/08/2025">
                                <span class="input-icon-addon">
                                    <i class="ti ti-calendar"></i>
                                </span>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium"> Time <span
                                    class="text-danger">*</span></label>
                            <div class="input-icon-end position-relative">
                                <input type="text" class="form-control timepicker" placeholder="01 : 20 : PM">
                                <span class="input-icon-addon">
                                    <i class="ti ti-clock"></i>
                                </span>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-12">
                        <div class="mb-3">
                            <div>
                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Appointment Reason</label>
                                <textarea rows="4" class="form-control rounded"> An account of the present illness, which includes the circumstances surrounding the onset of recent health changes and the Purpose. </textarea>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Status<span
                                    class="text-danger">*</span></label>
                            <div class="dropdown">
                                <a href="javascript:void(0);"
                                    class="dropdown-toggle form-control rounded d-flex align-items-center justify-content-between border"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                    Checked Out
                                </a>
                                <div class="dropdown-menu shadow-lg w-100 dropdown-info">
                                    <div class="mb-3">
                                        <div class="input-icon-start position-relative">
                                            <span class="input-icon-addon fs-12">
                                                <i class="ti ti-search"></i>
                                            </span>
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Select">
                                        </div>
                                    </div>
                                    <ul class="mb-3 list-style-none">
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Checked Out
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                                Checked In
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Cancelled
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Scheduled
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col-->
                </div>
                <!-- end row-->
            </form>
        </div>
        <div class="offcanvas-footer mb-1 mt-3 p-3 border-1 border-top">
            <div class=" d-flex justify-content-end gap-2">
                <a href="javascript:void(0);" class="btn btn-light btm-md">Cancel</a>
                <button data-bs-dismiss="offcanvas" class="btn btn-primary btm-md">Create Create
                    Appointment</button>
            </div>
        </div>
    </div>
    <!-- End Edit New Appointment-->

    <!-- Start Delete Modal  -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center position-relative">
                    <img src="assets/img/bg/delete-modal-bg-01.png" alt=""
                        class="img-fluid position-absolute top-0 start-0 z-0">
                    <img src="assets/img/bg/delete-modal-bg-02.png" alt=""
                        class="img-fluid position-absolute bottom-0 end-0 z-0">
                    <div class="mb-3 position-relative z-1">
                        <span class="avatar avatar-lg bg-danger text-white"><i class="ti ti-trash fs-24"></i></span>
                    </div>
                    <h5 class="fw-bold mb-1 position-relative z-1">Delete Confirmation</h5>
                    <p class="mb-3 position-relative z-1">Are you sure want to delete?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light position-relative z-1 me-3"
                            data-bs-dismiss="modal">Cancel</a>
                        <a href="#" class="btn btn-danger position-relative z-1"
                            data-bs-dismiss="modal">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Delete Modal  -->

</x-app-layout>
