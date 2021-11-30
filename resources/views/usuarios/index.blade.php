<!DOCTYPE html>
<html>
<head>
	<title>Naviera PeP incio</title>
	<script src="{{ asset('js/jquery.js') }}"></script>
</head>
<body>
    <main> 
                <background class="encabesado">
                <img class="logo" src="https://i.ibb.co/T4xgrBS/Logo-naviera-Pe-P.png" alt="Logo-naviera-Pe-P" border="0">
                    <a class="inicio" href="link">inicio</a>
                    <a href="link">incio de sesion</a> 
                </background>
            <background class="cuerpo">
            
                
                <img class="fondo" src="https://i.ibb.co/fQMB5rN/image-1.png" alt="image-1" border="0">
                <section class="somdra">
                    <section class="inicioSecion">
                        <div>
                        <img class="fondo" src="https://i.ibb.co/YLKbGyW/user-profile-icon-free-vector-removebg-preview-1.png" alt="user-profile-icon-free-vector-removebg-preview-1" border="0">
                            <form id="incio">
                            
                                @csrf
                                    <input class="imput" type="text" name="usauario" placeholder="usauario" required>
                                    <br>
                                    <br>
                                    <input class="imput" type="text" name="contrasena" placeholder="contrasena" required>
                                    <br>
                                    <br>
                                    <input class="boton" type="button" onclick="incio()" value ="incio"/>
                
                            </form>
                
                            <br>
                            <br>
                        
                            <label id="mensaje"></label>
                
                            </div>
                    </section>
                </section>
            </background>
            <section class="piedepagina">
                <h1 class="telefono">telefono:xxxx-xxxx</h1>
                <h1 class="correo">Correo:Naviera@pep.ac.cr</h1>
                <h1 class="NavieraPeP2021">© NavieraPeP 2021</h1>
            </section>
	<script>

		function incio() {



			$.ajax({

			    type: 'POST',

			    url: "{{url('sucursal/incio')}}",
			    
			    data: $("#incio").serialize(),
			    
			    success: function(data) {
			    	if(data==true){
			    		$('#mensaje').html('Se agrego se inicio secion');
			    		$('form#incio').trigger("reset");
			    	}else{
			    		$('#mensaje').html('Compruebe error en la contrasena o usuario');
			    	}
			    },
			    
			    error: function(data) {
			        $('#mensaje').html('Error en el servidor');
			    },
			    
			    timeout:5000
			});
			

		}

	</script>

    </main>
</body>
</html>