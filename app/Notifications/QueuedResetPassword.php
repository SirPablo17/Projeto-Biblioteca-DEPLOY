<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue; // <--- Isso faz a mágica da fila
use Illuminate\Auth\Notifications\ResetPassword;

class QueuedResetPassword extends ResetPassword implements ShouldQueue
{
    use Queueable;

    // Não precisamos mexer em nada, ele já herda tudo do ResetPassword original.
    // O simples fato de ter "implements ShouldQueue" já joga ele para o background.
}