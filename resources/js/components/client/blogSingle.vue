<template>
    <div class="row">
<!--        <div class="col-3">-->
<!--            <ul class="list-group blog-category">-->
<!--                <li class="list-group-item bg-blog-category">-->
<!--                    دسته بندی مطالب-->
<!--                </li>-->
<!--                <li class="list-group-item p-0">-->
<!--                    <span class="d-flex justify-content-between align-items-center px-3 py-2 pointer" @click="getArticles(0)">-->
<!--                        همه دسته ها-->
<!--                        </span>-->
<!--                </li>-->
<!--                <li class="list-group-item p-0" v-for="item in article_groups">-->
<!--                    <span class="d-flex justify-content-between align-items-center px-3 py-2 pointer" @click="getArticles(item.id)">-->
<!--                        {{item.name}}-->
<!--                        </span>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
        <div class="col-12">
            <h1 class="blog-title mb-4">{{article.title}}</h1>
            <img :src="'/media/article/'+article.id+'/original.png'" width="100%" alt="">
            <div class="my-3">
                <div class="d-inline-block px-2">
                    <i class="fas fa-list icon-pars"></i>
                    <span>{{article.article_group.name}}</span>
                </div>
                <div class="d-inline-block px-2">
                    <i class="far fa-calendar-alt icon-pars"></i>
                    <span>مرداد 15, 1399</span>
                </div>
            </div>
            <div v-for="c in article.contents">
                <p v-if="c.article_type_id === 2" v-html="c.text" class="text-justify"></p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "blogSingle",
        data() {
            return {
                // cat_id : 0,
                // article_groups: [],
                article: null,
            }
        },
        props:['articleid'],
        mounted() {
            this.getArticle();
            // this.getArticleGroups();
        },
        methods: {
            getArticle() {
                axios.post('/get-article', {articleid: this.articleid})
                    .then(res => {
                        this.article = res.data;
                    });
            },
            // getArticleGroups() {
            //     axios.get('/get-article-group')
            //         .then(res => {
            //             this.article_groups = res.data;
            //         });
            // },
        }
    }
</script>

<style scoped>

</style>
