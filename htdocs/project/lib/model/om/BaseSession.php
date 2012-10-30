<?php


/**
 * Base class that represents a row from the 'session' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseSession extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'SessionPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        SessionPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the session_key field.
	 * @var        string
	 */
	protected $session_key;

	/**
	 * The value for the data field.
	 * @var        resource
	 */
	protected $data;

	/**
	 * The value for the client_ip_address field.
	 * @var        string
	 */
	protected $client_ip_address;

	/**
	 * The value for the session_type field.
	 * @var        string
	 */
	protected $session_type;

	/**
	 * The value for the time field.
	 * @var        int
	 */
	protected $time;

	/**
	 * The value for the user_id field.
	 * @var        int
	 */
	protected $user_id;

	/**
	 * @var        User
	 */
	protected $aUser;

	/**
	 * @var        array SingleSignOnKey[] Collection to store aggregation of SingleSignOnKey objects.
	 */
	protected $collSingleSignOnKeys;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * Get the [id] column value.
	 * 
	 * @return     int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the [session_key] column value.
	 * 
	 * @return     string
	 */
	public function getSessionKey()
	{
		return $this->session_key;
	}

	/**
	 * Get the [data] column value.
	 * 
	 * @return     resource
	 */
	public function getData()
	{
		return $this->data;
	}

	/**
	 * Get the [client_ip_address] column value.
	 * 
	 * @return     string
	 */
	public function getClientIpAddress()
	{
		return $this->client_ip_address;
	}

	/**
	 * Get the [session_type] column value.
	 * 
	 * @return     string
	 */
	public function getSessionType()
	{
		return $this->session_type;
	}

	/**
	 * Get the [time] column value.
	 * 
	 * @return     int
	 */
	public function getTime()
	{
		return $this->time;
	}

	/**
	 * Get the [user_id] column value.
	 * 
	 * @return     int
	 */
	public function getUserId()
	{
		return $this->user_id;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     Session The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = SessionPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [session_key] column.
	 * 
	 * @param      string $v new value
	 * @return     Session The current object (for fluent API support)
	 */
	public function setSessionKey($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->session_key !== $v) {
			$this->session_key = $v;
			$this->modifiedColumns[] = SessionPeer::SESSION_KEY;
		}

		return $this;
	} // setSessionKey()

	/**
	 * Set the value of [data] column.
	 * 
	 * @param      resource $v new value
	 * @return     Session The current object (for fluent API support)
	 */
	public function setData($v)
	{
		// Because BLOB columns are streams in PDO we have to assume that they are
		// always modified when a new value is passed in.  For example, the contents
		// of the stream itself may have changed externally.
		if (!is_resource($v) && $v !== null) {
			$this->data = fopen('php://memory', 'r+');
			fwrite($this->data, $v);
			rewind($this->data);
		} else { // it's already a stream
			$this->data = $v;
		}
		$this->modifiedColumns[] = SessionPeer::DATA;

		return $this;
	} // setData()

	/**
	 * Set the value of [client_ip_address] column.
	 * 
	 * @param      string $v new value
	 * @return     Session The current object (for fluent API support)
	 */
	public function setClientIpAddress($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->client_ip_address !== $v) {
			$this->client_ip_address = $v;
			$this->modifiedColumns[] = SessionPeer::CLIENT_IP_ADDRESS;
		}

		return $this;
	} // setClientIpAddress()

	/**
	 * Set the value of [session_type] column.
	 * 
	 * @param      string $v new value
	 * @return     Session The current object (for fluent API support)
	 */
	public function setSessionType($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->session_type !== $v) {
			$this->session_type = $v;
			$this->modifiedColumns[] = SessionPeer::SESSION_TYPE;
		}

		return $this;
	} // setSessionType()

	/**
	 * Set the value of [time] column.
	 * 
	 * @param      int $v new value
	 * @return     Session The current object (for fluent API support)
	 */
	public function setTime($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->time !== $v) {
			$this->time = $v;
			$this->modifiedColumns[] = SessionPeer::TIME;
		}

		return $this;
	} // setTime()

	/**
	 * Set the value of [user_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Session The current object (for fluent API support)
	 */
	public function setUserId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->user_id !== $v) {
			$this->user_id = $v;
			$this->modifiedColumns[] = SessionPeer::USER_ID;
		}

		if ($this->aUser !== null && $this->aUser->getId() !== $v) {
			$this->aUser = null;
		}

		return $this;
	} // setUserId()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->session_key = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			if ($row[$startcol + 2] !== null) {
				$this->data = fopen('php://memory', 'r+');
				fwrite($this->data, $row[$startcol + 2]);
				rewind($this->data);
			} else {
				$this->data = null;
			}
			$this->client_ip_address = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->session_type = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->time = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->user_id = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 7; // 7 = SessionPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Session object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

		if ($this->aUser !== null && $this->user_id !== $this->aUser->getId()) {
			$this->aUser = null;
		}
	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(SessionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = SessionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aUser = null;
			$this->collSingleSignOnKeys = null;

		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(SessionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = SessionQuery::create()
				->filterByPrimaryKey($this->getPrimaryKey());
			$ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseSession:delete:pre') as $callable)
			{
			  if (call_user_func($callable, $this, $con))
			  {
			    $con->commit();
			    return;
			  }
			}

			if ($ret) {
				$deleteQuery->delete($con);
				$this->postDelete($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseSession:delete:post') as $callable)
				{
				  call_user_func($callable, $this, $con);
				}

				$con->commit();
				$this->setDeleted(true);
			} else {
				$con->commit();
			}
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(SessionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseSession:save:pre') as $callable)
			{
			  if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
			  {
			  	$con->commit();
			    return $affectedRows;
			  }
			}

			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseSession:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

				SessionPeer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aUser !== null) {
				if ($this->aUser->isModified() || $this->aUser->isNew()) {
					$affectedRows += $this->aUser->save($con);
				}
				$this->setUser($this->aUser);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = SessionPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(SessionPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.SessionPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += SessionPeer::doUpdate($this, $con);
				}

				// Rewind the data LOB column, since PDO does not rewind after inserting value.
				if ($this->data !== null && is_resource($this->data)) {
					rewind($this->data);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collSingleSignOnKeys !== null) {
				foreach ($this->collSingleSignOnKeys as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aUser !== null) {
				if (!$this->aUser->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aUser->getValidationFailures());
				}
			}


			if (($retval = SessionPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collSingleSignOnKeys !== null) {
					foreach ($this->collSingleSignOnKeys as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}


			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SessionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getSessionKey();
				break;
			case 2:
				return $this->getData();
				break;
			case 3:
				return $this->getClientIpAddress();
				break;
			case 4:
				return $this->getSessionType();
				break;
			case 5:
				return $this->getTime();
				break;
			case 6:
				return $this->getUserId();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 *                    Defaults to BasePeer::TYPE_PHPNAME.
	 * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
	 * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
	 * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
	{
		if (isset($alreadyDumpedObjects['Session'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Session'][$this->getPrimaryKey()] = true;
		$keys = SessionPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getSessionKey(),
			$keys[2] => $this->getData(),
			$keys[3] => $this->getClientIpAddress(),
			$keys[4] => $this->getSessionType(),
			$keys[5] => $this->getTime(),
			$keys[6] => $this->getUserId(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aUser) {
				$result['User'] = $this->aUser->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->collSingleSignOnKeys) {
				$result['SingleSignOnKeys'] = $this->collSingleSignOnKeys->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
		}
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SessionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setSessionKey($value);
				break;
			case 2:
				$this->setData($value);
				break;
			case 3:
				$this->setClientIpAddress($value);
				break;
			case 4:
				$this->setSessionType($value);
				break;
			case 5:
				$this->setTime($value);
				break;
			case 6:
				$this->setUserId($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SessionPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setSessionKey($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setData($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setClientIpAddress($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setSessionType($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setTime($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setUserId($arr[$keys[6]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(SessionPeer::DATABASE_NAME);

		if ($this->isColumnModified(SessionPeer::ID)) $criteria->add(SessionPeer::ID, $this->id);
		if ($this->isColumnModified(SessionPeer::SESSION_KEY)) $criteria->add(SessionPeer::SESSION_KEY, $this->session_key);
		if ($this->isColumnModified(SessionPeer::DATA)) $criteria->add(SessionPeer::DATA, $this->data);
		if ($this->isColumnModified(SessionPeer::CLIENT_IP_ADDRESS)) $criteria->add(SessionPeer::CLIENT_IP_ADDRESS, $this->client_ip_address);
		if ($this->isColumnModified(SessionPeer::SESSION_TYPE)) $criteria->add(SessionPeer::SESSION_TYPE, $this->session_type);
		if ($this->isColumnModified(SessionPeer::TIME)) $criteria->add(SessionPeer::TIME, $this->time);
		if ($this->isColumnModified(SessionPeer::USER_ID)) $criteria->add(SessionPeer::USER_ID, $this->user_id);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(SessionPeer::DATABASE_NAME);
		$criteria->add(SessionPeer::ID, $this->id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	/**
	 * Generic method to set the primary key (id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getId();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Session (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setSessionKey($this->getSessionKey());
		$copyObj->setData($this->getData());
		$copyObj->setClientIpAddress($this->getClientIpAddress());
		$copyObj->setSessionType($this->getSessionType());
		$copyObj->setTime($this->getTime());
		$copyObj->setUserId($this->getUserId());

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getSingleSignOnKeys() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addSingleSignOnKey($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)

		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setId(NULL); // this is a auto-increment column, so set to default value
		}
	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     Session Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     SessionPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new SessionPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a User object.
	 *
	 * @param      User $v
	 * @return     Session The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setUser(User $v = null)
	{
		if ($v === null) {
			$this->setUserId(NULL);
		} else {
			$this->setUserId($v->getId());
		}

		$this->aUser = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the User object, it will not be re-added.
		if ($v !== null) {
			$v->addSession($this);
		}

		return $this;
	}


	/**
	 * Get the associated User object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     User The associated User object.
	 * @throws     PropelException
	 */
	public function getUser(PropelPDO $con = null)
	{
		if ($this->aUser === null && ($this->user_id !== null)) {
			$this->aUser = UserQuery::create()->findPk($this->user_id, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aUser->addSessions($this);
			 */
		}
		return $this->aUser;
	}


	/**
	 * Initializes a collection based on the name of a relation.
	 * Avoids crafting an 'init[$relationName]s' method name
	 * that wouldn't work when StandardEnglishPluralizer is used.
	 *
	 * @param      string $relationName The name of the relation to initialize
	 * @return     void
	 */
	public function initRelation($relationName)
	{
		if ('SingleSignOnKey' == $relationName) {
			return $this->initSingleSignOnKeys();
		}
	}

	/**
	 * Clears out the collSingleSignOnKeys collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addSingleSignOnKeys()
	 */
	public function clearSingleSignOnKeys()
	{
		$this->collSingleSignOnKeys = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collSingleSignOnKeys collection.
	 *
	 * By default this just sets the collSingleSignOnKeys collection to an empty array (like clearcollSingleSignOnKeys());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initSingleSignOnKeys($overrideExisting = true)
	{
		if (null !== $this->collSingleSignOnKeys && !$overrideExisting) {
			return;
		}
		$this->collSingleSignOnKeys = new PropelObjectCollection();
		$this->collSingleSignOnKeys->setModel('SingleSignOnKey');
	}

	/**
	 * Gets an array of SingleSignOnKey objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Session is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array SingleSignOnKey[] List of SingleSignOnKey objects
	 * @throws     PropelException
	 */
	public function getSingleSignOnKeys($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collSingleSignOnKeys || null !== $criteria) {
			if ($this->isNew() && null === $this->collSingleSignOnKeys) {
				// return empty collection
				$this->initSingleSignOnKeys();
			} else {
				$collSingleSignOnKeys = SingleSignOnKeyQuery::create(null, $criteria)
					->filterBySession($this)
					->find($con);
				if (null !== $criteria) {
					return $collSingleSignOnKeys;
				}
				$this->collSingleSignOnKeys = $collSingleSignOnKeys;
			}
		}
		return $this->collSingleSignOnKeys;
	}

	/**
	 * Returns the number of related SingleSignOnKey objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related SingleSignOnKey objects.
	 * @throws     PropelException
	 */
	public function countSingleSignOnKeys(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collSingleSignOnKeys || null !== $criteria) {
			if ($this->isNew() && null === $this->collSingleSignOnKeys) {
				return 0;
			} else {
				$query = SingleSignOnKeyQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterBySession($this)
					->count($con);
			}
		} else {
			return count($this->collSingleSignOnKeys);
		}
	}

	/**
	 * Method called to associate a SingleSignOnKey object to this object
	 * through the SingleSignOnKey foreign key attribute.
	 *
	 * @param      SingleSignOnKey $l SingleSignOnKey
	 * @return     Session The current object (for fluent API support)
	 */
	public function addSingleSignOnKey(SingleSignOnKey $l)
	{
		if ($this->collSingleSignOnKeys === null) {
			$this->initSingleSignOnKeys();
		}
		if (!$this->collSingleSignOnKeys->contains($l)) { // only add it if the **same** object is not already associated
			$this->collSingleSignOnKeys[]= $l;
			$l->setSession($this);
		}

		return $this;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Session is new, it will return
	 * an empty collection; or if this Session has previously
	 * been saved, it will retrieve related SingleSignOnKeys from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Session.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array SingleSignOnKey[] List of SingleSignOnKey objects
	 */
	public function getSingleSignOnKeysJoinUser($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = SingleSignOnKeyQuery::create(null, $criteria);
		$query->joinWith('User', $join_behavior);

		return $this->getSingleSignOnKeys($query, $con);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->session_key = null;
		$this->data = null;
		$this->client_ip_address = null;
		$this->session_type = null;
		$this->time = null;
		$this->user_id = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
		$this->resetModified();
		$this->setNew(true);
		$this->setDeleted(false);
	}

	/**
	 * Resets all references to other model objects or collections of model objects.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect
	 * objects with circular references (even in PHP 5.3). This is currently necessary
	 * when using Propel in certain daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all referrer objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
			if ($this->collSingleSignOnKeys) {
				foreach ($this->collSingleSignOnKeys as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		if ($this->collSingleSignOnKeys instanceof PropelCollection) {
			$this->collSingleSignOnKeys->clearIterator();
		}
		$this->collSingleSignOnKeys = null;
		$this->aUser = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(SessionPeer::DEFAULT_STRING_FORMAT);
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseSession:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}

		return parent::__call($name, $params);
	}

} // BaseSession
