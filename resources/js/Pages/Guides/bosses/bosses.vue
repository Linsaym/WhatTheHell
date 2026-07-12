<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import {Link} from '@inertiajs/vue3';
import Elink from "@/Components/Elink.vue";
</script>

<template>
    <Head title="Боссы"/>

    <AuthenticatedLayout>
        <template #header>
            <h1 class="text-xl font-semibold leading-tight text-gray-200">
                Механики и скиллы боссов
            </h1>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-gray-800 shadow-sm sm:rounded-lg border border-gray-700">
                    <div class="p-6 text-gray-100">

                        <!-- Вступление -->
                        <div class="mb-6">
                            <p class="text-gray-300 text-base leading-relaxed">
                                Я хотел расписать скиллы каждого босса, потому что я знаю, как оно работает.
                                Я даже сделал кучу гифок, но потом засомневался, как это лучше сделать?
                                Скорее всего, лучше не прописывать каждого, а снять ролик про всех сразу.
                            </p>
                        </div>

                        <!-- Блок с видео -->
                        <div class="bg-gray-700/30 rounded-lg p-5 mb-6 border border-gray-600">
                            <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider mb-3">
                                🎬 Примеры видео
                            </h3>
                            <div class="space-y-2">
                                <p class="text-gray-300 text-sm">
                                    <span class="text-green-400">✓ </span>
                                    <Elink href="https://www.youtube.com/watch?v=jWctZ4a5zDE"
                                           class="text-blue-400 hover:text-blue-300 transition-colors">
                                        Remi
                                    </Elink>
                                    — идеально, коротко и информативно рассказал о PVP боссах
                                </p>
                                <p class="text-gray-300 text-sm">
                                    <span class="text-red-400">✗</span>
                                    Nestery — с кучей воды, ошибок и вредных советов о PVE боссах
                                </p>
                            </div>
                            <div class="mt-4 p-3 bg-orange-500/10 border border-orange-500/20 rounded-lg">
                                <p class="text-gray-300 text-sm">
                                    💡 Если ты тот отважный PVE воин, который готов заснять и нарезать фрагменты о PVE
                                    боссах —
                                    я с радостью помогу тебе, и мы сделаем клёвый ролик!
                                </p>
                            </div>
                        </div>

                        <!-- Разделитель -->
                        <div class="flex items-center gap-4 my-6">
                            <div class="h-px flex-1 bg-gray-600"></div>
                            <span class="text-xs text-gray-500">✦</span>
                            <div class="h-px flex-1 bg-gray-600"></div>
                        </div>

                        <!-- Основной контент -->
                        <div>
                            <p class="text-gray-300 text-base leading-relaxed">
                                Поэтому пройдёмся по базе. Я напишу про
                                <span class="text-orange-400 font-medium">САМЫЕ ВАЖНЫЕ</span> скиллы каждого босса,
                                которые нужно знать. Так же мы разберём пару фишек, которые вам пригодятся. Ай ладно я
                                устал. Ничего я не буду писать)))
                            </p>
                            <div class="mt-4 p-4 bg-gray-700/30 rounded-lg border border-gray-600">
                                <p class="text-gray-400 text-sm flex items-center gap-1">
                                    📍 Точки спавна всех боссов и элиток вы можете глянуть в
                                    <Link
                                        :href="route('guides.bosses-spawn')"
                                        class="text-orange-400 hover:text-orange-300 transition-colors font-medium">
                                        отдельной теме
                                    </Link>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style scoped>
/* Плавные переходы */
a {
    transition: all 0.2s ease;
}
</style>
