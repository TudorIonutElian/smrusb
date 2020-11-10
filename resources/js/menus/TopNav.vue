<template>
  <div>
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="#">SMRUSB</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Despre SMRUSB</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Regiuni</a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Judete
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Arad</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Familii ocupationale
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">I - Invatamant</a>
              <a class="dropdown-item" href="#"
                >II - Sanatate si asistenta sociala</a
              >
              <a class="dropdown-item" href="#"
                >III - Cultura, unitati de cultura</a
              >
              <a class="dropdown-item" href="#">IV - Diplomatie</a>
              <a class="dropdown-item" href="#"
                >V - Justitie si Curtea Constitutionala</a
              >
              <a class="dropdown-item" href="#"
                >VI - Aparare, ordine publica si securitate nationala</a
              >
            </div>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Ordonatori
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/ordonatori">Vezi Ordonatori</a>
              <a class="dropdown-item" href="#">Adauga Ordonator</a>
              <a class="dropdown-item" href="#">Sterge Ordonator</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Institutii Publice
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Adauga</a>
              <a class="dropdown-item" href="#">Sterge</a>
              <a class="dropdown-item" href="#">Vizualizare</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Angajati
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Adauga</a>
              <a class="dropdown-item" href="#">Sterge</a>
              <a class="dropdown-item" href="#">Vizualizare</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Situatii
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Situatii profesionale</a>
              <a class="dropdown-item" href="#">Situatii financiare</a>
              <a class="dropdown-item" href="#">Situatii invatamant</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Istoric
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Ordonatori</a>
              <a class="dropdown-item" href="#">Institutii publice</a>
              <a class="dropdown-item" href="#">Angajati</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Documente
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Adeverinta angajat</a>
              <a class="dropdown-item" href="#">Adeverinta salarii</a>
              <a class="dropdown-item" href="#">Adeverinta vechime</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Stat
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Suplimentare</a>
              <a class="dropdown-item" href="#">Radiere</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Functii
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Suplimentare</a>
              <a class="dropdown-item" href="#">Radiere</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Pozitii
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Suplimentare</a>
              <a class="dropdown-item" href="#">Radiere</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</template>


<script>
import { faPlus } from '@fortawesome/free-solid-svg-icons'
export default {};
</script>

<style scoped>
.navbar {
  background-color: #222f3e;
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
li.nav-item a{
  color: #fff;
}
li.nav-item:hover{
  color: #000;
}
li.nav-item:hover > .nav-link {
  background-color:#48dbfb;
  color: #000;
  border-radius: 3px;
  text-decoration: none;
  transition: background-color 0.5s;
  animation-direction: alternate;
  animation-timing-function: ease-in-out;
}
.dropdown-menu,
.dropdown-item {
  background-color: #222f3e;
  color: #000;
}
.dropdown-item:hover{
  background-color: #48dbfb;
  color:#000;
}
</style>