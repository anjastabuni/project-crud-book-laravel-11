@extends('layouts.app')
@section('content')
<div class="p-4 flex justify-center">
    <div class="bg-white shadow-md rounded-lg p-6 w-full max-w-md">
        <h2 class="text-xl font-bold mb-4">Tambah Kontak</h2>
        <form action="{{ route('kontak.create') }}" method="post" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block text-gray-700">Nama Lengkap</label>
                <input type="text" id="name" name="name" placeholder="Name" class="w-full mt-1 p-2 border border-gray-300 rounded-md">
            </div>
            <div>
                <label for="email" class="block text-gray-700">Alamat Email</label>
                <input type="email" id="email" name="email" placeholder="Email Address" class="w-full mt-1 p-2 border border-gray-300 rounded-md">
            </div>
            <div>
                <label for="phone" class="block text-gray-700">Nomor Telepon</label>
                <input type="text" id="phone" name="phone" placeholder="Phone Number" class="w-full mt-1 p-2 border border-gray-300 rounded-md">
            </div>
            <div>
                <label for="address" class="block text-gray-700">Alamat</label>
                <input type="text" id="address" name="address" placeholder="Address" class="w-full mt-1 p-2 border border-gray-300 rounded-md">
            </div>
            <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Tambahkan</button>
            </div>
        </form>
    </div>
</div>
@endsection