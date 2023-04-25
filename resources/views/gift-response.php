<!DOCTYPE html>
<html lang="ua">
    <head>
        <meta charset="utf-8"/>
        <title>Придбання автомобіля</title>
        <link href="css/styles.css"/>
    </head>
    <?php
        function printCheckboxValue($checkbox_name, $if_checked_text, $if_not_checked_text) {
            echo isset($_POST[$checkbox_name])?
                $if_checked_text : $if_not_checked_text;
        }
    ?>
    <body>
        <p> Привіт, 
            <?php echo ($_POST["person_sex"] == "чоловіча")? "пане" : "пані"; ?> 
            <?php echo $_POST["full_name"]; ?>. 
        </p>
        
        <p> Ви народилися <?php echo $_POST["birth_date"]; ?>. </p>
        
        <p> 
            Ви <?php echo ($_POST["is_will_greet"] == "так")? "" : "не"; ?> будете
            вітати зі святом.
        </p>
        
        <p>
            Ви хочете піти 
            <?php
                printCheckboxValue("is_go_to_cinema", "в кінотеатр, ", "не в кінотеатр, ");
                printCheckboxValue("is_go_to_cafe", "у кафе, ", "не в кафе," );
                printCheckboxValue("is_go_to_coffeehouse", "у кав’ярню, ", "не в кав’ярню, ");
                printCheckboxValue("is_go_to_pizzeria", "у піцерію, ", "не в піцерію, ");
                printCheckboxValue("is_go_to_flat", "у квартиру, ", "не в квартиру, ");
                printCheckboxValue("is_go_to_cottage", "на дачу, ", "не на дачу, ");
                printCheckboxValue("is_go_at_picnic", "на пікнік, ", "не на пікнік, ");
                printCheckboxValue("is_go_at_hunting", "на полювання, ", "не на полювання, ");
                printCheckboxValue("is_go_at_fishcatch", "на риболовлю.", "не на риболовлю.");
            ?>
            Ви хочете подарувати 
            <?php
                printCheckboxValue("is_to_gift_gold", "золото, ", "не золото, ");
                printCheckboxValue("is_to_gift_silver", "срібло, ", "не срібло," );
                printCheckboxValue("is_to_gift_costume_jewellery", "біжутерію, ", "не біжутерію, ");
                printCheckboxValue("is_go_to_pizzeria", "сумочку, ", "не сумочку, ");
                printCheckboxValue("is_go_to_flat", "борсетку, ", "не борсетку, ");
                printCheckboxValue("is_go_to_cottage", "боксерські рукавиці.", "не боксерські рукавиці.");
            ?>
            Ваші бюджети на подарунки 
            <?php
                printCheckboxValue("is_budget_300_uah", "300 грн, ", "не 300 грн, ");
                printCheckboxValue("is_budget_300_to_500_uah", "300‐500 грн, ", "не 300‐500 грн, " );
                printCheckboxValue("is_budget_300_to_1000_uah", "500‐1000 грн, ", "не 500‐1000 грн, ");
                printCheckboxValue("is_budget_over_1000_uah", "більше 1000 грн.", "не більше 1000 грн.");
            ?>
        </p>
        
        
        <p>$_POST =</p>
        <?php echo json_encode($_POST) ?>
    </body>    
</html>
