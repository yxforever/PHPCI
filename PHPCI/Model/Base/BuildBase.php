<?php

/**
 * Build base model for table: build
 */

namespace PHPCI\Model\Base;

use b8\Model;

/**
 * Build Base Model
 */
class BuildBase extends Model
{
    /**
    * @var array
    */
    public static $sleepable = array();

    /**
    * @var string
    */
    protected $tableName = 'build';

    /**
    * @var string
    */
    protected $modelName = 'Build';

    /**
    * @var array
    */
    protected $data = array(
        'id' => null,
        'project_id' => null,
        'commit_id' => null,
        'status' => null,
        'log' => null,
        'branch' => null,
        'created' => null,
        'started' => null,
        'finished' => null,
        'plugins' => null,
        'committer_email' => null,
     );

    /**
    * @var array
    */
    protected $getters = array(
        'id' => 'getId',
        'project_id' => 'getProjectId',
        'commit_id' => 'getCommitId',
        'status' => 'getStatus',
        'log' => 'getLog',
        'branch' => 'getBranch',
        'created' => 'getCreated',
        'started' => 'getStarted',
        'finished' => 'getFinished',
        'plugins' => 'getPlugins',
        'committer_email' => 'getCommitterEmail',
        'Project' => 'getProject',
     );

    /**
    * @var array
    */
    protected $setters = array(
        'id' => 'setId',
        'project_id' => 'setProjectId',
        'commit_id' => 'setCommitId',
        'status' => 'setStatus',
        'log' => 'setLog',
        'branch' => 'setBranch',
        'created' => 'setCreated',
        'started' => 'setStarted',
        'finished' => 'setFinished',
        'plugins' => 'setPlugins',
        'committer_email' => 'setCommitterEmail',
        'Project' => 'setProject',
     );

    /**
    * @var array
    */
    public $columns = array(
        'id' => array(
            'type' => 'int',
            'length' => '11',
            'primary_key' => true,
            'auto_increment' => true,
            ),
        'project_id' => array(
            'type' => 'int',
            'length' => '11',
            ),
        'commit_id' => array(
            'type' => 'varchar',
            'length' => '50',
            ),
        'status' => array(
            'type' => 'tinyint',
            'length' => '4',
            ),
        'log' => array(
            'type' => 'longtext',
            'length' => '',
            'nullable' => true,
            ),
        'branch' => array(
            'type' => 'varchar',
            'length' => '50',
            ),
        'created' => array(
            'type' => 'datetime',
            'length' => '',
            'nullable' => true,
            ),
        'started' => array(
            'type' => 'datetime',
            'length' => '',
            'nullable' => true,
            ),
        'finished' => array(
            'type' => 'datetime',
            'length' => '',
            'nullable' => true,
            ),
        'plugins' => array(
            'type' => 'text',
            'length' => '',
            'nullable' => true,
            ),
        'committer_email' => array(
            'type' => 'varchar',
            'length' => '512',
            'nullable' => true,
            ),
     );

    /**
    * @var array
    */
    public $indexes = array(
            'PRIMARY' => array('unique' => true, 'columns' => 'id'),
            'project_id' => array('columns' => 'project_id'),
            'idx_status' => array('columns' => 'status'),
     );

    /**
    * @var array
    */
    public $foreignKeys = array(
            'build_ibfk_1' => array(
                'local_col' => 'project_id',
                'update' => 'CASCADE',
                'delete' => 'CASCADE',
                'table' => 'project',
                'col' => 'id'
                ),
     );


    /**
    * Get the value of Id / id.
    *
    * @return int
    */
    public function getId()
    {
        $rtn    = $this->data['id'];

        
        return $rtn;
    }

    /**
    * Get the value of ProjectId / project_id.
    *
    * @return int
    */
    public function getProjectId()
    {
        $rtn    = $this->data['project_id'];

        
        return $rtn;
    }

    /**
    * Get the value of CommitId / commit_id.
    *
    * @return string
    */
    public function getCommitId()
    {
        $rtn    = $this->data['commit_id'];

        
        return $rtn;
    }

    /**
    * Get the value of Status / status.
    *
    * @return int
    */
    public function getStatus()
    {
        $rtn    = $this->data['status'];

        
        return $rtn;
    }

    /**
    * Get the value of Log / log.
    *
    * @return string
    */
    public function getLog()
    {
        $rtn    = $this->data['log'];

        
        return $rtn;
    }

    /**
    * Get the value of Branch / branch.
    *
    * @return string
    */
    public function getBranch()
    {
        $rtn    = $this->data['branch'];

        
        return $rtn;
    }

    /**
    * Get the value of Created / created.
    *
    * @return \DateTime
    */
    public function getCreated()
    {
        $rtn    = $this->data['created'];

        
        if (!empty($rtn)) {
            $rtn    = new \DateTime($rtn);
        }

        
        return $rtn;
    }

    /**
    * Get the value of Started / started.
    *
    * @return \DateTime
    */
    public function getStarted()
    {
        $rtn    = $this->data['started'];

        
        if (!empty($rtn)) {
            $rtn    = new \DateTime($rtn);
        }

        
        return $rtn;
    }

    /**
    * Get the value of Finished / finished.
    *
    * @return \DateTime
    */
    public function getFinished()
    {
        $rtn    = $this->data['finished'];

        
        if (!empty($rtn)) {
            $rtn    = new \DateTime($rtn);
        }

        
        return $rtn;
    }

