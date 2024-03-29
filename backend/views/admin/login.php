<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Startmin - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= \yii\helpers\Url::to('@web/css/admin/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?= \yii\helpers\Url::to('@web/css/admin/metisMenu.min.css') ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= \yii\helpers\Url::to('@web/css/admin/startmin.css') ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?= \yii\helpers\Url::to('@web/css/admin/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                    <?php $form = \yii\bootstrap\ActiveForm::begin(['id' => 'login-form']); ?>
                    <fieldset>
                        <div class="form-group">
                            <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class' => 'form-control']) ?>
                        </div>
                        <div class="form-group">
                            <?= $form->field($model, 'password')->passwordInput(['class' => 'form-control']) ?>
                        </div>
                        <div class="form-group">
                            <?= $form->field($model, 'rememberMe')->checkbox() ?>
                        </div>
                        <div class="form-group">
                            <?= \yii\helpers\Html::submitButton('Login', ['class' => 'btn btn-lg btn-success btn-block', 'name' => 'login-button']) ?>
                            <?php \yii\bootstrap\ActiveForm::end(); ?>
                        </div>
                    </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="<?= \yii\helpers\Url::to('@web/js/jquery.min.js') ?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?= \yii\helpers\Url::to('@web/js/bootstrap.min.js') ?>"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?= \yii\helpers\Url::to('@web/js/metisMenu.min.js') ?>"></script>

<!-- Custom Theme JavaScript -->
<script src="<?= \yii\helpers\Url::to('@web/js/startmin.js') ?>"></script>

</body>
</html>
