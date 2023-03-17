<div class="col-md-2">
    <h6 class="h7 mb-0">Categories</h6>
    <!-- ctgList -->
    <ul class="ctgList list-unstyled mb-0 fNav px-0 py-2">
        @foreach($categories as $category)
            <!-- ctParent -->
            <li class="ctItem @if(count($category->children) > 0) ctParent @endif">
                <a href="javascript:void(0)">{{$category->name}}
                    <span class="catSKU">
                        @if(count($category->children) > 0)
                            ({{count($category->children)}})
                        @endif
                    </span>
                </a>
                <!-- ctChildList -->
                <ul class="list-unstyled ctChildList">
                    @foreach($category->children as $childCategory)
                        <li class="ctItem"><a href="#">{{$childCategory->name}}</a></li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</div>
