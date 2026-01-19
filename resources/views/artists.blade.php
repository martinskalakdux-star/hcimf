<x-layout>
    <h1>Claneky</h1>
    <ul>
        @foreach ($artists as $artist)
            <li><a href="{{ route('artist', ['artist' => $artist]) }}">{{ $artist->name }}</li></a>
        @endforeach
    </ul>
</x-layout>
