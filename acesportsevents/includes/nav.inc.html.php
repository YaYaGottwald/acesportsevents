<?php
/**
 * Created by PhpStorm.
 * User: yayagottwald
 * Date: 2/1/19
 * Time: 3:02 PM
 */
?>


<nav class="sticky">
    <h1>Annual Weekend <span id="date">March 23<sup>rd</sup> &amp; 24<sup>th</sup></span></h1>
    <!--dropdown menu modified from: https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_dropdown_navbar-->
    <div class="dropdown">
        <img class="spanImg" src="<?php echo BASE_URL; ?>images/logo_symbols-light.png" alt="Ace in the Hole Multisport Events Logo symbols
    - triathlon events" title="Ace in the Hole Logo symbol">
        <span id="activePage"><!--placeholder for active page title, jQuery associated--></span>
        <button class="dropbtn"><i class="fa fa-bars"></i></button>
        <div class="dropdown-content">
            <a href="<?php echo BASE_URL; ?>index.php">Home</a>
            <a href="<?php echo BASE_URL; ?>events/">Events</a>
            <a href="<?php echo BASE_URL; ?>faqs/">FAQs</a>
            <a href="<?php echo BASE_URL; ?>registration/">Registration</a>
            <a href="<?php echo BASE_URL; ?>contact/">Contact</a>
        </div>
    </div>
    <ul>
        <li><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
        <li><a href="<?php echo BASE_URL; ?>events/">Events</a></li>
        <li><a href="<?php echo BASE_URL; ?>faqs/">FAQs</a></li>
        <li><a href="<?php echo BASE_URL; ?>registration/">Registration</a></li>
        <li><a href="<?php echo BASE_URL; ?>contact/">Contact</a></li>
    </ul>
</nav>
