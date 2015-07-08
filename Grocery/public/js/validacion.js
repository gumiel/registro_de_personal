jQuery(document).ready(function($) {
	$("#formNuevo").validate({
	    rules: {
	      ncaseta: {
	        maxlength:10
	      },
	      nombres: {
	        required: true,
	        maxlength:50
	      },
	      codigo: {
	        required: true,
	        maxlength:30
	      },
	      carnet: {
	        required: true,
	        maxlength:11
	      },
	      direccion: {
	        required: true,
	        maxlength:150
	      },
	      rubro: {
	        required: true,
	        maxlength:50
	      },
	      observacion: {
	      	maxlength:600
	      }
	    },
	    messages: {
	      ncaseta: {
	        maxlength: "No mas de {0} caracteres"
	      },
	      nombres: {
	        required: "El Nombre es obligatorio",
	        maxlength: "No mas de {0} caracteres"
	      },
	      codigo: {
	        required: "El Codigo es obligatorio",
	        maxlength: "No mas de {0} caracteres"
	      },
	      carnet: {
	        required: "El Carnet es obligatorio",
	        maxlength: "No mas de {0} caracteres"
	      },
	      direccion: {
	        required: "La Direccion es obligatorio",
	        maxlength: "No mas de {0} caracteres"
	      },
	      rubro: {
	        required: "El Rubro es obligatorio",
	        maxlength: "No mas de {0} caracteres"
	      },
	      observacion: {
	      	maxlength:"No mas de {0} caracteres"
	      }
	    }
	    
	})

	$("#formNuevoKardex").validate({
	    rules: {
	      nombres_kardex: {
	        required: true,
	        maxlength:50
	      },
	      codigo_afiliado_kardex: {	        
	        maxlength:20
	      },
	      codigo_licencia_kardex: {	        
	        maxlength:20
	      },
	      lugar_nacimiento_kardex: {
	        maxlength:100
	      },
	      nacimiento_kardex: {
	        maxlength:20
	      },
	      ci_kardex: {
	        required: true,
	        maxlength:15
	      },
	      estado_civil_kardex: {	        
	        maxlength:20
	      },
	      profesion_kardex: {
	      	maxlength:100
	      },
	      conyugue_kardex: {
	      	maxlength:100
	      },
	      hijos_kardex: {
	      	maxlength:10
	      },
	      procedencia_kardex: {
	      	maxlength:100
	      },
	      antiguedad_kardex: {
	      	maxlength:10
	      },
	      domicilio_kardex: {
	      	maxlength:150
	      },
	      telefonos_kardex: {
	      	maxlength:50
	      },
	      comercializa_kardex: {
	      	maxlength:100
	      },
	      ubicacion_puesto_kardex: {
	      	maxlength:100
	      },
	      caseta_numero_kardex: {
	      	maxlength:15
	      },
	      mesa_en_kardex: {
	      	maxlength:20
	      },
	      fecha_kardex: {
	      	maxlength:20
	      }
	    },
	    messages: {
	      nombres_kardex: {
	        required: "El Nombre es obligatorio",
	        maxlength: "No mas de {0} caracteres"
	      },
	      codigo_afiliado_kardex: {	        
	        maxlength: "No mas de {0} caracteres"
	      },
	      codigo_licencia_kardex: {	        
	        maxlength: "No mas de {0} caracteres"
	      },
	      lugar_nacimiento_kardex: {
	        maxlength: "No mas de {0} caracteres"
	      },
	      nacimiento_kardex: {
	        maxlength: "No mas de {0} caracteres"
	      },
	      ci_kardex: {
	        required: "El Carnet es obligatorio",
	        maxlength: "No mas de {0} caracteres"
	      },
	      estado_civil_kardex: {	        
	        maxlength: "No mas de {0} caracteres"
	      },
	      profesion_kardex: {
	      	maxlength: "No mas de {0} caracteres"
	      },
	      procedencia_kardex: {
	      	maxlength: "No mas de {0} caracteres"
	      },
	      antiguedad_kardex: {
	      	maxlength: "No mas de {0} caracteres"
	      },
	      conyugue_kardex: {
	      	maxlength: "No mas de {0} caracteres"
	      },
	      hijos_kardex: {
	      	maxlength: "No mas de {0} caracteres"
	      },
	      domicilio_kardex: {
	      	maxlength: "No mas de {0} caracteres"
	      },
	      telefonos_kardex: {
	      	maxlength: "No mas de {0} caracteres"
	      },
	      comercializa_kardex: {
	      	maxlength: "No mas de {0} caracteres"
	      },
	      ubicacion_puesto_kardex: {
	      	maxlength: "No mas de {0} caracteres"
	      },
	      caseta_numero_kardex: {
	      	maxlength: "No mas de {0} caracteres"
	      },
	      mesa_en_kardex: {
	      	maxlength: "No mas de {0} caracteres"
	      },
	      fecha_kardex: {
	      	maxlength: "No mas de {0} caracteres"
	      }
	    }
	})

	$("#formNuevoAdmin").validate({
	    rules: {
	      email_usu: {
	        required: true,
	        email: true,
	        maxlength: 50
	      },
	      login_usu: {
	        required: true,
	        maxlength:50
	      },
	      pass_usu: {
	        required: true,
	        maxlength:50
	      },
	      tipo_usu: {
	        required: true
	      }
	    },
	    messages: {
	      email_usu: {
	        required: "El Email es obligatorio",
	        email: "El Email es incorrecto",
	        maxlength: "No mas de 50 caracteres"
	      },
	      login_usu: {
	        required: "La Cuenta es obligatorio",
	        maxlength: "No mas de 50 caracteres"
	      },
	      pass_usu: {
	        required: "La Contraseña es obligatorio",
	        maxlength: "No mas de 50 caracteres"
	      },
	      tipo_usu: {
	        required: "El tipo usuario es obligatorio"
	      }
	    }
	});
});