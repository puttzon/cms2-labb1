<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Labb1</title>
</head>


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
        echo "Nu åts en " . $this->name;
      }
    }
    // $maltid = new Food('Banan');
    // $maltid->eat();
    // echo "$maltid->name";
    ?>
  </section>

  <!-- Uppgift 4-5 -->
  <?php
  class Sandwitch extends Food implements Grillable
  {
    public function grilla()
    {
    }

    private $options;

    function get_options()
    {
      return $this->options;
    }

    function set_options($options)
    {
      $this->options = $options;
    }

    function eat()
    {

      echo 'Nu åts en ' . $this->name . ' som innehåller <br>';
      foreach ($this->options as $key => $value) {
        echo $value . ' ' . $key . ' ';
        echo '<br>';
      }
    }
  }

  function grillen(Grillable $x)
  {
    echo 'Nu har en ' . $x->name . ' grillats';
  }

  interface Grillable
  {

    public function grilla();
  }

  $x = new Sandwitch('grillmacka');
  $order = new Sandwitch('Macka');
  $order2 = new Sandwitch('konstig macka');
  $order3 = new Sandwitch('Bästa mackan');

  $order->set_options(array(
    "butter" => 1, "cheese" => 1, "ham" => 1,
    // "mustard" => 1, "ketchup" => 1, "banana" => 1, "beef" => 1, "chicken" => 1, "prawn" => 1, "snail" => 1, "fish" => 1, "lettuce" => 1, "tomato" => 1, "vegemite" => 1
  ));


  $order2->set_options(array(
    "snail" => 1, "fish" => 1, "vegemite" => 1
  ));

  $order2->set_options(array(
    "banana" => 1,  "prawn" => 5, "snail" => 1, "fish" => 5
  ));

  $order->eat();
  $order2->eat();
  $order3->eat();


  ?>





</body>

</html>