	<section>
        <div class="container-fluid">
            <img src="https://i0.wp.com/semillitasdeamor.edu.co/wp-content/uploads/2016/05/PSE.png?resize=280%2C120&ssl=1" alt="PSE logo" class="img-responsive">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12 col-md-offset-1 col-lg-offset-1">
                PSE - Pagos Seguros en Línea/Persona Natural
            </div>
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!--  -->
                    <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 ">
                        <div class="form-group">
                            <button class="btn btn-pse" id="ya"><i class="fa fa-check-square-o" aria-hidden="true"></i> Soy un usuario registrado</button>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 ">
                        <div class="form-group">
                            <button class="btn btn-pse"><i class="fa fa-user-plus" aria-hidden="true"></i> Quiero registrarme ahora</button>
                        </div>
                    </div>
                </div>
                <form method="post" enctype="multipart/form-data" class="form-horizontal" id="registrar" action="<?php echo base_url();?>index.php/Controler/transaccion">
                    <?php
                    foreach ($valores as $key => $value){
                        echo '<input type="hidden" name="'.$key.'" value="'.$value.'">';
                    }
                    ?>
                    <input type="hidden" name="trs" value="0">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="email">
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
                            <div class="form-group">
                                <label>E-mail</label>
                                <input name="correo" type="email" value="" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="pull-left">
                                <a href="<?php echo base_url();?>/index.php/Controler" id="btn" class="btn btn-primary">Regresar</a>
                            </div>
                            <div class="pull-right">
                                <button type="submit" class="btn btn-primary">Seguir con el pago <i class="fa fa-caret-right" aria-hidden="true"></i> </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="container-fluid" id="formulario">
		<div class="container">
			<div class="row">
				<h3 class="panel-title">
					Formulario
					<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				</h3>
			</div>
        </div>
        <div class="container" id="cuerpo">
            <form method="post" enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url();?>index.php/Controler/transaccion">
                <?php
                foreach ($valores as $key => $value){
                    echo '<input type="hidden" name="'.$key.'" value="'.$value.'">';
                }
                ?>
                <input type="hidden" name="trs" value="1">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!--  -->
                    <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                        <div class="form-group">
                            <label>Tipo de identificacíon</label>
                            <select name="tip_ident" class="form-control" required="required">
                                <option value="0">Seleccione</option>
                                <option value="CC">Cédula de ciudanía colombiana</option>
                                <option value="CE">Cédula de extranjería</option>
                                <option value="TI">Tarjeta de identidad</option>
                                <option value="PPN">Pasaporte</option>
                                <option value="NIT">Número de identificación tributaria</option>
                                <option value="SSN">Social Security Numbe</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
                        <div class="form-group">
                            <label>Número de identificación</label>
                            <input name="document" type="text" value="" class="form-control" required="required">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-11 col-lg-11 col-sm-11 col-xs-12">
                        <hr>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input name="nombre" type="text" onkeypress="return soloLetras(event);" value="" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
                        <div class="form-group">
                            <label>Apellido</label>
                            <input name="apellido" type="text" onkeypress="return soloLetras(event);" value="" class="form-control" required="required">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-11 col-lg-11 col-sm-11 col-xs-12">
                        <hr>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
                        <div class="form-group">
                            <label>Correo</label>
                            <input name="correo" type="email" id="correo" value="" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                        <div class="form-group">
                            <label>Confirmar correo</label>
                            <input type="email" value="" class="form-control" id="secon_correo" required="required">
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                        <div class="form-group">
                            <label>Número de teléfono</label>
                            <input name="tel" type="text" value="" class="form-control" id="telefono" required="required">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-11 col-lg-11 col-sm-11 col-xs-12">
                        <hr>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
                        <div class="form-group">
                            <label>Dirección</label>
                            <input name="direccion" type="text" value="" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                        <div class="form-group">
                            <label>Provincia</label>
                            <input name="provincia" type="text" value="" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                        <div class="form-group">
                            <label>Ciudad</label>
                            <input name="city" type="text" onkeypress="return soloLetras(event);" value="" class="form-control" required="required">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-11 col-lg-11 col-sm-11 col-xs-12">
                        <hr>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                        <div class="form-group">
                            <label>País</label>
                            <select name="pais" class="form-control" required="required" id="">
                                <option value="AD">	Andorra </option>
                                <option value="AE">	Emiratos Árabes Unidos </option>
                                <option value="AF">	Afganistán </option>
                                <option value="AG">	Antigua y Barbuda </option>
                                <option value="AI">	Anguila </option>
                                <option value="AL">	Albania </option>
                                <option value="AM">	Armenia </option>
                                <option value="AN">	Antillas Neerlandesas </option>
                                <option value="AO">	Angola </option>
                                <option value="AQ">	Antártida </option>
                                <option value="AR">	Argentina </option>
                                <option value="AS">	Samoa Americana </option>
                                <option value="AT">	Austria </option>
                                <option value="AU">	Australia </option>
                                <option value="AW">	Aruba </option>
                                <option value="AX">	Islas Áland </option>
                                <option value="AZ">	Azerbaiyán </option>
                                <option value="BA">	Bosnia y Herzegovina </option>
                                <option value="BB">	Barbados </option>
                                <option value="BD">	Bangladesh </option>
                                <option value="BE">	Bélgica </option>
                                <option value="BF">	Burkina Faso </option>
                                <option value="BG">	Bulgaria </option>
                                <option value="BH">	Bahréin </option>
                                <option value="BI">	Burundi </option>
                                <option value="BJ">	Benin </option>
                                <option value="BL">	San Bartolomé </option>
                                <option value="BM">	Bermudas </option>
                                <option value="BN">	Brunéi </option>
                                <option value="BO">	Bolivia </option>
                                <option value="BR">	Brasil </option>
                                <option value="BS">	Bahamas </option>
                                <option value="BT">	Bhután </option>
                                <option value="BV">	Isla Bouvet </option>
                                <option value="BW">	Botsuana </option>
                                <option value="BY">	Belarús </option>
                                <option value="BZ">	Belice </option>
                                <option value="CA">	Canadá </option>
                                <option value="CC">	Islas Cocos </option>
                                <option value="CF">	República Centro-Africana </option>
                                <option value="CG">	Congo </option>
                                <option value="CH">	Suiza </option>
                                <option value="CI">	Costa de Marfil </option>
                                <option value="CK">	Islas Cook </option>
                                <option value="CL">	Chile </option>
                                <option value="CM">	Camerún </option>
                                <option value="CN">	China </option>
                                <option value="CO">	Colombia </option>
                                <option value="CR">	Costa Rica </option>
                                <option value="CU">	Cuba </option>
                                <option value="CV">	Cabo Verde </option>
                                <option value="CX">	Islas Christmas </option>
                                <option value="CY">	Chipre </option>
                                <option value="CZ">	República Checa </option>
                                <option value="DE">	Alemania </option>
                                <option value="DJ">	Yibuti </option>
                                <option value="DK">	Dinamarca </option>
                                <option value="DM">	Domínica </option>
                                <option value="DO">	República Dominicana </option>
                                <option value="DZ">	Argel </option>
                                <option value="EC">	Ecuador </option>
                                <option value="EE">	Estonia </option>
                                <option value="EG">	Egipto </option>
                                <option value="EH">	Sahara Occidental </option>
                                <option value="ER">	Eritrea </option>
                                <option value="ES">	España </option>
                                <option value="ET">	Etiopía </option>
                                <option value="FI">	Finlandia </option>
                                <option value="FJ">	Fiji </option>
                                <option value="FK">	Islas Malvinas </option>
                                <option value="FM">	Micronesia </option>
                                <option value="FO">	Islas Faroe </option>
                                <option value="FR">	Francia </option>
                                <option value="GA">	Gabón </option>
                                <option value="GB">	Reino Unido </option>
                                <option value="GD">	Granada </option>
                                <option value="GE">	Georgia </option>
                                <option value="GF">	Guayana Francesa </option>
                                <option value="GG">	Guernsey </option>
                                <option value="GH">	Ghana </option>
                                <option value="GI">	Gibraltar </option>
                                <option value="GL">	Groenlandia </option>
                                <option value="GM">	Gambia </option>
                                <option value="GN">	Guinea </option>
                                <option value="GP">	Guadalupe </option>
                                <option value="GQ">	Guinea Ecuatorial </option>
                                <option value="GR">	Grecia </option>
                                <option value="GS">	Georgia del Sur e Islas Sandwich del Sur </option>
                                <option value="GT">	Guatemala </option>
                                <option value="GU">	Guam </option>
                                <option value="GW">	Guinea-Bissau </option>
                                <option value="GY">	Guayana </option>
                                <option value="HK">	Hong Kong </option>
                                <option value="HM">	Islas Heard y McDonald </option>
                                <option value="HN">	Honduras </option>
                                <option value="HR">	Croacia </option>
                                <option value="HT">	Haití </option>
                                <option value="HU">	Hungría </option>
                                <option value="ID">	Indonesia </option>
                                <option value="IE">	Irlanda </option>
                                <option value="IL">	Israel </option>
                                <option value="IM">	Isla de Man </option>
                                <option value="IN">	India </option>
                                <option value="IO">	Territorio Británico del Océano Índico </option>
                                <option value="IQ">	Irak </option>
                                <option value="IR">	Irán </option>
                                <option value="IS">	Islandia </option>
                                <option value="IT">	Italia </option>
                                <option value="JE">	Jersey </option>
                                <option value="JM">	Jamaica </option>
                                <option value="JO">	Jordania </option>
                                <option value="JP">	Japón </option>
                                <option value="KE">	Kenia </option>
                                <option value="KG">	Kirguistán </option>
                                <option value="KH">	Camboya </option>
                                <option value="KI">	Kiribati </option>
                                <option value="KM">	Comoros </option>
                                <option value="KN">	San Cristóbal y Nieves </option>
                                <option value="KP">	Corea del Norte </option>
                                <option value="KR">	Corea del Sur </option>
                                <option value="KW">	Kuwait </option>
                                <option value="KY">	Islas Caimán </option>
                                <option value="KZ">	Kazajstán </option>
                                <option value="LA">	Laos </option>
                                <option value="LB">	Líbano </option>
                                <option value="LC">	Santa Lucía </option>
                                <option value="LI">	Liechtenstein </option>
                                <option value="LK">	Sri Lanka </option>
                                <option value="LR">	Liberia </option>
                                <option value="LS">	Lesotho </option>
                                <option value="LT">	Lituania </option>
                                <option value="LU">	Luxemburgo </option>
                                <option value="LV">	Letonia </option>
                                <option value="LY">	Libia </option>
                                <option value="MA">	Marruecos </option>
                                <option value="MC">	Mónaco </option>
                                <option value="MD">	Moldova </option>
                                <option value="ME">	Montenegro </option>
                                <option value="MG">	Madagascar </option>
                                <option value="MH">	Islas Marshall </option>
                                <option value="MK">	Macedonia </option>
                                <option value="ML">	Mali </option>
                                <option value="MM">	Myanmar </option>
                                <option value="MN">	Mongolia </option>
                                <option value="MO">	Macao </option>
                                <option value="MQ">	Martinica </option>
                                <option value="MR">	Mauritania </option>
                                <option value="MS">	Montserrat </option>
                                <option value="MT">	Malta </option>
                                <option value="MU">	Mauricio </option>
                                <option value="MV">	Maldivas </option>
                                <option value="MW">	Malawi </option>
                                <option value="MX">	México </option>
                                <option value="MY">	Malasia </option>
                                <option value="MZ">	Mozambique </option>
                                <option value="NA">	Namibia </option>
                                <option value="NC">	Nueva Caledonia </option>
                                <option value="NE">	Níger </option>
                                <option value="NF">	Islas Norkfolk </option>
                                <option value="NG">	Nigeria </option>
                                <option value="NI">	Nicaragua </option>
                                <option value="NL">	Países Bajos </option>
                                <option value="NO">	Noruega </option>
                                <option value="NP">	Nepal </option>
                                <option value="NR">	Nauru </option>
                                <option value="NU">	Niue </option>
                                <option value="NZ">	Nueva Zelanda </option>
                                <option value="OM">	Omán </option>
                                <option value="PA">	Panamá </option>
                                <option value="PE">	Perú </option>
                                <option value="PF">	Polinesia Francesa </option>
                                <option value="PG">	Papúa Nueva Guinea </option>
                                <option value="PH">	Filipinas </option>
                                <option value="PK">	Pakistán </option>
                                <option value="PL">	Polonia </option>
                                <option value="PM">	San Pedro y Miquelón </option>
                                <option value="PN">	Islas Pitcairn </option>
                                <option value="PR">	Puerto Rico </option>
                                <option value="PS">	Palestina </option>
                                <option value="PT">	Portugal </option>
                                <option value="PW">	Islas Palaos </option>
                                <option value="PY">	Paraguay </option>
                                <option value="QA">	Qatar </option>
                                <option value="RE">	Reunión </option>
                                <option value="RO">	Rumanía </option>
                                <option value="RS">	Serbia y Montenegro </option>
                                <option value="RU">	Rusia </option>
                                <option value="RW">	Ruanda </option>
                                <option value="SA">	Arabia Saudita </option>
                                <option value="SB">	Islas Solomón </option>
                                <option value="SC">	Seychelles </option>
                                <option value="SD">	Sudán </option>
                                <option value="SE">	Suecia </option>
                                <option value="SG">	Singapur </option>
                                <option value="SH">	Santa Elena </option>
                                <option value="SI">	Eslovenia </option>
                                <option value="SJ">	Islas Svalbard y Jan Mayen </option>
                                <option value="SK">	Eslovaquia </option>
                                <option value="SL">	Sierra Leona </option>
                                <option value="SM">	San Marino </option>
                                <option value="SN">	Senegal </option>
                                <option value="SO">	Somalia </option>
                                <option value="SR">	Surinam </option>
                                <option value="ST">	Santo Tomé y Príncipe </option>
                                <option value="SV">	El Salvador </option>
                                <option value="SY">	Siria </option>
                                <option value="SZ">	Suazilandia </option>
                                <option value="TC">	Islas Turcas y Caicos </option>
                                <option value="TD">	Chad </option>
                                <option value="TF">	Territorios Australes Franceses </option>
                                <option value="TG">	Togo </option>
                                <option value="TH">	Tailandia </option>
                                <option value="TH">	Tanzania </option>
                                <option value="TJ">	Tayikistán </option>
                                <option value="TK">	Tokelau </option>
                                <option value="TL">	Timor-Leste </option>
                                <option value="TM">	Turkmenistán </option>
                                <option value="TN">	Túnez </option>
                                <option value="TO">	Tonga </option>
                                <option value="TR">	Turquía </option>
                                <option value="TT">	Trinidad y Tobago </option>
                                <option value="TV">	Tuvalu </option>
                                <option value="TW">	Taiwán </option>
                                <option value="UA">	Ucrania </option>
                                <option value="UG">	Uganda </option>
                                <option value="US">	Estados Unidos de América </option>
                                <option value="UY">	Uruguay </option>
                                <option value="UZ">	Uzbekistán </option>
                                <option value="VA">	Ciudad del Vaticano </option>
                                <option value="VC">	San Vicente y las Granadinas </option>
                                <option value="VE">	Venezuela </option>
                                <option value="VG">	Islas Vírgenes Británicas </option>
                                <option value="VI">	Islas Vírgenes de los Estados Unidos de América </option>
                                <option value="VN">	Vietnam </option>
                                <option value="VU">	Vanuatu </option>
                                <option value="WF">	Wallis y Futuna </option>
                                <option value="WS">	Samoa </option>
                                <option value="YE">	Yemen </option>
                                <option value="YT">	Mayotte </option>
                                <option value="ZA">	Sudáfrica </option>
                            </select class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
                        <div class="form-group">
                            <label>Compañia</label>
                            <input name="company" type="text" value="" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-11 col-lg-11 col-sm-11 col-xs-12">
                        <hr>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                        <div class="form-group">
                            <label>Pregunta de seguridad</label>
                            <select name="pregunta" class="form-control" required="required">
                                <option value="0">Seleccione</option>
                                <option value="1">Nombre de mi primera mascota</option>
                                <option value="2">Color favorito</option>
                                <option value="3">Marca de carro favorita</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
                        <div class="form-group">
                            <label>Respuesta</label>
                            <input name="respuesta" type="password" value="" class="form-control" required="required">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <input type="checkbox" value="" class="">
                            <label>Quiero mantenerme al día con las novedades de PSE.</label>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <input type="checkbox" value="" class="" required="required">
                            <label>Acepto voluntariamente los términos, condiciones y el aviso de Políticas de Privacidad de ACH Colombia S.A. Ver más</label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-11 col-lg-11 col-sm-11 col-xs-12">
                        <hr>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="pull-left">
                        <a href="<?php echo base_url();?>/index.php/Controler" id="btn" class="btn btn-primary">Regresar</a>
                    </div>
                    <div class="pull-right">
                        <button type="submit" id="btn" class="btn btn-primary">Seguir con el pago <i class="fa fa-caret-right" aria-hidden="true"></i> </button>
                    </div>
                </div>
            </form>
        </div>
	</section>