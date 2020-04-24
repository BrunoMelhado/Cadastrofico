<?php

    function converter($result) {
        $rows = array();
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $rows[] = $row;
            }
        }
        mysqli_free_result($result);
        return $rows;
    }
    
?>

