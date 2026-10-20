<?php
    
    $conn = new mysqli("localhost", "root", "", "bd_cricket", 3306);

    $q1 = $conn->query("SELECT Venue, COUNT(id) as 'NumberOfPerformance', AVG(Runs) as 'AvgRun' FROM match_performance GROUP BY Venue HAVING AVG(Runs)>50;");

    // 1
    while ($res = $q1->fetch_assoc()) {
        echo $res ["Venue"]. "---" . $res["NumberOfPerformance"]. "---" . $res["AvgRun"]. "<br>"; 
    }
    echo "<hr>";
    
    // 2
    $conn->query("UPDATE match_performance SET Runs = Runs + (Runs*5/100) WHERE Venue= 'Mirpur';");

    $q2 = $conn->query("SELECT PlayerName, Venue, (Runs/Balls*100) as 'StrikeRate' FROM match_performance ORDER BY (Runs/Balls*100) DESC LIMIT 3;");

    // 3
    while ($res = $q2->fetch_assoc()) {
        echo $res ["PlayerName"]. "---" . $res["StrikeRate"]. "---" . $res["Venue"]. "<br>"; 
    }
?>