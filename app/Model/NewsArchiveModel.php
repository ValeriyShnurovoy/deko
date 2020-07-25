<?php

namespace App\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class NewsArchiveModel
 * @package App\Model
 */
class NewsArchiveModel
{
    private $table = 'news_archive';

    /**
     * @param $id
     * @return array|null
     */
    public function getData($id):?array
    {
        return DB::table($this->table)->find($id);
    }

    /**
     * @param $data
     * @return bool
     */
    public function setData($data):bool
    {
        return DB::table($this->table)->insert($data);
    }
}