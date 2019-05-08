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
            <h2><?= $lot['name'] ?></h2>
            <div class="lot-item__content">
                <div class="lot-item__left">
                    <div class="lot-item__image">
                        <img src="<?= $lot['img'] ?>" width="730" height="548" alt="Сноуборд">
                    </div>
                    <p class="lot-item__category">Категория: <span><?= $lot['category'] ?></span></p>
                    <p class="lot-item__description"><?= $lot['description'] ?></p>
                </div>
                <div class="lot-item__right">
                    <div class="lot-item__state">
                        <div class="lot-item__timer timer <?= check_alarm($lot['dt_end'])?>">
                            <?= show_remaining_time($lot['dt_end']) ?>
                        </div>
                        <div class="lot-item__cost-state">
                            <div class="lot-item__rate">
                                <span class="lot-item__amount">Текущая цена</span>
                                <span class="lot-item__cost"><?= form_price($lot['price'])?></span>
                            </div>
                            <div class="lot-item__min-cost">
                                Мин. ставка <span><?=  $lot['price']+$lot['bet_step'] ?> р</span>
                            </div>
                        </div>
                        <form class="lot-item__form" action="https://echo.htmlacademy.ru" method="post" autocomplete="off">
                            <p class="lot-item__form-item form__item form__item--invalid">
                                <label for="cost">Ваша ставка</label>
                                <input id="cost" type="text" name="cost" placeholder="12 000">
                                <span class="form__error">Введите наименование лота</span>
                            </p>
                            <button type="submit" class="button">Сделать ставку</button>
                        </form>
                    </div>
                    <div class="history">
                        <h3>История ставок (<span><?= count($bets)?></span>)</h3>
                        <table class="history__list">
                            <?php foreach($bets as $key=>$value){  ?>
                                <tr class="history__item">
                                    <td class="history__name"><?= $value['user_name']?></td>
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
