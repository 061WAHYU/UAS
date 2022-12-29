<nav class="bg-white shadow dark:bg-gray-800">
    <div class="container flex items-center justify-between p-6 mx-auto text-gray-600 capitalize dark:text-gray-300">
        <h1 class="text-4xl font-extrabold text-orange-500">Lets<span class="text-cyan-500">Work</span>
        <x-nav-link :href="route('landingpage')" :active="request()->routeIs('landingpage')" class="text-gray-800 dark:text-gray-200 border-b-2 border-blue-500 mx-1.5 sm:mx-6">home</x-nav-link>

        <x-nav-link :href="route('beranda')" :active="request()->routeIs('beranda')" class="border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">Cari Lowongan Kerja</x-nav-link>
    </div>
</nav>