@extends('app')

@section('content')
    <!-- Header -->
    <section class="pt-32 pb-12 bg-emerald-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-center">
                <div class="lg:col-span-2" data-aos="fade-right">
                    <h1 class="text-4xl md:text-5xl font-serif font-bold text-gray-900 mb-4">Meet Our Founder</h1>
                    <p class="text-emerald-700 font-semibold">Ajoke Muhammed</p>
                </div>
                <div class="lg:col-span-1" data-aos="fade-left">
                    <div class="rounded-3xl overflow-hidden shadow-xl ring-1 ring-emerald-100 bg-white">
                        <img src="{{ asset('images/ajoke-muhammed.png') }}" alt="Ajoke Muhammed" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content -->
    <section class="py-12">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="prose prose-lg max-w-none">
                <p class="mb-6">Ajoke Muhammed, one of Nigeria's previous first ladies, is now dedicated to protecting indigenous flora, notably the West African country's numerous palm tree varieties. She began her career as a dental therapist. Her spouse raised fish, aquatic snakes, and birds, but she developed her own passion for nature after he died, when she moved into a new house with a garden.</p>

                <p class="mb-6">She boasts the biggest private plant collection in Nigeria, with over 2,000 trees and bushes and 400 different varieties of palms flourishing in her garden in Abuja, which she has built up over the course of eight years. She imports seeds from many of Nigeria's endangered species in order to save, propagate, and promote forgotten indigenous flora.</p>

                <p class="mb-6">She also feels that plants may be found everywhere, but palms have a unique aura and the potential to influence an atmosphere in ways that no other plant can.</p>

                <p class="mb-6">Mrs Muhammed's fight to save Nigeria's plants was highlighted during a trip to a village in Cross River state several years ago. She was taken aback when she discovered several davidia involucrate plants, which grow into what is generally known as the handkerchief tree due to its lovely white blossoms. Despite the fact that the plant is not native to Nigeria, it was growing wild along the river.</p>

                <p class="mb-6">Excited by this discovery, Mrs Muhammed and her team, which included workers from many Nigerian agriculture organizations, decided to use an air layering plant propagation technique, which stimulates a stem on the parent plant to establish its own roots, allowing it to be plucked and planted within a few weeks.</p>

                <p class="mb-6">Some expedition members had brought personal items in black polythene bags, which they tore apart to use as moisture barriers on the targeted stem. The group had also taken a photographer with them, who documented the entire event on film. Mrs Muhammed sent the photographer back six weeks later to document the progress of the newly rooted plants, but he discovered that they had all been felled by villagers. They had summoned a conference with their village leader in horror after seeing fresh plants roots on the stems beside the spots of black plastic, and it was deemed that the plants were cursed.</p>

                <p class="mb-6">Mrs Muhammed believes that many plants native to other parts of the world can be found thriving in remote Nigerian forests where no foreigner could ever have planted them. She laments the typical lack of interest in such topics among Africans, which leads to other areas claiming native species. The flora and animals may be seen in the Murtala Muhammed Memorial Botanical Garden, which Mrs Muhammed established in the 1990s close outside Lagos. It was named after her late husband, a prominent former military head of state slain in 1976; she also maintains a one-hectare garden in Lagos's Lekki neighborhood. Neither of these gardens, however, is as well-stocked or as meticulously maintained as her Abuja garden, which includes a botanical and palm collection known as a Palmetum.</p>

                <p class="mb-6">She has visited Hawaii and Tahiti on a regular basis over the last five years to study how these lovely islands have managed to retain their particular flora and wildlife. She also participates in international botanical conferences and volunteers at the Fairchild Tropical Botanical Garden in Florida. She is often the only black African in attendance at several of these conferences, and she has been attempting to create the Palm Society of Nigeria, but no one is interested. The Sarius Palmetum also has an art gallery, a plant nursery, and six garden shops in addition to its extensive plant collection.</p>

                <p class="mb-6">Finding excellent hands has been one of the most difficult obstacles for Mrs Muhammed's endeavor. Most of her botany degree holders arrived with a plethora of theory but absolutely little practical understanding, so she had to educate everyone from beginning. However, she has defied those who believe she would be better off employing expatriates, as many other agricultural organizations in Nigeria do, because she prefers to work with Nigerians. "We will benefit in the long run," she argues.</p>

                <p class="mb-6">Her future ideas include a part for the sight handicapped dubbed the garden of the senses, which would have plants with unique textures and powerful aromas. She is also working on a picture book on Nigerian flora in the hopes that it would inspire a new generation to continue her efforts.</p>
            </div>
        </div>
    </section>
@endsection


