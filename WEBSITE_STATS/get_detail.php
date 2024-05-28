<?php
if (isset($_GET['websiteID'])) {
    require 'conn.php'; // Include conn.php only if websiteID is set
    $conn = getDatabaseConnection(); // Establish the database connection
    $websiteID = $_GET['websiteID'];
    echo "<h1> Hi ThERE</h1>" . $_GET['websiteURL'];
    // echo "I am here looking for website $websiteID";
    $sql = "SELECT WebsiteID, VisitorIP,VisitTime FROM WebsiteVisits WHERE WebsiteID = '$websiteID' GROUP BY VisitorIP ORDER BY VisitTime";

    $result = $conn->query($sql);
    echo '<table class="header" border="1"><tr><th>Visitor IP</th><th>Website</th><th>Visit Time</th></tr>';
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
        <td class='row-format'><a href='http://{$row['VisitorIP']}' target='_blank'>{$row['VisitorIP']}</a></td>
        <td class='row-format'>" . htmlspecialchars($row['WebsiteURL']) . "</td>
        <td class='row-format'>{$row['VisitTime']}</td>
      </tr>";

        }
        echo "</table>";
    } else {
        echo "no";
    }
}
