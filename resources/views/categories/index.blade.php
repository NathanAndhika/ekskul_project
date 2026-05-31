@extends('layouts.app')

@section('content')

<div class="flex justify-between mb-4">

    <h1 class="text-2xl font-bold">
        Data Kategori
    </h1>

    <a href="{{ route('categories.create') }}"
       class="bg-blue-500 text-white px-4 py-2 rounded">

        Tambah

    </a>

</div>

<table class="w-full bg-white shadow rounded">

    <thead class="bg-gray-200">

        <tr>
            <th class="p-3">No</th>
            <th class="p-3">Nama</th>
            <th class="p-3">Aksi</th>
        </tr>

    </thead>

    <tbody>

        @foreach($categories as $category)

        <tr class="border-t">

            <td class="p-3">
                {{ $loop->iteration }}
            </td>

            <td class="p-3">
                {{ $category->name }}
            </td>

            <td class="p-3 flex gap-2">

                <a href="{{ route('categories.edit', $category->id) }}"
                   class="bg-yellow-500 text-white px-3 py-1 rounded">

                    Edit

                </a>

                <form action="{{ route('categories.destroy', $category->id) }}"
                      method="POST">

                    @csrf
                    @method('DELETE')

                    <button class="bg-red-500 text-white px-3 py-1 rounded">
                        Hapus
                    </button>

                </form>

            </td>

        </tr>

        @endforeach

    </tbody>

</table>

@endsection
