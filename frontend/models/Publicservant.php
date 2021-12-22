<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "publicservant".
 *
 * @property string $email
 * @property string $department
 */
class Publicservant extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'publicservant';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email', 'department'], 'required'],
            [['email'], 'string', 'max' => 60],
            [['department'], 'string', 'max' => 50],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'email' => 'Email',
            'department' => 'Department',
        ];
    }
}
