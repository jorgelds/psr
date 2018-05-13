<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controler extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('nuSoap_lib');
    }

    public function index()
    {
        $bancos = $this->Modelo->consultar_bancos();
        $datos = array(
            'bancos' => $bancos
        );
        $this->load->view('head', $datos);
        $this->load->view('inicio');
        $this->load->view('footer');
    }

    function formulario(){

        $valores = array(
            'tipo_cuenta' => $this->input->post('cuent'),
            'bankCode' => $this->input->post('bancos')
         );

        $datos = array(
            'valores' => $valores
        );
        $this->load->view('head', $datos);
        $this->load->view('formulario');
        $this->load->view('footer');
    }

    function bancos()
    {

        $proxyhost = isset($_POST['proxyhost']) ? $_POST['proxyhost'] : '';
        $proxyport = isset($_POST['proxyport']) ? $_POST['proxyport'] : '';
        $proxyusername = isset($_POST['proxyusername']) ? $_POST['proxyusername'] : '';
        $proxypassword = isset($_POST['proxypassword']) ? $_POST['proxypassword'] : '';
        $seed = date('c');

        $tranKey = '024h1IlD';

        $key = $hashString = sha1($seed
            . $tranKey, false);

        $id = '6dd490faf9cb87a9862245da41170ff2';

        $wsdl = 'https://test.placetopay.com/soap/pse/';

        $this->nusoap_client = new nusoap_client($wsdl, true, $proxyhost, $proxyport, $proxyusername, $proxypassword);
        $this->nusoap_client->setCredentials($id, $key, '');
        $this->nusoap_client->forceEndpoint = 'https://test.placetopay.com/soap/pse';

        if ($this->nusoap_client->fault) {
            $text = 'Error: ' . $this->nusoap_client->fault;
        } else {
            if ($this->nusoap_client->getError()) {
                $text = 'Error: ' . $this->nusoap_client->getError();
            } else {
                $param = array(
                    'auth' => array(
                        'login' => $id,
                        'tranKey' => $key,
                        'seed' => $seed
                    ));
                $result = $this->nusoap_client->call('getBankList', $param, 'PlacetoPay_PSEService', '', false, true);
                // Check for a fault
                if ($this->nusoap_client->fault) {
                    echo '<h2>Fault</h2><pre>';
                    print_r($result);
                    echo '</pre>';
                } else {
                    // Check for errors
                    $err = $this->nusoap_client->getError();
                    if ($err) {
                        // Display the error
                        echo '<h2>Error</h2><pre>' . $err . '</pre>';
                    } else {
                        // Display the result
                        $this->Modelo->agregar_bancos($result);
                    }
                }
            }
        }
    }

    function transaccion() {
        if($this->input->post('trs') == 0){
            $datos = array(
                'correo' => $this->input->post('correo'),
                'bankCode' => $this->input->post('bankCode'),
                'tipo_operacion' => $this->input->post('trs'),
                'tipo_cuenta' => $this->input->post('tipo_cuenta')
            );
            $resultados = $this->Modelo->usuarios($datos);
            if($resultados == true){
                $this->load->view('head', $datos);
                $this->load->view('simuladora');
                $this->load->view('footer');
            }
        }
        else{
            $datos = array(
                'tip_ident' => $this->input->post('tip_ident'),
                'document' => $this->input->post('document'),
                'nombre' => $this->input->post('nombre'),
                'apellido' => $this->input->post('apellido'),
                'correo' => $this->input->post('correo'),
                'tel' => $this->input->post('tel'),
                'direccion' => $this->input->post('direccion'),
                'provincia' => $this->input->post('provincia'),
                'pais' => $this->input->post('pais'),
                'pregunta' => $this->input->post('pregunta'),
                'bankCode' => $this->input->post('bankCode'),
                'tipo_cuenta' => $this->input->post('tipo_cuenta'),
                'tipo_operacion' => $this->input->post('trs'),
                'company' => $this->input->post('company'),
                'ciudad' => $this->input->post('city'),
                'respuesta' => $this->input->post('respuesta')
            );
            $resultados = $this->Modelo->usuarios($datos);
            if($resultados == true){
                $this->index();
            }
        }
    }

    function createTransaction() {
        $accion = 'createTransaction';
        $param = array(
                    'bankCode' => '1552',
                    'bankInterface' => '0',
                    'currency' => 'COP',
                    'language' => 'ES',
                    'description' => 'prueba',
                    'reference' => 'referencia',
                    'returnURL' => 'http://localhost/psr/index.php/',
                    'totalAmount' => '1',
                    'ipAddress' => $_SERVER['SERVER_ADDR'],
                    'userAgent' => $_SERVER['HTTP_USER_AGENT'],
                    'payer' => array(
                        'document' => '129996516',
                        'documentType' => 'PPN',
                        'firstName' => 'jorge',
                        'lastName' => 'diaz',
                        'company' => 'jorgelds',
                        'emailAddress' => 'jorgeluisds@hotmail.com',
                        'address' => 'cl 48b #88-24',
                        'city' => 'Medellín',
                        'province' => 'Antoquia',
                        'country' => 'CO',
                        'phone' => '3207362145',
                        'mobile' => '3207362145'
                    ),
                    'buyer' => array(
                        'document' => '129996516',
                        'documentType' => 'PPN',
                        'firstName' => 'jorge',
                        'lastName' => 'diaz',
                        'company' => 'jorgelds',
                        'emailAddress' => 'jorgeluisds@hotmail.com',
                        'address' => 'cl 48b #88-24',
                        'city' => 'Medellín',
                        'province' => 'Antoquia',
                        'country' => 'CO',
                        'phone' => '3207362145',
                        'mobile' => '3207362145'
                    ),
                    'shipping' => array(
                        'document' => '129996516',
                        'documentType' => 'PPN',
                        'firstName' => 'jorge',
                        'lastName' => 'diaz',
                        'company' => 'jorgelds',
                        'emailAddress' => 'jorgeluisds@hotmail.com',
                        'address' => 'cl 48b #88-24',
                        'city' => 'Medellín',
                        'province' => 'Antoquia',
                        'country' => 'CO',
                        'phone' => '3207362145',
                        'mobile' => '3207362145'
                    )

                );
        $respuesta = $this->conexion($accion, 'transaction', $param);
        $this->PSETransactionRequest($respuesta);
    }

    function PSETransactionRequest($result){
        $accion = 'getTransactionInformation';

        $datos = array(
            'returnCode' => "",
            'bankURL' => "",
            'trazabilityCode' => "",
            'transactionCycle' => "",
            'transactionID' => "",
            'sessionID' => "",
            'bankCurrency' => "",
            'bankFactor' => "",
            'responseCode' => "",
            'responseReasonCode' => "",
            'responseReasonText' => ""
        );
        foreach($result['createTransactionResult'] as $key => $value){
                $datos[$key] = $value;
        }
        $respuesta = $this->conexion($accion, 'transactionID', $datos['transactionID']);
        echo '<pre>';
        print_r($respuesta);
        echo '</pre>';
    }

    function conexion($acion, $variable, $parametros){
        $proxyhost = isset($_POST['proxyhost']) ? $_POST['proxyhost'] : '';
        $proxyport = isset($_POST['proxyport']) ? $_POST['proxyport'] : '';
        $proxyusername = isset($_POST['proxyusername']) ? $_POST['proxyusername'] : '';
        $proxypassword = isset($_POST['proxypassword']) ? $_POST['proxypassword'] : '';
        $seed = date('c');
        $tranKey = '024h1IlD';
        $key = $hashString = sha1($seed . $tranKey, false);
        $id = '6dd490faf9cb87a9862245da41170ff2';
        $wsdl = 'https://test.placetopay.com/soap/pse/?wsdl';
        $this->nusoap_client = new nusoap_client($wsdl, true, $proxyhost, $proxyport, $proxyusername, $proxypassword);
        $this->nusoap_client->setCredentials($id, $key, '');
        $this->nusoap_client->forceEndpoint = 'https://test.placetopay.com/soap/pse';
        if ($this->nusoap_client->fault) {
            $text = 'Error: ' . $this->nusoap_client->fault;
        } else {
            if ($this->nusoap_client->getError()) {
                $text = 'Error: ' . $this->nusoap_client->getError();
            } else {
                $param = array(
                    'auth' => array(
                        'login' => $id,
                        'tranKey' => $key,
                        'seed' => $seed
                    ),
                    $variable => $parametros
                );
                $result = $this->nusoap_client->call($acion, $param, 'PlacetoPay_PSEService', '', false, true);
                if ($this->nusoap_client->fault) {
                    echo '<h2>Fault</h2><pre>';
                    print_r($result);
                    echo '</pre>';
                    echo '<h2>Parametros enviados</h2><pre>';
                    print_r($result);
                    echo '</pre>';
                } else {
                    // Check for errors
                    $err = $this->nusoap_client->getError();
                    if ($err) {
                        // Display the error
                        echo '<h2>Error</h2><pre>' . $err . '</pre>';
                    } else {
                        // Display the result
                        return $result;
                    }
                }
            }
        }
    }
}

?>
