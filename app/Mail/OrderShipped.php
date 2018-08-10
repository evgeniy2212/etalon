<?php

namespace App\Mail;

use App\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    public $id, $orderList, $quantity, $priceList, $amount, $name, $number, $adress, $products;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($array)
    {
        $this->id = $array['id'];
        $this->orderList = $array['orderList'];
        $this->quantity = $array['quantity'];
        $this->priceList = $array['priceList'];
        $this->amount = $array['amount'];
        $this->name = $array['name'];
        $this->number = $array['number'];
        $this->adress = $array['adress'];

        foreach (unserialize($this->id) as $item) {

            $this->products[] = Product::find($item);
        }
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('etalon.slon@gmail.com')
            ->view('email');
    }
}
