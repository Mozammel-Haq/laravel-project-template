<x-app-layout>
    <div class="content pb-0">

                <!-- Page Header -->
                <div class="d-flex align-items-sm-center justify-content-between flex-wrap gap-2 mb-4">
                    <div>
                        <h4 class="fw-bold mb-0">Doctor Dashboard</h4>
                    </div>
                    <div class="d-flex align-items-center flex-wrap gap-2">
                       <a href="javascript:void(0);" class="btn btn-primary d-inline-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#new_appointment"><i class="ti ti-plus me-1"></i>New Appointment</a>
                       <a href="javascript:void(0);" class="btn btn-outline-white bg-white d-inline-flex align-items-center"><i class="ti ti-calendar-time me-1"></i>Schedule Availability</a>
                    </div>
				</div>
				<!-- End Page Header -->

                <!-- row start -->
                <div class="row">

                    <!-- col start -->
                    <div class="col-xl-4 d-flex">
                        <div class="card shadow-sm flex-fill w-100">
                           <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div>
                                        <p class="mb-1">Total Appointments</p>
                                        <div class="d-flex align-items-center gap-1">
                                            <h3 class="fw-bold mb-0">658</h3>
                                            <span class="badge fw-medium bg-success flex-shrink-0">+95%</span>
                                        </div>
                                    </div>
                                    <span class="avatar border border-primary text-primary rounded-2 flex-shrink-0"><i class="ti ti-calendar-heart fs-20"></i></span>
                                </div>
                                <div class="d-flex align-items-end">
                                    <div id="s-col-5" class="chart-set" style="min-height: 60px;"><div id="apexcharts6r8r26aq" class="apexcharts-canvas apexcharts6r8r26aq apexcharts-theme-light" style="width: 100px; height: 60px;"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" width="100" height="60"><foreignObject x="0" y="0" width="100" height="60"><style type="text/css">.apexcharts-flip-y {
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
.apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {
  flex-wrap: wrap
}
.apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
  flex-direction: column;
  bottom: 0;
}
.apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
  justify-content: flex-start;
  align-items: flex-start;
}
.apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
  justify-content: center;
  align-items: center;
}
.apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
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
.apexcharts-legend-text *, .apexcharts-legend-marker * {
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
.apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
  display: none !important;
}
.apexcharts-inactive-legend {
  opacity: 0.45;
} </style></foreignObject><g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g><g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g><g class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g class="apexcharts-inner apexcharts-graphical" transform="translate(6.666666666666668, 0)"><defs><linearGradient x1="0" y1="0" x2="0" y2="1" id="SvgjsLinearGradient1026"><stop stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMask6r8r26aq"><rect width="90.66666666666666" height="64" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectBarMask6r8r26aq"><rect width="104" height="64" x="-8.666666666666668" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask6r8r26aq"><rect width="104" height="60" x="-8.666666666666668" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask6r8r26aq"></clipPath><clipPath id="nonForecastMask6r8r26aq"></clipPath></defs><rect width="0" height="60" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="#b6b6b6" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1026)" class="apexcharts-xcrosshairs" y2="60" filter="none" fill-opacity="0.9"></rect><g class="apexcharts-grid"><g class="apexcharts-gridlines-horizontal" style="display: none;"><line x1="-6.666666666666668" y1="0" x2="93.33333333333333" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line x1="-6.666666666666668" y1="30" x2="93.33333333333333" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line x1="-6.666666666666668" y1="60" x2="93.33333333333333" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g class="apexcharts-gridlines-vertical" style="display: none;"></g><line x1="0" y1="60" x2="86.66666666666666" y2="60" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line x1="0" y1="1" x2="0" y2="60" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g class="apexcharts-grid-borders" style="display: none;"></g><g class="apexcharts-bar-series apexcharts-plot-series"><g class="apexcharts-series" rel="1" seriesName="Data" data:realIndex="0"><path d="M -2.8888888888888884 58.001 L -2.8888888888888884 38.001 C -2.8888888888888884 37.001 -1.8888888888888884 36.001 -0.8888888888888884 36.001 L 0.8888888888888884 36.001 C 1.8888888888888884 36.001 2.8888888888888884 37.001 2.8888888888888884 38.001 L 2.8888888888888884 58.001 C 2.8888888888888884 59.001 1.8888888888888884 60.001 0.8888888888888884 60.001 L -0.8888888888888884 60.001 C -1.8888888888888884 60.001 -2.8888888888888884 59.001 -2.8888888888888884 58.001 Z " fill="rgba(46,49,146,0.85)" fill-opacity="1" stroke="#2e3192" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMask6r8r26aq)" pathTo="M -2.8888888888888884 58.001 L -2.8888888888888884 38.001 C -2.8888888888888884 37.001 -1.8888888888888884 36.001 -0.8888888888888884 36.001 L 0.8888888888888884 36.001 C 1.8888888888888884 36.001 2.8888888888888884 37.001 2.8888888888888884 38.001 L 2.8888888888888884 58.001 C 2.8888888888888884 59.001 1.8888888888888884 60.001 0.8888888888888884 60.001 L -0.8888888888888884 60.001 C -1.8888888888888884 60.001 -2.8888888888888884 59.001 -2.8888888888888884 58.001 Z " pathFrom="M -2.8888888888888884 60.001 L -2.8888888888888884 60.001 L 2.8888888888888884 60.001 L 2.8888888888888884 60.001 L 2.8888888888888884 60.001 L 2.8888888888888884 60.001 L 2.8888888888888884 60.001 L -2.8888888888888884 60.001 Z" cy="36" cx="2.8888888888888884" j="0" val="40" barHeight="24" barWidth="5.777777777777777"></path><path d="M 11.555555555555554 58.001 L 11.555555555555554 26.001 C 11.555555555555554 25.001 12.555555555555554 24.001 13.555555555555554 24.001 L 15.333333333333329 24.001 C 16.33333333333333 24.001 17.33333333333333 25.001 17.33333333333333 26.001 L 17.33333333333333 58.001 C 17.33333333333333 59.001 16.33333333333333 60.001 15.333333333333329 60.001 L 13.555555555555554 60.001 C 12.555555555555554 60.001 11.555555555555554 59.001 11.555555555555554 58.001 Z " fill="rgba(46,49,146,0.85)" fill-opacity="1" stroke="#2e3192" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMask6r8r26aq)" pathTo="M 11.555555555555554 58.001 L 11.555555555555554 26.001 C 11.555555555555554 25.001 12.555555555555554 24.001 13.555555555555554 24.001 L 15.333333333333329 24.001 C 16.33333333333333 24.001 17.33333333333333 25.001 17.33333333333333 26.001 L 17.33333333333333 58.001 C 17.33333333333333 59.001 16.33333333333333 60.001 15.333333333333329 60.001 L 13.555555555555554 60.001 C 12.555555555555554 60.001 11.555555555555554 59.001 11.555555555555554 58.001 Z " pathFrom="M 11.555555555555554 60.001 L 11.555555555555554 60.001 L 17.33333333333333 60.001 L 17.33333333333333 60.001 L 17.33333333333333 60.001 L 17.33333333333333 60.001 L 17.33333333333333 60.001 L 11.555555555555554 60.001 Z" cy="24" cx="17.33333333333333" j="1" val="60" barHeight="36" barWidth="5.777777777777777"></path><path d="M 25.999999999999996 58.001 L 25.999999999999996 29.001 C 25.999999999999996 28.001 26.999999999999996 27.001 27.999999999999996 27.001 L 29.77777777777777 27.001 C 30.77777777777777 27.001 31.77777777777777 28.001 31.77777777777777 29.001 L 31.77777777777777 58.001 C 31.77777777777777 59.001 30.77777777777777 60.001 29.77777777777777 60.001 L 27.999999999999996 60.001 C 26.999999999999996 60.001 25.999999999999996 59.001 25.999999999999996 58.001 Z " fill="rgba(46,49,146,0.85)" fill-opacity="1" stroke="#2e3192" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMask6r8r26aq)" pathTo="M 25.999999999999996 58.001 L 25.999999999999996 29.001 C 25.999999999999996 28.001 26.999999999999996 27.001 27.999999999999996 27.001 L 29.77777777777777 27.001 C 30.77777777777777 27.001 31.77777777777777 28.001 31.77777777777777 29.001 L 31.77777777777777 58.001 C 31.77777777777777 59.001 30.77777777777777 60.001 29.77777777777777 60.001 L 27.999999999999996 60.001 C 26.999999999999996 60.001 25.999999999999996 59.001 25.999999999999996 58.001 Z " pathFrom="M 25.999999999999996 60.001 L 25.999999999999996 60.001 L 31.77777777777777 60.001 L 31.77777777777777 60.001 L 31.77777777777777 60.001 L 31.77777777777777 60.001 L 31.77777777777777 60.001 L 25.999999999999996 60.001 Z" cy="27" cx="31.77777777777777" j="2" val="55" barHeight="33" barWidth="5.777777777777777"></path><path d="M 40.44444444444444 58.001 L 40.44444444444444 14.001 C 40.44444444444444 13.001 41.44444444444444 12.001 42.44444444444444 12.001 L 44.22222222222222 12.001 C 45.22222222222222 12.001 46.22222222222222 13.001 46.22222222222222 14.001 L 46.22222222222222 58.001 C 46.22222222222222 59.001 45.22222222222222 60.001 44.22222222222222 60.001 L 42.44444444444444 60.001 C 41.44444444444444 60.001 40.44444444444444 59.001 40.44444444444444 58.001 Z " fill="rgba(46,49,146,0.85)" fill-opacity="1" stroke="#2e3192" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMask6r8r26aq)" pathTo="M 40.44444444444444 58.001 L 40.44444444444444 14.001 C 40.44444444444444 13.001 41.44444444444444 12.001 42.44444444444444 12.001 L 44.22222222222222 12.001 C 45.22222222222222 12.001 46.22222222222222 13.001 46.22222222222222 14.001 L 46.22222222222222 58.001 C 46.22222222222222 59.001 45.22222222222222 60.001 44.22222222222222 60.001 L 42.44444444444444 60.001 C 41.44444444444444 60.001 40.44444444444444 59.001 40.44444444444444 58.001 Z " pathFrom="M 40.44444444444444 60.001 L 40.44444444444444 60.001 L 46.22222222222222 60.001 L 46.22222222222222 60.001 L 46.22222222222222 60.001 L 46.22222222222222 60.001 L 46.22222222222222 60.001 L 40.44444444444444 60.001 Z" cy="12" cx="46.22222222222222" j="3" val="80" barHeight="48" barWidth="5.777777777777777"></path><path d="M 54.888888888888886 58.001 L 54.888888888888886 41.001 C 54.888888888888886 40.001 55.888888888888886 39.001 56.888888888888886 39.001 L 58.666666666666664 39.001 C 59.666666666666664 39.001 60.666666666666664 40.001 60.666666666666664 41.001 L 60.666666666666664 58.001 C 60.666666666666664 59.001 59.666666666666664 60.001 58.666666666666664 60.001 L 56.888888888888886 60.001 C 55.888888888888886 60.001 54.888888888888886 59.001 54.888888888888886 58.001 Z " fill="rgba(46,49,146,0.85)" fill-opacity="1" stroke="#2e3192" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMask6r8r26aq)" pathTo="M 54.888888888888886 58.001 L 54.888888888888886 41.001 C 54.888888888888886 40.001 55.888888888888886 39.001 56.888888888888886 39.001 L 58.666666666666664 39.001 C 59.666666666666664 39.001 60.666666666666664 40.001 60.666666666666664 41.001 L 60.666666666666664 58.001 C 60.666666666666664 59.001 59.666666666666664 60.001 58.666666666666664 60.001 L 56.888888888888886 60.001 C 55.888888888888886 60.001 54.888888888888886 59.001 54.888888888888886 58.001 Z " pathFrom="M 54.888888888888886 60.001 L 54.888888888888886 60.001 L 60.666666666666664 60.001 L 60.666666666666664 60.001 L 60.666666666666664 60.001 L 60.666666666666664 60.001 L 60.666666666666664 60.001 L 54.888888888888886 60.001 Z" cy="39" cx="60.666666666666664" j="4" val="35" barHeight="21" barWidth="5.777777777777777"></path><path d="M 69.33333333333333 58.001 L 69.33333333333333 20.001 C 69.33333333333333 19.001 70.33333333333333 18.001 71.33333333333333 18.001 L 73.1111111111111 18.001 C 74.1111111111111 18.001 75.1111111111111 19.001 75.1111111111111 20.001 L 75.1111111111111 58.001 C 75.1111111111111 59.001 74.1111111111111 60.001 73.1111111111111 60.001 L 71.33333333333333 60.001 C 70.33333333333333 60.001 69.33333333333333 59.001 69.33333333333333 58.001 Z " fill="rgba(46,49,146,0.85)" fill-opacity="1" stroke="#2e3192" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMask6r8r26aq)" pathTo="M 69.33333333333333 58.001 L 69.33333333333333 20.001 C 69.33333333333333 19.001 70.33333333333333 18.001 71.33333333333333 18.001 L 73.1111111111111 18.001 C 74.1111111111111 18.001 75.1111111111111 19.001 75.1111111111111 20.001 L 75.1111111111111 58.001 C 75.1111111111111 59.001 74.1111111111111 60.001 73.1111111111111 60.001 L 71.33333333333333 60.001 C 70.33333333333333 60.001 69.33333333333333 59.001 69.33333333333333 58.001 Z " pathFrom="M 69.33333333333333 60.001 L 69.33333333333333 60.001 L 75.1111111111111 60.001 L 75.1111111111111 60.001 L 75.1111111111111 60.001 L 75.1111111111111 60.001 L 75.1111111111111 60.001 L 69.33333333333333 60.001 Z" cy="18" cx="75.1111111111111" j="5" val="70" barHeight="42" barWidth="5.777777777777777"></path><path d="M 83.77777777777777 58.001 L 83.77777777777777 26.001 C 83.77777777777777 25.001 84.77777777777777 24.001 85.77777777777777 24.001 L 87.55555555555554 24.001 C 88.55555555555554 24.001 89.55555555555554 25.001 89.55555555555554 26.001 L 89.55555555555554 58.001 C 89.55555555555554 59.001 88.55555555555554 60.001 87.55555555555554 60.001 L 85.77777777777777 60.001 C 84.77777777777777 60.001 83.77777777777777 59.001 83.77777777777777 58.001 Z " fill="rgba(46,49,146,0.85)" fill-opacity="1" stroke="#2e3192" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMask6r8r26aq)" pathTo="M 83.77777777777777 58.001 L 83.77777777777777 26.001 C 83.77777777777777 25.001 84.77777777777777 24.001 85.77777777777777 24.001 L 87.55555555555554 24.001 C 88.55555555555554 24.001 89.55555555555554 25.001 89.55555555555554 26.001 L 89.55555555555554 58.001 C 89.55555555555554 59.001 88.55555555555554 60.001 87.55555555555554 60.001 L 85.77777777777777 60.001 C 84.77777777777777 60.001 83.77777777777777 59.001 83.77777777777777 58.001 Z " pathFrom="M 83.77777777777777 60.001 L 83.77777777777777 60.001 L 89.55555555555554 60.001 L 89.55555555555554 60.001 L 89.55555555555554 60.001 L 89.55555555555554 60.001 L 89.55555555555554 60.001 L 83.77777777777777 60.001 Z" cy="24" cx="89.55555555555554" j="6" val="60" barHeight="36" barWidth="5.777777777777777"></path><g class="apexcharts-bar-goals-markers"><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask6r8r26aq)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask6r8r26aq)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask6r8r26aq)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask6r8r26aq)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask6r8r26aq)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask6r8r26aq)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask6r8r26aq)"></g></g><g class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g></g><g class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="0"></g></g><line x1="-6.666666666666668" y1="0" x2="93.33333333333333" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line x1="-6.666666666666668" y1="0" x2="93.33333333333333" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g class="apexcharts-xaxis" transform="translate(0, 0)"><g class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g class="apexcharts-yaxis-annotations"></g><g class="apexcharts-xaxis-annotations"></g><g class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-legend" style="max-height: 30px;"></div></div></div>
                                    <span class="badge fw-medium badge-soft-success flex-shrink-0 ms-2">+21% <i class="ti ti-arrow-up ms-1"></i></span>
                                    <p class="ms-1 fs-13 text-truncate">in last 7 Days </p>
                                </div>
                           </div>
                        </div>
                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col-xl-4 d-flex">
                        <div class="card shadow-sm flex-fill w-100">
                           <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div>
                                        <p class="mb-1">Online Consultations</p>
                                        <div class="d-flex align-items-center gap-1">
                                            <h3 class="fw-bold mb-0">125</h3>
                                            <span class="badge fw-medium bg-danger flex-shrink-0">-15%</span>
                                        </div>
                                    </div>
                                    <span class="avatar border border-danger text-danger rounded-2 flex-shrink-0"><i class="ti ti-users fs-20"></i></span>
                                </div>
                                <div class="d-flex align-items-end">
                                    <div id="s-col-6" class="chart-set" style="min-height: 60px;"><div id="apexchartstlu6xyyk" class="apexcharts-canvas apexchartstlu6xyyk apexcharts-theme-light" style="width: 100px; height: 60px;"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" width="100" height="60"><foreignObject x="0" y="0" width="100" height="60"><style type="text/css">.apexcharts-flip-y {
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
.apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {
  flex-wrap: wrap
}
.apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
  flex-direction: column;
  bottom: 0;
}
.apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
  justify-content: flex-start;
  align-items: flex-start;
}
.apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
  justify-content: center;
  align-items: center;
}
.apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
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
.apexcharts-legend-text *, .apexcharts-legend-marker * {
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
.apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
  display: none !important;
}
.apexcharts-inactive-legend {
  opacity: 0.45;
} </style></foreignObject><g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g><g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g><g class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g class="apexcharts-inner apexcharts-graphical" transform="translate(6.666666666666668, 0)"><defs><linearGradient x1="0" y1="0" x2="0" y2="1" id="SvgjsLinearGradient1027"><stop stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMasktlu6xyyk"><rect width="90.66666666666666" height="64" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectBarMasktlu6xyyk"><rect width="104" height="64" x="-8.666666666666668" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMasktlu6xyyk"><rect width="104" height="60" x="-8.666666666666668" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasktlu6xyyk"></clipPath><clipPath id="nonForecastMasktlu6xyyk"></clipPath></defs><rect width="0" height="60" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="#b6b6b6" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1027)" class="apexcharts-xcrosshairs" y2="60" filter="none" fill-opacity="0.9"></rect><g class="apexcharts-grid"><g class="apexcharts-gridlines-horizontal" style="display: none;"><line x1="-6.666666666666668" y1="0" x2="93.33333333333333" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line x1="-6.666666666666668" y1="30" x2="93.33333333333333" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line x1="-6.666666666666668" y1="60" x2="93.33333333333333" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g class="apexcharts-gridlines-vertical" style="display: none;"></g><line x1="0" y1="60" x2="86.66666666666666" y2="60" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line x1="0" y1="1" x2="0" y2="60" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g class="apexcharts-grid-borders" style="display: none;"></g><g class="apexcharts-bar-series apexcharts-plot-series"><g class="apexcharts-series" rel="1" seriesName="Data" data:realIndex="0"><path d="M -2.8888888888888884 60.001 L -2.8888888888888884 36.001 C -2.8888888888888884 36.001 -2.8888888888888884 36.001 -2.8888888888888884 36.001 L 2.8888888888888884 36.001 C 2.8888888888888884 36.001 2.8888888888888884 36.001 2.8888888888888884 36.001 L 2.8888888888888884 60.001 C 2.8888888888888884 60.001 2.8888888888888884 60.001 2.8888888888888884 60.001 L -2.8888888888888884 60.001 C -2.8888888888888884 60.001 -2.8888888888888884 60.001 -2.8888888888888884 60.001 Z " fill="rgba(224,79,22,0.85)" fill-opacity="1" stroke="#e04f16" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMasktlu6xyyk)" pathTo="M -2.8888888888888884 60.001 L -2.8888888888888884 36.001 C -2.8888888888888884 36.001 -2.8888888888888884 36.001 -2.8888888888888884 36.001 L 2.8888888888888884 36.001 C 2.8888888888888884 36.001 2.8888888888888884 36.001 2.8888888888888884 36.001 L 2.8888888888888884 60.001 C 2.8888888888888884 60.001 2.8888888888888884 60.001 2.8888888888888884 60.001 L -2.8888888888888884 60.001 C -2.8888888888888884 60.001 -2.8888888888888884 60.001 -2.8888888888888884 60.001 Z " pathFrom="M -2.8888888888888884 60.001 L -2.8888888888888884 60.001 L 2.8888888888888884 60.001 L 2.8888888888888884 60.001 L 2.8888888888888884 60.001 L 2.8888888888888884 60.001 L 2.8888888888888884 60.001 L -2.8888888888888884 60.001 Z" cy="36" cx="2.8888888888888884" j="0" val="40" barHeight="24" barWidth="5.777777777777777"></path><path d="M 11.555555555555554 60.001 L 11.555555555555554 24.001 C 11.555555555555554 24.001 11.555555555555554 24.001 11.555555555555554 24.001 L 17.33333333333333 24.001 C 17.33333333333333 24.001 17.33333333333333 24.001 17.33333333333333 24.001 L 17.33333333333333 60.001 C 17.33333333333333 60.001 17.33333333333333 60.001 17.33333333333333 60.001 L 11.555555555555554 60.001 C 11.555555555555554 60.001 11.555555555555554 60.001 11.555555555555554 60.001 Z " fill="rgba(224,79,22,0.85)" fill-opacity="1" stroke="#e04f16" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMasktlu6xyyk)" pathTo="M 11.555555555555554 60.001 L 11.555555555555554 24.001 C 11.555555555555554 24.001 11.555555555555554 24.001 11.555555555555554 24.001 L 17.33333333333333 24.001 C 17.33333333333333 24.001 17.33333333333333 24.001 17.33333333333333 24.001 L 17.33333333333333 60.001 C 17.33333333333333 60.001 17.33333333333333 60.001 17.33333333333333 60.001 L 11.555555555555554 60.001 C 11.555555555555554 60.001 11.555555555555554 60.001 11.555555555555554 60.001 Z " pathFrom="M 11.555555555555554 60.001 L 11.555555555555554 60.001 L 17.33333333333333 60.001 L 17.33333333333333 60.001 L 17.33333333333333 60.001 L 17.33333333333333 60.001 L 17.33333333333333 60.001 L 11.555555555555554 60.001 Z" cy="24" cx="17.33333333333333" j="1" val="60" barHeight="36" barWidth="5.777777777777777"></path><path d="M 25.999999999999996 60.001 L 25.999999999999996 36.001 C 25.999999999999996 36.001 25.999999999999996 36.001 25.999999999999996 36.001 L 31.77777777777777 36.001 C 31.77777777777777 36.001 31.77777777777777 36.001 31.77777777777777 36.001 L 31.77777777777777 60.001 C 31.77777777777777 60.001 31.77777777777777 60.001 31.77777777777777 60.001 L 25.999999999999996 60.001 C 25.999999999999996 60.001 25.999999999999996 60.001 25.999999999999996 60.001 Z " fill="rgba(224,79,22,0.85)" fill-opacity="1" stroke="#e04f16" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMasktlu6xyyk)" pathTo="M 25.999999999999996 60.001 L 25.999999999999996 36.001 C 25.999999999999996 36.001 25.999999999999996 36.001 25.999999999999996 36.001 L 31.77777777777777 36.001 C 31.77777777777777 36.001 31.77777777777777 36.001 31.77777777777777 36.001 L 31.77777777777777 60.001 C 31.77777777777777 60.001 31.77777777777777 60.001 31.77777777777777 60.001 L 25.999999999999996 60.001 C 25.999999999999996 60.001 25.999999999999996 60.001 25.999999999999996 60.001 Z " pathFrom="M 25.999999999999996 60.001 L 25.999999999999996 60.001 L 31.77777777777777 60.001 L 31.77777777777777 60.001 L 31.77777777777777 60.001 L 31.77777777777777 60.001 L 31.77777777777777 60.001 L 25.999999999999996 60.001 Z" cy="36" cx="31.77777777777777" j="2" val="40" barHeight="24" barWidth="5.777777777777777"></path><path d="M 40.44444444444444 60.001 L 40.44444444444444 24.001 C 40.44444444444444 24.001 40.44444444444444 24.001 40.44444444444444 24.001 L 46.22222222222222 24.001 C 46.22222222222222 24.001 46.22222222222222 24.001 46.22222222222222 24.001 L 46.22222222222222 60.001 C 46.22222222222222 60.001 46.22222222222222 60.001 46.22222222222222 60.001 L 40.44444444444444 60.001 C 40.44444444444444 60.001 40.44444444444444 60.001 40.44444444444444 60.001 Z " fill="rgba(224,79,22,0.85)" fill-opacity="1" stroke="#e04f16" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMasktlu6xyyk)" pathTo="M 40.44444444444444 60.001 L 40.44444444444444 24.001 C 40.44444444444444 24.001 40.44444444444444 24.001 40.44444444444444 24.001 L 46.22222222222222 24.001 C 46.22222222222222 24.001 46.22222222222222 24.001 46.22222222222222 24.001 L 46.22222222222222 60.001 C 46.22222222222222 60.001 46.22222222222222 60.001 46.22222222222222 60.001 L 40.44444444444444 60.001 C 40.44444444444444 60.001 40.44444444444444 60.001 40.44444444444444 60.001 Z " pathFrom="M 40.44444444444444 60.001 L 40.44444444444444 60.001 L 46.22222222222222 60.001 L 46.22222222222222 60.001 L 46.22222222222222 60.001 L 46.22222222222222 60.001 L 46.22222222222222 60.001 L 40.44444444444444 60.001 Z" cy="24" cx="46.22222222222222" j="3" val="60" barHeight="36" barWidth="5.777777777777777"></path><path d="M 54.888888888888886 60.001 L 54.888888888888886 15.001 C 54.888888888888886 15.001 54.888888888888886 15.001 54.888888888888886 15.001 L 60.666666666666664 15.001 C 60.666666666666664 15.001 60.666666666666664 15.001 60.666666666666664 15.001 L 60.666666666666664 60.001 C 60.666666666666664 60.001 60.666666666666664 60.001 60.666666666666664 60.001 L 54.888888888888886 60.001 C 54.888888888888886 60.001 54.888888888888886 60.001 54.888888888888886 60.001 Z " fill="rgba(224,79,22,0.85)" fill-opacity="1" stroke="#e04f16" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMasktlu6xyyk)" pathTo="M 54.888888888888886 60.001 L 54.888888888888886 15.001 C 54.888888888888886 15.001 54.888888888888886 15.001 54.888888888888886 15.001 L 60.666666666666664 15.001 C 60.666666666666664 15.001 60.666666666666664 15.001 60.666666666666664 15.001 L 60.666666666666664 60.001 C 60.666666666666664 60.001 60.666666666666664 60.001 60.666666666666664 60.001 L 54.888888888888886 60.001 C 54.888888888888886 60.001 54.888888888888886 60.001 54.888888888888886 60.001 Z " pathFrom="M 54.888888888888886 60.001 L 54.888888888888886 60.001 L 60.666666666666664 60.001 L 60.666666666666664 60.001 L 60.666666666666664 60.001 L 60.666666666666664 60.001 L 60.666666666666664 60.001 L 54.888888888888886 60.001 Z" cy="15" cx="60.666666666666664" j="4" val="75" barHeight="45" barWidth="5.777777777777777"></path><path d="M 69.33333333333333 60.001 L 69.33333333333333 36.001 C 69.33333333333333 36.001 69.33333333333333 36.001 69.33333333333333 36.001 L 75.1111111111111 36.001 C 75.1111111111111 36.001 75.1111111111111 36.001 75.1111111111111 36.001 L 75.1111111111111 60.001 C 75.1111111111111 60.001 75.1111111111111 60.001 75.1111111111111 60.001 L 69.33333333333333 60.001 C 69.33333333333333 60.001 69.33333333333333 60.001 69.33333333333333 60.001 Z " fill="rgba(224,79,22,0.85)" fill-opacity="1" stroke="#e04f16" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMasktlu6xyyk)" pathTo="M 69.33333333333333 60.001 L 69.33333333333333 36.001 C 69.33333333333333 36.001 69.33333333333333 36.001 69.33333333333333 36.001 L 75.1111111111111 36.001 C 75.1111111111111 36.001 75.1111111111111 36.001 75.1111111111111 36.001 L 75.1111111111111 60.001 C 75.1111111111111 60.001 75.1111111111111 60.001 75.1111111111111 60.001 L 69.33333333333333 60.001 C 69.33333333333333 60.001 69.33333333333333 60.001 69.33333333333333 60.001 Z " pathFrom="M 69.33333333333333 60.001 L 69.33333333333333 60.001 L 75.1111111111111 60.001 L 75.1111111111111 60.001 L 75.1111111111111 60.001 L 75.1111111111111 60.001 L 75.1111111111111 60.001 L 69.33333333333333 60.001 Z" cy="36" cx="75.1111111111111" j="5" val="40" barHeight="24" barWidth="5.777777777777777"></path><path d="M 83.77777777777777 60.001 L 83.77777777777777 15.001 C 83.77777777777777 15.001 83.77777777777777 15.001 83.77777777777777 15.001 L 89.55555555555554 15.001 C 89.55555555555554 15.001 89.55555555555554 15.001 89.55555555555554 15.001 L 89.55555555555554 60.001 C 89.55555555555554 60.001 89.55555555555554 60.001 89.55555555555554 60.001 L 83.77777777777777 60.001 C 83.77777777777777 60.001 83.77777777777777 60.001 83.77777777777777 60.001 Z " fill="rgba(224,79,22,0.85)" fill-opacity="1" stroke="#e04f16" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMasktlu6xyyk)" pathTo="M 83.77777777777777 60.001 L 83.77777777777777 15.001 C 83.77777777777777 15.001 83.77777777777777 15.001 83.77777777777777 15.001 L 89.55555555555554 15.001 C 89.55555555555554 15.001 89.55555555555554 15.001 89.55555555555554 15.001 L 89.55555555555554 60.001 C 89.55555555555554 60.001 89.55555555555554 60.001 89.55555555555554 60.001 L 83.77777777777777 60.001 C 83.77777777777777 60.001 83.77777777777777 60.001 83.77777777777777 60.001 Z " pathFrom="M 83.77777777777777 60.001 L 83.77777777777777 60.001 L 89.55555555555554 60.001 L 89.55555555555554 60.001 L 89.55555555555554 60.001 L 89.55555555555554 60.001 L 89.55555555555554 60.001 L 83.77777777777777 60.001 Z" cy="15" cx="89.55555555555554" j="6" val="75" barHeight="45" barWidth="5.777777777777777"></path><g class="apexcharts-bar-goals-markers"><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasktlu6xyyk)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasktlu6xyyk)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasktlu6xyyk)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasktlu6xyyk)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasktlu6xyyk)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasktlu6xyyk)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasktlu6xyyk)"></g></g><g class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g></g><g class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="0"></g></g><line x1="-6.666666666666668" y1="0" x2="93.33333333333333" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line x1="-6.666666666666668" y1="0" x2="93.33333333333333" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g class="apexcharts-xaxis" transform="translate(0, 0)"><g class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g class="apexcharts-yaxis-annotations"></g><g class="apexcharts-xaxis-annotations"></g><g class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-legend" style="max-height: 30px;"></div></div></div>
                                    <span class="badge fw-medium badge-soft-danger flex-shrink-0 ms-2">+21% <i class="ti ti-arrow-down ms-1"></i></span>
                                    <p class="ms-1 fs-13 text-truncate">in last 7 Days </p>
                                </div>
                           </div>
                        </div>
                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col-xl-4 d-flex">
                        <div class="card shadow-sm flex-fill w-100">
                           <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div>
                                        <p class="mb-1">Cancelled Appointments</p>
                                        <div class="d-flex align-items-center gap-1">
                                            <h3 class="fw-bold mb-0">35</h3>
                                            <span class="badge fw-medium bg-success flex-shrink-0">+45%</span>
                                        </div>
                                    </div>
                                    <span class="avatar border border-success text-success rounded-2 flex-shrink-0"><i class="ti ti-versions fs-20"></i></span>
                                </div>
                                <div class="d-flex align-items-end">
                                    <div id="s-col-7" class="chart-set" style="min-height: 60px;"><div id="apexchartseok54i5n" class="apexcharts-canvas apexchartseok54i5n apexcharts-theme-light" style="width: 100px; height: 60px;"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" width="100" height="60"><foreignObject x="0" y="0" width="100" height="60"><style type="text/css">.apexcharts-flip-y {
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
.apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {
  flex-wrap: wrap
}
.apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
  flex-direction: column;
  bottom: 0;
}
.apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
  justify-content: flex-start;
  align-items: flex-start;
}
.apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
  justify-content: center;
  align-items: center;
}
.apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
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
.apexcharts-legend-text *, .apexcharts-legend-marker * {
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
.apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
  display: none !important;
}
.apexcharts-inactive-legend {
  opacity: 0.45;
} </style></foreignObject><g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g><g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g><g class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g class="apexcharts-inner apexcharts-graphical" transform="translate(5.7142857142857135, 0)"><defs><linearGradient x1="0" y1="0" x2="0" y2="1" id="SvgjsLinearGradient1028"><stop stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskeok54i5n"><rect width="92.57142857142857" height="64" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectBarMaskeok54i5n"><rect width="103.99999999999999" height="64" x="-7.7142857142857135" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskeok54i5n"><rect width="104" height="60" x="-7.7142857142857135" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskeok54i5n"></clipPath><clipPath id="nonForecastMaskeok54i5n"></clipPath></defs><rect width="0" height="60" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="#b6b6b6" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1028)" class="apexcharts-xcrosshairs" y2="60" filter="none" fill-opacity="0.9"></rect><g class="apexcharts-grid"><g class="apexcharts-gridlines-horizontal" style="display: none;"><line x1="-5.7142857142857135" y1="0" x2="94.28571428571428" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line x1="-5.7142857142857135" y1="30" x2="94.28571428571428" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line x1="-5.7142857142857135" y1="60" x2="94.28571428571428" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g class="apexcharts-gridlines-vertical" style="display: none;"></g><line x1="0" y1="60" x2="88.57142857142857" y2="60" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line x1="0" y1="1" x2="0" y2="60" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g class="apexcharts-grid-borders" style="display: none;"></g><g class="apexcharts-bar-series apexcharts-plot-series"><g class="apexcharts-series" rel="1" seriesName="Data" data:realIndex="0"><path d="M -2.530612244897959 58.001 L -2.530612244897959 50.001 C -2.530612244897959 49.001 -1.5306122448979589 48.001 -0.5306122448979589 48.001 L 0.5306122448979589 48.001 C 1.5306122448979589 48.001 2.530612244897959 49.001 2.530612244897959 50.001 L 2.530612244897959 58.001 C 2.530612244897959 59.001 1.5306122448979589 60.001 0.5306122448979589 60.001 L -0.5306122448979589 60.001 C -1.5306122448979589 60.001 -2.530612244897959 59.001 -2.530612244897959 58.001 Z " fill="rgba(14,147,132,0.85)" fill-opacity="1" stroke="#0e9384" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskeok54i5n)" pathTo="M -2.530612244897959 58.001 L -2.530612244897959 50.001 C -2.530612244897959 49.001 -1.5306122448979589 48.001 -0.5306122448979589 48.001 L 0.5306122448979589 48.001 C 1.5306122448979589 48.001 2.530612244897959 49.001 2.530612244897959 50.001 L 2.530612244897959 58.001 C 2.530612244897959 59.001 1.5306122448979589 60.001 0.5306122448979589 60.001 L -0.5306122448979589 60.001 C -1.5306122448979589 60.001 -2.530612244897959 59.001 -2.530612244897959 58.001 Z " pathFrom="M -2.530612244897959 60.001 L -2.530612244897959 60.001 L 2.530612244897959 60.001 L 2.530612244897959 60.001 L 2.530612244897959 60.001 L 2.530612244897959 60.001 L 2.530612244897959 60.001 L -2.530612244897959 60.001 Z" cy="48" cx="2.530612244897959" j="0" val="20" barHeight="12" barWidth="5.061224489795918"></path><path d="M 10.122448979591836 58.001 L 10.122448979591836 41.001 C 10.122448979591836 40.001 11.122448979591836 39.001 12.122448979591836 39.001 L 13.183673469387752 39.001 C 14.183673469387752 39.001 15.183673469387752 40.001 15.183673469387752 41.001 L 15.183673469387752 58.001 C 15.183673469387752 59.001 14.183673469387752 60.001 13.183673469387752 60.001 L 12.122448979591836 60.001 C 11.122448979591836 60.001 10.122448979591836 59.001 10.122448979591836 58.001 Z " fill="rgba(14,147,132,0.85)" fill-opacity="1" stroke="#0e9384" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskeok54i5n)" pathTo="M 10.122448979591836 58.001 L 10.122448979591836 41.001 C 10.122448979591836 40.001 11.122448979591836 39.001 12.122448979591836 39.001 L 13.183673469387752 39.001 C 14.183673469387752 39.001 15.183673469387752 40.001 15.183673469387752 41.001 L 15.183673469387752 58.001 C 15.183673469387752 59.001 14.183673469387752 60.001 13.183673469387752 60.001 L 12.122448979591836 60.001 C 11.122448979591836 60.001 10.122448979591836 59.001 10.122448979591836 58.001 Z " pathFrom="M 10.122448979591836 60.001 L 10.122448979591836 60.001 L 15.183673469387752 60.001 L 15.183673469387752 60.001 L 15.183673469387752 60.001 L 15.183673469387752 60.001 L 15.183673469387752 60.001 L 10.122448979591836 60.001 Z" cy="39" cx="15.183673469387752" j="1" val="35" barHeight="21" barWidth="5.061224489795918"></path><path d="M 22.77551020408163 58.001 L 22.77551020408163 44.001 C 22.77551020408163 43.001 23.77551020408163 42.001 24.77551020408163 42.001 L 25.83673469387755 42.001 C 26.83673469387755 42.001 27.83673469387755 43.001 27.83673469387755 44.001 L 27.83673469387755 58.001 C 27.83673469387755 59.001 26.83673469387755 60.001 25.83673469387755 60.001 L 24.77551020408163 60.001 C 23.77551020408163 60.001 22.77551020408163 59.001 22.77551020408163 58.001 Z " fill="rgba(14,147,132,0.85)" fill-opacity="1" stroke="#0e9384" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskeok54i5n)" pathTo="M 22.77551020408163 58.001 L 22.77551020408163 44.001 C 22.77551020408163 43.001 23.77551020408163 42.001 24.77551020408163 42.001 L 25.83673469387755 42.001 C 26.83673469387755 42.001 27.83673469387755 43.001 27.83673469387755 44.001 L 27.83673469387755 58.001 C 27.83673469387755 59.001 26.83673469387755 60.001 25.83673469387755 60.001 L 24.77551020408163 60.001 C 23.77551020408163 60.001 22.77551020408163 59.001 22.77551020408163 58.001 Z " pathFrom="M 22.77551020408163 60.001 L 22.77551020408163 60.001 L 27.83673469387755 60.001 L 27.83673469387755 60.001 L 27.83673469387755 60.001 L 27.83673469387755 60.001 L 27.83673469387755 60.001 L 22.77551020408163 60.001 Z" cy="42" cx="27.83673469387755" j="2" val="30" barHeight="18" barWidth="5.061224489795918"></path><path d="M 35.42857142857142 58.001 L 35.42857142857142 32.001000000000005 C 35.42857142857142 31.001000000000005 36.42857142857142 30.001 37.42857142857142 30.001 L 38.48979591836734 30.001 C 39.48979591836734 30.001 40.48979591836734 31.001000000000005 40.48979591836734 32.001000000000005 L 40.48979591836734 58.001 C 40.48979591836734 59.001 39.48979591836734 60.001 38.48979591836734 60.001 L 37.42857142857142 60.001 C 36.42857142857142 60.001 35.42857142857142 59.001 35.42857142857142 58.001 Z " fill="rgba(14,147,132,0.85)" fill-opacity="1" stroke="#0e9384" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskeok54i5n)" pathTo="M 35.42857142857142 58.001 L 35.42857142857142 32.001000000000005 C 35.42857142857142 31.001000000000005 36.42857142857142 30.001 37.42857142857142 30.001 L 38.48979591836734 30.001 C 39.48979591836734 30.001 40.48979591836734 31.001000000000005 40.48979591836734 32.001000000000005 L 40.48979591836734 58.001 C 40.48979591836734 59.001 39.48979591836734 60.001 38.48979591836734 60.001 L 37.42857142857142 60.001 C 36.42857142857142 60.001 35.42857142857142 59.001 35.42857142857142 58.001 Z " pathFrom="M 35.42857142857142 60.001 L 35.42857142857142 60.001 L 40.48979591836734 60.001 L 40.48979591836734 60.001 L 40.48979591836734 60.001 L 40.48979591836734 60.001 L 40.48979591836734 60.001 L 35.42857142857142 60.001 Z" cy="30" cx="40.48979591836734" j="3" val="50" barHeight="30" barWidth="5.061224489795918"></path><path d="M 48.08163265306122 58.001 L 48.08163265306122 26.001 C 48.08163265306122 25.001 49.08163265306122 24.001 50.08163265306122 24.001 L 51.14285714285714 24.001 C 52.14285714285714 24.001 53.14285714285714 25.001 53.14285714285714 26.001 L 53.14285714285714 58.001 C 53.14285714285714 59.001 52.14285714285714 60.001 51.14285714285714 60.001 L 50.08163265306122 60.001 C 49.08163265306122 60.001 48.08163265306122 59.001 48.08163265306122 58.001 Z " fill="rgba(14,147,132,0.85)" fill-opacity="1" stroke="#0e9384" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskeok54i5n)" pathTo="M 48.08163265306122 58.001 L 48.08163265306122 26.001 C 48.08163265306122 25.001 49.08163265306122 24.001 50.08163265306122 24.001 L 51.14285714285714 24.001 C 52.14285714285714 24.001 53.14285714285714 25.001 53.14285714285714 26.001 L 53.14285714285714 58.001 C 53.14285714285714 59.001 52.14285714285714 60.001 51.14285714285714 60.001 L 50.08163265306122 60.001 C 49.08163265306122 60.001 48.08163265306122 59.001 48.08163265306122 58.001 Z " pathFrom="M 48.08163265306122 60.001 L 48.08163265306122 60.001 L 53.14285714285714 60.001 L 53.14285714285714 60.001 L 53.14285714285714 60.001 L 53.14285714285714 60.001 L 53.14285714285714 60.001 L 48.08163265306122 60.001 Z" cy="24" cx="53.14285714285714" j="4" val="60" barHeight="36" barWidth="5.061224489795918"></path><path d="M 60.73469387755102 58.001 L 60.73469387755102 41.001 C 60.73469387755102 40.001 61.73469387755102 39.001 62.73469387755102 39.001 L 63.79591836734693 39.001 C 64.79591836734693 39.001 65.79591836734693 40.001 65.79591836734693 41.001 L 65.79591836734693 58.001 C 65.79591836734693 59.001 64.79591836734693 60.001 63.79591836734693 60.001 L 62.73469387755102 60.001 C 61.73469387755102 60.001 60.73469387755102 59.001 60.73469387755102 58.001 Z " fill="rgba(14,147,132,0.85)" fill-opacity="1" stroke="#0e9384" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskeok54i5n)" pathTo="M 60.73469387755102 58.001 L 60.73469387755102 41.001 C 60.73469387755102 40.001 61.73469387755102 39.001 62.73469387755102 39.001 L 63.79591836734693 39.001 C 64.79591836734693 39.001 65.79591836734693 40.001 65.79591836734693 41.001 L 65.79591836734693 58.001 C 65.79591836734693 59.001 64.79591836734693 60.001 63.79591836734693 60.001 L 62.73469387755102 60.001 C 61.73469387755102 60.001 60.73469387755102 59.001 60.73469387755102 58.001 Z " pathFrom="M 60.73469387755102 60.001 L 60.73469387755102 60.001 L 65.79591836734693 60.001 L 65.79591836734693 60.001 L 65.79591836734693 60.001 L 65.79591836734693 60.001 L 65.79591836734693 60.001 L 60.73469387755102 60.001 Z" cy="39" cx="65.79591836734693" j="5" val="35" barHeight="21" barWidth="5.061224489795918"></path><path d="M 73.38775510204081 58.001 L 73.38775510204081 47.001 C 73.38775510204081 46.001 74.38775510204081 45.001 75.38775510204081 45.001 L 76.44897959183673 45.001 C 77.44897959183673 45.001 78.44897959183673 46.001 78.44897959183673 47.001 L 78.44897959183673 58.001 C 78.44897959183673 59.001 77.44897959183673 60.001 76.44897959183673 60.001 L 75.38775510204081 60.001 C 74.38775510204081 60.001 73.38775510204081 59.001 73.38775510204081 58.001 Z " fill="rgba(14,147,132,0.85)" fill-opacity="1" stroke="#0e9384" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskeok54i5n)" pathTo="M 73.38775510204081 58.001 L 73.38775510204081 47.001 C 73.38775510204081 46.001 74.38775510204081 45.001 75.38775510204081 45.001 L 76.44897959183673 45.001 C 77.44897959183673 45.001 78.44897959183673 46.001 78.44897959183673 47.001 L 78.44897959183673 58.001 C 78.44897959183673 59.001 77.44897959183673 60.001 76.44897959183673 60.001 L 75.38775510204081 60.001 C 74.38775510204081 60.001 73.38775510204081 59.001 73.38775510204081 58.001 Z " pathFrom="M 73.38775510204081 60.001 L 73.38775510204081 60.001 L 78.44897959183673 60.001 L 78.44897959183673 60.001 L 78.44897959183673 60.001 L 78.44897959183673 60.001 L 78.44897959183673 60.001 L 73.38775510204081 60.001 Z" cy="45" cx="78.44897959183673" j="6" val="25" barHeight="15" barWidth="5.061224489795918"></path><path d="M 86.04081632653062 58.001 L 86.04081632653062 35.001 C 86.04081632653062 34.001 87.04081632653062 33.001 88.04081632653062 33.001 L 89.10204081632654 33.001 C 90.10204081632654 33.001 91.10204081632654 34.001 91.10204081632654 35.001 L 91.10204081632654 58.001 C 91.10204081632654 59.001 90.10204081632654 60.001 89.10204081632654 60.001 L 88.04081632653062 60.001 C 87.04081632653062 60.001 86.04081632653062 59.001 86.04081632653062 58.001 Z " fill="rgba(14,147,132,0.85)" fill-opacity="1" stroke="#0e9384" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskeok54i5n)" pathTo="M 86.04081632653062 58.001 L 86.04081632653062 35.001 C 86.04081632653062 34.001 87.04081632653062 33.001 88.04081632653062 33.001 L 89.10204081632654 33.001 C 90.10204081632654 33.001 91.10204081632654 34.001 91.10204081632654 35.001 L 91.10204081632654 58.001 C 91.10204081632654 59.001 90.10204081632654 60.001 89.10204081632654 60.001 L 88.04081632653062 60.001 C 87.04081632653062 60.001 86.04081632653062 59.001 86.04081632653062 58.001 Z " pathFrom="M 86.04081632653062 60.001 L 86.04081632653062 60.001 L 91.10204081632654 60.001 L 91.10204081632654 60.001 L 91.10204081632654 60.001 L 91.10204081632654 60.001 L 91.10204081632654 60.001 L 86.04081632653062 60.001 Z" cy="33" cx="91.10204081632654" j="7" val="45" barHeight="27" barWidth="5.061224489795918"></path><g class="apexcharts-bar-goals-markers"><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskeok54i5n)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskeok54i5n)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskeok54i5n)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskeok54i5n)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskeok54i5n)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskeok54i5n)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskeok54i5n)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskeok54i5n)"></g></g><g class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g></g><g class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="0"></g></g><line x1="-5.7142857142857135" y1="0" x2="94.28571428571428" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line x1="-5.7142857142857135" y1="0" x2="94.28571428571428" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g class="apexcharts-xaxis" transform="translate(0, 0)"><g class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g class="apexcharts-yaxis-annotations"></g><g class="apexcharts-xaxis-annotations"></g><g class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-legend" style="max-height: 30px;"></div></div></div>
                                    <span class="badge fw-medium badge-soft-success flex-shrink-0 ms-2">+31% <i class="ti ti-arrow-up ms-1"></i></span>
                                    <p class="ms-1 fs-13 text-truncate">in last 7 Days </p>
                                </div>
                           </div>
                        </div>
                    </div>
                    <!-- col end -->

                 </div>
                <!-- row end -->

                <!-- row start -->
                <div class="row">

                    <!-- col start -->
                    <div class="col-xl-4 d-flex">
                         <!-- card start -->
                        <div class="card shadow-sm flex-fill w-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0 text-truncate">Upcoming Appointments</h5>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="btn btn-sm px-2 border shadow-sm btn-outline-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                        Today <i class="ti ti-chevron-down ms-1"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="#">Today</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">This Week</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">This Month</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                        <img src="{{asset('dashboard/assets')}}/img/doctors/doctor-01.jpg" alt="img" class="rounded-circle">
                                    </a>
                                    <div>
                                      <h6 class="fs-14 mb-1 text-truncate"><a href="javascript:void(0);" class="fw-semibold">Andrew Billard</a></h6>
                                      <p class="mb-0 fs-13 text-truncate">#AP455698</p>
                                    </div>
                                </div>
                                <h6 class="fs-14 fw-semibold mb-1">General Visit</h6>
                                <div class="d-flex align-items-center gap-2 flex-wrap mb-3">
                                    <p class="mb-0 d-inline-flex align-items-center"><i class="ti ti-calendar-time text-dark me-1"></i>Monday, 31 Mar 2025</p>
                                    <p class="mb-0 d-inline-flex align-items-center"><i class="ti ti-clock text-dark me-1"></i>06:30 PM </p>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h6 class="fs-13 fw-semibold mb-1">Department</h6>
                                        <p>Cardiology</p>
                                    </div>
                                    <div class="col">
                                        <h6 class="fs-13 fw-semibold mb-1">Type</h6>
                                        <p class="text-truncate">Online Consultation</p>
                                    </div>
                                </div>
                                <div class="my-3 border-bottom pb-3">
                                    <a href="javascript:void(0);" class="btn btn-primary w-100">Start Appointment</a>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <a href="javascript:void(0);" class="btn btn-dark w-100"><i class="ti ti-brand-hipchat me-1"></i>Chat Now</a>
                                    <a href="javascript:void(0);" class="btn btn-outline-white w-100"><i class="ti ti-video me-1"></i>Video Consutation</a>
                                </div>
                            </div>
                        </div>
                        <!-- card end -->
                    </div>
                    <!-- col end -->

                     <!-- col start -->
                    <div class="col-xl-8 d-flex">
                        <!-- card start -->
                        <div class="card shadow-sm flex-fill w-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0">Appointments</h5>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="btn btn-sm px-2 border shadow-sm btn-outline-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
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
                                <div class="d-flex align-items-center justify-content-end gap-2 mb-1 flex-wrap mb-3">
                                    <p class="mb-0 d-inline-flex align-items-center"><i class="ti ti-point-filled me-1 fs-18 text-primary"></i>Total Appointments</p>
                                    <p class="mb-0 d-inline-flex align-items-center"><i class="ti ti-point-filled me-1 fs-18 text-success"></i>Completed Appointments</p>
                                </div>
                                <div class="chart-set" id="s-col-20" style="min-height: 265px;"><div id="apexcharts55tyt9n9" class="apexcharts-canvas apexcharts55tyt9n9 apexcharts-theme-light" style="width: 623px; height: 250px;"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" width="623" height="250"><foreignObject x="0" y="0" width="623" height="250"><style type="text/css">.apexcharts-flip-y {
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
.apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {
  flex-wrap: wrap
}
.apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
  flex-direction: column;
  bottom: 0;
}
.apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
  justify-content: flex-start;
  align-items: flex-start;
}
.apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
  justify-content: center;
  align-items: center;
}
.apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
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
.apexcharts-legend-text *, .apexcharts-legend-marker * {
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
.apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
  display: none !important;
}
.apexcharts-inactive-legend {
  opacity: 0.45;
} </style></foreignObject><rect width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g><g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g><g class="apexcharts-yaxis" rel="0" transform="translate(8.703125, 0)"><g class="apexcharts-yaxis-texts-g"><text x="20" y="34.333333333333336" text-anchor="end" dominant-baseline="auto" font-size="13px" font-family="Helvetica, Arial, sans-serif" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan>400</tspan><title>400</title></text><text x="20" y="79.51583333333333" text-anchor="end" dominant-baseline="auto" font-size="13px" font-family="Helvetica, Arial, sans-serif" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan>300</tspan><title>300</title></text><text x="20" y="124.69833333333332" text-anchor="end" dominant-baseline="auto" font-size="13px" font-family="Helvetica, Arial, sans-serif" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan>200</tspan><title>200</title></text><text x="20" y="169.88083333333333" text-anchor="end" dominant-baseline="auto" font-size="13px" font-family="Helvetica, Arial, sans-serif" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan>100</tspan><title>100</title></text><text x="20" y="215.06333333333333" text-anchor="end" dominant-baseline="auto" font-size="13px" font-family="Helvetica, Arial, sans-serif" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan>0</tspan><title>0</title></text></g></g><g class="apexcharts-inner apexcharts-graphical" transform="translate(44.65977672230114, 30)"><defs><clipPath id="gridRectMask55tyt9n9"><rect width="573.5744895241477" height="186.73" x="-3" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectBarMask55tyt9n9"><rect width="589.4877929687499" height="186.73" x="-10.956651722301135" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask55tyt9n9"><rect width="589.48779296875" height="180.73" x="-10.956651722301135" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask55tyt9n9"></clipPath><clipPath id="nonForecastMask55tyt9n9"></clipPath><linearGradient x1="0" y1="1" x2="1" y2="1" id="SvgjsLinearGradient1029"><stop stop-opacity="0.4" stop-color="#434bad" offset="0"></stop><stop stop-opacity="0" stop-color="#ffffff" offset="1"></stop></linearGradient></defs><line x1="0" y1="0" x2="0" y2="180.73" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="180.73" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><line x1="0" y1="180.73" x2="0" y2="186.73" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line x1="51.597680865831606" y1="180.73" x2="51.597680865831606" y2="186.73" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line x1="103.19536173166321" y1="180.73" x2="103.19536173166321" y2="186.73" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line x1="154.79304259749483" y1="180.73" x2="154.79304259749483" y2="186.73" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line x1="206.39072346332642" y1="180.73" x2="206.39072346332642" y2="186.73" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line x1="257.988404329158" y1="180.73" x2="257.988404329158" y2="186.73" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line x1="309.5860851949896" y1="180.73" x2="309.5860851949896" y2="186.73" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line x1="361.1837660608212" y1="180.73" x2="361.1837660608212" y2="186.73" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line x1="412.7814469266528" y1="180.73" x2="412.7814469266528" y2="186.73" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line x1="464.3791277924844" y1="180.73" x2="464.3791277924844" y2="186.73" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line x1="515.976808658316" y1="180.73" x2="515.976808658316" y2="186.73" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line x1="567.5744895241477" y1="180.73" x2="567.5744895241477" y2="186.73" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><g class="apexcharts-grid"><g class="apexcharts-gridlines-horizontal"><line x1="-7.956651722301136" y1="45.1825" x2="575.5311412464488" y2="45.1825" stroke="#eeeeee" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line x1="-7.956651722301136" y1="90.365" x2="575.5311412464488" y2="90.365" stroke="#eeeeee" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line x1="-7.956651722301136" y1="135.54749999999999" x2="575.5311412464488" y2="135.54749999999999" stroke="#eeeeee" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g class="apexcharts-gridlines-vertical"></g><line x1="0" y1="180.73" x2="567.5744895241477" y2="180.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line x1="0" y1="1" x2="0" y2="180.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g class="apexcharts-grid-borders"><line x1="-7.956651722301136" y1="0" x2="575.5311412464488" y2="0" stroke="#eeeeee" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line x1="-7.956651722301136" y1="180.73" x2="575.5311412464488" y2="180.73" stroke="#eeeeee" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line x1="-7.956651722301136" y1="180.73" x2="575.5311412464488" y2="180.73" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line></g><g class="apexcharts-area-series apexcharts-plot-series"><g class="apexcharts-series" zIndex="1" seriesName="Completed" data:longestSeries="true" rel="1" data:realIndex="1"><path d="M 0 90.36499999999998C 18.05918830304106 90.36499999999998 33.538492562790545 92.62412499999999 51.597680865831606 92.62412499999999C 69.65686916887267 92.62412499999999 85.13617342862216 94.88324999999999 103.19536173166321 94.88324999999999C 121.25455003470428 94.88324999999999 136.73385429445378 97.14237499999999 154.79304259749483 97.14237499999999C 172.8522309005359 97.14237499999999 188.33153516028537 90.36499999999998 206.39072346332642 90.36499999999998C 224.44991176636748 90.36499999999998 239.92921602611696 108.43799999999999 257.988404329158 108.43799999999999C 276.0475926321991 108.43799999999999 291.5268968919486 103.91975 309.58608519498966 103.91975C 327.64527349803075 103.91975 343.12457775778023 106.17887499999999 361.18376606082126 106.17887499999999C 379.2429543638623 106.17887499999999 394.72225862361176 85.84674999999999 412.78144692665285 85.84674999999999C 430.84063522969393 85.84674999999999 446.3199394894434 83.58762499999999 464.3791277924845 83.58762499999999C 482.4383160955255 83.58762499999999 497.917620355275 79.06937499999998 515.976808658316 79.06937499999998C 534.0359969613571 79.06937499999998 549.5153012211066 76.81024999999998 567.5744895241477 76.81024999999998C 567.5744895241477 76.81024999999998 567.5744895241477 76.81024999999998 567.5744895241477 180.73 L 0 180.73z" fill="url(#SvgjsLinearGradient1029)" fill-opacity="1" stroke="none" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectBarMask55tyt9n9)" pathTo="M 0 90.36499999999998C 18.05918830304106 90.36499999999998 33.538492562790545 92.62412499999999 51.597680865831606 92.62412499999999C 69.65686916887267 92.62412499999999 85.13617342862216 94.88324999999999 103.19536173166321 94.88324999999999C 121.25455003470428 94.88324999999999 136.73385429445378 97.14237499999999 154.79304259749483 97.14237499999999C 172.8522309005359 97.14237499999999 188.33153516028537 90.36499999999998 206.39072346332642 90.36499999999998C 224.44991176636748 90.36499999999998 239.92921602611696 108.43799999999999 257.988404329158 108.43799999999999C 276.0475926321991 108.43799999999999 291.5268968919486 103.91975 309.58608519498966 103.91975C 327.64527349803075 103.91975 343.12457775778023 106.17887499999999 361.18376606082126 106.17887499999999C 379.2429543638623 106.17887499999999 394.72225862361176 85.84674999999999 412.78144692665285 85.84674999999999C 430.84063522969393 85.84674999999999 446.3199394894434 83.58762499999999 464.3791277924845 83.58762499999999C 482.4383160955255 83.58762499999999 497.917620355275 79.06937499999998 515.976808658316 79.06937499999998C 534.0359969613571 79.06937499999998 549.5153012211066 76.81024999999998 567.5744895241477 76.81024999999998C 567.5744895241477 76.81024999999998 567.5744895241477 76.81024999999998 567.5744895241477 180.73 L 0 180.73z" pathFrom="M 0 180.73 L 0 180.73 L 51.597680865831606 180.73 L 103.19536173166321 180.73 L 154.79304259749483 180.73 L 206.39072346332642 180.73 L 257.988404329158 180.73 L 309.58608519498966 180.73 L 361.18376606082126 180.73 L 412.78144692665285 180.73 L 464.3791277924845 180.73 L 515.976808658316 180.73 L 567.5744895241477 180.73z"></path><path d="M 0 90.36499999999998C 18.05918830304106 90.36499999999998 33.538492562790545 92.62412499999999 51.597680865831606 92.62412499999999C 69.65686916887267 92.62412499999999 85.13617342862216 94.88324999999999 103.19536173166321 94.88324999999999C 121.25455003470428 94.88324999999999 136.73385429445378 97.14237499999999 154.79304259749483 97.14237499999999C 172.8522309005359 97.14237499999999 188.33153516028537 90.36499999999998 206.39072346332642 90.36499999999998C 224.44991176636748 90.36499999999998 239.92921602611696 108.43799999999999 257.988404329158 108.43799999999999C 276.0475926321991 108.43799999999999 291.5268968919486 103.91975 309.58608519498966 103.91975C 327.64527349803075 103.91975 343.12457775778023 106.17887499999999 361.18376606082126 106.17887499999999C 379.2429543638623 106.17887499999999 394.72225862361176 85.84674999999999 412.78144692665285 85.84674999999999C 430.84063522969393 85.84674999999999 446.3199394894434 83.58762499999999 464.3791277924845 83.58762499999999C 482.4383160955255 83.58762499999999 497.917620355275 79.06937499999998 515.976808658316 79.06937499999998C 534.0359969613571 79.06937499999998 549.5153012211066 76.81024999999998 567.5744895241477 76.81024999999998" fill="none" fill-opacity="1" stroke="#00b96b" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectBarMask55tyt9n9)" pathTo="M 0 90.36499999999998C 18.05918830304106 90.36499999999998 33.538492562790545 92.62412499999999 51.597680865831606 92.62412499999999C 69.65686916887267 92.62412499999999 85.13617342862216 94.88324999999999 103.19536173166321 94.88324999999999C 121.25455003470428 94.88324999999999 136.73385429445378 97.14237499999999 154.79304259749483 97.14237499999999C 172.8522309005359 97.14237499999999 188.33153516028537 90.36499999999998 206.39072346332642 90.36499999999998C 224.44991176636748 90.36499999999998 239.92921602611696 108.43799999999999 257.988404329158 108.43799999999999C 276.0475926321991 108.43799999999999 291.5268968919486 103.91975 309.58608519498966 103.91975C 327.64527349803075 103.91975 343.12457775778023 106.17887499999999 361.18376606082126 106.17887499999999C 379.2429543638623 106.17887499999999 394.72225862361176 85.84674999999999 412.78144692665285 85.84674999999999C 430.84063522969393 85.84674999999999 446.3199394894434 83.58762499999999 464.3791277924845 83.58762499999999C 482.4383160955255 83.58762499999999 497.917620355275 79.06937499999998 515.976808658316 79.06937499999998C 534.0359969613571 79.06937499999998 549.5153012211066 76.81024999999998 567.5744895241477 76.81024999999998" pathFrom="M 0 180.73 L 0 180.73 L 51.597680865831606 180.73 L 103.19536173166321 180.73 L 154.79304259749483 180.73 L 206.39072346332642 180.73 L 257.988404329158 180.73 L 309.58608519498966 180.73 L 361.18376606082126 180.73 L 412.78144692665285 180.73 L 464.3791277924845 180.73 L 515.976808658316 180.73 L 567.5744895241477 180.73" fill-rule="evenodd"></path><g class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="1"><g class="apexcharts-series-markers"><path d="M 0, 0
           m -0, 0
           a 0,0 0 1,0 0,0
           a 0,0 0 1,0 -0,0" fill="#00b96b" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" cx="0" cy="0" shape="circle" class="apexcharts-marker wnsqx1qia" default-marker-size="0"></path></g></g></g></g><g class="apexcharts-bar-series apexcharts-plot-series"><g class="apexcharts-series" rel="1" seriesName="TotalxAppointments" data:realIndex="0"><path d="M -3.8698260649373704 176.731 L -3.8698260649373704 22.07399999999998 C -3.8698260649373704 20.07399999999998 -1.8698260649373704 18.07399999999998 0.13017393506262964 18.07399999999998 L 0.13017393506262964 18.07399999999998 C 2 18.07399999999998 3.8698260649373704 20.07399999999998 3.8698260649373704 22.07399999999998 L 3.8698260649373704 176.731 C 3.8698260649373704 178.731 1.8698260649373704 180.731 -0.13017393506262964 180.731 L -0.13017393506262964 180.731 C -2 180.731 -3.8698260649373704 178.731 -3.8698260649373704 176.731 Z " fill="rgba(59,40,204,0.85)" fill-opacity="1" stroke="#3b28cc" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMask55tyt9n9)" pathTo="M -3.8698260649373704 176.731 L -3.8698260649373704 22.07399999999998 C -3.8698260649373704 20.07399999999998 -1.8698260649373704 18.07399999999998 0.13017393506262964 18.07399999999998 L 0.13017393506262964 18.07399999999998 C 2 18.07399999999998 3.8698260649373704 20.07399999999998 3.8698260649373704 22.07399999999998 L 3.8698260649373704 176.731 C 3.8698260649373704 178.731 1.8698260649373704 180.731 -0.13017393506262964 180.731 L -0.13017393506262964 180.731 C -2 180.731 -3.8698260649373704 178.731 -3.8698260649373704 176.731 Z " pathFrom="M -3.8698260649373704 180.731 L -3.8698260649373704 180.731 L 3.8698260649373704 180.731 L 3.8698260649373704 180.731 L 3.8698260649373704 180.731 L 3.8698260649373704 180.731 L 3.8698260649373704 180.731 L -3.8698260649373704 180.731 Z" cy="18.07299999999998" cx="3.8698260649373704" j="0" val="360" barHeight="162.657" barWidth="7.739652129874741"></path><path d="M 47.727854800894235 176.731 L 47.727854800894235 58.21999999999998 C 47.727854800894235 56.21999999999998 49.727854800894235 54.21999999999998 51.727854800894235 54.21999999999998 L 51.727854800894235 54.21999999999998 C 53.597680865831606 54.21999999999998 55.46750693076898 56.21999999999998 55.46750693076898 58.21999999999998 L 55.46750693076898 176.731 C 55.46750693076898 178.731 53.46750693076898 180.731 51.46750693076898 180.731 L 51.46750693076898 180.731 C 49.597680865831606 180.731 47.727854800894235 178.731 47.727854800894235 176.731 Z " fill="rgba(59,40,204,0.85)" fill-opacity="1" stroke="#3b28cc" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMask55tyt9n9)" pathTo="M 47.727854800894235 176.731 L 47.727854800894235 58.21999999999998 C 47.727854800894235 56.21999999999998 49.727854800894235 54.21999999999998 51.727854800894235 54.21999999999998 L 51.727854800894235 54.21999999999998 C 53.597680865831606 54.21999999999998 55.46750693076898 56.21999999999998 55.46750693076898 58.21999999999998 L 55.46750693076898 176.731 C 55.46750693076898 178.731 53.46750693076898 180.731 51.46750693076898 180.731 L 51.46750693076898 180.731 C 49.597680865831606 180.731 47.727854800894235 178.731 47.727854800894235 176.731 Z " pathFrom="M 47.727854800894235 180.731 L 47.727854800894235 180.731 L 55.46750693076898 180.731 L 55.46750693076898 180.731 L 55.46750693076898 180.731 L 55.46750693076898 180.731 L 55.46750693076898 180.731 L 47.727854800894235 180.731 Z" cy="54.21899999999998" cx="55.46750693076898" j="1" val="280" barHeight="126.51100000000001" barWidth="7.739652129874741"></path><path d="M 99.32553566672584 176.731 L 99.32553566672584 53.70175 C 99.32553566672584 51.70175 101.32553566672584 49.70175 103.32553566672584 49.70175 L 103.32553566672584 49.70175 C 105.19536173166321 49.70175 107.06518779660058 51.70175 107.06518779660058 53.70175 L 107.06518779660058 176.731 C 107.06518779660058 178.731 105.06518779660058 180.731 103.06518779660058 180.731 L 103.06518779660058 180.731 C 101.19536173166321 180.731 99.32553566672584 178.731 99.32553566672584 176.731 Z " fill="rgba(59,40,204,0.85)" fill-opacity="1" stroke="#3b28cc" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMask55tyt9n9)" pathTo="M 99.32553566672584 176.731 L 99.32553566672584 53.70175 C 99.32553566672584 51.70175 101.32553566672584 49.70175 103.32553566672584 49.70175 L 103.32553566672584 49.70175 C 105.19536173166321 49.70175 107.06518779660058 51.70175 107.06518779660058 53.70175 L 107.06518779660058 176.731 C 107.06518779660058 178.731 105.06518779660058 180.731 103.06518779660058 180.731 L 103.06518779660058 180.731 C 101.19536173166321 180.731 99.32553566672584 178.731 99.32553566672584 176.731 Z " pathFrom="M 99.32553566672584 180.731 L 99.32553566672584 180.731 L 107.06518779660058 180.731 L 107.06518779660058 180.731 L 107.06518779660058 180.731 L 107.06518779660058 180.731 L 107.06518779660058 180.731 L 99.32553566672584 180.731 Z" cy="49.70075" cx="107.06518779660058" j="2" val="290" barHeight="131.02925" barWidth="7.739652129874741"></path><path d="M 150.92321653255746 176.731 L 150.92321653255746 62.73824999999999 C 150.92321653255746 60.73824999999999 152.92321653255746 58.73824999999999 154.92321653255746 58.73824999999999 L 154.92321653255746 58.73824999999999 C 156.79304259749483 58.73824999999999 158.6628686624322 60.73824999999999 158.6628686624322 62.73824999999999 L 158.6628686624322 176.731 C 158.6628686624322 178.731 156.6628686624322 180.731 154.6628686624322 180.731 L 154.6628686624322 180.731 C 152.79304259749483 180.731 150.92321653255746 178.731 150.92321653255746 176.731 Z " fill="rgba(59,40,204,0.85)" fill-opacity="1" stroke="#3b28cc" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMask55tyt9n9)" pathTo="M 150.92321653255746 176.731 L 150.92321653255746 62.73824999999999 C 150.92321653255746 60.73824999999999 152.92321653255746 58.73824999999999 154.92321653255746 58.73824999999999 L 154.92321653255746 58.73824999999999 C 156.79304259749483 58.73824999999999 158.6628686624322 60.73824999999999 158.6628686624322 62.73824999999999 L 158.6628686624322 176.731 C 158.6628686624322 178.731 156.6628686624322 180.731 154.6628686624322 180.731 L 154.6628686624322 180.731 C 152.79304259749483 180.731 150.92321653255746 178.731 150.92321653255746 176.731 Z " pathFrom="M 150.92321653255746 180.731 L 150.92321653255746 180.731 L 158.6628686624322 180.731 L 158.6628686624322 180.731 L 158.6628686624322 180.731 L 158.6628686624322 180.731 L 158.6628686624322 180.731 L 150.92321653255746 180.731 Z" cy="58.73724999999999" cx="158.6628686624322" j="3" val="270" barHeight="121.99275" barWidth="7.739652129874741"></path><path d="M 202.52089739838905 176.731 L 202.52089739838905 31.1105 C 202.52089739838905 29.1105 204.52089739838905 27.1105 206.52089739838905 27.1105 L 206.52089739838905 27.1105 C 208.39072346332642 27.1105 210.2605495282638 29.1105 210.2605495282638 31.1105 L 210.2605495282638 176.731 C 210.2605495282638 178.731 208.2605495282638 180.731 206.2605495282638 180.731 L 206.2605495282638 180.731 C 204.39072346332642 180.731 202.52089739838905 178.731 202.52089739838905 176.731 Z " fill="rgba(59,40,204,0.85)" fill-opacity="1" stroke="#3b28cc" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMask55tyt9n9)" pathTo="M 202.52089739838905 176.731 L 202.52089739838905 31.1105 C 202.52089739838905 29.1105 204.52089739838905 27.1105 206.52089739838905 27.1105 L 206.52089739838905 27.1105 C 208.39072346332642 27.1105 210.2605495282638 29.1105 210.2605495282638 31.1105 L 210.2605495282638 176.731 C 210.2605495282638 178.731 208.2605495282638 180.731 206.2605495282638 180.731 L 206.2605495282638 180.731 C 204.39072346332642 180.731 202.52089739838905 178.731 202.52089739838905 176.731 Z " pathFrom="M 202.52089739838905 180.731 L 202.52089739838905 180.731 L 210.2605495282638 180.731 L 210.2605495282638 180.731 L 210.2605495282638 180.731 L 210.2605495282638 180.731 L 210.2605495282638 180.731 L 202.52089739838905 180.731 Z" cy="27.109499999999997" cx="210.2605495282638" j="4" val="340" barHeight="153.6205" barWidth="7.739652129874741"></path><path d="M 254.11857826422064 176.731 L 254.11857826422064 85.3295 C 254.11857826422064 83.3295 256.1185782642207 81.3295 258.1185782642207 81.3295 L 258.1185782642207 81.3295 C 259.988404329158 81.3295 261.85823039409536 83.3295 261.85823039409536 85.3295 L 261.85823039409536 176.731 C 261.85823039409536 178.731 259.85823039409536 180.731 257.85823039409536 180.731 L 257.85823039409536 180.731 C 255.98840432915802 180.731 254.11857826422064 178.731 254.11857826422064 176.731 Z " fill="rgba(59,40,204,0.85)" fill-opacity="1" stroke="#3b28cc" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMask55tyt9n9)" pathTo="M 254.11857826422064 176.731 L 254.11857826422064 85.3295 C 254.11857826422064 83.3295 256.1185782642207 81.3295 258.1185782642207 81.3295 L 258.1185782642207 81.3295 C 259.988404329158 81.3295 261.85823039409536 83.3295 261.85823039409536 85.3295 L 261.85823039409536 176.731 C 261.85823039409536 178.731 259.85823039409536 180.731 257.85823039409536 180.731 L 257.85823039409536 180.731 C 255.98840432915802 180.731 254.11857826422064 178.731 254.11857826422064 176.731 Z " pathFrom="M 254.11857826422064 180.731 L 254.11857826422064 180.731 L 261.85823039409536 180.731 L 261.85823039409536 180.731 L 261.85823039409536 180.731 L 261.85823039409536 180.731 L 261.85823039409536 180.731 L 254.11857826422064 180.731 Z" cy="81.32849999999999" cx="261.85823039409536" j="5" val="220" barHeight="99.4015" barWidth="7.739652129874741"></path><path d="M 305.7162591300523 176.731 L 305.7162591300523 80.81124999999999 C 305.7162591300523 78.81124999999999 307.7162591300523 76.81124999999999 309.7162591300523 76.81124999999999 L 309.7162591300523 76.81124999999999 C 311.58608519498966 76.81124999999999 313.45591125992706 78.81124999999999 313.45591125992706 80.81124999999999 L 313.45591125992706 176.731 C 313.45591125992706 178.731 311.45591125992706 180.731 309.45591125992706 180.731 L 309.45591125992706 180.731 C 307.58608519498966 180.731 305.7162591300523 178.731 305.7162591300523 176.731 Z " fill="rgba(59,40,204,0.85)" fill-opacity="1" stroke="#3b28cc" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMask55tyt9n9)" pathTo="M 305.7162591300523 176.731 L 305.7162591300523 80.81124999999999 C 305.7162591300523 78.81124999999999 307.7162591300523 76.81124999999999 309.7162591300523 76.81124999999999 L 309.7162591300523 76.81124999999999 C 311.58608519498966 76.81124999999999 313.45591125992706 78.81124999999999 313.45591125992706 80.81124999999999 L 313.45591125992706 176.731 C 313.45591125992706 178.731 311.45591125992706 180.731 309.45591125992706 180.731 L 309.45591125992706 180.731 C 307.58608519498966 180.731 305.7162591300523 178.731 305.7162591300523 176.731 Z " pathFrom="M 305.7162591300523 180.731 L 305.7162591300523 180.731 L 313.45591125992706 180.731 L 313.45591125992706 180.731 L 313.45591125992706 180.731 L 313.45591125992706 180.731 L 313.45591125992706 180.731 L 305.7162591300523 180.731 Z" cy="76.81024999999998" cx="313.45591125992706" j="6" val="230" barHeight="103.91975000000001" barWidth="7.739652129874741"></path><path d="M 357.3139399958839 176.731 L 357.3139399958839 103.40249999999999 C 357.3139399958839 101.40249999999999 359.3139399958839 99.40249999999999 361.3139399958839 99.40249999999999 L 361.3139399958839 99.40249999999999 C 363.1837660608213 99.40249999999999 365.05359212575866 101.40249999999999 365.05359212575866 103.40249999999999 L 365.05359212575866 176.731 C 365.05359212575866 178.731 363.05359212575866 180.731 361.05359212575866 180.731 L 361.05359212575866 180.731 C 359.1837660608213 180.731 357.3139399958839 178.731 357.3139399958839 176.731 Z " fill="rgba(59,40,204,0.85)" fill-opacity="1" stroke="#3b28cc" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMask55tyt9n9)" pathTo="M 357.3139399958839 176.731 L 357.3139399958839 103.40249999999999 C 357.3139399958839 101.40249999999999 359.3139399958839 99.40249999999999 361.3139399958839 99.40249999999999 L 361.3139399958839 99.40249999999999 C 363.1837660608213 99.40249999999999 365.05359212575866 101.40249999999999 365.05359212575866 103.40249999999999 L 365.05359212575866 176.731 C 365.05359212575866 178.731 363.05359212575866 180.731 361.05359212575866 180.731 L 361.05359212575866 180.731 C 359.1837660608213 180.731 357.3139399958839 178.731 357.3139399958839 176.731 Z " pathFrom="M 357.3139399958839 180.731 L 357.3139399958839 180.731 L 365.05359212575866 180.731 L 365.05359212575866 180.731 L 365.05359212575866 180.731 L 365.05359212575866 180.731 L 365.05359212575866 180.731 L 357.3139399958839 180.731 Z" cy="99.40149999999998" cx="365.05359212575866" j="7" val="180" barHeight="81.3285" barWidth="7.739652129874741"></path><path d="M 408.9116208617155 176.731 L 408.9116208617155 67.25649999999999 C 408.9116208617155 65.25649999999999 410.9116208617155 63.25649999999998 412.9116208617155 63.25649999999998 L 412.9116208617155 63.25649999999998 C 414.78144692665285 63.25649999999998 416.65127299159025 65.25649999999999 416.65127299159025 67.25649999999999 L 416.65127299159025 176.731 C 416.65127299159025 178.731 414.65127299159025 180.731 412.65127299159025 180.731 L 412.65127299159025 180.731 C 410.78144692665285 180.731 408.9116208617155 178.731 408.9116208617155 176.731 Z " fill="rgba(59,40,204,0.85)" fill-opacity="1" stroke="#3b28cc" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMask55tyt9n9)" pathTo="M 408.9116208617155 176.731 L 408.9116208617155 67.25649999999999 C 408.9116208617155 65.25649999999999 410.9116208617155 63.25649999999998 412.9116208617155 63.25649999999998 L 412.9116208617155 63.25649999999998 C 414.78144692665285 63.25649999999998 416.65127299159025 65.25649999999999 416.65127299159025 67.25649999999999 L 416.65127299159025 176.731 C 416.65127299159025 178.731 414.65127299159025 180.731 412.65127299159025 180.731 L 412.65127299159025 180.731 C 410.78144692665285 180.731 408.9116208617155 178.731 408.9116208617155 176.731 Z " pathFrom="M 408.9116208617155 180.731 L 408.9116208617155 180.731 L 416.65127299159025 180.731 L 416.65127299159025 180.731 L 416.65127299159025 180.731 L 416.65127299159025 180.731 L 416.65127299159025 180.731 L 408.9116208617155 180.731 Z" cy="63.255499999999984" cx="416.65127299159025" j="8" val="260" barHeight="117.4745" barWidth="7.739652129874741"></path><path d="M 460.50930172754715 176.731 L 460.50930172754715 94.36599999999999 C 460.50930172754715 92.36599999999999 462.50930172754715 90.36599999999999 464.50930172754715 90.36599999999999 L 464.50930172754715 90.36599999999999 C 466.3791277924845 90.36599999999999 468.2489538574219 92.36599999999999 468.2489538574219 94.36599999999999 L 468.2489538574219 176.731 C 468.2489538574219 178.731 466.2489538574219 180.731 464.2489538574219 180.731 L 464.2489538574219 180.731 C 462.3791277924845 180.731 460.50930172754715 178.731 460.50930172754715 176.731 Z " fill="rgba(59,40,204,0.85)" fill-opacity="1" stroke="#3b28cc" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMask55tyt9n9)" pathTo="M 460.50930172754715 176.731 L 460.50930172754715 94.36599999999999 C 460.50930172754715 92.36599999999999 462.50930172754715 90.36599999999999 464.50930172754715 90.36599999999999 L 464.50930172754715 90.36599999999999 C 466.3791277924845 90.36599999999999 468.2489538574219 92.36599999999999 468.2489538574219 94.36599999999999 L 468.2489538574219 176.731 C 468.2489538574219 178.731 466.2489538574219 180.731 464.2489538574219 180.731 L 464.2489538574219 180.731 C 462.3791277924845 180.731 460.50930172754715 178.731 460.50930172754715 176.731 Z " pathFrom="M 460.50930172754715 180.731 L 460.50930172754715 180.731 L 468.2489538574219 180.731 L 468.2489538574219 180.731 L 468.2489538574219 180.731 L 468.2489538574219 180.731 L 468.2489538574219 180.731 L 460.50930172754715 180.731 Z" cy="90.36499999999998" cx="468.2489538574219" j="9" val="200" barHeight="90.36500000000001" barWidth="7.739652129874741"></path><path d="M 512.1069825933787 176.731 L 512.1069825933787 26.592249999999975 C 512.1069825933787 24.592249999999975 514.1069825933787 22.592249999999975 516.1069825933787 22.592249999999975 L 516.1069825933787 22.592249999999975 C 517.976808658316 22.592249999999975 519.8466347232534 24.592249999999975 519.8466347232534 26.592249999999975 L 519.8466347232534 176.731 C 519.8466347232534 178.731 517.8466347232534 180.731 515.8466347232534 180.731 L 515.8466347232534 180.731 C 513.976808658316 180.731 512.1069825933787 178.731 512.1069825933787 176.731 Z " fill="rgba(59,40,204,0.85)" fill-opacity="1" stroke="#3b28cc" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMask55tyt9n9)" pathTo="M 512.1069825933787 176.731 L 512.1069825933787 26.592249999999975 C 512.1069825933787 24.592249999999975 514.1069825933787 22.592249999999975 516.1069825933787 22.592249999999975 L 516.1069825933787 22.592249999999975 C 517.976808658316 22.592249999999975 519.8466347232534 24.592249999999975 519.8466347232534 26.592249999999975 L 519.8466347232534 176.731 C 519.8466347232534 178.731 517.8466347232534 180.731 515.8466347232534 180.731 L 515.8466347232534 180.731 C 513.976808658316 180.731 512.1069825933787 178.731 512.1069825933787 176.731 Z " pathFrom="M 512.1069825933787 180.731 L 512.1069825933787 180.731 L 519.8466347232534 180.731 L 519.8466347232534 180.731 L 519.8466347232534 180.731 L 519.8466347232534 180.731 L 519.8466347232534 180.731 L 512.1069825933787 180.731 Z" cy="22.591249999999974" cx="519.8466347232534" j="10" val="350" barHeight="158.13875000000002" barWidth="7.739652129874741"></path><path d="M 563.7046634592103 176.731 L 563.7046634592103 4.000999999999972 C 563.7046634592103 2.000999999999972 565.7046634592103 0.0009999999999715783 567.7046634592103 0.0009999999999715783 L 567.7046634592103 0.0009999999999715783 C 569.5744895241477 0.0009999999999715783 571.444315589085 2.0009999999999715 571.444315589085 4.000999999999972 L 571.444315589085 176.731 C 571.444315589085 178.731 569.444315589085 180.731 567.444315589085 180.731 L 567.444315589085 180.731 C 565.5744895241477 180.731 563.7046634592103 178.731 563.7046634592103 176.731 Z " fill="rgba(59,40,204,0.85)" fill-opacity="1" stroke="#3b28cc" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMask55tyt9n9)" pathTo="M 563.7046634592103 176.731 L 563.7046634592103 4.000999999999972 C 563.7046634592103 2.000999999999972 565.7046634592103 0.0009999999999715783 567.7046634592103 0.0009999999999715783 L 567.7046634592103 0.0009999999999715783 C 569.5744895241477 0.0009999999999715783 571.444315589085 2.0009999999999715 571.444315589085 4.000999999999972 L 571.444315589085 176.731 C 571.444315589085 178.731 569.444315589085 180.731 567.444315589085 180.731 L 567.444315589085 180.731 C 565.5744895241477 180.731 563.7046634592103 178.731 563.7046634592103 176.731 Z " pathFrom="M 563.7046634592103 180.731 L 563.7046634592103 180.731 L 571.444315589085 180.731 L 571.444315589085 180.731 L 571.444315589085 180.731 L 571.444315589085 180.731 L 571.444315589085 180.731 L 563.7046634592103 180.731 Z" cy="-2.842170943040401e-14" cx="571.444315589085" j="11" val="400" barHeight="180.73000000000002" barWidth="7.739652129874741"></path><g class="apexcharts-bar-goals-markers"><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask55tyt9n9)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask55tyt9n9)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask55tyt9n9)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask55tyt9n9)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask55tyt9n9)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask55tyt9n9)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask55tyt9n9)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask55tyt9n9)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask55tyt9n9)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask55tyt9n9)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask55tyt9n9)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask55tyt9n9)"></g></g><g class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g></g><g class="apexcharts-datalabels" data:realIndex="1"></g><g class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="0"></g></g><line x1="-7.956651722301136" y1="0" x2="575.5311412464488" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line x1="-7.956651722301136" y1="0" x2="575.5311412464488" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g class="apexcharts-xaxis" transform="translate(0, 0)"><g class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text x="0" y="208.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-family="Helvetica, Arial, sans-serif" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan>Jan</tspan><title>Jan</title></text><text x="51.59768086583161" y="208.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-family="Helvetica, Arial, sans-serif" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan>Feb</tspan><title>Feb</title></text><text x="103.19536173166321" y="208.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-family="Helvetica, Arial, sans-serif" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan>Mar</tspan><title>Mar</title></text><text x="154.7930425974948" y="208.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-family="Helvetica, Arial, sans-serif" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan>Apr</tspan><title>Apr</title></text><text x="206.3907234633264" y="208.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-family="Helvetica, Arial, sans-serif" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan>May</tspan><title>May</title></text><text x="257.98840432915796" y="208.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-family="Helvetica, Arial, sans-serif" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan>Jun</tspan><title>Jun</title></text><text x="309.58608519498955" y="208.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-family="Helvetica, Arial, sans-serif" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan>Jul</tspan><title>Jul</title></text><text x="361.18376606082114" y="208.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-family="Helvetica, Arial, sans-serif" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan>Aug</tspan><title>Aug</title></text><text x="412.78144692665273" y="208.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-family="Helvetica, Arial, sans-serif" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan>Sep</tspan><title>Sep</title></text><text x="464.3791277924843" y="208.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-family="Helvetica, Arial, sans-serif" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan>Oct</tspan><title>Oct</title></text><text x="515.976808658316" y="208.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-family="Helvetica, Arial, sans-serif" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan>Nov</tspan><title>Nov</title></text><text x="567.5744895241477" y="208.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-family="Helvetica, Arial, sans-serif" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan>Dec</tspan><title>Dec</title></text></g></g><g class="apexcharts-yaxis-annotations"></g><g class="apexcharts-xaxis-annotations"></g><g class="apexcharts-point-annotations"></g></g><rect width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></svg><div class="apexcharts-legend" style="max-height: 125px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-0" style="order: 1;"><span class="apexcharts-tooltip-marker" shape="circle" style="color: rgb(59, 40, 204);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-1" style="order: 2;"><span class="apexcharts-tooltip-marker" shape="circle" style="color: rgb(0, 185, 107);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            </div>
                        </div>
                        <!-- card end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->

                <!-- row start -->
                <div class="row row-cols-1 row-cols-xl-6 row-cols-md-3 row-cols-sm-2">

                    <!-- col start -->
                     <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <span class="avatar bg-primary rounded-2 fs-20 d-inline-flex mb-2"><i class="ti ti-user"></i></span>
                                <p class="mb-1 text-truncate">Total Patient</p>
                                <h3 class="fw-bold mb-2">658</h3>
                                <p class="mb-0 text-success text-truncate">+31% Last Week</p>
                            </div>
                        </div>
                     </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <span class="avatar bg-secondary rounded-2 fs-20 d-inline-flex mb-2"><i class="ti ti-video"></i></span>
                                <p class="mb-1 text-truncate">Video Consultation</p>
                                <h3 class="fw-bold mb-2">256</h3>
                                <p class="mb-0 text-danger text-truncate">-21% Last Week</p>
                            </div>
                        </div>
                     </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <span class="avatar bg-success rounded-2 fs-20 d-inline-flex mb-2"><i class="ti ti-calendar-up"></i></span>
                                <p class="mb-1 text-truncate">Rescheduled</p>
                                <h3 class="fw-bold mb-2">141</h3>
                                <p class="mb-0 text-success text-truncate">+64% Last Week</p>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <span class="avatar bg-danger rounded-2 fs-20 d-inline-flex mb-2"><i class="ti ti-checklist"></i></span>
                                <p class="mb-1 text-truncate">Pre Visit Bookings</p>
                                <h3 class="fw-bold mb-2">524</h3>
                                <p class="mb-0 text-success text-truncate">+38% Last Week</p>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <span class="avatar bg-info rounded-2 fs-20 d-inline-flex mb-2"><i class="ti ti-calendar-share"></i></span>
                                <p class="mb-1 text-truncate">Walkin Bookings</p>
                                <h3 class="fw-bold mb-2">21</h3>
                                <p class="mb-0 text-success text-truncate">+95% Last Week</p>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <span class="avatar bg-soft-success text-success rounded-2 fs-20 d-inline-flex mb-2"><i class="ti ti-carousel-vertical"></i></span>
                                <p class="mb-1 text-truncate">Follow Ups</p>
                                <h3 class="fw-bold mb-2">451</h3>
                                <p class="mb-0 text-success text-truncate">+76% Last Week</p>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                </div>
                <!-- row start -->

                <!-- row start -->
                <div class="row">
                    <div class="col-12 d-flex">
                        <div class="card shadow-sm flex-fill w-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0">Recent Appointments</h5>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="btn btn-sm px-2 border shadow-sm btn-outline-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
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
                                                <th>Patient</th>
                                                <th>Date &amp; Time</th>
                                                <th>Mode</th>
                                                <th>Status</th>
                                                <th>Consultation Fees</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="javascript:void(0);" class="avatar me-2">
                                                            <img src="{{asset('dashboard/assets')}}/img/profiles/avatar-06.jpg" alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                          <h6 class="fs-14 mb-1"><a href="javascript:void(0);" class="fw-medium">Alberto Ripley</a></h6>
                                                          <p class="mb-0 fs-13">+1 56556 54565</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>27 May 2025 - 09:30 AM</td>
                                                <td>Online</td>
                                                <td><span class="badge bg-success fw-medium">Checked Out</span></td>
                                                <td class="fw-semibold text-dark">$400</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1">
                                                        <i class="ti ti-calendar-plus"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" data-bs-toggle="dropdown" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu p-2">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#edit_appointment"><i class="ti ti-edit me-2"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="javascript:void(0);" class="avatar me-2">
                                                            <img src="{{asset('dashboard/assets')}}/img/profiles/avatar-12.jpg" alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                          <h6 class="fs-14 mb-1"><a href="javascript:void(0);" class="fw-medium">Susan Babin</a></h6>
                                                          <p class="mb-0 fs-13">+1 65658 95654</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>26 May 2025 - 10:15 AM</td>
                                                <td>Online</td>
                                                <td><span class="badge bg-warning fw-medium">Checked in</span></td>
                                                <td class="fw-semibold text-dark">$370</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1">
                                                        <i class="ti ti-calendar-plus"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" data-bs-toggle="dropdown" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu p-2">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#edit_appointment"><i class="ti ti-edit me-2"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="javascript:void(0);" class="avatar me-2">
                                                            <img src="{{asset('dashboard/assets')}}/img/profiles/avatar-08.jpg" alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                          <h6 class="fs-14 mb-1"><a href="javascript:void(0);" class="fw-medium">Carol Lam</a></h6>
                                                          <p class="mb-0 fs-13">+1 55654 56647</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>25 May 2025 - 02:40 PM</td>
                                                <td>In-Person</td>
                                                <td><span class="badge bg-danger fw-medium">Cancelled</span></td>
                                                <td class="fw-semibold text-dark">$450</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1">
                                                        <i class="ti ti-calendar-plus"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" data-bs-toggle="dropdown" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu p-2">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#edit_appointment"><i class="ti ti-edit me-2"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="javascript:void(0);" class="avatar me-2">
                                                            <img src="{{asset('dashboard/assets')}}/img/profiles/avatar-22.jpg" alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                          <h6 class="fs-14 mb-1"><a href="javascript:void(0);" class="fw-medium">Marsha Noland</a></h6>
                                                          <p class="mb-0 fs-13">+1 65668 54558</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>24 May 2025 - 11:30 AM</td>
                                                <td>In-Person</td>
                                                <td><span class="badge bg-info fw-medium">Schedule</span></td>
                                                <td class="fw-semibold text-dark">$310</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1">
                                                        <i class="ti ti-calendar-plus"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" data-bs-toggle="dropdown" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu p-2">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#edit_appointment"><i class="ti ti-edit me-2"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="javascript:void(0);" class="avatar me-2">
                                                            <img src="{{asset('dashboard/assets')}}/img/profiles/avatar-25.jpg" alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                          <h6 class="fs-14 mb-1"><a href="javascript:void(0);" class="fw-medium">John Elsass</a></h6>
                                                          <p class="mb-0 fs-13">47851263</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>23 May 2025 - 04:10 PM</td>
                                                <td>Online</td>
                                                <td><span class="badge bg-info fw-medium">Schedule</span></td>
                                                <td class="fw-semibold text-dark">$400</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1">
                                                        <i class="ti ti-calendar-plus"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" data-bs-toggle="dropdown" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu p-2">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#edit_appointment"><i class="ti ti-edit me-2"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
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
                    </div>
                </div>
                <!-- row end -->

                <!-- row start -->
                <div class="row">

                    <!-- col start -->
                    <div class="col-xl-4 d-flex">
                        <div class="card shadow-sm flex-fill w-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0">Availability</h5>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="btn btn-sm px-2 border shadow-sm btn-outline-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                        Trustcare Clinic <i class="ti ti-chevron-down ms-1"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);">CureWell Medical Hub</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);">Trustcare Clinic</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);">NovaCare Medical</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);">Greeny Medical Clinic</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-2 border-bottom pb-2">
                                    <p class="text-dark fw-semibold mb-0">Mon</p>
                                    <p class="mb-0 d-inline-flex align-items-center"><i class="ti ti-clock me-1"></i>11:00 PM - 12:30 PM</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2 border-bottom pb-2">
                                    <p class="text-dark fw-semibold mb-0">Tue</p>
                                    <p class="mb-0 d-inline-flex align-items-center"><i class="ti ti-clock me-1"></i>11:00 PM - 12:30 PM</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2 border-bottom pb-2">
                                    <p class="text-dark fw-semibold mb-0">Wed</p>
                                    <p class="mb-0 d-inline-flex align-items-center"><i class="ti ti-clock me-1"></i>11:00 PM - 12:30 PM</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2 border-bottom pb-2">
                                    <p class="text-dark fw-semibold mb-0">Thu</p>
                                    <p class="mb-0 d-inline-flex align-items-center"><i class="ti ti-clock me-1"></i>11:00 PM - 12:30 PM</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2 border-bottom pb-2">
                                    <p class="text-dark fw-semibold mb-0">Fri</p>
                                    <p class="mb-0 d-inline-flex align-items-center"><i class="ti ti-clock me-1"></i>11:00 PM - 12:30 PM</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2 border-bottom pb-2">
                                    <p class="text-dark fw-semibold mb-0">Sat</p>
                                    <p class="mb-0 d-inline-flex align-items-center"><i class="ti ti-clock me-1"></i>11:00 PM - 12:30 PM</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2 pb-2">
                                    <p class="text-dark fw-semibold mb-0">Sun</p>
                                    <p class="mb-0 d-inline-flex align-items-center text-danger"><i class="ti ti-clock me-1"></i>Closed</p>
                                </div>
                                <a href="javascript:void(0);" class="btn btn-light w-100 mt-2 fs-13">Edit Availability</a>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col-xl-4 col-lg-6 d-flex">
                        <div class="card shadow-sm flex-fill w-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0 text-truncate">Appointment Statistics</h5>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="btn btn-sm px-2 border shadow-sm btn-outline-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
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
                            <div class="card-body">
                                <div id="circle-chart-2" class="chart-set" style="min-height: 273px;"><div id="apexchartss8su93p2" class="apexcharts-canvas apexchartss8su93p2 apexcharts-theme-light" style="width: 279px; height: 273px;"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" width="279" height="273"><foreignObject x="0" y="0" width="279" height="273"><style type="text/css">.apexcharts-flip-y {
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
.apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {
  flex-wrap: wrap
}
.apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
  flex-direction: column;
  bottom: 0;
}
.apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
  justify-content: flex-start;
  align-items: flex-start;
}
.apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
  justify-content: center;
  align-items: center;
}
.apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
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
.apexcharts-legend-text *, .apexcharts-legend-marker * {
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
.apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
  display: none !important;
}
.apexcharts-inactive-legend {
  opacity: 0.45;
} </style></foreignObject><g class="apexcharts-inner apexcharts-graphical" transform="translate(4.5, 0)"><defs><clipPath id="gridRectMasks8su93p2"><rect width="276" height="276" x="-3" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectBarMasks8su93p2"><rect width="276" height="276" x="-3" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMasks8su93p2"><rect width="276" height="270" x="-3" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasks8su93p2"></clipPath><clipPath id="nonForecastMasks8su93p2"></clipPath></defs><g class="apexcharts-pie"><g transform="translate(0, 0) scale(1)"><circle r="94.28048780487805" cx="135" cy="135" fill="transparent"></circle><g class="apexcharts-slices"><g class="apexcharts-series apexcharts-pie-series" seriesName="Completed" rel="1" data:realIndex="0"><path d="M 135 9.292682926829258 A 125.70731707317074 125.70731707317074 0 1 1 15.445236951579957 96.15430270711022 L 45.33392771368497 105.86572703033266 A 94.28048780487805 94.28048780487805 0 1 0 135 40.71951219512195 L 135 9.292682926829258 z " fill="rgba(39,174,96,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="288" data:startAngle="0" data:strokeWidth="2" data:value="80" data:pathOrig="M 135 9.292682926829258 A 125.70731707317074 125.70731707317074 0 1 1 15.445236951579957 96.15430270711022 L 45.33392771368497 105.86572703033266 A 94.28048780487805 94.28048780487805 0 1 0 135 40.71951219512195 L 135 9.292682926829258 z "></path></g><g class="apexcharts-series apexcharts-pie-series" seriesName="Pending" rel="2" data:realIndex="1"><path d="M 15.445236951579957 96.15430270711022 A 125.70731707317074 125.70731707317074 0 0 1 61.11109291913641 33.300644170524905 L 79.58331968935231 58.72548312789368 A 94.28048780487805 94.28048780487805 0 0 0 45.33392771368497 105.86572703033266 L 15.445236951579957 96.15430270711022 z " fill="rgba(226,185,59,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="36" data:startAngle="288" data:strokeWidth="2" data:value="10" data:pathOrig="M 15.445236951579957 96.15430270711022 A 125.70731707317074 125.70731707317074 0 0 1 61.11109291913641 33.300644170524905 L 79.58331968935231 58.72548312789368 A 94.28048780487805 94.28048780487805 0 0 0 45.33392771368497 105.86572703033266 L 15.445236951579957 96.15430270711022 z "></path></g><g class="apexcharts-series apexcharts-pie-series" seriesName="Cancelled" rel="3" data:realIndex="2"><path d="M 61.11109291913641 33.300644170524905 A 125.70731707317074 125.70731707317074 0 0 1 134.9780599343436 9.292684841461181 L 134.9835449507577 40.71951363109589 A 94.28048780487805 94.28048780487805 0 0 0 79.58331968935231 58.72548312789368 L 61.11109291913641 33.300644170524905 z " fill="rgba(239,30,30,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="36" data:startAngle="324" data:strokeWidth="2" data:value="10" data:pathOrig="M 61.11109291913641 33.300644170524905 A 125.70731707317074 125.70731707317074 0 0 1 134.9780599343436 9.292684841461181 L 134.9835449507577 40.71951363109589 A 94.28048780487805 94.28048780487805 0 0 0 79.58331968935231 58.72548312789368 L 61.11109291913641 33.300644170524905 z "></path></g></g></g></g><line x1="0" y1="0" x2="270" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line x1="0" y1="0" x2="270" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g><g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-dark"><div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-0" style="order: 1;"><span class="apexcharts-tooltip-marker" shape="circle" style="background-color: rgb(39, 174, 96);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-1" style="order: 2;"><span class="apexcharts-tooltip-marker" shape="circle" style="background-color: rgb(226, 185, 59);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-2" style="order: 3;"><span class="apexcharts-tooltip-marker" shape="circle" style="background-color: rgb(239, 30, 30);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                <div class="d-flex align-items-center justify-content-center gap-2 mt-3">
                                    <div class="text-center">
                                        <p class="d-flex align-items-center mb-1 fs-13"><i class="ti ti-circle-filled text-success fs-10 me-1"></i>Completed</p>
                                        <h5 class="fw-bold mb-0">260</h5>
                                    </div>
                                    <div class="text-center">
                                        <p class="d-flex align-items-center mb-1 fs-13"><i class="ti ti-circle-filled text-warning fs-10 me-1"></i>Pending</p>
                                        <h5 class="fw-bold mb-0">21</h5>
                                    </div>
                                    <div class="text-center">
                                        <p class="d-flex align-items-center mb-1 fs-13"><i class="ti ti-circle-filled text-danger fs-10 me-1"></i>Cancelled</p>
                                        <h5 class="fw-bold mb-0">50</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col-xl-4 col-lg-6 d-flex">
                        <div class="card shadow-sm flex-fill w-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0">Top Patients</h5>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="btn btn-sm px-2 border shadow-sm btn-outline-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
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
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                            <img src="{{asset('dashboard/assets')}}/img/profiles/avatar-06.jpg" alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                          <h6 class="fs-14 mb-1 text-truncate"><a href="javascript:void(0);" class="fw-medium">Alberto Ripley</a></h6>
                                          <p class="mb-0 fs-13 text-truncate">+1 56556 54565</p>
                                        </div>
                                    </div>
                                    <span class="badge fw-medium badge-soft-primary border border-primary flex-shrink-0">20 Appointments</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                            <img src="{{asset('dashboard/assets')}}/img/profiles/avatar-12.jpg" alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                          <h6 class="fs-14 mb-1 text-truncate"><a href="javascript:void(0);" class="fw-medium">Susan Babin</a></h6>
                                          <p class="mb-0 fs-13 text-truncate">+1 65658 95654</p>
                                        </div>
                                    </div>
                                    <span class="badge fw-medium badge-soft-primary border border-primary flex-shrink-0">18 Appointments</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                            <img src="{{asset('dashboard/assets')}}/img/profiles/avatar-08.jpg" alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                          <h6 class="fs-14 mb-1 text-truncate"><a href="javascript:void(0);" class="fw-medium">Carol Lam</a></h6>
                                          <p class="mb-0 fs-13 text-truncate">+1 55654 56647</p>
                                        </div>
                                    </div>
                                    <span class="badge fw-medium badge-soft-primary border border-primary flex-shrink-0">16 Appointments</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                            <img src="{{asset('dashboard/assets')}}/img/profiles/avatar-22.jpg" alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                          <h6 class="fs-14 mb-1 text-truncate"><a href="javascript:void(0);" class="fw-medium">Marsha Noland</a></h6>
                                          <p class="mb-0 fs-13 text-truncate">+1 65668 54558</p>
                                        </div>
                                    </div>
                                    <span class="badge fw-medium badge-soft-primary border border-primary flex-shrink-0">14 Appointments</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-0">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                            <img src="{{asset('dashboard/assets')}}/img/profiles/avatar-17.jpg" alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                          <h6 class="fs-14 mb-1 text-truncate"><a href="javascript:void(0);" class="fw-medium">Irma Armstrong</a></h6>
                                          <p class="mb-0 fs-13 text-truncate">+1 45214 66568</p>
                                        </div>
                                    </div>
                                    <span class="badge fw-medium badge-soft-primary border border-primary flex-shrink-0">12 Appointments</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                </div>
                <!-- row end -->

            </div>

                 <!-- Start Add New Appointment -->
     <div class="offcanvas offcanvas-offset offcanvas-end" tabindex="-1" id="new_appointment">
        <div class="offcanvas-header d-block pb-0 px-0">
            <div class="border-bottom d-flex align-items-center justify-content-between pb-3 px-3">
                <h5 class="offcanvas-title fs-18 fw-bold">New Appointment</h5>
                <button type="button" class="btn-close custom-btn-close opacity-100" data-bs-dismiss="offcanvas" aria-label="Close"></button></div>
        </div>
        <div class="offcanvas-body pt-3">
            <form action="#">
                <!-- start row-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Appointment ID <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control rounded bg-light" value="AP234354">
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Patient<span class="text-danger">*</span></label>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle form-control rounded d-flex align-items-center justify-content-between border" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                    Select
                                </a>
                                <div class="dropdown-menu shadow-lg w-100 dropdown-info">
                                    <div class="mb-3">
                                        <div class="input-icon-start position-relative">
                                            <span class="input-icon-addon fs-12">
                                                <i class="ti ti-search"></i>
                                            </span>
                                            <input type="text" class="form-control form-control-sm" placeholder="Search">
                                        </div>
                                    </div>
                                    <ul class="mb-3 list-style-none">
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img src="assets/img/users/user-02.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>Emily Clark
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img src="assets/img/profiles/avatar-01.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>John Carter
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img src="assets/img/profiles/avatar-16.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>Sophia White
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img src="assets/img/profiles/avatar-15.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>Michael Johnson
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img src="assets/img/profiles/avatar-14.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>Olivia Harris
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img src="assets/img/profiles/avatar-01.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>David Anderson
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Appointment Type <span class="text-danger">*</span></label>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle form-control rounded d-flex align-items-center justify-content-between border" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                    Select
                                </a>
                                <div class="dropdown-menu shadow-lg w-100 dropdown-info">
                                    <div class="mb-3">
                                        <div class="input-icon-start position-relative">
                                            <span class="input-icon-addon fs-12">
                                                <i class="ti ti-search"></i>
                                            </span>
                                            <input type="text" class="form-control form-control-sm" placeholder="Select">
                                        </div>
                                    </div>
                                    <ul class="mb-3 list-style-none">
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
                            <label class="form-label mb-1 text-dark fs-14 fw-medium"> Date of Appointment <span class="text-danger">*</span></label>
                            <div class="input-icon-end position-relative">
                                <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                <span class="input-icon-addon">
                                    <i class="ti ti-calendar"></i>
                                </span>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium"> Time <span class="text-danger">*</span></label>
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
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Status<span class="text-danger">*</span></label>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle form-control rounded d-flex align-items-center justify-content-between border" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                    Select
                                </a>
                                <div class="dropdown-menu shadow-lg w-100 dropdown-info">
                                    <div class="mb-3">
                                        <div class="input-icon-start position-relative">
                                            <span class="input-icon-addon fs-12">
                                                <i class="ti ti-search"></i>
                                            </span>
                                            <input type="text" class="form-control form-control-sm" placeholder="Select">
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
                <button data-bs-dismiss="offcanvas" class="btn btn-primary btm-md" id="filter-submit">Create Create Appointment</button>
            </div>
        </div>
    </div>
    <!-- End Add New Appointment-->

    <!-- Start Edit New Appointment -->
    <div class="offcanvas offcanvas-offset offcanvas-end" tabindex="-1" id="edit_appointment">
        <div class="offcanvas-header d-block pb-0 px-0">
            <div class="border-bottom d-flex align-items-center justify-content-between pb-3 px-3">
                <h5 class="offcanvas-title fs-18 fw-bold"> Edit Appointment</h5>
                <button type="button" class="btn-close custom-btn-close opacity-100" data-bs-dismiss="offcanvas" aria-label="Close"><i class="ti ti-x bg-white fs-16 text-dark"></i></button></div>
        </div>
        <div class="offcanvas-body pt-3">
            <form action="#">
                <!-- start row-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Appointment ID <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control rounded bg-light" value="AP234354">
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Patient<span class="text-danger">*</span></label>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle form-control rounded d-flex align-items-center justify-content-between border" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                    Emily Clark
                                </a>
                                <div class="dropdown-menu shadow-lg w-100 dropdown-info">
                                    <div class="mb-3">
                                        <div class="input-icon-start position-relative">
                                            <span class="input-icon-addon fs-12">
                                                <i class="ti ti-search"></i>
                                            </span>
                                            <input type="text" class="form-control form-control-sm" placeholder="Search">
                                        </div>
                                    </div>
                                    <ul class="mb-3 list-style-none">
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img src="assets/img/users/user-02.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>Emily Clark
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img src="assets/img/profiles/avatar-01.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>John Carter
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img src="assets/img/profiles/avatar-16.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>Sophia White
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img src="assets/img/profiles/avatar-15.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>Michael Johnson
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img src="assets/img/profiles/avatar-14.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>Olivia Harris
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img src="assets/img/profiles/avatar-01.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>David Anderson
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Appointment Type <span class="text-danger">*</span></label>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle form-control rounded d-flex align-items-center justify-content-between border" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                    In Person
                                </a>
                                <div class="dropdown-menu shadow-lg w-100 dropdown-info">
                                    <div class="mb-3">
                                        <div class="input-icon-start position-relative">
                                            <span class="input-icon-addon fs-12">
                                                <i class="ti ti-search"></i>
                                            </span>
                                            <input type="text" class="form-control form-control-sm" placeholder="Select">
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
                            <label class="form-label mb-1 text-dark fs-14 fw-medium"> Date of Appointment <span class="text-danger">*</span></label>
                            <div class="input-icon-end position-relative">
                                <input type="text" class="form-control datetimepicker" placeholder="20/08/2025">
                                <span class="input-icon-addon">
                                    <i class="ti ti-calendar"></i>
                                </span>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium"> Time <span class="text-danger">*</span></label>
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
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Status<span class="text-danger">*</span></label>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle form-control rounded d-flex align-items-center justify-content-between border" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                    Checked Out
                                </a>
                                <div class="dropdown-menu shadow-lg w-100 dropdown-info">
                                    <div class="mb-3">
                                        <div class="input-icon-start position-relative">
                                            <span class="input-icon-addon fs-12">
                                                <i class="ti ti-search"></i>
                                            </span>
                                            <input type="text" class="form-control form-control-sm" placeholder="Select">
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
                <button data-bs-dismiss="offcanvas" class="btn btn-primary btm-md" id="filter-submit2">Create Create Appointment</button>
            </div>
        </div>
    </div>
    <!-- End Edit New Appointment-->

    <!-- Start View Details -->
    <div class="offcanvas offcanvas-offset offcanvas-end" tabindex="-1" id="view_details">
        <div class="offcanvas-header d-block pb-0 px-0">
            <div class="border-bottom d-flex align-items-center justify-content-between pb-3 px-3">
                <h5 class="offcanvas-title fs-18 fw-bold">Appointment Details <span class="badge badge-soft-primary border pt-1 px-2 border-primary fw-medium ms-2">#AP544658</span></h5>
                <button type="button" class="btn-close custom-btn-close opacity-100" data-bs-dismiss="offcanvas" aria-label="Close"><i class="ti ti-x bg-white fs-16 text-dark"></i></button>            </div>
        </div>
        <div class="offcanvas-body pt-0 px-0">
            <h6 class="bg-light py-2 px-3 text-dark fw-bold"> When & Where </h6>
            <div class="px-3 my-4">
                <p class="text-dark mb-3 fw-semibold d-flex align-items-center justify-content-between"> Appointment On <span class="text-body fw-normal"> Saturday, 25 Apr 2025  </span> </p>
                <p class="text-dark mb-3 fw-semibold d-flex align-items-center justify-content-between"> Time <span class="text-body fw-normal"> 09:00 AM - 11:00 AM  </span> </p>
                <p class="text-dark mb-3 fw-semibold d-flex align-items-center justify-content-between"> Location <span class="text-body fw-normal">Newyork , USA   </span> </p>
                <p class="text-dark mb-3 fw-semibold d-flex align-items-center justify-content-between"> Appointment Type <span class="text-body fw-normal"> Online Consultation </span> </p>
                <div class="text-dark mb-3 fw-semibold d-flex align-items-center justify-content-between"> Patient Details
                    <div class="text-body fw-normal d-flex align-items-center">
                        <span class="avatar avatar-sm">
                            <img src="assets/img/users/avatar-2.jpg" alt="" class="rounded-circle me-1">
                        </span>
                        James Adrian
                    </div>
                </div>
            </div>
            <h6 class="bg-light py-2 px-3 text-dark fw-bold"> Appointment Details  </h6>
            <div class="px-3 my-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div class="d-flex align-items-center">
                        Telehealth
                        <label class="d-flex align-items-center form-switch ps-1">
                            <input class="form-check-input m-0 me-2" type="checkbox" checked>
                        </label>
                    </div>
                    <div>  <a href="online-consulation.html" class="btn-primary btn btn-sm rounded d-flex align-items-center"> <i class="ti ti-video me-1"></i> Start </a></div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <p class="text-dark"> Status </p>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="mb-3">
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle form-control rounded d-flex align-items-center justify-content-between border" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                    Pending
                                </a>
                                <div class="dropdown-menu shadow-lg w-100 dropdown-info">
                                    <div class="mb-3">
                                        <div class="input-icon-start position-relative">
                                            <span class="input-icon-addon fs-12">
                                                <i class="ti ti-search"></i>
                                            </span>
                                            <input type="text" class="form-control form-control-sm" placeholder="Select">
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

    <!-- Start Delete Modal  -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center position-relative">
                    <img src="assets/img/bg/delete-modal-bg-01.png" alt="" class="img-fluid position-absolute top-0 start-0 z-0">
                    <img src="assets/img/bg/delete-modal-bg-02.png" alt="" class="img-fluid position-absolute bottom-0 end-0 z-0">
                    <div class="mb-3 position-relative z-1">
                        <span class="avatar avatar-lg bg-danger text-white"><i class="ti ti-trash fs-24"></i></span>
                    </div>
                    <h5 class="fw-bold mb-1 position-relative z-1">Delete Confirmation</h5>
                    <p class="mb-3 position-relative z-1">Are you sure want to delete?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light position-relative z-1 me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="#" class="btn btn-danger position-relative z-1" data-bs-dismiss="modal">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Delete Modal  -->


</x-app-layout>


