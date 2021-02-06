<template>
    <div>
        <top-nav></top-nav>

        <div class="container-fluid mt-6" id="paginaNomenclatorRegiuni">
            <div class="row">
                <div class="col-12">
                    <div class="home-content-flexbox mt-2">
                        <div class="home-box">
                            <div class="home-box_item">
                                <span>#Statistici Regiuni</span>
                            </div>
                            <div class="home-box_item">
                                <span>32</span>
                            </div>
                        </div>
                        <div class="home-box">
                            <div class="home-box_item">
                                <span>#Statistici Judete</span>
                            </div>
                            <div class="home-box_item">
                                <span>32</span>
                            </div>
                        </div>
                        <div class="home-box">
                            <div class="home-box_item">
                                <span>#Statistici Ordonatori</span>
                            </div>
                            <div class="home-box_item">
                                <span>200</span>
                            </div>
                        </div>
                        <div class="home-box">
                            <div class="home-box_item">
                                <span>#Statistici Institutii</span>
                            </div>
                            <div class="home-box_item">
                                <span>32</span>
                            </div>
                        </div>
                        <div class="home-box"><div class="home-box_item">
                            <span>#Statistici Angajati</span>
                        </div>
                            <div class="home-box_item">
                                <span>32</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-12">
                    <div class="home-content-flexbox mt-2">
                        <div class="home-box">
                            <div class="home-box_item">
                                <span>#Statistici Functii</span>
                            </div>
                            <div class="home-box_item">
                                <span>32</span>
                            </div>
                        </div>
                        <div class="home-box">
                            <div class="home-box_item">
                                <span>#Total Posturi</span>
                            </div>
                            <div class="home-box_item">
                                <span>32</span>
                            </div>
                        </div>
                        <div class="home-box">
                            <div class="home-box_item">
                                <span>#Posturi Vacante</span>
                            </div>
                            <div class="home-box_item">
                                <span>200</span>
                            </div>
                        </div>
                        <div class="home-box">
                            <div class="home-box_item">
                                <span>#Posturi de conducere</span>
                            </div>
                            <div class="home-box_item">
                                <span>32</span>
                            </div>
                        </div>
                        <div class="home-box"><div class="home-box_item">
                            <span>#Posturi de Executie</span>
                        </div>
                            <div class="home-box_item">
                                <span>32</span>
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
        };
    },
    components: {
        TopNav,
    },
};
</script>


<style scoped>

#paginaNomenclatorRegiuni{
    margin-top: 5.5vh;
}
.home-content-flexbox{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}
.home-box{
    width: 15vw;
    height: 15vh;
    /*border: 1px solid red;*/
    margin: 2vh 2vw;
    border-radius: 2%;
}
.home-box_item{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    background-color: #3D405B;
}
.home-box_item:nth-child(2){
    background-color: #ffffff;
    color: #000000;
    height: 70%;
    border: 1px solid #3D405B;
}
.home-box_item:nth-child(2) span{
    padding: 5px;
    font-weight: bold;
    color: #000000;
    font-size: 3rem;
}
.home-box_item span{
    padding: 5px;
    font-weight: bold;
    color: #ffffff;
}
</style>


