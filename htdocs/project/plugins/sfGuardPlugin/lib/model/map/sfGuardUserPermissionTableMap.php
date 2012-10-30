<?php



/**
 * This class defines the structure of the 'sf_guard_user_permission' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.plugins.sfGuardPlugin.lib.model.map
 */
class sfGuardUserPermissionTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'plugins.sfGuardPlugin.lib.model.map.sfGuardUserPermissionTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
		// attributes
		$this->setName('sf_guard_user_permission');
		$this->setPhpName('sfGuardUserPermission');
		$this->setClassname('sfGuardUserPermission');
		$this->setPackage('plugins.sfGuardPlugin.lib.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addForeignPrimaryKey('USER_ID', 'UserId', 'INTEGER' , 'sf_guard_user', 'ID', true, null, null);
		$this->addForeignPrimaryKey('PERMISSION_ID', 'PermissionId', 'INTEGER' , 'sf_guard_permission', 'ID', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('sfGuardUser', 'sfGuardUser', RelationMap::MANY_TO_ONE, array('user_id' => 'id', ), 'CASCADE', null);
		$this->addRelation('sfGuardPermission', 'sfGuardPermission', RelationMap::MANY_TO_ONE, array('permission_id' => 'id', ), 'CASCADE', null);
	} // buildRelations()

	/**
	 *
	 * Gets the list of behaviors registered for this table
	 *
	 * @return array Associative array (name => parameters) of behaviors
	 */
	public function getBehaviors()
	{
		return array(
			'symfony' => array('form' => 'true', 'filter' => 'true', ),
			'symfony_behaviors' => array(),
		);
	} // getBehaviors()

} // sfGuardUserPermissionTableMap
