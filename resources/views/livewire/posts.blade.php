<div>
        
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <button wire:click="showModal()"class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-4 rounded mb-2">
                        Create Post
                        </button>
                        @if($isOpen)
                            @include('livewire.create')
                            @endif 

                            @if(session()->has('info'))
                            <h1>{{session('info')}}</h1>
                            @endif

                    <table class="table-fixed w-full">
                        <thead class="bg-gray-500">
                            <tr>
                                <th class="px-4 py-2"> No</th>
                                <th class="px-4 py-2"> Tittle</th>
                                <th class="px-4 py-2"> Description</th>
                                <th class="px-4 py-2"> Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td> {{$post->id}} </td>
                                <td> {{$post->title}}</td>
                                <td> {{$post->description}}</td>
                                <td> 
                                    <button wire:click="edit({{$post->id}})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded">
                                    Edit
                                        </button>
                                        <button wire:click="delete({{$post->id}})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-4 rounded">
                                    Delete
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

