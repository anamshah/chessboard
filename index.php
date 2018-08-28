<?php
/**
 * Created by Anam Shah
 * Date: 27-08-2018
 * Time: 17:31
 */

include "moves.php";
?>

<html>
<title>Chess Board</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>
    <div class="container">
        <h2>Chessboard</h2>
        <?php if ($error){?> <?php echo "Invalid inputs.";}?>
        <form action="" method="post">
            <div class="form-group">
                <label for="piece">Piece:</label>
                <select class="form-control" id="piece" name="piece">
                    <option value="King">King</option>
                    <option value="Queen">Queen</option>
                    <option value="Bishop">Bishop</option>
                    <option value="Horse">Horse</option>
                    <option value="Rook">Rook</option>
                    <option value="Pawn">Pawn</option>
                </select>
            </div>
            <div class="form-group">
                <label for="position">Current Position:</label>
                <input type="text" maxlength="2" class="form-control" id="position" placeholder="Enter current position of piece" name="position">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>

        <?php if ($moves != "") {?>
            <h3>Possible moves for <?=$_POST['piece']?> from the position <?=$_POST['position']?>: <?php echo $moves;?></h3>
        <?php } ?>
    </div>
</body>
</html>
