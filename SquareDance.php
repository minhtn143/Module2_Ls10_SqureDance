<?php


class SquareDance
{
    protected $squareDance;
    public $manQueue;
    public $womanQueue;

    public function __construct()
    {
        $this->squareDance = [];
        $this->manQueue = new SplQueue();
        $this->womanQueue = new SplQueue();
    }


    public function addToQueue($name, $gender)
    {
        if ($gender != 'Male' && $gender != 'Female') {
            return "Something wrong with gender";
        } else {
            $newDancer = new Dancer($name, $gender);
            switch ($gender) {
                case 'Male':
                    $this->manQueue->enqueue($newDancer);
                    break;
                case 'Female':
                    $this->womanQueue->enqueue($newDancer);
                    break;
                default:
            }
        }
    }

    public function makePair()
    {
        if ($this->manQueue->isEmpty() || $this->womanQueue->isEmpty()) {
            return 'Wait a minute';
        } else {
            $singleMan = $this->manQueue->dequeue();
            $singleWoman = $this->womanQueue->dequeue();
            $couple = [$singleMan, $singleWoman];
            array_push($this->squareDance, $couple);
        }
        return 'Next couple is: '.$singleMan->getName().' - '. $singleWoman->getName();
    }

    /**
     * @return array
     */
    public function getSquareDance(): array
    {
        return $this->squareDance;
    }
}