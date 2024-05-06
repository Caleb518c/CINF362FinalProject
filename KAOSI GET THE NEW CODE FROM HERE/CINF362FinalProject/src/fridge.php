<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopping List</title>
  <link rel="stylesheet" href="./index.css" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
  <nav>
    <div class="navLeft">
      <div id="menu-icon" class="bx bx-menu"></div>
      <img src="./images/logo.png" alt="logo" class="navLogo" />
      <ul>
        <a href="index.html">Home</a>
        <a href="fridge.php">Fridge</a>
        <a href="roomates.html">Roomies</a>
      </ul>
    </div>
    <div class="navRight">
      <img src="./images/roomate2.jpg" alt="profile icon" />
    </div>
  </nav>

  <main>
    <section class="fridgeRow1">
      <section class="shoppingList">
        <h1>Shopping List</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <input type="text" name="item" placeholder="Add new item" required>
          <button type="submit">Add</button>
        </form>
        <ul class="shoppingListContainer">
          <?php

          ob_start(); // Start output buffering
          
          // Define the filename for the shopping list data
          $filename = "shopping_list.txt";

          // Check if the form is submitted to add a new item
          if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["item"])) {
            // Get the new item from the form
            $newItem = $_POST["item"];

            // Open the file for appending
            $file = fopen($filename, "a");

            // Write the new item to the file
            fwrite($file, $newItem . PHP_EOL);

            // Close the file
            fclose($file);
          }

          // Check if the form is submitted to clear the list
          if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["clear"])) {
            // Open the file for writing (truncate mode)
            $file = fopen($filename, "w");

            // Close the file
            fclose($file);

            // Redirect back to the same page to refresh the list
            header("Location: {$_SERVER['REQUEST_URI']}");
            exit();
          }

          // Read the contents of the file into an array
          $shoppingList = file($filename, FILE_IGNORE_NEW_LINES);

          // Loop through each item in the shopping list
          foreach ($shoppingList as $item) {
            // Output HTML for each item
            echo "<li><p>$item</p><input type='checkbox' /></li>";
          }

          ob_end_flush(); // Flush the output buffer and send it to the browser
          
          ?>
        </ul>

      </section>
      <aside class="foodRestrictions">
        <h1>Food Restrictions</h1>
        <ul class="foodRestrictionsContainer">
          <li>
            <img src="./images/roomate4.jpg" alt="" />
            <p>Walnut Allergy</p>
            <div class="bx bxs-help-circle foodRestrictionsQuestionMarkIcon"></div>
          </li>
          <li>
            <img src="./images/roomate2.jpg" alt="" />
            <p>Lactose Intolerant</p>
            <div class="bx bxs-help-circle foodRestrictionsQuestionMarkIcon"></div>
          </li>
        </ul>
      </aside>
    </section>

    <section class="fridgeRow2">
      <h1>Fridge</h1>
      <table class="fridgeTable">
        <tr class="fridgeTableHeading">
          <th class="fridgeTableHeading">Owner</th>
          <th class="fridgeTableHeading">Item</th>
        </tr>
        <tr>
          <th>
            <img src="./images/roomate1.jpeg" alt="" class="fridgeTableProfileIcon" />
          </th>
          <th class="fridgeTableItemContainer">
            <p>Whipped Cream</p>
            <img src="./images/redWarningIcon.png" alt="" />
          </th>
        </tr>
        <tr>
          <th>
            <img src="./images/roomate3.jpg" alt="" class="fridgeTableProfileIcon" />
          </th>
          <th class="fridgeTableItemContainer">
            <p>Watermelon</p>
          </th>
        </tr>
        <tr>
          <th>
            <img src="./images/roomate4.jpg" alt="" class="fridgeTableProfileIcon" />
          </th>
          <th class="fridgeTableItemContainer">
            <p>Chocolate Ice Cream</p>
            <img src="./images/redWarningIcon.png" alt="" />
          </th>
        </tr>
        <tr>
          <th>
            <img src="./images/roomate2.jpg" alt="" class="fridgeTableProfileIcon" />
          </th>
          <th class="fridgeTableItemContainer">
            <p>Banana Bread</p>
          </th>
        </tr>
      </table>
    </section>
  </main>
</body>

</html>