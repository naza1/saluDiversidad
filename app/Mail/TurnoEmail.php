<?php
 
namespace App\Mail;
 
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
 
class TurnoEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $turnoDato;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($turno)
    {
        $this->turnoDato = $turno;
    }
 
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Asignación de turno')->view('mails.turno');
    }
}