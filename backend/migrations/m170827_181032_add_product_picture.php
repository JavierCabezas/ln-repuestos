<?php

use yii\db\Migration;

class m170827_181032_add_product_picture extends Migration
{
    public function up()
    {
        $this->createTable('product_picture', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer(),
            'picture_path' => $this->string(128),
            'created_on' => $this->dateTime()->defaultValue(date('Y-m-d h:i:s'))
        ]);
        $this->addForeignKey('fk-product-product-picture-id', 'product_picture', 'product_id', 'product', 'id');
    }

    public function down()
    {
        $this->dropForeignKey('fk-product-product-picture-id', 'product_picture');
        $this->dropTable('product_picture');
    }
}
