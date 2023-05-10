<template>
    <Link :href="project.project_url" class="flex group flex-col items-center cursor-pointer">
        <div class="mb-6">
            <img :src="project.image" :alt="project.name" class="rounded-2xl h-48 w-72">
        </div>
        <span class="capitalize group-hover:text-teal-500 mb-3 text-teal-200">
            {{ project.skill.name }}
        </span>
        <h3 class="capitalize text-semibold text-2xl group-hover:text-teal-500 mb-3 text-teal-200">
            {{ project.name }}
        </h3>
    </Link>
</template>

<script setup>
    import { Link } from '@inertiajs/vue3'

    defineProps({
        project: Object,
    });
</script>
