<!DOCTYPE html>
<html lang="ua">
    <head>
        <meta charset="utf-8"/>
        <title>Замовлення автомобіля</title>
    </head>

    <body>
        <label for="car_order"><h1>Замовлення автомобіля</h1></label>
        <form id="car_order" name="car_order" action="{{ route('car-order-response') }}" method="post" enctype="multipart/form-data">
        @csrf
            <h2>Дані особи</h2>
                <label for="full_name">ПІБ:</label>
                <input type="text" id="full_name" name="full_name" required/><br/>

                <label for="birth_date">День народження:</label>
                <input type="date" id="birth_date" name="birth_date" required/><br/>

                <label for="email">Електоронна пошта:</label>
                <input type="email" id="email" name="email" required/><br/>

                <label for="phone">Номер мобільного телефону:</label>
                <input type="tel" id="phone" name="phone" required/><br/>

            <h2>Дані про місце проживання</h2>
                <label for="country">Країна:</label>
                <select id="country" name="country">
                    <option value="Україна">Україна</option>
                    <option value="США">США</option>
                    <option value="Німеччина">Німеччина</option>
                    <option value="Польща">Польща</option>
                    <option value="Греція">Греція</option>
                    <option value="Швейцарія">Швейцарія</option>
                    <option value="Австралія">Австралія</option>
                    <option value="Ліхтенштейн">Ліхтенштейн</option>
                    <option value="Люксембург">Люксембург</option>
                    <option value="Італія">Італія</option>
                </select><br/>

                <label for="city">Місто:</label>
                <input type="text" id="city" name="city" required/><br/>

                <label for="passport_adress">Адреса реєстрації:</label>
                <input type="text" id="passport_adress" name="passport_adress" required/><br/>

                <label for="real_adress">Дійсне місце проживання:</label>
                <input type="text" id="real_adress" name="real_adress" required/><br/>

                <label for="is_real_is_passport">Чи дійсне місце проживання збігається з адресою реєстрації?</label>
                <input type="checkbox" id="is_real_is_passport" name="is_real_is_passport"/><br/>

            <h2>Дані про кредит</h2>
                <label for="car_brand">Марка авто:</label>
                <input type="text" id="car_brand" name="car_brand" required/><br/>

                <label for="car_color">Колір авто:</label>
                <input type="color" id="car_color" name="car_color"/><br/>

                <label for="sum">Сума (5000‐15000):</label>
                <input type="range" id="sum" name="sum" min="5000" max="15000" step="100"/><br/>

                Валюта кредиту:
                    <label for="hryvnia">UAH</label>
                    <input type="radio" id="hryvnia" name="currency" value="UAH"/>

                    <label for="dollar">USD</label>
                    <input type="radio" id="dollar" name="currency" value="USD"><br/>

                <label for="is_life_insurance">Страхування життя</label>
                <input type="checkbox" id="is_life_insurance" name="is_life_insurance"/><br/>

                <label for="is_car_insurance">Каско</label>
                <input type="checkbox" id="is_car_insurance" name="is_car_insurance"/><br/>

                <label for="is_preterm_payment">Можливість дострокової сплати</label>
                <input type="checkbox" id="is_preterm_payment" name="is_preterm_payment"/><br/>

                <label for="client_note">Примітки:</label><br/>
                <textarea id="client_note" name="client_note" rows="3" cols="30"></textarea><br/>

                <label for="person_photo">Файл зображення особи:</label>
                <input type="file" id="person_photo" name="person_photo"><br/>

                <label for="purchase_date">День планованого придбання:</label>
                <input type="date" id="purchase_date" name="purchase_date" required/><br/>
                
                <input type="submit" value="Надіслати"/>
        </form>
    </body>
</html>
