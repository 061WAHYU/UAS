<x-home-layout>
    <div class="justify-center items-center">
        <div class="bg-blue-500 rounded-lg p-14">
            <form {{ route('admin.index') }}>
                <h1 class="text-center font-bold text-white text-4xl">Cari Lowongan Kerja</h1>
                    <p class="mx-auto font-normal text-sm my-6 max-w-lg">Enter your select domain name and choose any
                        extension name in the next step (choose between .com, .online, .tech, .site, .net, and more)</p>
                    <div class="sm:flex items-center bg-white rounded-lg overflow-hidden px-2 py-1 justify-between">
                            <select name="id_category" id="category"
                            class="z-10 bg-white divide-y divide-black text-black rounded-l-md shadow w-44 dark:bg-gray-700">
                            <option value="">Choose category</option>
                            @foreach ($category as $item)
                                <option value="{{ $item->id_category }}"
                                    {{ isset($_GET['id_category']) && $_GET['id_category'] == $item->id_category ? 'Selected' : '' }}>
                                    {{ $item->nama_cat }}
                                </option>
                            @endforeach
                        </select>
                        <div class="relative w-full">
                            <input type="search" name="s" id="search-dropdown" value="{{ isset($_GET['s']) ? $_GET['s'] : '' }}"
                                class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                                placeholder="Search Nama Perusahaan">
                            <button type="submit"
                                class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                                <span class="sr-only">Search</span>
                            </button>
                        </div>
                    </div>
            </form>
        </div>
    </div>

    <div class="bg-white w-full p-4">

        <div class="flex justify-center flex-col md:flex-row gap-10 md:gap-5 pt-10 px-10">
            <div class="grid grid-cols-1 gap-y-10 gap-x-6 lg:grid-cols-2 xl:grid-cols-3 xl:gap-x-8">
                @foreach ($loker as $item)
                    <div
                        class=" overflow-hidden shadow-lg transition duration-500 ease-in-out transform hover:shadow-2xl rounded-lg md:w-84">
                        <img src="https://img.freepik.com/free-vector/technology-backend-banner-with-circuit-lines-light-streak_1017-34379.jpg?auto=format&h=200"
                            class="max-h-40 w-full object-cover" />
                        <div class="bg-white w-full p-4">
                            <a href="/detailProduk"
                                class="text-blue-500 text-2xl font-medium">{{ $item->nama_perusahaan }}</a>
                            <p class="text-gray-800 text-sm font-medium mb-2">{{ $item->alamat_perusahaan }}</p>
                            <p class="text-gray-600 font-light text-md">{!! $item->desc_perusahaan !!}<a
                                    class="inline-flex text-blue-500" href="#">Read More</a>
                            </p>
                            <div
                                class=" flex flex-wrap justify-starts items-center py-3 border-b-2 text-xs text-white font-medium">
                                <a href="#" class="m-1 px-2 py-1 rounded bg-blue-500">
                                    {{ $item->category->nama_cat }} </a>
                            </div>
                            <div class="flex items-center mt-2">
                                <img class="w-10 h-10 object-cover rounded-full" alt="User avatar"
                                    src="https://images.unsplash.com/photo-1477118476589-bff2c5c4cfbb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=200&q=200" />
                                <div class="pl-2">
                                    <div class="font-medium">Jean Marc</div>
                                    <div class="text-gray-600 text-xs">Elux Space (PT Incbuss Makmur Sejahtera)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
    <div class="flex justify-center">
        <nav aria-label="Page navigation example">
            <ul class="flex list-style-none">
                <li class="page-item"><a
                        class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-gray-800 focus:shadow-none"
                        href="#">Previous</a></li>
                <li class="page-item"><a
                        class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                        href="#">1</a></li>
                <li class="page-item"><a
                        class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                        href="#">2</a></li>
                <li class="page-item"><a
                        class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                        href="#">3</a></li>
                <li class="page-item"><a
                        class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                        href="#">Next</a></li>
            </ul>
        </nav>
    </div>
    </div>


</x-home-layout>
