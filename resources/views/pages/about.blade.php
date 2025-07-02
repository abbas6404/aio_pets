@extends('layouts.app')
@section('title')
    About
@endsection
@section('content')
<main id="main" class="page_content flw">
    <div class="container">
        <!-- Hero Section -->
        <section class="about-hero">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-hero-content">
                        <h1 class="about-title">Caring for Pets with <span class="text-primary">Love & Expertise</span></h1>
                        <p class="about-subtitle">For over 15 years, Petz has been dedicated to providing exceptional pet care services, ensuring your furry friends receive the love, attention, and professional care they deserve.</p>
                        <div class="about-stats">
                            <div class="stat-item">
                                <span class="stat-number">15+</span>
                                <span class="stat-label">Years Experience</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">5000+</span>
                                <span class="stat-label">Happy Pets</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">24/7</span>
                                <span class="stat-label">Emergency Care</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-hero-image">
                        <img src="../wp-content/uploads/2017/04/about.jpg" alt="Pet Care Services" class="img-fluid rounded-lg">
                        <div class="image-overlay">
                            <div class="play-button">
                                <i class="fa fa-play"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="about-services">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title">Why Choose Petz?</h2>
                    <p class="section-subtitle">We provide comprehensive pet care services with professional expertise and genuine care</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fa fa-home"></i>
                        </div>
                        <h5 class="service-title">Pet Housing</h5>
                        <p class="service-description">Comfortable and safe housing facilities designed specifically for your pet's needs and comfort.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fa fa-star"></i>
                        </div>
                        <h5 class="service-title">High Quality Care</h5>
                        <p class="service-description">Premium care services delivered by certified professionals with years of experience in pet care.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fa fa-stethoscope"></i>
                        </div>
                        <h5 class="service-title">Veterinary Services</h5>
                        <p class="service-description">Complete medical care including check-ups, vaccinations, and emergency treatments for all pets.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h5 class="service-title">Special Care</h5>
                        <p class="service-description">Personalized care plans tailored to meet the unique needs of elderly pets and special requirements.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Story Section -->
        <section class="about-story">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="story-content">
                        <h2 class="story-title">Our Story</h2>
                        <p class="story-text">Founded in 2009 by a team of passionate veterinarians and animal lovers, Petz began as a small clinic with a big dream: to provide exceptional care for every pet that walks through our doors.</p>
                        <p class="story-text">Over the years, we've grown into a comprehensive pet care facility, but our core values remain the same. We believe that every pet deserves love, respect, and the highest quality care available.</p>
                        <div class="story-features">
                            <div class="feature-item">
                                <i class="fa fa-check-circle"></i>
                                <span>Licensed & Certified Professionals</span>
                            </div>
                            <div class="feature-item">
                                <i class="fa fa-check-circle"></i>
                                <span>State-of-the-Art Facilities</span>
                            </div>
                            <div class="feature-item">
                                <i class="fa fa-check-circle"></i>
                                <span>Emergency Care Available</span>
                            </div>
                            <div class="feature-item">
                                <i class="fa fa-check-circle"></i>
                                <span>Personalized Treatment Plans</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="story-accordion">
                        <div class="accordion" id="aboutAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                        <i class="fa fa-globe me-2"></i>
                                        Social Responsibility
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#aboutAccordion">
                                    <div class="accordion-body">
                                        We actively participate in animal rescue programs and community outreach initiatives. Our team volunteers at local shelters and provides free care for rescued animals in need.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                        <i class="fa fa-bullseye me-2"></i>
                                        Mission Statement
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#aboutAccordion">
                                    <div class="accordion-body">
                                        To provide compassionate, professional pet care services that enhance the bond between pets and their families while promoting the health and happiness of all animals in our community.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                        <i class="fa fa-plus-circle me-2"></i>
                                        Value Added Services
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#aboutAccordion">
                                    <div class="accordion-body">
                                        Beyond basic care, we offer grooming, training, nutrition counseling, and behavioral therapy. Our comprehensive approach ensures your pet's complete well-being and happiness.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="about-team">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title">Meet Our Expert Team</h2>
                    <p class="section-subtitle">Dedicated professionals committed to your pet's health and happiness</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="team-card">
                        <div class="team-image">
                            <img src="../wp-content/uploads/2017/04/team1.jpg" alt="Dr. Sarah Johnson" class="img-fluid">
                            <div class="team-overlay">
                                <div class="social-links">
                                    <a href="#" class="social-link"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="social-link"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="social-link"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-info">
                            <h5 class="team-name">Dr. Sarah Johnson</h5>
                            <p class="team-role">Chief Veterinarian</p>
                            <p class="team-description">15+ years of experience in veterinary medicine with specialization in small animal care.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="team-card">
                        <div class="team-image">
                            <img src="../wp-content/uploads/2017/04/team2.jpg" alt="Mike Wilson" class="img-fluid">
                            <div class="team-overlay">
                                <div class="social-links">
                                    <a href="#" class="social-link"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="social-link"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="social-link"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-info">
                            <h5 class="team-name">Mike Wilson</h5>
                            <p class="team-role">Pet Care Specialist</p>
                            <p class="team-description">Certified animal behaviorist with expertise in training and pet psychology.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="team-card">
                        <div class="team-image">
                            <img src="../wp-content/uploads/2017/04/team3.jpg" alt="Emma Davis" class="img-fluid">
                            <div class="team-overlay">
                                <div class="social-links">
                                    <a href="#" class="social-link"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="social-link"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="social-link"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-info">
                            <h5 class="team-name">Emma Davis</h5>
                            <p class="team-role">Grooming Specialist</p>
                            <p class="team-description">Professional groomer with certification in breed-specific styling and spa treatments.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<style>
