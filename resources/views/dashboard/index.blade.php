@extends('layouts.app')
@section('title', 'Dashboard · Bakuna Tracker')
@section('content')
<div class="mb-7">
    <p class="text-sm text-[#927b63] mb-1">Barangay Vaccination Desk</p>
    <h1 class="text-2xl md:text-3xl font-extrabold">{{ $title }}</h1>
    <p class="mt-2 text-[#927b63]">Welcome back, {{ explode(' ', auth()->user()->name)[0] }}. Here is your vaccination overview.</p>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 mb-7">
    @foreach ($stats as $stat)
        <x-stat-card :title="$stat['label']" :value="$stat['value']" />
    @endforeach
</div>

<div class="mb-7">
    @if ($alerts->count() > 0)
        <div class="bg-red-50 border border-red-200 text-red-800 rounded-xl p-4">
            <strong>Attention:</strong> {{ $alerts->count() }} overdue vaccination schedule(s) need follow-up.
        </div>
    @elseif ($schedules->isEmpty())
        <div class="bg-amber-50 border border-amber-200 text-amber-800 rounded-xl p-4">
            No vaccination records are available yet.
        </div>
    @else
        <div class="bg-green-50 border border-green-200 text-green-800 rounded-xl p-4">
            All clear! There are no overdue schedules.
        </div>
    @endif
</div>

<x-panel title="Upcoming and Recent Vaccination Schedules">
    <div class="flex justify-end mb-4">
        <a href="{{ route('schedule') }}" class="text-sm font-semibold text-[#a56c2c] hover:underline">View full schedule</a>
    </div>
    <x-schedule-table :schedules="$schedules" />
</x-panel>
@endsection
