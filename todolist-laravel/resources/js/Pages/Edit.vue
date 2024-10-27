<template>
    <app-layout title="Edit">
        <template #header>
            <h1 class="text-center text-2xl font-bold leading-7 text-white sm:text-3xl sm:truncate py-4 bg-gradient-to-l from-indigo-500 to-indigo-800">
                Activity Modifications
            </h1>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="flex items-center justify-between mb-6">
                            <BaseButton :href="route('things.index')" text="Back"></BaseButton>
                        </div>
                        <form @submit.prevent="submit">
                                <div class="flex flex-col">
                                    <div class="mb-4">
                                         <label>Activity</label>
                                        <input
                                            id="name"
                                            v-model="form.name"
                                            class="py-2 px-3 rounded-lg border-2 mt-1 block w-full" type="text"
                                            placeholder="Name of the Activity" required/>
                                    </div>

                                    <div class="mb-4">
                                        <label>Description</label>
                                        <input
                                            id="description"
                                            type="text"
                                            placeholder="Description or Clarification"
                                            class="py-2 px-3 rounded-lg border-2 mt-1 block w-full"
                                            v-model="form.description" required/>
                                    </div>

                                    <div class="mb-4">
                                        <label>DeadLine</label>
                                        <input
                                            id="deadline"
                                            type="date"
                                            class="py-2 px-3 rounded-lg border-2 mt-1 block w-full"
                                            v-model="form.deadline" required/>
                                    </div>

                                    <div class="mb-4">
                                        <label>Activity Status</label>
                                        <select id="status"
                                            v-model="form.status"
                                            placeholder="Actual State"
                                            class="py-2 px-3 rounded-lg border-2 mt-1 block w-full">
                                            <option value="1" class="py-2 px-3 rounded-lg border-2 mt-1 block w-full">Completed</option>
                                            <option value="0" class="py-2 px-3 rounded-lg border-2 mt-1 block w-full">Undone</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="mt-4">
                                    <BaseSubmit text="Save"></BaseSubmit>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </app-layout >
</template>


<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/inertia-vue3';
//LINK BASE y BOTON BASE
import BaseButton from '../Components/usable/BaseButton.vue';
import BaseSubmit from '../Components/usable/BaseSubmit.vue';
//ALERTS
import Swal from 'sweetalert2/dist/sweetalert2.js'
import 'sweetalert2/dist/sweetalert2.min.css';
export default{
    components:{
        AppLayout,
        Link,
        BaseButton,
        BaseSubmit
    },
    props:["thing"],
    data(){
        return{
            form:{
                name:this.$props.thing.name,
                description:this.$props.thing.description,
                deadline:this.$props.thing.deadline,
                status:this.$props.thing.status,
            }
        }
    },
    methods:{
        submit(){
            Swal.fire({
            title: 'Are you sure?',
            text: "Activity Modification Process!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#667eea',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, modify it!'
            }).then((result) => {
            if (result.isConfirmed) {
                this.$inertia.put(route('things.update', this.$props.thing.id), this.form);
                Swal.fire(
                'Activity Modified!',
                'Your Activity has been Modified.',
                'success'
                )
            }
        })
        }
    }
}
</script>

