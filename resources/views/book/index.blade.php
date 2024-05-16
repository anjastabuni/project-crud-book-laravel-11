

@extends('layouts.app')

@section('content')
<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
<a href="{{ route('book.create') }}" class="inline-block my-6 mx-6 px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
    Tambah
</a>
<table class="min-w-full table-auto border-collapse border border-slate-400">
    <thead>
        <tr class="bg-gray-100">
            <th class="px-4 py-2 border border-slate-300">ID</th>
            <th class="px-4 py-2 border border-slate-300">Judul</th>
            <th class="px-4 py-2 border border-slate-300">Halaman</th>
            <th class="px-4 py-2 border border-slate-300">Penulis</th>
            <th class="px-4 py-2 border border-slate-300">Penerbit</th>
            <th class="px-4 py-2 border border-slate-300">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)
            <tr class="bg-white odd:bg-gray-50 hover:bg-gray-200">
                <td class="px-4 py-2 border border-slate-300">{{ $book->id }}</td>
                <td class="px-4 py-2 border border-slate-300">{{ $book->judul }}</td>
                <td class="px-4 py-2 border border-slate-300">{{ $book->halaman }}</td>
                <td class="px-4 py-2 border border-slate-300">{{ $book->penulis }}</td>
                <td class="px-4 py-2 border border-slate-300">{{ $book->penerbit }}</td>
                <td class="px-4 py-2 border border-slate-300 text-center">
                    <a href="{{ route('book.show', $book) }}" class="text-blue-500 hover:underline">Detail</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>

    
@endsection