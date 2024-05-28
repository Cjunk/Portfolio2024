<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="style.css" rel="stylesheet" type="text/css">
  <script defer>
    document.addEventListener('DOMContentLoaded', () => {
      const headers = document.querySelectorAll('.header');
      console.log(headers);
    });
  </script>
  <title>Document2</title>
</head>

<body>
</body>
<div class="main">
  <?php
  require 'conn.php';
  $conn = getDatabaseConnection(); // Use the function to get the database connection
  $sql = "SELECT WebsiteVisits.WebsiteID, Websites.WebsiteURL, COUNT(*) AS VisitCount
          FROM WebsiteVisits
          JOIN Websites ON WebsiteVisits.WebsiteID = Websites.ID
          GROUP BY WebsiteVisits.WebsiteID, Websites.WebsiteURL;"; // Replace 'your_table_name' with the actual name of your table
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    echo '<table class="header" border="1"><tr><th>ID</th><th>Website</th><th>Visitors</th></tr>';
    include 'inc.html';

    // output data of each row
    while ($row = $result->fetch_assoc()) {
      if ($row["VisitorIP"] != "::1") {
        include 'each_row.php';
      }
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
  $conn->close();
  ?>
</div>

</html>