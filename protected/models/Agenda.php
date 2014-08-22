<?php

/**
 * This is the model class for table "agenda".
 *
 * The followings are the available columns in table 'agenda':
 * @property integer $idagenda
 * @property string $data
 * @property string $hora
 * @property string $local
 * @property string $observaca
 * @property string $imagem
 * @property string $dataCriacao
 * @property string $dataEdicao
 */
class Agenda extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'agenda';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('local, imagem', 'length', 'max'=>45),
			array('data, hora, observaca, dataCriacao, dataEdicao', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idagenda, data, hora, local, observaca, imagem, dataCriacao, dataEdicao', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idagenda' => 'Idagenda',
			'data' => 'Data',
			'hora' => 'Hora',
			'local' => 'Local',
			'observaca' => 'Observaca',
			'imagem' => 'Imagem',
			'dataCriacao' => 'Data Criacao',
			'dataEdicao' => 'Data Edicao',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idagenda',$this->idagenda);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('local',$this->local,true);
		$criteria->compare('observaca',$this->observaca,true);
		$criteria->compare('imagem',$this->imagem,true);
		$criteria->compare('dataCriacao',$this->dataCriacao,true);
		$criteria->compare('dataEdicao',$this->dataEdicao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Agenda the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
