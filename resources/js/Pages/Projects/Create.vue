<template>
    <Head title="New Project" />

    <Manage>
        <div class="py-12 bg-zinc-950 h-[80vh]">
            <div class="max-w-md mx-auto sm:px-6 lg:px-8">
                <h1 class="mb-4 font-extrabold leading-none tracking-tight text-teal-200 md:text-2xl lg:text-4xl text-center">New Project</h1>
                <form class="p-4" @submit.prevent="submit">
                    <div class="mb-6">
                        <label class="text-teal-300" for="skill" value="Skill">Skill</label>
                        <select v-model="form.skill_id" id="skill_id" name="skill_id" class="block w-full border-teal-300 pl-3 pr-10 py-2">
                            <option v-for="skill in skills" :key="skill.id" :value="skill.id">{{ skill.name }}</option>
                        </select>
                        <div class="text-red-800" v-if="form.errors.skill_id">{{ form.errors.skill_id }}</div>
                    </div>
                    <div class="mb-6">
                        <label for="name" class="block mb-2 text-sm font-medium text-teal-300">Project Name</label>
                        <input
                            id="name"
                            type="text"
                            v-model="form.name"
                            autofocus
                            autocomplete="name"
                            class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Project Name">
                            <div class="text-red-800" v-if="form.errors.name">{{ form.errors.name }}</div>
                    </div>
                    <div class="mb-6">
                        <label for="name" class="block mb-2 text-sm font-medium text-teal-300 dark:text-white">Project URL</label>
                        <input
                            id="project_url"
                            type="text"
                            v-model="form.project_url"
                            autofocus
                            class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Project URL">
                            <div class="text-red-800" v-if="form.errors.project_url">{{ form.errors.project_url }}</div>
                    </div>
                    <div class="mb-6">
                        <label for="image" class="block mb-2 text-sm font-medium text-teal-300">Project Image</label>
                        <input
                            id="image"
                            type="file"
                            @input="form.image = $event.target.files[0]">
                            <div class="text-red-800" v-if="form.errors.image">{{ form.errors.image }}</div>
                    </div>
                    <div class="flex justify-between">
                        <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Store
                        </button>
                        <a :href="route('projects.index')" class="btn btn-md text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </Manage>
</template>

<script setup>
    import Manage from '../../Layouts/Manage.vue';
    import { Head, useForm } from '@inertiajs/vue3';

    defineProps({
        skills: Array
    })

    const form = useForm({
        name: '',
        image: null,
        skill_id: "",
        project_url: ""
    });

    const submit = () => {
        form.post(route('projects.store'));
    };
</script>
