<template>
    <div class="container">
         	<!-- Begin List Posts
	================================================== -->
	<section class="recent-posts">
	<div class="section-title">
		<h2><span>All Stories</span></h2>
	</div>
	<div class="card-columns listrecent">
		<!-- begin post -->

		<div class="card" v-for="post in posts">
			<a href="post.html">
				<img class="img-fluid" :src="imageUrl(post.image)" alt="">
			</a>
			<div class="card-block">
				<h2 class="card-title">
                    <router-link to="/post">{{post.title}}</router-link>
                </h2>
                <h4 class="card-text">{{post.content}}</h4>
                <strong class="category">{{post.category.name}}</strong>
				<div class="metafooter">
					<div class="wrapfooter">
						<span class="meta-footer-thumb">
						<a href="author.html"><img class="author-thumb" src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x" alt="Sal"></a>
						</span>
						<span class="author-meta">
						<span class="post-name">
                            <a href="author.html">
                                <pre>
                                {{post.user.name}}
                                </pre>
                            </a>
                        </span><br/>
						<span class="post-date">
                            {{ post.created_at }}</span><span class="dot">
                        </span>
                            <span class="post-read">6 min read</span>
						</span>
						<span class="post-read-more"><a href="post.html" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
					</div>
				</div>
			</div>
		</div>
		<!-- end post -->

	</div>
	</section>
	<!-- End List Posts
	================================================== -->
    </div>
</template>

<script>

export default {
    data() {
        return {
            posts: [],
        }
    },
    mounted() {
       axios.get('/api/posts')
           .then(res => {
               this.posts = res.data.posts
           })
           .catch(err => {
                console.log(err)
           })
    },
    methods: {
        imageUrl(image) {
            return 'uploads/' + image
        }
    }
}
</script>

<style scoped>
.category {
    color: #fff;
    background-color: #f44336;
    padding: 5px 10px;
    border-radius: 5px;
    font-size: 12px;
    text-transform: uppercase;
    font-weight: 600;
    margin-bottom: 10px;
    display: inline-block;
    align-items: flex-end;
}
</style>
