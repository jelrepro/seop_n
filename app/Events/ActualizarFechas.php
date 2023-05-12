<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

use App\Models\Contrato;
use App\Models\Proyecto;

class ActualizarFechas
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }

    public function handle()
    {
        // Obtener todos los contratos
        $contratos = Contrato::all();
        $proyectos = Proyecto::all();

        // Actualizar la fecha de fin de cada contrato
        foreach ($contratos as $contrato) {
            $contrato->fin = now();
            $contrato->save();
        }
        foreach ($proyectos as $proyecto) {
            $proyecto->fin = now();
            $proyecto->save();
        }

    }
}
