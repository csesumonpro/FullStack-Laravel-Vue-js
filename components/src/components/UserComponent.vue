<template>
    <div class="user" :style="user.age > 30 ? 'color:red' : 'color:green'">
        From user component {{jon}}
        <user-info :username="jon" :user="user"></user-info>
    </div>
</template>

<style>
  .user {
    color: red;
  }
</style>

<script>
import UserInfo from './UserInfo.vue'

export default {
  name: 'UserComponent',
  data() {
    return {
      jon: 'John Doe',
      user: {
        name: 'John Doe',
        age: 35,
      },
    }
  },
  components: {
    UserInfo
  }
}
</script>


