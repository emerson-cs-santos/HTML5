<?php
$tipo = $_GET['Tipo'];

if (!isset($tipo))
{
    $tipo = '';
}

$vetor_resposta = '';

switch ($tipo) 
{
    case 'Fitness':
        $vetor_resposta = 
            [
                "Peso 10Kg"
                ,"Banco de supino"
                ,"Bicicleta ergométrica"
                ,"Esteira"
            ];  
        break;

    case 'Natação':
    $vetor_resposta = 
        [
            "Óculos"
            ,"Touca"
            ,"Sunga"
            ,"Boia"
        ];  
    break;

    case 'Ciclismo':
        $vetor_resposta = 
            [
                "Mountain-bike"
                ,"Capacete"
                ,"Selim"
                ,"Cadeado para bicicleta"
            ];  
        break;        
    
    default:
        $vetor_resposta = 
        [
            "Não encontrado"
        ];    

}

echo json_encode($vetor_resposta);

return;

?>