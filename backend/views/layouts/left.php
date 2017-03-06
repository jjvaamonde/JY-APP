<aside class="main-sidebar skin-purple">

    <section class="sidebar skin-purple-light">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu skin-purple-light' ],
                'items' => [
                    ['label' => 'Menu JY', 'options' => ['class' => 'header']],
                    ['label' => 'Anuncios', 'icon' => 'glyphicon glyphicon-bullhorn', 'url' => ['/anuncio']],
                    ['label' => 'Mis Datos', 'icon' => 'glyphicon glyphicon-user', 'url' => ['/user']],
                    ['label' => 'Reclamos', 'icon' => 'glyphicon glyphicon-registration-mark', 'url' => ['/reclamo']],
                    ['label' => 'Premios', 'icon' => 'glyphicon glyphicon-gift', 'url' => ['/premio']],
                    ['label' => 'Ventas', 'icon' => 'glyphicon glyphicon-usd', 'url' => ['/ventas-usuarios']],
                    ['label' => 'Paquetes', 'icon' => 'glyphicon glyphicon-shopping-cart', 'url' => ['/paquete-premium']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    ],

            ]

        ) ?>

    </section>

</aside>
