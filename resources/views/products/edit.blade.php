@extends('products.layout')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-slate-100 shadow-md rounded-lg">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-semibold text-gray-700">Edit Product</h2>
        <a href="{{ route('products.index') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">
            Back
        </a>
    </div>

    @if ($errors->any())
        <div class="mb-4 p-4 bg-red-100 border-l-4 border-red-500 text-red-700">
            <strong>Whoops!</strong> There were some problems with your input. <br><br>
            <ul class="mt-2 list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Name:</label>
            <input type="text" name="name" value="{{ $product->name }}" class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-200 focus:outline-none" placeholder="Name">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Detail:</label>
            <textarea name="detail" class="w-full px-4 py-2 border rounded-md h-32 resize-none focus:ring focus:ring-blue-200 focus:outline-none" placeholder="Detail">{{ $product->detail }}</textarea>
        </div>

        <div class="text-center">
            <button type="submit" class="px-6 py-2 bg-green-500 text-white rounded hover:bg-green-600 transition">
                Update
            </button>
        </div>
    </form>