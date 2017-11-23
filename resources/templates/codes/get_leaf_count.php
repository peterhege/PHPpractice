<?php
    include "binary_tree.php";

    function get_leaf_count($node){
        if($node==null)
            return 0;
        if($node->left==null && $node->right==null)
            return 1;
        return get_leaf_count($node->left) + get_leaf_count($node->right);
    }
?>