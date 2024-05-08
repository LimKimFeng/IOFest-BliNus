<div class="mt-5">
    <input class="border focus:outline-none focus:border-gray-600 border-gray-400 rounded-sm py-1 px-2 w-full" type="{{ $type }}" name="{{ $name }}" id="{{ $id }}" value="{{$value}}" placeholder="{{ $placeholder }}" required>
    @if($errorType !== 'none')
        @if ($errors->has($errorType))
            <label for="{{ $name }}" class="text-red-500 p-0 m-0 text-sm">
                {{ $errors->first($errorType) }}
            </label>
        @endif
    @endif
</div>

