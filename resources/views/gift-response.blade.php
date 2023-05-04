<?php
    use Illuminate\Support\Facades\DB;

    $gift = DB::table('gifts')->get()[DB::table('gifts')->get()->count() - 1];
?>

<!DOCTYPE html>
<html lang="ua">
    <head>
        <meta charset="utf-8"/>
        <title>Придбання автомобіля</title>
    </head>
    <body>
        <p> Привіт, 
            <?php echo ($gift->person_sex == 'чоловіча')? "пане" : "пані" ?> 
            <?php echo $gift->full_name ?>. 
        </p>
        
        <p> Ви народилися <?php echo $gift->birth_date; ?>. </p>
        
        <p> 
            Ви <?php ($gift->is_will_greet)? "" : "не" ?> будете
            вітати зі святом.
        </p>
        
        <p>
            Ви хочете піти 
                <?php echo ($gift->is_go_to_cinema)? 'в кінотеатр, ' : 'не в кінотеатр, ' ?>
                <?php echo ($gift->is_go_to_cafe)? 'у кафе, , ' : 'не в кафе,' ?>
                <?php echo ($gift->is_go_to_coffeehouse)? 'у кав’ярню, ' : 'не в кав’ярню, ' ?>
                <?php echo ($gift->is_go_to_pizzeria)? 'у піцерію, ' : 'не в піцерію, ' ?>
                <?php echo ($gift->is_go_to_flat)? 'у квартиру, ' : 'не в квартиру, ' ?>
                <?php echo ($gift->is_go_to_cottage)? 'на дачу, ' : 'не на дачу, ' ?>
                <?php echo ($gift->is_go_at_picnic)? 'на пікнік, ' : 'не на пікнік, ' ?>
                <?php echo ($gift->is_go_at_hunting)? 'на полювання, ' : 'не на полювання, ' ?>
                <?php echo ($gift->is_go_at_fishcatch)? 'на риболовлю.' : 'не на риболовлю.' ?>
                
            Ви хочете подарувати
                <?php echo ($gift->is_to_gift_gold)? 'золото, ' : 'не золото, ' ?>
                <?php echo ($gift->is_to_gift_costume_jewellery)? 'біжутерію, ' : 'не біжутерію, ' ?>
                <?php echo ($gift->is_go_to_pizzeria)? 'сумочку, ' : 'не сумочку, ' ?>
                <?php echo ($gift->is_go_to_flat)? 'борсетку, ' : 'не борсетку, ' ?>
                <?php echo ($gift->is_go_to_cottage)? 'на риболовлю.' : 'не на риболовлю.' ?>
                <?php echo ($gift->is_to_gift_boxing_gloves)? 'боксерські рукавиці.' : 'не боксерські рукавиці.' ?>
                
            Ваш бюджет на подарунки складає 
            <?php
                switch ($gift->budget) {
                    case '300_uah': echo '300 грн'; break;
                    case '300_to_500_uah': echo '300-500 грн'; break;
                    case '500_to_1000_uah': echo '500-1000 грн'; break;
                    case 'over_1000_uah': echo 'більше 1000 грн'; break;
                }
            ?>
            .
        </p>
    </body>    
</html>
