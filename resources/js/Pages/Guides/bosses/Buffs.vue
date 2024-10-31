<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import NavLink from "@/Components/NavLink.vue";
import {Accordion, AccordionContent, AccordionItem, AccordionTrigger} from "@/Components/ui/accordion/index.js";
import {Badge} from "@/Components/ui/badge/index.js";
</script>

<template>
    <Head title="Школа баферства"/>

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                Школа баферства
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800"
                >
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div>
                            <h3 class="text-3xl font-bold mb-6">Вступление</h3>
                            <div class="space-y-4">
                                <p class="text-lg">
                                    С каждого босса дают только 4 сундука. Эти сундуки получают игроки, которые нанесли
                                    наибольшее количество урона.
                                </p>
                                <div class="text-lg space-y-4">
                                    <p>Чтобы нанести максимум урона, собирается пачка из 4 игроков.</p>
                                    <p class="text-green-600 italic">
                                        //TODO Это нужно стилизовать и оптимизировать,
                                        добавить картинки и так далее
                                    </p>
                                    <p>
                                        Здесь мы научим вас азам баферского ремесла: зачем оно нужно и как помогает.
                                        Дроп с боссов и элиток получают только четыре игрока с наибольшим уроном.
                                        Исключение составляют ПВП боссы, но это не сюда. Даже самый сильный ДД не
                                        справится в одиночку!
                                        <br><br>
                                        У крестоносца, тёмного рыцаря и лучника есть различные умения и таланты,
                                        усиливающие урон.
                                        Сейчас обсудим их более детально, а о талантах вы можете узнать в гайдах своего
                                        класса.
                                    </p>
                                    <p>
                                        Знамя: в радиусе 5 метров от знамени Тёмный рыцарь крадёт здоровье врагов в
                                        размере 9-10%
                                        отнятого здоровья, а его союзники наносят повышенный на 8% урон.
                                        <br><br>
                                        <span class="font-semibold">Мощь (х3):</span> Увеличивает атаку на 6%.
                                        <br><br>
                                        Увеличивает атаку союзников на 7% в радиусе действия.
                                        <span class="font-semibold">Очищение:</span> рассеивает отрицательный эффект
                                        каждые 7 сек.
                                        с случайного союзника.
                                        <span class="font-semibold">Массовое воздействие:</span> исцеляет союзников,
                                        однако эффективность зависит от их числа.
                                        <br><br>
                                        <span class="font-semibold">На 10 сек.</span> охотник получает бонус +24% к
                                        скорости атаки
                                        и скорости бега. Умение также воздействует на членов группы, но с уменьшенной
                                        эффективностью.
                                    </p>
                                    <p class="space-y-2">
                                        <a href="https://royalquest.info/index.php/Мишень" target="_blank"
                                           class="text-blue-600 underline">
                                            Мишень:
                                        </a> Указанный противник получает метку на 15 сек., увеличивая урон от дальних
                                        атак на 15%.
                                        <br>
                                        <a href="https://royalquest.info/index.php/Клеймо_еретика" target="_blank"
                                           class="text-blue-600 underline">
                                            Клеймо еретика:
                                        </a> Помечает противника на 12 сек., повышая урон от умений и обычных атак на
                                        25%.
                                    </p>
                                    <p class="space-y-2">
                                        Также есть навыки, которые не бафают урон напрямую, но помогают в сражениях:
                                        <br>
                                        <a href="https://royalquest.info/index.php/Надёжная_защита" target="_blank"
                                           class="text-blue-600 underline">
                                            Надёжная защита
                                        </a> — помогает избежать контроля.
                                        <br>
                                        <a href="https://royalquest.info/index.php/Свет_Ауры" target="_blank"
                                           class="text-blue-600 underline">
                                            Свет Ауры
                                        </a> — помогает снизить получаемый урон.
                                        <br>
                                        <a href="https://royalquest.info/index.php/Талант_—_Жертва" target="_blank"
                                           class="text-blue-600 underline">
                                            Жертва
                                        </a> — также снижает получаемый урон.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

