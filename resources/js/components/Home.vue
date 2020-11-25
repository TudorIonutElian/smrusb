<template>
<div>
    <top-nav></top-nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

            </div>
        </div>
    </div>
</div>
</template>

<script>
// Importin other components
import TopNav from "../menus/TopNav.vue";
import HomeJumbotron from "../helpers/HomeJumbotron.vue";


export default {
    data() {
        return {};
    },
    components: {
        TopNav,
        HomeJumbotron
    }
};
</script>
