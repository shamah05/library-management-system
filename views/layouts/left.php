<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="img/user.png" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Admin User</p>

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
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu', 'options' => ['class' => 'header']],
                    ['label' => 'Dashboard', 'icon' => 'dashboard', 'url' => ['/']],
                    ['label' => 'Monitoring', 'icon' => 'bar-chart', 'url' => ['/debug']],
                    ['label' => 'Management', 'options' => ['class' => 'header']],
                    [
                        'label' => 'User Management',
                        'icon' => 'address-book',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Admin Record', 'url' => ['/user/index'],],
                        ],
                    ],
                    [
                        'label' => 'Book Keeping',
                        'icon' => 'book',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Subject Category', 'url' => ['/subject/index'],],
                            ['label' => 'Book Record', 'url' => ['/book/index'],],
                            ['label' => 'Returned Book', 'url' => ['/issue/index'],],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>