<div id="submit_form">
    <form class="monthly_form" action="index.php" method="POST">
        <div id="monthly_donation">
            <?php include('./html/donate_amount.php')?>
        </div>
        <div id="giftoptions">
            <?php include('./html/gift_options.php');?>
        </div>
        <div id="donor_content">
            <?php include('./html/donor_information.php');?>
        </div>
        <div id="payment_content">
            <?php include('./html/payment_info.php');?>
        </div>
    </form>
</div>