<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Calendar Activity</title>
    
    <style>
         table {
            margin: 100px auto;
        }
        .button-container {
            display: flex;
            justify-content: center; 
            margin-top: 10px; 
        }
        form {
            margin: 0; 
        }
        button {
            padding: 5px 10px;
            
        }
    </style>
</head>
<body>
<?php 
    date_default_timezone_set('Asia/Manila');
    $date = time();
    $day = date('d', $date);
    $month = date('m', $date);
    $year = date('Y', $date);

    if (isset($_GET['month']) && isset($_GET['year'])) {
        $month = $_GET['month'];
        $year = $_GET['year'];
    }

    $first_day = mktime(0, 0, 0, $month, 1, $year);
    $month_title = date('F', $first_day);
    $day_of_week = date('D', $first_day);

    switch ($day_of_week) {
        case 'Sun':
            $blank = 0; 
            break;
        case 'Mon':
            $blank = 1; 
            break;
        case 'Tue':
            $blank = 2; 
            break;
        case 'Wed':
            $blank = 3; 
            break;
        case 'Thu':
            $blank = 4; 
            break;
        case 'Fri':
            $blank = 5; 
            break;
        case 'Sat':
            $blank = 6; 
            break;
    }
    $days_in_month = cal_days_in_month(0, $month, $year);
?>

<table class="table-info" border="1" width="294">
        <tr><th colspan="7"> <?php echo '<center>', $month_title . ' ' . $year; ?> </th></tr>
        <tr>
            <td width="42">S</td>
            <td width="42">M</td>
            <td width="42">T</td>
            <td width="42">W</td>
            <td width="42">T</td>
            <td width="42">F</td>
            <td width="42">S</td>
        </tr>
<?php 
    $day_count = 1;
    echo "<tr>";
    while ($blank > 0){
        echo '<td></td>';
        $blank = $blank - 1;
        $day_count++;
    }

    $day_num = 1;

    while ($day_num <= $days_in_month){
        echo "<td> $day_num </td>";
        $day_num++;
        $day_count++;

        if($day_count > 7){
            echo "</tr><tr>";
            $day_count = 1;
        }
    }

    while ($day_count > 1 && $day_count <= 7){
        echo "<td></td>";
        $day_count++;
    }
    
    echo "</table>";

?>

    <div class="button-container">
        
    <form action="" method="get">
        <input type="hidden" name="month" value="<?php echo date('m', strtotime("-1 month", $first_day)); ?>">
        <input type="hidden" name="year" value="<?php echo date('Y', strtotime("-1 month", $first_day)); ?>">
        <button type="submit" class="btn btn-outline-primary btn-sm">Previous</button>
    </form>
    <form action="" method="get">
        <input type="hidden" name="month" value="<?php echo date('m', strtotime("+1 month", $first_day)); ?>">
        <input type="hidden" name="year" value="<?php echo date('Y', strtotime("+1 month", $first_day)); ?>">
        <button type="submit" class="btn btn-outline-primary btn-sm">Next</button>
    </form>
    <form action="" method="get">
        <input type="hidden" name="month" value="<?php echo date('m'); ?>">
        <input type="hidden" name="year" value="<?php echo date('Y'); ?>">
        <button type="submit" class="btn btn-secondary btn-sm">Today</button>
    </form>
    </div>
   
</body>
</html>