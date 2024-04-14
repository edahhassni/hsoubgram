<div class="card">
<<<<<<< HEAD
    <div class="card-header">
        <img src="{{ $post->owner->image }}" alt="{{ $post->owner->username }}" class="h-9 w-9 mr-3 rounded-full">
        <a href="/{{ $post->owner->username }}" class="font-bold">{{ $post->owner->username }}</a>
    </div>
    <div class="card-body">
        <div class="max-h-[35rem] overflow-hidden">
            <a href="/p/{{ $post->slug }}">
                <img src="/{{ $post->image }}" class="h-auto w-full object-cover" alt="{{ $post->description }}">
            </a>
        </div>
        <div class="p-3 flex flex-row">
            <livewire:like  :post="$post"/>
            <a href="/p/{{ $post->slug }}" class="grow">
                <i class="bx bx-comment text-xl hover:text-gray-400 curser-pointer me-3"></i>
            </a>
        </div>
        <div class="p-3">
            <a href="/{{ $post->owner->username }}" class="font-bold mr-1">{{ $post->owner->username }}</a>
            {{ $post->description }}
        </div>
        @if ($post->comments()->count() > 0)
            <a href="/p/{{ $post->slug }}" class="p-3 font-bold text-sm text-gray-500">
                {{ __('View all ' . $post->comments()->count() . ' comments') }}
            </a>
        @endif
        <div class="p-3 text-gray-400 uppercase text-xs">
            {{ $post->created_at->DiffForHumans() }}
        </div>
        <div class="card-footer">
            <form action="/p/{{ $post->slug }}/comment" method="POST">
                @csrf
                <div class="flex flex-row">
                    <textarea name="body" id="comment_body" placeholder="Add a Comment..." autocomplete="off"
                        class="max-h-60 h-5  resize-none overflow-hidden border-none bg-none p-0 placeholder-gray-400 outline-0 focus:ring-0"
                        cols="30" rows="10"></textarea>
                    <button type="submit" class="bg-white border-none text-blue-500 ms-auto ">{{ __('POST') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
=======
  <div class="card-header">
    <img src="{{$post->owner->image}}" alt="{{$post->owner->username}}" class="h-9 w-9 mr-3 rounded-full">
    <a href="/{{$post->owner->username}}" class="font-bold">{{$post->owner->username}}</a>
  </div>
  <div class="card-body">
    <div class="max-h-[35rem] overflow-hidden">
      <a href="/p/{{$post->slug}}"><img src="{{asset('storage/' . $post->image)}}" class="h-auto w-full object-cover" alt="{{$post->description}}"></a>
    </div>
    <div class="p-3">
      <a href="/{{$post->owner->username}}" class="font-bold mr-1">{{$post->owner->username}}</a>
      {{$post->description}}
    </div>
      @if($post->comments()->count() > 0)
      <a href="/p/{{$post->slug}}" class="p-3 font-bold text-sm text-gray-500">
        {{__('View all ' . $post->comments()->count() . ' comments')}}
      </a>
      @endif
      <div class="p-3 text-gray-400 uppercase text-xs">
        {{$post->created_at->DiffForHumans()}}
      </div>
      <div class="card-footer">
        <form action="/p/{{$post->slug}}/comment" method="POST">
          @csrf
          <textarea name="body" id="comment_body" placeholder="Add a Comment..." autocomplete="off" class="max-h-60 h-5 grow resize-none overflow-hidden border-none bg-none p-0 placeholder-gray-400 outline-0 focus:ring-0" cols="30" rows="10"></textarea>
          <button type="submit" class="bg-white border-none text-blue-500 ml-auto">{{__('POST')}}</button>
        </form>
      </div>
  </div>
</div>
>>>>>>> 5365170645c1f86bb5fb86046685c546c0b97044
