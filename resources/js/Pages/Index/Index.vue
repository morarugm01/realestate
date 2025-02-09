<script setup>
    import {ref} from 'vue';

    defineProps({
        'message' : String
    });

    const counter = ref(0);
    setInterval(() => counter.value++, 1000);
</script>

<template>
        <div>
            hello {{ counter }}
        </div>
        <div> The message is {{ message }}</div>
</template>