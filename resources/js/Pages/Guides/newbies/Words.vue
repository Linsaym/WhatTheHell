<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import {ref, computed} from 'vue';


//TODO сортировать по длине через GPT
// Массив со сленговыми словами Royal Quest
const slangWords = ref([
    {
        word: 'Агр и провокация',
        description: 'Механика, которая заставляет монстра бить определённую цель. ' +
            'Уровень "агрессии" растёт пропорционально нанесённому урону. У танков есть талант который существенно' +
            ' увеличивает агрессию монстров',
        category: 'Групповые механики',
        links: [
            {
                text: 'талант',
                href: 'https://royalquest.info/ru/Талант_—_Защитник',
            }
        ]
    },
    {
        word: 'РБ',
        description: 'Дебаф Разъедающие боеприпасы который имеют охотники и снайперы. Сильно увеличивающий урон по одиночной цели',
        category: 'Групповые механики',
        links: [
            {
                text: 'Разъедающие боеприпасы',
                href: 'https://royalquest.info/ru/Талант_—_Разъедающие_боеприпасы',
            }
        ]
    },
    {
        word: 'Чуча',
        description: 'Скил охотников (чучело), который позволяет сбросить мобов в данжах, чтобы они за вами не бежали',
        category: 'Групповые механики',
        links: [
            {
                text: '(чучело)',
                href: 'https://royalquest.info/index.php?search=%D0%A7%D1%83%D1%87%D0%B5%D0%BB%D0%BE&title=%D0%A1%D0%BB%D1%83%D0%B6%D0%B5%D0%B1%D0%BD%D0%B0%D1%8F%3A%D0%9F%D0%BE%D0%B8%D1%81%D0%BA'
            }
        ]
    },
    {
        word: 'Боссы',
        description: 'Звер, Хьюго, Ден, Эдик, ЗТ, БУ, Воко, Дестр, ГТ, Бакс, Пожики - это мировые боссы или элитки, с которых падают ценные карты',
        category: 'Игровой сленг',
        links: [
            {
                text: 'боссы',
                href: 'https://royalquest.info/ru/Боссы'
            },
            {
                text: 'элитки',
                href: 'https://royalquest.info/ru/Элитные_монстры'
            },
        ]
    },
    {
        word: 'Классы',
        description: 'ЧК - чернокнижник. ТР - тёмный рыцарь. Хант - охотник. Рога - разбойник. А другие и так понятно))',
        category: 'Игровой сленг',
    },
    {
        word: 'Данжи',
        description: 'Часто собирают группу для прокачки или одноразового прохождения подземелья. Вожак, Голем, Принц, Дакс, Гуль, Элька, Фанта. 4ки 8ки ГПД. (или ещё 48 ГПД) - это данжи для четверых и восмерых соотвественно',
        category: 'Игровой сленг',
        links: [
            {
                text: 'подземелья',
                href: 'https://royalquest.info/ru/Подземелья'
            }
        ]
    },
    {
        word: 'Резисты',
        description: 'Одна из очень важных механик. Входящий по вам урон может снизить защита, устойчивость к pvp урону, устойчивость к элементу, устойчивость к расам. А так же таланты и бафы',
        category: 'PVP',
    },
    {
        word: 'Переливы',
        description: 'Договорные арены, когда одна команда специально проигрывает другой, чтобы та получила знаки крови для покупки PVP карт',
        category: 'PVP',
    }
]);

// Конвертация слов в ссылки
// Простая версия
const processingLinks = (item) => {
    if (!item.links || item.links.length === 0) return item.description;

    const linkStyles = 'text-blue-400 underline hover:text-blue-300 transition-colors font-medium';
    let result = item.description;

    item.links.forEach(link => {
        const regex = new RegExp(`(${link.text})`, 'g');
        result = result.replace(regex, `<a target="_blank" href="${link.href}" class="${linkStyles}">$1</a>`);
    });

    return result;
};

// Поисковый запрос
const searchQuery = ref('');

// Выбранная категория для фильтрации
const selectedCategory = ref('Все');

// Получаем уникальные категории для фильтра
const categories = computed(() => {
    const cats = slangWords.value.map(item => item.category);
    return ['Все', ...new Set(cats)];
});

// Фильтруем слова на основе поиска и выбранной категории
const filteredSlangWords = computed(() => {
    return slangWords.value.filter(item => {
        const matchesSearch = item.word.toLowerCase().includes(searchQuery.value.toLowerCase()) ||
            item.description.toLowerCase().includes(searchQuery.value.toLowerCase());
        const matchesCategory = selectedCategory.value === 'Все' || item.category === selectedCategory.value;

        return matchesSearch && matchesCategory;
    });
});

