<section class="pt-20 lg:pt-[120px] pb-10 lg:pb-20 ">
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
                        НАША КОМАНДА
                    </h2>
                    <p class="text-base text-gray-700">
                        Командная игра это тот самый секрет, который способствует группе обыкновенных людей достигнуть необыкновееных результатов
                    </p>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap justify-center -mx-4">
            @foreach($owners as $owner)
            <div class="w-full md:w-1/2 xl:w-1/4 px-4">
                <div class="max-w-[370px] w-full mx-auto mb-10">
                    <div class="relative rounded-2xl overflow-hidden">
                        <img
                            src="https://cdn.tailgrids.com/1.0/assets/images/team/team-01/image-04.jpg"
                            alt="image"
                            class="w-full"
                        />
                        <div class="absolute w-full bottom-5 left-0 text-center">
                            <div
                                class="
                        bg-white
                        relative
                        rounded-lg
                        overflow-hidden
                        mx-5
                        py-5
                        px-3
                        ">
                                <h3 class="text-base font-semibold text-dark">
                                    {{$owner->name}}
                                </h3>
                                <p class="text-sm text-body-color">{{$owner->position}}</p>
                                <div>
                                    <x-dots-team/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
