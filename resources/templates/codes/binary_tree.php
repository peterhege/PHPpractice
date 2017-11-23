<?php
    class node{
        public $value;
        public $left;
        public $right;

        public function __construct($item) {
            $this->value = $item;
            $this->left = null;
            $this->right = null;
        }
    }

    class tree{
        public $root;

        public function __construct() {
            $this->root = null;
        }

        public function isEmpty() {
            return $this->root === null;
        }

        public function insert($item) {
            $node = new node($item);
            if ($this->isEmpty()) {
                $this->root = $node;
            }
            else {
                $this->insertNode($node, $this->root);
            }
        }

        protected function insertNode($node, &$subtree) {
            if ($subtree === null) {
                $subtree = $node;
            }
            else {
                if ($node->value > $subtree->value) {
                    $this->insertNode($node, $subtree->right);
                }
                else if ($node->value < $subtree->value) {
                    $this->insertNode($node, $subtree->left);
                }
            }
        }

        public function writeTree($node,$css_class=""){
            if($node != null)
            {
                if($css_class == ""){
                    echo "<div id=\"tree\"><div class=\"tree\"><h5>";
                }
                else{
                    echo "<h5 class=\"" . $css_class . "\">";
                }

                echo "<span>" . $node->value . "</span></h5>";
                echo "<div style=\"display:flex;flex-wrap:nowrap;\">";
                echo "<div style=\"width:50%\">";
                $this->writeTree($node->left,"leftChild");
                echo "</div>";
                echo "<div style=\"width:50%\">";
                $this->writeTree($node->right,"rightChild");
                echo "</div>";
                echo "</div>";

                if($css_class == ""){
                    echo "</div></div>";
                }
            }
        }
    }
?>