<template>
    <div>
        <Menu/>
        <router-view></router-view>
        <Copyright/>
    </div>
</template>

<script>
    import Menu from './fixed/Menu.vue'
    import Copyright from './fixed/Copyright.vue'
    export default {
        name: 'App',
        components: {
            Menu,
            Copyright
        }
    }
</script>