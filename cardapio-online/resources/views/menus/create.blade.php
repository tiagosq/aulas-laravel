<html>
    @include('components.header')
    <body>
        <form action="{{ route('menus.store') }}" method="POST">
            @csrf
            <input type="text" name="title" placeholder="Title" required>
            <textarea name="description" placeholder="Description"></textarea>
            <button type="submit">Salvar</button>
        </form>
    </body>
</html>