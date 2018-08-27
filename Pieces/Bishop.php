<?php
/**
 * Created by Anam Shah.
 * Date: 27-08-2018
 * Time: 18:38
 */

class Bishop extends ChessBoard
{
    var $valid_moves = [];

    function GetMoves($strStartingMove)
    {
        /*get row*/
        $row = parent::getRow($strStartingMove);

        /*get column index*/
        $col = parent::getColumn($strStartingMove);

        $valid_moves = [];

        for ($i = $row; $i >= 0; $i--) {
            if ($col - $i > 0 && $col - $i != $col) {
                $valid_moves[] =  $this->row_letters[$row - $i] . ($col - $i);
            }
        }

        for ($i = 1; $i <= (8 - $col); $i++) {
            if (($row + $i) <= 8) {
                $valid_moves[] = $this->row_letters[$row + $i] . ($col + $i);
            }

        }

        for ($i = 1; $i <= $row; $i++) {
            if ($row - $i > 0) {
                $valid_moves[] = $this->row_letters[$row - $i] . ($col + $i);
            }
        }

        for ($i = 1; $i <= (8 - $row); $i++) {
            if (($col - $i) > 0) {
                $valid_moves[] = $this->row_letters[$row + $i] . ($col - $i);
            }

        }

        return $this->valid_moves;

    }

}