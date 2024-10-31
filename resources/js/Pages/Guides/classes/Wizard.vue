<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import {Accordion, AccordionContent, AccordionItem, AccordionTrigger} from "@/Components/ui/accordion/index.js";
import {Badge} from "@/Components/ui/badge/index.js";
</script>

<template>
    <Head title="Волшебник"/>

    <AuthenticatedLayout>
        <template #header>
            <h1
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                Гайд на Волшебника
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
                                    Это маг - <a
                                    class="text-orange-500 font-bold"
                                    href="https://royalquest.info/index.php/Волшебник"
                                    target="_blank">Волшебник</a>
                                </p>
                                <div class="flex gap-2 my-3">
                                    <badge
                                        class="bg-green-700 hover:bg-green-600 transition-colors duration-700">
                                        Легко фармит любые локации
                                    </badge>
                                    <badge
                                        class="bg-green-700 hover:bg-green-600 transition-colors duration-700">
                                        Быстро бегает
                                    </badge>
                                    <badge
                                        class="bg-green-700 hover:bg-green-600 transition-colors duration-700">
                                        Может качать других игроков, с любой разницей в уровне
                                    </badge>
                                    <badge
                                        class="bg-green-700 hover:bg-green-600 transition-colors duration-700">
                                        Один из самых лучших классов для прокачки
                                    </badge>
                                </div>
                                <div class="flex gap-2 mb-6">
                                    <badge
                                        class="bg-yellow-500 hover:bg-red-500 transition-colors duration-700">
                                        Не нужен на данжах если танк хорошо одет
                                    </badge>
                                    <badge
                                        class="bg-yellow-500 hover:bg-red-500 transition-colors duration-700">
                                        Маленький урон в одну цель
                                    </badge>
                                    <badge
                                        class="bg-yellow-500 hover:bg-red-500 transition-colors duration-700">
                                        Нужны прямые руки
                                    </badge>
                                </div>
                                <div class="text-base">
                                    <p>Волшебник - класс который является одним из самых сильных на старте. Он имеет
                                        высокую скорость бега, огромную выживаемость, и неплохой урон по толпе. И имеет
                                        много контроля, что полезно в PVP
                                        <br><br>
                                        Волшебник легко водит парики за счёт своей мобильности. Он может агрить мобов а
                                        потом продолжать собирать парик так, чтобы держать дистанцию между монстрами и
                                        не получать урон. Волшебник довольно вариативный класс, но какой бы билд вы не
                                        сделали, вы всё равно будете довольно сильным классом.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <Accordion type="multiply" :default-value="['intro']">
                            <AccordionItem class="text-2xl" value="intro">
                                <AccordionTrigger>Таланты/билды</AccordionTrigger>
                                <AccordionContent>
                                    <div>
                                        <p class="mb-4 text-base">
                                            Начнём с билда который я мы будем строить на 20 уровне. И как он
                                            будет меняться. После достижения у нас есть 2 варианта. Мы может сделать
                                            билд в котором мы сможем больше хилить и держать стаки (билд слева). Он
                                            будет полезней, если вы ходите данжи в пати. Если же вы всё время играете в
                                            соло, и водите парики, то лучше взять правый вариант
                                        </p>
                                        <div class="flex gap-6">
                                            <img src="/assets/images/skills/wizard/b1.png"
                                                 alt="Билд на ханта Royal Quest">
                                            <img src="/assets/images/skills/wizard/b2.png"
                                                 alt="Билд на ханта Royal Quest">
                                        </div>
                                        <div class="mt-3 text-lg">
                                            <p>
                                                Все таланты на волшебнике можно разделить на "ключевые" и "не ключевые".
                                                Вы можете построить свой билд, учитывая эти данные
                                                <br><br>
                                                Начнём с ключевых талантов.
                                            </p>
                                            <div class="flex gap-3 items-center my-3">
                                                <a href="https://royalquest.info/index.php/Волна_силы"
                                                   target="_blank"
                                                >
                                                    <img
                                                        src="https://royalquest.info/images/c/cc/Талант_Волна_силы.png"
                                                        style="width: 48px; border-radius: 100%"
                                                        alt="Жужжащие стрелы">
                                                </a>
                                                <p class="w-2/3">
                                                    - Достаточно полезный скилл, благодаря которому мобы дольше будут
                                                    стоить в стене огня. Он так же накладывает на врагов "Бессилие", что
                                                    полезно на данжах
                                                </p>
                                            </div>
                                            <div class="flex gap-3 items-center my-3">
                                                <a href="https://royalquest.info/index.php/Талант_—_Пылающая_преграда"
                                                   target="_blank"
                                                >
                                                    <img
                                                        src="https://royalquest.info/images/d/d9/Талант_Пылающая_преграда.png"
                                                        style="width: 48px"
                                                        alt="Пылающая_преграда">
                                                </a>
                                                <p class="w-2/3">
                                                    - Талант "Пылающая преграда" стоит взять ещё на 8 уровне и он будет
                                                    помогать убивать мобов на любом этапе игры. Стена огня главный
                                                    дамажащий скилл мага.
                                                </p>
                                            </div>
                                            <div class="flex gap-3 items-center my-3">
                                                <a href="https://royalquest.info/index.php/Талант_—_Совершенный_щит"
                                                   target="_blank"
                                                >
                                                    <img
                                                        src="https://royalquest.info/images/a/ae/Талант_Совершенный_щит.png"
                                                        style="width: 48px"
                                                        alt="Совершенный щит">
                                                </a>
                                                <p class="w-2/3">
                                                    - Талант "Совершенный щит" будет очень полезным, если вы водите
                                                    парики. Он сильно увеличит вашу выживаемость, а так же откроет путь
                                                    к следующему таланту)
                                                </p>
                                            </div>
                                            <div class="flex gap-3 items-center my-3">
                                                <a href="https://royalquest.info/index.php/Талант_—_Мастер_телепортации"
                                                   target="_blank"
                                                >
                                                    <img
                                                        src="https://royalquest.info/images/d/dc/Талант_Мастер_телепортации.png"
                                                        style="width: 48px"
                                                        alt="Совершенный щит">
                                                </a>
                                                <p class="w-2/3">
                                                    - Талант "Мастер телепортации" будет очень имбовым, и позволит вам
                                                    легче накапливать концентрацию. Если вы не играли на
                                                    волшебнике раньше, то 100% рекомендую взять его
                                                </p>
                                            </div>
                                            <div class="my-6">
                                                <p>
                                                    Некоторые таланты имеют неплохие альтернативы, которые вы можете
                                                    взять:
                                                </p>
                                            </div>
                                            <div class="flex gap-3 items-center my-3">
                                                <a href="https://royalquest.info/index.php/Талант_—_Хранитель_жизни"
                                                   target="_blank"
                                                >
                                                    <img
                                                        src="https://royalquest.info/images/0/08/Талант_Хранитель_жизни.png"
                                                        style="width: 48px"
                                                        alt="Отстрел">
                                                </a>
                                                <p class="w-2/3">
                                                    - Этот талант так же имеет смысл быть. Тут на ваш вкус и цвет)
                                                </p>
                                            </div>
                                            <div class="flex gap-3 items-center my-3">
                                                <a href="https://royalquest.info/index.php/Талант_—_Чистая_телепортация"
                                                   target="_blank"
                                                >
                                                    <img
                                                        src="https://royalquest.info/images/9/9e/Талант_Чистая_телепортация.png"
                                                        style="width: 48px"
                                                        alt="Разъедающие боеприпасы">
                                                </a>
                                                <p class="w-2/3">
                                                    - Когда вы приловчитесь накапливать концентрацию, взять нижний
                                                    талант в 4 ветке, будет более профитно, если вы фармите места где
                                                    много дебафов
                                                </p>
                                            </div>
                                            <div class="mt-11">
                                                <p>
                                                    Бла бла бла
                                                    <br>
                                                    <br>
                                                </p>
                                            </div>
                                            <div class="flex gap-6">
                                                <img src="/assets/images/skills/wizard/b3.png"
                                                     alt="Билд на ханта Royal Quest">
                                                <img src="/assets/images/skills/wizard/b4.png"
                                                     alt="Билд на ханта Royal Quest">
                                            </div>

                                        </div>

                                    </div>
                                </AccordionContent>
                            </AccordionItem>
                            <AccordionItem class="text-2xl" value="item-7">
                                <AccordionTrigger>Сборки (ссылки на калькулятор)</AccordionTrigger>
                                <AccordionContent>
                                    <p class="text-green-500 font-bold text-2xl">//TODO надо доделать)</p>
                                    <div>
                                        1.
                                        GAQuuCsAg4gMLuy22ApIcBa42Y2b2LQhs1cgv1SXx56BgqWBk4WCk4WCEe5dDw/r2okiHkT8AwAAAA==
                                        <br>
                                        2. (фулл сборки)<br>
                                        3. Сборки должны быть с ружьём, и луком<br>
                                        4. Вот видосик где чел разные билды тестит
                                        https://www.youtube.com/watch?v=-Bl3ydeSPoM<br>
                                    </div>
                                    <p>
                                        Бомже сборка<br>
                                        Актуальная сборка<br>
                                        Предметы которые стоит отметить
                                    </p>
                                    <p class="font-bold text-xl">
                                        Если вы готовы помочь с доработкой напишите мне в дс
                                    </p>
                                </AccordionContent>
                            </AccordionItem>
                        </Accordion>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

