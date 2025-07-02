@extends('layouts.app')
@section('title')
    Blog
@endsection
@section('content')
<main id="main" class="page_content flw">
    <div class="container">
        <div class="row">
            <!-- Main Content -->
            <div class="col-md-8">
                <div class="blog-main-content">
                    <!-- Page Header -->
                    <div class="blog-header">
                        <h1 class="blog-title">Blog</h1>
                        <div class="blog-meta-info">
                            <span class="meta-item"><i class="fa fa-user"></i> BY PETZ</span>
                            <span class="meta-item"><i class="fa fa-comments"></i> NO COMMENTS</span>
                            <span class="meta-item"><i class="fa fa-folder"></i> UNCATEGORIZED</span>
                        </div>
                        <a href="#" class="read-more-btn">READ MORE <i class="fa fa-arrow-right"></i></a>
                    </div>

                    <!-- Blog Posts -->
                    @foreach($posts as $post)
                    <article class="blog-post-item">
                        <div class="post-image-wrapper">
                            <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="post-featured-image">
                            <div class="post-date-badge">
                                <span class="date-day">{{ \Carbon\Carbon::parse($post['date'])->format('d') }}</span>
                                <span class="date-month">{{ \Carbon\Carbon::parse($post['date'])->format('M Y') }}</span>
                            </div>
                        </div>
                        
                        <div class="post-content">
                            <h2 class="post-title">
                                <a href="{{ url('/blog/' . $post['id']) }}">{{ $post['title'] }}</a>
                            </h2>
                            
                            <div class="post-meta">
                                <span class="meta-item"><i class="fa fa-user"></i> BY {{ strtoupper($post['author']) }}</span>
                                <span class="meta-item"><i class="fa fa-comments"></i> NO COMMENTS</span>
                                <span class="meta-item"><i class="fa fa-folder"></i> {{ strtoupper($post['category']) }}</span>
                            </div>
                            
                            <div class="post-excerpt">
                                <p>{{ $post['excerpt'] }} Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras venenatis tincidunt rhoncus. Integer pulvinar elit ligula, laoreet imperdiet magna consectetur vel. Nullam tempus tellus sed laoreet porttitor. Urna quam efficitur magna, id vestibulum arcu massa eget risus. Mauris sagittis elit nec magna congue aliquam.</p>
                            </div>
                            
                            <a href="{{ url('/blog/' . $post['id']) }}" class="read-more-btn">
                                READ MORE <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-md-4">
                <aside class="blog-sidebar">
                    <!-- Search Widget -->
                    <div class="sidebar-widget search-widget">
                        <h3 class="widget-title">SEARCH</h3>
                        <form class="search-form">
                            <div class="search-wrapper">
                                <input type="text" placeholder="Search..." class="search-input">
                                <button type="submit" class="search-btn">SEARCH</button>
                            </div>
                        </form>
                    </div>

                    <!-- Latest Posts Widget -->
                    <div class="sidebar-widget latest-posts-widget">
                        <h3 class="widget-title">LATEST POSTS</h3>
                        <div class="latest-posts-list">
                            @foreach($posts as $index => $post)
                            @if($index < 3)
                            <div class="latest-post-item">
                                <div class="latest-post-image">
                                    <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}">
                                </div>
                                <div class="latest-post-content">
                                    <h4 class="latest-post-title">
                                        <a href="{{ url('/blog/' . $post['id']) }}">{{ $post['title'] }}</a>
                                    </h4>
                                    <span class="latest-post-date">{{ \Carbon\Carbon::parse($post['date'])->format('d M Y') }}</span>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>

                    <!-- About Us Widget -->
                    <div class="sidebar-widget about-widget">
                        <h3 class="widget-title">ABOUT US</h3>
                        <div class="about-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Interdum, perspiciatis adipisci accumsan laudantium.</p>
                            <div class="social-links">
                                <a href="#" class="social-link twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="social-link facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="social-link linkedin"><i class="fa fa-linkedin"></i></a>
                                <a href="#" class="social-link instagram"><i class="fa fa-instagram"></i></a>
                                <a href="#" class="social-link youtube"><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Categories Widget -->
                    <div class="sidebar-widget categories-widget">
                        <h3 class="widget-title">CATEGORIES</h3>
                        <ul class="categories-list">
                            <li><a href="#">Cats and Dogs</a></li>
                            <li><a href="#">Exotic Pets</a></li>
                            <li><a href="#">Uncategorized</a></li>
                        </ul>
                    </div>

                    <!-- Tags Widget -->
                    <div class="sidebar-widget tags-widget">
                        <h3 class="widget-title">TAGS</h3>
                        <div class="tags-cloud">
                            <a href="#" class="tag-link">Activity</a>
                            <a href="#" class="tag-link">Cats</a>
                            <a href="#" class="tag-link">Dog Food</a>
                            <a href="#" class="tag-link">Fun</a>
                            <a href="#" class="tag-link">Offer</a>
                            <a href="#" class="tag-link">Puppy</a>
                            <a href="#" class="tag-link">Toys</a>
                            <a href="#" class="tag-link">Veterinarian</a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</main>

<style>
/* Main Blog Styles */
.blog-main-content {
    padding-right: 30px;
}

.blog-header {
    margin-bottom: 40px;
    padding-bottom: 20px;
    border-bottom: 1px solid #eee;
}

.blog-title {
    font-size: 2.5rem;
    color: #4a90a4;
    font-weight: 700;
    margin-bottom: 15px;
}

.blog-meta-info {
    display: flex;
    gap: 20px;
    margin-bottom: 20px;
}

