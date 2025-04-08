<html>
    @include('components.header')
    <body>
        <h1>Cardápio: {{ $id }}</h1>
        <span>Acessado em: {{ $visited_at }}</span>
        <a href="/">Voltar</a>
        <a href="{{ route('meals.create', [$id]) }}">
            Novo prato
        </a>

        @if(isset($options) && count($options) > 0)
            <h2>Listando pratos disponíveis.</h2>
        @endif

        @forelse($options as $option) 
            <div>
                <p><b>{{ $option['name'] }}</b> - R${{ $option['price'] }}</p>
                <span>{{ $option['description'] }}</span>
            </div>
        @empty
            <p>Infelizmente não possuímos nenhum prato disponível</p>
        @endforelse
    </body>
</html>