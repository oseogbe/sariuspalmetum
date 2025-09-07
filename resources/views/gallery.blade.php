@extends('app')

@section('content')
    <!-- Gallery Header -->
    <section class="pt-32 pb-12 bg-emerald-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center" data-aos="fade-up">
                <h1 class="text-4xl md:text-5xl font-serif font-bold text-gray-900 mb-4">
                    Our Gallery
                </h1>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Explore the beauty and serenity of SariusPalmetum through our collection of stunning photographs
                </p>
            </div>
        </div>
    </section>

    <!-- Gallery Grid -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                @for ($i = 1; $i <= 39; $i++)
                    <div class="gallery-item group" data-aos="fade-up" data-aos-delay="{{ ($i % 8) * 100 }}">
                        <img 
                            src="{{ asset("images/garden/$i.png") }}" 
                            alt="Garden view {{ $i }}" 
                            class="w-full aspect-[4/5] object-cover rounded-2xl"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-end justify-center pb-6">
                            <button class="text-white text-lg font-medium view-image cursor-pointer" data-image="{{ asset("images/garden/$i.png") }}">
                                View Larger
                            </button>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

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
@endsection
