@extends('products.layout')

@section('content')

<div class="max-w-2xl mx-auto p-6 bg-slate-100 shadow-md rounded-lg">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-semibold text-gray-700">Product Details</h2>
        <a href="{{ route('products.index') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">
            Back
        </a>
    </div>

    <div class="mb-4">
        <p class="text-gray-700 font-medium mb-2">Name:</p>
        <p class="text-gray-700">{{ $product->name }}</p>
    </div>

    <div class="mb-4">
        <p class="text-gray-700 font-medium mb-2">Detail:</p>
        <p class="text-gray-700">{{ $product->detail }}</p>
    </div>

</div>