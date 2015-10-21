<?php
namespace Api\Models;

class BaseModel extends Api\Model
{
    public function __construct()
    {
        echo __METHOD__ . "\n";

        parent::__construct();
    }
}