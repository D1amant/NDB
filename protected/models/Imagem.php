<?php

/**
 * This is the model class for table "imagem".
 *
 * The followings are the available columns in table 'imagem':
 * @property integer $idimagem
 * @property string $camino
 * @property string $tutulo
 * @property string $descricao
 * @property integer $galeria_idgaleria
 *
 * The followings are the available model relations:
 * @property Galeria $galeriaIdgaleria
 */
class Imagem extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'imagem';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('galeria_idgaleria', 'required'),
			array('galeria_idgaleria', 'numerical', 'integerOnly'=>true),
			array('tutulo', 'length', 'max'=>45),
			array('descricao', 'length', 'max'=>255),
			array('camino', 'file', 'allowEmpty'=>true, 'types'=>'jpg, jpeg', 'message'=>'Você só pode enviar imagens do tipo "JPG" no campo {attribute}.'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			// array('idimagem, camino, tutulo, descricao, galeria_idgaleria', 'safe', 'on'=>'search'),
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
			'galeriaIdgaleria' => array(self::BELONGS_TO, 'Galeria', 'galeria_idgaleria'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idimagem' => 'Idimagem',
			'camino' => 'Camino',
			'tutulo' => 'Tutulo',
			'descricao' => 'Descricao',
			'galeria_idgaleria' => 'Galeria Idgaleria',
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

		$criteria->compare('idimagem',$this->idimagem);
		$criteria->compare('camino',$this->camino,true);
		$criteria->compare('tutulo',$this->tutulo,true);
		$criteria->compare('descricao',$this->descricao,true);
		$criteria->compare('galeria_idgaleria',$this->galeria_idgaleria);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Imagem the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	
	
	
	
	
	
}
