<template>
    <app-layout  title="List">
        <template #header>
            <h1 class="text-center text-2xl font-bold leading-7 text-white sm:text-3xl sm:truncate py-4 bg-gradient-to-l from-indigo-500 to-indigo-800">
                My To Do List
            </h1>
        </template>

        <div class="py-12">
            <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <br>
                    <BaseButton :href="route('things.create')" text="Create Activity"></BaseButton>
                    <br>
                    <br>
                    <table class="table-fixed w-full">
                        <TableHead></TableHead>
                        <tbody>
                            <tr v-for="thing in things" :key="thing.id">
                                <td className="border px-4 py-2" v-if="thing.status == 0 || false" style="text-align: center; color:red">Undone</td>
                                <td className="border px-4 py-2" v-if="thing.status != 0 || false" style="text-align: center; color:green">Completed</td>
                                <td className="border px-4 py-2">{{ thing.name }}</td>
                                <td className="border px-4 py-2">{{ thing.description }}</td>
                                <td className="border px-4 py-2" style="text-align: center">{{ thing.deadline }}</td>
                                <td className="border px-4 py-2" style="text-align: center">
                                    <TableButton :href="route('things.edit', thing.id)" text="Edit"></TableButton>
                                    <TableButton className="px-4 py-2 text-sm text-white bg-red-500 rounded" @click="deleteThing(thing.id)" text="Delete"></TableButton>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/inertia-vue3';
//LINK BASE
import BaseButton from '../Components/usable/BaseButton.vue';
//TABLE BUTTONS
import TableButton from '../Components/usable/TableButton.vue';
import TableHead from '../Components/usable/TableHead.vue';
//ALERTS
import Swal from 'sweetalert2/dist/sweetalert2.js'
import 'sweetalert2/dist/sweetalert2.min.css';

export default{
    props:{
        things: Array
    },
    components:{
    AppLayout,
    Link,
    BaseButton,
    TableButton,
    TableHead
},
    methods:{
        deleteThing(id){
            Swal.fire({
            title: 'Are you sure?',
            text: "Activity Deletion Process!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#667eea',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                this.$inertia.delete(route('things.destroy', id));
                Swal.fire(
                'Activity Deleted!',
                'Your Activity has been Deleted.',
                'success'
                )
            }
        })
        }
    }

}
</script>
