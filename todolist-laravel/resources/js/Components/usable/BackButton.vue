<script>
import { Link } from '@inertiajs/inertia-vue3';
export default{
    components:{
        Link
    }
}
</script>

<template>
    <Link
        class="px-6 py-2 text-white bg-gradient-to-l from-indigo-500 to-indigo-500 rounded-md focus:outline-none" :href="route('things.index')">
        Back
    </Link>
</template>
