<!DOCTYPE html>
<html lang="ua">
    <head>
        <meta charset="utf-8"/>
        <title>Форми</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>

    <body>
        <label for="8th_march_gift"><h1>Подарунок на 8 березня</h1></label>
        <div class="container">
        <form id="8th_march_gift" name="8th_march_gift" action="{{ route('gift-response') }}" method="post">
        @csrf
            <div class="mb-3">
                <label for="full_name" class="form-label">ПІБ:</label>
                <input type="text" id="full_name" name="full_name" class="form-control" required/><br/>
            </div>

            <div class="mb-3 col-sm-3">
                <label for="birth_date" class="form-label">День народження:</label>
                <input type="date" id="birth_date" name="birth_date" class="form-control" required/><br/>
            </div>

            Стать:
                <div class="form-check">
                    <label for="male">чоловіча</label>
                    <input type="radio" id="male" name="person_sex" value="чоловіча" class="form-check-input" required/>
                </div>

                <div class="form-check">
                    <label for="woman">жіноча</label>
                    <input type="radio" id="woman" name="person_sex" value="жіноча" class="form-check-input" required><br/>
                </div>

            Чи будете вітати:
                <div class="form-check">
                    <label for="yes">так</label>
                    <input type="radio" id="yes" name="is_will_greet" value="так" class="form-check-input" required/>
                </div>

                <div class="form-check">
                    <label for="no">ні</label>
                    <input type="radio" id="no" name="is_will_greet" value="ні" class="form-check-input" required><br/>
                </div>

            Куди піти:<br/>
                <div class="form-check">
                    <label for="is_go_to_cinema">у кінотеатр</label>
                    <input type="checkbox" id="is_go_to_cinema" name="is_go_to_cinema" class="form-check-input"/>
                </div>

                <div class="form-check">
                    <label for="is_go_to_cafe">у кафе</label>
                    <input type="checkbox" id="is_go_to_cafe" name="is_go_to_cafe" class="form-check-input"/>
                </div>

                <div class="form-check">
                    <label for="is_go_to_coffeehouse">у кав’ярню</label>
                    <input type="checkbox" id="is_go_to_coffeehouse" name="is_go_to_coffeehouse" class="form-check-input"/>
                </div>

                <div class="form-check">
                    <label for="is_go_to_pizzeria">у піцерію</label>
                    <input type="checkbox" id="is_go_to_pizzeria" name="is_go_to_pizzeria" class="form-check-input"/>
                </div>

                <div class="form-check">
                    <label for="is_go_to_flat">у квартиру</label>
                    <input type="checkbox" id="is_go_to_flat" name="is_go_to_flat" class="form-check-input"/>
                </div>

                <div class="form-check">
                    <label for="is_go_to_cottage">на дачу</label>
                    <input type="checkbox" id="is_go_to_cottage" name="is_go_to_cottage" class="form-check-input"/>
                </div>

                <div class="form-check">
                    <label for="is_go_at_picnic">на пікнік</label>
                    <input type="checkbox" id="is_go_at_picnic" name="is_go_at_picnic" class="form-check-input"/>
                </div>

                <div class="form-check">
                    <label for="is_go_at_hunting">на полювання</label>
                    <input type="checkbox" id="is_go_at_hunting" name="is_go_at_hunting" class="form-check-input"/>
                </div>

                <div class="form-check">
                    <label for="is_go_at_fishcatch">на риболовлю</label>
                    <input type="checkbox" id="is_go_at_fishcatch" name="is_go_at_fishcatch" class="form-check-input"/>
                </div>
            <br/>

            Що подарувати:<br/>
                <div class="form-check">
                    <label for="is_to_gift_gold">золото</label>
                    <input type="checkbox" id="is_to_gift_gold" name="is_to_gift_gold" class="form-check-input"/>
                </div>

                <div class="form-check">
                    <label for="is_to_gift_silver">срібло</label>
                    <input type="checkbox" id="is_to_gift_silver" name="is_to_gift_silver" class="form-check-input"/>
                </div>

                <div class="form-check">
                    <label for="is_to_gift_costume_jewellery">біжутерія</label>
                    <input type="checkbox" id="is_to_gift_costume_jewellery" name="is_to_gift_costume_jewellery" class="form-check-input"/>
                </div>

                <div class="form-check">
                    <label for="is_to_gift_handbag">сумочка</label>
                    <input type="checkbox" id="is_to_gift_handbag" name="is_to_gift_handbag" class="form-check-input"/>
                </div>

                <div class="form-check">
                    <label for="is_to_gift_italian_handbag">борсетка</label>
                    <input type="checkbox" id="is_to_gift_italian_handbag" name="is_to_gift_italian_handbag" class="form-check-input"/>
                </div>

                <div class="form-check">
                    <label for="is_to_gift_boxing_gloves">боксерські рукавиці</label>
                    <input type="checkbox" id="is_to_gift_boxing_gloves" name="is_to_gift_boxing_gloves" class="form-check-input"/>
                </div>
            <br/>

            <label for="budget">Бюджет на подарунки:</label>
            <div class="col-sm-3">
                <select id="budget" name="budget" class="form-select">
                    <option value="300_uah">300 грн</option>
                    <option value="300_to_500_uah">300‐500 грн</option>
                    <option value="500_to_1000_uah">500‐1000 грн</option>
                    <option value="over_1000_uah">більше 1000 грн</option>
                </select>
            </div>
            <br/>
            
            <div class="col-12">
                <input type="submit" value="Надіслати" class="btn btn-primary"/>
            </div>
        <form/>
        </div>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
