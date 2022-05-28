<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    /**
     * @param string $id
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
        $integer11numbers = $this->integer11numbers(121);
//         dump($integer11numbers);
        $booleanResult = $this->boolean1(0);
        dump($booleanResult);
        return view('welcome', ['integer11numbers' => $integer11numbers]);
    }

    /**
     * Дано двузначное число. Вывести вначале его левую цифру (десятки), а затем — его правую цифру (единицы).
     * Для нахождения десятков использовать операцию деления нацело, для нахождения единиц — операцию взятия остатка от деления.
     * @param int $number
     * @return array|int[]
     */
    public function integer6(int $number): array
    {
        $left = (int)($number / 10);
        $right = $number % 10;
        return [$left, $right];
    }

    /**
     * Дано двузначное число. Найти сумму и произведение его цифр.
     * @param int $number
     * @return array
     */
    public function integer7(int $number): array
    {
        $left = (int)($number / 10);
        $right = $number % 10;
        $sum = $left + $right;
        $product = $left * $right;
        return [$sum, $product];
    }

    /**
     * Дано двузначное число. Вывести число, полученное при перестановке цифр исходного числа.
     * @param int $number
     * @return int
     */
    public function integer8(int $number): int
    {
        $left = (int)($number / 10);
        $right = $number % 10;
        return (int)($right . $left);
    }

    /**
     * Дано трехзначное число. Используя одну операцию деления нацело, вывести первую цифру данного числа (сотни).
     * @param int $number
     * @return int
     */
    public function integer9(int $number): int
    {
        $first = (int)$number / 100;
        return $first;
    }

