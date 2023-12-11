function solonumeros(evt){          
    var c = (evt.which) ? evt.which : evt.keyCode;
    
    if(c==8) { 
      return true;
    } else if(c>=48 && c<=57) {
      return true;
    } else {
      return false;
    }
}

function correo(evt){          
  var c = (evt.which) ? evt.which : evt.keyCode;
  if(c==8){
    return true;
  }else if(c==32){
    return false;
    //mayusculas
    }else if(c>=65 && c<=90){
    return true;
    //minusculas
  }else if(c>=97 && c<=122){
    return true;
    // ñ y Ñ
  }else if(c==241){
    return true;
  }else if(c==209){
    return true;
  // letras minusculas y mayusculas con acento
  }else if(c==225 || c==193 || c==233 || c==201 || c==237 || c==205 || c==243 || c==211 || c==250 || c==218){
    return true;
  }else if(c==64  || c==46){
    return true;
  }else if(c>=48 && c<=57) {
    return true;
  }else{
    return false;
  }
  
}

function solonumerosDecimales(evt){
        
    var c = (evt.which) ? evt.which : evt.keyCode;
    
    if(c==8) { 
      return true;
    } else if(c>=48 && c<=57) {
      return true;
    }else if(c==46){
        return true;
    } else {
      return false;
    }
}

function soloLetras(evt){
  var c = (evt.which) ? evt.which : evt.keyCode;
  if(c==8){
    return true;
  }else if(c==32){
    return true;
    //mayusculas
    }else if(c>=65 && c<=90){
    return true;
    //minusculas
  }else if(c>=97 && c<=122){
    return true;
    // ñ y Ñ
  }else if(c==241){
    return true;
  }else if(c==209){
    return true;
  // letras minusculas y mayusculas con acento
  }else if(c==225 || c==193 || c==233 || c==201 || c==237 || c==205 || c==243 || c==211 || c==250 || c==218){
    return true;
  }else{
    return false;
  }
}

function soloLetrasynum(evt){
  var c = (evt.which) ? evt.which : evt.keyCode;
  if(c==8){
    return true;
  }else if(c==32){
    return true;
    //mayusculas
  }else if(c>=48 && c<=57){
      return true;
    }else if(c>=65 && c<=90){
    return true;
    //minusculas
  }else if(c>=97 && c<=122){
    return true;
    // ñ y Ñ
  }else if(c==241){
    return true;
  }else if(c==209){
    return true;
  // letras minusculas y mayusculas con acento
  }else if(c==225 || c==193 || c==233 || c==201 || c==237 || c==205 || c==243 || c==211 || c==250 || c==218){
    return true;
  }else{
    return false;
  }
}





function limpiarAuto(){
  document.getElementById("c_id").value = '';
  document.getElementById("c_precio").value = '';
  document.getElementById("c_modelo").value = '';
  document.getElementById("c_fechafabicacion_dia").value = '1';
  document.getElementById("c_fechafabicacion_mes").value = '1';
  document.getElementById("c_fechafabicacion_año").value = '1900';
  document.getElementById("c_lugarfabricacion").value = '';
  document.getElementById("c_cilindros").value = '4';
  document.getElementById("c_puertas").value = '2';
  document.getElementById("c_peso").value = '';
  document.getElementById("c_capacidad").value = '';
  document.getElementById("c_color").value = '';
  
 
}

function limpiarCliente(){
  document.getElementById("c_id").value = '';
  document.getElementById("c_nombre").value = '';
  document.getElementById("c_correo").value = '';
  document.getElementById("c_dir").value = '';
  document.getElementById("c_telefono").value = '';
  document.getElementById("c_fechanacimiento_dia").value = '1';
  document.getElementById("c_fechanacimiento_mes").value = '1';
  document.getElementById("c_fechanacimiento_año").value = '1900';

  
 
}





