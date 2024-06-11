@extends('front.index')
@section('content')
<style>
.row-project {
    margin: 20px 20px;
}
</style>
<!-- breadcrumb part start-->
<section class="breadcrumb_part single_product_breadcrumb" style="margin:40px 0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <h2 style="color:gold">صفحه داخلی محصول</h2>
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
                <div id="carouselExampleControls" class="carousel slide col-lg-10" data-ride="carousel">
                    <div class="carousel-inner active">
                        @foreach($product->slides()->pluck('image') as $key=>$slide)
                        @php
                        if($key==0){
                        $active='active';
                        }else{
                        $active='';
                        }
                        @endphp
                        <div class="carousel-item {{$active}}">
                            <img class="d-block w-100" src="{{$slide}}" alt="First slide">
                        </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>
                <div class="col-lg-10 row-project">
                    <div class="single_product_text text-center" style="color:white;direction:ltr">
                        <h3 style="color:silver">{{$product->title}}</h3>

                        @php
                        echo $product->description
                        @endphp

                        <div class="wpb_wrapper" style="color:silver">
                            <blockquote>
                                <p>مجموعه ی سنگ برادران امینی افتخار دارد که از سال 1394 مدیریت و کنترل تولید و استخراج
                                    معدن مرمریت دهبید شایان را عهده‌دار است.<br>
                                </p>
                            </blockquote>
                        </div>
                        <div class="wpb_wrapper" style="color:silver">
                            <div class="wpb_text_column wpb_content_element ">
                                <div class="wpb_wrapper">
                                    <p>شش پله‌ی ابتدایی معدن با ارتفاع متوسط هر پله 10 متر کاملا هوازده و تکنونیزه بوده
                                        و بعد از برش توسط سیم برش به عنوان باطله در قسمت باطله ریز معدن ریخته می‌شود.
                                        توپولوژی خاص و شیب تند آن و عدم امکان بارگیری سنگ کوپ در جبهه‌های معدن استخراجی
                                        بر روی کامیون موجب شده تا سنگ‌های کوپ استخراجی از ارتفاع 135 متری با طی مسافت
                                        حدود 500 متر توسط لودر به محل بارگیری حمل و سپس برای بارگیری بر روی کامیون اقدام
                                        شود، شیب تند به وجود آمده موجب گردیده است که استهلاک ماشین‌آلات چندین برابر حد
                                        متعارف شود.</p>

                                </div>
                            </div>
                        </div>
                    </div>
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