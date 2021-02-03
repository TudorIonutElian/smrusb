<template>

    <div class="component-with-top-menu">
        <top-nav></top-nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 bg-primary text-white p-3">Regiunile Romaniei</div>
            </div>
            <div class="row" v-if="loading">
                <loading-animation></loading-animation>
            </div>
            <div class="row mt-2">
                <div class="col-3 my-2" v-for="regiune in regiuni" >
                    <div class="card">

                        <div class="card-body">
                            <h5 class="card-title p-2 bg-primary text-white text-center">{{ regiune.denumireRegiune}}</h5>
                            <div class="box-institutie">
                                <div>Judete</div>
                                <div>({{ regiune.judete.length}})</div>
                            </div>
                            <a :href="`/regiuni/${regiune.idRegiune}/localitati`" class="btn bt-sm btn-block btn-outline-primary">Localitati Regiune</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import TopNav from "../../menus/TopNav.vue";
import LoadingAnimation from "../../helpers/LoadingAnimation";
export default {
    data() {
        return {
            loading: false,
            regiuni: []
        };
    },
    created() {
        this.getRegiuni();
    },
    methods: {
        async getRegiuni() {
            this.loading = true;
            await axios.get('/api/regiuni').then(response => this.regiuni = response.data.data);
            this.loading = false;
        }
    },
    components: {
        TopNav,
        LoadingAnimation
    },
}
</script>

<style scoped>
.component-with-top-menu{
    padding-top: 5.5vh;
}
.border-red{
    border: 2px solid red;
}
.date-regiune{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-content: space-around;
}
</style>
