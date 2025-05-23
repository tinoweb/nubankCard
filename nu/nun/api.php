<?php
// Simples API para validação de CPF
header('Content-Type: application/json');

// Pegar o CPF da query string
$cpf = isset($_GET['cpf']) ? $_GET['cpf'] : '';

// Validar se o CPF existe (simplificado - apenas verifica se tem o tamanho correto)
if (strlen($cpf) === 11) {
    // CPF válido - retorna sucesso
    echo json_encode([
        'status' => 200,
        'message' => 'CPF válido',
        'cpf' => $cpf
    ]);
} else {
    // CPF inválido
    echo json_encode([
        'status' => 400,
        'message' => 'CPF inválido ou não encontrado'
    ]);
}
?>
