<div class="bg-bab-shadow pb-4 px-4 rounded-md w-full">
    <div class="flex justify-between w-full pt-6 ">
        <p class="ml-3 font-bold text-2xl">{{  __('messages.All Directors')  }}</p>
    </div>
    <div class="w-full flex flex-col sm:flex-row sm:justify-between gap-2  px-2 mt-2">
        <a href="{{ route('directors.create') }}" class="sm:inline-flex items-center text-center px-4 py-2 bg-bab border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">{{  __('messages.Create New Directors')  }}</a>
        <div class="w-full sm:w-64 inline-block relative ">
            <input type="text" wire:model="search" class="leading-snug border border-gray-300 block w-full appearance-none bg-gray-100 text-sm text-bab py-1 px-4 pl-8 rounded-lg" placeholder="{{  __('messages.Search')  }}" />
            <div class="pointer-events-none absolute pl-3 inset-y-0 left-0 flex items-center px-2 text-gray-300 ">
                <svg class="fill-current h-3 w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.999 511.999" style="color: #011b47">
                    <path d="M508.874 478.708L360.142 329.976c28.21-34.827 45.191-79.103 45.191-127.309C405.333 90.917 314.416 0 202.666 0S0 90.917 0 202.667s90.917 202.667 202.667 202.667c48.206 0 92.482-16.982 127.309-45.191l148.732 148.732c4.167 4.165 10.919 4.165 15.086 0l15.081-15.082c4.165-4.166 4.165-10.92-.001-15.085zM202.667 362.667c-88.229 0-160-71.771-160-160s71.771-160 160-160 160 71.771 160 160-71.771 160-160 160z" />
                </svg>
            </div>
        </div>
    </div>
    <div class="overflow-x-auto mt-6 pb-5">
        <table class="border-collapse w-full">
            <thead>
                <tr class="rounded-lg text-sm font-medium text-gray-700 text-left">
                    <th class="px-4 py-2 text-left bg-gray-200">ID</th>
                    <th class="px-4 py-2 text-left bg-gray-200">{{  __('messages.Title')  }}</th>
                    <th class="px-4 py-2 text-left bg-gray-200">{{  __('messages.Name')  }}</th>
                    <th class="px-4 py-2 text-left bg-gray-200">{{  __('messages.Image')  }}</th>
                    <th class="px-4 py-2 text-left bg-gray-200">{{  __('messages.Description')  }}</th>
                    <th class="px-4 py-2 text-left bg-gray-200">{{  __('messages.Actions')  }}</th>
                </tr>
            </thead>
            <tbody class="text-sm font-normal text-gray-700">
                @forelse ($directors as $d)
                    <tr class=" border-b border-gray-200 py-10">
                        <td class="px-4 py-4">
                            {{  $d->id  }}
                        </td>
                        <td class="px-4 py-4">
                            {{  $d->title  }}
                        </td>
                        <td class="px-4 py-4">
                            {{  $d->name  }}
                        </td>
                        <td class="px-4 py-4">
                            <img src="{{  $d->image  }}" class="w-28" alt="{{  $d->name  }}">
                        </td>
                        <td class="px-4 py-4">
                            {{  $d->description  }}
                        </td>
                        <td class="px-4 py-4 flex justify-around gap-2">
                            <a href="{{  route('directors.show', $d)  }}" class="inline-flex items-center px-4 py-2 bg-sky-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-sky-700 active:bg-sky-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" title="{{  __('messages.Show')  }}"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{  route('directors.edit', $d)  }}" class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 active:bg-green-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" title="{{  __('messages.Edit')  }}"><i class="fa-solid fa-pen-to-square"></i></a>
                            <div wire:click="showModal({{$d->id}})" wire:loading.attr="disabled" class="show_confirm inline-flex items-center px-4 py-2 bg-red-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 active:bg-red-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" title="{{  __('messages.Delete')  }}">
                                <i class="fa-solid fa-trash-can"></i>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr class=" border-b border-gray-200 py-10">
                        <td class="px-4 py-4">
                            No hay registros
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div id="pagination" class="w-full flex justify-center border-t border-gray-100 pt-4 items-center">
            {{  $directors->links()  }}
        </div>
    </div>
    <div>
        <x-jet-confirmation-modal wire:model="showingModal">
            <x-slot name="title">
                ¡Esta accion no se puede deshacer!
            </x-slot>
            <x-slot name="content">
                <p class="my-6 text-xl font-extrabold text-center">Esta seguro que quiere eliminar este Directivo?</p>
            </x-slot>
            <x-slot name="footer">
                <x-jet-secondary-button wire:click="hideModal" wire:loading.attr="disabled">
                    {{ __('messages.Cancel') }}
                </x-jet-secondary-button>
                <x-jet-danger-button class="ml-3" wire:click="delete()" wire:loading.attr="disabled">
                    {{ __('messages.Delete') }}
                </x-jet-danger-button>
            </x-slot>
        </x-jet-confirmation-modal>
    </div>
</div>
