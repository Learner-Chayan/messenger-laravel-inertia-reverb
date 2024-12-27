<script setup>
import ChatLayout from "@/Layouts/ChatLayout.vue";
import Sidebar from "@/Components/Sidebar/Sidebar.vue";

</script>

<template>
    <ChatLayout>
        <template v-slot:sidebar>
            <Sidebar />
        </template>
    </ChatLayout>
</template>

