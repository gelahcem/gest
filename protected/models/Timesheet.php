<?php

/**
 * This is the model class for table "timesheet".
 *
 * The followings are the available columns in table 'timesheet':
 * @property integer $ID
 * @property integer $ANNO
 * @property integer $MESE
 * @property integer $SETTIMANA
 * @property string $IDENTIFICATIVO
 * @property string $DATA
 * @property string $DATASHORT
 * @property string $RISORSA
 * @property string $IDCOMMESSA
 * @property string $ORE
 * @property string $KM
 * @property string $AUTO
 * @property string $PASTO
 * @property string $DESCRIZIONE
 * @property integer $BLOCCO
 * @property string $INSERITO
 * @property string $MODIFICATO
 * @property string $MODIFICATODA
 * @property string $IDPREVENTIVO
 * @property string $SUPERCOMMESSA
 * @property integer $STRAORDINARIO
 */
class Timesheet extends CActiveRecord
{
    public $id;
    public $datashort=NULL;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'timesheet';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ANNO, MESE, SETTIMANA, BLOCCO, STRAORDINARIO', 'numerical', 'integerOnly'=>true),
			array('IDENTIFICATIVO, MODIFICATODA, IDPREVENTIVO', 'length', 'max'=>15),
			array('DATA', 'length', 'max'=>16),
			array('RISORSA, SUPERCOMMESSA', 'length', 'max'=>50),
			array('IDCOMMESSA', 'length', 'max'=>255),
			array('ORE', 'length', 'max'=>6),
			array('KM', 'length', 'max'=>4),
			array('AUTO, PASTO', 'length', 'max'=>10),
			array('DESCRIZIONE', 'length', 'max'=>2048),
			array('DATASHORT, INSERITO, MODIFICATO', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, ANNO, MESE, SETTIMANA, IDENTIFICATIVO, DATA, DATASHORT, RISORSA, IDCOMMESSA, ORE, KM, AUTO, PASTO, DESCRIZIONE, BLOCCO, INSERITO, MODIFICATO, MODIFICATODA, IDPREVENTIVO, SUPERCOMMESSA, STRAORDINARIO', 'safe', 'on'=>'search'),
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
			'ID' => 'ID',
			'ANNO' => 'Anno',
			'MESE' => 'Mese',
			'SETTIMANA' => 'Settimana',
			'IDENTIFICATIVO' => 'Identificativo',
			'DATA' => 'Data',
			'DATASHORT' => 'Datashort',
			'RISORSA' => 'Risorsa',
			'IDCOMMESSA' => 'Idcommessa',
			'ORE' => 'Ore',
			'KM' => 'Km',
			'AUTO' => 'Auto',
			'PASTO' => 'Pasto',
			'DESCRIZIONE' => 'Descrizione',
			'BLOCCO' => 'Blocco',
			'INSERITO' => 'Inserito',
			'MODIFICATO' => 'Modificato',
			'MODIFICATODA' => 'Modificatoda',
			'IDPREVENTIVO' => 'Idpreventivo',
			'SUPERCOMMESSA' => 'Supercommessa',
			'STRAORDINARIO' => 'Straordinario',
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

		$criteria->compare('ID',$this->ID);
		$criteria->compare('ANNO',$this->ANNO);
		$criteria->compare('MESE',$this->MESE);
		$criteria->compare('SETTIMANA',$this->SETTIMANA);
		$criteria->compare('IDENTIFICATIVO',$this->IDENTIFICATIVO,true);
		$criteria->compare('DATA',$this->DATA,true);
		$criteria->compare('DATASHORT',$this->DATASHORT,true);
		$criteria->compare('RISORSA',$this->RISORSA,true);
		$criteria->compare('IDCOMMESSA',$this->IDCOMMESSA,true);
		$criteria->compare('ORE',$this->ORE,true);
		$criteria->compare('KM',$this->KM,true);
		$criteria->compare('AUTO',$this->AUTO,true);
		$criteria->compare('PASTO',$this->PASTO,true);
		$criteria->compare('DESCRIZIONE',$this->DESCRIZIONE,true);
		$criteria->compare('BLOCCO',$this->BLOCCO);
		$criteria->compare('INSERITO',$this->INSERITO,true);
		$criteria->compare('MODIFICATO',$this->MODIFICATO,true);
		$criteria->compare('MODIFICATODA',$this->MODIFICATODA,true);
		$criteria->compare('IDPREVENTIVO',$this->IDPREVENTIVO,true);
		$criteria->compare('SUPERCOMMESSA',$this->SUPERCOMMESSA,true);
		$criteria->compare('STRAORDINARIO',$this->STRAORDINARIO);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Timesheet the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
