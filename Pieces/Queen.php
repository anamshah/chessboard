<?php
/**
 * Created by Anam Shah.
 * Date: 27-08-2018
 * Time: 18:40
 */

class Queen extends ChessBoard
{
    function GetMoves($strStartingMove)
    {
        $bishop = new Bishop();
        $bishopMoves = $bishop->GetMoves($strStartingMove);

        $rook = new Rook();
        $rookMoves = $rook->GetMoves($strStartingMove);

        $queenMoves = array_merge($bishopMoves, $rookMoves);

        return $queenMoves;

    }

}