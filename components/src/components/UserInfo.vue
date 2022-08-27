<template>
    <div class="user-info">
        {{username}} <br>
        {{user.name}} <br>
        {{user.age}} <br>
        Name: {{ name }}
        <br>
        Age: {{ age }}
        <br>

    </div>
</template>

<script>
export default {
    name: 'UserInfo',
    props: ['username', 'user'],
    // props: {
    //     username: {
    //         type: String,
    //         default: 'John Doe'
    //     },
    //     user: {
    //         type: Object,
    //         default: {}
    //     }
    // },
    data() {
        return {
            name: this.user.name,
            age: this.user.age,
        }
    }
}
</script>