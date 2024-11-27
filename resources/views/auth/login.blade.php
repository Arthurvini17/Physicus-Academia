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
        <form action="{{route('auth_login')}}" method="POST">
            @csrf
            <div>
                <label for="name_funcionario">Nome Do Funcionario</label>
                <input type="text" name="name_funcionario" id="name_funcionario">
                @error('name_funcionario')
                <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="email">Email Do Funcionario</label>
                <input type="email" name="email" id="email">
                @error('email')
                <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="password">Senha Do Funcionario</label>
                <input type="password" name="password" id="password">
                @error('password')
                <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <button type="submit">Logar</button>
            </div>
        </form>
    </div>
</body>

</html>