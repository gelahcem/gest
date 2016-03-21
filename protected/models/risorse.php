<?php

/**
 * This is the model class for table "risorse".
 *
 * The followings are the available columns in table 'risorse':
 * @property integer $ID
 * @property string $IDENTIFICATIVO
 * @property string $NOME
 * @property string $COGNOME
 * @property string $NOMINATIVO
 * @property string $USERNAME
 * @property string $PASSWORD
 * @property string $RUOLO
 * @property string $COSTO
 * @property string $ACL
 * @property string $MAIL
 * @property integer $ACLFORTE
 * @property integer $ACLSKY
 */
class risorse extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'risorse';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ACLFORTE, ACLSKY', 'numerical', 'integerOnly'=>true),
			array('IDENTIFICATIVO, NOME, COGNOME, NOMINATIVO, USERNAME, PASSWORD, RUOLO, COSTO, ACL, MAIL', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, IDENTIFICATIVO, NOME, COGNOME, NOMINATIVO, USERNAME, PASSWORD, RUOLO, COSTO, ACL, MAIL, ACLFORTE, ACLSKY', 'safe', 'on'=>'search'),
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
			'IDENTIFICATIVO' => 'Identificativo',
			'NOME' => 'Nome',
			'COGNOME' => 'Cognome',
			'NOMINATIVO' => 'Nominativo',
			'USERNAME' => 'Username',
			'PASSWORD' => 'Password',
			'RUOLO' => 'Ruolo',
			'COSTO' => 'Costo',
			'ACL' => 'Acl',
			'MAIL' => 'Mail',
			'ACLFORTE' => 'Aclforte',
			'ACLSKY' => 'Aclsky',
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
		$criteria->compare('IDENTIFICATIVO',$this->IDENTIFICATIVO,true);
		$criteria->compare('NOME',$this->NOME,true);
		$criteria->compare('COGNOME',$this->COGNOME,true);
		$criteria->compare('NOMINATIVO',$this->NOMINATIVO,true);
		$criteria->compare('USERNAME',$this->USERNAME,true);
		$criteria->compare('PASSWORD',$this->PASSWORD,true);
		$criteria->compare('RUOLO',$this->RUOLO,true);
		$criteria->compare('COSTO',$this->COSTO,true);
		$criteria->compare('ACL',$this->ACL,true);
		$criteria->compare('MAIL',$this->MAIL,true);
		$criteria->compare('ACLFORTE',$this->ACLFORTE);
		$criteria->compare('ACLSKY',$this->ACLSKY);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return risorse the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
