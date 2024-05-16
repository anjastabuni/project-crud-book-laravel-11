@extends('layouts.app')
@section('content')
<div class="p-4 my-6 mx-6 flex justify-around">
    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-xl font-bold mb-4">Detail Kontak</h2>
        <div class="space-y-4">
            @foreach ($kontak as $key => $velua)
            <div class="flex items-center  justify-between  border-b border-gray-200 pb-2">
                <span class="text-gray-600">{{ $key }}</span>
                <span class="text-gray-800">{{ $velua }}</span>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection