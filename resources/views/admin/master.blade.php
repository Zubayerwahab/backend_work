<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/user-management-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Jan 2024 21:07:46 GMT -->
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>FRESH -@yield('title')</title>
    <link rel="icon" href="{{ asset('/') }}admin/assets/img/mini_logo.png" type="image/png">

    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/css/bootstrap1.min.css" />

    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/vendors/themefy_icon/themify-icons.css" />

    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/vendors/niceselect/css/nice-select.css" />

    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/vendors/owl_carousel/css/owl.carousel.css" />

    <link rel="stylesheet" href="vendors/gijgo/gijgo.min.css" />

    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/vendors/font_awesome/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/vendors/tagsinput/tagsinput.css" />

    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/vendors/datepicker/date-picker.css" />
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/vendors/vectormap-home/vectormap-2.0.2.css" />

    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/vendors/scroll/scrollable.css" />

    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/vendors/datatable/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/vendors/datatable/css/responsive.dataTables.min.css" />
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/vendors/datatable/css/buttons.dataTables.min.css" />

    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/vendors/text_editor/summernote-bs4.css" />

    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/vendors/morris/morris.css">

    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/vendors/material_icon/material-icons.css" />

    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/css/metisMenu.css">

    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/css/style1.css" />
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/css/colors/default.css" id="colorSkinCSS">
    @yield('style')
</head>
<body class="crm_body_bg">


<nav class="sidebar">
    <div class="logo d-flex justify-content-between">
        <a class="large_logo" href="index-2.html"><img src="{{ asset('/') }}admin/assets/img/logo.png" alt></a>
        <a class="small_logo" href="index-2.html"><img src="{{ asset('/') }}admin/assets/img/mini_logo.png" alt></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{ asset('/') }}admin/assets/img/menu-icon/dashboard.svg" alt>
                </div>
                <div class="nav_title">
                    <span>User Management </span>
                </div>
            </a>
            <ul>
                <li><a href="index_2.html">Default</a></li>
                <li><a href="index_3.html">Dark Sidebar</a></li>
                <li><a href="index-2.html">Light Sidebar</a></li>
            </ul>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{ asset('/') }}admin/assets/img/menu-icon/2.svg" alt>
                </div>
                <div class="nav_title">
                    <span>Application </span>
                </div>
            </a>
            <ul>
                <li><a href="editor.html">editor</a></li>
                <li><a href="mail_box.html">Mail Box</a></li>
                <li><a href="chat.html">Chat</a></li>
                <li><a href="faq.html">FAQ</a></li>
            </ul>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{ asset('/') }}admin/assets/img/menu-icon/3.svg" alt>
                </div>
                <div class="nav_title">
                    <span>Pages</span>
                </div>
            </a>
            <ul>
                <li><a href="login.html">Login</a></li>
                <li><a href="resister.html">Register</a></li>
                <li><a href="error_400.html">Error 404</a></li>
                <li><a href="error_500.html">Error 500</a></li>
                <li><a href="forgot_pass.html">Forgot Password</a></li>
                <li><a href="gallery.html">Gallery</a></li>
            </ul>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{ asset('/') }}admin/assets/img/menu-icon/4.svg" alt>
                </div>
                <div class="nav_title">
                    <span>Admins</span>
                </div>
            </a>
            <ul>
                <li><a href="admin_list.html">Admin List</a></li>
                <li><a href="add_new_admin.html">Add New Admin</a></li>
            </ul>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{ asset('/') }}admin/assets/img/menu-icon/11.svg" alt>
                </div>
                <div class="nav_title">
                    <span>Role & Permissions</span>
                </div>
            </a>
            <ul>
                <li><a href="module_setting.html">Module Setting</a></li>
                <li><a href="role_permissions.html">Role & Permissions</a></li>
            </ul>
        </li>
        <li class>
            <a href="navs.html" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{ asset('/') }}admin/assets/img/menu-icon/12.svg" alt>
                </div>
                <div class="nav_title">
                    <span>Navs</span>
                </div>
            </a>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{ asset('/') }}admin/assets/img/menu-icon/5.svg" alt>
                </div>
                <div class="nav_title">
                    <span>Users</span>
                </div>
            </a>
            <ul>
                <li><a href="user_list.html">Users List</a></li>
                <li><a href="add_new_user.html">Add New User</a></li>
            </ul>
        </li>
        <li>
            <a href="Builder.html" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{ asset('/') }}admin/assets/img/menu-icon/6.svg" alt>
                </div>
                <div class="nav_title">
                    <span>Builder </span>
                </div>
            </a>
        </li>
        <li class>
            <a href="invoice.html" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{ asset('/') }}admin/assets/img/menu-icon/7.svg" alt>
                </div>
                <div class="nav_title">
                    <span>Invoice</span>
                </div>
            </a>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{ asset('/') }}admin/assets/img/menu-icon/8.svg" alt>
                </div>
                <div class="nav_title">
                    <span>forms</span>
                </div>
            </a>
            <ul>
                <li><a href="Basic_Elements.html">Basic Elements</a></li>
                <li><a href="Groups.html">Groups</a></li>
                <li><a href="Max_Length.html">Max Length</a></li>
                <li><a href="Layouts.html">Layouts</a></li>
            </ul>
        </li>
        <li class>
            <a href="Board.html" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{ asset('/') }}admin/assets/img/menu-icon/9.svg" alt>
                </div>
                <div class="nav_title">
                    <span>Board</span>
                </div>
            </a>
        </li>
        <li class>
            <a href="calender.html" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{ asset('/') }}admin/assets/img/menu-icon/10.svg" alt>
                </div>
                <div class="nav_title">
                    <span>Calander</span>
                </div>
            </a>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{ asset('/') }}admin/assets/img/menu-icon/11.svg" alt>
                </div>
                <div class="nav_title">
                    <span>Themes</span>
                </div>
            </a>
            <ul>
                <li><a href="dark_sidebar.html">Dark Sidebar</a></li>
                <li><a href="light_sidebar.html">light Sidebar</a></li>
            </ul>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{ asset('/') }}admin/assets/img/menu-icon/12.svg" alt>
                </div>
                <div class="nav_title">
                    <span>General</span>
                </div>
            </a>
            <ul>
                <li><a href="Minimized_Aside.html">Minimized Aside</a></li>
                <li><a href="empty_page.html">Empty page</a></li>
                <li><a href="fixed_footer.html">Fixed Footer</a></li>
            </ul>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{ asset('/') }}admin/assets/img/menu-icon/13.svg" alt>
                </div>
                <div class="nav_title">
                    <span>Products</span>
                </div>
            </a>
            <ul>
                <li><a href="Products.html">Products</a></li>
                <li><a href="Product_Details.html">Product Details</a></li>
                <li><a href="Cart.html">Cart</a></li>
                <li><a href="Checkout.html">Checkout</a></li>
            </ul>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{ asset('/') }}admin/assets/img/menu-icon/14.svg" alt>
                </div>
                <div class="nav_title">
                    <span>Icons</span>
                </div>
            </a>
            <ul>
                <li><a href="Fontawesome_Icon.html">Fontawesome Icon</a></li>
                <li><a href="themefy_icon.html">themefy icon</a></li>
            </ul>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{ asset('/') }}admin/assets/img/menu-icon/15.svg" alt>
                </div>
                <div class="nav_title">
                    <span>Animations</span>
                </div>
            </a>
            <ul>
                <li><a href="wow_animation.html">Animate</a></li>
                <li><a href="Scroll_Reveal.html">Scroll Reveal</a></li>
                <li><a href="tilt.html">Tilt Animation</a></li>
            </ul>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{ asset('/') }}admin/assets/img/menu-icon/16.svg" alt>
                </div>
                <div class="nav_title">
                    <span>Components</span>
                </div>
            </a>
            <ul>
                <li><a href="accordion.html">Accordions</a></li>
                <li><a href="Scrollable.html">Scrollable</a></li>
                <li><a href="notification.html">Notifications</a></li>
                <li><a href="carousel.html">Carousel</a></li>
                <li><a href="Pagination.html">Pagination</a></li>
            </ul>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{ asset('/') }}admin/assets/img/menu-icon/17.svg" alt>
                </div>
                <div class="nav_title">
                    <span>Table</span>
                </div>
            </a>
            <ul>
                <li><a href="data_table.html">Data Tables</a></li>
                <li><a href="bootstrap_table.html">Bootstrap</a></li>
            </ul>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{ asset('/') }}admin/assets/img/menu-icon/18.svg" alt>
                </div>
                <div class="nav_title">
                    <span>Cards</span>
                </div>
            </a>
            <ul>
                <li><a href="basic_card.html">Basic Card</a></li>
                <li><a href="theme_card.html">Theme Card</a></li>
                <li><a href="dargable_card.html">Draggable Card</a></li>
            </ul>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{ asset('/') }}admin/assets/img/menu-icon/19.svg" alt>
                </div>
                <div class="nav_title">
                    <span>Charts</span>
                </div>
            </a>
            <ul>
                <li><a href="chartjs.html">ChartJS</a></li>
                <li><a href="apex_chart.html">Apex Charts</a></li>
                <li><a href="chart_sparkline.html">Chart sparkline</a></li>
                <li><a href="am_chart.html">am-charts</a></li>
                <li><a href="nvd3_charts.html">nvd3 charts.</a></li>
            </ul>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{ asset('/') }}admin/assets/img/menu-icon/20.svg" alt>
                </div>
                <div class="nav_title">
                    <span>UI Kits </span>
                </div>
            </a>
            <ul>
                <li><a href="colors.html">colors</a></li>
                <li><a href="Alerts.html">Alerts</a></li>
                <li><a href="buttons.html">Buttons</a></li>
                <li><a href="modal.html">modal</a></li>
                <li><a href="dropdown.html">Droopdowns</a></li>
                <li><a href="Badges.html">Badges</a></li>
                <li><a href="Loading_Indicators.html">Loading Indicators</a></li>
                <li><a href="color_plate.html">Color Plate</a></li>
                <li><a href="typography.html">Typography</a></li>
                <li><a href="datepicker.html">Date Picker</a></li>
            </ul>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{ asset('/') }}admin/assets/img/menu-icon/21.svg" alt>
                </div>
                <div class="nav_title">
                    <span>Widgets</span>
                </div>
            </a>
            <ul>
                <li><a href="chart_box_1.html">Chart Boxes 1</a></li>
                <li><a href="profilebox.html">Profile Box</a></li>
            </ul>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{ asset('/') }}admin/assets/img/menu-icon/12.svg" alt>
                </div>
                <div class="nav_title">
                    <span>Maps</span>
                </div>
            </a>
            <ul>
                <li><a href="mapjs.html">Maps JS</a></li>
                <li><a href="vector_map.html">Vector Maps</a></li>
            </ul>
        </li>
    </ul>
