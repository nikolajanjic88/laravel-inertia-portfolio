<template>
    <Head title="Edit Skill" />

    <Manage>

        <div class="py-12 bg-zinc-950 h-[80vh]">
            <div class="max-w-md mx-auto sm:px-6 lg:px-8">
                <h1 class="mb-4 font-extrabold leading-none tracking-tight text-teal-200 md:text-2xl lg:text-4xl text-center">New Skill</h1>
                <form class="p-4" @submit.prevent="submit">
                    <div class="mb-6">
                        <label for="name" class="block mb-2 text-sm font-medium text-teal-300">Skill Name</label>
                        <input
                            id="name"
                            type="text"
                            v-model="form.name"
                            autofocus
                            autocomplete="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <div class="text-red-800" v-if="$page.props.errors.name">{{ $page.props.errors.name }}</div>
                    </div>
                    <div class="mb-6">
                        <label for="image" class="block mb-2 text-sm font-medium text-teal-300">Skill Image</label>
                        <input
                            id="image"
                            type="file"
                            @input="form.image = $event.target.files[0]">
                        <div class="text-red-800" v-if="$page.props.errors.image">{{ $page.props.errors.image }}</div>
                    </div>
                    <div class="flex justify-between">
                        <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Update
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
    import { Head, Link, useForm } from '@inertiajs/vue3';
    import { router } from '@inertiajs/vue3'

    const props = defineProps({
        skill: Object
    })

    const form = useForm({
        name: props.skill.name,
        image: null
    });

    const submit = () => {
        router.post(`/skills/${props.skill.id}`, {
            _method: 'put',
            name: form.name,
            image: form.image,
        })
    };
</script>
