<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "doctor".
 *
 * @property string $email
 * @property string $degree
 *
 * @property Users $email0
 * @property Specialize[] $specializes
 * @property Diseasetype[] $ids
 */
class Doctor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'doctor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email', 'degree'], 'required'],
            [['email'], 'string', 'max' => 60],
            [['degree'], 'string', 'max' => 20],
            [['email'], 'unique'],
            [['email'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['email' => 'email']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'email' => 'Email',
            'degree' => 'Degree',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmail0()
    {
        return $this->hasOne(Users::className(), ['email' => 'email']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSpecializes()
    {
        return $this->hasMany(Specialize::className(), ['email' => 'email']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIds()
    {
        return $this->hasMany(Diseasetype::className(), ['id' => 'id'])->viaTable('specialize', ['email' => 'email']);
    }
}
