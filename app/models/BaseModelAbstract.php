<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Description of App
 *
 * @author victor
 */
abstract class BaseModelAbstract extends Eloquent
{
    const POST_TYPE = "";
    const ON = 1;
    const OFF = 0;
    const PUBLISHED = 2;
    const ARCHIVED = 3;
    const DELETED = 4;
    const RECENT_SIZE = 5;
        
    const UPDATED_AT = "last_modified";
    const CREATED_AT = "date_created";
    const USER = 1;
    const ADMIN = 2;
    const UPLOAD_DIR = "uploads/logo/";
    
    protected $page = 1;
    protected $limit = 100;
    protected $network = [0];
    
    protected $addNewQuery = true;
    
    public function getPage()
    {
        return $this->page;
    }

    public function getLimit()
    {
        return $this->limit;
    }

    public function setPage($page)
    {
        $this->page = $page;
        return $this;
    }

    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }
}
