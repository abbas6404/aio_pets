<header class="petz-header flw">
    <div class="theme-header-box flw">
        <div class="container">
            <nav class="theme-box-menu">
                <ul id="menu-left-menu" class="primary-menu primary-left">
                    <li id="menu-item-2677"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2677 {{ Request::is('/') ? 'current-menu-item' : '' }}">
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li id="menu-item-2677"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2677 {{ Request::is('about') ? 'current-menu-item' : '' }}">
                        <a href="{{ url('/about') }}">About</a>
                    </li>
                    @php
                        $pagesRoutes = [
                            'gallery',
                            'adoption',
                            'our-services',
                            'services-pet-hotel'
                        ];
                        $isPagesActive = collect($pagesRoutes)->contains(function($route) {
                            return Request::is($route);
                        });
                    @endphp
                    <li id="menu-item-2155"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2155 {{ $isPagesActive ? 'current-menu-item' : '' }}">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li id="menu-item-2679"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2679 {{ Request::is('gallery') ? 'current-menu-item' : '' }}">
                                <a href="{{ url('/gallery') }}">Gallery</a>
                            </li>
                            <li id="menu-item-2678"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2678 {{ Request::is('adoption') ? 'current-menu-item' : '' }}">
                                <a href="{{ url('/adoption') }}">Adoption</a>
                            </li>
                            <li id="menu-item-2680"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2680 {{ Request::is('our-services') ? 'current-menu-item' : '' }}">
                                <a href="{{ url('/our-services') }}">Our Services</a>
                            </li>
                            <li id="menu-item-2684"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2684 {{ Request::is('services-pet-hotel') ? 'current-menu-item' : '' }}">
                                <a href="{{ url('/services-pet-hotel') }}">Service single</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div itemscope itemtype="http://schema.org/Organization" class="ht-logo">
                    <a class="lg" href="{{ url('/') }}" itemprop="url">
                        <img src="../wp-content/themes/petz/images/logo.png" alt="" itemprop="logo"
                            width="180" height="67" />
                    </a>
                    <span class="screen-reader-text">Petz</span>
                </div>
                <ul id="menu-right-menu" class="primary-menu primary-right">
                    
                    <li id="menu-item-2162"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2162 {{ Request::is('blog*') ? 'current-menu-item' : '' }}">
                        <a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li id="menu-item-2163"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2163 {{ Request::is('blog') && !Request::is('blog/*') ? 'current-menu-item' : '' }}">
                                <a href="{{ url('/blog') }}">Blog</a>
                            </li>
                            <li id="menu-item-2686"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2686 {{ Request::is('blog/1') ? 'current-menu-item' : '' }}">
                                <a href="{{ url('/blog/1') }}">Blog Single</a>
                            </li>
                        </ul>
                    </li>
                    <li id="menu-item-2685"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2685 {{ Request::is('contact') ? 'current-menu-item' : '' }}">
                        <a href="{{ url('/contact') }}">Contact</a>
                    </li>
                </ul>
                <span id="btn-toggle" class="ion-android-menu"></span>
            </nav>
        </div>
    </div>
    <div class="ht-overlay"></div>
</header>
