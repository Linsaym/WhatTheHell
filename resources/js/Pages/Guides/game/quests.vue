<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import NavLink from "@/Components/NavLink.vue";
import {Accordion, AccordionContent, AccordionItem, AccordionTrigger} from "@/Components/ui/accordion/index.js";
import ExternalLink from "@/Components/ExternalLink.vue";
</script>

<template>
    <Head title="Квесты"/>

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                Полезные квесты
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800"
                >
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h1 class="text-3xl font-bold text-center mb-8">Квесты в Royal Quest</h1>

                        <!-- Основные квесты -->
                        <section class="mb-10">
                            <h2 class="text-2xl font-semibold mb-4">Открытие Эльки</h2>
                            <ul>
                                <li>
                                    <ExternalLink
                                        href="https://royalquest.info/index.php/Задания,_связанные_с_получением_профессии"
                                    >
                                        20 лвл - Получение профессии
                                    </ExternalLink>
                                </li>
                                <li>
                                    <ExternalLink
                                        href="https://royalquest.info/index.php/Цепочка_заданий_—_Королевское_доверие">
                                        50 лвл - Королевское доверие
                                    </ExternalLink>
                                </li>
                                <li>
                                    <ExternalLink href="https://royalquest.info/index.php/Цепочка_заданий_—_Ревизор"
                                    >
                                        51 лвл - Ревизор
                                    </ExternalLink>
                                </li>
                                <li>
                                    <ExternalLink href="https://royalquest.info/index.php/Цепочка_заданий_—_Север"
                                    >
                                        60 лвл - Север
                                    </ExternalLink>
                                </li>
                                <li>
                                    <ExternalLink href="https://royalquest.info/index.php/Цепочка_заданий_—_Лёд"
                                    >
                                        60 лвл - Лёд
                                    </ExternalLink>
                                </li>
                                <li>
                                    <ExternalLink href="https://royalquest.info/index.php/Цепочка_заданий_—_Угроза"
                                    >
                                        60 лвл - Угроза
                                    </ExternalLink>
                                </li>
                            </ul>
                            <Accordion :default-value="[]">
                                <Accordion-item value="1">
                                    <Accordion-trigger>Список предметов нужных для открытия Эльки</Accordion-trigger>
                                    <Accordion-content>
                                        <div>
                                            <p class="text-green-500">//TODO тут будет потом чек лист</p>
                                            <ul>
                                                <li>
                                                    <ExternalLink
                                                        href="https://royalquest.info/index.php/Алхимическое_зелье_отваги">
                                                        1 шт - Алхимическое зелье отваги
                                                    </ExternalLink>
                                                </li>
                                                <li>
                                                    <ExternalLink
                                                        href="https://royalquest.info/index.php/Голова_снегобея">10 шт -
                                                        Голова снегобея
                                                    </ExternalLink>
                                                </li>
                                                <li>
                                                    <ExternalLink
                                                        href="https://royalquest.info/index.php/Панцирь_северной_жужи">8
                                                        шт - Панцирь северной жужи
                                                    </ExternalLink>
                                                </li>
                                                <li>
                                                    <ExternalLink
                                                        href="https://royalquest.info/index.php/Хвостик_ройки">16 шт -
                                                        Хвостик ройки
                                                    </ExternalLink>
                                                </li>
                                                <li>
                                                    <ExternalLink
                                                        href="https://royalquest.info/index.php/Шкура_вальдерстая">12 шт
                                                        - Шкура вальдерстая
                                                    </ExternalLink>
                                                </li>
                                                <li>
                                                    <ExternalLink href="https://royalquest.info/index.php/Серый_песок">
                                                        10 шт - Серый песок
                                                    </ExternalLink>
                                                </li>
                                                <li>
                                                    <ExternalLink href="https://royalquest.info/index.php/Индевень">12
                                                        шт - Индевень
                                                    </ExternalLink>
                                                </li>
                                                <li>
                                                    <ExternalLink
                                                        href="https://royalquest.info/index.php/Жгучее_щупальце">16 шт -
                                                        Жгучее щупальце
                                                    </ExternalLink>
                                                </li>
                                                <li>
                                                    <ExternalLink
                                                        href="https://royalquest.info/index.php/Красивое_перо">14 шт -
                                                        Красивое перо
                                                    </ExternalLink>
                                                </li>
                                                <li>
                                                    <ExternalLink
                                                        href="https://royalquest.info/index.php/Мясо_снежной_жужи">
                                                        8 шт - Мясо снежной жужи
                                                    </ExternalLink>
                                                </li>
                                                <li>
                                                    <ExternalLink
                                                        href="https://royalquest.info/index.php/Пещерная_соль">15 шт -
                                                        Пещерная соль
                                                    </ExternalLink>
                                                </li>
                                                <li>
                                                    <ExternalLink
                                                        href="https://royalquest.info/index.php/Челюсть_крылозуба">10 шт
                                                        - Челюсть крылозуба
                                                    </ExternalLink>
                                                </li>
                                                <li>
                                                    <ExternalLink
                                                        href="https://royalquest.info/index.php/Задание_—_Угроза._Еда_для_заключённых">
                                                        Купить можно в таверне - Еда для заключённых
                                                    </ExternalLink>
                                                </li>
                                                <li>
                                                    <ExternalLink
                                                        href="https://royalquest.info/index.php/Кучка_старой_пыли">10 шт
                                                        - Кучка старой пыли
                                                    </ExternalLink>
                                                </li>
                                                <li>
                                                    <ExternalLink
                                                        href="https://royalquest.info/index.php/Закрученный_рог">14 шт -
                                                        Закрученный рог
                                                    </ExternalLink>
                                                </li>
                                                <li>
                                                    <ExternalLink
                                                        href="https://royalquest.info/index.php/Панцирь_снегобея">18 шт
                                                        - Панцирь снегобея
                                                    </ExternalLink>
                                                </li>
                                                <li>
                                                    <ExternalLink
                                                        href="https://royalquest.info/index.php/Ядовитое_перо">20 шт -
                                                        Ядовитое перо
                                                    </ExternalLink
                                                    >
                                                </li>
                                            </ul>
                                        </div>
                                    </Accordion-content>
                                </Accordion-item>
                            </Accordion>
                        </section>

                        <!-- Полезные квесты -->
                        <section class="mb-10">
                            <h2 class="text-2xl font-semibold mb-4">Полезные квесты</h2>
                            <ul>
                                <li>
                                    <ExternalLink href="https://royalquest.info/index.php/Задание_—_Огнеупорный_костюм"
                                    >
                                        49 лвл - Огнеупорный костюм (чёрный камень)
                                    </ExternalLink>
                                </li>
                                <li>
                                    <ExternalLink href="https://royalquest.info/index.php/Задание_—_Посох_для_Басты"
                                    >
                                        55 лвл - Посох для Басты → Сумрачный посох (чёрный камень, руна)
                                    </ExternalLink>
                                </li>
                                <li>
                                    <ExternalLink href="https://royalquest.info/index.php/Задание_—_Теория_Хобеля._Овен"
                                    >
                                        55 лвл - Теория Хобеля. Овен (открывает дейлики)
                                    </ExternalLink>
                                </li>
                                <li>
                                    <ExternalLink
                                        href="https://royalquest.info/index.php/Задание_—_Тайный_путь_в_Ворлакс"
                                    >
                                        40 лвл - Тайный путь в Ворлакс (открывает проход в катакомбы)
                                    </ExternalLink>
                                </li>
                                <li>
                                    <ExternalLink
                                        href="https://royalquest.info/index.php/Задание_—_Экспедиция_в_Усыпальницу._Энергокуб"
                                    >
                                        55 лвл - Экспедиция в Усыпальницу. Энергокуб (открывает дейлик)
                                    </ExternalLink>
                                </li>
                                <li>
                                    <ExternalLink href="https://royalquest.info/index.php/Задание_—_Куколки_загров"
                                    >
                                        55 лвл - Куколки загров (открывается дейлик)
                                    </ExternalLink>
                                </li>
                                <li>
                                    <ExternalLink href="https://royalquest.info/index.php/Задание_—_Между_сном_и_явью"
                                    >
                                        46-55 лвл - Между сном и явью → Сумрачная пещера → Поиски статуи Морры →
                                        Милосердная Морра (2 клевера + красный камень)
                                    </ExternalLink>
                                </li>
                                <li>
                                    <ExternalLink
                                        href="https://royalquest.info/index.php/Задание_—_Поместье_Соло._Жертва_нападения"
                                    >
                                        55 лвл - Поместье Соло. Жертва нападения (открывает особняк Соло)
                                    </ExternalLink>
                                </li>
                                <li>
                                    <ExternalLink href="https://royalquest.info/index.php/Задание_—_Проклятое_семя"
                                    >
                                        57 лвл - Проклятое семя (клевер)
                                    </ExternalLink>
                                </li>
                                <li>
                                    <ExternalLink
                                        href="https://royalquest.info/index.php/Задание_—_Источник_великой_силы"
                                    >
                                        58 лвл - Источник великой силы (белый камень)
                                    </ExternalLink>
                                </li>
                                <li>
                                    <ExternalLink href="https://royalquest.info/index.php/Задание_—_Письмо_кардинала"
                                    >
                                        39-48 лвл - Письмо кардинала → Мокрая дипломатия → Сбор даров → Рост племени →
                                        Защитить икру хваги Жучи (открывает дейлик)
                                    </ExternalLink>
                                </li>
                            </ul>
                        </section>
                        <section>
                            <p class="text-green-500">
                                //TODO добавить чек лист, чтобы можно было отмечать выполненные квесты, и оно
                                привязывалось к аккаунту
                                <br>
                                <ExternalLink href="https://royalquest.info/index.php/Ежедневные_задания">
                                    Ежедневные задания
                                </ExternalLink>
                            </p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

