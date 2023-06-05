<?php
/** @var \Illuminate\Database\Eloquent\Collection $products */
?>

<x-app-layout>
    @include('components.hero') 

    <?php if ($products->count() === 0): ?>
    <div class="text-center text-gray-600 py-16 text-xl">
        No products available
    </div>
    <?php else: ?>
    <h2 class="text-2xl font-bold mb-4">Purses</h2>
    <div class="grid gap-8 grig-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        @foreach ($products as $product)
            <div x-data="productItem({{ json_encode([
                'id' => $product->id,
                'slug' => $product->slug,
                'image' => $product->image,
                'title' => $product->title,
                'price' => $product->price,
                'addToCartUrl' => route('cart.add', $product),
            ]) }})" class="transition-colors bg-white relative">
                <a href="{{ route('product.view', $product->slug) }}"
                    class="aspect-w-3 bg-neutral-100 aspect-h-2 block overflow-hidden rounded-md">
                    <img src="{{ $product->image }}" alt=""
                        class="object-contain py-4 rounded-lg hover:scale-105 hover:rotate-1 transition-transform" />
                </a>
                <div class="py-4 text-center">
                    <h3 class="text-sm uppercase font-semibold">
                        <a href="{{ route('product.view', $product->slug) }}">
                            {{ $product->title }}
                        </a>
                    </h3>
                    <h5 class="text-sm text-gray-500 font-light">${{ $product->price }}</h5>
                </div>
                <div class="inline-flex gap-2 bg-neutral-100 rounded justify-between p-2 text-neutral-800 cursor-pointer" @click="addToCart()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>
                    <span>Add to cart</span>
                </div>
            </div>
        @endforeach
    </div>
    {{ $products->links() }}
    <?php endif; ?>
</x-app-layout>
