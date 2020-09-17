<template>
    <div class="row">
        <div class="col-3">
            <ul class="list-group blog-category">
                <li class="list-group-item bg-blog-category">
                    دسته بندی مطالب
                </li>
                <li class="list-group-item p-0">
                    <span class="d-flex justify-content-between align-items-center px-3 py-2 pointer" @click="getArticles(0)">
                        همه دسته ها
                        </span>
                </li>
                <li class="list-group-item p-0" v-for="item in article_groups">
                    <span class="d-flex justify-content-between align-items-center px-3 py-2 pointer" @click="getArticles(item.id)">
                        {{item.name}}
                        </span>
                </li>
            </ul>
        </div>
        <div class="col-9">
            <h1 class="blog-title mb-4">اخبار و مطالب سایت</h1>
            <div class="card blog-cards mb-5" v-for="article in articles">
                <img :src="'/media/article/'+article.id+'/original.png'" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title mb-2">
                        <a href="#">{{article.title}}</a>
                    </h3>
                    <div class="mb-3">
                        <div class="d-inline-block px-2">
                            <i class="fas fa-list icon-pars"></i>
                            <span>{{article.article_group.name}}</span>
                        </div>
                        <div class="d-inline-block px-2">
                            <i class="far fa-calendar-alt icon-pars"></i>
                            <span>مرداد 15, 1399</span>
                        </div>
                    </div>
                    <p class="card-text text-justify">{{article.minitext}}</p>
                    <a :href="'/blog/'+ article.url" class="btn btn-pars">ادامه مطلب</a>
                </div>
            </div>


            <div v-if="total > 0">
                <b-pagination v-model="page" :total-rows="total" :per-page="5" first-number last-number
                              style="padding: 0; width: fit-content; margin: 0 auto"></b-pagination>
            </div>
            <div v-else>
                <div class="alert alert-warning" role="alert">
                    در این دسته بندی مطلبی وجود ندارد.
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "blogList",
        data() {
            return {
                page: 1,
                total: 0,
                cat_id : 0,
                articles: [],
                article_groups: [],
            }
        },
        mounted() {
            this.getArticles(this.cat_id);
            this.getArticleGroups();
        },
        watch: {
            page: function () {
                this.getArticles(this.cat_id)
            },
        },
        methods: {
            getArticles(cat_id) {
                this.cat_id = cat_id;
                axios.post('/get-articles', {page: this.page, category_id: cat_id})
                    .then(res => {
                        this.articles = res.data.data;
                        this.total = res.data.total;
                    });
            },
            getArticleGroups() {
                axios.get('/get-article-group')
                    .then(res => {
                        this.article_groups = res.data;
                    });
            },
        }
    }
</script>

<style scoped>

</style>
