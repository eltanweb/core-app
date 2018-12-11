<?php

namespace Finance\model\dto;
use Finance\Dto;

/**
 * Class EmitentDto
 * @package Finance\model\dto
 */
class EmitentDto extends BaseDto
{

    /**
     * @var номер записи
     */
    private $rowId;

    /**
     * @var
     */
    private $name;

    /**
     * @var
     */
    private $cost;

    /**
     * @var
     */
    private $trand;

    /**
     * @var
     */
    private $open;

    /**
     * @var
     */
    private $close;

    /**
     * @var
     */
    private $high;

    /**
     * @var
     */
    private $low;

    /**
     * @var
     */
    private $updatetime;

    /**
     * @var
     */
    private $volumes;

}