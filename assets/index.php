<!DOCTYPE html>
<html lang="en">
<head>  
<!-- Viewport meta tag -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Bootstrap CSS from jsDelivr -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<!-- Font Awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/footer.css">


<body>
<button id="toggle-dark-mode">Cambiar a modo hola</button>
    
<header>
        <div class="logo">
            <img src="img/new-logo.png" alt="Logo Empesa">
        </div>
        <nav>
            <ul>
                <li><a href="#start">Inicio</a></li>
                <li><a href="#services">Servicios</a></li>
                <li><a href="#gallery">Galeria</a></li>
                <li><a href="#contact us">Contactanos</a></li>
                <li><a href="#faq">FAQ</a></li>
            </ul>
        </nav>
</header>

   
<main>
    

        <!-- Container  Carrusel-->
    <section id="start">
      <div id="doubleCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-6">
                        <div class="p-3 text-center">
                            <h2> Quienes Somos </h2>
                              <div>
                                <p>Bienvenido a Energy and Water SpA, empresa dedicada a la instalación y reparación de sistemas de
                        ventilación, calefacción, electricidad y construcción. Contamos con un equipo de profesionales
                        altamente cualificados y con amplia experiencia en el sector. Ofrecemos soluciones a medida para
                        cada cliente, garantizando la calidad y la seguridad de nuestros servicios. Contacta con nosotros y
                        solicita tu presupuesto sin compromiso.</p>
                              </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 text-center">
                            
                            <img src="img/img8.jpg" class="img-fluid" alt="Imagen 2">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-6">
                        <div class="p-3 text-center">
                           
                            <img src="img/img3.jpg" class="img-fluid" alt="Imagen 3">
                            
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 text-center">
                            <h2>Nuestra Visión</h2>
                            
                            <p>Es satisfacer las necesidades de
                            nuestros clientes con eficiencia, rapidez y profesionalidad. Nuestra visión es ser la empresa
                            referente en el mercado por nuestra excelencia y compromiso. Nuestros valores son la honestidad, la
                            responsabilidad, el respeto y la innovación.</p>
                            </div>
                    </div>
                </div>
            </div>
            
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#doubleCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#doubleCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
     </div>
     </section>
      <div class="content">

           <!--Servicios-->
   <section id="services">
    <div class="container">
        <h2 class="text-center mb-5">Nuestros Servicios</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="service-item">
                    <i class="fas fa-snowflake"></i>
                    <h3>Aire Acondicionado</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum varius lacus eget libero fringilla.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-item">
                    <i class="fas fa-fire" style="color:#D35400" ></i>
                    <h3>Sala de Calderas</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum varius lacus eget libero fringilla.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-item">
                    <i class="fas fa-bolt" style="color:#F4D03F" ></i>
                    <h3>Grupo Electrógeno</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum varius lacus eget libero fringilla.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-item">
                    <i class="fas fa-tint"  ></i>
                    <h3>Sala de Bombas</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum varius lacus eget libero fringilla.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Galeria de imagenes -->
