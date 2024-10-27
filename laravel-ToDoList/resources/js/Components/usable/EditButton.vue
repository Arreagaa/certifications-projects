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
    <Link
        className="px-4 py-2 text-sm text-white bg-gradient-to-l from-indigo-500 to-indigo-500 rounded" style="margin-right:2px">
        Edit
    </Link>
</template>