</nav>

<section class="main_content dashboard_part large_header_bg">

    <div class="container-fluid g-0">
        <div class="row">
            <div class="col-lg-12 p-0 ">
                <div class="header_iner d-flex justify-content-between align-items-center">
                    <div class="sidebar_icon d-lg-none">
                        <i class="ti-menu"></i>
                    </div>
                    <div class="line_icon open_miniSide d-none d-lg-block">
                        <img src="{{ asset('/') }}admin/assets/img/line_img.png" alt>
                    </div>
                    <div class="serach_field-area d-flex align-items-center">
                        <div class="search_inner">
                            <form action="#">
                                <div class="search_field">
                                    <input type="text" placeholder="Search">
                                </div>
                                <button type="submit"> <img src="{{ asset('/') }}admin/assets/img/icon/icon_search.svg" alt> </button>
                            </form>
                        </div>
                    </div>
                    <div class="header_right d-flex justify-content-between align-items-center">
                        <div class="header_notification_warp d-flex align-items-center">
                            <li>
                                <a class="bell_notification_clicker" href="#"> <img src="{{ asset('/') }}admin/assets/img/icon/bell.svg" alt>
                                    <span>2</span>
                                </a>

                                <div class="Menu_NOtification_Wrap">
                                    <div class="notification_Header">
                                        <h4>Notifications</h4>
                                    </div>
                                    <div class="Notification_body">

                                        <div class="single_notify d-flex align-items-center">
                                            <div class="notify_thumb">
                                                <a href="#"><img src="{{ asset('/') }}admin/assets/img/staf/2.png" alt></a>
                                            </div>
                                            <div class="notify_content">
                                                <a href="#"><h5>Cool Marketing </h5></a>
                                                <p>Lorem ipsum dolor sit amet</p>
                                            </div>
                                        </div>

                                        <div class="single_notify d-flex align-items-center">
                                            <div class="notify_thumb">
                                                <a href="#"><img src="{{ asset('/') }}admin/assets/img/staf/4.png" alt></a>
                                            </div>
                                            <div class="notify_content">
                                                <a href="#"><h5>Awesome packages</h5></a>
                                                <p>Lorem ipsum dolor sit amet</p>
                                            </div>
                                        </div>

                                        <div class="single_notify d-flex align-items-center">
                                            <div class="notify_thumb">
                                                <a href="#"><img src="{{ asset('/') }}admin/assets/img/staf/3.png" alt></a>
                                            </div>
                                            <div class="notify_content">
                                                <a href="#"><h5>what a packages</h5></a>
                                                <p>Lorem ipsum dolor sit amet</p>
                                            </div>
                                        </div>

                                        <div class="single_notify d-flex align-items-center">
                                            <div class="notify_thumb">
                                                <a href="#"><img src="{{ asset('/') }}admin/assets/img/staf/2.png" alt></a>
                                            </div>
                                            <div class="notify_content">
                                                <a href="#"><h5>Cool Marketing </h5></a>
                                                <p>Lorem ipsum dolor sit amet</p>
                                            </div>
                                        </div>

                                        <div class="single_notify d-flex align-items-center">
                                            <div class="notify_thumb">
                                                <a href="#"><img src="{{ asset('/') }}admin/assets/img/staf/4.png" alt></a>
                                            </div>
                                            <div class="notify_content">
                                                <a href="#"><h5>Awesome packages</h5></a>
                                                <p>Lorem ipsum dolor sit amet</p>
                                            </div>
                                        </div>

                                        <div class="single_notify d-flex align-items-center">
                                            <div class="notify_thumb">
                                                <a href="#"><img src="{{ asset('/') }}admin/assets/img/staf/3.png" alt></a>
                                            </div>
                                            <div class="notify_content">
                                                <a href="#"><h5>what a packages</h5></a>
                                                <p>Lorem ipsum dolor sit amet</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nofity_footer">
                                        <div class="submit_button text-center pt_20">
                                            <a href="#" class="btn_1">See More</a>
                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li>
                                <a class="CHATBOX_open" href="#"> <img src="{{ asset('/') }}admin/assets/img/icon/msg.svg" alt> <span>2</span> </a>
                            </li>
                        </div>
                        <div class="profile_info">
                            <img src="{{ asset('/') }}admin/assets/img/client_img.png" alt="#">
                            <div class="profile_info_iner">
                                <div class="profile_author_name">
                                    <p>Neurologist </p>
                                    <h5>Dr. Robar Smith</h5>
                                </div>
                                <div class="profile_info_details">
                                    <a href="#">My Profile </a>
                                    <a href="#">Settings</a>
                                    <a href="#">Log Out </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main_content_iner overly_inner ">
        <div class="container-fluid p-0 ">

            <div class="row">
                <div class="col-12">
                    <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                        <div class="page_title_left d-flex align-items-center">
                            <h3 class="f_s_25 f_w_700 dark_text mr_30">Dashboard</h3>
                            <ol class="breadcrumb page_bradcam mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                <li class="breadcrumb-item active">Analytic</li>
                            </ol>
                        </div>
                        <div class="page_title_right">
                            <div class="page_date_button d-flex align-items-center">
                                <img src="{{ asset('/') }}admin/assets/img/icon/calender_icon.svg" alt>
                                August 1, 2020 - August 31, 2020
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-xl-8 ">
                    <div class="white_card mb_30 card_height_100">
                        <div class="white_card_header">
                            <div class="row align-items-center justify-content-between flex-wrap">
                                <div class="col-lg-4">
                                    <div class="main-title">
                                        <h3 class="m-0">Stoke Details</h3>
                                    </div>
                                </div>
                                <div class="col-lg-4 text-end d-flex justify-content-end">
                                    <select class="nice_Select2 max-width-220">
                                        <option value="1">Show by month</option>
                                        <option value="1">Show by year</option>
                                        <option value="1">Show by day</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div id="management_bar"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 ">
                    <div class="white_card card_height_100 mb_30 user_crm_wrapper">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single_crm">
                                    <div class="crm_head d-flex align-items-center justify-content-between">
                                        <div class="thumb">
                                            <img src="{{ asset('/') }}admin/assets/img/crm/businessman.svg" alt>
                                        </div>
                                        <i class="fas fa-ellipsis-h f_s_11 white_text"></i>
                                    </div>
                                    <div class="crm_body">
                                        <h4>2455</h4>
                                        <p>User Registrations</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single_crm ">
                                    <div class="crm_head crm_bg_1 d-flex align-items-center justify-content-between">
                                        <div class="thumb">
                                            <img src="{{ asset('/') }}admin/assets/img/crm/customer.svg" alt>
                                        </div>
                                        <i class="fas fa-ellipsis-h f_s_11 white_text"></i>
                                    </div>
                                    <div class="crm_body">
                                        <h4>2455</h4>
                                        <p>User Registrations</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single_crm">
                                    <div class="crm_head crm_bg_2 d-flex align-items-center justify-content-between">
                                        <div class="thumb">
                                            <img src="{{ asset('/') }}admin/assets/img/crm/infographic.svg" alt>
                                        </div>
                                        <i class="fas fa-ellipsis-h f_s_11 white_text"></i>
                                    </div>
                                    <div class="crm_body">
                                        <h4>2455</h4>
                                        <p>User Registrations</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single_crm">
                                    <div class="crm_head crm_bg_3 d-flex align-items-center justify-content-between">
                                        <div class="thumb">
                                            <img src="{{ asset('/') }}admin/assets/img/crm/sqr.svg" alt>
                                        </div>
                                        <i class="fas fa-ellipsis-h f_s_11 white_text"></i>
                                    </div>
                                    <div class="crm_body">
                                        <h4>2455</h4>
                                        <p>User Registrations</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="crm_reports_bnner">
                            <div class="row justify-content-end ">
                                <div class="col-lg-6">
                                    <h4>Create CRM Reports</h4>
                                    <p>Outlines keep you and honest
                                        indulging honest.</p>
                                    <a href="#">Read More <i class="fas fa-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <div class="main-title">
                                        <h3 class="m-0">New Users</h3>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="row justify-content-end">
                                        <div class="col-lg-8 d-flex justify-content-end">
                                            <div class="serach_field-area theme_bg d-flex align-items-center">
                                                <div class="search_inner">
                                                    <form action="#">
                                                        <div class="search_field">
                                                            <input type="text" placeholder="Search">
                                                        </div>
                                                        <button type="submit"> <img src="{{ asset('/') }}admin/assets/img/icon/icon_search.svg" alt> </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-lg-4 mt_20">
                                    <select class="nice_Select2 wide">
                                        <option value="1">Show by All</option>
                                        <option value="1">Show by A</option>
                                        <option value="1">Show by B</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body ">
                            <div class="single_user_pil d-flex align-items-center justify-content-between">
                                <div class="user_pils_thumb d-flex align-items-center">
                                    <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{ asset('/') }}admin/assets/img/customers/1.png" alt></div>
                                    <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                                </div>
                                <div class="user_info">
                                    Customer
                                </div>
                                <div class="action_btns d-flex">
                                    <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                    <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                </div>
                            </div>
                            <div class="single_user_pil admin_bg d-flex align-items-center justify-content-between">
                                <div class="user_pils_thumb d-flex align-items-center">
                                    <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{ asset('/') }}admin/assets/img/customers/1.png" alt></div>
                                    <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                                </div>
                                <div class="user_info">
                                    Admin
                                </div>
                                <div class="action_btns d-flex">
                                    <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                    <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                </div>
                            </div>
                            <div class="single_user_pil d-flex align-items-center justify-content-between">
                                <div class="user_pils_thumb d-flex align-items-center">
                                    <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{ asset('/') }}admin/assets/img/customers/1.png" alt></div>
                                    <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                                </div>
                                <div class="user_info">
                                    Customer
                                </div>
                                <div class="action_btns d-flex">
                                    <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                    <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                </div>
                            </div>
                            <div class="single_user_pil d-flex align-items-center justify-content-between">
                                <div class="user_pils_thumb d-flex align-items-center">
                                    <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{ asset('/') }}admin/assets/img/customers/1.png" alt></div>
                                    <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                                </div>
                                <div class="user_info">
                                    Customer
                                </div>
                                <div class="action_btns d-flex">
                                    <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                    <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                </div>
                            </div>
                            <div class="single_user_pil d-flex align-items-center justify-content-between mb-0">
                                <div class="user_pils_thumb d-flex align-items-center">
                                    <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{ asset('/') }}admin/assets/img/customers/1.png" alt></div>
                                    <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                                </div>
                                <div class="user_info">
                                    Customer
                                </div>
                                <div class="action_btns d-flex">
                                    <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                    <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Sales of the last week</h3>
                                </div>
                                <div class="header_more_tool">
                                    <div class="dropdown">
