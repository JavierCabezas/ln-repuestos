<?php

use yii\db\Migration;

class m170822_015849_add_slider extends Migration
{

    public function up()
    {
        $this->createTable('slider', [
            'id' => $this->primaryKey(),
            'title' => $this->string(40)->notNull(),
            'content' => $this->string(300),
            'picture_path' => $this->string(100),
            'has_link' => $this->boolean()->defaultValue(false),
            'link_path' => $this->string(50),
            'priority' => $this->integer()->defaultValue(10)
        ]);

    }

    public function down()
    {
        $this->dropTable('slider');
    }
}
