@if($label !== null || $tip !== null)
    <div class="flex @if($label === null && $tip !== null) justify-end @else justify-between @endif">
        @if($label !== null)
            <label for="{{ $name }}" class="block uppercase @if(config('input.dark_mode')) text-gray-400 @else text-gray-800 @endif text-xs font-bold mb-2">
                {!! $label !!} @if($required) <span class="text-red-500">*</span> @endif
            </label>
        @endif
        @if($tip !== null)
            <div class="@if(config('input.dark_mode')) text-gray-400 @else text-gray-800 @endif text-xs mb-2 pr-2">
                {!! $tip !!}
            </div>
        @endif
    </div>
@endif
