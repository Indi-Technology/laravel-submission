<x-app-layout>
    <x-slot:header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('About Me') }}
        </h2>
    </x-slot:header>


    <div class="overflow-x-auto relative">

        <div
            class="w-full mx-auto max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 mt-11 px-4 pt-10">

            <div class="flex flex-col items-center pb-10">
                <img class="mb-3 w-24 h-24 rounded-full shadow-lg"
                    src="https://media-exp1.licdn.com/dms/image/C5603AQGxxu9jL6xa_Q/profile-displayphoto-shrink_800_800/0/1643425170141?e=1668038400&v=beta&t=APwQvgTqm_N-cDex-TEqXYmUA-2L3sBtBgsGM7o2D6Y">
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Muhammad Hilmy Azkarillah</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">Fullstack Web Developer Internship at</span>
                <span class="text-sm text-gray-500 dark:text-gray-400">INDI Technology</span>
                <span class="text-sm text-gray-500 dark:text-gray-400 mt-4"><em class="font-italic">3 hari 3 malam
                        kurelakan begadang demi tugas ini</em></span>
                <div class="flex mt-4 space-x-3 md:mt-6">
                    <a href="https://github.com/mhazrla"
                        class="inline-flex items-center py-4 px-4  rounded-full dark:hover:bg-blue-700 "><svg
                            class="h-8 w-8 text-red-500" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <path
                                d="M9 19c-4.286 1.35-4.286-2.55-6-3m12 5v-3.5c0-1 .099-1.405-.5-2 2.791-.3 5.5-1.366 5.5-6.04a4.567 4.567 0 0 0 -1.333 -3.21 4.192 4.192 0 00-.08-3.227s-1.05-.3-3.476 1.267a12.334 12.334 0 0 0 -6.222 0C6.462 2.723 5.413 3.023 5.413 3.023a4.192 4.192 0 0 0 -.08 3.227A4.566 4.566 0 004 9.486c0 4.64 2.709 5.68 5.5 6.014-.591.589-.56 1.183-.5 2V21" />
                        </svg></a>
                    <a href="https://www.linkedin.com/in/muhammad-hilmy-azkarillah-40ab511b2/"
                        class="inline-flex items-center py-4 px-4  rounded-full dark:hover:bg-blue-700 "><svg
                            class="h-8 w-8 text-red-500" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                            <rect x="2" y="9" width="4" height="12" />
                            <circle cx="4" cy="4" r="2" />
                        </svg></a>
                    <a href="https://www.instagram.com/mhazrla"
                        class="inline-flex items-center py-4 px-4  rounded-full dark:hover:bg-blue-700 "><svg
                            class="h-8 w-8 text-red-500" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="2" width="20" height="20" rx="5"
                                ry="5" />
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                        </svg></a>

                </div>
            </div>
        </div>

    </div>



</x-app-layout>
