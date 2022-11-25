<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BudgetMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $subjet ="Presupuesto de consulta";
    public $budget = "";
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($budget)
    {
        $this->budget = $budget;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('home.emailbudget');
    }
}
