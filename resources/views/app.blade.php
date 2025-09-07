<!doctype html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SariusPalmetum - Botanical Garden & Event Center</title>
    <meta name="description" content="Experience the beauty of exotic palm trees and nature at SariusPalmetum Botanical Garden. Perfect for events, photography, and relaxation." />
    
    <!-- Styles -->
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
    <!-- Scripts -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  </head>
  <body x-data class="font-sans bg-white text-gray-800 antialiased">
    <!-- Navigation -->
    <nav x-data="{ isOpen: false }" class="fixed w-full bg-white/95 backdrop-blur-sm z-50 border-b border-gray-100">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
          <div class="flex items-center">
            <a href="/" class="text-2xl font-serif font-bold text-emerald-800">
              SariusPalmetum
            </a>
          </div>
          
          <!-- Desktop Navigation -->
          <div class="hidden md:flex md:items-center md:space-x-8">
            <a href="#home" class="text-gray-700 hover:text-emerald-700 transition">Home</a>
            <a href="#services" class="text-gray-700 hover:text-emerald-700 transition">Services</a>
            <a href="#gallery" class="text-gray-700 hover:text-emerald-700 transition">Gallery</a>
            <a href="#contact" class="text-gray-700 hover:text-emerald-700 transition">Contact</a>
            <a href="#book" class="px-4 py-2 rounded-full bg-emerald-600 text-white hover:bg-emerald-700 transition">
              Book a Visit
            </a>
          </div>

          <!-- Mobile Navigation Button -->
          <div class="flex items-center md:hidden">
            <button @click="isOpen = !isOpen" class="text-gray-700">
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path x-show="!isOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                <path x-show="isOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
              </svg>
            </button>
          </div>
        </div>
      </div>

      <!-- Mobile Navigation Menu -->
      <div x-show="isOpen" class="md:hidden bg-white border-t border-gray-100">
        <div class="px-2 pt-2 pb-3 space-y-1">
          <a href="#home" class="block px-3 py-2 text-gray-700 hover:text-emerald-700 transition">Home</a>
          <a href="#services" class="block px-3 py-2 text-gray-700 hover:text-emerald-700 transition">Services</a>
          <a href="#gallery" class="block px-3 py-2 text-gray-700 hover:text-emerald-700 transition">Gallery</a>
          <a href="#contact" class="block px-3 py-2 text-gray-700 hover:text-emerald-700 transition">Contact</a>
          <a href="#book" class="block px-3 py-2 text-emerald-600 hover:text-emerald-700 transition">Book a Visit</a>
        </div>
      </div>
    </nav>

    <!-- Main Content -->
    <main>
      @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-emerald-900 text-white py-12">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div>
            <h3 class="text-xl font-serif font-semibold mb-4">SariusPalmetum</h3>
            <p class="text-emerald-100">Experience the beauty of nature in our carefully curated botanical garden.</p>
          </div>
          <div>
            <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
            <ul class="space-y-2">
              <li><a href="#services" class="text-emerald-100 hover:text-white transition">Our Services</a></li>
              <li><a href="#gallery" class="text-emerald-100 hover:text-white transition">Gallery</a></li>
              <li><a href="#contact" class="text-emerald-100 hover:text-white transition">Contact Us</a></li>
              <li><a href="#book" class="text-emerald-100 hover:text-white transition">Book a Visit</a></li>
            </ul>
          </div>
          <div>
            <h4 class="text-lg font-semibold mb-4">Contact Info</h4>
            <ul class="space-y-2 text-emerald-100">
              <li>Plot 3703-3704 Babangida Boulevard, Maitama</li>
              <li>Abuja, Nigeria</li>
              <li>Phone: +234 (913) 714-2755</li>
              <li>Email: info@sariuspalmetum.com</li>
            </ul>
          </div>
        </div>
        <div class="mt-8 pt-8 border-t border-emerald-800 text-center text-emerald-100">
          <p>&copy; {{ date('Y') }} SariusPalmetum. All rights reserved.</p>
        </div>
      </div>
    </footer>

    <script>
      AOS.init({
        duration: 800,
        easing: 'ease-out',
        once: true
      });
    </script>
  </body>
</html>