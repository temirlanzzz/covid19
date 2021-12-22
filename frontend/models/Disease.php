<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "disease".
 *
 * @property string $disease_code
 * @property string $pathogen
 * @property string $description
 * @property int $id
 *
 * @property Discover[] $discovers
 * @property Country[] $cnames
 * @property Diseasetype $id0
 * @property Record[] $records
 */
class Disease extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'disease';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['disease_code', 'pathogen', 'description', 'id'], 'required'],
            [['id'], 'integer'],
            [['disease_code'], 'string', 'max' => 50],
            [['pathogen'], 'string', 'max' => 20],
            [['description'], 'string', 'max' => 140],
            [['disease_code'], 'unique'],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Disease::className(), 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'disease_code' => 'Disease Code',
            'pathogen' => 'Pathogen',
            'description' => 'Description',
            'id' => 'Disease type',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiscovers()
    {
        return $this->hasMany(Discover::className(), ['disease_code' => 'disease_code']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCnames()
    {
        return $this->hasMany(Country::className(), ['cname' => 'cname'])->viaTable('discover', ['disease_code' => 'disease_code']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Diseasetype::className(), ['id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecords()
    {
        return $this->hasMany(Record::className(), ['disease_code' => 'disease_code']);
    }
}
