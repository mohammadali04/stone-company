@extends('front.index')
@section('content')
<div class="page-header page-header-sm" style="">
    <div class="container">
        <h1 class="text-uppercase page-title">نمایشگاه‌های بین‌اللملی</h1>
    </div>
</div>
<style>
ol,
li {
    float: right;
}

li {
    padding-right: 10px;
}

div {
    color: silver;
}

.row-exhibition {
    margin: 20px 0;
}
</style>
<div class="breadcrumb">
    <div class="container">
        <ol>
            <li><a href="https://amini-onyx.com">خانه</a></li>
            <li>نمایشگاه‌های بین‌اللملی</li>
        </ol>
    </div>
</div>
<div class="container content-container">
    <div class="row col-lg-12">
        <div id="carouselExampleControls" class="carousel slide col-lg-10 row-exhibition" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/front/assets/img/512.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/front/assets/img/512.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/front/assets/img/512.jpg" alt="Third slide">
                </div>
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
    </div>
    <div class="row col-lg-12">
        <div class="vc_row wpb_row vc_row-fluid vc_custom_1460122436961">
            <div class="wpb_column vc_column_container vc_col-md-10">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <h3 style="text-align: right" class="vc_custom_heading title">تاریخچه شرکت در
                            نمایشگاه‌های بین‌المللی سنگ و مصالح ساختمانی</h3>
                        <div class="vc_empty_space" style="height: 20px"><span class="vc_empty_space_inner"></span>
                        </div>
                        <div class="timeline">
                            <div class="timeline-item">
                                <div class="timeline-year">1393</div>
                                <div class="timeline-content">
                                    <h3 class="timeline-title">استامنبول و اصفهان</h3>
                                    <div class="timeline-text">شرکت در نمایشگاه‌های بین‌المللی سنگ و مصالح
                                        ساختمانی کشور ترکیه، شهر استانبول و استان اصفهان</div>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-year">1394</div>
                                <div class="timeline-content">
                                    <h3 class="timeline-title">اصفهان و تهران</h3>
                                    <div class="timeline-text">شرکت در نمایشگاه‌های بین‌المللی اصفهان و تهران
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-year">1395</div>
                                <div class="timeline-content">
                                    <h3 class="timeline-title">تهران و اصفهان</h3>
                                    <div class="timeline-text">شرکت در نمایشگاه‌های بین‌المللی سنگ و مصالح
                                        ساختمانی تهران بزرگ و استان اصفهان</div>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-year">1396</div>
                                <div class="timeline-content">
                                    <h3 class="timeline-title">ورونا و شیامن</h3>
                                    <div class="timeline-text">شرکت در نمایشگاه‌های بین‌المللی سنگ در کشور
                                        ایتالیا، شهر رم و کشور چین، شهر شیامن</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row col-lg-12">
    @foreach($exhibitions as $exhibition)
    <div class="col-lg-3 col-md-4 list-item">
        <div class="single_product_item">
            <img src="{{$exhibition->img}}" alt="#" class="img-fluid">
            <h3 class="list-title"> <a href="{{Route('exhibition.show',$exhibition->id)}}">{{$exhibition->title}}</a> </h3>
            <p class="list-title">{{$exhibition->location}}</p>
        </div>
    </div>
    @endforeach
</div>

</div>

@endsection