/* About Page Styles */
.about-hero {
    padding: 60px 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    border-radius: 20px;
    margin-bottom: 80px;
}

.about-title {
    font-size: 3rem;
    font-weight: 700;
    color: #333;
    margin-bottom: 20px;
    line-height: 1.2;
}

.text-primary {
    color: #4a90a4 !important;
}

.about-subtitle {
    font-size: 1.2rem;
    color: #666;
    line-height: 1.6;
    margin-bottom: 40px;
}

.about-stats {
    display: flex;
    gap: 30px;
    flex-wrap: wrap;
}

.stat-item {
    text-align: center;
}

.stat-number {
    display: block;
    font-size: 2.5rem;
    font-weight: 700;
    color: #f19f1f;
    line-height: 1;
}

.stat-label {
    display: block;
    font-size: 0.9rem;
    color: #666;
    text-transform: uppercase;
    font-weight: 600;
    margin-top: 5px;
}

.about-hero-image {
    position: relative;
}

.about-hero-image img {
    border-radius: 15px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}

.image-overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.play-button {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #ff6b35 0%, #f19f1f 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.5rem;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 10px 30px rgba(255, 107, 53, 0.4);
}

.play-button:hover {
    transform: scale(1.1);
    box-shadow: 0 15px 40px rgba(255, 107, 53, 0.6);
}

/* Services Section */
.about-services {
    padding: 80px 0;
    background: white;
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

.service-card {
    background: white;
    padding: 40px 30px;
    border-radius: 15px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    height: 100%;
}

.service-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 50px rgba(0,0,0,0.15);
}

.service-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #ff6b35 0%, #f19f1f 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 25px;
    color: white;
    font-size: 1.8rem;
}

.service-title {
    font-size: 1.3rem;
    font-weight: 600;
    color: #333;
    margin-bottom: 15px;
}

.service-description {
    color: #666;
    line-height: 1.6;
    font-size: 0.95rem;
}

/* Story Section */
.about-story {
    padding: 80px 0;
    background: #f8f9fa;
}

.story-title {
    font-size: 2.2rem;
    font-weight: 700;
    color: #333;
    margin-bottom: 25px;
}

.story-text {
    font-size: 1.1rem;
    color: #666;
    line-height: 1.7;
    margin-bottom: 20px;
}

.story-features {
    margin-top: 30px;
}

.feature-item {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
    font-size: 1rem;
    color: #333;
}

.feature-item i {
    color: #4a90a4;
    margin-right: 15px;
    font-size: 1.2rem;
}

/* Accordion Styles */
.story-accordion {
    padding-left: 30px;
}

.accordion-item {
    border: none;
    margin-bottom: 15px;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.accordion-button {
    background: white;
    border: none;
    padding: 20px 25px;
    font-weight: 600;
    color: #333;
    font-size: 1rem;
}

.accordion-button:not(.collapsed) {
    background: linear-gradient(135deg, #ff6b35 0%, #f19f1f 100%);
    color: white;
    box-shadow: none;
}

.accordion-button:focus {
    box-shadow: none;
    border: none;
}

.accordion-body {
    padding: 20px 25px;
    color: #666;
    line-height: 1.6;
    background: white;
}

/* Team Section */
.about-team {
    padding: 80px 0;
    background: white;
}

.team-card {
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.team-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 50px rgba(0,0,0,0.15);
}

.team-image {
    position: relative;
    overflow: hidden;
    height: 280px;
}

.team-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.team-card:hover .team-image img {
    transform: scale(1.1);
}

.team-overlay {
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

.team-card:hover .team-overlay {
    opacity: 1;
}

.social-links {
    display: flex;
    gap: 15px;
}

.social-link {
    width: 45px;
    height: 45px;
    background: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #f19f1f;
    text-decoration: none;
    transition: all 0.3s ease;
    transform: translateY(20px);
}

.team-card:hover .social-link {
    transform: translateY(0);
}

.social-link:hover {
    background: #333;
    color: white;
}

.team-info {
    padding: 25px;
    text-align: center;
}

.team-name {
    font-size: 1.3rem;
    font-weight: 600;
    color: #333;
    margin-bottom: 5px;
}

.team-role {
    color: #f19f1f;
    font-weight: 600;
    text-transform: uppercase;
    font-size: 0.9rem;
    margin-bottom: 15px;
}

.team-description {
    color: #666;
    line-height: 1.5;
    font-size: 0.95rem;
}

/* Responsive Design */
@media (max-width: 768px) {
    .about-title {
        font-size: 2.2rem;
    }
    
    .about-stats {
        justify-content: center;
        gap: 20px;
    }
    
    .section-title {
        font-size: 2rem;
    }
    
    .story-accordion {
        padding-left: 0;
        margin-top: 40px;
    }
    
    .about-hero,
    .about-services,
    .about-story,
    .about-team {
        padding: 40px 0;
    }
}

@media (max-width: 576px) {
    .about-title {
        font-size: 1.8rem;
    }
    
    .stat-number {
        font-size: 2rem;
    }
    
    .service-card {
        padding: 30px 20px;
    }
    
    .service-icon {
        width: 60px;
        height: 60px;
        font-size: 1.5rem;
    }
}
</style>
@endsection
