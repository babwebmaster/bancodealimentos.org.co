<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
    <div>
        {{ $logo }}
    </div>
    
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 card-logo shadow-2xl overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>

    @isset($breadcrumb)
    <div class="my-5 text-slate-50">
        {{  $breadcrumb  }}
    </div>
    @endisset
</div>
