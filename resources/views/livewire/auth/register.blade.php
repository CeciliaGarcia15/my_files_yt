<div>
    <div class="flex items-center justify-center h-screen">
        <form action="" class="w-[500px]" wire:submit='register'>
            <div class="flex items-center justify-between mb-2">
                <div>
                    <h1 class="text-2xl font-bold">Register</h1>
                    <p>Welcome to My Files cloud.</p>
                </div>

                <x-common.themeSwitch />
            </div>
            <div class="mb-2">
                <label for="email">Email</label>
                <input type="email" wire:model='email' placeholder="Type here" class="w-full input input-bordered" />
                @error('email')
                <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-2">
                <label for="name">Name</label>
                <input type="text" wire:model='name' placeholder="Type here" id="name"
                    class="w-full input input-bordered" />
                @error('name')
                <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-2">
                <label for="password">Password</label>
                <input type="password" wire:model='password' placeholder="Type here"
                    class="w-full input input-bordered" />
                @error('password')
                <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-2">
                <label for="password">Confirm Password</label>
                <input type="password" wire:model='password_confirmation' placeholder="Type here"
                    class="w-full input input-bordered" />
            </div>
            <div class="mb-2">
                <button class="w-full btn btn-warning">Submit</button>
            </div>
            <p class="text-center">-- OR --</p>
            <p class="text-center">Already have an account ? <a wire:navigate class="font-bold text-warning"
                    href="{{route('login')}}">Login</a>
            </p>
        </form>
    </div>
</div>