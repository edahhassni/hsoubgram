<x-app-layout>
  <div class="grid grid-cols-4">
    {{-- User image --}}
    <div class="px-4 col-span-1 order-1">
      <img src="{{$user->image}}" alt="" class="rounded-full w-20 md:w-40 border border-neutral-300">
    </div>
    {{-- username and buttons --}}
    <div class="px-4 col-span-2 md:ml-0 flex flex-col order-2 md:col-span-3">
      <div class="text-3xl mb-3">{{$user->username}}</div>
        @if ($user->id === auth()->id())
          <a href="/{{$user->username}}/edit" class="w-44  text-sm border font-bold py-1 rounded-md border-neutral-300 text-center">
            {{__('Edit Profile')}}
          </a>
        @endif
    </div>
    {{-- User info --}}
    <div class="text-md px-4 mt-8 col-span-3 col-start-1 order-1 md:col-start-2 md:order-4 md:mt-0">
      <p class="font-bold">{{$user->name}}</p>
      {{$user->bio}}
    </div>
    {{-- User state --}}
    <div class="col-spa-4 my-5 py-3 border-y border-y-neutral-200 order-4 md:order-3 md:border-none md:px-4 md:col-start-2">
      <ul class="text-md flex flex-row justify-around md:justify-start md:space-x-10 md-text-xl">
        <div class="md:mr-1 font-bold md:font-normal">
          {{$user->posts->count()}}
          <span class="text-neutral-500 md:text-black">{{$user->posts->count() > 1 ? 'posts' : 'post'}}</span>
        </div>
      </ul>
    </div>
    {{-- Buttom --}}
    @if ($user->posts->count() > 0 and ($user->private_acount == false or $user->id == auth()->id))
      <div class="grid grid-cols-3 gap-1 my-5">
        @foreach ($user->posts as $post)
          <a href="/{{$post->slug}}" class="aspect-square block w-full">
            <img src="{{asset('storage/' . $post->image)}}" alt="{{$post->description}}" class="aspect-square object-over w-full">
          </a>
        @endforeach
      </div>
    @endif
  </div>
</x-app-layout>