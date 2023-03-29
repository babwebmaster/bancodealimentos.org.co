<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.Dashboard') }}
        </h2>
    </x-slot>
    {{ Breadcrumbs::render('reconocimientos.edit', $reconocimiento) }}
    <div class="mb-5">
        <div 
            class="max-w-full mx-auto py-1 sm:px-6 lg:px-8 mb-8" 
            x-data="{
                color:'{{ $reconocimiento->color }}',
                data:'{{ $reconocimiento->icon }}',
                changeColor(event){
                    document.querySelector('#icon>i').style.color=event
                }
            }"
        >
            <form action="{{  route('reconocimientos.update', $reconocimiento->id)  }}" class="px-4 py-4 w-full bg-bab-shadow rounded-md" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <h3 class="text-center text-2xl font-bold my-8">{{  __('messages.Edit Announcement')  }}</h3>
                <div class="block sm:flex sm:gap-10">
                    <div class="sm:basis-1/2">
                        <div class="mb-5">
                            <label for="title" class="mb-3 block text-base font-medium text-bab">
                                {{  __('messages.Announcement Title')  }} 
                            </label>
                            <input type="text" name="title" id="title" placeholder="{{  __('messages.Announcement Title')  }}" value="{{  $reconocimiento->title  }}"
                                class="w-full rounded-md border border-black bg-transparent text-bab py-3 px-6 text-base font-medium text-bab outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            @if ($errors->has('title'))
                                <small id="errorTitle" class="text-red-600">
                                    @foreach ($errors->get('title') as $e)
                                        {{  $e  }}
                                    @endforeach
                                </small>
                            @endif
                        </div>
                        <div class="mb-5">
                            <label for="content" class="mb-3 block text-base font-medium text-bab">
                                {{  __('messages.Announcement Content')  }} 
                            </label>
                            <textarea name="content" id="content" placeholder="{{  __('messages.Announcement Content')  }}" value=""
                                class="w-full rounded-md border border-[#000] bg-transparent text-bab py-3 px-6 text-base text-left font-medium text-bab outline-none focus:border-[#6A64F1] focus:shadow-md">{{  $reconocimiento->content  }}</textarea>
                            @if ($errors->has('content'))
                                <small id="errorContent" class="text-red-600">
                                    @foreach ($errors->get('content') as $e)
                                        {{  $e  }}
                                    @endforeach
                                </small>
                            @endif
                        </div>
                        <div class="mb-5">
                            <label for="date" class="mb-3 block text-base font-medium text-bab">
                                {{  __('messages.Announcement Date')  }} 
                            </label>
                            <input type="date" name="date_announcement" id="date" value="{{  $reconocimiento->date_announcement  }}"
                                class="w-full rounded-md border border-[#000] bg-transparent text-bab py-3 px-6 text-base font-medium text-bab outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            @if ($errors->has('date_announcement'))
                                <small id="errorDate_announcement" class="text-red-600">
                                    @foreach ($errors->get('date_announcement') as $e)
                                        {{  $e  }}
                                    @endforeach
                                </small>
                            @endif
                        </div>
                    </div>
                    <div class="sm:basis-1/2">
                        <div class="mb-5">
                            <label for="image" class="mb-3 block text-base font-medium text-black">
                                {{  __('messages.Image Announcement')  }} 
                            </label>
                            <img src="{{  $reconocimiento->image?$reconocimiento->image:'https://via.placeholder.com/600x600.png/333333?text=Sin%20imagen'  }}" class="h-20 mb-5" id="preview" alt="{{  $reconocimiento->title  }}">
                            <input type="file" name="image" id="image" onchange="previsualizeImg()" accept="image/png, .jpeg, .jpg" class="w-full block border py-3 px-6 border-black rounded-md">
                            <small id="errorImage" class="text-red-600">
                                @if ($errors->has('image'))
                                    @foreach ($errors->get('image') as $e)
                                        {{  $e  }}
                                    @endforeach
                                @endif
                            </small>
                        </div>
                        <div class="mb-5">
                            <label for="icon" class="mb-3 block text-base font-medium text-bab">
                                {{  __('messages.Announcement Icon')  }} 
                            </label>
                            <x-web.drop-icons :reconocimiento="$reconocimiento"></x-web.drop-icons>
                            <input type="hidden" name="icon" id="icon" x-model="data" required/>
                            @if ($errors->has('icon'))
                                <small id="errorIcon" class="text-red-600">
                                    @foreach ($errors->get('icon') as $e)
                                        {{  $e  }}
                                    @endforeach
                                </small>
                            @endif
                        </div>
                        <div class="mb-5">
                            <label for="color" class="mb-3 block text-base font-medium text-bab">
                                {{  __('messages.Color Icon')  }} 
                            </label>
                            <input 
                                type="color" 
                                x-model="color" 
                                @change="changeColor($event.target.value)" 
                                name="color" 
                                id="color" 
                                value="{{  $reconocimiento->color  }}"
                                class="w-20 h-20 rounded-sm border border-[#000] bg-transparent text-bab py-3 px-3 text-base font-medium text-bab outline-none focus:border-[#6A64F1] focus:shadow-md" 
                                required
                            />
                            @if ($errors->has('color'))
                                <small id="errorColor" class="text-red-600">
                                    @foreach ($errors->get('color') as $e)
                                        {{  $e  }}
                                    @endforeach
                                </small>
                            @endif
                        </div>
                    </div>
                </div>
                <hr class="border-t border-gray-500">
                <div class="w-full flex justify-center px-2 mt-2">
                    <button type="submit" class="inline-flex items-center justify-end px-4 py-2 bg-bab border border-transparent rounded-md font-semibold text-md text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                        {{  __('messages.Edit Announcement')  }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>