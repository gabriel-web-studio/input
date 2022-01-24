<div class="mb-3 w-full @if($label == '') pt-4 @endif">
    @include('components.label')
    <input id="{{ $name }}" name="{{ $name }}" type="{{ $type }}" @if($type == "number") step="any" @endif placeholder="{{ $placeholder }}" value="{{ old($name) ?? $value}}" @if($readonly) readonly="readonly" @endif
    class="p-2 border border-gray-800 @if(config('input.dark_mode')) bg-gray-900 text-gray-400 @else bg-white text-gray-800 @endif @if($readonly) cursor-not-allowed @endif rounded text-sm shadow focus:outline-none w-full ease-linear transition-all duration-150"/>
    @include('components.error')
</div>
