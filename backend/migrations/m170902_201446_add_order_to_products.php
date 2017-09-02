<?php

use yii\db\Migration;

class m170902_201446_add_order_to_products extends Migration
{
    public function up()
    {
        $this->addColumn('product', 'upon_request', $this->boolean()->defaultValue(false));
    }

    public function down()
    {
        $this->dropColumn('product', 'upon_request');
    }
}
