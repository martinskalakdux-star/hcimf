<x-layout>
    <h1>Programy</h1>
    <ul>
        @foreach ($programs as $program)
            <li><a href="{{ route('program', ['program' => $program]) }}">{{ $program->title }}</li></a>
        @endforeach
    </ul>
</x-layout>
