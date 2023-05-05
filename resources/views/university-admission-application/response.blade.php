<?php
    use Illuminate\Support\Facades\DB;
    
    $application = DB::table('university_admission_applications')->get()[
        DB::table('university_admission_applications')->get()->count() - 1
    ];
?>

<!DOCTYPE html>
<html lang="ua">
    <head>
        <meta charset="utf-8"/>
        <title>Вступ в університет</title>
    </head>
    <body>
        <h1>Вступ в університет</h1>
        
        <h2>Дані особи</h2>
        <p>
            <li>ПІБ: {{ $application->full_name }}</li>
            <li>День народження: <?php echo $application->birth_date; ?></li>
            <li>Адреса реєстрації: {{ $application->passport_adress }}</li>
            <li>Дійсне місце проживання: {{ $application->real_adress }}</li>
        </p>
        
        <h2>Наявні категорії водійського посвідчення</h2>
        <p>
            <li>
                Категорія A?:
                    <?php echo ($application->is_driver_license_A)? 'так' : 'ні' ?>
            </li>
            <li>
                Категорія B?:
                    <?php echo ($application->is_driver_license_B)? 'так' : 'ні' ?>
            </li>
            <li>
                Категорія C?:
                    <?php echo ($application->is_driver_license_C)? 'так' : 'ні' ?>
            </li>
            <li>
                Категорія CE?:
                    <?php echo ($application->is_driver_license_CE)? 'так' : 'ні' ?>
            </li>
            <li>
                Категорія D?:
                    <?php echo ($application->is_driver_license_D)? 'так' : 'ні' ?>
            </li>   
        </p>
        
        <h2>Атестати</h2>
        <p>
            <li>
                Чи є атестат за 11 клас?:
                    <?php echo ($application->is_school_diploma)? 'так' : 'ні' ?>
            </li>
            <li>
                Чи є диплом за 4 курси коледжу?:
                    <?php echo ($application->is_college_diploma)? 'так' : 'ні' ?>
            </li>
        </p>
        
        <h2>Навчання</h2>
        <p>
            <li>Оплата навчання: {{ $application->payment }}</li>
            <li>Форма навчання: {{ $application->studing_form }}</li>
            <li>Оплата навчання: {{ $application->payment }}</li>
            
            <h3>Науковий ступінь</h3>
                <li>
                    Бакалавр?:
                        <?php echo ($application->is_bachelor)? 'так' : 'ні' ?>
                </li>
                <li>
                    Магістр?:
                        <?php echo ($application->is_magister)? 'так' : 'ні' ?>
                </li>
        </p>
        
    </body>
</html>
