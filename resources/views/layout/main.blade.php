<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script>window.Laravel = {csrfToken: '{{ csrf_token()}} ' }</script>
        <meta name="_token" content="{{ csrf_token() }}">
         <link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
         <link href="{{  asset('plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/app.css')}}" rel="stylesheet">
        <link href="{{ asset('css/syscode.css')}}" rel="stylesheet">
        <title>Laravel</title>
    </head>
<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-md">
    <div class="page-wrapper">
             <!-- BEGIN HEADER -->
             <div class="page-header navbar navbar-fixed-top">
                 <!-- BEGIN HEADER INNER -->
                 <div class="page-header-inner ">
                     <!-- BEGIN LOGO -->
                     <div class="page-logo">
                         <a href="index.html">
                             <img src="{{  asset('img/logo.png') }}" alt="logo" class="logo-default" /> </a>
                         <div class="menu-toggler sidebar-toggler">
                             <span></span>
                         </div>
                     </div>
                     <!-- END LOGO -->
                     <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                     <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                         <span></span>
                     </a>
                     <!-- END RESPONSIVE MENU TOGGLER -->
                     <!-- BEGIN TOP NAVIGATION MENU -->
                     <div class="top-menu">
                         <ul class="nav navbar-nav pull-right">
                             <li class="dropdown dropdown-user">
                                 <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                     <img alt="" class="img-circle" src="{{  asset('img/avatar3_small.jpg') }}" />
                                     <span class="username username-hide-on-mobile">usuario logueado</span>
                                     <i class="fa fa-angle-down"></i>
                                 </a>
                                  <ul class="dropdown-menu dropdown-menu-default">
                                     <li>
                                         <a href="" onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                             <i class="icon-key"></i>Salir</a>
                                             <form id="logout-form" action="" method="POST" style="display: none;">
                                                 {{ csrf_field() }}
                                             </form>
                                     </li>
                                 </ul>
                             </li>
                             <!-- END USER LOGIN DROPDOWN -->
                             <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                             <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                             <li class="dropdown dropdown-quick-sidebar-toggler">
                                 <a href="javascript:;" class="dropdown-toggle">
                                     <i class="icon-logout"></i>
                                 </a>
                             </li>
                             <!-- END QUICK SIDEBAR TOGGLER -->
                         </ul>
                     </div>
                     <!-- END TOP NAVIGATION MENU -->
                 </div>
                 <!-- END HEADER INNER -->
             </div>
             <!-- END HEADER -->
             <!-- BEGIN HEADER & CONTENT DIVIDER -->
             <div class="clearfix"> </div>
             <!-- END HEADER & CONTENT DIVIDER -->
             <!-- BEGIN CONTAINER -->
             <div class="page-container">
                 <!-- BEGIN SIDEBAR -->
                 <div id="app-2" class="page-sidebar-wrapper">
                     <!-- BEGIN SIDEBAR -->
                     <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                     <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                     <div class="page-sidebar navbar-collapse collapse">
                         <!-- BEGIN SIDEBAR MENU -->
                         <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                             <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                             <li class="sidebar-toggler-wrapper hide">
                                 <div class="sidebar-toggler">
                                     <span></span>
                                 </div>
                             </li>
                             <!-- END SIDEBAR TOGGLER BUTTON -->
                             <li class="sidebar-search-wrapper">
                                 <form class="sidebar-search  sidebar-search-bordered" action="page_general_search_3.html" method="POST">
                                     <a href="javascript:;" class="remove">
                                         <i class="icon-close"></i>
                                     </a>
                                     <div class="input-group">
                                         <input type="text" class="form-control" placeholder="Buscar...">
                                         <span class="input-group-btn">
                                             <a href="javascript:;" class="btn submit">
                                                 <i class="icon-magnifier"></i>
                                             </a>
                                         </span>
                                     </div>
                                 </form>
                                 <!-- END RESPONSIVE QUICK SEARCH FORM -->
                             </li>
                             <li class="nav-item start ">
                                 <a href="{{ asset('home')}}" class="nav-link nav-toggle">
                                     <i class="icon-home"></i>
                                     <span class="title">Dashboard</span>
                                     <span class="arrow"></span>
                                 </a>
                             </li>
                             <li class="heading">
                                 <h3 class="uppercase">Estudios</h3>
                             </li>
                            
                             <li class="nav-item  ">
                                 <a href="javascript:;" class="nav-link nav-toggle">
                                     <i class="icon-diamond"></i>
                                     <span class="title">Consumidor</span>
                                     <span class="arrow"></span>
                                 </a>
                                 <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="ui_colors.html" class="nav-link ">
                                            <span class="title">Color Library</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="ui_metronic_grid.html" class="nav-link ">
                                            <span class="title">Metronic Grid System</span>
                                        </a>
                                    </li>
                                    </ul>
                             </li>
                             <li class="nav-item  ">
                                 <a href="javascript:;" class="nav-link nav-toggle">
                                     <i class="icon-diamond"></i>
                                     <span class="title">Producto</span>
                                     <span class="arrow"></span>
                                 </a>
                             </li>
                             <li class="nav-item  ">
                                 <a href="javascript:;" class="nav-link nav-toggle">
                                     <i class="icon-diamond"></i>
                                     <span class="title">Publicidad</span>
                                     <span class="arrow"></span>
                                 </a>
                             </li>
                             <li class="nav-item  ">
                                 <a href="javascript:;" class="nav-link nav-toggle">
                                     <i class="icon-diamond"></i>
                                     <span class="title">Mercado</span>
                                     <span class="arrow"></span>
                                 </a>
                             </li>
                         </ul>
                         <!-- END SIDEBAR MENU -->
                         <!-- END SIDEBAR MENU -->
                     </div>
                     <!-- END SIDEBAR -->
                 </div>
                 <!-- END SIDEBAR -->
                 <!-- BEGIN CONTENT -->
                 <div class="page-content-wrapper">
                     <!-- BEGIN CONTENT BODY -->
                     <div class="page-content">
                         <!-- BEGIN PAGE HEADER-->
                         <!-- BEGIN THEME PANEL -->
                         <!-- END THEME PANEL -->
                         <!-- BEGIN PAGE BAR -->
                         <div  class="page-bar">
                             @yield('breadcrumbs')
                         </div>
                         <!-- END PAGE BAR -->
                         <!-- BEGIN PAGE TITLE-->
                         <h1 class="page-title"> Blank Page Layout
                             <small>blank page layout</small>
                         </h1>
                         <!-- END PAGE TITLE-->
                         <!-- END PAGE HEADER-->
                         @yield('content')
                     </div>
                     <!-- END CONTENT BODY -->
                 </div>
                 <!-- END CONTENT -->
             </div>
             <!-- END CONTAINER -->
             <!-- FOOTER -->
             <div class="page-footer">
               <div class="page-footer-inner"> 2017 &copy; Syscode By Enel Villafranca |
                       <a target="_blank" href="http://syscode.com.ve">Syscode</a>
               </div>
               <div class="scroll-to-top">
                   <i class="icon-arrow-up"></i>
               </div>
           </div>
             <!-- END FOOTER -->
         </div>
         <script src="{{ asset('js/app.js')}}"></script>
        <script src="{{ asset('js/syscode.js')}}"></script>      
    </body>
</html>