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
            <form class="space-y-4 md:space-y-6" method="post" action="#">
                @csrf
                    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto lg:py-0">
                        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                                <!-- Email Address -->
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="email" >
                                        E-mail
                                    </label>
                                    <input class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                                    
                                </div>
                                <!-- Password -->
                                <div class="mb-6">
                                <label class="block text-white text-sm font-bold mb-2" for="password" >
                                    Senha
                                </label>
                                    <input class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                                        id="password"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" placeholder="******************">
                                    
                                </div>
                                <div class="flex items-center justify-between">
                                
                                    <div class="flex items-center justify-end mt-4">
                                    <button type="submit" class="w-full text-white bg-blue-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Login</button>
                                    </div>
                                    @if (Route::has('password.request'))
                                            <a class="inline-block align-baseline font-bold text-sm text-black-500 hover:text-black-800" href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                    @endif
                                </div>
                                <div>
                                    <a class="inline-block align-baseline font-bold text-sm text-white hover:text-black-800" href="/login">
                                        Não tem conta ainda ? Cadastre-se
                                    </a>
                            </div>
                        </div>
                    </div>
                    </div>
                </form>
        </div>
    </body>
</html>
