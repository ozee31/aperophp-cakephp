<?php
use Migrations\AbstractMigration;

class CreateUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $this->table('users')
            ->addColumn('email', 'string', ['null' => false])
            ->addColumn('firstname', 'string', ['null' => true, 'limit' => 50])
            ->addColumn('lastname', 'string', ['null' => true, 'limit' => 50])
            ->addColumn('active', 'boolean', ['default' => true])
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->save();
    }
}
