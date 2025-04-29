<script setup>
import ListingAddress from '@/Components/ListingAddress.vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    listings: Array
})

const file =
{
    source:
        'https://images.unsplash.com/photo-1582053433976-25c00369fc93?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=512&q=80',
}


</script>


<template>
    <ul role="list" class="grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
        <li v-for="listing in listings" :key="listing.id" class="relative">
            <Link :href="`/listings/${listing.id}`">
            <div
                class="group overflow-hidden rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 focus-within:ring-offset-gray-100">
                <img :src="file.source" alt=""
                    class="pointer-events-none aspect-10/7 object-cover group-hover:opacity-75" />
                <button type="button" class="absolute inset-0 focus:outline-hidden">
                    <span class="sr-only">View details for {{ listing.id }}</span>
                </button>
            </div>
            <ListingAddress :listing="listing"></ListingAddress>
            </Link>
        </li>
    </ul>
</template>
