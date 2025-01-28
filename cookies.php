<!-- Modal inicial (pequeño, parte inferior) -->
<div id="cookie-modal" class="modal fade" tabindex="-1" aria-labelledby="cookieModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cookieModalLabel">Valoramos tu privacidad</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>
                    Usamos cookies para mejorar tu experiencia de navegación, mostrarte anuncios personalizados y analizar nuestro tráfico. Puedes personalizar tus preferencias.
                </p>
                <div class="text-center">
                    <button class="btn btn-primary w-100 mb-2" id="accept-all">Aceptar todo</button>
                    <button class="btn btn-outline-secondary w-100 mb-2" id="reject-all">Rechazar todo</button>
                    <button class="btn btn-link" id="customize-preferences">Personalizar preferencias</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal completo para personalizar preferencias -->
<div id="cookie-preferences-modal" class="modal fade" tabindex="-1" aria-labelledby="preferencesModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="preferencesModalLabel">Personalizar las preferencias de consentimiento</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>
                    Usamos cookies para ayudarte a navegar de manera eficiente y realizar ciertas funciones. Aquí puedes gestionar las categorías de cookies que deseas permitir:
                </p>

                <!-- Categoría: Necesarias -->
                <div class="mb-3">
                    <h6>Necesarias <span class="text-success">Siempre activas</span></h6>
                    <p>Estas cookies son esenciales para el funcionamiento básico del sitio y no pueden desactivarse.</p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <!-- Categoría: Funcionales -->
                        <div class="mb-3">
                            <h6>Funcionales</h6>
                            <p>Estas cookies permiten funcionalidades como compartir contenido en redes sociales.</p>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="functional-cookies">
                                <label class="form-check-label" for="functional-cookies">Activar cookies funcionales</label>
                            </div>
                        </div>

                        <!-- Categoría: Analíticas -->
                        <div class="mb-3">
                            <h6>Analíticas</h6>
                            <p>Estas cookies nos ayudan a entender cómo interactúan los usuarios con el sitio web.</p>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="analytics-cookies">
                                <label class="form-check-label" for="analytics-cookies">Activar cookies analíticas</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <!-- Categoría: Rendimiento -->
                        <div class="mb-3">
                            <h6>Rendimiento</h6>
                            <p>Estas cookies mejoran el rendimiento del sitio web al optimizar recursos y tiempos de carga.</p>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="performance-cookies">
                                <label class="form-check-label" for="performance-cookies">Activar cookies de rendimiento</label>
                            </div>
                        </div>

                        <!-- Categoría: Anuncios -->
                        <div class="mb-3">
                            <h6>Anuncios</h6>
                            <p>Estas cookies muestran anuncios personalizados basados en tus intereses.</p>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="ads-cookies">
                                <label class="form-check-label" for="ads-cookies">Activar cookies de anuncios</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-outline-secondary" id="reject-custom">Rechazar todo</button>
                <button class="btn btn-primary" id="save-preferences">Guardar mis preferencias</button>
            </div>
        </div>
    </div>
</div>

<!-- <script>
document.addEventListener("DOMContentLoaded", function () {
    const cookieModal = new bootstrap.Modal(document.getElementById("cookie-modal"));
    const preferencesModal = new bootstrap.Modal(document.getElementById("cookie-preferences-modal"));

    // Mostrar modal si no hay preferencias guardadas
    if (!getCookie("cookiePreferences")) {
        cookieModal.show();
    }

    // Función para establecer cookies
    function setCookie(name, value, days) {
        const date = new Date();
        date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
        document.cookie = `${name}=${value}; expires=${date.toUTCString()}; path=/`;
    }

    // Función para obtener cookies
    function getCookie(name) {
        const cookies = document.cookie.split("; ");
        for (let cookie of cookies) {
            const [key, value] = cookie.split("=");
            if (key === name) return value;
        }
        return null;
    }

    // Botón "Aceptar todo"
    document.getElementById("accept-all").addEventListener("click", function () {
        const preferences = {
            functional: true,
            analytics: true,
            performance: true,
            ads: true,
        };
        setCookie("cookiePreferences", JSON.stringify(preferences), 365);
        alert("Has aceptado todas las cookies.");
        cookieModal.hide();
    });

    // Botón "Rechazar todo"
    document.getElementById("reject-all").addEventListener("click", function () {
        const preferences = {
            functional: false,
            analytics: false,
            performance: false,
            ads: false,
        };
        setCookie("cookiePreferences", JSON.stringify(preferences), 365);
        alert("Has rechazado todas las cookies.");
        cookieModal.hide();
    });

    // Botón "Personalizar preferencias"
    document.getElementById("customize-preferences").addEventListener("click", function () {
        cookieModal.hide();
        preferencesModal.show();
    });

    // Guardar preferencias personalizadas
    document.getElementById("save-preferences").addEventListener("click", function () {
        const preferences = {
            functional: document.getElementById("functional-cookies").checked,
            analytics: document.getElementById("analytics-cookies").checked,
            performance: document.getElementById("performance-cookies").checked,
            ads: document.getElementById("ads-cookies").checked,
        };
        setCookie("cookiePreferences", JSON.stringify(preferences), 365);
        alert("Tus preferencias han sido guardadas.");
        preferencesModal.hide();
    });

    // Rechazar todas desde el modal de preferencias
    document.getElementById("reject-custom").addEventListener("click", function () {
        const preferences = {
            functional: false,
            analytics: false,
            performance: false,
            ads: false,
        };
        setCookie("cookiePreferences", JSON.stringify(preferences), 365);
        alert("Has rechazado todas las cookies.");
        preferencesModal.hide();
    });
});
</script>  -->
