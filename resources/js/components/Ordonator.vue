<template>
<div class="component-full-page">
    <top-nav></top-nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 bg-primary text-white p-3 " v-if="ordonator != null"> Date despre Ordoantorul de credite: {{ordonator.denumire}}</div>
        </div>
        <div class="row">
            <div class="col-2 p-2">
                <div class="container">
                    <div class="row-full">
                        <div class="col-12 p-2 text-center border border-primary">Denumirea Ordonatorului</div>
                        <div class="col-12 p-2 text-center" v-if="ordonator">{{ ordonator.denumire}}</div>
                    </div>
                    <div class="row">
                        <div class="col-12 p-2 text-center border border-primary">Tipul Ordonatorului</div>
                        <div class="col-12 p-2 text-center" v-if="ordonator">{{ ordonator.tip}}</div>
                    </div>
                    <div class="row">
                        <div class="col-12 p-2 text-center border border-primary">Data Infiintarii</div>
                        <div class="col-12 p-2 text-center" v-if="ordonator">{{ ordonator.data_infiintare}}</div>
                    </div>
                    <div class="row">
                        <div class="col-12 p-2 text-center border border-primary mb-2">Status Ordonator</div>
                        <div class="col-12 p-2 text-center bg-success text-white" v-if="ordonator !=null && ordonator.stare === 1">Activ</div>
                        <div class="col-12 p-2 text-center bg-danger text-white" v-if="ordonator !=null && ordonator.stare === 0">Radiat</div>
                    </div>
                </div>
            </div>
            <div class="col-9 p-1">
                <div class="container-fluid p-3">
                    <div class="row" v-if="institutii == null || institutii.length == 0">
                        <div class="col-12 bg-warning p-2">Nu exista institutii operate</div>
                    </div>
                    <div class="row" v-if="institutii != null">
                        <div class="col-4 my-2" v-for="institutie in institutii" :key="institutie.id">
                            <h5 class="card-title text-center p-3 orange-label text-white">{{ institutie.denumire }}</h5>
                            <div class="box-institutie">
                                <div>Tipul Unitatii</div>
                                <div>{{ institutie.TipInstitutie }}</div>
                            </div>
                            <div class="box-institutie">
                                <div>Ordonator</div>
                                <div>{{ institutie.DenumireOrdonator }}</div>
                            </div>
                            <div class="box-institutie">
                                <div>Judet</div>
                                <div>{{ institutie.Judet }}</div>
                            </div>
                            <div class="box-institutie">
                                <div>Localitate</div>
                                <div>{{ institutie.Localitate }}</div>
                            </div>
                            <div class="box-institutie">
                                <div>Stare</div>
                                <div class="bg-success text-center text-white p-1" v-if="institutie.stare == 1">Unitate Activa</div>
                                <div class="bg-danger text-center text-white p-1" v-if="institutie.stare == 0">Unitate Radiata</div>
                            </div>
                            <div class="box-institutie">
                                <div>Structuri subordonate</div>
                                <div>0</div>
                            </div>
                            <div class="box-institutie">
                                <div>Numar posturi aprobate</div>
                                <div>0</div>
                            </div>
                            <div class="box-institutie">
                                <div>Numar posturi finantate</div>
                                <div>0</div>
                            </div>
                            <div class="box-institutie">
                                <div>Numar posturi ocupate</div>
                                <div>0</div>
                            </div>
                            <div class="box-institutie">
                                <div>Numar Angajati</div>
                                <div>0</div>
                            </div>
                            <a :href="'/institutii/' + institutie.id" class="btn btn-block btn-outline-primary">Detalii Institutie</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</template>

<script>
import TopNav from "../menus/TopNav.vue";
export default {
    data() {
        return {
            ordonator: null,
            institutii: [],
            params: {
                idOrdonator: this.$route.params.id
            }
        };
    },
    components: {
        TopNav,
    },
    created() {
        this.getOrdonatorData();
    },
    methods: {
        async getOrdonatorData() {
            await axios.get(`/api/ordonatori/${this.params.idOrdonator}`).then(response => {
                this.ordonator = response.data['ordonator'][0];
                this.institutii = response.data['institutii']
                console.log(response.data)
            })
        }
    },
};
</script>

<style scoped>
.component-full-page {
    width: 100vw;
    height: 100vh;
}

.component-full-page .container-fluid {
    height: 94.5%;
}

.component-full-page .container-fluid .row-full {
    height: 100%;
}

.box-institutie {
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    align-content: center;
    text-align: center;
    padding: 5px;
}

.box-institutie div {
    align-content: flex-end;
    width: 50%;
}

.box-institutie div:nth-child(1) {
    text-align: right;
    padding-right: 10%;
}

.header_institutie {
    min-height: 65px;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-content: center;
    font-weight: bold;
    background-color: #222f3e;
    ;
}
</style>
