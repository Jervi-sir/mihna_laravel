@if ($messages)
    <ul>
        @foreach ((array) $messages as $message)
            <li style="color: #dc3545">{{ $message }}</li>
        @endforeach
    </ul>
@endif