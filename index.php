<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Labb1</title>
</head>
<!-- <nav>
  <a href="#uppgift1">1</a>
  <a href="#uppgift2">2</a>
  <a href="#uppgift3">3</a>
  <a href="#uppgift4">4</a>
  <a href="#uppgift5">5</a>
  <a href="#uppgift6">6</a>
  <a href="#uppgift7">7</a>
  <a href="#uppgift8">8</a>
</nav> -->

<body>
  <!-- Uppgift 1-2 -->
  <section id="uppgift1">
    <?php
    function Name($workname, $number)
    {
      echo "<h$number> $workname </h$number>";
    }
    name('Hello Kitchen', 1);
    ?>
  </section>

  <!-- Uppgift 3 -->
  <section id="uppgift2">
    <p>3</p>
    <?php
    class Food
    {
      public $name;
      function __construct($name)
      {
        $this->name = $name;
      }

      function eat()
      {
        echo "Nu åts en ";
      }
    }
    $maltid = new Food('Banan');
    $maltid->eat();
    echo "$maltid->name";
    ?>
  </section>
</body>

</html>