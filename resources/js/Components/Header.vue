<template>

    <nav class="bg-cyan-900 fixed top-0 left-0 w-full">
    <div class="w-full flex flex-wrap justify-around mx-auto p-4">
        <button @click="showMobileMenu = !showMobileMenu" data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        </button>
        <div class="w-full md:block md:w-auto" :class="{hidden: showMobileMenu}" id="navbar-default">
            <ul class="text-xl font-medium flex flex-col p-4 md:p-0 mt-4 rounded-lg md:flex-row md:space-x-8 md:mt-0">
                <li>
                    <Link :href="route('home')" class="block py-2 pl-3 pr-4 text-white rounded md:hover:bg-transparent md:border-0 hover:text-teal-300 md:p-0">Home</Link>
                </li>
                <li>
                    <Link href="#about" class="block py-2 pl-3 pr-4 text-white rounded md:hover:bg-transparent md:border-0 hover:text-teal-300 md:p-0">About</Link>
                </li>
                <li>
                    <Link href="#portfolio" class="block py-2 pl-3 pr-4 text-white rounded md:hover:bg-transparent md:border-0 hover:text-teal-300 md:p-0">My Work</Link>
                </li>
                <li>
                    <Link :href="route('skills.index')" class="block py-2 pl-3 pr-4 text-white rounded md:hover:bg-transparent md:border-0 hover:text-teal-300 md:p-0">Manage Skills</Link>
                </li>
                <li>
                    <Link :href="route('projects.index')" class="block py-2 pl-3 pr-4 text-white rounded md:hover:bg-transparent md:border-0 hover:text-teal-300 md:p-0">Manage Projects</Link>
                </li>
            </ul>
        </div>
    </div>
    </nav>

</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';
const showMobileMenu = ref("false");
</script>
