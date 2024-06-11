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
                <div id="carouselExampleControls" class="carousel slide col-lg-10" data-ride="carousel">
                    <div class="carousel-inner active">
                        @foreach($project->slides()->pluck('image') as $key=>$slide)
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
                    <div class="single_product_text text-center">
                        <h3 style="color:silver">جزئیات بیشتر</h3>
                        <style>
                            p{
                                color:gold;
                            }
                            </style>
                           @php
                           echo $project->description;
                           @endphp
                        
                    </div>
                </div>
                <div class="col-lg-10 row-project" style="color:silver">
                    <table class="info-table">
                        <tbody>
                            <tr class="info-table-row">
                                <th class="info-table-icon"><i class="fa fa-calendar"></i></th>
                                <td class="info-table-content">تاریخ اجرا : 1397</td>
                            </tr>
                            <tr class="info-table-row">
                                <th class="info-table-icon"><i class="fa fa-map-marker"></i></th>
                                <td class="info-table-content">محل اجرا : تهران</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--================End Single Product Area =================-->
    <!-- subscribe part here -->
    @endsection