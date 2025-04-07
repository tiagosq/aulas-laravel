<html>
    @include('components.header')
    <body>
        <h1>Cardápio: {{ $id }}</h1>
        <span>Acessado em: {{ $visited_at }}</span>
        <a href="/">Voltar</a>

        @if(isset($options) && count($options) > 0)
            <h2>Listando pratos disponíveis.</h2>
        @endif

        @forelse($options as $option) 
            <div>{{ $option }}</div>
        @empty
            <p>Infelizmente não possuímos nenhum prato disponível</p>
        @endforelse
    </body>
</html>