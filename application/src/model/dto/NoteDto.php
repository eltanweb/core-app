<?php

namespace Finance\model\dto;
use Finance\Dto;


/**
 * Class NoteDto
 * @package Finance\model
 */
class NoteDto extends BaseDto
{

    /**
     * @var номер записи
     */
    private $rowId;

    /**
     * @var откуда пришла идея
     */
    private $idea;

    /***
     * @var обозначение инструмента
     */
    private $ticker;

    /**
     * @var объем приобритения
     */
    private $volumes;

    /***
     * @var позиция в лонг
     */
    private $long;

    /***
     * @var позиция в шорт
     */
    private $short;

    /**
     * @var дата ордера
     */
    private $dateStart;

    /**
     * @var стоимость инструмента
     */
    private $costStart;

    /**
     * @var Исполнена по цене
     */
    private $costBid;

    /**
     * @var Сумма заявки
     */
    private $sum;

    /**
     * @var Комиссия оплаченая с заявки
     */
    private $comission;

    /**
     * @var проскальзывание с заявки
     */
    private $darkComission;

    /**
     * @var дата завершения заявки
     */
    private $dateEnd;

    /**
     * @var цена инструмента
     */
    private $costEnd;

    /**
     * @var общая сумма по инструменту
     */
    private $sumEnd;

    /***
     * @var Прибыль / убыток с заявки.
     */
    private $profit;

    /***
     * @var графики входа/выхода
     */
    private $files;
}