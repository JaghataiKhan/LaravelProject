<section
    x-data="
        {
          showCards: 'all',
          activeClasses: 'bg-emerald-600 text-white',
          inactiveClasses: 'text-body-color hover:bg-emerald-600 hover:text-white',
        }
      "
    class="pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] "
>
    <div class="container">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
                <div class="text-center mx-auto mb-[60px] max-w-[510px]">
                    <h2
                        class="
                  font-bold
                  text-3xl
                  sm:text-4xl
                  md:text-[40px]
                  text-emerald-600
                  mb-4
                "
                    >
                        НАША ПРОДУКЦИЯ
                    </h2>
                    <p class="text-lg text-slate-800">
                        Наша компания занимается производством различными видами минеральных удобрений
                    </p>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap justify-center -mx-4">
            <div class="w-full px-4">
                <ul class="flex flex-wrap justify-center mb-12 space-x-1">
                    <li class="mb-1">
                        <button
                            @click="showCards = 'all' "
                            :class="showCards == 'all' ? activeClasses : inactiveClasses "
                            class="
                    inline-block
                    py-2
                    md:py-3
                    px-5
                    lg:px-8
                    rounded-lg
                    text-base
                    font-semibold
                    text-center
                    transition
                  "
                        >
                            Все препораты
                        </button>
                    </li>
                    @foreach($categories as $category)
                            <li class="mb-1">
                                <button
                                    @click="showCards = '{{$category->name}}' "
                                    :class="showCards == '{{$category->name}}' ? activeClasses : inactiveClasses "
                                    class="
                    inline-block
                    py-2
                    md:py-3
                    px-5
                    lg:px-8
                    rounded-lg
                    text-base
                    font-semibold
                    text-center
                    transition">
                                    {{$category->name}}
                                </button>

                    @endforeach
                </ul>
            </div>
        </div>
        <div class="flex flex-wrap -mx-4">
            @foreach($categories as $category)
                @foreach($category->products as $product)
                    <div
                        :class="showCards == 'all' || showCards == '{{$category->name}}' ? 'block' : 'hidden' "
                        class="w-full md:w-1/2 xl:w-1/3 px-4"
                    >
                        <div class="relative mb-12 ease-in duration-100 hover:scale-105">
                            <div class="rounded-lg overflow-hidden">
                                <img
                                    src="{{url($product->image_path)}}"
                                    alt="portfolio"
                                    class="w-full"
                                />
                            </div>
                            <div
                                class="
                  text-center
                  bg-white
                  relative
                  z-10
                  py-9
                  px-3
                  rounded-lg
                  shadow-lg
                  mx-0
                  -mt-20
                ">
                <span class="text-sm text-emerald-600 font-semibold block mb-2">
                  {{$category->name}}
                </span>
                                <h3 class="font-bold text-xl text-dark mb-4">
                                    {{$product->name}}
                                </h3>
                                <a
                                    href="/portfolio/{{$product->slug}}"
                                    class="
                    text-body-color text-sm
                    font-semibold
                    py-3
                    px-7
                    inline-block
                    border
                    rounded-md
                    hover:bg-emerald-600 hover:border-emerald-600 hover:text-white
                    transition
                  "
                                >
                                    Узнать больше
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
            </div>
        </div>
</section>
