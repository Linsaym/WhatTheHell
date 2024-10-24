<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import NavLink from "@/Components/NavLink.vue";
import {Accordion, AccordionContent, AccordionItem, AccordionTrigger} from "@/Components/ui/accordion/index.js";
import {Separator} from "@/Components/ui/separator/index.js";
</script>

<template>
    <Head title="Guides"/>

    <AuthenticatedLayout>
        <template #header>
            <h1
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                Гайд на креста
            </h1>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800"
                >
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <Accordion type="multiple" :default-value="['item-1','item-2','item-3']">
                            <AccordionItem value="item-1">
                                <AccordionTrigger>Что будет в гайде?</AccordionTrigger>
                                <AccordionContent>
                                    <ul class="list-disc ml-6">
                                        <li>
                                            <a href="#talents">Вступление</a>
                                        </li>
                                        <li>
                                            <a href="#talents">Таланты/билды</a>
                                        </li>
                                        <li>
                                            <a href="#skills">Самые важные скилы</a>
                                        </li>
                                        <li>
                                            <a href="#farm">Как фармить</a>
                                        </li>
                                        <li>
                                            <a href="#dungeon">Основная в данжах</a>
                                        </li>
                                        <li>
                                            <a href="#items">Лучшие вещи</a>
                                        </li>
                                        <li>
                                            <a href="#calc">Сборки (ссылки на калькулятор)</a>
                                        </li>
                                        <li>
                                            <a href="#lvling">Советы по прокачке</a>
                                        </li>
                                        <li>
                                            <a href="#seals">Печати</a>
                                        </li>
                                    </ul>
                                </AccordionContent>
                            </AccordionItem>
                        </Accordion>
                        <section id="talents" class="mb-8">
                            <h3 class="text-2xl font-bold">Вступление</h3>
                            <div class="mt-2 text-xl">
                                <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem id nostrum sint! Delectus, est, voluptas! Aliquam enim fugiat labore laboriosam neque nobis quam quibusdam voluptatibus. Aperiam dolorem mollitia quo suscipit?</span><span>Excepturi libero porro quod. Aperiam architecto cumque dolorem doloremque, est ex exercitationem expedita incidunt ipsa ipsam laboriosam magnam nesciunt, nisi officiis perferendis praesentium quod similique sint veniam vero vitae voluptate?</span>
                                </p>
                            </div>
                        </section>
                        <hr>
                        <section id="talents" class="mb-8">
                            <h3 class="text-2xl font-bold">Таланты/билды</h3>
                            <div class="mt-2 text-xl">
                                <p>Здесь будет информация о талантах и билдах.</p>
                            </div>
                        </section>
                        <section id="skills" class="mb-8">
                            <h3 class="text-2xl font-bold">Самые важные скилы</h3>
                            <div class="mt-2 text-xl">
                                <p>Здесь будет информация о самых важных скилах.</p>
                            </div>
                        </section>

                        <section id="farm" class="mb-8">
                            <h3 class="text-2xl font-bold">Как фармить</h3>
                            <div class="mt-2 text-xl">
                                <p>Здесь будет информация о том, как фармить.</p>
                            </div>
                        </section>

                        <section id="dungeon" class="mb-8">
                            <h3 class="text-2xl font-bold">Основная в данжах</h3>
                            <div class="mt-2 text-xl">
                                <p>Здесь будет информация о том, как играть в данжах.</p>
                            </div>
                        </section>

                        <section id="items" class="mb-8">
                            <h3 class="text-2xl font-bold">Лучшие вещи</h3>
                            <div class="mt-2 text-xl">
                                <p>Здесь будет информация о лучших вещах.</p>
                            </div>
                        </section>

                        <section id="calc" class="mb-8">
                            <h3 class="text-2xl font-bold">Сборки (ссылки на калькулятор)</h3>
                            <div class="mt-2 text-xl">
                                <p>Здесь будут ссылки на калькулятор сборок.</p>
                            </div>
                        </section>

                        <section id="lvling" class="mb-8">
                            <h3 class="text-2xl font-bold">Советы по прокачке</h3>
                            <div class="mt-2 text-xl">
                                <p>Здесь будут советы по прокачке.</p>
                            </div>
                        </section>

                        <section id="seals" class="mb-8">
                            <h3 class="text-2xl font-bold">Печати</h3>
                            <div class="mt-2 text-xl">
                                <p>Здесь будет информация о печатях.</p>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

