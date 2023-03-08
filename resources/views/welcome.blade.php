<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
    </head>
    <body class="bg-gradient-to-r from-red-500 to-blue-700 pt-20">
        <div class="max-w-5x1 mx-auto flex flex-col justify-center items-center">
            <h1 class="antialiased text-9xl text-white decoration-solid"> Bem vindo </h1>
            <h2 class="antialiased text-2xl text-white decoration-solid"> Faça Login para continuar </h2>
            <form class="bg-blue-500 shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post" action="#">
                @csrf
                    <!-- Email Address -->
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email" >
                            E-mail
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                        
                    </div>
                    <!-- Password -->
                    <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password" >
                        Senha
                    </label>
                        <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" 
                            id="password"
                            type="password"
                            name="password"
                            required autocomplete="current-password" placeholder="******************">
                        
                    </div>
                    <div class="flex items-center justify-between">
                    
                        <div class="flex items-center justify-end mt-4">
                            <button class="ml-3">
                                {{ __('Log in') }}
                            </button>
                        </div>
                        @if (Route::has('password.request'))
                                <a class="inline-block align-baseline font-bold text-sm text-black-500 hover:text-black-800" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                        @endif
                    </div>
                    <div>
                        <a class="inline-block align-baseline font-bold text-sm text-black-500 hover:text-black-800" href="/login">
                            Não tem conta ainda ? Cadastre-se
                        </a>
                    </div>
                </form>
        </div>
    </body>
</html>
