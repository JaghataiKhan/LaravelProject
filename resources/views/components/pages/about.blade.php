<section class="pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] overflow-hidden">
    <div class="container">
        <div class="flex flex-wrap justify-between items-center -mx-4">
            <div class="w-full lg:w-6/12 px-4">
                <div class="flex items-center -mx-3 sm:-mx-4">
                    <div class="w-full xl:w-1/2 px-3 sm:px-4">
                        <div class="py-3 sm:py-4 w-full h-full">
                            <img
                                src="{{ $about->image1_path }}"
                                alt=""
                                class="rounded-2xl w-full"
                            />
                        </div>
                        <div class="py-3 sm:py-4">
                            <img
                                src="{{ $about->image2_path }}"
                                alt=""
                                class="rounded-2xl w-full"
                            />
                        </div>
                    </div>
                    <div class="w-full xl:w-1/2 px-3 sm:px-4">
                        <div class="my-4 relative z-10">
                            <img
                                src="{{ $about->image3_path }}"
                                alt=""
                                class="rounded-2xl w-full"
                            />
                            <x-about-dots></x-about-dots>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
                <div class="mt-10 lg:mt-0">
          <span class="font-semibold text-lg text-primary mb-2 block">
             <blockquote class="text-sm text-gray-500 italic py-2 px-3 border-l-4 border-lime-600">
                 "Everything is achievable with hard work"
             </blockquote>
          </span>
                    <h2 class="font-bold text-3xl sm:text-4xl dark:text-gray-200 mb-8">
                        О нас
                    </h2>
                    <p class="text-base mb-8 italic">
                        {!!$about->body!!}
{{--                        Компания <span class="text-lime-700 font-bold">«IMPETUS NOVA CHEMICALS»</span> основана в 2019 году и опирается на многолетний опыт Института химии и растительности.--}}
{{--                        Основным родом деятельности Нашей Компании является производство комплексных листовых подкормок, стимуляторов роста растений,--}}
{{--                        а также (с начала 2022 года) регуляторов роста растений для сельского хозяйства нашей республики.--}}
{{--                        Отличительной чертой Наша Компания является инновационный подход к технологии производства и агросопровождения.<br/>--}}
{{--                        Заботясь об интересах своих потребителей в первую очередь, мы не забыли о здоровье Земли как почвы, так и планеты.--}}
{{--                        Посредством инновационного подхода и усовершенствования методов производства мы нашли способ постепенного сокращения использования “устаревших” минеральных удобрений,--}}
{{--                        и заменили их на более современные, включающие в себя все необходимые для растения микроэлементы и органичекие добавки, которые обеспечивают экологическую безопасность в целом--}}
{{--                        и защищают микрофлору почвы.--}}
                    </p>
                    <a href="/about"
                       class="text-blue-500 py-2 uppercase font-medium">
                        УЗНАТЬ БОЛЬШЕ
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
