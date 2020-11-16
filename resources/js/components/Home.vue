<template>
<div>
    <top-nav></top-nav>
    <home-jumbotron></home-jumbotron>
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-12">

            </div>
        </div>
    </div>
</div>
</template>

<script>
// Importinn other components
import TopNav from "../menus/TopNav.vue";
import HomeJumbotron from "../helpers/HomeJumbotron.vue";
export default {
    data() {
        return {};
    },
    components: {
        TopNav,
        HomeJumbotron
    },
};
</script>
