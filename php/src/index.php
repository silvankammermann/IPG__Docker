<!DOCTYPE html>
<html>

<head>
  <title>Random cat iamges</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <?php
  $servername = getenv('DB_HOST');
  $username = "root";
  $password = "password";
  $dbname = "mysql";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $url = $_POST['url'];
    $description = $_POST['description'];
    $sql = "INSERT INTO mysql.important_cat_images (description, source) VALUES ('$description', '$url')";
    if ($conn->query($sql) === FALSE) {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
  ?>

  <?php if (isset($_GET['cat']) && $_GET['cat'] == 'new') : ?>
    <h1>Add new cat image</h1>
    <form action="/" method="post">
      <input type="text" name="description" placeholder="description">
      <input type="text" name="url" placeholder="URL">
      <input type="submit" value="Submit">
    </form>
  <?php else : ?>
    <?php
    $sql = "SELECT * FROM mysql.important_cat_images ORDER BY RAND() LIMIT 1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    ?>
    <img src="<?= $row['source']; ?>" />
    <h1><?= $row['description']; ?></h1>
    <br />
    <a href="/?cat=new">Add new</a>
  <?php endif; ?>
  <style>
    body {
      display: flex;
      flex-direction: column;
      align-items: center;
      background: black;
    }

    img {
      width: min(90vw, 30rem);
      height: min(90vw, 30rem);
      object-fit: contain;
      border: 2px solid white;
      padding: 1rem;
    }

    h1 {
      color: white;
      font-family: sans-serif;
      font-weight: 200;
    }

    a {
      color: white;
    }

    form {
      display: flex;
      gap: 3px;
      flex-direction: column;
      width: min(90vw, 20rem);
    }
  </style>
</body>

</html>