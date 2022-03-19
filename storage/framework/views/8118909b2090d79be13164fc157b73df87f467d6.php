<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="bg-stone-500 h-full">
        <nav class="px-20 sm:px-4 py-2.5">

            <div class="mx-56">
                <div class="container flex flex-wrap justify-between items-center px-30">
                    <a href="#" class="flex items-center">
                        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">e Pustaka</span>
                    </a>
                    <div class="flex md:order-2">
                        <a href="/signup"><button type="button" class="text-white bg-stone-400 hover:bg-stone-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0">Sign up</button></a>
                        <button data-collapse-toggle="mobile-menu-4" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-4" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </div>
                    <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-4">
                        <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                            <li>
                                <a href="#" class="block py-1 pl-1 text-stone-100 rounded md:bg-transparent hover:text-white">Home</a>
                            </li>
                            <li>
                                <a href="#" class="block py-1 pl-1 text-stone-100 rounded md:bg-transparent hover:text-white">About</a>
                            </li>
                            <li>
                                <a href="/liblaries" class="block py-1 pl-1 text-stone-100 rounded md:bg-transparent hover:text-white">Books </a>
                            </li>
                            <li>
                                <a href="#" class="block py-1 pl-1 text-stone-100 rounded md:bg-transparent hover:text-white">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <?php echo $__env->yieldContent('container'); ?>

        <div class="mt-48">
            <footer class="bg-stone-600 text-center  lg:text-left">
                <div class="container p-6 text-white">
                    <div class=" mx-56">
                        <div class="mb-6 md:mb-0">
                            <h5 class="font-medium mb-2 uppercase text-sm">Contact Us</h5> 
                            <div class="grid-cols-3 gap-4">
                                <i class="ri-instagram-line"></i>
                                <i class="ri-mail-line"></i>
                                <i class="ri-whatsapp-line"></i>
                            </div>
                        </div>
                
                        <div class="mb-6 md:mb-0 -mt-16 ml-40 float-right">
                            <h5 class="font-medium mb-2 uppercase text-sm">Address</h5>
                            <p class="mb-4 text-xs">
                                Jl Ketintang no 56 (+62998)<br>Wonocolo, Kota Surabya
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
</html><?php /**PATH C:\laragon\www\perpustakaan\resources\views/main.blade.php ENDPATH**/ ?>