<x-layout>
    <h1>Claneky</h1>
    <ul>
        @foreach ($articles as $article)
            <li><a href="{{ route('article', ['news' => $article]) }}">{{ $article->title }}</li></a>
        @endforeach
    </ul>
</x-layout>
