<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.Dashboard') }}
        </h2>
    </x-slot>
    {{ Breadcrumbs::render('slide.create') }}
    <div class="mb-5">
        <div class="max-w-full mx-auto py-1 sm:px-6 lg:px-8 flex flex-column items-center justify-center">
            <form action="{{  route('slide.store')  }}" class="px-4 py-4 w-full bg-bab-shadow rounded-md" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-3 block text-base font-medium text-bab">
                        {{  __('messages.Slide name')  }} 
                    </label>
                    <input type="text" name="name" id="name" placeholder="{{  __('messages.Slide name')  }}" value="{{  old("name", $slide->name)  }}"
                        class="w-full rounded-md border border-[#000] bg-transparent text-bab py-3 px-6 text-base font-medium text-bab outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    @if ($errors->has('name'))
                        <small id="errorName" class="text-red-600">
                            @foreach ($errors->get('name') as $e)
                                {{  $e  }}
                            @endforeach
                        </small>
                    @endif
                </div>
                <hr class="border-t border-gray-500">
                <div class="flex flex-col lg:flex-row lg:justify-around">
                    <div class="my-5">
                        <label for="image_desktop" class="mb-3 block text-base font-medium text-bab">
                            {{  __('messages.Image slide desktop')  }} <small class="text-gray-700">( 1920 X 700 )</small> :
                        </label>
                        <img src="{{  $slide->content_desktop  }}" class="h-40 aspect-video hidden" id="previewDesktop" alt="{{  $slide->name  }}">
                        <br>
                        <input type="file" name="content_desktop" id="image_desktop" onchange="previsualizeImg('desktop')" accept="image/png, .jpeg, .jpg" class="w-full block">
                        <small id="errorDesktop" class="text-red-600">
                            @if ($errors->has('content_desktop'))
                                @foreach ($errors->get('content_desktop') as $e)
                                    {{  $e  }}
                                @endforeach
                            @endif
                        </small>
                    </div>
                    <div class="my-5">
                        <label for="image_mobile" class="mb-3 block text-base font-medium text-bab">
                            {{  __('messages.Image slide mobile')  }} <small class="text-gray-700">( 778 X 778 )</small> :
                        </label>
                        <img src="{{  $slide->content_mobile  }}" class="h-40 aspect-square hidden" id="previewMobile" alt="{{  $slide->name  }}">
                        <br>
                        <input type="file" name="content_mobile" id="image_mobile" onchange="previsualizeImg('mobile')" accept="image/png, .jpeg, .jpg" class="w-full block">
                        <small id="errorMobile" class="text-red-600">
                            @if ($errors->has('content_mobile'))
                                @foreach ($errors->get('content_mobile') as $e)
                                    {{  $e  }}
                                @endforeach
                            @endif
                        </small>
                    </div>
                </div>
                <hr class="border-t border-gray-500">
                <div class="flex flex-col lg:flex-row lg:justify-around">
                    <div class="my-2 md:my-5 w-full lg:w-1/3">
                        <label for="caption_status" class="mb-3 block text-base font-medium text-black">
                            {{  __('messages.Caption')  }}
                        </label>
                        <select class="rounded border-gray-700 bg-transparent text-bab" name="caption_status" id="caption_status">
                            <option value="-1" disabled selected>Select Option</option>
                            <option {{  old('status', $slide->caption_status) == 'yes' ? 'selected' : ''  }} value="yes">Si</option>
                            <option {{  old('status', $slide->caption_status) == 'not' ? 'selected' : ''  }} value="not">No</option>
                        </select>
                        <small id="errorCaption_status" class="text-red-600">
                            @if ($errors->has('caption_status'))
                                @foreach ($errors->get('caption_status') as $e)
                                    {{  $e  }}
                                @endforeach
                            @endif
                        </small>
                    </div>
                    <div class="my-2 md:my-5 w-full lg:w-2/3">
                        <label for="content_caption" class="mb-3 block text-base font-medium text-black">
                            {{  __('messages.Caption text')  }}
                        </label>
                        <input type="text" name="content_caption" id="content_caption" placeholder="{{  __('messages.Caption placeholder')  }}" value="{{  old('content_caption', $slide->content_caption)  }}"
                            class="w-full rounded-md border border-[#000] bg-transparent py-3 px-6 text-base font-medium text-gry-900 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        @if ($errors->has('content_caption'))
                            <small id="errorContent_caption" class="text-red-600">
                                @foreach ($errors->get('content_caption') as $e)
                                    {{  $e  }}
                                @endforeach
                            </small>
                        @endif
                    </div>
                </div>
                <hr class="border-t border-gray-500">
                <div class="flex flex-col lg:flex-row lg:justify-around">
                    <div class="my-2 md:my-5 w-full lg:w-1/5">
                        <label for="btn_status" class="mb-3 block text-base font-medium text-black">
                            {{  __('messages.Button')  }}
                        </label>
                        <select class="rounded border-gray-700 bg-transparent text-bab" name="btn_status" id="btn_status">
                            <option value="-1" disabled selected>Select Option</option>
                            <option {{  old('status', $slide->btn_status) == 'yes' ? 'selected' : ''  }} value="yes">Si</option>
                            <option {{  old('status', $slide->btn_status) == 'not' ? 'selected' : ''  }} value="not">No</option>
                        </select>
                        <small id="errorBtn_status" class="text-red-600">
                            @if ($errors->has('btn_status'))
                                @foreach ($errors->get('btn_status') as $e)
                                    {{  $e  }}
                                @endforeach
                            @endif
                        </small>
                    </div>
                    <div class="my-2 md:my-5 w-full lg:w-2/5 px-2">
                        <label for="btn_text" class="mb-3 block text-base font-medium text-black">
                            {{  __('messages.Btn_text')  }}
                        </label>
                        <input type="text" name="btn_text" id="btn_text" placeholder="{{  __('messages.Btn_text')  }}" value="{{  old('btn_text', $slide->btn_text)  }}"
                            class="w-full rounded-md border border-[#000] bg-transparent py-3 px-6 text-base font-medium text-gry-900 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        @if ($errors->has('btn_text'))
                            <small id="errorBtn_text" class="text-red-600">
                                @foreach ($errors->get('btn_text') as $e)
                                    {{  $e  }}
                                @endforeach
                            </small>
                        @endif
                    </div>
                    <div class="my-2 md:my-5 w-full lg:w-2/5 px-2">
                        <label for="btn_text" class="mb-3 block text-base font-medium text-black">
                            {{  __('messages.Btn_url')  }}
                        </label>
                        <input type="text" name="btn_url" id="btn_url" placeholder="{{  __('messages.Btn_url')  }}" value="{{  old('btn_url', $slide->btn_url)  }}"
                            class="w-full rounded-md border border-[#000] bg-transparent py-3 px-6 text-base font-medium text-gry-900 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        @if ($errors->has('btn_url'))
                            <small id="errorBtn_url" class="text-red-600">
                                @foreach ($errors->get('btn_url') as $e)
                                    {{  $e  }}
                                @endforeach
                            </small>
                        @endif
                    </div>
                </div>
                <hr class="border-t border-gray-500">
                <div class="my-5">
                    <label for="status" class="mb-3 block text-base font-medium text-black">
                        {{  __('messages.Publish slide')  }} 
                    </label>
                    <select class="rounded border-blue-900 bg-transparent" name="status" id="status">
                        <option value="-1" disabled selected>{{  __('messages.Select Option')  }}</option>
                        <option {{  old('status', $slide->status) == 'yes' ? 'selected' : ''  }} value="yes">Si</option>
                        <option {{  old('status', $slide->status) == 'not' ? 'selected' : ''  }} value="not">No</option>
                    </select>
                    <small id="errorStatus" class="text-red-600">
                        @if ($errors->has('status'))
                            @foreach ($errors->get('status') as $e)
                                {{  $e  }}
                            @endforeach
                        @endif
                    </small>
                </div>
                <div class="w-full flex justify-center px-2 mt-2">
                    <button type="submit" class="inline-flex items-center justify-end px-4 py-2 bg-bab border border-transparent rounded-md font-semibold text-md text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                        {{  __('messages.Create slide')  }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>