<?php
namespace App\Core\Database;

class QueryBuilder
{
    protected $pdo;
    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table){
        $statement = $this->pdo->prepare("SELECT * from {$table}");
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    public function insert($table, $params)
    {
        $sql = sprintf('insert into %s (%s) VALUES (%s)', $table, implode(', ', array_keys($params)),
            ':' . implode(', :', array_keys($params)));

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($params);
        }catch (\PDOException $e){
            die('Woops, something went wrong!');
        }
    }
}