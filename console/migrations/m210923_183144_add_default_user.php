<?php

use yii\db\Migration;

/**
 * Class m210923_183144_add_default_user
 */
class m210923_183144_add_default_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $userModel = new \common\models\User();
        $userModel->username = 'admin';
        $userModel->removePasswordResetToken();
        $userModel->email = 'info@paradox.ar';
        $userModel->generateAuthKey();
        $userModel->status = \common\models\User::STATUS_ACTIVE;
        $userModel->created_at = time();
        $userModel->updated_at = time();
        $userModel->setPassword('admin');
        $userModel->save();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210923_183144_add_default_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210923_183144_add_default_user cannot be reverted.\n";

        return false;
    }
    */
}
