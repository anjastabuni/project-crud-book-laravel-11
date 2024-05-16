@extends('layouts.app')

@section('content')
<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 my-6 mx-6">
    
    <table class="min-w-full table-auto border-collapse border border-slate-400">
        <thead>
            <tr class="bg-gray-100">
                <th class="px-4 py-2 border border-slate-300">No</th>
                <th class="px-4 py-2 border border-slate-300">Nama Kontak </th>
                <th class="px-4 py-2 border border-slate-300">Alamat Email</th>
                <th class="px-4 py-2 border border-slate-300">Nomor Telepon</th>
                <th class="px-4 py-2 border border-slate-300">Alamat Rumah</th>
                <th class="px-4 py-2 border border-slate-300">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kontaks as $kontak)
                <tr class="bg-white odd:bg-gray-50 hover:bg-gray-200">
                    <td class="px-4 py-2 border border-slate-300">{{ $kontak->id }}</td>
                    <td class="px-4 py-2 border border-slate-300">{{ $kontak->name }}</td>
                    <td class="px-4 py-2 border border-slate-300">{{ $kontak->email }}</td>
                    <td class="px-4 py-2 border border-slate-300">{{ $kontak->phone }}</td>
                    <td class="px-4 py-2 border border-slate-300">{{ $kontak->address }}</td>
                    <td class="px-4 py-2 border border-slate-300 text-center">
                        <a href="{{ route('kontak.show', $kontak) }}" class="text-blue-500 hover:underline">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    @endsection