<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use frontend\models\Record;

class RecordForm extends Model
{
    public $email;
    public $disease_code;
    public $cname;
    public $total_patients;
    public $total_deaths;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email','cname','disease_code','total_patients','total_deaths'], 'required'],
            [['email','cname','disease_code'], 'string', 'min' => 2, 'max' => 255],
            [['total_patients','total_deaths'], 'integer'],
        ];
    }

    public function createRecord(){
        $record = new Record();

        $record->email = $this->email;
        $record->cname = $this->cname;
        $record->disease_code = $this->disease_code;
        $record->total_patients = $this->total_patients;
        $record->total_deaths = $this->total_deaths;

        return $record->save();
    }
}