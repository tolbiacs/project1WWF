<div>
    <?php
    $first_name = $_POST['donor_firstname'];
    $amount = 10;
    $gift = $_POST['gift_options'];
    echo "Thank you for donation " . $first_name . "<br>You gave a monthly donatation of " . $amount . "<br>You will recieve " . $gift;
    ?>
</div>
<div>
    <table>
        <tr>
            <td>History</td>
        </tr>
        <?php
        $totalamount = 0;
        $month_full = date('n');
        for ($i=1; $i <=12; $i++){
            if($month_full>12){
                $month_full =1;
            }
            echo "<tr><td>" . date("F", mktime(null, null, null, $month_full, 1)) . "</td><td>" . $amount . "</td></tr>";
            $totalamount += $amount;
            $month_full++;
        }
        ?>
    </table>
    <?php
    echo "Total amount given : " . $totalamount;
    ?>
    <form action="../panda/index.php" method="post">
        <input type="submit" value="Give Again" name="give_again">
    </form>
</div>