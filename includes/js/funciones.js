$(document).ready(main);

var contador = 1;

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


$('#boton').hover(function(){
      var b=0;
      var a=0;
      setInterval(function() {
        $('#fechaPHP').load('index.php/Inicio/preubas/'+b);
         b= (a++)/60;
    }, 1000); 
});

$('#Fecha').datepicker({dateFormat: "yy-mm-dd"});
$('#FechaD').datepicker({dateFormat: "yy-mm-dd"});

$('#buscar').datepicker({dateFormat: "yy-mm-dd"});
$('#buscarD').datepicker({dateFormat: "yy-mm-dd"});

  

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


