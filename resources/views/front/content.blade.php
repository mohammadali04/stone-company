@extends('front.index')
@section('content')

<section class="page-section clearfix">
            <div class="container">
                <div class="intro">
                    <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="{{$baner->img}}" alt="..." />
                    <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">{{$baner->title}}</span>
                            <span class="section-heading-lower">{{$baner->subtitle}}</span>
                        </h2>
                        <p class="mb-3">{{strip_tags($baner->description)}}
                        </p>
                        <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="{{Route('index.index')}}">از ما دیدن کنید</a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">قول ما</span>
                                <span class="section-heading-lower">به شما</span>
                            </h2>
                            <p class="mb-0">هنگامی که برای شروع روز خود وارد فروشگاه ما می شوید، ما به ارائه خدمات دوستانه، فضایی دلپذیر و مهمتر از همه محصولات عالی ساخته شده با مواد اولیه با بالاترین کیفیت، متعهد هستیم. اگر راضی نیستید، لطفاً به ما اطلاع دهید و ما هر کاری از دستمان بر بیاید انجام خواهیم داد تا اوضاع درست شود!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection