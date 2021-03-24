<a href="{{ route('products.show', $product->slug) }}" class="product-tile bg-no-repeat bg-cover overflow-hidden cursor-pointer" style='background-image: url("{{ $product->img_url }}")'>
    <div class="product-tile-cover relative pt-full ">
        <div class="product-tile-price absolute top-0 left-0 text-white pt-4 px-4 text-sm">
            <span class="bg-opacity-90 bg-gray-900 rounded-full px-3 py-1">
                <span>{{ money($product->buying_price) }}</span>
                <span class="align-middle"><i class="ri-arrow-right-line"></i></span>
                <span>{{ money($product->selling_price) }}</span>
                <span> = </span>
                <span class="text-green-300">+{{ $product->margin_percentage }}%</span>
            </span>
        </div>
        <div class="product-tile-info absolute bg-opacity-50 bg-gray-900 top-3/4 left-0 right-0 text-white pt-4 px-4 h-64 transition-all ease-in-out duration-300">
            <div class="product-title">{{ $product->title }}</div>
            <div class="product-description text-gray-400">{{ $product->excerpt }}</div>
        </div>
    </div>
</a>
