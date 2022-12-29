
<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <h1 class="w-full text-3xl text-black pb-6">Forms</h1>
    
<div class="flex flex-wrap">
    <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
        <p class="text-xl pb-6 flex items-center">
            <i class="fas fa-list mr-3"></i> Contact Form
        </p>
        <div class="leading-loose">
            <form class="p-10 bg-white rounded shadow-xl">
                <div class="">
                    <label class="block text-sm text-gray-600" for="name">Judul</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" name="name" type="text" required="" placeholder="Masukan Judul" aria-label="Name">
                </div>
                <div class="mt-2">
                    <label class=" block text-sm text-gray-600" for="message">Deskripsi</label>
                    <textarea class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="message" name="message" rows="6" required="" placeholder="Masukan Deskripsi" aria-label="Email"></textarea>
                </div>
            </form>
        </div>
    </div>

    <div class="w-full lg:w-1/2 mt-6 pl-0 lg:pl-2">
        <p class="text-xl pb-6 flex items-center">
        </p>
        <div class="leading-loose">
            <form class="p-10 bg-white rounded shadow-xl">
                <p class="text-lg text-gray-800 font-medium pb-4">Customer information</p>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="cus_email">Kategori</label>
                    <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="text" required="" placeholder="Pilih Kategori" aria-label="Email">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="cus_email">Lokasi</label>
                    <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="text" required="" placeholder="Pilih Lokasi" aria-label="Email">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="cus_email">Pendidikan</label>
                    <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="text" required="" placeholder="Pilih Pendidikan" aria-label="Email">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="cus_email">Tipe</label>
                    <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="text" required="" placeholder="Pilih Tipe" aria-label="Email">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="cus_email">Gaji</label>
                    <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="text" required="" placeholder="Pilih Gaji" aria-label="Email">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="cus_email">Pengalama</label>
                    <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="text" required="" placeholder="Pilih Pengalaman" aria-label="Email">
                </div>
                <div class="mt-6">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">submit</button>
                </div>
            </form>
        </div>
        <p class="pt-6 text-gray-600">
            Source: <a class="underline" href="https://tailwindcomponents.com/component/checkout-form">https://tailwindcomponents.com/component/checkout-form</a>
        </p>
    </div>
</div>
</x-admin-layout>