    /**
    * Get the value of Plugins / plugins.
    *
    * @return string
    */
    public function getPlugins()
    {
        $rtn    = $this->data['plugins'];

        
        return $rtn;
    }

    /**
    * Get the value of CommitterEmail / committer_email.
    *
    * @return string
    */
    public function getCommitterEmail()
    {
        $rtn    = $this->data['committer_email'];

        
        return $rtn;
    }

    /**
    * Set the value of Id / id.
    *
    * Must not be null.
    * @param $value int
    */
    public function setId($value)
    {
        $this->_validateNotNull('Id', $value);
        $this->_validateInt('Id', $value);
        if ($this->data['id'] == $value) {
            return;
        }

        $this->data['id'] = $value;

        $this->_setModified('id');
    }

    /**
    * Set the value of ProjectId / project_id.
    *
    * Must not be null.
    * @param $value int
    */
    public function setProjectId($value)
    {
        $this->_validateNotNull('ProjectId', $value);
        $this->_validateInt('ProjectId', $value);
        if ($this->data['project_id'] == $value) {
            return;
        }

        $this->data['project_id'] = $value;

        $this->_setModified('project_id');
    }

    /**
    * Set the value of CommitId / commit_id.
    *
    * Must not be null.
    * @param $value string
    */
    public function setCommitId($value)
    {
        $this->_validateNotNull('CommitId', $value);
        $this->_validateString('CommitId', $value);
        if ($this->data['commit_id'] == $value) {
            return;
        }

        $this->data['commit_id'] = $value;

        $this->_setModified('commit_id');
    }

    /**
    * Set the value of Status / status.
    *
    * Must not be null.
    * @param $value int
    */
    public function setStatus($value)
    {
        $this->_validateNotNull('Status', $value);
        $this->_validateInt('Status', $value);
        if ($this->data['status'] == $value) {
            return;
        }

        $this->data['status'] = $value;

        $this->_setModified('status');
    }

    /**
    * Set the value of Log / log.
    *
    * @param $value string
    */
    public function setLog($value)
    {

        $this->_validateString('Log', $value);
        if ($this->data['log'] == $value) {
            return;
        }

        $this->data['log'] = $value;

        $this->_setModified('log');
    }

    /**
    * Set the value of Branch / branch.
    *
    * Must not be null.
    * @param $value string
    */
    public function setBranch($value)
    {
        $this->_validateNotNull('Branch', $value);
        $this->_validateString('Branch', $value);
        if ($this->data['branch'] == $value) {
            return;
        }

        $this->data['branch'] = $value;

        $this->_setModified('branch');
    }

    /**
    * Set the value of Created / created.
    *
    * @param $value \DateTime
    */
    public function setCreated($value)
    {

        $this->_validateDate('Created', $value);
        if ($this->data['created'] == $value) {
            return;
        }

        $this->data['created'] = $value;

        $this->_setModified('created');
    }

    /**
    * Set the value of Started / started.
    *
    * @param $value \DateTime
    */
    public function setStarted($value)
    {

        $this->_validateDate('Started', $value);
        if ($this->data['started'] == $value) {
            return;
        }

        $this->data['started'] = $value;

        $this->_setModified('started');
    }

    /**
    * Set the value of Finished / finished.
    *
    * @param $value \DateTime
    */
    public function setFinished($value)
    {

        $this->_validateDate('Finished', $value);
        if ($this->data['finished'] == $value) {
            return;
        }

        $this->data['finished'] = $value;

        $this->_setModified('finished');
    }

    /**
    * Set the value of Plugins / plugins.
    *
    * @param $value string
    */
    public function setPlugins($value)
    {

        $this->_validateString('Plugins', $value);
        if ($this->data['plugins'] == $value) {
            return;
        }

        $this->data['plugins'] = $value;

        $this->_setModified('plugins');
    }

    /**
    * Set the value of CommitterEmail / committer_email.
    *
    * @param $value string
    */
    public function setCommitterEmail($value)
    {

        $this->_validateString('CommitterEmail', $value);
        if ($this->data['committer_email'] == $value) {
            return;
        }

        $this->data['committer_email'] = $value;

        $this->_setModified('committer_email');
    }

    /**
     * Get the Project model for this Build by Id.
     *
     * @uses \PHPCI\Store\ProjectStore::getById()
     * @uses \PHPCI\Model\Project
     * @return \PHPCI\Model\Project
     */
    public function getProject()
    {
        $key = $this->getProjectId();

        if (empty($key)) {
            return null;
        }

        $cacheKey   = 'Cache.Project.' . $key;
        $rtn        = $this->cache->get($cacheKey, null);

        if (empty($rtn)) {
            $rtn    = \b8\Store\Factory::getStore('Project')->getById($key);
            $this->cache->set($cacheKey, $rtn);
        }

        return $rtn;
    }

    /**
    * Set Project - Accepts an ID, an array representing a Project or a Project model.
    *
    * @param $value mixed
    */
    public function setProject($value)
    {
        // Is this an instance of Project?
        if ($value instanceof \PHPCI\Model\Project) {
            return $this->setProjectObject($value);
        }

        // Is this an array representing a Project item?
        if (is_array($value) && !empty($value['id'])) {
            return $this->setProjectId($value['id']);
        }

        // Is this a scalar value representing the ID of this foreign key?
        return $this->setProjectId($value);
    }

    /**
    * Set Project - Accepts a Project model.
    * 
    * @param $value \PHPCI\Model\Project
    */
    public function setProjectObject(\PHPCI\Model\Project $value)
    {
        return $this->setProjectId($value->getId());
    }
}
