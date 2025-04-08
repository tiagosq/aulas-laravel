<html>
    @include('components.header')
    <body>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <form action="{{ route('meals.store') }}" method="POST">
            <!-- CSRF é um token oculto para representar a validade do formulário -->
            @csrf 
            <input type="hidden" name="menu_id" value="{{ $id }}" />
            <input type="text" name="name" placeholder="Name" required>
            <input type="text" name="price" placeholder="0.00" pattern="[0-9]{2}.[0-9]{2}" />
            <textarea name="description" placeholder="Description"></textarea>
            <button type="submit">Salvar</button>
        </form>
    </body>
</html>