<x-app-layout>
</x-app-layout>
<div class="col-md-9">
    <div class="row justify-content-center mx-auto">
                    <div class = "table-responsive">
                        <table class="table table-striped table-bordered w-auto mx-auto" id="example">
                            <thead class="thead-light">
                                <tr class = "text-center align-middle">
                                    <th>ID</th>
                                    <th>FOTO</th>
                                    <th>NOMBRE</th>
                                    <th>USUARIO</th>
                                    <th>TELÉFONO</th>
                                    <th>CORREO</th>
                                    <th>TIPO</th>
                                    <th>ESTATUS</th>
                                    <th># REFERENCIA</th>
                                    <th>GALLARDETE</th>
                                    <th>SALDO X APLICAR</th>
                                    <th></th>
                                </tr>
                            </thead>           
                            <tbody>
                            @forelse ($usuarios as $user)
                                <tr class = "table-light align-middle mx-auto font-weight-bold" style="color: black !important; text-align: center !important;">
                                    <td class = "align-middle">{{$user->idUsuario}}</td>
                                    @if($user->fotografia !== "" && $user->tipo !== 'residente')
                                    <td class = "align-middle"><img class = "img-responsive w-75" src="img-pic/{{$user->fotografia}}" alt="{{$user->fotografia}}" class="rounded-circle"></td>
                                    @else
                                    <td class = "align-middle"><img class = "img-responsive w-75" src="../icons/usuario.png" alt="Foto generica" class="rounded-circle"></td>
                                    @endif
                                    <td class = "align-middle">{{$user-> nombre}} {{$user->apPaterno}} {{$user->apMaterno}} </td>
                                    <td class = "align-middle">{{$user->usuario}}</td>
                                    <td class = "align-middle">{{$user->telefono}}</td>
                                    <td class = "align-middle">{{$user->correo}}</td>
                                    <td class = "align-middle">{{$user->tipo}}</td>
                                    <td class = "align-middle">{{$user->estatus}}</td>
                                    <td class = "align-middle">{{$user->noReferencia}}</td>
                                    <td class = "align-middle">{{$user->gallardete}}</td>
                                    <td class = "align-middle">{{$user->saldoxAplicar}}</td>

                                    <td class = "align-middle"> 
                                        <a href="/usuario/edit/{{$user->idUsuario}}" class = "btn btn-secondary font-weight-bold" onclick="return confirm_edit();"><i class="fa fa-pencil-square-o"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <td>NO EXISTEN REGISTROS</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            @endforelse
                            </tbody>
                            <tfoot>
                                <tr class = "table-light">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
</div>
</div>
</div>
</div>
@include('partials.footer')