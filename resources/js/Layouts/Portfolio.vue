<template>
    <section id="portfolio" class="section min-h-[800px] bg-stone-950">
        <div class="container mx-auto">
            <div class="flex flex-col items-center text-center">
                <h2 class="text-3xl lg:text-4xl text-teal-200 mt-5 font-medium lg:font-extrabold mb-5">My latest work</h2>
            </div>
        </div>
        <Projects :skills="skills" :projects="projects"></Projects>
    </section>

</template>

<script setup>
    import Projects from '../Components/Projects.vue';

    defineProps({
        skills: Object,
        projects: Object
    });

</script>
