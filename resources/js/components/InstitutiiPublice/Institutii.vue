<template>

    <div>
        <top-nav></top-nav>
        <div class="container-fluid startInstitutii">
            <div class="row">
                <div class="col-12 bg-success p-3">Dezvoltare Institutii Publice</div>
            </div>
        </div>
    </div>
</template>

<script>
import TopNav from "../../menus/TopNav";
export default {
    data(){
        return {}
    },
    components:{
        TopNav,
    }
}
</script>

<style scoped>
.startInstitutii{
    margin-top: 6vh;
}
</style>
