<?php
/**
 * Created by PhpStorm.
 * User: george
 * Date: 11/27/17
 * Time: 12:13 PM
 */


function echoActiveClassIfRequestMatches($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    if ($current_file_name == $requestUri)
        return 'active';
    return '';
}

?>

<nav class="navbar header">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="img/all/logo.png" alt="Pindex"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="<?= echoActiveClassIfRequestMatches("") ?>
                           <?= echoActiveClassIfRequestMatches("index") ?>">
                    <a href="https://uci.global">Home</a></li>
                <li class="<?= echoActiveClassIfRequestMatches("invest") ?>">
                    <a href="https://uci.global/invest">Invest</a></li>
                <li class="<?= echoActiveClassIfRequestMatches("shareholders") ?>">
                    <a href="https://uci.global/shareholders">ShareHolders</a></li>
                <li class="<?= echoActiveClassIfRequestMatches("portfolio") ?>
                           <?= echoActiveClassIfRequestMatches("about-pindify") ?>
                           <?= echoActiveClassIfRequestMatches("about-sprinklebit") ?>">
                    <a href="https://uci.global/portfolio">Portfolio</a></li>
                <li class="<?= echoActiveClassIfRequestMatches("uci-coin") ?>">
                    <a href="https://uci.global/uci-coin">UCI Coin</a></li>
                <li class="<?= echoActiveClassIfRequestMatches("icos") ?>">
                    <a href="https://uci.global/icos">ICOs</a></li>
                <li class="<?= echoActiveClassIfRequestMatches("news") ?>">
                    <a href="https://uci.global/news">News</a></li>
                <li class="<?= echoActiveClassIfRequestMatches("associate-program") ?>">
                    <a href="https://uci.global/associate-program">Associate Program</a></li>
            </ul>
        </div>
    </div>
</nav>
