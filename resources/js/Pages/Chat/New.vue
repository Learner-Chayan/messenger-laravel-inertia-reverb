<script setup>
import ChatLayout from "@/Layouts/ChatLayout.vue";
import Sidebar from "@/Components/Sidebar/Sidebar.vue";

</script>

<template>
    <ChatLayout>
        <h1>Hello</h1>
        <template v-slot:sidebar>
            <Sidebar :chats="chats"/>
        </template>


    </ChatLayout>
</template>

