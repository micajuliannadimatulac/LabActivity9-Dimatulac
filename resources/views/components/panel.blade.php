@props(['title'])
<section class="bg-white border border-[#e9ddca] shadow-sm rounded-xl overflow-hidden">
    <div class="px-5 py-4 border-b border-[#f0e8da]">
        <h2 class="font-bold text-lg">{{ $title }}</h2>
    </div>
    <div class="p-5">{{ $slot }}</div>
</section>
