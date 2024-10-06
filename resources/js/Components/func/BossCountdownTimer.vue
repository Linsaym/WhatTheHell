<script setup>

import {onBeforeUnmount, onMounted, ref} from "vue";
import MyTooltip from "@/Components/func/MyTooltip.vue";
import moment from "moment";

const props = defineProps({
    respawn: {
        type: String,
        required: true
    },
    death_time: {
        type: String,
        required: true
    }
})
let time_to_reborn = 0
let kd = 0

//Функция позволяет получить время до возрождения босса
function getTimeToReborn() {

}

const timer_respawn = ref(props.respawn)

const getRemindedTime = () => {
    const now = moment().local();
    const rebornTime = 0;

    const diff = rebornTime.diff(now);

    if (diff <= 0) {
        return '00:00:00'; // Время респавна прошло
    }

    const duration = moment.duration(diff);
    const hours = String(duration.hours()).padStart(2, '0');
    const minutes = String(duration.minutes()).padStart(2, '0');
    const seconds = String(duration.seconds()).padStart(2, '0');

    return `${hours}:${minutes}:${seconds}`;

};

onMounted(() => {
    // Устанавливаем интервал для обновления каждую секунду
    // const interval = setInterval(() => {
    //     timer_respawn.value = moment(timer_respawn, 'HH:mm:ss').subtract(1, 'seconds')
    // }, 1000);
    //
    //
    // onBeforeUnmount(() => {
    //     clearInterval(interval);
    // });
});
</script>

<template>
    <div class="flex">
        <div class="w-48">
            <MyTooltip>
                <template v-slot:main>1</template>
                <template v-slot:text>
                    <p class="mb-2">КД</p>
                    <p>
                        Что такое кд? <br>
                        Если после возрождения босса, cпустя 5 минут, никто не переписал его таймер,<br>
                        значит, предполагается, что на босса никто не пришёл. <br>
                        <br>
                        В таком случае, записывается "КД 1 раз", и время респавна высчитывается как будто<br>
                        босс сразу умер после возрождения. И так до 5-ти раз, после чего респ становиться утерянным
                        <br>
                        КД нужно для того, чтобы в случае того если никто не пришёл на босса, высчитать его примерное
                        время возрождения
                    </p>
                </template>
            </MyTooltip>
        </div>
        <MyTooltip>
            <template v-slot:main>
                {{ '00:00:00' }}
            </template>
            <template v-slot:text>
                Время до возрождения
            </template>
        </MyTooltip>
    </div>
</template>

<style scoped>

</style>
