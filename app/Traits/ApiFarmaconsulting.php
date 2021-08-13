<?php

namespace App\Traits;

// use Illuminate\Contracts\Validation\Factory;
// use Illuminate\Http\Request;
// use Illuminate\Validation\ValidationException;

trait ApiFarmaconsulting {

    /**
     * Usuario
     *
     * @var string
     */
    protected $userApi;

    /**
     * Pass
     *
     * @var string
     */
    protected $passApi;

    /**
     * Login
     *
     * @param   string  $user       email del usuario
     * @param   string  $pass       contraseña del usuario
     * @param   string  $catalogue  Código del catalgo
     *
     * @return  response
     */
    public function catalogoLogin ($user, $pass, $catalogue)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'http://gdgo.farmaconsulting.es/WS_GdGO/FarmaService2.asmx?wsdl',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>'<Envelope xmlns="http://schemas.xmlsoap.org/soap/envelope/">
            <Body>
                <CatalogoLogin xmlns="http://tempuri.org/">
                    <Usuario>'.$user.'</Usuario>
                    <Passw>'.$pass.'</Passw>
                    <Catalogo>'.$catalogue.'</Catalogo>
                </CatalogoLogin>
            </Body>
        </Envelope>',
          CURLOPT_HTTPHEADER => array(
            'Content-Type: text/xml; charset=utf-8',
            'Authorization: Basic YXAxXzI6RmN0QWNicDEyMw=='
          ),
        ));

        $output = curl_exec($curl);

        curl_close($curl);

        $parser = $this->transformXml($output);

        return (array)$parser->CatalogoLoginResponse->CatalogoLoginResult;
    }

    /**
     * Obtiene los datos del usuario
     *
     * @param   string  $user  Email del usuario
     *
     * @return  response
     */
    public function datosUsuario ($user) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://gdgo.farmaconsulting.es/WS_GdGO/FarmaService2.asmx?wsdl");
        // SSL important
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Accept: text/xml",
            "Cache-Control: no-cache",
            "Pragma: no-cache",
            'Content-Type: text/xml; charset=utf-8',
            'Authorization: Basic YXAxXzI6RmN0QWNicDEyMw=='
        ));
        curl_setopt($ch, CURLOPT_POSTFIELDS, '<Envelope xmlns="http://schemas.xmlsoap.org/soap/envelope/"><Body><DatosUsuario xmlns="http://tempuri.org/"><Usuario>'.$user.'</Usuario></DatosUsuario></Body></Envelope>');

        $output = curl_exec($ch);

        curl_close($ch);

        $parser = $this->transformXml($output);

        return (array)$parser->DatosUsuarioResponse->DatosUsuarioResult;
    }

    protected function transformXml ($xml) {
        // converting
        $response1 = str_replace("<soap:Body>","",$xml);
        $response2 = str_replace("</soap:Body>","",$response1);

        // convertingc to XML
        $parser = simplexml_load_string($response2);

        return $parser;
    }
}
