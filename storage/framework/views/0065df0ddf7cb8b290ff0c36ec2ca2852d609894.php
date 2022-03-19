

<?php $__env->startSection('container'); ?>
    
    <div class="mx-64 mt-32 mb-32">
        <div class="w-full max-w-lg h-auto" style="margin-left: 250px">
            <form class="bg-stone-600 shadow-md rounded px-10   max-h-full pt-6  pb-8 mb-4">
                <div class="mb-4">
                    <label class="block text-white text-sm font-bold mb-2" for="email">
                    Email
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline" id="email" type="text" placeholder="Email">
                </div>
                <div class="mb-4">
                    <label class="block text-white text-sm font-bold mb-2" for="username">
                    Username
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
                </div>
                <div class="mb-4">
                    <label class="block text-white text-sm font-bold mb-2" for="password">
                    Password
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline" id="password" type="text" placeholder="Password">
                </div>
                <div class="mt-10 flex items-center justify-between">
                    <button class="bg-stone-400 hover:bg-stone-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    Sign Up
                    </button>
                    <a class="inline-block align-baseline font-bold text-sm text-stone-100 hover:text-stone-300" href="/signin">
                    Already have account?
                    </a>
                </div>
            </form>
        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\perpustakaan\resources\views/user/signup.blade.php ENDPATH**/ ?>