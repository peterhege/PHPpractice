<?php
    interface interface1{
        public function method2();
    }

    interface interface2{
        public function method3();
    }

    abstract class fruit{
        public $color;

        public function __construct($color="undefined"){
            $this->color = $color;
        }

        abstract public function method1();

        public function __toString(){
            return "It's a(n) ".$this->color." fruit.";
        }
    }

    class apple extends fruit implements interface1, interface2 {
        public $cores;

        public function __construct($color = "red", $cores = 1)
        {
            parent::__construct($color);
            $this->cores = $cores;
        }

        public function method2()
        {
            echo $this->cores;
        }

        public function method3()
        {
            return $this->cores;
        }

        public function method1()
        {
            echo $this->color;
        }

        public function __toString()
        {
            return "It's a(n) ".$this->cores."-cores apple. ". parent::__toString();
        }
    }
?>