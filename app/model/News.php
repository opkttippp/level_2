<?php

namespace app\model;

use app\lib\Db;
use PDO;

class News
{
    public function getNews()
    {
        $db = new Db();

        $res = $db->db->query('SELECT * FROM article');
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }
}
