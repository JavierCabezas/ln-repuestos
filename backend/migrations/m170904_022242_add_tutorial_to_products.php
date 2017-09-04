<?php

use yii\db\Migration;

/**
 * Class m170904_022242_add_tutorial_to_products
 */
class m170904_022242_add_tutorial_to_products extends Migration
{
    public function up()
    {
        $this->addColumn('product', 'tutorial_type', $this->smallInteger()->defaultValue(0));
        $this->addColumn('product', 'tutorial_text', $this->text()->defaultValue(null));
    }

    public function down()
    {
        $this->dropColumn('product', 'tutorial_type');
        $this->dropColumn('product', 'tutorial_text');
    }
}
