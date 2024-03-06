<form name="request-calc" id="request-calc" action="" method="POST">
    <div class="form__wrapper flex">
        <div class="inp__wrapper">
            <input type="text" name="order_name" placeholder="Имя">
        </div>
        <div class="inp__wrapper">
            <input type="text" name="order_mail" placeholder="Email">
        </div>
        <div class="inp__wrapper">
            <input type="text" name="order_tel" placeholder="Телефон">
        </div>

        <button type="submit" class="btn dark__btn btn__submit">
            Отправить заявку</button>
        <label class="patent-form__custom-checkbox">
            <input type="checkbox" name="agree">
            <span class="patent-form__checkmark"></span>
            Я даю согласие на обработку моих персональных данных
        </label>

        <div class="global_err">Дождитесь отправки предыдущей формы!</div>
    </div>
</form>
