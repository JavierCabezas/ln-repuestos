<?php

use yii\db\Migration;

class m170826_182346_add_product extends Migration
{
    public function up()
    {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'category_id' => $this->string(30),
            'name' => $this->string(60)->notNull(),
            'seo_name' => $this->string(60),
            'description' => $this->string(300)->notNull(),
            'price' => $this->integer(),
            'is_featured' => $this->boolean()->defaultValue(false),
            'is_ready' => $this->boolean()->defaultValue(false),
            'created_on' => $this->dateTime()->defaultValue(date('Y-m-d h:i:s'))
        ]);
    }

    public function down()
    {
        $this->dropTable('product');
    }
}
