<?php
/**
 * Created by Anam Shah.
 * Date: 27-08-2018
 * Time: 18:34
 */

class King extends ChessBoard
{
    var $valid_moves = [];

    function GetMoves($strStartingMove)
    {
        /*get row*/
        $row = parent::getRow($strStartingMove);

        /*get column index*/
        $col = parent::getColumn($strStartingMove);

        for ($i = -1; $i <= 1; $i++) {
            for ($j = -1; $j <= 1; $j++) {
                if ($row - $i != 0)
                    if ($col - $j != 0)
                        if (!($this->row_letters[$row - $i] == $this->row_letters[$row] && ($col - $j) == $col))
                            $this->valid_moves[] = $this->row_letters[$row - $i] . ($col - $j);
            }
        }

        return $this->valid_moves;

    }

}