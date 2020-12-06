<x-app-layout>
</x-app-layout>
<div class="col-md-8">
    <div class="row justify-content-center mx-auto">
        <div class="card text-white bg-dark border-light mb-2" style="width: 20rem;">
            <div class="card-header text-center">
                <h5>NUEVA QUEJA</h5>
            </div>
            <div class="card-body">
                <form action="/buzon/store" method="post" id ="buzon" enctype="multipart/form-data">
                @csrf
                    <div class="input-group form-group justify-content-center">
                        <div class="input-group-prepend">
                            <span class="input-group-text justify-content-center"><i class="fa fa-minus-square"></i></span>
                        </div>
                        <input type="file" class="form-control font-weight-bold text-dark" name = "imagen" accept="image/*">						
                    </div>
                    <div class="input-group form-group justify-content-right">
                        <div class="input-group-prepend">
                            <span class="input-group-text justify-content-center"><i class="fa fa-calendar"></i></span>
                        </div>
                        <input class = "font-weight-bold text-dark" type="date" name="fecha" id = "fecha_buzon" required readonly>
                    </div>
                    <div class="input-group form-group justify-content-center">
                        <div class="input-group-prepend">
                            <span class="input-group-text justify-content-center"><i class="fa fa-minus-square"></i></span>
                        </div>
                        <input type="text" class="form-control font-weight-bold text-dark" name = "titulo" placeholder="Título" maxLength = "40" required>						
                    </div>
                    <div class="input-group form-group justify-content-center">
                        <div class="input-group-prepend">
                            <span class="input-group-text justify-content-center"><i class="fa fa-minus-square"></i></span>
                        </div>
                        <input type="text" class="form-control font-weight-bold text-dark" name = "descripcion" placeholder="Descripción" maxLength = "100" required>						
                    </div>
                    <input type="hidden" name = "estatus" value = "no visto">	
                    <input type="hidden" name = "usuario_idUsuario" value = "{{ Auth::user()->idUsuario }}">	
                    <div class="form-group mt-4">
                        <button type = "submit" class="btn btn-block btn-warning font-weight-bold">
                            GUARDAR
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
<script>
//Fecha
var n =  new Date();
var y = n.getFullYear() + "-" + (n.getMonth() + 1) + "-" + n.getDate();
document.getElementById('fecha_buzon').value = y;
</script>