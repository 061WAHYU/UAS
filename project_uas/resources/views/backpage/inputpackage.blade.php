<x-admin-layout>
    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="w-full text-3xl text-black pb-6">Forms</h1>

            <div class="flex flex-wrap">
                <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
                    <p class="text-xl pb-6 flex items-center">
                        <i class="fas fa-list mr-3"></i> Contact Form
                    </p>
                    <div class="leading-loose">
                        <form enctype="multipart/form-data"
                            action="{{ isset($loker) ? route('admin.update', $loker->id_locers) : route('admin.store') }}"
                            method="POST" class="p-10 bg-white rounded shadow-xl">
                            @csrf
                            @if (isset($loker))
                                @method('PUT')
                            @endif
                            <div class="mt-2">
                                <label class="block text-sm text-gray-600" for="perusahaan">Nama Perusahaan</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-white border border-gray-300 rounded"
                                    id="perusahaan" name="nama_perusahaan" type="text"
                                    value="{{ isset($loker) ? $loker->nama_perusahaan : old('nama_perusahaan') }}"
                                    required placeholder="Nama Perusahaan" aria-label="Name">
                                @error('nama_perusahaan')
                                    <div class="text-xs text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mt-2">
                                <label class="block text-sm text-gray-600" for="email">Email Perusahaan</label>
                                <input class="w-full px-5  py-1 text-gray-700 bg-white border border-gray-30 rounded"
                                    id="email" name="email_perusahaan" type="text"
                                    value="{{ isset($loker) ? $loker->email_perusahaan : old('email_perusahaan') }}"
                                    required placeholder="Your Email" aria-label="Email">
                                @error('email_perusahaan')
                                    <div class="text-xs text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mt-2">
                                <label class="block text-sm text-gray-600" for="tanggungjawab">Nama Penanggung
                                    Jawab</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-white border border-gray-300 rounded"
                                    id="tanggungjawab" name="penanggung_jawab" type="text"
                                    value="{{ isset($loker) ? $loker->penanggung_jawab : old('penanggung_jawab') }}"
                                    required placeholder="Penanggung Jawab" aria-label="Name">
                                @error('penanggung_jawab')
                                    <div class="text-xs text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mt-2">
                                <label class="block text-sm text-gray-600" for="alamat">Alamat Perusahaan</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-white border border-gray-300 rounded"
                                    id="alamat" name="alamat_perusahaan" type="text"
                                    value="{{ isset($loker) ? $loker->alamat_perusahaan : old('alamat_perusahaan') }}"
                                    required placeholder="Alamat Perusahaan" aria-label="Name">
                                @error('alamat_perusahaan')
                                    <div class="text-xs text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mt-2">
                                <label class="block text-sm text-gray-600" for="pendidikan">Pendidikan</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-white border border-gray-300 rounded"
                                    id="pendidikan" name="pendidikan" type="text"
                                    value="{{ isset($loker) ? $loker->pendidikan : old('pendidikan') }}" required
                                    placeholder="Pedidikan" aria-label="Name">
                                @error('pendidikan')
                                    <div class="text-xs text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-span-6">
                                <label for="categories" class="block text-sm font-medium text-gray-700">Category
                                    Loker</label>
                                <select name="id_category" id="categories" required
                                    class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                    <option value="">Choose Category</option>
                                    @foreach ($category as $item)
                                        {{ (isset($loker) && $loker->id_category == $item->id_category) || old('id_category') == $item->id_category ? 'Selected' : '' }}
                                        <option value="{{ $item->id_category }}">{{ $item->nama_cat }}</option>
                                    @endforeach
                                </select>
                                @error('id_category')
                                    <div class="text-xs text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mt-2">
                                <label for="deskripsi" class="sr-only">Publish post</label>
                                <textarea id="editor" name="desc_perusahaan" rows="8"
                                    class="block w-full px-0 text-sm text-gray-800 bg-white border dark:bg-gray-800 dark:text-white"
                                    value="{{ isset($loker) ? $loker->desc_perusahaan : old('desc_perusahaan') }}"></textarea>
                            </div>
                            <div class="mt-6">
                                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"
                                    type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
    </div>
</x-admin-layout>
