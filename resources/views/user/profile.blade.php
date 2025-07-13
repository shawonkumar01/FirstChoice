@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-6 px-4">
    <h1 class="text-2xl font-bold">Your Profile</h1>
    <div class="mt-6 bg-white shadow overflow-hidden rounded-lg">
        <div class="px-4 py-5 sm:p-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                {{ $user->name }}
            </h3>
            <p class="mt-1 text-sm text-gray-500">
                {{ $user->email }}
            </p>
        </div>
    </div>
</div>
@endsection