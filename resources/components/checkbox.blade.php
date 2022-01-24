<div class="my-4">
    <label class="inline-flex items-center cursor-pointer">
        <input id="{{ $name }}" name="{{ $name }}" type="checkbox" value="{{ $value }}" @if(old($name) || $checked) checked @endif
        class="border-gray-800 form-checkbox rounded text-gray-700 ml-1 w-5 h-5 ease-linear transition-all duration-150"/>
        <span class="ml-2 text-sm font-semibold text-gray-600">{!! $label !!}</span>
    </label>
    @include('components.error')
</div>
