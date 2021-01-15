<template>
<div>
    <top-nav></top-nav>
    <div class="container-fluid" id="pageJudete">

        <div class="row" v-if="loading">
            <loading-animation></loading-animation>
        </div>
        <div class="row py-2" v-else>
            <div class="col-3 my-1" v-for="judet in judete" :key="judet.id">
                <div class="card">
                    <div class="card-title orange-label-slower text-center p-2" style="font-weight: bold">Judetul #{{ judet.id}}</div>
                    <div class="box-institutie">
                        <div>Denumire judet: </div>
                        <div>{{ judet.denumireJudet}}</div>
                    </div>
                    <div class="box-institutie">
                        <div>Denumire regiune: </div>
                        <div>{{ judet.denumireRegiune}}</div>
                    </div>
                    <div class="box-institutie">
                        <div>Numar localitati: </div>
                        <div><a :href=" `/judete/${judet.id}/localitati` " class="count">{{ judet.localitati.length}}</a></div>
                    </div>
                    <div class="box-institutie">
                        <div>Numar ordonatori: </div>
                        <div>{{ judet.numarOrdonatori}}</div>
                    </div>
                    <div class="box-institutie">
                        <div>Numar institutii: </div>
                        <div>0</div>
                    </div>
                    <div class="box-institutie">
                        <div>Numar angajati: </div>
                        <div>0</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</template>

<script>
import TopNav from "../menus/TopNav.vue";
import LoadingAnimation from "../helpers/LoadingAnimation.vue";
export default {
    data() {
        return {
            loading: false,
            judete: []
        };
    },
    created() {
        this.getJudete();
    },
    methods: {
        async getJudete() {
            this.loading = true;
            await axios.get('/api/judete').then(response => this.judete = response.data.data);
            this.loading = false;
        }
    },
    components: {
        TopNav,
        LoadingAnimation
    },
};
</script>

<style>
div.card-title:hover{
    color: #fff;
    cursor: pointer;
}
a.count{
    padding: 5px 20px;
    background-color: #ffeaa7;
    text-decoration: none;
    border-radius: 5px;
    color: #000;
}
#pageJudete{
    padding-top: 6vh;
}
</style>