.meta-item {
    color: #999;
    font-size: 0.9rem;
    text-transform: uppercase;
}

.meta-item i {
    color: #4a90a4;
    margin-right: 5px;
}

.read-more-btn {
    background: linear-gradient(135deg, #ff6b35 0%, #f19f1f 100%);
    color: white;
    padding: 12px 25px;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    font-size: 0.9rem;
    text-transform: uppercase;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.read-more-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(255, 107, 53, 0.4);
    color: white;
}

/* Blog Post Items */
.blog-post-item {
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    margin-bottom: 40px;
    transition: transform 0.3s ease;
}

.blog-post-item:hover {
    transform: translateY(-5px);
}

.post-image-wrapper {
    position: relative;
    overflow: hidden;
    height: 300px;
}

.post-featured-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.blog-post-item:hover .post-featured-image {
    transform: scale(1.05);
}

.post-date-badge {
    position: absolute;
    top: 20px;
    right: 20px;
    background: linear-gradient(135deg, #ff6b35 0%, #f19f1f 100%);
    color: white;
    padding: 15px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

.date-day {
    display: block;
    font-size: 1.5rem;
    font-weight: 700;
    line-height: 1;
}

.date-month {
    display: block;
    font-size: 0.8rem;
    text-transform: uppercase;
    margin-top: 2px;
}

.post-content {
    padding: 30px;
}

.post-title {
    font-size: 1.8rem;
    margin-bottom: 15px;
    line-height: 1.3;
}

.post-title a {
    color: #4a90a4;
    text-decoration: none;
    transition: color 0.3s ease;
}

.post-title a:hover {
    color: #f19f1f;
}

.post-meta {
    display: flex;
    gap: 20px;
    margin-bottom: 20px;
    flex-wrap: wrap;
}

.post-excerpt {
    color: #666;
    line-height: 1.6;
    margin-bottom: 25px;
}

/* Sidebar Styles */
.blog-sidebar {
    padding-left: 30px;
}

.sidebar-widget {
    background: white;
    border-radius: 15px;
    padding: 25px;
    margin-bottom: 30px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
}

.widget-title {
    background: #4a90a4;
    color: white;
    text-align: center;
    padding: 12px;
    margin: -25px -25px 20px;
    border-radius: 15px 15px 0 0;
    font-size: 1rem;
    font-weight: 600;
    text-transform: uppercase;
}

/* Search Widget */
.search-wrapper {
    display: flex;
    gap: 10px;
}

.search-input {
    flex: 1;
    padding: 12px 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 0.9rem;
}

.search-btn {
    background: linear-gradient(135deg, #ff6b35 0%, #f19f1f 100%);
    color: white;
    border: none;
    padding: 12px 20px;
    border-radius: 5px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}

.search-btn:hover {
    transform: translateY(-2px);
}

/* Latest Posts Widget */
.latest-post-item {
    display: flex;
    gap: 15px;
    margin-bottom: 20px;
    padding-bottom: 20px;
    border-bottom: 1px solid #eee;
}

.latest-post-item:last-child {
    margin-bottom: 0;
    padding-bottom: 0;
    border-bottom: none;
}

.latest-post-image {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    overflow: hidden;
    flex-shrink: 0;
}

.latest-post-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.latest-post-content {
    flex: 1;
}

.latest-post-title {
    font-size: 0.9rem;
    margin-bottom: 5px;
    line-height: 1.3;
}

.latest-post-title a {
    color: #333;
    text-decoration: none;
    transition: color 0.3s ease;
}

.latest-post-title a:hover {
    color: #4a90a4;
}

.latest-post-date {
    color: #999;
    font-size: 0.8rem;
}

/* About Widget */
.about-content p {
    color: #666;
    line-height: 1.6;
    margin-bottom: 20px;
}

.social-links {
    display: flex;
    gap: 10px;
}

.social-link {
    width: 35px;
    height: 35px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-decoration: none;
    transition: transform 0.3s ease;
}

.social-link:hover {
    transform: scale(1.1);
    color: white;
}

.social-link.twitter { background: #1da1f2; }
.social-link.facebook { background: #3b5998; }
.social-link.linkedin { background: #0077b5; }
.social-link.instagram { background: #e4405f; }
.social-link.youtube { background: #ff0000; }

/* Categories Widget */
.categories-list {
    list-style: none;
    padding: 0;
}

.categories-list li {
    margin-bottom: 10px;
}

.categories-list a {
    color: #666;
    text-decoration: none;
    padding: 8px 0;
    display: block;
    border-bottom: 1px solid #eee;
    transition: color 0.3s ease;
}

.categories-list a:hover {
    color: #4a90a4;
}

/* Tags Widget */
.tags-cloud {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
}

.tag-link {
    background: linear-gradient(135deg, #ff6b35 0%, #f19f1f 100%);
    color: white;
    padding: 6px 12px;
    border-radius: 15px;
    text-decoration: none;
    font-size: 0.8rem;
    font-weight: 500;
    transition: all 0.3s ease;
}

.tag-link:hover {
    transform: translateY(-2px);
    color: white;
    box-shadow: 0 3px 10px rgba(255, 107, 53, 0.4);
}

/* Responsive Design */
@media (max-width: 768px) {
    .blog-main-content,
    .blog-sidebar {
        padding: 0;
    }
    
    .blog-meta-info,
    .post-meta {
        flex-direction: column;
        gap: 10px;
    }
    
    .search-wrapper {
        flex-direction: column;
    }
    
    .social-links {
        justify-content: center;
    }
    
    .blog-title {
        font-size: 2rem;
    }
    
    .post-title {
        font-size: 1.5rem;
    }
}
</style>
@endsection 