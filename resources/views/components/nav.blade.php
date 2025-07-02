<nav class="petz-breadcrumb flw" style="background-image: url(../wp-content/uploads/2017/04/jumbotron.jpg)">
        <div class="container">
            <div class="bread flw" itemscope itemtype="http://schema.org/WebPage">
                <h1 class="page-title" itemprop="name">
                    @hasSection('title')
                        @yield('title')
                    @else
                        @if(Request::is('about'))
                            About
                        @elseif(Request::is('contact'))
                            Contact
                        @elseif(Request::is('gallery'))
                            Gallery
                        @elseif(Request::is('adoption'))
                            Adoption
                        @elseif(Request::is('our-services'))
                            Our Services
                        @elseif(Request::is('services-pet-hotel'))
                            Service Single
                        @elseif(Request::is('blog') && !Request::is('blog/*'))
                            Blog
                        @elseif(Request::is('blog/*'))
                            Blog Single
                        @else
                            {{ ucfirst(str_replace('-', ' ', Request::segment(1))) }}
                        @endif
                    @endif
                </h1>
            </div>
        </div>
    </nav>
