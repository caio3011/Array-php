<?php 

$students = [ 
    [
        'name' => 'Lucas Almeida',
        'RM' => '101', 
        'email' => 'lucas.almeida@etec.sp.gov.br',
        'grades' => [7.5, 5.0, 0.0]
    ],
    [
        'name' => 'Mariana Silva',
        'RM' => '202', 
        'email' => 'mariana.silva@etec.sp.gov.br',
        'grades' => [6.0, 6.5, 7.0]
    ],
    [
        'name' => 'Carlos Henrique',
        'RM' => '303', 
        'email' => 'carlos.henrique@etec.sp.gov.br',
        'grades' => [5.0, 4.5, 6.0]
    ],
    [
        'name' => 'Fernanda Costa',
        'RM' => '404', 
        'email' => 'fernanda.costa@etec.sp.gov.br',
        'grades' => [9.0, 9.5, 10.0]  
    ]
]; 

function calculateAverage($grades) {
    return array_sum($grades) / count($grades);
}

foreach ($students as $student) {
    $average = calculateAverage($student['grades']);
    $status = $average >= 6.0 ? "Aprovado" : "Reprovado";

    echo "Nome: " . $student['name'] . "\n";
    echo "RM: " . $student['RM'] . "\n";
    echo "Email: " . $student['email'] . "\n";
    echo "Notas: " . implode(", ", $student['grades']) . "\n";
    echo "Média: " . round($average, 1) . "\n";  
    echo "Status: " . $status . "\n";
    echo "----------------------------------------\n";
}
?>
