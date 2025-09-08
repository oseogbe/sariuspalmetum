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
              <img src="{{ asset('images/spmc-logo.svg') }}" alt="SariusPalmetum" class="w-32">
            </a>
          </div>
          
          <!-- Desktop Navigation -->
          <div class="hidden md:flex md:items-center md:space-x-8">
            <a href="/#home" class="text-gray-700 hover:text-emerald-700 transition">Home</a>
            <a href="/#services" class="text-gray-700 hover:text-emerald-700 transition">Services</a>
            <a href="/#gallery" class="text-gray-700 hover:text-emerald-700 transition">Gallery</a>
            <a href="/#contact" class="text-gray-700 hover:text-emerald-700 transition">Contact</a>
            <a href="/#book" class="px-4 py-2 rounded-full bg-emerald-600 text-white hover:bg-emerald-700 transition">
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
          <a href="/#home" class="block px-3 py-2 text-gray-700 hover:text-emerald-700 transition">Home</a>
          <a href="/#services" class="block px-3 py-2 text-gray-700 hover:text-emerald-700 transition">Services</a>
          <a href="/#gallery" class="block px-3 py-2 text-gray-700 hover:text-emerald-700 transition">Gallery</a>
          <a href="/#contact" class="block px-3 py-2 text-gray-700 hover:text-emerald-700 transition">Contact</a>
          <a href="/#book" class="block px-3 py-2 text-emerald-600 hover:text-emerald-700 transition">Book a Visit</a>
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
            <!-- social media links -->
            <div class="mt-4 flex items-center space-x-4">
              <a href="#" aria-label="Facebook" target="_blank" rel="noopener" class="text-emerald-100 hover:text-white transition">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                  <path d="M22 12.06C22 6.477 17.523 2 11.94 2 6.356 2 1.88 6.477 1.88 12.06c0 5.017 3.657 9.183 8.438 9.94v-7.03H7.898v-2.91h2.42V9.845c0-2.39 1.423-3.708 3.6-3.708 1.043 0 2.135.186 2.135.186v2.35h-1.203c-1.186 0-1.555.737-1.555 1.49v1.79h2.644l-.422 2.91h-2.222V22c4.78-.757 8.437-4.923 8.437-9.94Z"/>
                </svg>
              </a>
              <a href="https://www.instagram.com/sariuspalmetumbotanicalgarden/" aria-label="Instagram" target="_blank" rel="noopener" class="text-emerald-100 hover:text-white transition">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                  <path d="M7 2h10a5 5 0 0 1 5 5v10a5 5 0 0 1-5 5H7a5 5 0 0 1-5-5V7a5 5 0 0 1 5-5Zm0 2a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3H7Zm5 3.5a5.5 5.5 0 1 1 0 11 5.5 5.5 0 0 1 0-11Zm0 2a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm5.75-.9a1.1 1.1 0 1 1 0 2.2 1.1 1.1 0 0 1 0-2.2Z"/>
                </svg>
              </a>
              <a href="#" aria-label="Twitter" target="_blank" rel="noopener" class="text-emerald-100 hover:text-white transition">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                  <path d="M22 5.924a8.2 8.2 0 0 1-2.357.646 4.115 4.115 0 0 0 1.804-2.27 8.224 8.224 0 0 1-2.607.996A4.102 4.102 0 0 0 12.1 8.1c0 .32.036.632.105.932A11.652 11.652 0 0 1 3.153 5.16a4.1 4.1 0 0 0 1.27 5.47 4.072 4.072 0 0 1-1.858-.513v.052a4.103 4.103 0 0 0 3.29 4.022 4.113 4.113 0 0 1-1.852.07 4.105 4.105 0 0 0 3.832 2.85A8.227 8.227 0 0 1 2 18.409a11.61 11.61 0 0 0 6.29 1.844c7.547 0 11.675-6.253 11.675-11.675 0-.178-.004-.355-.012-.531A8.343 8.343 0 0 0 22 5.924Z"/>
                </svg>
              </a>
              <a href="#" aria-label="LinkedIn" target="_blank" rel="noopener" class="text-emerald-100 hover:text-white transition">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                  <path d="M4.983 3.5a2.25 2.25 0 1 1 0 4.5 2.25 2.25 0 0 1 0-4.5ZM3.5 9h3v11h-3V9Zm6 0h2.879v1.5h.041c.4-.76 1.378-1.559 2.838-1.559 3.036 0 3.602 2.002 3.602 4.605V20H16.88v-5.26c0-1.254-.025-2.867-1.747-2.867-1.75 0-2.017 1.367-2.017 2.777V20H9.5V9Z"/>
                </svg>
              </a>
            </div>
          </div>
          <div>
            <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
            <ul class="space-y-2">
              <li><a href="/#services" class="text-emerald-100 hover:text-white transition">Our Services</a></li>
              <li><a href="/#gallery" class="text-emerald-100 hover:text-white transition">Gallery</a></li>
              <li><a href="/#contact" class="text-emerald-100 hover:text-white transition">Contact Us</a></li>
              <li><a href="/#book" class="text-emerald-100 hover:text-white transition">Book a Visit</a></li>
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