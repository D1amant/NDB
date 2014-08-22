<?php

/**
 * This is the model class for table "integrante".
 *
 * The followings are the available columns in table 'integrante':
 * @property integer $idintegrante
 * @property integer $idade
 * @property string $funcao
 * @property string $facebook
 * @property string $twitter
 * @property string $imagem
 * @property string $dataCriacao
 * @property string $dataEdicao
 * @property integer $User_idUser
 *
 * The followings are the available model relations:
 * @property User $userIdUser
 */
class Integrante extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'integrante';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('User_idUser', 'required'),
			array('idade, User_idUser', 'numerical', 'integerOnly'=>true),
			array('funcao, facebook, twitter, imagem', 'length', 'max'=>45),
			array('dataCriacao, dataEdicao', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idintegrante, idade, funcao, facebook, twitter, imagem, dataCriacao, dataEdicao, User_idUser', 'safe', 'on'=>'search'),
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
			'userIdUser' => array(self::BELONGS_TO, 'User', 'User_idUser'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idintegrante' => 'Idintegrante',
			'idade' => 'Idade',
			'funcao' => 'Funcao',
			'facebook' => 'Facebook',
			'twitter' => 'Twitter',
			'imagem' => 'Imagem',
			'dataCriacao' => 'Data Criacao',
			'dataEdicao' => 'Data Edicao',
			'User_idUser' => 'User Id User',
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

		$criteria->compare('idintegrante',$this->idintegrante);
		$criteria->compare('idade',$this->idade);
		$criteria->compare('funcao',$this->funcao,true);
		$criteria->compare('facebook',$this->facebook,true);
		$criteria->compare('twitter',$this->twitter,true);
		$criteria->compare('imagem',$this->imagem,true);
		$criteria->compare('dataCriacao',$this->dataCriacao,true);
		$criteria->compare('dataEdicao',$this->dataEdicao,true);
		$criteria->compare('User_idUser',$this->User_idUser);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Integrante the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
