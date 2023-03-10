<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
</head>
<body class="bg-gray-600 pt-10">
    <div class="object-left-top">
        <form action="/signout">
            <input class="text-white bg-primary-600 over:bg-white focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-black dark:hover:bg-primary-700 dark:focus:ring-primary-800"type="submit" value="Sair"/>
        </form>
    </div> 
    <div class="max-w-5x1 mx-auto flex flex-col justify-center items-center pt-10">
        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-4xl dark:text-gray-1200 pt-15"> Olá, {{ $names[0]->name }} !</h1>
        <p class="text-transparent" >p</p>
        <h2 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white"> Seus pedidos: </h1>
    </div>
    <div>
        
        <div>
            @foreach($posts as $post)
                <p class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-4xl dark:text-black">{{$post->title}}: </p>
                <p class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-black">{{$post->content}} </p>
            @endforeach
        </div>           
    </div>
        
</body>
</html>