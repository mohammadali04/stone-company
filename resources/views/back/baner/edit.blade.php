@extends('back.index')
@section('content')
    <div class="card">
        <div class="card-body">
            @include('layouts.messages')
            <h4 class="card-title">ویرایش بنر</h4>
            <form class="forms-sample" action="{{Route('admin.baner.update',$baner->id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">نام</label>
                    <input type="text" class="form-control" name="title" value="{{$baner->title}}">
                </div>
                <div class="form-group">
                    <label for="name">نام دوم</label>
                    <input type="text" class="form-control" name="subtitle" value="{{$baner->subtitle}}">
                </div>
                <div class="form-group">
                    <label for="name">توضیحات</label>

                    <textarea class="form-control" name="description" id="summernote">{{$baner->description}}</textarea>

                </div>
                <div class="form-group">
                    <span class="input-group-btn">
                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                            <i class="fa fa-picture-o"></i> Choose
                        </a>
                    </span>
                    <input id="thumbnail" class="form-control" type="text" name="img" value="{{$baner->img}}">
                    <img id="holder" style="margin-top:15px;max-height:100px;" src="{{$baner->img}}">
                </div>
                <button class="btn btn-primary me-2" type="submit">Submit</button>
                <a class="btn btn-light" href="{{Route('admin.home')}}">Cancel</a>            </form>
        </div>
    </div>
@endsection
