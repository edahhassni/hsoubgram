<x-app-layout>
    <div class="h-screen md:flex md:flex-row mt-10">
        {{-- Left Side --}}
        <div class="h-full md:w-7/12 bg-black flex items-center">
            <img src="/{{ $post->image }}" class="max-h-screen object-cover mx-auto" alt="{{ $post->description }}">
        </div>
        {{-- Right Side --}}
        <div class="flex w-full flex-col bg-white md:w-5/12">
            {{-- Top --}}
            <div class="border-b-2">
                <div class="flex items-center p-5">
                    <img src="{{ $post->owner->image }}" alt="" class="me-5 h-10 w-10 rounded-full">
                    <div class="grow">
                        <a href="/{{ $post->owner->username }}">{{ $post->owner->username }}</a>
                    </div>
                    @can('update', $post)
                        <a href="/p/{{ $post->slug }}/edit"><i class='bx bx-message-square-edit text-3xl'></i></a>
                        <form action="/p/{{ $post->slug }}/delete" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')">
                                <i class='bx bx-message-x ml-1 text-3xl text-red-600'></i>
                            </button>
                        </form>
                    @endcan
                    @cannot('update', $post)
                        <livewire:follow-button :post="$post" :userId="$post->owner->id" btnStyle="text-blue-500"/>
                    @endcannot
                </div>
            </div>
            {{-- Middle --}}
            <div class="grow overflow-y-auto">
                <div class="flex items-start p-5">
                    <img src="{{ $post->owner->image }}" alt="" class="me-5 h-10 w-10 rounded-full">
                    <div>
                        <a href="">{{ $post->owner->username }}</a>
                        {{ $post->description }}
                    </div>
                </div>
                {{-- Comments --}}
                <div>
                    @foreach ($post->comments as $comment)
                        <div class="flex items-start px-5 py2">
                            <img src="{{ $comment->owner->image }}" alt=""
                                class="h-100 me-5 w-10 rounded-full">
                            <div class="flex flex-col">
                                <div>
                                    <a href="/{{ $comment->owner->username }}">{{ $comment->owner->username }}</a>
                                    {{ $comment->body }}
                                </div>
                                <div class="mt-1 text-sm font-bold text-gray-400">
                                    {{ $comment->created_at->shortAbsoluteDiffForHumans() }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="p-3 border-t flex flex-row">
                <livewire:like :post="$post" />
                <a class="grow" onclick="document.getElementById('comment_body').focus()">
                    <i class="bx bx-comment text-xl hover:text-gray-400 curser-pointer me-3"></i>
                </a>
            </div>
            <livewire:likedby :post="$post" />
            {{-- Bottom --}}
            <div class="p-5 border-t-2">
                <form action="/p/{{ $post->slug }}/comment" method="POST">
                    @csrf
                    <div class="flex flex-row">
                        <textarea name="body" id="comment_body" placeholder="Add a Comment..."
                            class="h-10 grow resize-none overflow-hidden border-none bg-none p-0 placeholder-gray-400 outline-0 focus:ring-0"
                            cols="30" rows="10"></textarea>
                        <button class="ms-5 border-none bg-white text-blue-500">Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
