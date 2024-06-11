@extends('back.index')
@section('content')
    <div class="card">
        <div class="card-body">
            @include('layouts.messages')
            <h4 class="card-title">Default form</h4>
            <p class="card-description">
                Basic form layout
            </p>
            <form class="forms-sample" action="{{Route('admin.project.update',$project->id)}}" method="POST">
            @csrf
                    <div class="form-group">
                      <label for="title">نام پروژه</label>
                      <input name="title" value="{{$project->title}}">
                    </div> 
                    <div class="form-group">
                      <label for="title">تاریخ</label>
                      <input name="date" value="{{$project->title}}">
                    </div> 
                    <div class="form-group">
                      <label for="title">مکان</label>
                      <input name="location" value="{{$project->location}}">
                    </div> 
                    <div class="form-group">
                    <label for="name">توضیحات</label>
                    <textarea class="form-control" name="description" id="summernote" class="form-control @error('description') is-invalid @enderror">{{$project->description}}</textarea>

                </div>
                <div class="form-group">
                    <span class="input-group-btn">
                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                            <i class="fa fa-picture-o"></i> Choose
                        </a>
                    </span>
                    <input id="thumbnail" class="form-control" type="text" name="img" value="{{$project->img}}" class="form-control @error('img') is-invalid @enderror">
                </div>    
                <button class="btn btn-primary me-2" type="submit">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
@endsection
