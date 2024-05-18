var myCarousel = document.querySelector('#doubleCarousel');
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 3000, // Ajusta el intervalo (en milisegundos) para controlar la velocidad del carrusel
        ride: 'carousel'
    });



    /**=================Modo Oscuro=============================== */

    document.addEventListener("DOMContentLoaded", () => {
        const toggleButton = document.getElementById("toggle-dark-mode");
    
        // Verificar el modo guardado en localStorage
        if (localStorage.getItem("darkMode") === "enabled") {
            document.body.classList.add("dark-mode");
            toggleButton.textContent = "Cambiar a modo claro";
        }
    
        toggleButton.addEventListener("click", () => {
            document.body.classList.toggle("dark-mode");
    
            if (document.body.classList.contains("dark-mode")) {
                toggleButton.textContent = "Cambiar a modo claro";
                localStorage.setItem("darkMode", "enabled");
            } else {
                toggleButton.textContent = "Cambiar a modo oscuro";
                localStorage.setItem("darkMode", "disabled");
            }
        });
    });
    
/*=========================  Formulario  ================================= 
    $(document).ready(function() {
        $('#terminosCheck').on('change', function() {
            $(this).closest('.form-check').toggleClass('is-checked', $(this).is(':checked'));
        });
    });

    function validarFormulario() {
        var form = document.getElementById('contactForm');
        var nombre = form['nombre'].value.trim();
        var apellido = form['apellido'].value.trim();
        var correo = form['correo'].value.trim();
        var telefono = form['telefono'].value.trim();
        var direccion = form['direccion'].value.trim();
        var mensaje = form['mensaje'].value.trim();
        var servicio = form['servicio'].value;
        var terminos = form['terminos'].checked;

        // Validar campos obligatorios
        if (!nombre || !apellido || !correo || !telefono || !direccion || !mensaje || !servicio || !terminos) {
            alert('Por favor, complete todos los campos obligatorios.');
            return false;
        }

        // Validar formato de correo electrónico
        var correoRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!correoRegex.test(correo)) {
            alert('Por favor, ingrese un correo electrónico válido.');
            return false;
        }

        // Validar longitud del teléfono
        if (telefono.length < 8) {
            alert('Por favor, ingrese un número de teléfono válido.');
            return false;
        }

        // Validar longitud del mensaje
        if (mensaje.length > 1000) {
            alert('El mensaje no puede exceder los 1000 caracteres.');
            return false;
        }

        // Todo validado correctamente
        return true;
    }
*/

 /**formulario 2 */


    // Función para validar el formulario y mostrar el modal
    function validarFormulario(event) {
        event.preventDefault(); // Prevenir el envío del formulario por defecto

        var form = document.getElementById('contactForm');
        var nombre = form['nombre'].value.trim();
        var apellido = form['apellido'].value.trim();
        var correo = form['correo'].value.trim();
        var telefono = form['telefono'].value.trim();
        var direccion = form['direccion'].value.trim();
        var mensaje = form['mensaje'].value.trim();
        var servicio = form['servicio'].value;
        var terminos = form['terminos'].checked;

        // Validar campos obligatorios
        if (!nombre || !apellido || !correo || !telefono || !direccion || !mensaje || !servicio || !terminos) {
            alert('Por favor, complete todos los campos obligatorios.');
            return false;
        }

        // Validar formato de correo electrónico
        var correoRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!correoRegex.test(correo)) {
            alert('Por favor, ingrese un correo electrónico válido.');
            return false;
        }

        // Validar longitud del teléfono
        if (telefono.length < 8) {
            alert('Por favor, ingrese un número de teléfono válido.');
            return false;
        }

        // Validar longitud del mensaje
        if (mensaje.length > 1000) {
            alert('El mensaje no puede exceder los 1000 caracteres.');
            return false;
        }

        // Mostrar el modal de éxito
        $('#successModal').modal('show');
        return true;
    }

    $(document).ready(function() {
        $('#contactForm').submit(validarFormulario);
    });

