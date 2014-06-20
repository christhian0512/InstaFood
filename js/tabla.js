$(function()
{
	var opcion = 0;
	var codigo = 0;
	var empresa = 0;
	
	$(document).ready(function()
	{
		
		$( "#busqueda" ).val( "" );
		
	});

	/*function editarEstado( tipo )
	{
		$( "button[class*=cambiarEstado]" ).bind('click',function()
		{
			codigo = $(this).attr( "id" );
			empresa = $(this).attr( "empresa" );
			alert(empresa);
			
			$.ajax
			({
				type : "POST",
				url : "actualizarEstadoPlato.php",
				data : { id : codigo, empresa: empresa, type: 1},
				typedata: text,
				success:function(data)
				{
					
					cargarTabla(1);
				}
			});
		});
	}*/
	




	
	function cargarTabla( opcion )
	{
		if( opcion == 1 )
		{
			$( "#cuerpo" ).load( "buscarPlato.php" , { busqueda : $( "#busqueda" ).val() , type : 1 } , function(responseText, textStatus, XMLHttoRequest)
			{
				if(textStatus == "success")
				{
					editarEstado(1);
					
				}
			}); 
		}else{
			$( "#cuerpo" ).load( "buscarPlato.php" , { busqueda : $( "#busqueda" ).val() , type : 1 } , function(responseText, textStatus, XMLHttoRequest)
			{
				if(textStatus == "success")
				{
					editarEstado(1);
					
				}
			}); 
		}

	}
	
	
	$( "#busqueda" ).keyup(function()
	{	
		cargarTabla( 1 );
	});
	


	
	

});