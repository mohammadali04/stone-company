@extends('back.index')
@section('content')
    <div class="card">
        <div class="card-body">
            @include('layouts.messages')
            <h4 class="card-title">افزودن تصویر</h4>
            <form class="forms-sample" action="{{Route('admin.project.store.image',$project->id)}}" method="POST">
            @csrf
            <input type="hidden" name="project_id" value="{{$project->id}}">
                <div class="form-group">
                    <span class="input-group-btn">
                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                            <i class="fa fa-picture-o"></i> Choose
                        </a>
                    </span>
                    <input id="thumbnail" class="form-control" type="text" name="image[]" value="{{old('image')}}" class="form-control @error('img') is-invalid @enderror">
                </div> 
                
                <button class="btn btn-primary me-2" type="submit">Submit</button>
                <a class="btn btn-light" href="{{Route('admin.home')}}">Cancel</a>
            </form>
        </div>
    </div>
@endsection