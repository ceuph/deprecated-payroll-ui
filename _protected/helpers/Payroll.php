<?php


namespace app\helpers;

use DateTimeInterface;
use DateTime;
use Exception;
use yii\db\Query;

class Payroll
{
    const DATE_FORMAT = 'Y-m-d H:i:s';

    /**
     * @param $date string
     * @return DateTime|DateTimeInterface
     * @throws Exception
     */
    public static function strToDate($date)
    {
        return $date instanceof DateTimeInterface ? $date : new DateTime($date);
    }

    /**
     * @param $date string
     * @return string
     * @throws Exception
     */
    public static function dateFormat($date)
    {
        return self::strToDate($date)->format(self::DATE_FORMAT);
    }
    /**
     * @param $tableName string table to query
     * @param $dateFrom DateTimeInterface|string starting date of pay period
     * @param $dateTo DateTimeInterface|string end date of pay period
     * @return Query
     * @throws Exception
     */
    public static function leaveQuery($tableName, $dateFrom, $dateTo)
    {
        return (new Query())
            ->from($tableName)
            ->where('(date_from >= :start_from AND date_from <= :start_to) OR
            (date_to >= :end_from AND date_to <= :end_to) OR
            (date_to < :between_from AND date_to > :between_to)', [
                ':start_from' => self::dateFormat($dateFrom),
                ':start_to' => self::dateFormat($dateTo),
                ':end_from' => self::dateFormat($dateFrom),
                ':end_to' => self::dateFormat($dateTo),
                ':between_from' => self::dateFormat($dateFrom),
                ':between_to' => self::dateFormat($dateTo),
            ])
        ;
    }
    /**
     * @param $processDate|DateTimeInterface string start date of pay period
     * @param $userDate|DateTimeInterface string start date from employee leave, absence, etc.
     * @return DateTimeInterface
     * @throws Exception
     */
    public static function dateFrom($processDate, $userDate)
    {
        $processDate = self::strToDate($processDate);
        $userDate = self::strToDate($userDate);
        return $processDate > $userDate ? $processDate : $userDate;
    }

    /**
     * @param $processDate string|DateTimeInterface end date of pay period
     * @param $userDate string|DateTimeInterface end date from employee leave, absence, etc.
     * @return DateTimeInterface
     * @throws Exception
     */
    public static function dateTo($processDate, $userDate)
    {
        $processDate = self::strToDate($processDate);
        $userDate = self::strToDate($userDate);
        return $processDate < $userDate ? $processDate : $userDate;
    }
}