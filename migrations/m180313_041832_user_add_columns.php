<?php

use yii\db\Migration;

/**
 * Class m180313_041832_user_add_columns
 */
class m180313_041832_user_add_columns extends Migration
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

        $this->addColumn('{{%user}}', 'rank', $this->string(100));
        $this->addColumn('{{%user}}', 'role', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%user}}', 'rank');
        $this->dropColumn('{{%user}}', 'role');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180313_041832_user_add_columns cannot be reverted.\n";

        return false;
    }
    */
}
