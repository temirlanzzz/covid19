<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "record".
 *
 * @property string $email
 * @property string $cname
 * @property string $disease_code
 * @property int $total_deaths
 * @property int $total_patients
 */
class Record extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'record';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email', 'cname', 'disease_code', 'total_deaths', 'total_patients'], 'required'],
            [['total_deaths', 'total_patients'], 'integer'],
            [['email'], 'string', 'max' => 60],
            [['cname', 'disease_code'], 'string', 'max' => 50],
            [['email', 'cname', 'disease_code'], 'unique', 'targetAttribute' => ['email', 'cname', 'disease_code']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'email' => 'Email',
            'cname' => 'Country',
            'disease_code' => 'Disease Code',
            'total_deaths' => 'Total Deaths',
            'total_patients' => 'Total Patients',
        ];
    }
}
