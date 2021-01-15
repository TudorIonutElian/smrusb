<template>
  <div>
    <top-nav></top-nav>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 bg-secondary text-white p-2">
          Ordonatori de Credite
        </div>
      </div>
      <div class="row my-2">
        <!-- Button trigger modal -->
        <!-- Modal -->
        <div class="container">
          <div
            class="modal fade"
            id="exampleModal"
            tabindex="-1"
            role="dialog"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
          >
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">
                    Adaugare Ordonator de credite
                  </h5>

                  <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close"
                  >
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        adawd
                    </div>
                </div>
                <div class="modal-footer">
                  <button
                    type="button"
                    class="btn btn-danger"
                    data-dismiss="modal"
                  >
                    Inchide
                  </button>
                  <button type="button" class="btn btn-success">
                    Salveaza Ordonator
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-1">
        <div
          class="col-3 my-2"
          v-for="ordonator in ordonatori"
          :key="ordonator.id"
        >
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center p-2 orange-label text-white">
                {{ ordonator.denumire }}
              </h5>
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
                  <a
                    v-bind:href="'/ordonator/' + ordonator.id"
                    class="btn orange-label-slower btn-sm btn-block"
                    >Institutii</a
                  >
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
import TopNav from "../menus/TopNav.vue";
export default {
  data() {
    return {
      ordonatori: [],
    };
  },
  components: {
    TopNav,
  },
  created() {
    this.getOrdonatori();
  },
  methods: {
    // Preluare ordonatori de la API
    async getOrdonatori() {
      await axios
        .get("/api/ordonatori")
        .then((response) => (this.ordonatori = response.data.data));
    },
    outputOrdonator(tipOrdonator) {
      if (tipOrdonator == 1) {
        return "Ordonator principal";
      } else if (tipOrdonator == 2) {
        return "Ordonator secundar";
      } else {
        return "Ordonator tertiar";
      }
    },
  },
};
</script>

<style scoped>
.bg-main {
  background-color: #222f3e;
  color: #fff;
}
.modal-body {
  width: 300px;
}
</style>
