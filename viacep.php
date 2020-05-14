<?php 
function getAddres () {
   

    if ( isset ($_POST['cep'])){
        $cep = $_POST['cep'];

        $cep = filterCep ($cep);

        if ( isCep($cep) ){
            $addres = getAddresViaCep($cep);
            if(property_exists($addres,'erro')){
                $addres = addresEmpty();
                $addres->cep = 'CEP não encontrado';   
            }
        
        } else{
            $addres = addresEmpty();
            $addres->cep = 'CEP inválido';
        }    
    }else{
        $addres = addresEmpty();
    }  
    
    return $addres;
}

function addresEmpty () {
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


function getAddresViaCep ( $cep){

    $url = "http://viacep.com.br/ws/{$cep}/json/";

    var_dump (json_decode(file_get_contents($url)));
    return  json_decode(file_get_contents($url));

}  