<span class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown">
<i class="ti-more-alt"></i>
</span>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
                                            <a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
                                            <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
                                            <a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
                                            <a class="dropdown-item" href="#"> <i class="fa fa-download"></i> Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div id="chart-currently"></div>
                            <div class="monthly_plan_wraper">
                                <div class="single_plan d-flex align-items-center justify-content-between">
                                    <div class="plan_left d-flex align-items-center">
                                        <div class="thumb">
                                            <img src="{{ asset('/') }}admin/assets/img/icon2/7.svg" alt>
                                        </div>
                                        <div>
                                            <h5>Most Sales</h5>
                                            <span>Authors with the best sales</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_plan d-flex align-items-center justify-content-between">
                                    <div class="plan_left d-flex align-items-center">
                                        <div class="thumb">
                                            <img src="{{ asset('/') }}admin/assets/img/icon2/6.svg" alt>
                                        </div>
                                        <div>
                                            <h5>Total sales lead</h5>
                                            <span>40% increased on week-to-week reports</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_plan d-flex align-items-center justify-content-between">
                                    <div class="plan_left d-flex align-items-center">
                                        <div class="thumb">
                                            <img src="{{ asset('/') }}admin/assets/img/icon2/5.svg" alt>
                                        </div>
                                        <div>
                                            <h5>Average Bestseller</h5>
                                            <span>Pitstop Email Marketing</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="white_card card_height_100 mb_30 overflow_hidden">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Sales Details</h3>
                                </div>
                                <div class="header_more_tool">
                                    <div class="dropdown">
