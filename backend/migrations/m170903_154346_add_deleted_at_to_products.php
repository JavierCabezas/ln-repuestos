<?php

use yii\db\Migration;

class m170903_154346_add_deleted_at_to_products extends Migration
{
    public function up()
    {
        $this->addColumn('product', 'deleted_at', $this->timestamp()->defaultValue(null));
    }

    public function down()
    {
        $this->dropColumn('product', 'deleted_at');
    }
}
