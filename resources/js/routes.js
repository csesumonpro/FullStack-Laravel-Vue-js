
import Post from './components/post/Post.vue'
import Posts from './components/post/Posts.vue'
const routes = [
    { path: '/', component: Posts },
    { path: '/posts', component: Posts, name: 'posts' },
    { path: '/post/:id', component: Post, name: 'post' },
  ];

 export default routes;
