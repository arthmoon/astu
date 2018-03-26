<?php

use yii\db\Migration;

/**
 * Class m180312_115521_user_add_columns
 */
class m180312_115521_user_add_columns extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->addColumn('{{%user}}', 'name', $this->string(50));
        $this->addColumn('{{%user}}', 'fname', $this->string(50));
        $this->addColumn('{{%user}}', 'img', $this->string(300));

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%user}}', 'name');
        $this->dropColumn('{{%user}}', 'fname');
        $this->dropColumn('{{%user}}', 'img');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180312_115521_user_add_columns cannot be reverted.\n";

        return false;
    }
    */
}
