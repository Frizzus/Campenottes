<?php

class Date{
    public int $year;
    public int $month;
    public int $day;

    /**
     * construct of the Date class, check if the entered date is a valid date
     *
     * @param integer $year a year is valid between -9999 and 9999
     * @param integer $month a month is valid between 1 and 12
     * @param integer $day a day is valid between 1 and 28/29/30/31 depending on the month and if the year is bissextile
     */
    public function __construct(int $year, int $month, int $day) {

        if (!Date::isValidDay($day, $month, $year) || !Date::isValidMonth($month) || !Date::isValidYear($year) ) {
            throw new ValueError("One of the value makes no sens check if all your value are correct and if you are trying to input a bissextile year");
        }
        else {
            $this->year = $year;
            $this->month = $month;
            $this->day = $day;
        }
    }

    /**
     * Check if the month is a valid month, a valid month is a month between 1 and 12
     *
     * @param integer $month
     * @return boolean
     */
    public static function isValidMonth(int $month):bool{

    }
    
    /**
     * Check if the day is a valid day, a day is valid between 1 and 28/29/30/31 depending on the month and if the year is bissextile
     *
     * @param integer $day 
     * @param integer $month
     * @param integer $year
     * @return boolean
     */
    public static function isValidDay(int $day, int $month, int $year):bool{

    }

    /**
     * Check if the year is a valid year, a year is valid between -9999 and 9999
     *
     * @param integer $year
     * @return boolean
     */
    public static function isValidYear(int $year):bool{
        
    }
}