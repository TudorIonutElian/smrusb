<template>
    <div>
        <top-nav></top-nav>

        <div class="container-fluid" id="paginaNomenclatorRegiuni">
            <div class="row">
                <div class="col-12 p-2 mt-2">
                    <h4 class="my-2"><span class="h4-inline">Lista Regiunilor Existente</span></h4>
                </div>
                <div class="col-12 p-2">
                    <table class="table text-center table-striped">
                        <thead>
                        <tr class="navBarBackground">
                            <th scope="col">#</th>
                            <th scope="col">Denumire Regiune</th>
                            <th scope="col">Stare Regiune</th>
                            <th scope="col">Data Creare Regiune </th>
                            <th scope="col">Numar Judete </th>
                            <th scope="col">Actiune</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="regiune in regiuni">
                            <td>{{ regiune.idRegiune}}</td>
                            <td>{{ regiune.denumireRegiune}}</td>
                            <td v-if="regiune.stare === 1"><span class="regiuneActiva">Activa</span></td>
                            <td v-else><span class="regiuneSupendata">Suspendata</span></td>
                            <td>{{ regiune.data}}</td>
                            <td>{{ regiune.judete.length}}</td>
                            <td v-if="regiune.stare === 1"><button class="btn btn-danger btn-sm rotate-center" @click.prevent="showSupendarePrompt(regiune.idRegiune)">Suspenda</button></td>
                            <td v-if="regiune.stare === 0"><button class="btn btn-success btn-sm rotate-center" @click.prevent="showReactivarePrompt(regiune.idRegiune)">Reactiveaza</button></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-12 p-2 mt-2">
                    <h4 class="my-2"><span class="h4-inline">Istoric Regiuni</span></h4>
                </div>
                <div class="col-12 p-2">
                    <table class="table text-center table-striped">
                        <thead>
                        <tr class="navBarBackground">
                            <th scope="col">Denumire Regiune</th>
                            <th scope="col">Data</th>
                            <th scope="col">Detalii</th>
                            <th scope="col">Tip</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="istoric in istoricRegiuni" :key="istoric.index">
                            <td>{{ istoric.denumire_istoric}}</td>
                            <td>{{ istoric.data}}</td>
                            <td>{{ istoric.detalii}}</td>
                            <td v-if="istoric.tip === 1"><span style="color: green">Activata</span></td>
                            <td v-if="istoric.tip === 0"><span style="color: red">Suspendata</span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Modal pentru suspendarea regiunii -->
        <div id="myModalSuspendare" class="modal2 my-3">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close" @click.prevent="hideSuspendarePrompt()">&times;</span>
                <h5>Esti sigur ca vrei sa suspenzi Regiunea?</h5>
                <h6>Suspendarea regiunii va avea ca efect urmarirea istoricului acesteia</h6>
                <div class="modal-content_butoane mt-2">
                    <button class="btn btn-success" @click.prevent="suspendaRegiune()">Da</button>
                    <button class="btn btn-danger" @click.prevent="hideSuspendarePrompt()">Anuleaza</button>
                </div>
            </div>
        </div>

        <!-- Modal pentru reactivarea regiunii -->
        <div id="myModalReactivare" class="modal2 my-3">

            <!-- Modal content pentru reactivare regiune -->
            <div class="modal-content">
                <span class="close" @click.prevent="hideReactivarePrompt()">&times;</span>
                <h5>Esti sigur ca vrei sa reactivezi Regiunea?</h5>
                <h6>Reactivarea regiunii va avea ca efect urmarirea istoricului acesteia</h6>
                <div class="modal-content_butoane mt-2">
                    <button class="btn btn-success" @click.prevent="reactiveazaRegiune()">Da</button>
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
            regiuni: [],
            istoricRegiuni: [],
            idSuspendare: 0,
            idReactivare: 0
        };
    },
    created(){
        this.getRegiuni();
        this.getIstoricRegiuni();
    },
    components: {
        TopNav,
    },
    methods:{
        // preluare regiuni
        async getRegiuni(){
            await axios.get("/api/regiuni").then((response) => this.regiuni = response.data.data);
        },
        async suspendaRegiune(){
            await axios.post(`/api/regiuni/suspenda`, {
                id: this.idSuspendare
            }).then(async (response) => {
                this.hideSuspendarePrompt();
                await this.getRegiuni();
                this.getIstoricRegiuni();
            });
        },

        async reactiveazaRegiune(){
            await axios.post(`/api/regiuni/reactiveaza`, {
                id: this.idReactivare
            }).then(async (response) => {
                this.hideReactivarePrompt();
                await this.getRegiuni();
                await this.getIstoricRegiuni();
            });
        },
        async getIstoricRegiuni(){
            await axios.get("/api/regiuni/istoric").then((response) => this.istoricRegiuni = response.data);
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
.regiuneActiva{
    background-color: #38c172;
    padding: 5px 10px;
    border-radius: 4px;
    color: #ffffff;
}

.regiuneSupendata{
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


