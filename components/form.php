<section class="secForm">
    <h1 class="secForm__tittle">Make an
        appointment</h1>

    <form class="secForm__form" action="https://formspree.io/f/mdovejzb" method="POST">
        <div class="secForm__form-input">
            <span class="secForm__form-input-icon"><img src="../assets/form_icons/user.svg" alt=""></span>
            <input type="text" placeholder="YOUR NAME" name="name" required>
        </div>

        <div class="secForm__form-input">
            <span class="secForm__form-input-icon"><img src="../assets/form_icons/phone.svg" alt=""></span>
            <input type="text" placeholder="PHONE NUMBER" name="number" required>
        </div>

        <div class="secForm__form-input">
            <span class="secForm__form-input-icon"><img src="../assets/form_icons/scissors.svg" alt=""></span>
            <input type="text" placeholder="SERVICE" name="service" >
        </div>

        <div class="secForm__form-input">
            <span class="secForm__form-input-icon"><img src="../assets/form_icons/calendar.svg" alt=""></span>
            <input type="date" placeholder="DATE" name="date">
        </div>

        <div class="secForm__form-input">
            <span class="secForm__form-input-icon"><img src="../assets/form_icons/watch.svg" alt=""></span>
            <input type="time" placeholder="TIME" name="time">
        </div>

        <div class="secForm__form-input">
            <span class="secForm__form-input-icon-area"><img src="../assets/form_icons/message.svg" alt=""></span>
            <textarea id="" placeholder="YOUR MESSAGE" name="subject" required></textarea>
        </div>
        <div class="secForm__form-submit">
            <input class="secForm__form-submit-btn" type="submit" value="APPOINTMENT">
        </div>

        <input type="hidden" name="_next" value="https://muestra-webpeluqueria-production.up.railway.app/">
        <input type="hidden" name="_captcha" value="false">
        <input type="hidden" name="_template" value="box">
    </form>
</section>