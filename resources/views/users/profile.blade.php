<x-app-layout>
  <div class="{{ session('success') ? '' : 'hidden' }} w-50 p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg absolute right-10 shadow shadow-neutral-200"
      role="alert">
      <span class="font-medium">{{ session('success') }}</span>
  </div>
  <div class="grid grid-cols-4">
      {{-- User image --}}
      <div class="px-4 col-span-1 order-1">
          <img src="{{ $user->image }}" alt="" class="rounded-full w-20 md:w-40 border border-neutral-300">
      </div>
      {{-- username and buttons --}}
      <div class="px-4 col-span-2 md:ms-0 items-center flex flex-row order-2 md:col-span-3">
          <div class="text-3xl my-10">{{ $user->username }}</div>
          <div class="ms-3 my-10">
            @auth
                @if ($user->id == auth()->id())
                    <a href="/{{ $user->username }}/edit"
                        class="w-50 px-5  text-sm border font-bold py-1 rounded-md border-neutral-300 text-center">
                        {{ __('Edit Profile') }}
                    </a>
                @else
                <livewire:follow-button  :userId="$user->id" btnStyle="bg-blue-500 rounded text-white"/>

                @endif
            @endauth
            @guest
                <a href="/{{ $user->username }}/follow"
                    class="w-30  bg-blue-400 text-white px-3 py-1 rounded text-center self-start">
                    {{ __('Follow') }}
                </a>
            @endguest
          </div>
      </div>
      {{-- User info --}}
      <div class="text-md px-4 mt-8 col-span-3 col-start-1 order-1 md:col-start-2 md:order-4 md:mt-0">
          <p class="font-bold">{{ $user->name }}</p>
          {{ $user->bio }}
      </div>
      {{-- User state --}}
      <div
          class="col-span-4 my-5 py-3 border-y border-y-neutral-200 order-4 md:order-3 md:border-none md:px-4 md:col-start-2">
          <ul class="text-md flex flex-row justify-around md:justify-start md:space-x-10 md-text-xl">
            <li class="flex flex-col md:flex-row text-center">
                <div class="md:mr-1 font-bold md:font-normal">
                    {{ $user->posts->count() }}
                    <span
                        class="text-neutral-500 md:text-black">{{ $user->posts->count() > 1 ? 'posts' : 'post' }}</span>
                </div>
            </li>

            <li class="flex flex-col md:flex-row text-center">
                <div class="md:mr-1 font-bold md:font-normal">
                    {{ $user->followers->count() }}
                    <button onclick="Livewire.emit('openModal',  'follow-modal') class="text-neutral-500 md:text-black">{{$user->followers->count() > 1 ? __('followers') : __('follower') }}</button>
                </div>
            </li>

              <livewire:following :userId="$user->id"/>

          </ul>
      </div>
  </div>
  {{-- Buttom --}}

  @if ($user->posts()->count() > 0 and ($user->private_account == false or auth()->id() == $user->id or ( auth()->user() and auth()->user()->is_following($user))))
      <div class="grid grid-cols-3 gap-1 my-5">
          @foreach ($user->posts as $post)
              <a href="/p/{{ $post->slug }}" class="aspect-square  w-full">
                  <img src="{{ $post->image }}" alt="{{ $post->description }}"
                      class="aspect-square object-over w-full">
              </a>
          @endforeach
      </div>
  @else
      <div class="w-full text-center mt-20">
          @if ($user->private_account == true and $user->id != auth()->id())
              {{ __('This Account is Private Follow to see their photos.') }}
          @else
              {{ __('This user doesnt have any post') }}
          @endif
      </div>

  @endif

</x-app-layout>
