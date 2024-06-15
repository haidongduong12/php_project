<html lang="en">

<head>
    <title>Ablepro v8.0 bootstrap admin template by Phoenixcoded</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded">
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('ablepro-master/assets/images/favicon.ico') }}" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('ablepro-master/dist/assets/css/style.css') }}">

    <style type="text/css">
        .apexcharts-canvas {
            position: relative;
            user-select: none;
            /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
        }

        /* scrollbar is not visible by default for legend, hence forcing the visibility */
        .apexcharts-canvas ::-webkit-scrollbar {
            -webkit-appearance: none;
            width: 6px;
        }

        .apexcharts-canvas ::-webkit-scrollbar-thumb {
            border-radius: 4px;
            background-color: rgba(0, 0, 0, .5);
            box-shadow: 0 0 1px rgba(255, 255, 255, .5);
            -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
        }

        .apexcharts-canvas.apexcharts-theme-dark {
            background: #343F57;
        }

        .apexcharts-inner {
            position: relative;
        }

        .apexcharts-text tspan {
            font-family: inherit;
        }

        .legend-mouseover-inactive {
            transition: 0.15s ease all;
            opacity: 0.20;
        }

        .apexcharts-series-collapsed {
            opacity: 0;
        }

        .apexcharts-gridline,
        .apexcharts-annotation-rect {
            pointer-events: none;
        }

        .apexcharts-tooltip {
            border-radius: 5px;
            box-shadow: 2px 2px 6px -4px #999;
            cursor: default;
            font-size: 14px;
            left: 62px;
            opacity: 0;
            pointer-events: none;
            position: absolute;
            top: 20px;
            overflow: hidden;
            white-space: nowrap;
            z-index: 12;
            transition: 0.15s ease all;
        }

        .apexcharts-tooltip.apexcharts-theme-light {
            border: 1px solid #e3e3e3;
            background: rgba(255, 255, 255, 0.96);
        }

        .apexcharts-tooltip.apexcharts-theme-dark {
            color: #fff;
            background: rgba(30, 30, 30, 0.8);
        }

        .apexcharts-tooltip * {
            font-family: inherit;
        }

        .apexcharts-tooltip .apexcharts-marker,
        .apexcharts-area-series .apexcharts-area,
        .apexcharts-line {
            pointer-events: none;
        }

        .apexcharts-tooltip.apexcharts-active {
            opacity: 1;
            transition: 0.15s ease all;
        }

        .apexcharts-tooltip-title {
            padding: 6px;
            font-size: 15px;
            margin-bottom: 4px;
        }

        .apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
            background: #ECEFF1;
            border-bottom: 1px solid #ddd;
        }

        .apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
            background: rgba(0, 0, 0, 0.7);
            border-bottom: 1px solid #333;
        }

        .apexcharts-tooltip-text-value,
        .apexcharts-tooltip-text-z-value {
            display: inline-block;
            font-weight: 600;
            margin-left: 5px;
        }

        .apexcharts-tooltip-text-z-label:empty,
        .apexcharts-tooltip-text-z-value:empty {
            display: none;
        }

        .apexcharts-tooltip-text-value,
        .apexcharts-tooltip-text-z-value {
            font-weight: 600;
        }

        .apexcharts-tooltip-marker {
            width: 12px;
            height: 12px;
            position: relative;
            top: 0px;
            margin-right: 10px;
            border-radius: 50%;
        }

        .apexcharts-tooltip-series-group {
            padding: 0 10px;
            display: none;
            text-align: left;
            justify-content: left;
            align-items: center;
        }

        .apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
            opacity: 1;
        }

        .apexcharts-tooltip-series-group.apexcharts-active,
        .apexcharts-tooltip-series-group:last-child {
            padding-bottom: 4px;
        }

        .apexcharts-tooltip-series-group-hidden {
            opacity: 0;
            height: 0;
            line-height: 0;
            padding: 0 !important;
        }

        .apexcharts-tooltip-y-group {
            padding: 6px 0 5px;
        }

        .apexcharts-tooltip-candlestick {
            padding: 4px 8px;
        }

        .apexcharts-tooltip-candlestick>div {
            margin: 4px 0;
        }

        .apexcharts-tooltip-candlestick span.value {
            font-weight: bold;
        }

        .apexcharts-tooltip-rangebar {
            padding: 5px 8px;
        }

        .apexcharts-tooltip-rangebar .category {
            font-weight: 600;
            color: #777;
        }

        .apexcharts-tooltip-rangebar .series-name {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .apexcharts-xaxistooltip {
            opacity: 0;
            padding: 9px 10px;
            pointer-events: none;
            color: #373d3f;
            font-size: 13px;
            text-align: center;
            border-radius: 2px;
            position: absolute;
            z-index: 10;
            background: #ECEFF1;
            border: 1px solid #90A4AE;
            transition: 0.15s ease all;
        }

        .apexcharts-xaxistooltip.apexcharts-theme-dark {
            background: rgba(0, 0, 0, 0.7);
            border: 1px solid rgba(0, 0, 0, 0.5);
            color: #fff;
        }

        .apexcharts-xaxistooltip:after,
        .apexcharts-xaxistooltip:before {
            left: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }

        .apexcharts-xaxistooltip:after {
            border-color: rgba(236, 239, 241, 0);
            border-width: 6px;
            margin-left: -6px;
        }

        .apexcharts-xaxistooltip:before {
            border-color: rgba(144, 164, 174, 0);
            border-width: 7px;
            margin-left: -7px;
        }

        .apexcharts-xaxistooltip-bottom:after,
        .apexcharts-xaxistooltip-bottom:before {
            bottom: 100%;
        }

        .apexcharts-xaxistooltip-top:after,
        .apexcharts-xaxistooltip-top:before {
            top: 100%;
        }

        .apexcharts-xaxistooltip-bottom:after {
            border-bottom-color: #ECEFF1;
        }

        .apexcharts-xaxistooltip-bottom:before {
            border-bottom-color: #90A4AE;
        }

        .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
            border-bottom-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
            border-bottom-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-xaxistooltip-top:after {
            border-top-color: #ECEFF1
        }

        .apexcharts-xaxistooltip-top:before {
            border-top-color: #90A4AE;
        }

        .apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
            border-top-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
            border-top-color: rgba(0, 0, 0, 0.5);
        }


        .apexcharts-xaxistooltip.apexcharts-active {
            opacity: 1;
            transition: 0.15s ease all;
        }

        .apexcharts-yaxistooltip {
            opacity: 0;
            padding: 4px 10px;
            pointer-events: none;
            color: #373d3f;
            font-size: 13px;
            text-align: center;
            border-radius: 2px;
            position: absolute;
            z-index: 10;
            background: #ECEFF1;
            border: 1px solid #90A4AE;
        }

        .apexcharts-yaxistooltip.apexcharts-theme-dark {
            background: rgba(0, 0, 0, 0.7);
            border: 1px solid rgba(0, 0, 0, 0.5);
            color: #fff;
        }

        .apexcharts-yaxistooltip:after,
        .apexcharts-yaxistooltip:before {
            top: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }

        .apexcharts-yaxistooltip:after {
            border-color: rgba(236, 239, 241, 0);
            border-width: 6px;
            margin-top: -6px;
        }

        .apexcharts-yaxistooltip:before {
            border-color: rgba(144, 164, 174, 0);
            border-width: 7px;
            margin-top: -7px;
        }

        .apexcharts-yaxistooltip-left:after,
        .apexcharts-yaxistooltip-left:before {
            left: 100%;
        }

        .apexcharts-yaxistooltip-right:after,
        .apexcharts-yaxistooltip-right:before {
            right: 100%;
        }

        .apexcharts-yaxistooltip-left:after {
            border-left-color: #ECEFF1;
        }

        .apexcharts-yaxistooltip-left:before {
            border-left-color: #90A4AE;
        }

        .apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
            border-left-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
            border-left-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-yaxistooltip-right:after {
            border-right-color: #ECEFF1;
        }

        .apexcharts-yaxistooltip-right:before {
            border-right-color: #90A4AE;
        }

        .apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
            border-right-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
            border-right-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-yaxistooltip.apexcharts-active {
            opacity: 1;
        }

        .apexcharts-yaxistooltip-hidden {
            display: none;
        }

        .apexcharts-xcrosshairs,
        .apexcharts-ycrosshairs {
            pointer-events: none;
            opacity: 0;
            transition: 0.15s ease all;
        }

        .apexcharts-xcrosshairs.apexcharts-active,
        .apexcharts-ycrosshairs.apexcharts-active {
            opacity: 1;
            transition: 0.15s ease all;
        }

        .apexcharts-ycrosshairs-hidden {
            opacity: 0;
        }

        .apexcharts-zoom-rect {
            pointer-events: none;
        }

        .apexcharts-selection-rect {
            cursor: move;
        }

        .svg_select_points,
        .svg_select_points_rot {
            opacity: 0;
            visibility: hidden;
        }

        .svg_select_points_l,
        .svg_select_points_r {
            cursor: ew-resize;
            opacity: 1;
            visibility: visible;
            fill: #888;
        }

        .apexcharts-canvas.apexcharts-zoomable .hovering-zoom {
            cursor: crosshair
        }

        .apexcharts-canvas.apexcharts-zoomable .hovering-pan {
            cursor: move
        }


        .apexcharts-zoom-icon,
        .apexcharts-zoomin-icon,
        .apexcharts-zoomout-icon,
        .apexcharts-reset-icon,
        .apexcharts-pan-icon,
        .apexcharts-selection-icon,
        .apexcharts-menu-icon,
        .apexcharts-toolbar-custom-icon {
            cursor: pointer;
            width: 20px;
            height: 20px;
            line-height: 24px;
            color: #6E8192;
            text-align: center;
        }


        .apexcharts-zoom-icon svg,
        .apexcharts-zoomin-icon svg,
        .apexcharts-zoomout-icon svg,
        .apexcharts-reset-icon svg,
        .apexcharts-menu-icon svg {
            fill: #6E8192;
        }

        .apexcharts-selection-icon svg {
            fill: #444;
            transform: scale(0.76)
        }

        .apexcharts-theme-dark .apexcharts-zoom-icon svg,
        .apexcharts-theme-dark .apexcharts-zoomin-icon svg,
        .apexcharts-theme-dark .apexcharts-zoomout-icon svg,
        .apexcharts-theme-dark .apexcharts-reset-icon svg,
        .apexcharts-theme-dark .apexcharts-pan-icon svg,
        .apexcharts-theme-dark .apexcharts-selection-icon svg,
        .apexcharts-theme-dark .apexcharts-menu-icon svg,
        .apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg {
            fill: #f3f4f5;
        }

        .apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
        .apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
        .apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
            fill: #008FFB;
        }

        .apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
        .apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
        .apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
        .apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
        .apexcharts-theme-light .apexcharts-reset-icon:hover svg,
        .apexcharts-theme-light .apexcharts-menu-icon:hover svg {
            fill: #333;
        }

        .apexcharts-selection-icon,
        .apexcharts-menu-icon {
            position: relative;
        }

        .apexcharts-reset-icon {
            margin-left: 5px;
        }

        .apexcharts-zoom-icon,
        .apexcharts-reset-icon,
        .apexcharts-menu-icon {
            transform: scale(0.85);
        }

        .apexcharts-zoomin-icon,
        .apexcharts-zoomout-icon {
            transform: scale(0.7)
        }

        .apexcharts-zoomout-icon {
            margin-right: 3px;
        }

        .apexcharts-pan-icon {
            transform: scale(0.62);
            position: relative;
            left: 1px;
            top: 0px;
        }

        .apexcharts-pan-icon svg {
            fill: #fff;
            stroke: #6E8192;
            stroke-width: 2;
        }

        .apexcharts-pan-icon.apexcharts-selected svg {
            stroke: #008FFB;
        }

        .apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
            stroke: #333;
        }

        .apexcharts-toolbar {
            position: absolute;
            z-index: 11;
            top: 0px;
            right: 3px;
            max-width: 176px;
            text-align: right;
            border-radius: 3px;
            padding: 0px 6px 2px 6px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .apexcharts-toolbar svg {
            pointer-events: none;
        }

        .apexcharts-menu {
            background: #fff;
            position: absolute;
            top: 100%;
            border: 1px solid #ddd;
            border-radius: 3px;
            padding: 3px;
            right: 10px;
            opacity: 0;
            min-width: 110px;
            transition: 0.15s ease all;
            pointer-events: none;
        }

        .apexcharts-menu.apexcharts-menu-open {
            opacity: 1;
            pointer-events: all;
            transition: 0.15s ease all;
        }

        .apexcharts-menu-item {
            padding: 6px 7px;
            font-size: 12px;
            cursor: pointer;
        }

        .apexcharts-theme-light .apexcharts-menu-item:hover {
            background: #eee;
        }

        .apexcharts-theme-dark .apexcharts-menu {
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
        }

        @media screen and (min-width: 768px) {

            .apexcharts-canvas:hover .apexcharts-toolbar {
                opacity: 1;
            }
        }

        .apexcharts-datalabel.apexcharts-element-hidden {
            opacity: 0;
        }

        .apexcharts-pie-label,
        .apexcharts-datalabels,
        .apexcharts-datalabel,
        .apexcharts-datalabel-label,
        .apexcharts-datalabel-value {
            cursor: default;
            pointer-events: none;
        }

        .apexcharts-pie-label-delay {
            opacity: 0;
            animation-name: opaque;
            animation-duration: 0.3s;
            animation-fill-mode: forwards;
            animation-timing-function: ease;
        }

        .apexcharts-canvas .apexcharts-element-hidden {
            opacity: 0;
        }

        .apexcharts-hide .apexcharts-series-points {
            opacity: 0;
        }

        .apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
        .apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
        .apexcharts-radar-series path,
        .apexcharts-radar-series polygon {
            pointer-events: none;
        }

        /* markers */

        .apexcharts-marker {
            transition: 0.15s ease all;
        }

        @keyframes opaque {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        /* Resize generated styles */
        @keyframes resizeanim {
            from {
                opacity: 0;
            }

            to {
                opacity: 0;
            }
        }

        .resize-triggers {
            animation: 1ms resizeanim;
            visibility: hidden;
            opacity: 0;
        }

        .resize-triggers,
        .resize-triggers>div,
        .contract-trigger:before {
            content: " ";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            overflow: hidden;
        }

        .resize-triggers>div {
            background: #eee;
            overflow: auto;
        }

        .contract-trigger:before {
            width: 200%;
            height: 200%;
        }
    </style>


    <script src="chrome-extension://mooikfkahbdckldjjndioackbalphokd/assets/prompt.js"></script>
    @vite(['resources/js/app.js'])

</head>


<body class="">
    <!-- [ Pre-loader ] start -->

    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar menu-light">
        <div class="navbar-wrapper  ">
            <div class="navbar-content scroll-div ps">

                <div class="">
                    <div class="main-menu-header">
                        <img class="img-radius" src="{{ asset('ablepro-master/dist') }}/assets/images/user/avatar-2.jpg"
                            alt="User-Profile-Image">
                        <div class="user-details">
                            <div id="more-details">UX Designer <i class="fa fa-caret-down"></i></div>
                        </div>
                    </div>
                    <div class="collapse" id="nav-user-link">
                        <ul class="list-unstyled">
                            <li class="list-group-item"><a href="user-profile.html"><i
                                        class="feather icon-user m-r-5"></i>View Profile</a></li>
                            <li class="list-group-item"><a href="#!"><i
                                        class="feather icon-settings m-r-5"></i>Settings</a></li>
                            <li class="list-group-item"><a href="auth-normal-sign-in.html"><i
                                        class="feather icon-log-out m-r-5"></i>Logout</a></li>
                        </ul>
                    </div>
                </div>

                <ul class="nav pcoded-inner-navbar ">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Navigation</label>
                    </li>
                    <li class="nav-item active">
                        <a href="{{ route('dashboard') }}" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link has-ripple"><span class="pcoded-micon"><i
                                    class="feather icon-layout"></i></span><span class="pcoded-mtext">Page
                                layouts</span><span class="ripple ripple-animate"
                                style="height: 210px; width: 210px; animation-duration: 0.7s; animation-timing-function: linear; background: rgb(70, 128, 255); opacity: 0.4; top: -83.5px; left: 42px;"></span></a>
                        <ul class="pcoded-submenu" style="display: none;">
                            <li class="pcoded-trigger"><a href="{{ route('users.index') }}"
                                    class="has-ripple">Users<span class="ripple ripple-animate"
                                        style="height: 230px; width: 230px; animation-duration: 0.7s; animation-timing-function: linear; background: rgb(70, 128, 255); opacity: 0.4; top: -85.5px; left: -17px;"></span></a>
                            </li>
                            <li><a href="{{ route('products.index') }}" class="nav-link">Products</a></li>
                            <li><a href="{{ route('categories.index') }}" class="nav-link">Categories</a></li>
                            <li><a href="{{ route('brands.index') }}">Brands</a></li>
                            <li><a href="{{ route('orders.index') }}">Orders</a></li>
                            <li><a href="{{ route('comment.showDash') }}">Comments</a></li>
                        </ul>
                    </li>


                    <li class="nav-item pcoded-menu-caption">
                        <label>Chart &amp; Maps</label>
                    </li>
                    <li class="nav-item">
                        <a href="chart-apex.html" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-pie-chart"></i></span><span
                                class="pcoded-mtext">Chart</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="map-google.html" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-map"></i></span><span class="pcoded-mtext">Maps</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Pages</label>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-lock"></i></span><span
                                class="pcoded-mtext">Authentication</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="auth-signup.html" target="_blank">Sign up</a></li>
                            <li><a href="auth-signin.html" target="_blank">Sign in</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="sample-page.html" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Sample
                                page</span></a></li>

                </ul>

                <div class="card text-center">
                    <div class="card-block">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <i class="feather icon-sunset f-40"></i>
                        <h6 class="mt-3">Download Pro</h6>
                        <p>Getting more features with pro version</p>
                        <a href="https://1.envato.market/qG0m5" target="_blank"
                            class="btn btn-primary btn-sm text-white m-0">Upgrade Now</a>
                    </div>
                </div>

                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; right: 0px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                </div>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->
    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">


        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            <a href="#!" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <img src="{{ asset('ablepro-master/dist') }}/assets/images/logo.png" alt="" class="logo">
                <img src="{{ asset('ablepro-master/dist') }}/assets/images/logo-icon.png" alt=""
                    class="logo-thumb">
            </a>
            <a href="#!" class="mob-toggler">
                <i class="feather icon-more-vertical"></i>
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
                    <div class="search-bar">
                        <input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
                        <button type="button" class="close" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i
                                class="icon feather icon-bell"></i></a>
                        <div class="dropdown-menu dropdown-menu-right notification">
                            <div class="noti-head">
                                <h6 class="d-inline-block m-b-0">Notifications</h6>
                                <div class="float-right">
                                    <a href="#!" class="m-r-10">mark as read</a>
                                    <a href="#!">clear all</a>
                                </div>
                            </div>
                            <ul class="noti-body ps">
                                <li class="n-title">
                                    <p class="m-b-0">NEW</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius"
                                            src="{{ asset('ablepro-master/dist') }}/assets/images/user/avatar-1.jpg"
                                            alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>John Doe</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>5 min</span></p>
                                            <p>New ticket Added</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="n-title">
                                    <p class="m-b-0">EARLIER</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius"
                                            src="{{ asset('ablepro-master/dist') }}/assets/images/user/avatar-2.jpg"
                                            alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Joseph William</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>10 min</span></p>
                                            <p>Prchace New Theme and make payment</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius"
                                            src="{{ asset('ablepro-master/dist') }}/assets/images/user/avatar-1.jpg"
                                            alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>12 min</span></p>
                                            <p>currently login</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius"
                                            src="{{ asset('ablepro-master/dist') }}/assets/images/user/avatar-2.jpg"
                                            alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Joseph William</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>Prchace New Theme and make payment</p>
                                        </div>
                                    </div>
                                </li>
                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                </div>
                                <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                                </div>
                            </ul>
                            <div class="noti-footer">
                                <a href="#!">show all</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown drp-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="feather icon-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="{{ asset('ablepro-master/dist') }}/assets/images/user/avatar-1.jpg"
                                    class="img-radius" alt="User-Profile-Image">
                                <span>John Doe</span>
                                <a href="auth-signin.html" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li><a href="user-profile.html" class="dropdown-item"><i
                                            class="feather icon-user"></i> Profile</a></li>
                                <li><a href="email_inbox.html" class="dropdown-item"><i
                                            class="feather icon-mail"></i> My Messages</a></li>
                                <li><a href="auth-signin.html" class="dropdown-item"><i
                                            class="feather icon-lock"></i> Lock Screen</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>


    </header>
    <!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Dashboard Analytics</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i
                                            class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Dashboard Analytics</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <!-- support-section start -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card support-bar overflow-hidden">
                                <div class="card-body pb-0">
                                    <h2 class="m-0">350</h2>
                                    <span class="text-c-blue">Support Requests</span>
                                    <p class="mb-3 mt-3">Total number of support requests that come in.</p>
                                </div>
                                <div id="support-chart" style="min-height: 80px;">
                                    <div id="apexcharts377c98"
                                        class="apexcharts-canvas apexcharts377c98 apexcharts-theme-light"
                                        style="width: 336px; height: 80px;"><svg id="SvgjsSvg1336" width="336"
                                            height="80" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                            xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <g id="SvgjsG1338" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 0)">
                                                <defs id="SvgjsDefs1337">
                                                    <clipPath id="gridRectMask377c98">
                                                        <rect id="SvgjsRect1342" width="342" height="82" x="-3"
                                                            y="-1" rx="0" ry="0" fill="#ffffff"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0"></rect>
                                                    </clipPath>
                                                    <clipPath id="gridRectMarkerMask377c98">
                                                        <rect id="SvgjsRect1343" width="338" height="82" x="-1"
                                                            y="-1" rx="0" ry="0" fill="#ffffff"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0"></rect>
                                                    </clipPath>
                                                    <linearGradient id="SvgjsLinearGradient1349" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1350" stop-opacity="0.65"
                                                            stop-color="rgba(70,128,255,0.65)" offset="0"></stop>
                                                        <stop id="SvgjsStop1351" stop-opacity="0.5"
                                                            stop-color="rgba(163,192,255,0.5)" offset="1"></stop>
                                                        <stop id="SvgjsStop1352" stop-opacity="0.5"
                                                            stop-color="rgba(163,192,255,0.5)" offset="1"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <line id="SvgjsLine1341" x1="0" y1="0"
                                                    x2="0" y2="80" stroke="#b6b6b6"
                                                    stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0"
                                                    width="1" height="80" fill="#b1b9c4" filter="none"
                                                    fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG1355" class="apexcharts-xaxis"
                                                    transform="translate(0, 0)">
                                                    <g id="SvgjsG1356" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG1358" class="apexcharts-grid">
                                                    <g id="SvgjsG1359" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine1361" x1="0" y1="0"
                                                            x2="336" y2="0" stroke="#e0e0e0"
                                                            stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1362" x1="0"
                                                            y1="13.333333333333334" x2="336"
                                                            y2="13.333333333333334" stroke="#e0e0e0"
                                                            stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1363" x1="0"
                                                            y1="26.666666666666668" x2="336"
                                                            y2="26.666666666666668" stroke="#e0e0e0"
                                                            stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1364" x1="0" y1="40"
                                                            x2="336" y2="40" stroke="#e0e0e0"
                                                            stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1365" x1="0"
                                                            y1="53.333333333333336" x2="336"
                                                            y2="53.333333333333336" stroke="#e0e0e0"
                                                            stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1366" x1="0"
                                                            y1="66.66666666666667" x2="336"
                                                            y2="66.66666666666667" stroke="#e0e0e0"
                                                            stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1367" x1="0" y1="80"
                                                            x2="336" y2="80" stroke="#e0e0e0"
                                                            stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1360" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine1369" x1="0" y1="80"
                                                        x2="336" y2="80" stroke="transparent"
                                                        stroke-dasharray="0"></line>
                                                    <line id="SvgjsLine1368" x1="0" y1="1"
                                                        x2="0" y2="80" stroke="transparent"
                                                        stroke-dasharray="0"></line>
                                                </g>
                                                <g id="SvgjsG1345"
                                                    class="apexcharts-area-series apexcharts-plot-series">
                                                    <g id="SvgjsG1346" class="apexcharts-series"
                                                        seriesName="seriesx1" data:longestSeries="true"
                                                        rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1353"
                                                            d="M 0 80L 0 80C 14.7 80 27.3 53.33333333333333 42 53.33333333333333C 56.7 53.33333333333333 69.3 66.66666666666667 84 66.66666666666667C 98.7 66.66666666666667 111.3 20 126 20C 140.7 20 153.3 40 168 40C 182.7 40 195.3 6.666666666666671 210 6.666666666666671C 224.7 6.666666666666671 237.3 53.33333333333333 252 53.33333333333333C 266.7 53.33333333333333 279.3 40 294 40C 308.7 40 321.3 80 336 80C 336 80 336 80 336 80M 336 80z"
                                                            fill="url(#SvgjsLinearGradient1349)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-area"
                                                            index="0" clip-path="url(#gridRectMask377c98)"
                                                            pathTo="M 0 80L 0 80C 14.7 80 27.3 53.33333333333333 42 53.33333333333333C 56.7 53.33333333333333 69.3 66.66666666666667 84 66.66666666666667C 98.7 66.66666666666667 111.3 20 126 20C 140.7 20 153.3 40 168 40C 182.7 40 195.3 6.666666666666671 210 6.666666666666671C 224.7 6.666666666666671 237.3 53.33333333333333 252 53.33333333333333C 266.7 53.33333333333333 279.3 40 294 40C 308.7 40 321.3 80 336 80C 336 80 336 80 336 80M 336 80z"
                                                            pathFrom="M -1 80L -1 80L 42 80L 84 80L 126 80L 168 80L 210 80L 252 80L 294 80L 336 80">
                                                        </path>
                                                        <path id="SvgjsPath1354"
                                                            d="M 0 80C 14.7 80 27.3 53.33333333333333 42 53.33333333333333C 56.7 53.33333333333333 69.3 66.66666666666667 84 66.66666666666667C 98.7 66.66666666666667 111.3 20 126 20C 140.7 20 153.3 40 168 40C 182.7 40 195.3 6.666666666666671 210 6.666666666666671C 224.7 6.666666666666671 237.3 53.33333333333333 252 53.33333333333333C 266.7 53.33333333333333 279.3 40 294 40C 308.7 40 321.3 80 336 80"
                                                            fill="none" fill-opacity="1" stroke="#4680ff"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                            stroke-dasharray="0" class="apexcharts-area"
                                                            index="0" clip-path="url(#gridRectMask377c98)"
                                                            pathTo="M 0 80C 14.7 80 27.3 53.33333333333333 42 53.33333333333333C 56.7 53.33333333333333 69.3 66.66666666666667 84 66.66666666666667C 98.7 66.66666666666667 111.3 20 126 20C 140.7 20 153.3 40 168 40C 182.7 40 195.3 6.666666666666671 210 6.666666666666671C 224.7 6.666666666666671 237.3 53.33333333333333 252 53.33333333333333C 266.7 53.33333333333333 279.3 40 294 40C 308.7 40 321.3 80 336 80"
                                                            pathFrom="M -1 80L -1 80L 42 80L 84 80L 126 80L 168 80L 210 80L 252 80L 294 80L 336 80">
                                                        </path>
                                                        <g id="SvgjsG1347" class="apexcharts-series-markers-wrap">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle1375" r="0" cx="0"
                                                                    cy="0"
                                                                    class="apexcharts-marker w0f33kfca no-pointer-events"
                                                                    stroke="#ffffff" fill="#4680ff" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9"
                                                                    default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1348" class="apexcharts-datalabels"
                                                        data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine1370" x1="0" y1="0"
                                                    x2="336" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1371" x1="0" y1="0"
                                                    x2="336" y2="0" stroke-dasharray="0"
                                                    stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1372" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG1373" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG1374" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <rect id="SvgjsRect1340" width="0" height="0" x="0" y="0"
                                                rx="0" ry="0" fill="#fefefe" opacity="1"
                                                stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                            <g id="SvgjsG1357" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                        </svg>
                                        <div class="apexcharts-legend"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-series-group"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(70, 128, 255);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-label"></span><span
                                                            class="apexcharts-tooltip-text-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-primary text-white">
                                    <div class="row text-center">
                                        <div class="col">
                                            <h4 class="m-0 text-white">10</h4>
                                            <span>Open</span>
                                        </div>
                                        <div class="col">
                                            <h4 class="m-0 text-white">5</h4>
                                            <span>Running</span>
                                        </div>
                                        <div class="col">
                                            <h4 class="m-0 text-white">3</h4>
                                            <span>Solved</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 337px; height: 287px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card support-bar overflow-hidden">
                                <div class="card-body pb-0">
                                    <h2 class="m-0">350</h2>
                                    <span class="text-c-green">Support Requests</span>
                                    <p class="mb-3 mt-3">Total number of support requests that come in.</p>
                                </div>
                                <div id="support-chart1" style="min-height: 80px;">
                                    <div id="apexcharts377caa"
                                        class="apexcharts-canvas apexcharts377caa apexcharts-theme-light"
                                        style="width: 336px; height: 80px;"><svg id="SvgjsSvg1377" width="336"
                                            height="80" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                            xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <g id="SvgjsG1379" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 0)">
                                                <defs id="SvgjsDefs1378">
                                                    <clipPath id="gridRectMask377caa">
                                                        <rect id="SvgjsRect1383" width="342" height="82" x="-3"
                                                            y="-1" rx="0" ry="0" fill="#ffffff"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0"></rect>
                                                    </clipPath>
                                                    <clipPath id="gridRectMarkerMask377caa">
                                                        <rect id="SvgjsRect1384" width="338" height="82" x="-1"
                                                            y="-1" rx="0" ry="0" fill="#ffffff"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0"></rect>
                                                    </clipPath>
                                                    <linearGradient id="SvgjsLinearGradient1390" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1391" stop-opacity="0.65"
                                                            stop-color="rgba(156,204,101,0.65)" offset="0"></stop>
                                                        <stop id="SvgjsStop1392" stop-opacity="0.5"
                                                            stop-color="rgba(206,230,178,0.5)" offset="1"></stop>
                                                        <stop id="SvgjsStop1393" stop-opacity="0.5"
                                                            stop-color="rgba(206,230,178,0.5)" offset="1"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <line id="SvgjsLine1382" x1="0" y1="0"
                                                    x2="0" y2="80" stroke="#b6b6b6"
                                                    stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0"
                                                    width="1" height="80" fill="#b1b9c4" filter="none"
                                                    fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG1396" class="apexcharts-xaxis"
                                                    transform="translate(0, 0)">
                                                    <g id="SvgjsG1397" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG1399" class="apexcharts-grid">
                                                    <g id="SvgjsG1400" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine1402" x1="0" y1="0"
                                                            x2="336" y2="0" stroke="#e0e0e0"
                                                            stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1403" x1="0"
                                                            y1="13.333333333333334" x2="336"
                                                            y2="13.333333333333334" stroke="#e0e0e0"
                                                            stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1404" x1="0"
                                                            y1="26.666666666666668" x2="336"
                                                            y2="26.666666666666668" stroke="#e0e0e0"
                                                            stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1405" x1="0" y1="40"
                                                            x2="336" y2="40" stroke="#e0e0e0"
                                                            stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1406" x1="0"
                                                            y1="53.333333333333336" x2="336"
                                                            y2="53.333333333333336" stroke="#e0e0e0"
                                                            stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1407" x1="0"
                                                            y1="66.66666666666667" x2="336"
                                                            y2="66.66666666666667" stroke="#e0e0e0"
                                                            stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1408" x1="0" y1="80"
                                                            x2="336" y2="80" stroke="#e0e0e0"
                                                            stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1401" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine1410" x1="0" y1="80"
                                                        x2="336" y2="80" stroke="transparent"
                                                        stroke-dasharray="0"></line>
                                                    <line id="SvgjsLine1409" x1="0" y1="1"
                                                        x2="0" y2="80" stroke="transparent"
                                                        stroke-dasharray="0"></line>
                                                </g>
                                                <g id="SvgjsG1386"
                                                    class="apexcharts-area-series apexcharts-plot-series">
                                                    <g id="SvgjsG1387" class="apexcharts-series"
                                                        seriesName="seriesx1" data:longestSeries="true"
                                                        rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1394"
                                                            d="M 0 80L 0 80C 14.7 80 27.3 53.33333333333333 42 53.33333333333333C 56.7 53.33333333333333 69.3 66.66666666666667 84 66.66666666666667C 98.7 66.66666666666667 111.3 20 126 20C 140.7 20 153.3 40 168 40C 182.7 40 195.3 6.666666666666671 210 6.666666666666671C 224.7 6.666666666666671 237.3 53.33333333333333 252 53.33333333333333C 266.7 53.33333333333333 279.3 40 294 40C 308.7 40 321.3 80 336 80C 336 80 336 80 336 80M 336 80z"
                                                            fill="url(#SvgjsLinearGradient1390)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-area"
                                                            index="0" clip-path="url(#gridRectMask377caa)"
                                                            pathTo="M 0 80L 0 80C 14.7 80 27.3 53.33333333333333 42 53.33333333333333C 56.7 53.33333333333333 69.3 66.66666666666667 84 66.66666666666667C 98.7 66.66666666666667 111.3 20 126 20C 140.7 20 153.3 40 168 40C 182.7 40 195.3 6.666666666666671 210 6.666666666666671C 224.7 6.666666666666671 237.3 53.33333333333333 252 53.33333333333333C 266.7 53.33333333333333 279.3 40 294 40C 308.7 40 321.3 80 336 80C 336 80 336 80 336 80M 336 80z"
                                                            pathFrom="M -1 80L -1 80L 42 80L 84 80L 126 80L 168 80L 210 80L 252 80L 294 80L 336 80">
                                                        </path>
                                                        <path id="SvgjsPath1395"
                                                            d="M 0 80C 14.7 80 27.3 53.33333333333333 42 53.33333333333333C 56.7 53.33333333333333 69.3 66.66666666666667 84 66.66666666666667C 98.7 66.66666666666667 111.3 20 126 20C 140.7 20 153.3 40 168 40C 182.7 40 195.3 6.666666666666671 210 6.666666666666671C 224.7 6.666666666666671 237.3 53.33333333333333 252 53.33333333333333C 266.7 53.33333333333333 279.3 40 294 40C 308.7 40 321.3 80 336 80"
                                                            fill="none" fill-opacity="1" stroke="#9ccc65"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                            stroke-dasharray="0" class="apexcharts-area"
                                                            index="0" clip-path="url(#gridRectMask377caa)"
                                                            pathTo="M 0 80C 14.7 80 27.3 53.33333333333333 42 53.33333333333333C 56.7 53.33333333333333 69.3 66.66666666666667 84 66.66666666666667C 98.7 66.66666666666667 111.3 20 126 20C 140.7 20 153.3 40 168 40C 182.7 40 195.3 6.666666666666671 210 6.666666666666671C 224.7 6.666666666666671 237.3 53.33333333333333 252 53.33333333333333C 266.7 53.33333333333333 279.3 40 294 40C 308.7 40 321.3 80 336 80"
                                                            pathFrom="M -1 80L -1 80L 42 80L 84 80L 126 80L 168 80L 210 80L 252 80L 294 80L 336 80">
                                                        </path>
                                                        <g id="SvgjsG1388" class="apexcharts-series-markers-wrap">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle1416" r="0" cx="0"
                                                                    cy="0"
                                                                    class="apexcharts-marker ww5vlbn99k no-pointer-events"
                                                                    stroke="#ffffff" fill="#9ccc65" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9"
                                                                    default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1389" class="apexcharts-datalabels"
                                                        data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine1411" x1="0" y1="0"
                                                    x2="336" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1412" x1="0" y1="0"
                                                    x2="336" y2="0" stroke-dasharray="0"
                                                    stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1413" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG1414" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG1415" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <rect id="SvgjsRect1381" width="0" height="0" x="0" y="0"
                                                rx="0" ry="0" fill="#fefefe" opacity="1"
                                                stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                            <g id="SvgjsG1398" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                        </svg>
                                        <div class="apexcharts-legend"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-series-group"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(156, 204, 101);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-label"></span><span
                                                            class="apexcharts-tooltip-text-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-success text-white">
                                    <div class="row text-center">
                                        <div class="col">
                                            <h4 class="m-0 text-white">10</h4>
                                            <span>Open</span>
                                        </div>
                                        <div class="col">
                                            <h4 class="m-0 text-white">5</h4>
                                            <span>Running</span>
                                        </div>
                                        <div class="col">
                                            <h4 class="m-0 text-white">3</h4>
                                            <span>Solved</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 337px; height: 287px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- support-section end -->
                </div>
                <div class="col-lg-5 col-md-12">
                    <!-- page statustic card start -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h4 class="text-c-yellow">
                                                {{ number_format($totalPriceOrder, 0, ',', '.') }} VND</h4>
                                            <h6 class="text-muted m-b-0">Income</h6>
                                        </div>
                                        <div class="col-4 text-right">
                                            <i class="feather icon-bar-chart-2 f-28"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-c-yellow">
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <p class="text-white m-b-0">% change</p>
                                        </div>
                                        <div class="col-3 text-right">
                                            <i class="feather icon-trending-up text-white f-16"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h4 class="text-c-green">{{ $qtyInstock }} +</h4>
                                            <h6 class="text-muted m-b-0">Products in stock</h6>
                                        </div>
                                        <div class="col-4 text-right">
                                            <i class="feather icon-file-text f-28"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-c-green">
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <p class="text-white m-b-0">% change</p>
                                        </div>
                                        <div class="col-3 text-right">
                                            <i class="feather icon-trending-up text-white f-16"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h4 class="text-c-red">{{ $qtySold }}</h4>
                                            <h6 class="text-muted m-b-0">Products out stock</h6>
                                        </div>
                                        <div class="col-4 text-right">
                                            <i class="feather icon-calendar f-28"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-c-red">
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <p class="text-white m-b-0">% change</p>
                                        </div>
                                        <div class="col-3 text-right">
                                            <i class="feather icon-trending-down text-white f-16"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h4 class="text-c-blue">{{ $qtyOders }}</h4>
                                            <h6 class="text-muted m-b-0">Orders completed</h6>
                                        </div>
                                        <div class="col-4 text-right">
                                            <i class="feather icon-thumbs-down f-28"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-c-blue">
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <p class="text-white m-b-0">% change</p>
                                        </div>
                                        <div class="col-3 text-right">
                                            <i class="feather icon-trending-down text-white f-16"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- page statustic card end -->
                </div>
                <!-- prject ,team member start -->
                <div class="col-xl-6 col-md-12">
                    <div class="card table-card">
                        <div class="card-header">
                            <h5>Projects</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal"></i>
                                    </button>
                                    <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item full-card"><a href="#!"><span><i
                                                        class="feather icon-maximize"></i> maximize</span><span
                                                    style="display:none"><i class="feather icon-minimize"></i>
                                                    Restore</span></a></li>
                                        <li class="dropdown-item minimize-card"><a href="#!"><span><i
                                                        class="feather icon-minus"></i> collapse</span><span
                                                    style="display:none"><i class="feather icon-plus"></i>
                                                    expand</span></a></li>
                                        <li class="dropdown-item reload-card"><a href="#!"><i
                                                    class="feather icon-refresh-cw"></i> reload</a></li>
                                        <li class="dropdown-item close-card"><a href="#!"><i
                                                    class="feather icon-trash"></i> remove</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="chk-option">
                                                    <label
                                                        class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </div>
                                                Assigned
                                            </th>
                                            <th>Name</th>
                                            <th>Due Date</th>
                                            <th class="text-right">Priority</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="chk-option">
                                                    <label
                                                        class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </div>
                                                <div class="d-inline-block align-middle">
                                                    <img src="{{ asset('ablepro-master/dist') }}/assets/images/user/avatar-4.jpg"
                                                        alt="user image" class="img-radius wid-40 align-top m-r-15">
                                                    <div class="d-inline-block">
                                                        <h6>John Deo</h6>
                                                        <p class="text-muted m-b-0">Graphics Designer</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Able Pro</td>
                                            <td>Jun, 26</td>
                                            <td class="text-right"><label class="badge badge-light-danger">Low</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="chk-option">
                                                    <label
                                                        class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </div>
                                                <div class="d-inline-block align-middle">
                                                    <img src="{{ asset('ablepro-master/dist') }}/assets/images/user/avatar-2.jpg"
                                                        alt="user image" class="img-radius wid-40 align-top m-r-15">
                                                    <div class="d-inline-block">
                                                        <h6>Jenifer Vintage</h6>
                                                        <p class="text-muted m-b-0">Web Designer</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Mashable</td>
                                            <td>March, 31</td>
                                            <td class="text-right"><label
                                                    class="badge badge-light-primary">high</label></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="chk-option">
                                                    <label
                                                        class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </div>
                                                <div class="d-inline-block align-middle">
                                                    <img src="{{ asset('ablepro-master/dist') }}/assets/images/user/avatar-3.jpg"
                                                        alt="user image" class="img-radius wid-40 align-top m-r-15">
                                                    <div class="d-inline-block">
                                                        <h6>William Jem</h6>
                                                        <p class="text-muted m-b-0">Developer</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Flatable</td>
                                            <td>Aug, 02</td>
                                            <td class="text-right"><label
                                                    class="badge badge-light-success">medium</label></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="chk-option">
                                                    <label
                                                        class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </div>
                                                <div class="d-inline-block align-middle">
                                                    <img src="{{ asset('ablepro-master/dist') }}/assets/images/user/avatar-2.jpg"
                                                        alt="user image" class="img-radius wid-40 align-top m-r-15">
                                                    <div class="d-inline-block">
                                                        <h6>David Jones</h6>
                                                        <p class="text-muted m-b-0">Developer</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Guruable</td>
                                            <td>Sep, 22</td>
                                            <td class="text-right"><label
                                                    class="badge badge-light-primary">high</label></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-12">
                    <div class="card latest-update-card">
                        <div class="card-header">
                            <h5>Latest Updates</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal"></i>
                                    </button>
                                    <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item full-card"><a href="#!"><span><i
                                                        class="feather icon-maximize"></i> maximize</span><span
                                                    style="display:none"><i class="feather icon-minimize"></i>
                                                    Restore</span></a></li>
                                        <li class="dropdown-item minimize-card"><a href="#!"><span><i
                                                        class="feather icon-minus"></i> collapse</span><span
                                                    style="display:none"><i class="feather icon-plus"></i>
                                                    expand</span></a></li>
                                        <li class="dropdown-item reload-card"><a href="#!"><i
                                                    class="feather icon-refresh-cw"></i> reload</a></li>
                                        <li class="dropdown-item close-card"><a href="#!"><i
                                                    class="feather icon-trash"></i> remove</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="latest-update-box">
                                <div class="row p-t-30 p-b-30">
                                    <div class="col-auto text-right update-meta">
                                        <p class="text-muted m-b-0 d-inline-flex">2 hrs ago</p>
                                        <i class="feather icon-twitter bg-twitter update-icon"></i>
                                    </div>
                                    <div class="col">
                                        <a href="#!">
                                            <h6>+ 1652 Followers</h6>
                                        </a>
                                        <p class="text-muted m-b-0">You’re getting more and more followers, keep it
                                            up!</p>
                                    </div>
                                </div>
                                <div class="row p-b-30">
                                    <div class="col-auto text-right update-meta">
                                        <p class="text-muted m-b-0 d-inline-flex">4 hrs ago</p>
                                        <i class="feather icon-briefcase bg-c-red update-icon"></i>
                                    </div>
                                    <div class="col">
                                        <a href="#!">
                                            <h6>+ 5 New Products were added!</h6>
                                        </a>
                                        <p class="text-muted m-b-0">Congratulations!</p>
                                    </div>
                                </div>
                                <div class="row p-b-0">
                                    <div class="col-auto text-right update-meta">
                                        <p class="text-muted m-b-0 d-inline-flex">2 day ago</p>
                                        <i class="feather icon-facebook bg-facebook update-icon"></i>
                                    </div>
                                    <div class="col">
                                        <a href="#!">
                                            <h6>+1 Friend Requests</h6>
                                        </a>
                                        <p class="text-muted m-b-10">This is great, keep it up!</p>
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <tbody>
                                                    <tr>
                                                        <td class="b-none">
                                                            <a href="#!" class="align-middle">
                                                                <img src="{{ asset('ablepro-master/dist') }}/assets/images/user/avatar-2.jpg"
                                                                    alt="user image"
                                                                    class="img-radius wid-40 align-top m-r-15">
                                                                <div class="d-inline-block">
                                                                    <h6>Jeny William</h6>
                                                                    <p class="text-muted m-b-0">Graphic Designer</p>
                                                                </div>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <a href="#!" class="b-b-primary text-primary">View all Projects</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- prject ,team member start -->
                <!-- seo start -->
                {{-- <div class="col-xl-4 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h3>$16,756</h3>
                                    <h6 class="text-muted m-b-0">Visits<i
                                            class="fa fa-caret-down text-c-red m-l-10"></i></h6>
                                </div>
                                <div class="col-6">
                                    <div id="seo-chart1" class="d-flex align-items-end" style="min-height: 40px;">
                                        <div id="apexcharts377cc4"
                                            class="apexcharts-canvas apexcharts377cc4 apexcharts-theme-light"
                                            style="width: 316px; height: 40px;"><svg id="SvgjsSvg1417"
                                                width="316" height="40" xmlns="http://www.w3.org/2000/svg"
                                                version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                style="background: transparent;">
                                                <g id="SvgjsG1419" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(0, 0)">
                                                    <defs id="SvgjsDefs1418">
                                                        <clipPath id="gridRectMask377cc4">
                                                            <rect id="SvgjsRect1423" width="323" height="43"
                                                                x="-3.5" y="-1.5" rx="0" ry="0"
                                                                fill="#ffffff" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMask377cc4">
                                                            <rect id="SvgjsRect1424" width="322" height="46"
                                                                x="-3" y="-3" rx="0" ry="0"
                                                                fill="#ffffff" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <line id="SvgjsLine1422" x1="0" y1="0"
                                                        x2="0" y2="40" stroke="#b6b6b6"
                                                        stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0"
                                                        y="0" width="1" height="40" fill="#b1b9c4"
                                                        filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                    <g id="SvgjsG1457" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG1458" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"></g>
                                                    </g>
                                                    <g id="SvgjsG1460" class="apexcharts-grid">
                                                        <g id="SvgjsG1461" class="apexcharts-gridlines-horizontal"
                                                            style="display: none;">
                                                            <line id="SvgjsLine1463" x1="0" y1="0"
                                                                x2="316" y2="0" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1464" x1="0" y1="8"
                                                                x2="316" y2="8" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1465" x1="0" y1="16"
                                                                x2="316" y2="16" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1466" x1="0" y1="24"
                                                                x2="316" y2="24" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1467" x1="0" y1="32"
                                                                x2="316" y2="32" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1468" x1="0" y1="40"
                                                                x2="316" y2="40" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline">
                                                            </line>
                                                        </g>
                                                        <g id="SvgjsG1462" class="apexcharts-gridlines-vertical"
                                                            style="display: none;"></g>
                                                        <line id="SvgjsLine1470" x1="0" y1="40"
                                                            x2="316" y2="40" stroke="transparent"
                                                            stroke-dasharray="0"></line>
                                                        <line id="SvgjsLine1469" x1="0" y1="1"
                                                            x2="0" y2="40" stroke="transparent"
                                                            stroke-dasharray="0"></line>
                                                    </g>
                                                    <g id="SvgjsG1426"
                                                        class="apexcharts-area-series apexcharts-plot-series">
                                                        <g id="SvgjsG1427" class="apexcharts-series"
                                                            seriesName="series1" data:longestSeries="true"
                                                            rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath1455"
                                                                d="M 0 40L 0 36.4L 26.333333333333332 13.600000000000001L 52.666666666666664 23.6L 79 4.399999999999999L 105.33333333333333 14.8L 131.66666666666666 30L 158 22.4L 184.33333333333331 35.2L 210.66666666666666 25.6L 237 32L 263.3333333333333 18.4L 289.6666666666667 30L 316 36.4L 316 40M 316 36.4z"
                                                                fill="rgba(70,128,255,0.3)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-area" index="0"
                                                                clip-path="url(#gridRectMask377cc4)"
                                                                pathTo="M 0 40L 0 36.4L 26.333333333333332 13.600000000000001L 52.666666666666664 23.6L 79 4.399999999999999L 105.33333333333333 14.8L 131.66666666666666 30L 158 22.4L 184.33333333333331 35.2L 210.66666666666666 25.6L 237 32L 263.3333333333333 18.4L 289.6666666666667 30L 316 36.4L 316 40M 316 36.4z"
                                                                pathFrom="M -1 40L -1 40L 26.333333333333332 40L 52.666666666666664 40L 79 40L 105.33333333333333 40L 131.66666666666666 40L 158 40L 184.33333333333331 40L 210.66666666666666 40L 237 40L 263.3333333333333 40L 289.6666666666667 40L 316 40">
                                                            </path>
                                                            <path id="SvgjsPath1456"
                                                                d="M 0 36.4L 26.333333333333332 13.600000000000001L 52.666666666666664 23.6L 79 4.399999999999999L 105.33333333333333 14.8L 131.66666666666666 30L 158 22.4L 184.33333333333331 35.2L 210.66666666666666 25.6L 237 32L 263.3333333333333 18.4L 289.6666666666667 30L 316 36.4"
                                                                fill="none" fill-opacity="1" stroke="#4680ff"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="3" stroke-dasharray="0"
                                                                class="apexcharts-area" index="0"
                                                                clip-path="url(#gridRectMask377cc4)"
                                                                pathTo="M 0 36.4L 26.333333333333332 13.600000000000001L 52.666666666666664 23.6L 79 4.399999999999999L 105.33333333333333 14.8L 131.66666666666666 30L 158 22.4L 184.33333333333331 35.2L 210.66666666666666 25.6L 237 32L 263.3333333333333 18.4L 289.6666666666667 30L 316 36.4"
                                                                pathFrom="M -1 40L -1 40L 26.333333333333332 40L 52.666666666666664 40L 79 40L 105.33333333333333 40L 131.66666666666666 40L 158 40L 184.33333333333331 40L 210.66666666666666 40L 237 40L 263.3333333333333 40L 289.6666666666667 40L 316 40">
                                                            </path>
                                                            <g id="SvgjsG1428"
                                                                class="apexcharts-series-markers-wrap">
                                                                <g id="SvgjsG1430" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask377cc4)">
                                                                    <circle id="SvgjsCircle1431" r="2"
                                                                        cx="0" cy="36.4"
                                                                        class="apexcharts-marker no-pointer-events w3c66ee"
                                                                        stroke="#4680ff" fill="#4680ff"
                                                                        fill-opacity="1" stroke-width="2"
                                                                        stroke-opacity="0.9" rel="0" j="0"
                                                                        index="0" default-marker-size="2">
                                                                    </circle>
                                                                    <circle id="SvgjsCircle1432" r="2"
                                                                        cx="26.333333333333332"
                                                                        cy="13.600000000000001"
                                                                        class="apexcharts-marker no-pointer-events w3c66ee"
                                                                        stroke="#4680ff" fill="#4680ff"
                                                                        fill-opacity="1" stroke-width="2"
                                                                        stroke-opacity="0.9" rel="1" j="1"
                                                                        index="0" default-marker-size="2">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG1433" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask377cc4)">
                                                                    <circle id="SvgjsCircle1434" r="2"
                                                                        cx="52.666666666666664" cy="23.6"
                                                                        class="apexcharts-marker no-pointer-events w3c66ef"
                                                                        stroke="#4680ff" fill="#4680ff"
                                                                        fill-opacity="1" stroke-width="2"
                                                                        stroke-opacity="0.9" rel="2" j="2"
                                                                        index="0" default-marker-size="2">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG1435" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask377cc4)">
                                                                    <circle id="SvgjsCircle1436" r="2"
                                                                        cx="79" cy="4.399999999999999"
                                                                        class="apexcharts-marker no-pointer-events w3c66ef"
                                                                        stroke="#4680ff" fill="#4680ff"
                                                                        fill-opacity="1" stroke-width="2"
                                                                        stroke-opacity="0.9" rel="3" j="3"
                                                                        index="0" default-marker-size="2">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG1437" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask377cc4)">
                                                                    <circle id="SvgjsCircle1438" r="2"
                                                                        cx="105.33333333333333" cy="14.8"
                                                                        class="apexcharts-marker no-pointer-events w3c66ef"
                                                                        stroke="#4680ff" fill="#4680ff"
                                                                        fill-opacity="1" stroke-width="2"
                                                                        stroke-opacity="0.9" rel="4" j="4"
                                                                        index="0" default-marker-size="2">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG1439" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask377cc4)">
                                                                    <circle id="SvgjsCircle1440" r="2"
                                                                        cx="131.66666666666666" cy="30"
                                                                        class="apexcharts-marker no-pointer-events w3c66ef"
                                                                        stroke="#4680ff" fill="#4680ff"
                                                                        fill-opacity="1" stroke-width="2"
                                                                        stroke-opacity="0.9" rel="5" j="5"
                                                                        index="0" default-marker-size="2">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG1441" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask377cc4)">
                                                                    <circle id="SvgjsCircle1442" r="2"
                                                                        cx="158" cy="22.4"
                                                                        class="apexcharts-marker no-pointer-events w3c66ef"
                                                                        stroke="#4680ff" fill="#4680ff"
                                                                        fill-opacity="1" stroke-width="2"
                                                                        stroke-opacity="0.9" rel="6" j="6"
                                                                        index="0" default-marker-size="2">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG1443" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask377cc4)">
                                                                    <circle id="SvgjsCircle1444" r="2"
                                                                        cx="184.33333333333331" cy="35.2"
                                                                        class="apexcharts-marker no-pointer-events w3c66ef"
                                                                        stroke="#4680ff" fill="#4680ff"
                                                                        fill-opacity="1" stroke-width="2"
                                                                        stroke-opacity="0.9" rel="7" j="7"
                                                                        index="0" default-marker-size="2">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG1445" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask377cc4)">
                                                                    <circle id="SvgjsCircle1446" r="2"
                                                                        cx="210.66666666666666" cy="25.6"
                                                                        class="apexcharts-marker no-pointer-events w3c66ef"
                                                                        stroke="#4680ff" fill="#4680ff"
                                                                        fill-opacity="1" stroke-width="2"
                                                                        stroke-opacity="0.9" rel="8" j="8"
                                                                        index="0" default-marker-size="2">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG1447" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask377cc4)">
                                                                    <circle id="SvgjsCircle1448" r="2"
                                                                        cx="237" cy="32"
                                                                        class="apexcharts-marker no-pointer-events w3c66ef"
                                                                        stroke="#4680ff" fill="#4680ff"
                                                                        fill-opacity="1" stroke-width="2"
                                                                        stroke-opacity="0.9" rel="9" j="9"
                                                                        index="0" default-marker-size="2">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG1449" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask377cc4)">
                                                                    <circle id="SvgjsCircle1450" r="2"
                                                                        cx="263.3333333333333" cy="18.4"
                                                                        class="apexcharts-marker no-pointer-events w3c66ef"
                                                                        stroke="#4680ff" fill="#4680ff"
                                                                        fill-opacity="1" stroke-width="2"
                                                                        stroke-opacity="0.9" rel="10" j="10"
                                                                        index="0" default-marker-size="2">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG1451" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask377cc4)">
                                                                    <circle id="SvgjsCircle1452" r="2"
                                                                        cx="289.6666666666667" cy="30"
                                                                        class="apexcharts-marker no-pointer-events w3c66ef"
                                                                        stroke="#4680ff" fill="#4680ff"
                                                                        fill-opacity="1" stroke-width="2"
                                                                        stroke-opacity="0.9" rel="11" j="11"
                                                                        index="0" default-marker-size="2">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG1453" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask377cc4)">
                                                                    <circle id="SvgjsCircle1454" r="2"
                                                                        cx="316" cy="36.4"
                                                                        class="apexcharts-marker no-pointer-events w3c66ef"
                                                                        stroke="#4680ff" fill="#4680ff"
                                                                        fill-opacity="1" stroke-width="2"
                                                                        stroke-opacity="0.9" rel="12" j="12"
                                                                        index="0" default-marker-size="2">
                                                                    </circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1429" class="apexcharts-datalabels"
                                                            data:realIndex="0"></g>
                                                    </g>
                                                    <line id="SvgjsLine1471" x1="0" y1="0"
                                                        x2="316" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1472" x1="0" y1="0"
                                                        x2="316" y2="0" stroke-dasharray="0"
                                                        stroke-width="0" class="apexcharts-ycrosshairs-hidden">
                                                    </line>
                                                    <g id="SvgjsG1473" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1474" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1475" class="apexcharts-point-annotations"></g>
                                                </g>
                                                <rect id="SvgjsRect1421" width="0" height="0" x="0" y="0"
                                                    rx="0" ry="0" fill="#fefefe" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                                <g id="SvgjsG1459" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(-18, 0)"></g>
                                            </svg>
                                            <div class="apexcharts-legend"></div>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-series-group"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(70, 128, 255);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-label"></span><span
                                                                class="apexcharts-tooltip-text-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 347px; height: 41px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h3>49.54%</h3>
                                    <h6 class="text-muted m-b-0">Bounce Rate<i
                                            class="fa fa-caret-up text-c-green m-l-10"></i></h6>
                                </div>
                                <div class="col-6">
                                    <div id="seo-chart2" class="d-flex align-items-end" style="min-height: 40px;">
                                        <div id="apexcharts377cce"
                                            class="apexcharts-canvas apexcharts377cce apexcharts-theme-light"
                                            style="width: 133px; height: 40px;"><svg id="SvgjsSvg1476"
                                                width="133" height="40" xmlns="http://www.w3.org/2000/svg"
                                                version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                style="background: transparent;">
                                                <g id="SvgjsG1478" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(12.546666666666667, 0)">
                                                    <defs id="SvgjsDefs1477">
                                                        <linearGradient id="SvgjsLinearGradient1480" x1="0"
                                                            y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop1481" stop-opacity="0.4"
                                                                stop-color="rgba(216,227,240,0.4)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop1482" stop-opacity="0.5"
                                                                stop-color="rgba(190,209,230,0.5)" offset="1">
                                                            </stop>
                                                            <stop id="SvgjsStop1483" stop-opacity="0.5"
                                                                stop-color="rgba(190,209,230,0.5)" offset="1">
                                                            </stop>
                                                        </linearGradient>
                                                        <clipPath id="gridRectMask377cce">
                                                            <rect id="SvgjsRect1486" width="137" height="40"
                                                                x="-10.546666666666667" y="0" rx="0"
                                                                ry="0" fill="#ffffff" opacity="1"
                                                                stroke-width="0" stroke="none"
                                                                stroke-dasharray="0"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMask377cce">
                                                            <rect id="SvgjsRect1487" width="117.90666666666667"
                                                                height="42" x="-1" y="-1" rx="0"
                                                                ry="0" fill="#ffffff" opacity="1"
                                                                stroke-width="0" stroke="none"
                                                                stroke-dasharray="0"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <line id="SvgjsLine1485" x1="0" y1="0"
                                                        x2="0" y2="40" stroke-dasharray="3"
                                                        class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                                        height="40" fill="url(#SvgjsLinearGradient1480)"
                                                        filter="none" fill-opacity="0.9" stroke-width="0"></line>
                                                    <g id="SvgjsG1508" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG1509" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"></g>
                                                    </g>
                                                    <g id="SvgjsG1511" class="apexcharts-grid">
                                                        <g id="SvgjsG1512" class="apexcharts-gridlines-horizontal"
                                                            style="display: none;">
                                                            <line id="SvgjsLine1514" x1="0" y1="0"
                                                                x2="115.90666666666667" y2="0"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1515" x1="0" y1="8"
                                                                x2="115.90666666666667" y2="8"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1516" x1="0" y1="16"
                                                                x2="115.90666666666667" y2="16"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1517" x1="0" y1="24"
                                                                x2="115.90666666666667" y2="24"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1518" x1="0" y1="32"
                                                                x2="115.90666666666667" y2="32"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1519" x1="0" y1="40"
                                                                x2="115.90666666666667" y2="40"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g id="SvgjsG1513" class="apexcharts-gridlines-vertical"
                                                            style="display: none;"></g>
                                                        <line id="SvgjsLine1521" x1="0" y1="40"
                                                            x2="115.90666666666667" y2="40"
                                                            stroke="transparent" stroke-dasharray="0"></line>
                                                        <line id="SvgjsLine1520" x1="0" y1="1"
                                                            x2="0" y2="40" stroke="transparent"
                                                            stroke-dasharray="0"></line>
                                                    </g>
                                                    <g id="SvgjsG1489"
                                                        class="apexcharts-bar-series apexcharts-plot-series">
                                                        <g id="SvgjsG1490" class="apexcharts-series"
                                                            rel="1" seriesName="seriesx1"
                                                            data:realIndex="0">
                                                            <path id="SvgjsPath1492"
                                                                d="M -2.3181333333333334 40L -2.3181333333333334 30L 2.3181333333333334 30L 2.3181333333333334 40L -2.3181333333333334 40"
                                                                fill="rgba(156,204,101,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMask377cce)"
                                                                pathTo="M -2.3181333333333334 40L -2.3181333333333334 30L 2.3181333333333334 30L 2.3181333333333334 40L -2.3181333333333334 40"
                                                                pathFrom="M -2.3181333333333334 40L -2.3181333333333334 40L 2.3181333333333334 40L 2.3181333333333334 40L -2.3181333333333334 40"
                                                                cy="30" cx="2.3181333333333334" j="0"
                                                                val="25" barHeight="10"
                                                                barWidth="4.636266666666667"></path>
                                                            <path id="SvgjsPath1493"
                                                                d="M 5.408977777777778 40L 5.408977777777778 13.600000000000001L 10.045244444444446 13.600000000000001L 10.045244444444446 40L 5.408977777777778 40"
                                                                fill="rgba(156,204,101,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMask377cce)"
                                                                pathTo="M 5.408977777777778 40L 5.408977777777778 13.600000000000001L 10.045244444444446 13.600000000000001L 10.045244444444446 40L 5.408977777777778 40"
                                                                pathFrom="M 5.408977777777778 40L 5.408977777777778 40L 10.045244444444446 40L 10.045244444444446 40L 5.408977777777778 40"
                                                                cy="13.600000000000001" cx="10.045244444444446"
                                                                j="1" val="66" barHeight="26.4"
                                                                barWidth="4.636266666666667"></path>
                                                            <path id="SvgjsPath1494"
                                                                d="M 13.136088888888889 40L 13.136088888888889 23.6L 17.772355555555556 23.6L 17.772355555555556 40L 13.136088888888889 40"
                                                                fill="rgba(156,204,101,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMask377cce)"
                                                                pathTo="M 13.136088888888889 40L 13.136088888888889 23.6L 17.772355555555556 23.6L 17.772355555555556 40L 13.136088888888889 40"
                                                                pathFrom="M 13.136088888888889 40L 13.136088888888889 40L 17.772355555555556 40L 17.772355555555556 40L 13.136088888888889 40"
                                                                cy="23.6" cx="17.772355555555556" j="2"
                                                                val="41" barHeight="16.4"
                                                                barWidth="4.636266666666667"></path>
                                                            <path id="SvgjsPath1495"
                                                                d="M 20.8632 40L 20.8632 4.399999999999999L 25.499466666666667 4.399999999999999L 25.499466666666667 40L 20.8632 40"
                                                                fill="rgba(156,204,101,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMask377cce)"
                                                                pathTo="M 20.8632 40L 20.8632 4.399999999999999L 25.499466666666667 4.399999999999999L 25.499466666666667 40L 20.8632 40"
                                                                pathFrom="M 20.8632 40L 20.8632 40L 25.499466666666667 40L 25.499466666666667 40L 20.8632 40"
                                                                cy="4.399999999999999" cx="25.499466666666667" j="3"
                                                                val="89" barHeight="35.6"
                                                                barWidth="4.636266666666667"></path>
                                                            <path id="SvgjsPath1496"
                                                                d="M 28.590311111111113 40L 28.590311111111113 14.8L 33.22657777777778 14.8L 33.22657777777778 40L 28.590311111111113 40"
                                                                fill="rgba(156,204,101,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMask377cce)"
                                                                pathTo="M 28.590311111111113 40L 28.590311111111113 14.8L 33.22657777777778 14.8L 33.22657777777778 40L 28.590311111111113 40"
                                                                pathFrom="M 28.590311111111113 40L 28.590311111111113 40L 33.22657777777778 40L 33.22657777777778 40L 28.590311111111113 40"
                                                                cy="14.8" cx="33.22657777777778" j="4"
                                                                val="63" barHeight="25.2"
                                                                barWidth="4.636266666666667"></path>
                                                            <path id="SvgjsPath1497"
                                                                d="M 36.31742222222222 40L 36.31742222222222 30L 40.953688888888884 30L 40.953688888888884 40L 36.31742222222222 40"
                                                                fill="rgba(156,204,101,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMask377cce)"
                                                                pathTo="M 36.31742222222222 40L 36.31742222222222 30L 40.953688888888884 30L 40.953688888888884 40L 36.31742222222222 40"
                                                                pathFrom="M 36.31742222222222 40L 36.31742222222222 40L 40.953688888888884 40L 40.953688888888884 40L 36.31742222222222 40"
                                                                cy="30" cx="40.953688888888884" j="5"
                                                                val="25" barHeight="10"
                                                                barWidth="4.636266666666667"></path>
                                                            <path id="SvgjsPath1498"
                                                                d="M 44.04453333333333 40L 44.04453333333333 22.4L 48.68079999999999 22.4L 48.68079999999999 40L 44.04453333333333 40"
                                                                fill="rgba(156,204,101,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMask377cce)"
                                                                pathTo="M 44.04453333333333 40L 44.04453333333333 22.4L 48.68079999999999 22.4L 48.68079999999999 40L 44.04453333333333 40"
                                                                pathFrom="M 44.04453333333333 40L 44.04453333333333 40L 48.68079999999999 40L 48.68079999999999 40L 44.04453333333333 40"
                                                                cy="22.4" cx="48.68079999999999" j="6"
                                                                val="44" barHeight="17.6"
                                                                barWidth="4.636266666666667"></path>
                                                            <path id="SvgjsPath1499"
                                                                d="M 51.77164444444444 40L 51.77164444444444 35.2L 56.407911111111105 35.2L 56.407911111111105 40L 51.77164444444444 40"
                                                                fill="rgba(156,204,101,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMask377cce)"
                                                                pathTo="M 51.77164444444444 40L 51.77164444444444 35.2L 56.407911111111105 35.2L 56.407911111111105 40L 51.77164444444444 40"
                                                                pathFrom="M 51.77164444444444 40L 51.77164444444444 40L 56.407911111111105 40L 56.407911111111105 40L 51.77164444444444 40"
                                                                cy="35.2" cx="56.407911111111105" j="7"
                                                                val="12" barHeight="4.8"
                                                                barWidth="4.636266666666667"></path>
                                                            <path id="SvgjsPath1500"
                                                                d="M 59.498755555555555 40L 59.498755555555555 25.6L 64.13502222222222 25.6L 64.13502222222222 40L 59.498755555555555 40"
                                                                fill="rgba(156,204,101,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMask377cce)"
                                                                pathTo="M 59.498755555555555 40L 59.498755555555555 25.6L 64.13502222222222 25.6L 64.13502222222222 40L 59.498755555555555 40"
                                                                pathFrom="M 59.498755555555555 40L 59.498755555555555 40L 64.13502222222222 40L 64.13502222222222 40L 59.498755555555555 40"
                                                                cy="25.6" cx="64.13502222222222" j="8"
                                                                val="36" barHeight="14.4"
                                                                barWidth="4.636266666666667"></path>
                                                            <path id="SvgjsPath1501"
                                                                d="M 67.22586666666666 40L 67.22586666666666 36.4L 71.86213333333333 36.4L 71.86213333333333 40L 67.22586666666666 40"
                                                                fill="rgba(156,204,101,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMask377cce)"
                                                                pathTo="M 67.22586666666666 40L 67.22586666666666 36.4L 71.86213333333333 36.4L 71.86213333333333 40L 67.22586666666666 40"
                                                                pathFrom="M 67.22586666666666 40L 67.22586666666666 40L 71.86213333333333 40L 71.86213333333333 40L 67.22586666666666 40"
                                                                cy="36.4" cx="71.86213333333333" j="9"
                                                                val="9" barHeight="3.6"
                                                                barWidth="4.636266666666667"></path>
                                                            <path id="SvgjsPath1502"
                                                                d="M 74.95297777777778 40L 74.95297777777778 18.4L 79.58924444444445 18.4L 79.58924444444445 40L 74.95297777777778 40"
                                                                fill="rgba(156,204,101,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMask377cce)"
                                                                pathTo="M 74.95297777777778 40L 74.95297777777778 18.4L 79.58924444444445 18.4L 79.58924444444445 40L 74.95297777777778 40"
                                                                pathFrom="M 74.95297777777778 40L 74.95297777777778 40L 79.58924444444445 40L 79.58924444444445 40L 74.95297777777778 40"
                                                                cy="18.4" cx="79.58924444444445" j="10"
                                                                val="54" barHeight="21.6"
                                                                barWidth="4.636266666666667"></path>
                                                            <path id="SvgjsPath1503"
                                                                d="M 82.68008888888889 40L 82.68008888888889 30L 87.31635555555556 30L 87.31635555555556 40L 82.68008888888889 40"
                                                                fill="rgba(156,204,101,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMask377cce)"
                                                                pathTo="M 82.68008888888889 40L 82.68008888888889 30L 87.31635555555556 30L 87.31635555555556 40L 82.68008888888889 40"
                                                                pathFrom="M 82.68008888888889 40L 82.68008888888889 40L 87.31635555555556 40L 87.31635555555556 40L 82.68008888888889 40"
                                                                cy="30" cx="87.31635555555556" j="11"
                                                                val="25" barHeight="10"
                                                                barWidth="4.636266666666667"></path>
                                                            <path id="SvgjsPath1504"
                                                                d="M 90.40719999999999 40L 90.40719999999999 13.600000000000001L 95.04346666666666 13.600000000000001L 95.04346666666666 40L 90.40719999999999 40"
                                                                fill="rgba(156,204,101,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMask377cce)"
                                                                pathTo="M 90.40719999999999 40L 90.40719999999999 13.600000000000001L 95.04346666666666 13.600000000000001L 95.04346666666666 40L 90.40719999999999 40"
                                                                pathFrom="M 90.40719999999999 40L 90.40719999999999 40L 95.04346666666666 40L 95.04346666666666 40L 90.40719999999999 40"
                                                                cy="13.600000000000001" cx="95.04346666666666"
                                                                j="12" val="66" barHeight="26.4"
                                                                barWidth="4.636266666666667"></path>
                                                            <path id="SvgjsPath1505"
                                                                d="M 98.1343111111111 40L 98.1343111111111 23.6L 102.77057777777777 23.6L 102.77057777777777 40L 98.1343111111111 40"
                                                                fill="rgba(156,204,101,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMask377cce)"
                                                                pathTo="M 98.1343111111111 40L 98.1343111111111 23.6L 102.77057777777777 23.6L 102.77057777777777 40L 98.1343111111111 40"
                                                                pathFrom="M 98.1343111111111 40L 98.1343111111111 40L 102.77057777777777 40L 102.77057777777777 40L 98.1343111111111 40"
                                                                cy="23.6" cx="102.77057777777777" j="13"
                                                                val="41" barHeight="16.4"
                                                                barWidth="4.636266666666667"></path>
                                                            <path id="SvgjsPath1506"
                                                                d="M 105.86142222222222 40L 105.86142222222222 4.399999999999999L 110.49768888888889 4.399999999999999L 110.49768888888889 40L 105.86142222222222 40"
                                                                fill="rgba(156,204,101,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMask377cce)"
                                                                pathTo="M 105.86142222222222 40L 105.86142222222222 4.399999999999999L 110.49768888888889 4.399999999999999L 110.49768888888889 40L 105.86142222222222 40"
                                                                pathFrom="M 105.86142222222222 40L 105.86142222222222 40L 110.49768888888889 40L 110.49768888888889 40L 105.86142222222222 40"
                                                                cy="4.399999999999999" cx="110.49768888888889"
                                                                j="14" val="89" barHeight="35.6"
                                                                barWidth="4.636266666666667"></path>
                                                            <path id="SvgjsPath1507"
                                                                d="M 113.58853333333333 40L 113.58853333333333 14.8L 118.2248 14.8L 118.2248 40L 113.58853333333333 40"
                                                                fill="rgba(156,204,101,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMask377cce)"
                                                                pathTo="M 113.58853333333333 40L 113.58853333333333 14.8L 118.2248 14.8L 118.2248 40L 113.58853333333333 40"
                                                                pathFrom="M 113.58853333333333 40L 113.58853333333333 40L 118.2248 40L 118.2248 40L 113.58853333333333 40"
                                                                cy="14.8" cx="118.2248" j="15"
                                                                val="63" barHeight="25.2"
                                                                barWidth="4.636266666666667"></path>
                                                        </g>
                                                        <g id="SvgjsG1491" class="apexcharts-datalabels"
                                                            data:realIndex="0"></g>
                                                    </g>
                                                    <line id="SvgjsLine1522" x1="0" y1="0"
                                                        x2="115.90666666666667" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1523" x1="0" y1="0"
                                                        x2="115.90666666666667" y2="0"
                                                        stroke-dasharray="0" stroke-width="0"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1524" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1525" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1526" class="apexcharts-point-annotations"></g>
                                                </g>
                                                <rect id="SvgjsRect1484" width="0" height="0" x="0" y="0"
                                                    rx="0" ry="0" fill="#fefefe" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                                <g id="SvgjsG1510" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(-18, 0)"></g>
                                            </svg>
                                            <div class="apexcharts-legend"></div>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-series-group"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(156, 204, 101);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-label"></span><span
                                                                class="apexcharts-tooltip-text-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 164px; height: 41px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h3>1,62,564</h3>
                                    <h6 class="text-muted m-b-0">Products<i
                                            class="fa fa-caret-down text-c-red m-l-10"></i></h6>
                                </div>
                                <div class="col-6">
                                    <div id="seo-chart3" class="d-flex align-items-end" style="min-height: 40px;">
                                        <div id="apexcharts377cd8"
                                            class="apexcharts-canvas apexcharts377cd8 apexcharts-theme-light"
                                            style="width: 133px; height: 40px;"><svg id="SvgjsSvg1527"
                                                width="133" height="40" xmlns="http://www.w3.org/2000/svg"
                                                version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                style="background: transparent;">
                                                <g id="SvgjsG1529" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(0, 0)">
                                                    <defs id="SvgjsDefs1528">
                                                        <clipPath id="gridRectMask377cd8">
                                                            <rect id="SvgjsRect1534" width="140" height="43"
                                                                x="-3.5" y="-1.5" rx="0" ry="0"
                                                                fill="#ffffff" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMask377cd8">
                                                            <rect id="SvgjsRect1535" width="139" height="46"
                                                                x="-3" y="-3" rx="0" ry="0"
                                                                fill="#ffffff" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <line id="SvgjsLine1533" x1="0" y1="0"
                                                        x2="0" y2="40" stroke="#b6b6b6"
                                                        stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0"
                                                        y="0" width="1" height="40" fill="#b1b9c4"
                                                        filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                    <g id="SvgjsG1568" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG1569" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, 2.75)"></g>
                                                    </g>
                                                    <g id="SvgjsG1571" class="apexcharts-grid">
                                                        <g id="SvgjsG1572" class="apexcharts-gridlines-horizontal"
                                                            style="display: none;">
                                                            <line id="SvgjsLine1574" x1="0" y1="0"
                                                                x2="133" y2="0" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1575" x1="0" y1="8"
                                                                x2="133" y2="8" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1576" x1="0" y1="16"
                                                                x2="133" y2="16" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1577" x1="0" y1="24"
                                                                x2="133" y2="24" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1578" x1="0" y1="32"
                                                                x2="133" y2="32" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1579" x1="0" y1="40"
                                                                x2="133" y2="40" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline">
                                                            </line>
                                                        </g>
                                                        <g id="SvgjsG1573" class="apexcharts-gridlines-vertical"
                                                            style="display: none;"></g>
                                                        <line id="SvgjsLine1581" x1="0" y1="40"
                                                            x2="133" y2="40" stroke="transparent"
                                                            stroke-dasharray="0"></line>
                                                        <line id="SvgjsLine1580" x1="0" y1="1"
                                                            x2="0" y2="40" stroke="transparent"
                                                            stroke-dasharray="0"></line>
                                                    </g>
                                                    <g id="SvgjsG1537"
                                                        class="apexcharts-area-series apexcharts-plot-series">
                                                        <g id="SvgjsG1538" class="apexcharts-series"
                                                            seriesName="series1" data:longestSeries="true"
                                                            rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath1566"
                                                                d="M 0 40L 0 36.4L 11.083333333333334 13.600000000000001L 22.166666666666668 23.6L 33.25 4.399999999999999L 44.333333333333336 14.8L 55.41666666666667 30L 66.5 22.4L 77.58333333333334 35.2L 88.66666666666667 25.6L 99.75 32L 110.83333333333334 18.4L 121.91666666666667 30L 133 36.4L 133 40M 133 36.4z"
                                                                fill="rgba(255,82,82,0)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-area" index="0"
                                                                clip-path="url(#gridRectMask377cd8)"
                                                                pathTo="M 0 40L 0 36.4L 11.083333333333334 13.600000000000001L 22.166666666666668 23.6L 33.25 4.399999999999999L 44.333333333333336 14.8L 55.41666666666667 30L 66.5 22.4L 77.58333333333334 35.2L 88.66666666666667 25.6L 99.75 32L 110.83333333333334 18.4L 121.91666666666667 30L 133 36.4L 133 40M 133 36.4z"
                                                                pathFrom="M -1 40L -1 40L 11.083333333333334 40L 22.166666666666668 40L 33.25 40L 44.333333333333336 40L 55.41666666666667 40L 66.5 40L 77.58333333333334 40L 88.66666666666667 40L 99.75 40L 110.83333333333334 40L 121.91666666666667 40L 133 40">
                                                            </path>
                                                            <path id="SvgjsPath1567"
                                                                d="M 0 36.4L 11.083333333333334 13.600000000000001L 22.166666666666668 23.6L 33.25 4.399999999999999L 44.333333333333336 14.8L 55.41666666666667 30L 66.5 22.4L 77.58333333333334 35.2L 88.66666666666667 25.6L 99.75 32L 110.83333333333334 18.4L 121.91666666666667 30L 133 36.4"
                                                                fill="none" fill-opacity="1" stroke="#ff5252"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="3" stroke-dasharray="0"
                                                                class="apexcharts-area" index="0"
                                                                clip-path="url(#gridRectMask377cd8)"
                                                                pathTo="M 0 36.4L 11.083333333333334 13.600000000000001L 22.166666666666668 23.6L 33.25 4.399999999999999L 44.333333333333336 14.8L 55.41666666666667 30L 66.5 22.4L 77.58333333333334 35.2L 88.66666666666667 25.6L 99.75 32L 110.83333333333334 18.4L 121.91666666666667 30L 133 36.4"
                                                                pathFrom="M -1 40L -1 40L 11.083333333333334 40L 22.166666666666668 40L 33.25 40L 44.333333333333336 40L 55.41666666666667 40L 66.5 40L 77.58333333333334 40L 88.66666666666667 40L 99.75 40L 110.83333333333334 40L 121.91666666666667 40L 133 40">
                                                            </path>
                                                            <g id="SvgjsG1539"
                                                                class="apexcharts-series-markers-wrap">
                                                                <g id="SvgjsG1541" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask377cd8)">
                                                                    <circle id="SvgjsCircle1542" r="2"
                                                                        cx="0" cy="36.4"
                                                                        class="apexcharts-marker no-pointer-events w3c66fe"
                                                                        stroke="#ff5252" fill="#ff5252"
                                                                        fill-opacity="1" stroke-width="2"
                                                                        stroke-opacity="0.9" rel="0" j="0"
                                                                        index="0" default-marker-size="2">
                                                                    </circle>
                                                                    <circle id="SvgjsCircle1543" r="2"
                                                                        cx="11.083333333333334"
                                                                        cy="13.600000000000001"
                                                                        class="apexcharts-marker no-pointer-events w3c66fe"
                                                                        stroke="#ff5252" fill="#ff5252"
                                                                        fill-opacity="1" stroke-width="2"
                                                                        stroke-opacity="0.9" rel="1" j="1"
                                                                        index="0" default-marker-size="2">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG1544" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask377cd8)">
                                                                    <circle id="SvgjsCircle1545" r="2"
                                                                        cx="22.166666666666668" cy="23.6"
                                                                        class="apexcharts-marker no-pointer-events w3c66fe"
                                                                        stroke="#ff5252" fill="#ff5252"
                                                                        fill-opacity="1" stroke-width="2"
                                                                        stroke-opacity="0.9" rel="2" j="2"
                                                                        index="0" default-marker-size="2">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG1546" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask377cd8)">
                                                                    <circle id="SvgjsCircle1547" r="2"
                                                                        cx="33.25" cy="4.399999999999999"
                                                                        class="apexcharts-marker no-pointer-events w3c66fe"
                                                                        stroke="#ff5252" fill="#ff5252"
                                                                        fill-opacity="1" stroke-width="2"
                                                                        stroke-opacity="0.9" rel="3" j="3"
                                                                        index="0" default-marker-size="2">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG1548" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask377cd8)">
                                                                    <circle id="SvgjsCircle1549" r="2"
                                                                        cx="44.333333333333336" cy="14.8"
                                                                        class="apexcharts-marker no-pointer-events w3c66fe"
                                                                        stroke="#ff5252" fill="#ff5252"
                                                                        fill-opacity="1" stroke-width="2"
                                                                        stroke-opacity="0.9" rel="4" j="4"
                                                                        index="0" default-marker-size="2">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG1550" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask377cd8)">
                                                                    <circle id="SvgjsCircle1551" r="2"
                                                                        cx="55.41666666666667" cy="30"
                                                                        class="apexcharts-marker no-pointer-events w3c66fe"
                                                                        stroke="#ff5252" fill="#ff5252"
                                                                        fill-opacity="1" stroke-width="2"
                                                                        stroke-opacity="0.9" rel="5" j="5"
                                                                        index="0" default-marker-size="2">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG1552" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask377cd8)">
                                                                    <circle id="SvgjsCircle1553" r="2"
                                                                        cx="66.5" cy="22.4"
                                                                        class="apexcharts-marker no-pointer-events w3c66ff"
                                                                        stroke="#ff5252" fill="#ff5252"
                                                                        fill-opacity="1" stroke-width="2"
                                                                        stroke-opacity="0.9" rel="6" j="6"
                                                                        index="0" default-marker-size="2">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG1554" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask377cd8)">
                                                                    <circle id="SvgjsCircle1555" r="2"
                                                                        cx="77.58333333333334" cy="35.2"
                                                                        class="apexcharts-marker no-pointer-events w3c66ff"
                                                                        stroke="#ff5252" fill="#ff5252"
                                                                        fill-opacity="1" stroke-width="2"
                                                                        stroke-opacity="0.9" rel="7" j="7"
                                                                        index="0" default-marker-size="2">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG1556" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask377cd8)">
                                                                    <circle id="SvgjsCircle1557" r="2"
                                                                        cx="88.66666666666667" cy="25.6"
                                                                        class="apexcharts-marker no-pointer-events w3c66ff"
                                                                        stroke="#ff5252" fill="#ff5252"
                                                                        fill-opacity="1" stroke-width="2"
                                                                        stroke-opacity="0.9" rel="8" j="8"
                                                                        index="0" default-marker-size="2">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG1558" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask377cd8)">
                                                                    <circle id="SvgjsCircle1559" r="2"
                                                                        cx="99.75" cy="32"
                                                                        class="apexcharts-marker no-pointer-events w3c66ff"
                                                                        stroke="#ff5252" fill="#ff5252"
                                                                        fill-opacity="1" stroke-width="2"
                                                                        stroke-opacity="0.9" rel="9" j="9"
                                                                        index="0" default-marker-size="2">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG1560" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask377cd8)">
                                                                    <circle id="SvgjsCircle1561" r="2"
                                                                        cx="110.83333333333334" cy="18.4"
                                                                        class="apexcharts-marker no-pointer-events w3c66ff"
                                                                        stroke="#ff5252" fill="#ff5252"
                                                                        fill-opacity="1" stroke-width="2"
                                                                        stroke-opacity="0.9" rel="10" j="10"
                                                                        index="0" default-marker-size="2">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG1562" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask377cd8)">
                                                                    <circle id="SvgjsCircle1563" r="2"
                                                                        cx="121.91666666666667" cy="30"
                                                                        class="apexcharts-marker no-pointer-events w3c66ff"
                                                                        stroke="#ff5252" fill="#ff5252"
                                                                        fill-opacity="1" stroke-width="2"
                                                                        stroke-opacity="0.9" rel="11" j="11"
                                                                        index="0" default-marker-size="2">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG1564" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask377cd8)">
                                                                    <circle id="SvgjsCircle1565" r="2"
                                                                        cx="133" cy="36.4"
                                                                        class="apexcharts-marker no-pointer-events w3c66ff"
                                                                        stroke="#ff5252" fill="#ff5252"
                                                                        fill-opacity="1" stroke-width="2"
                                                                        stroke-opacity="0.9" rel="12" j="12"
                                                                        index="0" default-marker-size="2">
                                                                    </circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1540" class="apexcharts-datalabels"
                                                            data:realIndex="0"></g>
                                                    </g>
                                                    <line id="SvgjsLine1582" x1="0" y1="0"
                                                        x2="133" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1583" x1="0" y1="0"
                                                        x2="133" y2="0" stroke-dasharray="0"
                                                        stroke-width="0" class="apexcharts-ycrosshairs-hidden">
                                                    </line>
                                                    <g id="SvgjsG1584" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1585" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1586" class="apexcharts-point-annotations"></g>
                                                </g>
                                                <rect id="SvgjsRect1532" width="0" height="0" x="0" y="0"
                                                    rx="0" ry="0" fill="#fefefe" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                                <g id="SvgjsG1570" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(-18, 0)"></g>
                                            </svg>
                                            <div class="apexcharts-legend"></div>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-series-group"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(255, 82, 82);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-label"></span><span
                                                                class="apexcharts-tooltip-text-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 164px; height: 41px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- seo end -->

                <!-- Latest Customers start -->
                <div class="col-lg-8 col-md-12">
                    <div class="card table-card review-card">
                        <div class="card-header borderless ">
                            <h5>Customer Reviews</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal"></i>
                                    </button>
                                    <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item full-card"><a href="#!"><span><i
                                                        class="feather icon-maximize"></i> maximize</span><span
                                                    style="display:none"><i class="feather icon-minimize"></i>
                                                    Restore</span></a></li>
                                        <li class="dropdown-item minimize-card"><a href="#!"><span><i
                                                        class="feather icon-minus"></i> collapse</span><span
                                                    style="display:none"><i class="feather icon-plus"></i>
                                                    expand</span></a></li>
                                        <li class="dropdown-item reload-card"><a href="#!"><i
                                                    class="feather icon-refresh-cw"></i> reload</a></li>
                                        <li class="dropdown-item close-card"><a href="#!"><i
                                                    class="feather icon-trash"></i> remove</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="review-block">
                                <div class="row">
                                    <div class="col-sm-auto p-r-0">
                                        <img src="{{ asset('ablepro-master/dist') }}/assets/images/user/avatar-2.jpg"
                                            alt="user image" class="img-radius profile-img cust-img m-b-15">
                                    </div>
                                    <div class="col">
                                        <h6 class="m-b-15">John Deo <span class="float-right f-13 text-muted"> a
                                                week ago</span></h6>
                                        <a href="#!"><i
                                                class="feather icon-star-on f-18 text-c-yellow"></i></a>
                                        <a href="#!"><i
                                                class="feather icon-star-on f-18 text-c-yellow"></i></a>
                                        <a href="#!"><i
                                                class="feather icon-star-on f-18 text-c-yellow"></i></a>
                                        <a href="#!"><i class="feather icon-star f-18 text-muted"></i></a>
                                        <a href="#!"><i class="feather icon-star f-18 text-muted"></i></a>
                                        <p class="m-t-15 m-b-15 text-muted">Lorem Ipsum is simply dummy text of the
                                            printing and typesetting industry. Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500s, when an unknown printer
                                            took a
                                            galley of type and scrambled it to make a type specimen book.</p>
                                        <a href="#!" class="m-r-30 text-muted"><i
                                                class="feather icon-thumbs-up m-r-15"></i>Helpful?</a>
                                        <a href="#!"><i
                                                class="feather icon-heart-on text-c-red m-r-15"></i></a>
                                        <a href="#!"><i class="feather icon-edit text-muted"></i></a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-auto p-r-0">
                                        <img src="{{ asset('ablepro-master/dist') }}/assets/images/user/avatar-4.jpg"
                                            alt="user image" class="img-radius profile-img cust-img m-b-15">
                                    </div>
                                    <div class="col">
                                        <h6 class="m-b-15">Allina D’croze <span class="float-right f-13 text-muted">
                                                a week ago</span></h6>
                                        <a href="#!"><i
                                                class="feather icon-star-on f-18 text-c-yellow"></i></a>
                                        <a href="#!"><i class="feather icon-star f-18 text-muted"></i></a>
                                        <a href="#!"><i class="feather icon-star f-18 text-muted"></i></a>
                                        <a href="#!"><i class="feather icon-star f-18 text-muted"></i></a>
                                        <a href="#!"><i class="feather icon-star f-18 text-muted"></i></a>
                                        <p class="m-t-15 m-b-15 text-muted">Lorem Ipsum is simply dummy text of the
                                            printing and typesetting industry. Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500s, when an unknown printer
                                            took a
                                            galley of type and scrambled it to make a type specimen book.</p>
                                        <a href="#!" class="m-r-30 text-muted"><i
                                                class="feather icon-thumbs-up m-r-15"></i>Helpful?</a>
                                        <a href="#!"><i
                                                class="feather icon-heart-on text-c-red m-r-15"></i></a>
                                        <a href="#!"><i class="feather icon-edit text-muted"></i></a>
                                        <blockquote class="blockquote m-t-15 m-b-0">
                                            <h6>Allina D’croze</h6>
                                            <p class="m-b-0 text-muted">Lorem Ipsum is simply dummy text of the
                                                industry.</p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right  m-r-20">
                                <a href="#!" class="b-b-primary text-primary">View all Customer Reviews</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body" style="position: relative;">
                                    <h5 class="mb-3">Power</h5>
                                    <h2>2789<span class="text-muted m-l-5 f-14">kw</span></h2>
                                    <div id="power-card-chart1" style="min-height: 75px;">
                                        <div id="apexcharts377cb4"
                                            class="apexcharts-canvas apexcharts377cb4 apexcharts-theme-light"
                                            style="width: 296px; height: 75px;"><svg id="SvgjsSvg1588"
                                                width="296" height="75" xmlns="http://www.w3.org/2000/svg"
                                                version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                style="background: transparent;">
                                                <g id="SvgjsG1590" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(0, 0)">
                                                    <defs id="SvgjsDefs1589">
                                                        <clipPath id="gridRectMask377cb4">
                                                            <rect id="SvgjsRect1594" width="303" height="78"
                                                                x="-3.5" y="-1.5" rx="0" ry="0"
                                                                fill="#ffffff" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMask377cb4">
                                                            <rect id="SvgjsRect1595" width="298" height="77"
                                                                x="-1" y="-1" rx="0" ry="0"
                                                                fill="#ffffff" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <line id="SvgjsLine1593" x1="0" y1="0"
                                                        x2="0" y2="75" stroke="#b6b6b6"
                                                        stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0"
                                                        y="0" width="1" height="75" fill="#b1b9c4"
                                                        filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                    <g id="SvgjsG1602" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG1603" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"></g>
                                                    </g>
                                                    <g id="SvgjsG1605" class="apexcharts-grid">
                                                        <g id="SvgjsG1606" class="apexcharts-gridlines-horizontal"
                                                            style="display: none;">
                                                            <line id="SvgjsLine1608" x1="0" y1="0"
                                                                x2="296" y2="0" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1609" x1="0" y1="7.5"
                                                                x2="296" y2="7.5" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1610" x1="0" y1="15"
                                                                x2="296" y2="15" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1611" x1="0" y1="22.5"
                                                                x2="296" y2="22.5" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1612" x1="0" y1="30"
                                                                x2="296" y2="30" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1613" x1="0" y1="37.5"
                                                                x2="296" y2="37.5" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1614" x1="0" y1="45"
                                                                x2="296" y2="45" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1615" x1="0" y1="52.5"
                                                                x2="296" y2="52.5" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1616" x1="0" y1="60"
                                                                x2="296" y2="60" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1617" x1="0" y1="67.5"
                                                                x2="296" y2="67.5" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1618" x1="0" y1="75"
                                                                x2="296" y2="75" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline">
                                                            </line>
                                                        </g>
                                                        <g id="SvgjsG1607" class="apexcharts-gridlines-vertical"
                                                            style="display: none;"></g>
                                                        <line id="SvgjsLine1620" x1="0" y1="75"
                                                            x2="296" y2="75" stroke="transparent"
                                                            stroke-dasharray="0"></line>
                                                        <line id="SvgjsLine1619" x1="0" y1="1"
                                                            x2="0" y2="75" stroke="transparent"
                                                            stroke-dasharray="0"></line>
                                                    </g>
                                                    <g id="SvgjsG1597"
                                                        class="apexcharts-line-series apexcharts-plot-series">
                                                        <g id="SvgjsG1598" class="apexcharts-series"
                                                            seriesName="series1" data:longestSeries="true"
                                                            rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath1601"
                                                                d="M 0 37.49999999999999C 20.72 37.49999999999999 38.48 54.16666666666666 59.199999999999996 54.16666666666666C 79.91999999999999 54.16666666666666 97.67999999999999 20.83333333333333 118.39999999999999 20.83333333333333C 139.12 20.83333333333333 156.88 41.66666666666666 177.6 41.66666666666666C 198.32 41.66666666666666 216.07999999999998 8.333333333333329 236.79999999999998 8.333333333333329C 257.52 8.333333333333329 275.28 41.66666666666666 296 41.66666666666666"
                                                                fill="none" fill-opacity="1"
                                                                stroke="rgba(255,82,82,0.85)" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="3"
                                                                stroke-dasharray="0" class="apexcharts-line"
                                                                index="0" clip-path="url(#gridRectMask377cb4)"
                                                                pathTo="M 0 37.49999999999999C 20.72 37.49999999999999 38.48 54.16666666666666 59.199999999999996 54.16666666666666C 79.91999999999999 54.16666666666666 97.67999999999999 20.83333333333333 118.39999999999999 20.83333333333333C 139.12 20.83333333333333 156.88 41.66666666666666 177.6 41.66666666666666C 198.32 41.66666666666666 216.07999999999998 8.333333333333329 236.79999999999998 8.333333333333329C 257.52 8.333333333333329 275.28 41.66666666666666 296 41.66666666666666"
                                                                pathFrom="M -1 83.33333333333333L -1 83.33333333333333L 59.199999999999996 83.33333333333333L 118.39999999999999 83.33333333333333L 177.6 83.33333333333333L 236.79999999999998 83.33333333333333L 296 83.33333333333333">
                                                            </path>
                                                            <g id="SvgjsG1599"
                                                                class="apexcharts-series-markers-wrap">
                                                                <g class="apexcharts-series-markers">
                                                                    <circle id="SvgjsCircle1626" r="0"
                                                                        cx="0" cy="0"
                                                                        class="apexcharts-marker wtmefp1vff no-pointer-events"
                                                                        stroke="#ffffff" fill="#ff5252"
                                                                        fill-opacity="1" stroke-width="2"
                                                                        stroke-opacity="0.9"
                                                                        default-marker-size="0"></circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1600" class="apexcharts-datalabels"
                                                            data:realIndex="0"></g>
                                                    </g>
                                                    <line id="SvgjsLine1621" x1="0" y1="0"
                                                        x2="296" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1622" x1="0" y1="0"
                                                        x2="296" y2="0" stroke-dasharray="0"
                                                        stroke-width="0" class="apexcharts-ycrosshairs-hidden">
                                                    </line>
                                                    <g id="SvgjsG1623" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1624" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1625" class="apexcharts-point-annotations"></g>
                                                </g>
                                                <rect id="SvgjsRect1592" width="0" height="0" x="0" y="0"
                                                    rx="0" ry="0" fill="#fefefe" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                                <g id="SvgjsG1604" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(-18, 0)"></g>
                                            </svg>
                                            <div class="apexcharts-legend"></div>
                                            <div class="apexcharts-tooltip apexcharts-theme-dark">
                                                <div class="apexcharts-tooltip-series-group"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(255, 82, 82);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-label"></span><span
                                                                class="apexcharts-tooltip-text-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-auto">
                                            <div class="map-area">
                                                <h6 class="m-0">2876 <span> kw</span></h6>
                                                <p class="text-muted m-0">month</p>
                                            </div>
                                        </div>
                                        <div class="col col-auto">
                                            <div class="map-area">
                                                <h6 class="m-0">234 <span> kw</span></h6>
                                                <p class="text-muted m-0">Today</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 337px; height: 234px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body" style="position: relative;">
                                    <h5 class="mb-3">Temperature</h5>
                                    <h2>7.3<span class="text-muted m-l-10 f-14">deg</span></h2>
                                    <div id="power-card-chart3" style="min-height: 75px;">
                                        <div id="apexcharts377cbe"
                                            class="apexcharts-canvas apexcharts377cbe apexcharts-theme-light"
                                            style="width: 296px; height: 75px;"><svg id="SvgjsSvg1628"
                                                width="296" height="75" xmlns="http://www.w3.org/2000/svg"
                                                version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                style="background: transparent;">
                                                <g id="SvgjsG1630" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(0, 0)">
                                                    <defs id="SvgjsDefs1629">
                                                        <clipPath id="gridRectMask377cbe">
                                                            <rect id="SvgjsRect1634" width="303" height="78"
                                                                x="-3.5" y="-1.5" rx="0" ry="0"
                                                                fill="#ffffff" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMask377cbe">
                                                            <rect id="SvgjsRect1635" width="298" height="77"
                                                                x="-1" y="-1" rx="0" ry="0"
                                                                fill="#ffffff" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <line id="SvgjsLine1633" x1="0" y1="0"
                                                        x2="0" y2="75" stroke="#b6b6b6"
                                                        stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0"
                                                        y="0" width="1" height="75" fill="#b1b9c4"
                                                        filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                    <g id="SvgjsG1642" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG1643" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"></g>
                                                    </g>
                                                    <g id="SvgjsG1645" class="apexcharts-grid">
                                                        <g id="SvgjsG1646" class="apexcharts-gridlines-horizontal"
                                                            style="display: none;">
                                                            <line id="SvgjsLine1648" x1="0" y1="0"
                                                                x2="296" y2="0" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1649" x1="0" y1="7.5"
                                                                x2="296" y2="7.5" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1650" x1="0" y1="15"
                                                                x2="296" y2="15" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1651" x1="0" y1="22.5"
                                                                x2="296" y2="22.5" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1652" x1="0" y1="30"
                                                                x2="296" y2="30" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1653" x1="0" y1="37.5"
                                                                x2="296" y2="37.5" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1654" x1="0" y1="45"
                                                                x2="296" y2="45" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1655" x1="0" y1="52.5"
                                                                x2="296" y2="52.5" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1656" x1="0" y1="60"
                                                                x2="296" y2="60" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1657" x1="0" y1="67.5"
                                                                x2="296" y2="67.5" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1658" x1="0" y1="75"
                                                                x2="296" y2="75" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline">
                                                            </line>
                                                        </g>
                                                        <g id="SvgjsG1647" class="apexcharts-gridlines-vertical"
                                                            style="display: none;"></g>
                                                        <line id="SvgjsLine1660" x1="0" y1="75"
                                                            x2="296" y2="75" stroke="transparent"
                                                            stroke-dasharray="0"></line>
                                                        <line id="SvgjsLine1659" x1="0" y1="1"
                                                            x2="0" y2="75" stroke="transparent"
                                                            stroke-dasharray="0"></line>
                                                    </g>
                                                    <g id="SvgjsG1637"
                                                        class="apexcharts-line-series apexcharts-plot-series">
                                                        <g id="SvgjsG1638" class="apexcharts-series"
                                                            seriesName="series1" data:longestSeries="true"
                                                            rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath1641"
                                                                d="M 0 37.49999999999999C 20.72 37.49999999999999 38.48 54.16666666666666 59.199999999999996 54.16666666666666C 79.91999999999999 54.16666666666666 97.67999999999999 20.83333333333333 118.39999999999999 20.83333333333333C 139.12 20.83333333333333 156.88 41.66666666666666 177.6 41.66666666666666C 198.32 41.66666666666666 216.07999999999998 8.333333333333329 236.79999999999998 8.333333333333329C 257.52 8.333333333333329 275.28 41.66666666666666 296 41.66666666666666"
                                                                fill="none" fill-opacity="1"
                                                                stroke="rgba(255,186,87,0.85)" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="3"
                                                                stroke-dasharray="0" class="apexcharts-line"
                                                                index="0" clip-path="url(#gridRectMask377cbe)"
                                                                pathTo="M 0 37.49999999999999C 20.72 37.49999999999999 38.48 54.16666666666666 59.199999999999996 54.16666666666666C 79.91999999999999 54.16666666666666 97.67999999999999 20.83333333333333 118.39999999999999 20.83333333333333C 139.12 20.83333333333333 156.88 41.66666666666666 177.6 41.66666666666666C 198.32 41.66666666666666 216.07999999999998 8.333333333333329 236.79999999999998 8.333333333333329C 257.52 8.333333333333329 275.28 41.66666666666666 296 41.66666666666666"
                                                                pathFrom="M -1 83.33333333333333L -1 83.33333333333333L 59.199999999999996 83.33333333333333L 118.39999999999999 83.33333333333333L 177.6 83.33333333333333L 236.79999999999998 83.33333333333333L 296 83.33333333333333">
                                                            </path>
                                                            <g id="SvgjsG1639"
                                                                class="apexcharts-series-markers-wrap">
                                                                <g class="apexcharts-series-markers">
                                                                    <circle id="SvgjsCircle1666" r="0"
                                                                        cx="0" cy="0"
                                                                        class="apexcharts-marker wz2akyacz no-pointer-events"
                                                                        stroke="#ffffff" fill="#ffba57"
                                                                        fill-opacity="1" stroke-width="2"
                                                                        stroke-opacity="0.9"
                                                                        default-marker-size="0"></circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1640" class="apexcharts-datalabels"
                                                            data:realIndex="0"></g>
                                                    </g>
                                                    <line id="SvgjsLine1661" x1="0" y1="0"
                                                        x2="296" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1662" x1="0" y1="0"
                                                        x2="296" y2="0" stroke-dasharray="0"
                                                        stroke-width="0" class="apexcharts-ycrosshairs-hidden">
                                                    </line>
                                                    <g id="SvgjsG1663" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1664" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1665" class="apexcharts-point-annotations"></g>
                                                </g>
                                                <rect id="SvgjsRect1632" width="0" height="0" x="0" y="0"
                                                    rx="0" ry="0" fill="#fefefe" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                                <g id="SvgjsG1644" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(-18, 0)"></g>
                                            </svg>
                                            <div class="apexcharts-legend"></div>
                                            <div class="apexcharts-tooltip apexcharts-theme-dark">
                                                <div class="apexcharts-tooltip-series-group"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(255, 186, 87);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-label"></span><span
                                                                class="apexcharts-tooltip-text-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-auto">
                                            <div class="map-area">
                                                <h6 class="m-0">4.5 <span> deg</span></h6>
                                                <p class="text-muted m-0">month</p>
                                            </div>
                                        </div>
                                        <div class="col col-auto">
                                            <div class="map-area">
                                                <h6 class="m-0">0.5 <span> deg</span></h6>

                                                <p class="text-muted m-0">Today</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 337px; height: 234px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card chat-card">
                        <div class="card-header">
                            <h5>Chat</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal"></i>
                                    </button>
                                    <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item full-card"><a href="#!"><span><i
                                                        class="feather icon-maximize"></i> maximize</span><span
                                                    style="display:none"><i class="feather icon-minimize"></i>
                                                    Restore</span></a></li>
                                        <li class="dropdown-item minimize-card"><a href="#!"><span><i
                                                        class="feather icon-minus"></i> collapse</span><span
                                                    style="display:none"><i class="feather icon-plus"></i>
                                                    expand</span></a></li>
                                        <li class="dropdown-item reload-card"><a href="#!"><i
                                                    class="feather icon-refresh-cw"></i> reload</a></li>
                                        <li class="dropdown-item close-card"><a href="#!"><i
                                                    class="feather icon-trash"></i> remove</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row m-b-20 received-chat">
                                <div class="col-auto p-r-0">
                                    <img src="{{ asset('ablepro-master/dist') }}/assets/images/user/avatar-2.jpg"
                                        alt="user image" class="img-radius wid-40">
                                </div>
                                <div class="col">
                                    <div class="msg">
                                        <p class="m-b-0">Nice to meet you!</p>
                                    </div>
                                    <p class="text-muted m-b-0"><i class="fa fa-clock-o m-r-10"></i>10:20am</p>
                                </div>
                            </div>
                            <div class="row m-b-20 send-chat">
                                <div class="col">
                                    <div class="msg">
                                        <p class="m-b-0">Nice to meet you!</p>
                                    </div>
                                    <p class="text-muted m-b-0"><i class="fa fa-clock-o m-r-10"></i>10:20am</p>
                                </div>
                                <div class="col-auto p-l-0">
                                    <img src="{{ asset('ablepro-master/dist') }}/assets/images/user/avatar-3.jpg"
                                        alt="user image" class="img-radius wid-40">
                                </div>
                            </div>
                            <div class="row m-b-20 received-chat">
                                <div class="col-auto p-r-0">
                                    <img src="{{ asset('ablepro-master/dist') }}/assets/images/user/avatar-2.jpg"
                                        alt="user image" class="img-radius wid-40">
                                </div>
                                <div class="col">
                                    <div class="msg">
                                        <p class="m-b-0">Nice to meet you!</p>
                                        <img src="{{ asset('ablepro-master/dist') }}/assets/images/widget/dashborad-1.jpg"
                                            alt="">
                                        <img src="{{ asset('ablepro-master/dist') }}/assets/images/widget/dashborad-3.jpg"
                                            alt="">
                                    </div>
                                    <p class="text-muted m-b-0"><i class="fa fa-clock-o m-r-10"></i>10:20am</p>
                                </div>
                            </div>
                            <div class="form-group m-t-15">
                                <label class="floating-label" for="Project">Send message</label>
                                <input type="text" name="task-insert" class="form-control" id="Project">
                                <div class="form-icon">
                                    <button class="btn btn-primary btn-icon">
                                        <i class="feather icon-message-circle"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card user-card2">
                        <div class="card-body text-center">
                            <h6 class="m-b-15">Project Risk</h6>
                            <div class="risk-rate">
                                <span><b>5</b></span>
                            </div>
                            <h6 class="m-b-10 m-t-10">Balanced</h6>
                            <a href="#!" class="text-c-green b-b-success">Change Your Risk</a>
                            <div class="row justify-content-center m-t-10 b-t-default m-l-0 m-r-0">
                                <div class="col m-t-15 b-r-default">
                                    <h6 class="text-muted">Nr</h6>
                                    <h6>AWS 2455</h6>
                                </div>
                                <div class="col m-t-15">
                                    <h6 class="text-muted">Created</h6>
                                    <h6>30th Sep</h6>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-success btn-block">Download Overall Report</button>
                    </div>
                </div>
                <!-- Latest Customers end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Js -->
    <script src="{{ asset('ablepro-master/dist/assets/js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('ablepro-master/dist/assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('ablepro-master/dist/assets/js/ripple.js') }}"></script>
    <script src="{{ asset('ablepro-master/dist/assets/js/pcoded.min.js') }}"></script>
    <div class="fixed-button active"><a
            href="https://themeforest.net/item/able-pro-responsive-bootstrap-4-admin-template/19300403?ref=phoenixcoded"
            target="_blank" class="btn btn-md btn-primary"><i class="fa fa-shopping-cart"
                aria-hidden="true"></i> Upgrade To Pro</a> </div>

    <!-- Apex Chart -->
    <script src="{{ asset('ablepro-master/dist/assets/js/plugins/apexcharts.min.js') }}"></script>


    <!-- custom-chart js -->
    <script src="{{ asset('ablepro-master/dist/assets/js/pages/dashboard-main.js') }}"></script>



    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
        style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1002"></defs>
        <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
        <path id="SvgjsPath1004"
            d="M-1 40L-1 40L13.5 40L27 40L40.5 40L54 40L67.5 40L81 40L94.5 40L108 40L121.5 40L135 40L148.5 40L162 40C162 40 162 40 162 40 ">
        </path>
    </svg>
</body>

</html>
