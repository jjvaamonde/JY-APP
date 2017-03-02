<aside class="main-sidebar">

    <section class="sidebar">

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
                'options' => ['class' => 'sidebar-menu skin-blue'],
                'items' => [
                    ['label' => 'Menu JY-APP', 'options' => ['class' => 'header']],
                    ['label' => 'Anuncios', 'icon' => 'glyphicon glyphicon-bullhorn', 'url' => ['/anuncio']],
                    ['label' => 'Mis Datos', 'icon' => 'fa fa-file-code-o', 'url' => ['/user/view']],
                    [
                        'label' => 'Categoria',
                        'icon' => 'fa fa-share',
                        'url' =>  ['/categoria'],
                        'items' =>
                      [
                          ['label' => '   Sub Categorias', 'icon' => 'fa fa-file-code-o', 'url' => ['/sub-categoria'],],
                      ],],
                    ['label' => 'Reclamos', 'icon' => 'fa fa-file-code-o', 'url' => ['/reclamo']],
                    ['label' => 'Usuarios', 'icon' => 'fa fa-file-code-o', 'url' => ['/user']],
                    ['label' => 'Paquetes', 'icon' => 'fa fa-file-code-o', 'url' => ['/paquetes-premiun']],
                    ['label' => 'Rol', 'icon' => 'fa fa-file-code-o', 'url' => ['/ventas-vendedor']],
                    ['label' => 'Operaciones', 'icon' => 'fa fa-file-code-o', 'url' => ['/ventas-vendedor']],
                    ['label' => 'Publicidad', 'icon' => 'fa fa-file-code-o', 'url' => ['/ventas-vendedor']],
                    ['label' => 'Pagos', 'icon' => 'fa fa-file-code-o', 'url' => ['/ventas-vendedor']],
                    ['label' => 'Salir', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    ],
            ]

        ) ?>

    </section>

</aside>
