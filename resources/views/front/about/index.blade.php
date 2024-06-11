@extends('front.index')
@section('content')
<style>
#about,
#team {
    margin: 40px 0;
}

p,
li {
    color: gold;
}
</style>
<section id="about" class="about">

    <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="row">

            <div class="col-lg-5 col-md-6">
                <div class="about-img aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
                    <img src="/front/assets/img/about-img.jpg" alt="">
                </div>
            </div>

            <div class="col-lg-7 col-md-6">
                <div class="about-content aos-init aos-animate" data-aos="fade-left" data-aos-delay="100">
                    <h2 style="color:silver">درباره ی ما</h2>
                    <h3 style="color:gray">{{$info->title}}</h3>
                    <p style="color:gold">{{$info->description}}</p>
                    <h2 style="color:silver">پیشینه</h2>
                    <ul>
                        @foreach($histories as $history)
                        <li><i class="bi bi-check-circle"></i>@php
                            echo $history->description;
                            @endphp
                        </li>
                        @endforeach
                        <li><i class="bi bi-check-circle"></i> تربیت بهترین نیرو ها وکارشناسان خبره در زمینه تولید صنایع
                            معدنی</li>
                        <li><i class="bi bi-check-circle"></i> جوایز و افتخارات از طرف وزارت کار و معدن</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</section>
<section id="team" class="team section-bg">
    <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="section-header">
            <h3 style="color:silver">مدیران عامل</h3>
            <p>مدیران و کارشناسان ما در زمینه ی خرید و مشاوره با شما همکاری خواهند کرد</p>
        </div>

        <div class="row">
            <style>
            h4 {
                color: gold;
            }

            span {
                color: silver;
            }
            </style>
            @foreach($managers as $manager)
            <div class="col-lg-3 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <div class="member">
                    <img src="{{$manager->img}}" class="img-fluid" alt="">
                    <div class="member-info">
                        <div class="member-info-content">
                            <h4>{{$manager->name}}</h4>
                            <span>{{$manager->role}}</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
@endsection