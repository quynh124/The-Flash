<a onclick="{{$onclick}}" id="button-component" class="{{ $type }} {{ $classes }}" data-toggle="{{ $dataToggle }}" data-target="{{ $dataTarget }}">
    <span class="text">
        @if (strstr($text, "icon:"))
            <img style="position: relative; right: 0; top: 0;" class="svg-icon" src="{{ substr($text, 5) }}" alt="SVG Icon">
        @else
           {{ $text }}
        @endif
    </span>
</a>