<x-app-layout>
</x-app-layout>
<div class="col-md-8">
    <div class="row justify-content-center mx-auto">
        <div class="card text-white bg-dark border-light mb-2" style="width: 20rem;">
            <div class="card-header text-center">
                <h5>RESPONDIENDO A QUEJA</h5>
            </div>
            <div class="card-body">
                <form action="/buzon/update/{{$queja->idBuzon}}" method="post" id ="buzon" enctype="multipart/form-data">
                @csrf
                    @if($queja->imagen !== '')
                    <img class = "img-responsive w-75" src="img-quejas/{{$queja->imagen}}" alt="queja">
                    @endif
                    <div class="input-group form-group justify-content-right">
                        <div class="input-group-prepend">
                            <span class="input-group-text justify-content-center"><i class="fa fa-calendar"></i></span>
                        </div>
                        <input class = "font-weight-bold text-dark" type="date" name="fecha" id = "fecha_buzon" value = "{{$queja->fecha}}" required readonly>
                    </div>
                    <div class="input-group form-group justify-content-center">
                        <div class="input-group-prepend">
                            <span class="input-group-text justify-content-center"><i class="fa fa-minus-square"></i></span>
                        </div>
                        <input type="text" class="form-control font-weight-bold text-dark" name = "titulo" placeholder="Título" value = "{{$queja->titulo}}" required readonly maxLength = "40">						
                    </div>
                    <div class="input-group form-group justify-content-center">
                        <div class="input-group-prepend">
                            <span class="input-group-text justify-content-center"><i class="fa fa-minus-square"></i></span>
                        </div>
                        <input type="text" class="form-control font-weight-bold text-dark" name = "descripcion" placeholder="Descripción" value = "{{$queja->descripcion}}" required readonly maxLength = "100">						
                    </div>
                    <div class="input-group form-group justify-content-center">
                        Estatus
                    </div>
                    <div class="input-group form-group justify-content-center">
                        <div class="input-group-prepend">
                            <span class="input-group-text justify-content-center"><i class="fa fa-minus-square"></i></span>
                        </div>
                        <select name="estatus" required>
                            <option selected value="visto">Visto</option>
                            <option value="en proceso">En Proceso</option>
                            <option value="finalizado">Finalizado</option>
                        </select>
                    </div>
                    <div class="input-group form-group justify-content-center">
                        <div class="input-group-prepend">
                            <span class="input-group-text justify-content-center"><i class="fa fa-minus-square"></i></span>
                        </div>
                        <input type="text" class="form-control font-weight-bold text-dark" name = "respuesta" placeholder="Respuesta" value = "{{$queja->respuesta}}" required maxLength = "300" required>						
                    </div>
                    <input type="hidden" name="idBuzon" value = "{{$queja->idBuzon}}">
                    <div class="form-group mt-4">
                        <button type = "submit" class="btn btn-block btn-warning font-weight-bold">
                            ACTUALIZAR
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