<span class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown">
<i class="ti-more-alt"></i>
</span>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
                                            <a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
                                            <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
                                            <a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
                                            <a class="dropdown-item" href="#"> <i class="fa fa-download"></i> Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body pb-0">
                            <div class="Sales_Details_plan">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="single_plan d-flex align-items-center justify-content-between">
                                            <div class="plan_left d-flex align-items-center">
                                                <div class="thumb">
                                                    <img src="{{ asset('/') }}admin/assets/img/icon2/3.svg" alt>
                                                </div>
                                                <div>
                                                    <h5>$2,034</h5>
                                                    <span>Author Sales</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single_plan d-flex align-items-center justify-content-between">
                                            <div class="plan_left d-flex align-items-center">
                                                <div class="thumb">
                                                    <img src="{{ asset('/') }}admin/assets/img/icon2/1.svg" alt>
                                                </div>
                                                <div>
                                                    <h5>$706</h5>
                                                    <span>Commision</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single_plan d-flex align-items-center justify-content-between">
                                            <div class="plan_left d-flex align-items-center">
                                                <div class="thumb">
                                                    <img src="{{ asset('/') }}admin/assets/img/icon2/4.svg" alt>
                                                </div>
                                                <div>
                                                    <h5>$49</h5>
                                                    <span>Average Bid</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single_plan d-flex align-items-center justify-content-between">
                                            <div class="plan_left d-flex align-items-center">
                                                <div class="thumb">
                                                    <img src="{{ asset('/') }}admin/assets/img/icon2/2.svg" alt>
                                                </div>
                                                <div>
                                                    <h5>$5.8M</h5>
                                                    <span>All Time Sales</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="chart_wrap overflow_hidden">
                            <div id="chart4"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="white_card card_height_100 mb_20 ">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">New Products</h3>
                                </div>
                                <div class="header_more_tool">
                                    <div class="dropdown">
