<?php 
function getAddress () {
   

    if ( isset ($_POST['cep'])){
        $cep = $_POST['cep'];

        $cep = filterCep ($cep);

        if ( isCep($cep) ){
            $address = getAddressViaCep($cep);
            if(property_exists($address,'erro')){
                $address = addressEmpty();
                $address->cep = 'CEP não encontrado';   
            }
        
        } else{
            $address = addressEmpty();
            $address->cep = 'CEP inválido';
        }    
    }else{
        $address = addressEmpty();
    }  
    
    return $address;
}

function addressEmpty () {
    return (object) [
        'cep' => '',
        'logradouro' => '',
        'bairro' => '',
        'localidade' => '',
        'uf' => ''
    ];

}


function filterCep ($cep){
   return preg_replace('/[^0-9]/','',$cep);
}


function isCep ($cep){
    return preg_match('/^[0-9]{5}-?[0-9]{3}$/',$cep);
}


function getAddresscepAberto($cep){
    $url = "http://www.cepaberto.com/api/v3/cep?cep={$cep}";
    $opts = array(
        'http'=>array(
            'method' => 'GET',
            'header' => 'Authorization: Token token=e398347b8f0efd15e6326c04dea35fbd'
      
        )

    );
    $contex = stream_context_create($opts);
    return json_decode(file_get_contents($url,false,$contex));
}






