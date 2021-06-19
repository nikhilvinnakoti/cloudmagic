<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\jui\Accordion;
use app\assets\AppAsset;
use kartik\sidenav\SideNav;
use webvimark\modules\UserManagement\components\GhostMenu;
use webvimark\modules\UserManagement\components\GhostNav;
use webvimark\modules\UserManagement\UserManagementModule;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
    <?php $this->head() ?>
    <style>
        .nav-bar{
            height: 60px;
            background-color: #f5f5f5;
            border-bottom:1px solid #ddd;
            padding-top: 20px;
        }
        .navbar-nav.navbar-center {
        position: absolute;
        left: 50%;
        transform: translatex(-50%);
        }
    </style>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
<nav class="navbar navbar-inverse header navbar-fixed-top"style="height:60px;">
  <div class="container-fluid">
    <div class="navbar-header">
    <!-- <span class="navbar-brand"style="padding:8px;"><img src="images/logo-small.png" alt="logo" width="42" height="42"></span> -->
    </div>
    <ul class="nav navbar-nav navbar-center">
    <li><a href="/index.php"style="padding:18px;font-size:18px;display:inline-block;">Cloud Magic</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <span class="glyphicon glyphicon-cog" style="padding:8px;"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/index.php?r=user-management/auth/logout">Logout</a></li>
          <li><a href="/index.php?r=user-management/auth/change-own-password">Change own password</a></li>
          <li><a href="/index.php?r=user-management/auth/confirm-email">E-mail confirmation</a></li>
        </ul>
      </li>
      
    </ul>
  </div>
</nav>
    <div class="container-fluid">
    <div class="row">
    <div class="col-sm-2 sidebar">
    <div style=margin-left:-15px;margin-top:60px;>
    <?php
       echo SideNav::widget([
        'type' => SideNav::TYPE_SECONDARY,
        'heading' => 'Menu',
        'items' => [
            [
                'url' => ['/places/index'],
                'label' => 'My Places',
                // 'icon' => 'home'
            ],
            [
                'url' => ['/networks/index'],
                'label' => 'My Networks',
                // 'icon' => 'home'
            ],
            [
                'url' => ['/guid/index'],
                'label' => 'My Graphics',
                // 'icon' => 'home'
            ],
            [
                'url' => ['/screens/index'],
                'label' => 'My Screens',
                // 'icon' => 'home'
            ],
            [
                'url' => ['/businesses/index'],
                'label' => 'Business',
                // 'icon' => 'home'
            ],
            [
                'url' => ['/blacklists/index'],
                'label' => 'Blacklist',
                // 'icon' => 'home'
            ],
            [
                'url' => ['/nas/index'],
                'label' => 'NAS',
                // 'icon' => 'home'
            ],
            [
                'label' => 'Reference',
                'items' => [
                    ['label' => 'Area',  'url'=>['/areas/index']],
                    ['label' => 'Categories', 'url'=>['/categories/index']],
                ],
            ],
            [
                
                'label' => 'Other',
                'items' => [
                ['label' => 'Users', 'url'=>['/user-management/user/index']],
                ['label' => 'Roles', 'url'=>['/user-management/role/index']],
                ['label'=>'Permissions','url'=>['/user-management/permission/index']],
                ['label'=>'Permission groups','url'=>['/user-management/auth-item-group/index']],
                ['label'=>'Visit log','url'=>['/user-management/user-visit-log/index']],
                ] 
            ],
        ],
    ]);
    ?>
    </div>
    </div>
    <div class="col-sm-10 ">
        <div style="margin-top:60px">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
        </div>
    </div>   
</div>
</div>
</div>
<footer class="footer">
    <div class="container">
        <p class="pull-left" style="color:#74040d;font-size:16px;font-family: Arial, Helvetica, sans-serif;"> © 2021 Logic Hotspot</p>
        <p class="pull-right"><a href="http://infogen-labs.com/" target="_blank" style="color:#74040d;font-size:16px;font-family: Arial, Helvetica, sans-serif;">Powered by Infogen Labs</a></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
