<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class VaccinationReminder extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public $vaccine;
    public function __construct($vaccine)
    {
        $this->vaccine = $vaccine;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $status = (new \App\Models\Vaccination)->formatScheduleStatus($this->vaccine['scheduled_date']);
        return (new MailMessage)
            ->subject('Upcoming Vaccine Reminder')
            ->greeting('Hello!')
            ->line("Your bird batch: {$this->vaccine['batch_number']} has a scheduled vaccine: {$this->vaccine['name']}")
            ->line("Scheduled: {$this->vaccine['scheduled_date']} ({$status})")
            ->line('Please ensure it is administered on time.')
            ->action('View Dashboard', url('/admin'))
            ->line('Thank you for using Buddy!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
