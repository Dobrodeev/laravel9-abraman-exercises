<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Exports\MenusExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

/**
 * Class BooksController
 * @package App\Http\Controllers
 */
class BooksController extends Controller
{
    /**
     * двухзначное целое число
     */
    public const NUMBER_2 = 21;
    /**
     * трехзначное целое число
     */
    public const NUMBER_3 = 123;
    /**
     * Текст из пяти слов
     */
    private const TEXT_STRING = 'Text is string and simple.';

    /*    public function showAllBooks()
    {}
    public function addNewBook()
    {}
    public function updateBook()
    {}
    public function showBookInfo()
    {}*/

    /**
     * Экспортируем пользователей из админ-панели Voyager (dummy data, демо данные)
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function exportUsers()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    /**
     * Экспортируем меню из админ панели
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function exportMenus()
    {
        return Excel::download(new MenusExport, 'menus.xlsx');
    }

    /**
     * @param  string  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id = '')
    {
        //unset($result_three_number);
        // $text = integer11numbers(103);
        /** $number2 = $this->integer6(self::NUMBER_2);
         * echo ' Для двузначного числа: '.self::NUMBER_2.' : '.$number2[0].' '.$number2[1].'<br>';
         * $number8 = $this->integer8(self::NUMBER_2);
         * echo " Для двузначного числа NUMBER_2 преставили цифры: $number8 <br>";
         * $integer11 = $this->integer11(integer11numbers(self::NUMBER_3));
         */
        //        $integer11 = $this->integer11([1, 2, 1]);
        /** echo " Для трехзанчного числа NUMBER_3 сумма и произведение его цифр: $integer11[0], $integer11[1] <br>";
         * $integer12 = $this->integer12(integer11numbers(self::NUMBER_3));
         * echo 'Число справа налево: '.$integer12.'<br>';
         * $integer13 = $this->integer13(integer11numbers(self::NUMBER_3));
         * echo 'Первую цифру зачеркнули слева и дописали справа: '.$integer13.'<br>';
         * echo '<pre>';
         * print_r($integer11);
         * echo '</pre>';
         * $integer11numbers = integer11numbers(121);
         * echo '<pre>';
         * print_r($integer11numbers);
         * echo '</pre>';
         * dump($integer11numbers);
         */
        // return view('welcome', ['text' => $text]);
        $myNumber = 127;
        $numbers = $this->integer11numbers($myNumber);
        // $integer11numbers = 121;
//         dump($integer11numbers);
        $booleanResult = $this->boolean1(0);
        $boolean = $this->boolean23(1231);
        dump($booleanResult);
        dump($numbers);
        dump($boolean);
        $for_x = 0;
        $result_x = $this->if2($for_x);
        dump($for_x);
        // return view('welcome', ['numbers' => $numbers]);
        // $result = $this->if4(-3, -3, 1);
        // dump($result);
        /*$result0 = $this->if6(-3, -3);
        dump($result0);
        $result = $this->if6a(-3, -3);
        dump($result);
        $result18 = $this->if18(-32, -31, -31);
        dump($result18);
        $result16 = $this->if16(-32, -31, -30);
        dump($result16);
        $result17a = $this->if17a(-32, -31, -30);
        dump($result17a);*/
        $result18 = $this->if18(133, 13, 133);
        dump($result18);
        $result20 = $this->if20(133, 13, 78);
        dump($result20);
        $result21 = $this->if21(-0, -12);
        dump($result21);
        //        dump(request());
        $result29 = $this->if29(-78);
        dump($result29);
        $case1 = $this->case1(13);
        echo '<br>';
        /**
         * use helpers
         */
        echo '<hr>';
        $isAccessible = Arr::accessible(['a' => 1, 'b' => 2]);
        print '$isAccessible: <br>';
        print $isAccessible . '<br>';
        echo $case15 = $this->case15(11, 4);
        dump($case15);
        $slice = Str::before($case15, 'Hearts');
        print 'Str::before ' . $slice . '<br>';
        $path = app_path();
        print 'app path: ' . $path . '<br>';
        // $url = asset('img/photo.jpg');
        // print 'generate url asset(\'img/photo.jpg\'): ' . $url . '<br>';
        // return view('welcome')->with('numbers', $numbers);
        // $contents = Storage::get('glossary.json');
        // dump($contents);

        // $result = json_decode($contents, false);
        // dump($result);
        // echo $result->glossary->GlossDiv->title;
        // echo '<br>';
        // print $result->glossary->GlossDiv->GlossList->GlossEntry->Abbrev;
        // echo '<br>';

