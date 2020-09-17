<template>
    <hooper :settings="hooperSettings" style="height: 350px" dir="ltr">
        <slide>
            <div class="shop-slider">
                <div class="content row mx-0">
                    <div class="col-12 pointer overflow-hidden">
                        <img width="100%" height="260px" src="/images/s1.png" alt="">
                    </div>
                    <div class="col-12 overflow-hidden py-2 text-center text-fild" dir="rtl">
                        <span class="pointer">آفت قرنطینه ای سرخرطومی</span>
                        <label>100,000 تومان</label>
                    </div>
                </div>
            </div>
        </slide>
        <slide>
            <div class="shop-slider">
                <div class="content row mx-0">
                    <div class="col-12 pointer overflow-hidden">
                        <img width="100%" height="260px" src="/images/s2.png" alt="">
                    </div>
                    <div class="col-12 overflow-hidden py-2 text-center text-fild" dir="rtl">
                        <span class="pointer">آفت قرنطینه ای سرخرطومی</span>
                        <label>100,000 تومان</label>
                    </div>
                </div>
            </div>
        </slide>
        <slide>
            <div class="shop-slider">
                <div class="content row mx-0">
                    <div class="col-12 pointer overflow-hidden">
                        <img width="100%" height="260px" src="/images/s3.png" alt="">
                    </div>
                    <div class="col-12 overflow-hidden py-2 text-center text-fild" dir="rtl">
                        <span class="pointer">آفت قرنطینه ای سرخرطومی</span>
                        <label>100,000 تومان</label>
                    </div>
                </div>
            </div>
        </slide>
        <slide>
            <div class="shop-slider">
                <div class="content row mx-0">
                    <div class="col-12 pointer overflow-hidden">
                        <img width="100%" height="260px" src="/images/s4.png" alt="">
                    </div>
                    <div class="col-12 overflow-hidden py-2 text-center text-fild" dir="rtl">
                        <span class="pointer">آفت قرنطینه ای سرخرطومی</span>
                        <label>100,000 تومان</label>
                    </div>
                </div>
            </div>
        </slide>
        <slide>
            <div class="shop-slider">
                <div class="content row mx-0">
                    <div class="col-12 pointer overflow-hidden">
                        <img width="100%" height="260px" src="/images/s5.png" alt="">
                    </div>
                    <div class="col-12 overflow-hidden py-2 text-center text-fild" dir="rtl">
                        <span class="pointer">آفت قرنطینه ای سرخرطومی</span>
                        <label>100,000 تومان</label>
                    </div>
                </div>
            </div>
        </slide>
        <slide>
            <div class="shop-slider">
                <div class="content row mx-0">
                    <div class="col-12 pointer overflow-hidden">
                        <img width="100%" height="260px" src="/images/s6.png" alt="">
                    </div>
                    <div class="col-12 overflow-hidden py-2 text-center text-fild" dir="rtl">
                        <span class="pointer">آفت قرنطینه ای سرخرطومی</span>
                        <label>100,000 تومان</label>
                    </div>
                </div>
            </div>
        </slide>

        <hooper-navigation slot="hooper-addons"></hooper-navigation>

    </hooper>
</template>

<script>
    import {Hooper, Slide, Navigation as HooperNavigation} from 'hooper';
    import 'hooper/dist/hooper.css';

    export default {
        name: "shopSlider",
        components: {
            Hooper,
            Slide,
            HooperNavigation
        },
        data(){
            return{
                hooperSettings:{
                    itemsToShow: 1,
                    breakpoints: {
                        800: {
                            itemsToShow: 3
                        },
                        1000: {
                            itemsToShow: 4,
                        }
                    }
                }
            }
        }
    }
</script>

<style scoped>

</style>