<span class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown">
<i class="ti-more-alt"></i>
</span>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
                                            <a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
                                            <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
                                            <a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
                                            <a class="dropdown-item" href="#"> <i class="fa fa-download"></i> Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body QA_section">
                            <div class="QA_table ">

                                <table class="table lms_table_active2 p-0">
                                    <thead>
                                    <tr>
                                        <th scope="col">Product 1</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Discount</th>
                                        <th scope="col">Sold</th>
                                        <th scope="col">Source</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="customer d-flex align-items-center">
                                                <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{ asset('/') }}admin/assets/img/customers/pro_1.png" alt></div>
                                                <span class="f_s_12 f_w_600 color_text_5">Product 1</span>
                                            </div>
                                        </td>
                                        <td class="f_s_12 f_w_400 color_text_6">$564</td>
                                        <td class="f_s_12 f_w_400 color_text_7">#DE2548</td>
                                        <td class="f_s_12 f_w_400 color_text_6">60</td>
                                        <td class="f_s_12 f_w_400 text-end"><a href="#" class="text_color_1">Google</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="customer d-flex align-items-center">
                                                <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{ asset('/') }}admin/assets/img/customers/pro_2.png" alt></div>
                                                <span class="f_s_12 f_w_600 color_text_5">Product 2</span>
                                            </div>
                                        </td>
                                        <td class="f_s_12 f_w_400 color_text_6">$564</td>
                                        <td class="f_s_12 f_w_400 color_text_7">#DE2548</td>
                                        <td class="f_s_12 f_w_400 color_text_6">60</td>
                                        <td class="f_s_12 f_w_400 text-end"><a href="#" class="text_color_2">Direct</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="customer d-flex align-items-center">
                                                <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{ asset('/') }}admin/assets/img/customers/pro_3.png" alt></div>
                                                <span class="f_s_12 f_w_600 color_text_5">Product 3</span>
                                            </div>
                                        </td>
                                        <td class="f_s_12 f_w_400 color_text_6">$564</td>
                                        <td class="f_s_12 f_w_400 color_text_7">#DE2548</td>
                                        <td class="f_s_12 f_w_400 color_text_6">60</td>
                                        <td class="f_s_12 f_w_400 text-end"><a href="#" class="text_color_1">Google</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="customer d-flex align-items-center">
                                                <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{ asset('/') }}admin/assets/img/customers/pro_4.png" alt></div>
                                                <span class="f_s_12 f_w_600 color_text_5">Product 4</span>
                                            </div>
                                        </td>
                                        <td class="f_s_12 f_w_400 color_text_6">$564</td>
                                        <td class="f_s_12 f_w_400 color_text_7">#DE2548</td>
                                        <td class="f_s_12 f_w_400 color_text_6">60</td>
                                        <td class="f_s_12 f_w_400 text-end"><a href="#" class="text_color_1">Refferal</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="customer d-flex align-items-center">
                                                <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{ asset('/') }}admin/assets/img/customers/pro_5.png" alt></div>
                                                <span class="f_s_12 f_w_600 color_text_5">Product 5</span>
                                            </div>
                                        </td>
                                        <td class="f_s_12 f_w_400 color_text_6">$564</td>
                                        <td class="f_s_12 f_w_400 color_text_7">#DE2548</td>
                                        <td class="f_s_12 f_w_400 color_text_6">60</td>
                                        <td class="f_s_12 f_w_400 text-end"><a href="#" class="text_color_1">20</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="customer d-flex align-items-center">
                                                <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{ asset('/') }}admin/assets/img/customers/pro_6.png" alt></div>
                                                <span class="f_s_12 f_w_600 color_text_5">Product 6</span>
                                            </div>
                                        </td>
                                        <td class="f_s_12 f_w_400 color_text_6">$564</td>
                                        <td class="f_s_12 f_w_400 color_text_7">#DE2548</td>
                                        <td class="f_s_12 f_w_400 color_text_6">60</td>
                                        <td class="f_s_12 f_w_400 text-end"><a href="#" class="text_color_5">Direct</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="customer d-flex align-items-center">
                                                <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{ asset('/') }}admin/assets/img/customers/pro_6.png" alt></div>
                                                <span class="f_s_12 f_w_600 color_text_5">Product 6</span>
                                            </div>
                                        </td>
                                        <td class="f_s_12 f_w_400 color_text_6">$564</td>
                                        <td class="f_s_12 f_w_400 color_text_7">#DE2548</td>
                                        <td class="f_s_12 f_w_400 color_text_6">60</td>
                                        <td class="f_s_12 f_w_400 text-end"><a href="#" class="text_color_5">Direct</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="white_card card_height_100  mb_20">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Visitors</h3>
                                </div>
                                <div class="header_more_tool">
                                    <div class="dropdown">
<span class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown">
<i class="ti-more-alt"></i>
</span>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
                                            <a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
                                            <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
                                            <a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
                                            <a class="dropdown-item" href="#"> <i class="fa fa-download"></i> Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div id="world-map-markers" class="dashboard_w_map pb_20"></div>
                            <div class="world_list_wraper">
                                <div class="row justify-content-center">
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="single_progressbar">
                                                    <h6 class="f_s_14 f_w_400">USA</h6>
                                                    <div id="bar4" class="barfiller">
                                                        <div class="tipWrap">
                                                            <span class="tip"></span>
                                                        </div>
                                                        <span class="fill" data-percentage="81"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="single_progressbar">
                                                    <h6>Australia</h6>
                                                    <div id="bar5" class="barfiller">
                                                        <div class="tipWrap">
                                                            <span class="tip"></span>
                                                        </div>
                                                        <span class="fill" data-percentage="58"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="single_progressbar">
                                                    <h6>Brazil</h6>
                                                    <div id="bar6" class="barfiller">
                                                        <div class="tipWrap">
                                                            <span class="tip"></span>
                                                        </div>
                                                        <span class="fill" data-percentage="42"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="single_progressbar">
                                                    <h6>Latvia</h6>
                                                    <div id="bar7" class="barfiller">
                                                        <div class="tipWrap">
                                                            <span class="tip"></span>
                                                        </div>
                                                        <span class="fill" data-percentage="55"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="white_card card_height_100 mb_20 ">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Stoke Details</h3>
                                </div>
                                <div class="header_more_tool">
                                    <div class="dropdown">
<span class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown">
<i class="ti-more-alt"></i>
</span>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
                                            <a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
                                            <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
                                            <a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
                                            <a class="dropdown-item" href="#"> <i class="fa fa-download"></i> Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body QA_section">
                            <div class="QA_table ">

                                <table class="table lms_table_active2 p-0">
                                    <thead>
                                    <tr>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Market Price</th>
                                        <th scope="col">Selling Price</th>
                                        <th scope="col">Total Unite</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="customer d-flex align-items-center">
                                                <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{ asset('/') }}admin/assets/img/customers/pro_1.png" alt></div>
                                                <span class="f_s_12 f_w_600 color_text_5">Product 1</span>
                                            </div>
                                        </td>
                                        <td class="f_s_12 f_w_400 color_text_6">$564</td>
                                        <td class="f_s_12 f_w_400 color_text_6">$650</td>
                                        <td class="f_s_12 f_w_400 text-center"><a href="#" class="text_color_1">20</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="customer d-flex align-items-center">
                                                <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{ asset('/') }}admin/assets/img/customers/pro_2.png" alt></div>
                                                <span class="f_s_12 f_w_600 color_text_5">Product 1</span>
                                            </div>
                                        </td>
                                        <td class="f_s_12 f_w_400 color_text_6">$564</td>
                                        <td class="f_s_12 f_w_400 color_text_6">$650</td>
                                        <td class="f_s_12 f_w_400 text-center"><a href="#" class="text_color_1">20</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="customer d-flex align-items-center">
                                                <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{ asset('/') }}admin/assets/img/customers/pro_3.png" alt></div>
                                                <span class="f_s_12 f_w_600 color_text_5">Product 1</span>
                                            </div>
                                        </td>
                                        <td class="f_s_12 f_w_400 color_text_6">$564</td>
                                        <td class="f_s_12 f_w_400 color_text_6">$650</td>
                                        <td class="f_s_12 f_w_400 text-center"><a href="#" class="text_color_1">20</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="customer d-flex align-items-center">
                                                <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{ asset('/') }}admin/assets/img/customers/pro_4.png" alt></div>
                                                <span class="f_s_12 f_w_600 color_text_5">Product 1</span>
                                            </div>
                                        </td>
                                        <td class="f_s_12 f_w_400 color_text_6">$564</td>
                                        <td class="f_s_12 f_w_400 color_text_6">$650</td>
                                        <td class="f_s_12 f_w_400 text-center"><a href="#" class="color_text_6">210</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="customer d-flex align-items-center">
                                                <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{ asset('/') }}admin/assets/img/customers/pro_5.png" alt></div>
                                                <span class="f_s_12 f_w_600 color_text_5">Product 1</span>
                                            </div>
                                        </td>
                                        <td class="f_s_12 f_w_400 color_text_6">$564</td>
                                        <td class="f_s_12 f_w_400 color_text_6">$650</td>
                                        <td class="f_s_12 f_w_400 text-center"><a href="#" class="text_color_1">210</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="customer d-flex align-items-center">
                                                <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{ asset('/') }}admin/assets/img/customers/pro_6.png" alt></div>
                                                <span class="f_s_12 f_w_600 color_text_5">Product 1</span>
                                            </div>
                                        </td>
                                        <td class="f_s_12 f_w_400 color_text_6">$564</td>
                                        <td class="f_s_12 f_w_400 color_text_6">$650</td>
                                        <td class="f_s_12 f_w_400 text-center"><a href="#" class="text_color_5">200</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="customer d-flex align-items-center">
                                                <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{ asset('/') }}admin/assets/img/customers/pro_6.png" alt></div>
                                                <span class="f_s_12 f_w_600 color_text_5">Product 1</span>
                                            </div>
                                        </td>
                                        <td class="f_s_12 f_w_400 color_text_6">$564</td>
                                        <td class="f_s_12 f_w_400 color_text_6">$650</td>
                                        <td class="f_s_12 f_w_400 text-center"><a href="#" class="text_color_5">200</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Recent activity</h3>
                                </div>
                                <div class="header_more_tool">
                                    <div class="dropdown">
