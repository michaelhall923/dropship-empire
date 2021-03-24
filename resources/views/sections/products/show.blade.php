<x-layout>
    <div class="flex flex-wrap">
        <div class="w-full sm:w-1/2">
            <img class="w-full" src="{{ $product->img_url }}" alt="{{ $product->title }}">
        </div>
        <div class="w-full sm:w-1/2 py-8 px-8 text-white">
            <div class="text-xl">
                {{ $product->title }}
            </div>
            <div class="text-gray-400">
                {{ $product->description }}
            </div>
        </div>
    </div>
</x-layout>
