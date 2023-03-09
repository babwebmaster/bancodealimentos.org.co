<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{  route('directors.update', $director->id)  }}" class="px-4 py-4 w-full md:w-3/6 md:mx-auto bg-white-4/5 rounded-md" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <h3 class="text-center text-2xl font-bold mb-5">{{  __('messages.Edit director')  }} #{{  $director->id  }}</h3>
                <div class="mb-5">
                    <label for="valor" class="mb-3 block text-base font-medium text-black">
                        {{  __('messages.Director title')  }}
                    </label>
                    <input type="text" name="title" id="title" placeholder="{{  __('messages.Director value')  }}" value="{{  $director->title  }}"
                        class="w-full rounded-md border border-[#e0e0e0] bg-transparent py-3 px-6 text-base font-medium text-gry-900 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    @if ($errors->has('title'))
                        <small id="errorTitle" class="text-red-600">
                            @foreach ($errors->get('title') as $e)
                                {{  $e  }}
                            @endforeach
                        </small>
                    @endif
                </div>
                <hr class="border-t border-gray-500">
                <div class="mb-5">
                    <label for="name" class="mb-3 block text-base font-medium text-black">
                        {{  __('messages.Director name')  }}
                    </label>
                    <input type="text" name="name" id="name" placeholder="{{  __('messages.Director name')  }}" value="{{  $director->name  }}"
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
                        {{  __('messages.Image director')  }} <small class="text-gray-700">( 600 X 600 )</small> 
                    </label>
                    <img src="{{  $director->image  }}" class="h-20 aspect-square" id="preview" alt="{{  $director->name  }}">
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
                    <label for="description" class="mb-3 block text-base font-medium text-bab">
                        {{  __('messages.Director description')  }} 
                    </label>
                    <textarea name="description" id="description" placeholder="{{  __('messages.Director description')  }}" value=""
                        class="w-full rounded-md border border-[#000] bg-transparent text-bab py-3 px-6 text-base text-left font-medium text-bab outline-none focus:border-[#6A64F1] focus:shadow-md">{{  $director->description  }}</textarea>
                    @if ($errors->has('description'))
                        <small id="errorDescription" class="text-red-600">
                            @foreach ($errors->get('description') as $e)
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