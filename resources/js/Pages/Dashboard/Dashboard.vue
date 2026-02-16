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
import Elink from '@/Components/Elink.vue';

</script>

<template>
    <Head title="Dashboard"/>

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-200">
                Dashboard
            </h2>
        </template>

        <div class="py-6 sm:py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 px-4">
                <div class="overflow-hidden bg-gray-800 shadow-sm sm:rounded-lg">
                    <div class="p-4 sm:p-6 text-gray-100">
                        <h1 class="text-2xl sm:text-4xl font-bold text-center text-white mb-8 sm:mb-16">
                            Добро пожаловать в Гильдию <span class="text-orange-500">What&nbsp;the&nbsp;Hell</span>
                        </h1>
                        <section>
                            <h3 class="text-xl sm:text-2xl text-center font-semibold leading-tight text-gray-200">
                                На нашем сайте вы найдёте
                            </h3>
                            <ul class="flex flex-col sm:flex-row sm:space-x-4 space-y-4 sm:space-y-0 justify-around mt-6 items-center">
                                <li>
                                    <Link :href="route('timer')">
                                        <Card class="w-64 sm:w-80 bg-gray-600 text-center text-white">
                                            <CardHeader>
                                                <CardTitle>Таймер боссов</CardTitle>
                                            </CardHeader>
                                            <CardContent>
                                                <img alt="timer" class="card__icon" src="/assets/images/ui/timer.png">
                                            </CardContent>
                                        </Card>
                                    </Link>
                                </li>
                                <li>
                                    <Link :href="route('guides')">
                                        <Card class="w-64 sm:w-80 text-center bg-gray-600 text-white">
                                            <CardHeader>
                                                <CardTitle>Гайды по игре</CardTitle>
                                            </CardHeader>
                                            <CardContent>
                                                <img alt="book" class="card__icon" src="/assets/images/ui/book.png">
                                            </CardContent>
                                        </Card>
                                    </Link>
                                </li>
                                <li>
                                    <Link :href="route('403')">
                                        <Card class="w-64 sm:w-80 text-center bg-gray-600 text-white">
                                            <CardHeader>
                                                <CardTitle>Активности и конкурсы</CardTitle>
                                            </CardHeader>
                                            <CardContent>
                                                <img alt="active" class="card__icon" src="/assets/images/ui/active.png">
                                            </CardContent>
                                        </Card>
                                    </Link>
                                </li>
                            </ul>
                        </section>
                        <section>
                            <Accordion class="mt-8 sm:mt-12" type="single" collapsible>
                                <AccordionItem value="item-1">
                                    <AccordionTrigger>Цели гильдии</AccordionTrigger>
                                    <AccordionContent>
                                        <ul class="list-disc ml-6 text-base sm:text-xl">
                                            <li>Ходить вместе на данжи</li>
                                            <li>Забирать сундуки с боссов и элиток</li>
                                            <li>Веселиться вместе, устраивать конкурсы и находить друзей</li>
                                        </ul>
                                    </AccordionContent>
                                </AccordionItem>
                                <AccordionItem value="item-2">
                                    <AccordionTrigger>Правила общения</AccordionTrigger>
                                    <AccordionContent>
                                        <ul class="list-disc ml-6 text-base sm:text-xl">
                                            <li>Мы не PVP Гильдия</li>
                                        </ul>
                                    </AccordionContent>
                                </AccordionItem>
                                <AccordionItem value="item-3">
                                    <AccordionTrigger>Правила PVE</AccordionTrigger>
                                    <AccordionContent>
                                        <ul class="list-disc ml-6 text-base sm:text-xl">
                                            <li>Все PVE правила касаются лута с боссов</li>
                                            <li>Как мы делим лут с боссов есть в нашем
                                                <Elink href="https://discord.gg/btxSC29B4R"
                                                       class="text-blue-500 underline">
                                                    дискорде
                                                </Elink>
                                            </li>
                                        </ul>
                                    </AccordionContent>
                                </AccordionItem>
                            </Accordion>
                        </section>
                        <section>
                            <div class="mt-8 sm:mt-12 mb-8 sm:mb-16 flex flex-col lg:flex-row gap-6">
                                <div class="order-2 lg:order-1">
                                    <h5 class="text-xl sm:text-2xl">Подать заявку в Гильдию вы можете в нашем
                                        <Elink href="https://discord.gg/btxSC29B4R"
                                               class="text-blue-500 no-underline hover:underline">
                                            Дискорде!
                                        </Elink>
                                    </h5>
                                    <ul class="list-disc ml-6 mt-4 sm:mt-6 text-base sm:text-xl">
                                        <li>
                                            Общайтесь с согильдийцами
                                        </li>
                                        <li>
                                            Планируйте рейды
                                        </li>
                                        <li>
                                            Проходите вместе данжи
                                        </li>
                                        <li>
                                            Делитесь опытом
                                        </li>
                                        <li>
                                            И просто веселитесь в нашем уютном Discord-сервере!
                                        </li>
                                    </ul>
                                    <div class="mt-6 sm:mt-12" style="height: auto">
                                        <div class="text-base sm:text-xl">
                                            Если у вас не работает Discord, вы можете использовать обход блокировки,
                                            через
                                            <Elink href="https://github.com/Flowseal/zapret-discord-youtube"
                                                   class="text-blue-500 no-underline hover:underline">
                                                https://github.com/Flowseal/zapret-discord-youtube
                                            </Elink>
                                            <br>
                                            <br>
                                            Либо если у вас не получилось разобраться, просто напишите мне.<br>
                                            И я вам помогу :3
                                            <Elink href="https://vk.com/linsaym"
                                                   class="text-blue-500 no-underline hover:underline">
                                                https://vk.com/linsaym
                                            </Elink>
                                            <br>
                                            <br>
                                            <br>
                                            <span class="text-xl sm:text-3xl space-x-4 tracking-wider">Ждём вас в нашей гильдии
                                                <span class="text-orange-500">What&nbsp;the&nbsp;Hell</span>!
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-1 lg:order-2 mx-auto">
                                    <iframe src="https://discord.com/widget?id=1291365173726150761&theme=dark"
                                            width="300" height="400" class="sm:w-[350px] sm:h-[500px]"
                                            allowtransparency="true"
                                            sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
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
.widgetBody-38iyIo > div:first-child {
    display: none;
}

.card__icon {
    width: 120px;
    display: block;
    margin: 0 auto;
}

@media (min-width: 640px) {
    .card__icon {
        width: 170px;
    }
}
</style>
