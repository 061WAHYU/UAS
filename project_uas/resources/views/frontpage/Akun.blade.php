<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" href="img/logo-removebg-preview.png">
    <title>
        Lowongan kerja
    </title>
    <meta name="description" content="Simple landind page" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,1,0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        .gradent {
            background: linear-gradient(90deg, #0b9eec 0%, #50dbf1 100%);
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="scroll-smooth leading-normal tracking-normal text-white gradient"
    style="font-family: 'Source Sans Pro', sans-serif;">
    <!--Nav-->
    @include('layouts.navbar')
    Lowongan Kerja

    <div class="block lg:hidden pr-4">
        <button id="nav-toggle"
            class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
        </button>
    </div>

    <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
    <!--Hero-->
    <div class="pt-24">
        <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
            <!--Left Col-->
            <div class="container my-3 mx-auto">
                <div class="grid grid-cols-2 border">
                    <div class="rounded-lg">
                        <div class="rounded-lg overflow-hidden">
                            <div class="z-20 relative grid gap-6 px-5 py-6 sm:gap-8 sm:p-8">
                                <a href="akun"
                                    class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                                    <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                    </svg>
                                    <div class="space-y-1">
                                        <p class="text-base leading-6 font-medium text-gray-900">
                                            Akun Perusahaan
                                        </p>
                                    </div>
                                </a>
                                <a href="buatlowongan"
                                    class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                                    <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                    </svg>
                                    <div class="space-y-1">
                                        <p class="text-base leading-6 font-medium text-gray-900">
                                            Buat Lowongan Kerja
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div>
                      <section>
                          <div class="w-full lg:w-8/16 px-4 mx-auto">
                              <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                                  <div class="rounded-t bg-white mb-0 px-6 py-6">
                                      <div class="text-center flex justify-between">
                                          <h6 class="text-blueGray-700 text-xl font-bold">
                                              Akun Perusahaan
                                          </h6>
                                      </div>
                                  </div>
                                  <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                                      <form>
                                          <div class="flex flex-wrap mt-6">
                                              <div class="w-full lg:w-6/12 px-4">
                                                  <div class="relative w-full mb-3">
                                                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                          htmlfor="grid-password">
                                                          Nama Perusahaan
                                                      </label>
                                                      <input type="text"
                                                          class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                          value="MultiID">
                                                  </div>
                                              </div>
                                              <div class="flex flex-wrap mt-6">
                                                <div class="w-full lg:w-6/12 px-4">
                                                    <div class="relative w-full mb-3">
                                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                            htmlfor="grid-password">
                                                            Nama Penanggung Jawab
                                                        </label>
                                                        <input type="text"
                                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                            value="Bagus Aji">
                                                    </div>
                                                </div>
                                              <div class="w-full lg:w-6/12 px-4">
                                                  <div class="relative w-full mb-3">
                                                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                          htmlfor="grid-password">
                                                          Perusahaan Bergerak Dibidang
                                                      </label>
                                                      <select id="Com"
                                                          class="text-base text-gray-800 outline-none border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                          value="Lucky"">
                                                          <option value="Marketing" selected>Marketing</option>
                                                          <option value="net">net</option>
                                                          <option value="org">org</option>
                                                          <option value="io">io</option>
                                                      </select>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="flex flex-wrap mt-6">
                                            <div class="w-full lg:w-6/12 px-4">
                                                <div class="relative w-full mb-3">
                                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                        htmlfor="grid-password">
                                                        No Penanggung Jawab
                                                    </label>
                                                    <input type="text"
                                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                        value="087564536865">
                                                </div>
                                            </div>
                                          <div class="w-full lg:w-6/12 px-4">
                                              <div class="relative w-full mb-3">
                                                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                      htmlfor="grid-password">
                                                      Alamat Perusahaan
                                                  </label>
                                                  <select id="Com"
                                                      class="text-base text-gray-800 outline-none border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                      value="Lucky"">
                                                      <option value="Bali" selected>Bali</option>
                                                      <option value="net">net</option>
                                                      <option value="org">org</option>
                                                      <option value="io">io</option>
                                                  </select>
                                              </div>
                                          </div>
                                         
          
                                          <hr class="mt-6 border-b-1 border-blueGray-300">
          
                                          {{-- <div class="flex flex-wrap"> --}}
                                              <div class="w-full lg:w-12/12 px-4">
                                                  <div class="relative w-full mb-3">
                                                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                          htmlfor="grid-password">
                                                          Deskripsi
                                                      </label>
                                                      <textarea rows="3"
                                                          class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w- ease-linear transition-all duration-150"
                                                          placeholder="A beautiful UI Kit and Admin for JavaScript &amp; Tailwind CSS. It is Freeand Open Source."></textarea>
                                                  </div>
                                              </div>
                                          {{-- </div> --}}
                                      </form>
                                  </div>
                              </div>
                              <footer class="relative  pt-8 pb-6 mt-2">
                                  <div class="container mx-auto px-4">
                                      <div class="flex flex-wrap items-center md:justify-between justify-center">
                                          <div class="w-full md:w-full px-4 mx-auto text-center">
                                              <div class="text-sm text-blueGray-500 font-semibold py-1">
                                                  Made with <a href="https://www.creative-tim.com/product/notus-js"
                                                      class="text-blueGray-500 hover:text-gray-800" target="_blank">Notus JS</a>
                                                  by <a href="https://www.creative-tim.com"
                                                      class="text-blueGray-500 hover:text-blueGray-800" target="_blank">
                                                      Creative Tim</a>.
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </footer>
                      </section>
                  </div>
                </div>
            </div>
        </div>
    </div>



    <!-- jQuery if you need it
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    -->
    <script>
        function scrollToService() {
            window.scrollTo({
                top: 20,
                behavior: 'smooth'
            });
        }
    </script>
    <script>
        var scrollpos = window.scrollY;
        var header = document.getElementById("header");
        var navcontent = document.getElementById("nav-content");
        var navaction = document.getElementById("navAction");
        var brandname = document.getElementById("brandname");
        var toToggle = document.querySelectorAll(".toggleColour");

        document.addEventListener("scroll", function() {
            /Apply classes for slide in bar/
            scrollpos = window.scrollY;

            if (scrollpos > 10) {
                header.classList.add("bg-white");
                navaction.classList.remove("bg-white");
                navaction.classList.add("gradient");
                navaction.classList.remove("text-gray-800");
                navaction.classList.add("text-black");
                //Use to switch toggleColour colours
                for (var i = 0; i < toToggle.length; i++) {
                    toToggle[i].classList.add("text-gray-800");
                    toToggle[i].classList.remove("text-white");
                }
                header.classList.add("shadow");
                navcontent.classList.remove("bg-gray-100");
                navcontent.classList.add("bg-white");
            } else {
                header.classList.remove("bg-white");
                navaction.classList.remove("gradient");
                navaction.classList.add("bg-white");
                navaction.classList.remove("text-white");
                navaction.classList.add("text-gray-800");
                //Use to switch toggleColour colours
                for (var i = 0; i < toToggle.length; i++) {
                    toToggle[i].classList.add("text-white");
                    toToggle[i].classList.remove("text-gray-800");
                }

                header.classList.remove("shadow");
                navcontent.classList.remove("bg-white");
                navcontent.classList.add("bg-gray-300");
            }
        });
    </script>
    <script>
        /Toggle dropdown list/
        /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

        var navMenuDiv = document.getElementById("nav-content");
        var navMenu = document.getElementById("nav-toggle");

        document.onclick = check;

        function check(e) {
            var target = (e && e.target) || (event && event.srcElement);

            //Nav Menu
            if (!checkParent(target, navMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, navMenu)) {
                    // click on the link
                    if (navMenuDiv.classList.contains("hidden")) {
                        navMenuDiv.classList.remove("hidden");
                    } else {
                        navMenuDiv.classList.add("hidden");
                    }
                } else {
                    // click both outside link and outside menu, hide menu
                    navMenuDiv.classList.add("hidden");
                }
            }
        }

        function checkParent(t, elm) {
            while (t.parentNode) {
                if (t == elm) {
                    return true;
                }
                t = t.parentNode;
            }
            return false;
        }
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    </div>
</body>

</html>