<section id="gallery">
    <div class="container" id="Galería">
        <h2 class="text-center mb-5">Galería de Imágenes</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="gallery-item">
                    <img src="img/hero1.jpg" alt="Imagen 1" class="img-gallery" >
                    <div class="gallery-overlay">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gallery-item">
                    <img src="img/45.jpg" alt="Imagen 2" class="img-gallery">
                    <div class="gallery-overlay">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gallery-item">
                    <img src="img/img6.jpg" alt="Imagen 3" class="img-gallery">
                    <div class="gallery-overlay">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="gallery-item">
                    <img src="img/39.jpg" alt="Imagen 4" class="img-gallery">
                    <div class="gallery-overlay">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gallery-item">
                    <img src="img/img10.jpg" alt="Imagen 5" class="img-gallery">
                    <div class="gallery-overlay">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gallery-item">
                    <img src="img/img16.jpg" alt="Imagen 6" class="img-gallery">
                    <div class="gallery-overlay">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
    <section>
       <div id="contact us">
           <h2>Contactanos</h2>
           <p>Si dese contactarnos, por favor, utilice el formular de contacto.</p>
           <h2>FAQ</h2>
           <p>Preguntes aquí algunas preguntas que puede tener en su mente.</p>
      </div>
    </section>
      </main>
   
   

   <!-- Formulario 

   <div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="form-container">
                <h2 class="text-center mb-4">Formulario de Contacto</h2>
                <form id="contactForm" onsubmit="return validarFormulario()">
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Nombre" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Apellido" name="apellido" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Correo Electrónico" name="correo" required>
                    </div>
                    <div class="mb-3">
                        <input type="tel" class="form-control" placeholder="Teléfono" name="telefono" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Dirección" name="direccion" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Asunto" name="asunto">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" rows="4" placeholder="Mensaje (Máximo 1000 caracteres)" name="mensaje" maxlength="1000" required></textarea>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" name="servicio" required>
                            <option value="">Seleccione un Servicio</option>
                            <option value="Mantenimiento aire acondicionado">Mantenimiento aire acondicionado</option>
                            <option value="Mantenimiento sala de calderas">Mantenimiento sala de calderas</option>
                            <option value="Mantenimiento grupo electrogenos">Mantenimiento grupo electrogenos</option>
                            <option value="Mantenimiento sala de Bombas">Mantenimiento sala de Bombas</option>
                        </select>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="terminos" required>
                        <label class="form-check-label" for="terminos">Acepto los <a href="#" data-bs-toggle="modal" data-bs-target="#terminosModal">términos y condiciones</a>.</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="terminosModal" tabindex="-1" aria-labelledby="terminosModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="terminosModalLabel">Términos y Condiciones</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Aquí van los términos y condiciones del servicio.</p>
            </div>
        </div>
    </div>
</div>
-->

<!--Formulario 2-->

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="form-container">
                <h2 class="text-center mb-4">Formulario de Contacto</h2>
                <form id="contactForm">
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Nombre" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Apellido" name="apellido" required>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Correo Electrónico" name="correo" required>
                            <span class="input-group-text"><i id="correoIcon" class="bi"></i></span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="tel" class="form-control" placeholder="Teléfono" name="telefono" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Dirección" name="direccion" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Asunto" name="asunto">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" rows="4" placeholder="Mensaje (Máximo 1000 caracteres)" name="mensaje" maxlength="1000" required></textarea>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" name="servicio" required>
                            <option value="">Seleccione un Servicio</option>
                            <option value="Mantenimiento aire acondicionado">Mantenimiento aire acondicionado</option>
                            <option value="Mantenimiento sala de calderas">Mantenimiento sala de calderas</option>
                            <option value="Mantenimiento grupo electrogenos">Mantenimiento grupo electrogenos</option>
                            <option value="Mantenimiento sala de Bombas">Mantenimiento sala de Bombas</option>
                        </select>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="terminos" required>
                        <label class="form-check-label" for="terminos">Acepto los <a href="#" data-bs-toggle="modal" data-bs-target="#terminosModal">términos y condiciones</a>.</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal de Términos y Condiciones -->
<div class="modal fade" id="terminosModal" tabindex="-1" aria-labelledby="terminosModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="terminosModalLabel">Términos y Condiciones</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Aquí van los términos y condiciones del servicio.</p>
            </div>
        </div>
    </div>
</div>

<!-- Modal de éxito -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Éxito</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Su correo ha sido enviado satisfactoriamente.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>



<!--footer2-->
<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 contact-info">
                    <h4>Contácto</h4>
                    <p><i class="fas fa-map-marker-alt"></i> Manquehue Sur 520, oficina 205, Las Condes</p>
                    <p><i class="fas fa-envelope"></i> contacto@energyandwater.cl</p>
                    <p><i class="fas fa-phone"></i> +56232569798</p>
                </div>
                <div class="col-md-4 social-icons text-center">
                    <h4>Síguenos</h4>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="https://wa.me/56930835203" target="_blank" ><i class="fab fa-whatsapp"></i></a>
                </div>
                <div class="col-md-4 text-center text-md-end">
                    <h4>Sobre Nosotros</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, pulvinar facilisis justo mollis, auctor consequat urna.</p>
                </div>
            </div>
        </div>
    </footer>



    </body>

</html>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>

<!-- Bootstrap Bundle JS (includes Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

<!-- Custom Script -->
<script src="js/script.js"></script>


