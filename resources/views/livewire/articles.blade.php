<div>
    <h1>{{ __("Listado de Articulos") }}</h1>
    <a href="{{ route('articles.create') }}">{{ __("Crear") }}</a>
    <br>
    <input
        wire:model="search"
        type="search"
        placeholder="{{ __('Buscar') }}..."
    >

    <ul>
        @foreach ($articles as $article)
            <li>
                <a href="{{ route('articles.show', $article) }}">
                    {{ $article->title }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
