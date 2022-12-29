<x-admin-layout>
    <h1 class="text-3xl text-black pb-6">Tabel</h1>


    <form action="{{ route('admin.index') }}" method="GET">
        <div class="flex">
            <select name="id_category" id="category"
                class="z-10 bg-gray-50 divide-y divide-gray-100 rounded-l-md shadow w-44 dark:bg-gray-700">
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


    <div class="w-full mt-12">
        <p class="text-xl pb-3 flex items-center">
            <i class="fas fa-list mr-3"></i> Latest Reports
        </p>
        <div class="bg-white overflow-auto">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Category</th>
                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Nama Perusahaan</th>
                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Nama Penanggung Jawab</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Alamat Perusahaan</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Email Perusahaan</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($loker as $key => $item)
                        <tr>
                            <td class="w-1/3 text-left py-3 px-4">{{ $item->category->nama_cat }}</td>
                            <td class="w-1/3 text-left py-3 px-4">{{ $item->nama_perusahaan }}</td>
                            <td class="w-1/3 text-left py-3 px-4">{{ $item->penanggung_jawab }}</td>
                            <td class="text-left py-3 px-4">{{ $item->alamat_perusahaan }}</td>
                            <td class="text-left py-3 px-4">{{ $item->email_perusahaan }}</td>
                            <td class="align-middle flex px-1">
                                <a href="{{ route('admin.edit', $item->id_locers) }}">
                                    <button class="text-gray-800 rounded-lg p-1 font-semibold bg-green-500 hover:text-white" type="submit">Edit</button></a>
                                <form action="{{ route('admin.destroy', $item->id_locers) }}" method="POST">

                                    @csrf @method('DELETE')

                                    <button class="text-white font-semibold mx-2 rounded-lg p-1 bg-red-500 hover:text-gray-800"
                                        onclick="return confirm('Anda Yakin?')" type="submit">Del</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout>
