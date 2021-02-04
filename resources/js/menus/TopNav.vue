<template>
<div id="navbar-menu" class="nav-sticky">
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="/">SMRUSB</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/despre">Despre SMRUSB</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/regiuni">Regiuni</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/judete">Judete</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Familii ocupationale
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" :href="`/familiiocupationale/${familie.id}`" v-for="familie in optiuniFamiliiOcupationale">{{ familie.denumire}}</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/ordonatori" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ordonatori
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/ordonatori">Vezi Ordonatori</a>
                        <a class="dropdown-item" href="/ordonatori/creare">Adauga Ordonator</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Institutii Publice
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Adauga</a>
                        <a class="dropdown-item" href="#">Sterge</a>
                        <a class="dropdown-item" href="#">Vizualizare</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Angajati
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Adauga</a>
                        <a class="dropdown-item" href="#">Sterge</a>
                        <a class="dropdown-item" href="#">Vizualizare</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Situatii
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Situatii profesionale</a>
                        <a class="dropdown-item" href="#">Situatii financiare</a>
                        <a class="dropdown-item" href="#">Situatii invatamant</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Istoric
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Ordonatori</a>
                        <a class="dropdown-item" href="#">Institutii publice</a>
                        <a class="dropdown-item" href="#">Angajati</a>
                        <a class="dropdown-item" href="#">State</a>
                        <a class="dropdown-item" href="#">Pozitii</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Documente
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Adeverinta angajat</a>
                        <a class="dropdown-item" href="#">Adeverinta salarii</a>
                        <a class="dropdown-item" href="#">Adeverinta vechime</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Stat
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Vizualizare</a>
                        <a class="dropdown-item" href="#">Suplimentare</a>
                        <a class="dropdown-item" href="#">Radiere</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Functii
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Vizualizare</a>
                        <a class="dropdown-item" href="#">Suplimentare</a>
                        <a class="dropdown-item" href="#">Radiere</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pozitii
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Vizualizare</a>
                        <a class="dropdown-item" href="#">Suplimentare</a>
                        <a class="dropdown-item" href="#">Radiere</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Nomenclator
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Regiuni</a>
                        <a class="dropdown-item" href="#">Judete</a>
                        <a class="dropdown-item" href="#">Familii Ocupationale</a>
                        <a class="dropdown-item" href="#">Ordonatori de credite</a>
                        <a class="dropdown-item" href="#">Institutii Publice</a>
                        <a class="dropdown-item" href="#">Angajati</a>
                        <a class="dropdown-item" href="#">Functii</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
</template>

<script>
export default {
    data(){
        return{
            optiuniFamiliiOcupationale:[]
        }
    },
    created() {
        this.getOptiuni();
    },
    methods: {
        async getOptiuni() {
            this.loading = true;
            await axios.get('/api/familiiocupationale/all').then(response => this.optiuniFamiliiOcupationale = response.data.data);
            this.loading = false;
        }
    },
};
</script>

<style scoped>
.navbar {
    background-color: #3D405B;
}
.navbar-brand {
    font-family: "Roboto", sans-serif;
    font-weight: 900;
    font-size: 18px;
    color: #fff;
    text-decoration: none;
}
.navbar-brand:hover {
    text-decoration: none;
    color: #48dbfb;
    transition: color 0.5s;
}
li.nav-item a {
    color: #fff;
}
li.nav-item:hover {
    color: #000;
}
li.nav-item:hover>.nav-link {
    background-color: #ecac36;
    color: #000;
    border-radius: 3px;
    text-decoration: none;
    transition: background-color 0.5s;
    animation-direction: alternate;
    animation-timing-function: ease-in-out;
}
.dropdown-menu,
.dropdown-item {
    background-color: #615D6C;
    color: #000;
}
.dropdown-item:hover {
    background-color: #E07A5F;
    color: #000;
}
#navbar-menu {
    height: 5.5vh;
}

.nav-sticky{
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
}
</style>
