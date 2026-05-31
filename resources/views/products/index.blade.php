@extends('layouts.app')

@section('content')

<div class="flex justify-between mb-4">

    <h1 class="text-2xl font-bold">
        Data Barang
    </h1>

    <a href="{{ route('products.create') }}"
       class="bg-blue-500 text-white px-4 py-2 rounded">

        Tambah Barang

    </a>

</div>

<form method="GET"
      action="{{ route('products.index') }}"
      class="mb-4">

    <input type="text"
           name="search"
           placeholder="Cari barang..."
           value="{{ request('search') }}"
           class="border p-2 rounded">

    <button class="bg-gray-700 text-white px-4 py-2 rounded">
        Cari
    </button>

</form>

<table class="w-full bg-white shadow rounded">

    <thead class="bg-gray-200">

        <tr>
            <th class="p-3">No</th>
            <th class="p-3">Nama</th>
            <th class="p-3">Kategori</th>
            <th class="p-3">Harga</th>
            <th class="p-3">Stok</th>
            <th class="p-3">Aksi</th>
        </tr>

    </thead>

    <tbody>

        @foreach($products as $product)

        <tr class="border-t">

            <td class="p-3">
                {{ $products->firstItem() + $loop->index }}
            </td>

            <td class="p-3">
                {{ $product->name }}
            </td>

            <td class="p-3">
                {{ $product->category->name }}
            </td>

            <td class="p-3">
                Rp {{ number_format($product->price) }}
            </td>

            <td class="p-3">
                {{ $product->stock }}
            </td>

            <td class="p-3 flex gap-2">

                <a href="{{ route('products.edit', $product->id) }}"
                   class="bg-yellow-500 text-white px-3 py-1 rounded">

                    Edit

                </a>

                <form action="{{ route('products.destroy', $product->id) }}"
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

<div class="mt-4">
    {{ $products->links() }}
</div>

@endsection
