<script setup>
import {ref, onMounted, watch} from 'vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import ExternalLink from "@/Components/ExternalLink.vue";
import HighlightBlock from "@/Components/HighlightBlock.vue";

// Список предметов для чеклиста
const checklistItems = [
    {
        id: 'courage_potion',
        label: 'Алхимическое зелье отваги',
        count: '1 шт',
        url: 'https://royalquest.info/index.php/Алхимическое_зелье_отваги'
    },
    {
        id: 'snowbeast_head',
        label: 'Голова снегобея',
        count: '10 шт',
        url: 'https://royalquest.info/index.php/Голова_снегобея'
    },
    {
        id: 'northern_juzha_shell',
        label: 'Панцирь северной жужи',
        count: '8 шт',
        url: 'https://royalquest.info/index.php/Панцирь_северной_жужи'
    },
    {id: 'royka_tail', label: 'Хвостик ройки', count: '16 шт', url: 'https://royalquest.info/index.php/Хвостик_ройки'},
    {
        id: 'valderstay_skin',
        label: 'Шкура вальдерстая',
        count: '12 шт',
        url: 'https://royalquest.info/index.php/Шкура_вальдерстая'
    },
    {id: 'gray_sand', label: 'Серый песок', count: '10 шт', url: 'https://royalquest.info/index.php/Серый_песок'},
    {id: 'indeven', label: 'Индевень', count: '12 шт', url: 'https://royalquest.info/index.php/Индевень'},
    {
        id: 'burning_tentacle',
        label: 'Жгучее щупальце',
        count: '16 шт',
        url: 'https://royalquest.info/index.php/Жгучее_щупальце'
    },
    {
        id: 'beautiful_feather',
        label: 'Красивое перо',
        count: '14 шт',
        url: 'https://royalquest.info/index.php/Красивое_перо'
    },
    {
        id: 'snow_juzha_meat',
        label: 'Мясо снежной жужи',
        count: '8 шт',
        url: 'https://royalquest.info/index.php/Мясо_снежной_жужи'
    },
    {id: 'cave_salt', label: 'Пещерная соль', count: '15 шт', url: 'https://royalquest.info/index.php/Пещерная_соль'},
    {
        id: 'wingtooth_jaw',
        label: 'Челюсть крылозуба',
        count: '10 шт',
        url: 'https://royalquest.info/index.php/Челюсть_крылозуба'
    },
    {
        id: 'prisoner_food',
        label: 'Еда для заключённых (купить в таверне Аранты)',
        count: '',
        url: 'https://royalquest.info/index.php/Задание_—_Угроза._Еда_для_заключённых'
    },
    {
        id: 'old_dust_pile',
        label: 'Кучка старой пыли',
        count: '10 шт',
        url: 'https://royalquest.info/index.php/Кучка_старой_пыли'
    },
    {
        id: 'twisted_horn',
        label: 'Закрученный рог',
        count: '14 шт',
        url: 'https://royalquest.info/index.php/Закрученный_рог'
    },
    {
        id: 'snowbeast_shell',
        label: 'Панцирь снегобея',
        count: '18 шт',
        url: 'https://royalquest.info/index.php/Панцирь_снегобея'
    },
    {
        id: 'poison_feather',
        label: 'Ядовитое перо',
        count: '20 шт',
        url: 'https://royalquest.info/index.php/Ядовитое_перо'
    }
];

// Состояние чеклиста
const checkedItems = ref({});

// Ключ для localStorage
const STORAGE_KEY = 'elka_checklist';

// Загрузка сохранённых данных
onMounted(() => {
    const saved = localStorage.getItem(STORAGE_KEY);
    if (saved) {
        try {
            checkedItems.value = JSON.parse(saved);
        } catch (e) {
            console.error('Ошибка загрузки чеклиста:', e);
        }
    }
});

// Сохранение в localStorage при изменении
watch(checkedItems, (newValue) => {
    localStorage.setItem(STORAGE_KEY, JSON.stringify(newValue));
}, {deep: true});

