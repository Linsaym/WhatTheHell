<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import NavLink from "@/Components/NavLink.vue";
</script>

<template>
    <Head title="Guides"/>

    <AuthenticatedLayout>
        <template #header>
            <h1 class="text-xl font-semibold leading-tight text-gray-200">
                Гайды по игре Royal Quest
            </h1>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-gray-800 shadow-sm sm:rounded-lg border border-gray-700">
                    <div class="p-6 text-gray-100">

                        <!-- СЕТКА КАТЕГОРИЙ -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                            <!-- Гайды для новичков -->
                            <div
                                class="bg-gray-700/50 rounded-lg p-6 border border-gray-600 hover:border-gray-500 transition-colors">
                                <h3 class="text-lg font-semibold text-orange-400 mb-4 flex items-center gap-2">
                                    <span class="text-2xl">🌱</span>
                                    Гайды для новичков
                                </h3>
                                <ul class="space-y-2">
                                    <li>
                                        <NavLink :href="route('guides.best-class')"
                                                 class="text-gray-300 hover:text-white transition-colors text-base">
                                            Выбор класса
                                        </NavLink>
                                    </li>
                                    <li>
                                        <NavLink :href="route('guides.words')"
                                                 class="text-yellow-400 hover:text-yellow-300 transition-colors text-base font-medium">
                                            ⭐ Расшифровка сленга
                                        </NavLink>
                                    </li>
                                    <li>
                                        <NavLink :href="route('guides.leveling')"
                                                 class="text-gray-300 hover:text-white transition-colors text-base">
                                            Прокачка 1-65
                                        </NavLink>
                                    </li>
                                    <li>
                                        <NavLink :href="route('guides.endgame')"
                                                 class="text-gray-300 hover:text-white transition-colors text-base">
                                            Что делать после 65
                                        </NavLink>
                                    </li>
                                </ul>
                            </div>

                            <!-- PVE гайды по боссам -->
                            <div
                                class="bg-gray-700/50 rounded-lg p-6 border border-gray-600 hover:border-gray-500 transition-colors">
                                <h3 class="text-lg font-semibold text-orange-400 mb-4 flex items-center gap-2">
                                    <span class="text-2xl">⚔️</span>
                                    PVE гайды по боссам
                                </h3>
                                <ul class="space-y-2">
                                    <li>
                                        <NavLink :href="route('guides.buffs')"
                                                 class="text-gray-300 hover:text-white transition-colors text-base">
                                            Баферство и максимальный DPS
                                        </NavLink>
                                    </li>
                                    <li>
                                        <NavLink :href="route('guides.bosses')"
                                                 class="text-gray-300 hover:text-white transition-colors text-base">
                                            Мировые боссы и механики
                                        </NavLink>
                                    </li>
                                    <li>
                                        <NavLink :href="route('guides.bosses-spawn')"
                                                 class="text-yellow-400 hover:text-yellow-300 transition-colors text-base font-medium">
                                            ⭐ Элитки и точки спавна
                                        </NavLink>
                                    </li>
                                </ul>
                            </div>

                            <!-- Гайды по классам -->
                            <div
                                class="bg-gray-700/50 rounded-lg p-6 border border-gray-600 hover:border-gray-500 transition-colors">
                                <h3 class="text-lg font-semibold text-orange-400 mb-4 flex items-center gap-2">
                                    <span class="text-2xl">🎯</span>
                                    Гайды по классам
                                </h3>
                                <ul class="space-y-2">
                                    <li>
                                        <NavLink :href="route('guides.hunter')"
                                                 class="text-gray-300 hover:text-white transition-colors text-base">
                                            Гайд на Охотника
                                        </NavLink>
                                    </li>
                                    <li>
                                        <NavLink :href="route('do-it-pls')"
                                                 class="text-gray-300 hover:text-white transition-colors text-base">
                                            Гайд на Снайпера
                                        </NavLink>
                                    </li>
                                    <li>
                                        <NavLink :href="route('guides.dark-knight')"
                                                 class="text-gray-300 hover:text-white transition-colors text-base">
                                            Гайд на Тёмного рыцаря
                                        </NavLink>
                                    </li>
                                    <li>
                                        <NavLink :href="route('guides.crusader')"
                                                 class="text-gray-300 hover:text-white transition-colors text-base">
                                            Гайд на Крестоносца
                                        </NavLink>
                                    </li>
                                    <li>
                                        <NavLink :href="route('guides.wizard')"
                                                 class="text-gray-300 hover:text-white transition-colors text-base">
                                            Гайд на Волшебника
                                        </NavLink>
                                    </li>
                                </ul>
                            </div>

                            <!-- Гайды на ДД классы -->
                            <div
                                class="bg-gray-700/50 rounded-lg p-6 border border-gray-600 hover:border-gray-500 transition-colors">
                                <h3 class="text-lg font-semibold text-orange-400 mb-4 flex items-center gap-2">
                                    <span class="text-2xl">💀</span>
                                    Гайды на ДД классы
                                </h3>
                                <ul class="space-y-2">
                                    <li>
                                        <NavLink :href="route('403')"
                                                 class="text-gray-500 hover:text-gray-400 transition-colors text-base flex items-center gap-2 opacity-60 cursor-not-allowed">
                                            <span class="text-sm">🔒</span>
                                            В чём проблема ДД классов?
                                        </NavLink>
                                    </li>
                                    <li>
                                        <NavLink :href="route('403')"
                                                 class="text-gray-500 hover:text-gray-400 transition-colors text-base flex items-center gap-2 opacity-60 cursor-not-allowed">
                                            <span class="text-sm">🔒</span>
                                            Гайд на Чернокнижника
                                        </NavLink>
                                    </li>
                                    <li>
                                        <NavLink :href="route('403')"
                                                 class="text-gray-500 hover:text-gray-400 transition-colors text-base flex items-center gap-2 opacity-60 cursor-not-allowed">
                                            <span class="text-sm">🔒</span>
                                            Гайд на Разбойника
                                        </NavLink>
                                    </li>
                                    <li>
                                        <NavLink :href="route('guides.dark-knight')"
                                                 class="text-gray-500 hover:text-gray-400 transition-colors text-base flex items-center gap-2 opacity-60 cursor-not-allowed">
                                            <span class="text-sm">🔒</span>
                                            Гайд на Ассасина
                                        </NavLink>
                                    </li>
                                </ul>
                            </div>

                            <!-- Общие гайды по игре -->
                            <div
                                class="bg-gray-700/50 rounded-lg p-6 border border-gray-600 hover:border-gray-500 transition-colors">
                                <h3 class="text-lg font-semibold text-orange-400 mb-4 flex items-center gap-2">
                                    <span class="text-2xl">📚</span>
                                    Общие гайды по игре
                                </h3>
                                <ul class="space-y-2">
                                    <li>
                                        <NavLink :href="route('guides.quests')"
                                                 class="text-gray-300 hover:text-white transition-colors text-base">
                                            Полезные квесты
                                        </NavLink>
                                    </li>
                                    <li>
                                        <NavLink :href="route('403')"
                                                 class="text-gray-500 hover:text-gray-400 transition-colors text-base flex items-center gap-2 opacity-60 cursor-not-allowed">
                                            <span class="text-sm">🔒</span>
                                            Гайд по характеристикам и шмоту
                                        </NavLink>
                                    </li>
                                </ul>
                            </div>

                            <!-- PVP гайды -->
                            <div
                                class="bg-gray-700/50 rounded-lg p-6 border border-gray-600 hover:border-gray-500 transition-colors">
                                <h3 class="text-lg font-semibold text-orange-400 mb-4 flex items-center gap-2">
                                    <span class="text-2xl">🏴</span>
                                    PVP гайды
                                </h3>
                                <ul class="space-y-2">
                                    <li>
                                        <NavLink :href="route('403')"
                                                 class="text-gray-500 hover:text-gray-400 transition-colors text-base flex items-center gap-2 opacity-60 cursor-not-allowed">
                                            <span class="text-sm">🔒</span>
                                            Фарм знаков крови
                                        </NavLink>
                                    </li>
                                    <li>
                                        <NavLink :href="route('403')"
                                                 class="text-gray-500 hover:text-gray-400 transition-colors text-base flex items-center gap-2 opacity-60 cursor-not-allowed">
                                            <span class="text-sm">🔒</span>
                                            Основы PVP на аренах
                                        </NavLink>
                                    </li>
                                    <li>
                                        <NavLink :href="route('403')"
                                                 class="text-gray-500 hover:text-gray-400 transition-colors text-base flex items-center gap-2 opacity-60 cursor-not-allowed">
                                            <span class="text-sm">🔒</span>
                                            Тактика PVP на боссах
                                        </NavLink>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style scoped>
/* Плавные переходы для ссылок */
a {
    transition: all 0.2s ease;
}

/* Лёгкое увеличение при наведении на карточку */
.bg-gray-700\/50 {
    transition: border-color 0.2s ease, background-color 0.2s ease;
}

.bg-gray-700\/50:hover {
    background-color: rgba(55, 65, 81, 0.7);
}

/* Для недоступных ссылок - убираем все интерактивные эффекты */
.cursor-not-allowed {
    cursor: not-allowed;
}

.cursor-not-allowed:hover {
    color: #6b7280 !important;
}
</style>
