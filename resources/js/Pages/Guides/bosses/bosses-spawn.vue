<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import {ref} from 'vue';

const searchQuery = ref('');

const selectedImage = ref(null);
const showModal = ref(false);

const openImage = (image) => {
    selectedImage.value = image;
    showModal.value = true;
};

const closeModal = () => {
    showModal.value = false;
    selectedImage.value = null;
};

const bosses = [
    {
        name: 'Альфа Самец',
        image: '/assets/images/guides/bosses-spawn/alpha-male.png',
        alt: 'Точки спавна Альфа Самца в Royal Quest'
    },
    {
        name: 'Богатый Упырь',
        image: '/assets/images/guides/bosses-spawn/rich-ghoul.png',
        alt: 'Точки спавна Богатого Упыря в Royal Quest'
    },
    {
        name: 'Гоблин без головы',
        image: '/assets/images/guides/bosses-spawn/headless-goblin.png',
        alt: 'Точки спавна Гоблина без головы в Royal Quest'
    },
    {
        name: 'Жужелица Тёмная',
        image: '/assets/images/guides/bosses-spawn/dark-ground-beetle.png',
        alt: 'Точки спавна Жужелицы Тёмной в Royal Quest'
    },
    {
        name: 'Королева Термитов',
        image: '/assets/images/guides/bosses-spawn/termite-queen.png',
        alt: 'Точки спавна Королевы Термитов в Royal Quest'
    },
    {
        name: 'Золотой Скарабей',
        image: '/assets/images/guides/bosses-spawn/golden-scarab.png',
        alt: 'Точки спавна Золотого Скарабея в Royal Quest'
    },
    {
        name: 'Золотой Таракан',
        image: '/assets/images/guides/bosses-spawn/golden-cockroach.png',
        alt: 'Точки спавна Золотого Таракана в Royal Quest'
    },
    {
        name: 'Кабан Вожак',
        image: '/assets/images/guides/bosses-spawn/boar-leader.png',
        alt: 'Точки спавна Кабана Вожака в Royal Quest'
    },
    {
        name: 'Королевская Терния',
        image: '/assets/images/guides/bosses-spawn/royal-thorn.png',
        alt: 'Точки спавна Королевской Тернии в Royal Quest'
    },
    {
        name: 'Королевский Паук',
        image: '/assets/images/guides/bosses-spawn/royal-spider.png',
        alt: 'Точки спавна Королевского Паука в Royal Quest'
    },
    {
        name: 'Король Мышей',
        image: '/assets/images/guides/bosses-spawn/rat-king.png',
        alt: 'Точки спавна Короля Мышей в Royal Quest'
    },
    {
        name: 'Самка Жужа',
        image: '/assets/images/guides/bosses-spawn/female-buzz.png',
        alt: 'Точки спавна Самки Жужа в Royal Quest'
    },
    {
        name: 'Слепоглаз',
        image: '/assets/images/guides/bosses-spawn/blindeye.png',
        alt: 'Точки спавна Слепоглаза в Royal Quest'
    },
    {
        name: 'Лякуша',
        image: '/assets/images/guides/bosses-spawn/lyakusha.png',
        alt: 'Точки спавна Лякуши в Royal Quest'
    },
    {
        name: 'Мега Ирекс',
        image: '/assets/images/guides/bosses-spawn/mega-irex.png',
        alt: 'Точки спавна Мега Ирекса в Royal Quest'
    },
    {
        name: 'Пещерный Волк',
        image: '/assets/images/guides/bosses-spawn/cave-wolf.png',
        alt: 'Точки спавна Пещерного Волка в Royal Quest'
    },
    {
        name: 'Пламярык',
        image: '/assets/images/guides/bosses-spawn/flameryk.png',
        alt: 'Точки спавна Пламярыка в Royal Quest'
    },
    {
        name: 'Советник Остина',
        image: '/assets/images/guides/bosses-spawn/austins-advisor.png',
        alt: 'Точки спавна Советника Остина в Royal Quest'
    },
    {
        name: 'Тёмный Оракул',
        image: '/assets/images/guides/bosses-spawn/dark-oracle.png',
        alt: 'Точки спавна Тёмного Оракула в Royal Quest'
    },
    {
        name: 'Фараон',
        image: '/assets/images/guides/bosses-spawn/pharaoh.png',
        alt: 'Точки спавна Фараона в Royal Quest'
    },
    {
        name: 'Хозяин',
        image: '/assets/images/guides/bosses-spawn/master.png',
        alt: 'Точки спавна Хозяина в Royal Quest'
    },
    {
        name: 'Чёрная Вдова',
        image: '/assets/images/guides/bosses-spawn/black-widow.png',
        alt: 'Точки спавна Чёрной Вдовы в Royal Quest'
    },
    {
        name: 'Архон',
        image: '/assets/images/guides/bosses-spawn/archon.png',
        alt: 'Точки спавна Архона в Royal Quest'
    },
    {
        name: 'Баксбакуалануксивайе',
        image: '/assets/images/guides/bosses-spawn/baxbakualanuxiwaye.png',
        alt: 'Точки спавна Баксбакуалануксивайе в Royal Quest'
    },
    {
        name: 'Воко',
        image: '/assets/images/guides/bosses-spawn/voko.png',
        alt: 'Точки спавна Воко в Royal Quest'
    },
    {
        name: 'Гигантская Тортолла',
        image: '/assets/images/guides/bosses-spawn/giant-tortolla.png',
        alt: 'Точки спавна Гигантской Тортоллы в Royal Quest'
    },
    {
        name: 'Денгур Кровавый топор',
        image: '/assets/images/guides/bosses-spawn/dengur-bloodaxe.png',
        alt: 'Точки спавна Денгура Кровавого топора в Royal Quest'
    },
    {
        name: 'Деструктор',
        image: '/assets/images/guides/bosses-spawn/destructor.png',
        alt: 'Точки спавна Деструктора в Royal Quest'
    },
    {
        name: 'Древний Энт',
        image: '/assets/images/guides/bosses-spawn/ancient-ent.png',
        alt: 'Точки спавна Древнего Энта в Royal Quest'
    },
    {
        name: 'Зверомор',
        image: '/assets/images/guides/bosses-spawn/zveromor.png',
        alt: 'Точки спавна Зверомора в Royal Quest'
    },
    {
        name: 'Зибо cеверный кабук',
        image: '/assets/images/guides/bosses-spawn/zibo-1.png',
        alt: 'Точки спавна Зибо в Royal Quest'
    },
    {
        name: 'Зибо пустошь ветров',
        image: '/assets/images/guides/bosses-spawn/zibo-2.png',
        alt: 'Точки спавна Зибо в Royal Quest'
    },
    {
        name: 'Зибо алатика',
        image: '/assets/images/guides/bosses-spawn/zibo-3.png',
        alt: 'Точки спавна Зибо в Royal Quest'
    },
    {
        name: 'Зибо хабул',
        image: '/assets/images/guides/bosses-spawn/zibo-4.png',
        alt: 'Точки спавна Зибо в Royal Quest'
    },
    {
        name: 'Королева Крыс',
        image: '/assets/images/guides/bosses-spawn/rat-queen.png',
        alt: 'Точки спавна Королевы Крыс в Royal Quest'
    },
    {
        name: 'Пружинка',
        image: '/assets/images/guides/bosses-spawn/spring.png',
        alt: 'Точки спавна Пружинки в Royal Quest'
    },
    {
        name: 'Тёмный Шаман',
        image: '/assets/images/guides/bosses-spawn/dark-shaman.png',
        alt: 'Точки спавна Тёмного Шамана в Royal Quest'
    },
    {
        name: 'Хьюго',
        image: '/assets/images/guides/bosses-spawn/hugo.png',
        alt: 'Точки спавна Хьюго в Royal Quest'
    },
    {
        name: 'Эдвард',
        image: '/assets/images/guides/bosses-spawn/edward.png',
        alt: 'Точки спавна Эдварда в Royal Quest'
    }
];

