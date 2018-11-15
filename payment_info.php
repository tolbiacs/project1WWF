<?php echo '<h4> Payment Information </h4>
<p id="payment_type">
    Choose a Payment Type:
    <label for ="credit_cards" id="credit_card_payment">
        <input type="radio" name="payment_options" id="credit_cards">
        <img src="https://support.worldwildlife.org/images/visa_small.gif" alt="Visa">
        <img src="https://support.worldwildlife.org/images/discovercard_sm.gif" alt="Discover Card">
        <img src="https://support.worldwildlife.org/images/mastercd_small.gif" alt="Master Card">
        <img src="https://support.worldwildlife.org/images/amex_small.gif" alt="Amex">
    </label> 
    <label for ="bank_account_withdrawal" id="payment_options">
        <input type="radio" name="payment_options" id="bank_account_withdrawal">
        Bank Account Withdrawal 
    </label> 
    <label for ="paypal" id="paypal_payment">
        <input type="radio" name="payment_options" id="paypal"> 
        <img src="https://support.worldwildlife.org/images/payment/paypal-logo.png" alt="PayPal">
    </label> 
    <label for ="credit_card_number" id="cc_number_payment">
        <input type="text" name="credit_card_number" id="credit_card_number">
    </label> 
    <label for ="exipiration_date" id="cc_expiration_payment">
        <input type="text" name="exipiration_date" id="exipiration_date"> 
    </label> 
    <label for ="cw_cc_number" id="cw_cc_payment">
        <input type="text" name="cw_cc_number" id="cw_cc_number"> 
    </label> 
    <a href = "" target="_blank"> What is CW number? </a>
    <input type="submit" name="submit_button" id="submit_button" value="Submit"/>
</p>'
?>