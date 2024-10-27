<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
</script>

<template>
    <AppLayout title="Dashboard">
        <!--<div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <Welcome />
                </div>
            </div>
        </div>-->

        <!-- component -->
<section class="py-20 bg-white">
    <div class="flex flex-col px-8 mx-auto space-y-12 max-w-7xl xl:px-12">
        <div class="relative">
            <h2 class="w-full text-3xl font-bold text-center sm:text-4xl md:text-5xl"> Start Managing Your Activities</h2>
            <p class="w-full py-8 mx-auto -mt-2 text-lg text-center text-gray-700 intro sm:max-w-3xl">Attach, modify, perform and even delete activities, as you progress in them, you have Control, everything is completely free, the best of us, for you.</p>
        </div>
        <div class="flex flex-col mb-8 animated fadeIn sm:flex-row">
            <div class="flex items-center mb-8 sm:w-1/2 md:w-5/12 sm:order-last">
                <img src="https://www.simontechway.com/wp-content/uploads/2020/04/email-marketing.gif" alt="">
            </div>
            <div class="flex flex-col justify-center mt-5 mb-8 md:mt-0 sm:w-1/2 md:w-7/12 sm:pr-16">
                <p class="mb-2 text-sm font-semibold leading-none text-left text-indigo-600 uppercase">To Do Things</p>
                <h3 class="mt-2 text-2xl sm:text-left md:text-4xl">Simple to Understand</h3>
                <p class="mt-5 text-lg text-gray-700 text md:text-left" style="text-align: justify;">Basic and understandable interface, a table format that displays information about the respective activities and the actions to be performed.
                    We work so that you carry out your tasks, chores and others, in the best way, simply and neatly.
                </p>
            </div>
        </div>
        <div class="flex flex-col mb-8 animated fadeIn sm:flex-row">
            <div class="flex items-center mb-8 sm:w-1/2 md:w-5/12">
                <img src="https://www.milugardigital.com/wp-content/uploads/2022/02/webdesign.gif" alt="">
            </div>
            <div class="flex flex-col justify-center mt-5 mb-8 md:mt-0 sm:w-1/2 md:w-7/12 sm:pl-16">
                <p class="mb-2 text-sm font-semibold leading-none text-left text-indigo-600 uppercase">know your data</p>
                <h3 class="mt-2 text-2xl sm:text-left md:text-4xl">Your Profile and Teams</h3>
                <p class="mt-5 text-lg text-gray-700 text md:text-left" style="text-align: justify;">In the upper navigation bar, verify and manage your account information, you can delete if you wish, in the same way, start with your work teams, right now.
                    You can verify your work team, take its correct control, or you can create a new team.
                </p>
            </div>
        </div>
        <div class="flex flex-col mb-8 animated fadeIn sm:flex-row">
            <div class="flex items-center mb-8 sm:w-1/2 md:w-5/12 sm:order-last">
                <img src="https://i.pinimg.com/originals/19/1f/1b/191f1b2978a23ed3f4f130f9f1fa4e18.gif" alt="">
            </div>
            <div class="flex flex-col justify-center mt-5 mb-8 md:mt-0 sm:w-1/2 md:w-7/12 sm:pr-16">
                <p class="mb-2 text-sm font-semibold leading-none text-left text-indigo-600 uppercase">Easy to Control</p>
                <h3 class="mt-2 text-2xl sm:text-left md:text-4xl">Daily Activities</h3>
                <p class="mt-5 text-lg text-gray-700 text md:text-left" style="text-align: justify;">Attach the activities that you have pending, and verify the information, everything is well registered and protected, only with us.
                    Never leave anything undone, set a deadline for your respective activities, try to find time for everything.
                </p>
            </div>
        </div>

    </div>
</section>

    </AppLayout>
</template>
