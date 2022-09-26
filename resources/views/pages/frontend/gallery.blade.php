<x-guest-layout>
    <x-frontend.breadcrumb title="Gallery" />

    <!-- Start Section-->
    <section class="relative md:py-24 py-16">
        <div class="container">
            <div class="grid grid-cols-1 items-center gap-[30px]">
                <div class="filters-group-wrap text-center">
                    <div class="filters-group">
                        <ul class="mb-0 list-none container-creative filter-options">
                            <li class="inline-block font-medium text-base mx-1.5 mb-3 text-slate-400 cursor-pointer relative transition duration-500 active"
                                data-group="all">All</li>
                            <li class="inline-block font-medium text-base mx-1.5 mb-3 text-slate-400 cursor-pointer relative transition duration-500"
                                data-group="branding">Branding</li>
                            <li class="inline-block font-medium text-base mx-1.5 mb-3 text-slate-400 cursor-pointer relative transition duration-500"
                                data-group="designing">Designing</li>
                            <li class="inline-block font-medium text-base mx-1.5 mb-3 text-slate-400 cursor-pointer relative transition duration-500"
                                data-group="photography">Photography</li>
                            <li class="inline-block font-medium text-base mx-1.5 mb-3 text-slate-400 cursor-pointer relative transition duration-500"
                                data-group="development">Development</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--grid-->
        </div>

        <div class="container-fluid relative">
            <div id="grid" class="md:flex w-full justify-center mx-auto mt-4">
                <div class="lg:w-1/6 md:w-1/3 p-4 picture-item" data-groups='["branding"]'>
                    <div
                        class="group relative block overflow-hidden rounded-md transition-all duration-700 ease-in-out">
                        <div class="relative bg-indigo-600 overflow-hidden rounded-md">
                            <a href="{{ asset('assets/images/portfolio/1.jpg') }}"
                                class="lightbox transition-all duration-700 ease-in-out group-hover:p-[10px]"
                                title="">
                                <img src="{{ asset('assets/images/portfolio/1.jpg') }}" class="rounded-md"
                                    alt="">
                            </a>
                        </div>
                        <div class="content transition-all duration-700 ease-in-out">
                            <div
                                class="bg-white dark:bg-slate-900 p-3 rounded-md absolute z-10 bottom-5 left-5 transition-all duration-700 ease-in-out scale-0 group-hover:scale-100">
                                <a href="portfolio-detail-three.html"
                                    class="h6 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Mockup
                                    Collection</a>
                                <p class="text-slate-400 mb-0">Abstract</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/6 md:w-1/3 p-4 picture-item" data-groups='["designing"]'>
                    <div
                        class="group relative block overflow-hidden rounded-md transition-all duration-700 ease-in-out">
                        <div class="relative bg-indigo-600 overflow-hidden rounded-md">
                            <a href="{{ asset('assets/images/portfolio/2.jpg') }}"
                                class="lightbox transition-all duration-700 ease-in-out group-hover:p-[10px]"
                                title="">
                                <img src="{{ asset('assets/images/portfolio/2.jpg') }}" class="rounded-md"
                                    alt="">
                            </a>
                        </div>
                        <div class="content transition-all duration-700 ease-in-out">
                            <div
                                class="bg-white dark:bg-slate-900 p-3 rounded-md absolute z-10 bottom-5 left-5 transition-all duration-700 ease-in-out scale-0 group-hover:scale-100">
                                <a href="portfolio-detail-three.html"
                                    class="h6 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Mockup
                                    Collection</a>
                                <p class="text-slate-400 mb-0">Abstract</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/6 md:w-1/3 p-4 picture-item" data-groups='["photography"]'>
                    <div
                        class="group relative block overflow-hidden rounded-md transition-all duration-700 ease-in-out">
                        <div class="relative bg-indigo-600 overflow-hidden rounded-md">
                            <a href="{{ asset('assets/images/portfolio/3.jpg') }}"
                                class="lightbox transition-all duration-700 ease-in-out group-hover:p-[10px]"
                                title="">
                                <img src="{{ asset('assets/images/portfolio/3.jpg') }}" class="rounded-md"
                                    alt="">
                            </a>
                        </div>
                        <div class="content transition-all duration-700 ease-in-out">
                            <div
                                class="bg-white dark:bg-slate-900 p-3 rounded-md absolute z-10 bottom-5 left-5 transition-all duration-700 ease-in-out scale-0 group-hover:scale-100">
                                <a href="portfolio-detail-three.html"
                                    class="h6 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Mockup
                                    Collection</a>
                                <p class="text-slate-400 mb-0">Abstract</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/6 md:w-1/3 p-4 picture-item" data-groups='["development"]'>
                    <div
                        class="group relative block overflow-hidden rounded-md transition-all duration-700 ease-in-out">
                        <div class="relative bg-indigo-600 overflow-hidden rounded-md">
                            <a href="{{ asset('assets/images/portfolio/4.jpg') }}"
                                class="lightbox transition-all duration-700 ease-in-out group-hover:p-[10px]"
                                title="">
                                <img src="{{ asset('assets/images/portfolio/4.jpg') }}" class="rounded-md"
                                    alt="">
                            </a>
                        </div>
                        <div class="content transition-all duration-700 ease-in-out">
                            <div
                                class="bg-white dark:bg-slate-900 p-3 rounded-md absolute z-10 bottom-5 left-5 transition-all duration-700 ease-in-out scale-0 group-hover:scale-100">
                                <a href="portfolio-detail-three.html"
                                    class="h6 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Mockup
                                    Collection</a>
                                <p class="text-slate-400 mb-0">Abstract</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/6 md:w-1/3 p-4 picture-item" data-groups='["branding"]'>
                    <div
                        class="group relative block overflow-hidden rounded-md transition-all duration-700 ease-in-out">
                        <div class="relative bg-indigo-600 overflow-hidden rounded-md">
                            <a href="{{ asset('assets/images/portfolio/5.jpg') }}"
                                class="lightbox transition-all duration-700 ease-in-out group-hover:p-[10px]"
                                title="">
                                <img src="{{ asset('assets/images/portfolio/5.jpg') }}" class="rounded-md"
                                    alt="">
                            </a>
                        </div>
                        <div class="content transition-all duration-700 ease-in-out">
                            <div
                                class="bg-white dark:bg-slate-900 p-3 rounded-md absolute z-10 bottom-5 left-5 transition-all duration-700 ease-in-out scale-0 group-hover:scale-100">
                                <a href="portfolio-detail-three.html"
                                    class="h6 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Mockup
                                    Collection</a>
                                <p class="text-slate-400 mb-0">Abstract</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/6 md:w-1/3 p-4 picture-item" data-groups='["branding"]'>
                    <div
                        class="group relative block overflow-hidden rounded-md transition-all duration-700 ease-in-out">
                        <div class="relative bg-indigo-600 overflow-hidden rounded-md">
                            <a href="{{ asset('assets/images/portfolio/6.jpg') }}"
                                class="lightbox transition-all duration-700 ease-in-out group-hover:p-[10px]"
                                title="">
                                <img src="{{ asset('assets/images/portfolio/6.jpg') }}" class="rounded-md"
                                    alt="">
                            </a>
                        </div>
                        <div class="content transition-all duration-700 ease-in-out">
                            <div
                                class="bg-white dark:bg-slate-900 p-3 rounded-md absolute z-10 bottom-5 left-5 transition-all duration-700 ease-in-out scale-0 group-hover:scale-100">
                                <a href="portfolio-detail-three.html"
                                    class="h6 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Mockup
                                    Collection</a>
                                <p class="text-slate-400 mb-0">Abstract</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/6 md:w-1/3 p-4 picture-item" data-groups='["designing"]'>
                    <div
                        class="group relative block overflow-hidden rounded-md transition-all duration-700 ease-in-out">
                        <div class="relative bg-indigo-600 overflow-hidden rounded-md">
                            <a href="{{ asset('assets/images/portfolio/7.jpg') }}"
                                class="lightbox transition-all duration-700 ease-in-out group-hover:p-[10px]"
                                title="">
                                <img src="{{ asset('assets/images/portfolio/7.jpg') }}" class="rounded-md"
                                    alt="">
                            </a>
                        </div>
                        <div class="content transition-all duration-700 ease-in-out">
                            <div
                                class="bg-white dark:bg-slate-900 p-3 rounded-md absolute z-10 bottom-5 left-5 transition-all duration-700 ease-in-out scale-0 group-hover:scale-100">
                                <a href="portfolio-detail-three.html"
                                    class="h6 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Mockup
                                    Collection</a>
                                <p class="text-slate-400 mb-0">Abstract</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/6 md:w-1/3 p-4 picture-item" data-groups='["development"]'>
                    <div
                        class="group relative block overflow-hidden rounded-md transition-all duration-700 ease-in-out">
                        <div class="relative bg-indigo-600 overflow-hidden rounded-md">
                            <a href="{{ asset('assets/images/portfolio/8.jpg') }}"
                                class="lightbox transition-all duration-700 ease-in-out group-hover:p-[10px]"
                                title="">
                                <img src="{{ asset('assets/images/portfolio/8.jpg') }}" class="rounded-md"
                                    alt="">
                            </a>
                        </div>
                        <div class="content transition-all duration-700 ease-in-out">
                            <div
                                class="bg-white dark:bg-slate-900 p-3 rounded-md absolute z-10 bottom-5 left-5 transition-all duration-700 ease-in-out scale-0 group-hover:scale-100">
                                <a href="portfolio-detail-three.html"
                                    class="h6 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Mockup
                                    Collection</a>
                                <p class="text-slate-400 mb-0">Abstract</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/6 md:w-1/3 p-4 picture-item" data-groups='["photography"]'>
                    <div
                        class="group relative block overflow-hidden rounded-md transition-all duration-700 ease-in-out">
                        <div class="relative bg-indigo-600 overflow-hidden rounded-md">
                            <a href="{{ asset('assets/images/portfolio/23.jpg') }}"
                                class="lightbox transition-all duration-700 ease-in-out group-hover:p-[10px]"
                                title="">
                                <img src="{{ asset('assets/images/portfolio/23.jpg') }}" class="rounded-md"
                                    alt="">
                            </a>
                        </div>
                        <div class="content transition-all duration-700 ease-in-out">
                            <div
                                class="bg-white dark:bg-slate-900 p-3 rounded-md absolute z-10 bottom-5 left-5 transition-all duration-700 ease-in-out scale-0 group-hover:scale-100">
                                <a href="portfolio-detail-three.html"
                                    class="h6 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Mockup
                                    Collection</a>
                                <p class="text-slate-400 mb-0">Abstract</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/6 md:w-1/3 p-4 picture-item" data-groups='["photography"]'>
                    <div
                        class="group relative block overflow-hidden rounded-md transition-all duration-700 ease-in-out">
                        <div class="relative bg-indigo-600 overflow-hidden rounded-md">
                            <a href="{{ asset('assets/images/portfolio/20.jpg') }}"
                                class="lightbox transition-all duration-700 ease-in-out group-hover:p-[10px]"
                                title="">
                                <img src="{{ asset('assets/images/portfolio/20.jpg') }}" class="rounded-md"
                                    alt="">
                            </a>
                        </div>
                        <div class="content transition-all duration-700 ease-in-out">
                            <div
                                class="bg-white dark:bg-slate-900 p-3 rounded-md absolute z-10 bottom-5 left-5 transition-all duration-700 ease-in-out scale-0 group-hover:scale-100">
                                <a href="portfolio-detail-three.html"
                                    class="h6 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Mockup
                                    Collection</a>
                                <p class="text-slate-400 mb-0">Abstract</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/6 md:w-1/3 p-4 picture-item" data-groups='["branding"]'>
                    <div
                        class="group relative block overflow-hidden rounded-md transition-all duration-700 ease-in-out">
                        <div class="relative bg-indigo-600 overflow-hidden rounded-md">
                            <a href="{{ asset('assets/images/portfolio/21.jpg') }}"
                                class="lightbox transition-all duration-700 ease-in-out group-hover:p-[10px]"
                                title="">
                                <img src="{{ asset('assets/images/portfolio/21.jpg') }}" class="rounded-md"
                                    alt="">
                            </a>
                        </div>
                        <div class="content transition-all duration-700 ease-in-out">
                            <div
                                class="bg-white dark:bg-slate-900 p-3 rounded-md absolute z-10 bottom-5 left-5 transition-all duration-700 ease-in-out scale-0 group-hover:scale-100">
                                <a href="portfolio-detail-three.html"
                                    class="h6 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Mockup
                                    Collection</a>
                                <p class="text-slate-400 mb-0">Abstract</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/6 md:w-1/3 p-4 picture-item" data-groups='["branding"]'>
                    <div
                        class="group relative block overflow-hidden rounded-md transition-all duration-700 ease-in-out">
                        <div class="relative bg-indigo-600 overflow-hidden rounded-md">
                            <a href="{{ asset('assets/images/portfolio/22.jpg') }}"
                                class="lightbox transition-all duration-700 ease-in-out group-hover:p-[10px]"
                                title="">
                                <img src="{{ asset('assets/images/portfolio/22.jpg') }}" class="rounded-md"
                                    alt="">
                            </a>
                        </div>
                        <div class="content transition-all duration-700 ease-in-out">
                            <div
                                class="bg-white dark:bg-slate-900 p-3 rounded-md absolute z-10 bottom-5 left-5 transition-all duration-700 ease-in-out scale-0 group-hover:scale-100">
                                <a href="portfolio-detail-three.html"
                                    class="h6 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Mockup
                                    Collection</a>
                                <p class="text-slate-400 mb-0">Abstract</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid md:grid-cols-12 grid-cols-1 mt-8">
                <div class="md:col-span-12 text-center">
                    <nav aria-label="Page navigation example">
                        <ul class="inline-flex items-center -space-x-px">
                            <li>
                                <a href="#"
                                    class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 bg-white dark:bg-slate-900 rounded-l-lg hover:text-white border border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">
                                    <i class="uil uil-angle-left text-[20px]"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">1</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">2</a>
                            </li>
                            <li>
                                <a href="#" aria-current="page"
                                    class="z-10 w-[40px] h-[40px] inline-flex justify-center items-center text-white bg-indigo-600 border border-indigo-600">3</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">4</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">5</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 bg-white dark:bg-slate-900 rounded-r-lg hover:text-white border border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">
                                    <i class="uil uil-angle-right text-[20px]"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!--end container-->

    </section>
    <!--end section-->
    <!-- End Section-->
    @push('scripts')
        <script src="{{ asset('assets/libs/shufflejs/shuffle.min.js') }}"></script>
        <script src="{{ asset('assets/libs/tobii/js/tobii.min.js') }}"></script>
    @endpush
</x-guest-layout>
