<header id="pageHeader" class="sticky-wrap-headerFixer w-100">
    <!-- hdSearchBar -->
    <div class="hdSearchBar bg-secondary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 d-flex align-items-center">
                    <div class="logo">
                        <a href="#">
                            <img src="{{asset('images/logo.png')}}" class="img-fluid" alt="coolin">
                        </a>
                    </div>
                    <div
                        class="d-flex justify-content-end justify-content-md-between align-items-center flex-grow-1">
                        <form action="#"
                              class="hdssForm flex-shrink-0 flex-grow-1 px-sm-3 px-md-5 px-lg-10 px-lgwd-15 px-xl-20 px-xlwd-27">
                            <!-- searhFormCollpase -->
                            <div class="form-group mb-0 collapse" id="searhFormCollpase">
                                <div class="input-group">
                                    <div class="input-group-prepend d-none d-lg-block">
                                        <button class="btn btnGrey dropdown-toggle dBtn fwRegular" type="button"
                                                data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">All categories
                                        </button>
                                        <div class="dropdown-menu dMenu">
                                            <a class="dropdown-item dItem" href="#">Accessories</a>
                                            <a class="dropdown-item dItem" href="#">Console and Dressing
                                                tables</a>
                                            <a class="dropdown-item dItem" href="#">Kids Design</a>
                                            <a class="dropdown-item dItem" href="#">Sofas</a>
                                            <a class="dropdown-item dItem" href="#">Beds & Co.</a>
                                            <a class="dropdown-item dItem" href="#">Bookshelves and Shelves
                                                Unit</a>
                                            <a class="dropdown-item dItem" href="#">Madie and Cabinets</a>
                                            <a class="dropdown-item dItem" href="#">Shelves</a>
                                            <a class="dropdown-item dItem" href="#">TV Stands</a>
                                            <a class="dropdown-item dItem" href="#">Armchairs and Chaises
                                                Longues</a>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control pl-3 pr-2"
                                           placeholder="Search for products">
                                    <div class="input-group-append">
                                        <button class="btn btnYellow btnAuto" type="submit"><i
                                                class="icon-Search mr-1"></i><span
                                                class="d-none d-md-inline">Search</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <a href="#searhFormCollpase" class="hdSearchFormOpener d-sm-none" data-toggle="collapse"
                           role="button" aria-expanded="false" aria-controls="searhFormCollpase">
                            <i class="icon-Search"></i>
                        </a>
                        <!-- menuSocialNetworks -->
                        {{--                        <ul class="list-unstyled mb-0 d-flex justify-content-end menuSocialNetworks">--}}
                        {{--                            <a class="btn btn-primary" href="{{url('/login')}}">Login</a>--}}
                        {{--                            @include('partials.login')--}}
                        {{--                            <a class="btn btn-primary" href="{{route('user.logout')}}">Log Out</a>--}}
                        {{--                            <li>--}}
                        {{--                                <a href="04_08_User Profile.html" class="icnLink">--}}
                        {{--                                    <i class="icon-User"></i>--}}
                        {{--                                </a>--}}
                        {{--                            </li>--}}
                        {{--                            <li>--}}
                        {{--                                <a href="04_04_Compare.html" class="icnLink">--}}
                        {{--                                    <i class="icon-Sync"></i>--}}
                        {{--                                </a>--}}
                        {{--                            </li>--}}
                        {{--                            <li>--}}
                        {{--                                <a href="04_03_Wishlist.html" class="icnLink">--}}
                        {{--                                    <i class="icon-icnFavourtes"></i>--}}
                        {{--                                </a>--}}
                        {{--                            </li>--}}
                        <li class="position-relative">
                            <a href="#" class="cartOpener icnLink">
                                <i class="icon-Bag"></i>
                                <span class="icon fwSemibold d-none">3</span>
                            </a>
                            <!-- cartSideBar -->
                            <div class="cartSideBar position-fixed">
                                <!-- sideNav -->
                                <div class="sideNav px-3 px-sm-5 px-md-7 pt-10 pb-5">
                                    <div
                                        class="snHeader mb-2 pb-2 d-flex align-items-center justify-content-between">
                                        <h6 class="h7 mb-0 fwSemibold">Your Cart</h6>
                                        <a href="#" class="sideClose txtLink arrowTxtLink"></a>
                                    </div>
                                    <ul class="list-unstyled cartList mb-3 p-0">
                                        <li>
                                            <!-- cartItem -->
                                            <div
                                                class="cartItem d-flex justify-content-center w-100 py-3 px-3 pr-sm-6 position-relative">
                                                <div class="proImg flex-shrink-0 mr-2">
                                                    <a href="#"><img src="{{asset('images/img57.png')}}"
                                                                     class="img-fluid"
                                                                     alt="image description"></a>
                                                </div>
                                                <div class="proDetail pr-2">
                                                    <h6 class="h7 fwSemibold mb-2"><a href="#">Plastec Cedar
                                                            Wood Plant Caddy</a></h6>
                                                    <div class="proPrice fwSemibold"><span class="currency">$</span>552
                                                    </div>
                                                </div>
                                                <a href="#" class="proClose position-absolute"><i
                                                        class="fa fa-times"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <!-- cartItem -->
                                            <div
                                                class="cartItem d-flex justify-content-center w-100 py-3 px-3 pr-sm-6 position-relative">
                                                <div class="proImg flex-shrink-0 mr-2">
                                                    <a href="#"><img src="{{asset('images/img58.png')}}"
                                                                     class="img-fluid"
                                                                     alt="image description"></a>
                                                </div>
                                                <div class="proDetail pr-2">
                                                    <h6 class="h7 fwSemibold mb-2"><a href="#">Belham Living
                                                            Bartlett Console</a></h6>
                                                    <div class="proPrice fwSemibold"><span class="currency">$</span>552
                                                    </div>
                                                </div>
                                                <a href="#" class="proClose position-absolute"><i
                                                        class="fa fa-times"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="snFooter">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <span class="fsBody2">Subtotal</span>
                                            <strong class="cartTotal fsBody2 txtBlack"><span
                                                    class="currency txtBlack">$</span>1300</strong>
                                        </div>
                                        <div class="snBtnWrap mb-5">
                                            <a href="#" class="btn d-block w-100 btnGrey fwSemibold mr-1">View
                                                cart</a>
                                            <a href="#" class="btn d-block w-100 mt-2 btnTheme fwSemibold">Proceed
                                                to Checkout</a>
                                        </div>
                                        <span
                                            class="d-block fsBody2">Free Shipping on All Orders Over $100!</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- topBar -->
    <div class="topBar py-2 py-lg-0 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex menuHolder align-items-center justify-content-between flex-grow-1">
                        <!-- navbar -->
                        <nav class="navbar navbar-expand-lg navHolder navbar-light p-0 position-static">
                            <button class="navbar-toggler navOpener" type="button" data-toggle="collapse"
                                    data-target="#navBarOpener" aria-controls="navBarOpener"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                <span class="iconMenu icon-Menu"></span>
                            </button>
                            <span class="d-none d-lg-block mr-4 menuStaticIcn"><span
                                    class="icon-Menu"></span></span>
                            <div class="collapse navbar-collapse navCollapse" id="navBarOpener">
                                <!-- navbar-nav -->
                                <ul class="navbar-nav navbarNav mr-auto pageMainNavigation py-1 py-lg-0">
                                    <li class="nav-item dropdown anchor-active">
                                        <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false" href="#">Home <span
                                                class="sr-only">(current)</span></a>
                                        <!-- myDropdown dropdown-menu -->
                                        <div class="dropdown-menu myDropdown">
                                            <!-- navDropdownList -->
                                            <ul class="list-unstyled navDropdownList">
                                                <li>
                                                    <a class="dropdown-item" href="01_01_Home v1.html">Home
                                                        Version 1
                                                        <span class="imgHover"><img src="{{asset('images/img212.jpg')}}"
                                                                                    class="img-fluid"
                                                                                    alt="image description"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="01_01_Home v2.html">Home
                                                        Version 2
                                                        <span class="imgHover"><img src="{{asset('images/img212.jpg')}}"
                                                                                    class="img-fluid"
                                                                                    alt="image description"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="01_01_Home v3.html">Home
                                                        Version 3
                                                        <span class="imgHover"><img src="{{asset('images/img212.jpg')}}"
                                                                                    class="img-fluid"
                                                                                    alt="image description"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="01_01_Home v1.html">Home
                                                        Version 4
                                                        <span class="imgHover"><img src="{{asset('images/img212.jpg')}}"
                                                                                    class="img-fluid"
                                                                                    alt="image description"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="01_01_Home v2.html">Home
                                                        Version 5
                                                        <span class="imgHover"><img src="{{asset('images/img212.jpg')}}"
                                                                                    class="img-fluid"
                                                                                    alt="image description"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="01_01_Home v3.html">Home
                                                        Version 6
                                                        <span class="imgHover"><img src="{{asset('images/img212.jpg')}}"
                                                                                    class="img-fluid"
                                                                                    alt="image description"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false" href="#">Shop</a>
                                        <!-- myDropdown dropdown-menu -->
                                        <div class="dropdown-menu myDropdown myDropdown_lg">
                                            <div class="row colMyRow">
                                                <div class="col-12 col-lg-8">
                                                    <div class="row">
                                                        <div class="col-12 col-lg-4">
                                                            <h6 class="h8 fwSemibold mb-2">Product Pages</h6>
                                                            <ul class="list-unstyled p-0 mb-1 mb-lg-0">
                                                                <li><a class="dropdown-item" href="#">Shop
                                                                        Without Sidebar</a></li>
                                                                <li><a class="dropdown-item" href="#">Shop
                                                                        Without Sidebar_list</a></li>
                                                                <li><a class="dropdown-item" href="#">Shop Left
                                                                        Sidebar</a></li>
                                                                <li><a class="dropdown-item" href="#">Shop Right
                                                                        Sidebar</a></li>
                                                                <li><a class="dropdown-item" href="#">Shop
                                                                        Fullwidth</a></li>
                                                                <li><a class="dropdown-item" href="#">Shop
                                                                        Without Title + Scroll Load</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-12 col-lg-4">
                                                            <h6 class="h8 fwSemibold mb-2">Product Detail</h6>
                                                            <ul class="list-unstyled p-0 mb-1 mb-lg-0">
                                                                <li><a class="dropdown-item" href="#">Shop
                                                                        Without Sidebar</a></li>
                                                                <li><a class="dropdown-item" href="#">Shop
                                                                        Without Sidebar_list</a></li>
                                                                <li><a class="dropdown-item" href="#">Shop Left
                                                                        Sidebar</a></li>
                                                                <li><a class="dropdown-item" href="#">Shop Right
                                                                        Sidebar</a></li>
                                                                <li><a class="dropdown-item" href="#">Shop
                                                                        Fullwidth</a></li>
                                                                <li><a class="dropdown-item" href="#">Shop
                                                                        Without Title + Scroll Load</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-12 col-lg-4">
                                                            <h6 class="h8 fwSemibold mb-2">Product Pages</h6>
                                                            <ul class="list-unstyled p-0 mb-1 mb-lg-0">
                                                                <li><a class="dropdown-item" href="#">Shop
                                                                        Without Sidebar</a></li>
                                                                <li><a class="dropdown-item" href="#">Shop
                                                                        Without Sidebar_list</a></li>
                                                                <li><a class="dropdown-item" href="#">Shop Left
                                                                        Sidebar</a></li>
                                                                <li><a class="dropdown-item" href="#">Shop Right
                                                                        Sidebar</a></li>
                                                                <li><a class="dropdown-item" href="#">Shop
                                                                        Fullwidth</a></li>
                                                                <li><a class="dropdown-item" href="#">Shop
                                                                        Without Title + Scroll Load</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-4 d-flex">
                                                    <div
                                                        class="imgWrap imgHasHover overflow-hidden d-flex w-100 pt-2 pb-3 py-lg-0">
                                                        <a href="#"><img src="{{asset('images/img213.png')}}"
                                                                         class="img-fluid w-100 h-100 ihover"
                                                                         alt="image description"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false" href="#">Categories</a>
                                        <!-- myDropdown dropdown-menu -->
                                        <div class="dropdown-menu myDropdown myDropdown_lg">
                                            <div class="row colMyRow">
                                                <div class="col-12 col-lg-3">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <h6 class="h8 fwSemibold mb-2">T-Shirts</h6>
                                                            <ul class="list-unstyled p-0 mb-1 mb-lg-0">
                                                                <li><a class="dropdown-item" href="#">View
                                                                        All</a></li>
                                                                <li><a class="dropdown-item" href="#">Basics</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Cartoons
                                                                        &#174;</a></li>
                                                                <li><a class="dropdown-item" href="#">Graphic &
                                                                        Slogans</a></li>
                                                                <li><a class="dropdown-item"
                                                                       href="#">Cropped</a></li>
                                                                <li><a class="dropdown-item" href="#">White</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Short
                                                                        Sleeve</a></li>
                                                                <li><a class="dropdown-item" href="#">Long
                                                                        Sleeve</a></li>
                                                                <li><a class="dropdown-item"
                                                                       href="#">Sleeveless</a></li>
                                                                <li><a class="dropdown-item" href="#">Mum</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <h6 class="h8 fwSemibold mb-2">Knitwear</h6>
                                                            <ul class="list-unstyled p-0 mb-1 mb-lg-0">
                                                                <li><a class="dropdown-item" href="#">View
                                                                        All</a></li>
                                                                <li><a class="dropdown-item"
                                                                       href="#">Sweaters</a></li>
                                                                <li><a class="dropdown-item"
                                                                       href="#">Cardigans</a></li>
                                                                <li><a class="dropdown-item"
                                                                       href="#">Dresses</a></li>
                                                                <li><a class="dropdown-item"
                                                                       href="#">Cashmere</a></li>
                                                                <li><a class="dropdown-item" href="#">Tops</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Basics</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Minimal
                                                                        Collection</a></li>
                                                                <li><a class="dropdown-item" href="#">Mum</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-3">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <h6 class="h8 fwSemibold mb-2">Dresses</h6>
                                                            <ul class="list-unstyled p-0 mb-1 mb-lg-0">
                                                                <li><a class="dropdown-item" href="#">View
                                                                        All</a></li>
                                                                <li><a class="dropdown-item" href="#">Mini</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Midi</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Maxi</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Shirt
                                                                        dress</a></li>
                                                                <li><a class="dropdown-item" href="#">Linen</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <h6 class="h8 fwSemibold mb-2">Jeans</h6>
                                                            <ul class="list-unstyled p-0 mb-1 mb-lg-0">
                                                                <li><a class="dropdown-item" href="#">View
                                                                        All</a></li>
                                                                <li><a class="dropdown-item" href="#">Fits</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Rises</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                       href="#">Jackets</a></li>
                                                                <li><a class="dropdown-item" href="#">Shorts</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Skirts</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Mum</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                       href="#">Concepts</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-3">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <h6 class="h8 fwSemibold mb-2">Coat</h6>
                                                            <ul class="list-unstyled p-0 mb-1 mb-lg-0">
                                                                <li><a class="dropdown-item" href="#">View
                                                                        All</a></li>
                                                                <li><a class="dropdown-item" href="#">Coats</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Parkas</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                       href="#">Puffers</a></li>
                                                                <li><a class="dropdown-item" href="#">Trench
                                                                        Coats</a></li>
                                                                <li><a class="dropdown-item"
                                                                       href="#">Raincoats</a></li>
                                                                <li><a class="dropdown-item" href="#">Faux
                                                                        fur</a></li>
                                                                <li><a class="dropdown-item"
                                                                       href="#">Waistcoats</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <h6 class="h8 fwSemibold mb-2">Shoes</h6>
                                                            <ul class="list-unstyled p-0 mb-1 mb-lg-0">
                                                                <li><a class="dropdown-item" href="#">View
                                                                        All</a></li>
                                                                <li><a class="dropdown-item" href="#">New in</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Special
                                                                        prices</a></li>
                                                                <li><a class="dropdown-item"
                                                                       href="#">Sneakers</a></li>
                                                                <li><a class="dropdown-item"
                                                                       href="#">Leather</a></li>
                                                                <li><a class="dropdown-item" href="#">Ankle
                                                                        boots</a></li>
                                                                <li><a class="dropdown-item" href="#">Boots</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Flats</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                       href="#">High-heels</a></li>
                                                                <li><a class="dropdown-item"
                                                                       href="#">Sandals</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-3">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <h6 class="h8 fwSemibold mb-2">Bags</h6>
                                                            <ul class="list-unstyled p-0 mb-1 mb-lg-0">
                                                                <li><a class="dropdown-item" href="#">Animal
                                                                        Print</a></li>
                                                                <li><a class="dropdown-item"
                                                                       href="#">Leather</a></li>
                                                                <li><a class="dropdown-item" href="#">Belt
                                                                        bags</a></li>
                                                                <li><a class="dropdown-item" href="#">Crossbody
                                                                        bags</a></li>
                                                                <li><a class="dropdown-item" href="#">Large
                                                                        bags</a></li>
                                                                <li><a class="dropdown-item"
                                                                       href="#">Handbags</a></li>
                                                                <li><a class="dropdown-item" href="#">Mini
                                                                        bags</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <h6 class="h8 fwSemibold mb-2">Accessories</h6>
                                                            <ul class="list-unstyled p-0 mb-1 mb-lg-0">
                                                                <li><a class="dropdown-item" href="#">View
                                                                        All</a></li>
                                                                <li><a class="dropdown-item"
                                                                       href="#">Scarves</a></li>
                                                                <li><a class="dropdown-item"
                                                                       href="#">Jewelry</a></li>
                                                                <li><a class="dropdown-item" href="#">Belts</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                       href="#">Eyewear</a></li>
                                                                <li><a class="dropdown-item" href="#">Hats</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                       href="#">Beachwear</a></li>
                                                                <li><a class="dropdown-item" href="#">Socks</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false" href="#">Pages</a>
                                        <!-- myDropdown dropdown-menu -->
                                        <div class="dropdown-menu myDropdown">
                                            <!-- navDropdownList -->
                                            <ul class="list-unstyled navDropdownList">
                                                <li>
                                                    <a class="dropdown-item" href="05_01_About us.html">About
                                                        Us</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="05_02_Contact us.html">Contact
                                                        Us</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="05_03_Gallery">Gallery</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="05_04_FAQ's">FAQ's</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="05_05_404.html">404 Error
                                                        Page</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="05_06_Comming soon.html">Comming
                                                        Soon</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false" href="#">Element</a>
                                        <!-- myDropdown dropdown-menu -->
                                        <div class="dropdown-menu myDropdown">
                                            <!-- navDropdownList -->
                                            <ul class="list-unstyled navDropdownList">
                                                <li>
                                                    <a class="dropdown-item" href="02_01_Shop Categories.html">Shop
                                                        Categories</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                       href="02_02_Shop Multiple Mixed Rows.html">Shop Multiple
                                                        Mixed Rows</a>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item dropdown-toggle" href="#"
                                                       role="button" data-toggle="dropdown" aria-haspopup="true"
                                                       aria-expanded="false">Blog</a>
                                                    <!-- myDropdown dropdown menu -->
                                                    <div class="dropdown-menu myDropdown">
                                                        <!-- navDropdownList -->
                                                        <ul class="list-unstyled navDropdownList">
                                                            <li><a class="dropdown-item"
                                                                   href="06_01_Defaul version.html">Blog Defaul
                                                                    Version</a></li>
                                                            <li><a class="dropdown-item"
                                                                   href="06_02_Grid version.html">Blog Grid
                                                                    Version</a></li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item dropdown-toggle"
                                                                   href="#" role="button" data-toggle="dropdown"
                                                                   aria-haspopup="true"
                                                                   aria-expanded="false">Level-2</a>
                                                                <!-- myDropdown dropdown menu -->
                                                                <div class="dropdown-menu myDropdown">
                                                                    <!-- navDropdownList -->
                                                                    <ul class="list-unstyled navDropdownList">
                                                                        <li><a class="dropdown-item" href="#">Child</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                               href="#">Level-3</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false" href="#">Category</a>
                                        <!-- myDropdown dropdown-menu -->
                                        <div class="dropdown-menu myDropdown">
                                            <!-- navDropdownList -->
                                            <ul class="list-unstyled navDropdownList">
                                                @if(auth()->user() && auth()->user()->type === 'admin')
                                                    <li>
                                                        <a class="dropdown-item" href="{{route('category.create')}}">Create
                                                            New</a>
                                                    </li>
                                                @endif
                                                <li>
                                                    <a class="dropdown-item"
                                                       href="{{route('category.list')}}">All Categories</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    @if(!empty(auth()->user()) && auth()->user()->type === \App\Utilities\Constant::user['admin'])
                                        <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false" href="#"> Users</a>
                                        <!-- myDropdown dropdown-menu -->
                                        <div class="dropdown-menu myDropdown">
                                            <!-- navDropdownList -->
                                            <ul class="list-unstyled navDropdownList">
                                                <li>
                                                    <a class="dropdown-item" href="{{route('user.create')}}">Create
                                                        New</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                       href="{{route('user.list')}}">All Users</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    @endif
                                    <li class="nav-item">
                                        <a class="nav-link flash_sale" href="#"><i
                                                class="icon-icnFlash mr-1"></i>Flash sale</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <div class="revWrap position-relative">
                            @if(auth()->user())
                                <a href="{{route('logout')}}">Logout</a>
                            @else
                                <a href="{{route('login')}}">Login</a>
                            @endif
                            <a href="#" class="recLink">Recent views</a>
                            <div class="dMenu">
                                <ul class="list-unstyled prodList mb-0 p-0">
                                    <li>
                                        <!-- prodCol -->
                                        <div
                                            class="prodCol d-flex justify-content-center w-100 p-1 position-relative">
                                            <div class="proImg flex-shrink-0 mr-2">
                                                <a href="#"><img src="{{asset('images/img59.png')}}" class="img-fluid"
                                                                 alt="image description"></a>
                                            </div>
                                            <div class="proDetail pr-2">
                                                <h6 class="h7 fwSemibold mb-1"><a href="#">4D Concepts Urban
                                                        Loft 4 Drawer</a></h6>
                                                <div class="proPrice fwSemibold"><span class="currency">$</span>552
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <!-- prodCol -->
                                        <div
                                            class="prodCol d-flex justify-content-center w-100 p-1 position-relative">
                                            <div class="proImg flex-shrink-0 mr-2">
                                                <a href="#"><img src="{{asset('images/img60.png')}}" class="img-fluid"
                                                                 alt="image description"></a>
                                            </div>
                                            <div class="proDetail pr-2">
                                                <h6 class="h7 fwSemibold mb-1"><a href="#">Belham Living Windsor
                                                        Rocking</a></h6>
                                                <div class="proPrice fwSemibold"><span class="currency">$</span>102
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <!-- prodCol -->
                                        <div
                                            class="prodCol d-flex justify-content-center w-100 p-1 position-relative">
                                            <div class="proImg flex-shrink-0 mr-2">
                                                <a href="#"><img src="{{asset('images/img61.png')}}" class="img-fluid"
                                                                 alt="image description"></a>
                                            </div>
                                            <div class="proDetail pr-2">
                                                <h6 class="h7 fwSemibold mb-1"><a href="#">Leick Furniture
                                                        Ironcraft Sofa</a></h6>
                                                <div class="proPrice fwSemibold"><span class="currency">$</span>735
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <!-- prodCol -->
                                        <div
                                            class="prodCol d-flex justify-content-center w-100 p-1 position-relative">
                                            <div class="proImg flex-shrink-0 mr-2">
                                                <a href="#"><img src="{{asset('images/img62.png')}}" class="img-fluid"
                                                                 alt="image description"></a>
                                            </div>
                                            <div class="proDetail pr-2">
                                                <h6 class="h7 fwSemibold mb-1"><a href="#">Belham Living Windsor
                                                        Rocking</a></h6>
                                                <div class="proPrice fwSemibold"><span class="currency">$</span>596
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <!-- prodCol -->
                                        <div
                                            class="prodCol d-flex justify-content-center w-100 p-1 position-relative">
                                            <div class="proImg flex-shrink-0 mr-2">
                                                <a href="#"><img src="{{asset('images/img63.png')}}" class="img-fluid"
                                                                 alt="image description"></a>
                                            </div>
                                            <div class="proDetail pr-2">
                                                <h6 class="h7 fwSemibold mb-1"><a href="#">Bin Pull Oak Two
                                                        Drawer Console</a></h6>
                                                <div class="proPrice fwSemibold"><span class="currency">$</span>187
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <!-- prodCol -->
                                        <div
                                            class="prodCol d-flex justify-content-center w-100 p-1 position-relative">
                                            <div class="proImg flex-shrink-0 mr-2">
                                                <a href="#"><img src="{{asset('images/img59.png')}}" class="img-fluid"
                                                                 alt="image description"></a>
                                            </div>
                                            <div class="proDetail pr-2">
                                                <h6 class="h7 fwSemibold mb-1"><a href="#">4D Concepts Urban
                                                        Loft 4 Drawer</a></h6>
                                                <div class="proPrice fwSemibold"><span class="currency">$</span>552
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <!-- prodCol -->
                                        <div
                                            class="prodCol d-flex justify-content-center w-100 p-1 position-relative">
                                            <div class="proImg flex-shrink-0 mr-2">
                                                <a href="#"><img src="{{asset('images/img60.png')}}" class="img-fluid"
                                                                 alt="image description"></a>
                                            </div>
                                            <div class="proDetail pr-2">
                                                <h6 class="h7 fwSemibold mb-1"><a href="#">Belham Living Windsor
                                                        Rocking</a></h6>
                                                <div class="proPrice fwSemibold"><span class="currency">$</span>102
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <!-- prodCol -->
                                        <div
                                            class="prodCol d-flex justify-content-center w-100 p-1 position-relative">
                                            <div class="proImg flex-shrink-0 mr-2">
                                                <a href="#"><img src="{{asset('images/img61.png')}}" class="img-fluid"
                                                                 alt="image description"></a>
                                            </div>
                                            <div class="proDetail pr-2">
                                                <h6 class="h7 fwSemibold mb-1"><a href="#">Leick Furniture
                                                        Ironcraft Sofa</a></h6>
                                                <div class="proPrice fwSemibold"><span class="currency">$</span>735
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sideOver -->
    <span class="sideOver"></span>
</header>
