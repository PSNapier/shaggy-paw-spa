@props(['title', 'description', 'price', 'icon'])

<div class="bg-white rounded-2xl p-8 h-full border-2 border-white flex flex-col">
    <div class="text-center flex-1">
        <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
            {!! $icon !!}
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-4">{{ $title }}</h3>
        <p class="text-gray-600">{{ $description }}</p>
    </div>
    <div class="text-center mt-6">
        <p class="text-2xl font-bold text-purple-700">{{ $price }}</p>
    </div>
</div>
