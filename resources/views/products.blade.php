<x-guest-layout>
    @if (Route::has('login'))
        <livewire:welcome.navigation />
    @endif

    <livewire:products-list/>
</x-guest-layout>
