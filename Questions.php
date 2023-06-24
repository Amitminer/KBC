<?php

namespace KBC;

require_once __DIR__ . '/LibConfig.php';

class Questions {

    public static function getAll() {
        try {
            $configFilePath = __DIR__ . '/data/questions.yml';
            $config = new LibConfig($configFilePath);
            $questionlist = $config->get('questions');
            // var_dump($questionlist);
            $config->save();
            return $questionlist;
        } catch (\Exception $e) {
            echo 'Error: ' . $e->getMessage();
            return null;
        }
    }

    // Question 1
    public function opt1() {
        echo "[A]12  [B]8\n[C]7   [D]6\n";
    }

    public function Q1($money) {
        $questionlist = self::getAll();

        echo $questionlist[1] . "\n";
        $this->opt1();
        $ans = readline(": ");
        if ($ans === "C" || $ans === "c") {
            echo "Correct Answer! You have won " . ($money + 1000) . " rupees. Let's move on to the next question.\n";
            self::getMoney($money);
        } else {
            echo "Wrong Answer.. better luck next time.\n";
        }
    }

    // Question 2
    public function opt2() {
        echo "[A]24   [B]12\n[C]36   [D]8\n";
    }

    public function Q2($money) {
        $questionlist = self::getAll();

        echo $questionlist[2] . "\n";
        $this->opt2();
        $ans = readline(": ");
        if ($ans === "A" || $ans === "a") {
            echo "Correct Answer! You have won " . ($money * 5) . " rupees. Let's move on to the next question.\n";
            self::getMoney($money);
        } else {
            echo "Wrong Answer.. better luck next time.\n";
        }
    }

    // Question 3
    public function opt3() {
        echo "[A]13  [B]8\n[C]6   [D]7\n";
    }

    public function Q3($money = "50,000") {
        $questionlist = self::getAll();

        echo $questionlist[3] . "\n";
        $this->opt3();
        $ans = readline(": ");
        if ($ans === "D" || $ans === "d") {
            echo "Correct Answer! You have won ₹50,000. Let's move on to the next question.\n";
            self::getMoney($money);
        } else {
            echo "Wrong Answer.. better luck next time.\n";
        }
    }

    // Question 4
    public function opt4() {
        echo "[A]B.R. Ambedkar  [B]Dr. Rajendra Prasad\n[C]Zakir Husain   [D]Lal Bahadur Shastri\n";
    }

    public function Q4($money = "200,000") {
        $questionlist = self::getAll();

        echo $questionlist[4] . "\n";
        $this->opt4();
        $ans = readline(": ");
        if ($ans === "B" || $ans === "b") {
            echo "Correct Answer! You have won ₹200,000. Let's move on to the next question.\n";
            self::getMoney($money);
        } else {
            echo "Wrong Answer.. better luck next time.\n";
        }
    }

    // Question 5
    public function opt5() {
        echo "[A]Guido van Rossum\n[B]Rasmus Lerdorf\n";
    }

    public function Q5($money = "1,000,000") {
        $questionlist = self::getAll();

        echo $questionlist[5] . "\n";
        $this->opt5();
        $ans = readline(": ");
        if ($ans === "A" || $ans === "a") {
            echo "Correct Answer! Amazing, you have won ₹1,000,000. Thank you for playing... more questions coming soon!!\n";
            self::getMoney($money);
        } else {
            echo "Wrong Answer.. better luck next time.\n";
        }
    }
    public static function getMoney(int $money){
        $money = intval($money);
        return $money;
    }
}
