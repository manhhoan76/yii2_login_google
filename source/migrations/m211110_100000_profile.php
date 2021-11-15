<?php

use yii\db\Migration;

class m211110_100000_profile extends Migration
{
    public function up()
    {
        $this->createTable('profile', [
            'id' => $this->primaryKey(),
            'user_id' => $this->string()->notNull(),
            'name' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'avatar' => $this->string(),
            'birth_day' => $this->string(),
            'locale' => $this->string(),
            'address' => $this->string(),
        ]);
        $this->addForeignKey('fk-profile-user_id-user-id', 'profile', 'user_id', 'user', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('profile');
    }
}
