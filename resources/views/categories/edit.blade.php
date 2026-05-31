@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-4">Edit Kategori</h1>

<form action="{{ route('categories.update', $category->id) }}" method="POST" class="bg-white p-6 rounded shadow max-w-md">
    @csrf
    @method('PUT')

    <div class="mb-4">
        <label for="name" class="block text-gray-700 font-bold mb-2">Nama Kategori</label>
        <input type="text" name="name" id="name" value="{{ old('name', $category->name) }}"
               class="w-full border p-2 rounded @error('name') border-red-500 @enderror">
        @error('name')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex gap-2">
        <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded">Update</button>
        <a href="{{ route('categories.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Batal</a>
    </div>

</form>

@endsection
