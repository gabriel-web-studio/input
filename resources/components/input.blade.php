<div>
    <div class="flex justify-between">
        <label for="{{ $id }}">{{ $label }}</label>
        @if($tip !== null)<span>{!! $tip !!}</span>@endif
    </div>
    <input type="{{ $type }}" id="{{ $id }}" name="{{ $name }}" placeholder="{{ $placeholder }}">
</div>
