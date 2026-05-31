@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-4">Tambah Kategori</h1>

<form action="{{ route('categories.store') }}" method="POST" class="bg-white p-6 rounded shadow max-w-md">
    @csrf

    <div class="mb-4">
        <label for="name" class="block text-gray-700 font-bold mb-2">Nama Kategori</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}"
               class="w-full border p-2 rounded @error('name') border-red-500 @enderror">
        @error('name')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex gap-2">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
        <a href="{{ route('categories.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Batal</a>
    </div>

</form>

@endsection
