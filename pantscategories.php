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
    <h2 class="title1 "  style="font-size: 50px;">PANTS CATEGORIES</h2>
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
 

    <section id="round-neck" class="my-5">
        <ul class = "list">
            <li ><a class = "link" href="tracksuit.php"><h3 class="title2">TRACKSUIT</h3></a>
        <p>Example products here...</p></li>

            <li ><a class = "link" href="3rdquarter.php"><h3 class="title2">3RD QUARTER PANTS</h3></a>
        <p>Example products here...</p></li>

            <li ><a class = "link" href="shorts.php"><h3 class="title2">SHORTS</h3></a>
        <p>Example products here...</p></li>

        </ul>
      
    </section>

  </div>
  
<br><br><br><br>
  <br><br><br><br>
  <br><br><br><br>
  <br><br>
  <?php include("footer.php"); ?>
</body>
</html>
