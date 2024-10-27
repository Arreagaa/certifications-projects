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
        className="px-4 py-2 text-sm text-white bg-red-500 rounded">
        Delete
    </Link>
</template>