        // $contentsXML = Storage::get('config.xml');
        // dump($contentsXML);
        // if(is_string($contentsXML)) print 'It is string';
        // else print 'not string.';
        // $xml = simplexml_load_string($contentsXML);
        // $json = json_encode($xml);
        // $array = json_decode($json,TRUE);
        // dump($array);
        // print $array['default']['payment']['flutterwave_express']['group'];
        $if26 = $this->if26(13);
        dump($if26);
        print $if26;
        // $result = json_decode($contents, false);
        // dump($result);
        // print $contents;
        // echo '<pre>';
        // print_r($contents);
        // echo '</pre>';
        // return view('admin.profile')->with('numbers', $numbers)->with('myNumber', $myNumber);
        echo '<br>';
        $this->minmax20();
    }

    /**
     * Дано расстояние L в сантиметрах. Используя операцию деления нацело, найти количество полных метров в нем (1 метр = 100 см).
     * @param $line
     * @return int
     */
    public function integer1($line)
    {
        $metres = (int) ($line / 100);
        return $metres;
    }

    /**
     * Дана масса M в килограммах. Используя операцию деления нацело,
     * найти количество полных тонн в ней (1 тонна = 1000 кг).
     * @param $M
     * @return int
     */
    public function integer2($M)
    {
        $tonnes = (int) ($M / 1000);
        return $tonnes;
    }

    /**
     * Дан размер файла в байтах. Используя операцию деления нацело,
     * найти количество полных килобайтов, которые занимает данный файл (1 килобайт = 1024 байта).
     * @param $Bytes
     * @return int
     */
    //
    /**
     * @param $Bytes
     * @return int
     */
    //
    /**
     * @param  int  $Bytes
     * @return int
     */
    public function integer3(int $Bytes): int
    {
        $kiloBytes = (int) ($Bytes / 1024);
        return $kiloBytes;
    }

    /**
     * Даны целые положительные числа A и B (A > B). На отрезке длины A размещено максимально возможное
     * количество отрезков длины B (без наложений). Используя операцию деления нацело, найти количество отрезков B,
     * размещенных на отрезке A.
     * @param $A
     * @param $B
     * @return int
     */
    //

    /**
     * @param  int  $A
     * @param $B
     * @return int
     */
    public function integer4(int $A, $B)
    {
        $count = (int) ($A / $B);
        return $count;
    }

    /**
     * Даны целые положительные числа A и B (A > B). На отрезке длины A
     * размещено максимально возможное количество отрезков длины B (без наложений). Используя операцию взятия остатка от деления нацело, найти
     * длину незанятой части отрезка A.
     * @param $A
     * @param $B
     * @return int
     */
    public function integer5($A, $B)
    {
        $count = (int) ($A / $B);
        $result = $A - $count * $B;
        return $count;
    }

    /**
     * Дано двузначное число. Вывести вначале его левую цифру (десятки), а затем — его правую цифру (единицы).
     * Для нахождения десятков использовать операцию деления нацело, для нахождения единиц — операцию взятия остатка от деления.
     * @param  int  $number
     * @return array|int[]
     */
    public function integer6(int $number): array
    {
        $left = (int) ($number / 10);
        $right = $number % 10;
        return [$left, $right];
    }

    /**
     * Дано двузначное число. Найти сумму и произведение его цифр.
     * @param  int  $number
     * @return array
     */
    public function integer7(int $number): array
    {
        $left = (int) ($number / 10);
        $right = $number % 10;
        $sum = $left + $right;
        $product = $left * $right;
        return [$sum, $product];
    }

    /**
     * Дано двузначное число. Вывести число, полученное при перестановке цифр исходного числа.
     * @param  int  $number
     * @return int
     */
    public function integer8(int $number): int
    {
        $left = (int) ($number / 10);
        $right = $number % 10;
        return (int) ($right . $left);
    }

    /**
     * Дано трехзначное число. Используя одну операцию деления нацело, вывести первую цифру данного числа (сотни).
     * @param  int  $number
     * @return int
     */
    public function integer9(int $number): int
    {
        $first = (int) $number / 100;
        return $first;
    }

    //        $first_number = integer9(103);
//        echo 'First number 103 is: '.$first_number.'<br>';
    /**
     * Дано трехзначное число. Вывести вначале его последнюю цифру (единицы), а затем — его среднюю цифру (десятки).
     * @param  int  $number
     * @return array|int[]
     */
    public function integer10(int $number): array
    {
        $last = $number % 100;
        $middle = ($number / 10) % 10;
        return [$last, $middle];
    }

    //        $result_three_number = integer10(103);
