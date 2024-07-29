<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">Administrator</span>
        </a>

        <ul class="sidebar-nav">
            <?php foreach ($adminMenus as $menuKey => $menuValue) { ?>


                <?php if ($menuValue['divider']) { ?>
                    <li class="sidebar-header">
                        <?= $menuValue['label'] ?>
                    </li>
                <?php } else { ?>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= $menuValue['url'] ?>">
                            <i class="align-middle" data-feather="<?= $menuValue['icon'] ?>"></i> <span class="align-middle"><?= $menuValue['label'] ?></span>
                        </a>
                    </li>
                <?php } ?>

            <?php } ?>
        </ul>
    </div>
</nav>