<template>
    <div v-if="notification.status" class="message-notification">
        <div class="alert alert-success " role="alert" v-if="notification.message">
            {{ notification.message}}
        </div>
    </div>
    <div v-else >
        <div class="alert alert-danger col-md-4 offset-4" role="alert" v-if="notification.message">
            {{ notification.message}}
        </div>

        <div v-if="notification.data">
            <div class="alert alert-danger col-md-4 offset-4" role="alert" v-if="notification.data.email">
                {{ notification.data.email}}
            </div>
            <div class="alert alert-danger col-md-4 offset-4" role="alert" v-if="notification.data.password">
                {{ notification.data.password}}
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['notification']
    }
</script>

<style scoped>
    .message-notification {
        position: fixed;
        top: 17px;
        right: 20px;
        z-index: 10;
    }
</style>