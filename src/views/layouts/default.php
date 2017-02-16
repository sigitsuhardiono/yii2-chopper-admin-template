<?php

/** @var \yii\web\View $this */

use haqqi\chopper\Chopper;
use yii\helpers\Html;
use yii\helpers\Url;

Chopper::getComponent()->registerThemeAsset($this);

$this->beginPage();

?>

    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language; ?>">
    <head>
        <meta charset="<?php echo Yii::$app->charset; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- icon -->
        <?php echo Html::csrfMetaTags(); ?>
        <title><?php echo Html::encode($this->title); ?></title>

        <!-- js helper -->
        <script type="text/javascript">
          var BASE_URL = '<?= Url::base(true); ?>';
        </script>

        <!-- SEO things -->
        <meta http-equiv="content-type" content="text/html;charset=UTF-8">
        <meta name="robots" content="INDEX/FOLLOW">
        <?php $this->head(); ?>
    </head>
    <body>
    <?php $this->beginBody(); ?>

    <div id="wrapper">
        <header id="main-header">
            <nav class="navbar navbar-static-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                    </div>
                </div>

                <!-- Toggle icon for mobile view -->
                <a id="sidebar-toggle" class="navbar-toggle" href="javascript:void(0)" data-toggle="collapse" data-target="#main-sidebar">
                    <i class="mdi mdi-menu"></i>
                </a>
                
                
            </nav>
        </header>
        
        <div id="page-container">
            <!-- Left navbar-sidebar -->
            <aside id="main-sidebar" class="navbar-collapse collapse">
                
            </aside>
            <!-- Left navbar-sidebar end -->

            <!-- #page-wrapper -->
            <div id="page-wrapper">
                <div id="page-content">

                    <?= $content; ?>
                </div>
            </div>
            <!-- /#page-wrapper -->
        </div>

        <!-- #main-footer -->
        <footer id="main-footer">
            <?php echo Chopper::getParams('footer'); ?>
        </footer>
        <!-- /#main-footer -->
    </div>

    <?php $this->endBody(); ?>
    </body>
    </html>

<?php

$this->endPage();
