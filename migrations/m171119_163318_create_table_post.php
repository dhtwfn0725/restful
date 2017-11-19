<?php

use yii\db\Migration;

/**
 * Class m171119_163318_create_table_post
 */
class m171119_163318_create_table_post extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('post',[
            'id'=>$this->primaryKey(),
            'title'=>$this->string(50)->notNull()->comment('标题'),
            'description'=>$this->string(128)->notNull()->comment('描述'),
            'content'=>$this->text()->comment('内容'),
            'created_at'=>$this->integer()->notNull()->unsigned()->defaultValue(0)->comment('创建时间'),
            'updated_at'=>$this->integer()->notNull()->unsigned()->defaultValue(0)->comment('更新时间'),
            'deleted_at'=>$this->integer()->notNull()->unsigned()->defaultValue(0)->comment('删除时间'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171119_163318_create_table_post cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171119_163318_create_table_post cannot be reverted.\n";

        return false;
    }
    */
}
