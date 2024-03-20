<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WelcomeEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct($user)
    {
        //
        $this->user = $user;
    }
    

    public function build()
{
    return $this->subject('Bienvenido a la aplicación!')
                ->view('emails.welcome')
                ->with([
                    'name' => $this->user->name,
                ]);
}



//     /**
//      * Get the message envelope.
//      */
//     public function envelope(): Envelope
//     {
//         return new Envelope(
//             subject: 'Welcome Email',
//         );
//     }

//     /**
//      * Get the message content definition.
//      */
//     public function content(): Content
// {
//     return new Content(
//         view: 'emails.welcome',
//         // Asegúrate de reemplazar 'view.name' con la ruta de tu vista real
//         // y pasar los datos necesarios como se muestra abajo.
//         with: [
//             'name' => $this->user->name,
//             // Puedes pasar más datos aquí si es necesario
//         ],
//     );
// }

//     /**
//      * Get the attachments for the message.
//      *
//      * @return array<int, \Illuminate\Mail\Mailables\Attachment>
//      */
//     public function attachments(): array
//     {
//         return [];
//     }

    
}
