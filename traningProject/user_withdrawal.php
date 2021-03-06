<?php
$a = all_users_withdrawal();
?>

<?php foreach ($a as $i):?>
    <div class="col-xl-4">
        <div id="c_1" class="card border shadow-0 mb-g shadow-sm-hover" data-filter-tags="<?php echo mb_strtolower($i["first_name"])?> <?php echo mb_strtolower($i["last_name"])?>">
            <div class="card-body border-faded border-top-0 border-left-0 border-right-0 rounded-top">
                <div class="d-flex flex-row align-items-center">
                                <span class="status status-success mr-3">
                                    <span class="rounded-circle profile-image d-block " style="background-image:url('<?php echo $i["avatar"]?>'); background-size: cover;"></span>
                                </span>
                    <div class="info-card-text flex-1">
                        <a href="page_profile.php?id=<?php echo $i["id"]?>" class="fs-xl text-truncate text-truncate-lg text-info">
                        <?php echo $i["first_name"]?> <?php echo $i["last_name"]?>
                        <a href="javascript:void(0);" class="fs-xl text-truncate text-truncate-lg text-info" data-toggle="dropdown" aria-expanded="false">

                            <?php if(check_for_admin() || $_SESSION['auth'] == $i["email"] ):?>
                            <i class="fal fas fa-cog fa-fw d-inline-block ml-1 fs-md"></i>
                            <i class="fal fa-angle-down d-inline-block ml-1 fs-md"></i>
                            <?php endif;?>
                        </a>
                        <?php if(check_for_admin() || $_SESSION['auth'] == $i["email"]):?>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="edit.php?id=<?php echo $i["id"]?>">
                                    <i class="fa fa-edit"></i>
                                    Редактировать</a>
                                <a class="dropdown-item" href="security.php?id=<?php echo $i["id"]?>">
                                    <i class="fa fa-lock"></i>
                                    Безопасность</a>
                                <a class="dropdown-item" href="status.php?id=<?php echo $i["id"]?>">
                                    <i class="fa fa-sun"></i>
                                    Установить статус</a>
                                <a class="dropdown-item" href="media.php?id=<?php echo $i["id"]?>">
                                    <i class="fa fa-camera"></i>
                                    Загрузить аватар
                                </a>
                                <a href="?id=<?php echo $i["id"] ?>&delete" class="dropdown-item" onclick="return confirm('Вы уверены? Это действие нельзя отменить!');">
                                    <i class="fa fa-window-close"></i>
                                    Удалить
                                </a>
                            </div>
                        <?php endif;?>

                        <span class="text-truncate text-truncate-xl"><?php echo $i["position"]?></span>
                    </div>
                    <button class="js-expand-btn btn btn-sm btn-default d-none" data-toggle="collapse" data-target="#c_1 > .card-body + .card-body" aria-expanded="false">
                        <span class="collapsed-hidden">+</span>
                        <span class="collapsed-reveal">-</span>
                    </button>
                </div>
            </div>
            <div class="card-body p-0 collapse show">
                <div class="p-3">
                    <a href="tel:<?php echo $i["phone"]?>" class="mt-1 d-block fs-sm fw-400 text-dark">
                        <i class="fas fa-mobile-alt text-muted mr-2"></i> <?php echo $i["phone"]?></a>
                    <a href="mailto:<?php echo $i["email"]?>" class="mt-1 d-block fs-sm fw-400 text-dark">
                        <i class="fas fa-mouse-pointer text-muted mr-2"></i> <?php echo $i["email"]?></a>
                    <address class="fs-sm fw-400 mt-4 text-muted">
                        <i class="fas fa-map-pin mr-2"></i> <?php echo $i["address"]?></address>
                    <div class="d-flex flex-row">
                        <a href="javascript:void(0);" class="mr-2 fs-xxl" style="color:#4680C2">
                            <i class="fab fa-vk"></i>
                        </a>
                        <a href="javascript:void(0);" class="mr-2 fs-xxl" style="color:#38A1F3">
                            <i class="fab fa-telegram"></i>
                        </a>
                        <a href="javascript:void(0);" class="mr-2 fs-xxl" style="color:#E1306C">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach;?>