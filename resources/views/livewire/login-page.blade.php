<div>

    {{-- make a login page using tailwind css and livewire --}}


    <div class="flex justify-center items-center h-screen bg-gray-200">
        <div class="bg-white rounded shadow p-6 m-4 w-1/3">
            <h2 class="text-2xl font-bold mb-2">Login</h2>
            <form wire:submit.prevent="login">
                <div class="mb-4">
                    <label for="email" class="block mb-2 text-sm font-bold text-gray-700">Email</label>
                    <input type="email" wire:model="email" class="border border-gray-400 p-2 w-full" />
                    @error('email')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="block mb-2 text-sm font-bold text-gray-700">Password</label>
                    <input type="password" wire:model="password" class="border border-gray-400 p-2 w-full" />
                    @error('password')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <input type="checkbox" wire:model="remember" class="mr-1" />
                    <label for="remember" class="text-sm font-bold text-gray-700">Remember Me</label>
                </div>
                <div class="flex justify-between items-center">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Login</button>
                    <a href="#" class="text-sm text-blue-500 hover:text-blue-600">Forgot Password?</a>
                </div>
                @if (session()->has('error'))
                    @include('livewire.components.alert', ['message' => session('error')])
                @endif

            </form>
        </div>
    </div>
</div>
