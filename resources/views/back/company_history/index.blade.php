@extends('back.index')
@section('content')
                    @include('layouts.messages')
                    <div class="d-sm-flex justify-content-between align-items-start">
                        <div>
                            <h4 class="card-title card-title-dash">صفحه مدیریت پیشینه</h4>
                        </div>
                        <div>
                            <a href="{{Route('admin.history.create')}}" type="button"
                                class="btn btn-warning btn-lg text-white mb-0 me-0"><i
                                    class="mdi mdi-account-plus"></i>افزودن پیشینه جدید</a>
                            <a onclick="submitForm()" type="button" class="btn btn-primary btn-lg text-white mb-0 me-0"
                                style="background:red"><i class="mdi mdi-account-plus"></i>حذف</a>
                        </div>
                    </div>
                    <style>
                    .img-td-history {
                        width: 100px !important;
                        height: 50px !important;
                    }
                    </style>
                    <div class="table-responsive  mt-1">
                        <table class="table select-table">
                            <thead>
                                <tr>
                                    </th>
                                    <th>کد</th>
                                    <th>توضیحات</th>
                                    <th>ویرایش</th>
                                    <th>انتخاب</th>
                                </tr>
                            </thead>
                            <tbody>
                                <form action="{{Route('admin.history.destroy')}}" method="get">
                                    @csrf
                                    @foreach($histories as $history)
                                    <tr>
                                        <td>
                                            {{$history->id}}
                                        </td>
                                        <td>
                                        @php echo mb_substr($history->description,0,60).'...' @endphp
                                        </td>
                                        <td><a href="{{Route('admin.history.edit',$history->id)}}">ویرایش</a></td>
                                        <td>
                                            <div class="form-check form-check-flat mt-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" name="ids[]" value="{{$history->id}}"
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