<div style="overflow-y:scroll;height:551px" id="sidebar"
    class="rounded row col-xl-4 col-lg-4 col-md-3 col-sm-6 col-xs-12 pull-right bg-dark text-light">
    <div class="col-12 bg-success rounded align-items-center" style="padding:20px 0;margin-top: 5px;">
        <h5 style="text-align: center;">پنل مدیریت</h5>
    </div>
    <div class="col-12 d-flex flex-row">
        @if(auth()->user()->manager()->first())
        <div class="col-md-4 p-2">
            <img src="{{auth()->user()->manager()->first()->img}}" class="rounded-circle" alt=""
                style="width:100px ;height:100px">
        </div>
        <div class="col-md-8 p-2 text-light d-flex align-items-center">
            <h4 style="text-align: center">{{auth()->user()->manager()->first()->name}}</h4>
        </div>
        @else
        <div class="col-md-8 p-2 text-light d-flex align-items-center">
            <h4 style="text-align: center">{{auth()->user()->name}}</h4>
        </div>
        @endif
    </div>
    <hr>
    <ul class="list-group bg-dark text-light">
        <style>
        .title-manager {
            padding: 10px 0;
        }
        </style>
        <a class="title-manager" href="{{Route('admin.product.index')}}">
            <li class="list-group-item bg-dark text-light list-group-item-action d-flex justify-content-start">
                <div class="col-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                        class="bi bi-upc-scan" viewBox="0 0 16 16">
                        <path
                            d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5M.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5m15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5M3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0z" />
                    </svg>
                </div>
                <div class="col-9">مدیریت محصولات</div>
            </li>
        </a>
        @php
        use App\Models\About;
        $bio=About::find(1);
        $bioId=$bio->id;
        @endphp
        <a class="title-manager" href="{{Route('admin.bio.edit',$bioId)}}">
            <li class="list-group-item bg-dark text-light d-flex justify-content-start">
                <div class="col-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                        class="bi bi-file-earmark-person-fill" viewBox="0 0 16 16">
                        <path
                            d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0m2 5.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-.245S4 12 8 12s5 1.755 5 1.755" />
                    </svg>
                </div>

                <div class="col-9">نمایش پیشینه</div>
            </li>
        </a>
        <a class="title-manager" href="{{Route('admin.show.manager')}}">
            <li class="list-group-item bg-dark text-light d-flex justify-content-start">
                <div class="col-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                        class="bi bi-people-fill" viewBox="0 0 16 16">
                        <path
                            d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                    </svg>
                </div>
                <div class="col-9">نمایش مدیران</div>
            </li>
        </a>
        <a class="title-manager" href="{{Route('admin.baner.index')}}">
            <li class="list-group-item bg-dark text-light d-flex justify-content-start">
                <div class="col-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                        class="bi bi-card-image" viewBox="0 0 16 16">
                        <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0" />
                        <path
                            d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54L1 12.5v-9a.5.5 0 0 1 .5-.5z" />
                    </svg>
                </div>
                <div class="col-9">مدیریت بنر</div>
            </li>
        </a>
        <a class="title-manager" href="{{Route('admin.exhibition.index')}}">
            <li class="list-group-item bg-dark text-light d-flex justify-content-start">
                <div class="col-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                        class="bi bi-table" viewBox="0 0 16 16">
                        <path
                            d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm15 2h-4v3h4zm0 4h-4v3h4zm0 4h-4v3h3a1 1 0 0 0 1-1zm-5 3v-3H6v3zm-5 0v-3H1v2a1 1 0 0 0 1 1zm-4-4h4V8H1zm0-4h4V4H1zm5-3v3h4V4zm4 4H6v3h4z" />
                    </svg>
                </div>
                <div class="col-9">مدیریت نمایشگاه</div>
            </li>
        </a>
        <a class="title-manager" href="{{Route('admin.user.index')}}">
            <li class="list-group-item bg-dark text-light d-flex justify-content-start">
                <div class="col-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                        class="bi bi-table" viewBox="0 0 16 16">
                        <path
                            d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm15 2h-4v3h4zm0 4h-4v3h4zm0 4h-4v3h3a1 1 0 0 0 1-1zm-5 3v-3H6v3zm-5 0v-3H1v2a1 1 0 0 0 1 1zm-4-4h4V8H1zm0-4h4V4H1zm5-3v3h4V4zm4 4H6v3h4z" />
                    </svg>
                </div>
                <div class="col-9">مدیریت کاربران</div>
            </li>
        </a>
    </ul>
</div>