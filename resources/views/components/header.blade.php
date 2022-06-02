{{--<header class="min-h-screen bg-gray-100">--}}
<header class="fixed z-10 top-0 left-0 w-full block">
    <nav class=" z-10 flex items-center justify-between p-6 h-20 bg-slate-100 shadow-sm drop-shadow-lg block">
        <div class="py-5 px-3 rounded-full bg-gradient-to-r from-indigo-700 to-blue-500 text-sm text-white font-semibold shadow-lg hover:cursor-pointer hover:shadow-lg">LOGO</div>
        <ul>
            <li class="space-x-5 text-xl">
                <a href="#" class="hidden sm:inline-block text-gray-700 hover:text-indigo-700">Home</a>
                <a href="#" class="hidden sm:inline-block text-gray-700 hover:text-indigo-700">About</a>
                <a href="#" class="hidden sm:inline-block text-gray-700 hover:text-indigo-700">Servics</a>
                <a href="#" class="hidden sm:inline-block text-gray-700 hover:text-indigo-700">Products</a>
            </li>
            <div class="sm:hidden space-y-1 hover:cursor-pointer">
                <span class="w-10 h-1 bg-gray-600 rounded-full block"></span>
                <span class="w-10 h-1 bg-gray-600 rounded-full block"></span>
                <span class="w-10 h-1 bg-gray-600 rounded-full block"></span>
            </div>
        </ul>
    </nav>
    {{ $slot }}
</header>
