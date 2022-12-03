
import Post from './components/post/Post.vue'
import Posts from './components/post/Posts.vue'
const routes = [
    { path: '/', component: Posts },
    { path: '/posts', component: Posts },
    { path: '/post', component: Post },
  ];

 export default routes;
