    <div class="sl-logo"><a href=""><i class="fa fa-shopping-basket"></i> Halubshop</a></div>
    <div class="sl-sideleft">
        <div class="input-group input-group-search">
            <input type="search" name="search" class="form-control" placeholder="Search">
            <span class="input-group-btn">
                <button class="btn"><i class="fa fa-search"></i></button>
            </span><!-- input-group-btn -->
        </div><!-- input-group -->

        <label class="sidebar-label">Navigation</label>
        <div class="sl-sideleft-menu">
            <a href="index.html" class="sl-menu-link active">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                    <span class="menu-item-label">Dashboard</span>
                </div><!-- menu-item -->
            <a href="#" class="sl-menu-link">
                <div class="sl-menu-item">
                    <i class="menu-item-icon ion-grid tx-20"></i>
                    <span class="menu-item-label">Categories</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item"><a href="{{ route('categories.index') }}" class="nav-link">Category</a></li>
                <li class="nav-item"><a href="{{ route('subcategories.index') }}" class="nav-link">Sub Category</a></li>
            </ul>
            <a href="#" class="sl-menu-link">
                <div class="sl-menu-item">
                    <i class="icon ion-settings tx-20"></i>
                    <span class="menu-item-label">Tools</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item"><a href="{{ route('brands.index') }}" class="nav-link">Brands</a></li>
                <li class="nav-item"><a href="{{ route('coupons.index') }}" class="nav-link">Coupons</a></li>
                <li class="nav-item"><a href="{{ route('newslaters.index') }}" class="nav-link">Newslatter</a></li>
            </ul>
            <a href="#" class="sl-menu-link">
                <div class="sl-menu-item">
                    <i class="fa fa-suitcase tx-20"></i>
                    <span class="menu-item-label">Products</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item"><a href="{{ route('products.index') }}" class="nav-link">All Products</a></li>
                <li class="nav-item"><a href="{{ route('products.create') }}" class="nav-link">Add Product</a></li>
            </ul>
            <a href="#" class="sl-menu-link">
                <div class="sl-menu-item">
                    <i class="fa fa-book tx-20"></i>
                    <span class="menu-item-label">Posts</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item"><a href="{{ route('post-categories.index') }}" class="nav-link">Categories</a></li>
                <li class="nav-item"><a href="{{ route('posts.index') }}" class="nav-link">All Posts</a></li>
                <li class="nav-item"><a href="{{ route('posts.create') }}" class="nav-link">Add Posts</a></li>
            </ul>
        </div><!-- sl-sideleft-menu -->

        <br>
    </div><!-- sl-sideleft -->
