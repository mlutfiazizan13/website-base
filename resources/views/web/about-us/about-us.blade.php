@extends('web.layouts.app')

@section('title', 'Tentang Kami')

@section('content')
{{-- <div class="relative bg-fixed bg-center bg-no-repeat bg-cover text-center bg-black" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('images/achievement.jpg') }})">
    <div class="py-20 px-3 text-white">
        <p class="text-4xl">About Us</p>
    </div>
</div>  --}}
<p class="text-4xl font-semibold text-center">Tentang Kami</p>
<div class="p-10 lg:px-40">
    <div class="grid grid-cols-1 gap-10">
        <div class="">
            <img src="{{ asset('images/yayasanhtbb.jpg') }}" alt="">
        </div>
        <div class="grid grid-cols-1 gap-5">
            <div class="text-left">
                <p class="text-[#06283D] font-bold text-2xl mb-3">Latar Belakang</p>
                <p class="py-1">Yayasan Harapan Tumbuh Bersama Bangsa atau disingkat Yayasan HTBB, berdiri pada Tahun 2022 dengan mengelola 3 (tiga) bidang, yaitu Sosial, Pendidikan dan Keagamaan. Tujuan dari pendirian Yayasan ini adalah untuk ikut berpartisipasi di dalam berbagai kegiatan kemasyarakatan serta menjadi bagian dari tanggungjawab sebagai warga negara. Saat ini kantor Yayasan HTBB berlokasi di Komplek Ruko Plaza Niaga Jl. KSR Dadi Kusmayadi No. 18, Kelurahan Tengah, Kecamatan Cibinong, Kabupaten Bogor.</p>
                <p class="py-1">Sejak berdirinya hingga kini, kami langsung ikut berpartisipasi di dalam berbagai kegiatan kemanusiaan seperti saat terjadinya Gempa Cianjur. Selain itu disisi Pendidikan, kami juga sudah mulai merintis sektor Pendidikan Anak Usia Dini (PAUD) yang berlokasi di daerah Sukahati, Kabupaten Bogor. </p>
                <p class="py-1">Dengan semangat yang ada, kami berusaha untuk bekerja sebaik mungkin demi mewujudkan Visi dan Misi Yayasan ini. Dukungan dan Masukan tentunya kami harapkan juga dari seluruh masyarakat dan donator demi terjaganya konsistensi dan ekstensi kami sebagaimana harapan dari Pendiri Yayasan sejak awalnya.</p>
            </div>
            <div class="text-left">
                <p class="text-[#06283D] font-bold text-2xl mb-3">Perizinan / Legalitas</p>
                <div>
                    <table>
                        <tr>
                            <td>Akte Pendirian</td>
                            <td class="px-2">:</td>
                            <td>No. 2 Tertanggal 26 Januari 2022</td>
                        </tr>
                        <tr>
                            <td>SK Menkumham </td>
                            <td class="px-2">:</td>
                            <td>No. AHU-0002637.AH.01.04.Tahun 2022</td>
                        </tr>
                        <tr>
                            <td>NPWP</td>
                            <td class="px-2">:</td>
                            <td>63.132.143.7-403.000 pada KPP Pratama Cibinong</td>
                        </tr>
                        <tr>
                            <td>NIB</td>
                            <td class="px-2">:</td>
                            <td>3008210011628</td>
                        </tr>
                    </table>
                </div>
    
            </div>
            <div>
                <p class="text-[#06283D] font-bold text-2xl mb-3">Struktur Organisasi</p>
                <div class="grid grid-cols-1 gap-5">
                    <div class="flex justify-center">
                        <img src="{{ asset('images/struktur_organisasi.jpg') }}" alt="">
                    </div>
                    <div>
                        <p class="text-[#06283D] text-xl mb-2">Perizinan / Legalitas</p>
                        <table>
                            <tr>
                                <td>Akte Pendirian</td>
                                <td class="px-2">:</td>
                                <td>No. 2 Tertanggal 26 Januari 2022</td>
                            </tr>
                            <tr>
                                <td>SK Menkumham </td>
                                <td class="px-2">:</td>
                                <td>No. AHU-0002637.AH.01.04.Tahun 2022</td>
                            </tr>
                            <tr>
                                <td>NPWP</td>
                                <td class="px-2">:</td>
                                <td>63.132.143.7-403.000 pada KPP Pratama Cibinong</td>
                            </tr>
                            <tr>
                                <td>NIB</td>
                                <td class="px-2">:</td>
                                <td>3008210011628</td>
                            </tr>
                        </table>
                    </div>
                    <div>
                        <p class="text-[#06283D] text-xl mb-2">Struktur Kepengurusan</p>
                        <table>
                            <tr>
                                <td>Pendiri Yayasan</td>
                                <td class="px-2">:</td>
                                <td>Kamaludin</td>
                            </tr>
                        </table>
                        <div class="mt-1">
                            <p class="text-[#06283D] text-md">Struktur Kepengurusan</p>
                            <table>
                                <tr>
                                    <td>Ketua Yayasan</td>
                                    <td class="px-2">:</td>
                                    <td>Kamaludin</td>
                                </tr>
                                <tr>
                                    <td>Sekretaris Yayasan</td>
                                    <td class="px-2">:</td>
                                    <td>Indra Ariefandi</td>
                                </tr>
                                <tr>
                                    <td>Bendahara  Yayasan</td>
                                    <td class="px-2">:</td>
                                    <td>R.R. Widaranti, SE.</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div>
                        <p class="text-[#06283D] text-xl mb-2">No Rekening Yayasan</p>
                        <ul class="list-disc">
                            <li>
                                <p>Bank Syariah Indonesia</p>
                                    <p>No. 7213077117</p>
                                    <p>Atas nama Yayasan HTBB</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="min-w-full bg-[#06283D] text-white rounded-lg shadow-lg">
        </div> --}}
    </div>
