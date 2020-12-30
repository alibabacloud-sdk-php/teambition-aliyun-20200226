<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models;

use AlibabaCloud\Tea\Model;

class CreateProjectTaskRequest extends Model
{
    /**
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $executorId;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $dueDate;

    /**
     * @var string
     */
    public $scenarioFieldConfigId;

    /**
     * @var string
     */
    public $taskFlowStatusId;

    /**
     * @var string
     */
    public $note;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $visible;

    /**
     * @var string
     */
    public $parentTaskId;

    /**
     * @var string
     */
    public $sprintId;

    /**
     * @var string
     */
    public $taskListId;
    protected $_name = [
        'orgId'                 => 'OrgId',
        'content'               => 'Content',
        'projectId'             => 'ProjectId',
        'executorId'            => 'ExecutorId',
        'startDate'             => 'StartDate',
        'dueDate'               => 'DueDate',
        'scenarioFieldConfigId' => 'ScenarioFieldConfigId',
        'taskFlowStatusId'      => 'TaskFlowStatusId',
        'note'                  => 'Note',
        'priority'              => 'Priority',
        'visible'               => 'Visible',
        'parentTaskId'          => 'ParentTaskId',
        'sprintId'              => 'SprintId',
        'taskListId'            => 'TaskListId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->executorId) {
            $res['ExecutorId'] = $this->executorId;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->dueDate) {
            $res['DueDate'] = $this->dueDate;
        }
        if (null !== $this->scenarioFieldConfigId) {
            $res['ScenarioFieldConfigId'] = $this->scenarioFieldConfigId;
        }
        if (null !== $this->taskFlowStatusId) {
            $res['TaskFlowStatusId'] = $this->taskFlowStatusId;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->visible) {
            $res['Visible'] = $this->visible;
        }
        if (null !== $this->parentTaskId) {
            $res['ParentTaskId'] = $this->parentTaskId;
        }
        if (null !== $this->sprintId) {
            $res['SprintId'] = $this->sprintId;
        }
        if (null !== $this->taskListId) {
            $res['TaskListId'] = $this->taskListId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProjectTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ExecutorId'])) {
            $model->executorId = $map['ExecutorId'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['DueDate'])) {
            $model->dueDate = $map['DueDate'];
        }
        if (isset($map['ScenarioFieldConfigId'])) {
            $model->scenarioFieldConfigId = $map['ScenarioFieldConfigId'];
        }
        if (isset($map['TaskFlowStatusId'])) {
            $model->taskFlowStatusId = $map['TaskFlowStatusId'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Visible'])) {
            $model->visible = $map['Visible'];
        }
        if (isset($map['ParentTaskId'])) {
            $model->parentTaskId = $map['ParentTaskId'];
        }
        if (isset($map['SprintId'])) {
            $model->sprintId = $map['SprintId'];
        }
        if (isset($map['TaskListId'])) {
            $model->taskListId = $map['TaskListId'];
        }

        return $model;
    }
}
