<?php
public function actionIndex()
    {
      //$emails содержит адресатов
      $model = new RequestForm();
      if ($model->load(Yii::$app->request->post()) && $model->validate()){
          Yii::$app->mailer->compose()
              ->setFrom($model['email'])
              ->setTo($emails)
              ->setSubject('Новая заявка!')
              ->setHtmlBody('Клиент ' . $model['fullname'] . ' отправил(а) вам заявку!<br />
              Параметры поддона: длина - ' . $model['length'] . ' мм., ширина - ' . $model['width'] . ' мм., высота - ' . $model['height']. ' мм. <br />
              Комментарий к заявке: ' . $model['comment'] . '<br />
              Связаться с клиентом можно по e-mail: ' . $model['email'] . ' или по телефону: ' . $model ['tel'])
              ->send();
      }
      return $this->render('index', ['model' => $model]);
    }
