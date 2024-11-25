<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $fillable = ['cliente_id', 'item_id', 'tipo_servico_id', 'data_pedido'];
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    // Relacionamento com o modelo Item
    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    // Relacionamento com o modelo TipoServico
    public function tipoServico()
    {
        return $this->belongsTo(TipoServico::class);
    }

}
