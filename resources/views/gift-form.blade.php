<!DOCTYPE html>
<html lang="ua">
    <head>
        <meta charset="utf-8"/>
        <title>Форми</title>
    </head>

    <body>
        <label for="8th_march_gift"><h1>Подарунок на 8 березня</h1></label>
        <form id="8th_march_gift" name="8th_march_gift" action="{{ route('gift-response') }}" method="post">
        @csrf
            <label for="full_name">ПІБ:</label>
            <input type="text" id="full_name" name="full_name"/><br/>

            <label for="birth_date">День народження:</label>
            <input type="date" id="birth_date" name="birth_date"/><br/>

            Стать:
                <label for="male">чоловіча</label>
                <input type="radio" id="male" name="person_sex" value="чоловіча"/>

                <label for="woman">жіноча</label>
                <input type="radio" id="woman" name="person_sex" value="жіноча"><br/>

            Чи будете вітати:
                <label for="yes">так</label>
                <input type="radio" id="yes" name="is_will_greet" value="так"/>

                <label for="no">ні</label>
                <input type="radio" id="no" name="is_will_greet" value="ні"><br/>

            Куди піти:<br/>
                <label for="is_go_to_cinema">у кінотеатр</label>
                <input type="checkbox" id="is_go_to_cinema" name="is_go_to_cinema"/>

                <label for="is_go_to_cafe">у кафе</label>
                <input type="checkbox" id="is_go_to_cafe" name="is_go_to_cafe"/>

                <label for="is_go_to_coffeehouse">у кав’ярню</label>
                <input type="checkbox" id="is_go_to_coffeehouse" name="is_go_to_coffeehouse"/>

                <label for="is_go_to_pizzeria">у піцерію</label>
                <input type="checkbox" id="is_go_to_pizzeria" name="is_go_to_pizzeria"/>

                <label for="is_go_to_flat">у квартиру</label>
                <input type="checkbox" id="is_go_to_flat" name="is_go_to_flat"/>

                <label for="is_go_to_cottage">на дачу</label>
                <input type="checkbox" id="is_go_to_cottage" name="is_go_to_cottage"/>

                <label for="is_go_at_picnic">на пікнік</label>
                <input type="checkbox" id="is_go_at_picnic" name="is_go_at_picnic"/>

                <label for="is_go_at_hunting">на полювання</label>
                <input type="checkbox" id="is_go_at_hunting" name="is_go_at_hunting"/>

                <label for="is_go_at_fishcatch">на риболовлю</label>
                <input type="checkbox" id="is_go_at_fishcatch" name="is_go_at_fishcatch"/>
            <br/>

            Що подарувати:<br/>
                <label for="is_to_gift_gold">золото</label>
                <input type="checkbox" id="is_to_gift_gold" name="is_to_gift_gold"/>

                <label for="is_to_gift_silver">срібло</label>
                <input type="checkbox" id="is_to_gift_silver" name="is_to_gift_silver"/>

                <label for="is_to_gift_costume_jewellery">біжутерія</label>
                <input type="checkbox" id="is_to_gift_costume_jewellery" name="is_to_gift_costume_jewellery"/>

                <label for="is_to_gift_handbag">сумочка</label>
                <input type="checkbox" id="is_to_gift_handbag" name="is_to_gift_handbag"/>

                <label for="is_to_gift_italian_handbag">борсетка</label>
                <input type="checkbox" id="is_to_gift_italian_handbag" name="is_to_gift_italian_handbag"/>

                <label for="is_to_gift_boxing_gloves">боксерські рукавиці</label>
                <input type="checkbox" id="is_to_gift_boxing_gloves" name="is_to_gift_boxing_gloves"/>
            <br/>

            Бюджет на подарунки:<br/>
                <label for="is_budget_300_uah">300 грн</label>
                <input type="checkbox" id="is_budget_300_uah" name="is_budget_300_uah"/>

                <label for="is_budget_300_to_500_uah">300‐500 грн</label>
                <input type="checkbox" id="is_budget_300_to_500_uah" name="is_budget_300_to_500_uah"/>

                <label for="is_budget_300_to_1000_uah">500‐1000 грн</label>
                <input type="checkbox" id="is_budget_300_to_1000_uah" name="is_budget_300_to_1000_uah"/>

                <label for="is_budget_over_1000_uah">більше 1000 грн</label>
                <input type="checkbox" id="is_budget_over_1000_uah" name="is_budget_over_1000_uah"/>
            <br/>
            
            <input type="submit" value="Надіслати"/>
        <form/>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
