<?php

namespace KBC;
require_once __DIR__ . '/Questions.php';

class kbc {
    protected $run;
    public array $questionlist;

    public function __construct() {
        $this->questionlist = Questions::getAll();
        $this->run = $this->runKBC();
    }
    public function runKBC() {
        $e = readline("Press ENTER to join Kaun Banega crorepati. ");
        $input = strtoupper($e);
        if (!empty($this->questionlist)) {
            if ($input == "ENTER") {
                print("Loading questions..\n");
                print("Your current balance is {$this->money}\n");
                $this->loadquestions($input);
            }
        } else {
            print("exit()\n");
        }
    }
    public function loadquestions(string $input): void {
        $money = 0; // default balance xD
        $questions = new Questions();
        $questions->Q1($money);
        $questions->Q2($money);
        $questions->Q3($money);
        $questions->Q4($money);
        $questions->Q5($money);
        $money = Questions::getMoney($money);
        print("congratulations you won {$money}\n");
        $upi = readline("Enter your upi.. our agent will send you ur money xD : \n");
        if ($upi == " ") {
            $upi = readline("arre yr upi enter karna. time kyu waste kar rha ._.\n");
            print("KBC team Gave you {$money} rs");
        }
    }
}
$kbc = new kbc();
?>