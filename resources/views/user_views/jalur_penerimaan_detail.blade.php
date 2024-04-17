@extends('layouts.layouts_users.template')


@section('content')
    <div class="react-wrapper">
        <div class="react-wrapper-inner">
            <!--================= Breadcrumbs Section Start Here =================-->
            <div class="react-breadcrumbs">
                <div class="breadcrumbs-wrap">
                    <img class="desktop" src="{{ asset('') }}assets_users/images/breadcrumbs/3.jpg" alt="Breadcrumbs">
                    <img class="mobile" src="{{ asset('') }}assets_users/images/breadcrumbs/3.jpg" alt="Breadcrumbs">
                    <div class="breadcrumbs-inner">
                        <div class="container">
                            <div class="breadcrumbs-text">
                                <h1 class="breadcrumbs-title">{{ $dataDetail->nama_jalur }}</h1>
                                <div class="back-nav">
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li>{{ $dataDetail->nama_jalur }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <!--================= Breadcrumbs Section End Here =================-->

            <!--================= Course Filter Section Start Here =================-->
            <div class="react-blog-page pb---40 pt---110">
                <div class="container pb---70">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="blog-grid">
                                {{-- @foreach ($dataDetail as $informasi) --}}
                                <div class="single-blog">
                                    <div class="inner-blog">
                                        <div class="blog-img">
                                            <a href="#" class="cate">{{ $dataDetail->nama_jalur }}</a>
                                            <img src="{{ asset('jalur_penerimaan_foto') }}/{{ $dataDetail->foto_jalur }}"
                                                alt="Blog Image">
                                        </div>
                                        <div class="blog-content">
                                            <ul class="top-part">
                                                <li>
                                                    <img src="{{ asset('') }}assets_users/images/course/small-image/1.png"
                                                        alt="user">
                                                    {{-- {{ !!    ! !  }} --}}
                                                </li>
                                                <li class="date-part">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-clock">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <polyline points="12 6 12 12 16 14"></polyline>
                                                    </svg> Jun 16, 2022
                                                </li>
                                                <li>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg> 225 views
                                                </li>
                                            </ul>

                                            <h3 class="blog-title"><a
                                                    href="blog-details.html">{{ $dataDetail->nama_jalur }}</a>
                                            </h3>
                                            <div class="button__sec">
                                                <a href="blog-details.html" class="blog-btn">Read More <svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-arrow-right">
                                                        <line x1="5" y1="12" x2="19" y2="12">
                                                        </line>
                                                        <polyline points="12 5 19 12 12 19"></polyline>
                                                    </svg></a>
                                                <div class="share-course">
                                                    Post Share <em><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-share-2">
                                                            <circle cx="18" cy="5" r="3"></circle>
                                                            <circle cx="6" cy="12" r="3"></circle>
                                                            <circle cx="18" cy="19" r="3"></circle>
                                                            <line x1="8.59" y1="13.51" x2="15.42"
                                                                y2="17.49"></line>
                                                            <line x1="15.41" y1="6.51" x2="8.59"
                                                                y2="10.49"></line>
                                                        </svg></em>
                                                    <span>
                                                        <a href="#"><i aria-hidden="true"
                                                                class="social_facebook"></i></a>
                                                        <a href="#"><i aria-hidden="true"
                                                                class="social_twitter"></i></a>
                                                        <a href="#"><i aria-hidden="true"
                                                                class="social_linkedin"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- @endforeach --}}

                            </div>
                            <!--================= Pagination Section Start Here =================-->
                            <ul class="back-pagination">
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li class="back-next"><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg></a></li>
                            </ul>
                            <!--================= Pagination Section End Here =================-->
                        </div>
                        <div class="col-lg-4">
                            <div class="react-sidebar ml----30">
                                <div class="widget back-search">
                                    <h3 class="widget-title">Search</h3>
                                    <form>
                                        <input type="text" name="input" placeholder="Search...">
                                        <button> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-search">
                                                <circle cx="11" cy="11" r="8"></circle>
                                                <line x1="21" y1="21" x2="16.65" y2="16.65">
                                                </line>
                                            </svg> </button>
                                    </form>
                                </div>
                                <div class="widget back-post">
                                    <h3 class="widget-title">Popular Posts</h3>
                                    <ul class="related-courses">

                                        <li>
                                            <a href="coureses-single.html"><span class="post-images"><img
                                                        src="{{ asset('') }}assets_users/images/blog/6.png"
                                                        alt="post"></span></a>
                                            <div class="titles">
                                                <h4><a href="coureses-single.html">Adobe lightroom <br>for beginners
                                                        complete</a></h4>
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-clock">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <polyline points="12 6 12 12 16 14"></polyline>
                                                    </svg> Jun 27, 2022</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget react-categories-course">
                                    <h3 class="widget-title">Course categories</h3>
                                    <ul class="recent-category">
                                        <li> <a href="#">Art & Design <em>(6)</em></a></li>
                                        <li> <a href="#">Exercise <em>(4)</em></a></li>
                                        <li> <a href="#">Photography <em>(8)</a></em></li>
                                        <li> <a href="#">Environmental Sciences <em>(3)</em></a></li>
                                        <li> <a href="#">Software Training <em>(5)</em></a></li>
                                        <li> <a href="#">Software Development <em>(2)</em></a></li>
                                        <li> <a href="#">Music <em>(10)</em></a></li>
                                        <li> <a href="#">Material Design <em>(2)</em></a></li>
                                        <li> <a href="#">Technology <em>(7)</em></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--================= Course Filter Section End Here =================-->

        </div>
    </div>
    <!--================= Wrapper End Here =================-->
@endsection
