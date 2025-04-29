<script setup>
    const props = defineProps({
        listing: Object
    })
</script>
<template>
    <span>{{ listing.city }}, {{ listing.street_name }} for {{ listing.price }}</span>
</template>