<span class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown">
<i class="ti-more-alt"></i>
</span>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
                                            <a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
                                            <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
                                            <a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
                                            <a class="dropdown-item" href="#"> <i class="fa fa-download"></i> Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="Activity_timeline">
                                <ul>
                                    <li>
                                        <div class="activity_bell"></div>
                                        <div class="timeLine_inner d-flex align-items-center">
                                            <div class="activity_wrap">
                                                <h6>5 min ago</h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="activity_bell "></div>
                                        <div class="timeLine_inner d-flex align-items-center">
                                            <div class="activity_wrap">
                                                <h6>5 min ago</h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="activity_bell bell_lite"></div>
                                        <div class="timeLine_inner d-flex align-items-center">
                                            <div class="activity_wrap">
                                                <h6>5 min ago</h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="activity_bell bell_lite"></div>
                                        <div class="timeLine_inner d-flex align-items-center">
                                            <div class="activity_wrap">
                                                <h6>5 min ago</h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Member request
                                        to mail.</h3>
                                </div>
                                <div class="header_more_tool">
                                    <div class="dropdown">
<span class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown">
<i class="ti-more-alt"></i>
</span>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
                                            <a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
                                            <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
                                            <a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
                                            <a class="dropdown-item" href="#"> <i class="fa fa-download"></i> Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="thumb mb_30">
                                <img src="{{ asset('/') }}admin/assets/img/table.svg" alt class="img-fluid">
                            </div>
                            <div class="common_form">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="common_input mb_15">
                                                <input type="text" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="common_input mb_15">
                                                <input type="text" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="common_input mb_15">
                                                <input type="text" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <select class="nice_Select2 nice_Select_line wide">
                                                <option value="1">Role</option>
                                                <option value="1">Role 1</option>
                                                <option value="1">Role2</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <div class="create_report_btn mt_30">
                                                <a href="#" class="btn_1 radius_btn d-block text-center">Send the invitation link</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <div class="main-title">
                                        <h3 class="m-0">Stoke Details</h3>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="row justify-content-end">
                                        <div class="col-lg-8 d-flex justify-content-end">
                                            <div class="serach_field-area theme_bg d-flex align-items-center">
                                                <div class="search_inner">
                                                    <form action="#">
                                                        <div class="search_field">
                                                            <input type="text" placeholder="Search">
                                                        </div>
                                                        <button type="submit"> <img src="{{ asset('/') }}admin/assets/img/icon/icon_search.svg" alt> </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <select class="nice_Select2 wide">
                                                <option value="1">Show by All</option>
                                                <option value="1">Show by A</option>
                                                <option value="1">Show by B</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body ">
                            <div class="row min_height_oveflow">
                                <div class="col-lg-4 mb_30">
                                    <div class="single_user_pil d-flex align-items-center justify-content-between">
                                        <div class="user_pils_thumb d-flex align-items-center">
                                            <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{ asset('/') }}admin/assets/img/customers/1.png" alt></div>
                                            <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                                        </div>
                                        <div class="user_info">
                                            Customer
                                        </div>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                        </div>
                                    </div>
                                    <div class="single_user_pil admin_bg d-flex align-items-center justify-content-between">
                                        <div class="user_pils_thumb d-flex align-items-center">
                                            <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{ asset('/') }}admin/assets/img/customers/1.png" alt></div>
                                            <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                                        </div>
                                        <div class="user_info">
                                            Admin
                                        </div>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                        </div>
                                    </div>
                                    <div class="single_user_pil d-flex align-items-center justify-content-between">
                                        <div class="user_pils_thumb d-flex align-items-center">
                                            <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{ asset('/') }}admin/assets/img/customers/1.png" alt></div>
                                            <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                                        </div>
                                        <div class="user_info">
                                            Customer
                                        </div>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                        </div>
                                    </div>
                                    <div class="single_user_pil d-flex align-items-center justify-content-between">
                                        <div class="user_pils_thumb d-flex align-items-center">
                                            <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{ asset('/') }}admin/assets/img/customers/1.png" alt></div>
                                            <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                                        </div>
                                        <div class="user_info">
                                            Customer
                                        </div>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                        </div>
                                    </div>
                                    <div class="single_user_pil d-flex align-items-center justify-content-between">
                                        <div class="user_pils_thumb d-flex align-items-center">
                                            <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{ asset('/') }}admin/assets/img/customers/1.png" alt></div>
                                            <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                                        </div>
                                        <div class="user_info">
                                            Customer
                                        </div>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb_30">
                                    <div class="single_user_pil d-flex align-items-center justify-content-between">
                                        <div class="user_pils_thumb d-flex align-items-center">
                                            <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{ asset('/') }}admin/assets/img/customers/1.png" alt></div>
                                            <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                                        </div>
                                        <div class="user_info">
                                            Customer
                                        </div>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                        </div>
                                    </div>
                                    <div class="single_user_pil admin_bg d-flex align-items-center justify-content-between">
                                        <div class="user_pils_thumb d-flex align-items-center">
                                            <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{ asset('/') }}admin/assets/img/customers/1.png" alt></div>
                                            <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                                        </div>
                                        <div class="user_info">
                                            Admin
                                        </div>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                        </div>
                                    </div>
                                    <div class="single_user_pil d-flex align-items-center justify-content-between">
                                        <div class="user_pils_thumb d-flex align-items-center">
                                            <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{ asset('/') }}admin/assets/img/customers/1.png" alt></div>
                                            <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                                        </div>
                                        <div class="user_info">
                                            Customer
                                        </div>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                        </div>
                                    </div>
                                    <div class="single_user_pil d-flex align-items-center justify-content-between">
                                        <div class="user_pils_thumb d-flex align-items-center">
                                            <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{ asset('/') }}admin/assets/img/customers/1.png" alt></div>
                                            <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                                        </div>
                                        <div class="user_info">
                                            Customer
                                        </div>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                        </div>
                                    </div>
                                    <div class="single_user_pil d-flex align-items-center justify-content-between">
                                        <div class="user_pils_thumb d-flex align-items-center">
                                            <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{ asset('/') }}admin/assets/img/customers/1.png" alt></div>
                                            <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                                        </div>
                                        <div class="user_info">
                                            Customer
                                        </div>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb_30">
                                    <div class="single_user_pil d-flex align-items-center justify-content-between">
                                        <div class="user_pils_thumb d-flex align-items-center">
                                            <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{ asset('/') }}admin/assets/img/customers/1.png" alt></div>
                                            <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                                        </div>
                                        <div class="user_info">
                                            Customer
                                        </div>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                        </div>
                                    </div>
                                    <div class="single_user_pil admin_bg d-flex align-items-center justify-content-between">
                                        <div class="user_pils_thumb d-flex align-items-center">
                                            <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{ asset('/') }}admin/assets/img/customers/1.png" alt></div>
                                            <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                                        </div>
                                        <div class="user_info">
                                            Admin
                                        </div>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                        </div>
                                    </div>
                                    <div class="single_user_pil d-flex align-items-center justify-content-between">
                                        <div class="user_pils_thumb d-flex align-items-center">
                                            <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{ asset('/') }}admin/assets/img/customers/1.png" alt></div>
                                            <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                                        </div>
                                        <div class="user_info">
                                            Customer
                                        </div>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                        </div>
                                    </div>
                                    <div class="single_user_pil d-flex align-items-center justify-content-between">
                                        <div class="user_pils_thumb d-flex align-items-center">
                                            <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{ asset('/') }}admin/assets/img/customers/1.png" alt></div>
                                            <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                                        </div>
                                        <div class="user_info">
                                            Customer
                                        </div>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                        </div>
                                    </div>
                                    <div class="single_user_pil d-flex align-items-center justify-content-between">
                                        <div class="user_pils_thumb d-flex align-items-center">
                                            <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{ asset('/') }}admin/assets/img/customers/1.png" alt></div>
                                            <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                                        </div>
                                        <div class="user_info">
                                            Customer
                                        </div>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer_part">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer_iner text-center">
                        <p>2020 © Influence - Designed by <a href="#"> <i class="ti-heart"></i> </a><a href="#"> Dashboard</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="CHAT_MESSAGE_POPUPBOX">
    <div class="CHAT_POPUP_HEADER">
        <div class="MSEESAGE_CHATBOX_CLOSE">
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.09939 5.98831L11.772 10.661C12.076 10.965 12.076 11.4564 11.772 11.7603C11.468 12.0643 10.9766 12.0643 10.6726 11.7603L5.99994 7.08762L1.32737 11.7603C1.02329 12.0643 0.532002 12.0643 0.228062 11.7603C-0.0760207 11.4564 -0.0760207 10.965 0.228062 10.661L4.90063 5.98831L0.228062 1.3156C-0.0760207 1.01166 -0.0760207 0.520226 0.228062 0.216286C0.379534 0.0646715 0.578697 -0.0114918 0.777717 -0.0114918C0.976738 -0.0114918 1.17576 0.0646715 1.32737 0.216286L5.99994 4.889L10.6726 0.216286C10.8243 0.0646715 11.0233 -0.0114918 11.2223 -0.0114918C11.4213 -0.0114918 11.6203 0.0646715 11.772 0.216286C12.076 0.520226 12.076 1.01166 11.772 1.3156L7.09939 5.98831Z" fill="white" />
            </svg>
        </div>
        <h3>Chat with us</h3>
        <div class="Chat_Listed_member">
            <ul>
                <li>
                    <a href="#">
                        <div class="member_thumb">
                            <img src="{{ asset('/') }}admin/assets/img/staf/1.png" alt>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="member_thumb">
                            <img src="{{ asset('/') }}admin/assets/img/staf/2.png" alt>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="member_thumb">
                            <img src="{{ asset('/') }}admin/assets/img/staf/3.png" alt>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="member_thumb">
                            <img src="{{ asset('/') }}admin/assets/img/staf/4.png" alt>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="member_thumb">
                            <img src="{{ asset('/') }}admin/assets/img/staf/5.png" alt>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="member_thumb">
                            <div class="more_member_count">
                                <span>90+</span>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="CHAT_POPUP_BODY">
        <p class="mesaged_send_date">
            Sunday, 12 January
        </p>
        <div class="CHATING_SENDER">
            <div class="SMS_thumb">
                <img src="{{ asset('/') }}admin/assets/img/staf/1.png" alt>
            </div>
            <div class="SEND_SMS_VIEW">
                <P>Hi! Welcome .
                    How can I help you?</P>
            </div>
        </div>
        <div class="CHATING_SENDER CHATING_RECEIVEr">
            <div class="SEND_SMS_VIEW">
                <P>Hello</P>
            </div>
            <div class="SMS_thumb">
                <img src="{{ asset('/') }}admin/assets/img/staf/1.png" alt>
            </div>
        </div>
    </div>
    <div class="CHAT_POPUP_BOTTOM">
        <div class="chat_input_box d-flex align-items-center">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Write your message" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn " type="button">

                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.7821 3.21895C14.4908 -1.07281 7.50882 -1.07281 3.2183 3.21792C-1.07304 7.50864 -1.07263 14.4908 3.21872 18.7824C7.50882 23.0729 14.4908 23.0729 18.7817 18.7815C23.0726 14.4908 23.0724 7.50906 18.7821 3.21895ZM17.5813 17.5815C13.9525 21.2103 8.04773 21.2108 4.41871 17.5819C0.78907 13.9525 0.789485 8.04714 4.41871 4.41832C8.04752 0.789719 13.9521 0.789304 17.5817 4.41874C21.2105 8.04755 21.2101 13.9529 17.5813 17.5815ZM6.89503 8.02162C6.89503 7.31138 7.47107 6.73534 8.18131 6.73534C8.89135 6.73534 9.46739 7.31117 9.46739 8.02162C9.46739 8.73228 8.89135 9.30811 8.18131 9.30811C7.47107 9.30811 6.89503 8.73228 6.89503 8.02162ZM12.7274 8.02162C12.7274 7.31138 13.3038 6.73534 14.0141 6.73534C14.7241 6.73534 15.3002 7.31117 15.3002 8.02162C15.3002 8.73228 14.7243 9.30811 14.0141 9.30811C13.3038 9.30811 12.7274 8.73228 12.7274 8.02162ZM15.7683 13.2898C14.9712 15.1332 13.1043 16.3243 11.0126 16.3243C8.8758 16.3243 6.99792 15.1272 6.22834 13.2744C6.09642 12.9573 6.24681 12.593 6.56438 12.4611C6.64238 12.4289 6.72328 12.4136 6.80293 12.4136C7.04687 12.4136 7.27836 12.5577 7.37772 12.7973C7.95376 14.1842 9.38048 15.0799 11.0126 15.0799C12.6077 15.0799 14.0261 14.1836 14.626 12.7959C14.7625 12.4804 15.1288 12.335 15.4441 12.4717C15.7594 12.6084 15.9048 12.9745 15.7683 13.2898Z" fill="#707DB7" />
                        </svg>

                    </button>
                    <button class="btn" type="button">

                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 0.289062C4.92455 0.289062 0 5.08402 0 10.9996C0 16.9152 4.92455 21.7101 11 21.7101C17.0755 21.7101 22 16.9145 22 10.9996C22 5.08472 17.0755 0.289062 11 0.289062ZM11 20.3713C5.68423 20.3713 1.375 16.1755 1.375 10.9996C1.375 5.82371 5.68423 1.62788 11 1.62788C16.3158 1.62788 20.625 5.82371 20.625 10.9996C20.625 16.1755 16.3158 20.3713 11 20.3713ZM15.125 10.3302H11.6875V6.98314C11.6875 6.61363 11.3795 6.31373 11 6.31373C10.6205 6.31373 10.3125 6.61363 10.3125 6.98314V10.3302H6.875C6.4955 10.3302 6.1875 10.6301 6.1875 10.9996C6.1875 11.3691 6.4955 11.669 6.875 11.669H10.3125V15.016C10.3125 15.3855 10.6205 15.6854 11 15.6854C11.3795 15.6854 11.6875 15.3855 11.6875 15.016V11.669H15.125C15.5045 11.669 15.8125 11.3691 15.8125 10.9996C15.8125 10.6301 15.5045 10.3302 15.125 10.3302Z" fill="#707DB7" />
                        </svg>

                        <input type="file">
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="back-top" style="display: none;">
    <a title="Go to Top" href="#">
        <i class="ti-angle-up"></i>
    </a>
