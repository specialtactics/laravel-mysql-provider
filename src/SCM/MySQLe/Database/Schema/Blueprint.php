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
}
