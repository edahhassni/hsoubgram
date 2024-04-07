<div>
    <a wire:click="toggle_like">
        
        @if ($post->liked(auth()->user()))
            <i class="bx bxs-heart  text-red-600 text-xl hover:text-gray-400 curser-pointer me-3"></i>
        @else
            <i class="bx bx-heart text-xl hover:text-gray-400 curser-pointer me-3"></i>
        @endif
    </a>
</div>