<template>
    <section id="skills" class="bg-zinc-950">
        <div class="container mx-auto py-16">
            <div class="flex flex-col items-center justify-around lg:flex-row">
                <div class="mt-4" v-for="skill in skills.data" :key="skill.id">
                    <img :src="skill.image"  :alt="skill.name" class="lg:h-20 h-12">
                </div>
            </div>
        </div>
    </section>

</template>


<script setup>
    defineProps({
        skills: Object
    });
</script>
