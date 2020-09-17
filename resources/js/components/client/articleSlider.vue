<template>
    <hooper :settings="hooperSettings" style="height: 270px" dir="ltr">
        <slide>
            <div class="position-relative border-slider">
                <img width="100%" height="100%" src="/images/1.jpg" alt="">
                <div class="position-absolute text-center w-100 py-2">
                    <span>آفت قرنطینه ای سرخرطومی</span>
                </div>
            </div>
        </slide>
        <slide>
            <div class="position-relative border-slider">
                <img width="100%" height="100%" src="/images/2.jpg" alt="">
                <div class="position-absolute text-center w-100 py-2">
                    <span>آفت قرنطینه ای سرخرطومی</span>
                </div>
            </div>
        </slide>
        <slide>
            <div class="position-relative border-slider">
                <img width="100%" height="100%" src="/images/3.jpg" alt="">
                <div class="position-absolute text-center w-100 py-2">
                    <span>آفت قرنطینه ای سرخرطومی</span>
                </div>
            </div>
        </slide>
        <slide>
            <div class="position-relative border-slider">
                <img width="100%" height="100%" src="/images/4.jpg" alt="">
                <div class="position-absolute text-center w-100 py-2">
                    <span>آفت قرنطینه ای سرخرطومی</span>
                </div>
            </div>
        </slide>
        <slide>
            <div class="position-relative border-slider">
                <img width="100%" height="100%" src="/images/5.jpg" alt="">
                <div class="position-absolute text-center w-100 py-2">
                    <span>آفت قرنطینه ای سرخرطومی</span>
                </div>
            </div>
        </slide>
        <slide>
            <div class="position-relative border-slider">
                <img width="100%" height="100%" src="/images/6.jpg" alt="">
                <div class="position-absolute text-center w-100 py-2">
                    <span>آفت قرنطینه ای سرخرطومی</span>
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
        name: "articleSlider",
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
                            itemsToShow: 2
                        },
                        1000: {
                            itemsToShow: 3,
                        }
                    }
                }
            }
        }
    }
</script>

<style scoped>


</style>
