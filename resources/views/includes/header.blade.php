<div class="flex flex-row font-bold my-2 gap-x-2">
    <a href="/" class="text-2xl py-10 select-none">
        Kockers Society /
    </a>
    <div class="relative py-10 hover:bg-bg dark:hover:bg-white rounded-2xl ease duration-100 group
        {{ Route::is('login.index') || Route::is('home') || Route::is('music') || Route::is('portfolio') ? 'hidden' : 'block' }}">
        <a href="music" class="select-none duration-200 w-full rounded-2xl px-4 py-2 bg-main hover:bg-main/75 absolute z-0 text-white opacity-0 left-0 top-10 group-hover:block group-hover:opacity-100 group-hover:top-0">
            music
        </a>
        <a href="photos" class="text-2xl select-none ease duration-100 group-hover:text-white dark:group-hover:text-bg group-hover:py-2 group-hover:px-4 relative z-10">
            photos
        </a>
        <a href="portfolio" class="select-none duration-200 w-full bg-main hover:bg-main/75 rounded-2xl px-4 py-2 absolute z-0 text-white opacity-0 left-0 bottom-10 group-hover:block group-hover:opacity-100 group-hover:bottom-0">
            portfolio
        </a>
    </div>
    <div class="relative py-10 hover:bg-bg dark:hover:bg-white rounded-2xl ease duration-100 group
        {{ Route::is('login.index') || Route::is('home') || Route::is('photos') || Route::is('portfolio') || Route::is('photosArchive') ? 'hidden' : 'block' }}">
        <a href="photos" class="w-full text-left select-none duration-200 rounded-2xl px-4 py-2 bg-main hover:bg-main/75 absolute z-0 text-white opacity-0 left-0 top-10 group-hover:block group-hover:opacity-100 group-hover:top-0">
            photos
        </a>
        <a href="music" class="text-2xl select-none ease duration-100 group-hover:text-white dark:group-hover:text-bg group-hover:py-2 group-hover:pl-4 group-hover:pr-6 relative z-10">
            music
        </a>
        <a href="portfolio" class="w-full text-left select-none duration-200 rounded-2xl px-4 py-2 bg-main hover:bg-main/75 absolute z-0 text-white opacity-0 left-0 bottom-10 group-hover:block group-hover:opacity-100 group-hover:bottom-0">
            portfolio
        </a>
    </div>
    <div class="relative py-10 hover:bg-bg dark:hover:bg-white rounded-2xl ease duration-100 group
        {{ Route::is('login.index') || Route::is('home') || Route::is('photos') || Route::is('music') || Route::is('photosArchive') ? 'hidden' : 'block' }}">
        <a href="photos" class="w-full text-left select-none duration-200 rounded-2xl px-4 py-2 bg-main hover:bg-main/75 absolute z-0 text-white opacity-0 left-0 top-10 group-hover:block group-hover:opacity-100 group-hover:top-0">
            photos
        </a>
        <a href="portfolio" class="text-2xl select-none ease duration-100 group-hover:text-white dark:group-hover:text-bg group-hover:py-2 group-hover:px-4 relative z-10">
            portfolio
        </a>
        <a href="music" class="w-full text-left select-none duration-200 rounded-2xl px-4 py-2 bg-main hover:bg-main/75 absolute z-0 text-white opacity-0 left-0 bottom-10 group-hover:block group-hover:opacity-100 group-hover:bottom-0">
            music
        </a>
    </div>
    <a href="photosArchive" class="text-2xl select-none py-10 {{ Route::is('photosArchive') ? 'block' : 'hidden' }}">
        / gallery
    </a>
