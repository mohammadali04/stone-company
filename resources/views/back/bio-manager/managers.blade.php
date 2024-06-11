@extends('back.index')
@section('content')
                    @include('layouts.messages')
                    <div class="d-sm-flex justify-content-between align-items-start">
                        <div>
                            <h4 class="card-title card-title-dash">صفحه مدیریت بیوگرافی</h4>
                        </div>
                        <div>
                            <a href="{{Route('admin.create.manager')}}" type="button"
                                class="btn btn-primary btn-lg text-white mb-0 me-0"><i
                                    class="mdi mdi-account-plus"></i>افزودن مدیر جدید</a>
                            <a onclick="submitForm()" type="button"
                                class="btn btn-primary btn-lg text-white mb-0 me-0"  style="background:red"><i
                                    class="mdi mdi-account-plus"></i>حذف</a>
                        </div>
                    </div>
                    <div class="table-responsive  mt-1">
                    <style>
                            .item-img{
                                width:50px;
                                height:50px;
                            }
                            </style>
                        <table class="table select-table">
                            <thead>
                                <tr>
                                    </th>
                                    <th>کد</th>
                                    <th>نام</th>
                                    <th>نقش</th>
                                    <th>عکس</th>
                                    <th>ویرایش</th>
                                    <th>انتخاب</th>
                                </tr>
                            </thead>
                            <tbody>
                                <form action="{{Route('admin.destroy.manager')}}" method="get">
                                    @csrf
                                    @foreach($managers as $manager)
                                    <tr>
                                        <td>
                                            {{$manager->id}}
                                        </td>
                                        <td>
                                            {{$manager->name}}
                                        </td>
                                        <td>
                                            {{$manager->role}}
                                        </td>
                                        <td>
                                        <img class="item-img" src="{{$manager->img}}">
                                        </td>
                                        <td><a href="{{Route('admin.edit.manager',$manager->id)}}">ویرایش</a></td>
                                        <td>
                                            <div class="form-check form-check-flat mt-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" name="ids[]" value="{{$manager->id}}"
                                                        aria-checked="false" class="form-check-input"><i
                                                        class="input-helper"></i></label>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
@endsection
<script>
function submitForm() {
    $('form').submit();
}
</script>