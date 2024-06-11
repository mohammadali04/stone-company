@extends('front.index')
@section('content')
<!-- breadcrumb part start-->
<section class="breadcrumb_part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <h2 style="text-align:center">لیست محصولات</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb part end-->

<!-- product list part start-->
<section class="product_list section_padding">
    <div class="container">
        <div class="row">
            @include('layouts.side-bar')
            <div class="col-md-8">
                <div class="product_list">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="/front/assets/img/512.jpg" alt="#" class="img-fluid">
                                <h3> <a href="single-product.html">بالشتک های طبی از جنس فوم</a> </h3>
                                <p>شروع قیمت از 15000 تومان</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="/front/assets/img/512.jpg" alt="#" class="img-fluid">
                                <h3> <a href="single-product.html">بالشتک از جنس فوم</a> </h3>
                                <p>شروع قیمت از 15000 تومان</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="/front/assets/img/512.jpg" alt="#" class="img-fluid">
                                <h3> <a href="single-product.html">بالشتک از جنس فوم</a> </h3>
                                <p>شروع قیمت از 15000 تومان</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="/front/assets/img/512.jpg" alt="#" class="img-fluid">
                                <h3> <a href="single-product.html">بالشتک از جنس فوم</a> </h3>
                                <p>شروع قیمت از 15000 تومان</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="/front/assets/img/512.jpg" alt="#" class="img-fluid">
                                <h3> <a href="single-product.html">بالشتک از جنس فوم</a> </h3>
                                <p>شروع قیمت از 15000 تومان</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="/front/assets/img/512.jpg" alt="#" class="img-fluid">
                                <h3> <a href="single-product.html">بالشتک های طبی از جنس فوم برای مسافرت</a> </h3>
                                <p>شروع قیمت از 15000 تومان</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="/front/assets/img/512.jpg" alt="#" class="img-fluid">
                                <h3> <a href="single-product.html">بالشتک از جنس فوم</a> </h3>
                                <p>شروع قیمت از 15000 تومان</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="/front/assets/img/512.jpg" alt="#" class="img-fluid">
                                <h3> <a href="single-product.html">بالشتک های طبی از جنس فوم برای مسافرت</a> </h3>
                                <p>شروع قیمت از 15000 تومان</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="/front/assets/img/512.jpg" alt="#" class="img-fluid">
                                <h3> <a href="single-product.html">بالشتک از جنس فوم</a> </h3>
                                <p>شروع قیمت از 15000 تومان</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="/front/assets/img/512.jpg" alt="#" class="img-fluid">
                                <h3> <a href="single-product.html">بالشتک از جنس فوم</a> </h3>
                                <p>شروع قیمت از 15000 تومان</p>
                            </div>
                        </div>
                    </div>
                    <div class="load_more_btn text-center">
                        <a href="#" class="btn_3">جزئیات بیشتر</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product list part end-->

@endsection