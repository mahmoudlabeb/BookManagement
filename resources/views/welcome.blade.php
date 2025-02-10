@extends('layouts.master')

@section('title', 'Welcome')

@section('content')
<div class="welcome-container">
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content text-center">
                <h1 class="hero-title display-3 fw-bold mb-4">Welcome to the Book Management System</h1>
                <p class="hero-subtitle mb-5 lead">Your ultimate solution for managing books, authors, and pricing, all in one place.</p>
                <div class="hero-buttons">
                    <a href="{{ route('books.create') }}" class="btn btn-gradient btn-lg me-3">Add New Book</a>
                    <a href="{{ route('books.index') }}" class="btn btn-outline-light btn-lg">Browse Books</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features py-5">
        <div class="container">
            <h2 class="section-title text-center mb-5">Why Choose Us?</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-box p-4 text-center shadow-lg rounded">
                        <i class="fas fa-book fa-3x text-gradient mb-4"></i>
                        <h4 class="fw-bold mb-3">Organized Catalog</h4>
                        <p class="text-muted">A streamlined catalog for easy access to your book collection, organized for your convenience.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box p-4 text-center shadow-lg rounded">
                        <i class="fas fa-user fa-3x text-gradient mb-4"></i>
                        <h4 class="fw-bold mb-3">Author Management</h4>
                        <p class="text-muted">Effortlessly track authors and link them to their respective works for an organized approach.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box p-4 text-center shadow-lg rounded">
                        <i class="fas fa-dollar-sign fa-3x text-gradient mb-4"></i>
                        <h4 class="fw-bold mb-3">Price Management</h4>
                        <p class="text-muted">Keep your prices up to date and manage them with ease, ensuring a consistent catalog.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials bg-light py-5">
        <div class="container">
            <h2 class="section-title text-center mb-5">What Our Users Say</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial-box p-4 text-center bg-white shadow-xl rounded">
                        <p class="testimonial-text fst-italic mb-4">"Managing our library has never been easier. This system is intuitive and a pleasure to use."</p>
                        <p class="testimonial-author fw-bold text-gradient">- Sarah L., Librarian</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-box p-4 text-center bg-white shadow-xl rounded">
                        <p class="testimonial-text fst-italic mb-4">"A must-have tool for any bookstore owner. Simple, efficient, and effective."</p>
                        <p class="testimonial-author fw-bold text-gradient">- John M., Bookstore Owner</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-box p-4 text-center bg-white shadow-xl rounded">
                        <p class="testimonial-text fst-italic mb-4">"The user-friendly interface makes it easy to manage my classroom's library. Highly recommended!"</p>
                        <p class="testimonial-author fw-bold text-gradient">- Emily W., Teacher</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call-to-Action Section -->
    <section class="cta text-center py-5">
        <div class="container">
            <h2 class="cta-title display-4 fw-bold mb-4">Get Started with the Book Management System</h2>
            <p class="cta-subtitle lead mb-5">Take control of your library or bookstore today with our intuitive and powerful management system.</p>
            <a href="{{ route('books.create') }}" class="btn btn-gradient btn-lg">Start Now</a>
        </div>
    </section>
</div>
@endsection
