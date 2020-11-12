<template>
<div>
    <top-nav></top-nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 bg-primary text-white p-3">
                Dezvoltarea SMRUSB
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="row mt-1">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Functionalitate</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">#</th>
                                <td>Afisare Home Page</td>
                                <td class="bg-success text-white">Functional</td>
                            </tr>
                            <tr>
                                <th scope="row">#</th>
                                <td>Afisare Despre</td>
                                <td class="bg-success text-white">Functional</td>
                            </tr>
                            <tr>
                                <th scope="row">#</th>
                                <td>Afisare Regiuni</td>
                                <td class="bg-warning">In dezvoltare</td>
                            </tr>
                            <tr>
                                <th scope="row">#</th>
                                <td>Afisare Judete</td>
                                <td class="bg-warning">In dezvoltare</td>
                            </tr>
                            <tr>
                                <th scope="row">#</th>
                                <td>Afisare Localitati</td>
                                <td class="bg-warning">In dezvoltare</td>
                            </tr>
                            <tr>
                                <th scope="row">#</th>
                                <td>Afisare Familii Ocupationale</td>
                                <td class="bg-danger text-white">Nefunctional</td>
                            </tr>
                            <tr>
                                <th scope="row">#</th>
                                <td>Afisare Ordonatori</td>
                                <td class="bg-danger text-white">Nefunctional</td>
                            </tr>
                            <tr>
                                <th scope="row">#</th>
                                <td>Adaugare Ordonatori</td>
                                <td class="bg-danger text-white">Nefunctional</td>
                            </tr>
                            <tr>
                                <th scope="row">#</th>
                                <td>Stergere Ordonatori</td>
                                <td class="bg-danger text-white">Nefunctional</td>
                            </tr>

                            <tr>
                                <th scope="row">#</th>
                                <td>Afisare Institutii</td>
                                <td class="bg-danger text-white">Nefunctional</td>
                            </tr>
                            <tr>
                                <th scope="row">#</th>
                                <td>Adaugare Institutii</td>
                                <td class="bg-danger text-white">Nefunctional</td>
                            </tr>
                            <tr>
                                <th scope="row">#</th>
                                <td>Stergere Institutii</td>
                                <td class="bg-danger text-white">Nefunctional</td>
                            </tr>
                            <tr>
                                <th scope="row">#</th>
                                <td>Afisare Angajati</td>
                                <td class="bg-danger text-white">Nefunctional</td>
                            </tr>
                            <tr>
                                <th scope="row">#</th>
                                <td>Adaugare Angajati</td>
                                <td class="bg-danger text-white">Nefunctional</td>
                            </tr>
                            <tr>
                                <th scope="row">#</th>
                                <td>Stergere Angajati</td>
                                <td class="bg-danger text-white">Nefunctional</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
// Importinn other components
import TopNav from "../menus/TopNav.vue";
export default {
    data() {
        return {};
    },
    components: {
        TopNav
    },
};
</script>
