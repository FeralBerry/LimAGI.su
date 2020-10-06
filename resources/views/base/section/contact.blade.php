<div class="section">
    <div class="container header-big-text">
        <div class="twelve columns">
            <div class="title-page-text padding-top-bottom-title">
                <h2>Свяжитесь со мной</h2>
                <p>постараюсь ответить в ближайший час</p>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>
<div class="section">
    <div class="container">
        <form name="ajax-form" id="ajax-form" action="mail-it.php" method="post">
            <div class="six columns">
                <label for="name">
                    <span class="error" id="err-name">Пожалуйства введите ваше имя</span>
                </label>
                <input name="name" id="name" type="text"   placeholder="Ваше имя: *"/>
            </div>
            <div class="six columns">
                <label for="email">
                    <span class="error" id="err-email">пожалуйста введите ваш e-mail</span>
                    <span class="error" id="err-emailvld">e-mail имеет не верный формат</span>
                </label>
                <input name="email" id="email" type="text"  placeholder="E-Mail: *"/>
            </div>
            <div class="six columns">
                <label for="email">
                    <span class="error" id="err-phone">Пожалуйста введите ваш телефон</span>
                </label>
                <input name="phone" id="phone" type="text"  placeholder="Телефон: *"/>
            </div>
            <div class="twelve columns">
                <label for="message"></label>
                <textarea name="message" id="message" placeholder="Опишите что вас интересует"></textarea>
            </div>
            <div class="twelve columns">
                <div id="button-con"><button class="send_message button button--moema button--text-thick button--text-upper button--size-s" id="send" data-lang="en">Отправить</button></div>
            </div>
            <div class="clear"></div>
            <div class="error text-align-center" id="err-form">Проверьте правильность заполнения формы!</div>
            <div class="error text-align-center" id="err-timedout">Время ожидания истекло!</div>
            <div class="error" id="err-state"></div>
        </form>

        <div class="clear"></div>
        <div id="ajaxsuccess">Успешно отправлено!!</div>
        <div class="clear"></div>
    </div>
</div>


