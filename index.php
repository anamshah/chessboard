<?php
/**
 * Created by Anam Shah
 * Date: 27-08-2018
 * Time: 17:31
 */



include "autoload.php";

$pawn = new Pawn();
$moves = $pawn->GetMoves("D5");
print_r($moves);exit;