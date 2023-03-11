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
    <div class="object-center-top">
        <?php if($message = Session::get("success")): ?>
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                <div class="flex">
                    <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                        <div>
                            <button onClick="window.location.reload();" type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>
                                <?php echo session()->get('success'); ?>

                            </strong>
                        </div>
                    </div>
                </div> 
            </div>
        <?php endif; ?>
    </div>
    <div class="max-w-5x1 mx-auto flex flex-col justify-center items-center pt-10">
        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-4xl dark:text-gray-1200 pt-15"> Olá, <?php echo e($names[0]->name); ?> !</h1>
        <p class="text-transparent" >p</p>
        <h2 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white"> Criar novo pedido </h2>
    </div>
    <div>
        <div>
            <form class="space-y-4 md:space-y-6" method="post">
                <?php echo csrf_field(); ?>
                <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto lg:py-0">
                    <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                            <!-- Email Address -->
                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="title" >
                                    Título
                                </label>
                                <input class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="title" type="title" name="title">
                                
                            </div>
                            <!-- Password -->
                            <div class="mb-6">
                            <label class="block text-white text-sm font-bold mb-2" for="password" >
                                Conteudo
                            </label>
                                <input class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                                    id="content"
                                    type="text"
                                    name="content">
                                
                            </div>
                            <div class="flex items-center justify-between">
                            
                                <div class="flex items-center justify-end mt-4">
                                    <button type="submit" class="w-full text-white bg-blue-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Cadastrar pedido</button>
                                </div>
                                <?php if(Route::has('password.request')): ?>
                                        <a class="inline-block align-baseline font-bold text-sm text-black-500 hover:text-black-800" href="<?php echo e(route('password.request')); ?>">
                                            <?php echo e(__('Forgot your password?')); ?>

                                        </a>
                                <?php endif; ?>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </form>
        <div>
        <h2 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white"> Seus pedidos </h2>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-4xl dark:text-black"><?php echo e($post->title); ?>: </p>
                <p class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-black"><?php echo e($post->content); ?> </p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>           
    </div>
        
</body>
</html><?php /**PATH C:\xampp\htdocs\megleo\projeto\resources\views/mainpage.blade.php ENDPATH**/ ?>