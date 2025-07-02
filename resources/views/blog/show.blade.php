@extends('layouts.app')
@section('title')
    {{ $post['title'] }}
@endsection
@section('content')
<main id="main" class="page_content flw">
    <div class="container">
        <div class="row">
            <!-- Main Content -->
            <div class="col-md-8">
                <div class="blog-main-content">
                    <article class="single-blog-post">
                        <div class="post-header">
                            <div class="post-image-wrapper">
                                <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="post-featured-image">
                                <div class="post-date-badge">
                                    <span class="date-day">{{ \Carbon\Carbon::parse($post['date'])->format('d') }}</span>
                                    <span class="date-month">{{ \Carbon\Carbon::parse($post['date'])->format('M Y') }}</span>
                                </div>
                            </div>
                            
                            <div class="post-header-content">
                                <h1 class="post-title">{{ $post['title'] }}</h1>
                                
                                <div class="post-meta">
                                    <span class="meta-item"><i class="fa fa-user"></i> BY {{ strtoupper($post['author']) }}</span>
                                    <span class="meta-item"><i class="fa fa-comments"></i> NO COMMENTS</span>
                                    <span class="meta-item"><i class="fa fa-folder"></i> {{ strtoupper($post['category']) }}</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="post-content">
                            <p>{{ $post['excerpt'] }}</p>
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras venenatis tincidunt rhoncus. Integer pulvinar elit ligula, laoreet imperdiet magna consectetur vel. Nullam tempus tellus sed laoreet porttitor. Urna quam efficitur magna, id vestibulum arcu massa eget risus. Mauris sagittis elit nec magna congue aliquam. Nam sollicitudin urna nunc, eu lacinia lorem vel. Donec ultrices.</p>
                            
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                            
                            <blockquote class="post-quote">
                                <p>"The greatness of a nation and its moral progress can be judged by the way its animals are treated."</p>
                                <cite>- Mahatma Gandhi</cite>
                            </blockquote>
                            
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                            
                            <h3>Essential Pet Care Tips</h3>
                            <ul class="post-list">
                                <li>Regular veterinary check-ups are crucial for early detection of health issues</li>
                                <li>Maintain a balanced diet appropriate for your pet's age and species</li>
                                <li>Ensure your pet gets adequate exercise and mental stimulation</li>
                                <li>Keep up with vaccinations and preventive treatments</li>
                                <li>Create a safe and comfortable environment for your pet</li>
                            </ul>
                            
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p>
                        </div>
                        
                        <div class="post-footer">
                            <div class="post-tags">
                                <span class="tags-label">Tags:</span>
                                <a href="#" class="tag-link">Pet Care</a>
                                <a href="#" class="tag-link">Health</a>
                                <a href="#" class="tag-link">{{ $post['category'] }}</a>
                            </div>
                            
                            <div class="post-navigation">
                                <a href="{{ url('/blog') }}" class="back-to-blog">
                                    <i class="fa fa-arrow-left"></i> Back to Blog
                                </a>
                            </div>
                        </div>
                    </article>
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
                            @php
                                $allPosts = [
                                    ['id' => 1, 'title' => 'Essential Pet Care Tips for New Owners', 'date' => '2024-01-15', 'image' => '/public/wp-content/uploads/2017/04/blog1.jpg'],
                                    ['id' => 2, 'title' => 'The Best Cat Toys for Indoor Entertainment', 'date' => '2024-01-10', 'image' => '/public/wp-content/uploads/2017/04/blog2.jpg'],
                                    ['id' => 3, 'title' => 'Child Friendly Pets: A Complete Guide', 'date' => '2024-01-05', 'image' => '/public/wp-content/uploads/2017/04/blog3.jpg']
                                ];
                            @endphp
                            @foreach($allPosts as $latestPost)
                            @if($latestPost['id'] != $post['id'])
                            <div class="latest-post-item">
                                <div class="latest-post-image">
                                    <img src="{{ $latestPost['image'] }}" alt="{{ $latestPost['title'] }}">
                                </div>
                                <div class="latest-post-content">
                                    <h4 class="latest-post-title">
                                        <a href="{{ url('/blog/' . $latestPost['id']) }}">{{ $latestPost['title'] }}</a>
                                    </h4>
                                    <span class="latest-post-date">{{ \Carbon\Carbon::parse($latestPost['date'])->format('d M Y') }}</span>
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
/* Single Post Styles */
.single-blog-post {
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    margin-bottom: 40px;
}

