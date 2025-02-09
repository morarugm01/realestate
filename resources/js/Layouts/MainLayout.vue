<script setup>
    import { Link } from '@inertiajs/vue3'
</script>

<template>
    <div class="flex flex-column ">
        <div class="flex flex-row space-x-2">
            <Link href="/">Homepage</Link>
            <Link href="/hello">Show page</Link>
        </div>
    </div>
    <slot></slot>
</template>