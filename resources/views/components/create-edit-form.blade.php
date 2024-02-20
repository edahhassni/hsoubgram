
<input type="file" name="image" id="file_input" value="" class="w-full border border-gray-200 bg-gray-50 block focus:outline-none rounded-xl">
<p class="text-sm mt-2 text-gray-500 dark:text-gray-300" id="file_input_help">PNG,JPG or GIF.</p>
<textarea name="description" id=""  rows="5" class="w-full border border-gray-200 rounded-xl mt-10" placeholder="{{__('Write a description')}}">
{{$post->description ?? '' }}
</textarea>