<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $email
 * @property string $name
 * @property string $surname
 * @property int $salary
 * @property string $phone
 * @property string $cname
 * @property string $password
 *
 * @property Doctor $doctor
 * @property Record[] $records
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email', 'name', 'surname', 'salary', 'phone', 'cname', 'password'], 'required'],
            [['salary'], 'integer'],
            [['email'], 'string', 'max' => 60],
            [['name'], 'string', 'max' => 30],
            [['surname'], 'string', 'max' => 40],
            [['phone'], 'string', 'max' => 20],
            [['cname'], 'string', 'max' => 50],
            [['password'], 'string', 'max' => 140],
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
            'name' => 'Name',
            'surname' => 'Surname',
            'salary' => 'Salary',
            'phone' => 'Phone',
            'cname' => 'Country',
            'password' => 'Password',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDoctor()
    {
        return $this->hasOne(Doctor::className(), ['email' => 'email']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecords()
    {
        return $this->hasMany(Record::className(), ['email' => 'email']);
    }
}
