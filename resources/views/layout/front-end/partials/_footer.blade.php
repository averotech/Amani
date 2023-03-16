<div class="relative w-full bg-[#0497AD] min:h-[578px] " style="height: 100%">
    <img class="hidden md:block absolute right-4 h-[95%]" src="{{ asset('assets/images/right_Footer_Logo.png') }}"
        alt="logo">
    <img class="hidden md:block absolute left-4 md:[65%] lg:h-[90%]" src="{{ asset('assets/images/left_Footer_Logo.png') }}"
        alt="logo">
    <div
        class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12  flex flex-col items-start pt-10 justify-center w-full">
        <div class="flex flex-rwo items-center justify-center w-full">
            <img src="{{ asset('assets/images/Header_Center_logo.svg') }}" alt="logo">
        </div>
        <div class="w-[35%] md:w-72 border-b-4 mx-8 mt-12 md:mx-0 pb-2 border-b-[#CEC306]">
            <p class="text-2xl  text-white">{{ __('Our story') }}</p>
        </div>
        <div class="flex flex-row  justify-between items-center md:flex-nowrap gap-y-6 flex-wrap gap-x-16 mt-8  mb-8">
            @if(config('app.locale') == 'ar' || config('app.locale') == 'hr') 
            <p class="text-lg md:text-base font-sansLight text-white lg:max-w-xl text-justify md:text-right ">
                {{ nova_get_setting('right_Text_'.config('app.locale'), ' ');  }}
            </p>
            @else
            <p class="text-lg md:text-base font-sansLight text-white lg:max-w-xl text-justify md:text-left ">
                {{ nova_get_setting('right_Text_'.config('app.locale'), ' ');  }}
            </p>
            @endif
            @if(config('app.locale') == 'ar' || config('app.locale') == 'hr') 
            <p class="text-lg md:text-base font-sansLight text-white lg:max-w-xl text-justify md:text-right">
                {{ nova_get_setting('left_Text_'.config('app.locale'), ' ');  }}
            </p>
            @else
            <p class="text-lg md:text-base font-sansLight text-white lg:max-w-xl text-justify md:text-left">
                {{ nova_get_setting('left_Text_'.config('app.locale'), ' ');  }}
            </p>
            @endif
        </div>
    </div>
</div>
