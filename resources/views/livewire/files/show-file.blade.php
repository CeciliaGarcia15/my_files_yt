<div>
    <div class="px-10 lg:px-32">
        <p class="text-2xl font-bold">{{$file->title}}</p>
        <p class="text-sm">{{$file->created_at->format('d-m-Y h:m:s a')}}</p>
        <img class="object-contain w-full mt-4 rounded-lg" src="{{asset('storage/'.$file->image)}}"
            alt="{{$file->title}}">
    </div>
</div>