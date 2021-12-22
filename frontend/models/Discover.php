<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "discover".
 *
 * @property string $cname
 * @property string $disease_code
 * @property string $first_enc_date
 *
 * @property Disease $diseaseCode
 * @property Country $cname0
 */
class Discover extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'discover';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cname', 'disease_code', 'first_enc_date'], 'required'],
            [['first_enc_date'], 'safe'],
            [['cname'], 'string', 'max' => 140],
            [['disease_code'], 'string', 'max' => 50],
            [['cname', 'disease_code'], 'unique', 'targetAttribute' => ['cname', 'disease_code']],
            [['disease_code'], 'exist', 'skipOnError' => true, 'targetClass' => Disease::className(), 'targetAttribute' => ['disease_code' => 'disease_code']],
            [['cname'], 'exist', 'skipOnError' => true, 'targetClass' => Country::className(), 'targetAttribute' => ['cname' => 'cname']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cname' => 'Country',
            'disease_code' => 'Disease Code',
            'first_enc_date' => 'First Enc Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiseaseCode()
    {
        return $this->hasOne(Disease::className(), ['disease_code' => 'disease_code']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCname0()
    {
        return $this->hasOne(Country::className(), ['cname' => 'cname']);
    }
}
