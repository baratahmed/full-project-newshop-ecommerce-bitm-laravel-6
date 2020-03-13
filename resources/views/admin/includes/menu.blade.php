<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <?php //Dashboard ?>
            <a class="nav-link" href="{{route('home')}}"
                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard</a>

            <?php //Category ?>
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#category" aria-expanded="false" aria-controls="collapseLayouts"
                ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Category
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
            ></a>
            <div class="collapse" id="category" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('add-category')}}">Add Category</a>
                    <a class="nav-link" href="{{route('manage-category')}}">Manage Category</a>
                </nav>
            </div>

            <?php //Brand ?>
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#brand" aria-expanded="false" aria-controls="collapseLayouts"
                ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Brand 
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
            ></a>
            <div class="collapse" id="brand" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('add-brand')}}">Add Brand</a>
                    <a class="nav-link" href="{{route('manage-brand')}}">Manage Brand</a>
                </nav>
            </div>


            <?php //Product Info ?>
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#product" aria-expanded="false" aria-controls="collapseLayouts"
                ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Product 
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
            ></a>
            <div class="collapse" id="product" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('add-product')}}">Add Product</a>
                    <a class="nav-link" href="{{route('manage-product')}}">Manage Product</a>
                </nav>
            </div>

            <a class="nav-link" href="{{route('manage-order')}}"
                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Manage Order</a>


            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages"
                ><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                Pages
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
            ></a>
            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"
                        >Authentication
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                    ></a>
                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                        <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="login.html">Login</a><a class="nav-link" href="register.html">Register</a><a class="nav-link" href="password.html">Forgot Password</a></nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError"
                        >Error
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                    ></a>
                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                        <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="401.html">401 Page</a><a class="nav-link" href="404.html">404 Page</a><a class="nav-link" href="500.html">500 Page</a></nav>
                    </div>
                </nav>
            </div>
            <div class="sb-sidenav-menu-heading">Addons</div>
            <a class="nav-link" href="charts.html"
                ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                Charts</a
            ><a class="nav-link" href="tables.html"
                ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Tables</a
            >
        </div>
    </div>
</nav>