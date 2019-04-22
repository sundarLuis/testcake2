<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap.min') ?>
    <?= $this->Html->css('icomoon') ?>
    <?= $this->Html->css('open-iconic-bootstrap.min') ?>
    <?= $this->Html->css('style.css') ?>


</head>
<body>
  <!-- $this->Flash->render()  -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark probootstrap-navabr-dark">
        <div class="container">
          <a class="navbar-brand" href="index.html">Unlock</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-nav" aria-controls="probootstrap-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="probootstrap-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
              <li class="nav-item"><a href="/pages/about" class="nav-link">About</a></li>
              <li class="nav-item"><a href="/pages/services" class="nav-link">Services</a></li>
              <li class="nav-item"><a href="/clientes/add" class="nav-link">Contact</a></li>
              <li class="nav-item probootstrap-cta probootstrap-seperator"><a href="#" class="nav-link">Sign up</a></li>
              <li class="nav-item probootstrap-cta"><a href="#" class="nav-link">Log In</a></li>
            </ul>
           
          </div>
        </div>
      </nav>

    
        <?= $this->fetch('content') ?>
 
        <footer class="probootstrap-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-8">
            <div class="row">
              <div class="col-lg mb-4"><h2 class="probootstrap-heading"><a href="#">Unlock</a></h2></div>
              <div class="col-lg">
                <div class="probootstrap-footer-widget mb-4">
                  <h2 class="probootstrap-heading-2">Company</h2>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">About</a></li>
                    <li><a href="#" class="py-2 d-block">Jobs</a></li>
                    <li><a href="#" class="py-2 d-block">Press</a></li>
                    <li><a href="#" class="py-2 d-block">News</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg">
                 <div class="probootstrap-footer-widget mb-4">
                  <h2 class="probootstrap-heading-2">Communities</h2>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">Support</a></li>
                    <li><a href="#" class="py-2 d-block">Sharing is Caring</a></li>
                    <li><a href="#" class="py-2 d-block">Better Web</a></li>
                    <li><a href="#" class="py-2 d-block">News</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg">
                 <div class="probootstrap-footer-widget mb-4">
                  <h2 class="probootstrap-heading-2">Useful links</h2>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">Bootstrap 4</a></li>
                    <li><a href="#" class="py-2 d-block">jQuery</a></li>
                    <li><a href="#" class="py-2 d-block">HTML5</a></li>
                    <li><a href="#" class="py-2 d-block">Sass</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="probootstrap-footer-widget mb-4">
              <ul class="probootstrap-footer-social list-unstyled float-md-right float-lft">
                <li><a href="#"><span class="icon-twitter"></span></a></li>
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md text-left">
            <ul class="list-unstyled footer-small-nav">
              <li><a href="#">Legal</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Cookies</a></li>
              <li><a href="#">Terms</a></li>
              <li><a href="#">About</a></li>
            </ul>
          </div>
          <div class="col-md text-md-right text-left">
            <p><small>&copy; Unlock 2017. All Rights Reserved. <br> Made with <span class="icon-heart"></span> by <a href="https://uicookies.com/">uiCookies</a> Demo Images: Unsplash</small></p>
          </div>
        </div>
      </div>
    </footer>
    <?= $this->Html->script('bootstrap.min') ?>
    <?= $this->Html->script('jquery-3.2.1.slim.min') ?>

    <?= $this->Html->script('popper.min') ?>
    <?= $this->Html->script('TweenMax.min') ?>
    <?= $this->Html->script('main') ?>
</body>
</html>
