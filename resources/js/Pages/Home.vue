<template>
    <Head title="Home Page" />
    <Frontend>
        <Hero></Hero>
        <About></About>
        <Skills :skills="skills"></Skills>
        <Portfolio :skills="skills" :projects="projects"></Portfolio>
    </Frontend>
</template>

<script setup>
    import { Head } from '@inertiajs/vue3';
    import Frontend from '../Layouts/Frontend.vue';
    import Hero from '../Components/Hero.vue';
    import About from '../Components/About.vue';
    import Skills from '../Components/Skills.vue';
    import Portfolio from '../Layouts/Portfolio.vue';

    defineProps({
        skills: Object,
        projects: Object
    });
</script>
