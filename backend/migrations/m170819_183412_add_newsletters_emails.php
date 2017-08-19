<?php

use yii\db\Migration;

class m170819_183412_add_newsletters_emails extends Migration
{
    public function safeUp()
    {
        $this->safeUp();
    }

    public function safeDown()
    {
        $this->safeDown();
    }

    public function up()
    {
        $this->createTable('newsletter_emails', [
            'id' => $this->primaryKey(),
            'email' => $this->string()->notNull()->unique(),
            'added_on' => $this->dateTime(),
        ]);
    }

    public function down()
    {
        $this->dropTable('newsletter_emails');
    }
}
