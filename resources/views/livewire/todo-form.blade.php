<div>
    <div class="container content py-6 mx-auto">
        <div class="mx-auto">
            <div id="create-form" class="hover:shadow p-6 bg-white border-t-2 border-blue-500">
                <div class="flex ">
                    <h2 class="font-semibold text-lg text-gray-800 mb-5">Criar nova tarefa</h2>
                </div>
                <div>
                    <form>
                        <div class="mb-3">
                            <label for="title" class="block  text-sm font-medium text-gray-900">*
                                Título da tarefa </label>
                            <input type="text" wire:model='title' id="title" placeholder="Tarefa.."
                                class="bg-gray-100 text-gray-900 text-sm rounded block w-full p-2.5">
                            @error('title')
                                <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
                            @enderror

                        </div>

                        <div class="mb-6">
                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900">
                                Descrição </label>
                            <textarea type="text" rows="5" wire:model='description'wire:model='description' id="description"
                                placeholder="Descrição.." class="bg-gray-100 text-gray-900 text-sm rounded block w-full p-2.5">
                            </textarea>

                            @error('description')
                                <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
                            @enderror

                        </div>
                        <button type="submit" wire:click.prevent="addTodo"
                            class="px-4 py-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600">Criar
                            +</button>
                        <div class="row">
                            @if (session()->has('success'))
                                <span class="text-green-500 text-xs">{{ session('success') }}</span>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
