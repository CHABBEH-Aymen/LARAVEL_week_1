@extends('layouts.app')

@section('content')
<div class="mb-4">
    @if (session('err'))
    <p class="text-red-500">{{ session('err') }}</p>
    @endif
</div>

<form action="{{ route('send-mail') }}" method="post" class="flex flex-col items-center w-full max-w-md mx-auto p-6 bg-white rounded-lg shadow-md">
    @csrf
    <h2 class="text-lg font-semibold mb-4">Send a Message</h2>

    <input type="email" name="email" placeholder="Email" class="mb-3 p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>

    <input type="text" name="name" placeholder="Your Name" class="mb-3 p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>

    <textarea name="message" placeholder="Your Message" rows="4" class="mb-3 p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>

    <input type="submit" value="Send" class="bg-blue-500 text-white font-semibold py-2 px-4 rounded hover:bg-blue-600 transition duration-200">
</form>
@endsection

