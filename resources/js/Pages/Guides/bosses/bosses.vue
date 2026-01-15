<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import NavLink from "@/Components/NavLink.vue";
</script>

<template>
    <Head title="Боссы"/>

    <AuthenticatedLayout>
        <template #header>
            <h1
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                Механики и скилы боссов
            </h1>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800"
                >
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="mb-8">
                            <h2 class="text-2xl font-semibold mb-4">Порезка урона от уровня</h2>
                            <ul class="list-disc list-inside space-y-2">
                                <li>
                                    <NavLink style="font-size: 18px" :href="route('guides.bosses.dark-shaman')">
                                        Тёмный шаман
                                    </NavLink>
                                </li>
                                <li>
                                    <NavLink style="font-size: 18px" :href="route('guides.bosses.rat-queen')">
                                        Королева крыс
                                    </NavLink>
                                </li>
                            </ul>
                        </div>

                        <div class="mb-8">
                            <h2 class="text-2xl font-semibold mb-4">Мировые боссы</h2>
                            <ul class="list-disc list-inside space-y-2">
                                <li>
                                    <NavLink style="font-size: 18px" :href="route('guides.bosses.beastmorph')">
                                        Зверомор
                                    </NavLink>
                                </li>
                                <li>
                                    <NavLink style="font-size: 18px" :href="route('guides.bosses.archon')">
                                        Архон
                                    </NavLink>
                                </li>
                                <li>
                                    <NavLink style="font-size: 18px" :href="route('guides.bosses.giant-tortolla')">
                                        Гигантская Тортолла
                                    </NavLink>
                                </li>
                                <li>
                                    <NavLink style="font-size: 18px" :href="route('guides.bosses.destructor')">
                                        Деструктор
                                    </NavLink>
                                </li>
                                <li>
                                    <NavLink style="font-size: 18px" :href="route('guides.bosses.ancient-ent')">
                                        Древний Энт
                                    </NavLink>
                                </li>
                                <li>
                                    <NavLink style="font-size: 18px" :href="route('guides.bosses.hugo')">
                                        Хьюго
                                    </NavLink>
                                </li>
                                <li>
                                    <NavLink style="font-size: 18px" :href="route('guides.bosses.zibo')">
                                        Зибо
                                    </NavLink>
                                </li>
                                <li>
                                    <NavLink style="font-size: 18px" :href="route('guides.bosses.springy')">
                                        Пружинка
                                    </NavLink>
                                </li>
                            </ul>
                        </div>

                        <div class="mb-8">
                            <h2 class="text-2xl font-semibold mb-4">PVP боссы</h2>
                            <ul class="list-disc list-inside space-y-2">
                                <li>
                                    <NavLink style="font-size: 18px" :href="route('guides.bosses.edward')">
                                        Эдвард
                                    </NavLink>
                                </li>
                                <li>
                                    <NavLink style="font-size: 18px" :href="route('guides.bosses.dengur')">
                                        Денгур
                                    </NavLink>
                                </li>
                                <li>
                                    <NavLink style="font-size: 18px" :href="route('guides.bosses.voko')">
                                        Воко
                                    </NavLink>
                                </li>
                                <li>
                                    <NavLink style="font-size: 18px" :href="route('guides.bosses.pozhiki')">
                                        Пожики
                                    </NavLink>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>