@extends('front.index')
@section('content')
@foreach($categories as $category)
<section class="page-section">
    <a href="{{Route('category.show',$category->id)}}">
    <div class="container">
        <div class="product-item">
            <div class="product-item-title d-flex">
                <div class="bg-faded p-5 d-flex ms-auto rounded">
                    <h2 class="section-heading mb-0">
                        <span class="section-heading-upper">{{$category->title}}</span>
                        <span class="section-heading-lower">{{$category->attribute}}</</span>
                    </h2>
                </div>
            </div>
            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0"
                src="{{$category->img}}" alt="..." />
            <div class="product-item-description d-flex me-auto">
                <div class="bg-faded p-5 rounded">
                    <p class="mb-0">{{strip_tags($category->description)}} </p>
                </div>
            </div>
        </div>
    </div>
</a>
</section>
@endforeach
@endsection