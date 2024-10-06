<script setup>
import {Tooltip, TooltipContent, TooltipProvider, TooltipTrigger} from "@/Components/ui/tooltip/index.js";
</script>

<template>
    <TooltipProvider>
        <Tooltip>
            <TooltipTrigger>
                <slot name="main"></slot>
            </TooltipTrigger>
            <TooltipContent>
                <slot name="text"></slot>
            </TooltipContent>
        </Tooltip>
    </TooltipProvider>
</template>

<style scoped>

</style>
