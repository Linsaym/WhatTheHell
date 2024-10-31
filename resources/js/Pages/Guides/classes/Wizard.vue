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
                                                 alt="Билд на Волшебника Royal Quest">
                                            <img src="/assets/images/skills/wizard/b2.png"
                                                 alt="Билд на Волшебника Royal Quest">
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
                                                        alt="Мастер телепортации">
                                                </a>
                                                <p class="w-2/3">
                                                    - Талант "Мастер телепортации", позволит вам
                                                    легче накапливать концентрацию. Если вы не играли на
                                                    волшебнике раньше, то 100% рекомендую взять его
                                                </p>
                                            </div>
                                            <div class="flex gap-3 items-center my-3">
                                                <a href="https://royalquest.info/index.php/Талант_—_Заживление"
                                                   target="_blank"
                                                >
                                                    <img
                                                        src="https://royalquest.info/images/9/92/Талант_Заживление.png"
                                                        style="width: 48px"
                                                        alt="Заживление">
                                                </a>
                                                <p class="w-2/3">
                                                    - Если взять этот талант и <a href="https://royalquest.info/index.php/Талант_—_Круг_исцеления" target="_blank">
                                                    Круг исцеления</a>, то вы сможете поддерживать "стаки", увеличивая защиту более чем на 30%. Об этой механике я расскажу ниже
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
                                                        alt="Хранитель жизни">
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
                                                        alt="Чистая телепортация">
                                                </a>
                                                <p class="w-2/3">
                                                    - Когда вы приловчитесь накапливать концентрацию, взять нижний
                                                    талант в 4 ветке, будет более профитно, если вы фармите места где
                                                    много дебафов
                                                </p>
                                            </div>
                                            <div class="flex gap-3 items-center my-3">
                                                <a href="https://royalquest.info/index.php/Талант_—_Разрушитель_чар"
                                                   target="_blank"
                                                >
                                                    <img
                                                        src="https://royalquest.info/images/c/c9/Талант_Разрушитель_чар.png"
                                                        style="width: 48px"
                                                        alt="Разрушитель чар">
                                                </a>
                                                <p class="w-2/3">
                                                    - Опять же если вы получаете много дебафов и часто участвуете в PVP,
                                                    этот талант может быть хорошим вариантом. Щит при фарме ломается
                                                    довольно быстро.
                                                </p>
                                            </div>
                                            <div class="flex gap-3 items-center my-3">
                                                <a href="https://royalquest.info/index.php/Талант_—_Ошеломление"
                                                   target="_blank"
                                                >
                                                    <img
                                                        src="https://royalquest.info/images/b/b9/Талант_Ошеломление.png"
                                                        style="width: 48px"
                                                        alt="Ошеломление">
                                                </a>
                                                <p class="w-2/3">
                                                    - На высоких уровнях вам надо будет проходить данжи, в которых нужно убить босса на время.
                                                    Этот талант увеличит урон всей команды более чем на 30%
                                                </p>
                                            </div>
                                            <div class="mt-11">
                                                <p>
                                                    Так а теперь постараюсь рассказать про талант  <a href="https://royalquest.info/index.php/Талант_—_Заживление" class="text-blue-500 underline" target="_blank">Заживление</a>
                                                    и о том как держать стаки. Как можно понять из описания,
                                                    этот талант позволяет накладывать на игроков "Крепкие доспехи".
                                                    Фишка в том, что чередуя залинания <a href="https://royalquest.info/index.php/Регенерация" class="text-blue-500 underline" target="_blank">Регенирация</a>
                                                    и <a href="https://royalquest.info/index.php/Лечение" class="text-blue-500 underline" target="_blank">Лечение</a>,
                                                    вы можете настакать 14 эффектов, что увеличит защиту на 3*14=42% !
                                                    <br><br>
                                                </p>
                                                <p>
                                                    А теперь про талант <a href="https://royalquest.info/index.php/Талант_—_Ошеломление" class="text-blue-500 underline" target="_blank">Ошеломление</a> дело в том
                                                    Что "Устойчивость к стихиям", очень сильно режет весь урон в игре. Если у игрока вставлена карта элемента в оружие, то все атаки становятся элементальными.
                                                    Снижая эту "устойчивость" вы увеличиваете урон всех кто бьёт этот таргет более чем на 30% (при максимальных стаках).
                                                    Подробнее о элементах вы можете почитать на <a class="text-blue-500 underline" href="https://royalquest.info/index.php/Элементы" target="_blank">RQ wiki</a>
                                                    <br><br>
                                                </p>
                                                <p>
                                                    Подводя итоги мы получаем 2 основных PVE билда на капе. В первом нам легче фармить(тот что слева), а во втором мы более полезны на данжах,
                                                    где нужно наносить много урона по соло цели (4-8ки + усыпалка).
                                                    <br><br>
                                                </p>
                                            </div>
                                            <div class="flex gap-6">
                                                <img src="/assets/images/skills/wizard/b3.png"
                                                     alt="Билд на Волшебника Royal Quest">
                                                <img src="/assets/images/skills/wizard/b4.png"
                                                     alt="Билд на Волшебника с ошеломлением Royal Quest">
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
                                        GAciuAIAiMhkk2WJ0aoEO4GGq4CKTUtnewXuS3UVSyU6uwVaFgZitgpitgZ+lgY8ZK0XBEEAAAAAAA==
                                        <br>
                                        2. (фулл сборки)<br>
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

