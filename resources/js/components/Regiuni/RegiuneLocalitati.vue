<template>

    <div class="component-with-top-menu">
        <top-nav></top-nav>
        <div class="container-fluid">
            <div class="row" v-if="loading">
                <loading-animation></loading-animation>
            </div>
            <div class="row mt-2" v-else>
                <div class="col-12">
                    <div class="row">
                        <div class="col-3" v-for="localitate in localitatiRegiune">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center p-2 orange-label text-white">
                                        Localitate #{{ localitate.id }}
                                    </h5>
                                    <div class="box-institutie">
                                        <div>Localitate</div>
                                        <div>{{ localitate.denumireLocalitate }}</div>
                                    </div>
                                    <div class="box-institutie">
                                        <div>Judet</div>
                                        <div>{{ localitate.denumireJudet }}</div>
                                </div>
                                </div>
                            </div>
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
            localitatiRegiune: [],
            params: {
                idRegiune: this.$route.params.id
            }
        };
    },
    created() {
        this.getLocalitati();
    },
    methods: {
        async getLocalitati() {
            await axios.get(`/api/regiuni/${this.params.idRegiune}/localitati`).then(response => {
                this.localitatiRegiune = response.data;
                console.log(response.data);
            })
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
