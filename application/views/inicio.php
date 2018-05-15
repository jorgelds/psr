
<section class="container-fluid">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
        <form action="<?php echo base_url();?>index.php/Controler/formulario" method="post" enctype="multipart/form-data" class="form-horizontal">
            <div class="row">
                <div class="col-sm-6 col-xs-12 pull-left">
                    <label for="">Seleccione el tipo de cuenta</label>
                    <select name="cuent" id="" class="form-control" required="required">
                        <option value="0">Persona</option>
                        <option value="1">Juridica</option>
                    </select>
                </div>
                <div class="col-sm-6 col-xs-12 pull-right">
                    <div class="form-group">
                        <label>Bancos</label>
                        <select name="bancos" id="banco" class="form-control" required="required">
                            <option value="0">A continuación seleccione su banco</option>
                            <?php
                            foreach ($bancos as $key){
                                if($key['bankCode'] == 0){

                                }else{
                                    echo '<option value="'.$key['bankCode'].'">'.$key['bankName'].'</option>';
                                }
                            } ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="pull-right col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <button type="submit">
                        <img class="img-responsive" src="http://politecnicocohan.edu.co/wp-content/uploads/2018/04/PSE.png" alt="PSE enlace">
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>