<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>Document</title>
</head>

<body>

    <div>

        <div>
            <form action="{{route('register_user')}}" method="post">
                @csrf
                <div>
                    <label for="name">Nome Do Aluno</label>
                    <input type="text" name="name_funcionario" id="name">
                </div>

                <div>
                    <label for="email">Email Do Usuario</label>
                    <input type="email" name="email" id="email">
                </div>

                <div>
                    <label for="password">Senha do funcionario</label>
                    <input type="password" name="password" id="password">
                </div>
                <div>
                    <button type="submit">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>