@extends('app')

@section('content')
    <section class="relative min-h-[50vh] flex items-center justify-center text-center pt-20 overflow-hidden">
        <div class="absolute inset-0 -z-10">
            <img src="{{ asset('images/hero-bg.jpg') }}" alt="Palms background" class="w-full h-full object-cover opacity-30">
        </div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8" data-aos="fade-up">
            <h1 class="text-4xl md:text-6xl font-serif font-bold text-gray-900 mb-4">Our Palm Collection</h1>
            <p class="text-lg text-gray-700">Discover Africa's most extensive living collection of palms — search and explore.</p>
            <div class="mt-8 max-w-2xl mx-auto">
                <form action="{{ route('palms.index') }}" method="GET" class="relative">
                    <input id="palmSearch" name="q" value="{{ $q ?? '' }}" type="text" placeholder="Search by common or scientific name..." class="w-full px-5 py-4 rounded-full border border-gray-300 focus:ring-2 focus:ring-emerald-600 focus:border-transparent focus-visible:outline-0 shadow-sm pr-12">
                    <button type="submit" class="absolute right-2 top-1/2 -translate-y-1/2 btn btn-primary px-4 py-2">Search</button>
                </form>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 right-0 h-24 bg-gradient-to-t from-white to-transparent"></div>
    </section>

    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8" id="palmGrid">
                @forelse($palms as $palm)
                    <div class="palm-card group" data-aos="fade-up">
                        <div class="relative rounded-3xl bg-white p-6 md:p-8 shadow-xl ring-1 ring-emerald-100">
                            <div class="w-44 h-44 md:w-56 md:h-56 mx-auto rounded-full overflow-hidden ring-4 ring-emerald-200">
                                <img src="{{ asset($palm['image']) }}" alt="{{ $palm['common_name'] }}" class="w-full h-full object-cover">
                            </div>

                            <div class="mt-6 border-t border-emerald-200 pt-6 text-center">
                                <h3 class="text-2xl font-serif font-extrabold tracking-wide text-emerald-800 uppercase palm-common">{{ $palm['common_name'] }}</h3>
                                @php $sci = trim((string)($palm['scientific_name'] ?? '')); @endphp
                                @if($sci !== '')
                                    <p class="mt-2 text-sm text-emerald-700 italic underline underline-offset-4 palm-scientific">{{ $sci }}</p>
                                @else
                                    <p class="mt-2 text-sm text-emerald-700 italic palm-scientific"></p>
                                @endif
                            </div>

                            <div class="pointer-events-none absolute -z-10 inset-0 rounded-3xl"></div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center text-gray-600" data-aos="fade-up">
                        No palms found.
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const input = document.getElementById('palmSearch');
            const cards = Array.from(document.querySelectorAll('#palmGrid .palm-card'));

            function normalize(text) {
                return (text || '').toLowerCase();
            }

            function filter() {
                const q = normalize(input.value);
                cards.forEach(card => {
                    const common = normalize(card.querySelector('.palm-common')?.textContent);
                    const scientific = normalize(card.querySelector('.palm-scientific')?.textContent);
                    const match = common.includes(q) || scientific.includes(q);
                    card.style.display = match ? '' : 'none';
                });
            }

            input.addEventListener('input', filter);
        });
    </script>
@endsection


