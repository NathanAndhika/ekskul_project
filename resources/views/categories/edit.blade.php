@extends('layouts.app')

@section('content')

<div class="max-w-2xl mx-auto">
    <div class="flex items-center gap-4 mb-8">
        <a href="{{ route('categories.index') }}" class="bg-indigo-50 hover:bg-indigo-100 text-indigo-600 p-2 rounded-full transition-colors">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
        </a>
        <h1 class="text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-700 to-purple-700 tracking-tight">
            Edit Kategori
        </h1>
    </div>

    <div class="bg-white p-8 rounded-3xl shadow-xl shadow-indigo-100/50 border border-gray-100">
        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-6">
                <label for="name" class="block text-gray-700 font-semibold mb-2 text-lg">Nama Kategori</label>
                <input type="text" name="name" id="name" value="{{ old('name', $category->name) }}" placeholder="Masukkan nama kategori..."
                       class="w-full bg-gray-50 border border-gray-200 text-gray-900 text-lg rounded-xl focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 block p-3.5 transition-all @error('name') border-red-500 bg-red-50 @enderror">
                @error('name')
                    <p class="text-red-500 text-sm mt-2 flex items-center gap-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="flex gap-3 pt-4 border-t border-gray-100">
                <button type="submit" class="bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-semibold px-6 py-3 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 w-full sm:w-auto">
                    Simpan Perubahan
                </button>
                <a href="{{ route('categories.index') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold px-6 py-3 rounded-xl transition-all duration-300 w-full sm:w-auto text-center">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>

@endsection
