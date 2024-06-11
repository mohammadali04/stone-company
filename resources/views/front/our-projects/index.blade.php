@extends('front.index')
@section('content')
<!-- breadcrumb part start-->
<section class="breadcrumb_part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <h2>لیست پروژه ها</h2>
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
                        @foreach($projects as $project)
                        <div class="col-lg-6 col-sm-6 list-item">
                            <div class="single_product_item">
                                <img src="{{$project->img}}" alt="#" class="img-fluid">
                                <h3 class="list-title"> <a href="{{Route('project.show',$project->id)}}">{{$project->title}}</a> </h3>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product list part end-->

@endsection