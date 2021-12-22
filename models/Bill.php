<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bill".
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $teacher_id
 * @property int|null $subject_id
 * @property float|null $grade
 *
 * @property Subject $subject
 * @property UserMy $teacher
 * @property UserMy $user
 */
class Bill extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bill';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'teacher_id', 'subject_id'], 'default', 'value' => null],
            [['user_id', 'teacher_id', 'subject_id'], 'integer'],
            [['grade'], 'number'],
            [['subject_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subject::className(), 'targetAttribute' => ['subject_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => UserMy::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['teacher_id'], 'exist', 'skipOnError' => true, 'targetClass' => UserMy::className(), 'targetAttribute' => ['teacher_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'ID студента',
            'teacher_id' => 'ID преподавателя',
            'subject_id' => 'ID предмета',
            'grade' => 'Оценка',
        ];
    }

    /**
     * Gets query for [[Subject]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubject()
    {
        return $this->hasOne(Subject::className(), ['id' => 'subject_id']);
    }

    /**
     * Gets query for [[Teacher]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTeacher()
    {
        return $this->hasOne(UserMy::className(), ['id' => 'teacher_id']);
    }

    /**
     * Gets query for [[UserMy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(UserMy::className(), ['id' => 'user_id']);
    }
}
