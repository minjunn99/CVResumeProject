<?php

class BaseModel extends Database {
    protected $conn;

    public function __construct() {
        $this->conn = $this->connect();
    }

    private function query($sql) {
        return mysqli_query($this->conn, $sql);
    }

    /**
	 * Lay ra tat ca ban ghi trong bang
	 */
    public function all($table, $select = ['*']) {
        $columns = implode(",", $select);
        $sql = "SELECT ${columns} FROM ${table}";
        $query = $this->query($sql);

        $data = [];

        while ($row = mysqli_fetch_assoc($query)) {
			array_push($data, $row);
		}

		return $data;
    }

    /**
	 * Lay ra mot ban ghi trong bang
	 */
	public function find($id, $table, $select = ['*'], $key = 'id') {
        $columns = implode(",", $select);
        $sql = "SELECT ${columns} FROM ${table} where ${key} = ${id}";
        $query = $this->query($sql);

        $data = mysqli_fetch_assoc($query);

		return $data;
	}

    /**
	 * Them du lieu vao bang
	 */
	public function add($table, $data = []) {
        $columns = [];
        $values = [];

        foreach($data as $key=>$value)
        {
            array_push($columns, $key);
            array_push($values, "'$value'");
        }

        $columns = implode(",", $columns);
        $values = implode(",", $values);

        echo $columns;
        echo "<br />";
        echo $values;

        $sql = "INSERT INTO ${table}(${columns}) VALUES(${values});";
        $query = $this->query($sql);
        $rs = false;

        if($query) {
            $rs = true;
        }

        return $rs;
	}

    /**
	 * Update du lieu vao bang
	 */
	public function update($id, $table, $data) {
        $columns = [];
        $values = [];
        $update = [];
        foreach($arr as $key=>$value)
        {
            $update_item = "${key}='${value}'";
            array_push($update, $update_item);
        }
        $update = implode(",", $update);

        $sql = "UPDATE posts SET ${update} WHERE post_id = '${id}'";
        $query = $this->query($sql);
        $rs = false;

        if($query) {
            $rs = true;
        }

        return $rs;
	}

    /**
	 * Xoa du lieu vao bang
	 */
	public function delete($id, $table) {
        $sql = "DELETE FROM ${table} WHERE post_id='$id'";
        $query = $this->query($sql);
        $rs = false;

        if($query) {
            $rs = true;
        }

        return $rs;
	}
}