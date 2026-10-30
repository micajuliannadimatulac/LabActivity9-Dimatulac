@extends('layouts.app')
@section('title', 'Schedule · Bakuna Tracker')
@section('content')
<div class="mb-7">
    <p class="text-sm text-[#927b63] mb-1">Purok Dimatulac</p>
    <h1 class="text-2xl md:text-3xl font-extrabold">{{ $title }}</h1>
    <p class="mt-2 text-[#927b63]">Review all recorded vaccination appointments.</p>
</div>
<x-panel title="Vaccination Records">
    <x-schedule-table :schedules="$schedules" />
</x-panel>
@endsection
