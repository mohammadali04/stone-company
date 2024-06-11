@extends('back.index')
@section('content')
    <div class="card">
        <div class="card-body">
            @include('layouts.messages')
            <h4 class="card-title">ویرایش پیشینه</h4>
            <form class="forms-sample" action="{{Route('admin.history.update',$history->id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">توضیحات</label>
                    <textarea class="form-control" name="description" id="">{{$history->description}}</textarea>
                </div>
                <button class="btn btn-primary me-2" type="submit">Submit</button>
                <a class="btn btn-light" href="{{Route('admin.home')}}">Cancel</a>
            </form>
        </div>
    </div>
@endsection
