<template>
    <Head title="Projects" />
    <Manage>
        <div class="py-12 bg-zinc-950 text-teal-300 h-[100vh]">
            <div class="max-w-7xl flex justify-around mx-auto sm:px-6 lg:px-8">
                <div class="m-5">
                    <Link :href="route('home')" class="px-4 py-2 bg-yellow-500 hover:bg-yellow-700 text-white rounded-md">Home Page</Link>
                </div>
                <div class="m-5">
                    <Link :href="route('projects.create')" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded-md">New Project</Link>
                </div>
            </div>
            <div class="relative overflow-x-auto mx-auto shadow-md sm:rounded-lg bg-zinc-900 w-3/4">
                <table class="w-full text-sm text-center">
                    <thead class="text-xs text-gray-700 uppercase">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3 hidden lg:table-cell">
                                URL
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Skill
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Image
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="project in projects.data" :key="project.id">
                            <td class="px-6 py-4">
                                {{ project.name }}
                            </td>
                            <td class="px-6 py-4 hidden lg:table-cell">
                                <Link :href="project.project_url">{{ project.project_url }}</Link>
                            </td>
                            <td class="px-6 py-4">
                                {{ project.skill.name }}
                            </td>
                            <td class="px-6 py-4">
                                <img :src="project.image" class="w-12 h-12 mx-auto" alt="">
                            </td>
                            <td class="px-6 py-4">
                                <Link :href="route('projects.edit', project.id)"
                                class="font-medium text-blue-600 hover:underline mr-2">Edit</Link>
                                <Link :href="route('projects.destroy', project.id)"
                                method="delete"
                                as="button"
                                type="button"
                                class="font-medium text-red-600 hover:underline">Delete</Link>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </Manage>

</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Manage from '../../Layouts/Manage.vue';
defineProps({
        projects: Object,
    });
</script>
