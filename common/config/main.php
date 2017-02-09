<?php
return
[

  'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
  'bootstrap' => ['debug'],
   'bootstrap' => ['gii'],
  'modules' =>
  [
      'admin' =>
      [
        'class' => 'mdm\admin\Module',
      ],

      'gii' =>
       [
            'class' => 'yii\gii\Module',

       ],

        'debug' =>
      [
        'class' => 'yii\debug\Module',
      ],
    
        'datecontrol' =>
         [
            'class' => 'kartik\datecontrol\Module',

            // format settings for displaying each date attribute
              'displaySettings' =>
                 [
                'date' => 'd-m-Y',
                'time' => 'H:i:s A',
                'datetime' => 'd-m-Y H:i:s A',
                 ],

            // format settings for saving each date attribute
            'saveSettings' =>
               [
                'date' => 'Y-m-d',
                'time' => 'H:i:s',
                'datetime' => 'Y-m-d H:i:s',
                ],



                // automatically use kartik\widgets for each of the above formats
                'autoWidget' => true,
            ],



   ],


'components' =>
  [
        'cache' =>
          [
            'class' => 'yii\caching\FileCache',
          ],
        'authManager' =>
          [
            'class' => 'yii\rbac\DbManager',
          ],
        'user' =>
          [
            //'class' => 'mdm\admin\models\User',
            'identityClass' => 'mdm\admin\models\User',
            'loginUrl' =>['admin/user/login'],
          ],
          'mailer' =>
           [
            'class' => 'yii\swiftmailer\Mailer',
           ],



    ],
];
