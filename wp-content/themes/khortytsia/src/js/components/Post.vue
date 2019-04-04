<template>
    <div class="col-lg-4">
        <div class="last_news_item from_bottom_interval">
            <div class="last_news_item_img" :style="{ backgroundImage: `url('${image}')` }">
            </div>
            <div class="last_news_item_content_wrap">
                <div class="last_news_item_content">
                    <span>{{ post.posted_at }}</span>
                    <h4>{{ post.title }}</h4>
                    <p v-if="post.description !== ''">{{ post.description }}</p>
                    <a :href="post.permalink" v-if="post.lang === 'en' ">Read more</a>
                    <a :href="post.permalink" v-else-if="post.lang === 'ru' ">Читать полностью</a>
                    <a :href="post.permalink" v-else-if="post.lang === 'uk' ">Читати повністю</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
  export default {
    props: {
      post: Object
    },
    computed: {
      image() {
        return this.post.image;
      }
    }
  }
</script>