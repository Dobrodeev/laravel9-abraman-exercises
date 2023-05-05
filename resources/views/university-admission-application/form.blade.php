<!DOCTYPE html>
<html lang="ua">
    <head>
        <meta charset="utf-8"/>
        <title>Вступ в університет</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
            crossorigin="anonymous"
        >
    </head>

    <body>
        <label for="university_admission_application"><h1>Вступ в університет</h1></label>
        <form
            id="university_admission_application"
            name="university_admission_application"
            action="{{ route('university-admission-application-response') }}"
            method="get"
        >
            <div class="mb-3">
                <label for="full_name" class="form-label">ПІБ:</label>
                <input type="text" id="full_name" name="full_name" class="form-control"/><br/>
            </div>

            <div class="mb-3">
                <label for="birth_date" class="form-label">День народження:</label>
                <input type="date" id="birth_date" name="birth_date" class="form-control"/><br/>
            </div>

            <div class="mb-3">
                <label for="passport_adress" class="form-label">Адреса реєстрації:</label>
                <input type="text" id="passport_adress" name="passport_adress" class="form-control"/><br/>
            </div>

            <div class="mb-3">
                <label for="real_adress" class="form-label">Дійсне місце проживання:</label>
                <input type="text" id="real_adress" name="real_adress" class="form-control"/><br/>
            </div>

            <div class="mb-3">
                Наявні категорії водійського посвідчення:<br/>
                    <label for="is_driver_license_A" class="form-label">A</label>
                    <input type="checkbox" id="is_driver_license_A" name="is_driver_license_A" class="form-check-input"/>

                    <label for="is_driver_license_B" class="form-label">B</label>
                    <input type="checkbox" id="is_driver_license_B" name="is_driver_license_B" class="form-check-input"/>

                    <label for="is_driver_license_C" class="form-label">C</label>
                    <input type="checkbox" id="is_driver_license_C" name="is_driver_license_C" class="form-check-input"/>

                    <label for="is_driver_license_CE" class="form-label">CE</label>
                    <input type="checkbox" id="is_driver_license_CE" name="is_driver_license_CE" class="form-check-input"/>

                    <label for="is_driver_license_D" class="form-label">D</label>
                    <input type="checkbox" id="is_driver_license_D" name="is_driver_license_D" class="form-check-input"/>
                <br/>
            </div>

            <div class="mb-3">
                <label for="is_school_diploma" class="form-label">Чи є атестат за 11 клас?</label>
                <input type="checkbox" id="is_school_diploma" name="is_school_diploma" class="form-check-input"/><br/>
            </div>

            <div class="mb-3">
                <label for="is_college_diploma" class="form-label">Чи є диплом за 4 курси коледжу?</label>
                <input type="checkbox" id="is_college_diploma" name="is_college_diploma" class="form-check-input"/><br/>
            </div>

            <div class="mb-3">
                <label for="university" class="form-label">Університет для вступу:</label>
                <select id="university" name="university" class="form-control">
                    <option value="КПІ">КПІ</option>
                    <option value="КНУ">КНУ</option>
                    <option value="НАУ">НАУ</option>
                </select><br/>
            </div>

            <div class="mb-3">
                Оплата навчання:
                    <label for="budget" class="form-label">бюджет</label>
                    <input type="radio" id="budget" name="payment" value="бюджет" class="form-check-input"/>

                    <label for="contract" class="form-label">контракт</label>
                    <input type="radio" id="contract" name="payment" value="контракт" class="form-check-input"><br/>
            </div>

            <div class="mb-3">
                Форма навчання:
                    <label for="daily" class="form-label">денна</label>
                    <input type="radio" id="daily" name="studing_form" value="денна" class="form-check-input"/>

                    <label for="correspondence" class="form-label">заочна</label>
                    <input type="radio" id="correspondence" name="studing_form" value="заочна" class="form-check-input"><br/>
            </div>

            <div class="mb-3">
                Науковий ступінь:
                    <label for="is_bachelor" class="form-label">бакалавр</label>
                    <input type="checkbox" id="is_bachelor" name="is_bachelor" class="form-check-input"/>

                    <label for="is_magister" class="form-label">магістр</label>
                    <input type="checkbox" id="is_magister" name="is_magister" class="form-check-input"/><br/>
            </div>
                
            <input type="submit" value="Надіслати" class="btn btn-primary"/>
        </form>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
