$(document).ready(main);

var contador = 1;
var aux = 1;

//muestra elementos al cargar la pagina
$('.tableM').hide('fast');
function main(){
   $('.menu').click(function(){
    //$('nav').toggle()
    if(contador == 1){
      $('nav').animate({
        left: "0"
      });
      contador = 0;
    }else{
      $('nav').animate({
        left: "-100%"
      });
      contador = 1;
    }
  });
};

//Para hacer focus en el nombre de usuario
$('#Nombre').focus();


//funcion para hcer busqueda por fechas
$('#boton').click(function(){    
  var b=0
  b = $('#Fecha').val();
  if(b == 0){
    $('#agendaDia').load('error'); 
  }else{
    $('#agendaDia').load('buscarDocs/'+b); 
  }
  //b = (a++)/60;
});

//Para seleccionar fechas por mes/año y dia
$('#Fecha').datepicker({
      dateFormat: "yy-mm-dd", 
      changeMonth: true,
      changeYear: true,
    });
$('#FechaD').datepicker({dateFormat: "yy-mm-dd"});
$('#buscar').datepicker({dateFormat: "yy-mm-dd"});
$('#buscarD').datepicker({dateFormat: "yy-mm-dd"});


//Muestra el formulario para agregar docs
  $('.masDocs').click(function(){
  //$('nav').toggle()
    if(aux == 1){
      $('.tableM').show();
      aux = 0;
    }else{
      $('.tableM').hide();
      aux = 1;
    }
  });


//funcion para visualizar el tipo de tramite que se solicita
  $(function() {
    var availableTags = [
     	"Para su conocimiento", 
     	"Para certificacion", 
     	"Para firma", 
     	"Para tramite", 
     	"Invitacion"
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  });


