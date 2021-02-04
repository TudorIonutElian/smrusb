<template>
  <div>
    <top-nav></top-nav>
    <div class="container-fluid mt-5">
      <div class="row">
          <!-- Afisare mesaj de aduagare Ordonator de credite -->
          <div class="col-12 alert alert-success" v-if="this.messages.showAdaugatSucces">
              <strong>Succes!</strong> Ordonatorul a fost adaugat cu succes!.
          </div>
      </div>

      <div class="row mt-2">
          <div
              class="col-4 my-2"
              v-for="ordonator in ordonatori"
              :key="ordonator.id"
          >
              <div class="card">
                  <div class="card-body">
                      <h5 class="card-title text-center p-2 orange-label text-white">
                          {{ ordonator.denumire }}
                      </h5>
                      <div class="box-institutie">
                          <div>Familie Ocupationala</div>
                          <div>{{ ordonator.familie }}</div>
                      </div>
                      <div class="box-institutie">
                          <div>Judet</div>
                          <div>{{ ordonator.judet }}</div>
                      </div>
                      <div class="box-institutie">
                          <div>Localitate</div>
                          <div>{{ ordonator.localitate }}</div>
                      </div>
                      <div class="box-institutie">
                          <div>Data Infiintare</div>
                          <div>{{ ordonator.dataInfiintare }}</div>
                      </div>
                      <div class="box-institutie">
                          <div>Tip Ordonator</div>
                          <div>{{ outputOrdonator(ordonator.tip) }}</div>
                      </div>
                      <div class="box-institutie">
                          <div>Institutii</div>
                          <div>
                              {{ ordonator.institutii.length}}
                          </div>
                      </div>
                      <div class="box-institutie">
                          <div>Stare</div>
                          <div v-if="ordonator.stare" style="background-color: #38c172">
                              Activ
                          </div>
                          <div v-else style="background-color: #d0211c">
                              Radiat
                          </div>
                      </div>
                      <div class="box-institutie">
                          <div >Posturi Aprobate</div>
                          <div v-if="ordonator.posturi">
                              <p class="text-aprobate">{{ ordonator.posturi}}</p>
                          </div>
                          <div v-else>
                              <p class="text-neaprobate">Nu exista posturi aprobate!</p>
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
        messages:{
            showAdaugatSucces: false
        }
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
          let responseBack = null;
          await axios.post("api/ordonatori/creare", {
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
                  this.messages.showAdaugatSucces = true;
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
.modal-body {
  width: 500px;
    height: 80vh;
}
.noDisplayAlert{
    display: none;
}
.ordonatorPrincipal{
    padding: 2px;
    background-color: #55efc4;
    text-align: center;
}
.ordonatorSecundar{
    padding: 2px;
    background-color: #74b9ff;
    text-align: center;
}
.ordonatorTertiar{
    padding: 2px;
    background-color: #fab1a0;
    text-align: center;
}

.text-aprobate{
    color: green;
}
.text-neaprobate{
    color: red;
}
.text-aprobate,
.text-neaprobate{
    font-weight: bold;
}

</style>
