<x-guest-layout>
    @if (Route::has('login'))
        <livewire:welcome.navigation />
    @endif

    <livewire:product-form />
</x-guest-layout>
