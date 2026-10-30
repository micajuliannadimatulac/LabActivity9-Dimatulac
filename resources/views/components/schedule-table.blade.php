@props(['schedules'])
<div class="overflow-x-auto">
    <table class="w-full text-sm text-left">
        <thead class="bg-[#f2f5e2] text-[#715132]">
            <tr>
                <th class="p-3">#</th><th class="p-3">Patient</th><th class="p-3">Purok</th>
                <th class="p-3">Vaccine</th><th class="p-3">Dose</th><th class="p-3">Date</th><th class="p-3">Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($schedules as $schedule)
                <tr class="{{ $loop->odd ? 'bg-white' : 'bg-[#fffaf0]' }} border-b border-[#eee5d8]">
                    <td class="p-3">{{ $loop->iteration }}</td>
                    <td class="p-3 font-medium">{{ $schedule->patient_name }}</td>
                    <td class="p-3">{{ $schedule->purok }}</td>
                    <td class="p-3">{{ $schedule->vaccine }}</td>
                    <td class="p-3">{{ $schedule->dose }}</td>
                    <td class="p-3 whitespace-nowrap">{{ $schedule->scheduled_at->format('M d, Y') }}</td>
                    <td class="p-3">
                        <span class="inline-block rounded-full px-3 py-1 text-xs font-semibold
                            {{ $schedule->status === 'Done' ? 'bg-green-100 text-green-800' : ($schedule->status === 'Overdue' ? 'bg-red-100 text-red-800' : 'bg-amber-100 text-amber-800') }}">
                            {{ $schedule->status }}
                        </span>
                        @unless ($schedule->status !== 'Overdue')
                            <span class="sr-only">Overdue vaccination</span>
                        @endunless
                    </td>
                </tr>
            @empty
                <tr><td colspan="7" class="text-center p-8 text-[#8b745c]">No schedules yet.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