.post-header {
    margin-bottom: 30px;
}

.post-image-wrapper {
    position: relative;
    overflow: hidden;
    height: 400px;
}

.post-featured-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
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

.post-header-content {
    padding: 30px 30px 0;
}

.post-title {
    font-size: 2.2rem;
    color: #4a90a4;
    margin-bottom: 20px;
    line-height: 1.3;
    font-weight: 700;
}

.post-meta {
    display: flex;
    gap: 20px;
    margin-bottom: 20px;
    flex-wrap: wrap;
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

.post-content {
    padding: 0 30px 30px;
    color: #666;
    line-height: 1.8;
    font-size: 1.1rem;
}

.post-content p {
    margin-bottom: 20px;
}

.post-content h3 {
    color: #4a90a4;
    font-size: 1.5rem;
    margin: 30px 0 20px;
    font-weight: 600;
}

.post-quote {
    background: #f8f9fa;
    border-left: 4px solid #f19f1f;
    padding: 25px;
    margin: 30px 0;
    border-radius: 0 10px 10px 0;
    font-style: italic;
}

.post-quote p {
    font-size: 1.2rem;
    color: #333;
    margin-bottom: 10px;
}

.post-quote cite {
    color: #f19f1f;
    font-weight: 600;
    font-style: normal;
}

.post-list {
    padding-left: 20px;
    margin: 20px 0;
}

.post-list li {
    margin-bottom: 10px;
    color: #666;
}

.post-footer {
    padding: 20px 30px 30px;
    border-top: 1px solid #eee;
    margin-top: 30px;
}

.post-tags {
    margin-bottom: 20px;
}

.tags-label {
    color: #333;
    font-weight: 600;
    margin-right: 15px;
}

.tag-link {
    background: linear-gradient(135deg, #ff6b35 0%, #f19f1f 100%);
    color: white;
    padding: 6px 12px;
    border-radius: 15px;
    text-decoration: none;
    font-size: 0.8rem;
    font-weight: 500;
    margin-right: 8px;
    transition: all 0.3s ease;
}

.tag-link:hover {
    transform: translateY(-2px);
    color: white;
    box-shadow: 0 3px 10px rgba(255, 107, 53, 0.4);
}

.back-to-blog {
    background: #4a90a4;
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

.back-to-blog:hover {
    background: #3a7a8a;
    transform: translateY(-2px);
    color: white;
}

/* Sidebar Styles (same as index) */
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

.tags-cloud .tag-link {
    background: linear-gradient(135deg, #ff6b35 0%, #f19f1f 100%);
    color: white;
    padding: 6px 12px;
    border-radius: 15px;
    text-decoration: none;
    font-size: 0.8rem;
    font-weight: 500;
    transition: all 0.3s ease;
    margin-right: 0;
}

.tags-cloud .tag-link:hover {
    transform: translateY(-2px);
    color: white;
    box-shadow: 0 3px 10px rgba(255, 107, 53, 0.4);
}

/* Responsive Design */
@media (max-width: 768px) {
    .blog-sidebar {
        padding-left: 0;
        margin-top: 40px;
    }
    
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
    
    .post-title {
        font-size: 1.8rem;
    }
    
    .post-image-wrapper {
        height: 250px;
    }
    
    .post-header-content,
    .post-content,
    .post-footer {
        padding-left: 20px;
        padding-right: 20px;
    }
}
</style>
@endsection 