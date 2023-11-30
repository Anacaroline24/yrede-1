

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css"  rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css"  rel="stylesheet" />

        <title>Document</title>
    </head>
    <body  class="text-center bg-purple-200 h-screen">
 
    <br>
    <a href="#" class=" items-center mb-6 text-2xl font-extrabold text-black dark:text-black">
                Post web    
            </a>
    <div class="  "> </div> <br><br>


    <h2 class="text-4xl bg-purple-400 font-semibold dark:text-black">Nova Postagem</h2><br>
      

        <form action="/salva-post" method="POST">

        @csrf

        <textarea name="mensagem" id="mensagem" cols="30" rows="10"></textarea>

            <button type="submit" class="bg-black text-white rounded-md">Postar</button>

        </form>

        

<footer class="bg-white rounded-lg shadow m-4 dark:bg-black">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
      <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a class="hover:underline">Flowbite™</a>. All Rights Reserved.
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0"></ul>
    </div>
</footer>

    </body>


    
    </html>
