<div>
    <dialog id="AddFileModal" class="modal" wire:ignore.self>
        <div class="modal-box">
            <!-- Header -->
            <div class="flex items-center justify-between">
                <h3 class="text-lg font-bold">Add File</h3>
                <form method="dialog">
                    <button class="btn btn-xs btn-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-x">
                            <path d="M18 6 6 18" />
                            <path d="m6 6 12 12" />
                        </svg>
                    </button>
                </form>
            </div>
            <!-- Body -->
            <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
                x-on:livewire-upload-finish="uploading = false" x-on:livewire-upload-cancel="uploading = false"
                x-on:livewire-upload-error="uploading = false"
                x-on:livewire-upload-progress="progress = $event.detail.progress">
                <!-- Progress Bar -->
                <div x-show="uploading">
                    <progress max="100" x-bind:value="progress"></progress>
                </div>
                <form wire:submit='store' class="mt-4">
                    <div class="mb-2">
                        <label for="title">Title</label>
                        <input type="text" wire:model='title' placeholder="Type here" class="w-full input" />
                        @error('title')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="">Image</label>
                        <input type="file" accept="image/png,image/jpeg,image/jpg,image/gif" wire:model='image'
                            class="w-full file-input file-input-bordered" />
                        @error('image')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                        @if ($image)
                        <img src="{{ $image->temporaryUrl() }}" class="object-contain w-full my-2 rounded-md">
                        @endif
                    </div>
                    <div class="mb-2">
                        <button class="w-full btn btn-warning">Submit</button>
                    </div>
                </form>
            </div>



        </div>
    </dialog>
</div>