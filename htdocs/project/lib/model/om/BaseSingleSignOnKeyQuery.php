<?php


/**
 * Base class that represents a query for the 'single_sign_on_key' table.
 *
 * 
 *
 * @method     SingleSignOnKeyQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     SingleSignOnKeyQuery orderBySecret($order = Criteria::ASC) Order by the secret column
 * @method     SingleSignOnKeyQuery orderByUsed($order = Criteria::ASC) Order by the used column
 * @method     SingleSignOnKeyQuery orderBySessionId($order = Criteria::ASC) Order by the session_id column
 * @method     SingleSignOnKeyQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     SingleSignOnKeyQuery orderByValidForMinutes($order = Criteria::ASC) Order by the valid_for_minutes column
 * @method     SingleSignOnKeyQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     SingleSignOnKeyQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     SingleSignOnKeyQuery groupById() Group by the id column
 * @method     SingleSignOnKeyQuery groupBySecret() Group by the secret column
 * @method     SingleSignOnKeyQuery groupByUsed() Group by the used column
 * @method     SingleSignOnKeyQuery groupBySessionId() Group by the session_id column
 * @method     SingleSignOnKeyQuery groupByUserId() Group by the user_id column
 * @method     SingleSignOnKeyQuery groupByValidForMinutes() Group by the valid_for_minutes column
 * @method     SingleSignOnKeyQuery groupByCreatedAt() Group by the created_at column
 * @method     SingleSignOnKeyQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     SingleSignOnKeyQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SingleSignOnKeyQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SingleSignOnKeyQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     SingleSignOnKeyQuery leftJoinSession($relationAlias = null) Adds a LEFT JOIN clause to the query using the Session relation
 * @method     SingleSignOnKeyQuery rightJoinSession($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Session relation
 * @method     SingleSignOnKeyQuery innerJoinSession($relationAlias = null) Adds a INNER JOIN clause to the query using the Session relation
 *
 * @method     SingleSignOnKeyQuery leftJoinUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the User relation
 * @method     SingleSignOnKeyQuery rightJoinUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the User relation
 * @method     SingleSignOnKeyQuery innerJoinUser($relationAlias = null) Adds a INNER JOIN clause to the query using the User relation
 *
 * @method     SingleSignOnKey findOne(PropelPDO $con = null) Return the first SingleSignOnKey matching the query
 * @method     SingleSignOnKey findOneOrCreate(PropelPDO $con = null) Return the first SingleSignOnKey matching the query, or a new SingleSignOnKey object populated from the query conditions when no match is found
 *
 * @method     SingleSignOnKey findOneById(int $id) Return the first SingleSignOnKey filtered by the id column
 * @method     SingleSignOnKey findOneBySecret(string $secret) Return the first SingleSignOnKey filtered by the secret column
 * @method     SingleSignOnKey findOneByUsed(boolean $used) Return the first SingleSignOnKey filtered by the used column
 * @method     SingleSignOnKey findOneBySessionId(int $session_id) Return the first SingleSignOnKey filtered by the session_id column
 * @method     SingleSignOnKey findOneByUserId(int $user_id) Return the first SingleSignOnKey filtered by the user_id column
 * @method     SingleSignOnKey findOneByValidForMinutes(int $valid_for_minutes) Return the first SingleSignOnKey filtered by the valid_for_minutes column
 * @method     SingleSignOnKey findOneByCreatedAt(string $created_at) Return the first SingleSignOnKey filtered by the created_at column
 * @method     SingleSignOnKey findOneByUpdatedAt(string $updated_at) Return the first SingleSignOnKey filtered by the updated_at column
 *
 * @method     array findById(int $id) Return SingleSignOnKey objects filtered by the id column
 * @method     array findBySecret(string $secret) Return SingleSignOnKey objects filtered by the secret column
 * @method     array findByUsed(boolean $used) Return SingleSignOnKey objects filtered by the used column
 * @method     array findBySessionId(int $session_id) Return SingleSignOnKey objects filtered by the session_id column
 * @method     array findByUserId(int $user_id) Return SingleSignOnKey objects filtered by the user_id column
 * @method     array findByValidForMinutes(int $valid_for_minutes) Return SingleSignOnKey objects filtered by the valid_for_minutes column
 * @method     array findByCreatedAt(string $created_at) Return SingleSignOnKey objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return SingleSignOnKey objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseSingleSignOnKeyQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseSingleSignOnKeyQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'SingleSignOnKey', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SingleSignOnKeyQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    SingleSignOnKeyQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SingleSignOnKeyQuery) {
            return $criteria;
        }
        $query = new SingleSignOnKeyQuery();
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
     * @return    SingleSignOnKey|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = SingleSignOnKeyPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    SingleSignOnKeyQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(SingleSignOnKeyPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    SingleSignOnKeyQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(SingleSignOnKeyPeer::ID, $keys, Criteria::IN);
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
     * @return    SingleSignOnKeyQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(SingleSignOnKeyPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the secret column
     *
     * Example usage:
     * <code>
     * $query->filterBySecret('fooValue');   // WHERE secret = 'fooValue'
     * $query->filterBySecret('%fooValue%'); // WHERE secret LIKE '%fooValue%'
     * </code>
     *
     * @param     string $secret The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SingleSignOnKeyQuery The current query, for fluid interface
     */
    public function filterBySecret($secret = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($secret)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $secret)) {
                $secret = str_replace('*', '%', $secret);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(SingleSignOnKeyPeer::SECRET, $secret, $comparison);
    }

    /**
     * Filter the query on the used column
     *
     * Example usage:
     * <code>
     * $query->filterByUsed(true); // WHERE used = true
     * $query->filterByUsed('yes'); // WHERE used = true
     * </code>
     *
     * @param     boolean|string $used The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SingleSignOnKeyQuery The current query, for fluid interface
     */
    public function filterByUsed($used = null, $comparison = null)
    {
        if (is_string($used)) {
            $used = in_array(strtolower($used), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(SingleSignOnKeyPeer::USED, $used, $comparison);
    }

    /**
     * Filter the query on the session_id column
     *
     * Example usage:
     * <code>
     * $query->filterBySessionId(1234); // WHERE session_id = 1234
     * $query->filterBySessionId(array(12, 34)); // WHERE session_id IN (12, 34)
     * $query->filterBySessionId(array('min' => 12)); // WHERE session_id > 12
     * </code>
     *
     * @see       filterBySession()
     *
     * @param     mixed $sessionId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SingleSignOnKeyQuery The current query, for fluid interface
     */
    public function filterBySessionId($sessionId = null, $comparison = null)
    {
        if (is_array($sessionId)) {
            $useMinMax = false;
            if (isset($sessionId['min'])) {
                $this->addUsingAlias(SingleSignOnKeyPeer::SESSION_ID, $sessionId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sessionId['max'])) {
                $this->addUsingAlias(SingleSignOnKeyPeer::SESSION_ID, $sessionId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(SingleSignOnKeyPeer::SESSION_ID, $sessionId, $comparison);
    }

    /**
     * Filter the query on the user_id column
     *
     * Example usage:
     * <code>
     * $query->filterByUserId(1234); // WHERE user_id = 1234
     * $query->filterByUserId(array(12, 34)); // WHERE user_id IN (12, 34)
     * $query->filterByUserId(array('min' => 12)); // WHERE user_id > 12
     * </code>
     *
     * @see       filterByUser()
     *
     * @param     mixed $userId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SingleSignOnKeyQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(SingleSignOnKeyPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(SingleSignOnKeyPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(SingleSignOnKeyPeer::USER_ID, $userId, $comparison);
    }

    /**
     * Filter the query on the valid_for_minutes column
     *
     * Example usage:
     * <code>
     * $query->filterByValidForMinutes(1234); // WHERE valid_for_minutes = 1234
     * $query->filterByValidForMinutes(array(12, 34)); // WHERE valid_for_minutes IN (12, 34)
     * $query->filterByValidForMinutes(array('min' => 12)); // WHERE valid_for_minutes > 12
     * </code>
     *
     * @param     mixed $validForMinutes The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SingleSignOnKeyQuery The current query, for fluid interface
     */
    public function filterByValidForMinutes($validForMinutes = null, $comparison = null)
    {
        if (is_array($validForMinutes)) {
            $useMinMax = false;
            if (isset($validForMinutes['min'])) {
                $this->addUsingAlias(SingleSignOnKeyPeer::VALID_FOR_MINUTES, $validForMinutes['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($validForMinutes['max'])) {
                $this->addUsingAlias(SingleSignOnKeyPeer::VALID_FOR_MINUTES, $validForMinutes['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(SingleSignOnKeyPeer::VALID_FOR_MINUTES, $validForMinutes, $comparison);
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
     * @return    SingleSignOnKeyQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(SingleSignOnKeyPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(SingleSignOnKeyPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(SingleSignOnKeyPeer::CREATED_AT, $createdAt, $comparison);
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
     * @return    SingleSignOnKeyQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(SingleSignOnKeyPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(SingleSignOnKeyPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(SingleSignOnKeyPeer::UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query by a related Session object
     *
     * @param     Session|PropelCollection $session The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SingleSignOnKeyQuery The current query, for fluid interface
     */
    public function filterBySession($session, $comparison = null)
    {
        if ($session instanceof Session) {
            return $this
                ->addUsingAlias(SingleSignOnKeyPeer::SESSION_ID, $session->getId(), $comparison);
        } elseif ($session instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(SingleSignOnKeyPeer::SESSION_ID, $session->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterBySession() only accepts arguments of type Session or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Session relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    SingleSignOnKeyQuery The current query, for fluid interface
     */
    public function joinSession($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Session');

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
            $this->addJoinObject($join, 'Session');
        }

        return $this;
    }

    /**
     * Use the Session relation Session object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    SessionQuery A secondary query class using the current class as primary query
     */
    public function useSessionQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSession($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Session', 'SessionQuery');
    }

    /**
     * Filter the query by a related User object
     *
     * @param     User|PropelCollection $user The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    SingleSignOnKeyQuery The current query, for fluid interface
     */
    public function filterByUser($user, $comparison = null)
    {
        if ($user instanceof User) {
            return $this
                ->addUsingAlias(SingleSignOnKeyPeer::USER_ID, $user->getId(), $comparison);
        } elseif ($user instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(SingleSignOnKeyPeer::USER_ID, $user->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByUser() only accepts arguments of type User or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the User relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    SingleSignOnKeyQuery The current query, for fluid interface
     */
    public function joinUser($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('User');

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
            $this->addJoinObject($join, 'User');
        }

        return $this;
    }

    /**
     * Use the User relation User object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    UserQuery A secondary query class using the current class as primary query
     */
    public function useUserQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUser($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'User', 'UserQuery');
    }

    /**
     * Exclude object from result
     *
     * @param     SingleSignOnKey $singleSignOnKey Object to remove from the list of results
     *
     * @return    SingleSignOnKeyQuery The current query, for fluid interface
     */
    public function prune($singleSignOnKey = null)
    {
        if ($singleSignOnKey) {
            $this->addUsingAlias(SingleSignOnKeyPeer::ID, $singleSignOnKey->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseSingleSignOnKeyQuery