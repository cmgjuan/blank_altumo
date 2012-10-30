<?php


/**
 * Base class that represents a query for the 'system_event' table.
 *
 * 
 *
 * @method     SystemEventQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     SystemEventQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     SystemEventQuery orderByUniqueKey($order = Criteria::ASC) Order by the unique_key column
 * @method     SystemEventQuery orderBySlug($order = Criteria::ASC) Order by the slug column
 * @method     SystemEventQuery orderByEnabled($order = Criteria::ASC) Order by the enabled column
 * @method     SystemEventQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     SystemEventQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     SystemEventQuery groupById() Group by the id column
 * @method     SystemEventQuery groupByName() Group by the name column
 * @method     SystemEventQuery groupByUniqueKey() Group by the unique_key column
 * @method     SystemEventQuery groupBySlug() Group by the slug column
 * @method     SystemEventQuery groupByEnabled() Group by the enabled column
 * @method     SystemEventQuery groupByCreatedAt() Group by the created_at column
 * @method     SystemEventQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     SystemEventQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SystemEventQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SystemEventQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     SystemEventQuery leftJoinSystemEventSubscription($relationAlias = null) Adds a LEFT JOIN clause to the query using the SystemEventSubscription relation
 * @method     SystemEventQuery rightJoinSystemEventSubscription($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SystemEventSubscription relation
 * @method     SystemEventQuery innerJoinSystemEventSubscription($relationAlias = null) Adds a INNER JOIN clause to the query using the SystemEventSubscription relation
 *
 * @method     SystemEventQuery leftJoinSystemEventInstance($relationAlias = null) Adds a LEFT JOIN clause to the query using the SystemEventInstance relation
 * @method     SystemEventQuery rightJoinSystemEventInstance($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SystemEventInstance relation
 * @method     SystemEventQuery innerJoinSystemEventInstance($relationAlias = null) Adds a INNER JOIN clause to the query using the SystemEventInstance relation
 *
 * @method     SystemEvent findOne(PropelPDO $con = null) Return the first SystemEvent matching the query
 * @method     SystemEvent findOneOrCreate(PropelPDO $con = null) Return the first SystemEvent matching the query, or a new SystemEvent object populated from the query conditions when no match is found
 *
 * @method     SystemEvent findOneById(int $id) Return the first SystemEvent filtered by the id column
 * @method     SystemEvent findOneByName(string $name) Return the first SystemEvent filtered by the name column
 * @method     SystemEvent findOneByUniqueKey(string $unique_key) Return the first SystemEvent filtered by the unique_key column
 * @method     SystemEvent findOneBySlug(string $slug) Return the first SystemEvent filtered by the slug column
 * @method     SystemEvent findOneByEnabled(boolean $enabled) Return the first SystemEvent filtered by the enabled column
 * @method     SystemEvent findOneByCreatedAt(string $created_at) Return the first SystemEvent filtered by the created_at column
 * @method     SystemEvent findOneByUpdatedAt(string $updated_at) Return the first SystemEvent filtered by the updated_at column
 *
 * @method     array findById(int $id) Return SystemEvent objects filtered by the id column
 * @method     array findByName(string $name) Return SystemEvent objects filtered by the name column
 * @method     array findByUniqueKey(string $unique_key) Return SystemEvent objects filtered by the unique_key column
 * @method     array findBySlug(string $slug) Return SystemEvent objects filtered by the slug column
 * @method     array findByEnabled(boolean $enabled) Return SystemEvent objects filtered by the enabled column
 * @method     array findByCreatedAt(string $created_at) Return SystemEvent objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return SystemEvent objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseSystemEventQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseSystemEventQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'SystemEvent', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SystemEventQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    SystemEventQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SystemEventQuery) {
            return $criteria;
        }
        $query = new SystemEventQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }
        return $query;
    }

    /**
     * Find object by primary key
     * Use instance pooling to avoid a database query if the object exists
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    SystemEvent|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = SystemEventPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
            // the object is alredy in the instance pool
            return $obj;
        } else {
            // the object has not been requested yet, or the formatter is not an object formatter
            $criteria = $this->isKeepQuery() ? clone $this : $this;
            $stmt = $criteria
                ->filterByPrimaryKey($key)
                ->getSelectStatement($con);
            return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
        }
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        return $this
            ->filterByPrimaryKeys($keys)
            ->find($con);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return    SystemEventQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(SystemEventPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    SystemEventQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(SystemEventPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SystemEventQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(SystemEventPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SystemEventQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $name)) {
                $name = str_replace('*', '%', $name);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(SystemEventPeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the unique_key column
     *
     * Example usage:
     * <code>
     * $query->filterByUniqueKey('fooValue');   // WHERE unique_key = 'fooValue'
     * $query->filterByUniqueKey('%fooValue%'); // WHERE unique_key LIKE '%fooValue%'
     * </code>
     *
     * @param     string $uniqueKey The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SystemEventQuery The current query, for fluid interface
     */
    public function filterByUniqueKey($uniqueKey = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($uniqueKey)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $uniqueKey)) {
                $uniqueKey = str_replace('*', '%', $uniqueKey);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(SystemEventPeer::UNIQUE_KEY, $uniqueKey, $comparison);
    }

    /**
     * Filter the query on the slug column
     *
     * Example usage:
     * <code>
     * $query->filterBySlug('fooValue');   // WHERE slug = 'fooValue'
     * $query->filterBySlug('%fooValue%'); // WHERE slug LIKE '%fooValue%'
     * </code>
     *
     * @param     string $slug The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SystemEventQuery The current query, for fluid interface
     */
    public function filterBySlug($slug = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($slug)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $slug)) {
                $slug = str_replace('*', '%', $slug);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(SystemEventPeer::SLUG, $slug, $comparison);
    }

    /**
     * Filter the query on the enabled column
     *
     * Example usage:
     * <code>
     * $query->filterByEnabled(true); // WHERE enabled = true
     * $query->filterByEnabled('yes'); // WHERE enabled = true
     * </code>
     *
     * @param     boolean|string $enabled The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SystemEventQuery The current query, for fluid interface
     */
    public function filterByEnabled($enabled = null, $comparison = null)
    {
        if (is_string($enabled)) {
            $enabled = in_array(strtolower($enabled), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(SystemEventPeer::ENABLED, $enabled, $comparison);
    }

    /**
     * Filter the query on the created_at column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt(array('max' => 'yesterday')); // WHERE created_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $createdAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SystemEventQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(SystemEventPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(SystemEventPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(SystemEventPeer::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query on the updated_at column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdatedAt('2011-03-14'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt('now'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt(array('max' => 'yesterday')); // WHERE updated_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $updatedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SystemEventQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(SystemEventPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(SystemEventPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(SystemEventPeer::UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query by a related SystemEventSubscription object
     *
     * @param     SystemEventSubscription $systemEventSubscription  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SystemEventQuery The current query, for fluid interface
     */
    public function filterBySystemEventSubscription($systemEventSubscription, $comparison = null)
    {
        if ($systemEventSubscription instanceof SystemEventSubscription) {
            return $this
                ->addUsingAlias(SystemEventPeer::ID, $systemEventSubscription->getSystemEventId(), $comparison);
        } elseif ($systemEventSubscription instanceof PropelCollection) {
            return $this
                ->useSystemEventSubscriptionQuery()
                ->filterByPrimaryKeys($systemEventSubscription->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySystemEventSubscription() only accepts arguments of type SystemEventSubscription or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SystemEventSubscription relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    SystemEventQuery The current query, for fluid interface
     */
    public function joinSystemEventSubscription($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SystemEventSubscription');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'SystemEventSubscription');
        }

        return $this;
    }

    /**
     * Use the SystemEventSubscription relation SystemEventSubscription object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    SystemEventSubscriptionQuery A secondary query class using the current class as primary query
     */
    public function useSystemEventSubscriptionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSystemEventSubscription($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SystemEventSubscription', 'SystemEventSubscriptionQuery');
    }

    /**
     * Filter the query by a related SystemEventInstance object
     *
     * @param     SystemEventInstance $systemEventInstance  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SystemEventQuery The current query, for fluid interface
     */
    public function filterBySystemEventInstance($systemEventInstance, $comparison = null)
    {
        if ($systemEventInstance instanceof SystemEventInstance) {
            return $this
                ->addUsingAlias(SystemEventPeer::ID, $systemEventInstance->getSystemEventId(), $comparison);
        } elseif ($systemEventInstance instanceof PropelCollection) {
            return $this
                ->useSystemEventInstanceQuery()
                ->filterByPrimaryKeys($systemEventInstance->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySystemEventInstance() only accepts arguments of type SystemEventInstance or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SystemEventInstance relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    SystemEventQuery The current query, for fluid interface
     */
    public function joinSystemEventInstance($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SystemEventInstance');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'SystemEventInstance');
        }

        return $this;
    }

    /**
     * Use the SystemEventInstance relation SystemEventInstance object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    SystemEventInstanceQuery A secondary query class using the current class as primary query
     */
    public function useSystemEventInstanceQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSystemEventInstance($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SystemEventInstance', 'SystemEventInstanceQuery');
    }

    /**
     * Exclude object from result
     *
     * @param     SystemEvent $systemEvent Object to remove from the list of results
     *
     * @return    SystemEventQuery The current query, for fluid interface
     */
    public function prune($systemEvent = null)
    {
        if ($systemEvent) {
            $this->addUsingAlias(SystemEventPeer::ID, $systemEvent->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseSystemEventQuery