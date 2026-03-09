<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import Elink from "@/Components/Elink.vue";
</script>

<template>
    <Head title="65-lvl"/>

    <AuthenticatedLayout>
        <template #header>
            <h1
                class="text-xl font-semibold leading-tight text-gray-200"
            >
                Что делать после достижения 65 уровня?
            </h1>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-gray-800 shadow-sm sm:rounded-lg"
                >
                    <div class="p-6 text-gray-100">
                        <p class="mb-4">
                            После достижения 65 уровня нужно хотя бы пару раз потрогать весь контент. Сделать шмотки,
                            посмотреть все локации, пройти главный квест, пройти все данжи, посмотреть на всех мировых
                            боссов...
                        </p>
                        <div
                            class="bg-white/10 backdrop-blur-md rounded-2xl shadow-xl border border-white/20 p-6 text-gray-200">
                            <div>
                                <p class="text-lg font-medium text-white/90 mb-3">
                                    ⚔️ Основной endgame контент состоит из:
                                </p>
                                <ul class="space-y-2">
                                    <li class="flex items-start gap-2">
                                        <span
                                            class="inline-flex items-center justify-center bg-purple-400/20 text-purple-400 font-bold rounded-full w-6 h-6 shrink-0 mt-0.5 text-sm">•</span>
                                        <span>Фарм денег и карт</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span
                                            class="inline-flex items-center justify-center bg-purple-400/20 text-purple-400 font-bold rounded-full w-6 h-6 shrink-0 mt-0.5 text-sm">•</span>
                                        <span>
                    Походы на
                    <elink class="text-blue-400 hover:text-blue-300 underline underline-offset-2 transition"
                           :href="route('guides.bosses')">
                        мировых боссов
                    </elink>
                    и
                    <elink class="text-blue-400 hover:text-blue-300 underline underline-offset-2 transition"
                           :href="route('guides.bosses')">
                        элиток
                    </elink>
                </span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span
                                            class="inline-flex items-center justify-center bg-purple-400/20 text-purple-400 font-bold rounded-full w-6 h-6 shrink-0 mt-0.5 text-sm">•</span>
                                        <span>Выполнение длинной цепочки квестов</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span
                                            class="inline-flex items-center justify-center bg-purple-400/20 text-purple-400 font-bold rounded-full w-6 h-6 shrink-0 mt-0.5 text-sm">•</span>
                                        <span>Крафт топ шмота <span
                                            class="text-sm text-gray-400">(17кк на одну шмотку)</span></span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span
                                            class="inline-flex items-center justify-center bg-purple-400/20 text-purple-400 font-bold rounded-full w-6 h-6 shrink-0 mt-0.5 text-sm">•</span>
                                        <span>Заточка и покраска <span class="text-sm text-gray-400">(180кк на одну шмотку)</span></span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span
                                            class="inline-flex items-center justify-center bg-purple-400/20 text-purple-400 font-bold rounded-full w-6 h-6 shrink-0 mt-0.5 text-sm">•</span>
                                        <span>Прохождение сложнейших данжей <span class="text-sm text-gray-400">(4ки и 8ки)</span></span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span
                                            class="inline-flex items-center justify-center bg-purple-400/20 text-purple-400 font-bold rounded-full w-6 h-6 shrink-0 mt-0.5 text-sm">•</span>
                                        <span>PVP активности <span
                                            class="text-sm text-gray-400">(Поле боя, Арены, Замки, Аркон, PVP боссы)</span></span>
                                    </li>
                                </ul>
                            </div>

                            <div
                                class="mt-6 p-3 bg-black/20 rounded-lg border-l-4 border-yellow-500 text-sm leading-relaxed">
                                <p class="flex items-start gap-2">
                                    Ссылка туда, ссылка сюда... Куда туда сюда? Я забыл :0
                                    Наверное я хотел прикрепить гайды на
                                    <elink href="https://www.youtube.com/watch?v=fNBN_BcqVHU">4ки</elink>
                                    и
                                    <elink href="https://www.youtube.com/watch?v=SiSehBTaF3E">8ки</elink>
                                </p>
                            </div>
                        </div>
                        <p class="mt-4">
                            Лично мне из всех активностей, когда у тебя уже есть шмот нравиться только три вещи. Это
                            Арены. Мировые боссы при этом не важно ДД ты
                            или Сап.<br> И последнее это Торговля. Находите гильдию, общайтесь, веселитесь :3
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
