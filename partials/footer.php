<?php
/**
 * Created by PhpStorm.
 * User: george
 * Date: 11/27/17
 * Time: 11:50 AM
 */

$currentPage = basename($_SERVER['REQUEST_URI'], ".php");

?>

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 mb40-m">
                <div class="header"><span>LEGALITIES</span>
                    <hr class="card-splitter">
                </div>
                <div class="body">
                    <ul class="list">
                        <li><a href="https://uci.global/privacy-policy">Privacy Policy</a></li>
                        <li><a href="https://uci.global/terms-and-conditions">Terms & Conditions</a></li>
                        <li><a href="https://uci.global/about-us">About us</a></li>
                        <li><a href="https://uci.global/faq">FAQ</a></li>
                        <li><a href="https://uci.global/404">Contact us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 mb40-m">
                <div class="header"><span>CONTACT</span>
                    <hr class="card-splitter">
                </div>
                <div class="body">
                    <ul class="list text-brand-primary">
                        <li><p class="brand-name">United Capital Investments</p></li>
                        <li>
                            <a href="mailto:admin@uci.global"><i class="fa fa-envelope text-brand-secondary"></i>&nbsp;
                                admin@uci.global</a>
                        </li>
                        <li>
                            <i class="fa fa-phone text-brand-secondary"></i>&nbsp; +995 557 669 417
                        </li>
                        <li>
                            <i class="fa fa-phone text-brand-secondary"></i>&nbsp; +995 599 240 325
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 mb40-m">
                <div class="form">
                    <div class="row">
                        <?php if (isset($_GET['success'])&&$_GET['success'] === 'false'): ?>
                            <div class="col-sm-12">
                                <p class="bg-danger text-danger">There was an error while sending your message ! <br>
                                    Make sure all information is correct or please try again later</p>
                            </div>
                        <?php elseif(isset($_GET['success'])&&$_GET['success'] === 'true'): ?>
                            <div class="col-sm-12">
                                <p class="bg-success text-brand-primary">Your message has been successfully sent! <br>
                                    Please give us at least 24 hours to review your message. <br>
                                    Thank you !</p>
                            </div>
                        <?php endif; ?>
                        <form action="partials/send-mail" method="post">
                            <div class="col-sm-6 mb20-m">
                                <input type='hidden' name='url' value='https://uci.global/<?= $currentPage ?>'/>
                                <input required type="text" title="name" name="name" aria-labelledby="Name"
                                       placeholder="Name"><br>
                                <input required type="email" title="email" name="email" aria-labelledby="E-mail"
                                       placeholder="E-mail"><br>
                                <input required type="text" title="subject" name="subject" aria-labelledby="Subject"
                                       placeholder="Subject"><br>
                            </div>
                            <div class="col-sm-6">
                                    <textarea required title="subject" name="message" aria-labelledby="Message"
                                              placeholder="Message"></textarea><br>
                                <div class="g-recaptcha" data-sitekey="6Lc7kjoUAAAAABGIuK67emjWoVhClGuc5FzU148-"></div>
                                <button class="btn btn-brand-transparent pull-right submitButton" type="submit">
                                    Send
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
