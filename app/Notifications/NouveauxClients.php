<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;use Illuminate\Notifications\Notifiable;
use App\user;use App\Buser;
class NouveauxClients extends Notification
{
    use Queueable;

    private $user;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }
    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','database'];
    
    }

    /**php artisan make:notification NouveauxClient
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)

                    ->line('Un nouvel utilisateur s est enregistré par e-mail')
                    ->action('consulter votre compte', url('/'))
                    ->line('Merci d utiliser  notre App!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
   /* public function toArray($notifiable)
    {
        return [
            //
        ];
    }*/
    public function toArray($notifiable)
    {
        return [
          
            'name' => $this->user->Nom,
            'email' => $this->user->email,
        ];
    }
}