</div>

<script src="{{ asset('/') }}admin/assets/js/jquery1-3.4.1.min.js"></script>

<script src="{{ asset('/') }}admin/assets/js/popper1.min.js"></script>

<script src="{{ asset('/') }}admin/assets/js/bootstrap1.min.js"></script>

<script src="{{ asset('/') }}admin/assets/js/metisMenu.js"></script>

<script src="{{ asset('/') }}admin/assets/vendors/count_up/jquery.waypoints.min.js"></script>

<script src="{{ asset('/') }}admin/assets/vendors/chartlist/Chart.min.js"></script>

<script src="{{ asset('/') }}admin/assets/vendors/count_up/jquery.counterup.min.js"></script>

<script src="{{ asset('/') }}admin/assets/vendors/niceselect/js/jquery.nice-select.min.js"></script>

<script src="{{ asset('/') }}admin/assets/vendors/owl_carousel/js/owl.carousel.min.js"></script>

<script src="{{ asset('/') }}admin/assets/vendors/datatable/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('/') }}admin/assets/vendors/datatable/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('/') }}admin/assets/vendors/datatable/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('/') }}admin/assets/vendors/datatable/js/buttons.flash.min.js"></script>
<script src="{{ asset('/') }}admin/assets/vendors/datatable/js/jszip.min.js"></script>
<script src="{{ asset('/') }}admin/assets/vendors/datatable/js/pdfmake.min.js"></script>
<script src="{{ asset('/') }}admin/assets/vendors/datatable/js/vfs_fonts.js"></script>
<script src="{{ asset('/') }}admin/assets/vendors/datatable/js/buttons.html5.min.js"></script>
<script src="{{ asset('/') }}admin/assets/vendors/datatable/js/buttons.print.min.js"></script>

