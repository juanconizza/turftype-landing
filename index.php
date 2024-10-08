<?php
session_start();
$_SESSION['num1'] = rand(1, 10);
$_SESSION['num2'] = rand(1, 10);
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Empresa de Jardinería y Mantenimiento de Espacios Verdes</title>
    <meta
      name="description"
      content="Los más exigentes confían en Turftype como empresa de jardinería y mantenimiento de espacios verdes. Mantenimiento y Jardinería. Servicio de mantenimiento y jardinería de espacios verdes para empresas, urbanizaciones, countries, parques industriales y grandes superficies. Trabajamos en conjunto con estudios de paisajismo, arquitectura o DDO para la interpretación y puesta en marcha en la Construcción del Paisaje. Realizamos el diseño, provisión e instalación de sistemas de riego automatizados para pequeñas y grandes superficies. Servicio de ayudas de gremio y cuadrillas especializadas para tareas de temporada y obras en superficies deportivas."
    />
    <meta
      name="keywords"
      content="jardinería, mantenimiento de espacios verdes, empresa de jardinería, Turftype, paisajismo, sistemas de riego, mantenimiento de jardines, espacios verdes para empresas, urbanizaciones, parques industriales, grandes superficies, construcción del paisaje, estudios de paisajismo, arquitectura, diseño de jardines, riego automatizado, obras en superficies deportivas, cuadrillas especializadas, servicio de gremio, mantenimiento de jardines comerciales, jardinería para countries"
    />
    <!-- Precarga de imagenes importantes -->    
    <link rel="preload" href="assets/img/imagen-collage-desktop.webp" as="image">
    <link rel="preload" href="assets/img/imagen-collage-mobile.webp" as="image">
    <link rel="preload" href="assets/img/asesoramiento-experto.webp" as="image">
    <link rel="preload" href="assets/img/turftype-espacios-verdes.webp" as="image">
    <link rel="preload" href="assets/img/iconos-ventajas-turftype.webp" as="image">
       
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet" rel="preconnect"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet" rel="preconnect"
    />
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />


<!-- Google tag (gtag.js) --> 
 <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11407146291"></script> 
 
</script>
  </head>

  <body>
    <!-- ======= Header ======= -->
<header id="header">
  <div class="container d-flex align-items-center justify-content-between ps-4 pe-4">
    <div class="logo">
      <a href="index.php">
        <img src="assets/img/turftype-espacios-verdes.webp" alt="turftype logo" class="img-fluid logo-img"/>
      </a>
      <img
              src="assets/img/iconos-ventajas-turftype.webp"
              class="img-fluid beneficios"
              alt="beneficios"
              style="width: 60%;"
            />  
    </div>
    <div class="logo2 d-flex flex-column align-items-left text-center">
      <img src="assets/img/asesoramiento-experto.webp" alt="asesoramiento experto logo" class="img-fluid asesoramiento-img"/>
      <a href="https://api.whatsapp.com/send?phone=+541151116776&text=Hola,%20necesito%20asesorameinto%20especializado%20en%20jardiner%C3%ADa..." class="mt-2 telephone">
        <span class="telephone2 pe-1">011</span>51116776
      </a>
    </div>    
  </div>
