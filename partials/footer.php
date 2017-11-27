<?php
/**
 * Created by PhpStorm.
 * User: george
 * Date: 11/27/17
 * Time: 11:50 AM
 */

$post = $_POST;


if(count($post) > 2){
    $name = $post['name'];
    $subject = $post['subject'];
    $message = $post['message'];
    $email = $post['email'];
    $from = 'From: ' . $email . "\r\n";
    mail('admin@uci.global',$subject,$message,$from);
}

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
                        <form action="invest.php" method="post">
                            <div class="col-sm-6 mb20-m">
                                <input required type="text" title="name" name="name" aria-labelledby="Name" placeholder="Name"><br>
                                <input required type="text" title="email" name="email" aria-labelledby="E-mail" placeholder="E-mail"><br>
                                <input required type="text" title="subject" name="subject" aria-labelledby="Subject" placeholder="Subject"><br>
                            </div>
                            <div class="col-sm-6">
                                <textarea required title="subject" name="message" aria-labelledby="Message" placeholder="Message"></textarea><br>
                                <button class="btn btn-brand-transparent pull-right" type="submit">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
