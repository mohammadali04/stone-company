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
        <h4 class="card-title">ویرایش اطلاعات مدیر</h4>
        <p class="card-description">
            Basic form layout
        </p>
        <form class="forms-sample" action="{{Route('admin.update.manager',$manager->id)}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">نام کاربری</label>
                <select name="user_id">
                    @php
                    $selected='';
                    @endphp
                    @foreach($main_info as $key => $row)
                    @php
                    if($row['id']==$manager->user_id){
                    $selected='selected';
                    }
                    @endphp
                    <option value="{{$row['id']}}" {{$selected}}>{{$row['name']}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="title">نام</label>
                <input name="name" value="{{$manager->name}}">
            </div>
            <div class="form-group">
                <label for="title">نقش</label>
                <input name="role" value="{{$manager->role}}">
            </div>
            <div class="form-group">
                <span class="input-group-btn">
                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                        <i class="fa fa-picture-o"></i> Choose
                    </a>

                    <input id="thumbnail" class="form-control" type="text" name="img" value="{{$manager->img}}"
                        class="form-control @error('img') is-invalid @enderror">
            </div>
            <button class="btn btn-primary me-2" type="submit">Submit</button>
            <a class="btn btn-light" href="{{Route('admin.home')}}">Cancel</a>
        </form> </span>
    </div>
</div>
@endsection