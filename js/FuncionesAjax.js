function nuevoAjax()
{
	
	/* ESTO NO SE TOCA PAO PAO */
	
	var xmlHttp;
	
	try {
		
		xmlHttp=new XMLHttpRequest();
		return xmlHttp;
		} catch (e) {
		
		try {
			xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
			return xmlHttp;
			} catch (e) {
			
			try {
				xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
				return xmlHttp;
				} catch (e) {
				alert("Tu navegador no soporta AJAX!");
				return false;
			}}}
}


function cargarDocumentoAjax(elcontenedor, laforma, ladireccion, loqenvio)
{
	
	/* ESTO NO SE TOCA PAO PAO */
    var contenedorRespuesta = elcontenedor;
    ajax=nuevoAjax();
	ajax.open(""+laforma, ""+ladireccion ,true);
	ajax.onreadystatechange = function() 
	{
		if (ajax.readyState==1) 
		{
			//contenedorRespuesta.innerHTML="<img src='../imagenes/loaders/loader.gif' align='center' /><font style='font-size:12px; font-family:Helvetica,Arial;' align='center'><br/>&nbsp;Cargando...</font>";
		}
		else 
		if (ajax.readyState==4)
		{
			if(ajax.status==200)
			{									
				contenedorRespuesta.innerHTML=ajax.responseText;
			}
			else if(ajax.status==404)
			{
				contenedorRespuesta.innerHTML = "La direccion no existe";
			}
			else
			{
				contenedorRespuesta.innerHTML = "Error: ".ajax.status;
			}
		}
	}
	
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax.send(""+loqenvio);
	
}


function Enviar(_pagina,capa,envio) {
	
	/* ESTO NO SE TOCA PAO PAO */
    var ajax;
    ajax = nuevoAjax();
    ajax.open("POST", _pagina, true);
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	
    ajax.onreadystatechange = function() {
		if (ajax.readyState==1){
			document.getElementById(capa).innerHTML = " Aguarde por favor...";
		}
		if (ajax.readyState == 4) {
			
			document.getElementById(capa).innerHTML=ajax.responseText; 
		}}
		
		ajax.send(envio);
} 





//Cambia el estado del plato
function cambiar_estadoPlato(myplato, myempresa){
	
	mienvio='id_plato='+myplato+'&id_empresa='+myempresa;
	midireccion  = 'actualizarEstadoPlato.php';	
	Enviar(midireccion,'addplato',mienvio);/**/
	//$( "#cuerpo" ).load( "buscarPlato.php" , function(responseText, textStatus, XMLHttoRequest));

}

