<div class="pt-28 flex flex-col items-center md:items-start justify-start ">
    <!--First Category -->

    @foreach ($categories as $category)
        <div
            class="bg-[#FFFFFFD4] px-4 md:px-1 md:w-[308px] min-h-16 py-2 flex flex-row items-center justify-center gap-x-3 border-b-[16px]  border-[#CEC306]">
            <svg class="" width="43" height="40" viewBox="0 0 45 48" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M43.9969 23.6326L22.4998 1.17139L1.00261 23.6327L22.4997 46.0939L43.9969 23.6326Z"
                    fill="#CEC306" />
                <path
                    d="M22.4764 47.1389L0 23.6544L22.4764 0.169922L44.9529 23.6544L22.4764 47.1389ZM1.96003 23.6544L22.4764 45.091L42.9929 23.6544L22.4764 2.21782L1.96003 23.6544Z"
                    fill="#0497AD" />
            </svg>

            <p class="text-[#0697AD] text-2xl font-sans">
                @if (app()->getLocale() == 'ar')
                    {{ $category->name_ar }}
                @elseif (app()->getLocale() == 'en')
                    {{ $category->name_en }}
                @else
                    {{ $category->name_hr }}
                @endif
            </p>
        </div>

        <div class="bg-[#FFFFFFD4] flex flex-col items-start justify-start mt-6 w-full px-4 mb-8">
            <!--First Item -->
            @foreach ($category->Items->sortBy('sorting_order') as $item)
                <div class="w-full">
                    <div
                        class="hidden md:flex flex-row items-center justify-between px-14 pt-14 w-full pb-8 border-b-[1px] border-b-[#0697AD]">
                        <div class="flex flex-col items-start justify-start">
                            <p class="text-[#0697AD] text-xl ">
                                @if (app()->getLocale() == 'ar')
                                    {{ $item->name_ar }}
                                @elseif (app()->getLocale() == 'en')
                                    {{ $item->name_en }}
                                @else
                                    {{ $item->name_hr }}
                                @endif
                            </p>
                            <p class=" text-[#0697AD] text-base font-sansLight">
                                @if (app()->getLocale() == 'ar')
                                    {{ $item->description_ar }}
                                @elseif (app()->getLocale() == 'en')
                                    {{ $item->description_en }}
                                @else
                                    {{ $item->description_hr }}
                                @endif
                            </p>
                        </div>
                        <p class="text-[#CEC308] text-xl">{{ $item->price }}</p>
                    </div>

                </div>
            @endforeach
        </div>
    @endforeach

</div>
