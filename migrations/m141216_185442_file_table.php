<?php

use yii\db\Schema;
use yii\db\Migration;

class m141216_185442_file_table extends Migration
{
    public function up()
    {
        $this->createTable('{{%file}}', [
            'id' => Schema::TYPE_PK,
            'image' => Schema::TYPE_STRING . ' NOT NULL',
            'description' => Schema::TYPE_STRING,
            'createdAt' => Schema::TYPE_TIMESTAMP
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%file}}');
    }
}
