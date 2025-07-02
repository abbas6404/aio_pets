@extends('layouts.app')
@section('title')
    Adoption
@endsection
@section('content')
    <main id="main" class="page_content flw">
        <div class="container">
            <!-- Hero Section -->
            <section class="adoption-hero">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-image">
                            <img src="../wp-content/uploads/2017/04/adopt.jpg" alt="Pet Adoption" class="img-fluid rounded-lg">
                            <div class="hero-badge">
                                <i class="fa fa-heart"></i>
                                <span>Find Your Best Friend</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-content">
                            <h1 class="hero-title">Give a Pet a <span class="text-primary">Forever Home</span></h1>
                            <p class="hero-subtitle">Every pet deserves a loving family. Browse our adorable animals waiting for their perfect match and discover the joy of pet adoption.</p>
                            
                            <div class="adoption-benefits">
                                <h3 class="benefits-title">Why Adopt from Petz?</h3>
                                <ul class="benefits-list">
                                    <li><i class="fa fa-check-circle"></i> All pets are health-checked and vaccinated</li>
                                    <li><i class="fa fa-check-circle"></i> Professional behavioral assessment included</li>
                                    <li><i class="fa fa-check-circle"></i> 30-day support and guidance program</li>
                                    <li><i class="fa fa-check-circle"></i> Lifetime veterinary care discounts</li>
                                </ul>
                            </div>
                            
                                                    <div class="hero-actions">
                            <a href="#pets-section" class="btn btn-primary">Browse Pets</a>
                            <a href="#" class="btn btn-outline">Contact Us</a>
                        </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Pets Section -->
            <section id="pets-section" class="pets-section">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <h2 class="section-title">Meet Your New Best Friend</h2>
                        <p class="section-subtitle">Each of our pets has a unique personality and story. Find the perfect companion for your family.</p>
                    </div>
                </div>

                <!-- Filter Buttons -->
                <div class="filter-buttons text-center mb-5">
                    <button class="filter-btn active" data-filter="*">All Pets</button>
                    <button class="filter-btn" data-filter=".dog">Dogs</button>
                    <button class="filter-btn" data-filter=".cat">Cats</button>
                </div>

                <!-- Pets Grid -->
                <div class="pets-grid">
                    <!-- Dog - Lucy -->
                    <div class="pet-card dog">
                        <div class="pet-image">
                            <img src="../wp-content/uploads/2017/04/adopt1.jpg" alt="Lucy">
                            <div class="pet-overlay">
                                <div class="pet-actions">
                                    <button class="action-btn" data-pet="lucy"><i class="fa fa-heart"></i></button>
                                    <button class="action-btn" data-pet="lucy"><i class="fa fa-eye"></i></button>
                                </div>
                            </div>
                            <div class="pet-badge">Dog</div>
                        </div>
                        <div class="pet-info">
                            <h4 class="pet-name">Lucy</h4>
                            <div class="pet-details">
                                <span class="pet-age"><i class="fa fa-birthday-cake"></i> 2 years old</span>
                                <span class="pet-gender"><i class="fa fa-venus"></i> Female</span>
                            </div>
                            <p class="pet-description">A friendly Golden Retriever who loves playing fetch and cuddling. Great with children and other pets. Lucy is looking for an active family who enjoys outdoor adventures.</p>
                            <div class="pet-traits">
                                <span class="trait">Friendly</span>
                                <span class="trait">Active</span>
                                <span class="trait">Good with kids</span>
                            </div>
                            <button class="adopt-btn" data-pet="Lucy">
                                <i class="fa fa-heart"></i> Adopt Lucy
                            </button>
                        </div>
                    </div>

                    <!-- Cat - Gupsy -->
                    <div class="pet-card cat">
                        <div class="pet-image">
                            <img src="../wp-content/uploads/2017/04/adopt2.jpg" alt="Gupsy">
                            <div class="pet-overlay">
                                <div class="pet-actions">
                                    <button class="action-btn" data-pet="gupsy"><i class="fa fa-heart"></i></button>
                                    <button class="action-btn" data-pet="gupsy"><i class="fa fa-eye"></i></button>
                                </div>
                            </div>
                            <div class="pet-badge">Cat</div>
                        </div>
                        <div class="pet-info">
                            <h4 class="pet-name">Gupsy</h4>
                            <div class="pet-details">
                                <span class="pet-age"><i class="fa fa-birthday-cake"></i> 1 year old</span>
                                <span class="pet-gender"><i class="fa fa-mars"></i> Male</span>
                            </div>
                            <p class="pet-description">A playful tabby cat with beautiful markings. Gupsy loves interactive toys and sunny windowsills. He's perfect for a quiet household seeking a loving companion.</p>
                            <div class="pet-traits">
                                <span class="trait">Playful</span>
                                <span class="trait">Quiet</span>
                                <span class="trait">Independent</span>
                            </div>
                            <button class="adopt-btn" data-pet="Gupsy">
                                <i class="fa fa-heart"></i> Adopt Gupsy
                            </button>
                        </div>
                    </div>

                    <!-- Cat - Mary -->
                    <div class="pet-card cat">
                        <div class="pet-image">
                            <img src="../wp-content/uploads/2017/04/adopt3.jpg" alt="Mary">
                            <div class="pet-overlay">
                                <div class="pet-actions">
                                    <button class="action-btn" data-pet="mary"><i class="fa fa-heart"></i></button>
                                    <button class="action-btn" data-pet="mary"><i class="fa fa-eye"></i></button>
                                </div>
                            </div>
                            <div class="pet-badge">Cat</div>
                        </div>
                        <div class="pet-info">
                            <h4 class="pet-name">Mary</h4>
                            <div class="pet-details">
                                <span class="pet-age"><i class="fa fa-birthday-cake"></i> 3 years old</span>
                                <span class="pet-gender"><i class="fa fa-venus"></i> Female</span>
                            </div>
                            <p class="pet-description">A gentle and affectionate Persian cat who loves being pampered. Mary enjoys quiet evenings and gentle brushing. Perfect for seniors or calm households.</p>
                            <div class="pet-traits">
                                <span class="trait">Gentle</span>
                                <span class="trait">Calm</span>
                                <span class="trait">Affectionate</span>
                            </div>
                            <button class="adopt-btn" data-pet="Mary">
                                <i class="fa fa-heart"></i> Adopt Mary
                            </button>
                        </div>
                    </div>

                    <!-- Dog - Lucky -->
                    <div class="pet-card dog">
                        <div class="pet-image">
                            <img src="../wp-content/uploads/2017/04/adopt4.jpg" alt="Lucky">
                            <div class="pet-overlay">
                                <div class="pet-actions">
                                    <button class="action-btn" data-pet="lucky"><i class="fa fa-heart"></i></button>
                                    <button class="action-btn" data-pet="lucky"><i class="fa fa-eye"></i></button>
                                </div>
                            </div>
                            <div class="pet-badge">Dog</div>
                        </div>
                        <div class="pet-info">
                            <h4 class="pet-name">Lucky</h4>
                            <div class="pet-details">
                                <span class="pet-age"><i class="fa fa-birthday-cake"></i> 4 years old</span>
                                <span class="pet-gender"><i class="fa fa-mars"></i> Male</span>
                            </div>
                            <p class="pet-description">A loyal German Shepherd mix who's great with families. Lucky is well-trained, protective, and loves long walks. He's looking for an experienced dog owner.</p>
                            <div class="pet-traits">
                                <span class="trait">Loyal</span>
                                <span class="trait">Protective</span>
                                <span class="trait">Well-trained</span>
                            </div>
                            <button class="adopt-btn" data-pet="Lucky">
                                <i class="fa fa-heart"></i> Adopt Lucky
                            </button>
                        </div>
                    </div>

                    <!-- Dog - Susu -->
                    <div class="pet-card dog">
                        <div class="pet-image">
                            <img src="../wp-content/uploads/2017/04/adopt5.jpg" alt="Susu">
                            <div class="pet-overlay">
                                <div class="pet-actions">
                                    <button class="action-btn" data-pet="susu"><i class="fa fa-heart"></i></button>
                                    <button class="action-btn" data-pet="susu"><i class="fa fa-eye"></i></button>
                                </div>
                            </div>
                            <div class="pet-badge">Dog</div>
                        </div>
                        <div class="pet-info">
                            <h4 class="pet-name">Susu</h4>
                            <div class="pet-details">
                                <span class="pet-age"><i class="fa fa-birthday-cake"></i> 6 months old</span>
                                <span class="pet-gender"><i class="fa fa-venus"></i> Female</span>
                            </div>
                            <p class="pet-description">An adorable Beagle puppy full of energy and curiosity. Susu loves to explore and play. She needs a patient family willing to help with training and socialization.</p>
                            <div class="pet-traits">
                                <span class="trait">Energetic</span>
                                <span class="trait">Curious</span>
                                <span class="trait">Puppy</span>
                            </div>
                            <button class="adopt-btn" data-pet="Susu">
                                <i class="fa fa-heart"></i> Adopt Susu
                            </button>
                        </div>
                    </div>

                    <!-- Cat - Ava -->
                    <div class="pet-card cat">
                        <div class="pet-image">
                            <img src="../wp-content/uploads/2017/04/adopt6.jpg" alt="Ava">
                            <div class="pet-overlay">
                                <div class="pet-actions">
                                    <button class="action-btn" data-pet="ava"><i class="fa fa-heart"></i></button>
                                    <button class="action-btn" data-pet="ava"><i class="fa fa-eye"></i></button>
                                </div>
                            </div>
                            <div class="pet-badge">Cat</div>
                        </div>
                        <div class="pet-info">
                            <h4 class="pet-name">Ava</h4>
                            <div class="pet-details">
                                <span class="pet-age"><i class="fa fa-birthday-cake"></i> 2 years old</span>
                                <span class="pet-gender"><i class="fa fa-venus"></i> Female</span>
                            </div>
                            <p class="pet-description">A beautiful Siamese cat with striking blue eyes. Ava is vocal, intelligent, and loves attention. She would thrive in a home where she can be the center of attention.</p>
                            <div class="pet-traits">
                                <span class="trait">Intelligent</span>
                                <span class="trait">Vocal</span>
                                <span class="trait">Attention-loving</span>
                            </div>
                            <button class="adopt-btn" data-pet="Ava">
                                <i class="fa fa-heart"></i> Adopt Ava
                            </button>
                        </div>
                    </div>
                </div>
            </section>

            

            
        </div>
    </main>

    <style>
    /* Adoption Page Styles */
    .adoption-hero {
        padding: 60px 0;
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        border-radius: 20px;
        margin-bottom: 80px;
    }

    .hero-image {
        position: relative;
    }

    .hero-image img {
        border-radius: 15px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    }

    .hero-badge {
        position: absolute;
        top: 20px;
        left: 20px;
        background: linear-gradient(135deg, #ff6b35 0%, #f19f1f 100%);
        color: white;
        padding: 12px 20px;
        border-radius: 25px;
        display: flex;
        align-items: center;
        gap: 8px;
        font-weight: 600;
        box-shadow: 0 5px 15px rgba(255, 107, 53, 0.3);
    }

    .hero-title {
        font-size: 3rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 20px;
        line-height: 1.2;
    }

    .text-primary {
        color: #4a90a4 !important;
    }

    .hero-subtitle {
        font-size: 1.2rem;
        color: #666;
        line-height: 1.6;
        margin-bottom: 30px;
    }

    .adoption-benefits {
        margin-bottom: 30px;
    }

    .benefits-title {
        font-size: 1.3rem;
        font-weight: 600;
        color: #333;
        margin-bottom: 15px;
    }

    .benefits-list {
        list-style: none;
        padding: 0;
    }

    .benefits-list li {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
        color: #666;
    }

    .benefits-list i {
        color: #4a90a4;
        margin-right: 12px;
        font-size: 1.1rem;
    }

    .hero-actions {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
    }

    .btn {
        padding: 12px 25px;
        border-radius: 25px;
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }

    .btn-primary {
        background: linear-gradient(135deg, #ff6b35 0%, #f19f1f 100%);
        color: white;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(255, 107, 53, 0.4);
        color: white;
    }

    .btn-outline {
        background: transparent;
        color: #4a90a4;
        border-color: #4a90a4;
    }

    .btn-outline:hover {
        background: #4a90a4;
        color: white;
    }

    /* Pets Section */
    .pets-section {
        padding: 80px 0;
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 15px;
    }

    .section-subtitle {
        font-size: 1.1rem;
        color: #666;
        max-width: 600px;
        margin: 0 auto;
    }

    .filter-buttons {
        margin-bottom: 40px;
    }

    .filter-btn {
        background: white;
        border: 2px solid #e9ecef;
        color: #666;
        padding: 12px 25px;
        border-radius: 25px;
        margin: 0 8px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .filter-btn.active,
    .filter-btn:hover {
        background: linear-gradient(135deg, #ff6b35 0%, #f19f1f 100%);
        border-color: transparent;
        color: white;
    }

    .pets-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 30px;
        margin-bottom: 40px;
    }

    .pet-card {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
    }

    .pet-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 50px rgba(0,0,0,0.15);
    }

    .pet-image {
        position: relative;
        height: 250px;
        overflow: hidden;
    }

    .pet-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .pet-card:hover .pet-image img {
        transform: scale(1.1);
    }

    .pet-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(255, 107, 53, 0.9) 0%, rgba(241, 159, 31, 0.9) 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: all 0.3s ease;
    }

    .pet-card:hover .pet-overlay {
        opacity: 1;
    }

    .pet-actions {
        display: flex;
        gap: 15px;
    }

    .action-btn {
        width: 50px;
        height: 50px;
        background: white;
        border: none;
        border-radius: 50%;
        color: #f19f1f;
        font-size: 1.2rem;
        cursor: pointer;
        transition: all 0.3s ease;
        transform: translateY(20px);
    }

    .pet-card:hover .action-btn {
        transform: translateY(0);
    }

    .action-btn:hover {
        background: #333;
        color: white;
    }

    .pet-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        background: linear-gradient(135deg, #ff6b35 0%, #f19f1f 100%);
        color: white;
        padding: 6px 12px;
        border-radius: 15px;
        font-size: 0.8rem;
        font-weight: 600;
        text-transform: uppercase;
    }

    .pet-info {
        padding: 25px;
    }

    .pet-name {
        font-size: 1.5rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 10px;
    }

    .pet-details {
        display: flex;
        gap: 20px;
        margin-bottom: 15px;
        flex-wrap: wrap;
    }

    .pet-age,
    .pet-gender {
        display: flex;
        align-items: center;
        gap: 5px;
        color: #666;
        font-size: 0.9rem;
    }

    .pet-age i,
    .pet-gender i {
        color: #f19f1f;
    }

    .pet-description {
        color: #666;
        line-height: 1.6;
        margin-bottom: 15px;
        font-size: 0.95rem;
    }

    .pet-traits {
        display: flex;
        gap: 8px;
        margin-bottom: 20px;
        flex-wrap: wrap;
    }

    .trait {
        background: #f8f9fa;
        color: #666;
        padding: 4px 12px;
        border-radius: 15px;
        font-size: 0.8rem;
        font-weight: 500;
    }

    .adopt-btn {
        width: 100%;
        background: linear-gradient(135deg, #ff6b35 0%, #f19f1f 100%);
        color: white;
        border: none;
        padding: 12px 20px;
        border-radius: 25px;
        font-weight: 600;
        font-size: 1rem;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
    }

    .adopt-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(255, 107, 53, 0.4);
    }

    

    

    .btn-lg {
        padding: 15px 30px;
        font-size: 1.1rem;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .hero-title {
            font-size: 2.2rem;
        }
        
        .section-title {
            font-size: 2rem;
        }
        
        
        
        .pets-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }
        
        .pet-details {
            justify-content: center;
        }
        
                 .hero-actions {
             justify-content: center;
         }
        
                 .adoption-hero,
         .pets-section {
             padding: 40px 0;
         }
    }

    @media (max-width: 576px) {
        .hero-title {
            font-size: 1.8rem;
        }
        
        .filter-btn {
            margin: 5px;
            padding: 10px 20px;
        }
        
        .pet-card {
            margin-bottom: 20px;
        }
    }
    </style>

    <script>
    // Filter functionality
    document.addEventListener('DOMContentLoaded', function() {
        const filterBtns = document.querySelectorAll('.filter-btn');
        const petCards = document.querySelectorAll('.pet-card');
        
        filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                // Remove active class from all buttons
                filterBtns.forEach(b => b.classList.remove('active'));
                // Add active class to clicked button
                this.classList.add('active');
                
                const filter = this.getAttribute('data-filter');
                
                petCards.forEach(card => {
                    if (filter === '*' || card.classList.contains(filter.substring(1))) {
                        card.style.display = 'block';
                        setTimeout(() => {
                            card.style.opacity = '1';
                            card.style.transform = 'scale(1)';
                        }, 50);
                    } else {
                        card.style.opacity = '0';
                        card.style.transform = 'scale(0.8)';
                        setTimeout(() => {
                            card.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });
        
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
        
        // Adopt button functionality
        document.querySelectorAll('.adopt-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const petName = this.getAttribute('data-pet');
                alert(`Thank you for your interest in adopting ${petName}! Please contact us to start the adoption process.`);
            });
        });
    });
    </script>
@endsection
