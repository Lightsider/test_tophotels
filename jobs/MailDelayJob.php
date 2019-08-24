<?php
namespace app\jobs;

use app\models\Consultants;
use app\models\Orders;
use yii\base\BaseObject;
use app;

class MailDelayJob extends BaseObject implements \yii\queue\JobInterface
{
    /**
     * @var app\models\Orders $order
     */
    public $order;

    /**
     * @param \yii\queue\Queue $queue
     */
    public function execute($queue)
    {
        $email = Consultants::find($this->order->consultant)->one()->email;
        $this->order->sendEmailNotification($email);
    }

    /**
     * @return Orders
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param Orders $order
     */
    public function setOrder(Orders $order)
    {
        $this->order = $order;
    }

}