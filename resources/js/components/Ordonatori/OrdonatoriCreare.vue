<template>
    <div>
        <top-nav></top-nav>
        <div class="container mt-5 component-with-top-menu">
            <!-- Afisare modal pentru adaugare ordonatori de credite -->
            <div class="row">
                <div class="col-12 add-ordonator p-3">
                    Adaugare Ordonator de Credite
                </div>
            </div>
            <div class="row">
                <div class="col-3 col-flexbox-rows">
                    <img src="/images/adaugare.png" alt="">
                </div>
                <div class="col-8">
                    <div class="mb-3 form-group">
                        <label for="familie_ocupationala" class="col-form-label">Selectati familia ocupationala:</label>
                        <select class="form-control" aria-label="familie_ocupationala" id="familie_ocupationala" v-model="ordonatorNou.familie">
                            <option selected v-if="familiiOcupationale.length == 0">Familie Ocupationala</option>
                            <option v-bind:value="familie.id" v-for="familie in familiiOcupationale" v-bind:key="familie.id">
                                {{ familie.denumire }}</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Denumire Ordonator de credite:</label>
                        <input type="text" class="form-control" id="recipient-name" v-model="ordonatorNou.denumire">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="judet_ordonator" class="col-form-label">Selectati judetul ordonatorului:</label>
                        <select class="form-control" aria-label="judet_ordonator" id="judet_ordonator" @change="filtrareLocalitati" v-model="ordonatorNou.judet">
                            <option selected v-if="judete.length == 0">Judet</option>
                            <option v-bind:value="judet.id" v-for="judet in judete" v-bind:key="judet.id">
                                {{ judet.denumireJudet }}</option>
                        </select>
                    </div>
                    <div class="mb-3 form-group">
                        <label for="localitate_ordonator" class="col-form-label">Selectati localitatea ordonatorului:</label>
                        <select class="form-control" aria-label="localitate_ordonator" id="localitate_ordonator" v-model="ordonatorNou.localitate">
                            <option v-bind:value="localitate.id" v-for="localitate in localitati" v-bind:key="localitate.id">
                                {{ localitate.denumire }}</option>
                        </select>
                    </div>
                    <div class="mb-3 form-group">
                        <label for="tip_ordonator" class="col-form-label">Selectati tipul ordonatorului:</label>
                        <select class="form-control" aria-label="tip_ordonator" id="tip_ordonator" v-model="ordonatorNou.tip_ordonator">
                            <option selected v-if="tipOrdonatori.length == 0">Judet</option>
                            <option v-bind:value="tip.id" v-for="tip in tipOrdonatori" v-bind:key="tip.id">
                                {{ tip.denumire }}</option>
                        </select>
                    </div>
                    <div class="mb-3 form-group">
                        <label for="stare_ordonator" class="col-form-label">Selectati starea ordonatorului:</label>
                        <select class="form-control" aria-label="stare_ordonator" id="stare_ordonator" v-model="ordonatorNou.stare">
                            <option value="0">Radiat</option>
                            <option value="1" selected>Activ</option>
                        </select>
                    </div>
                    <div class="mb-3 form-group">
                        <button class="btn btn-block btn-outline-blue" @click.prevent="salveazaOrdonator">Adauga Ordonator de Credite</button>
                    </div>
                </div>
                </div>
            </div>
        </div>
</template>

<script>
import TopNav from "../../menus/TopNav.vue";
import moment from 'moment';

export default {
    data() {
        return {
            ordonatori: [],
            familiiOcupationale: [],
            judete: [],
            tipOrdonatori: [],
            localitati: [],
            ordonatorNou:{
                familie: null,
                denumire: null,
                tip_ordonator: null,
                judet: null,
                localitate: null,
                data_infiintare: moment(new Date()).format('YYYY-MM-DD'),
                stare: 1
            },
            loading: false
        };
    },
    components: {
        TopNav,
    },
    async created() {
        await this.getOrdonatori();
        await this.getFamiliiOcupationale();
        await this.getJudete();
        await this.getTipuriOrdonatori();
    },
    methods: {
        // preluare familii ocupationale de la API
        async getFamiliiOcupationale(){
            await axios.get("/api/familiiocupationale/all").then((response) => this.familiiOcupationale = response.data.data);
        },
        // Preluare ordonatori de la API
        async getOrdonatori() {
            await axios
                .get("/api/ordonatori")
                .then((response) => (this.ordonatori = response.data.data));
        },
        // Preluare judete de la API
        async getJudete(){
            await axios.get("/api/judete/").then((response) => this.judete = response.data.data);
        },
        // Preluare Tipuri de Ordonatori de la API
        async getTipuriOrdonatori(){
            await axios.get("/api/tipuriordonatori").then((response) => this.tipOrdonatori = response.data.data);
        },

        //  Filtrare Localitati
        filtrareLocalitati(){
            this.localitati = this.judete[this.ordonatorNou.judet - 1].localitati;
        },
        async salveazaOrdonator(){
            this.showAdaugatSucces = true;
            let responseBack = null;
            await axios.post("/api/ordonatori/creare", {
                familie :this.ordonatorNou.familie,
                denumire: this.ordonatorNou.denumire,
                tip_ordonator: this.ordonatorNou.tip_ordonator,
                judet: this.ordonatorNou.judet,
                localitate: this.ordonatorNou.localitate,
                data_infiintare: this.ordonatorNou.data_infiintare,
                stare: this.ordonatorNou.stare
            })
                .then((response) => {
                    if(response.status == 200){
                        this.loading = false;
                    }
                })
                .catch((error) => console.log(error));
        },
        //
        outputOrdonator(tipOrdonator) {
            if (tipOrdonator == 1) {
                return "Ordonator principal";
            } else if (tipOrdonator == 2) {
                return "Ordonator secundar";
            } else {
                return "Ordonator tertiar";
            }
        },
        outPutClass(tipOrdonator){
            if (tipOrdonator == 1) {
                return "ordonatorPrincipal";
            } else if (tipOrdonator == 2) {
                return "ordonatorSecundar";
            } else {
                return "ordonatorTertiar";
            }
        }
    },
};
</script>

<style scoped>
.bg-main {
    background-color: #222f3e;
    color: #fff;
}

.component-with-top-menu{
    padding-top: 5.5vh;
}

</style>
