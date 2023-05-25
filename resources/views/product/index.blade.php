<?php
/** @var \Illuminate\Database\Eloquent\Collection $products */
?>

<x-app-layout>
    <?php if ($products->count() === 0): ?>
    <div class="text-center text-gray-600 py-16 text-xl">
        No products available
    </div>
    <?php else: ?>
    <div class="m-auto max-w-4xl mb-4">
        <h1 class="font-bold text-6xl text-center mb-4">Bead Bliss: Discover Quality at Our Online Store
        </h1>
        <p class="text-center text-neutral-600 text-md">Indulge in the Art of Beadwork and Create Breathtaking Jewelry
            Pieces
            with our Vast Collection of High-Quality Beads, Charms, Findings, and Tools. Lorem ipsum dolor sit amet,
            consectetur adipiscing elit. Praesent tortor eros, ultrices eu lacus eu, consectetur dictum ligula. Nulla
            sapien nibh, pretium eget mauris vitae, scelerisque varius nisi.</p>
    </div>
    <div class="grid gap-8 grig-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 p-5">
        @foreach ($products as $product)
            <div x-data="productItem({{ json_encode([
                'id' => $product->id,
                'slug' => $product->slug,
                'image' => $product->image,
                'title' => $product->title,
                'price' => $product->price,
                'addToCartUrl' => route('cart.add', $product),
            ]) }})" class="drop-shadow-md rounded-lg transition-colors bg-white">
                <a href="{{ route('product.view', $product->slug) }}" class="aspect-w-3 aspect-h-2 block overflow-hidden">
                    <img src="{{ $product->image }}" alt=""
                        class="object-contain rounded-lg hover:scale-105 hover:rotate-1 transition-transform" />
                </a>
                <div class="p-4">
                    <h3 class="text-lg">
                        <a href="{{ route('product.view', $product->slug) }}">
                            {{ $product->title }}
                        </a>
                    </h3>
                    <h5 class="font-bold">${{ $product->price }}</h5>
                </div>
                <div class="flex justify-between py-3 px-4">
                    <button class="btn-primary" @click="addToCart()">
                        Add to Cart
                    </button>
                </div>
            </div>
        @endforeach
    </div>
    {{ $products->links() }}
    <?php endif; ?>
</x-app-layout>
