<html>
    @include('components.header')
    <body>
        <a href="{{ route('menus.create') }}">Novo Cardápio</a>
        <h1>Seja bem-vindo!</h1>
        <h2>Confira abaixo nossos cardápios disponíveis.</h2>
        @foreach($menus as $menu)
            <div>
                <a href="/menu/view/{{ $menu->id }}">{{ $menu->title }}</a>
                -
                <a href={{ route('menus.edit', $menu->id) }}>[Editar]</a>
                <a href={{ route('menus.destroy', $menu->id) }}>[Excluir]</a>
            </div>
        @endforeach
    </body>
</html>