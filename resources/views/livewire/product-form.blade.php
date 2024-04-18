<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    Test
    {{$product}}

    <form wire:submit.prevent="submitForm">
        <input type="text" wire:model="first_name">
        @error('first_name')
            {{$message}}
        @enderror
        <input type="text" wire:model="last_name">
        @error('last_name')
            {{ $message }}
        @enderror
        <input type="text" wire:model="email">
        @error('email')
            {{ $message }}
        @enderror
        <textarea wire:model="content"></textarea>
        @error('content')
            {{ $message }}
        @enderror
        <input style="color:red" type="submit">
    </form>
</div>
