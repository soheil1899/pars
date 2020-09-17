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
                        <li class="list-group-item p-0"><a class="w-100 d-block px-3 py-1 active" href="#">همه دسته ها</a></li>
                        <li class="list-group-item p-0"><a class="w-100 d-block px-3 py-1" href="#">کود</a></li>
                        <li class="list-group-item p-0"><a class="w-100 d-block px-3 py-1" href="#">سم</a></li>
                        <li class="list-group-item p-0"><a class="w-100 d-block px-3 py-1" href="#">بذر</a></li>
                        <li class="list-group-item p-0"><a class="w-100 d-block px-3 py-1" href="#">مایع شیمیایی</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-9">
            <h1 class="blog-title mb-4">فروشگاه</h1>
            <div class="row">
                <div class="col-4 mb-5">
                    <div class="card shop-cards">
                        <a href="" class="h-75">
                            <img src="/images/s1.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body h-25">
                            <h5 class="card-title text-center mb-2">
                                <a href="#" class="pro-name">
                                    آفت قرنطینه ای سرخرطومی
                                </a>
                                <label class="pro-price mt-2">100,000 تومان</label>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-5">
                    <div class="card shop-cards">
                        <a href="" class="h-75">
                            <img src="/images/s2.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body h-25">
                            <h5 class="card-title text-center mb-2">
                                <a href="#" class="pro-name">
                                    آفت قرنطینه ای سرخرطومی
                                </a>
                                <label class="pro-price mt-2">100,000 تومان</label>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-5">
                    <div class="card shop-cards">
                        <a href="" class="h-75">
                            <img src="/images/s3.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body h-25">
                            <h5 class="card-title text-center mb-2">
                                <a href="#" class="pro-name">
                                    آفت قرنطینه ای سرخرطومی
                                </a>
                                <label class="pro-price mt-2">100,000 تومان</label>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-5">
                    <div class="card shop-cards">
                        <a href="" class="h-75">
                            <img src="/images/s4.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body h-25">
                            <h5 class="card-title text-center mb-2">
                                <a href="#" class="pro-name">
                                    آفت قرنطینه ای سرخرطومی
                                </a>
                                <label class="pro-price mt-2">100,000 تومان</label>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-5">
                    <div class="card shop-cards">
                        <a href="" class="h-75">
                            <img src="/images/s5.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body h-25">
                            <h5 class="card-title text-center mb-2">
                                <a href="#" class="pro-name">
                                    آفت قرنطینه ای سرخرطومی
                                </a>
                                <label class="pro-price mt-2">100,000 تومان</label>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-5">
                    <div class="card shop-cards">
                        <a href="" class="h-75">
                            <img src="/images/s6.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body h-25">
                            <h5 class="card-title text-center mb-2">
                                <a href="#" class="pro-name">
                                    آفت قرنطینه ای سرخرطومی
                                </a>
                                <label class="pro-price mt-2">100,000 تومان</label>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-5">
                    <div class="card shop-cards">
                        <a href="" class="h-75">
                            <img src="/images/s1.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body h-25">
                            <h5 class="card-title text-center mb-2">
                                <a href="#" class="pro-name">
                                    آفت قرنطینه ای سرخرطومی
                                </a>
                                <label class="pro-price mt-2">100,000 تومان</label>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-5">
                    <div class="card shop-cards">
                        <a href="" class="h-75">
                            <img src="/images/s2.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body h-25">
                            <h5 class="card-title text-center mb-2">
                                <a href="#" class="pro-name">
                                    آفت قرنطینه ای سرخرطومی
                                </a>
                                <label class="pro-price mt-2">100,000 تومان</label>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-5">
                    <div class="card shop-cards">
                        <a href="" class="h-75">
                            <img src="/images/s3.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body h-25">
                            <h5 class="card-title text-center mb-2">
                                <a href="#" class="pro-name">
                                    آفت قرنطینه ای سرخرطومی
                                </a>
                                <label class="pro-price mt-2">100,000 تومان</label>
                            </h5>
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
                value: [10000, 9000000]
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
        }
    }
</script>

<style scoped>

</style>
