<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import {Accordion, AccordionContent, AccordionItem, AccordionTrigger} from "@/Components/ui/accordion/index.js";
import {Badge} from "@/Components/ui/badge/index.js";
import Elink from "@/Components/Elink.vue";
import HighlightBlock from "@/Components/HighlightBlock.vue";
import TalentCard from "@/Components/TalentCard.vue";
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
                            <h3 class="text-2xl font-bold mb-4">Прокачка</h3>
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
                                        Незаменимые баффы
                                    </badge>
                                    <badge
                                        class="bg-green-700 hover:bg-green-600 transition-colors duration-700">
                                        Сильный в PVP
                                    </badge>
                                </div>
                                <div class="flex gap-2 mb-6">
                                    <badge
                                        class="bg-green-700 hover:bg-green-600 transition-colors duration-700">
                                        Минимальные требования к шмоту
                                    </badge>
                                    <badge
                                        class="bg-green-700 hover:bg-green-600 transition-colors duration-700">
                                        Большая вариативность билдов
                                    </badge>
                                </div>
                                <div class="text-base">
                                    <p class="mb-4">Крестоносец - сильнейший бафер в игре. За счёт его скила
                                        <elink
                                            href="https://royalquest.info/index.php/Клеймо_еретика">Клеймо
                                            еретика
                                        </elink>
                                        , увеличивает весь входящий урон от челенов группы
                                        на 35%, он является незаменимым классом в походах на боссов.
                                        После недавнего ребаланса это теперь <span class="text-red-600 font-bold">САМЫЙ ВАРИАТИВНЫЙ КЛАСС В ИГРЕ</span>
                                    </p>
                                    <highlight-block color="green">
                                        Хоть мы и можем сделать из Крестоносца ДД, чтобы было удобнее фармить, но он
                                        будет уступать по урону другим ДД классам. Но при этом плюсом останутся его ауры
                                        и клеймо. В итоге с ним команда суммарно будет наносить больше урона чем с
                                        другим ДД, а также иметь
                                        высокую выживаемость
                                    </highlight-block>
                                </div>
                            </div>
                        </div>
                        <Accordion type="multiply" :default-value="['item-1']">
                            <AccordionItem class="text-2xl" value="item-1">
                                <AccordionTrigger>Таланты/билды</AccordionTrigger>
                                <AccordionContent>
                                    <div class="text-lg">
                                        <div class="mb-4">
                                            <p class="mb-4">
                                                Начнём с билда для прокачки. Ниже вариант, в котором очень удобно
                                                качаться в соло, но при этом у нас остаётся возможность бегать с кем-то
                                                в группе. Такой билд можно оставить до конца игры вплоть до 65.
                                                Раньше я не любил ездить на петах, но всё поменялось 😅😎
                                            </p>
                                            <div class="mb-4">
                                                <p class="mb-6">
                                                    Самым профитным к прокачке будет <span
                                                    class="font-bold text-green-600">гибридный билд</span>.
                                                    Дело в том, что в
                                                    нём наш урон куда больше, чем в любом другом билде. За счёт пета
                                                    мы получаем огромную скорость передвижения без каких либо затрат.
                                                    Скорость передвижения - это очень важный стат. Он помогает нам
                                                    как банально быстрее передвигаться, так и не умирать, пока мы
                                                    собираем мобов. Ниже билды <span class="font-bold">20 лвл</span> и
                                                    <span
                                                        class="font-bold">60 лвл</span>
                                                </p>
                                                <div class="flex gap-6">
                                                    <img src="/assets/images/skills/crusader/b20.png"
                                                         alt="Билд на PVE креста Royal Quest">
                                                    <img src="/assets/images/skills/crusader/b65c.png"
                                                         alt="Билд на PVP креста Royal Quest">
                                                </div>
                                            </div>
                                            <p class="mb-6">
                                                Я выделил квадратиками ключевые таланты, а так же уровень на котором мы
                                                их вкачиваем. Очки талантов нам дают каждые 4 уровня, поэтому когда
                                                вкачивать остальные таланты, вы можете догадаться сами. Погнали
                                                разбирать почему именно так
                                            </p>
                                            <TalentCard
                                                name="Массовое уничтожение"
                                                icon="https://royalquest.info/images/5/56/Талант_Массовое_уничтожение.png"
                                                link="https://royalquest.info/index.php/Талант_—_Массовое_уничтожение"
                                            >
                                                Помимо того, что он сильно бустит наш дамаг, он так же делает, чтобы
                                                скилы<br>
                                                <elink href="https://royalquest.info/ru/Гнев">Гнев</elink><!---->,
                                                <elink href="https://royalquest.info/ru/Круговой_удар">
                                                    Круговой удар
                                                </elink>
                                                и
                                                <elink href="https://royalquest.info/ru/Возмездие">Возмездие</elink>
                                                били не только 5 целей, а всех кого касаются
                                            </TalentCard>
                                        </div>
                                        <p class="text-xl mb-4">
                                            Из за такой механики в наш прокаст кроме пронзания и прорыва
                                            добавляется все эти скилы. Кд пронзания 4 секунды и мы должны что-то
                                            вставить в это окно. Итого у нас получается такой порядок скилов:
                                        </p>
                                        <ol class="mb-6 list-decimal pl-5">
                                            <li>
                                                Хилимся и кидаем возмездие по кд пока собираем парик (можно так же
                                                кидать пронзание)
                                            </li>
                                            <li>
                                                Кидаем воодушевление и совершенку
                                            </li>
                                            <li>
                                                Слезаем с коня и ставим флаг
                                            </li>
                                            <li>
                                                Кидаем планарку
                                            </li>
                                            <li>
                                                Топаем(Гнев), круговой удар
                                            </li>
                                            <li>
                                                Садимся на коня, даём пронзание и прорыв
                                            </li>
                                        </ol>
                                        <p class="mb-6">
                                            В любой момент комбинации мы можем похилиться (самое большое окно у нас
                                            - после прорыва), но в таком случае желательно не забыть слезть с коня,
                                            чтобы хил был больше. В большинстве случаев этого должно хватить, чтобы
                                            убить любой парик, даже если у вас не заточено оружие. Важно, что гнев
                                            накладывает <span class="text-green-600 font-bold">неповоротливость</span>.
                                            Это очень сильный дебаф, который делает нас почти бессмертными
                                        </p>
                                        <TalentCard
                                            class="mb-4"
                                            name="Сноровка"
                                            icon="https://royalquest.info/images/c/c7/Талант_Сноровка.png"
                                            link="https://royalquest.info/ru/Талант_—_Сноровка"
                                        >
                                            В начале игры у нас очень низкая скорость передвижения. В будущем мы сможем
                                            её разогнать с помощью карт, печатей и сапог. Но на старте без этого таланта
                                            мы будем очень медленные
                                        </TalentCard>
                                        <p class="text-xl mb-8">
                                            Даже на 20 уровне за счёт этих талантов уже можно приятно фармить любые
                                            парики, несмотря на то, что у нас нет пронзания, прорыва и флага. На курице
                                            мы будем быстро передвигаться по карте. Парики из обычных мобов мы
                                            будем шотать просто с гнева и кругового удара. Ни в одном другом билде
                                            у креста не будет столько дамага
                                        </p>
                                        <p class="text-xl mb-8">
                                            Надеюсь у меня получилось вас убедить, почему это хорошие таланты для
                                            старта. А теперь давайте разберём какие ключевые таланты качать дальше и
                                            почему этот билд лучший для начала игры (и остаётся актуальным в поздней
                                            стадии)
                                        </p>
                                        <TalentCard
                                            class="mb-4"
                                            name="Контроль эмоций"
                                            icon="https://royalquest.info/images/f/fa/Талант_Контроль_эмоций.png"
                                            link="https://royalquest.info/ru/Талант_—_Контроль_эмоций"
                                        >
                                            Этот талант сильно увеличит наш дамаг. К тому же у нас нет ни одной хорошей
                                            альтернативы на начальном этапе игры. Так как все остальные скилы пока что
                                            не доступны :(
                                        </TalentCard>
                                        <TalentCard
                                            class="mb-4"
                                            name="Королевский страж"
                                            icon="https://royalquest.info/images/f/f8/Талант_Королевский_страж.png"
                                            link="https://royalquest.info/ru/Талант_—_Королевский_страж"
                                        >
                                            Это ключевой талант, который безумно сильно повысит нашу выживаемость.<br>
                                            60% сопротивления урону, это безумно огромная цифра, которая сопоставима
                                            с несколькими тысячами защиты
                                        </TalentCard>
                                        <TalentCard
                                            class="mb-4"
                                            name="Чистота помыслов"
                                            icon="https://royalquest.info/images/d/da/Талант_Чистота_помыслов.png"
                                            link="https://royalquest.info/ru/Талант_—_Чистота_помыслов"
                                        >
                                            С этим талантом у нас наконец-то появляется нормальный отхил 😅<br>
                                            Да есть и неплохие таланты в
                                            ветке защита, но они всё равно будут проигрывать по выживаемости этому
                                            таланту.
                                        </TalentCard>
                                        <TalentCard
                                            class="mb-4"
                                            name="Свет Ауры"
                                            icon="https://royalquest.info/images/3/30/Талант_Свет_Ауры.png"
                                            link="https://royalquest.info/ru/Талант_—_Свет_Ауры"
                                        >
                                            Этот талант мы берём ради пассивного бонуса 15% хила. Но если мы неплохо
                                            оделись и хотим увеличить дамаг нашей команды в данжах и мировых боссах
                                            можно будет его поменять на талант
                                            <elink href="https://royalquest.info/ru/Талант_—_Яростный_боец">
                                                Яростный боец
                                            </elink>
                                        </TalentCard>
                                        <p>
                                            Теперь поговорим про лейт гейм. Мы можем оставить свой старый билд, или
                                            поменять ручку на яростного бойца. В PVE билде под данжи, мы не можем
                                            отказаться от талантов
                                            <elink href="https://royalquest.info/ru/Талант_—_Защитник">Защитник</elink>
                                            и
                                            <elink
                                                href="https://royalquest.info/index.php/Талант_—_Массовое_уничтожение">
                                                Массовое уничтожение
                                            </elink>
                                            (Благодаря второму мы держим агр мобов на Патаге и в Соло). Тогда мы получим
                                            2 говно билда. Ветка защита нам даёт 15% + доспехи + агр
                                        </p>
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

