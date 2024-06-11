@extends('back.index')
@section('content')
    <div class="card">
        <div class="card-body">
            <style>
                .form-group{
                    margin:10px 0;
                }
            </style>
            @include('layouts.messages')
            <h4 class="card-title">افزودن مدیر</h4>
            <p class="card-description">
                Basic form layout
            </p>
            <form class="forms-sample" action="{{Route('admin.store.manager')}}" method="POST">
                @csrf
            <div class="form-group">
                    <label for="title">نام کاربری</label>
                    <select name="user_id">
                        @foreach($main_info as $key => $row)
                        <option value="{{$row['id']}}">{{$row['name']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">نام مدیر</label>
                    <input name="name">
                </div>
                <div class="form-group">
                    <label for="title">نقش</label>
                    <input name="role">
                </div>
                <div class="form-group">
                    <span class="input-group-btn">
                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                            <i class="fa fa-picture-o"></i> Choose
                        </a>
                    </span>
                    <input id="thumbnail" class="form-control" type="text" name="img" value="{{old('img')}}"
                        class="form-control @error('img') is-invalid @enderror">
                </div>
                <button class="btn btn-primary me-2" type="submit">Submit</button>
                <a class="btn btn-light" href="{{Route('admin.home')}}">Cancel</a>
            </form>
        </div>
    </div>
@endsection