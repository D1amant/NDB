<?php

/**
 * This is the model class for table "User".
 *
 * The followings are the available columns in table 'User':
 * @property integer $idUser
 * @property string $nome
 * @property string $telefone
 * @property string $email
 * @property string $dataCriacao
 * @property string $dataEdicao
 *
 * The followings are the available model relations:
 * @property Admin[] $admins
 * @property Integrante[] $integrantes
 */
 
 
class User extends CActiveRecord
{
	
	
public $tipo; 
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'User';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('telefone, email', 'required'),
			array('nome, telefone, email', 'length', 'max'=>45),
			array('dataCriacao, dataEdicao', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idUser, nome, telefone, email, dataCriacao, dataEdicao', 'safe', 'on'=>'search'),
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
			'admins' => array(self::HAS_MANY, 'Admin', 'User_idUser'),
			'integrantes' => array(self::HAS_MANY, 'Integrante', 'User_idUser'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idUser' => 'Id User',
			'nome' => 'Nome',
			'telefone' => 'Telefone',
			'email' => 'Email',
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

		$criteria->compare('idUser',$this->idUser);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('telefone',$this->telefone,true);
		$criteria->compare('email',$this->email,true);
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
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
