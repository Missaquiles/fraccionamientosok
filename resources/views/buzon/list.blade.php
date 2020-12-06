<x-app-layout>
</x-app-layout>
<div class="col-md-9">
    <div class="row justify-content-center mx-auto">
        <div class = "table-responsive">
            <table class="table table-striped table-bordered w-auto mx-auto" id="example">
                <thead class="thead-light">
                    <tr class = "text-center align-middle">
                        @if(Auth::user()->tipo !== 'jefe')
                            <th>ESTATUS</th>
                            <th>FECHA</th>
                            <th>TÍTULO</th>
                            <th>DESCRIPCIÓN</th>
                            <th>RESPUESTA</th>
                        @else
                            <th>ESTATUS</th>
                            <th>FECHA</th>
                            <th>TÍTULO</th>
                            <th>RESPUESTA</th>
                            <th>RESPONDER</th>
                        @endif                                 
                    </tr>
                </thead>           
                <tbody>
                @forelse ($quejas as $buzon)
                    @if(Auth::user()->tipo === 'jefe')
                        <tr class = "table-light align-middle mx-auto font-weight-bold" style="color: black !important; text-align: center !important;">
                            @if($buzon->estatus === 'no visto')
                            <td class = "align-middle"><img class = "img-responsive w-75" src="icons/no_visto.png" alt="no visto"></td>
                            @elseif($buzon->estatus === 'visto')
                            <td class = "align-middle"><img class = "img-responsive w-75" src="icons/visto.png" alt="no visto"></td>
                            @elseif($buzon->estatus === 'en proceso')
                            <td class = "align-middle"><img class = "img-responsive w-75" src="icons/pendiente.png" alt="no visto"></td>
                            @elseif($buzon->estatus === 'finalizado')
                            <td class = "align-middle"><img class = "img-responsive w-75" src="icons/respondido.png" alt="no visto"></td>
                            @endif
                            <td class = "align-middle">{{$buzon->fecha}}</td>
                            <td class = "align-middle">{{$buzon-> titulo }} </td>    
                            <td class = "align-middle">{{$buzon->respuesta}}</td>                       

                            <td class = "align-middle"> 
                                <a href="/buzon/edit/{{$buzon->idBuzon}}" class = "btn btn-secondary font-weight-bold" onclick="return confirm_answer();"> <img class = "img-responsive w-75" src="icons/responder.png" alt="Responder"></td>
                                </a>
                            </td>
                        </tr>
                    @else
                        @if(Auth::user()->idUsuario === $buzon->usuario_idUsuario)
                        <tr>
                            @if($buzon->estatus === 'no visto')
                            <td class = "align-middle"><img class = "img-responsive w-75" src="icons/no_visto.png" alt="no visto"></td>
                            @elseif($buzon->estatus === 'visto')
                            <td class = "align-middle"><img class = "img-responsive w-75" src="icons/visto.png" alt="no visto"></td>
                            @elseif($buzon->estatus === 'en proceso')
                            <td class = "align-middle"><img class = "img-responsive w-75" src="icons/pendiente.png" alt="no visto"></td>
                            @elseif($buzon->estatus === 'finalizado')
                            <td class = "align-middle"><img class = "img-responsive w-75" src="icons/respondido.png" alt="no visto"></td>
                            @endif
                            <td class = "align-middle">{{$buzon->fecha}}</td>
                            <td class = "align-middle">{{$buzon-> titulo }} </td>
                            <td class = "align-middle">{{$buzon-> descripcion }} </td>
                            <td class = "align-middle">{{$buzon->respuesta}}</td>
                        </tr>
                        @endif
                    @endif
                @empty
                    <td colspan="6">NO EXISTEN QUEJAS REGISTRADAS</td>
                @endforelse
                </tbody>
                <tfoot>
                    <tr class = "table-light">
                        <td colspan="5"></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
</div>
</div>
</div>
@include('partials.footer')