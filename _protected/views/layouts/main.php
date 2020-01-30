<?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::t('app', Yii::$app->name),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-default navbar-fixed-top',
        ],
    ]);

    /*if (Yii::$app->user->can('admin')) {

    $menuItems[] = ['label' => Yii::t('app', 'University-Leave'), 'items'=> [
        ['label' => 'Leave-Application', 'url' => ['/leave-application/index'],'linkOptions' => ['target'=>'_blank']],
        ['label' => 'Leave-Process', 'url' => ['/leave-application/process2'],'linkOptions' => ['target'=>'_blank']],
        ['label' => 'Employee-Settings', 'url' => ['/employee-setting/index'],'linkOptions' => ['target'=>'_blank']],

        ['label' => 'Settings', 'url' => ['/setting/index'],'linkOptions' => ['target'=>'_blank']],
        ['label' => 'Pay-Period', 'url' => ['/pay-period/index'],'linkOptions' => ['target'=>'_blank']],

    ]];
    }*/

    $menuItems[] = ['label' => Yii::t('app', 'Employee-List'), 'url' => ['/payroll-employee-list/index']];

    $menuItems[] = ['label' => Yii::t('app', 'Pay-Period'), 'url' => ['/payroll-pay-period-list/index']];

   
    if (Yii::$app->user->can('premium')) {
        $menuItems[] = ['label' => Yii::t('app', 'Leave-Credits'), 'items'=> [
            ['label' => 'Under-Grad', 'url' => ['/ug-leave-credits/index']],
            ['label' => 'Grad-School', 'url' => ['/gs-leave-credits/index']],
            ['label' => 'Non-Teaching', 'url' => ['/nt-leave-credits/index']],

        ]];

        $menuItems[] = ['label' => Yii::t('app', 'DTR-Load'), 'items'=> [
            ['label' => 'Teaching', 'url' => ['/tc-dtr/index']],
            ['label' => 'Teaching Load', 'url' => ['/tc-teaching-load/index']],
            ['label' => 'Non-teaching', 'url' => ['/nt-dtr/index']],


        ]];

        $menuItems[] = ['label' => Yii::t('app', 'Other-Income'), 'items'=> [
            ['label' => 'Teaching', 'url' => ['/tother-income/index']],
            ['label' => 'Non-teaching', 'url' => ['/nt-other-income/index']],


        ]];

        $menuItems[] = ['label' => Yii::t('app', 'Loans'), 'url' => ['/loans/index']];

        $menuItems[] = ['label' => Yii::t('app', 'Other Deductions'), 'url' => ['/other-deductions/index']];
    }
    

    if (Yii::$app->user->can('admin')){
        $menuItems[] = ['label' => Yii::t('app', 'Users'), 'url' => ['/user/index']];
    }

    if (!Yii::$app->user->isGuest) {
    
        $menuItems[] = [
            'label' => Yii::t('app', 'Logout'). ' (' . Yii::$app->user->identity->username . ')',
            'url' => ['/site/logout'],
            'linkOptions' => ['data-method' => 'post']
        ];
    }

    if (Yii::$app->user->isGuest) {
        //$menuItems[] = ['label' => Yii::t('app', 'Signup'), 'url' => ['/site/signup']];
        $menuItems[] = ['label' => Yii::t('app', 'Login'), 'url' => ['/site/login']];
    }

    // we do not need to display About and Contact pages to employee+ roles
    /*if (!Yii::$app->user->can('employee')) {
        $menuItems[] = ['label' => Yii::t('app', 'About'), 'url' => ['/site/about']];
        $menuItems[] = ['label' => Yii::t('app', 'Contact'), 'url' => ['/site/contact']];
    }*/

    /*
    // display Users to admin+ roles
    if (Yii::$app->user->can('admin')){
        $menuItems[] = ['label' => Yii::t('app', 'Users'), 'url' => ['/user/index']];
    }
    
    // display Logout to logged in users
    if (!Yii::$app->user->isGuest) {
        $menuItems[] = [
            'label' => Yii::t('app', 'Logout'). ' (' . Yii::$app->user->identity->username . ')',
            'url' => ['/site/logout'],
            'linkOptions' => ['data-method' => 'post']
        ];
    }

    // display Signup and Login pages to guests of the site
    if (Yii::$app->user->isGuest) {
        //$menuItems[] = ['label' => Yii::t('app', 'Signup'), 'url' => ['/site/signup']];
        $menuItems[] = ['label' => Yii::t('app', 'Login'), 'url' => ['/site/login']];
    }*/

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);

    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Yii::t('app', Yii::$app->name) ?> <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
