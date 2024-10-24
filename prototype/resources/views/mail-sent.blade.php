@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold mb-4">New Message</h2>
    <p class="text-gray-700">{{ $mailMessage }}</p>
</div>
@endsection
