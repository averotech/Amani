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
                <div class="w-full MenuContainer">
                    <div
                        class="hidden md:flex flex-row items-center justify-between px-14 pt-8 w-full pb-8 border-b-[1px] border-b-[#0697AD]">
                        <div class="flex flex-col items-start justify-start ">
                            @if (app()->getLocale() == 'ar')
                                <p class="text-[#0697AD]  text-xl ">{{ $item->name_ar }}</p>
                            @elseif (app()->getLocale() == 'en')
                                <p class="text-[#0697AD] font-bold text-2xl">{{ $item->name_en }}</p>
                            @else
                                <p class="text-[#0697AD] font-bold text-2xl"> {{ $item->name_hr }}</p>
                            @endif
                            @if (app()->getLocale() == 'ar')
                                <p class=" text-[#0697AD] text-base font-sansLight">{{ $item->description_ar }}</p>
                            @elseif (app()->getLocale() == 'en')
                                <p class="text-[#0697AD] text-lg  font-sansLight max-w-4xl"> {{ $item->description_en }}
                                </p>
                            @else
                                <p class="text-[#0697AD] text-xl  font-sans max-w-4xl">{{ $item->description_hr }}</p>
                            @endif
                        </div>
                        @if (app()->getLocale() == 'ar')
                            <p class="text-[#CEC308] text-xl">{{ $item->price_ar }}</p>
                        @elseif (app()->getLocale() == 'en')
                            <p class="text-[#CEC308] text-xl">{{ $item->price_en }}</p>
                        @else
                            <p class="text-[#CEC308] text-xl">{{ $item->price_hr }}</p>
                        @endif

                    </div>
                    <div class="md:hidden MenuContainer flex flex-col pt-14 w-full pb-8 border-b-[1px] gap-y-2 border-b-[#0697AD]">
                        <div class=" flex flex-row items-center justify-between">
                            @if (app()->getLocale() == 'ar')
                                <p class="text-[#0697AD] text-base ">
                                    {{ $item->name_ar }}
                                </p>
                            @elseif (app()->getLocale() == 'en')
                                <p class="text-[#0697AD] font-bold text-lg"> {{ $item->name_en }}</p>
                            @else
                                <p class="text-[#0697AD] font-bold text-lg"> {{ $item->name_hr }}</p>
                            @endif
                            @if (app()->getLocale() == 'ar')
                                <p class="text-[#CEC308] text-xl">{{ $item->price_ar }}</p>
                            @elseif (app()->getLocale() == 'en')
                                <p class="text-[#CEC308] text-xl">{{ $item->price_en }}</p>
                            @else
                                <p class="text-[#CEC308] text-xl">{{ $item->price_hr }}</p>
                            @endif
                        </div>
                        @if (app()->getLocale() == 'ar')
                            <p class="text-[#0697AD] text-base font-sansLight max-w-md">
                                {{ $item->description_ar }}
                            </p>
                        @elseif (app()->getLocale() == 'en')
                            <p class="text-[#0697AD] text-base font-sansLight max-w-lg">

                                {{ $item->description_en }}
                            </p>
                        @else
                            <p class="text-[#0697AD] text-base font-sansLight">
                                {{ $item->description_hr }}
                            </p>
                        @endif
                    </div>

                </div>
            @endforeach
        </div>
    @endforeach

</div>
