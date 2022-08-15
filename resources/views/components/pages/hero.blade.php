{{----}}
{{--    <div class="container mx-auto flex flex-col items-center py-12 sm:py-24">--}}
{{--        <div class="w-11/12 sm:w-2/3 lg:flex justify-center items-center flex-col  mb-5 sm:mb-10">--}}
{{--            <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl text-center text-gray-100 dark:text-white font-black leading-7 md:leading-10">--}}
{{--                <span class="text-primary">Иновации</span>--}}
{{--                в сельское хозяйство!--}}
{{--            </h1>--}}
{{--            <p class="mt-5 sm:mt-10 lg:w-10/12 text-white font-normal text-center text-sm sm:text-lg">A professonal website drives sales. Create a beautiful website to impress and engage new customers and establish your business online </p>--}}
{{--        </div>--}}
{{--        <div class="flex justify-center items-center">--}}
{{--            <x-button-link href="/products" variant="primary" class="rounded-lg">--}}
{{--                Наша продукция--}}
{{--            </x-button-link>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<section class="text-gray-600 body-font">
    <div class="w-full h-full bg-no-repeat bg-cover bg-left bg-fixed" style="background-image: url({{$hero->image_path}});">
    <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
        <div class="text-center lg:w-2/3 w-full">
            <h1 class="text-xl mb-8 sm:text-2xl md:text-3xl lg:text-4xl text-center text-white dark:text-white font-black leading-7 md:leading-10">
            {!!$hero->tagline!!}
            </h1>
            <p class="mb-8 leading-relaxed text-white">{{$hero->body}}</p>
            <div class="flex justify-center">
                <x-button-link href="/products" variant="outline-primary" class="rounded-lg">
                    НАША ПРОДУКЦИЯ
                </x-button-link>
            </div>
        </div>
    </div>
    </div>
</section>
