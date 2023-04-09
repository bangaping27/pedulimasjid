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
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

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
                            <a href="#about" class="nav__link">
                                <i class='bx bx-user nav__icon'></i>
                                <span class="nav__name">Tentang kami</span>
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="gd.blade.php" class="nav__link">
                                <i class='bx bx-book-alt nav__icon'></i>
                                <span class="nav__name">Galang Dana</span>
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="#portfolio" class="nav__link">
                                <i class='bx bx-briefcase-alt nav__icon'></i>
                                <span class="nav__name">Tentang</span>
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="#contactme" class="nav__link">
                                <i class='bx bx-message-square-detail nav__icon'></i>
                                <span class="nav__name">Kontak</span>
                            </a>
                        </li>
                    </ul>
                </div>


            </nav>
        </header>

        <main>
            <!--=============== HOME ===============-->
<section class="home section" id="home">
    <center>
        <h3>Galang Dana</h3>
        <button type="button" class="btn btn-lg btn-primary">Galang Dana Sekarang</button>
        <br>
        <br>
        <button type="button" class="btn btn-lg btn-outline-primary"><svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" class="mr-2 inline w-[21px]"><path d="M5 13.286V7.028c-.197.028.183-.065 0 0a3.001 3.001 0 0 0-2 2.83v3.856c0 1.21.358 2.337.975 3.28.085.928-.096 1.814-.324 2.513-.23.704.223 1.489.942 1.309.764-.192 1.675-.596 2.433-1.434A5.99 5.99 0 0 0 9 19.714h2.857c1.36 0 2.56-.678 3.283-1.714.184-.264-.117.305 0 0H9.43C7.299 18 5 15.416 5 13.286Z" fill="#10A8E5"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M9.857 3.75A2.25 2.25 0 0 0 7.607 6v6.857a2.25 2.25 0 0 0 2.25 2.25H15c.56 0 1.098-.087 1.602-.249l.446-.142.324.337c.68.708 1.493 1.05 2.189 1.213a.184.184 0 0 0 .017.004.138.138 0 0 0 .016-.021.411.411 0 0 0 .025-.34c-.248-.732-.463-1.68-.413-2.705l.01-.212.12-.175c.577-.842.914-1.86.914-2.96V6A2.25 2.25 0 0 0 18 3.75H9.857Zm9.73 12.52h-.002.001ZM6.106 6a3.75 3.75 0 0 1 3.75-3.75H18A3.75 3.75 0 0 1 21.75 6v3.857c0 1.33-.385 2.572-1.05 3.618-.005.707.148 1.386.34 1.953.19.561.115 1.178-.192 1.644-.325.495-.923.82-1.628.655a5.945 5.945 0 0 1-2.598-1.316 6.763 6.763 0 0 1-1.622.196H9.857a3.75 3.75 0 0 1-3.75-3.75V6Z" fill="#10A8E5"></path><path d="M13.875 5.5c-.517 0-.977.102-1.376.308-.397.205-.706.47-.921.793-.216.326-.328.66-.328.995 0 .223.096.425.271.594.176.17.398.258.649.258.402 0 .7-.221.854-.61l.033-.093c.09-.255.199-.446.317-.566.088-.088.25-.14.501-.14.208 0 .363.052.48.154.11.096.157.199.157.331 0 .059-.013.11-.043.16a.906.906 0 0 1-.16.199l-.097.088c-.058.05-.129.112-.214.182l-.089.074c-.227.188-.409.352-.547.492a1.88 1.88 0 0 0-.374.553 1.817 1.817 0 0 0-.145.749c0 .274.086.504.266.667a.886.886 0 0 0 .609.227c.424 0 .723-.223.83-.615l.078-.313a.548.548 0 0 1 .054-.138.65.65 0 0 1 .09-.117c.04-.043.09-.092.153-.148l.4-.341c.197-.17.344-.299.442-.39a2.27 2.27 0 0 0 .43-.545c.133-.232.198-.498.198-.792 0-.372-.111-.72-.33-1.033a2.163 2.163 0 0 0-.902-.727 3.075 3.075 0 0 0-1.286-.256ZM13.063 11.875a1.01 1.01 0 0 1 .704-.268.99.99 0 0 1 .698.27.915.915 0 0 1 .294.684c0 .29-.107.537-.317.714a1.028 1.028 0 0 1-.675.245c-.256 0-.488-.082-.682-.24a.892.892 0 0 1-.323-.719.91.91 0 0 1 .301-.686Z" fill="#10A8E5"></path></svg> Tanya Tentang Galang Dana</button>
        <br>
        <br>
        <br>    
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="width: 584px; margin-right: 50px;">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="2000" >
                <img src="https://kitabisa.com/_next/image?url=https%3A%2F%2Ffirebase-kanvas.imgix.net%2Fweb_homebanner%2Fhomebanner%2Fapril%2Fkadodonasinature.jpg%3Fauto%3Dcompress%26cs%3Dtinysrgb%26fm%3Dpjpg%26fit%3Dscale%26w%3D448%26auto%3Dcompress%2Cformat%26cs%3Dtinysrgb%26fm%3Dpjpg%26fit%3Dclip%26w%3D448%26dpr%3D2%26sharp%3D15&w=1080&q=75" class="d-block w-10" alt="...">
              </div>
              <div class="carousel-item"  data-bs-interval="2000" >
                <img src="https://kitabisa.com/_next/image?url=https%3A%2F%2Ffirebase-kanvas.imgix.net%2Fweb_homebanner%2Fhomebanner%2Fapril%2Famanahkorbanledakan.jpg%3Fauto%3Dcompress%26cs%3Dtinysrgb%26fm%3Dpjpg%26fit%3Dscale%26w%3D448%26auto%3Dcompress%2Cformat%26cs%3Dtinysrgb%26fm%3Dpjpg%26fit%3Dclip%26w%3D448%26dpr%3D2%26sharp%3D15&w=1080&q=75" class="d-block w-10" alt="...">
              </div>
              <div class="carousel-item" data-bs-interval="2000" >
                <img src="https://kitabisa.com/_next/image?url=https%3A%2F%2Ffirebase-kanvas.imgix.net%2Fweb_homebanner%2Fhomebanner%2Fapril%2Fsemuabisamakan.png%3Fauto%3Dcompress%26cs%3Dtinysrgb%26fm%3Dpjpg%26fit%3Dscale%26w%3D448%26auto%3Dcompress%2Cformat%26cs%3Dtinysrgb%26fm%3Dpjpg%26fit%3Dclip%26w%3D448%26dpr%3D2%26sharp%3D15&w=1080&q=75" class="d-block w-10" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        <br>
        <br>
        
    </center>
    
</section>

        </main>
        <!--=============== MAIN JS ===============-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