</div>
<svg width="120" height="44" viewBox="0 0 78 30" xmlns="http://www.w3.org/2000/svg" class="hidden dark:block place-self-center ring-2 px-4 py-2 ring-bg hover:bg-bg dark:hover:bg-white ease duration-100 group dark:ring-white rounded-full">
    <path fill-rule="evenodd" clip-rule="evenodd" class="group-hover:fill-white dark:group-hover:fill-bg ease duration-200" d="M14.6475 30C21.8477 30 27.8345 24.6799 29.0638 17.6687L46.9529 17.6687C48.4168 17.6687 49.6037 16.4739 49.6037 15C49.6037 13.5261 48.4168 12.3313 46.9529 12.3313L29.0638 12.3313C27.8343 5.32025 21.8477 0 14.6475 0C6.55798 0 0 6.71582 0 15C0 23.2842 6.55798 30 14.6475 30ZM4.409 15C4.409 20.7907 8.99286 25.4851 14.6475 25.4851C20.3021 25.4851 24.8861 20.7907 24.8861 15C24.8861 9.20932 20.3021 4.51498 14.6475 4.51498C8.99286 4.51498 4.409 9.20932 4.409 15ZM72.6083 16.1613V20.2804C72.6083 21.5825 71.5623 22.638 70.2719 22.638C68.9815 22.638 67.9355 21.5825 67.9355 20.2804V16.1613C67.9355 14.8592 68.9815 13.8037 70.2719 13.8037C71.5623 13.8037 72.6083 14.8592 72.6083 16.1613ZM67.2166 20.2634V4.21502C67.2166 2.9036 66.1706 1.84049 64.8802 1.84049C63.5898 1.84049 62.5438 2.9036 62.5438 4.21502V20.2634C62.5438 21.575 63.5898 22.638 64.8802 22.638C66.1706 22.638 67.2166 21.575 67.2166 20.2634ZM61.8249 12.112V20.2806C61.8249 21.5825 60.7789 22.638 59.4885 22.638C58.1981 22.638 57.1521 21.5825 57.1521 20.2806V12.112C57.1521 10.8101 58.1981 9.7546 59.4885 9.7546C60.7789 9.7546 61.8249 10.8101 61.8249 12.112ZM56.4332 20.3004V9.69959C56.4332 8.40856 55.3872 7.36196 54.0968 7.36196C52.8064 7.36196 51.7604 8.40856 51.7604 9.69959V20.3004C51.7604 21.5915 52.8064 22.638 54.0968 22.638C55.3872 22.638 56.4332 21.5915 56.4332 20.3004ZM73.3272 12.1394V20.2533C73.3272 21.5704 74.3732 22.638 75.6636 22.638C76.954 22.638 78 21.5704 78 20.2533V12.1394C78 10.8223 76.954 9.7546 75.6636 9.7546C74.3732 9.7546 73.3272 10.8223 73.3272 12.1394Z" fill="#F5F5F5"/>
</svg>
<svg width="120" height="44" viewBox="0 0 78 30" xmlns="http://www.w3.org/2000/svg" class="dark:hidden place-self-center ring-2 px-4 py-2 ring-bg hover:bg-bg dark:hover:bg-white ease duration-100 group dark:ring-white rounded-full">
    <path fill-rule="evenodd" clip-rule="evenodd" class="group-hover:fill-white dark:group-hover:fill-bg ease duration-200" d="M14.6475 30C21.8477 30 27.8345 24.6799 29.0638 17.6687L46.9529 17.6687C48.4168 17.6687 49.6037 16.4739 49.6037 15C49.6037 13.5261 48.4168 12.3313 46.9529 12.3313L29.0638 12.3313C27.8343 5.32025 21.8477 0 14.6475 0C6.55798 0 0 6.71582 0 15C0 23.2842 6.55798 30 14.6475 30ZM4.409 15C4.409 20.7907 8.99286 25.4851 14.6475 25.4851C20.3021 25.4851 24.8861 20.7907 24.8861 15C24.8861 9.20932 20.3021 4.51498 14.6475 4.51498C8.99286 4.51498 4.409 9.20932 4.409 15ZM72.6083 16.1613V20.2804C72.6083 21.5825 71.5623 22.638 70.2719 22.638C68.9815 22.638 67.9355 21.5825 67.9355 20.2804V16.1613C67.9355 14.8592 68.9815 13.8037 70.2719 13.8037C71.5623 13.8037 72.6083 14.8592 72.6083 16.1613ZM67.2166 20.2634V4.21502C67.2166 2.9036 66.1706 1.84049 64.8802 1.84049C63.5898 1.84049 62.5438 2.9036 62.5438 4.21502V20.2634C62.5438 21.575 63.5898 22.638 64.8802 22.638C66.1706 22.638 67.2166 21.575 67.2166 20.2634ZM61.8249 12.112V20.2806C61.8249 21.5825 60.7789 22.638 59.4885 22.638C58.1981 22.638 57.1521 21.5825 57.1521 20.2806V12.112C57.1521 10.81 58.1981 9.7546 59.4885 9.7546C60.7789 9.7546 61.8249 10.81 61.8249 12.112ZM56.4332 20.3004V9.69959C56.4332 8.40856 55.3872 7.36196 54.0968 7.36196C52.8064 7.36196 51.7604 8.40856 51.7604 9.69959V20.3004C51.7604 21.5915 52.8064 22.638 54.0968 22.638C55.3872 22.638 56.4332 21.5915 56.4332 20.3004ZM73.3272 12.1394V20.2533C73.3272 21.5704 74.3732 22.638 75.6636 22.638C76.954 22.638 78 21.5704 78 20.2533V12.1394C78 10.8223 76.954 9.7546 75.6636 9.7546C74.3732 9.7546 73.3272 10.8223 73.3272 12.1394Z" fill="#1E1E1E"/>
