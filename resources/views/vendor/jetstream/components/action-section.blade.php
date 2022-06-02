<div {{ $attributes->merge(['class' => 'md:grid md:grid-cols-3 md:gap-6 px-3 h-full']) }}>
    
    <div class="mt-5 md:mt-0 md:col-span-3 h-full">
        <div class="px-4 py-5 sm:p-6 bg-white-4/5 shadow sm:rounded-lg h-full">
            <x-jet-section-title>
                <x-slot name="title">{{ $title }}</x-slot>
                <x-slot name="description">{{ $description }}</x-slot>
            </x-jet-section-title>
            <hr class="my-3">
            {{ $content }}
        </div>
    </div>
</div>
