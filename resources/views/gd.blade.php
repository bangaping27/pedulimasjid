<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== BOXICONS ===============-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <script type="text/javascript" src="js/jquery.js"></script>
	      <script type="text/javascript" src="js/bootstrap.js"></script>

        <!--=============== CSS ===============-->
<style>
/*=============== GOOGLE FONTS ===============*/
@import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap");

/*=============== VARIABLES CSS ===============*/
:root {
  --header-height: 3rem;

  /*========== Colors ==========*/
  --hue: 174;
  --sat: 63%;
  --first-color: hsl(var(--hue), var(--sat), 40%);
  --first-color-alt: hsl(var(--hue), var(--sat), 36%);
  --title-color: hsl(var(--hue), 12%, 15%);
  --text-color: hsl(var(--hue), 8%, 35%);
  --body-color: hsl(var(--hue), 100%, 99%);
  --container-color: #FFF;

  /*========== Font and typography ==========*/
  --body-font: 'Open Sans', sans-serif;
  --h1-font-size: 1.5rem;
  --normal-font-size: .938rem;
  --tiny-font-size: .625rem;

  /*========== z index ==========*/
  --z-tooltip: 10;
  --z-fixed: 100;
}

@media screen and (min-width: 968px) {
  :root {
    --h1-font-size: 2.25rem;
    --normal-font-size: 1rem;
  }
}

/*=============== BASE ===============*/
* {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}

html {
  scroll-behavior: smooth;
}

body {
  margin: var(--header-height) 0 0 0;
  font-family: var(--body-font);
  font-size: var(--normal-font-size);
  background-color: var(--body-color);
  color: var(--text-color);
}

ul {
  list-style: none;
}

a {
  text-decoration: none;
}

img {
  max-width: 100%;
  height: auto;
}

/*=============== REUSABLE CSS CLASSES ===============*/
.section {
  padding: 4.5rem 0 2rem;
}

.section__title {
  font-size: var(--h1-font-size);
  color: var(--title-color);
  text-align: center;
  margin-bottom: 1.5rem;
}

.section__height {
  height: 100vh;
}

/*=============== LAYOUT ===============*/
.container {
  max-width: 968px;
  margin-left: 1rem;
  margin-right: 1rem;
}

/*=============== HEADER ===============*/
.header {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  background-color: var(--container-color);
  z-index: var(--z-fixed);
  transition: .4s;
}

