<section id="tutorials" class="dark:bg-slate-800 pt-24 pb-16">
    <div class="container">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
                <div class="text-center mx-auto mb-[60px] max-w-[560px]">
                    <h2 class="font-bold text-3xl text-emerald-600 mb-4">
                        ОТЗЫВЫ НАШИХ КЛИЕНТОВ
                    </h2>
                    <p class="text-base text-body-color">
                        Фермеры по всей республики довольны качеством нашей продукции
                    </p>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap -mx-4">
            @foreach($videos as $video)
                <x-video-section-item :video="$video"></x-video-section-item>
            @endforeach
        </div>
        <div class="flex justify-center">
            <x-button-link href="https://www.youtube.com/channel/UCBNCiQj3kzUKmi0BwjdoltQ" variant="red" class="rounded-lg">
                Наш YouTube канал
            </x-button-link>
        </div>
    </div>
</section>
