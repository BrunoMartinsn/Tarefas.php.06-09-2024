<?php

namespace App\Service;

use App\Models\Tarefa;

class TarefaService{
public function create(array $tarefa){
    $dados = Tarefa::create([
        'titulo' => $tarefa['titulo'],
        'descricao' => $tarefa['descricao'],
        'status' => 'Esta em aberto'
        

]);
    return $dados;

}
};

