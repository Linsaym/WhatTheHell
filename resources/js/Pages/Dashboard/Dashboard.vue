<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import {Accordion, AccordionContent, AccordionItem, AccordionTrigger} from '@/Components/ui/accordion';
import {Link} from '@inertiajs/vue3';
import {
    Card,
    CardContent,
    CardHeader,
    CardTitle,
} from '@/Components/ui/card';
import Introduction from "@/Pages/Dashboard/Introduction.vue";

</script>

<template>
    <Head title="Dashboard"/>

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800"
                >
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h1 class="text-4xl font-bold text-center text-white mb-16">
                            Добро пожаловать в Гильдию <span class="text-orange-500">What the Hell</span>
                        </h1>
                        <section>
                            <h3 class="text-2xl text-center font-semibold leading-tight text-gray-800 dark:text-gray-200">
                                На нашем сайте вы найдёте
                            </h3>
                            <ul class="flex space-x-4 justify-around mt-6">
                                <li>
                                    <Link :href="route('timer')">
                                        <Card class="w-80 bg-gray-600 text-center text-white">
                                            <CardHeader>
                                                <CardTitle>Таймер боссов</CardTitle>
                                            </CardHeader>
                                            <CardContent>
                                                <img class="card__icon" src="/assets/images/ui/timer.png">
                                            </CardContent>
                                        </Card>
                                    </Link>
                                </li>
                                <li>
                                    <Link :href="route('guides')">
                                        <Card class="w-80 text-center bg-gray-600 text-white">
                                            <CardHeader>
                                                <CardTitle>Гайды по игре</CardTitle>
                                            </CardHeader>
                                            <CardContent>
                                                <img class="card__icon" src="/assets/images/ui/book.png">
                                            </CardContent>
                                        </Card>
                                    </Link>
                                </li>
                                <li>
                                    <Link :href="route('activity')">
                                        <Card class="w-80 text-center bg-gray-600 text-white">
                                            <CardHeader>
                                                <CardTitle>Активности и конкурсы</CardTitle>
                                            </CardHeader>
                                            <CardContent>
                                                <img class="card__icon" src="/assets/images/ui/active.png">
                                            </CardContent>
                                        </Card>
                                    </Link>
                                </li>
                            </ul>
                        </section>
                        <section>
                            <Accordion class="mt-12" type="single" collapsible>
                                <AccordionItem value="item-1">
                                    <AccordionTrigger>Цели гильдии</AccordionTrigger>
                                    <AccordionContent>
                                        <ul class="list-disc ml-6 text-xl">
                                            <li>Ходить вместе на данжи</li>
                                            <li>Забирать сундуки с боссов и элиток</li>
                                            <li>Веселиться вместе, устраивать конкурсы и находить друзей</li>
                                        </ul>
                                    </AccordionContent>
                                </AccordionItem>
                                <AccordionItem value="item-2">
                                    <AccordionTrigger>Правила общения</AccordionTrigger>
                                    <AccordionContent>
                                        <ul class="list-disc ml-6">
                                            <li>Мы не PVP Гильдия</li>
                                        </ul>
                                    </AccordionContent>
                                </AccordionItem>
                                <AccordionItem value="item-3">
                                    <AccordionTrigger>Правила PVE</AccordionTrigger>
                                    <AccordionContent>
                                        <ul class="list-disc ml-6">
                                            <li>Более точные PVE правила появятся после старта сервера</li>
                                            <li>Как делить лут с боссов мы решим потом, вместе</li>
                                        </ul>
                                    </AccordionContent>
                                </AccordionItem>
                            </Accordion>
                        </section>
                        <section>
                            <div class="mt-12 mb-16 flex justify-between">
                                <div>
                                    <h5 class="text-2xl">Подать заявку в Гильдию вы можете в нашем Дискорде!</h5>
                                    <ul class="list-disc ml-6 mt-6 text-xl">
                                        <li>
                                            Общайтесь с согильдийцами
                                        </li>
                                        <li>
                                            Планируйте рейды
                                        </li>
                                        <li>
                                            Проходите вместе данжы
                                        </li>
                                        <li>
                                            Делитесь опытом
                                        </li>
                                        <li>
                                            И просто веселитесь в нашем уютном Discord-сервере!
                                        </li>
                                    </ul>
                                    <div class="mt-12 flex gap-10" style="height: 250px">
                                        <div class="text-xl" style="width: 700px">
                                            Если у вас не работает Discord, вы можете использовать обход блокировки,
                                            через
                                            <Link class="text-blue-500"
                                                  href="https://github.com/Flowseal/zapret-discord-youtube">
                                                https://github.com/Flowseal/zapret-discord-youtube
                                            </Link>
                                            <br>
                                            <br>
                                            Либо если у вас не получилось разобраться, просто напишите мне.<br>
                                            И я вам помогу :3
                                            <Link class="text-blue-500" href="https://vk.com/linsaym">
                                                https://vk.com/linsaym
                                            </Link>
                                            <br>
                                            <br>
                                            <br>
                                            <span class="text-3xl space-x-4 tracking-wider">Ждём вас в нашей гильдии
                                                <span class="text-orange-500">What the Hell</span>!
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <iframe
                                        src="https://discord.com/widget?id=1291365173726150761&theme=dark"
                                        width="350" height="500" allowtransparency="true" frameborder="0"
                                        sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts">
                                    </iframe>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
<style>
.card__icon {
    width: 170px;
    display: block;
    margin: 0 auto;
}
</style>
