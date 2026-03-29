<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import {Accordion, AccordionContent, AccordionItem, AccordionTrigger} from "@/Components/ui/accordion/index.js";
import {Badge} from "@/Components/ui/badge/index.js";
import HighlightBlock from "@/Components/HighlightBlock.vue";
import TalentCard from "@/Components/TalentCard.vue";
</script>

<template>
    <Head title="Охотник">
        <!--Без адаптива пока что-->
        <meta name="viewport" content="width=1200">
    </Head>

    <AuthenticatedLayout>
        <template #header>
            <h1
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                Гайд на Охотника
            </h1>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800"
                >
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div>
                            <h3 class="text-2xl font-bold mb-4">Вступление</h3>
                            <div class="text-xl">
                                <p>
                                    Добро пожаловать в гайд о самом универсальном ДД - <a
                                    class="text-orange-500 font-bold"
                                    href="https://royalquest.info/index.php/Охотник"
                                    target="_blank">Охотнике</a>
                                </p>
                                <div class="flex gap-2 my-3">
                                    <badge
                                        class="bg-green-700 hover:bg-green-600 transition-colors duration-700">
                                        Может приручать питомцев :3
                                    </badge>
                                    <badge
                                        class="bg-green-700 hover:bg-green-600 transition-colors duration-700">
                                        Быстро бегает
                                    </badge>
                                    <badge
                                        class="bg-green-700 hover:bg-green-600 transition-colors duration-700">
                                        Имеет хороший урон в соло цель
                                    </badge>
                                    <badge
                                        class="bg-green-700 hover:bg-green-600 transition-colors duration-700">
                                        Имеет хороший массовый урон
                                    </badge>
                                </div>
                                <div class="flex gap-2 mb-6">
                                    <badge
                                        class="bg-green-700 hover:bg-green-600 transition-colors duration-700">
                                        Может водить парики
                                    </badge>
                                    <badge
                                        class="bg-green-700 hover:bg-green-600 transition-colors duration-700">
                                        Имеет билд в котором может танчить боссов
                                    </badge>
                                    <badge
                                        class="bg-green-700 hover:bg-green-600 transition-colors duration-700">
                                        Очень полезен на данжах
                                    </badge>
                                </div>
                                <div class="text-base">
                                    <p>Охотник - класс у которого буквально нету минусов. Он имеет высокую скорость
                                        бега, неплохую выживаемость, и хороший урон как по толпе, так и по одиночной
                                        цели. Он всегда полезен на данжах и может фармить в соло.
                                        <br><br>
                                    </p>
                                    <HighlightBlock color="orange">
                                        <p>Хант имеет разнообразные билды. В одном больше урона, в другом выживаемости.
                                            Есть билды, через вторую ветку, которые подходят для PVP и имеют больше
                                            контроля.
                                            Есть билд через волка, в котором хант может танчить боссов. Сегодня мы
                                            рассмотрим их все)</p>
                                    </HighlightBlock>
                                </div>
                            </div>
                        </div>
                        <Accordion type="multiply" :default-value="['intro']">
                            <AccordionItem class="text-2xl" value="intro">
                                <AccordionTrigger>Таланты/билды</AccordionTrigger>
                                <AccordionContent>
                                    <div>
                                        <span>
                                            <!--Рассказать о скилах, вставить все варианты билдов.<br>-->
                                            <!--Рассказать о важных талантах-->
                                        </span>
                                        <p class="mb-4 text-base">
                                            Начнём с билда который я бы рекомендовал построить на 20 уровне. И как он
                                            будет
                                            меняться по уровне прокачки. Так же постараюсь объяснить почему именно такой
                                            билд. Ниже прикреплю 2 картинки. Та что слева - билд который вы сделаете на
                                            20 уровне.
                                            Та что справа, это билд к который у вас будет на 65
                                        </p>
                                        <div class="flex gap-6">
                                            <img src="/assets/images/skills/hunter/b1.png"
                                                 alt="Билд на ханта Royal Quest">
                                            <img src="/assets/images/skills/hunter/b2.png"
                                                 alt="Билд на ханта Royal Quest">
                                        </div>
                                        <div class="mt-8 text-lg">
                                            <p class="mb-6 text-xl font-medium">
                                                А теперь давайте поговорим, какие таланты тут ключевые и почему билд
                                                выглядит именно так.
                                            </p>
                                            <p class="mb-6 text-lg font-medium">
                                                Начнём с ключевых талантов.
                                            </p>

                                            <div class="space-y-4">
                                                <!-- Талант с простым текстом -->
                                                <TalentCard
                                                    name="Жужжащие стрелы"
                                                    icon="https://royalquest.info/images/2/2a/Талант_Жужжащие_стрелы.png"
                                                    link="https://royalquest.info/index.php/Талант_—_Жужжащие_стрелы"
                                                >
                                                    , очень сильно поможет нам первое время в фарме. Таким образом уже
                                                    на 20 уровне у нас будет дополнительный массовый урон
                                                </TalentCard>

                                                <!-- Талант с HTML и ссылками -->
                                                <TalentCard
                                                    name="Огненный град"
                                                    icon="https://royalquest.info/images/d/d4/Талант_Огненный_град.png"
                                                    link="https://royalquest.info/index.php/Талант_—_Огненный_град"
                                                >
                                                    - На 23 уровне у вас появиться
                                                    <strong>"Град стрел"</strong>, это ваш
                                                    основный скил
                                                    для массового урона. Этот талант существенно увеличит урон с него
                                                </TalentCard>

                                                <!-- Талант со сложной структурой -->
                                                <TalentCard
                                                    name="Походный боекомплект"
                                                    icon="https://royalquest.info/images/d/d3/Талант_Походный_боекомплект.png"
                                                    link="https://royalquest.info/index.php/Талант_—_Походный_боекомплект"
                                                    name-color="orange"
                                                >
                                                    <div class="inline">
                                                        - Позволит вам более быстро передвигаться по карте, и
                                                        <span
                                                            class="font-semibold">сделает вас более полезным в группах</span>.
                                                        Так же вы будете более эффективным
                                                        <span class="italic">"баффером"</span>
                                                    </div>
                                                </TalentCard>
                                            </div>

                                            <div
                                                class="my-8 p-6 bg-orange-500/5 rounded-xl border border-orange-500/20">
                                                <p class="text-center">
                                                    После этого я бы рекомендовал вкачивать вторую ветку до середины,
                                                    потом верхнюю до середины. Как только вы начнёте ходить на боссов
                                                    вам понадобиться РБ, поэтому его важно взять. До этого момента, оно
                                                    вам не особо нужно
                                                </p>
                                            </div>

                                            <div class="space-y-4">
                                                <TalentCard
                                                    name="Отстрел"
                                                    icon="https://royalquest.info/images/b/bf/Талант_Отстрел.png"
                                                    link="https://royalquest.info/index.php/Талант_—_Отстрел"
                                                >
                                                    - Ваш
                                                    <span class="font-medium">град стрел</span> и
                                                    <span class="font-medium">стенка огня</span> (у волшебника),
                                                    накладывают медлительность.
                                                    Поэтому враги почти всегда будут под замедлением. И этот талант
                                                    существенно увеличит урон
                                                </TalentCard>

                                                <TalentCard
                                                    name="Азартный стрелок"
                                                    icon="https://royalquest.info/images/4/48/Талант_Азартный_стрелок.png"
                                                    link="https://royalquest.info/index.php/Талант_—_Азартный_стрелок"
                                                    name-color="orange"
                                                >
                                                    - Отличный талант который увеличивает урон как по соло цели, так и
                                                    по толпе. Он увеличивает урон на 16% - а это реально много. Ради
                                                    него мы и берём всю первую ветку
                                                </TalentCard>

                                                <TalentCard
                                                    name="Разъедающие боеприпасы"
                                                    icon="https://royalquest.info/images/a/a4/Талант_Разъедающие_боеприпасы.png"
                                                    link="https://royalquest.info/index.php/Талант_—_Разъедающие_боеприпасы"
                                                    name-color="orange"
                                                >
                                                    - этот талант сокращённо все называют РБ. Он колоссально увеличивает
                                                    урон, и необходим на боссах. Но он абсолютно бесполезен при
                                                    прокачке, поэтому мы берём его ближе к 60
                                                </TalentCard>
                                            </div>
                                        </div>


                                        <div class="mt-3 text-lg">
                                            <div class="mt-11">
                                                <p>
                                                    В этом билде много талантов, которые нацелены на более комфортную
                                                    игру, до 65, где вам не сильно нужен урон по одной цели, а в
                                                    приоритете выживаемость. После того как вы возьмёте 60-65, билд
                                                    можно сменить на более ДДшный.
                                                    <br><br>
                                                    Тот что слева, это ДД билд для лука, с ним вы можете бегать на
                                                    65, в нём у вас будет максимальный ДПС в данжах. Тут уже берём
                                                    таланты на мишень, чтобы наносить больше урона по боссам. И
                                                    отказываемся от талантов увеличивающих эффективность хилющих скилов
                                                    <br><br>
                                                    Тот что справа, это билд через волка. Он играбелен, только с ружьём.
                                                    В нём вы сможете танчить боссов, и при этом иметь огромный урон по
                                                    одиночной цели. Из талантов тут можно отметить "Громилу", и то что в
                                                    форме волка все удары считаются умениями
                                                    <br><br>
                                                </p>
                                            </div>
                                            <div class="flex gap-6">
                                                <img src="/assets/images/skills/hunter/b3.png"
                                                     alt="Билд на ханта Royal Quest">
                                                <img src="/assets/images/skills/hunter/b4.png"
                                                     alt="Билд на ханта Royal Quest">
                                            </div>
                                        </div>
                                    </div>
                                </AccordionContent>
                            </AccordionItem>
                        </Accordion>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

