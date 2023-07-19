$(document).ready(function () {
    new Swiper(".mySwiper", {
        loop: true,
        // autoplay: {
        //   delay: 2000,
        //   disableOnInteraction: false,
        // },
        slidesPerView: "auto",
        cssMode: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        mousewheel: true,
        keyboard: true,
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            480: {
                slidesPerView: 3,
                spaceBetween: 60,
            },
            640: {
                slidesPerView: 3,
                spaceBetween: 80,
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 80,
            },
        },
    });

    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $("#inscripcionForm").on("submit", function (e) {
        e.preventDefault();
        var form = $(this).serialize();
        var url = $(this).attr("action");

        Swal.fire({
            title: '<h1 style="font-family: Anton; text-transform: uppercase; font-style: italic;">Enviar inscripción</h1>',
            html: '<p style="font-family: Open Sans">¿Estás seguro que tus datos son correctos?</p>',
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: '<a style="font-family: Open Sans">Enviar</a>',
            // confirmButtonColor: "#8BC53E",
            cancelButtonText: '<a style="font-family: Open Sans">Cancelar</a>',
            cancelButtonColor: "#dc3545",
        }).then((result) => {
            if (result.value) {
                Swal.fire({
                    title: '<h1 style="font-family: Anton; text-transform: uppercase; font-style: italic;">Enviando solicitud, espera...</h1>',
                    allowEscapeKey: false,
                    allowOutsideClick: false,
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading()
                    },
                });

                $.ajax({
                    type: "POST",
                    url: url,
                    data: new FormData(this),
                    dataType: "json",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function () {
                        $("#registerModal").modal("hide");
                        $("#inscripcionForm")[0].reset();
                        $("#contInvitados").empty();
                        Swal.fire({
                            icon: "success",
                            title: '<h1 style="font-family: Anton; text-transform: uppercase; font-style: italic;">Inscripción hecha</h1>',
                            html: '<p style="font-family: Open Sans">Revisa tu correo electrónico para que realices el pago de la inscripción y lo confirmes respondiendo el correo.</p>',
                            confirmButtonText:
                                '<a style="font-family: Open Sans">Aceptar</a>',
                            // confirmButtonColor: "#8BC53E",
                        });
                    },
                    error: function () {
                        // $("#mensajeForm")[0].reset();
                        Swal.fire({
                            icon: "error",
                            title: '<h1 style="font-family: Anton; text-transform: uppercase; font-style: italic;">No se pudo enviar el mensaje</h1>',
                            html: '<p style="font-family: Open Sans">Lo sentimos, ocurrió un error al enviar tu solicitud</p>',
                            confirmButtonText:
                                '<a style="font-family: Open Sans">Aceptar</a>',
                            // confirmButtonColor: "#8BC53E",
                        });
                    },
                });
            } else {
                Swal.fire({
                    icon: "error",
                    title: '<h1 style="font-family: Anton; text-transform: uppercase; font-style: italic;">Cancelado</h1>',
                    html: '<p style="font-family: Open Sans">La inscripción no se ha realizado</p>',
                    confirmButtonText:
                        '<a style="font-family: Open Sans">Aceptar</a>',
                    confirmButtonColor: "#8BC53E",
                });
            }
        });
    });

    $("#invitadoInput").change(function () {
        $("#contInvitados").empty();

        var costoInvitados = 0;

        var invitados = $("#invitadoInput").val();

        for (var i = 0; i < invitados; i++) {
            costoInvitados += 2200;
        }

        let formatPesos = Intl.NumberFormat("es-MX");

        if (invitados != "") {
            if (invitados <= 1) {
                $("#contInvitados").append(`          
                <div class="col-12">
                <div class="alert alert-primary-modal d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2 mr-2" width="24" height="24" role="img" aria-label="Info:">
                  <use xlink:href="#info-fill" />
                </svg>
                <div>
                  AVISO: El costo extra por ${invitados} invitado será de $${formatPesos.format(
                    costoInvitados
                )}.00.
                </div>
              </div>
              </div>
              `);
            } else {
                $("#contInvitados").append(`          
                <div class="col-12">
                <div class="alert alert-primary-modal d-flex align-items-center" role="alert">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-info-circle mx-2" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
</svg
<div>
                  AVISO: El costo extra por ${invitados} invitados será de $${formatPesos.format(
                    costoInvitados
                )}.00.
                </div>
              </div>
              </div>
              `);
            }

            for (var i = 0; i < invitados; i++) {
                $("#contInvitados").append(`             
                 <div class="col-12">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" title="Campo obligatorio / Solo letras" minlength="3"
                    maxlength="75" pattern="[a-zA-Zá-úÁ-Ú ]+" placeholder="Ingresa el nombre" id="invitado${i + 1}Input"
                    name="invitado${i + 1}" required>
                  <label for="invitado${i + 1}Input">Nombre completo del invitado ${
                      i + 1
                  }</label>
                </div>
              </div>`);
            }
        }
    });
});
