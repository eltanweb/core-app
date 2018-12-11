<?php

namespace Finance\model\dto;
use Finance\Dto;

/**
 * Class UserDto
 * @package Finance\model\dto
 */
class UserDto extends BaseDto
{
    /**
     * @var индификатор пользователя
     */
    private $rowId;

    /**
     * @var
     */
    private $email;

    /**
     * @var
     */
    private $userName;

    /**
     * @var
     */
    private $password;

    /**
     * @var
     */
    private $role;

}