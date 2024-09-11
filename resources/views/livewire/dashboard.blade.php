<div>
    <div class="flex flex-col items-center justify-center px-2">
        <input type="email" wire:model.live='search' placeholder="Type here"
            class="mb-4 w-96 input input-bordered rounded-2xl" />
        <div class="grid grid-cols-1 gap-2 md:grid-cols-2 xl:grid-cols-3">
            @if (count($files) > 0)
            @foreach ($files as $key => $file )
            <div class="shadow-xl card card-compact bg-base-100 w-96">
                <a href="{{route('show.file',['id'=>$file->id])}}" wire:navigate>
                    <figure>
                        <img src="{{asset('storage/'.$file->image)}}" alt="File" class="object-cover w-full h-52" />
                    </figure>
                </a>
                <div class="card-body">
                    <h2 class="card-title">{{$file->title}}</h2>
                    <p>{{$file->created_at->format('d-m-Y h:m:s a')}}</p>
                    <div class="justify-end card-actions">
                        <livewire:files.delete-file :id="$file->id" :key="$key" />
                    </div>
                </div>
            </div>
            @endforeach

            @else
            <p>No Files Found</p>
            @endif
        </div>
    </div>
    <div class="px-10 text-center lg:px-32">
        {{$files->links('pagination::tailwind')}}
    </div>
</div>