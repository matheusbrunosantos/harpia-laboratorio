<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcoesPropostas extends Model
{
    use HasFactory;

    protected $table = 'acoes_propostas';
    protected $fillable = [

        'acao',
        'responsavel',
        'prazo',
        'prazo_final',
        'necessario_prorrogacao',
        'justificativa',
        'data_encerramento'
    ]; 

}
