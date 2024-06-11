<header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">A Free Bootstrap Business Theme</span>
                <span class="site-heading-lower">Business Casual</span>
            </h1>
        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">Start Bootstrap</a>
               <div class="collaps navbar-collaps pull-right"></div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <form action="{{Route('do.search')}}" method="GET" class="d-flex" role="search" style="height:auto;position:relative;float:right">
                @csrf     
                <input name="keyword" class="form-control me-2 w-100" type="search" placeholder="جست و جو" aria-label="Search">
                      <button class="btn w-25 btn-warning" type="submit" style="font-size:8pt;padding:10px 0">جستجو</button>
                    </form>
                <div class="collapse navbar-collapse pull-left" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{Route('index.index')}}">خانه</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{Route('index.about')}}">درباره ی ما</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{Route('category.index')}}">دسته ها</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{Route('project.index')}}">پروژه ها</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{Route('exhibition.index')}}">نمایشگاه ها</a></li>
                    </ul>
                </div>
            </div>
        </nav>