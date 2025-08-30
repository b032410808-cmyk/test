<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Apparel Shop - Shirts</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include("header.php"); ?>

  <div class="container " style="margin-top:100px;">
    <h2 class="title1 "  style="font-size: 50px;">SHIRT CATEGORIES</h2>
<style>
 .link {
  text-decoration: none;       /* no underline */
  color: inherit;              /* inherit text color */
  display: inline-block;       /* needed so transform works properly */
  transition: transform 0.3s ease, color 0.3s ease;
}

.link:hover {
  color: #007bff;              /* text turns blue */
  transform: scale(1.1);       /* text scales up */
}
</style>
 

  <section id="shirt-categories" class="my-5">
  <ul class="list">
    <li>
      <a class="link" href="roundneck.php"><h3 class="title2">Round Neck</h3></a>
      <p>Classic casual shirt for everyday wear.</p>
    </li>

    <li>
      <a class="link" href="vneck.php"><h3 class="title2">V-Neck</h3></a>
      <p>Stylish V-shaped neckline for modern look.</p>
    </li>

    <li>
      <a class="link" href="retrocollar.php"><h3 class="title2">Retro Collar</h3></a>
      <p>Vintage-inspired trendy style.</p>
    </li>

    <li>
      <a class="link" href="polocollar.php"><h3 class="title2">Polo Collar</h3></a>
      <p>Smart and semi-formal everyday wear.</p>
    </li>

    <li>
      <a class="link" href="muslimah.php"><h3 class="title2">Muslimah Shirts</h3></a>
      <p>Comfortable, modest, elegant style.</p>
    </li>

    <li>
      <a class="link" href="corporate.php"><h3 class="title2">Corporate</h3></a>
      <p>Formal long sleeves for work or events.</p>
    </li>

    <li>
      <a class="link" href="sleeveless.php"><h3 class="title2">Sleeveless</h3></a>
      <p>Light and airy for hot weather.</p>
    </li>
  </ul>
</section>



  </div>
  

  <br><br><br><br>
  <?php include("footer.php"); ?>
</body>
</html>
