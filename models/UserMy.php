<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $email
 * @property string $password
 * @property int $role
 * @property int|null $group_id
 *
 * @property Bill[] $bills
 * @property Bill[] $bills0
 */
class UserMy extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email', 'password', 'role'], 'required'],
            [['role', 'group_id'], 'default', 'value' => null],
            [['role', 'group_id'], 'integer'],
            [['email', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'password' => 'Password',
            'role' => 'Role',
            'group_id' => 'Group ID',
        ];
    }

    /**
     * Gets query for [[Bills]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBills()
    {
        return $this->hasMany(Bill::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Bills0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBills0()
    {
        return $this->hasMany(Bill::className(), ['teacher_id' => 'id']);
    }
}