// Переключение состояния чекбокса
const toggleItem = (itemId) => {
    checkedItems.value[itemId] = !checkedItems.value[itemId];
};

// Сброс всех чекбоксов
const resetChecklist = () => {
    checkedItems.value = {};
    localStorage.removeItem(STORAGE_KEY);
};
</script>

<template>
    <Head title="Квесты">
        <meta name="viewport" content="width=1200">
    </Head>

    <AuthenticatedLayout>
        <template #header>
            <h1 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                Полезные квесты в Royal Quest
            </h1>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
                    <div class="p-6 text-gray-100">
                        <section class="mb-6">
                            <HighlightBlock color="orange">
                                <p>
                                    Прокачаться с 1 по 65, можно не выполнив ни одного квеста. Но при этом для
                                    дальнейшего развития есть смысл сделать квесты за которых даётся ценная награда
                                    (Премиум, камни для заточки), или открываются дейлики и данжи. В основном это:
                                    Элька,
                                    Теория
                                    Хобеля (Кабук), Соло, Усыпалка
                                </p>
                            </HighlightBlock>
                        </section>

                        <section class="mb-10">
                            <h3 class="text-2xl font-semibold mb-4">Открытие Эльки (один из боссов для 48 ГПД)</h3>
                            <ul>
                                <li>
                                    <ExternalLink
                                        href="https://royalquest.info/index.php/Задания,_связанные_с_получением_профессии">
                                        20 лвл - Получение профессии
                                    </ExternalLink>
                                </li>
                                <li>
                                    <ExternalLink
                                        href="https://royalquest.info/ru/Задание_—_Между_сном_и_явью">
                                        46 лвл - Разбудить Акву
                                    </ExternalLink>
                                </li>
                                <li>
                                    <ExternalLink
                                        href="https://royalquest.info/index.php/Цепочка_заданий_—_Королевское_доверие">
                                        50 лвл - Королевское доверие
                                    </ExternalLink>
                                </li>
                                <li>
                                    <ExternalLink href="https://royalquest.info/index.php/Цепочка_заданий_—_Ревизор">51
                                        лвл - Ревизор
                                    </ExternalLink>
                                </li>
                                <li>
                                    <ExternalLink href="https://royalquest.info/index.php/Цепочка_заданий_—_Север">60
                                        лвл - Север
                                    </ExternalLink>
                                </li>
                                <li>
                                    <ExternalLink href="https://royalquest.info/index.php/Цепочка_заданий_—_Лёд">60 лвл
                                        - Лёд
                                    </ExternalLink>
                                </li>
                                <li>
                                    <ExternalLink href="https://royalquest.info/index.php/Цепочка_заданий_—_Угроза">60
                                        лвл - Угроза
                                    </ExternalLink>
                                </li>
                            </ul>
                            <div class="mt-4">
                                <h3 class="text-2xl font-semibold">Список предметов для открытия Эльки</h3>
                                <!-- Кнопка сброса -->
                                <div class="my-2">
                                    <button
                                        @click="resetChecklist"
                                        class="text-base text-red-400 hover:text-red-300 transition-colors"
                                    >
                                        Сбросить все
                                    </button>
                                </div>

                                <!-- Чеклист -->
                                <ul class="space-y-2">
                                    <li
                                        v-for="item in checklistItems"
                                        :key="item.id"
                                        class="flex items-start gap-3 rounded-lg hover:bg-gray-700/50 transition-colors"
                                    >
                                        <input
                                            type="checkbox"
                                            :id="item.id"
                                            :checked="checkedItems[item.id] || false"
                                            @change="toggleItem(item.id)"
                                            class="mt-1 w-4 h-4 text-blue-600 bg-gray-700 border-gray-600 rounded focus:ring-blue-500 focus:ring-2"
                                        />
                                        <label :for="item.id" class="flex-1 cursor-pointer">
                                            <ExternalLink :href="item.url"
                                                          class="text-blue-400 hover:text-blue-300">
                                                {{
                                                    item.count ? `${item.count} - ${item.label}` : item.label
                                                }}
                                            </ExternalLink>
                                        </label>
                                    </li>
                                </ul>

                                <!-- Индикатор прогресса -->
                                <div class="mt-4 pt-4 border-t border-gray-700">
                                    <div class="flex justify-between text-sm text-gray-400 mb-1">
                                        <span>Прогресс сбора</span>
                                        <span>{{
                                                Object.values(checkedItems).filter(v => v === true).length
                                            }} / {{ checklistItems.length }}</span>
                                    </div>
                                    <div class="w-full bg-gray-700 rounded-full h-2">
                                        <div
                                            class="bg-green-500 h-2 rounded-full transition-all duration-300"
                                            :style="{ width: `${(Object.values(checkedItems).filter(v => v === true).length / checklistItems.length) * 100}%` }"
                                        ></div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Полезные квесты -->
                        <section class="mb-2">
                            <h2 class="text-2xl font-semibold mb-4">Полезные квесты</h2>
                            <ul>
                                <li>
                                    <ExternalLink href="https://royalquest.info/index.php/Задание_—_Письмо_кардинала">
                                        39-48 лвл - Письмо кардинала → Мокрая дипломатия → Сбор даров → Рост племени →
                                        Защитить икру хваги Жучи (открывает дейлик)
                                    </ExternalLink>
                                </li>
                                <li>
                                    <ExternalLink
                                        href="https://royalquest.info/index.php/Задание_—_Тайный_путь_в_Ворлакс"><span
                                        class="text-red-700">40 лвл - Тайный путь в Ворлакс (открывает проход в катакомбы)</span>
                                    </ExternalLink>
                                </li>
                                <li>
                                    <ExternalLink href="https://royalquest.info/index.php/Задание_—_Огнеупорный_костюм">
                                        49 лвл - Огнеупорный костюм (чёрный камень)
                                    </ExternalLink>
                                </li>
                                <li>
                                    <ExternalLink href="https://royalquest.info/index.php/Задание_—_Посох_для_Басты">55
                                        лвл - Посох для Басты → Сумрачный посох (чёрный камень, руна)
                                    </ExternalLink>
                                </li>
                                <li>
                                    <ExternalLink
                                        href="https://royalquest.info/index.php/Задание_—_Теория_Хобеля._Овен"><span
                                        class="text-red-700">55 лвл - Теория Хобеля. Овен (открывает дейлики)</span>
                                    </ExternalLink>
                                </li>
                                <li>
                                    <ExternalLink href="https://royalquest.info/index.php/Задание_—_Куколки_загров">55
                                        лвл - Куколки загров (открывается дейлик)
                                    </ExternalLink>
                                </li>
                                <li>
                                    <ExternalLink
                                        href="https://royalquest.info/index.php/Задание_—_Экспедиция_в_Усыпальницу._Энергокуб">
                                        <span class="text-red-700">55 лвл - Экспедиция в Усыпальницу. Энергокуб (открывает усыпалку)</span>
                                    </ExternalLink>
                                </li>
                                <li>
                                    <ExternalLink href="https://royalquest.info/index.php/Задание_—_Между_сном_и_явью">
                                        46-55 лвл - Между сном и явью → Сумрачная пещера → Поиски статуи Морры →
                                        Милосердная Морра (2 клевера + красный камень)
                                    </ExternalLink>
                                </li>
                                <li>
                                    <ExternalLink
                                        href="https://royalquest.info/index.php/Задание_—_Поместье_Соло._Жертва_нападения">
                                        <span class="text-red-700">55 лвл - Поместье Соло. Жертва нападения (открывает особняк Соло)</span>
                                    </ExternalLink>
                                </li>
                                <li>
                                    <ExternalLink href="https://royalquest.info/index.php/Задание_—_Проклятое_семя">57
                                        лвл - Проклятое семя (клевер)
                                    </ExternalLink>
                                </li>
                                <li>
                                    <ExternalLink
                                        href="https://royalquest.info/index.php/Задание_—_Источник_великой_силы">58 лвл
                                        - Источник великой силы (белый камень)
                                    </ExternalLink>
                                </li>
                            </ul>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
