<?php

use yii\helpers\Html;

$this->title = 'Account Settings';
$this->params['breadcrumbs'][] =['label' => 'Help Center', 'url' =>['index']];
$this->params['breadcrumbs'][] = $this->title;


?>

<div class="help-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo sagittis elementum. Proin quis mauris tempus,
        lacinia eros nec, tempor ipsum. Sed egestas quam pharetra, egestas quam vel, rutrum elit. Vivamus velit sem, porta a
        sollicitudin eu, pulvinar a ligula. Fusce luctus consectetur suscipit. Integer vehicula libero libero, nec accumsan
        nulla fringilla sit amet. Morbi iaculis, risus volutpat varius faucibus, sapien dui vulputate lorem, a fringilla
        tortor lectus iaculis sem. Curabitur quis eros ipsum. Proin eget purus a nulla luctus accumsan sed vel tellus.
    </p>
        <div>
            <?= Html::a( 'Account Settings', ['help/account-settings'])?>
        </div>
        <div>
            <?= Html::a( 'Login And Security', ['help/login-and-security'])?>
        </div>
      <div>
          <?= Html::a( 'privacy', ['help/privacy'])?>
      </div>
</div>

