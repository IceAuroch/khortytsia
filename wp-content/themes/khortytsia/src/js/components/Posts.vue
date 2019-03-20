<template>
    <section class="mt_section page_news_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="row">
                        <post v-if="posts.length" v-for="post in posts" :post="post" :key="post.id"/>
                    </div>
                </div>
            </div>
            <div class="text-center" v-if="paged">
                <a href="#" class="btn btn-primary" @click.prevent="getPosts" v-if="this.category === 'novini'">Більше
                    новин</a>
                <a href="#" class="btn btn-primary" @click.prevent="getPosts" v-if="this.category === 'statti'">Більше
                    статей</a>
            </div>
        </div>
    </section>
</template>

<script>
    import axios from 'axios';
    import Post from './Post';

    export default {
        props: {
            category: String
        },
        components: {
            Post
        },
        data() {
            return {
                paged: 1,
                posts: []
            }
        },
        methods: {
            async getPosts() {
                const data = new FormData();
                data.set('category', this.category);
                data.set('action', 'get_ajax_posts');
                data.set('paged', this.paged);

                await axios.post('/wp-admin/admin-ajax.php', data)
                    .then(({data}) => {
                        this.posts.push(...data.posts);
                        this.paged = this.paged < data.last_page ? this.paged += 1 : null;
                    })
            },

        },
        mounted() {
            this.getPosts();
        }
    }
</script>