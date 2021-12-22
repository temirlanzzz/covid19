<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "diseasetype".
 *
 * @property int $id
 * @property string $description
 *
 * @property Disease[] $diseases
 * @property Specialize[] $specializes
 * @property Doctor[] $emails
 */
class Diseasetype extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'diseasetype';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'description'], 'required'],
            [['id'], 'integer'],
            [['description'], 'string', 'max' => 140],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiseases()
    {
        return $this->hasMany(Disease::className(), ['id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSpecializes()
    {
        return $this->hasMany(Specialize::className(), ['id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmails()
    {
        return $this->hasMany(Doctor::className(), ['email' => 'email'])->viaTable('specialize', ['id' => 'id']);
    }
}
