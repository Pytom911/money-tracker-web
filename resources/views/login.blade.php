<!-- resources/views/login.blade.php -->
<?php

@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h2 class="text-2xl font-bold mb-4">Demo Login</h2>
    <p class="text-gray-600">This is a placeholder login page for the dashboard demo. No authentication is required.</p>
    <a href="{{ route('dashboard') }}" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Go to Dashboard</a>
</div>
@endsection