</div>
{{-- <div class="bg-center bg-cover bg-no-repeat bg-gray-700 bg-blend-multiply" style="background-image: url({{asset('images/photos/Artboard-1.png')}})">
    <div class="px-10 md:px-28 py-24 text-white">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-0">
            <div>
                <p class="text-3xl font-bold pb-9 text-center">Misi</p>
                <ol class="list-disc text-base md:text-xl">
                    <li>Lorem ipsum dolor sit.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque voluptatibus dolores hic.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem, ipsum dolor.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus.</li>
                </ol>
            </div>
            <div>
                <p class="text-3xl font-bold pb-9 text-center">Visi</p>
                <p class="text-base md:text-xl">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident nobis error dolores omnis praesentium ab voluptatem commodi officiis fugit ducimus.</p>
            </div>
        </div>
    </div>
</div> --}}
{{-- <div class="py-20 px-10 lg:px-40 bg-[#DFF6FF]">
    <div class="grid grid-cols-1 md:grid-cols-1 gap-10">
        <div class="flex flex-col content-center items-center">
            <div class="w-24 h-24 bg-[#06283D] text-white rounded-full grid text-center items-center content-center">
                <i class="fa-solid fa-brain fa-3x"></i>
            </div>
            <div class="py-5 text-center">
                <p class="text-3xl font-bold py-3">Vission</p>
                <p class="text-xl">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident nobis error dolores omnis praesentium ab voluptatem commodi officiis fugit ducimus.</p>
            </div>
        </div>
        <div class="flex flex-col content-center items-center">
            <div class="w-24 h-24 bg-[#06283D] text-white rounded-full grid text-center items-center content-center">
                <i class="fa-solid fa-bullseye fa-3x"></i>
            </div>
            <div class="py-5">
                <p class="text-center text-3xl font-bold py-3">Mission</p>
                <ol class="list-disc text-xl">
                    <li>Lorem ipsum dolor sit.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque voluptatibus dolores hic.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem, ipsum dolor.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus.</li>
                </ol>
            </div>
        </div>
    </div>
</div> --}}
{{-- <div class="py-20 text-center px-10 lg:px-40 bg-white">
    <p class="text-3xl">Struktur Organisasi</p>
    <div class="flex justify-center">
        <img src="{{ asset('images/struktur_organisasi.jpg') }}" alt="">
    </div>
</div> --}}

@endsection
