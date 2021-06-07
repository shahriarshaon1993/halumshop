<div class="header__sidebar">
    <div class="header__sidebar__top">
        {{--Navbar Brand --}}
        <a class="navbar-brand" href="#"><span style="color: #17a2b8;">Halum</span>shop</a>
        <button class="close-btn"><i class="fa fa-times"></i></button>
    </div>

    @php
        $categories = App\Models\Category::with('child_category')->where('category_id', NULL)->get();
    @endphp

    <ul class="header__sidebar__menu">
        @foreach ($categories as $category)
            @if ($category->child_category->count() > 0)
                <li class="header__sidebar__menu__item dropdown">
                    <a href="#" class="header__sidebar__menu__item__link dropdown-toggle d-flex justify-content-between align-items-center" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span>{{ $category->name }}</span>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach ($category->child_category as $subcategory)
                            <a class="dropdown-item" href="#">{{ $subcategory->name }}</a>
                        @endforeach
                    </div>
                </li>
            @else
                <li class="header__sidebar__menu__item">
                    <a href="#" class="header__sidebar__menu__item__link">{{ $category->name }}</a>
                </li>
            @endif

        @endforeach
        {{-- <li class="header__sidebar__menu__item">
            <a href="#" class="header__sidebar__menu__item__link">Home</a>
        </li>
        <li class="header__sidebar__menu__item dropdown">
            <a href="#" class="header__sidebar__menu__item__link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us <i class="fa fa-caret-right" aria-hidden="true"></i></a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
            </div>
        </li>
        <li class="header__sidebar__menu__item">
            <a href="#" class="header__sidebar__menu__item__link">Team</a>
        </li>
        <li class="header__sidebar__menu__item">
            <a href="#" class="header__sidebar__menu__item__link">Pricing</a>
        </li> --}}
    </ul>
    <!--<div class="header__sidebar__media">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
    </div> -->
</div>
