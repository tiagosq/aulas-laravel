<html>
    @include('components.header')
    <body>
        <form action="{{ route('menus.update', $menu->id) }}" method="POST">
            @csrf
            <input type="text" name="title" placeholder="Title" value={{ $menu->title }} required>
            <textarea name="description" placeholder="Description">
                {{ $menu->description }}
            </textarea>
            <button type="submit">Salvar</button>
        </form>
    </body>
</html>