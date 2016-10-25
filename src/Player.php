<?php


class Player
{
    protected $score;
    protected $name;

    /**
     * Player constructor.
     * @param $score
     * @param $name
     */
    public function __construct($score, $name)
    {
        $this->score = $score;
        $this->name = $name;
    }

    public function winpoint()
    {
        $this->score = "15";
    }

    public function score()
    {
        return $this->score();
    }
}

//$player1 = new Player(0,'Player 1');
//$player2 = new Player(0,'Player 2');
//
//$tennis = new TennisGame();
//
//echo $tennis->score();
//
//$player1->winpoint();
//echo $tennis->score();