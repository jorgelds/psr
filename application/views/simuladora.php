<section class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 col-md-offset-3 col-lg-offset-3 col-sm-offset-3" id="simuladora">
                <?php if($vista == 0){ ?>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="titulo">
                            Bienvenido Banco de pruebas
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="">Transacción ID:</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="">1181654</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="">Service code:</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="">002</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="">Amount:</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="">100000</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="">Ticket ID:</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="">1442262002</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="">Solicite Date:</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="">1181654</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="">Cicle Number:</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="">2</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="">User Type:</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="">Item0</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="">Reference Number:</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for=""><?php echo $ip.','.$documentType.','.$document;?></label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="">VAT Amount:</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="">0</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="">Entity Code:</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="">9002992280</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="">Entity Name:</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="">EGM INGENIERIA SIN FRONTERA</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="">Financaial Institution Code:</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="">1022</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="">Payment Description:</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="">Compra a EGM - Prueba Soporte - 73</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="">Account Agency:</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="text">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="">Account Number:</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="text">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="">Password:</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="text">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="checkbox" class=""><label for="">Call Confirm Transaction Payment</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <button type="button" class="btn btn-default">Pagar</button>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <a href="<?php echo base_url();?>/index.php/Controler" id="btn" class="btn btn-default">Cancelar</a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <form action="<?php echo base_url();?>/index.php/Controler/debug" method="post">
                                <input type="hidden" name="correo" value="<?php echo $correo; ?>">
                                <input type="hidden" name="bankCode" value="<?php echo $bankCode; ?>">
                                <input type="hidden" name="tipo_cuenta" value="<?php echo $tipo_cuenta; ?>">
                                <button class="btn btn-default" type="submit">Debug</button>
                            </form>
                        </div>
                    </div>
                <?php }else{ ?>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="titulo">
                            Debug Confirm Transaction Payment
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="">trazability Code:</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="" id="trazco" value="1181661">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="">Finantial Institution Code:</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="" id="fininstcode" value="<?php echo $bankCode; ?>">
                            <input type="hidden" name="" id="email" value="<?php echo $correo; ?>">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="">Entity Code:</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="" id="entcode" value="9002992280">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="">Transaction Value:</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="" id="amount" value="100000">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="">VAT Value:</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="" id="tax" value="0">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="">Ticket ID:</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="" id="tki" value="1442262124">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="">Solicitate Date:</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="" value="<?php echo date('Y-m-d');?>">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="">Bank Process Date</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="" value="<?php echo date('Y-m-d');?>">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="">Transaction State:</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <select name="" id="tsta">
                                <option value="OK">OK</option>
                                <option value="Null">Null</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="">Autorization ID</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="" id="auto" value="12">
                        </div>
                    </div>
                    <div class="row">
                        <div class="pull-left">
                            <button type="button" id="call" class="btn btn-default">Call</button>
                        </div>
                        <div class="col-md-8">
                            <div id="mensaje"></div>
                        </div>
                        <div class="pull-right">
                            <a href="<?php echo base_url();?>/index.php/Controler" id="btn" class="btn btn-default">Return to PEE</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>