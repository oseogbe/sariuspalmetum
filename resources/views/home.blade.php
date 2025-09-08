@extends('app')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center pt-20 overflow-hidden scroll-mt-20">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/hero-bg.jpg') }}" alt="Palm trees" class="w-full h-full object-cover opacity-20">
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32">
            <div class="text-center" data-aos="fade-up">
                <h1 class="text-4xl md:text-7xl font-serif font-bold text-gray-900 mb-6">
                    Welcome to<br>
                    <span class="text-emerald-700">SariusPalmetum</span>
                </h1>
                <p class="text-lg sm:text-xl text-gray-600 max-w-2xl mx-auto mb-8">
                    Experience the beauty of exotic palm trees in our carefully curated botanical garden.
                    A perfect destination for nature lovers, events, relaxation, photography and memorable moments.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#book" class="btn btn-primary">Book a Visit</a>
                    <a href="#services" class="btn btn-outline">Explore Services</a>
                </div>

                <!-- Hero Collage -->
                <div class="mt-12 flex justify-center">
                    <div class="grid grid-cols-3 sm:grid-cols-6 gap-4">
                        <div class="w-24 h-24 sm:w-28 sm:h-28 rounded-xl overflow-hidden shadow-lg ring-1 ring-white/50 -rotate-3 hover:rotate-0 transition">
                            <img src="{{ asset('images/garden/1.png') }}" alt="Palm view 1" class="w-full h-full object-cover">
                        </div>
                        <div class="w-24 h-24 sm:w-28 sm:h-28 rounded-xl overflow-hidden shadow-lg ring-1 ring-white/50 rotate-2 hover:rotate-0 transition">
                            <img src="{{ asset('images/garden/5.png') }}" alt="Palm view 5" class="w-full h-full object-cover">
                        </div>
                        <div class="w-24 h-24 sm:w-28 sm:h-28 rounded-xl overflow-hidden shadow-lg ring-1 ring-white/50 -rotate-2 hover:rotate-0 transition">
                            <img src="{{ asset('images/garden/9.png') }}" alt="Palm view 9" class="w-full h-full object-cover">
                        </div>
                        <div class="w-24 h-24 sm:w-28 sm:h-28 rounded-xl overflow-hidden shadow-lg ring-1 ring-white/50 rotate-1 hover:rotate-0 transition">
                            <img src="{{ asset('images/garden/13.png') }}" alt="Palm view 13" class="w-full h-full object-cover">
                        </div>
                        <div class="w-24 h-24 sm:w-28 sm:h-28 rounded-xl overflow-hidden shadow-lg ring-1 ring-white/50 -rotate-1 hover:rotate-0 transition">
                            <img src="{{ asset('images/garden/17.png') }}" alt="Palm view 17" class="w-full h-full object-cover">
                        </div>
                        <div class="w-24 h-24 sm:w-28 sm:h-28 rounded-xl overflow-hidden shadow-lg ring-1 ring-white/50 rotate-3 hover:rotate-0 transition">
                            <img src="{{ asset('images/garden/21.png') }}" alt="Palm view 21" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-white to-transparent"></div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-gray-50 scroll-mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="section-title">Our Services</h2>
                <p class="section-subtitle">Discover the various experiences we offer at SariusPalmetum</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Palm Tree Sales -->
                <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="h-16 w-16 bg-emerald-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="h-8 w-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-serif font-bold mb-4">Palm Tree Sales</h3>
                    <p class="text-gray-600 mb-4">Wide variety of palm trees and exotic plants available for purchase, including rare and ornamental species.</p>
                    <a href="#contact" class="text-emerald-600 hover:text-emerald-700 font-medium">Learn More →</a>
                </div>

                <!-- Event Hosting -->
                <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="h-16 w-16 bg-emerald-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="h-8 w-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-serif font-bold mb-4">Event Hosting</h3>
                    <p class="text-gray-600 mb-4">Host your special occasions in our beautiful garden setting. Perfect for weddings, parties, and corporate events.</p>
                    <a href="#contact" class="text-emerald-600 hover:text-emerald-700 font-medium">Learn More →</a>
                </div>

                <!-- Photography Sessions -->
                <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="h-16 w-16 bg-emerald-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="h-8 w-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-serif font-bold mb-4">Photography Sessions</h3>
                    <p class="text-gray-600 mb-4">Capture beautiful moments in our picturesque garden. Ideal for pre-wedding shoots and family portraits.</p>
                    <a href="#contact" class="text-emerald-600 hover:text-emerald-700 font-medium">Learn More →</a>
                </div>

                <!-- Guided Tours -->
                <div class="service-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="h-16 w-16 bg-emerald-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="h-8 w-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-serif font-bold mb-4">Guided Tours</h3>
                    <p class="text-gray-600 mb-4">Educational tours showcasing our diverse collection of palms and exotic plants with expert guides.</p>
                    <a href="#contact" class="text-emerald-600 hover:text-emerald-700 font-medium">Learn More →</a>
                </div>

                <!-- Relaxation & Picnics -->
                <div class="service-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="h-16 w-16 bg-emerald-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="h-8 w-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-serif font-bold mb-4">Relaxation & Picnics</h3>
                    <p class="text-gray-600 mb-4">Enjoy peaceful moments in nature. Perfect spots for meditation, picnics, and family gatherings.</p>
                    <a href="#contact" class="text-emerald-600 hover:text-emerald-700 font-medium">Learn More →</a>
                </div>

                <!-- Dining Services -->
                <div class="service-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="h-16 w-16 bg-emerald-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="h-8 w-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-serif font-bold mb-4">Dining Services</h3>
                    <p class="text-gray-600 mb-4">Enjoy delicious meals and refreshments in our garden restaurant with a serene atmosphere.</p>
                    <a href="#contact" class="text-emerald-600 hover:text-emerald-700 font-medium">Learn More →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="py-20 scroll-mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="section-title">Our Gallery</h2>
                <p class="section-subtitle">Take a visual tour through our beautiful botanical garden</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                @for ($i = 1; $i <= 9; $i++)
                    <div class="gallery-item group" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                        <img src="{{ asset("images/garden/$i.png") }}" alt="Garden view {{ $i }}" class="w-full h-80 object-cover rounded-2xl">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-end justify-center pb-6">
                            <button class="text-white text-lg font-medium view-image cursor-pointer" data-image="{{ asset("images/garden/$i.png") }}">
                                View Larger
                            </button>
                        </div>
                    </div>
                @endfor
            </div>

            <div class="text-center" data-aos="fade-up">
                <a href="{{ route('gallery') }}" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium text-emerald-600 hover:text-emerald-700 transition-colors duration-200">
                    View Full Gallery
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Image Modal -->
        <div id="imageModal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-90 flex items-center justify-center">
            <button class="absolute top-4 right-4 text-white hover:text-gray-300" onclick="closeModal()">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            <img id="modalImage" src="" alt="Large view" class="max-w-[90%] max-h-[90vh] object-contain">
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const modal = document.getElementById('imageModal');
                const modalImg = document.getElementById('modalImage');
                const viewButtons = document.querySelectorAll('.view-image');

                viewButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        const imgSrc = this.getAttribute('data-image');
                        modalImg.src = imgSrc;
                        modal.classList.remove('hidden');
                        document.body.style.overflow = 'hidden';
                    });
                });

                window.closeModal = function() {
                    modal.classList.add('hidden');
                    document.body.style.overflow = '';
                };

                modal.addEventListener('click', function(e) {
                    if (e.target === modal) {
                        closeModal();
                    }
                });
            });
        </script>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50 scroll-mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="section-title">Contact Us</h2>
                <p class="section-subtitle">Get in touch with us for inquiries or to schedule a visit</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div class="bg-white rounded-2xl p-8 shadow-lg" data-aos="fade-right">
                    <form action="#" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
                            <input type="text" id="name" name="name" class="contact-input" required>
                        </div>
                        <div>
                            <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                            <input type="email" id="email" name="email" class="contact-input" required>
                        </div>
                        <div>
                            <label for="subject" class="block text-gray-700 font-medium mb-2">Subject</label>
                            <select id="subject" name="subject" class="contact-input" required>
                                <option value="">Select a subject</option>
                                <option value="palm-sales">Palm Tree Sales</option>
                                <option value="event-booking">Event Booking</option>
                                <option value="photography">Photography Session</option>
                                <option value="tour">Guided Tour</option>
                                <option value="general">General Inquiry</option>
                            </select>
                        </div>
                        <div>
                            <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
                            <textarea id="message" name="message" rows="4" class="contact-input" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-full">Send Message</button>
                    </form>
                </div>

                <div class="lg:pl-12" data-aos="fade-left">
                    <div class="bg-white rounded-2xl p-8 shadow-lg mb-8">
                        <h3 class="text-2xl font-serif font-bold mb-6">Visit Us</h3>
                        <div class="space-y-4 text-gray-600">
                            <p class="flex items-center">
                                <svg class="h-6 w-6 text-emerald-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                Plot 3703-3704 Babangida Boulevard, Maitama Abuja, Nigeria
                            </p>
                            <p class="flex items-center">
                                <svg class="h-6 w-6 text-emerald-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                +234 (913) 714-2755
                            </p>
                            <p class="flex items-center">
                                <svg class="h-6 w-6 text-emerald-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                info@sariuspalmetum.com
                            </p>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-8 shadow-lg">
                        <h3 class="text-2xl font-serif font-bold mb-6">Opening Hours</h3>
                        <div class="space-y-4 text-gray-600">
                            <p class="flex justify-between">
                                <span>Monday - Friday</span>
                                <span>9:00 AM - 6:00 PM</span>
                            </p>
                            <p class="flex justify-between">
                                <span>Saturday</span>
                                <span>10:00 AM - 5:00 PM</span>
                            </p>
                            <p class="flex justify-between">
                                <span>Sunday</span>
                                <span>10:00 AM - 4:00 PM</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Section -->
    <section id="book" class="py-20 bg-emerald-900 text-white scroll-mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl md:text-5xl font-serif font-bold mb-4">Book Your Visit</h2>
                <p class="text-lg text-emerald-100 max-w-2xl mx-auto">
                    Ready to experience the beauty of SariusPalmetum? Book your visit now and immerse yourself in nature's finest.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 text-center">
                <div class="p-8 rounded-2xl bg-emerald-800" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-2xl font-serif font-bold mb-4">Regular Visit</h3>
                    <p class="text-emerald-100 mb-6">Perfect for individuals and small groups wanting to explore the garden</p>
                    <p class="text-3xl font-bold mb-6">₦2,000<span class="text-lg">/person</span></p>
                    <a href="#contact" class="btn btn-outline border-white text-white hover:bg-white hover:text-emerald-800">Book Now</a>
                </div>

                <div class="p-8 rounded-2xl bg-emerald-800" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-2xl font-serif font-bold mb-4">Guided Tour</h3>
                    <p class="text-emerald-100 mb-6">Educational tour with our expert guides (min. 5 persons)</p>
                    <p class="text-3xl font-bold mb-6">₦5,000<span class="text-lg">/person</span></p>
                    <a href="#contact" class="btn btn-outline border-white text-white hover:bg-white hover:text-emerald-800">Book Now</a>
                </div>

                <div class="p-8 rounded-2xl bg-emerald-800" data-aos="fade-up" data-aos-delay="300">
                    <h3 class="text-2xl font-serif font-bold mb-4">Photography</h3>
                    <p class="text-emerald-100 mb-6">2-hour session in our beautiful garden setting</p>
                    <p class="text-3xl font-bold mb-6">₦25,000<span class="text-lg">/session</span></p>
                    <a href="#contact" class="btn btn-outline border-white text-white hover:bg-white hover:text-emerald-800">Book Now</a>
                </div>
            </div>
        </div>
    </section>
@endsection
