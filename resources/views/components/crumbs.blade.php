    <div class="crumbs">
        <span class="first-item">
            <a href="{{ url('/') }}">Homepage</a>
        </span>
        <span class="last-item">
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
        </span>
    </div>
