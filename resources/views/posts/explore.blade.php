<x-app-layout>
<<<<<<< HEAD
    <div class="grid grid-cols-3 gap-1 sm:cols-1 md:gap-5 mt-5">
        @foreach ($posts as $post)
            <a href="/p/{{ $post->slug }}">
                <img src="{{ $post->image }}" class="w-full acpect-square object-cover" alt="">
            </a>
        @endforeach
    </div>
    <div class="mt-3">
        {{ $posts->Links() }}
    </div>
</x-app-layout>
=======
  <div class="grid grid-cols-3 gap-1 sm:cols-1 md:gap-5 mt-5">
    @foreach ($posts as $post)
      <a href="/p/{{$post->slug}}">
        <img src="{{asset('storage/' . $post->image)}}" class="w-full acpect-square object-cover" alt="">
      </a>
    @endforeach
  </div>
  <div class="mt-3">
    {{$posts->Links()}}
  </div>
</x-app-layout>
>>>>>>> 5365170645c1f86bb5fb86046685c546c0b97044
