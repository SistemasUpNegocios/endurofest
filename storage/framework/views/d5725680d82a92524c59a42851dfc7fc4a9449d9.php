

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar inscripción</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="inscripcionesForm" method="POST">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="id" id="idInput">
            <div class="row">
              <div class="col-12">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" title="Campo obligatorio / Solo letras" minlength="3"
                    maxlength="75" pattern="[a-zA-Zá-úÁ-Ú ]+" placeholder="Ingresa el nombre" id="nombreInput"
                    name="nombre" required>
                  <label for="nombreInput">Nombre completo</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" title="Campo obligatorio / Solo letras" minlength="3"
                    maxlength="75" placeholder="Ingresa el nombre del Motoclub" id="motoclubInput" name="motoclub"
                    required>
                  <label for="motoclubInput">Nombre del Motoclub</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-12">
                <div class="form-floating mb-3">
                  <input type="number" class="form-control" minlength="3" maxlength="10"
                    placeholder="Ingresa el teléfono de contacto" id="telefonoContactoInput" name="telefonocontacto"
                    required>
                  <label for="telefonoContactoInput">Teléfono de contacto</label>
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="form-floating mb-3">
                  <input type="number" class="form-control" minlength="3" maxlength="10"
                    placeholder="Ingresa el teléfono de emergencia" id="telefonoEmergenciaInput"
                    name="telefonoemergencia" required>
                  <label for="telefonoEmergenciaInput">Teléfono de emergencia</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-12">
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" minlength="3" maxlength="75"
                    placeholder="Ingresa tu correo electrónico" id="correoInput" name="correo" required>
                  <label for="correoInput">Correo electrónico</label>
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="form-floating mb-3">
                  <select name="talla" class="form-control" id="tallaInput" required>
                    <option value="" selected>Selecciona..</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                  </select>
                  <label for="tallaInput">Talla del jersey</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-12">
                <div class="form-floating mb-3">
                  <select name="tiposangre" class="form-control" id="tipoSangreInput" required>
                    <option value="" selected>Selecciona..</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                  </select>
                  <label for="tipoSangreInput">Tipo de sangre</label>
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="form-floating mb-3">
                  <input type="date" class="form-control" placeholder="Ingresa tu fecha de nacimiento"
                    id="fechaNacInput" name="fechanac" required>
                  <label for="fechaNacInput">Fecha de nacimiento</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-12">
                <div class="form-floating mb-3">
                  <select class="form-control" id="invitadoInput">
                    <option value="" selected>Ningún invitado</option>
                    <option value="1">1 invitado (+$2,200.00)</option>
                    <option value="2">2 invitados (+$4,400.00)</option>
                    <option value="3">3 invitados (+$6,600.00)</option>
                    <option value="4">4 invitados (+$8,800.00)</option>
                    <option value="5">5 invitados (+$11,000.00)</option>
                  </select>
                  <label for="invitadoInput">¿Llevará invitados? $2,200.00 por c/u</label>
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="form-floating mb-3">
                  <select name="status_pago" class="form-control" id="status_pagoInput" required>
                    <option value="" selected>Selecciona..</option>
                    <option value="Pendiente">Pendiente</option>
                    <option value="Pagado">Pagado</option>
                  </select>
                  <label for="status_pagoInput">Status del pago</label>
                </div>
              </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" id="btnCancel" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-success" id="btnSubmit">Editar inscripcion</button>
        </div>
        </form>
      </div>
    </div>
  </div><?php /**PATH /home2/endurofe/mexiquillazo/resources/views/admin/modal.blade.php ENDPATH**/ ?>