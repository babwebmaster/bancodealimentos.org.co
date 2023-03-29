<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.Dashboard') }}
        </h2>
    </x-slot>
    {{ Breadcrumbs::render('cifras.edit', $cifra) }}
    <div class="mb-5">
        <div class="max-w-full mx-auto py-1 sm:px-6 lg:px-8">
            <form action="{{  route('cifras.update', $cifra->id)  }}" class="px-4 py-4 w-full md:w-3/6 md:mx-auto bg-white-4/5 rounded-md" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <h3 class="text-center text-2xl font-bold">{{  __('messages.Edit figure')  }} #{{  $cifra->id  }}</h3>
                <div class="mb-5">
                    <label for="name" class="mb-3 block text-base font-medium text-black">
                        {{  __('messages.Figure name')  }}
                    </label>
                    <input type="text" name="name" id="name" placeholder="{{  __('messages.Figure name')  }}" value="{{  $cifra->name  }}"
                        class="w-full rounded-md border border-[#e0e0e0] bg-transparent py-3 px-6 text-base font-medium text-gry-900 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    @if ($errors->has('name'))
                        <small id="errorName" class="text-red-600">
                            @foreach ($errors->get('name') as $e)
                                {{  $e  }}
                            @endforeach
                        </small>
                    @endif
                </div>
                <div class="mb-5">
                    <label for="valor" class="mb-3 block text-base font-medium text-black">
                        {{  __('messages.Figure value')  }}
                    </label>
                    <input type="number" name="value" id="value" placeholder="{{  __('messages.Figure value')  }}" value="{{  $cifra->value  }}"
                        class="w-full rounded-md border border-[#e0e0e0] bg-transparent py-3 px-6 text-base font-medium text-gry-900 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    @if ($errors->has('value'))
                        <small id="errorValue" class="text-red-600">
                            @foreach ($errors->get('value') as $e)
                                {{  $e  }}
                            @endforeach
                        </small>
                    @endif
                </div>
                <hr class="border-t border-gray-500">
                <div class="my-5">
                    <label for="icon" class="mb-3 block text-base font-medium text-black">
                        {{  __('messages.Icon figure')  }} <small class="text-gray-700">( 600 X 600 )</small> 
                    </label>
                    <img src="{{  $cifra->icon  }}" class="h-20 aspect-square" id="preview" alt="{{  $cifra->name  }}">
                    <br>
                    <input type="file" name="icon" id="icon" onchange="previsualizeImg()" accept="image/png, .jpeg, .jpg" class="w-full block">
                    <small id="error" class="text-red-600">
                        @if ($errors->has('icon'))
                            @foreach ($errors->get('icon') as $e)
                                {{  $e  }}
                            @endforeach
                        @endif
                    </small>
                </div>
                <hr class="border-t border-gray-500">
                <div class="my-5">
                    <label for="category" class="mb-3 block text-base font-medium text-black">
                        {{  __('messages.Categories')  }}
                        <i class="fas fa-circle-info" title="{{  __('messages.Select on the pages where this figure is to be displayed')  }}"></i>
                    </label>
                    @foreach ($category_cifras as $cc)
                        <div class="my-2 flex justify-between">
                            <p class="text-left text-bab">{{  $cc->nombre  }}</p>
                            <input 
                                @foreach ($cifra->categoryCifras as $category)
                                    @if ($category->nombre == $cc->nombre)
                                            checked     
                                    @endif
                                @endforeach
                                {{-- @if(strstr($cifra->category, $cc->nombre)) checked @endif --}}
                                class="rounded border-gray-700" 
                                type="checkbox" 
                                id="category-{{  $cc->id  }}" 
                                name="category[]" 
                                value="{{  $cc->id  }}"
                            />
                        </div>
                    @endforeach
                    <small id="errorCategory" class="text-red-600">
                        @if ($errors->has('category'))
                            @foreach ($errors->get('category') as $e)
                                {{  $e  }}
                            @endforeach
                        @endif
                    </small>
                </div>
                <div class="my-5">
                    <label for="published" class="mb-3 block text-base font-medium text-black">
                        {{  __('messages.Publish')  }}
                    </label>
                    <select class="rounded border-gray-700 bg-transparent text-bab" name="published" id="published">
                        <option value="-1" disabled selected>{{  __('messages.Select Option')  }}</option>
                        <option {{  old('status', $cifra->published) == 'yes' ? 'selected' : ''  }} value="yes">Si</option>
                        <option {{  old('status', $cifra->published) == 'not' ? 'selected' : ''  }} value="not">No</option>
                    </select>
                    <small id="errorPublished" class="text-red-600">
                        @if ($errors->has('published'))
                            @foreach ($errors->get('published') as $e)
                                {{  $e  }}
                            @endforeach
                        @endif
                    </small>
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