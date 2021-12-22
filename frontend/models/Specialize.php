<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "specialize".
 *
 * @property int $id
 * @property string $email
 *
 * @property Doctor $email0
 * @property Diseasetype $id0
 */
class Specialize extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'specialize';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'email'], 'required'],
            [['id'], 'integer'],
            [['email'], 'string', 'max' => 60],
            [['id', 'email'], 'unique', 'targetAttribute' => ['id', 'email']],
            [['email'], 'exist', 'skipOnError' => true, 'targetClass' => Doctor::className(), 'targetAttribute' => ['email' => 'email']],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Diseasetype::className(), 'targetAttribute' => ['id' => 'id']],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmail0()
    {
        return $this->hasOne(Doctor::className(), ['email' => 'email']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Diseasetype::className(), ['id' => 'id']);
    }
}