//        $first_number = integer9(103);
//        echo 'First number 103 is: '.$first_number.'<br>';
    /**
     * Дано трехзначное число. Вывести вначале его последнюю цифру (единицы), а затем — его среднюю цифру (десятки).
     * @param int $number
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
     * @param int $number
     * @return array|int[]
     */
    public function integer11numbers(int $number): array
    {
        $first = (int )($number / 100);
        $second = (int)($number / 10) % 10;
        $third = $number % 10;
        return [$first, $second, $third];
    }


    /**
     * Дано трехзначное число. Найти сумму и произведение его цифр.
     * @param array $number
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
     * @param array $number
     * @return int
     */
    public function integer12(array $number): int
    {
//        $result = (int) ($number[2].$number[1].$number[0]);
        return (int)($number[2] . $number[1] . $number[0]);
    }

    /**
     * Дано трехзначное число. В нем зачеркнули первую слева цифру и приписали ее справа. Вывести полученное число.
     * @param array $number
     * @return int
     */
    public function integer13(array $number): int
    {
        return (int)($number[1] . $number[2] . $number[0]);
    }

    /**
     * Дано трехзначное число. В нем зачеркнули первую справа цифру приписали ее слева. Вывести полученное число.
     * @param array $number
     * @return int
     */
    public function integer14(array $number): int
    {
        return (int)($number[2] . $number[1] . $number[0]);
    }

    /**
     * Дано трехзначное число. Вывести число, полученное при перестановке цифр сотен и десятков исходного числа
     * (например, 123 перейдет в 213).
     * @param array $number
     * @return int
     */
    public function integer15(array $number): int
    {
        return (int)($number[1] . $number[0] . $number[2]);
    }

    /**
     * Дано трехзначное число. Вывести число, полученное при перестановке цифр десятков и единиц исходного числа
     * (например, 123 перейдет в 132).
     * @param array $number
     * @return int
     */
    public function integer16(array $number): int
    {
        return (int)($number[0] . $number[2] . $number[1]);
    }

    /**
     * Дано целое число, большее 999. Используя одну операцию деления нацело и одну операцию взятия остатка от
     * деления, найти цифру, соответствующую разряду сотен в записи этого числа.
     * @param int $number
     * @return int
     */
    public function integer17(int $number): int
    {
        return (int)($number / 100) % 10;
    }

    /**
     * Дано целое число, большее 999. Используя одну операцию деления нацело и одну операцию взятия остатка от
     * деления, найти цифру, соответствующую разряду тысяч в записи этого числа.
     * @param int $number
     * @return int
     */
    public function integer18(int $number): int
    {
        return (int)($number / 1000);
    }

    /**
     * С начала суток прошло N секунд (N — целое). Найти количество полных минут, прошедших с начала суток.
     * @param int $seconds
     * @return int
     */
    public function integer19(int $seconds): int
    {
        return (int)($seconds / 60);
    }

    /**
     * С начала суток прошло N секунд (N — целое). Найти количество полных часов, прошедших с начала суток.
     * @param int $seconds
     * @return int
     */
    public function integer20(int $seconds): int
    {
        $hours = (int)($seconds / 3600);
    }

    /**
     * С начала суток прошло N секунд (N — целое). Найти количество секунд, прошедших с начала последней минуты.
     * @param int $seconds
     * @return int
     */
    public function integer21(int $seconds): int
    {
        $minutes = (int)($seconds / 60);
        return $seconds - $minutes;
    }

    /**
     * С начала суток прошло N секунд (N — целое). Найти количество секунд, прошедших с начала последнего часа.
     * @param int $seconds
     * @return int
     */
    public function integer22(int $seconds): int
    {
        $hours = (int)($seconds / 3600);
        return $seconds - $hours;
    }

    /**
     * С начала суток прошло N секунд (N — целое). Найти количество полных минут, прошедших с начала последнего часа.
     * @param int $seconds
     * @return int
     */
    public function integer23(int $seconds): int
    {
        $hours = (int)($seconds / 3600);
        return (int)(($seconds - $hours) / 60);
    }

    /**
     * Дано целое число а, проверить является ли оно положительным
     * @param $a
     * @return bool
     */
    public function boolean1($a): bool
    {
        if ($a > 0) return true;
        else return false;
    }

    /**
     * @param $a
     * @return bool
     */
    public function boolean2($a)
    {
        if ($a % 2 != 0) return true;
    }

    /**
     * @param $a
     * @return bool
     */
    public function boolean3($a)
    {
        if ($a % 2 == 0) return true;
    }

    /**
     * @param $a
     * @param $b
     * @return bool
     */
    public function boolean4($a, $b)
    {
        if ($a > 2 and $b <= 3) return true;
    }

    /**
     * @param $a
     * @param $b
     * @return bool
     */
    public function boolean5($a, $b): bool
    {
        if ($a >= 0 and $b < -2) return true;
    }

    /**
     * @param int $a
     * @param $b
     * @param $c
     * @return bool
     */
    public function boolean6(int $a, $b, $c): bool
    {
        if ($a < $b and $b < $c) return true;
    }

    /**
     * @param int $a
     * @param $b
     * @param $c
     * @return bool
     */
    public function boolean7(int $a, $b, $c): bool
    {
        if ($a - $b < $b - $c) return true;
    }

    /**
     * @param int $a
     * @param $b
     * @return bool
     */
    public function boolean8(int $a, $b): bool
    {
        if ($a % 2 != 0 and $b % 2 != 0) return true;
    }

    /**
     * @param int $a
     * @param $b
     * @return bool
     */
    public function boolean9(int $a, $b): bool
    {
        if ($a % 2 != 0 or $b % 2 != 0) return true;
    }

    /**
     * @param int $a
     * @param $b
     * @return bool
     */
    public function boolean10(int $a, $b): bool
    {
        if ($a % 2 != 0 or $b % 2 != 0) return true;
    }

    /**
     * @param int $a
     * @param $b
     * @return bool
     */
    public function boolean11(int $a, $b): bool
    {
        if ($a % $b == 0 and $b % $a == 0) return true;
    }

    /**
     * @param int $a
     * @param $b
     * @param $c
     * @return bool
     */
    public function boolean12(int $a, $b, $c): bool
    {
        if ($a > 0 and $b > 0 and $c > 0) return true;
    }

    /**
     * @param int $a
     * @param $b
     * @param $c
     * @return bool
     */
    public function boolean13(int $a, $b, $c): bool
    {
        if ($a > 0 or $b > 0 or $c > 0) return true;
    }

    /**
     * @param int $a
     * @param $b
     * @param $c
     * @return bool
     */
    public function boolean14(int $a, $b, $c): bool
    {
        if (($a > 0 and $b < 0 and $c < 0) or ($b > 0 and $a < 0 and $c < 0) or ($c > 0 and $a < 0 and $b < 0)) return true;
        // -1 * -2 * -3 = -6
        // -1 * 2 * 3 = -6
        // -1 * 2 * -3 = 6
    }

    /**
     * @param int $a
     * @param $b
     * @param $c
     * @return bool
     */
    public function boolean15(int $a, $b, $c): bool
    {
        if (($a > 0 and $b > 0) or ($a > 0 and $c > 0) or ($b > 0 and $c > 0)) return true;
    }

    /**
     * @param int $a
     * @return bool
     */
    public function boolean16a(int $a): bool
    {
        if ($a % 2 == 0 and (int)($a / 10) > 0) return true;
        // 196/100 = 1.96
        // 196/1000 = 0.196
        // 96/10 = 9.6
        // 961/10 = 96
        // (int)196 / 100 = 1.96 -> 1
        // (int)196/10 = 19.6 -> 19 % 10 -> 9
        // 196 % 10 = 6

        //(int)1996 / 1000 = 1.996 -> 1
        // 1996 % 10 = 6
        // (int)1996 / 100 = 19.96 -> 19 % 10 = 9
        // (int)1996 / 10 = 199.6 - > 199 % 10 = 9
    }

    /**
     * @param int $a
     * @return bool
     */
    public function boolean16(int $a): bool
    {
        if ($a % 2 == 0 and ((int)($a / 10) > 0) and ((int)($a / 10) < 10)) return true;
        // 196/100 = 1.96
        // 196/1000 = 0.196
        // 96/10 = 9.6
    }

    /**
     * @param int $a
     * @return bool
     */
    public function boolean17(int $a): bool
    {
        if ($a % 2 != 0 and ((int)($a / 100) > 0) and ((int)($a / 100) > 10)) return true;
    }


    /**
     *
     */
    public function showAllBooks()
    {

    }

    /**
     *
     */
    public function addNewBook()
    {

    }

    /**
     *
     */
    public function updateBook()
    {

    }

    /**
     *
     */
    public function showBookInfo()
    {

    }
}
