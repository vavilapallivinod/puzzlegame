
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memory Game with JavaScript</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>

  <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
<p>clue 1</p>
    </div>
    <div class="flip-card-back">
      <h4>I am a fruit with a crown
        In a grid i can be found 
      Five letters, but not just so,
      In the first row, I like to stay</h4>
    </div>
  </div>
</div>

<div class="flip-card">
<div class="flip-card-inner">
  <div class="flip-card-front">
<p>clue 2</p>
  </div>
  <div class="flip-card-back">
    <h4>a fruit that's creamy and green
      A tasty treat that's often seen,
      Not in the front, but further back,
      In a sequence, it makes its track</h4>
  </div>
</div>
</div>

<div class="flip-card">
<div class="flip-card-inner">
  <div class="flip-card-front">
<p>clue 3</p>
  </div>
  <div class="flip-card-back">
    <h4>a fruit so sweet and bright
    A tropical delight, just right
    Not at the start, but down the line
    In the sequence, it's the third to shine</h4>
  </div>
</div>
</div>

<div class="flip-card">
<div class="flip-card-inner">
  <div class="flip-card-front">
<p>clue 4</p>
  </div>
  <div class="flip-card-back">
    <h4>a fruit that's small and round,
    A tasty treat, often found
    Not at the start, but in between,
    In a pattern, it can be seen at the last</h4>
  </div>
</div>
</div>

<div class="flip-card">
<div class="flip-card-inner">
  <div class="flip-card-front">
<p>clue 5</p>
  </div>
  <div class="flip-card-back">
    <h4>a tropical fruit with a spiky crown
    A tasty treat that's golden and brown.
    Not at the start, but further in,
      In a set, it likes to begin</h4>
  </div>
</div>
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
