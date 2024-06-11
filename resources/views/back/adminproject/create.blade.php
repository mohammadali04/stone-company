@extends('back.index')
@section('content')
    <div class="card">
        <div class="card-body">
            @include('layouts.messages')
            <h4 class="card-title">Default form</h4>
            <p class="card-description">
                Basic form layout
            </p>
            <form class="forms-sample" action="{{Route('admin.project.store')}}" method="POST">
            @csrf
                    <div class="form-group">
                      <label for="title">نام پروژه</label>
                      <input name="title">
                    </div> 
                    <div class="form-group">
                      <label for="title">تاریخ</label>
                      <input name="date">
                    </div> 
                    <div class="form-group">
                      <label for="title">مکان</label>
                      <input name="location">
                    </div> 
                    <div class="form-group">
                    <label for="name">توضیحات</label>

                    <textarea class="form-control" name="description" id="summernote" class="form-control @error('description') is-invalid @enderror">{{old('description')}}</textarea>

                </div>
                <div class="form-group">
                    <span class="input-group-btn">
                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                            <i class="fa fa-picture-o"></i> Choose
                        </a>
                    </span>
                    <input id="thumbnail" class="form-control" type="text" name="img" value="{{old('img')}}" class="form-control @error('img') is-invalid @enderror">
                </div>                   
                <button class="btn btn-primary me-2" type="submit">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
@endsection