<!-- resources/views/dashboard.blade.php -->
<?php

@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <div class="bg-white shadow rounded-lg p-6">
      <h2 class="text-xl font-semibold mb-2">Account Balance</h2>
      <p class="text-2xl font-bold">12345.67</p>
    </div>
    <div class="bg-white shadow rounded-lg p-6">
      <h2 class="text-xl font-semibold mb-2">Total Income</h2>
      <p class="text-2xl font-bold">12345.67</p>
    </div>
    <div class="bg-white shadow rounded-lg p-6">
      <h2 class="text-xl font-semibold mb-2">Total Expense</h2>
      <p class="text-2xl font-bold">12345.67</p>
    </div>
    <div class="bg-white shadow rounded-lg p-6">
      <h2 class="text-xl font-semibold mb-2">Savings Target</h2>
      <p class="text-2xl font-bold">12345.67</p>
    </div>
    <div class="bg-white shadow rounded-lg p-6">
      <h2 class="text-xl font-semibold mb-2">Forex Profit</h2>
      <p class="text-2xl font-bold">12345.67</p>
    </div>
  </div>
</div>
@endsection
