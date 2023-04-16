@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-50 color-green']) }}>
        {{ $status }}
    </div>
@endif
