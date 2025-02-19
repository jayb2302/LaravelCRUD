@extends('products.layout')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-slate-100 shadow-md rounded-lg ">
   <div class="flex py-4 justify-between">
        <div class="">
            <h2 class="text-2xl font-semibold text-gray-700"> Product List</h2>
        </div>
        <div class="">
            <a href="{{ route('products.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">
                Add New Product
            </a>
        </div>
   </div>

   @if ($message = Session::get('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4" role="alert">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table-auto w-full my-4">
        <thead>
            <tr>
                <th class="border text-left px-4 py-2">ID</th>
                <th class="border text-left px-4 py-2">Name</th>
                <th class="border text-left px-4 py-2">Detail</th>
                <th class="border text-left px-4 py-2 w-auto">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td class="border px-4 py-2">{{ $product->id }}</td>
                    <td class="border px-4 py-2">{{ $product->name }}</td>
                    <td class="border px-4 py-2">{{ $product->detail }}</td>
                    <td class="border px-4 py-2 w-auto ">
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="flex w-auto  gap-2">
                            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{ route('products.show', $product->id) }}">Show</a>
                            <a class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" href="{{ route('products.edit', $product->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $products->links() !!}

</div>

@endsection