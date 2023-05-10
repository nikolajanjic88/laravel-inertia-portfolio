<template>
    <div class="container mx-auto">
        <nav class="mb-12 border-b-2 border-teal-100">
            <ul class="flex flex-col lg:flex-row justify-evenly items-center">
                <li class="cursor-pointer capitalize m-4">
                    <button
                    @click="filterProjects('all')"
                    class="flex text-center px-4 py-2 text-teal-200 hover:text-teal-700"
                    :class="[selectedSkill === 'all' ? 'text-teal-700' : '']">
                        All
                    </button>
                </li>
                <li class="cursor-pointer capitalize m-4" v-for="skill in skills.data" :key="skill.id">
                    <button
                    @click="filterProjects(skill.id)"
                    class="flex text-center px-4 py-2 text-teal-200 hover:text-teal-700"
                    :class="[selectedSkill === skill.id ? 'text-teal-700' : '']">
                        {{ skill.name }}
                    </button>
                </li>
            </ul>
        </nav>
        <section class="grid gap-y-12 lg:grid-cols-3 lg:gap-8">
            <Project v-for="project in filteredProjects" :key="project.id" :project="project"></Project>
        </section>
    </div>

</template>

<script setup>
    import Project from './Project.vue';
    import { ref } from 'vue';

    const props = defineProps({
            skills: Object,
            projects: Object,
        });

    const filteredProjects = ref(props.projects.data);
    const selectedSkill = ref('all');

    const filterProjects = (id) => {
        if(id === "all") {
            filteredProjects.value = props.projects.data;
            selectedSkill.value = id;
        }
        else {
            filteredProjects.value = props.projects.data.filter(project => {
                return project.skill.id === id;
            })
            selectedSkill.value = id;
        }
    };
</script>
