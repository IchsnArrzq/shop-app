@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-base-content']) }}>
        {{ $status }}
    </div>
@endif
