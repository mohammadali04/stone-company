<div class="col-md-4">
    <div class="product_sidebar">
        <div class="single_sedebar" style="color:silver">
            دسته ها
        </div>
        <div class="single_sedebar">
            @php
            use App\Models\Category;
            $categories=Category::all();
            @endphp
            <div class="select_option">
                <div class="select_option_list" ظ</div>
                    <div class="select_option_dropdown">
                        @foreach($categories as $category)
                        <p><a href="{{Route('category.show',$category->id)}}">{{$category->title}}</a></p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>