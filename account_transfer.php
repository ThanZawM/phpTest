<!DOCTYPE html>
<html>
    <body>
        <?php
            class Account {
                public $id;
                public $name;
                public $balance;
                function __construct($id, $name, $balance){
                    $this->id = $id;
                    $this->name = $name;
                    $this->balance = $balance;
                }
                function showInfo(){
                    echo "<h4>".$this->name."'s Information</h4>";
                    echo $this->id.", ".$this->name.", ".$this->balance."<br>";
                }
                function credit($amount){
                    $this->balance += $amount;
                    echo "<br>$amount is added to $this->name!";
                    return $this->balance;
                }
                function debit($amount){
                    if($this->balance >= $amount){
                        $this->balance -= $amount;
                        echo "<br>$amount is subtracted! from $this->name!";
                        return $this->balance;
                    }
                    else {
                        echo "Insufficient amount!<br>";
                        return $this->balance;
                    }   
                }
                function transferTo($Account, $amount){
                    if($this->balance >= $amount){
                        $this->balance -= $amount;
                        $Account->balance += $amount;
                        echo "<br>$this->name transfers $amount to $Account->name!";
                        return $Account->balance;
                    }
                    else{
                        echo "Amount exceed!<br>";
                        return $Account->balance;
                    }
                }
            }

            $acc1 = new Account(1, "Acc1", 10000);
            $acc1->showInfo();
            $acc2 = new Account(2, "Acc2", 5000);
            $acc2->showInfo();
            $acc1->credit(5000);
            $acc1->showInfo();
            $acc1->debit(5000);
            $acc1->showInfo();
            $acc1->transferTo($acc2, 2000);
            $acc1->showInfo();
            $acc2->showInfo();
        ?>
    </body>
</html>