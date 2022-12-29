<x-home-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach ($loker as $item)
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-3xl font-semibold">{{ $item->nama_perusahaan }}</h3>
                    <h1 class="py-2"> Penanggung Jawab: {{ $item->penanggung_jawab }}</h1>
                    <h2 class="text-md text-blue-500">{{ $item->category->nama_cat }}</h2>
                    <h1> Pendidikan: {{ $item->pendidikan }}</h1><hr>
                    <h1> Deskripsi: </h1>
                    <p>Kaos Polos Jaya merupakan perusahaan di bidang garment yang sudah berdiri lebih dari 12 tahun di Surabaya. Saat ini kami membuka lowongan pekerjaan di bagian Admin Penjualan.

                        Tanggung Jawab Pekerjaan :
                        1. Follow up customer
                        2. Memastikan pemesanan cutomer tercatat dengan baik dan rapi
                        3. Negosiasi harga dan detail pemesanan dengan customer
                        4. Memastikan customer puas dengan pelayanan dari kita
                        5. Membina hubungan baik dengan customer
                        6. Melakukan penawaran dan penjualan kepada customer
                        7. Memastikan hasil produksi sesuai dengan pemesanan dari customer
                        
                        Keahlian :
                        – Microsoft Office
                        – Komunikasi verbal dan non verbal
                        
                        Kualifikasi :
                        1. Pria/Wanita maximal 27 tahun
                        2. Minimal pendidikan SMU atau SMK (diutamakan lulusan Public Relationship)
                        3. Memiliki semangat untuk bekerja mencapai target
                        4. Mengerti tentang e – commerce, social media dan microsoft office
                        5. Diutamakan jika memiliki ketrampilan membuat artikel atau tulisan yang menarik
                        6. Memiliki ketrampilan berkomunikasi dengan bahasa yang baik dan benar
                        7. Memiliki kendaraan pribadi
                        8. Bekerja secara full time pukul 09.00 – 18.00, hari Senin – Sabtu
                        9. Pengalaman 1 tahun di bidang admin atau penjualan
                        10. Diutamakan yang berdomisili di Jawa Timur, khususnya Surabaya
                        
                        Waktu Bekerja :
                        Senin – sabtu jam 09.00 – 18.00
                        Tunjangan :
                        Uang pokok
                        
                        Insentif :
                        Bonus per penjualan</p>
                </div>
            </div><br>
            @endforeach
        </div>
    </div>
</x-home-layout>
