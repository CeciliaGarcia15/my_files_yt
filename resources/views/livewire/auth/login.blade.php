<div>
    <div class="flex items-center justify-center h-screen">
        <form class="w-[500px]" wire:submit="login">
            <x-common.alert />
            <div class="flex items-center justify-between my-2">
                <div>
                    <h1 class="text-2xl font-bold">Login</h1>
                    <p>Welcome back to My Files cloud.</p>
                </div>
                <x-common.themeSwitch />

            </div>
            <div class="mb-2">
                <label for="email">Email</label>
                <input type="email" wire:model='email' placeholder="Type here" class="w-full input input-bordered" />
                @error('email')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-2">
                <label for="password">Password</label>
                <input type="password" wire:model='password' placeholder="Type here"
                    class="w-full input input-bordered" />
                @error('password')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-2">
                <button class="w-full btn btn-warning">Submit</button>
            </div>
            <p class="text-center">-- OR --</p>
            <p class="text-center">Don't have an account ? <a wire:navigate class="font-bold text-warning"
                    href="{{route('register')}}">Register</a>
            </p>
        </form>
    </div>
</div>