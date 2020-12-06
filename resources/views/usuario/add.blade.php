<x-app-layout>
</x-app-layout>
<div class="col-md-8">
    <div class="row justify-content-center mx-auto">
        <div class="card text-white bg-dark border-light mb-2" style="width: 24rem;">
            <div class="card-header text-center">
                <h5>Nuevos Usuarios</h5>
            </div>
            <div class="card-body">
                <form action="/usuario/store" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="input-group form-group justify-content-center">
                        <input type="file" name="fotografia" placeholder = "Fotografia" accept="image/*" class="form-control">
                        <div class="input-group-prepend">
                            <span class="input-group-text justify-content-center"><i class="fa fa-user"></i></span>
                        </div>
                    </div>
                    <div class="input-group form-group justify-content-center">
                        <input type="text" name="nombre" placeholder = "Nombre" class="form-control" required>
                        <div class="input-group-prepend">
                            <span class="input-group-text justify-content-center"><i class="fa fa-user"></i></span>
                        </div>
                    </div>
                    <div class="input-group form-group justify-content-center">
                        <input type="text" name="apPaterno" placeholder = "Apellido Paterno" class="form-control" required>
                        <div class="input-group-prepend">
                            <span class="input-group-text justify-content-center"><i class="fa fa-user"></i></span>
                        </div>
                    </div>
                    <div class="input-group form-group justify-content-center">
                        <input type="text" name="apMaterno" placeholder = "Apellido Materno" class="form-control">
                        <div class="input-group-prepend">
                            <span class="input-group-text justify-content-center"><i class="fa fa-user"></i></span>
                        </div>
                    </div>
                    <div class="input-group form-group justify-content-center">
                        <input type="text" name="usuario" placeholder = "Usuario" class="form-control" required>
                        <div class="input-group-prepend">
                            <span class="input-group-text justify-content-center"><i class="fa fa-user"></i></span>
                        </div>
                    </div>
                    <div class="input-group form-group justify-content-center">
                        <select class="custom-select form-control font-weight-bold text-dark" id = "tipo" name="tipo" required>
                            <option selected>Residente</option>
                            <option>Cajero</option>
                            <option>Jefe</option>
                            <option>Gerente</option>
                            <option>Corporativo</option>
                        </select>
                        <div class="input-group-prepend">
                            <span class="input-group-text justify-content-center"><i class="fas fa-tasks"></i></span>
                        </div>
                    </div>
                    <div class="input-group form-group justify-content-center">
                        <input class="form-check form-check-inline" type="radio" name="estatus" value="activo" checked>
                        <label class="form-check-label mr-md-3">
                            Activo
                        </label>
                        <input class="form-check form-check-inline" type="radio" name="estatus" value="inactivo">
                        <label class="form-check-label">
                            Inactivo
                        </label>
                    </div>
                    <div class="input-group form-group justify-content-center">
                        <input type="number" name="noReferencia" placeholder = "No. de referencia" class="form-control">
                        <div class="input-group-prepend">
                            <span class="input-group-text justify-content-center"><i class="fa fa-user"></i></span>
                        </div>
                    </div>
                    <div class="input-group form-group justify-content-center">
                        <input type="text" name="gallardete" placeholder = "Gallardete" class="form-control" maxlength="30">
                        <div class="input-group-prepend">
                            <span class="input-group-text justify-content-center"><i class="fa fa-user"></i></span>
                        </div>
                    </div>
                    <input class="form-control" type="hidden" name="saldoxAplicar" value=0.00 required/>
                    <div class="input-group form-group justify-content-center">
                        <input type="text" name="telefono" placeholder = "Tel. a 10 dígitos" class="form-control" maxlength="10">
                        <div class="input-group-prepend">
                            <span class="input-group-text justify-content-center"><i class="fa fa-user"></i></span>
                        </div>
                    </div>
                    <div class="input-group form-group justify-content-center">
                        <input type="email" name="correo" placeholder = "Correo electrónico" class="form-control">
                        <div class="input-group-prepend">
                            <span class="input-group-text justify-content-center"><i class="fa fa-user"></i></span>
                        </div>
                    </div>                    
                    <div class="input-group form-group justify-content-center">
                        <input type="password" name="password" placeholder = "Contraseña" class = "form-control" required>
                        <div class="input-group-prepend">
                            <span class="input-group-text justify-content-center"><i class="fas fa-key"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-warning font-weight-bold">
                            DAR DE ALTA
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
@include('partials.footer')