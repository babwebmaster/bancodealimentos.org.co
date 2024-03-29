<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.Dashboard') }}
        </h2>
    </x-slot>
    {{ Breadcrumbs::render('slide-donors.edit', $slideDonor) }}
    <div class="mb-5">
        <div class="max-w-full mx-auto py-1 sm:px-6 lg:px-8">
            <form action="{{  route('slide-donors.update', $slideDonor->id)  }}" class="px-4 py-4 w-full md:w-3/6 md:mx-auto bg-white-4/5 rounded-md" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <h3 class="text-center text-2xl font-bold">{{  __('messages.Edit donor')  }} #{{  $slideDonor->id  }}</h3>
                <div class="mb-5">
                    <label for="name" class="mb-3 block text-base font-medium text-black">
                        {{  __('messages.Donor name')  }}
                    </label>
                    <input type="text" name="name" id="name" placeholder="{{  __('messages.Donor name')  }}" value="{{  $slideDonor->name  }}"
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
                    <label for="image_donor" class="mb-3 block text-base font-medium text-black">
                        {{  __('messages.Image slide donor')  }} <small class="text-gray-700">( 600 X 600 )</small> 
                    </label>
                    <img src="{{  $slideDonor->image  }}" class="h-20 aspect-square" id="previewDonor" alt="{{  $slideDonor->name  }}">
                    <br>
                    <input type="file" name="image" id="image_donor" onchange="previsualizeImg()" accept="image/png, .jpeg, .jpg" class="w-full block">
                    <small id="errorDonor" class="text-red-600">
                        @if ($errors->has('image'))
                            @foreach ($errors->get('image') as $e)
                                {{  $e  }}
                            @endforeach
                        @endif
                    </small>
                </div>
                <hr class="border-t border-gray-500">
                <div class="my-5">
                    <label for="status" class="mb-3 block text-base font-medium text-black">
                        {{  __('messages.Publish')  }}
                    </label>
                    <select class="rounded border-gray-700 bg-transparent text-bab" name="status" id="status">
                        <option value="-1" disabled selected>Select Option</option>
                        <option {{  old('status', $slideDonor->status) == 'yes' ? 'selected' : ''  }} value="yes">Si</option>
                        <option {{  old('status', $slideDonor->status) == 'not' ? 'selected' : ''  }} value="not">No</option>
                    </select>
                    <small id="errorStaus" class="text-red-600">
                        @if ($errors->has('status'))
                            @foreach ($errors->get('status') as $e)
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