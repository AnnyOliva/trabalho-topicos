<x-layouts.app>
    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <div class="container">
        <div class="header">
            <h1>Avaliações</h1>
            <a href="{{ route('clientes.create') }}" class="btn">etc</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Disciplina</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @if ($clientes -> isEmpty())
                <p> não tem </p>
                @else
                @foreach ($clientes as $clientes) 
                    <tr>
                        <td>{{ $clientes->nome }}</td>
                        <td>{{ $clientes->telefone }}</td>
                        <td>{{ $clientes->endereco }}</td>
                        <td>{{ $clientes->email }}</td>
                        {{--<td>{{ $avaliacao->disciplina->nome ?? '-' }}</td>--}}
                        {{--<td>
                            <a href="{{ route('avaliacoes.edit', $avaliacao) }}" class="link yellow">Editar</a> {{-- Para acessar a rota Edit, é necessario passar o ID da avaliação 
                            <form action="{{ route('avaliacoes.destroy', $avaliacao) }}" method="POST" class="inline"> {{-- Para acessar a rota destroy, é necessario passar o ID da avaliação 
                                @csrf
                                @method('DELETE')
                                <button class="link red" onclick="return confirm('Deseja excluir esta avaliação?')">Excluir</button>
                            </form>
                        </td>--}}
                    </tr>
                
                    <tr>
                        <td colspan="3" class="text-center">Nenhuma avaliação cadastrada.</td>
                    </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</x-layouts.app>