<script src="{{ asset('/') }}admin/assets/vendors/datepicker/datepicker.js"></script>
<script src="{{ asset('/') }}admin/assets/vendors/datepicker/datepicker.en.js"></script>
<script src="{{ asset('/') }}admin/assets/vendors/datepicker/datepicker.custom.js"></script>
<script src="{{ asset('/') }}admin/assets/js/chart.min.js"></script>
<script src="{{ asset('/') }}admin/assets/vendors/chartjs/roundedBar.min.js"></script>

<script src="{{ asset('/') }}admin/assets/vendors/progressbar/jquery.barfiller.js"></script>

<script src="{{ asset('/') }}admin/assets/vendors/tagsinput/tagsinput.js"></script>

<script src="{{ asset('/') }}admin/assets/vendors/text_editor/summernote-bs4.js"></script>
<script src="{{ asset('/') }}admin/assets/vendors/am_chart/amcharts.js"></script>

<script src="{{ asset('/') }}admin/assets/vendors/scroll/perfect-scrollbar.min.js"></script>
<script src="{{ asset('/') }}admin/assets/vendors/scroll/scrollable-custom.js"></script>

<script src="{{ asset('/') }}admin/assets/vendors/vectormap-home/vectormap-2.0.2.min.js"></script>
<script src="{{ asset('/') }}admin/assets/vendors/vectormap-home/vectormap-world-mill-en.js"></script>

<script src="{{ asset('/') }}admin/assets/vendors/apex_chart/apex-chart2.js"></script>
<script src="{{ asset('/') }}admin/assets/vendors/apex_chart/apex_dashboard.js"></script>

<script src="{{ asset('/') }}admin/assets/vendors/chart_am/core.js"></script>
<script src="{{ asset('/') }}admin/assets/vendors/chart_am/charts.js"></script>
<script src="{{ asset('/') }}admin/assets/vendors/chart_am/animated.js"></script>
<script src="{{ asset('/') }}admin/assets/vendors/chart_am/kelly.js"></script>
<script src="{{ asset('/') }}admin/assets/vendors/chart_am/chart-custom.js"></script>

<script src="{{ asset('/') }}admin/assets/js/dashboard_init.js"></script>
<script src="{{ asset('/') }}admin/assets/js/custom.js"></script>
@yield('script')
</body>

<!-- Mirrored from demo.dashboardpack.com/user-management-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Jan 2024 21:08:22 GMT -->
</html>


