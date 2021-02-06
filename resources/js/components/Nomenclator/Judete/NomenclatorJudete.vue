<template>
    <div>
        <top-nav></top-nav>

        <div class="container-fluid" id="paginaNomenclatorRegiuni">
            <div class="row">
                <div class="col-12 p-2 mt-2">
                    <h4 class="my-2"><span class="h4-inline">Lista Judetelor Existente</span></h4>
                </div>
                <div class="col-12 p-2">
                    <table class="table text-center table-striped">
                        <thead>
                        <tr class="navBarBackground">
                            <th scope="col">#</th>
                            <th scope="col">Denumire Judet</th>
                            <th scope="col">Data Creare</th>
                            <th scope="col">Denumire regiune</th>
                            <th scope="col">Numar Localitati </th>
                            <th scope="col">Numar Ordonatori</th>
                            <th scope="col">Stare Judet</th>
                            <th scope="col">Actiune</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="judet in judete">
                            <td>{{ judet.id}}</td>
                            <td>{{ judet.denumireJudet}}</td>
                            <td>{{ judet.data}}</td>
                            <td>{{ judet.denumireRegiune}}</td>
                            <td>{{ judet.localitati.length}}</td>
                            <td>{{ judet.numarOrdonatori}}</td>
                            <td v-if="judet.stare === 1"><span class="judetActiv">Activ</span></td>
                            <td v-if="judet.stare === 0"><span class="judetSuspendat">Suspendat</span></td>

                            <td v-if="judet.stare === 1"><button class="btn btn-danger btn-sm rotate-center" @click.prevent="showSupendarePrompt(judet.id)">Suspenda</button></td>
                            <td v-if="judet.stare === 0"><button class="btn btn-success btn-sm rotate-center" @click.prevent="showReactivarePrompt(judet.id)">Reactiveaza</button></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
         <!--Modal pentru suspendarea regiunii -->
        <div id="myModalSuspendare" class="modal2 my-3">

            <div class="modal-content">
                <span class="close" @click.prevent="hideSuspendarePrompt()">&times;</span>
                <h5>Esti sigur ca vrei sa suspenzi Judetul selectat?</h5>
                <h6>Suspendarea judetului va avea ca efect urmarirea istoricului acesteia</h6>
                <div class="modal-content_butoane mt-2">
                    <button class="btn btn-success" @click.prevent="suspendaJudet()">Da</button>
                    <button class="btn btn-danger" @click.prevent="hideSuspendarePrompt()">Anuleaza</button>
                </div>
            </div>
        </div>

        <div id="myModalReactivare" class="modal2 my-3">

            <div class="modal-content">
                <span class="close" @click.prevent="hideReactivarePrompt()">&times;</span>
                <h5>Esti sigur ca vrei sa reactivezi Judetul?</h5>
                <h6>Reactivarea regiunii va avea ca efect urmarirea istoricului acesteia</h6>
                <div class="modal-content_butoane mt-2">
                    <button class="btn btn-success" @click.prevent="reactiveazaJudet()">Da</button>
                    <button class="btn btn-danger" @click.prevent="hideReactivarePrompt()">Anuleaza</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import TopNav from "../../../menus/TopNav.vue";

export default {
    data() {
        return {
            judete: [],
            istoricJudete: [],
            idSuspendare: 0,
            idReactivare: 0
        };
    },
    created(){
        this.getJudete();
    },
    components: {
        TopNav,
    },
    methods:{
        // preluare regiuni
        async getJudete(){
            await axios.get("/api/judete").then((response) => this.judete = response.data.data);
        },
        // suspenda judetul
        async suspendaJudet(){
            await axios.post(`/api/judete/suspenda`, {
                id: this.idSuspendare
            }).then(async (response) => {
                this.hideSuspendarePrompt();
                await this.getJudete();
            });
        },
        // reactiveaza judetul
        async reactiveazaJudet(){
            await axios.post(`/api/judete/reactiveaza`, {
                id: this.idReactivare
            }).then(async (response) => {
                this.hideReactivarePrompt();
                await this.getJudete();
            });
        },

        /**
         * Functii pentru afisare si ascundere POPUP
         */

        // Afisare Prompt pentru suspendare
        showSupendarePrompt(id){
            this.idSuspendare = id;
            document.querySelector('#myModalSuspendare').style.display = "block";
        },

        // Ascunde Prompt pentru suspendare
        hideSuspendarePrompt(){
            document.querySelector('#myModalSuspendare').style.display = "none";
        },

        // Afisare Propt pentru reactivare
        showReactivarePrompt(id){
            this.idReactivare = id;
            document.querySelector('#myModalReactivare').style.display = "block";
        },

        // Ascunde Prompt pentru reactivare
        hideReactivarePrompt(){
            document.querySelector('#myModalReactivare').style.display = "none";
        }
    }
};
</script>


<style scoped>

#paginaNomenclatorRegiuni{
    margin-top: 5.5vh;
}
.judetActiv{
    background-color: #38c172;
    padding: 5px 10px;
    border-radius: 4px;
    color: #ffffff;
}

.judetSuspendat{
    background-color: #e74c3c;
    padding: 5px 10px;
    border-radius: 4px;
    color: #ffffff;
}

/* The Modal (background) */
.modal2 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgba(0,0,0, 0.2); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
    display: flex;
    flex-direction: column;
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 30%; /* Could be more or less, depending on screen size */
    border-radius: 5px;
}
.modal-content_butoane{
    width: 100%;
    justify-content: space-between;
}
.modal-content_butoane button.btn{
    width: 25%;
}
/* The Close Button */
.close {
    color: #aaa;
    align-self: flex-end;
    font-size: 28px;
    font-weight: bold;
    padding: 5px;
}

.close:hover,
.close:focus {
    color: white;
    background-color: red;
    text-decoration: none;
    cursor: pointer;
}
</style>


