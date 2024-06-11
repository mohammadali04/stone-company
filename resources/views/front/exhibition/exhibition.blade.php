@extends('front.index')
@section('content')
<style>
.row-project {
    margin: 20px 20px;
}
</style>
<!-- breadcrumb part start-->
<section class="breadcrumb_part single_product_breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <h2 style="color:silver">صفحه داخلی محصول</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb part end-->

<!--================Single Product Area =================-->
<div class="product_image_area row-project">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                        <div class="col-lg-10">
                            <img class="d-block w-100" src="{{$exhibition->img}}" alt="First slide">
                </div>
                <div class="col-lg-10 row-project" style="margin:40px 0">
                    <p>
                       @php
                      echo $exhibition->description;
                       @endphp
                    </p>
                </div>
                <div class="col-lg-10 row-project">
                    <footer class="post-footer entry-footer">
                        <!-- Additional Post Information -->
                        <table class="post-info">
                            <tbody>
                                <tr>
                                    <th style="color:gold">دسته بندی ها</th>
                                    <td><a href="https://amini-onyx.com/category/manufacturing/"
                                            rel="category tag">تولید</a>, <a
                                            href="https://amini-onyx.com/category/%d8%b3%d9%86%da%af/"
                                            rel="category tag">سنگ</a>, <a
                                            href="https://amini-onyx.com/category/industry/"
                                            rel="category tag">صنعت</a>, <a
                                            href="https://amini-onyx.com/category/%d9%85%d8%b9%d8%af%d9%86/"
                                            rel="category tag">معدن</a>, <a
                                            href="https://amini-onyx.com/category/materials/" rel="category tag">مواد
                                            اولیه</a></td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- Post Author -->
                    </footer>
                </div>
            </div>
        </div>
    </div>
    <!--================End Single Product Area =================-->
    <!-- subscribe part here -->
    @endsection