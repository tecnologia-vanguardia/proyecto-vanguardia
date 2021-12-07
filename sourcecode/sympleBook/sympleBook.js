$(document).ready(function() {

let API_KEY = '86ac1da3bdc9f069c3ade05ed6e8c610c6dc6e4ee346aa5f7d214a512aa03764';
let COMPANY_LOGIN = 'sportfishing';
let adminData = {
	"company": "sportfishing",
	"login": "admin",
	"password": "Tecnologia"
};
let TOKEN = '';
let URLClIENTS = 'https://user-api-v2.simplybook.me/admin/clients';
let URLRESERVAS = 'https://user-api-v2.simplybook.me/admin/bookings';
let RESERVABYCODE = 'https://user-api-v2.simplybook.me/admin/bookings?filter[search]=';

//obtener el token
if (TOKEN === '') {
	//iniciar sesio como administrador
$.ajax({
	url : 'https://user-api-v2.simplybook.me/admin/auth',
	method : 'POST',
	data: JSON.stringify(adminData),
	contentType: 'application/json',
	success : function (data){
		TOKEN = data.token;
		if($('#tipo_busqueda').val() === '1') {
			obtenerReservas();
		}
		obtenerClientes();
	},
	onerror: function (error) {
		Lobibox.alert('error',{msg:'Ha ocurrido un error al obtener la informacion'});
	}
 });
}

function obtenerClientes() {
	$.ajax({
		url : URLClIENTS,
		method : 'GET',
		contentType: 'application/json',
		headers: { 'X-Company-Login': COMPANY_LOGIN, 'X-Token': TOKEN },
		success : function (data){
			crearTablaClientes(data);
		},
		onerror: function (error) {
			Lobibox.alert('error',{msg:'Ha ocurrido un error al obtener la informacion'});
		}
	 });
}

function obtenerReservas() {
	$.ajax({
		url : URLRESERVAS,
		method : 'GET',
		contentType: 'application/json',
		headers: { 'X-Company-Login': COMPANY_LOGIN, 'X-Token': TOKEN },
		success : function (data){
			crearTablaReservas(data);
		},
		onerror: function (error) {
			Lobibox.alert('error',{msg:'Ha ocurrido un error al obtener la informacion'});
		}
	 });
}

function crearTablaClientes(clients) {
	$('#tabla-clientes').bootstrapTable({
		data:clients.data,
		pageSize : 5,
		columns : [
			{
			field:'name',
			title : 'Nombre',
			align : 'center',
			sortable : true
		},
		{
			field:'email',
			title : 'Correo',
			align : 'center',
			sortable : true
		},
		{
			field:'phone',
			title : 'Telefono',
			align : 'center',
			sortable : true
		},{
			field:'country_id',
			title : 'Pais',
			align : 'center',
			sortable : true
		}
	    ],
		onAll: function(name,args){
						
		}
	});
}

function crearTablaReservas(data){
	let processData = processDataFunction(data.data);
	$('#tabla-reservas').bootstrapTable({
		data: processData,
		pageSize : 5,
		columns : [
			{
			field:'provider',
			title : 'Proveedor',
			align : 'center',
			sortable : true
		},
		{
			field:'service',
			title : 'Servicio',
			align : 'center',
			sortable : true
		},
		{
			field:'price',
			title : 'Precio',
			align : 'center',
			sortable : true,
			formatter:function(value, row,index) { 
				let currency = '$'
				return currency + value;
			}
		},{
			field:'client',
			title : 'Cliente',
			align : 'center',
			sortable : true,
			formatter:function(value, row,index) { 
				return value + ' - ' + row.email;
			}
		},
		{
			field:'status',
			title : 'Estatus reservacion',
			align : 'center',
			sortable : true
		},
		{
			field:'code',
			title : 'Codigo',
			align : 'center',
			sortable : true
		}
	    ],
		onAll: function(name,args){
						
		}
	});
}

function processDataFunction(data) {
	let reservas = [];
	if(!data) return null;
	for (let i = 0; i < data.length; i++) {
		let reserva	= {
			provider: data[i].provider?.name,
			service: data[i].service?.name,
			price: data[i].service?.price,
			client: data[i].client?.name,
			email: data[i].client?.email,
			status: data[i].status,
			code: data[i].code
		};
		reservas.push(reserva);
	}

	return reservas;
}

//buscar reservacion por codigo

$('#buscar_reservacion').off('click').on('click', function (){
	reservaByCode($('#no_codigo').val());
 });

function reservaByCode(code) {
	if (!code) return Lobibox.alert('warning',{msg:'Favor de ingresar un c&oacute;digo de reserva'});
	$.ajax({
		url : `${RESERVABYCODE}${code}`,
		method : 'GET',
		contentType: 'application/json',
		headers: { 'X-Company-Login': COMPANY_LOGIN, 'X-Token': TOKEN },
		success : function (data){
			setFields(data.data);
		},
		onerror: function (error) {
			Lobibox.alert('error',{msg:'Ha ocurrido un error al obtener la informacion'});
		}
	 });
}

function setFields(data){
	$('#nombre_servicio').val(data[0].service?.name);
	$('#descripcion').val(data[0].service?.description);
	$('#estatus').val(data[0]?.status);
	$('#estatus_pago').val(data[0].invoice_status);
	$('#fecha_pago').val(data[0]?.invoice_datetime);
}
});