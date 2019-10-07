<?php
<div class="request" id="request">
  <div class="container">
    <h2>Оставить заявку</h2>

    <?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;

    $form = ActiveForm::begin([

    ]); ?>

    <!-- <form method="post"> -->
      <div class="row">
        <div class="col-12">
          <h3>Параметры поддона</h3>
        </div>
        <div class="col-12 col-md-9 col-xl-8">
          <div class="inp-group">
            <?= $form->field($model, 'length')->textInput(['type' => 'number', 'class' => 'inp inp-first', 'placeholder' => 'Длина, мм'])->label(false) ?>
            <?= $form->field($model, 'width')->textInput(['type' => 'number', 'class' => 'inp', 'placeholder' => 'Ширина, мм'])->label(false) ?>
            <?= $form->field($model, 'height')->textInput(['type' => 'number', 'class' => 'inp', 'placeholder' => 'Высота, мм'])->label(false) ?>
          </div>
        </div>
        <div class="col-12">
          <h3 class="last">Как с вами связаться?</h3>
        </div>
        <div class="col-12 col-md-9 col-xl-8">
          <div class="inp-group last">
            <?= $form->field($model, 'fullname')->textInput(['type' => 'text', 'class' => 'inp inp-first', 'placeholder' => 'ФИО'])->label(false) ?>
            <?= $form->field($model, 'tel')->textInput(['type' => 'tel', 'maxlength' => 12, 'class' => 'inp user-phone', 'placeholder' => '+7 (___) ___-__-__', 'id' => 'user-phone', 'title'=>'Формат: +7 (999) 999 99 99'])->label(false) ?>
            <?= $form->field($model, 'email')->textInput(['type' => 'email', 'class' => 'inp', 'placeholder' => 'Email'])->label(false) ?>
          </div>
          <?= $form->field($model, 'comment')->textarea(['class' => 'inp inp-text', 'placeholder' => 'Комментарий к заявке', 'rows' => '3'])->label(false) ?>
        </div>
        <div class="col-12 col-md-3 col-xl-3 offset-xl-1">
          <div class="block-info"><img src="/img/svg/user.svg" alt="User">
            <p>Наши менеджеры свяжутся с вами в самое ближйщее время. Спасибо за проявленный интерес к нашей продукции!</p>
          </div>
        </div>
      </div>
      <div class="req-wrap">
        <?= Html::submitButton('Отправить заявку', ['class' => 'btn-callback req']) ?>
      </div>
    <!-- </form> -->
    <?php ActiveForm::end() ?>
  </div>
