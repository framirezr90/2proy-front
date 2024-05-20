var myCarousel = document.querySelector('#doubleCarousel');
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 3000, // Ajusta el intervalo (en milisegundos) para controlar la velocidad del carrusel
        ride: 'carousel'
    });



    /**=================Modo Oscuro=============================== */

    document.addEventListener("DOMContentLoaded", () => {
        const toggleButton = document.getElementById("toggle-dark-mode");
        const moonIcon = document.getElementById("icon-moon");
        const header = document.querySelector("header");
        const servicesSection = document.getElementById("services");
        const historySection = document.getElementById("history");


    
        // Verificar el modo guardado en localStorage
        if (localStorage.getItem("darkMode") === "enabled") {
            document.body.classList.add("dark-mode");
            moonIcon.classList.remove("fa-moon");
            moonIcon.classList.add("fa-sun");
            header.classList.add("dark-mode"); // Agregar la clase de modo oscuro al header
            servicesSection.classList.add("dark-mode"); // Agregar la clase de modo oscuro a Nuestros Servicios
            historySection.classList.add("dark-mode"); // Agregar la clase de modo oscuro a Historia
        }
    
        toggleButton.addEventListener("click", () => {
            document.body.classList.toggle("dark-mode");
    
            if (document.body.classList.contains("dark-mode")) {
                moonIcon.classList.remove("fa-moon");
                moonIcon.classList.add("fa-sun");
                localStorage.setItem("darkMode", "enabled");
                header.classList.add("dark-mode"); // Agregar la clase de modo oscuro al header
                servicesSection.classList.add("dark-mode"); // Agregar la clase de modo oscuro a Nuestros Servicios
                historySection.classList.add("dark-mode"); // Agregar la clase de modo oscuro a Historia
            } else {
                moonIcon.classList.remove("fa-sun");
                moonIcon.classList.add("fa-moon");
                localStorage.setItem("darkMode", "disabled");
                header.classList.remove("dark-mode"); // Remover la clase de modo oscuro del header
                servicesSection.classList.remove("dark-mode"); // Remover la clase de modo oscuro de Nuestros Servicios
                historySection.classList.remove("dark-mode"); // Remover la clase de modo oscuro de Historia
            }
        });
    });
    
    
    


 /**formulario  */


    // Función para validar el formulario y mostrar el modal
    document.getElementById('contact-form').addEventListener('submit', function(event) {
        event.preventDefault();

        const modalMessage = 'Mensaje enviado exitosamente';

        document.getElementById('modal-message').innerText = modalMessage;
        document.getElementById('modal-overlay').style.display = 'block';
        document.getElementById('modal').style.display = 'block';
    });

    document.getElementById('modal-close').addEventListener('click', function() {
        document.getElementById('modal-overlay').style.display = 'none';
        document.getElementById('modal').style.display = 'none';
        location.reload(); // Recargar la página
    });

    document.getElementById('terms-link').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('terms-overlay').style.display = 'block';
        document.getElementById('terms-modal').style.display = 'block';
    });

    document.getElementById('terms-close').addEventListener('click', function() {
        document.getElementById('terms-overlay').style.display = 'none';
        document.getElementById('terms-modal').style.display = 'none';
    });

/* Voy a revisar algo  */
document.addEventListener('DOMContentLoaded', function () {
    // Agregar clase visible después de un pequeño retraso
    setTimeout(function() {
        document.getElementById('teamSection').classList.add('visible');
    }, 100);

    var teamMembers = document.querySelectorAll('.team-member');
    teamMembers.forEach(function (member) {
        member.addEventListener('mouseenter', function () {
            this.querySelector('img').style.transform = 'scale(1.1)';
        });
        member.addEventListener('mouseleave', function () {
            this.querySelector('img').style.transform = 'scale(1)';
        });
    });
});