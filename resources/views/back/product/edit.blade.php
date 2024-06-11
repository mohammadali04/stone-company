@extends('back.index')
@section('content')
    <div class="card">
        <div class="card-body">
            @include('layouts.messages')
            <h4 class="card-title">ویرایش محصول</h4>
            <form class="forms-sample" action="{{Route('admin.product.update',$product->id)}}" method="POST">
            @csrf
                    <div class="form-group">
                      <label for="title">نام محصول</label>
                      <input name="title" value="{{$product->title}}">
                    </div> 
                    <div class="form-group">
                    <label for="name">نام دسته</label>
                    <select class="form-control" name="cat_id">
                        @foreach($categories as $category)
                        @php 
                        if($category->id==$product->cat_id){
                            $x='selected';
                        }else{
                            $x='';
                        }
                        @endphp
                        <option value="{{$category->id}}" {{$x}}>{{$category->title}}</option>
                       @endforeach
                    </select>
                </div>
                    <div class="form-group">
                    <label for="name">توضیحات</label>

                    <textarea class="form-control" name="description" id="summernote" class="form-control @error('description') is-invalid @enderror">{{$product->description}}</textarea>

                </div>
                <div class="form-group">
                    <span class="input-group-btn">
                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                            <i class="fa fa-picture-o"></i> Choose
                        </a>
                    </span>
                    <input id="thumbnail" class="form-control" type="text" name="img" value="{{$product->img}}" class="form-control @error('img') is-invalid @enderror">
                </div>    
                <button class="btn btn-primary me-2" type="submit">Submit</button>
                <a class="btn btn-light" href="{{Route('admin.home')}}">Cancel</a>
            </form>
        </div>
    </div>
@endsection
