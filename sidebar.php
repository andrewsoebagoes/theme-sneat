<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="<?= routeTo('/') ?>" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="<?= env('APP_SIDEBAR_LOGO', asset('theme/assets/img/avatars/1.png"')) ?>" alt="logo" width="200">
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <?php foreach (get_menu() as $key => $module) : ?>
            <!-- Dashboard -->
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text"><?= __($module['moduleName'] . '.menu.module_name') ?></span>
            </li>

            <?php foreach ($module['menu'] as $k => $menu) : ?>

                <li class="menu-item  <?= getActive() == $menu['activeState'] ? 'active' : '' ?>">
                    <?php if (isset($menu['items'])) : ?>
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <?php else :?>
                            <a href="<?= $menu['route'] ?>" class="menu-link">
                        <?php endif ?>
                        <i class="menu-icon tf-icons bx <?= $menu['icon'] ?>"></i>
                        <div data-i18n="<?= __($menu['label']) ?>"><?= __($menu['label']) ?></div>
                        </a>

                        <?php if (isset($menu['items'])) : ?>
                            <ul class="menu-sub">
                                <?php if (isset($menu['items'])) foreach ($menu['items'] as $item) : ?>
                                    <li class="menu-item">
                                        <a href="<?= $item['route'] ?>" class="menu-link">
                                            <div data-i18n="Without menu"><?= __($item['label']) ?></div>
                                        </a>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        <?php endif ?>

                </li>
            <?php endforeach ?>
        <?php endforeach ?>

    </ul>
</aside>