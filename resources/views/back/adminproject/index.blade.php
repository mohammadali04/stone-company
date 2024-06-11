@extends('back.index')
@section('content')
                    @include('layouts.messages')
                    <div class="d-sm-flex justify-content-between align-items-start">
                        <div>
                            <h4 class="card-title card-title-dash">صفحه مدیریت پروژه ها</h4>
                        </div>
                        <div>
                            <a href="{{Route('admin.project.create')}}" type="button"
                                class="btn btn-primary btn-lg text-white mb-0 me-0"><i
                                    class="mdi mdi-account-plus"></i>افزودن پروژه ی جدید</a>
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
                                    <th>توضیحات</th>
                                    <th>عکس</th>
                                    <th>ویرایش</th>
                                    <th>انتخاب</th>
                                </tr>
                            </thead>
                            <tbody>
                                <form action="{{Route('admin.project.destroy')}}" method="get">
                                    @csrf
                                    @foreach($projects as $project)
                                    <tr>
                                        <td>
                                            {{$project->id}}
                                        </td>
                                        <td>
                                            {{$project->title}}
                                        </td>
                                        <td>
                                            {{mb_substr(strip_tags($project->description),0,50)}}
                                        </td>
                                        <td>
                                        <img class="item-img" src="{{$project->img}}">
                                        </td>
                                        <td><a href="{{Route('admin.project.edit',$project->id)}}">ویرایش</a></td>
                                        <td>
                                            <div class="form-check form-check-flat mt-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" name="ids[]" value="{{$project->id}}"
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
