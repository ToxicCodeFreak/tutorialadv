<?php

use yii\db\Migration;

/**
 * Class m231203_182213_alter_date_columns_in_project_table
 */
class m231203_182213_alter_date_columns_in_project_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn( 'project', 'start_date', 'date');
        $this->alterColumn( 'project', 'end_date', 'date');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn( 'project', 'start_date', 'integer');
        $this->alterColumn( 'project', 'end_date', 'integer');
    }

}
