<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "country".
 *
 * @property string $cname
 * @property int $population
 *
 * @property Discover[] $discovers
 * @property Disease[] $diseaseCodes
 * @property Record[] $records
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cname', 'population'], 'required'],
            [['population'], 'integer'],
            [['cname'], 'string', 'max' => 50],
            [['cname'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cname' => 'Country',
            'population' => 'Population',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiscovers()
    {
        return $this->hasMany(Discover::className(), ['cname' => 'cname']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiseaseCodes()
    {
        return $this->hasMany(Disease::className(), ['disease_code' => 'disease_code'])->viaTable('discover', ['cname' => 'cname']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecords()
    {
        return $this->hasMany(Record::className(), ['cname' => 'cname']);
    }
}
