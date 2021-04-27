<div class="max-w-6xl mx-auto sm:px-6 lg:px-8 mt-10">
<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
                <button wire:click="munculModal()"class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-4 rounded mb-2">
                        Create Post
                        </button>
                        @if($isOpen)
                            @include('livewire.creategateball')
                            @endif 

                            @if(session()->has('info'))
                            <h1>{{session('info')}}</h1>
                            @endif
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Nama
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Umur
              </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                No Hp
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Jabatan
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Action
              </th>
              {{-- <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Role
              </th> --}}
              <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Edit</span>
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($gateballs as $g)
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                    <div class="text-sm font-medium text-gray-900">
                      {{$g->nama}}
                    </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{$g->umur}}</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
              <div class="flex items-center">
                    <div class="text-sm font-medium text-gray-900">
                      {{$g->no_hp}}
                    </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-left text-sm font-medium">
                <a href="#" class="text-indigo-600 hover:text-indigo-900">{{$g->jabatan}}</a>
              </td>
              <td> 
              <button wire:click="edit({{$g->id}})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded">
                Edit
              </button>
              <button wire:click="delete({{$g->id}})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-4 rounded">
              Delete
              </button>
              </td>
            </tr>
              @endforeach

            <!-- More people... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>