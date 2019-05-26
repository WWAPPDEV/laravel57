@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
UNITY DASH
@parent
@stop

{{-- page level styles --}}
@section('header_styles')


<link rel="stylesheet" href="{{ asset('vendors/animate/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/pages/only_dashboard.css') }}"/>
<meta name="_token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('vendors/morrisjs/morris.css') }}">
<link rel="stylesheet" href="{{ asset('css/pages/dashboard2.css') }}"/>
<link rel="stylesheet" href="{{ asset('vendors/animate/animate.min.css') }}">
<style>
   .list_of_items{
        overflow: auto;
        height:20px;
    }
</style>

{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>Unity Dashboard   <span class="d-none d-md-inline-block header_info">( Dynamic Dashboard )</span></h1>
    <ol class="breadcrumb">
        <li class=" breadcrumb-item active">
            <a href="#">
                <i class="livicon" data-name="home" data-size="16" data-color="#333" data-hovercolor="#333"></i>
                Dashboard
            </a>
        </li>
    </ol>
</section>

<!--</section>-->
<section class="content">
    <div class="row">
        <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 margin_10 animated fadeInLeftBig">
            <!-- Trans label pie charts strats here-->
            <div class="widget-1">
                <div class="card-body squarebox square_boxs">
                    <div class="col-12 float-left nopadmar">
                        <div class="row">
                            <div class="square_box col-6 text-right">
                                <span>Visitors</span>

                                <div class="number" id="myTargetElement3"></div>
                            </div>
                            <div class="col-6">
                            <span class="widget_circle3 float-right">
                            <i class="livicon livicon-evo-holder " data-name="eye-open" data-l="true" data-c="#01BC8C"
                                 data-hc="#01BC8C" data-s="40"></i>
                                </span>

                        </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-3  col-md-6 col-sm-6 margin_10 animated fadeInLeftBig">
            <!-- Trans label pie charts strats here-->
            <div class="widget-1">
                <div class="card-body squarebox square_boxs">
                    <div class="col-12 float-left nopadmar">
                        <div class="row">
                            <div class="square_box col-6 text-right">
                                <span>Users</span>

                                <div class="number" id="myTargetElement4"></div>
                            </div>
                            <div class="col-6">
                            <span class="widget_circle4 float-right">
                            <i class="livicon livicon-evo-holder " data-name="user" data-l="true" data-c="#F89A14"
                                data-hc="#F89A14" data-s="40"></i>
                                </span>

                        </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 margin_10 animated fadeInRightBig">
            <!-- Trans label pie charts strats here-->
            <div class="widget-1">
                <div class="card-body squarebox square_boxs">
                    <div class="col-12 float-left nopadmar">
                        <div class="row">
                            <div class="square_box col-6 text-right">
                                <span>Page Views</span>

                                <div class="number" id="myTargetElement1"></div>
                            </div>
                            <div class="col-6">
                            <span class="widget_circle1 float-right">
                         <i class="livicon livicon-evo-holder " data-name="flag" data-l="true" data-c="#e9573f"
                            data-hc="#e9573f" data-s="40"></i>
                                </span>

                        </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 margin_10 animated fadeInRightBig">
            <!-- Trans label pie charts strats here-->
            <div class="widget-1">
                <div class="card-body squarebox square_boxs">
                    <div class="col-12 float-left nopadmar">
                        <div class="row">
                            <div class="square_box col-6 text-right">
                                <span>Articles</span>

                                <div class="number" id="myTargetElement2"></div>
                            </div>
                            <div class="col-6">
                            <span class="widget_circle2 float-right">
 <i class="livicon livicon-evo-holder " data-name="pen" data-l="true" data-c="#418BCA"
    data-hc="#418BCA" data-s="40"></i>
                                </span>

                        </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--/row-->
<section class="content paddingleft_right15">
    <div class="row">
        <div class="col-12">
        <div class="card panel-primary ">
            <div class="card-heading">
                <h4 class="card-title my-2 float-left"> <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    Users List
                </h4>
                 <a href="{{ URL('admin/bulk_import_users') }}" class="pull-right btn btn-success import_btn">
                                <i class="fa fa-plus fa-fw"></i>Bulk Import</a>
            </div>
            <div class="card-body">
                <div class="table-responsive-lg table-responsive-sm table-responsive-md">
                <table class="table table-bordered width100" id="table">
                    <thead>
                        <tr class="filters">
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>User E-mail</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>       
                    </thead>
                    <tbody>


                 </tbody>
                </table>
                </div>
            </div>
        </div>
    <!--/row-->
    <div class="row">
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-8 col-12 my-3">
            <div class="card panel-border">
                <div class="card-heading">
                    <h3 class="card-title">
                        <i class="livicon" data-name="dashboard" data-size="20" data-loop="true" data-c="#F89A14"
                           data-hc="#F89A14"></i>
                        Realtime Server Load
                        <small>- Load on the Server</small>
                    </h3>
                </div>
                <div class="card-body">
                    <div id="realtimechart" style="height:350px;"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4 col-12 my-3">
            <div class="card blue_gradiant_bg">
                <div class="card-heading">
                    <h3 class="card-title card_font">
                        <i class="livicon" data-name="linechart" data-size="16" data-loop="true" data-c="#fff"
                           data-hc="white"></i>
                        Server Stats
                        <small class="white-text">- Monthly Report</small>
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6 col-12">
                            <div class="sparkline-chart">
                                <div class="number" id="sparkline_bar"></div>
                                <h3 class="title">Network</h3>
                            </div>
                        </div>
                        <div class="margin-bottom-10 visible-sm"></div>
                        <div class="margin-bottom-10 visible-sm"></div>
                        <div class="col-sm-6">
                            <div class="sparkline-chart">
                                <div class="number" id="sparkline_line"></div>
                                <h3 class="title">Load Rate</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- BEGIN Percentage monitor -->
            <div class="card green_gradiante_bg">
                <div class="card-heading">
                    <h3 class="card-title card_font">
                        <i class="livicon" data-name="spinner-six" data-size="16" data-loop="false" data-c="#fff"
                           data-hc="white"></i>
                        Result vs Target
                    </h3>
                </div>
                <div class="card-body nopadmar">
                    <div class="row">
                        <div class="col-sm-6 text-center">
                            <h4 class="small-heading">Sales</h4>
                            <span class="chart cir chart-widget-pie widget-easy-pie-1" data-percent="45"><span
                                    class="percent">45</span>
                            </span>
                        </div>
                        <!-- /.col-sm-4 -->
                        <div class="col-sm-6 text-center">
                            <h4 class="small-heading">Reach</h4>
                            <span class="chart cir chart-widget-pie widget-easy-pie-3" data-percent="25">
                                <span class="percent">25</span>
                            </span>
                        </div>
                        <!-- /.col-sm-4 -->
                    </div>

                    <!-- /.row -->
            <!-- BEGIN Percentage monitor -->
            <div class="card green_gradiante_bg">
                <div class="card-heading">
                    <h3 class="card-title card_font">
                        <i class="livicon" data-name="spinner-six" data-size="16" data-loop="false" data-c="#fff"
                           data-hc="white"></i>
                        Result vs Target
                    </h3>
                </div>
                <div class="card-body nopadmar">
                    <div class="row">
                        <div class="col-sm-6 text-center">
                            <h4 class="small-heading">Sales</h4>
                            <span class="chart cir chart-widget-pie widget-easy-pie-1" data-percent="45"><span
                                    class="percent">45</span>
                            </span>
                        </div>
                        <!-- /.col-sm-4 -->
                        <div class="col-sm-6 text-center">
                            <h4 class="small-heading">Reach</h4>
                            <span class="chart cir chart-widget-pie widget-easy-pie-3" data-percent="25">
                                <span class="percent">25</span>
                            </span>
                        </div>
                        <!-- /.col-sm-4 -->
                    </div>

                    <!-- /.row -->
                </div>
                <!-- /.panel-body -->
            </div>
    </div>
    </div><!-- row-->
</section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
<script type="text/javascript" src="{{ asset('vendors/moment/js/moment.min.js') }}"></script>
<!--for calendar-->
<script src="{{ asset('vendors/moment/js/moment.min.js') }}" type="text/javascript"></script>
<!-- Back to Top-->
<script type="text/javascript" src="{{ asset('vendors/countUp.js/js/countUp.js') }}"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyADWjiTRjsycXf3Lo0ahdc7dDxcQb475qw&libraries=places"></script>
<script src="{{ asset('vendors/morrisjs/morris.min.js') }}"></script>
<!--   Realtime Server Load  -->
<script src="{{ asset('vendors/flotchart/js/jquery.flot.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendors/flotchart/js/jquery.flot.resize.js') }}" type="text/javascript"></script>

@stop
