<!-- 
    Ultima edici�n por IM Revolution 18-19
    Fecha: 10.09.2018 
    Cambios: 
    - Se agregó la checkbox.
-->
<script type='text/javascript' src='https://aiesec.cl/wp-includes/js/jquery/jquery-3.3.1.js'></script>
<script type='text/javascript' src='https://aiesec.cl/wp-content/plugins/oGE/js/select_cu.js'></script>
<script type='text/javascript' src='https://aiesec.cl/wp-content/plugins/oGE/js/disable.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

$(document).ready(function(){
    $(document).ajaxStart(function(){
        $("#wait").css("display", "block");
    });
    $(document).ajaxComplete(function(){
        $("#wait").css("display", "none");
    });
    $("button").click(function(){
        $("#txt").load("demo_ajax_load.asp");
    });
});
</script>

<div style="width: 80%; margin-left: 10%;background: transaparent; padding-bottom:25px; padding-top:35px;">
    <form action="{path-gis_reg_process}" method="POST" class="regform" id="expa_reg_form" accept-charset="UTF-8" 
          style="background-color: transparent; width:80%; margin-left:10%;" onsubmit="boton.disabled = true; return true;">
        <table class="sighnup-form-table" style="background-color: transparent;">
        	<tr>
                <td style="vertical-align: top;padding-top: 15px; padding-left: 5%; width:30%;text-align: right;" class="input-name">
                    <h6 style="font-weight:normal; display:inline;font-style:inherit;">Nombre</h6>
                    <span class="required">*</span>
                </td>
                <td style="width:66%;">
                    <input 	style="border:1px solid #037Ef3; height: 30px; width: 95%;" id="first_name" class="input" type="text"
                        	maxlength="50" name="first_name" required oninvalid="this.setCustomValidity('Ingresa tu nombre')" 
                        	oninput="setCustomValidity('')">
                </td>
            </tr>
            <tr>
                <td style="vertical-align: top;padding-top: 15px; padding-left: 5%; width:30%;text-align: right;" class="input-name">
                    <h6 style="font-weight:normal; display:inline;font-style:inherit;">Apellidos</h6>
                    <span class="required">*</span>
                </td>
                <td style="width:66%;">
                    <input 	style="border:1px solid #037Ef3; height: 30px; width: 95%;" id="last_name" class="input" type="text"
                        	name="last_name" maxlength="50" required oninvalid="this.setCustomValidity('Ingresa tu apellido')" 
                            oninput="setCustomValidity('')">
                </td>
            </tr>
            <tr>
                <td style="vertical-align: top;padding-top: 15px; padding-left: 5%; width:30%;text-align: right;" class="input-name">
                    <h6 style="font-weight:normal; display:inline;font-style:inherit;">Edad</h6>
                    <span class="required">*</span>
                </td>
                <td style="width:66%;">
                    <input 	style="border:1px solid #037Ef3; height: 30px; width: 95%;" placeholder="18" id="edad" class="input"
                        	type="text" name="edad" maxlength="2" required oninvalid="this.setCustomValidity('Ingresa tu edad')"
                        	oninput="s('')">
                </td>
            </tr>
        
            <tr>
            	<td style="vertical-align: top;padding-top: 15px; width:30%;padding-left: 5%;text-align: right;" class="input-name">
                    <h6 style="font-weight:normal; display:inline;font-style:inherit;">E-mail</h6>
                    <span class="required">*</span>
                </td>
                <td>
                    <input 	style="border:1px solid #037Ef3; height: 30px; width: 95%;" id="email" class="input" type="text" name="email"
                        	maxlength="50" required oninvalid="this.setCustomValidity('Please input valid e-mail')" 
                            oninput="setCustomValidity('')" 
                            pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$">
                </td>
            </tr>
            <tr style="background-color: transparent;">
                <td style="vertical-align: top;padding-top: 15px; width:30%;padding-left: 5%;text-align: right;" class="input-name">
                    <h6 style="font-weight:normal; display:inline;font-style:inherit;">Contraseña</h6>
                    <span class="required">*</span>
                </td>
                <td style="width:66%;">
                    <input 	style="border:1px solid #037Ef3; height: 30px; width: 95%;" id="password" class="input" type="password"
                        	name="password" required oninvalid="this.setCustomValidity('La contraseña debe contener al menos: \n&#8226;&nbsp;Una may�scula \n&#8226;&nbsp;Una min�scula \n&#8226;&nbsp;Un n�mero \n&#8226;&nbsp;M�nimo 8 caracteres')"
                        	oninput="setCustomValidity('')" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}">
                </td>
            </tr>
            <tr>
                <td style="vertical-align: top;padding-top: 15px; width:30%; padding-left: 5%;text-align: right;" class="input-name">
                    <h6 style="font-weight:normal; display:inline;font-style:inherit;">Celular</h6>
                    <span class="required">*</span>
                </td>
                <td>
                    <input 	style="border:1px solid #037Ef3; height: 30px; width: 95%;" id="phone" class="input" type="text" name="phone"
                        	maxlength="50" required oninvalid="this.setCustomValidity('Ingresa un número telefónico valido')" 
                            oninput="setCustomValidity('')" pattern="\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{3})">
                </td>
            </tr>
            
            <tr>
                <td style="vertical-align: top;padding-top: 15px; width:30%; padding-left: 5%;text-align: right;" class="input-name">
                    <h6 style="font-weight:normal; display:inline;font-style:inherit;">Region</h6>
                    <span class="required">*</span>
                </td>
                <td>
                	<select id="ciudad" name="ciudad" title="ciudad" style="border:1px solid #037Ef3; width: 95%;">
                        <option value="1" style="background-color: #fff;">Arica y Parinacota</option>
                        <option value="2" style="background-color: #fff;">Tarapacá</option>
                        <option value="3" style="background-color: #fff;">Antofagasta</option>
                        <option value="4" style="background-color: #fff;">Atacama</option>
                        <option value="5" style="background-color: #fff;">Coquimbo</option>
                        <option value="6" style="background-color: #fff;">Valparaiso</option>
                        <option value="7" style="background-color: #fff;">Región metropolitana de Santiago</option>
                        <option value="8" style="background-color: #fff;">OHiggins</option>
                        <option value="9" style="background-color: #fff;">Maule</option>
                        <option value="10" style="background-color: #fff;">Ñuble</option>
                        <option value="11" style="background-color: #fff;">Bíobío</option>
                        <option value="12" style="background-color: #fff;">La Araucanía</option>
                        <option value="13" style="background-color: #fff;">Los Rios</option>
                        <option value="14" style="background-color: #fff;">Los Lagos</option>
                        <option value="15" style="background-color: #fff;">Aysén</option>
                        <option value="16" style="background-color: #fff;">Magallanes</option>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td style="vertical-align: top;padding-top: 15px; width:30%; padding-left: 5%;text-align: right;" class="input-name">
                    <h6 style="font-weight:normal; display:inline;font-style:inherit;">Universidad</h6>
                    <span class="required">*</span>
                </td>
                
                <td>
                    <select id="universidad" name="universidad" title="Universidad" style="border:1px solid #037Ef3; width: 95% ;">
                    </select>
                </td>
            </tr>
            
            <select id="localcommittee" name="localcommittee" style="display:none">
            </select>   
            
            <tr>
                <td style="vertical-align: top;padding-top: 15px; padding-left: 5%; width:30%;text-align: right;" class="input-name">
                    <h6 style="font-weight:normal; display:inline;font-style:inherit;">Carrera Profesional</h6>
                    <span class="required">*</span>
                </td>
                
                	<td>
                    <select id="carrera" name="carrera" title="Carreras " style="border:1px solid #037Ef3; width: 95% ;">
                    </select>
                	</td>
            </tr>
            <tr>
                <td style="vertical-align: top;padding-top: 15px; width:30%;padding-left: 5%;text-align: right;" class="input-name">
                    <h6 style="font-weight:normal; display:inline;font-style:inherit;">Ciclo en curso</h6>
                    <span class="required">*</span>
                </td>
                <td>
                    <select id="ciclo" name="ciclo" title="{ciclo}" style="border:1px solid #037Ef3; width: 95%;">
                        <option value="1" style="background-color: #fff;">1º - 3º</option>
                        <option value="2" style="background-color: #fff;">4º - 6º</option>
                        <option value="3" style="background-color: #fff;">7º - 10º</option>
                        <option value="4" style="background-color: #fff;">Egresado</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td style="vertical-align: top;padding-top: 15px; width:30%; padding-left: 5%;text-align: right;" class="input-name">
                    <h6 style="font-weight:normal; display:inline;font-style:inherit;">{interested_in} </h6>
                    <span class="required">*</span>
                </td>
                <td>
                    <select id="interested_in" name="interested_in" title="{source}" style="border:1px solid #037Ef3; width: 95%;">
                        <option value="3" style="background-color: #fff;">Emprendedor Global</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td style="vertical-align: top;padding-top: 15px; width:30%;padding-left: 5%;text-align: right;" class="input-name">
                    <h6 style="font-weight:normal; display:inline;font-style:inherit;">Mes estimado de viaje</h6>
                    <span class="required">*</span>
                </td>
                <td>
                    <select id="source" name="source" title="{source}" style="border:1px solid #037Ef3; width: 95%;">

                        <option value="1" style="background-color: #fff;">Enero</option>
                        <option value="2" style="background-color: #fff;">Febrero</option>
                        <option value="3" style="background-color: #fff;">Marzo</option>
                        <option value="4" style="background-color: #fff;">Abril</option>
                        <option value="5" style="background-color: #fff;">Mayo</option>
                        <option value="6" style="background-color: #fff;">Junio</option>
                        <option value="7" style="background-color: #fff;">Julio</option>
                        <option value="8" style="background-color: #fff;">Agosto</option>
                        <option value="9" style="background-color: #fff;">Septiembre</option>
                        <option value="10" style="background-color: #fff;">Octubre</option>
                        <option value="11" style="background-color: #fff;">Noviembre</option>
                        <option value="12" style="background-color: #fff;">Diciembre</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td style="vertical-align: top;padding-top: 15px; width:30%;padding-left: 5%;text-align: right;" class="input-name">
                    <h6 style="font-weight:normal; display:inline;font-style:inherit;">Medio por el cuál nos conociste</h6>
                    <span class="required">*</span>
                </td>
                <td>
                    <select id="interested_when" name="interested_when" title="{interested_when}" style="border:1px solid #037Ef3; width: 95%;">
                     
                        <option value="1" style="background-color: #fff;">Facebook</option>
                        <option value="6" style="background-color: #fff;">Evento</option>
                        <option value="5" style="background-color: #fff;">Stand en Universidad</option>
                        <option value="4" style="background-color: #fff;">Amigos o Familia</option>
                        <option value="3" style="background-color: #fff;">Instagram</option>
                        <option value="10" style="background-color: #fff;">Twitter</option>
                        <option value="11" style="background-color: #fff;">LinkedIn</option>
                        <option value="12" style="background-color: #fff;">Publicidad en Universidad</option>
                        <option value="7" style="background-color: #fff;">Soy Miembro de AIESEC</option>
                        <option value="13" style="background-color: #fff;">Alumni</option>
                        <option value="8" style="background-color: #fff;">Otro</option>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td></td>
                <td class="check-holder" colspan="1">
                    <input checked="" id="terms" type="checkbox" style="display: inline;">
                    <label for="terms" style="display: inline;">
                        <span class="required" style="display: inline;">
                            He leído y acepto los
                            <a href="https://aiesec.pe/assets/Terminos%20y%20Condiciones%20-%20Espa%C3%B1ol.pdf" target="_blank"> términos y condiciones.</a>
                        </span>
                    </label>
                </td>
            </tr>
            <tr>
            <td></td>
                <td class="check-holder" colspan="1">
                    <input name="user_allow_phone_communication" type ="hidden" value="false">
                    <input checked="checked" id="user_allow_phone_communication" name="user_allow_phone_communication" type="checkbox" value = "true">
                    <label>&nbsp; &nbsp;Acepto que me puedan contactar o enviar un mensaje a través de mi número telefónico &nbsp; &nbsp; &nbsp; &nbsp;</label>
                </td>
            </tr>
            <tr>
                <input type="hidden" name="website_url" value="{website_url}">
                <input type="hidden" name="website_url" value="{website_url}">
        </table>
        <div id="error" class="error">
            <p></p>
        </div>

        <div id="submit" style="padding:0px">
            <input type="submit" id="submit_button" name="boton" clicked="false" class="send" value="Regístrate" style="width: 100%; margin: 6px 0px; padding: 6px; background: #037ff3;">
        </div>
    </form>
</div>
