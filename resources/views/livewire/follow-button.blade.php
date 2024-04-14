<div>

  @if ($follow_state == 'Pending')
    <span class="w-30 cursor-pointer bg-gray-400 text-white text-sm font-bold py-1 px-3 text-center rounded">{{ __($follow_state) }}</span>
  @else
    <button wire:click="toggle_follow" 
    class="{{$btnStyle}} w-30  font-bold text-sm px-3 py-1 text-center">
      {{ __($follow_state) }}
    </button>
  @endif
</div>