const filteredBosses = () => {
    if (!searchQuery.value) return bosses;
    return bosses.filter(boss =>
        boss.name.toLowerCase().includes(searchQuery.value.toLowerCase())
    );
};
</script>

<template>
    <Head title="Боссы Royal Quest | Точки спавна мировых боссов и элиток">
        <meta name="description"
              content="Актуальные точки спавна мировых боссов и элиток в Royal Quest: Древний энт, Зверомор, Архон. Карты локаций для быстрого поиска боссов."/>
        <meta name="keywords"
              content="Royal Quest, боссы, точки спавна, Древний энт, Зверомор, Архон, элитки"/>
    </Head>

    <AuthenticatedLayout>
        <template #header>
            <h1 class="text-xl font-semibold leading-tight text-gray-200">
                Точки спавна мировых боссов и элиток в Royal Quest
            </h1>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-sm sm:rounded-lg bg-gray-800">

                    <!-- Поиск -->
                    <div class="p-6 border-b border-gray-700">
                        <input
                            type="text"
                            v-model="searchQuery"
                            placeholder="Поиск босса..."
                            class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-gray-200 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        />
                    </div>

                    <!-- Список боссов -->
                    <div class="p-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <div
                                v-for="boss in filteredBosses()"
                                :key="boss.name"
                                class="bg-gray-700 rounded-lg overflow-hidden"
                            >
                                <h2 class="text-lg font-semibold text-gray-200 p-4 border-b border-gray-600">
                                    {{ boss.name }}
                                </h2>
                                <div class="p-4">
                                    <img
                                        :src="boss.image"
                                        :alt="boss.alt"
                                        class="w-full h-auto rounded-lg cursor-pointer transition-transform hover:scale-105"
                                        @click="openImage(boss)"
                                        loading="lazy"
                                    />
                                </div>
                                <!-- Модальное окно для просмотра изображения -->
                                <div
                                    v-if="showModal"
                                    class="fixed inset-0 z-50 flex items-center justify-center p-4"
                                    style="background-color: rgba(0, 0, 0, 0.5)"
                                    @click="closeModal"
                                >
                                    <div class="relative" @click.stop>
                                        <button
                                            @click="closeModal"
                                            class="absolute -top-10 right-0 text-white hover:text-gray-300 text-4xl"
                                        >
                                            ×
                                        </button>
                                        <img
                                            v-if="selectedImage"
                                            :src="selectedImage.image"
                                            :alt="selectedImage.alt"
                                            class="w-auto h-auto"
                                            style="transform: scale(1.4);"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Сообщение если ничего не найдено -->
                        <div v-if="filteredBosses().length === 0" class="text-center text-gray-400 py-8">
                            Боссы не найдены
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
