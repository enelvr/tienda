<div tabindex="-1" class="modal fade" id="add-categoria-modal" ref="add_categoria_modal" aria-hidden="true">
    <div class="modal-dialog" @keydown.enter="createCategoria()">
        <div class="modal-content">
            <div class="modal-header pmd-modal-bordered">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h2 class="pmd-card-title-text">Agregar una Categoria</h2>
            </div>
            <div class="modal-body">
                <div class="form-group form-md-line-input has-info">
                    <label for="form_control">Categoria:</label>
                    <div class="input-icon">
                        <input type="text" class="form-control" name="descripcion" placeholder="Nombre de la Categoria" v-model="newCategoria.descripcion">
                        <div class="form-control-focus"> </div>
                        <span v-if="formErrors['descripcion']" class="help-block">Opss, Ha ocurrido un Error...</span>
                        <i class="fa fa-envelope-o"></i>
                    </div>
                </div>
                <hr>
                <div class="pmd-modal-action">
                    <button class="btn-primary" type="button" @click="createCategoria()">Guardar</button>
                    <button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add Customer Modal End data-dismiss="modal"  -->