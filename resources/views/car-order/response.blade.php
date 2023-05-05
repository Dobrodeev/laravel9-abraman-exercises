<?php
    use Illuminate\Support\Facades\DB;
    
    $car_order = DB::table('car_orders')->get()[DB::table('car_orders')->get()->count() - 1];
?>

<!DOCTYPE html>
<html lang="ua">
    <head>
        <meta charset="utf-8"/>
        <title>Придбання автомобіля</title>
    </head>
    <body>
        <?php
            //dd($car_order);
        ?>
        <h1>Придбання автомобіля</h1>
        
        <h2>Дані особи</h2>
        <p>
            <li>ПІБ: {{ $car_order->full_name }}</li>
            <li>День народження: <?php echo $car_order->birth_date; ?></li>
            <li>Електронна пошта: {{ $car_order->email }}</li>
            <li>Номер телефону: {{ $car_order->phone }}</li>
        </p>
        
        <h2>Дані про місце проживання</h2>
        <p>
            <li>Країна: {{ $car_order->country }}</li>
            <li>Місто: {{ $car_order->city }}</li>
            <li>Адреса реєстрації: {{ $car_order->passport_adress }}</li>
            <li>Дійсне місце проживання: {{ $car_order->real_adress }}</li>
            <li>
                Чи дійсне місце проживання збігається з адресою реєстрації?:
                    <?php ($car_order->is_real_is_passport)? 'так' : 'ні' ?>
            </li>
        </p>
        
        <h2>Дані про кредит</h2>
        <p>
            <li>Марка авто: {{ $car_order->car_brand }}</li>
            <li>Колір авто: {{ $car_order->car_color }}</li>
            <li>Сума: <?php echo $car_order->sum ?></li>
            <li>Валюта кредиту: {{ $car_order->currency }}</li>
            <li>
                Страхування життя:
                    <?php ($car_order->is_life_insurance)? 'так' : 'ні' ?>
            </li>
            <li>
                Каско:
                    <?php ($car_order->is_car_insurance)? 'так' : 'ні' ?>
            </li>
            <li>
                Можливість дострокової сплати:
                    <?php ($car_order->is_preterm_payment)? 'так' : 'ні' ?>
            </li>
            <li>День планованого придбання: <?php echo $car_order->purchase_date; ?></li>
        </p>  
    </body>
</html>
