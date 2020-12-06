<x-guest-layout>
</x-guest-layout>
    <div class="container p-4 mt-4 mb-4">
        <div class="row align-items-center mt-4">        
            <div id = "alert" class = "alertLogin" style = "display:none;">
                <div class="col md-5 mx-auto p-3">
                    <div class="alert alert-light alert-dismissible fade show alert-link" role = "alert" style = "border-radius: 15px;">
                        <h3 style = "font-weight: bold; color: #435068">Restaurar contraseña</h3>
                        <h5 style = "font-weight: bold; color: #6B7ABC">Comunicate con tu administrador para <br/>restaurar tu contraseña.</h5>
                        <button type = "button" class = "close" data-dismiss="alert" aria-label="Close">
                            <i class="fa fa-window-close" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
            @if(isset($errors))
                @foreach ($errors->all() as $error)
                <div class = "alertLogin">
                    <div class="col md-5 mx-auto p-3">
                    <div class="alert alert-light alert-dismissible fade show alert-link" role = "alert" style = "border-radius: 15px;">
                        <h3 style = "font-weight: bold; color: #435068"> {{$error}}</h3>
                            <h5 style = "font-weight: bold; color: #6B7ABC">Reintenta entrar con las credenciales correctas.</h5>
                            <button type = "button" class = "close" data-dismiss="alert" aria-label="Close">
                                <i class="fa fa-window-close" aria-hidden="true"></i>
                            </button>
                           <br/>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
            <div class="col-md-4 align-items-center text-center">
                <div class="card bg-light border-light mb-2 mt-4">
                    <div class="card-header text-center">
                        <div class="avatar">
                            <img src="../icons/USUARIO_AZUL.png" class = "img-responsive w-100" alt="">
                        </div>	
                        <br/>
                        <h5>B I E N V E N I D O</h5>
                    </div>
                    <div class="card-body">
                        <div id = "messages" class="font-weight-bold mx-auto justify-content-center">
                        @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <script>
                                        document.getElementsByClassName("alertLogin").style.display = "none";
                                    </script>
                                @endforeach
                        @endif
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="input-group form-group justify-content-center">
                                <input type="text" class="form-control font-weight-bold text-dark" style="max-width: 18rem; background-color: #EDF1F9;" name = "correo" placeholder="Usuario" required>						
                                <div class="input-group-prepend">
                                    <span class="input-group-text justify-content-center"><img src="../icons/usuario_login.png" class = "img-responsive w-100" alt=""></span>
                                </div>
                            </div>
                            <div class="input-group form-group justify-content-center">
                                <input type="password" name = "password" class="form-control font-weight-bold text-dark" style="max-width: 18rem; background-color: #EDF1F9;" placeholder="Contraseña" required>
                                <div class="input-group-prepend">
                                    <span class="input-group-text justify-content-center"><img src="../icons/contrasena_login.png" class = "img-responsive w-100" alt=""></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-block font-weight-bold text-white" style="background-color: #244D71;">
                                    ENTRAR
                                </button>
                            </div>
                            <div class="form-group">
                                <div style="text-align:right;">
                                    <a href="#messages" onclick = "cambia();" style="font-weight: bold; text-decoration: none; background-color: none; color: #4F6C89;"> ¿Olvidaste tu contraseña? </a>
                                    <script>
                                        function cambia() {
                                            document.getElementById("alert").style.display = "block";
                                        };
                                    </script>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8 align-items-center justify-content-center text-center">
                <img src="../icons/logo_sicom_login.png" class = "img-responsive w-75" alt="">
            </div>
        </div>
    </div>