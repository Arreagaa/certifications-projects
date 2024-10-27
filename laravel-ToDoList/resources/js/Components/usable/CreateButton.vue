<script>
import { Link } from '@inertiajs/inertia-vue3';
export default{
    props:{
        things: Array
    },
    components:{
        Link
    }

}
</script>

<template>
    <Link :href="route('things.create')"
        class="flex-shrink-0 bg-gradient-to-l from-indigo-500 to-indigo-500 text-white text-base font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-blue-200"
        type="button">
        Create Activity
    </Link>
</template>