function cambiar_estadoPedido(mypedido, myempresa){
	
	mienvio='id_pedido='+mypedido+'&id_empresa='+myempresa;
	midireccion  = 'actualizarEstadoPedido.php';	
	Enviar(midireccion,'addpedido',mienvio);/**/
	//$( "#cuerpo" ).load( "buscarPlato.php" , function(responseText, textStatus, XMLHttoRequest));

}


  $(document).ready(function(){
  				eliminar();
				fn_cantidad();
            });

			function fn_cantidad(){
				cantidad = $("#tablaPedido tbody").find("tr").length;
				$("#spam_cantidad").html(cantidad);
				
			};

			 function agregar(){
			 	var nuevo=0;
			 	var a1 = 0;
			 	var actual = 0;
			 	//var codigoPlato = $("#platos").attr("value");
			 	//var adiciones = $("#adicion1").attr("value") +" - "+ $("#adicion2").attr("value") +" - "+ $("#adicion3").attr("value");
			 	var plato = document.getElementById("platos").value.split(" - ");
			 	var codigoPlato = plato[0];
			 	var nombrePlato = plato[1];
			 	var precioPlato = plato[2];
			 	
			 	var adicion1 = document.getElementById("adicion1").value.split(" - ");
			 	var nombre1 = adicion1[0];
			 	var precio1 = adicion1[1];


			 	var adicion2 = document.getElementById("adicion2").value.split(" - ");
			 	var nombre2 = adicion2[0];
			 	precio2 = adicion2[1];
			 	

			 	var adicion3 = document.getElementById("adicion3").value.split(" - ");
			 	var nombre3 = adicion3[0];
			 	var precio3 = adicion3[1];
			 	//var precioAdicion = $("#adicion1").attr("name");
			 	//alert(id);
			 	actual = document.getElementById("spam_total").innerHTML;
			 	var adicionNombres = nombre1+" - "+nombre2+" - "+nombre3;
			 	var totalAdiciones = parseFloat(precio1)+parseFloat(precio2)+parseFloat(precio3);

			 	if(isNaN(totalAdiciones)){
			 		totalAdiciones=0;
			 	}

			 	/*if(isNaN(parseFloat(precio1))){
			 		totalAdiciones=parseFloat(precio2)+parseFloat(precio3);
			 	}*/
			 	else if(isNaN(parseFloat(precio2)) ||isNaN(parseFloat(precio3)) ){
			 		totalAdiciones=parseFloat(precio1);
			 	}

			 	
			 	a1 = parseFloat(actual)||0;
			 	nuevo = a1 + (parseFloat(totalAdiciones)+parseFloat(precioPlato));
			 	//totalPlato = suma;
			 	$("#spam_total").html(nuevo);


			 	


                cadena = "<tr>";
                cadena = cadena + "<td>" + codigoPlato + "</td>";
                cadena = cadena + "<td>" + nombrePlato + "</td>";
                cadena = cadena + "<td>" + precioPlato + "</td>";
                cadena = cadena + "<td>" + adicionNombres + "</td>";
                 cadena = cadena + "<td>" + totalAdiciones + "</td>";
                 cadena = cadena + "<td><a class='elimina'><img src='images/delete.png' /></a></td>";
                $("#tablaPedido tbody").append(cadena);
                /*
                    aqui puedes enviar un conunto de tados ajax para agregar al usuairo
                    $.post("agregar.php", {ide_usu: $("#valor_ide").val(), nom_usu: $("#valor_uno").val()});
                */
                

                eliminar();
				fn_cantidad();

                //alert("Plato añadido");
            }

            function Item(codigoPedido, fecha, cliente, codigoPl, adicionesTotales, totalA, total, empresa, vendedor)		
						{
						    this.codigoPedido = codigoPedido;
						    this.fecha = fecha;
						    this.cliente = cliente;
						    this.codigoPl = codigoPl;
						    this.adicionesTotales = adicionesTotales;
						    this.totalA = totalA;
						    this.total = total;
						    this.empresa = empresa;
						    this.vendedor = vendedor;
						}


			

		function guardar_pedido(){

				arreglo=new Array();
				codigoPedido = $("#codigoPedido").val();
				fecha = $("#fecha").val();
				cliente = $("#nombreCliente").val();
				total = document.getElementById("spam_total").innerHTML;
				empresa = $("#idEmpresa").val();
				vendedor = $("#nombreVendedor").val();
				//alert(empresa);
	
            
			$('#tablaPedido tr').each(function () {
				
			    var codigoPl= $(this).find('td').eq(0).html();
			    var adicionesTotales = $(this).find('td').eq(3).html();
			    var totalA = $(this).find('td').eq(4).html();

			   
				valor=new Item(codigoPedido, fecha, cliente, codigoPl, adicionesTotales, totalA, total, empresa, vendedor);
			    
			    arreglo.push(valor);
			    
			});

			arreglo.shift();
				var itemsJSON = JSON.stringify(arreglo);
				//alert(itemsJSON);
				mienvio='items='+itemsJSON;
				midireccion  = 'script_registrar_pedido.php';	
				Enviar(midireccion,'spam_anadir_pedido',mienvio);
			alert("Pedido Registrado");
		};


             function eliminar(){
                $("a.elimina").click(function(){
                    id = $(this).parents("tr").find("td").eq(0).html();
                   precioPl = $(this).parents("tr").find("td").eq(2).html();
                   precioA = $(this).parents("tr").find("td").eq(4).html();
                   precioTotalEliminado = parseFloat(precioPl)+parseFloat(precioA);
                   actualTotal = parseFloat(document.getElementById("spam_total").innerHTML)||0;
                    respuesta = confirm("Desea equitar el plato del pedido: " + id);
                    if (respuesta){
                        $(this).parents("tr").fadeOut("normal", function(){
                            $(this).remove();
                            
                            alert("Plato " + id + " eliminado");
                            totalNuevo = actualTotal-parseFloat(precioTotalEliminado);
                            //alert(totalNuevo);
                            $("#spam_total").html(totalNuevo);
                            fn_cantidad();

  
                        })
                    }
                });
            };
            






