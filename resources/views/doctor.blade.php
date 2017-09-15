@include('doctor.header')
    <body>
        <div class="be-wrapper be-fixed-sidebar">
            
            @include('doctor.topbar')
            
            @include('doctor.left')
            <div class="be-content">
                <div class="main-content container-fluid">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-lg-3">
                            <div class="widget widget-tile">
                                <div id="spark1" class="chart sparkline"></div>
                                <div class="data-info">
                                    <div class="desc">New Users</div>
                                    <div class="value"><span class="indicator indicator-equal mdi mdi-chevron-right"></span><span data-toggle="counter" data-end="113" class="number">0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3">
                            <div class="widget widget-tile">
                                <div id="spark2" class="chart sparkline"></div>
                                <div class="data-info">
                                    <div class="desc">Monthly Sales</div>
                                    <div class="value"><span class="indicator indicator-positive mdi mdi-chevron-up"></span><span data-toggle="counter" data-end="80" data-suffix="%" class="number">0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3">
                            <div class="widget widget-tile">
                                <div id="spark3" class="chart sparkline"></div>
                                <div class="data-info">
                                    <div class="desc">Impressions</div>
                                    <div class="value"><span class="indicator indicator-positive mdi mdi-chevron-up"></span><span data-toggle="counter" data-end="532" class="number">0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3">
                            <div class="widget widget-tile">
                                <div id="spark4" class="chart sparkline"></div>
                                <div class="data-info">
                                    <div class="desc">Downloads</div>
                                    <div class="value"><span class="indicator indicator-negative mdi mdi-chevron-down"></span><span data-toggle="counter" data-end="113" class="number">0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">Latest Activity</div>
                                <div class="panel-body">
                                    <ul class="user-timeline user-timeline-compact">
                                        <li class="latest">
                                            <div class="user-timeline-date">Just Now</div>
                                            <div class="user-timeline-title">Create New Page</div>
                                            <div class="user-timeline-description">Vestibulum lectus nulla, maximus in eros non, tristique.</div>
                                        </li>
                                        <li>
                                            <div class="user-timeline-date">Today - 15:35</div>
                                            <div class="user-timeline-title">Back Up Theme</div>
                                            <div class="user-timeline-description">Vestibulum lectus nulla, maximus in eros non, tristique.</div>
                                        </li>
                                        <li>
                                            <div class="user-timeline-date">Yesterday - 10:41</div>
                                            <div class="user-timeline-title">Changes In The Structure</div>
                                            <div class="user-timeline-description">Vestibulum lectus nulla, maximus in eros non, tristique.      </div>
                                        </li>
                                        <li>
                                            <div class="user-timeline-date">Yesterday - 3:02</div>
                                            <div class="user-timeline-title">Fix the Sidebar</div>
                                            <div class="user-timeline-description">Vestibulum lectus nulla, maximus in eros non, tristique.</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="widget be-loading">
                                <div class="widget-head">
                                    <div class="tools"><span class="icon mdi mdi-chevron-down"></span><span class="icon mdi mdi-refresh-sync toggle-loading"></span><span class="icon mdi mdi-close"></span></div>
                                    <div class="title">Conversions</div>
                                </div>
                                <div class="widget-chart-container">
                                    <div class="widget-chart-info xs-mb-20">
                                        <div class="indicator indicator-positive pull-right"><span class="icon mdi mdi-chevron-up"></span><span class="number">15%</span></div>
                                        <div class="counter counter-inline">
                                            <div class="value">156k</div>
                                            <div class="desc">Impressions</div>
                                        </div>
                                    </div>
                                    <div id="map-widget" style="height: 265px;"></div>
                                </div>
                                <div class="be-spinner">
                                    <svg width="40px" height="40px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                                        <circle fill="none" stroke-width="4" stroke-linecap="round" cx="33" cy="33" r="30" class="circle"></circle>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('doctor.footer')
    </body>
</html>