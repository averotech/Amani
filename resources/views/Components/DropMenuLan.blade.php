<div class="p-10">
    <div class="dropdown inline-block relative">
        <button
            class=" bg-[#FFFFFFD4] rounded-lg text-sm px-4 py-3.5 text-center  hover:bg-blue-200  text-[#0697AD] hover:text-gray-400">
           <div class="flex flex-row items-center justify-center gap-x-2 hover:text-white focus:text-black ">
               @if (app()->getLocale() == 'ar')
            <span class="mr-1  mt-1 text-lg">العربية </span>
            @elseif (app()->getLocale() == 'en')
            <span class="mr-1  mt-1 text-lg">English </span>
            @else
            <span class="mr-1  mt-1 text-lg">עברית </span>
            @endif
            <svg xmlns="http://www.w3.org/2000/svg" height="22" viewBox="0 0 512 512" width="22" fill="#0697AD"
                class="ml-3">
                <path
                    d="m134.296875 316c15.015625 29.964844 40.539063 53.558594 72.050781 65.699219-9.332031-18.074219-16.195312-40.925781-20.390625-65.699219zm0 0">
                </path>
                <path
                    d="m134.296875 196h51.660156c4.195313-24.773438 11.058594-47.625 20.390625-65.699219-31.511718 12.140625-57.035156 35.734375-72.050781 65.699219zm0 0">
                </path>
                <path
                    d="m256.605469 121.203125c-.320313-.003906-.613281-.09375-.929688-.09375-13.320312.429687-30.730469 28.34375-39.339843 74.890625h79.324218c-8.550781-46.230469-25.769531-74.007812-39.054687-74.796875zm0 0">
                </path>
                <path
                    d="m255.675781 390.890625c.316407-.003906.609375-.089844.929688-.09375 13.28125-.789063 30.503906-28.5625 39.054687-74.796875h-79.324218c8.609374 46.546875 26.019531 74.460938 39.339843 74.890625zm0 0">
                </path>
                <path
                    d="m181 256c0-9.980469.410156-20.039062 1.222656-30h-59.003906c-2.214844 9.683594-3.625 19.65625-3.625 30s1.414062 20.316406 3.625 30h59.003906c-.8125-9.960938-1.222656-20.019531-1.222656-30zm0 0">
                </path>
                <path
                    d="m306.234375 131.359375c9.042969 17.898437 15.699219 40.367187 19.808594 64.640625h48.847656c-14.492187-28.921875-38.632813-52.15625-68.65625-64.640625zm0 0">
                </path>
                <path
                    d="m331 256c0 9.980469-.410156 20.039062-1.222656 30h56.191406c2.214844-9.683594 3.625-19.65625 3.625-30s-1.410156-20.316406-3.625-30h-56.191406c.8125 9.960938 1.222656 20.019531 1.222656 30zm0 0">
                </path>
                <path
                    d="m512 256c0-140.609375-115.390625-256-256-256s-256 115.390625-256 256 115.390625 256 256 256c47.050781 0 92.769531-13.832031 132.6875-38.191406l123.3125 38.191406-35.1875-128.367188c22.378906-38.671874 35.1875-82.648437 35.1875-127.632812zm-254.796875 164.867188c-.40625.015624-.789063.132812-1.203125.132812-.152344 0-.289062-.046875-.441406-.050781-.324219.003906-.640625.050781-.964844.050781-90.980469 0-165-74.019531-165-165s74.019531-165 165-165c.324219 0 .640625.046875.964844.050781.152344-.003906.289062-.050781.441406-.050781.414062 0 .796875.117188 1.203125.132812 89.773437 1.414063 162.390625 74.765626 162.390625 164.867188s-72.617188 163.453125-162.390625 164.867188zm0 0">
                </path>
                <path
                    d="m212.246094 226c-.792969 9.492188-1.246094 19.488281-1.246094 30s.453125 20.507812 1.246094 30h87.507812c.792969-9.492188 1.246094-19.488281 1.246094-30s-.453125-20.507812-1.246094-30zm0 0">
                </path>
                <path
                    d="m306.234375 380.640625c30.023437-12.484375 54.164063-35.71875 68.65625-64.640625h-48.847656c-4.109375 24.273438-10.765625 46.742188-19.808594 64.640625zm0 0">
                </path>
            </svg>
        </div>
        </button>
        <ul class="dropdown-menu absolute hidden w-full text-gray-700 pt-2 z-10 origin-top-right rounded-md bg-[#FFFFFFD4] shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
            <li class=""><a class="block py-2 px-4 hover:bg-blue-300 font-bold text-sm font-sans  dark:hover:text-white"
                    href="/ar">العربية</a></li>
            <li class=""><a class="block py-2 px-4 hover:bg-blue-300 text-base font-bold font-sans dark:hover:text-white"
                    href="/en">English</a></li>
            <li class=""><a class="rounded-b block py-2 px-4 font-bold text-base hover:bg-blue-300  font-sans dark:hover:text-white"
                    href="/hr">עברית</a></li>
        </ul>
    </div>

</div>

<style>
    .dropdown:hover .dropdown-menu {
        display: block;
    }
</style>
