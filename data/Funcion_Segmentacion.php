<?php
if(intval($_POST['ciudad']) != ''){
    //Piura[2], [[Chiclayo[8], Valparaiso[9], Coquimbo[11], Tarapacá[16]]], Santiago[12], URP[14]
    if (intval($user_ciudades) == 1 {
      //Combox universidades == "Arica y Parinacota"
      load_ciudad(1, 'Arica y Parinacota');
    }else if (intval($user_ciudades) == 2 {
      //Combox universidades == "Tarapacá"
      load_ciudad(2, 'Tarapacá');
    }else if (intval($user_ciudades) == 3 {
      //Combox universidades == "Antofagasta"
      load_ciudad(3, 'Antofagasta');   
    }else if (intval($user_ciudades) == 4 {
      //Combox universidades == "Valparaiso"
      load_ciudad(4, 'Atacama');    
    }else if (intval($user_ciudades) == 5 {
      //Combox universidades == "Coquimbo" 
      load_ciudad(5, 'Coquimbo');    
    }else if (intval($user_ciudades) == 6 {
      //Combox universidades == "Valparaiso"
      load_ciudad(6, 'Valparaiso');     
    }else if (intval($user_ciudades) == 7 {
      //Combox universidades == "UdeS"|| "Santiago"||
      load_ciudad(7, 'Región metropolitana Santiago');  
    }else if (intval($user_ciudades) == 8 {
      //Combox universidades == "OHiggins"
      load_ciudad(8, 'OHiggins');   
    }else if (intval($user_ciudades) == 9 {
      //Combox universidades == "Maule" 
      load_ciudad(9, 'Maule'); 
    }else if (intval($user_ciudades) == 10 {
      //Combox universidades == "Ñuble"
      load_ciudad(10, 'Ñuble');  
    }else if (intval($user_ciudades) == 11 {
      //Combox universidades == "Bíobío"  
      load_ciudad(11, 'Bíobío');   
    }else if (intval($user_ciudades) == 12 {
      //Combox universidades == "La Araucanía"     
      load_ciudad(12, 'La Araucanía');
    }else if (intval($user_ciudades) == 13 {
      //Combox universidades == "Temuco" 
      load_ciudad(13, 'Los Ríos');    
    }else if (intval($user_ciudades) == 14 {
      //Combox universidades == "Los Lagos" 
      load_ciudad(14, 'Los Lagos');
    }else if (intval($user_ciudades) == 15 {
      //Combox universidades == "Aysén"     
      load_ciudad(15, 'Aysén');
    }else if (intval($user_ciudades) == 16 {
      //Combox universidades == "Magallanes" 
      load_ciudad(16, 'Magallanes');
  }

  function load_ciudad(id,name)
  {
    var html_code = '';
    $.getJSON('ciudades.json', function(data){
     html_code += '<option value="">Select '+id+'</option>';
     $.each(data, function(key, value){
      if(id == 'ciudad')
      {
       if(value.id == '0')
       {
        html_code += '<option value="'+value.id+'">'+value.name+'</option>';
       }
      }
      else
      {
       if(value.id == id)
       {
        html_code += '<option value="'+value.id+'">'+value.name+'</option>';
       }
      }
     });
     $('#'+id).html(html_code); 
  }
?>