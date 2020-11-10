<template>
  <div>
    <top-nav></top-nav>
    <div class="container">
      <div class="row mt-3">
        <div class="col-12 bg-primary text-white p-2">
          Ordonatori de Credite
        </div>
      </div>
      <div class="row mt-1">
        <div class="col-4 my-2" v-for="ordonator in ordonatori" :key="ordonator.id">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center border border-success p-1" v-if="ordonator.tip == 1">Ordonator principal de credite</h5>
              <h5 class="card-title text-center border border-primary p-1" v-if="ordonator.tip == 2">Ordonator secundar de credite</h5>
              <h5 class="card-title text-center border border-warning p-1" v-if="ordonator.tip == 3">Ordonator tertiar de credite</h5>
              <p class="card-text">{{ ordonator.denumire}}</p>
              <p class="card-text">Data : {{ ordonator.dataInfiintare}}</p>
              <a v-bind:href="'/ordonator/' + ordonator.id" class="btn btn-outline-primary">Detalii</a>
              <a v-bind:href="'/ordonator/' + ordonator.id + '/institutii'" class="btn btn-outline-success">Institutii subordonate</a>
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
      ordonatori: [],
    };
  },
  components: { TopNav },
  created() {
    this.getOrdonatori();
  },
  methods: {
    // Preluare ordonatori de la API
    async getOrdonatori() {
      await axios
        .get("/api/ordonatori")
        .then((response) => this.ordonatori = response.data.data);
    },
  },
};
</script>

<style scoped>
.bg-main {
  background-color: #222f3e;
  color: #fff;
}
</style>