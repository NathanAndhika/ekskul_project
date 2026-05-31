@extends('layouts.app')

@section('content')

<h1 class="text-3xl font-bold mb-6">
    Dashboard
</h1>

<div class="grid grid-cols-3 gap-6">

    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-gray-500">
            Total Barang
        </h2>

        <p class="text-3xl font-bold">
            {{ $jumlahBarang }}
        </p>
    </div>

    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-gray-500">
            Total Kategori
        </h2>

        <p class="text-3xl font-bold">
            {{ $jumlahKategori }}
        </p>
    </div>

    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-gray-500">
            Total Stok
        </h2>

        <p class="text-3xl font-bold">
            {{ $totalStok }}
        </p>
    </div>

</div>

@endsection
