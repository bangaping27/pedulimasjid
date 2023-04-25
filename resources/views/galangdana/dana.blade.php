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

        <title>Peduli Masjid</title>
    </head>
    <body>
        <!--=============== HEADER ============mm===-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">Peduli Masjid</a>

                <div class="nav__menu" id="nav-menu">
                    <a href="/campaign/registration/info/gd"><button type="button" class="btn btn-primary btn-lg">Kembali!</button></a>
                </div>

                <img src="assets/img/perfil.png" alt="" class="nav__img">
            </nav>
        </header>

        <main>
            <!--=============== HOME ===============-->
            <section class="container section section__height" id="home">
                <h2 class="section__title"><b>Peduli Masjid</b> telah berhasil mengumpulkan beberapa Donasi telah disalurkan ke pihak-pihak yang membutuhkan. </h2>
                <center>
                    <a href="#kenalan" class="nav__link">
                        <button type="button" class="btn btn-primary btn-lg">Iya, kasih tau cara kerjanya dong</button>
                    </a>
                    <a href="#kenalan"></a> </a>
                    <br>
                    <a href="#tips" class="nav__link">
                        <button type="button" class="btn btn-primary btn-lg">Sudah galang dana, mau cari tips</button>
                    </a>
                    <a href="#tips"></a> </a>
                </center>
            </section>

            <p>
              Jika anda berminat untuk menyalurkan zakat anda, silahkan isi formulir dibawah ini.
            </p>

            <div class="row">
              <div class="col-12">
                  <h2 class="contact-title">Donasi Sekarang !</h2>
              </div>
              <div class="col-lg-12">
                  <form class="form-contact contact_form" action="<?= BASEURL; ?>/Web/aksi_tambah_donasi" method="POST" enctype="multipart/form-data">
                      <div class="row">
                          <div class="col-sm-4">
                              <div class="form-group">
                                  <input class="form-control valid" name="nama_donatur" placeholder="Masukkan Nama Anda" required="">
                              </div>
                          </div>
                          <div class="col-sm-4">
                              <div class="form-group">
                                  <input class="form-control valid" name="no_hp_donatur"placeholder="Masukkan No. Handphone Anda" required="" type="text">
                              </div>
                          </div>
                          <div class="col-sm-4">
                              <div class="form-group">
                                  <input class="form-control valid" name="alamat_donatur"placeholder="Masukkan Alamat Anda" required="" type="text">
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="form-group">
                                  <input class="form-control" name="total_donasi" placeholder="Jumlah Donasi Yang Anda Ingin Berikan. Contoh: 100000" type="number">
                              </div>
                          </div>

                          <div class="col-12">
                              <div class="form-group">
                                  Bukti Pengiriman Donasi
                                  <input type="file" class="form-control w-100" name="foto" required=""></textarea>
                              </div>
                          </div>
                      </div>
                      <div class="form-group mt-3">
                          <button type="submit" class="button button-contactForm boxed-btn">Kirim Donasi</button>
                      </div>
                  </form>
              </div>

          </div>

        </main>


        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
    </body>
</html>
