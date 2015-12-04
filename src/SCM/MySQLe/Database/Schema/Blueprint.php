<?php namespace SCM\MySQLe\Database\Schema;

class Blueprint extends \Illuminate\Database\Schema\Blueprint {
    /**
     * Create a new binary column on the table.
     *
     * @param  string  $column
     * @param  int  $length
     * @return \Illuminate\Support\Fluent
     */
    public function binary($column, $length = 255)
    {
        return $this->addColumn('binary', $column, compact('length'));
    }

    /**
     * Create an 'updated_at' timestamp on the table
     *
     * @param $column
     * @return mixed
     */
    public function updatedTimeStamp($column) {
        return $this->addColumn('updatedTimeStamp', $column);
    }

    /**
     * Create a set column on the table
     *
     * @param $column
     * @param array $allowed
     * @return mixed
     */
    public function set($column, array $allowed) {
        return $this->addColumn('set', $column, compact('allowed'));
    }
}
