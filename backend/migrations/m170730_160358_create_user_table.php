<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m170730_160358_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'name' => $this->string('200'),
            'email' => $this->string()->notNull()->unique(),
            'token' => $this->string(), //This is OUR token
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user');
    }
}
