<template>
    <div class="bg-slate-200 dark:bg-slate-900">
        <div v-if="$page.props.flash.message" class="p-4 text-center text-lg text-white bg-green-600" role="alert">
                {{ $page.props.flash.message }}
        </div>
        <!--header-->
        <Header></Header>

        <main>
            <slot />
        </main>
        <!--footer-->
        <Footer></Footer>
    </div>
</template>

<script setup>
import Header from '../Components/Header.vue';
import Footer from '../Components/Footer.vue';
</script>