/*=============== NAV ===============*/
.nav {
  height: var(--header-height);
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.nav__img {
  width: 32px;
  border-radius: 50%;
}

.nav__logo {
  color: var(--title-color);
  font-weight: 600;
}

@media screen and (max-width: 767px) {
  .nav__menu {
    position: fixed;
    bottom: 0;
    left: 0;
    background-color: var(--container-color);
    box-shadow: 0 -1px 12px hsla(var(--hue), var(--sat), 15%, 0.15);
    width: 100%;
    height: 4rem;
    padding: 0 1rem;
    display: grid;
    align-content: center;
    border-radius: 1.25rem 1.25rem 0 0;
    transition: .4s;
  }
}

.nav__list,
.nav__link {
  display: flex;
}

.nav__link {
  flex-direction: column;
  align-items: center;
  row-gap: 4px;
  color: var(--title-color);
  font-weight: 600;
}

.nav__list {
  justify-content: space-around;
}

.nav__name {
  font-size: var(--tiny-font-size);
  /* display: none;*/ /* Minimalist design, hidden labels */
}

.nav__icon {
  font-size: 1.5rem;
}

/*Active link*/
.active-link {
  position: relative;
  color: var(--first-color);
  transition: .3s;
}

/* Minimalist design, active link */
/* .active-link::before{
  content: '';
  position: absolute;
  bottom: -.5rem;
  width: 4px;
  height: 4px;
  background-color: var(--first-color);
  border-radius: 50%;
} */

/* Change background header */
.scroll-header {
  box-shadow: 0 1px 12px hsla(var(--hue), var(--sat), 15%, 0.15);
}

/*=============== MEDIA QUERIES ===============*/
/* For small devices */
/* Remove if you choose, the minimalist design */
@media screen and (max-width: 320px) {
  .nav__name {
    display: none;
  }
}

/* For medium devices */
@media screen and (min-width: 576px) {
  .nav__list {
    justify-content: center;
    column-gap: 3rem;
  }
}

@media screen and (min-width: 767px) {
  body {
    margin: 0;
  }
  .section {
    padding: 7rem 0 2rem;
  }
  .nav {
    height: calc(var(--header-height) + 1.5rem); /* 4.5rem */
  }
  .nav__img {
    display: none;
  }
  .nav__icon {
    display: none;
  }
  .nav__name {
    font-size: var(--normal-font-size);
    /* display: block; */ /* Minimalist design, visible labels */
  }
  .nav__link:hover {
    color: var(--first-color);
  }

  /* First design, remove if you choose the minimalist design */
  .active-link::before {
    content: '';
    position: absolute;
    bottom: -.75rem;
    width: 4px;
    height: 4px;
    background-color: var(--first-color);
    border-radius: 50%;
  }

  /* Minimalist design */
  /* .active-link::before{
      bottom: -.75rem;
  } */
}

/* For large devices */
@media screen and (min-width: 1024px) {
  .container {
    margin-left: auto;
    margin-right: auto;
  }
}

/* Untuk card */
.card {
  display: flex;
  position: relative;
  flex-direction: column;
  height: 350px;
  width: 190px;
  min-width: 250px;
  padding: 1rem;
  border-radius: 16px;
  background: #17141d;
  box-shadow: -1rem 0 3rem #00000067;
  transition: .2s;
  font-family: 'Inter', sans-serif;
}

.card:hover {
  transform: translateY(-0.4rem);
}

.card-author {
  position: relative;
  display: grid;
  grid-template-columns: 75px 1fr;
  align-items: center;
  margin: 3rem 0 0;
}

.author-name {
  color: #7a7a8c;
}

.author-name-prefix {
  color: #e52e71;
  font-weight: 600;
}

.author-avatar span {
  display: block;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: #f2f2f2;
  margin: 16px 10px;
}

.half-circle {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 60px;
  height: 48px;
  fill: none;
  stroke: #ff8a00;
  stroke-width: 8;
  stroke-linecap: round;
}

.card-header {
  margin-bottom: auto;
  color: #7a7a8c;
}

.card-header p {
  font-size: 14px;
  margin: 0 0 1rem;
  color: #7a7a8c;
}

.card-header .title {
  font-size: 25px;
  margin: .25rem 0 auto;
  cursor: pointer;
  font-family: 'Arial Black', sans-serif;
}

.card-header .title:hover {
  background: linear-gradient(90deg,#ff8a00,#e52e71);
  text-shadow: none;
  background-clip: text;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.tags {
  margin: 1rem 0 2rem;
  padding: .5rem 0 1rem;
  line-height: 2;
  margin-bottom: 0;
}

.tags a {
  font-style: normal;
  font-weight: 700;
  color: #7a7a8c;
  text-transform: uppercase;
  font-size: .66rem;
  border: 3px solid #28242f;
  border-radius: 2rem;
  padding: .2rem .85rem .25rem;
  position: relative;
}

.tags a:hover {
  background: linear-gradient(90deg,#ff8a00,#e52e71);
  text-shadow: none;
  -webkit-text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-box-decoration-break: clone;
  box-decoration-break: clone;
  background-clip: text;
  border-color: white;
} 

/*  Card 2 */
/* .card {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-around;
  width: 260px;
  padding: 20px 1px;
  margin: 10px 0;
  text-align: center;
  position: relative;
  cursor: pointer;
  box-shadow: 0 10px 15px -3px rgba(33,150,243,.4),0 4px 6px -4px rgba(33,150,243,.4);
  border-radius: 10px;
  background-color: #6B6ECC;
  background: linear-gradient(45deg, #04051dea 0%, #2b566e 100%);
}

.content {
  padding: 20px;
}

.content .price {
  color: white;
  font-weight: 800;
  font-size: 50px;
  text-shadow: 0px 0px 10px rgba(0, 0, 0, 0.42);
}

.content .description {
  color: rgba(255, 255, 255, 0.6);
  margin-top: 10px;
  font-size: 14px;
}

.content .title {
  font-weight: 800;
  text-transform: uppercase;
  color: rgba(255, 255, 255, 0.64);
  margin-top: 10px;
  font-size: 25px;
  letter-spacing: 1px;
}

button {
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
  border: none;
  outline: none;
  color: rgb(255 255 255);
  text-transform: uppercase;
  font-weight: 700;
  font-size: .75rem;
  padding: 0.75rem 1.5rem;
  background-color: rgb(33 150 243);
  border-radius: 0.5rem;
  width: 90%;
  text-shadow: 0px 4px 18px #2c3442;
} */

</style>

        <title>Peduli Masjid</title>
    </head>
    <body>
        <!--=============== HEADER ============mm===-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">Peduli Masjid</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">
                                <i class='bx bx-home-alt nav__icon'></i>
                                <span class="nav__name">Home</span>
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="/tk" class="nav__link">
                                <i class='bx bx-user nav__icon'></i>
                                <span class="nav__name">Tentang kami</span>
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="/campaign/registration/info/gd" class="nav__link">
                                <i class='bx bx-book-alt nav__icon'></i>
                                <span class="nav__name">Galang Dana</span>
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="/dn" class="nav__link">
                                <i class='bx bx-briefcase-alt nav__icon'></i>
                                <span class="nav__name">Donasi</span>
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="/kon" class="nav__link">
                                <i class='bx bx-message-square-detail nav__icon'></i>
                                <span class="nav__name">Kontak</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <img src="assets/img/perfil.png" alt="" class="nav__img">
            </nav>
        </header>

        <main>
            <!--=============== HOME ===============-->
            <section class="container section section__height" id="home">
                <u><h2 class="section__title">Galang Dana</h2></u><br><br>

                <div class="container">
                  {{-- <center> <h2>Ayuk galang dana</h2> </center> --}}

                  <div class="card">
                    <div class="card-header"><b> Ayo Donasi </b></div><br><br>
                      <div class="mt-10">
                        <center><a href="/dana"><button type="button" class="btn btn-primary btn-block btn-lg">Donasi Sekarang</button></center></a> 
                      </div>
                    <div class="card-body">Berapapun dana anda kami siap menerima</div>
                </div>
            </section>

             <!--=============== ABOUT ===============-->
            <section class="container section section__height" id="about">
                
              <div class="card">
                <div class="card-header"><b> Ayo1 </b></div><br><br>
                  <div class="mt-10">
                    <center><a href="/dana"><button type="button" class="btn btn-primary btn-block btn-lg">Donasi Sekarang</button></center></a> 
                  </div>
                <div class="card-body">Berapapun dana anda kami siap menerima</div>
              </div>

              <div class="card">
                <div class="card-header"><b> Ayo2 </b></div><br><br>
                  <div class="mt-10">
                    <center><a href="/dana"><button type="button" class="btn btn-primary btn-block btn-lg">Donasi Sekarang</button></center></a> 
                  </div>
                <div class="card-body">Berapapun dana anda kami siap menerima</div>
              </div>

            </section>

            {{-- <!--=============== SKILLS ===============-->
            <section class="container section section__height" id="skills">
                <h2 class="section__title">Skills</h2>
            </section>

            <!--=============== PORTFOLIO ===============-->
            <section class="container section section__height" id="portfolio">
                <h2 class="section__title">Portfolio</h2>
            </section>

            <!--=============== CONTACTME ===============-->
            <section class="container section section__height" id="contactme">
                <h2 class="section__title">Contactme</h2>
            </section> --}}
        </main>


        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
    </body>
</html>
