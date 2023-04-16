
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memory Game with JavaScript</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <!DOCTYPE html>
<html>
  <head>
    <title>Button Example</title>
    <script>
      function showAlert(buttonName) {
        alert(buttonName);
      }
    </script>
    <style>
      .button-line {
        display:grid;
        align-items: center;
        justify-content: center;
      }
      .button {
        margin: 10px;
        padding: 10px;
        background-color: dark violet;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }
      .button:hover{
        background-color:green;
        color:white;
      }
      #u{
        display:flex;
      }
    </style>
  </head>
  <body>
    <div class="button-line">
      <button class="button" onclick="showAlert('I am a fruit with a crown . In a grid i can be found Five letters, but not just so,In the first row, I like to stay')">clue 1</button>
    </div>
    <div class="button-line">
      <button class="button" onclick="showAlert('a fruit thats creamy and green A tasty treat thats often seen,Not in the front, but further back,In a sequence, it makes its track')">clue 2</button>
    </div>
    <div class="button-line">
      <button class="button" onclick="showAlert('a fruit so sweet and brightA tropical delight, just right Not at the start, but down the lineIn the sequence, its the third to shine')">clue 3</button>
    </div>
    <div class="button-line">
      <button class="button" onclick="showAlert('a fruit thats small and round,A tasty treat, often foundNot at the start, but in between,In a pattern, it can be seen at the last')">clue 4</button>
    </div>
    <div class="button-line">
      <button class="button" onclick="showAlert('a tropical fruit with a spiky crown A tasty treat thats golden and brown.Not at the start, but further in,In a set, it likes to begin')">clue 5</button>
    </div>
<div class="logout-container">
  <form action="logout1.php" method="post">
    <input type="submit" name='t1'  id='t1' value="logout">
  </form>
</div>

    <div class="game">
        <div class="controls">
            <button>Start</button>
            <div class="stats">
                <div class="moves">0 moves</div>
                <div class="timer">Time: 0 sec</div>
            </div>
        </div>
        <div class="board-container">
            <div class="board" data-dimension="4"></div>
            <div class="win">You won!</div>
        </div>
    </div>
</body>
</html>
