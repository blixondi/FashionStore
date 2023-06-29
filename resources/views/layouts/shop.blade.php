<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website." />
    <meta name="keywords"
        content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template" />
    <meta name="author" content="elemis" />
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('assets/fe/img/favicon.png') }} />
        <link rel="stylesheet"
        href="{{ asset('assets/fe/css/plugins.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fe/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fe/css/colors/purple.css') }}" />
    <link rel="preload" href="{{ asset('assets/fe/css/fonts/thicccboi.css') }}" as="style"
        onload="this.rel='stylesheet'" />
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <div class="content-wrapper">
        <!--Navbar-->
        <header class="wrapper bg-soft-primary">
            <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
                <div class="container flex-lg-row flex-nowrap align-items-center">
                    <div class="navbar-brand w-100">
                        <a href="./index.html">
                            <img src="{{ asset('assets/fe/img/FS-sm.png') }}"
                                srcset="{{ asset('assets/fe/img/FS-lg.png') }} 2x" alt="" />
                        </a>
                    </div>
                    <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                        <div class="offcanvas-header d-lg-none">
                            <h3 class="text-white fs-30 mb-0">Sandbox</h3>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown dropdown-mega">
                                    <a class="nav-link dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown">Demos</a>
                                    <ul class="dropdown-menu mega-menu mega-menu-dark mega-menu-img">
                                        <li class="mega-menu-content mega-menu-scroll">
                                            <ul class="row row-cols-1 row-cols-lg-6 gx-0 gx-lg-4 gy-lg-2 list-unstyled">
                                                <li class="col">
                                                    <a class="dropdown-item" href="./demo1.html">
                                                        <figure class="rounded lift d-none d-lg-block"><img
                                                                src="{{ asset('assets/fe/img/demos/mi1.jpg') }}"
                                                                srcset="{{ asset('assets/fe/img/demos/mi1@2x.jpg') }} 2x"
                                                                alt="" /></figure>
                                                        <span class="d-lg-none">Demo I</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./demo2.html">
                                                        <figure class="rounded lift d-none d-lg-block"><img
                                                                src="{{ asset('assets/fe/img/demos/mi2.jpg') }}"
                                                                srcset="{{ asset('assets/fe/img/demos/mi2@2x.jpg') }} 2x"
                                                                alt="" /></figure>
                                                        <span class="d-lg-none">Demo II</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./demo3.html">
                                                        <figure class="rounded lift d-none d-lg-block"><img
                                                                src="{{ asset('assets/fe/img/demos/mi3.jpg') }}"
                                                                srcset="{{ asset('assets/fe/img/demos/mi3@2x.jpg') }} 2x"
                                                                alt="" /></figure>
                                                        <span class="d-lg-none">Demo III</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./demo4.html">
                                                        <figure class="rounded lift d-none d-lg-block"><img
                                                                src="{{ asset('assets/fe/img/demos/mi4.jpg') }}"
                                                                srcset="{{ asset('assets/fe/img/demos/mi4@2x.jpg') }} 2x"
                                                                alt="" /></figure>
                                                        <span class="d-lg-none">Demo IV</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./demo5.html">
                                                        <figure class="rounded lift d-none d-lg-block"><img
                                                                src="{{ asset('assets/fe/img/demos/mi5.jpg') }}"
                                                                srcset="{{ asset('assets/fe/img/demos/mi5@2x.jpg') }} 2x"
                                                                alt="" /></figure>
                                                        <span class="d-lg-none">Demo V</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./demo6.html">
                                                        <figure class="rounded lift d-none d-lg-block"><img
                                                                src="{{ asset('assets/fe/img/demos/mi6.jpg') }}"
                                                                srcset="{{ asset('assets/fe/img/demos/mi6@2x.jpg') }} 2x"
                                                                alt="" /></figure>
                                                        <span class="d-lg-none">Demo VI</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./demo7.html">
                                                        <figure class="rounded lift d-none d-lg-block"><img
                                                                src="{{ asset('assets/fe/img/demos/mi7.jpg') }}"
                                                                srcset="{{ asset('assets/fe/img/demos/mi7@2x.jpg') }} 2x"
                                                                alt="" /></figure>
                                                        <span class="d-lg-none">Demo VII</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./demo8.html">
                                                        <figure class="rounded lift d-none d-lg-block"><img
                                                                src="{{ asset('assets/fe/img/demos/mi8.jpg') }}"
                                                                srcset="{{ asset('assets/fe/img/demos/mi8@2x.jpg') }} 2x"
                                                                alt="" /></figure>
                                                        <span class="d-lg-none">Demo VIII</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./demo9.html">
                                                        <figure class="rounded lift d-none d-lg-block"><img
                                                                src="{{ asset('assets/fe/img/demos/mi9.jpg') }}"
                                                                srcset="{{ asset('assets/fe/img/demos/mi9@2x.jpg') }} 2x"
                                                                alt="" /></figure>
                                                        <span class="d-lg-none">Demo IX</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./demo10.html">
                                                        <figure class="rounded lift d-none d-lg-block"><img
                                                                src="{{ asset('assets/fe/img/demos/mi10.jpg') }}"
                                                                srcset="{{ asset('assets/fe/img/demos/mi10@2x.jpg') }} 2x"
                                                                alt="" /></figure>
                                                        <span class="d-lg-none">Demo X</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./demo11.html">
                                                        <figure class="rounded lift d-none d-lg-block"><img
                                                                src="{{ asset('assets/fe/img/demos/mi11.jpg') }}"
                                                                srcset="{{ asset('assets/fe/img/demos/mi11@2x.jpg') }} 2x"
                                                                alt="" /></figure>
                                                        <span class="d-lg-none">Demo XI</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./demo12.html">
                                                        <figure class="rounded lift d-none d-lg-block"><img
                                                                src="{{ asset('assets/fe/img/demos/mi12.jpg') }}"
                                                                srcset="{{ asset('assets/fe/img/demos/mi12@2x.jpg') }} 2x"
                                                                alt="" /></figure>
                                                        <span class="d-lg-none">Demo XII</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./demo13.html">
                                                        <figure class="rounded lift d-none d-lg-block"><img
                                                                src="{{ asset('assets/fe/img/demos/mi13.jpg') }}"
                                                                srcset="{{ asset('assets/fe/img/demos/mi13@2x.jpg') }} 2x"
                                                                alt="" /></figure>
                                                        <span class="d-lg-none">Demo XIII</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./demo14.html">
                                                        <figure class="rounded lift d-none d-lg-block"><img
                                                                src="{{ asset('assets/fe/img/demos/mi14.jpg') }}"
                                                                srcset="{{ asset('assets/fe/img/demos/mi14@2x.jpg') }} 2x"
                                                                alt="" /></figure>
                                                        <span class="d-lg-none">Demo XIV</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./demo15.html">
                                                        <figure class="rounded lift d-none d-lg-block"><img
                                                                src="{{ asset('assets/fe/img/demos/mi15.jpg') }}"
                                                                srcset="{{ asset('assets/fe/img/demos/mi15@2x.jpg') }} 2x"
                                                                alt="" /></figure>
                                                        <span class="d-lg-none">Demo XV</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./demo16.html">
                                                        <figure class="rounded lift d-none d-lg-block"><img
                                                                src="{{ asset('assets/fe/img/demos/mi16.jpg') }}"
                                                                srcset="{{ asset('assets/fe/img/demos/mi16@2x.jpg') }} 2x"
                                                                alt="" /></figure>
                                                        <span class="d-lg-none">Demo XVI</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./demo17.html">
                                                        <figure class="rounded lift d-none d-lg-block"><img
                                                                src="{{ asset('assets/fe/img/demos/mi17.jpg') }}"
                                                                srcset="{{ asset('assets/fe/img/demos/mi17@2x.jpg') }} 2x"
                                                                alt="" /></figure>
                                                        <span class="d-lg-none">Demo XVII</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./demo18.html">
                                                        <figure class="rounded lift d-none d-lg-block"><img
                                                                src="{{ asset('assets/fe/img/demos/mi18.jpg') }}"
                                                                srcset="{{ asset('assets/fe/img/demos/mi18@2x.jpg') }} 2x"
                                                                alt="" /></figure>
                                                        <span class="d-lg-none">Demo XVIII</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./demo19.html">
                                                        <figure class="rounded lift d-none d-lg-block"><img
                                                                src="{{ asset('assets/fe/img/demos/mi19.jpg') }}"
                                                                srcset="{{ asset('assets/fe/img/demos/mi19@2x.jpg') }} 2x"
                                                                alt="" /></figure>
                                                        <span class="d-lg-none">Demo XIX</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./demo20.html">
                                                        <figure class="rounded lift d-none d-lg-block"><img
                                                                src="{{ asset('assets/fe/img/demos/mi20.jpg') }}"
                                                                srcset="{{ asset('assets/fe/img/demos/mi20@2x.jpg') }} 2x"
                                                                alt="" /></figure>
                                                        <span class="d-lg-none">Demo XX</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./demo21.html">
                                                        <figure class="rounded lift d-none d-lg-block"><img
                                                                src="{{ asset('assets/fe/img/demos/mi21.jpg') }}"
                                                                srcset="{{ asset('assets/fe/img/demos/mi21@2x.jpg') }} 2x"
                                                                alt="" /></figure>
                                                        <span class="d-lg-none">Demo XXI</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./demo22.html">
                                                        <figure class="rounded lift d-none d-lg-block"><img
                                                                src="{{ asset('assets/fe/img/demos/mi22.jpg') }}"
                                                                srcset="{{ asset('assets/fe/img/demos/mi22@2x.jpg') }} 2x"
                                                                alt="" /></figure>
                                                        <span class="d-lg-none">Demo XXII</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./demo23.html">
                                                        <figure class="rounded lift d-none d-lg-block"><img
                                                                src="{{ asset('assets/fe/img/demos/mi23.jpg') }}"
                                                                srcset="{{ asset('assets/fe/img/demos/mi23@2x.jpg') }} 2x"
                                                                alt="" /></figure>
                                                        <span class="d-lg-none">Demo XXIII</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./demo24.html">
                                                        <figure class="rounded lift d-none d-lg-block"><img
                                                                src="{{ asset('assets/fe/img/demos/mi24.jpg') }}"
                                                                srcset="{{ asset('assets/fe/img/demos/mi24@2x.jpg') }} 2x"
                                                                alt="" /></figure>
                                                        <span class="d-lg-none">Demo XXIV</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./demo25.html">
                                                        <figure class="rounded lift d-none d-lg-block"><img
                                                                src="{{ asset('assets/fe/img/demos/mi25.jpg') }}"
                                                                srcset="{{ asset('assets/fe/img/demos/mi25@2x.jpg') }} 2x"
                                                                alt="" /></figure>
                                                        <span class="d-lg-none">Demo XXV</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./demo26.html">
                                                        <figure class="rounded lift d-none d-lg-block"><img
                                                                src="{{ asset('assets/fe/img/demos/mi26.jpg') }}"
                                                                srcset="{{ asset('assets/fe/img/demos/mi26@2x.jpg') }} 2x"
                                                                alt="" /></figure>
                                                        <span class="d-lg-none">Demo XXVI</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./demo27.html">
                                                        <figure class="rounded lift d-none d-lg-block"><img
                                                                src="{{ asset('assets/fe/img/demos/mi27.jpg') }}"
                                                                srcset="{{ asset('assets/fe/img/demos/mi27@2x.jpg') }} 2x"
                                                                alt="" /></figure>
                                                        <span class="d-lg-none">Demo XXVII</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!--/.row -->
                                            <span class="d-none d-lg-flex"><i
                                                    class="uil uil-direction"></i><strong>Scroll to view
                                                    more</strong></span>
                                        </li>
                                        <!--/.mega-menu-content-->
                                    </ul>
                                    <!--/.dropdown-menu -->
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown">Pages</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown dropdown-submenu dropend">
                                            <a class="dropdown-item dropdown-toggle" href="#"
                                                data-bs-toggle="dropdown">Services</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="./services.html">Services I</a></li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="./services2.html">Services II</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown-submenu dropend">
                                            <a class="dropdown-item dropdown-toggle" href="#"
                                                data-bs-toggle="dropdown">About</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="./about.html">About I</a></li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="./about2.html">About II</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown-submenu dropend">
                                            <a class="dropdown-item dropdown-toggle" href="#"
                                                data-bs-toggle="dropdown">Shop</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a class="dropdown-item" href="./shop.html">Shop
                                                        I</a></li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="./shop2.html">Shop II</a></li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="./shop-product.html">Product Page</a></li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="./shop-cart.html">Shopping Cart</a></li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="./shop-checkout.html">Checkout</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown-submenu dropend">
                                            <a class="dropdown-item dropdown-toggle" href="#"
                                                data-bs-toggle="dropdown">Contact</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="./contact.html">Contact I</a></li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="./contact2.html">Contact II</a></li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="./contact3.html">Contact III</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown-submenu dropend">
                                            <a class="dropdown-item dropdown-toggle" href="#"
                                                data-bs-toggle="dropdown">Career</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="./career.html">Job Listing I</a></li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="./career2.html">Job Listing II</a></li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="./career-job.html">Job Description</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown-submenu dropend">
                                            <a class="dropdown-item dropdown-toggle" href="#"
                                                data-bs-toggle="dropdown">Utility</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a class="dropdown-item" href="./404.html">404
                                                        Not Found</a></li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="./page-loader.html">Page Loader</a></li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="./signin.html">Sign In I</a></li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="./signin2.html">Sign In II</a></li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="./signup.html">Sign Up I</a></li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="./signup2.html">Sign Up II</a></li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="./terms.html">Terms</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item"><a class="dropdown-item"
                                                href="./pricing.html">Pricing</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="./onepage.html">One
                                                Page</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown">Projects</a>
                                    <div class="dropdown-menu dropdown-lg">
                                        <div class="dropdown-lg-content">
                                            <div>
                                                <h6 class="dropdown-header">Project Pages</h6>
                                                <ul class="list-unstyled">
                                                    <li><a class="dropdown-item" href="./projects.html">Projects I</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="./projects2.html">Projects
                                                            II</a></li>
                                                    <li><a class="dropdown-item" href="./projects3.html">Projects
                                                            III</a></li>
                                                    <li><a class="dropdown-item" href="./projects4.html">Projects
                                                            IV</a></li>
                                                </ul>
                                            </div>
                                            <!-- /.column -->
                                            <div>
                                                <h6 class="dropdown-header">Single Projects</h6>
                                                <ul class="list-unstyled">
                                                    <li><a class="dropdown-item" href="./single-project.html">Single
                                                            Project I</a></li>
                                                    <li><a class="dropdown-item" href="./single-project2.html">Single
                                                            Project II</a></li>
                                                    <li><a class="dropdown-item" href="./single-project3.html">Single
                                                            Project III</a></li>
                                                    <li><a class="dropdown-item" href="./single-project4.html">Single
                                                            Project IV</a></li>
                                                </ul>
                                            </div>
                                            <!-- /.column -->
                                        </div>
                                        <!-- /auto-column -->
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown">Blog</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="dropdown-item" href="./blog.html">Blog without
                                                Sidebar</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="./blog2.html">Blog with
                                                Sidebar</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="./blog3.html">Blog with
                                                Left Sidebar</a></li>
                                        <li class="dropdown dropdown-submenu dropend">
                                            <a class="dropdown-item dropdown-toggle" href="#"
                                                data-bs-toggle="dropdown">Blog Posts</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="./blog-post.html">Post without Sidebar</a></li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="./blog-post2.html">Post with Sidebar</a></li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="./blog-post3.html">Post with Left Sidebar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown dropdown-mega">
                                    <a class="nav-link dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown">Blocks</a>
                                    <ul class="dropdown-menu mega-menu mega-menu-dark mega-menu-img">
                                        <li class="mega-menu-content">
                                            <ul
                                                class="row row-cols-1 row-cols-lg-6 gx-0 gx-lg-6 gy-lg-4 list-unstyled">
                                                <li class="col">
                                                    <a class="dropdown-item" href="./docs/blocks/about.html">
                                                        <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img
                                                                class="rounded-0"
                                                                src="{{ asset('assets/fe/img/demos/block1.svg') }}"
                                                                alt="" /></div>
                                                        <span>About</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./docs/blocks/blog.html">
                                                        <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img
                                                                class="rounded-0"
                                                                src="{{ asset('assets/fe/img/demos/block2.svg') }}"
                                                                alt="" /></div>
                                                        <span>Blog</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./docs/blocks/call-to-action.html">
                                                        <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img
                                                                class="rounded-0"
                                                                src="{{ asset('assets/fe/img/demos/block3.svg') }}"
                                                                alt="" /></div>
                                                        <span>Call to Action</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./docs/blocks/clients.html">
                                                        <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img
                                                                class="rounded-0"
                                                                src="{{ asset('assets/fe/img/demos/block4.svg') }}"
                                                                alt="" /></div>
                                                        <span>Clients</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./docs/blocks/contact.html">
                                                        <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img
                                                                class="rounded-0"
                                                                src="{{ asset('assets/fe/img/demos/block5.svg') }}"
                                                                alt="" /></div>
                                                        <span>Contact</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./docs/blocks/facts.html">
                                                        <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img
                                                                class="rounded-0"
                                                                src="{{ asset('assets/fe/img/demos/block6.svg') }}"
                                                                alt="" /></div>
                                                        <span>Facts</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./docs/blocks/faq.html">
                                                        <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img
                                                                class="rounded-0"
                                                                src="{{ asset('assets/fe/img/demos/block7.svg') }}"
                                                                alt="" /></div>
                                                        <span>FAQ</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./docs/blocks/features.html">
                                                        <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img
                                                                class="rounded-0"
                                                                src="{{ asset('assets/fe/img/demos/block8.svg') }}"
                                                                alt="" /></div>
                                                        <span>Features</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./docs/blocks/footer.html">
                                                        <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img
                                                                class="rounded-0"
                                                                src="{{ asset('assets/fe/img/demos/block9.svg') }}"
                                                                alt="" /></div>
                                                        <span>Footer</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./docs/blocks/hero.html">
                                                        <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img
                                                                class="rounded-0"
                                                                src="{{ asset('assets/fe/img/demos/block10.svg') }}"
                                                                alt="" /></div>
                                                        <span>Hero</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./docs/blocks/misc.html">
                                                        <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img
                                                                class="rounded-0"
                                                                src="{{ asset('assets/fe/img/demos/block17.svg') }}"
                                                                alt="" /></div>
                                                        <span>Misc</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./docs/blocks/navbar.html">
                                                        <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img
                                                                class="rounded-0"
                                                                src="{{ asset('assets/fe/img/demos/block11.svg') }}"
                                                                alt="" /></div>
                                                        <span>Navbar</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./docs/blocks/portfolio.html">
                                                        <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img
                                                                class="rounded-0"
                                                                src="{{ asset('assets/fe/img/demos/block12.svg') }}"
                                                                alt="" /></div>
                                                        <span>Portfolio</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./docs/blocks/pricing.html">
                                                        <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img
                                                                class="rounded-0"
                                                                src="{{ asset('assets/fe/img/demos/block13.svg') }}"
                                                                alt="" /></div>
                                                        <span>Pricing</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./docs/blocks/process.html">
                                                        <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img
                                                                class="rounded-0"
                                                                src="{{ asset('assets/fe/img/demos/block14.svg') }}"
                                                                alt="" /></div>
                                                        <span>Process</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./docs/blocks/team.html">
                                                        <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img
                                                                class="rounded-0"
                                                                src="{{ asset('assets/fe/img/demos/block15.svg') }}"
                                                                alt="" /></div>
                                                        <span>Team</span>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a class="dropdown-item" href="./docs/blocks/testimonials.html">
                                                        <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img
                                                                class="rounded-0"
                                                                src="{{ asset('assets/fe/img/demos/block16.svg') }}"
                                                                alt="" /></div>
                                                        <span>Testimonials</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!--/.row -->
                                        </li>
                                        <!--/.mega-menu-content-->
                                    </ul>
                                    <!--/.dropdown-menu -->
                                </li>
                                <li class="nav-item dropdown dropdown-mega">
                                    <a class="nav-link dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown">Documentation</a>
                                    <ul class="dropdown-menu mega-menu">
                                        <li class="mega-menu-content">
                                            <div class="row gx-0 gx-lg-3">
                                                <div class="col-lg-4">
                                                    <h6 class="dropdown-header">Usage</h6>
                                                    <ul class="list-unstyled cc-2 pb-lg-1">
                                                        <li><a class="dropdown-item" href="./docs/index.html">Get
                                                                Started</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/forms.html">Forms</a></li>
                                                        <li><a class="dropdown-item" href="./docs/faq.html">FAQ</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/changelog.html">Changelog</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/credits.html">Credits</a></li>
                                                    </ul>
                                                    <h6 class="dropdown-header mt-lg-6">Styleguide</h6>
                                                    <ul class="list-unstyled cc-2">
                                                        <li><a class="dropdown-item"
                                                                href="./docs/styleguide/colors.html">Colors</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/styleguide/fonts.html">Fonts</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/styleguide/icons-svg.html">SVG Icons</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/styleguide/icons-font.html">Font Icons</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/styleguide/illustrations.html">Illustrations</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/styleguide/backgrounds.html">Backgrounds</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/styleguide/misc.html">Misc</a></li>
                                                    </ul>
                                                </div>
                                                <!--/column -->
                                                <div class="col-lg-8">
                                                    <h6 class="dropdown-header">Elements</h6>
                                                    <ul class="list-unstyled cc-3">
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/accordion.html">Accordion</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/alerts.html">Alerts</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/animations.html">Animations</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/avatars.html">Avatars</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/background.html">Background</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/badges.html">Badges</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/buttons.html">Buttons</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/card.html">Card</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/carousel.html">Carousel</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/dividers.html">Dividers</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/form-elements.html">Form
                                                                Elements</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/image-hover.html">Image Hover</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/image-mask.html">Image Mask</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/lightbox.html">Lightbox</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/player.html">Media Player</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/modal.html">Modal</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/pagination.html">Pagination</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/progressbar.html">Progressbar</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/shadows.html">Shadows</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/shapes.html">Shapes</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/tables.html">Tables</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/tabs.html">Tabs</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/text-animations.html">Text
                                                                Animations</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/text-highlight.html">Text
                                                                Highlight</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/tiles.html">Tiles</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/tooltips-popovers.html">Tooltips
                                                                & Popovers</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/typography.html">Typography</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--/column -->
                                            </div>
                                            <!--/.row -->
                                        </li>
                                        <!--/.mega-menu-content-->
                                    </ul>
                                    <!--/.dropdown-menu -->
                                </li>
                            </ul>
                            <!-- /.navbar-nav -->
                            <div class="offcanvas-footer d-lg-none">
                                <div>
                                    <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                                    <br />
                                    00 (123) 456 78 90 <br />
                                    <nav class="nav social social-white mt-4">
                                        <a href="#"><i class="uil uil-twitter"></i></a>
                                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                                        <a href="#"><i class="uil uil-dribbble"></i></a>
                                        <a href="#"><i class="uil uil-instagram"></i></a>
                                        <a href="#"><i class="uil uil-youtube"></i></a>
                                    </nav>
                                    <!-- /.social -->
                                </div>
                            </div>
                            <!-- /.offcanvas-footer -->
                        </div>
                        <!-- /.offcanvas-body -->
                    </div>
                    <!-- /.navbar-collapse -->
                    <div class="navbar-other w-100 d-flex ms-auto">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            @if (!Auth::user())
                                <li class="nav-item d-none d-md-block">
                                    <a href="{{ route('login') }}" class="btn btn-primary rounded-pill">Login</a>
                                </li>
                                <li class="nav-item d-lg-none">
                                    <button class="hamburger offcanvas-nav-btn"><span></span></button>
                                </li>
                            @else
                                <li class="nav-item">
                                    {{-- <a class="nav-link position-relative d-flex flex-row align-items-center"
                                        data-bs-toggle="offcanvas" data-bs-target="#offcanvas-cart">
                                        <i class="uil uil-shopping-cart"></i>
                                        <span class="badge badge-cart bg-primary">3</span>
                                    </a> --}}
                                    <a class="nav-link position-relative d-flex flex-row align-items-center" href="/cart">
                                        <i class="uil uil-shopping-cart"></i>
                                        <span class="badge badge-cart bg-primary">3</span>
                                    </a>
                                </li>
                                <li class="nav-item d-lg-none">
                                    <button class="hamburger offcanvas-nav-btn"><span></span></button>
                                </li>
                                <li class="nav-item d-none d-md-block">
                                    <h6>Halo, {{ Auth::user()->fname }}</h6>
                                </li>
                                <li class="nav-item d-none d-md-block">
                                    <a href="{{ route('logout') }}" class="btn btn-primary rounded-pill"
                                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Logout</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none" hidden>
                                        @csrf
                                    </form>
                                </li>
                                <li class="nav-item d-lg-none">
                                    <button class="hamburger offcanvas-nav-btn"><span></span></button>
                                </li>
                            @endif
                        </ul>
                        <!-- /.navbar-nav -->
                    </div>
                    <!-- /.navbar-other -->
                </div>
                <!-- /.container -->
            </nav>
            <!-- /.navbar -->

            <div class="offcanvas offcanvas-end bg-light" id="offcanvas-cart" data-bs-scroll="true">
                <div class="offcanvas-header">
                    <h3 class="mb-0">Your Cart</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body d-flex flex-column">
                    <div class="shopping-cart">
                        <div class="shopping-cart-item d-flex justify-content-between mb-4">
                            <div class="d-flex flex-row">
                                <figure class="rounded w-17"><a href="./shop-product.html"><img
                                            src="{{asset('assets/img/products/placeholder.png')}}"
                                            srcset="{{asset('assets/img/products/placeholder.png')}} 2x" alt="" /></a></figure>
                                <div class="w-100 ms-4">
                                    <h3 class="post-title fs-16 lh-xs mb-1"><a href="./shop-product.html"
                                            class="link-dark">Nike Air Sneakers</a></h3>
                                    <p class="price fs-sm"><del><span class="amount">$55.00</span></del> <ins><span
                                                class="amount">$45.99</span></ins></p>
                                    <div class="form-select-wrapper">
                                        <select class="form-select form-select-sm">
                                            <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <!--/.form-select-wrapper -->
                                </div>
                            </div>
                            <div class="ms-2"><a href="#" class="link-dark"><i
                                        class="uil uil-trash-alt"></i></a></div>
                        </div>
                        <!--/.shopping-cart-item -->
                        <div class="shopping-cart-item d-flex justify-content-between mb-4">
                            <div class="d-flex flex-row">
                                <figure class="rounded w-17"><a href="./shop-product.html"><img
                                            src="{{asset('assets/img/products/placeholder.png')}}"
                                            srcset="{{asset('assets/img/products/placeholder.png')}} 2x" alt="" /></a></figure>
                                <div class="w-100 ms-4">
                                    <h3 class="post-title fs-16 lh-xs mb-1"><a href="./shop-product.html"
                                            class="link-dark">Colorful Sneakers</a></h3>
                                    <p class="price fs-sm"><span class="amount">$45.00</span></p>
                                    <div class="form-select-wrapper">
                                        <select class="form-select form-select-sm">
                                            <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <!--/.form-select-wrapper -->
                                </div>
                            </div>
                            <div class="ms-2"><a href="#" class="link-dark"><i
                                        class="uil uil-trash-alt"></i></a></div>
                        </div>
                        <!--/.shopping-cart-item -->
                        <div class="shopping-cart-item d-flex justify-content-between mb-4">
                            <div class="d-flex flex-row">
                                <figure class="rounded w-17"><a href="./shop-product.html"><img
                                            src="{{asset('assets/img/products/placeholder.png')}}"
                                            srcset="{{asset('assets/img/products/placeholder.png')}} 2x" alt="" /></a></figure>
                                <div class="w-100 ms-4">
                                    <h3 class="post-title fs-16 lh-xs mb-1"><a href="./shop-product.html"
                                            class="link-dark">Polaroid Camera</a></h3>
                                    <p class="price fs-sm"><span class="amount">$45.00</span></p>
                                    <div class="form-select-wrapper">
                                        <select class="form-select form-select-sm">
                                            <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <!--/.form-select-wrapper -->
                                </div>
                            </div>
                            <div class="ms-2"><a href="#" class="link-dark"><i
                                        class="uil uil-trash-alt"></i></a></div>
                        </div>
                        <!--/.shopping-cart-item -->
                    </div>
                    <!-- /.shopping-cart-->
                    <div class="offcanvas-footer flex-column text-center">
                        <div class="d-flex w-100 justify-content-between mb-4">
                            <span>Subtotal:</span>
                            <span class="h6 mb-0">$135.99</span>
                        </div>
                        <a href="#" class="btn btn-primary btn-icon btn-icon-start rounded w-100 mb-4"><i
                                class="uil uil-credit-card fs-18"></i> Checkout</a>
                        <p class="fs-14 mb-0">Free shipping on all orders over $50</p>
                    </div>
                    <!-- /.offcanvas-footer-->
                </div>
                <!-- /.offcanvas-body -->
            </div>
        </header>
        <!--Main Content taruh sini-->
        @yield('content')
        {{--
        <section class="wrapper bg-gradient-primary">
            <div class="container pt-10 pt-md-14">
                test content
            </div>
            <!-- /.container -->
        </section> --}}
    </div>

    <!--Footer-->
    <footer class="bg-dark text-inverse mt-5">
        <div class="container py-13 py-md-15">
            <div class="row gy-6 gy-lg-0">
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <img class="mb-4" src="{{ asset('assets/fe/img/logo-light.png') }}"
                            srcset="{{ asset('assets/fe/img/logo-light.png') }} 2x" alt="" />
                        <p class="mb-4">© 2022 Sandbox. <br class="d-none d-lg-block" />All rights reserved.</p>
                        <nav class="nav social social-white">
                            <a href="#"><i class="uil uil-twitter"></i></a>
                            <a href="#"><i class="uil uil-facebook-f"></i></a>
                            <a href="#"><i class="uil uil-dribbble"></i></a>
                            <a href="#"><i class="uil uil-instagram"></i></a>
                            <a href="#"><i class="uil uil-youtube"></i></a>
                        </nav>
                        <!-- /.social -->
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Get in Touch</h4>
                        <address class="pe-xl-15 pe-xxl-17">Moonshine St. 14/05 Light City, London, United Kingdom
                        </address>
                        <a href="mailto:#">info@email.com</a><br /> 00 (123) 456 78 90
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Learn More</h4>
                        <ul class="list-unstyled  mb-0">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Our Story</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-12 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Our Newsletter</h4>
                        <p class="mb-5">Subscribe to our newsletter to get our news & deals delivered to you.</p>
                        <div class="newsletter-wrapper">
                            <!-- Begin Mailchimp Signup Form -->
                            <div id="mc_embed_signup2">
                                <form
                                    action="https:/elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a"
                                    method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form"
                                    class="validate dark-fields" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll2">
                                        <div class="mc-field-group input-group form-floating">
                                            <input type="email" value="" name="EMAIL"
                                                class="required email form-control" placeholder="Email Address"
                                                id="mce-EMAIL2">
                                            <label for="mce-EMAIL2">Email Address</label>
                                            <input type="submit" value="Join" name="subscribe"
                                                id="mc-embedded-subscribe2" class="btn btn-primary ">
                                        </div>
                                        <div id="mce-responses2" class="clear">
                                            <div class="response" id="mce-error-response2" style="display:none">
                                            </div>
                                            <div class="response" id="mce-success-response2" style="display:none">
                                            </div>
                                        </div>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input
                                                type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc"
                                                tabindex="-1" value=""></div>
                                        <div class="clear"></div>
                                    </div>
                                </form>
                            </div>
                            <!--End mc_embed_signup-->
                        </div>
                        <!-- /.newsletter-wrapper -->
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </footer>
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="{{ asset('assets/fe/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/fe/js/theme.js') }}"></script>
    @yield('js')

</body>
