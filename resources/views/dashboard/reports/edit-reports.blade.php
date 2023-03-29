<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.Dashboard') }}
        </h2>
    </x-slot>
    {{ Breadcrumbs::render('reports.edit', $report) }}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{  route('reports.update', $report->id)  }}" class="px-4 py-4 w-full md:w-3/6 md:mx-auto bg-white-4/5 rounded-md" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <h3 class="text-center text-2xl font-bold mb-5">{{  __('messages.Edit management report')  }}</h3>
                <div class="mb-5">
                    <label for="name" class="mb-3 block text-base font-medium text-black">
                        {{  __('messages.Report name')  }}
                    </label>
                    <input type="text" name="name" id="name" placeholder="{{  __('messages.Report name')  }}" value="{{  $report->name  }}"
                        class="w-full rounded-md border border-[#e0e0e0] bg-transparent py-3 px-6 text-base font-medium text-gry-900 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    @if ($errors->has('name'))
                        <small id="errorName" class="text-red-600">
                            @foreach ($errors->get('name') as $e)
                                {{  $e  }}
                            @endforeach
                        </small>
                    @endif
                </div>
                <hr class="border-t border-gray-500">
                <div class="my-5">
                    <label for="image" class="mb-3 block text-base font-medium text-black">
                        {{  __('messages.Image management report')  }} <small class="text-gray-700">( 350 X 400 )</small> 
                    </label>
                    <img src="{{  $report->image  }}" class="h-20 aspect-square" id="preview" alt="{{  $report->name  }}">
                    <br>
                    <input type="file" name="image" id="image" onchange="previsualizeImg()" accept="image/png, .jpeg, .jpg" class="w-full block">
                    <small id="errorImage" class="text-red-600">
                        @if ($errors->has('image'))
                            @foreach ($errors->get('image') as $e)
                                {{  $e  }}
                            @endforeach
                        @endif
                    </small>
                </div>
                <hr class="border-t border-gray-500">
                <div class="mb-5">
                    <label for="linkSpanish" class="mb-3 block text-base font-medium text-black">
                        {{  __('messages.Report link spanish')  }}
                    </label>
                    <input type="text" name="linkSpanish" id="linkSpanish" placeholder="{{  __('messages.Report link spanish')  }}" value="{{  $report->linkSpanish  }}"
                        class="w-full rounded-md border border-[#e0e0e0] bg-transparent py-3 px-6 text-base font-medium text-gry-900 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    @if ($errors->has('linkSpanish'))
                        <small id="errorLinkSpanish" class="text-red-600">
                            @foreach ($errors->get('linkSpanish') as $e)
                                {{  $e  }}
                            @endforeach
                        </small>
                    @endif
                </div>
                <hr class="border-t border-gray-500">
                <div class="mb-5">
                    <label for="linkEnglish" class="mb-3 block text-base font-medium text-black">
                        {{  __('messages.Report link english')  }}
                    </label>
                    <input type="text" name="linkEnglish" id="linkEnglish" placeholder="{{  __('messages.Report link english')  }}" value="{{  $report->linkEnglish  }}"
                        class="w-full rounded-md border border-[#e0e0e0] bg-transparent py-3 px-6 text-base font-medium text-gry-900 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    @if ($errors->has('linkEnglish'))
                        <small id="errorLinkEnglish" class="text-red-600">
                            @foreach ($errors->get('linkEnglish') as $e)
                                {{  $e  }}
                            @endforeach
                        </small>
                    @endif
                </div>
                <hr class="border-t border-gray-500">
                <div class="mb-5">
                    <label for="linkFrench" class="mb-3 block text-base font-medium text-black">
                        {{  __('messages.Report link french')  }}
                    </label>
                    <input type="text" name="linkFrench" id="linkFrench" placeholder="{{  __('messages.Report link french')  }}" value="{{  $report->linkFrench  }}"
                        class="w-full rounded-md border border-[#e0e0e0] bg-transparent py-3 px-6 text-base font-medium text-gry-900 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    @if ($errors->has('linkFrench'))
                        <small id="errorLinkFrench" class="text-red-600">
                            @foreach ($errors->get('linkFrench') as $e)
                                {{  $e  }}
                            @endforeach
                        </small>
                    @endif
                </div>
                <div class="w-full flex justify-center px-2 my-5">
                    <button type="submit" class="inline-flex items-center justify-end px-4 py-2 bg-bab border border-transparent rounded-md font-semibold text-md text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                        {{  __('messages.Save')  }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>