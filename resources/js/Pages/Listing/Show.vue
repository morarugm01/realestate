<script setup>
import ListingAddress from '@/Components/ListingAddress.vue';

    const props = defineProps({
        listing: Object
    })
        
</script>

<template>
    <ListingAddress :listing="listing"></ListingAddress>
</template>