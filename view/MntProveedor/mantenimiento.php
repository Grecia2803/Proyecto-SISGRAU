<div id="modalmantenimiento" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="lbltitulo"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <form method="post" id="mantenimiento_form">
                <div class="modal-body">
                    <input type="hidden" name="prov_id" id="prov_id"/>

                    <div class="row gy-2">
                        <div class="col-md-12">
                            <label for="prov_nom" class="form-label">Nombre Proveedor</label>
                            <input type="text" class="form-control" id="prov_nom" name="prov_nom" required/>
                        </div>

                        <div class="col-md-12">
                            <label for="prov_ruc" class="form-label">RUC</label>
                            <input type="text" class="form-control" id="prov_ruc" name="prov_ruc" required/>
                        </div>

                        <div class="col-md-12">
                            <label for="prov_telefono" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" id="prov_telefono" name="prov_telefono" required/>
                        </div>

                        <div class="col-md-12">
                            <label for="prov_direccion" class="form-label">Dirección</label>
                            <input type="text" class="form-control" id="prov_direccion" name="prov_direccion" required/>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" name="action" value="add" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
