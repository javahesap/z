<?php include("header.php"); ?>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <a class="navbar-brand ms-4" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="./assets/images/logo-light-icon.png" alt="homepage" class="dark-logo" />

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="./assets/images/logo-light-text.png" alt="homepage" class="dark-logo" />

                        </span>
                    </a>

                    <a class="nav-toggler waves-effect waves-light text-white d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>

                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-lg-none d-md-block ">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white "
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>

                    <ul class="navbar-nav me-auto mt-md-0 ">

                        <li class="nav-item search-box">
                            <a class="nav-link text-muted" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search" style="display: none;">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>


                    <ul class="navbar-nav">

                        <!-- User profile and search -->

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://p16-sign-va.tiktokcdn.com/tos-maliva-avt-0068/e085a8364e8d7ea05e28959f1dc19da9~c5_100x100.jpeg?x-expires=1686776400&x-signature=lwEX9OxLYEPlGDzHKLl1ymacU8s%3D" alt="user" class="profile-pic me-2">Vip Cemil
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown"></ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="index.html" aria-expanded="false"><i class="mdi me-2 mdi-gauge"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="pages-profile.html" aria-expanded="false">
                                <i class="mdi me-2 mdi-account-check"></i><span class="hide-menu">Profile</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="table-basic.html" aria-expanded="false"><i class="mdi me-2 mdi-table"></i><span
                                    class="hide-menu">Table</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="icon-material.html" aria-expanded="false"><i
                                    class="mdi me-2 mdi-emoticon"></i><span class="hide-menu">Icon</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="map-google.html" aria-expanded="false"><i class="mdi me-2 mdi-earth"></i><span
                                    class="hide-menu">Google Map</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="pages-blank.html" aria-expanded="false"><i
                                    class="mdi me-2 mdi-book-open-variant"></i><span class="hide-menu">Blank</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="pages-error-404.html" aria-expanded="false"><i
                                    class="mdi me-2 mdi-help-circle"></i><span class="hide-menu">Error 404</span></a>
                        </li>
                        <li class="text-center p-20 upgrade-btn">
                            <a href="https://www.wrappixel.com/templates/materialpro/"
                                class="btn btn-warning text-white mt-4" target="_blank">Upgrade to
                                Pro</a>
                        </li>
                    </ul>

                </nav>
            </div>
            <div class="sidebar-footer">
                <div class="row">
                    <div class="col-4 link-wrap">
                        <!-- item-->
                        <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i
                                class="ti-settings"></i></a>
                    </div>
                    <div class="col-4 link-wrap">
                        <!-- item-->
                        <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i
                                class="mdi mdi-gmail"></i></a>
                    </div>
                    <div class="col-4 link-wrap">
                        <!-- item-->
                        <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i
                                class="mdi mdi-power"></i></a>
                    </div>
                </div>
            </div>
        </aside>

        <div class="page-wrapper">


            <div class="container-fluid">

                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3">

                        <!-- Column -->
                        <div class="card">
                            <div class="card-body bg-info">
                                <h4 class="text-white card-title">Gurup 1</h4>

                            </div>
                            <div class="card-body">
                                <div class="message-box contact-box">

                                    <div class="message-widget contact-widget">
                                        <!-- Message -->
                                        <a href="#" class="d-flex align-items-center">
                                            <div class="user-img mb-0"> <img src="./assets/images/users/1.jpg"
                                                    alt="user" class="img-circle"> <span
                                                    class="profile-status online pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5 class="mb-0">Pavan kumar</h5> <span
                                                    class="mail-desc">info@wrappixel.com</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#" class="d-flex align-items-center">
                                            <div class="user-img mb-0"> <img src="./assets/images/users/2.jpg"
                                                    alt="user" class="img-circle"> <span
                                                    class="profile-status busy pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5 class="mb-0">Sonu Nigam</h5> <span
                                                    class="mail-desc">pamela1987@gmail.com</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#" class="d-flex align-items-center">
                                            <div class="user-img mb-0"> <span class="round">A</span> <span
                                                    class="profile-status away pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5 class="mb-0">Arijit Sinh</h5> <span
                                                    class="mail-desc">cruise1298.fiplip@gmail.com</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#" class="d-flex align-items-center">
                                            <div class="user-img mb-0"> <img src="./assets/images/users/4.jpg"
                                                    alt="user" class="img-circle"> <span
                                                    class="profile-status offline pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5 class="mb-0">Pavan kumar</h5> <span
                                                    class="mail-desc">kat@gmail.com</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <?php include("footer.php"); ?>