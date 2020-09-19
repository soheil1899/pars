<template>
    <div class="row">
        <div class="col-3">
            <div class="shop-right-options">
                <div class="mb-5">
                    <label class="title">
                        ترتیب مرتب سازی
                    </label>
                    <select class="form-control">
                        <option>جدیدترین</option>
                        <option>قدیمی ترین</option>
                        <option>پرفروش ترین</option>
                        <option>گران ترین</option>
                        <option>ارزان ترین</option>
                        <option>محبوب ترین</option>
                    </select>
                </div>
                <div class="mb-5">
                    <label class="title">
                        بازه قیمت
                    </label>
                    <div class="app-content" dir="ltr">
                        <vue-range-slider :min="10000" :max="9000000" :bg-style="bgStyle" :tooltip-style="tooltipStyle" :process-style="processStyle"
                                          v-model="value"></vue-range-slider>
                    </div>
                </div>
                <div class="mb-5">
                    <label class="title">
                        دسته بندی محصولات
                    </label>
                    <ul class="list-group list-group-flush p-0">
                        <li class="list-group-item p-0"><a :class="'pointer w-100 d-block px-3 py-1 '+ activeclass(0)" @click="getProducts(0)">همه دسته ها</a></li>
                        <li class="list-group-item p-0" v-for="cat in category"><a :class="'pointer w-100 d-block px-3 py-1 '+ activeclass(cat.id)" @click="getProducts(cat.id)">
                            {{cat.name}}
                        </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-9">
            <h1 class="blog-title mb-4">فروشگاه</h1>
            <div class="row">
                <div class="col-4 mb-5" v-for="pro in products">
                    <div class="card shop-cards">
                        <a :href="'/product/'+ pro.enname" class="h-75">
                            <img :src="'/media/product/'+ pro.id + '/original.png'" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body h-25">
                            <h5 class="card-title text-center mb-2">
                                <a :href="'/product/'+ pro.enname" class="pro-name d-block">
                                    {{pro.faname}}
                                </a>
                                <label class="pro-price mt-2">{{pro.price}} تومان</label>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div v-if="total > 9">
                        <b-pagination v-model="page" :total-rows="total" :per-page="9" first-number last-number
                                      style="padding: 0; width: fit-content; margin: 0 auto"></b-pagination>
                    </div>
                    <div v-if="total === 0">
                        <div class="alert alert-warning" role="alert">
                            در این دسته بندی محصولی وجود ندارد.
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<script>

    import 'vue-range-component/dist/vue-range-slider.css'
    import VueRangeSlider from 'vue-range-component'

    export default {
        name: "productList",
        components: {
            VueRangeSlider
        },
        data() {
            return {
                value: [10000, 9000000],
                category: [],
                products: [],
                page: 1,
                total: 0,
                cat_id: 0,
            }
        },
        created() {
            this.min = 10000;
            this.max = 9000000;
            this.bgStyle = {
                backgroundColor: '#fff',
                boxShadow: 'inset 0.5px 0.5px 3px 1px rgba(0,0,0,.36)'
            };
            this.tooltipStyle = {
                backgroundColor: '#ff7900',
                borderColor: '#ff7900'
            };
            this.processStyle = {
                backgroundColor: '#ff7900'
            }
        },
        mounted() {
            this.getProducts(this.cat_id);
            this.getProductsGroup();
        },
        watch: {
            page: function () {
                this.getProducts(this.cat_id)
            },
        },
        methods: {
            activeclass(cat_id){
                if (cat_id === this.cat_id){
                    return 'active';
                }  else{
                    return '';
                }
            },
            getProducts(cat_id) {
                this.cat_id = cat_id;

                axios.post('/get-products', {page: this.page, category_id: cat_id})
                    .then(res => {
                        this.products = res.data.data;
                        this.total = res.data.total;
                    });
            },
            getProductsGroup() {
                axios.get('/get-product-group')
                    .then(res => {
                        this.category = res.data;
                    });
            },
        }
    }
</script>

<style scoped>

</style>
