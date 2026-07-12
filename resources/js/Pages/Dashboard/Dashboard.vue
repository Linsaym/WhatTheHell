<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import {Link} from '@inertiajs/vue3';
import {onMounted, onUnmounted, ref} from 'vue';

// Частицы для фона
const canvasRef = ref(null);
let animationId = null;

onMounted(() => {
    const canvas = canvasRef.value;
    const ctx = canvas.getContext('2d');
    let particles = [];

    const resize = () => {
        canvas.width = canvas.parentElement.offsetWidth;
        canvas.height = canvas.parentElement.offsetHeight;
    };

    resize();
    window.addEventListener('resize', resize);

    class Particle {
        constructor() {
            this.x = Math.random() * canvas.width;
            this.y = Math.random() * canvas.height;
            this.size = Math.random() * 2 + 1;
            this.speedX = (Math.random() - 0.5) * 0.5;
            this.speedY = (Math.random() - 0.5) * 0.5;
            this.opacity = Math.random() * 0.5 + 0.3;
        }

        update() {
            this.x += this.speedX;
            this.y += this.speedY;

            if (this.x < 0 || this.x > canvas.width) this.speedX *= -1;
            if (this.y < 0 || this.y > canvas.height) this.speedY *= -1;
        }

        draw() {
            ctx.fillStyle = `rgba(251, 146, 60, ${this.opacity})`;
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            ctx.fill();
        }
    }

    const init = () => {
        particles = [];
        for (let i = 0; i < 80; i++) {
            particles.push(new Particle());
        }
    };

    const animate = () => {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        particles.forEach(particle => {
            particle.update();
            particle.draw();
        });
        animationId = requestAnimationFrame(animate);
    };

    init();
    animate();

    onUnmounted(() => {
        window.removeEventListener('resize', resize);
        if (animationId) cancelAnimationFrame(animationId);
    });
});
</script>

<template>
    <Head title="What the Hell — Сильнейшая PVE Гильдия"/>

    <AuthenticatedLayout>
        <div class="relative min-h-[80vh] flex items-center overflow-hidden">
            <!-- Частицы фон на всю страницу -->
            <div class="absolute inset-0 pointer-events-none" style="z-index: 0;">
                <canvas ref="canvasRef" class="w-full h-full"></canvas>
            </div>

            <!-- Контент поверх частиц -->
            <div class="relative w-full max-w-full px-4 sm:px-6 lg:px-8" style="z-index: 1;">
                <div class="w-full text-center py-12 sm:py-16">

                    <!-- ГЛАВНЫЙ ЗАГОЛОВОК -->
                    <div class="mb-16">
                        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-white tracking-wide">
                            Сайт сильнейшей
                            <span class="gradient-text animate-gradient">PVE гильдии</span>
                            в игре
                            <span class="text-orange-500">Royal Quest</span>
                        </h1>

                        <!-- WHAT THE HELL - ОГРОМНЫЙ -->
                        <div class="mt-6">
                            <h2 class="text-6xl sm:text-8xl lg:text-[9rem] font-black tracking-wider leading-[1.1] text-orange-500 animate-float">
                                What the Hell
                            </h2>

                            <!-- Декоративные линии -->
                            <div class="mt-6 flex justify-center items-center gap-4">
                                <div class="h-px w-12 sm:w-20 bg-gradient-to-r from-transparent to-orange-500/50"></div>
                                <span
                                    class="text-xs sm:text-sm text-gray-500 tracking-[0.2em] uppercase">Royal Quest</span>
                                <div class="h-px w-12 sm:w-20 bg-gradient-to-l from-transparent to-orange-500/50"></div>
                            </div>
                        </div>
                    </div>

                    <!-- БЛОК С ГАЙДАМИ - ПРОЗРАЧНЫЙ -->
                    <div class="max-w-3xl mx-auto">
                        <div
                            class="bg-gray-900/40 backdrop-blur-sm rounded-2xl p-8 sm:p-10  text-center">
                            <p class="text-gray-300 text-lg sm:text-xl mb-8 leading-relaxed">
                                <span
                                    class="block mt-1">На этом сайте собраны гайды и инструменты, для сообщества.</span>
                                Они доступно каждому — независимо в гильдии вы или нет.
                            </p>

                            <Link :href="route('guides')"
                                  class="group inline-flex items-center justify-center gap-3 px-8 py-4 bg-transparent border-2 border-orange-500/50 hover:border-orange-500 text-orange-400 hover:text-orange-300 font-semibold text-lg rounded-xl transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:shadow-orange-500/20 min-w-[240px]">
                                <span class="text-2xl">📖</span>
                                <span>Перейти к гайдам</span>
                                <span class="group-hover:translate-x-1 transition-transform duration-300">→</span>
                            </Link>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style scoped>
/* АНИМАЦИЯ ГРАДИЕНТА ДЛЯ "PVE гильдии" */
.gradient-text {
    background: linear-gradient(-45deg, #f97316, #ea580c, #fdba74, #f97316);
    background-size: 300% 300%;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.animate-gradient {
    animation: gradientShift 3s ease-in-out infinite;
}

@keyframes gradientShift {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}

/* АНИМАЦИЯ ДЛЯ WHAT THE HELL - ПЛАВАНИЕ */
.animate-float {
    animation: float 4s ease-in-out infinite;
    text-shadow: 0 0 40px rgba(251, 146, 60, 0.3), 0 0 80px rgba(251, 146, 60, 0.1);
}

@keyframes float {
    0%, 100% {
        transform: translateY(0px) scale(1);
    }
    50% {
        transform: translateY(-12px) scale(1.02);
    }
}

/* АНИМАЦИЯ ПОЯВЛЕНИЯ ССЫЛКИ */
.group {
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInUp 0.8s ease-out forwards;
    animation-delay: 0.4s;
}

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>
