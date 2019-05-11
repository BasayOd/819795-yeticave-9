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
