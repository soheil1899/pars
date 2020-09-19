<template>
    <div class="row">
        <div class="col-5">
            <img :src="'/media/product/'+ product.id + '/original.png'" width="100%" alt="">
        </div>
        <div class="col-7">
            <h1 class="product-title">{{product.faname}}</h1>
        </div>
    </div>
</template>

<script>
    export default {
        name: "productSingle",
        data() {
            return {
                // pro_id : 0,
                // article_groups: [],
                product: null,
            }
        },
        props:['productid'],
        mounted() {
            this.getProduct();
        },
        methods: {
            getProduct() {
                axios.post('/get-product', {productid: this.productid})
                    .then(res => {
                        this.product = res.data;
                    });
            },

        }
    }
</script>

<style scoped>

</style>
