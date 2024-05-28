<!-- echo "<tr><td>" .  $row["WebsiteID"] . "</td><td>" . $row["WebsiteURL"] . "</td><td>" .  $row["VisitCount"]  . "</td></tr>"; -->


<style>
    .row-format {
        color:blue;
    }
</style>
<?php
echo "<tr onClick='dd(\"{$row['WebsiteID']}\", \"{$row['WebsiteURL']}\")'>";
echo "<td class='row-format'>{$row['WebsiteID']}</td>";
echo "<td class='row-format'>" . htmlspecialchars($row['WebsiteURL']) . "</td>";
echo "<td class='row-format'>{$row['VisitCount']}</td>";
echo "</tr>";
?>