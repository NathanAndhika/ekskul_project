@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-4">Edit Barang</h1>

<form action="{{ route('products.update', $product->id) }}" method="POST" class="bg-white p-6 rounded shadow max-w-md">
    @csrf
    @method('PUT')

    <div class="mb-4">
        <label for="category_id" class="block text-gray-700 font-bold mb-2">Kategori</label>
        <select name="category_id" id="category_id" class="w-full border p-2 rounded @error('category_id') border-red-500 @enderror">
            <option value="">Pilih Kategori</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        @error('category_id')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="name" class="block text-gray-700 font-bold mb-2">Nama Barang</label>
        <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}"
               class="w-full border p-2 rounded @error('name') border-red-500 @enderror">
        @error('name')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="price" class="block text-gray-700 font-bold mb-2">Harga</label>
        <input type="number" name="price" id="price" value="{{ old('price', $product->price) }}"
               class="w-full border p-2 rounded @error('price') border-red-500 @enderror">
        @error('price')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="stock" class="block text-gray-700 font-bold mb-2">Stok</label>
        <input type="number" name="stock" id="stock" value="{{ old('stock', $product->stock) }}"
               class="w-full border p-2 rounded @error('stock') border-red-500 @enderror">
        @error('stock')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex gap-2">
        <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded">Update</button>
        <a href="{{ route('products.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Batal</a>
    </div>

</form>

@endsection
