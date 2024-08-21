<template>
    <Head title="Skills" />
    <Manage>
        <div class="py-12 bg-zinc-950 text-teal-300">
            <div class="max-w-7xl flex justify-around mx-auto sm:px-6 lg:px-8">
                <div class=" m-2 p-2">
                    <Link :href="route('home')" class="px-4 py-2 bg-yellow-500 hover:bg-yellow-700 text-white rounded-md">Home Page</Link>
                </div>
                <div class=" m-2 p-2">
                    <Link :href="route('skills.create')" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded-md">New Skill</Link>
                </div>
            </div>
            <div class="relative overflow-x-auto mx-auto shadow-md sm:rounded-lg bg-zinc-900 w-3/4">
                <table class="w-full text-sm text-center">
                    <thead class="text-xs uppercase">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-lg">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-lg">
                                Image
                            </th>
                            <th scope="col" class="px-6 py-3 text-lg">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="skill in skills.data" :key="skill.id">
                            <td class="px-6 py-4">
                                <p class="font-semibold">{{ skill.name }}</p>
                            </td>
                            <td class="px-6 py-4">
                                <img :src="skill.image" class="w-12 h-12 mx-auto" alt="">
                            </td>
                            <td class="px-6 py-4">
                                <Link :href="route('skills.edit', skill.id)"
                                class="font-medium text-blue-600 hover:underline mr-2">Edit</Link>
                                <Link :href="route('skills.destroy', skill.id)"
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
        skills: Object,
    });
</script>
