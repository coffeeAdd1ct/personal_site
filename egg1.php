<?php include './scripts/signature.php';?>
<html>
<head>
  <?php include './scripts/main.php';?>
</head>
  <body onload="startGame()">
    <div class="view-pane" id="main_view_pane">
      <div class="egg" id="easter" style="margin:auto;">
        <div id="game">
        </div>
        <button onmousedown="accelerate(-0.2)" id="accelerate_button" onmouseup="accelerate(0.05)" style="padding:10px;float:left; background-color:red; color: white; line-height:20px;font-size:20px;">BOUNCE</button>
        <button id="reset_button" style="padding:10px; background-color:red; color: white; line-height:20px;font-size:20px;float:right;display:none;" onclick="myObstacles = [];myGameArea.clear();startGame();myScore.update();myGamePiece.newPos();myGamePiece.update();">Reset</button>
        <div id="scoreboard" style="display:none;color:white;margin-left:450px;">
          <div class="title" style="font-size: 30px;margin-left: -60px;">
            Scoreboard
          </div>
          <div>1.</div>
          <div>2.</div>
          <div>3.</div>
          <div>4.</div>
          <div>5.</div>
          <div>6.</div>
          <div>7.</div>
          <div>8.</div>
          <div>9.</div>
          <div>10.</div>
        </div>
      </div>
    </div>
  </body>
</html>
