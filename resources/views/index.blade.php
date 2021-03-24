<x-layout>
    <x-slot name="head">
        <x-social-media-meta-tags
            title="Blade Component Examples"
            description="Learn about all sorts of Blade component tips and tricks."
            image="https://farm6.staticflickr.com/5510/14338202952_93595258ff_z.jpg"
            card="summary"
        />
    </x-slot>

    <div id="products" class="flex flex-wrap">
        @foreach ($products as $product)
            <x-product-tile :product="$product" />
        @endforeach
    </div>
</x-layout>
