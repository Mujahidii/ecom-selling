<div class="col-md-2">
    <h6 class="h7 mb-0">Categories</h6>
    <!-- ctgList -->
    <ul class="ctgList list-unstyled mb-0 fNav px-0 py-2">
        @foreach($categories as $category)
            <!-- ctParent -->
            <li class="ctItem ctParent">
                <a href="javascript:void(0)">{{$category->name}} <span class="catSKU">(863)</span></a>
                <!-- ctChildList -->
                <ul class="list-unstyled ctChildList">
                    <li class="ctItem"><a href="#">Cable</a></li>
                    <li class="ctItem"><a href="#">Handsfree</a></li>
                    <li class="ctItem"><a href="#">Charger</a></li>
                    <li class="ctItem"><a href="#">USB</a></li>
                    <li class="ctItem"><a href="#">Protector</a></li>
                    <li class="ctItem"><a href="#">BackCover</a></li>
                </ul>
            </li>
        @endforeach
{{--        <!-- ctParent -->--}}
{{--        <li class="ctItem ctParent">--}}
{{--            <a href="#">Accessories <span class="catSKU">(863)</span></a>--}}
{{--            <!-- ctChildList -->--}}
{{--            <ul class="list-unstyled ctChildList">--}}
{{--                <li class="ctItem"><a href="#">Cable</a></li>--}}
{{--                <li class="ctItem"><a href="#">Handsfree</a></li>--}}
{{--                <li class="ctItem"><a href="#">Charger</a></li>--}}
{{--                <li class="ctItem"><a href="#">USB</a></li>--}}
{{--                <li class="ctItem"><a href="#">Protector</a></li>--}}
{{--                <li class="ctItem"><a href="#">BackCover</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <!-- ctParent -->--}}
{{--        <li class="ctItem ctParent">--}}
{{--            <a href="#">Console and Dressing tables <span class="catSKU">(717)</span></a>--}}
{{--            <!-- ctChildList -->--}}
{{--            <ul class="list-unstyled ctChildList">--}}
{{--                <li class="ctItem"><a href="#">Chairs</a></li>--}}
{{--                <li class="ctItem"><a href="#">Tables</a></li>--}}
{{--                <li class="ctItem"><a href="#">Console</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li class="ctItem ctParent">--}}
{{--            <a href="#">Kids Design <span class="catSKU">(457)</span></a>--}}
{{--            <!-- ctChildList -->--}}
{{--            <ul class="list-unstyled ctChildList">--}}
{{--                <li class="ctItem"><a href="#">Cloth</a></li>--}}
{{--                <li class="ctItem"><a href="#">Shirts</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li class="ctItem"><a href="#">Sofas <span class="catSKU">(656)</span></a></li>--}}
{{--        <li class="ctItem"><a href="#">Beds &amp; Co. <span class="catSKU">(1515)</span></a>--}}
{{--        </li>--}}
{{--        <li class="ctItem"><a href="#">Bookshelves <span class="catSKU">(219)</span></a>--}}
{{--        </li>--}}
{{--        <li class="ctItem"><a href="#">Madie and Cabinets <span class="catSKU">(368)</span></a>--}}
{{--        </li>--}}
{{--        <li class="ctItem"><a href="#">Shelves <span class="catSKU">(399)</span></a></li>--}}
{{--        <li class="ctItem"><a href="#">TV Stands <span class="catSKU">(790)</span></a></li>--}}
{{--        <li class="ctItem"><a href="#">Chaises Longues <span class="catSKU">(242)</span></a>--}}
{{--        </li>--}}
{{--        <li class="ctItem"><a href="#">Chairs <span class="catSKU">(166)</span></a></li>--}}
{{--        <li class="ctItem"><a href="#">Tables <span class="catSKU">(225)</span></a></li>--}}
    </ul>
</div>
