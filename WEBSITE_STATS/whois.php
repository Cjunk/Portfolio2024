<?php
if (isset($_GET['ip'])) {
    $ip = $_GET['ip'];
    // Perform WHOIS lookup
    $whois_output = shell_exec("whois $ip 2>&1");
    if ($whois_output === null) {
        echo "Error: Unable to execute WHOIS command.";
    } else {
        // Output WHOIS results
        echo nl2br(htmlspecialchars($whois_output));
    }
} else {
    echo "No IP address specified.";
}
