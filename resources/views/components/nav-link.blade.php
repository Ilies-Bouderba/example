@props(['active' => false, 'type'])
{{-- by default the active value is false --}}
@php if ($type == "a") { @endphp
        <a {{ $attributes }} class="rounded-md px-3 py-2 text-sm font-medium {{ $active ? 'text-white bg-gray-900' : 'text-gray-300'}}" aria-current="page">
            {{ $slot }}
        </a> 
    @php }else if($type == "button") { @endphp
        <button>{{ $slot }}</button>
    @php } @endphp


