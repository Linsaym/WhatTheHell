<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import Elink from "@/Components/Elink.vue";
</script>

<template>
    <Head title="Боссы"/>

    <AuthenticatedLayout>
        <template #header>
            <h1
                class="text-xl font-semibold leading-tight text-gray-200"
            >
                Механики и скиллы боссов
            </h1>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden  shadow-sm sm:rounded-lg bg-gray-800"
                >
                    <div class="p-6 pb-2">
                        Я хотел расписать скиллы каждого босса, потому что я знаю как оно работает. Я даже сделал кучу
                        гифок, но потом засомневался, как это лучше сделать? Скорее всего лучше не прописывать каждого,
                        а снять ролик про всех сразу. Подобные ролики уже делали
                        <elink href="https://www.youtube.com/@nisdoka2328/videos">Remi</elink>
                        и Nestery. Remi - идеально, коротко и информативно рассказал о PVP боссах, а Nestery с кучей
                        воды, с кучей ошибок и вредных советов рассказал о PVE боссах. Если ты тот отважный PVE воин,
                        который готов заснять и нарезать фрагменты о PVE боссах, я с радостью помогу тебе и сделаем
                        клёвый ролик
                    </div>
                    <div class="p-6 text-gray-100">
                        Поэтому пройдёмся по базе. Я напишу про САМЫЕ ВАЖНЫЕ скиллы каждого босса которые нужно знать.
                        Так же мы разберём пару фишек которые вам пригодятся.
                        <elink :href="route('guides.bosses-spawn')">Точки спавна</elink>
                        всех боссов и элиток вы можете глянуть в отдельной теме
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
