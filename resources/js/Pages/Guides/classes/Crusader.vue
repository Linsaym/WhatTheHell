<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import {Accordion, AccordionContent, AccordionItem, AccordionTrigger} from "@/Components/ui/accordion/index.js";
import {Badge} from "@/Components/ui/badge/index.js";
</script>

<template>
    <Head title="Crusader">
        <!--Без адаптива пока что-->
        <meta name="viewport" content="width=1200">
    </Head>

    <AuthenticatedLayout>
        <template #header>
            <h1
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                Гайд на креста
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
                                    Добро пожаловать в гайд о сильнейшем бафере в игре - <a
                                    class="text-orange-500 font-bold"
                                    href="https://royalquest.info/index.php/Крестоносец"
                                    target="_blank">Крестоносце</a>
                                </p>
                                <div class="flex gap-2 my-3">
                                    <badge
                                        class="bg-green-700 hover:bg-green-600 transition-colors duration-700">
                                        Живучий
                                    </badge>
                                    <badge
                                        class="bg-green-700 hover:bg-green-600 transition-colors duration-700">
                                        Полезные ауры
                                    </badge>
                                    <badge
                                        class="bg-green-700 hover:bg-green-600 transition-colors duration-700">
                                        Незаменимые бафы
                                    </badge>
                                    <badge
                                        class="bg-green-700 hover:bg-green-600 transition-colors duration-700">
                                        Сильный в PVP
                                    </badge>
                                </div>
                                <div class="flex gap-2 mb-6">
                                    <badge
                                        class="bg-yellow-500 hover:bg-red-500 transition-colors duration-700">
                                        Слабый в соло фарме
                                    </badge>
                                    <badge
                                        class="bg-yellow-500 hover:bg-red-500 transition-colors duration-700">
                                        Долго убивает парики
                                    </badge>
                                </div>
                                <div class="text-base">
                                    <p>Крестоносец - пожалуй сильнейший бафер в игре. За счёт его скила <a
                                        class="text-blue-500"
                                        target="_blank"
                                        href="https://royalquest.info/index.php/Клеймо_еретика">"Клеймо
                                        еретика"</a>, увеличивает весь входящий урон от челенов группы
                                        на 25%, он является незаменимым классом в походах на боссов.
                                        <br><br>
                                        Однако, крестоносец не только бафер. Он также имеет хороший урон по
                                        одной цели в ДД билде, и может танчить боссов.
                                        В итоге крестоносец, может быть как танком, так и сапортом или бафером.

                                        В этом гайде мы рассмотрим как построить эффективного крестоносца, какие
                                        таланты выбрать, какую экипировку использовать, и какие стратегии
                                        использовать в боях.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <Accordion type="multiply" :default-value="['item-1']">
                            <AccordionItem class="text-2xl" value="item-1">
                                <AccordionTrigger>Таланты/билды</AccordionTrigger>
                                <AccordionContent>
                                    <div class="text-lg">
                                        <div>
                                            <p>
                                                Времени нет расписывать, поэтому коротко. На Креста есть 3 основных
                                                билда:<br>
                                            </p>
                                            <ul class="list-disc pl-8">
                                                <li>PVE бафер + хиллер</li>
                                                <li>PVP бафер + ДД (в пве тоже имба)</li>
                                                <li>PVP бафер (его мы не будем расматривать)</li>
                                            </ul>
                                            <br>
                                        </div>
                                        <p>
                                            За крестоносца очень сложно прокачиваться в соло, поэтому я бы
                                            порекомендовал вам бегать в пачке с ТРом. Для прокачки у нас есть 2
                                            варианта. ДД билд через копьё и билд через хил. Лично я рекомендовал бы билд
                                            через копьё (левая картинка), т.к. с ним вы можете наносить много урона
                                            <br><br>
                                        </p>
                                        <div class="flex gap-6">
                                            <img src="/assets/images/skills/cuesader/b1.png"
                                                 alt="Билд на PVE креста Royal Quest">
                                            <img src="/assets/images/skills/cuesader/b2.png"
                                                 alt="Билд на PVP креста Royal Quest">
                                        </div>
                                        <div class="mt-6">
                                            <p>
                                                Я постараюсь выделить пару талантов, и объяснить почему билд через копьё
                                                имба. А так же упомяну таланты который важны для баферства. Вся ваша
                                                игра в билде через копьё будет играться через скил "пронзание"
                                            </p>
                                            <div class="flex gap-3 items-center my-3">
                                                <a href="https://royalquest.info/index.php/Талант_—_Массовое_уничтожение"
                                                   target="_blank"
                                                >
                                                    <img
                                                        src="https://royalquest.info/images/5/56/Талант_Массовое_уничтожение.png"
                                                        style="width: 48px; border-radius: 100%"
                                                        alt="Массовое уничтожение">
                                                </a>
                                                <p class="w-2/3">
                                                    - Пронзание, это массовый скил) +10%
                                                </p>
                                            </div>
                                            <div class="flex gap-3 items-center my-3">
                                                <a href="https://royalquest.info/index.php/Талант_—_Контроль_эмоций"
                                                   target="_blank"
                                                >
                                                    <img
                                                        src="https://royalquest.info/images/f/fa/Талант_Контроль_эмоций.png"
                                                        style="width: 48px"
                                                        alt="Контроль эмоций">
                                                </a>
                                                <p class="w-2/3">
                                                    - Мы не юзаем только пронзание) и у нас 8 черепков. 8*4=32%
                                                </p>
                                            </div>
                                            <div class="flex gap-3 items-center my-3">
                                                <a href="https://royalquest.info/index.php/Талант_—_Кавалерийский_натиск"
                                                   target="_blank"
                                                >
                                                    <img
                                                        src="https://royalquest.info/images/1/13/Талант_Кавалерийский_натиск.png"
                                                        style="width: 48px"
                                                        alt="Контроль эмоций">
                                                </a>
                                                <p class="w-2/3">
                                                    - В этом билде... Мы юзаем только пронзание 8*5=40%
                                                </p>
                                            </div>
                                            <div class="flex gap-3 items-center my-3">
                                                <a href="https://royalquest.info/index.php/Талант_—_Отвага"
                                                   target="_blank"
                                                >
                                                    <img
                                                        src="https://royalquest.info/images/8/82/Талант_Отвага.png"
                                                        style="width: 48px"
                                                        alt="Контроль эмоций">
                                                </a>
                                                <p class="w-2/3">
                                                    - Собрать пару мобов ещё + 10% к урону
                                                </p>
                                            </div>
                                            <div>
                                                <p>
                                                    Итого у нас 40+32+10+10=92% дополнительного урона. При этом ещё мы
                                                    ставим флаг и даём клеймо. Таким образом крест имеет огромный
                                                    массовый урон. Который даже больше чем у ТРа. Но при этом ТР
                                                    хилиться от нанесённого урона, поэтому он более живучий.
                                                    <br><br>
                                                    Так же не стоит забывать о талантах которые важны для баферства:
                                                </p>
                                            </div>
                                            <div class="flex gap-3 items-center my-3">
                                                <a href="https://royalquest.info/index.php/Талант_—_Воин_света"
                                                   target="_blank"
                                                >
                                                    <img
                                                        src="https://royalquest.info/images/2/2e/Талант_Воин_света.png"
                                                        style="width: 48px"
                                                        alt="Воин света">
                                                </a>
                                                <p class="w-2/3">
                                                    - Делает, чтобы наш флаг усиливал атаку на 7% для нашей группы
                                                </p>
                                            </div>
                                            <div class="flex gap-3 items-center my-3">
                                                <a href="https://royalquest.info/index.php/Талант_—_Чистота_помыслов"
                                                   target="_blank"
                                                >
                                                    <img
                                                        src="https://royalquest.info/images/d/da/Талант_Чистота_помыслов.png"
                                                        style="width: 48px"
                                                        alt="Воин света">
                                                </a>
                                                <p class="w-2/3">
                                                    - Мы можем поддерживать стаки с помощью "Луч света".
                                                </p>
                                            </div>
                                            <div class="flex gap-3 items-center my-3">
                                                <a href="https://royalquest.info/index.php/Талант_—_Предводитель"
                                                   target="_blank"
                                                >
                                                    <img
                                                        src="https://royalquest.info/images/8/81/Талант_Предводитель.png"
                                                        style="width: 48px"
                                                        alt="Предводитель">
                                                </a>
                                                <p class="w-2/3">
                                                    - Делает воодушевление массовым
                                                </p>
                                            </div>
                                            <div class="flex gap-3 items-center my-3">
                                                <a href="https://royalquest.info/index.php/Талант_—_Провидение"
                                                   target="_blank"
                                                >
                                                    <img
                                                        src="https://royalquest.info/images/a/a3/Талант_Провидение.png"
                                                        style="width: 48px"
                                                        alt="Предводитель">
                                                </a>
                                                <p class="w-2/3">
                                                    - Можем сокращать кд скила "Надёжная защита".
                                                </p>
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

