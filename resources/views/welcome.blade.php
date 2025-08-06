<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shaggy Paw Spa - Professional Pet Grooming</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ovo:wght@400&display=swap" rel="stylesheet">

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        .font-ovo {
            font-family: 'Ovo', serif;
        }
    </style>
</head>

<body class="bg-white">
    <!-- Navigation Bar -->
    <nav class="absolute top-0 left-0 right-0 z-50 bg-transparent">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-12">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <h1 class="text-2xl font-bold text-black font-ovo">Shaggy Paw Spa</h1>
                </div>
                
                <!-- Navigation Links -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="#home"
                            class="text-black hover:text-purple-700 px-3 py-2 rounded-md text-sm font-medium transition-colors">Home</a>
                        <a href="#services"
                            class="text-black hover:text-purple-700 px-3 py-2 rounded-md text-sm font-medium transition-colors">Services</a>
                        <a href="#about"
                            class="text-black hover:text-purple-700 px-3 py-2 rounded-md text-sm font-medium transition-colors">About</a>
                        <a href="#contact"
                            class="text-black hover:text-purple-700 px-3 py-2 rounded-md text-sm font-medium transition-colors">Contact</a>
                    </div>
                </div>
                
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button type="button"
                        class="text-black hover:text-purple-700 focus:outline-none focus:text-purple-700">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

        <!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex overflow-hidden">
        <!-- Left side with image (1/2) -->
        <div class="relative w-2/3 z-0">
            <img src="/imgs/hero.jpg" alt="Dog in bathtub" class="w-full h-full object-cover ">
            <!-- Gradient overlay to fade to white -->
            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-transparent to-white"></div>
        </div>
        
        <!-- Right side with white background (1/2) -->
        <div class="w-1/3 bg-white"></div>
        
        <!-- Hero Content -->
        <div class="absolute inset-0 z-10 flex items-center justify-end">
            <div class="w-3/5 px-8 lg:px-16">
                <div class="max-w-2xl">
                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-black mb-6 leading-tight text-center font-ovo">
                        Professional Pet Grooming
                        <span class="text-purple-700 block">That Your Pets Deserve</span>
                    </h1>

                    <p class="text-base sm:text-lg text-gray-700 mb-8 leading-relaxed text-center">
                        Give your furry friends the pampering they deserve with our professional grooming services.
                        From baths to haircuts, we treat every pet like family.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="#contact"
                            class="inline-flex items-center px-6 py-3 bg-purple-600 text-white font-semibold rounded-lg text-base transition-all duration-300 transform hover:scale-105">
                            Book Appointment
                            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>

                        <a href="#services"
                            class="inline-flex items-center px-6 py-3 bg-transparent border-2 border-purple-600 text-purple-700 font-semibold rounded-lg text-base transition-all duration-300 transform hover:scale-105">
                            View Services
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Scroll indicator -->
        <div class="absolute bottom-3 left-1/2 transform -translate-x-1/2 z-10">
            <a href="#services" class="block transition-transform duration-300 hover:scale-105 active:scale-105">
                <div class="animate-bounce">
                    <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </div>
            </a>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="bg-purple-700 py-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl sm:text-5xl font-bold text-white mb-6 font-ovo">Our Services</h2>
                <p class="text-xl text-purple-100 max-w-3xl mx-auto">
                    Professional grooming services tailored to your pet's needs. From basic baths to full grooming packages.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <x-service-card 
                    title="Basic Bath"
                    description="Complete bath with premium shampoo, conditioner, and blow dry."
                    price="$35"
                    icon="<svg class='w-8 h-8 text-purple-700' fill='none' stroke='currentColor' viewBox='0 0 24 24'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z'></path></svg>"
                />
                
                <x-service-card 
                    title="Full Grooming"
                    description="Bath, haircut, nail trim, ear cleaning, and styling."
                    price="$65"
                    icon="<svg class='w-8 h-8 text-purple-700' fill='none' stroke='currentColor' viewBox='0 0 24 24'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z'></path><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M9 7h6m-6 4h6m-6 4h6'></path></svg>"
                />
                
                <x-service-card 
                    title="Premium Package"
                    description="Full grooming plus teeth brushing and flea treatment."
                    price="$85"
                    icon="<svg class='w-8 h-8 text-purple-700' fill='none' stroke='currentColor' viewBox='0 0 24 24'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z'></path></svg>"
                />
            </div>

            <!-- CTA Button -->
            <div class="text-center mt-16">
                <a href="#contact" class="inline-flex items-center px-8 py-4 bg-white text-purple-700 font-bold rounded-lg text-lg transition-all duration-300 transform hover:scale-105">
                    Book Your Appointment
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl sm:text-5xl font-bold text-gray-900 mb-6 font-ovo">About Us</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Meet the passionate team behind Shaggy Paw Spa
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-5 gap-12 items-center">
                <!-- Owner Image (2/5) -->
                <div class="lg:col-span-2">
                    <div class="bg-gray-200 rounded-2xl overflow-hidden aspect-square">
                        <!-- Placeholder for owner image -->
                        <div class="w-full h-full flex items-center justify-center text-gray-500">
                            <div class="text-center">
                                <svg class="w-16 h-16 mx-auto mb-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                <p class="text-sm">Owner Photo</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- About Text (3/5) -->
                <div class="lg:col-span-3 space-y-6">
                    <h3 class="text-3xl font-bold text-gray-900 font-ovo">Meet Stacie McDonald</h3>
                    
                    <div class="prose prose-lg text-gray-600 space-y-4">
                        <p>
                            With over 10 years of experience in professional pet grooming, Stacie brings passion and expertise to every appointment at Shaggy Paw Spa. Her love for animals and attention to detail ensures that every pet receives the care and attention they deserve.
                        </p>
                        
                        <p>
                            Located in the heart of Downtown Liberty Hill, Shaggy Paw Spa provides a welcoming environment where pets feel comfortable and owners can trust their furry family members are in good hands. We use only premium products and gentle techniques to ensure a stress-free grooming experience.
                        </p>
                        
                        <p>
                            Whether it's a simple bath or a full grooming package, we treat every pet like family. Our commitment to quality service and customer satisfaction has made us a trusted name in Liberty Hill's pet care community.
                        </p>
                    </div>

                    <!-- Key Features -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-8">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-purple-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">10+ Years Experience</span>
                        </div>
                        
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-purple-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Premium Products</span>
                        </div>
                        
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-purple-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Downtown Location</span>
                        </div>
                        
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-purple-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Family Owned</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="bg-white py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl sm:text-5xl font-bold text-gray-900 mb-6 font-ovo">Contact Us</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Visit us in beautiful Downtown Liberty Hill for professional pet grooming services.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-stretch">
                <!-- Contact Information -->
                <div class="flex">
                    <div class="bg-purple-50 rounded-2xl p-8 w-full">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Shaggy Paw Spa</h3>
                        
                        <div class="space-y-4">
                            <div class="flex items-start space-x-4">
                                <div class="w-6 h-6 bg-purple-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                    <svg class="w-4 h-4 text-purple-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-900">Stacie McDonald</p>
                                    <p class="text-gray-600">Owner & Professional Groomer</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div class="w-6 h-6 bg-purple-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                    <svg class="w-4 h-4 text-purple-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-900">Downtown Liberty Hill</p>
                                    <p class="text-gray-600">204 Church Street</p>
                                    <p class="text-gray-600">Liberty Hill, TX</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div class="w-6 h-6 bg-purple-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                    <svg class="w-4 h-4 text-purple-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-900">Phone</p>
                                    <a href="tel:+15126902084" class="text-purple-700 hover:text-purple-800 transition-colors">(512) 690-2084</a>
                                </div>
                            </div>
                        </div>

                        <!-- CTA Button -->
                        <div class="mt-8">
                            <a href="tel:+15126902084" class="inline-flex items-center px-6 py-3 bg-purple-600 hover:bg-purple-700 text-white font-semibold rounded-lg text-base transition-all duration-300 transform hover:scale-105">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                Call Now
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Map Image -->
                <div class="relative flex">
                    <div class="bg-gray-100 rounded-2xl overflow-hidden shadow-sm w-full">
                        <img src="/imgs/map.png" alt="Map location of Shaggy Paw Spa in Downtown Liberty Hill" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute top-4 right-4 bg-white rounded-lg px-3 py-2 shadow-sm">
                        <p class="text-sm font-medium text-gray-900">Downtown Liberty Hill</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto text-center">
            <p class="text-gray-600 mb-2">
                © {{ date('Y') }} Shaggy Paw Spa. All rights reserved.
            </p>
            <p class="text-gray-500 text-sm">
                Website by 
                <a href="mailto:abaturestudio@gmail.com?subject=Website Services" class="text-purple-600 hover:text-purple-700 transition-colors">
                    Abature Studio
                </a>
            </p>
        </div>
    </footer>


</body>

</html>
