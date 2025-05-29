<x-layouts.app>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Inserindo Dependentes</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>

    <div>
        <h1 class="title">Cadastre um dependente!</h1>
          </div>
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
 


            <label for='nome' >Nome</label>
            <input type="text" id="nome" name="nome"  value="" placeholder="Nome..." required>
            <label for='telefone' >Telefone</label>
            <input type="text" id="nome" name="telefone"  value="" placeholder="Número" required>
            <label for='endereco' >Endereço</label>
            <input type="text" id="nome" name="endereco"  value="" placeholder="Endereço" required>
            <label for='email' >E-Mail</label>
            <input type="text" id="nome" name="email"  value="" placeholder="Seu E-mail" required>



 




        <button type="submit">></button>

    </form>


</body>
</html>
</x-layouts.app>