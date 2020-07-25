<?php

namespace App\Model;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use stdClass;

/**
 * Class NewsModel
 * @package App\Model
 */
class NewsModel
{

    private $table = 'news';

    /**
     * @param $id
     * @return mixed|static
     */
    public function getData($id)
    {
        return DB::table($this->table)->find($id);
    }

    /**
     * @param int $rowNumber
     * @param int $offset
     * @param bool $all
     * @return Collection
     */
    public function getAllData($all = false, $rowNumber = 15, $offset = 0):Collection
    {
        $select = DB::table($this->table);
        if (!$all) {
            $select->limit($rowNumber)->offset($offset*$rowNumber);
        }
        return $select->get();
    }

    /**
     * @param $data
     * @return bool
     */
    public function create($data):bool
    {
        return DB::table($this->table)->insert($data);
    }

    /**
     * @param array $data
     * @return bool
     */
    public function updateData(array $data):bool
    {

        return DB::table($this->table)
            ->where(['id' => $data['id']])
            ->update([
                'title' => $data['title'],
                'text' => $data['text'],
            ]);
    }

    /**
     * @param string $date
     * @return Collection
     */
    public function getDataMoreThenDate(string $date): Collection
    {
        return DB::table($this->table)
            ->where('created_at', '<=', $date)
            ->get();
    }

    /**
     * @param $id
     * @return bool
     */
    public function delete($id):bool
    {
        return DB::table($this->table)->delete($id);
    }
}