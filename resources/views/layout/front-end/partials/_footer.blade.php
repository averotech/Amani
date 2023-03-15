<div class="relative w-full bg-[#0497AD] min:h-[578px] " style="height: 100vh">
    <img class="hidden sm:block absolute right-4 h-[95%]" src="{{ asset('assets/images/right_Footer_Logo.png') }}"
        alt="logo">
    <img class="hidden sm:block absolute left-4 h-[90%]" src="{{ asset('assets/images/left_Footer_Logo.png') }}"
        alt="logo">
    <div
        class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8  flex flex-col items-start pt-10 justify-center w-full">
        <div class="flex flex-rwo items-center justify-center w-full">
            <img src="{{ asset('assets/images/Header_Center_logo.svg') }}" alt="logo">
        </div>
        <div class="w-[25%] md:w-72 border-b-4 mx-8 md:mx-0 pb-2 border-b-[#CEC306]">
            <p class="text-xl  text-white">قصتنا</p>
        </div>
        <div class="flex flex-row mt-14 justify-between items-center md:flex-nowrap gap-y-6 flex-wrap gap-x-16  mb-8">
            <p class="text-lg md:text-base font-sansLight text-white lg:max-w-xl text-justify md:text-right ">
                {{ nova_get_setting('right_Text_'.config('app.locale'), ' ');  }}
            </p>
            <p class="text-lg md:text-base font-sansLight text-white lg:max-w-xl text-justify md:text-right">
                {{ nova_get_setting('left_Text_'.config('app.locale'), ' ');  }}
            </p>
        </div>
    </div>
</div>
