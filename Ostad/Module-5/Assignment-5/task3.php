<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="favicon.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TailwindCSS Boilerplate</title>
  <link rel="stylesheet" href="./dist/output.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- <link rel="stylesheet" href="assets/css/style.css" /> -->
</head>

<body class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">
  <!-- navbar -->
  <div class="bg-gray-600 py-5">
    <nav class="flex flex-row justify-evenly items-center">
      <div class="text-4xl">
        <a href="https://github.com/faysal0x1" target="_blank">Faysal</a>
      </div>
     
    </nav>
  </div>
  <!-- navbar End -->

  <!-- Card  -->
  <div class="flex flex-row max-w-6xl justify-evenly gap-16 py-16">
    <!-- Task1 -->
    <!-- Form Validation -->
    <?php
    $name = $email = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = testData($_POST["name"]);
      $email = testData($_POST["email"]);
    }

    function testData($data)
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      $data = $data;
      return $data;
    }
    ?>
    <!-- Form Validation End -->

    <div class="bg-[#242526] text-white py-6 space-y-6 px-10 h-[15rem] rounded-md min-w-[15rem]">
      <h2 class="text-xl">HTML Basic</h2>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:</label>
        <br>
        <input class="bg-inherit mb-2 border " type="text" id="name" name="name">
        <br>
        <label for="email">Email:</label><br>
        <input class="bg-inherit mb-2 border " type="email" id="lname" name="email">
        <br>
        <input class="border cursor-pointer border-cyan-900 bg-blue-800 px-5 rounded-full py-2 mb-6" type="submit" value="Submit" name="submit">  
      </form >
    </div>
    <!-- Task2 -->
    <div class="bg-red-800 text-white py-6 space-y-6 px-10 h-[15rem] rounded-md leading-8 min-w-[15rem]">
      <h2 class="text-3xl">Task 2</h2>
      <?php
 
      echo "<h2>Your Data: </h2>";
      echo "Name :" . $name;
      echo '<br>';
      echo "Email :" . $email;

 
      ?>

    </div>
    <!-- Task3 -->
    <div class="bg-red-800 text-white py-6 space-y-6 px-10 h-[15rem] rounded-md leading-8 min-w-[15rem]">
    <h2 class="text-3xl mb-6">Task 3</h2>
      <?php
      include 'Person.php';
      $person = new Person();

      $person->setName($name);
      $person->setEmail($email);
      echo "Name :". $person->getName();
      echo "<br>";
      echo "Email :". $person->getEmail();

      ?>
      

    </div>
  </div>
  <!-- Card End -->
  <!-- <script type="module" src="/assets/js/main.js"></script> -->
</body>

</html>