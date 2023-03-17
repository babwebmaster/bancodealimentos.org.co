@unless ($breadcrumbs->isEmpty())
    <nav class="bg-slate-50 rounded-lg mx-2 my-2 shadow-lg">
        <ol class="p-4 rounded flex flex-wrap bg-bab text-sm text-slate-400">
            @foreach ($breadcrumbs as $breadcrumb)
                @if ($breadcrumb->url && !$loop->last)
                    <li>
                        <a href="{{ $breadcrumb->url }}" class="text-white hover:text-slate-300 hover:underline focus:text-slate-400 focus:underline">
                            {{ $breadcrumb->title }}
                        </a>
                    </li>
                @else
                    <li>
                        {{ $breadcrumb->title }}
                    </li>
                @endif

                @unless($loop->last)
                    <li class="text-gray-500 px-2">
                        /
                    </li>
                @endif

            @endforeach
        </ol>
    </nav>
@endunless
