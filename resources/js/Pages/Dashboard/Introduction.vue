<script setup>
import {Check, Circle, Dot} from 'lucide-vue-next'

import {
    Stepper,
    StepperDescription,
    StepperItem,
    StepperSeparator,
    StepperTitle,
    StepperTrigger
} from '@/Components/ui/stepper'
import {Button} from "@/Components/ui/button"
import {onMounted, ref} from "vue";

const steps = [
    {
        step: 1,
        title: 'Ознакомиться с правилами',
        description:
            'Прочитать правила из всех разделов, убедиться, что вы с ними согласны и готовы их соблюдать',
    },
    {
        step: 2,
        title: 'Дискорд',
        description: 'Присоединиться к нашему дискорду',
    },
    {
        step: 3,
        title: 'Права на таймер',
        description:
            'Напиши кому-то из ГМ-ов, чтобы они выдали тебе права на таймер',
    },
    {
        step: 4,
        title: 'Добро пожаловать!',
        description:
            'Теперь ты с нами типа',
    },
]

</script>

<template>
    <Stepper orientation="vertical" class="flex w-full max-w-md flex-col justify-start gap-10">
        <StepperItem
            v-for="step in steps"
            :key="step.step"
            v-slot="{ state }"
            class="relative flex w-full items-start gap-6"
            :step="step.step"
        >
            <StepperSeparator
                v-if="step.step !== steps[steps.length - 1].step"
                class="absolute left-[18px] top-[38px] block h-[105%] w-0.5 shrink-0 rounded-full bg-muted group-data-[state=completed]:bg-primary"
            />

            <StepperTrigger as-child>
                <Button
                    :variant="state === 'completed' || state === 'active' ? 'default' : 'outline'"
                    size="icon"
                    class="z-10 rounded-full shrink-0"
                    :class="[state === 'active' && 'ring-2 ring-ring ring-offset-2 ring-offset-background']"
                >
                    <Check v-if="state === 'completed'" class="size-5"/>
                    <Circle v-if="state === 'active'"/>
                    <Dot v-if="state === 'inactive'"/>
                </Button>
            </StepperTrigger>

            <div class="flex flex-col gap-1">
                <StepperTitle
                    v-if="step.step!==2"
                    :class="[state === 'active' && 'text-primary']"
                    class="text-sm font-semibold transition lg:text-base"
                >
                    {{ step.title }}
                </StepperTitle>
                <StepperTitle
                    v-else
                    :class="[state === 'active' && 'text-primary']"
                    class="text-sm font-semibold transition lg:text-base"
                >
                    <a href="https://discord.gg/DZCEAbxkS5">Наш дискорд!</a>
                </StepperTitle>
                <StepperDescription
                    :class="[state === 'active' && 'text-primary']"
                    class="sr-only text-xs text-muted-foreground transition md:not-sr-only lg:text-sm"
                >
                    {{ step.description }}
                </StepperDescription>
            </div>
        </StepperItem>
    </Stepper>
</template>
