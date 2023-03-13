<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-transparent border border-bab rounded-md font-semibold text-xs text-bab uppercase tracking-widest shadow-sm hover:text-slate-50 hover:bg-blue-700 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-slite-50 active:bg-bab disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
