@extends('layouts.client.master')


@section('content')

    <main class="d-block">
        <section class="d-block position-relative">
            <div class="menu_slide">
                <img class="back-image" src="/images/back_.png" alt="">
                <div class="container py-5">
                    <div class="top-menu">
                        <div class="menu">
                            <nav class="navbar navbar-expand-lg navbar-light bg-light p-0">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav px-0">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('index')}}">صفحه اصلی </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('blog')}}">مرکز آموزش</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('shop')}}">فروشگاه اینترنتی</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">درباره ما</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">تماس با ما</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="slider-button row mx-0">
                            <div class="col-8 px-0">
                                <img class="w-100" src="/images/menu_back.png" alt="">
                            </div>
                            <div class="col-4 px-0 py-4 row mx-0 align-items-center">
                                <div class="col-12 text-center">
                                    <span class="font18">ثبت درخواست مشاوره جدید</span>
                                </div>
                                <div class="col-12">
                                    <div class="circle d-block fit-content mx-auto">
                                        <a href="#">درخواست</a>
                                    </div>
                                </div>
                                <div class="col-12 call-you">
                                    <p class="font12 px-5">
                                        <i class="fas fa-headset"></i>
                                        پس از ثبت درخواست، در کمتر از 5 دقیقه با شما تماس خواهیم گرفت
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="main-section">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <div class="weather w-100">
                            <span class="title">آب و هوا</span>
                            <div class="details">
                                <span class="location"><i class="fa fa-map-marker-alt"></i>تهران</span>
                                <div class="mt-4 row mx-0">
                                    <div class="col-6 px-0 degree">
                                        <span class="d-block">نیمه ابری</span>
                                        <strong>11 درجه سانتیگراد</strong>
                                    </div>
                                    <div class="col-6 px-0 text-center">
                                        <img width="110px" src="http://parscitrus.ir/themes/project-name/assets/public/images/weather.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="social-network w-100 my-5">
                            <span class="font18">پارس مرکبات در شبکه های اجتماعی</span>
                            <div class="mt-2 text-center">
                                <div class="d-inline-block social-item">
                                    <a href="">
                                        <i class="fab fa-instagram fa-2x"></i>
                                    </a>
                                </div>
                                <div class="d-inline-block social-item">
                                    <a href="">
                                        <i class="fab fa-telegram-plane fa-2x"></i>
                                    </a>
                                </div>
                                <div class="d-inline-block social-item">
                                    <a href="">
                                        <i class="fab fa-facebook-f fa-2x"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="app">
                            <span class="title">
                                دانلود اپلیکیشن
                            </span>
                            <div class="app-box row mx-0">
                                <div class="col-6 right-app px-0">
                                    <ul class="p-0">
                                        <li>
                                            <i class="fas fa-arrow-circle-left"></i>
                                            ثبت آسان درخواست
                                        </li>
                                        <li>
                                            <i class="fas fa-arrow-circle-left"></i>
                                            ارسال تصویر به کارشناس
                                        </li>
                                        <li>
                                            <i class="fas fa-arrow-circle-left"></i>
                                            مناسب برای اندروید و iOS
                                        </li>
                                        <li>
                                            <i class="fas fa-arrow-circle-left"></i>
                                            مدیریت درخواست ها
                                        </li>
                                    </ul>
                                    <div class="align-bottom">
                                        <a href="" class="download-app btn btn-success"><i class="fab fa-android ml-2"></i>نسخه اندروید</a>
                                        <a href="" class="download-app btn btn-dark"><i class="fab fa-apple ml-2"></i>نسخه iOS</a>
                                    </div>
                                </div>
                                <div class="col-6 px-0">
                                    <img width="90%" src="/images/mobile.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="article-slider">
            <div class="container my-5">
                <div class="title mb-3">
                    <i class="far fa-newspaper fa-2x ml-2"></i>
                    <span>آخرین مطالب سایت</span>
                </div>
                <article-slider></article-slider>
            </div>
        </section>
        <section class="shop-slider">
            <div class="container my-5">
                <div class="title mb-3">
                    <i class="fa fa-shopping-basket fa-2x ml-2"></i>
                    <span>آخرین محصولات سایت</span>
                </div>
                <shop-slider></shop-slider>
            </div>
        </section>
        <section class="news">
            <div class="container my-5">
                <div class="mb-3">
                    <i class="fas fa-mail-bulk fa-2x ml-2"></i>
                    <span class="title">عضویت در خبر نامه</span>
                    <div class="back_ d-flex mt-3">
                        <span>ایمیل شما:</span>
                        <input type="email">
                        <button type="submit">عضویت</button>
                    </div>
                </div>
            </div>
        </section>
    </main>

@stop