</svg>
<div class="flex flex-row gap-x-10 place-self-end py-10 cursor-pointer">
    <div class="cursor-pointer flex items-center justify-center" onclick="switchMode()" id="toggle">
        <label class="swap swap-rotate">
            <input type="checkbox" />
            <svg id="moon" class="swap-on fill-transparent stroke-white w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" /></svg>
            <svg id="sun" class="swap-off fill-transparent stroke-bg w-10 h-10 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1"><path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" /></svg>
        </label>
    </div>
    <label class="swap">
        <input type="checkbox" />
        <svg class="swap-on w-10 stroke-bg dark:stroke-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
        <svg class="swap-off w-10 stroke-bg dark:stroke-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5" /></svg>
    </label>
</div>
</header>

{{-- mobile header --}}

<header class="w-full grid grid-cols-2 md:hidden">
<a href="/">
    <svg width="78" height="30" viewBox="0 0 78 30" xmlns="http://www.w3.org/2000/svg" class="hidden dark:block place-self-center">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.6475 30C21.8477 30 27.8345 24.6799 29.0638 17.6687L46.9529 17.6687C48.4168 17.6687 49.6037 16.4739 49.6037 15C49.6037 13.5261 48.4168 12.3313 46.9529 12.3313L29.0638 12.3313C27.8343 5.32025 21.8477 0 14.6475 0C6.55798 0 0 6.71582 0 15C0 23.2842 6.55798 30 14.6475 30ZM4.409 15C4.409 20.7907 8.99286 25.4851 14.6475 25.4851C20.3021 25.4851 24.8861 20.7907 24.8861 15C24.8861 9.20932 20.3021 4.51498 14.6475 4.51498C8.99286 4.51498 4.409 9.20932 4.409 15ZM72.6083 16.1613V20.2804C72.6083 21.5825 71.5623 22.638 70.2719 22.638C68.9815 22.638 67.9355 21.5825 67.9355 20.2804V16.1613C67.9355 14.8592 68.9815 13.8037 70.2719 13.8037C71.5623 13.8037 72.6083 14.8592 72.6083 16.1613ZM67.2166 20.2634V4.21502C67.2166 2.9036 66.1706 1.84049 64.8802 1.84049C63.5898 1.84049 62.5438 2.9036 62.5438 4.21502V20.2634C62.5438 21.575 63.5898 22.638 64.8802 22.638C66.1706 22.638 67.2166 21.575 67.2166 20.2634ZM61.8249 12.112V20.2806C61.8249 21.5825 60.7789 22.638 59.4885 22.638C58.1981 22.638 57.1521 21.5825 57.1521 20.2806V12.112C57.1521 10.8101 58.1981 9.7546 59.4885 9.7546C60.7789 9.7546 61.8249 10.8101 61.8249 12.112ZM56.4332 20.3004V9.69959C56.4332 8.40856 55.3872 7.36196 54.0968 7.36196C52.8064 7.36196 51.7604 8.40856 51.7604 9.69959V20.3004C51.7604 21.5915 52.8064 22.638 54.0968 22.638C55.3872 22.638 56.4332 21.5915 56.4332 20.3004ZM73.3272 12.1394V20.2533C73.3272 21.5704 74.3732 22.638 75.6636 22.638C76.954 22.638 78 21.5704 78 20.2533V12.1394C78 10.8223 76.954 9.7546 75.6636 9.7546C74.3732 9.7546 73.3272 10.8223 73.3272 12.1394Z" fill="#F5F5F5"/>
    </svg>
    <svg width="78" height="30" viewBox="0 0 78 30" xmlns="http://www.w3.org/2000/svg" class="dark:hidden place-self-center">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.6475 30C21.8477 30 27.8345 24.6799 29.0638 17.6687L46.9529 17.6687C48.4168 17.6687 49.6037 16.4739 49.6037 15C49.6037 13.5261 48.4168 12.3313 46.9529 12.3313L29.0638 12.3313C27.8343 5.32025 21.8477 0 14.6475 0C6.55798 0 0 6.71582 0 15C0 23.2842 6.55798 30 14.6475 30ZM4.409 15C4.409 20.7907 8.99286 25.4851 14.6475 25.4851C20.3021 25.4851 24.8861 20.7907 24.8861 15C24.8861 9.20932 20.3021 4.51498 14.6475 4.51498C8.99286 4.51498 4.409 9.20932 4.409 15ZM72.6083 16.1613V20.2804C72.6083 21.5825 71.5623 22.638 70.2719 22.638C68.9815 22.638 67.9355 21.5825 67.9355 20.2804V16.1613C67.9355 14.8592 68.9815 13.8037 70.2719 13.8037C71.5623 13.8037 72.6083 14.8592 72.6083 16.1613ZM67.2166 20.2634V4.21502C67.2166 2.9036 66.1706 1.84049 64.8802 1.84049C63.5898 1.84049 62.5438 2.9036 62.5438 4.21502V20.2634C62.5438 21.575 63.5898 22.638 64.8802 22.638C66.1706 22.638 67.2166 21.575 67.2166 20.2634ZM61.8249 12.112V20.2806C61.8249 21.5825 60.7789 22.638 59.4885 22.638C58.1981 22.638 57.1521 21.5825 57.1521 20.2806V12.112C57.1521 10.81 58.1981 9.7546 59.4885 9.7546C60.7789 9.7546 61.8249 10.81 61.8249 12.112ZM56.4332 20.3004V9.69959C56.4332 8.40856 55.3872 7.36196 54.0968 7.36196C52.8064 7.36196 51.7604 8.40856 51.7604 9.69959V20.3004C51.7604 21.5915 52.8064 22.638 54.0968 22.638C55.3872 22.638 56.4332 21.5915 56.4332 20.3004ZM73.3272 12.1394V20.2533C73.3272 21.5704 74.3732 22.638 75.6636 22.638C76.954 22.638 78 21.5704 78 20.2533V12.1394C78 10.8223 76.954 9.7546 75.6636 9.7546C74.3732 9.7546 73.3272 10.8223 73.3272 12.1394Z" fill="#1E1E1E"/>
    </svg>
</a>
<div class="flex flex-row gap-x-10 place-self-end cursor-pointer">
    <div class="cursor-pointer flex items-center justify-center" onclick="switchMode()" id="toggle">
        <label class="swap swap-rotate">
            <input type="checkbox" />
            <svg class="swap-on fill-transparent stroke-white w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" /></svg>
            <svg class="swap-off fill-transparent stroke-bg w-10 h-10 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1"><path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" /></svg>
        </label>
    </div>
    <label class="swap">
        <input type="checkbox" />
        <svg class="swap-on w-10 stroke-bg dark:stroke-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
        <svg class="swap-off w-10 stroke-bg dark:stroke-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5" /></svg>
    </label>
</div>
