@props(['submit'])

<div {{ $attributes->merge(['class' => 'md:grid md:grid-cols-2 md:gap-6 px-3 h-full']) }}>
    
    <div class="mt-5 md:mt-0 col-span-2 h-full">
        <form wire:submit.prevent="{{ $submit }}" class="flex flex-col justify-between bg-white-4/5 h-full rounded-lg shadow">
            <div class="px-4 py-5  sm:p-6  {{ isset($actions) ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md' }}">
                <x-jet-section-title>
                    <x-slot name="title">{{ $title }}</x-slot>
                    <x-slot name="description">{{ $description }}</x-slot>
                </x-jet-section-title>
                <hr class="my-2">
                <div class="grid grid-cols-6 gap-6 mt-2">
                    {{ $form }}
                </div>
            </div>

            @if (isset($actions))
                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                    {{ $actions }}
                </div>
            @endif
        </form>
    </div>
</div>