//        echo " Сначала последняя цифра, потом средняя для числа 103: $result_three_number[0], $result_three_number[1]<br>";
    /**
     * Дано трехзначное число. Найти цифры этого числа
     * @param  int  $number
     * @return array|int[]
     */
    public function integer11numbers(int $number): array
    {
        $first = (int) ($number / 100);
        $second = (int) ($number / 10) % 10;
        $third = $number % 10;
        return [$first, $second, $third];
    }


    /**
     * Дано трехзначное число. Найти сумму и произведение его цифр.
     * @param  array  $number
     * @return array
     */
    public function integer11(array $number): array
    {
        /*$sum = array_sum($number);
        $product = array_product($number);
        $sum = $number[0] + $number[1] + $number[2];
        $product = $number[0] * $number[1] * $number[2];*/
        //        return [$sum, $product];
        return [array_sum($number), array_product($number)];
    }

    /**
     * Дано трехзначное число. Вывести число, полученное при прочтении исходного числа справа налево.
     * @param  array  $number
     * @return int
     */
    public function integer12(array $number): int
    {
        //        $result = (int) ($number[2].$number[1].$number[0]);
        return (int) ($number[2] . $number[1] . $number[0]);
    }

    /**
     * Дано трехзначное число. В нем зачеркнули первую слева цифру и приписали ее справа. Вывести полученное число.
     * @param  array  $number
     * @return int
     */
    public function integer13(array $number): int
    {
        return (int) ($number[1] . $number[2] . $number[0]);
    }

    /**
     * Дано трехзначное число. В нем зачеркнули первую справа цифру приписали ее слева. Вывести полученное число.
     * @param  array  $number
     * @return int
     */
    public function integer14(array $number): int
    {
        return (int) ($number[2] . $number[1] . $number[0]);
    }

    /**
     * Дано трехзначное число. Вывести число, полученное при перестановке цифр сотен и десятков исходного числа
     * (например, 123 перейдет в 213).
     * @param  array  $number
     * @return int
     */
    public function integer15(array $number): int
    {
        return (int) ($number[1] . $number[0] . $number[2]);
    }

    /**
     * Дано трехзначное число. Вывести число, полученное при перестановке цифр десятков и единиц исходного числа
     * (например, 123 перейдет в 132).
     * @param  array  $number
     * @return int
     */
    public function integer16(array $number): int
    {
        return (int) ($number[0] . $number[2] . $number[1]);
    }

    /**
     * Дано целое число, большее 999. Используя одну операцию деления нацело и одну операцию взятия остатка от
     * деления, найти цифру, соответствующую разряду сотен в записи этого числа.
     * @param  int  $number
     * @return int
     */
    public function integer17(int $number): int
    {
        return (int) ($number / 100) % 10;
    }

    /**
     * Дано целое число, большее 999. Используя одну операцию деления нацело и одну операцию взятия остатка от
     * деления, найти цифру, соответствующую разряду тысяч в записи этого числа.
     * @param  int  $number
     * @return int
     */
    public function integer18(int $number): int
    {
        return (int) ($number / 1000);
    }

    /**
     * С начала суток прошло N секунд (N — целое). Найти количество полных минут, прошедших с начала суток.
     * @param  int  $seconds
     * @return int
     */
    public function integer19(int $seconds): int
    {
        return (int) ($seconds / 60);
    }

    /**
     * С начала суток прошло N секунд (N — целое). Найти количество полных часов, прошедших с начала суток.
     * @param  int  $seconds
     * @return int
     */
    public function integer20(int $seconds): int
    {
        $hours = (int) ($seconds / 3600);
    }

    /**
     * С начала суток прошло N секунд (N — целое). Найти количество секунд, прошедших с начала последней минуты.
     * @param  int  $seconds
     * @return int
     */
    public function integer21(int $seconds): int
    {
        $minutes = (int) ($seconds / 60);
        return $seconds - $minutes;
    }

    /**
     * С начала суток прошло N секунд (N — целое). Найти количество секунд, прошедших с начала последнего часа.
     * @param  int  $seconds
     * @return int
     */
    public function integer22(int $seconds): int
    {
        $hours = (int) ($seconds / 3600);
        return $seconds - $hours;
    }

    /**
     * С начала суток прошло N секунд (N — целое). Найти количество полных минут, прошедших с начала последнего часа.
     * @param  int  $seconds
     * @return int
     */
    public function integer23(int $seconds): int
    {
        $hours = (int) ($seconds / 3600);
        return (int) (($seconds - $hours) / 60);
    }

    /**
     * Дано целое число A. Проверить истинность высказывания: «Число A является положительным».
     * @param $a
     * @return bool
     */
    public function boolean1($a): bool
    {
        if ($a > 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Дано целое число A. Проверить истинность высказывания: «Число A является нечетным».
     * @param $a
     * @return bool
     */
    public function boolean2($a)
    {
        if ($a % 2 != 0) {
            return true;
        }
    }

    /**
     * Дано целое число A. Проверить истинность высказывания: «Число Aявляется четным».
     * @param $a
     * @return bool
     */
    public function boolean3($a)
    {
        if ($a % 2 == 0) {
            return true;
        }
    }

    /**
     * Даны два целых числа: A, B. Проверить истинность высказывания: «Справедливы неравенства A > 2 и B ≤ 3».
     * @param $a
     * @param $b
     * @return bool
     */
    public function boolean4($a, $b)
    {
        if ($a > 2 and $b <= 3) {
            return true;
        }
    }

    /**
     * Даны два целых числа: A, B. Проверить истинность высказывания: «Справедливы неравенства A ≥ 0 или B < –2».
     * @param $a
     * @param $b
     * @return bool
     */
    public function boolean5($a, $b): bool
    {
        if ($a >= 0 and $b < -2) {
            return true;
        }
    }

    /**
     * Даны три целых числа: A, B, C. Проверить истинность высказывания: «Справедливо двойное неравенство A < B < C».
     * @param  int  $a
     * @param $b
     * @param $c
     * @return bool
     */
    public function boolean6(int $a, $b, $c): bool
    {
        if ($a < $b and $b < $c) {
            return true;
        }
    }

    /**
     * Даны три целых числа: A, B, C. Проверить истинность высказывания: «Число B находится между числами A и C».
     * @param  int  $a
     * @param $b
     * @param $c
     * @return bool
     */
    public function boolean7(int $a, $b, $c): bool
    {
        if ($a - $b < $b - $c) {
            return true;
        }
    }

    /**
     * Даны два целых числа: A, B. Проверить истинность высказывания: «Каждое из чисел A и B нечетное».
     * @param  int  $a
     * @param $b
     * @return bool
     */
    public function boolean8(int $a, $b): bool
    {
        if ($a % 2 != 0 and $b % 2 != 0) {
            return true;
        }
    }

    /**
     * Даны два целых числа: A, B. Проверить истинность высказывания: «Хотя бы одно из чисел A и B нечетное».
     * @param  int  $a
     * @param $b
     * @return bool
     */
    public function boolean9(int $a, $b): bool
    {
        if ($a % 2 != 0 or $b % 2 != 0) {
            return true;
        }
    }

    /**
     * Даны два целых числа: A, B. Проверить истинность высказывания: «Ровно одно из чисел A и B нечетное».
     * @param  int  $a
     * @param $b
     * @return bool
     */
    public function boolean10(int $a, $b): bool
    {
        if ($a % 2 != 0 or $b % 2 != 0) {
            return true;
        }
    }

    /**
     * Даны два целых числа: A, B. Проверить истинность высказывания: «Числа A и B имеют одинаковую четность».
     * @param  int  $a
     * @param $b
     * @return bool
     */
    public function boolean11(int $a, $b): bool
    {
        if ($a % $b == 0 and $b % $a == 0) {
            return true;
        }
    }

    /**
     * Даны три целых числа: A, B, C. Проверить истинность высказывания: «Каждое из чисел A, B, C положительное».
     * @param  int  $a
     * @param $b
     * @param $c
     * @return bool
     */
    public function boolean12(int $a, $b, $c): bool
    {
        if ($a > 0 and $b > 0 and $c > 0) {
            return true;
        }
    }

    /**
     * Даны три целых числа: A, B, C. Проверить истинность высказывания: «Хотя бы одно из чисел A, B, C положительное».
     * @param  int  $a
     * @param $b
     * @param $c
     * @return bool
     */
    public function boolean13(int $a, $b, $c): bool
    {
        if ($a > 0 or $b > 0 or $c > 0) {
            return true;
        }
    }

    /**
     * Даны три целых числа: A, B, C. Проверить истинность высказывания: «Ровно одно из чисел A, B, C положительное».
     * @param  int  $a
     * @param $b
     * @param $c
     * @return bool
     */
    public function boolean14(int $a, $b, $c): bool
    {
        if (($a > 0 and $b < 0 and $c < 0) or ($b > 0 and $a < 0 and $c < 0) or ($c > 0 and $a < 0 and $b < 0)) {
            return true;
        }
        // -1 * -2 * -3 = -6
        // -1 * 2 * 3 = -6
        // -1 * 2 * -3 = 6
    }

    /**
     * Даны три целых числа: A, B, C. Проверить истинность высказывания: «Ровно два из чисел A, B, C являются положительными».
     * @param  int  $a
     * @param $b
     * @param $c
     * @return bool
     */
    public function boolean15(int $a, $b, $c): bool
    {
        if (($a > 0 and $b > 0) or ($a > 0 and $c > 0) or ($b > 0 and $c > 0)) {
            return true;
        }
    }

    /**
     * Дано целое положительное число. Проверить истинность высказывания: «Данное число является четным двузначным».
     * @param  int  $a
     * @return bool
     */
    public function boolean16a(int $a): bool
    {
        if ($a % 2 == 0 and (int) ($a / 10) > 0) {
            return true;
        }
        // 196/100 = 1.96
        // 196/1000 = 0.196
        // 96/10 = 9.6
        // 961/10 = 96
        // (int)196 / 100 = 1.96 -> 1
        // (int)196/10 = 19.6 -> 19 % 10 -> 9
        // 196 % 10 = 6
    }

    /**
     * Дано целое положительное число. Проверить истинность высказывания: «Данное число является четным двузначным».
     * @param  int  $a
     * @return bool
     */
    public function boolean16(int $a): bool
    {
        if ($a % 2 == 0 and ((int) ($a / 10) > 0) and ((int) ($a / 10) < 10)) {
            return true;
        }
        // 196/100 = 1.96
        // 196/1000 = 0.196
        // 96/10 = 9.6
    }

    /**
     * Дано целое положительное число. Проверить истинность высказывания: «Данное число является нечетным трехзначным»
     * @param  int  $a
     * @return bool
     */
    public function boolean17(int $a): bool
    {
        if ($a % 2 != 0 and ((int) ($a / 100) > 0) and ((int) ($a / 100) > 10)) {
            return true;
        }
    }

    /**
     * Проверить истинность высказывания: «Среди трех данных целых чисел есть хотя бы одна пара совпадающих».
     * @param  int  $a
     * @param $b
     * @param $c
     * @return bool
     */
    public function boolean18(int $a, $b, $c): bool
    {
        if ($a == $b or $b == $c or $a == $c) {
            return true;
        }
    }

    /**
     * Проверить истинность высказывания: «Среди трех данных целых чисел есть хотя бы одна пара взаимно противоположных».
     * @param  int  $a
     * @param $b
     * @param $c
     * @return bool
     */
    public function boolean19(int $a, $b, $c): bool
    {
        if ($a == -$b or $b == -$c or $a == -$c) {
            return true;
        }
    }

    /**
     * Дано трехзначное число. Проверить истинность высказывания: «Все цифры данного числа различны».
     * @param $a
     * @return bool
     */
    public function boolean20($a)
    {
        $first = (int) ($a / 100);
        $second = (int) ($a / 10) % 10;
        $third = $a % 10;
        if ($first != $second and $second != $third and $first != $third) {
            return true;
        }
    }

    /**
     * Дано трехзначное число. Проверить истинность высказывания:
     * «Цифры данного числа образуют возрастающую последовательность».
     * @param $a
     * @return bool
     */
    public function boolean21($a)
    {
        $first = (int) ($a / 100);
        $second = (int) ($a / 10) % 10;
        $third = $a % 10;
        if ($first < $second and $second < $third) {
            return true;
        }
    }

    /**
     * Дано трехзначное число. Проверить истинность высказывания:
     * «Цифры данного числа образуют возрастающую или убывающую последовательность».
     * @param $a
     * @return bool
     */
    public function boolean22($a)
    {
        $first = (int) ($a / 100);
        $second = (int) ($a / 10) % 10;
        $third = $a % 10;
        if (($first < $second and $second < $third) or ($first > $second and $second > $third)) {
            return true;
        }
        //(int)1996 / 1000 = 1.996 -> 1
        // (int)1996 / 100 = 19.96 -> 19 % 10 = 9
        // (int)1996 / 10 = 199.6 - > 199 % 10 = 9
        // 1996 % 10 = 6
    }

    //Дано четырехзначное число. Проверить истинность высказывания: «Данное число читается одинаково слева направо и справа налево».

    /**
     * Дано четырехзначное число. Проверить истинность высказывания:
     * «Данное число читается одинаково слева направо и справа налево».
     * @param $a
     * @return bool
     */
    public function boolean23($a)
    {
        $first = (int) ($a / 1000);
        $second = (int) ($a / 100) % 10;
        $third = (int) ($a / 10) % 10;
        $fourth = $a % 10;
        echo $first, $second, $third, $fourth;
        dump($first);
        dump($second);
        if ($first == $fourth and $second == $third) {
            return true;
        }
        // if($first == $second) return true;
        // else return false;
    }

    /**
     * Даны числа A, B, C (число A не равно 0). Рассмотрев дискриминант
     * D = B2 – 4·A·C, проверить истинность высказывания: «Квадратное уравнение A·x2 + B·x + C = 0 имеет вещественные корни».
     * @param $a
     * @param $b
     * @param $c
     * @return bool
     */
    public function boolean24($a, $b, $c): bool
    {
        $discriminant = $b * $b - 4 * $a * $c;
        if ($discriminant >= 0) {
            return true;
        }
    }

    /**
     * Даны числа x, y. Проверить истинность высказывания: «Точка с координатами (x, y) лежит во второй координатной четверти».
     * @param  float  $x
     * @param $y
     * @return bool
     */
    public function boolean25(float $x, $y): bool
    {
        if ($x < 0 and $y > 0) {
            return true;
        }
    }

    /**
     * Даны числа x, y. Проверить истинность высказывания: «Точка с координатами (x, y) лежит
     * в четвертой координатной четверти».
     * @param  float  $x
     * @param $y
     * @return bool
     */
    public function boolean26(float $x, $y): bool
    {
        if ($x > 0 and $y < 0) {
            return true;
        }
    }

    /**
     * Даны числа x, y. Проверить истинность высказывания:
     * «Точка с координатами (x, y) лежит во второй или третьей координатной четверти».
     * @param  float  $x
     * @param $y
     * @return bool
     */
    public function boolean27(float $x, $y): bool
    {
        if (($x < 0 and $y > 0) or ($x < 0 and $y < 0)) {
            return true;
        }
    }

    /**
     * Даны числа x, y. Проверить истинность высказывания:
     * «Точка с координатами (x, y) лежит в первой или третьей координатной четверти».
     * @param  float  $x
     * @param $y
     * @return bool
     */
    public function boolean28(float $x, $y): bool
    {
        if (($x < 0 and $y > 0) or ($x < 0 and $y < 0)) {
            return true;
        }
    }

    /**
     * Дано целое число. Если оно является положительным, то прибавить к нему 1;
     * в противном случае не изменять его. Вывести полученное число.
     * @param  float  $x
     */
    public function if1(float &$x)
    {
        if ($x > 0) {
            $x++;
        }
        echo $x;
    }

    /**
     * Дано целое число. Если оно является положительным, то прибавить к нему 1;
     * в противном случае вычесть из него 2. Вывести полученное число.
     * @param  int  $x
     */
    public function if2(int &$x): void
    {
        if ($x > 0) {
            $x++;
        } else {
            $x = $x - 2;
        }
    }

    /**
     * Дано целое число. Если оно является положительным, то прибавить к нему 1; если отрицательным,
     * то вычесть из него 2; если нулевым, то заменить его на 10. Вывести полученное число.
     * @param  int  $x
     */
    public function if3(int &$x): void
    {
        if ($x > 0) {
            $x++;
        } elseif ($x < 0) {
            $x = $x - 2;
        } else {
            $x = 10;
        }
    }

    /**
     * Даны три целых числа. Найти количество положительных чисел в исходном наборе.
     * @param  int  $x
     * @param $y
     * @param $z
     * @return int[]
     */
    public function if4(int $x, $y, $z): array
    {
        if ($x > 0 and $y > 0 and $z > 0) {
            $countPositive = 3;
            $countNegative = 0;
        } elseif (($x > 0 and $y > 0) or ($y > 0 and $z > 0) or ($x > 0 and $z > 0)) {
            $countPositive = 2;
            $countNegative = 1;
        } elseif ($x > 0 or $y > 0 or $z > 0) {
            $countPositive = 1;
            $countNegative = 2;
        } else {
            $countPositive = 0;
            $countNegative = 3;
        }
        return [$countPositive, $countNegative];
    }

    /**
     * Даны два числа. Вывести большее из них.
     * @param  float  $x
     * @param $y
     * @return float
     */
    public function if6(float $x, $y): float
    {
        if ($x > $y) {
            return $x;
        } elseif ($x < $y) {
            return $y;
        } else {
            return 0;
        }
    }

    /**
     * @param  float  $x
     * @param $y
     * @return float
     */
    public function if6a(float $x, $y): float
    {
        // $result = $x > $y ?  $x :  $y;
        // return $result;
        return $x > $y ? $x : $y;
    }

    /**
     * Даны два числа. Вывести порядковый номер меньшего из них.
     * @param  float  $x
     * @param $y
     * @return int
     */
    public function if7(float $x, $y): int
    {
        return $x < $y ? 1 : 2;
    }

    /**
     * Даны два числа. Вывести вначале большее, а затем меньшее из них.
     * @param  float  $x
     * @param $y
     * @return array
     */
    public function if8(float $x, $y): array
    {
        return $x < $y ? [$y, $x] : [$x, $y];
    }

    /**
     * Даны две переменные целого типа: A и B. Если их значения не равны, то
     * присвоить каждой переменной сумму этих значений, а если равны, то присвоить
     * переменным нулевые значения. Вывести новые значения переменных A и B.
     * @param  int  $x
     * @param $y
     * @return int[]
     */
    public function if10(int $x, $y): array
    {
        if ($x != $y) {
            $x += $y;
            $y = $x;
        } else {
            $x = 0;
            $y = 0;
        }
        return [$x, $y];
    }

    /**
     * Даны две переменные целого типа: A и B. Если их значения не равны, то
     * присвоить каждой переменной большее из этих значений, а если равны, то
     * присвоить переменным нулевые значения. Вывести новые значения переменных A и B.
     * @param  int  $x
     * @param $y
     * @return array
     */
    public function if11(int $x, $y): array
    {
        if ($x != $y) {
            if ($x > $y) {
                $y = $x;
            } else {
                $x = $y;
            }
        } else {
            $x = 0;
            $y = 0;
        }
        return [$x, $y];
    }

    /**
     * Даны три числа. Найти наименьшее из них.
     * @param  float  $x
     * @param $y
     * @param $z
     * @return float
     */
    public function if12(float $x, $y, $z): float
    {
        if ($x < $y and $x < $z) {
            return $x;
        } elseif ($y < $x and $y < $z) {
            return $y;
        } elseif ($z < $x and $z < $y) {
            return $z;
        } else {
            return 0;
        }
    }

    /**
     * Даны три числа. Найти среднее из них (то есть число, расположенное между наименьшим и наибольшим).
     * @param  float  $x
     * @param  float  $y
     * @param  float  $z
     * @return float
     */
    public function if13(float $x, float $y, float $z): float
    {
        if ($x < $y and $x < $z and $y < $z) {
            return $y;
        } elseif ($x < $y and $x < $z and $z < $y) {
            return $z;
        } elseif ($y < $x and $y < $z and $x < $z) {
            return $x;
        } else {
            return 0;
        }
    }

    /**
     * Даны три числа. Вывести вначале наименьшее, а затем наибольшее из данных чисел.
     * @param  float  $x
     * @param $y
     * @param $z
     * @return array
     */
    public function if14(float $x, $y, $z): array
    {
        $array = [$x, $y, $z];
        sort($array);
        return [$array[0], $array[2]];
    }

    /**
     * Даны три числа. Найти сумму двух наибольших из них.
     * @param  float  $x
     * @param $y
     * @param $z
     * @return float
     */
    public function if15(float $x, $y, $z): float
    {
        $array = [$x, $y, $z];
        sort($array);
        return $array[1] + $array[2];
    }

    /**
     * Даны три переменные вещественного типа: A, B, C. Если их значения упорядочены по возрастанию,
     * то удвоить их; в противном случае заменить значение каждой переменной на противоположное.
     * Вывести новые значения переменных A, B, C.
     * @param  float  $x
     * @param $y
     * @param $z
     * @return float[]|int[]
     */
    public function if16(float $x, $y, $z)
    {
        $in = [$x, $y, $z];
        $out = sort($in);
        if ($in == $out) {
            return [2 * $x, 2 * $y, 2 * $z];
        } else {
            return [-1 * $x, -1 * $y, -1 * $z];
        }
    }

    /**
     * Даны три переменные вещественного типа: A, B, C. Если их значения упорядочены по возрастанию или убыванию,
     * то удвоить их; в противном случае заменить значение каждой переменной на противоположное.
     * Вывести новые значения переменных A, B, C.
     * @param  float  $x
     * @param $y
     * @param $z
     * @return float[]|int[]
     */
    public function if17(float $x, $y, $z)
    {
        $in = [$x, $y, $z];
        $out = sort($in);
        $rout = rsort($in);
        if ($in == $out or $in == $rout) {
            return [2 * $x, 2 * $y, 2 * $z];
        } else {
            return [-1 * $x, -1 * $y, -1 * $z];
        }
    }

    /**
     * @param  float  $x
     * @param $y
     * @param $z
     * @return float[]|int[]
     */
    public function if17a(float $x, $y, $z): array
    {
        $in = [$x, $y, $z];
        $out = sort($in);
        $rout = rsort($in);
        return ($in == $out or $in == $rout) ? [2 * $x, 2 * $y, 2 * $z] : [-1 * $x, -1 * $y, -1 * $z];
    }

    /**
     * Даны три целых числа, одно из которых отлично от двух других, равных
     * между собой. Определить порядковый номер числа, отличного от остальных.
     * @param $x
     * @param $y
     * @param $z
     * @return int
     */
    public function if18($x, $y, $z): int
    {
        if ($x == $y and $x != $z) {
            return 3;
        } elseif ($x == $z and $x != $y) {
            return 2;
        } elseif ($y == $z and $y != $x) {
            return 1;
        } else {
            return 0;
        }
    }

    /**
     * Даны четыре целых числа, одно из которых отлично от трех других, равных между собой.
     * Определить порядковый номер числа, отличного от остальных.
     * @param $a
     * @param $b
     * @param $c
     * @param $d
     * @return int
     */
    public function if19($a, $b, $c, $d)
    {
        if ($a == $b and $b == $c and $c != $d) {
            return 4;
        } elseif ($d == $b and $b == $c and $c != $a) {
            return 1;
        } elseif ($c == $b and $b == $a and $a != $c) {
            return 3;
        } elseif ($a == $d and $c == $d and $d != $b) {
            return 2;
        } else {
            return 0;
        }
    }

    /**
     * На числовой оси расположены три точки: A, B, C. Определить, какая из
     * двух последних точек (B или C) расположена ближе к A, и вывести эту точку и ее расстояние от точки A.
     * @param $a
     * @param $b
     * @param $c
     * @return array|int[]
     */
    public function if20($a, $b, $c): array
    {
        $length1 = abs($a - $c);
        $length2 = abs($a - $b);
        if ($length1 < $length2) {
            return [$c, $length1];
        } elseif ($length1 > $length2) {
            return [$b, $length2];
        } else {
            return [0];
        }
    }

    /**
     * На числовой оси расположены три точки: A, B, C. Определить, какая из
     * двух последних точек (B или C) расположена ближе к A, и вывести эту точку и ее расстояние от точки A.
     * @param $a
     * @param $b
     * @param $c
     * @return array|int
     */
    public function if20a($a, $b, $c)
    {
        if ($b == $c) {
            return 0;
        }
        $length1 = abs($a - $c);
        $length2 = abs($a - $b);
        return $length1 < $length2 ? [$c, $length1] : [$b, $length2];
    }

    /**
     * Даны целочисленные координаты точки на плоскости. Если точка совпадает с началом координат, то вывести 0.
     * Если точка не совпадает с началомкоординат, но лежит на оси OX или OY, то вывести соответственно 1 или 2.
     * Если точка не лежит на координатных осях, то вывести 3.
     * @param  float  $x
     * @param  float  $y
     * @return int
     */
    public function if21(float $x, float $y)
    {
        if ($x == 0 and $y == 0) {
            return 0;
        } elseif ($y == 0) {
            return 1;
        } elseif ($x == 0) {
            return 2;
        } else {
            return 3;
        }
    }

    /**
     * Даны координаты точки, не лежащей на координатных осях OX и OY.
     * Определить номер координатной четверти, в которой находится данная точка.
     * @param $x
     * @param $y
     * @return int
     */
    public function if22($x, $y)
    {
        if ($x > 0 and $y > 0) {
            return 1;
        } elseif ($x < 0 and $y > 0) {
            return 2;
        } elseif ($x < 0 and $y < 0) {
            return 3;
        } elseif ($x > 0 and $y < 0) {
            return 4;
        } else {
            return 0;
        }
    }

    /**
     * Для данного вещественного x найти значение следующей функции f, принимающей вещественные значения:
     * 2·sin(x), если x > 0
     * 6 – x, если x ≤ 0.
     * @param  float  $x
     * @return float|int
     */
    public function if24(float $x)
    {
        if ($x > 0) {
            $y = 2 * sin($x);
        } else {
            $y = 6 - $x;
        }
        return $y;
    }

    /**
     * @param  float  $x
     * @return float
     */
    public function if24a(float $x): float
    {
        return $x > 0 ? 2 * sin($x) : 6 - $x;
    }

    /**
     * Для данного целого x найти значение следующей функции f, принимающей значения целого типа:
     * 2·x, если x < –2 или x > 2
     * –3·x, в противном случае.
     * @param  int  $x
     * @return float|int
     */
    public function if25(int $x)
    {
        if ($x < -2 and $x > 2) {
            $y = 2 * $x;
        } else {
            $y = -3 * $x;
        }
        return $y;
    }

    /**
     * @param $x
     * @return float
     */
    public function if25a($x): float
    {
        return ($x < -2 and $x > 2) ? 2 * $x : -3 * $x;
    }

    /**
     * Для данного вещественного x найти значение следующей функции f, принимающей вещественные значения:
     * –x, если x ≤ 0,
     * x2, если 0 < x < 2,
     * 4, если x ≥ 2.
     * @param  float  $x
     * @return float|int
     */
    public function if26(float $x)
    {
        if ($x <= 0) {
            $y = -$x;
        } elseif ($x > 0 and $x < 2) {
            $y = $x * $x;
        } else {
            $y = 4;
        }
        return $y;
    }

    /**
     * Для данного вещественного x найти значение следующей функции f,
     * принимающей значения целого типа:
     * 0, если x < 0,
     * 1, если x принадлежит [0, 1), [2, 3), …,
     * –1, если x принадлежит [1, 2), [3, 4), … .
     * @param $x
     * @return int
     */
    public function if27($x)
    {
        if ($x < 0) {
            return 0;
        }
        return ($x >= 0 and $x < 1) ? 1 : -1;
    }

    /**
     * Дано целое число. Вывести его строку-описание вида «отрицательное четное число», «нулевое число»,
     * «положительное нечетное число» и т. д.
     * @param  int  $x
     * @return string
     */
    public function if29(int $x): string
    {
        /*if ($x == 0) {
        return 'нулевое число 0.';
        }
        return ($x < 0 and $x % 2 == 0) ? 'отрицательное четное число' : 'положительное нечетное число';*/
        if ($x == 0) {
            return 'нулевое число 0.';
        } elseif ($x < 0 and $x % 2 == 0) {
            return 'отрицательное четное число';
        } elseif ($x < 0 and $x % 2 != 0) {
            return 'отрицательное нечетное число';
        } elseif ($x > 0 and $x % 2 != 0) {
            return 'положительное нечетное число';
        } elseif ($x > 0 and $x % 2 == 0) {
            return 'положительное четное число';
        } else {
            return 'default';
        }
    }

    /**
     * Дано целое число в диапазоне 1–7. Вывести строку — название дня недели, соответствующее данному числу
     * (1 — «понедельник», 2 — «вторник» и т. д.).
     * @param  int  $x
     */
    public function case1(int $x): void
    {
        switch ($x) {
            case 1:
                echo 'Monday';
                break;
            case 2:
                echo 'Tuesday';
                break;
            case 3:
                echo 'Wednesday';
                break;
            case 4:
                echo 'Thursday';
                break;
            case 5:
                echo 'Friday';
                break;
            case 6:
                echo 'Saturday';
                break;
            case 7:
                echo 'Sunday';
                break;
            default:
                echo 'default';
        }
    }

    /**
     * Дано целое число K. Вывести строку-описание оценки, соответствующей числу K (1 — «плохо», 2 — «неудовлетворительно»,
     * 3 — «удовлетворительно», 4 — «хорошо», 5 — «отлично»). Если K не лежит в диапазоне 1–5, то вывести строку «ошибка».
     * @param $k
     */
    public function case2($k)
    {
        switch ($k) {
            case 1:
                echo 'E';
                break;
            case 2:
                echo 'D';
                break;
            case 3:
                echo 'C';
                break;
            case 4:
                echo 'B';
                break;
            case 5:
                echo 'A';
                break;
            default:
                echo 'default.';
        }
    }

    /**
     * Дан номер месяца — целое число в диапазоне 1–12 (1 — январь, 2 — февраль и т. д.).
     * Вывести название соответствующего времени года («зима», «весна», «лето», «осень»).
     * @param $month
     */
    public function case3($month)
    {
        switch ($month) {
            case 1:
                echo 'winter';
                break;
            case 2:
                echo 'winter';
                break;
            case 3:
                echo 'spring';
                break;
            case 4:
                echo 'spring';
                break;
            case 5:
                echo 'spring';
                break;
            case 6:
                echo 'summer';
                break;
            case 7:
                echo 'summer';
                break;
            case 8:
                echo 'summer';
                break;
            case 9:
                echo 'autumn';
                break;
            case 10:
                echo 'autumn';
                break;
            case 11:
                echo 'autumn';
                break;
            case 12:
                echo 'winter';
                break;
            default:
                echo 'default.';
        }
    }

    /**
     * Дан номер месяца — целое число в диапазоне 1–12 (1 — январь, 2 — февраль и т. д.).
     * Определить количество дней в этом месяце для невисокосного года.
     * @param $month
     */
    public function case4($month)
    {
        switch ($month) {
            case 1:
                echo '31';
                break;
            case 2:
                echo '28';
                break;
            case 3:
                echo 31;
                break;
            case 4:
                echo 30;
                break;
            case 5:
                echo 31;
                break;
            case 6:
                echo 30;
                break;
            case 7:
                echo 31;
                break;
            case 8:
                echo 31;
                break;
            case 9:
                echo 30;
                break;
            case 10:
                echo 31;
                break;
            case 11:
                echo 30;
                break;
            case 12:
                echo 31;
                break;
            default:
                echo 'default.';
        }
    }

    /**
     * Арифметические действия над числами пронумерованы следующим образом: 1 — сложение, 2 — вычитание, 3 — умножение,
     * 4 — деление. Дан номер действия N (целое число в диапазоне 1–4) и вещественные числа A и B (В не равно 0).
     * Выполнить над числами указанное действие и вывести результат.
     * @param  int  $n
     * @param  float  $a
     * @param  float  $b
     * @return float
     */
    public function case5(int $n, float $a, float $b): float
    {
        switch ($n) {
            case 1:
                $result = $a + $b;
                break;
            case 2:
                $result = $a - $b;
                break;
            case 3:
                $result = $a * $b;
                break;
            case 4:
                $result = $a / $b;
                ;
                break;
            default:
                $result = 'default.';
        }
        return $result;
    }

    /**
     * Мастям игральных карт присвоены порядковые номера: 1 — пики, 2 — трефы, 3 — бубны, 4 — червы. Достоинству карт,
     * старших десятки, присвоены номера: 11 — валет, 12 — дама, 13 — король, 14 — туз.
     * Даны два целых числа: N — достоинство (6 ≤ N ≤ 14) и M — масть карты (1 ≤ M ≤ 4).
     * Вывести название соответствующей карты вида «шестерка бубен», «дама червей», «туз треф» и т. п.
     * @param  int  $n
     * @param  int  $m
     * @return string
     */
    public function case15(int $n, int $m): string
    {
        switch ($n) {
            case 11:
                $result = 'Jack';
                break;
            case 12:
                $result = 'Queen';
                break;
            case 13:
                $result = 'King';
                break;
            case 14:
                $result = 'Ace';
                break;
            default:
                $result = 'default.';
        }
        switch ($m) {
            case 1:
                $result .= ' Spades';
                break;
            case 2:
                $result .= ' Clubs';
                break;
            case 3:
                $result .= ' Diamonds';
                break;
            case 4:
                $result .= ' Hearts';
                break;
            default:
                $result = 'default.';
        }
        return $result;
    }

    /* доп блок
     * Дано целое число N и набор из N целых чисел. Найти общее количество экстремальных 
     * (то есть минимальных и максимальных) элементов из данного набора.
     */
    public function minmax20()
    {
        // $arr = [1];
        // for ($i = 1; $i < 10; $i++) {
        //     $num = rand(0, 100);
        //     ($arr[$i - 1] < $num or $num == 100) ? $arr[] = $num : $i--;
        // }
        // dump($arr);

        // створюємо масив з випадковими числами
        // $array = array();
        // for ($i = 0; $i < 10; $i++) {
        //     $array[] = rand(1, 100);
        // }

        // // знаходимо максимальне значення у масиві
        // $max_value = max($array);

        // // знаходимо кількість максимальних елементів у масиві
        // $count = 0;
        // foreach ($array as $value) {
        //     if ($value == $max_value) {
        //         $count++;
        //     }
        // }

        // // виводимо результат
        // echo "Масив: " . implode(", ", $array) . "<br>";
        // echo "Максимальне значення: " . $max_value . "<br>";
        // echo "Кількість максимальних елементів: " . $count . "<br>";
        // створюємо масив з випадковими числами

        $array = array();
        for ($i = 0; $i < 10; $i++) {
            $array[] = rand(1, 10);
        }

        // знаходимо мінімальне та максимальне значення у масиві
        $min_value = min($array);
        $max_value = max($array);

        // знаходимо кількість мінімальних та максимальних елементів у масиві
        $count_min = 0;
        $count_max = 0;
        foreach ($array as $value) {
            if ($value == $min_value) {
                $count_min++;
            }
            if ($value == $max_value) {
                $count_max++;
            }
        }

        // виводимо результат
        echo "Масив: " . implode(", ", $array) . "<br>";
        echo "Мінімальне значення: " . $min_value . "<br>";
        echo "Кількість мінімальних елементів: " . $count_min . "<br>";
        echo "Максимальне значення: " . $max_value . "<br>";
        echo "Кількість максимальних елементів: " . $count_max . "<br>";
    }
}