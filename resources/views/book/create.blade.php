@extends('layouts.app')
@section('content')
<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">

    <form action="" method="post">
        <input type="text" placeholder="Judul" name="judul">
        <input type="number" name="halaman" placeholder="Halaman">
        {{-- <input type="text" name="penulis" placeholder="Penulis">
        <input type="text" name="penerbit" placeholder="Penerbit"> --}}
        <button type="submit">Tambahkan</button>
    </form>
</div>
@endsection