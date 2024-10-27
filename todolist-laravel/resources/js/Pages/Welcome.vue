<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
<!-- component -->
<!-- Section 1 -->
    <section class="w-full px-6 pb-12 antialiased bg-white">
      <div class="mx-auto max-w-7xl">
        <nav
          class="relative z-50 h-24 select-none"
          x-data="{ showMenu: false }"
        >
          <div
            class="container relative flex flex-wrap items-center justify-between h-24 mx-auto overflow-hidden font-medium border-b border-gray-200 md:overflow-visible lg:justify-center sm:px-4 md:px-2"
          >
            <div class="flex items-center justify-start w-1/4 h-full pr-4">
              <a class="inline-block py-4 md:py-0">
                <span class="p-1 text-xl font-black leading-none text-gray-900"
                  ><span>Your To Do List</span
                  ><span class="text-indigo-600">.</span></span
                >
              </a>
            </div>
            <div
              class="top-0 left-0 items-start hidden w-full h-full p-4 text-sm bg-gray-900 bg-opacity-50 md:items-center md:w-3/4 md:absolute lg:text-base md:bg-transparent md:p-0 md:relative md:flex"
              :class="{'flex fixed': showMenu, 'hidden': !showMenu }"
            >
              <div
                class="flex-col w-full h-auto overflow-hidden bg-white rounded-lg md:bg-transparent md:overflow-visible md:rounded-none md:relative md:flex md:flex-row"
              >
                <div
                  class="flex flex-col items-start justify-center w-full space-x-6 text-center lg:space-x-8 md:w-2/3 md:mt-0 md:flex-row md:items-center"
                >
                  <Link
                    :href="route('login')"
                    class="inline-block w-full py-2 mx-0 ml-6 font-medium text-left text-indigo-600 md:ml-0 md:w-auto md:px-0 md:mx-2 lg:mx-3 md:text-center"
                    >Home</Link
                  >
                  <a
                    href="https://jetstream.laravel.com/2.x/introduction.html"
                    class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-indigo-600 lg:mx-3 md:text-center"
                    target="_blank"
                    >Features</a
                  >
                  <a
                    href="https://crjavier1021.wixsite.com/portafolio"
                    class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-indigo-600 lg:mx-3 md:text-center"
                    target="_blank"
                    >Blog</a
                  >
                  <a
                    href="https://crjavier1021.wixsite.com/portafolio/contacto_"
                    class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-indigo-600 lg:mx-3 md:text-center"
                    target="_blank"
                    >Contact</a
                  >
                  <a
                    href="#_"
                    class="absolute top-0 left-0 hidden py-2 mt-6 ml-10 mr-2 text-gray-600 lg:inline-block md:mt-0 md:ml-2 lg:mx-3 md:relative"
                  >
                    <svg
                      class="inline w-5 h-5"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                      ></path>
                    </svg>
                  </a>
                </div>
                <!--<div v-if="canLogin" class="flex flex-col items-start justify-end w-full pt-4 md:items-center md:w-1/3 md:flex-row md:py-0">
                    <Link v-if="$page.props.auth.user" :href="route('dashboard')" class="w-full px-6 py-2 mr-0 text-gray-700 md:px-0 lg:pl-2 md:mr-4 lg:mr-5 md:w-auto">Dashboard</Link>

                    <template v-else>
                        <Link :href="route('login')" class="w-full px-6 py-2 mr-0 text-gray-700 md:px-0 lg:pl-2 md:mr-4 lg:mr-5 md:w-auto">Log in</Link>

                        <Link v-if="canRegister" :href="route('register')" class="inline-flex items-center w-full px-6 py-3 text-sm font-medium leading-4 text-white bg-indigo-600 md:px-3 md:w-auto md:rounded-full lg:px-5 hover:bg-indigo-500 focus:outline-none md:focus:ring-2 focus:ring-0 focus:ring-offset-2 focus:ring-indigo-600">
                            Register
                        </Link>
                    </template>

                </div>-->

                <div class="flex flex-col items-start justify-end w-full pt-4 md:items-center md:w-1/3 md:flex-row md:py-0">
                  <Link :href="route('login')" class="w-full px-6 py-2 mr-0 text-gray-700 md:px-0 lg:pl-2 md:mr-4 lg:mr-5 md:w-auto">Log in</Link>
                  <Link :href="route('register')" class="inline-flex items-center w-full px-6 py-3 text-sm font-medium leading-4 text-white bg-indigo-600 md:px-3 md:w-auto md:rounded-full lg:px-5 hover:bg-indigo-500 focus:outline-none md:focus:ring-2 focus:ring-0 focus:ring-offset-2 focus:ring-indigo-600">
                    Sign Up</Link>
                </div>
              </div>
            </div>
            <div
              @click="showMenu = !showMenu"
              class="absolute right-0 flex flex-col items-center items-end justify-center w-10 h-10 bg-white rounded-full cursor-pointer md:hidden hover:bg-gray-100"
            >
              <svg
                class="w-6 h-6 text-gray-700"
                x-show="!showMenu"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                viewBox="0 0 24 24"
                stroke="currentColor"
                x-cloak=""
              >
                <path d="M4 6h16M4 12h16M4 18h16"></path>
              </svg>
              <svg
                class="w-6 h-6 text-gray-700"
                x-show="showMenu"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                x-cloak=""
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M6 18L18 6M6 6l12 12"
                ></path>
              </svg>
            </div>
          </div>
        </nav>

        <!-- Main Hero Content -->
        <div
          class="container max-w-lg px-4 py-32 mx-auto text-left md:max-w-none md:text-center"
        >
          <h1
            class="text-5xl font-extrabold leading-10 tracking-tight text-left text-gray-900 md:text-center sm:leading-none md:text-6xl lg:text-7xl"
          >
            <span class="inline md:block">Take Control over your Activities</span>
            <span
              class="relative mt-2 text-transparent bg-clip-text bg-gradient-to-br from-indigo-600 to-indigo-500 md:inline-block"
              >You have the Control</span
            >
          </h1>
          <div
            class="mx-auto mt-5 text-gray-500 md:mt-12 md:max-w-lg md:text-center lg:text-lg"
          >
            With us, you can keep track of your to-do activities, mark the ones you have completed and continue!
          </div>
          <div class="flex flex-col items-center mt-12 text-center">
            <span class="relative inline-flex w-full md:w-auto">
              <Link
                :href="route('login')"
                class="inline-flex items-center justify-center w-full px-8 py-4 text-base font-bold leading-6 text-white bg-indigo-600 border border-transparent rounded-full md:w-auto hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600"
              >
                Start Now
              </Link>
              <span
                class="absolute top-0 right-0 px-2 py-1 -mt-3 -mr-6 text-xs font-medium leading-tight text-white bg-green-400 rounded-full"
                >Completely Free</span
              >
            </span>
            <Link :href="route('register')" class="mt-3 text-sm text-indigo-500">Learn More</Link>
          </div>
        </div>
        <!-- End Main Hero Content -->
      </div>
    </section>
</template>
