@extends('front.index')
@section('content')
<!-- breadcrumb part start-->
@php
$page_title='لیست محصولات';
@endphp
@include('layouts.page-title')
<!-- breadcrumb part end-->

<!-- product list part start-->
<section class="product_list section_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            @include('layouts.side-bar')
            </div>
            <div class="col-md-8">
                <div class="product_list">
                    <div class="row">
                        @foreach($products as $product)
                        <div class="col-lg-6 col-sm-6 list-item">
                            <div class="single_product_item">
                                <img class="img-fluid" alt="" src="{{$product->img}}">
                                <h3 class="list-title"> <a href="{{Route('product.show',$product->id)}}">{{$product->title}}</a> </h3>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="load_more_btn text-center" style="text-align:center">
                        <style>
                        .pagination {
                            margin-right: 200px;
                        }

                        .page-item.active .page-link {
                            background: gold !important;
                            border-color: gold !important;
                        }

                        .page-link {
                            border-radius: 4px !important;
                            background-color: rgba(47, 23, 15, 0.9) !important;
                        }
                        </style>
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- product list part end-->

@endsection