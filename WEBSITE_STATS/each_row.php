<!-- echo "<tr><td>" .  $row["WebsiteID"] . "</td><td>" . $row["WebsiteURL"] . "</td><td>" .  $row["VisitCount"]  . "</td></tr>"; -->
<style>
    .row-format {
        color:blue;
    }
</style>
<?php
echo "<tr>
    <td class='row-format' >{$row['WebsiteID']}</td>
    <td class='row-format'>" . htmlspecialchars($row['WebsiteURL']) . "</td>
    <td class='row-format'>{$row['VisitCount']}</td>
</tr>";
?>