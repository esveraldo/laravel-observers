<?php

namespace App\Observers;

use App\Log;

class ClienteObservers {

    public function created($cliente) {
        Log::create([
            'acao' => 'cadastro',
            'model' => 'cliente',
            'user_id' => $cliente->user_id,
        ]);
    }

}
