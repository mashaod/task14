<?php
class Calc {
    private $numA;
    private $numB;
    private $remember;
    
    public function setNumA($num) 
    {
        if (isset($num) && is_int($num)) 
        {
            $this->numA = $num;
        }
        else
        {
            throw new Exception("Num A not issent");
        }
    }
    
    public function setNumB($num)
    {
        if (isset($num) && is_int($num)) 
        {
            $this->numB = $num;
        }
        else
        {
            throw new Exception("Num B not issent");
        }

    }
    
    public function setRem($num) 
    {
        if (isset($num)) {
          $this->remember = $num;
        }
        else
        {
            throw new Exception("Some error");
        }
    }
    
    private function getNumA() 
    {
        return $this->numA;
    }
    
    private function getNumB() 
    {
        return $this->numB;
    }
    
    private function getRem() 
    {
        return $this->remember;
    }
    
    //Plus
    public function numPlus()
    {
        $numA = $this->getNumA();
        $numB = $this->getNumB();
        $result = $numA + $numB;
        return $result;
    }
    
    //Subtraction
    public function numMin()
    {
        $numA = $this->getNumA();
        $numB = $this->getNumB();
        $result = $numA - $numB;
        return $result;
    }
    
    //Division
    public function numDiv()
    {
        $numA = $this->getNumA();
        $numB = $this->getNumB();
    
    if ($numB > 0) 
        {
        $result = $numA / $numB;
        return $result; 
        } 
        else
        {
            throw new Exception("Division by zero");
        }
    }
    
    //Multiplication
    public function numMul()
    {
        $numA = $this->getNumA();
        $numB = $this->getNumB();
        $result = $numA * $numB;
        return $result;
    }
    
    //Different function for two var 
    //Square root
    public function sqRootA()
    {
        $numA = $this->getNumA();
        $result = sqrt("$numA");
        return $result;
    }
    
    public function sqRootB()
    {
        $numB = $this->getNumB();
        $result = sqrt("$numB");
        return $result;
    }
    
    //Adding numbers to memory
    public function mPlus($num)
    {
        $remember = $this->getRem();
        $numA = $this->getNumA();
        $numB = $this->getNumB();

        if(!empty($remember))
        {   
            if($num == "a" || $num == "A" || $num == "1")
            {
                $result = $remember + $numA;
            }
            elseif($num == "b" || $num == "B" || $num == "2")
            {
                $result = $remember + $numB;
            }
            $this->setRem($result);
            return $this->getRem(); 
        }
        else
        {
            if($num == "a" || $num == "A" || $num == "1")
            {
                $this->setRem($numA);
            }
            elseif($num == "b" || $num == "B" || $num == "2")
            {
                $this->setRem($numB);
            }       
            return $this->getRem();
        }
    }
    
    //Less code, less security
    //Subtraction of numbers from memory
    public function mMinus($num)
    {
        $remember = $this->getRem();
        $result = $remember - $num;
        $this->setRem($result);
        return $this->getRem();
    }  

    //Calculation of percent
    public function percen($num)
    {
        if($num == "a" || $num == "A" || $num == "1")
        {
            $numA = $this->getNumA();
            $result = $numA * 0.01;
            return $result;
        }
        elseif ($num == "b" || $num == "B" || $num == "2") 
        {
            $numB = $this->getNumB();
            $result = $numB * 0.01;
            return $result;
        }
        else
        {
            throw new Exception("Wrong argument in percent");
        }
    }

    public function values($a, $b)
    {
        $this->setNumA($a);
        $this->setNumb($b);

        $arrayValues['numFirst'] = $this->getNumA();
        $arrayValues['numSecond'] = $this->getNumB();     
        $arrayValues['plusResult'] = $this->numPlus();
        $arrayValues['minResult'] = $this->numMin();
        $arrayValues['divResult'] = $this->numDiv();
        $arrayValues['mulResult'] = $this->numMul();
        $arrayValues['sqRootA'] = $this->sqRootA();
        $arrayValues['sqRootB'] = $this->sqRootB();
        $arrayValues['percentA'] = $this->percen('A');
        $arrayValues['percentB'] = $this->percen('B');
        $arrayValues['mPlusA'] = $this->mPlus('A');
        $arrayValues['mPlusB'] = $this->mPlus('B');
        $arrayValues['mMinusA'] = $this->mMinus($a);
        $arrayValues['mMinusB'] = $this->mMinus($b);
        return $arrayValues;
    }
}
?>