// Функция для очистки поиска
const clearSearch = () => {
    searchQuery.value = '';
};
</script>

<template>
    <Head title="Сленг Royal Quest"/>

    <AuthenticatedLayout>
        <template #header>
            <h1 class="text-xl font-semibold leading-tight text-gray-200">
                Сленг Royal Quest | Что значат все эти слова?🤔
            </h1>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-sm sm:rounded-lg bg-gray-800">
                    <div class="p-6 text-gray-100">
                        <!-- Заголовок и счетчик -->
                        <div class="mb-6 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                            <div>
                                <h2 class="text-2xl font-bold text-white mb-2">Словарь терминов Royal Quest</h2>
                                <p class="text-gray-400">Всего терминов: {{ slangWords.length }}</p>
                            </div>

                            <!-- Статистика отфильтрованных -->
                            <div v-if="searchQuery || selectedCategory !== 'Все'"
                                 class="bg-gray-700 px-4 py-2 rounded-lg">
                                <p class="text-sm text-gray-300">
                                    Найдено: <span class="font-bold text-yellow-400">{{
                                        filteredSlangWords.length
                                    }}</span>
                                    <button
                                        @click="clearSearch; selectedCategory = 'Все'"
                                        class="ml-2 text-xs text-gray-400 hover:text-white transition"
                                    >
                                        ✕ Сбросить
                                    </button>
                                </p>
                            </div>
                        </div>

                        <!-- Поиск и фильтры -->
                        <div class="mb-8 space-y-4">
                            <!-- Поле поиска -->
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor"
                                         viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </div>
                                <input
                                    v-model="searchQuery"
                                    type="text"
                                    placeholder="🔍 Поиск по словам и описаниям..."
                                    class="w-full pl-10 pr-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 transition"
                                />
                            </div>

                            <!-- Фильтр по категориям -->
                            <div class="flex flex-wrap gap-2">
                                <button
                                    v-for="category in categories"
                                    :key="category"
                                    @click="selectedCategory = category"
                                    class="px-4 py-2 rounded-lg text-sm font-medium transition"
                                    :class="[
                                        selectedCategory === category
                                            ? 'bg-yellow-500 text-gray-900'
                                            : 'bg-gray-700 text-gray-300 hover:bg-gray-600'
                                    ]"
                                >
                                    {{ category }}
                                </button>
                            </div>
                        </div>

                        <!-- Сетка со словами -->
                        <div v-if="filteredSlangWords.length > 0"
                             class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <div
                                v-for="(item, index) in filteredSlangWords"
                                :key="index"
                                class="bg-gray-700 rounded-lg p-5 hover:bg-gray-650 transition group border border-gray-600 hover:border-yellow-500"
                            >
                                <div class="flex items-start justify-between mb-2">
                                    <h3 class="text-xl font-bold text-yellow-400 group-hover:text-yellow-300">
                                        {{ item.word }}
                                    </h3>
                                    <span class="text-xs px-2 py-1 bg-gray-600 rounded-full text-gray-300">
                                        {{ item.category }}
                                    </span>
                                </div>
                                <p v-if="item.links" v-html="processingLinks(item)"
                                   class="text-gray-300 leading-relaxed"></p>
                                <p v-else class="text-gray-300 leading-relaxed">
                                    {{ item.description }}
                                </p>
                            </div>
                        </div>

                        <!-- Сообщение, если ничего не найдено -->
                        <div v-else class="text-center py-12">
                            <svg class="mx-auto h-12 w-12 text-gray-500 mb-4" fill="none" stroke="currentColor"
                                 viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <h3 class="text-lg font-medium text-gray-400 mb-2">Ничего не найдено</h3>
                            <p class="text-gray-500">Попробуйте изменить параметры поиска</p>
                            <button
                                @click="clearSearch; selectedCategory = 'Все'"
                                class="mt-4 px-4 py-2 bg-gray-700 text-gray-300 rounded-lg hover:bg-gray-600 transition"
                            >
                                Сбросить фильтры
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style scoped>
/* Дополнительные стили для улучшения внешнего вида */
.bg-gray-650 {
    background-color: #3a3f4b;
}

/* Анимация при наведении */
.transition {
    transition: all 0.2s ease-in-out;
}
</style>