</header>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
      <div class="container">
        <div class="row">
          <img
              src="assets/img/iconos-ventajas-turftype.webp"
              class="img-fluid beneficiosMobile mx-auto mb-3"
              alt="beneficios"
              style="width: 95%;"
            />  
          <!-- Imagen -->
          <div class="col-lg-6 d-flex flex-column align-items-center align-items-lg-start order-1 order-lg-2 hero-img" data-aos="fade-up">
            <picture>
              <!-- Imagen para dispositivos móviles -->
              <source srcset="assets/img/imagen-collage-mobile.webp" media="(max-width: 768px)" />
              <!-- Imagen para dispositivos de escritorio -->
              <source srcset="assets/img/imagen-collage-desktop.webp" media="(min-width: 769px)" />
              <!-- Imagen predeterminada si no se cumplen las condiciones anteriores -->
              <img src="assets/img/imagen-collage-desktop.webp" class="img-fluid collageImg" alt="collage parque" />
            </picture>
          </div>          
          <!-- Texto -->
          <div
            class="col-lg-6 d-flex flex-column justify-content-center align-items-stretch pt-lg-0 order-2 order-lg-1"
            data-aos="fade-up"
          >
            <div class="heroTitle">
              <h1>
                <span>Los más exigentes confían en Turftype como</span>
                empresa de jardinería y mantenimiento de espacios verdes.
              </h1>
              <h2 class="d-none d-md-block">
                Barrios cerrados <span>•</span> Empresas <span>•</span> Urbanizaciones <span>•</span> Grandes superficies <span>•</span> Parques Industriales <span>•</span> Condominios
              </h2>
              <div class="d-flex mb-3">
                <svg class="mailIcon img-fluid" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M11.5947 19H6.2C5.07989 19 4.51984 19 4.09202 18.782C3.71569 18.5903 3.40973 18.2843 3.21799 17.908C3 17.4802 3 16.9201 3 15.8V8.2C3 7.0799 3 6.51984 3.21799 6.09202C3.40973 5.71569 3.71569 5.40973 4.09202 5.21799C4.51984 5 5.0799 5 6.2 5H17.8C18.9201 5 19.4802 5 19.908 5.21799C20.2843 5.40973 20.5903 5.71569 20.782 6.09202C21 6.51984 21 7.0799 21 8.2V12M20.6067 8.26229L15.5499 11.6335C14.2669 12.4888 13.6254 12.9165 12.932 13.0827C12.3192 13.2295 11.6804 13.2295 11.0677 13.0827C10.3743 12.9165 9.73279 12.4888 8.44975 11.6335L3.14746 8.09863M18 13.5L19.4107 15.5584L21.8042 16.2639L20.2825 18.2416L20.3511 20.7361L18 19.9L15.6489 20.7361L15.7175 18.2416L14.1958 16.2639L16.5893 15.5584L18 13.5Z" stroke="#ffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
              <h3 class="d-none d-md-block">Solicitá Asesoramiento Profesional<br>personalizado e inmediato</h3>
              <h3 class="d-block d-md-none">Solicitá Asesoramiento Profesional personalizado e inmediato</h3>
              </div>
              <a href="#contact" class="btn-link mb-3">Asesoramiento y Cotización</a>             
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero -->

    <main id="main">
      <!-- ======= App Features Section 1 ======= -->
      <section id="features" class="features mt-1">
        <div class="container">
          <div class="section-title">
            <h2>Somos especialistas en <span>mantenimiento y <br>jardinería</span> de grandes espacios verdes.</h2>            
            <div class="divider"></div>
          </div>    
          <div class="row no-gutters specs">
            <div class="col-12 d-flex align-items-stretch">
              <div class="content d-flex flex-column justify-content-center">
                <div class="row">
                  <div class="col-md-3 icon-box" data-aos="fade-up">
                    <div class="icon-text-container d-flex row justify-content-center">
                      <img
                        src="assets/img/espacios-verdes-icon-1.webp"
                        class="img-fluid"
                        style="width: 160px; height: auto"
                        alt="icono"
                        loading="lazy"
                      />
                      <div class="text-fix-item text-center">
                        <h4>Mantenimiento y Jardinería</h4>
                        <p>
                          Servicio de <strong>mantenimiento y jardinería de espacios verdes</strong> para empresas, urbanizaciones, countries, parques industriales y grandes superficies.
                        </p>
                        <div class="btn-container">
                          <a href="#contact" class="btn-link mt-3">Más Info</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 icon-box" data-aos="fade-up">
                    <div class="icon-text-container d-flex row justify-content-center">
                      <img
                        src="assets/img//proyectos-paisaje-icon-1-1.webp"
                        class="img-fluid"
                        style="width: 160px; height: auto"
                        alt="icono"
                        loading="lazy"
                      />
                      <div class="text-fix-item text-center">
                        <h4>Ejecución de Proyectos de Paisaje</h4>
                        <p>
                          Trabajamos en conjunto con estudios de paisajismo, arquitectura o DDO para la <strong>interpretación y puesta en marcha en la Construcción del Paisaje.</strong>
                        </p>
                        <div class="btn-container">
                          <a href="#contact" class="btn-link mt-3">Más Info</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 icon-box" data-aos="fade-up">
                    <div class="icon-text-container d-flex row justify-content-center">
                      <img
                        src="assets/img/sistemas-riego-icon-1.webp"
                        class="img-fluid"
                        style="width: 160px; height: auto"
                        alt="icono"
                        loading="lazy"
                      />
                      <div class="text-fix-item text-center">
                        <h4>Sistemas de Riego</h4>
                        <p>
                          Realizamos el <strong>diseño, provisión e instalación de sistemas de riego automatizados</strong> para pequeñas y grandes superficies.
                        </p>
                        <div class="btn-container">
                          <a href="#contact" class="btn-link mt-3">Más Info</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 icon-box" data-aos="fade-up">
                    <div class="icon-text-container d-flex row justify-content-center">
                      <img
                        src="assets/img/provision-personal-icon-1.webp"
                        class="img-fluid"
                        style="width: 160px; height: auto"
                        alt="icono"
                        loading="lazy"
                      />
                      <div class="text-fix-item text-center">
                        <h4>Provisión de Personal</h4>
                        <p>
                          Servicio de <strong>ayudas de gremio y cuadrillas especializadas</strong> para tareas de temporada y obras en superficies deportivas.
                        </p>
                        <div class="btn-container">
                          <a href="#contact" class="btn-link mt-3">Más Info</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section>      

     <!-- ======= App Testimony Section ======= -->
     <section id="testimony" class="testimony">
      <div class="container">
        <div class="section-title-testimony text-center">
          <h2>Casos de <span>éxito</span>, clientes <span>felices!</span></h2>
          <div class="divider"></div>
        </div>
        <div class="row no-gutters">
          <!-- Primer bloque: Imagen a la izquierda, texto a la derecha -->
          <div class="col-md-12 d-flex align-items-center flex-column flex-md-row">
            <div class="col-md-6 order-0">
              <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <!-- Imagen 1 -->
                  <div class="carousel-item active">
                    <img src="assets/img/sliders/turftype-mercadolibre-01.jpg" class="d-block w-100" alt="Imagen Mercadolibre 1" loading="lazy">
                  </div>
                  <!-- Imagen 2 -->
                  <div class="carousel-item">
                    <img src="assets/img/sliders/turftype-mercadolibre-02.jpg" class="d-block w-100" alt="Imagen Mercadolibre 2" loading="lazy">
                  </div>
                  <!-- Imagen 3 -->
                  <div class="carousel-item">
                    <img src="assets/img/sliders/turftype-mercadolibre-03.jpg" class="d-block w-100" alt="Imagen Mercadolibre 3" loading="lazy">
                  </div>
                </div>
                <!-- Flechas de navegación -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Siguiente</span>
                </button>
              </div>              
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center text-center ps-md-4 order-0 order-md-1 mt-4 mt-md-0">
              <h5>Mercado Libre Tesla</h5>
              <p>
                Ejecución de Proyecto de Paisaje llevado adelante para el Estudio de Paula de Elía y Milagros Irastorza, con el Diseño del Estudio Bulla. Construcción de terraza verde y diferentes estructuras de canteros y macetas en los diferentes pisos de las Oficinas de Mercado Libre en Parque Patricios.
              </p>
              <div class="btn-container">
                <a href="#contact" class="btn-link mt-3">Más Info</a>
              </div>
            </div>
          </div>          
          <!-- Segundo bloque: Imagen a la derecha, texto a la izquierda -->
          <div class="col-md-12 d-flex align-items-center mb-md-5 flex-column flex-md-row">
            <div class="col-md-6 order-0 order-md-2">
              <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <!-- Imagen 1 -->
                  <div class="carousel-item active">
                    <img src="assets/img/sliders/turftype-anima-01.jpg" class="d-block w-100" alt="Imagen Ánima 1" loading="lazy">
                  </div>
                  <!-- Imagen 2 -->
                  <div class="carousel-item">
                    <img src="assets/img/sliders/turftype-anima-02.jpg" class="d-block w-100" alt="Imagen Ánima 2" loading="lazy">
                  </div>                  
                </div>
                <!-- Flechas de navegación -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Siguiente</span>
                </button>
              </div> 
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center text-center pe-md-4 order-1 order-md-1 mt-4 mt-md-5">
              <h5>Ánima</h5>
              <p>
                Servicio de construcción de terrazas verdes por unidad funcional, con el diseño de Estudio Bulla.
              </p>
              <div class="btn-container">
                <a href="#contact" class="btn-link mt-3">Más Info</a>
              </div>
            </div>
          </div>          
        </div>
      </div>
    </section>
    
    <section id="testimony" class="testimony">
      <div class="container">
        <div class="section-title-testimony text-center">
          <h2><span>Clientes satisfechos.</span><br>Confiaron y confían en nosotros: </h2>
          <div class="divider"></div>
          <div class="container">
            <div class="row">
              <!-- Primera fila: 4 imágenes -->
              <div class="col-md-3 d-flex justify-content-center mb-4">
                <img src="assets/img/turftype-clientes_mercado-libre.webp" class="img-fluid" alt="Ejecución de Proyectos de Paisaje. Servicio de Mantenimiento." loading="lazy">
              </div>
              <div class="col-md-3 d-flex justify-content-center mb-4">
                <img src="assets/img/turftype-clientes_experta.webp" class="img-fluid" alt="Construcción de terraza verde. Mantenimiento y mejoramiento de jardín vertical." loading="lazy">
              </div>
              <div class="col-md-3 d-flex justify-content-center mb-4">
                <img src="assets/img/turftype-clientes_bricons.webp" class="img-fluid" alt="Servicio de Corte Mensual." loading="lazy">
              </div>
              <div class="col-md-3 d-flex justify-content-center mb-4">
                <img src="assets/img/turftype-clientes_mirabosques.webp" class="img-fluid" alt="Corte y mantenimiento de espacios verdes." loading="lazy">
              </div>
            </div>          
            <div class="row justify-content-center">
              <!-- Segunda fila: 3 imágenes centradas -->
              <div class="col-md-3 d-flex justify-content-center mb-4">
                <img src="assets/img/turftype-clientes_go-team-pilar.webp" class="img-fluid" alt="Corte mensual." loading="lazy">
              </div>
              <div class="col-md-3 d-flex justify-content-center mb-4">
                <img src="assets/img/turftype-clientes_club-nautico-san-isidro.webp" class="img-fluid" alt="Construcción de senderos intertrabados. Ejecución de Proyectos de Paisaje. Personal Eventual para el Golf. Construcción de Drenajes, Nivelaciónes y Colocación de Carpetas de Césped en Cancha de Golf." loading="lazy">
              </div>
              <div class="col-md-3 d-flex justify-content-center mb-4">
                <img src="assets/img/turftype-clientes_pilara.webp" class="img-fluid" alt="Mantenimiento mensual en espacios verdes y mejora del paisaje." loading="lazy">
              </div>
            </div>
          </div>
          <div id="carouselExampleControls3" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <!-- Imagen 1 -->
              <div class="carousel-item active">
                <img src="assets/img/sliders/turftype-casos-01.jpg" class="d-block w-100" alt="Imagen casos 1" loading="lazy">
              </div>
              <!-- Imagen 2 -->
              <div class="carousel-item">
                <img src="assets/img/sliders/turftype-casos-02.jpg" class="d-block w-100" alt="Imagen casos 2" loading="lazy">
              </div>
              <!-- Imagen 3 -->
              <div class="carousel-item">
                <img src="assets/img/sliders/turftype-casos-03.jpg" class="d-block w-100" alt="Imagen casos 3" loading="lazy">
              </div> 
              <!-- Imagen 4 -->
              <div class="carousel-item">
                <img src="assets/img/sliders/turftype-casos-04.jpg" class="d-block w-100" alt="Imagen casos 4" loading="lazy">
              </div> 
              <!-- Imagen 5 -->
              <div class="carousel-item">
                <img src="assets/img/sliders/turftype-casos-05.jpg" class="d-block w-100" alt="Imagen casos 5" loading="lazy">
              </div> 
              <!-- Imagen 6 -->
              <div class="carousel-item">
                <img src="assets/img/sliders/turftype-casos-06.jpg" class="d-block w-100" alt="Imagen casos 6" loading="lazy">
              </div>                   
            </div>
            <!-- Flechas de navegación -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Siguiente</span>
            </button>
          </div>           
        </div>
      </div>
    </section>

      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact d-flex justify-content-center">
        <div class="container">
          <!-- Título centrado -->
          <div class="row">
            <div class="col-12">
              <h2>
                <span class="hablemos">Hablemos </span><span>de sus Espacios Verdes.</span><br />
                ¡Será un placer asesorarlos!
              </h2>
              <div class="divider mx-auto"></div>
            </div>
          </div>
      
          <!-- Formulario y contacto -->
          <div class="row justify-content-center" data-aos="fade-up">
            <!-- Columna con la imagen y los párrafos -->
            <div class="col-lg-6 d-flex flex-column align-items-center text-center my-5 order-1 order-md-0">
              <img
                src="assets/img/turftype-espacios-verdes.webp"
                alt="Logo de Turftype espacios verdes"
                class="img-fluid w-25 mb-3"
                loading="lazy"
              />
              <span>Asesoramiento Experto</span>
              <p>011 5111-6776</p>
              <p class="reduce-space">Los Plátanos 1823, La Lonja,</p>
              <p class="reduce-space">Pilar, Buenos Aires</p>
              <a href="https://www.instagram.com/turftype"><svg class="mt-3" style="width: 80px;" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z" fill="#9cf36e"></path> <path d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z" fill="#9cf36e"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M1.65396 4.27606C1 5.55953 1 7.23969 1 10.6V13.4C1 16.7603 1 18.4405 1.65396 19.7239C2.2292 20.8529 3.14708 21.7708 4.27606 22.346C5.55953 23 7.23969 23 10.6 23H13.4C16.7603 23 18.4405 23 19.7239 22.346C20.8529 21.7708 21.7708 20.8529 22.346 19.7239C23 18.4405 23 16.7603 23 13.4V10.6C23 7.23969 23 5.55953 22.346 4.27606C21.7708 3.14708 20.8529 2.2292 19.7239 1.65396C18.4405 1 16.7603 1 13.4 1H10.6C7.23969 1 5.55953 1 4.27606 1.65396C3.14708 2.2292 2.2292 3.14708 1.65396 4.27606ZM13.4 3H10.6C8.88684 3 7.72225 3.00156 6.82208 3.0751C5.94524 3.14674 5.49684 3.27659 5.18404 3.43597C4.43139 3.81947 3.81947 4.43139 3.43597 5.18404C3.27659 5.49684 3.14674 5.94524 3.0751 6.82208C3.00156 7.72225 3 8.88684 3 10.6V13.4C3 15.1132 3.00156 16.2777 3.0751 17.1779C3.14674 18.0548 3.27659 18.5032 3.43597 18.816C3.81947 19.5686 4.43139 20.1805 5.18404 20.564C5.49684 20.7234 5.94524 20.8533 6.82208 20.9249C7.72225 20.9984 8.88684 21 10.6 21H13.4C15.1132 21 16.2777 20.9984 17.1779 20.9249C18.0548 20.8533 18.5032 20.7234 18.816 20.564C19.5686 20.1805 20.1805 19.5686 20.564 18.816C20.7234 18.5032 20.8533 18.0548 20.9249 17.1779C20.9984 16.2777 21 15.1132 21 13.4V10.6C21 8.88684 20.9984 7.72225 20.9249 6.82208C20.8533 5.94524 20.7234 5.49684 20.564 5.18404C20.1805 4.43139 19.5686 3.81947 18.816 3.43597C18.5032 3.27659 18.0548 3.14674 17.1779 3.0751C16.2777 3.00156 15.1132 3 13.4 3Z" fill="#9cf36e"></path> </g></svg></a>
            </div>
      
            <!-- Columna con el formulario -->
            <div class="col-lg-6 order-0 order-md-1">
              <p>
                Solicitamos unos pocos datos de contacto y un <span>especialista</span> se comunicará a la mayor brevedad posible.
              </p>
              <div class="col-lg-12">
                <form
                  action="forms/contact.php"
                  method="post"
                  role="form"
                  class="php-email-form"
                  data-aos="fade-up"
                >
                  <div class="form-group">
                    <input
                      placeholder="Nombre *"
                      type="text"
                      name="name"
                      class="form-control"
                      id="name"
                      required
                    />
                  </div>
                  <div class="form-group mt-3">
                    <input
                      placeholder="Teléfono de Contacto *"
                      type="phone"
                      class="form-control"
                      name="phone"
                      id="phone"
                      required
                    />
                  </div>
                  <div class="form-group mt-3">
                    <input
                      placeholder="Empresa"
                      type="text"
                      class="form-control"
                      name="company"
                      id="company"
                    />
                  </div>
                  <div class="form-group mt-3">
                    <input
                      placeholder="Provincia"
                      type="text"
                      class="form-control"
                      name="province"
                      id="province"
                    />
                  </div>
                  <div class="form-group mt-3">
                    <textarea
                      placeholder="Comentarios"
                      class="form-control"
                      name="message"
                      rows="5"
                    ></textarea>
                  </div>
                  <!-- Pregunta matemática -->
                  <?php
                  echo '<div class="form-group mt-3">';
                  echo '<p>Verifiquemos que no eres un robot 🤖:</p>';
                  echo '<label for="math-captcha">¿Cuánto es ' . $_SESSION['num1'] . ' + ' . $_SESSION['num2'] . '?</label>';
                  echo '<input
                          type="text"
                          id="math-captcha"
                          name="math-captcha"
                          class="form-control"
                          placeholder="Escribe la respuesta"
                          required
                        />';
                  echo '</div>';
                  ?>
                  <div class="my-3">
                    <div class="loading">Enviando...</div>
                    <div class="error-message"></div>
                    <div class="sent-message">
                      Tu mensaje ha sido enviado. Gracias!
                    </div>
                  </div>
                  <div class="text-center mt-3">
                    <button class="btn-link" type="submit">Enviar</button>
                  </div>
                </form>                
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact Section -->
      <!-- WhatsApp Button -->
       
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="container">
        <div class="row d-flex align-items-center justify-content-between">          
          <div
            class="col-12 d-flex justify-content-center text-center"
          >
            <p class="pb-2 pt-2 pb-md-0 pt-md-0 copyright">
              TURFTYPE ESPACIOS VERDES © 2024. Todos los derechos reservados.
            </p>
          </div>          
        </div>
      </div>      
    </footer>
    <!-- End Footer -->
    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <a id="whatsapp-button" class="whatsapp-button" href="https://api.whatsapp.com/send?phone=+541151116776&text=Hola,%20necesito%20asesorameinto%20especializado%20en%20jardiner%C3%ADa..." target="_blank">
      <img src="assets/img/whatsapp-logo.svg" alt="WhatsApp" loading="lazy">
  </a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

  
  <!-- Conversión de Botón de WhatsApp -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const whatsappButton = document.getElementById('whatsapp-button');
      if (whatsappButton) {
        whatsappButton.addEventListener('click', function() {
          gtag('event', 'conversion', {'send_to': 'AW-11407146291/hN2pCJqvh9EZELP6rL8q'});
        });
      }
    });
  </script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
