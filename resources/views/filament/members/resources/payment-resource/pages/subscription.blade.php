<x-filament-panels::page>

<div class="flex gap-2">
<a href="{{ route('member-checkout') }}">
    <div class="rounded-md border border-gray-300 w-32 h-12 p-4 flex items-center justify-center hover:pointer-events-auto" wire:click="subscribeMonthly">
        <div class="font-bold hover:pointer-events-auto">
         Monthly Payment
        </div>
    </div>
</a>


<button>
    <div class="rounded-md border border-gray-300 w-32 h-12 p-4 flex items-center justify-center hover:pointer-events-auto" wire:click="subscribeYearly">
        <div class="font-bold hover:pointer-events-auto">
         Yearly Payment
        </div>
    </div>
</button>
</div>


</x-filament-panels::page>
