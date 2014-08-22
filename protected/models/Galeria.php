<?php

/**
 * This is the model class for table "galeria".
 *
 * The followings are the available columns in table 'galeria':
 * @property integer $idgaleria
 * @property string $titulo
 * @property string $descricao
 * @property string $dataCriacao
 * @property string $imagem
 * @property string $diretorio 
 *
 * The followings are the available model relations:
 * @property Imagem[] $imagems
 */
 
 

class Galeria extends CActiveRecord
{


	 public $arquivo = array();	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'galeria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('titulo, descricao', 'length', 'max'=>45),
			array('dataCriacao,imagem , diretorio', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idgaleria, titulo, descricao, dataCriacao,imagem, diretorio', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	// public function relations()
	// {
		// // NOTE: you may need to adjust the relation name and the related
		// // class name for the relations automatically generated below.
		// return array(
			// 'imagems' => array(self::HAS_MANY, 'Imagem', 'galeria_idgaleria'),
		// );
	// }

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idgaleria' => 'Idgaleria',
			'titulo' => 'Titulo',
			'descricao' => 'Descricao',
			'dataCriacao' => 'Data Criacao',
			'imagem' => 'Imagens',
			'diretorio' => 'Diretorio',
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

		$criteria->compare('idgaleria',$this->idgaleria);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('descricao',$this->descricao,true);
		$criteria->compare('dataCriacao',$this->dataCriacao,true);
		$criteria->compare('imagem',$this->dataCriacao,true);
		$criteria->compare('diretorio',$this->dataCriacao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Galeria the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
