@extends('back.index')
@section('content')
    <div class="card">
        <div class="card-body">
            @include('layouts.messages')
            <h4 class="card-title">ویرایش نظر</h4>
            <form class="forms-sample" action="{{Route('admin.comment.update',$comment->id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">نام</label>
                    <input type="text" class="form-control" name="name" value="{{$comment->name}}">
                </div>
                <div class="form-group">
                    <label for="name">نام</label>
                    <input type="text" class="form-control" name="name" value="{{$comment->email}}">
                </div>
                <div class="form-group">
                    <label for="name">نام</label>
                    <textarea class="form-control" name="body">{{$comment->body}}</textarea>
                </div>
                <div class="form-group">
                    <label for="name">وضعیت</label>
                    <select class="form-control" name="status">     
                        <option value="0">منتشر نشده</option>
                        @php if(($comment->status)==1){
                            $x='selected';
                        }else{
                            $x='';
                        }
                        @endphp
                        <option value="1" {{$x}}>منتشر شده</option>
                    </select>
                </div>
                <button class="btn btn-primary me-2" type="submit">Submit</button>
                <a class="btn btn-light" href="{{Route('admin.home')}}">Cancel</a>
            </form>
        </div>
    </div>
@endsection
