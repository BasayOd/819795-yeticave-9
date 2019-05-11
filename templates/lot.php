<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= $lot['name'] ?></title>
    <link href="css/normalize.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<div class="page-wrapper">
    <?= $header ?>
        <section class="lot-item container">
            <h2><?= strip_tags($lot['name']) ?></h2>
            <div class="lot-item__content">
                <div class="lot-item__left">
                    <div class="lot-item__image">
                        <img src="<?= $lot['img'] ?>" width="730" height="548" alt="<?=strip_tags($lot['name'])?>">
                    </div>
                    <p class="lot-item__category">Категория: <span><?= strip_tags($lot['category']) ?></span></p>
                    <p class="lot-item__description"><?= strip_tags($lot['description']) ?></p>
                </div>
                <div class="lot-item__right">
                    <?= $bet ?>
                    </div>
                    <div class="history">
                        <h3>История ставок (<span><?= count($bets)?></span>)</h3>
                        <table class="history__list">
                            <?php foreach($bets as $key=>$value){  ?>
                                <tr class="history__item">
                                    <td class="history__name"><?= strip_tags($value['user_name'])?></td>
                                    <td class="history__price"><?= $value['amount']?></td>
                                    <td class="history__time"><?= $value['create_at']?></td>
                                </tr>
                            <?php } ?>

                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>

</div>

<?= $footer ?>

</body>
</html>
